<?php
$date = "1999-04-23";

echo date("d/m/y");// format 05/06/2025
echo date("d/m/Y"); // format 05/06/2025
echo date("d/M/Y"); // format 05/Jun/2025

echo date("l/M/Y"); // format Thursday/Jun/2025

date_default_timezone_set('Asia/Dhaka');  // defult time 24 howr
echo date("d/M/Y H:i:s");
echo "<br>";
echo date("d/M/Y h:i:s");  // 12 howrs

//unix epoch january 1, 1971

echo strtotime("now"); // timestamp 1749149471

echo date('l',strtotime($date));  // Friday


echo date('jS F, l, Y',strtotime($date)); //format 23rd April, Friday, 1999