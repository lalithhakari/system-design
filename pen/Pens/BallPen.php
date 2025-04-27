<?php

require_once 'Pen.php';
require_once 'enums/WriteColor.php';
require_once 'enums/PenType.php';
require_once 'interfaces/RefillPen.php';
require_once 'Refills/BallPenRefill.php';
require_once 'Refills/Refill.php';

class BallPen extends Pen implements RefillPen
{
    private Refill $refill;

    private bool $canChangeRefill;

    public function __construct()
    {
        parent::__construct(PenType::BALL);
    }

    public function write(): void
    {
        echo "Writing with a ball pen." . PHP_EOL;
    }

    public function getColor(): WriteColor
    {
        return $this->refill->getColor();
    }

    public function getRefill(): Refill
    {
        return $this->refill;
    }

    public function setRefill(Refill $refill): void
    {
        if ($refill instanceof BallPenRefill) {
            $this->refill = $refill;
        } else {
            throw new Exception("Invalid refill type for BallPen.");
        }
    }

    public function setCanChangeRefill(bool $canChangeRefill): void
    {
        $this->canChangeRefill = $canChangeRefill;
    }

    public function getCanChangeRefill(): bool
    {
        return $this->canChangeRefill;
    }

    public function changeRefill(Refill $refill): void
    {
        if ($this->canChangeRefill) {
            $this->setRefill($refill);
        } else {
            throw new Exception("Cannot change refill.");
        }
    }
}
