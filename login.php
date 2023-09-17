<?php

include "db_connect.php";


if($_POST){

    $email = $_POST['email'];
    $pass = $_POST['password'];
    

}else{
    echo "Enter Email and Password";
}

$query = "SELECT * FROM users WHERE email='$email' AND password='$pass' ";

$result = mysqli_query($connection,$query);

$res = mysqli_fetch_assoc($result);

echo "<pre>";
//print_r($res);


if($res['email'] == $email && $res['password'] == $pass){
    echo "welcome in dashboard";
    }
    