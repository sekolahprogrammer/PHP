<?php 
function Iterable(iterable $myIterable){
    foreach($myIterable as $item){
        echo $item;
    }
}

$arr = [1,2,3,4,5,6,7,8,9,0];
Iterable($arr);
?>