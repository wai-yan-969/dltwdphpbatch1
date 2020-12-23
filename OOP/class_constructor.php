<?php
class class_constructor{
//    public function __construct(){
//        echo "i am start working by automatically sir ! hee hee :p";
//    }

    public function __construct($name){
        echo "i am atart working by automatically sir ${name} ! hee hee :p";
    }
}
echo "This is Constructor" . "<br/>";
//$obj = new class_constructor;
$obj = new class_constructor("Aung Aung");
echo "<hr/>";

?>