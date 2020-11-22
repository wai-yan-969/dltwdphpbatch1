<?php
    
    // $arr = ["red","green","blue","black"];
    // // var_dump($arr);
    // // echo "<hr/>";
    // // print_r($arr);
    // // echo "<hr/>";
    // // echo "<pre>" . print_r($arr,true) . "</pre>";
    // beautyprint($arr);

    // $arr2 = ["aung aung","maung maung","zaw zaw","kyaw kyaw"];
    // beautyprint($arr2);

    // $arr3 = [
    //     ["aung aung","maung maung","zaw zaw","kyaw kyaw"],
    //     ["aung aung","maung maung","zaw zaw","kyaw kyaw"],
    //     ["aung aung","maung maung","zaw zaw","kyaw kyaw"],
    // ];
    // beautyprint($arr3);

    // $arr4 = [
    //     ["id"=>"1","name"=>"maung maung","age"=>27,"city"=>"mogok"],
    //     ["id"=>"1","name"=>"aung aung","age"=>27,"city"=>"mogok"],
    //     ["id"=>"1","name"=>"zaw zaw","age"=>27,"city"=>"mogok"],
    //     ["id"=>"1","name"=>"kyaw kyaw","age"=>27,"city"=>"mogok"],
    //     ["id"=>"1","name"=>"mya mya","age"=>27,"city"=>"mogok"],
    // ];
    // $arrjson = json_encode($arr4);
    // beautyprint($arrjson);

    // Custome Reuseable function
    function beautyprint($array){
        echo "<pre>" . print_r($array,true) . "</pre>";
    }

    $file = "myjson.json";
    if(file_exists($file)){
        $handler = fopen($file,"r");
        $filesize = filesize($file);
        $fileread = fread($handler,$filesize);
        $jsontoarray = json_decode($fileread); // json Object to Array
        // beautyprint($jsontoarray);

        foreach($jsontoarray as $array){
            foreach($array as $key=>$value){
                echo "key is $key " . "value is $value" . "<br/>" ;
            }
        }
    }

    echo "<hr/>";

    // Constant Value
    define("name","Zin Wai Yan");
    echo name;
    echo "<br/>";
    define("age",22);
    echo age;
    echo "<br/>";
    define("colors",["black","white","red"]);
    echo colors[2];
    echo "<br/>";


?>