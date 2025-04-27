<?php

require_once 'enums/WriteColor.php';
require_once 'Inks/Ink.php';

abstract class Refill
{
    private Ink $ink;
    private Nib $nib;

    public function __construct(Ink $ink, Nib $nib)
    {
        $this->ink = $ink;
        $this->nib = $nib;
    }

    abstract public function getColor(): WriteColor;

    public function getInk(): Ink
    {
        return $this->ink;
    }

    public function getNib(): Nib
    {
        return $this->nib;
    }
}
