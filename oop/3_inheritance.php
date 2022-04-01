<?php 
class Fruit
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "\nname : {$this->name} \nwarna : {$this->color}";
    }
}

// inheritance dari Fruit
class Apple extends Fruit
{
    public function message()
    {
        echo 'Buah dari kota batu malang ';
    }
}

$apple = new Apple('apple', 'hijau');
$apple->message();
$apple->intro();
?>