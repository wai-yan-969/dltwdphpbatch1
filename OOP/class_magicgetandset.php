<?php
class class_magicgetandset{
    public $fullname = "kyaw kyaw";

    public function __get($pro){
        echo "You are trying to get properties ${pro}. It's not exists";
    }

    public function __set($property,$value){
        echo "You are trying to get property ${property} by passing ${value}.";
    }
}

$obj = new class_magicgetandset();
//echo $obj->address;
//var_dump(isset($obj->fullname));
//echo $obj->fullname;

$obj->address = "yangon";
echo "<hr/>";

?>
