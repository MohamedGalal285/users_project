
<?php

include "db_connect.php";

if($_POST['submit']){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    
}


$query = "INSERT INTO Users(name,email,password,phone,age,country,city,street) ";
$query .="VALUES ('$name','$email','$pass','$phone',$age,'$country','$city','$street')";

$result = mysqli_query($connection,$query);

//return $result;


if($result){
    echo "Store is Success";
}else{

    die('Query Failed'.mysqli_error($con));
}





?>