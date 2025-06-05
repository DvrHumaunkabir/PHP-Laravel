<?php

$number =  mt_rand(1,2);

if($number==1){
echo " $number is Head";
}else{
    echo " $number is Teil";
}

// ternory oparator

echo mt_rand(1,2) == 1 ?  "Head" : "Tail";



