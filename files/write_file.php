<?php 

$file = "test.txt";
$handle = fopen($file, "w");

if($handle) {
    fwrite($handle, "I love PHP");
    fclose($handle);
} else {
    echo "Open file failed.";
}
?>