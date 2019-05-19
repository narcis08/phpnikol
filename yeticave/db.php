<?php

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'yeticave'
);

if(!$connection) {
    echo "Подключение к БД не успешно";
}


?>