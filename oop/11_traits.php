<?php 
trait Pesan1
{
    public function hallo1()
    {
        echo 'PHP OOP Programming sangat menyenangkan!!';
    }
}

class Welcome
{
    use Pesan1;
}

$object = new Welcome();
$object->hallo1();
?>