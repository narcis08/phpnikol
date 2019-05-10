<?php

    $connection = mysqli_connect(
        'localhost',
        'root',
        '',
        'cw0505'
    );

    if(!$connection) {
        echo "Подключение к БД не успешно";
    }


?>