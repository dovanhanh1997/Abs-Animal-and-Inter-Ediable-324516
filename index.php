<?php
include_once 'Tiger.php';
include_once 'Chicken.php';
include_once 'Apple.php';
include_once 'Orange.php';

$animals = [];
$fruits = [];
$tiger = new Tiger();
$chicken = new Chicken();
$animals[0] = $tiger;
$animals[1] = $chicken;

foreach ($animals as $animal):
    echo $animal->makesound() . '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat();
    }
endforeach;

echo '<br> --Fruit-- <br> ';

$apple = new Apple();
$orange = new Orange();
$fruits[0] = $apple;
$fruits[1] = $orange;

foreach ($fruits as $fruit):
    echo $fruit->howToEat() . '<br>'; endforeach;
