
<?php

$value=$_POST['login'];


if ($value==""){
    echo "Пароль не введен!";
} 
elseif (strlen($_POST['login'])<3) {
    echo "Пароль должен иметь более трёх символов!";
}

else {
    echo "Ваш пароль  ".$_POST['login'];
}

?>