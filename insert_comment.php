
<?php

include "db_connect.php";

if($_POST['submit']){

    $title = $_POST['title'];
    $user_id=$_POST['user_id'];
    
}


$query = "INSERT INTO comments(tittle,user_id) SELECT tittle,user_id FROM comments  JOIN users on comments.user_id = users.id " ;
$query .= " VALUES ('$title','$user_id')";

$result = mysqli_query($connection,$query);

return $result;


if($result){
    echo "Store is Success";
    $user_id=mysqli_insert_id($connection);
}else{

    die('Query Failed'.mysqli_error($con));
}

?>