<?php
$array = ['one','tw','three','four'];
foreach ($array as $arr) {
    mkdir($arr, 0777,true);
}
?>