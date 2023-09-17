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
    <title>Update Info User</title>
</head>
<body>
    
<form action="users_update.php" method="post">

    
<input type="text" name="name" placeholder="name"><br>
<input type="text" name="email" placeholder="email"><br>
<input type="text" name="password" placeholder="password"><br>
<input type="text" name="phone" placeholder="phone"><br>
<input type="number" name="age" placeholder="age"><br>
<input type="text" name="country" placeholder="country"><br>
<input type="text" name="city" placeholder="city"><br>
<input type="text" name="street" placeholder="street"><br>

<select name="id"  >

<?php
for ($i=0; $i < $users = mysqli_fetch_assoc($res) ; $i++) { 
    $id = $users['id'];
    echo "<option value='$id'>$id</option>";
}
?>

</select><br>


<input type="submit" name="submit">

</form>



</body>
</html>