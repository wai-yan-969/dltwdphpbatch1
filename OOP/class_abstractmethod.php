<?php
abstract class class_abstractmethod{
    // Concreate method
    public function myfun(){
        echo "i am my fun" . "<br/>";
    }

    public abstract function firstabs();
}

abstract class subabs extends class_abstractmethod{
    public abstract function secondabs();
}

class mybabychild1 extends class_abstractmethod{
    // Overwrite -> abstract Method
    public function firstabs(){
        echo "i am firstabs from babychild" . "<br/>";
    }
}

class mybabychild2 extends subabs{

    public function firstabs(){
        echo "i am firstabs from mybabychild2" . "<br/>";
    }

    public function secondabs(){
        echo "i am secondabs from mybabychild2" . "<br/>";
    }
}

$myobj1 = new mybabychild1();
$myobj1->firstabs();

$mych2 = new mybabychild2();
$mych2->firstabs();
$mych2->secondabs();



echo "<hr/>";
?>
