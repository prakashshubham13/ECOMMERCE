<?php

require 'config.php';
$sno=$_GET['sno'];
?>
<html>
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


 $q = " delete from shop WHERE sno=$sno";

if(mysqli_query($conn,$q))
{

  
  
  echo'<script type="text/javascript">swal("REMOVED FROM CART!", "CLICK ON SCRREN TO CLOSE ALERT BOX", "success");</script>';



}
else{
  
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