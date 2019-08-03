<?php
include_once 'Animal.php';
include_once 'Edible.php';

class Chicken extends Animal implements Edible
{

    public function makeSound()
    {
        echo "Chicken: cuck cuck cuck !!!";
    }

    public function howToEat()
    {
        return 'Could be fried';
    }
}