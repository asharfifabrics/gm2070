<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$url=fgets($myfile);
fclose($myfile);
header("location:".$url);
exit();
?>
