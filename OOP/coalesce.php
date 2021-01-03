<?php
function mycoal(...$var){
    echo $var[0] ?? "You are trying to print out result without paying arguments";
}
echo "This is coalesce function" . "<br/>";
mycoal();

echo "<hr/>";
?>