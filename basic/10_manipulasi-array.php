<?php 
// sort -> mengurutkan isi array
$num = [1,5,3,4,2,7,6,8,9,0];

sort($num);
echo json_encode($num);

echo "\n";
// slice -> memotong isi array
$sayur = ['wortel','tomat','cabai','bayam','brokoli'];

echo json_encode(array_slice($sayur, 3));
echo "\n";
echo json_encode(array_splice($sayur, 2));
?>