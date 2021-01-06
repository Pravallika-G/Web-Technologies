<?php
$myfile = fopen("NewFile.txt", "r");
echo fread($myfile,filesize("NewFile.txt"));
fclose($myfile);
?>