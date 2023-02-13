<?php
include_once "Pancake.php";
include_once "Jam.php";
include_once "Cocoa.php";
include_once "Nutella.php";
//
//$cocoaPancake = new Pancake("Cocoa");
//$nutellaPancake = new Pancake("Nutella");
//$jamPancake = new Pancake("Jam");

echo " We have Nutella (type: nutella), Jam (type: jam) and Cocoa ( type: cocoa) filled pancackes <br>";
$chosenType = readline('Enter what kind of pancacke you want:');

$pancake = match ($chosenType) {
    "nutella" => new Nutella("medium"),
    "cocoa" => new Cocoa("Small"),
    "jam" => new Jam("Large"),
    default => new Cocoa("Small"),
};