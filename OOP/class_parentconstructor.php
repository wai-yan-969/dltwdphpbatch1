<?php
class class_parentconstructor{
    public $name = "kyaw kyaw";
    public $email = "kyawkyaw@gmail.com";
    public $password = "123456";

    public function __construct(){
        echo "i am start working from parent";
        echo "<br/>";
    }
}

class class_child1 extends class_parentconstructor{

}

class class_child2 extends class_parentconstructor{

    //Method Overwriting - Parent Method OW
    public function __construct(){
        parent::__construct();
        echo "i am start working from child2";
    }
}

echo "This is Parent Constructor and Child2 Constructor" . "<br/>";
$obj = new class_child2();
echo "<hr/>";
?>