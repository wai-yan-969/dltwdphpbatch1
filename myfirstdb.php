<?php

    // 1 Create DB Access 
   define("DB_HOST","localhost");
   define("DB_USER","root");
   define("DB_PASS","");
   define("DB_NAME","dbone");


   // 2 Connection to DB and check error

        // mysqli_connect(host,username,password,dbname);
   function dbconnection(){
       $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    //    return $db;
        // echo mysqli_connect_errno() > 0 ? "connection error" : "connection success";
        if(mysqli_connect_errno() > 0){
            // echo "Connection Error";
            die("Connection File");
        }else{
            // echo "Connection Successful";
            return $db;
        }
   }
    // beautyprint(dbconnection());
   // echo dbconnection();

   // 3.2 Query (Table or table data)
   $query = "SELECT * FROM users";

   function executequery($qry){

       // 3.1 Database ( Successful )
    $database = dbconnection();

   // 3.3 Connect to Database and Query
   // mysqli_query("database","query");[NOTED]
   $results = mysqli_query($database,$qry);
   // beautyprint($results);

   if(mysqli_num_rows($results) > 0 ){
        foreach($results as $result){
            foreach($result as $key=>$value){
                echo "key is = ${key} " . "value is = ${value} " . "<br/>";
            }
        }
   }else{
       echo "No Data";
   }
}
executequery($query);

  

   function beautyprint($array){
       echo "<pre>" . print_r($array,true) ."</pre>";
   }



?>