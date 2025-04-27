<?php

require_once 'enums/WriteColor.php';
require_once 'enums/InkType.php';

class Ink
{
    private WriteColor $color;
    private InkType $type;
    private float $density;

    public function __construct(InkType $type, WriteColor $color, float $density)
    {
        $this->type = $type;
        $this->density = $density;
        $this->color = $color;
    }

    public function getColor(): WriteColor
    {
        return $this->color;
    }

    public function getType(): InkType
    {
        return $this->type;
    }

    public function getDensity(): float
    {
        return $this->density;
    }
}
