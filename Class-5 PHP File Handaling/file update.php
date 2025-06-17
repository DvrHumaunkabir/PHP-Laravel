<?php
/*$file_name="example2.htnl";
$content = "<h1>Php Laravel</h1>";

file_put_contents($file_name,$content,FILE_APPEND);
*/
$file_name="example2.htnl";
$content = "<h1>Php Laravel</h1>";
$file =fopen($file_name,"a");
fwrite($file,$content);
fclose($file);
