<?php 
/*
* constructor
*/
class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
} 

$apple = new Fruit('Apple', 'Red');
echo $apple->get_name();
echo "\n";
echo $apple->get_color();

/*
* destructor
*/

class Sayur
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct()
    {
        echo "\nnama : {$this->name} \nwarna : {$this->color}";
    }
}

$wortel = new Sayur('wortel', 'orange');
?>