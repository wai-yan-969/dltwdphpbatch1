<?php
class class_databinding{

    public static $name = "aung aung";

    public static function classname(){
        return __Class__;
    }

    public function getclassname(){
//        echo $this->classname(); // Late Binding

//        echo self::classname(); // Early Binding

        echo static::classname(); // Changing to late binding
    }

    public function getname(){
//        echo self::$name . "<br/>"; // aung aung
        echo static::$name . "<br/>"; // kyaw kyaw
    }
}

class childclass1 extends class_databinding{

    public static $name = "kyaw kyaw";

    // Overwrite method
    public static function classname(){
        return __CLASS__;
    }

//    public function getname(){
//        echo self::$name . "<br/>";
//    }

}

$obj = new class_databinding();
//echo $obj->classname();

$obj->getclassname();
echo $obj::$name;

echo "<br/>";

$chlobj1 = new childclass1();
$chlobj1->getclassname();
echo "<br/>";

$chlobj1->getname();
//echo $chlobj1::$name;

echo "<hr/>";
?>