<?php
    // Default function

    // Number format
    $num = 1230000;
    echo number_format($num);
    echo "<br/>";
    echo number_format($num,"3");
    echo "<br/>";
    echo number_format($num,"0",".","-");//4parameter
    echo "<br/>";

    // chunk-split (String Type = Serial number) (numeric ma ya)
    $b = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
    $ph = "09969862099";
    echo chunk_split($b,5,"/");//3parameter
    echo chunk_split($ph,3,"-");
    echo "<br/>";

    //lcfirst (For the first letter to small)
    echo lcfirst("This is lcfirst = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
    echo "<br/>";

    //ucwords (In HTML the same as Uppercase)
    echo ucwords ("This is ucwords = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
    echo "<br/>"; 

    echo strtoupper("This is strtoupper = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
    echo "<br/>";

    echo strtolower("This is strtolower = Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
    echo "<br/>";

    $name = " Aung Aung ";
    echo strlen($name);
    echo "<br/>";

    echo $name;
    echo "<br/>";

    //trim
    echo trim($name);
    echo "<br/>";
    echo strlen(trim($name));
    echo "<br/>";
    echo trim("/ Aung Aung / Maung Maung / Kyaw Kyaw ","/");
    echo "<br/>";

    // ltrim (left trim)
    echo strlen(ltrim($name));
    echo "<br/>";
    echo ltrim("/ Aung Aung /","/");
    echo "<br/>";

    // rtrim (right trim)
    echo strlen(rtrim($name));
    echo "<br/>";
    echo rtrim("/ Aung Aung /","/");
    echo "<br/>";

    // Start CRYPT

    // sha1 true = raw 20 chars binary format, false = raw 40 chars binary format
    $password = "123456";
    echo sha1($password);
    echo "<br/>";
    echo sha1($password,true);
    echo strlen(sha1($password,true)); // true is a raw data [return binary 20]
    echo "<br/>";
    echo sha1($password,false);
    echo strlen(sha1($password,false));// false is a raw data [return binary 40]
    echo "<br/>";

    // md5 true = raw 16 chars binary format , false = raw 32 chars hax format
    echo md5($password);
    echo "<br/>";
    echo md5($password,true);
    echo strlen(md5($password,true)); // 16
    echo "<br/>";
    echo md5($password,false);
    echo strlen(md5($password,false));// 32
    echo "<br/>";

    // crypt hashed codes string DES (Data Encryption Standard)
    echo crypt($password,true);//must have 2 parameter
    echo "<br/>";
    echo crypt($password,false);
    echo "<br/>";
    echo "<br/>";

    echo md5(sha1(crypt($password,"dlt")));
    echo "<br/>";

    $z = "i love mandalay , because mandalay is my hometown";
    echo strpos($z,"mandalay");
    echo "<br/>";
    
    echo strrpos($z,"mandalay");
    echo "<br/>";

    echo stripos($z,"Mandalay");
    echo "<br/>";

    echo strripos($z,"Mandalay");
    echo "<br/>";

    echo substr_replace("hello world","Mandalay",6);
    echo "<br/>";

    echo str_word_count($z);
    echo "<br/>";
    echo "<hr/>";

    // Array as Object
    $myarr = ["name" => "maung maung", "age" => "20", "address" => "mandalay", "phone" => "09969862099"];
    echo json_encode($myarr);
    echo "<br/>";

    $myarr2 = [
        ["name" => "maung maung", "age" => "20", "address" => "mandalay", "phone" => "09969862099"],
        ["name" => "maung maung", "age" => "20", "address" => "mandalay", "phone" => "09969862099"],
        ["name" => "maung maung", "age" => "20", "address" => "mandalay", "phone" => "09969862099"]
    ];
    echo json_encode($myarr2);

    // End CRYPT

?>