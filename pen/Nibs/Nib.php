<?php

class Nib
{
    private float $radius;
    private NibType $type;

    public function __construct(string $radius, NibType $type)
    {
        $this->radius = $radius;
        $this->type = $type;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function getType(): NibType
    {
        return $this->type;
    }
}
