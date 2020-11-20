<?php

    $myran = rand();
    echo $myran;
    
    echo "<br/>";

    $ranmax = getrandmax();
    echo $ranmax;

    echo "<br/>";

    $ranrange = rand(10000,90000);
    echo $ranrange;

    echo "<br/>";

    $yourscore = rand(1,10);
    $myscore = rand(1,10);

    if($yourscore > $myscore){
        echo "you are winner";
    }elseif($yourscore < $myscore){
        echo "I am winner";
    }else{
        echo "Same Score";
    }

?>