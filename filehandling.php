<?php
   // Create File
//    $file="fileserver/logs/test1.txt";
//    $handler=fopen($file,"w");
//    echo "file create";
   

   //Read File

   //Method 1 (Binary Data Return , Limited charachters)
//    $file="fileserver/logs/test1.txt";
//    $handler=fopen($file,"r");

//    $filesize=filesize($file);
//    $data=fread($handler,$filesize);//Length 200
//    echo $data;

    //Method 2 (String data return , No limit)
    // $file="fileserver/logs/test1.txt";
    // // $data=file_get_contents($file);
    // // echo $data;

    // if(file_exists($file)){
    //     $data=file_get_contents($file);
    //     echo $data;
    // }else{
    //     echo "No File Exists";
    // }

    // $file="fileserver/logs/test1.txt";
    // $handler=fopen($file,"w");
    // $message1 = "I Love Myanmar";
    // $message2 = "I Love Thiland";

    // fwrite($handler,$message2);
    // fclose($handler);
    // echo "Successful write";

    // Appending
    $file="fileserver/logs/test1.txt";
    $handler=fopen($file,"a");
    $message1 = "I Love Indo ";
    $message2 = "I Love Srilanka ";
    fwrite($handler,$message2);
    fclose($handler);
    echo "Successful Appending";

?>