<?php
class class_thisvariable{
    public $fullname = "Kyaw Kyaw";

    public function getname(){
//        echo $this->fullname;
        echo $this->fullname = "Ko Paw";
    }

}
$obj = new class_thisvariable;
echo "This is using \$this Variable" . "<br/>";
$obj->getname();
echo "<hr/>";
//echo $obj->fullname;


?>
