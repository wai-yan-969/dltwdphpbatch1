<?php

    //  Create DB Access 
   define("DB_HOST","localhost");
   define("DB_USER","root");
   define("DB_PASS","");
   define("DB_NAME","dbone");


   // Connection to DB and check error

        // mysqli_connect(host,username,password,dbname);
   function dbconnection(){
       $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    //    return $db;
        echo mysqli_connect_errno() > 0 ? "connection error" : "connection success";
   }
//    beautyprint(dbconnection());
   dbconnection();
  

   function beautyprint($array){
       echo "<pre>" . print_r($array,true) ."</pre>";
   }



?>