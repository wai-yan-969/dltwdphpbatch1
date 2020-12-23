<?php
class class_magicissetandunset{
//    public $name = "Mya Mya";

    public function __isset($property){
        echo "You are trying to check set or not property ${property}. It is not exists Sir"  . "<br/>";
    }

    public function __unset($property){
        echo "You are trying to check unset or not property ${property}. It is not exists Sir" . "<br/>";
    }
}
echo "This is magic method isset and and unset" . "<br/>";
$obj = new class_magicissetandunset();
//echo $obj->name;

isset($obj->name);

unset($obj->name);

//var_dump(isset($obj->name));

echo "<hr/>";
?>
