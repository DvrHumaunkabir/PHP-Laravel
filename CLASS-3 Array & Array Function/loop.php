<?php
$number = array(4,6,4,87,5,8,4,8 );
$countrys  = [
"name" =>" Humaun kabir",
"roll" => 1,
"age" => 25,
"country" => "Bangladesh",
];



$numberOfItems = count($number);

foreach ($number as $number){
    echo $number ;
}


foreach($countrys as $country){
    echo $country;
    echo "<br>";
}

foreach ($countrys as $key => $value){
    echo "$key = $value ";
     echo "<br>";
}