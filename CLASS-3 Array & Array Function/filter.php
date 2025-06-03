<?php


$number = array(4,6,4,87,5,8,4,8 );

$evenNumber = [];
$oddNumber = [];

foreach($number as $num){
    if ($num % 2 == 0) {
        # code...
        $evenNumber [] = $num;
    }else{
        $oddNumber [] = $num;
    }
}

print_r($evenNumber);
echo "<br>";
print_r($oddNumber);

$evenNumber =  array_filter ($number, function($num){

if($num % 2 ==0){
return  $num % 2 == 0;
}
}

);

print_r($evenNumber);