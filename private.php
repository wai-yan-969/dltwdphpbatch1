<?php
    session_start();
    
    if(!isset($_SESSION["username"])){
        header("Location:login.php"); 
     }

    require_once("menu.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Form Handling 2</title>
<style>
    /* table{
        margin:50px auto;
        background-color:pink;
        padding:20px;
        border-radius:50px 0px 50px 50px;
    }
    td{
        height:30px;
    }
    .material{
        border:none;
        border-bottom:1px solid gray;
    }
    .material:focus{
        outline:none;
    }
    .errormsg{
        text-align:right;
        background-color:red;
        color:white;
        padding:2px;
    } */
    div{
        background-image:url(img/paint2.jpeg);
        width:100%;
        height:500px;
        text-align:center;
    }
</style>
</head>
<body>
   <div> 
    <h3>This is private area</h3>
   </div>
</body>
</html>