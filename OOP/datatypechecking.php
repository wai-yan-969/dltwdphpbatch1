<?php
class datatypechecking{

    public function checktype($req){
        switch ($req){
            case is_string($req):
                echo "Input value is ${req} and this is string type" . "<br/>";
                break;
            case is_int($req):
                echo "Input value is ${req} and this is Integer type" . "<br/>";
                break;
            case is_bool($req):
                echo "Input value is ${req} and this is Boolean type" . "<br/>";
                break;
            case is_float($req):
                echo "Input value is float type" . "<br/>";
                break;
            case is_array($req):
                echo "Input value is array type" . "<br/>";
                break;
        }
    }
}

$obj = new datatypechecking();
echo "This is Data Type Checking" . "<br/>";
$obj->checktype("aung aung");
$obj->checktype(10);
$obj->checktype(10.1);
$obj->checktype(true);
$obj->checktype(["aung aung"]);
echo "<hr/>";
?>
