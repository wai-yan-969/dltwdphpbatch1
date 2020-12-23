<?php
$myarr = ["red","black","white","green","blue"]; // manual arr

function myfun($value,$key){
    echo "key is = ${key} and value is = ${value}" . "<br/>";
}
echo "This is array walk by manual array" . "<br/>";
array_walk($myarr,"myfun");

$myarr2 = ["name"=>"aung aung","age"=>"30","city"=>"yangon","phone"=>"099876546"];// associative array
echo "This is array walk by associative array" . "<br/>";
array_walk($myarr2,"myfun");

$myarr3 = [
  ["name"=>"aung aung","age"=>"30","city"=>"yangon","phone"=>"09876545689"],
  ["name"=>"kyaw kyaw","age"=>"20","city"=>"yangon","phone"=>"09876545689"],
  ["name"=>"ko ko","age"=>"10","city"=>"yangon","phone"=>"09876545689"]
];// multidimensional array

function myfun2($val,$ky){
    foreach($val as $key=>$value){
        echo "Key is ${key} and Value is ${value}" . "<br/>";
    }
}
echo "This is array walk by multi dimensional array" . "<br/>";
array_walk($myarr3,"myfun2");
echo "<hr/>";
?>
