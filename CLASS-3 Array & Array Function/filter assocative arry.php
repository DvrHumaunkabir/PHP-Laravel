<?php
$countrys  = [
"name" =>" Humaun kabir",
"roll" => "one",
"age" => "twent",
"country" => "Bangladesh",
];




$newCountry = array_filter($countrys,function($capital,$country){
   if($country[0]=='r'){
    return true;
   }
},ARRAY_FILTER_USE_BOTH);

print_r($newCountry);



