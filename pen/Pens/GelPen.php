<?php

require_once 'Pen.php';
require_once 'enums/WriteColor.php';
require_once 'enums/PenType.php';
require_once 'interfaces/RefillPen.php';
require_once 'Refills/BallPenRefill.php';

class GelPen extends Pen implements RefillPen
{
    public function __construct()
    {
        parent::__construct(PenType::GEL);
    }

    public function write(): void
    {
        echo "Writing with a gel pen.";
    }

    public function getColor(): WriteColor
    {
        return WriteColor::BLUE;
    }

    public function getRefill(): Refill
    {
        return new GelPenRefill();
    }

    public function canChangeRefill(): bool {}

    public function changeRefill(Refill $refill): void {}
}
