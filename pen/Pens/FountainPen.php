<?php

require_once 'Pen.php';
require_once 'enums/WriteColor.php';
require_once 'enums/PenType.php';
require_once 'interfaces/NonRefillPen.php';

class FountainPen extends Pen implements NonRefillPen
{
    public function __construct()
    {
        parent::__construct(PenType::FOUNTAIN);
    }

    public function write(): void
    {
        echo "Writing with a fountain pen.";
    }

    public function getColor(): WriteColor
    {
        return WriteColor::BLUE;
    }
}
