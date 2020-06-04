<?php
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    *{
        margin:0;
        padding:0;
    }
    body{
        background-color:grey;
    }
    form {
        display:block;
        width:70%;
        margin:auto;

    }
    form input{
        display:block;
        width:70%;
        margin:auto;
        padding:10px;
        border:4px solid black;

    }
    a{
        text-decoration:none;
        color:white;
    }
    </style>
</head>
<body>

<?php

if(isset($_POST['moveFile']))
{

    $filename = $_FILES['filename']['name'];
    $tempname = $_FILES['filename']['tmp_name'];
    $name=$_POST['name'];
$price=$_POST['price'];


$query="insert into shop (name,price,img) values('$name','$price','$filename')";
$query_run=mysqli_query($conn,$query);
    if(isset($filename))
    {
        if(!empty($filename))
        {
            $location = "media/";
            $locationn = "pic/";
            if(move_uploaded_file($tempname, $locationn.$filename))
            {
                echo 'File Uploaded';
            }
        }
    }
}

?>

<div class="panel" style="display:block;width:100%;background:black;">

    
</div>
    
    <form action="#" method="post" enctype="multipart/form-data">
  
            name:
            <br>
            <input type="text" name="name">
            <br>
           price
            <br>
            <input type="number" name="price">
          
            photo:
            <br>
            <input type="file" name="filename"><br><br>
     
            <input type="submit" name="moveFile" value="Upload">
        </form>











</body>
</html>