<?php
session_start();
/*$visit_count = 1;

  if (isset($_SESSION['visit_count'])) {
      $visit_count = $_SESSION['visit_count'] + 1;

  }
  $_SESSION['visit_count'] = $visit_count;

echo $visit_count;

1.по заходу на страницу запишите в сессию текст 'test'. «атем обновите страницу и выведите содержимое сессии на экран.

$_SESSION['name'] = 'Vasya';

echo "Hello";*/


$_SESSION['name'] = [];



?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if(empty($_SESSION['name'])) { ?>

    <form action="">

        <input type="text" name="name" class="form-control" placeholder="login">
        <input type="text" name="password" class="form-control" placeholder="password">

        <input type="submit" name="store" value="авторизация">
    </form>

    <?php
}
else {
    echo "Welcome " . $_SESSION['name'];
}


?>


</body>
</html>
