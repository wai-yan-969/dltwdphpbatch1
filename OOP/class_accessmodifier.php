<?php
class class_accessmodifier{
    public $fullname = "Zin Wai Yan";
//    private $fullname = "Zin Wai Yan"; // Showing Error
//    protected $fullnam = "Zin Wai Yan"; // Showing Error

    public function  getnum(){
        $num = 10;
        echo $num; // Can print cuz variable is inside of method
//        echo $fullname; // can't print in function out of that
    }
}
$obj=new class_accessmodifier;
echo "This is Class Access Modifier" . "<br/>";
echo $obj->fullname . "<br/>";
$obj->getnum();
echo "<hr/>";


?>
