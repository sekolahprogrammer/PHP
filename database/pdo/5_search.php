<?php 
// search to database
$query = $conn->exec("SELECT * FROM name_table WHERE nama LIKE '%".$cari."'%");
?>