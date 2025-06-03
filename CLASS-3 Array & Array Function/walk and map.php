<?php
$number = array(4,6,4,87,5,8,4,8 );

$squre = [];
array_walk($number,function($num){
echo $num;
});


foreach ($number as $num){
    $squre[] = $num * $num ;
}


print_r($squre);
