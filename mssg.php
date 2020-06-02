

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/8893b709f5.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        body{
background-color:black;
        }
    </style>
</head>
<body>
    
<?php

require 'config.php';
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['mssg'];

$query="insert into mssg (name,email,mssg) values ('$name','$email','$mssg')";

if(mysqli_query($conn,$query))
{
  echo'<script type="text/javascript">swal("MESSAGE SEND SUCCESSFULLY!", "WE WILL REPLY SOON", "success");</script>';



}
else{
    echo'<script type="text/javascript">swal("ERROR!", "CLICK ON SCRREN TO CLOSE ALERT BOX", "success");</script>';
}
?>
<script>

$(document).click(function() {
    window.history.back();
});
    
</script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>