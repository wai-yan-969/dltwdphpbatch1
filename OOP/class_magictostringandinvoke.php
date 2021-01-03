<?php
class class_magictostringandinvoke{
    public function __tostring(){
        return "You r trying to print out your Obj" . "<br/>";
    }

    public function __invoke(){
        return "U r trying to call obj as method" . "<br/>";
    }

    public function __clone(){
        echo "U r trying to clone obj" . "<br/>";
    }
}

$obj = new class_magictostringandinvoke();
echo $obj;

echo $obj();

//$cc = $obj;
//echo $cc->name;

$cc = clone $obj;
//echo $cc->name;

echo "<hr/>";
?>