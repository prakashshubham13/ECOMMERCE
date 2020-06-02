<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/8893b709f5.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require 'config.php';
if(isset($_POST['submitt']))
{
    
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $query="select * from form WHERE uname='$uname' AND pass='$pass'";
    $query_run=mysqli_query($conn,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        session_start();
        $_SESSION['uname']=$uname;
        header('location:index.php');
    }
    else
    {
        echo'<script type="text/javascript">swal("INVALID!", "PLEASE ENTER THE CORRECT PASSWORD!", "warning");</script>';
    }
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
