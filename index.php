<?php

include "Car.php";
include "Tire.php";
include "Train.php";
include "Cat.php";
include "Dog.php";
include "Math.php";

$cat1 = new Cat("Mincis", 2);
$cat2 = new Cat("Brincis", 3);
$dog1 = new Dog("Reksis", 6);
Dog::payAttention();
echo Math::addTwo(4, 9) . "<br/>";
echo Math::factorial(10) . "<br/>";
$masivsArfunkcijām = [3,5,6];
    
/*
$car1 = new Car("Audi", 12);
$train1 = new Train("Skoda", 1435, 540986740987609867509);
$car2 = new Car("Feraro", 2);
$car1->increaseMileage(240);

$tire1 = new Tire(1534, "Winter", "Bad");
echo $tire1->size;
echo "<br>";
echo $tire1->type;
echo "<br>";

$train1 = new Train("Vilcienins", 1, 85763543275464);
$train1->increaseMileage(1);
Train::makeNoise();

echo Car::$describe;
Car::makeNoise();
*/