<?php
$array=['1.txt','2.txt','3.txt'];

foreach ($array as $arr) {
    unlink($arr);
};

?>