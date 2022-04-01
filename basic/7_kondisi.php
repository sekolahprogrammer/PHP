<?php 
/* 
 * if else 
 */
$nilaiLaki = 10;

if($nilaiLaki == 10){
    var_dump('mendapat buah apple');
}else if($nilaiLaki == 5){
    var_dump('mendapat buah cherry');
}else{
    var_dump('tidak mendapat buah');
}

/* 
 * switch case 
 */
$nilaiPerempuan = 98;

switch (true){
    case ($nilaiPerempuan <= 10 && $nilaiPerempuan >= 5):
        var_dump('mendapat sayur wortel');
    break;
    case ($nilaiPerempuan <= 5 && $nilaiPerempuan >= 0):
        var_dump('mendapat sayur tomat');
    break;
    default:
        var_dump('tidak mendapat sayur');
    break;
}

$day = 5;

switch($day){
    case 1:
        var_dump('senin');
        break;
    case 2:
        var_dump('selasa');
        break;
    case 3:
        var_dump('rabu');
        break;
    case 4:
        var_dump('kamis');
        break;
    case 5:
        var_dump('jum\'at');
            break;
    case 6:
        var_dump('saptu');
        break;
    case 7:
        var_dump('minggu');
        break;
    default:
        var_dump('cuma ada 7 hari!');
        break;
}

?>