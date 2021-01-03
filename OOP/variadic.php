<?php
function myvd(...$var){
//    $var = ["maung maung","aung aung","zaw zaw"]; (behind the sense)

//    echo $var[1] . "<br/>"; // result = they r my  elder brothers.

    echo $var[0][1] . "<br/>";
}
echo "This is variadic function" . "<br/>";
//myvd("maung maung", "aung aung", "zaw zaw");

myvd(["maung maung","aung aung", "zaw zaw"],"they are my elder brothers","hey");

echo "<hr/>";
?>
