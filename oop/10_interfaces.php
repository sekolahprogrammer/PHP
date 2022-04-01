<?php 
interface Pistol
{
    public function makeSound();
}

class Ak47 implements Pistol{
    public function makeSound()
    {
        echo 'Doooor...!!';
    }
}

$pistol = new Ak47();
$pistol->makeSound();
?>