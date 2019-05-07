<?php
$pathDir = 'test';
$dir = opendir($pathDir);
while($a = readdir($dir)) {
   echo $a . "<br>";
 }


?>