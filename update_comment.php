<?php

include "db_connect.php";


$title = $_POST['title'];


$query = "UPDATE comments JOIN users on comments.user_id = users.id SET tittle = '$title' ";



$res = mysqli_query($connection,$query);

echo $res; 