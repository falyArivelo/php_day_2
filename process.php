<?php 

    $x = 0;
    $y=1;
    // Table boolean
    

    //ET
    echo "--AND--";

    if($x == 0 && $y ==0){
        echo 0;
    }

    if($x == 0 && $y ==1){
        echo 0;
    }

    if($x == 1 && $y ==0){
        echo 0;
    }

    if($x == 1 && $y ==1){
        echo 1;
    }

    echo "<br>";

    //OU
    echo "--OR--";


    if($x == 0 && $y ==0){
        echo 0;
    }

    if($x == 0 && $y ==1){
        echo 1;
    }

    if($x == 1 && $y ==0){
        echo 1;
    }

    if($x == 1 && $y ==1){
        echo 1;
    }

    echo "<br>";
