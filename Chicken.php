<?php

class Chicken extends Animal implements Edible
{

    function makeSound()
    {
        return 'Chicken: cook cook';
    }

    public function howToEat()
    {
        return 'could be fride';
    }
}