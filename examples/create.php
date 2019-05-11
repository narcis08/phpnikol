<?php

    if(isset($_POST['submit'])) {
        $files = $_FILES['avatar'];
        $login = $_POST['login'];

        $tmp_name = $files['tmp_name'];
        $name = $files['name'];

        if(!file_exists('img')) {
            mkdir('img', 0777);
        }

        if (move_uploaded_file($tmp_name, 'img/' . $name)) {
            echo 'файл загружен';
        }
        // скрипт сохранения информации о пользователе
    }

include_once 'header.php';
?>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <img src="img/<?= explode(':', $user)[5]?>" alt="" class="img-fluid">
    <input type="file" name="avatar">
    <input type="text" value="<?= explode(':', $user)[0]?>" name="name">
    <input type="text" value="<?= explode(':', $user)[1]?>" name="login">
    <input type="text" value="<?= explode(':', $user)[2]?>" name="email">
    <input type="submit" name="submit">
</form>
</body>
</html>