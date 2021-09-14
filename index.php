<?php
$cfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$readurl=fgets($cfile);
fclose($cfile);
header("location:".$readurl);
exit();
?>
