<?php


$array = ['1.txt','2.txt','3.txt','4.txt','5.txt'];

foreach ($array as $arr) {
    if (file_exists($arr)) {
        echo $arr." - Файл существует"."<br>";
    } else {
        echo $arr." - Файл не существует";
    }
};









?>