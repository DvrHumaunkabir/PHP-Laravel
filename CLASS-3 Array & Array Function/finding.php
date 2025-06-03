<?php
$number = array(4,6,4,87,5,8,4,8 );

$countris  = [
"name" =>" Humaun kabir",
"roll" => 1,
"age" => 25,
"country" => "Bangladesh",
];



if(in_array(4,$number)){
      echo "yes ";

}else{
      echo "not ";
}


if($position = array_search(5,$number)){
      echo " is number is found $position";
}
   

 if(array_key_exists("name",$countris)){
      echo "found";
 }



