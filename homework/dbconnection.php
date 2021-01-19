<?php
    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_NAME","datacheck");
 
    function dbconnection(){
        $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
        
        if(mysqli_connect_errno() > 0){
            die("Connection Failed!");
        }else{
            return $db;
        }
    }
    $database = dbconnection();

?>
