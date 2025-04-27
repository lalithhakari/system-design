<?php

require_once 'Refill.php';

class BallPenRefill extends Refill
{
    public function __construct(Ink $ink, Nib $nib)
    {
        parent::__construct($ink, $nib);
    }

    public function getColor(): WriteColor
    {
        return $this->getInk()->getColor();
    }
}
