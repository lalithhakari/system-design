<?php

require_once 'Pens/Pen.php';
require_once 'Refills/Refill.php';

interface RefillPen
{
    public function getRefill(): Refill;

    public function setRefill(Refill $refill): void;

    public function setCanChangeRefill(bool $canChangeRefill): void;

    public function getCanChangeRefill(): bool;

    public function changeRefill(Refill $refill): void;
}
