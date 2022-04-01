<?php 
/*
*  static metods
*/
class Greeting
{
    public static function welcome()
    {
        echo 'methods static';
    }
}

Greeting::welcome();

/*
*  properti metods
*/
class Pi 
{
    public static $value = 3.14;
}

//get static properti
echo "\n" . Pi::$value;
?>