<?php 
namespace Html;

class Table 
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "TITLE : '{$this->title}' \nROW : '{$this->numRows}'";
    }
}

$table = new Table();
$table->title = 'myTable';
$table->numRows = 5;

$table->message();
?>