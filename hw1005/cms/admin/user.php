<?php

include "../includes/db.php";
include "includes/header.php";
include "includes/nav.php";
include "functions.php";

?>

<div id="page-wrapper">

    <div class="container-fluid">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Старница пользователя
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


            <div class="col-md-12"> <a href="create-use.php" class="btn btn-success" > Регистрация </a>

            </div>
            <div class="col-md-12"> <a href="create-use.php" class="btn btn-success" > Авторизация </a>

            </div>

            <div class="col-md-6">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Login</th>
                        <th>Password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sql = "SELECT * FROM users";
                    $result = mysqli_query($connection, $sql);
                    confirmQuery($result);
                    foreach ($result as $user) :

                        ?>

                        <tr>
                            <td><?=$user['id']?></td>
                            <td><?=$user['name']?></td>
                            <td><?=$user['login']?></td>
                            <td><?=$user['password']?></td>




                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>

</div>


</div>

</div>
<?php

include "includes/footer.php";
?>
