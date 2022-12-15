<?php
include "db-config.php";
echo $id = $_GET["del"];
$query = "DELETE FROM `items` WHERE `id` = '$id'";
$run = mysqli_query($con, $query);

header("location:index.php ");


?>