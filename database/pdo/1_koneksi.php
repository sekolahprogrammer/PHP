<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "nama-database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=nama-database", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Koneksi berhasil";
} catch(PDOException $e) {
  echo "Koneksi gagal: " . $e->getMessage();
}
?>