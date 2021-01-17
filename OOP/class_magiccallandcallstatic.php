<?php
class class_magiccallandcallstatic{

    public function __call($method,$parameter){
        echo "You are trying to call method ${method}. It is not exists Sir" . "<br/>";
//        echo "${parameter}"; // Result error array to string conversion
        echo "<pre>".print_r($parameter,true)."</pre>";

    }

    public static function __callstatic($method,$parameter){
        echo "You are trying to call method ${method}. It is not exists Sir" . "<br/>";
//        echo "${parameter}"; // Result error array to string conversion
        echo "<pre>".print_r($parameter,true)."</pre>";

    }
}

$obj = new class_magiccallandcallstatic();
//$obj->meth();
//$obj->meth("aung aung");
//$obj->meth(["aung aung",23]);

//$obj::meth2();
$obj::meth2("404 error");
//$obj::meth2(["aung aung","kaung kaung"]);
echo "<hr/>";
?>