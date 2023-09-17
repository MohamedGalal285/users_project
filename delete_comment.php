<?php
include "db_connect.php";

$id = $_POST['id'];

$query ="DELETE FROM comments JOIN users on comments.user_id = users.id";
$query .="WHERE id=$id";

$res = mysqli_query($connection,$query);

echo $res ; 