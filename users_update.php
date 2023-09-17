<?php

include "db_connect.php";

// echo "<pre>";
// print_r($_POST);

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$country = $_POST['country'];
$city = $_POST['city'];
$street = $_POST['street'];
$id = $_POST['id'];

$query = "UPDATE Users SET ";
$query .= "name = '$name', ";
$query .= "email = '$email', ";
$query .= "password = '$pass', ";
$query .= "phone = '$phone', ";
$query .= "age = $age, ";
$query .= "country = '$country', ";
$query .= "city = '$city', ";
$query .= "street = '$street' ";
$query .= "WHERE id = $id";

$res = mysqli_query($connection,$query);

echo $res;