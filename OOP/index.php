<?php

//Define Class

//class abc{
//      properties
//        methods
//}

//new abc; // it is invoking class

    require_once("class_properties.php");
    require_once("class_method.php");
    require_once("class_accessmodifier.php");
    require_once("class_thisvariable.php");
    require_once("class_accessencapsulation.php");
    require_once("class_updateencapsulation.php");
    require_once("class_constructor.php");
    require_once("class_destructor.php");

    require_once("class_inheritance.php");
    require_once("class_parentconstructor.php");
    require_once("class_trait.php");
    require_once("interface.php");
    require_once("interfaceoverwriting.php");
    require_once("uscarinterface.php");
    require_once("japancarinterface.php");



    class index implements uscarinterface,japancarinterface{

        private $cars;

        public function madeinus($cars){
            $this->cars = $cars;
        }

        public function beautyprint(){
            echo "<pre>" .print_r($this->cars,true). "</pre>";
            echo "<br/>";
            echo "So today I bought " . $this->cars[2] ."<hr/>";
        }

        public function madeinjapan($cars){
            $this->cars = $cars;
        }
    }

    $arruscars = ["Ford","Chrysler","Chervrolet","Hummer","Lincoln","Jeep"];
    $arrjpcars = ["Toyota","Nissan","Suzuki","Mazda","Hino"];

$obj = new index;
echo "This is Japan cars" . "<br/>";
$obj->madeinjapan($arrjpcars);
$obj->beautyprint();
echo "This is US cars" . "<br/>";
$obj->madeinus($arruscars);
$obj->beautyprint();

require_once("anonymousfunction.php");
require_once("arraywalk.php");
require_once("datatypechecking.php");
require_once("datatypecasting.php");//check error and line
require_once("objectcasting.php");
require_once("returndatatype.php");
require_once("class_magicgetandset.php");
require_once("serializeandunserialize.php");
require_once("class_magicsleepandwakeup.php");
require_once("class_staticmodifier.php");
require_once("class_magicissetandunset.php");
require_once("class_magiccallandcallstatic.php");




?>