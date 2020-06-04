<?php
require 'config.php';
$sno=$_GET['sno'];

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
        background-color: rgb(52, 157, 255);
    }
    form {
        display:block;
        width:70%;
        margin:auto;
        text-align:center;

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


$query="UPDATE shop SET name='$name',price='$price',img='$filename' WHERE sno=$sno";
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
    <?php
    $result = mysqli_query($conn,"select * from shop where sno=$sno;");
    while($row = mysqli_fetch_array($result))
{
?>
    <form action="#" method="post" enctype="multipart/form-data">
  
            name:
            <br>
            <input type="text" name="name" placeholder="<?php echo $row['name'] ?>">
            <br>
           price
            <br>
            <input type="number" name="price"  placeholder="<?php echo $row['price'] ?>">
          
            photo:
            <br>
            <input type="text" disabled name="filename"  placeholder="<?php echo $row['img'] ?>">
            <img src="pic/<?php echo $row['img'] ?>" alt="" style="width:70%;height:40%;text-align:center;">
            <br>
            <input type="file" name="filename"  placeholder=""><br><br>
     
            <input type="submit" name="moveFile" value="Upload">
        </form>



<?php
}

?>







</body>
</html>