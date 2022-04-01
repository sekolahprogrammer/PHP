<?php 
//class
class Fruit
{
    //properties
    public $name;
    public $color;

    //methods
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit('apple', 'merah');
$apple->set_name('apple');
$apple->set_color('merah');

echo 'name : ' . $apple->get_name();
echo "\n";
echo 'warna : ' . $apple->get_color();
?>
