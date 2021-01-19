<?php

date_default_timezone_set("Asia/Yangon");

// 1 Jan 1970 UTC

$getdate = getdate();
// beautyprint($getdate);

echo "This is seconds " . $getdate["seconds"]. "<br/>";
echo "This is minutes " . $getdate["minutes"]. "<br/>";
echo "This is hours " . $getdate["hours"]. "<br/>";
echo "This is mday " . $getdate["mday"]. "<br/>";
echo "This is wday " . $getdate["wday"]. "<br/>";
echo "This is mon " . $getdate["mon"]. "<br/>";
echo "This is year " . $getdate["year"]. "<br/>";
echo "This is yday " . $getdate["yday"]. "<br/>";
echo "This is weekday " . $getdate["weekday"]. "<br/>";
echo "This is month " . $getdate["month"]. "<br/>";
echo "This is 0  " . $getdate["0"]. "<br/>";

$time = time();
echo "This is time stamp 0 " . $time;

echo "<hr/>";

// DATE/TIME FORMAT
// date ("format",timestamp)

$date = date("a",$time);
echo "this is format a = " . $date . "<br/>";//am/pm

$date = date("A",$time);
echo "this is format A = " . $date . "<br/>";//AM/PM

$date = date("d",$time);
echo "this is format d = " . $date . "<br/>";//date leading zero (06)

$date = date("D",$time);
echo "this is format D = " . $date . "<br/>";//weekday (sun,mon,tue)

$date = date("F",$time);
echo "this is format F = " . $date . "<br/>";//Month (December,January)

$date = date("g",$time);
echo "this is format g = " . $date . "<br/>";//Hour by num (12 hour format) no leading zero

$date = date("G",$time);
echo "this is format G = " . $date . "<br/>";//Hour by num(24 hour format) leading zero

$date = date("h",$time);
echo "this is format h = " . $date . "<br/>";//Hour by num (12 Hour format) Leading zero

$date = date("H",$time);
echo "this is format H = " . $date . "<br/>";//Hour by num (24 Hour format) no leading zero

$date = date("i",$time);
echo "this is format i = " . $date . "<br/>";//Minute by num

$date = date("j",$time);
echo "this is format j = " . $date . "<br/>";//Month day no leading zero

$date = date("l",$time);
echo "this is format l = " . $date . "<br/>";//weekday full string (sunday,monday,tuesday)

$date = date("L",$time);
echo "this is format L = " . $date . "<br/>";//Leap year?  (1 = true,0 = false)

$date = date("m",$time);
echo "this is format m = " . $date . "<br/>";//month by num (12) leading zero

$date = date("M",$time);
echo "this is format M = " . $date . "<br/>";//month by string (Dec,Jan,Feb)

$date = date("n",$time);
echo "this is format n = " . $date . "<br/>";//month by num(12) no leading zero

$date = date("r",$time);
echo "this is format r = " . $date . "<br/>";//Full Time stamp default time zone

$date = date("s",$time);
echo "this is format s = " . $date . "<br/>";//second

$date = date("U",$time);
echo "this is format U = " . $date . "<br/>";//Full time stamp all number

$date = date("y",$time);
echo "this is format y = " . $date . "<br/>";//Year (two digits)

$date = date("Y",$time);
echo "this is format Y = " . $date . "<br/>";//Year (four digits)

$date = date("z",$time);
echo "this is format z = " . $date . "<br/>";// days of year

echo "<hr/>";

$df = date("H:i:s",$time);
echo $df . "<br/>";

$df = date("H-i-s",$time);
echo $df . "<br/>";

$df = date("d/m/y",$time);
echo $df . "<br/>";

$df = date("D/M/Y",$time);
echo $df . "<br/>";

$df = date("Y/m/D",$time);
echo $df . "<br/>";

$df = date("d/m/Y h:i:s",$time);
echo $df . "<br/>";







    

function beautyprint($arr){
    echo "<pre>" .print_r($arr,true)."</pre>";
}
?>