<?php
include "db_connect.php";


$query = "SELECT * FROM comments";

$res = mysqli_query($connection,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Info comment</title>
</head>
<body>
    
<form action="update_comment.php" method="post">

    
<input type="text" name="title" placeholder="title"><br>




<select name="id"  >

<?php
for ($i=0; $i < $comments = mysqli_fetch_assoc($res) ; $i++) { 
    $id = $comments['id'];
    echo "<option value='$id'>$id</option>";
}
?>

</select><br>


<input type="submit" name="submit">

</form>



</body>
</html>