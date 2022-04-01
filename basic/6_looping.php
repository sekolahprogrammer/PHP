<?php 
/*
 *  for loop
 */
// ascending 0-10
for($i = 0;$i <= 10;$i++){
    echo $i;
}

echo "\n";

// descending 10-0
for($j = 10;$j >= 0;$j--){
    echo $j;
}

// nested loop
for($i = 1;$i <= 10;$i++){
    for($j = 1;$j <= $i;$j++){
        echo "*";
    }
    echo "\n";
}

/*
 *  foreach loop
 */
$arr = [1,2,3,4,5,6,7,8,9,0];
foreach($arr as $num){
    echo $num;
}

/*
 *  while loop
 */
$x = 1;

while($x <= 10){
    echo $x;
    $x++;
}

echo "\n";

/*
*  do while loop
*/
// ascending
$y = 1;
do{
    echo $y;
    $y++;
}while($y <= 10);

echo "\n";

// descending
$z = 10;
do{
    echo $z;
    $z--;
}while($z >= 1);

// nested loop
$i = 1;
do{
    $j = 1;
    do{
        echo "*";
        $j++;
    }while($j <= $i);
    echo "\n";
    $i++;
}while($i <= 10);
?>