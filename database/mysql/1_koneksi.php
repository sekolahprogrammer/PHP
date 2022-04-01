<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'nama-database';

$koneksi = mysqli_connect($servername, $username, $password, $database);
// cek koneksi
if($koneksi){
    echo "Koneksi database berhasil!";
}else{
    echo "Koneksi database gagal!";
}
?>