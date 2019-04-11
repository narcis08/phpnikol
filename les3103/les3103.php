<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!--Сделайте чекбокс: если он отмечен, то выведите 'отмечен', если не отмечен - то выведите 'не отмечен'.-->
<?php




if (isset($_GET['checkbox'])) {
    echo 'Отмечен';
} else {
    echo 'Не отмечен';
}

?>
</body>
</html>