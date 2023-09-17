<?php
include "db_connect.php";

$id = $_POST['id'];

$query ="DELETE FROM Users ";
$query .="WHERE id=$id";

$res = mysqli_query($connection,$query);

echo $res ;