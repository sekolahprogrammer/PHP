<?php 
/*
 * fungsi
 */
function hello(){
    echo "Hallo Dunia";
}
hello();

echo "\n";

/*
 * fungsi dengan parameter
 */
function persegi($sisi1, $sisi2){
    echo "Luas persegi : " . $sisi1 * $sisi2;
}
persegi(4, 4);

echo "\n";

/*
 * fungsi global
 */
$panjang = 4;
$lebar = 2;

function persegi_panjang(){
    global $panjang, $lebar;
    echo "Luas persegi panjang : " . $panjang * $lebar;
}
persegi_panjang();
?>