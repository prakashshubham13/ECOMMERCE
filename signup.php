<?php
require 'config.php';
?>
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
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$tel=$_POST['tel'];
$query="INSERT INTO form(uname,pass,tel) VALUES ('$uname','$pass','$tel')";
if(mysqli_query($conn,$query))
{
    echo'<script type="text/javascript">swal("CONGRATULATIONS\!", "GO AND SIGN IN", "success");</script>';

}
else
{
    echo'<script type="text/javascript">swal("ERROR!", "", "warning");</script>';

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