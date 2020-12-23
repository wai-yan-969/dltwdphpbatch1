<?php
class datatypecasting{

    public function typecastingbyint(int $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbystring(string $req){
        echo $req . "<br/>";
        var_dump($req);
    }
    public function typecastingbyfloat(float $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbybool(bool $req){
        echo $req . "<br/>";
        var_dump($req);
    }

    public function typecastingbyarray(array $req){
        echo "<pre>" . print_r($req,true) . "</pre>";
        var_dump($req);
    }
}

$obj = new datatypecasting;
echo "This is Data Type Casting." . "<br/>";
$obj->typecastingbyint(2.9);
//$obj->typecastingbyint(2);
//$obj->typecastingbyint("aung aung"); // error
//$obj->typecastingbyint(NULL);
//$obj->typecastingbyint(FALSE);
echo "<br/>" . "<br/>";

//$obj->typecastingbystring(2.9);
//$obj->typecastingbystring("aung aung");
//$obj->typecastingbystring(NULL);
$obj->typecastingbystring(true);
echo "<br/>" . "<br/>";

//$obj->typecastingbybool(2.9);
$obj->typecastingbybool("aung aung");
//$obj->typecastingbybool(NULL);
//$obj->typecastingbybool(FALSE);
echo "<br/>" . "<br/>";

$obj->typecastingbyfloat(2.9);
//$obj->typecastingbyfloat("aung aung");
//$obj->typecastingbyfloat(NULL);
//$obj->typecastingbyfloat(FALSE);
echo "<br/>" . "<br/>";

//$obj->typecastingbyarray(2.9);
//$obj->typecastingbyarray("aung aung");
//$obj->typecastingbyarray("a");
$obj->typecastingbyarray([]);
echo "<hr/>";
?>
