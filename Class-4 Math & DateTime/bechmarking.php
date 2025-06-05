<?php

$date = "3rd january , 2005";

$start = microtime(true);
for($x=0; $x<1000; $x++){
 date("Y/m/d" ,strtotime($date));
 (new DateTime ($date))->format("Y/M/d");
}

 $end = microtime(true);


echo "<br>";

echo ($end-$start)*1000;

