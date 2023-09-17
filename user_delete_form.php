<?php
include "db_connect.php";

$query = "SELECT * FROM Users";

$res = mysqli_query($connection,$query);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Delete</title>
</head>
<body>

<form action="user_delete.php" method="post">


<select name="id">

<?php
for ($i=0; $i < $user = mysqli_fetch_assoc($res) ; $i++) { 
    $id = $user['id'];
    echo "<option value='$id'>$id</option>";
}
?>

</select><br>


<input type="submit" value="delete" name="delete">

</form>
    
</body>
</html>