<?php

    $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'lesson12'  //название б.д.
    );

    if(!$connection) {
        echo "Подключение к БД не успешно";
    }


?>