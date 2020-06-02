<?php
session_start();

    
 
   session_unset();
   session_destroy();
    header('location:index.php');



?>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>



