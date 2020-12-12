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


$obj = new class_content();
echo $obj->username;

?>
