<?php
include_once 'Tiger.php';
include_once 'Chicken.php';
include_once 'Apple.php';
include_once 'Orange.php';

echo '--Animal--<br>';
$animals = [];
$animals[0]=new Tiger();
$animals[1]= new Chicken();

foreach ($animals as $value):
    echo $value->makeSound().'<br>';
if ($value instanceof Chicken){
    echo $value->howToEat().'<br>';
}
endforeach;
?>

<br><br>

<?php
echo '--Fruit--<br>';
$fruits = [];
$fruits[0]= new Apple();
$fruits[1]= new Orange();

foreach ($fruits as $fruit) {
    echo $fruit->howToEat().'<br>';
}

