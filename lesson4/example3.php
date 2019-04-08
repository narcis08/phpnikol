<?php

if (strlen($_POST['login'])<3) {
    echo "Логин должен быть не менее 3 и не более 30 символов";
}

else {
    echo "Ваш логин: ".$_POST['login'].'<br>'."Ваш e-mail: ".$_POST['name'].'<br>'."Ваш пароль: ".$_POST['psw'];
}

?>