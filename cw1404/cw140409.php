<?php

$filename = 'test9.txt';

if (file_exists($filename)) {
    echo "Файл $filename существует";
} else {
    echo "Файл $filename не существует";
}

?>