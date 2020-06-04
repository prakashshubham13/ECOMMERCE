<?php 
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="abc.php" method="post">
    <input type="number" name="id" placeholder="id">
    <input type="number" name="age" placeholder="age">
    <input type="submit" value="submit" name="send">

    </form>
    <?php
if(isset($_POST['send']))
{
    $id=$_POST['id'];
    $age=$_POST['age'];
    $query="insert into info (id,age) values ('$id','$age');";
    $query_run=mysqli_query($conn,$query);
    if($query_run)
    {
        echo 'yes';
    }
    else{
        echo 'no';
    }
}
    ?>
</body>
</html>