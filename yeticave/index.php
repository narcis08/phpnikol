<?php

include "function.php";
include "db.php";

$sql = "SELECT * FROM cathegory";
$categories = mysqli_query($connection, $sql);

$title = 'Авторизация';
$name1 = 'Alex';

$index = renderTemplate('index.php', [
    'categories' => $categories,
]);

$layout = renderTemplate('layout.php', [
    'title' => $title,
    'content' => $index,

]);

print($layout);