<?php

// получаем имя пользователя
$name = $_GET['name'];
$users = file('users.txt');
include_once 'header.php';
?>
<?php
foreach ($users as $user) :
    if ($name == explode(':', $user)[0]) { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <img src="img/<?= explode(':', $user)[5]?>" alt="" class="img-fluid">
            <input type="file" name="avatar">
            <input type="text" value="<?= explode(':', $user)[0]?>" name="name">
            <input type="text" value="<?= explode(':', $user)[1]?>" name="login">
            <input type="text" value="<?= explode(':', $user)[2]?>" name="email">
        </form>
            <?php

            break;
        }
    endforeach;?>
</div>
</body>
</html>
