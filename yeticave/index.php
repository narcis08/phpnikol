<?php

include "function.php";
include "db.php";

$sql = "SELECT * FROM cathegory";
$categories = mysqli_query($connection, $sql);
$sql = "SELECT * FROM lots";
$lotes = mysqli_query($connection, $sql);

$index = renderTemplate('index.php', [
    'categories' => $categories,
    'lotes' => $lotes,
]);

$layout = renderTemplate('layout.php', [
    'title' => $title,
    'content' => $index,

]);

print($layout);