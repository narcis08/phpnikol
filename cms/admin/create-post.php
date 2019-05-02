<?php


include "../includes/db.php";
include "includes/header.php";
include "includes/nav.php";
include "functions.php";

?>

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Старница управления постами
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

            <div class="col-md-12">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Имя</th>
                        <th>Картинка</th>
                        <th>Управления</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $sql = "SELECT * FROM posts";
                    $result = mysqli_query($connection, $sql);
                    confirmQuery($result);
                    foreach ($result as $post) :

                        ?>

                        <tr>
                            <td><?=$post['id']?></td>
                            <td><?=$post['title']?></td>
                            <td>
                                <a href=""=<?=$post['image']?>" class="btn btn-primary"> </a>

                            </td>
                        </tr>

                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php

include "includes/footer.php";
?>


