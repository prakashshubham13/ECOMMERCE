

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
session_start();
if(!isset($_SESSION['uname']))
{
  $message = 'Sign in to access.';

  echo "<SCRIPT> //not showing me this
      alert('$message')
      window.location.replace('form.html');
  </SCRIPT>";

}
 $id=$_SESSION['uname'];
 $product=$_POST['id'];
 if(isset($_POST['cart']))
{
$query="INSERT INTO car(id,product) VALUES ('$id','$product')";

if(mysqli_query($conn,$query))
{

  
  
  echo'<script type="text/javascript">swal("ADDED TO CART!", "CLICK ON SCRREN TO CLOSE ALERT BOX", "success");</script>';



}
else{
    echo'<script type="text/javascript">swal("ALREADY PRESENT IN YOUR CART!", "CLICK ON SCRREN TO CLOSE ALERT BOX", "success");</script>';
}
}


if(isset($_POST['buy']))
{
    echo 'buy';
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
