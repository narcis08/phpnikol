<?php

/* 1. Создать список юзеров
 * 2. Создайте страницу профиля,
 * в котором можно загружать аватарку,
 * должны быть поля Имя, почта, логин,
 * номер телефона, информация о себе.
 * Кнопка сохранить.
 * Информацию хранить в файле.
 * 3. Создать форму созданию юзера.
 *
 *
 *  */
include_once 'header.php';
?>

<a href="create.php" class="btn btn-success">Создать юзера</a>
<?php

// получаем юзеров
$users = file('users.txt');
foreach ($users as $user) : ?>

    <h5 class="card-title"><?= explode(':', $user)[2]?></h5>
    <p class="card-text"><?= explode(':', $user)[4]?></p>
    <a href="user.php?name=<?= explode(':', $user)[0]?>"
       class="btn btn-primary">Редактировать</a>

<?php endforeach;?>


</body>
</html>
