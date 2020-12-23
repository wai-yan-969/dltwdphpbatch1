<?php
    // Regular function - manual function

function regfun1(){
    echo "this is regular manual function";
}
regfun1();
echo "<br/>";

// Anonymous function (Nameless Function) fun1
$anonfun1 = function(){
    echo "this is anon function" . "<br/>";
};
$anonfun1();

// Anonymous function (single parameter) fun2
$anonfun2 = function($name){
    echo "this is anon function . getting value is ${name}" . "<br/>";
};
$anonfun2("aung aung");

// Anonymous function (multi parameter) fun3
$anonfun3 = function($name,$age){
    echo "this is anon function . getting value is ${name}."." ". "age is ${age}" . "<br/>";
};
$anonfun3("mg mg",27);
echo "<hr/>";

// Lambda style
function mycal($num1,$num2,$onefun){
    $total = $num1 + $num2;
    $onefun($total);
}
$fun = function($result){
    echo "Total result is = ${result}." . "<br/>";
};
mycal(100,200,$fun);

//Closure Function
$num1 = 300; // Global Variable
$num2 = 400; // Global Variable
function getglo(){
    global $num1;
    global $num2;
    echo "this is regular function . my getting value is " . $num2 . "<br/>";
}
getglo();

$clofun = function() use($num2){
  echo "This is closure function . my getting value is " . $num2 . "<br/>";
};
$clofun();

// Dynamic Function
//-manual function
$dynfun1 = create_function('','echo "This is Dynamic Function". "<br/>";');
$dynfun1();

//-single function
$dynfun2 = create_function('$name','echo "This is Single Dynamic Function ${name}"."<br/>";');
$dynfun2("aung aung");

//-multi function
$dynfun3 = create_function('$name,$age','echo "This is Multi Dynamic Function name is ${name}. age is ${age}" . "<hr/>";');
$dynfun3("kopaw",23);

?>
