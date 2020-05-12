<?php 

$file = "test.txt";
$handle = fopen($file, "r");

if($handle) {
    echo $content = fread($handle, filesize($file));
    fclose($handle);
} else {
    echo "Open file failed.";
}
?>