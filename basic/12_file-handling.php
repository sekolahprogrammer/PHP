<?php 
/*
 *  file headling
 */
// Membuka file yang ingin dibaca
$open = fopen($file, 'r');

// Mencari size dari filenya
$size = filesize($file);

// Untuk membaca sebuah file maka gunakan lah fread
$filedata = fread($open, $size);

// fopen sebelum membuat file
$open = fopen($dir . '/' . $nama_file, 'w');

// fwrite untuk membuat sebuah file dan kontennya
fwrite($open, $konten_file);

// Menutup File
fclose($open);
?>