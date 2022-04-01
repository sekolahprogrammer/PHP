<?php 
// insert to database
$query = mysqli_query($koneksi, "INSERT INTO name_table (name1, name2) VALUE ('$value1','$value2')");
?>