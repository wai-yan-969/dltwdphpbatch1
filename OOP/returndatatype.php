<?php
class returndatatype{
    public function strout($req) : string{
        echo "original req" . "<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return output";
        return $req;
    }

    public function intout($req) : int{
        echo "original req" . "<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return output";
        return $req;
    }

    public function boolout($req) : bool{
        echo "original req" . "<br/>";
        var_dump($req);

        echo "<br/>";
        echo "Return output";
        return $req;
    }
}

$obj = new returndatatype();
echo "this is return data type" . "<br/>";
//$test = $obj->strout(true);
//$test = $obj->strout("aung aung");
//$test = $obj->strout(200);
//var_dump($test);

//$test = $obj->intout(true);
//$test = $obj->intout("aung aung");
//$test = $obj->intout(200);
//var_dump($test);

//$test = $obj->boolout(true);
//$test = $obj->boolut("aung aung");
$test = $obj->boolout(200);
var_dump($test);

echo "<hr/>";
?>