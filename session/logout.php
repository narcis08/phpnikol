<?php
session_start();

$_SESSION['name'] = [];
header('Location: session.php');


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
