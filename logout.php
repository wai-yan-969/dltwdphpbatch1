<?php
     session_start();
     session_destroy();  
     header("Location:login.php");
?>

<!-- Session Destroy -->
<!-- Single session destroy = unset($_SESSION["key"]);
All session destroy = session_destroy(); -->