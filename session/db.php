<?php


    $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'cw30'
    );

    if(!$connection) {
        echo "Подключение к БД не успешно";
    }


?>