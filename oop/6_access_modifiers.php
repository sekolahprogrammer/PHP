<?php 
class Fruit
{
    public $name;
    protected $color;
    private $harga;
}

$apple = new Fruit();
$apple->name = 'apple'; //apple
$apple->color = 'red'; //error
$apple->harga = 2000; //error
?>