<?php

include "Bird.php";
include "Car.php";

$Bird1 = new Bird("skoda", 14);
echo $Bird1->name . "<br>";

$Bird2 = new Bird("gaz", 12);
echo $Bird2->name . "<br>";

$Bird3 = new Bird("kaija", 16);
echo $Bird3->name . "<br>";

$Car1 = new Car("golf", 147543);
echo $Car1->name . "<br>";

$Car2 = new Car("volvo", 16);

$Car2->increaseMileage(240);

$Bird2->fly();
$Bird3->fly();