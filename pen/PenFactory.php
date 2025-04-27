<?php

class PenFactory
{
    private string $company;
    private string $name;
    private float $price;
    private PenType $penType;
    private InkType $inkType;
    private WriteColor $inkColor;
    private float $inkDensity;
    private float $nibRadius;
    private NibType $nibType;
    private bool $canChangeRefill;

    public function setCompany(string $company): self
    {
        $this->company = $company;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function setPenType(PenType $penType): self
    {
        $this->penType = $penType;
        return $this;
    }

    public function setInkType(InkType $inkType): self
    {
        $this->inkType = $inkType;
        return $this;
    }

    public function setInkColor(WriteColor $inkColor): self
    {
        $this->inkColor = $inkColor;
        return $this;
    }

    public function setInkDensity(float $inkDensity): self
    {
        $this->inkDensity = $inkDensity;
        return $this;
    }

    public function setNibRadius(float $nibRadius): self
    {
        $this->nibRadius = $nibRadius;
        return $this;
    }

    public function setNibType(NibType $nibType): self
    {
        $this->nibType = $nibType;
        return $this;
    }

    public function setCanChangeRefill(bool $canChangeRefill): self
    {
        $this->canChangeRefill = $canChangeRefill;
        return $this;
    }

    public function createPen(): Pen
    {
        $pen = $this->createPenInstance();

        $pen->setCompany($this->company);
        $pen->setName($this->name);
        $pen->setPrice($this->price);

        if ($pen instanceof RefillPen) {
            $refill = $this->createRefillForPen($pen);
            $pen->setRefill($refill);
            $pen->setCanChangeRefill($this->canChangeRefill);
        }

        return $pen;
    }

    private function createPenInstance(): Pen
    {
        return match ($this->penType) {
            PenType::BALL => new BallPen(),
            PenType::GEL => new GelPen(),
            PenType::MARKER => new MarkerPen(),
            PenType::FOUNTAIN => new FountainPen(),
            default => throw new Exception("Invalid pen type."),
        };
    }

    private function createRefillForPen(Pen $pen): Refill
    {
        $ink = new Ink($this->inkType, $this->inkColor, $this->inkDensity);
        $nib = new Nib($this->nibRadius, $this->nibType);

        return match ($this->penType) {
            PenType::BALL => new BallPenRefill($ink, $nib),
            PenType::GEL => new GelPenRefill($ink, $nib),
            PenType::MARKER => new MarkerPenRefill($ink, $nib),
            default => throw new Exception("Invalid pen type for refill."),
        };
    }
}
