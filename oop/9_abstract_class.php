<?php 
// prent class
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name =$name;
    }
    abstract public function intro(): string;
}
// child class
class Pajero extends Car
{
    public function intro(): string
    {
        return "Mitsubishi $this->name Sport";
    }
}
// buat object dari child class
$pajero = new Pajero('Pajero');
echo $pajero->intro();
?>