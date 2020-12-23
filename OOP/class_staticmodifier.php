<?php
class class_staticmodifier{
    // Static property
    public static $i = 0 ;

    public static $name = "Ko Ko";

    // Non-static property
    public $address = "Mandalay";

    // Static Method
    public static function myfun(){
        echo "I am static method my fun" . "<br/>";
        echo "my name is " . self::$name . "<br/>";
//        echo "my address is ". $this->address; //Result error
    }

    public function mynonstfun(){
        echo "i am non-static method name ". self::$name."<br/>";
        echo "my address is " . $this->address . "<br/>";
        echo "my getting value is ".self::$i . "<br/>";
        self::myfun();
    }

    public function getinc(){
//        $this->i++;
//        echo $this->i . "<br/>";

        self::$i++;
        echo self::$i . "<br/>";
    }
}
echo "This is staic modifier" . "<br/>";
$obj = new class_staticmodifier();
//echo $obj->address; // Calling Non-static property
//echo $obj::$i; // Calling static property

//$obj->myfun(); // Calling non-static method => if static no error but no rule
//$obj::myfun(); // Calling static method

//echo class_staticmodifier::$i; // Calling static property
//echo "<br/>";
//echo class_staticmodifier::myfun(); // Calling static method

$obj->mynonstfun();

$obj->getinc();
$obj->getinc();
$obj->getinc();
$obj->getinc();

$obj1 = new class_staticmodifier();
$obj1->getinc();
$obj1->getinc();
$obj1->getinc();
$obj1->getinc();

echo "<hr/>";
?>
