<?php
include_once("./config/db.php");
 
$id = $_GET['id'];
$result = mysqli_query($db_connect, "DELETE FROM products WHERE id=$id");
 
header("Location:show.php");
?>