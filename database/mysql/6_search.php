<?php 
// search to database
$query = mysqli_query($koneksi, "SELECT * FROM name_table WHERE nama LIKE '%".$cari."'%");
?>