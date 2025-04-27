<?php

require_once './Pens/BallPen.php';
require_once './Refills/BallPenRefill.php';
require_once './Inks/Ink.php';
require_once './enums/InkType.php';
require_once './Nibs/Nib.php';
require_once './enums/NibType.php';
require_once './enums/WriteColor.php';
require_once './enums/PenType.php';
require_once './PenFactory.php';

$pen = new PenFactory()
    ->setPenType(PenType::BALL)
    ->setCompany("Reynolds")
    ->setName("Max Ball Pen")
    ->setPrice(10.50)
    ->setInkType(InkType::ALCOHOL_BASED)
    ->setInkColor(WriteColor::BLUE)
    ->setInkDensity(0.3)
    ->setNibRadius(0.4)
    ->setNibType(NibType::FINE)
    ->setCanChangeRefill(true)
    ->createPen();

// Test the pen features
$pen->write();

echo 'Company:' . PHP_EOL . $pen->getCompany() . PHP_EOL;

echo 'Name:' . PHP_EOL . $pen->getName() . PHP_EOL;

echo 'Price:' . PHP_EOL . $pen->getPrice() . PHP_EOL;

echo 'Pen Type:' . PHP_EOL . $pen->getPenType()->value . PHP_EOL;

echo 'Pen Color:' . PHP_EOL . $pen->getColor()->value . PHP_EOL;

echo 'Refill Color:' . PHP_EOL . $pen->getRefill()->getColor()->value . PHP_EOL;

echo 'Ink Color:' . PHP_EOL . $pen->getRefill()->getInk()->getColor()->value . PHP_EOL;

echo 'Ink Type:' . PHP_EOL . $pen->getRefill()->getInk()->getType()->value . PHP_EOL;

echo 'Ink Density:' . PHP_EOL . $pen->getRefill()->getInk()->getDensity() . PHP_EOL;

echo 'Nib Type:' . PHP_EOL . $pen->getRefill()->getNib()->getType()->value . PHP_EOL;

echo 'Nib radius:' . PHP_EOL . $pen->getRefill()->getNib()->getRadius() . PHP_EOL;

exit("Done with Factory Pattern\n");


// Bare bones example without factory pattern
// $pen = new BallPen();

// $pen->setCompany("Reynolds");

// $pen->setName("Max Ball Pen");

// $pen->setPrice(10.50);

// $ink = new Ink(InkType::ALCOHOL_BASED, WriteColor::BLUE, 0.3);
// $nib = new Nib(0.4, NibType::FINE);
// $refill = new BallPenRefill($ink, $nib);

// $pen->setRefill($refill);

// $pen->setCanChangeRefill(true);

// $pen->write();

// echo 'Company:' . PHP_EOL . $pen->getCompany() . PHP_EOL;

// echo 'Name:' . PHP_EOL . $pen->getName() . PHP_EOL;

// echo 'Price:' . PHP_EOL . $pen->getPrice() . PHP_EOL;

// echo 'Pen Type:' . PHP_EOL . $pen->getPenType()->value . PHP_EOL;

// echo 'Pen Color:' . PHP_EOL . $pen->getColor()->value . PHP_EOL;

// echo 'Refill Color:' . PHP_EOL . $pen->getRefill()->getColor()->value . PHP_EOL;

// echo 'Ink Color:' . PHP_EOL . $pen->getRefill()->getInk()->getColor()->value . PHP_EOL;

// echo 'Ink Type:' . PHP_EOL . $pen->getRefill()->getInk()->getType()->value . PHP_EOL;

// echo 'Ink Density:' . PHP_EOL . $pen->getRefill()->getInk()->getDensity() . PHP_EOL;

// echo 'Nib Type:' . PHP_EOL . $pen->getRefill()->getNib()->getType()->value . PHP_EOL;

// echo 'Nib radius:' . PHP_EOL . $pen->getRefill()->getNib()->getRadius() . PHP_EOL;

// $ink2 = new Ink(InkType::OIL_BASED, WriteColor::RED, 0.5);
// $nib2 = new Nib(0.6, NibType::SPONGE);
// $refill2 = new BallPenRefill($ink2, $nib2);

// echo 'Changed Refill:' . PHP_EOL;

// $pen->changeRefill($refill2);

// echo 'Pen Color:' . PHP_EOL . $pen->getColor()->value . PHP_EOL;

// echo 'Refill Color:' . PHP_EOL . $pen->getRefill()->getColor()->value . PHP_EOL;

// echo 'Ink Color:' . PHP_EOL . $pen->getRefill()->getInk()->getColor()->value . PHP_EOL;

// echo 'Ink Type:' . PHP_EOL . $pen->getRefill()->getInk()->getType()->value . PHP_EOL;

// echo 'Ink Density:' . PHP_EOL . $pen->getRefill()->getInk()->getDensity() . PHP_EOL;

// echo 'Nib Type:' . PHP_EOL . $pen->getRefill()->getNib()->getType()->value . PHP_EOL;

// echo 'Nib radius:' . PHP_EOL . $pen->getRefill()->getNib()->getRadius() . PHP_EOL;
