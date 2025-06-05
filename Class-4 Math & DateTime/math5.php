<?php

$year = 2002;



if (isLeapYear($year)){
    echo "Leap Year";
}else{
    echo " Not Leap Year";
}


function isLeapYear ($year){
    $date = "$year/02/29";
    $m =date("m" ,strtotime($date));
    return $m == "02";
}


 

