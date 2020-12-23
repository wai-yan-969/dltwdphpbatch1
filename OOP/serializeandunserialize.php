<?php
$myarr = ["red","blue","green","black","white","silver","orange"];

echo "This is Serialize and Unserialze for array." . "<br/>";

beautyprint($myarr);

//Serialize

$slz = serialize($myarr);
//echo $slz; //string
//var_dump($slz)

$unslz = unserialize($slz);
//echo $unslz; // array to sting conversion error
beautyprint($unslz);




function beautyprint($arr){
    echo "<pre>".print_r($arr,true)."</pre>";
}

echo "<hr/>";
?>