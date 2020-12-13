<?php
class class_inheritance{
    public $username = "koko";
    public $email = "koko@gmail.com";
    public $password = "123456";

    public function greeting(){
        echo "I am form Mandalay";
    }
}

class class_content extends class_inheritance {

}

class class_social extends class_inheritance{
    //Own Method
    public function verifyfb(){
        echo "Are you ready to confirm Your FB Acc ??";
    }

    //Method Overwriting - parent Method OV
    public function greeting(){
        echo "Sorry i am from Yangon";

        // Properties Overwriting - parent Method OW
        $this->username = "kyaw kyaw";
        echo $this->username;
    }
}

echo "This is contact method" . "<br/>";
$obj = new class_content();
echo $obj->username . "<br/>";
$obj->greeting();
echo "<br/>";

$obj = new class_social();
echo $obj->password . "<br/>";
echo $obj->greeting() . "<br/>";
$obj->verifyfb() . "<br/>";
echo "<hr/>";


?>
