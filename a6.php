<?php
$file="a6.txt";
if(!file_exists($file)){
    file_put_contents($file,"0");
}
$read=file_get_contents($file);
$counter = $read+ 1;
file_put_contents($file,$counter);
echo "<h2>counter relode page is :- $counter</h2>";
?>