<?php
// update to database
$query = $conn->exec("UPDATE nama_table SET value1='$value1', value2='$value2' WHERE id=$id");
?>