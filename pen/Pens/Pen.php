<?php

require_once 'enums/PenType.php';
require_once 'enums/WriteColor.php';


abstract class Pen
{
    private string $name;
    private string $company;
    private float $price;
    private PenType $type;

    public abstract function write(): void;
    public abstract function getColor(): WriteColor;

    public function __construct(PenType $type)
    {
        $this->type = $type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function setCompany(string $company): void
    {
        $this->company = $company;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getPenType(): PenType
    {
        return $this->type;
    }
}
