<?php 
$x = 10;
$y = 3;

/*
 * operator aritmatika
//  */
echo $x + $y ."\n";  // 13
echo $x - $y ."\n";  // 7
echo $x * $y ."\n";  // 30
echo $x / $y ."\n";  // 3.33
echo $x % $y ."\n";  // 1
echo $x ** $y ."\n"; // 1000

/*
 * operator penugasan
 */
echo $x += $y . "\n";  // 13
echo $x -= $y . "\n";  // 7
echo $x *= $y . "\n";  // 30
echo $x /= $y . "\n";  // 3.33
echo $x %= $y . "\n";  // 1
echo $x **= $y . "\n";  // 1000

/*
 * operator perbandingan
 */
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x !== $y);
var_dump($x <> $y);
var_dump($x > $y);
var_dump($x < $y);
var_dump($x >= $y);
var_dump($x <= $y);
var_dump($x <=> $y);

/*
 * operator peningkatan
 */
var_dump($x++); //postincrement
var_dump(++$x); //preincrement
var_dump($x--); //postdecrement
var_dump(--$x); //predecrement

/*
 * operator logika
 */
var_dump($x == 10 && $y == 3); //true
var_dump($x == 10 || $y == 3); //true
var_dump($x == 10 xor $y == 2); //true
var_dump(!($x != 10)); //true

/*
 * operator string
 */
$nama = "prayogaea";
$nilai = "ganteng";

echo "prayogaea" . " ganteng\n"; 
echo $nama .= " programmer";

/*
 * operator ternary
 */
echo $num = ($x > $y) ? "true":"false";
?>