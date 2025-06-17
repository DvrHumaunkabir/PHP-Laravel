<?php
/*$files = scandir("demo");
foreach($files as $eachFile){
    echo $eachFile;
}
*/


$file_name = "test.text";
if(file_exists($file_name)){
    unlink($file_name);
}else{
    echo "File Not Exists";
}

if (is_dir("demo")){
    rmdir("demo");

}else {
    echo "File Not Exits";
}
