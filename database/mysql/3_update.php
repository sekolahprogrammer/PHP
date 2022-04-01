<?php 
// update to database
$query = mysqli_query($koneksi, "UPDATE name_table SET name1='$value1', name2='$value2' WHERE id=$id");
?>