<?php

require_once 'Pen.php';
require_once 'enums/WriteColor.php';
require_once 'enums/PenType.php';
require_once 'interfaces/RefillPen.php';
require_once 'Refills/MarkerPenRefill.php';
require_once 'Refills/Refill.php';

class MarkerPen extends Pen implements RefillPen
{
    public function __construct()
    {
        parent::__construct(PenType::MARKER);
    }

    public function write(): void
    {
        echo "Writing with a marker pen.";
    }

    public function getColor(): WriteColor
    {
        return WriteColor::GREEN;
    }

    public function getRefill(): Refill
    {
        return new MarkerPenRefill();
    }

    public function canChangeRefill(): bool {}

    public function changeRefill(Refill $refill): void {}
}
