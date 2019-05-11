<?php

include "../includes/db.php";
include "includes/header.php";
include "includes/nav.php";
include "functions.php";

if(isset($_POST['store'])) {
    $name = htmlspecialchars($_POST['name']);
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);



    $sql_create = "INSERT INTO users(name, login, password) VALUES ('{$name}', '{$login}', '{$password}')";
    $create_result = mysqli_query($connection, $sql_create);
    confirmQuery($create_result);

}
?>

<div id="page-wrapper">

    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Старница управления пользователями
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>
                        <a href="">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-file"></i> Blank Page
                    </li>
                </ol>
            </div>

            <form action="" method="post"  enctype="multipart/form-data">
                <input type="text" name="name" class="form-control" placeholder="name">
                <input type="text" name="login" class="form-control" placeholder="login">
                <input type="text" name="password" class="form-control" placeholder="password">

                <input type="submit" name="store" value="авторизация">
            </form>


        </div>


    </div>


</div>


</div>


<?php

include "includes/footer.php";
?>


