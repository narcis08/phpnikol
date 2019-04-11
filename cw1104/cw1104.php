<?php
/*session_start();
    if (isset($_SESSION['visit'])) {
   print $_SESSION['visit'];
    }
$_SESSION['visit'] = 'test';*/

//1. по заходу на страницу запишите в сессию текст 'test'.
//затем обновите страницу и выведите содержимое сессии на экран.

?>
<?php
session_start();

if (isset($_SESSION['visit'])) {
    print $_SESSION['visit'];
}
$_SESSION['visit'] = 'test';
//2. пусть у вас есть две страницы сайта. «апишите на первой
//странице что-нибудь в сессию, а затем выведите это при
//заходе на другую страницу.
?>


