<?php
    $to = "aungaung@localhost,maungmaung@localhost,susu@localhost,myamya@localhost";
    $subject = "This is promotion sale";
    $message =" Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum in amet illo dicta? Perferendis necessitatibus praesentium officiis, iure optio ipsam. Blanditiis a in sunt unde quaerat, quis dicta voluptate. Blanditiis";
    $header = "From : sale@dlt.com\r\n";
    $header .= "Content-Type:text/html";

    // Single / Multi Send
    function sendmail($a,$b,$c,$d){
        $mail = mail($a,$b,$c,$d);

        if($mail){
            echo "Send Successful";
        }else{
            echo "Send Failed";
        }
    }
    // sendmail($to,$subject,$message,$header);

    $myarrs = [
        ["id"=>1,"email"=>"aungaung@localhost","password"=>"asdfasdf"],
        ["id"=>2,"email"=>"maungmaung@localhost","password"=>"asdfasdf"],
        ["id"=>3,"email"=>"susu@localhost","password"=>"asdfasdf"],
        ["id"=>4,"email"=>"myamya@localhost","password"=>"asdfasdf"],
    ];
    // echo count($myarrs);

    //Multi Send
    foreach($myarrs as $data){
        $to = $data["email"];
        sendmail($to,$subject,$message,$header);
    }
    

    
?>