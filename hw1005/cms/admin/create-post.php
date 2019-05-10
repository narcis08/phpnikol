<?php

include "../includes/db.php";
include "includes/header.php";
include "includes/nav.php";
include "functions.php"; // now()

    if(isset($_POST['store'])) {
        $title = htmlspecialchars($_POST['title']);
        $author = htmlspecialchars($_POST['author']);
        $created_at = htmlspecialchars($_POST['created_at']);
        $content = htmlspecialchars($_POST['content']);
        $image = $_FILES['image']['name'];
//        $image = htmlspecialchars($_POST['image']);

        $sql_create = "INSERT INTO posts(title, author, created_at, content, image, cat_id) VALUES ('{$title}', '{$author}', now(), '{$content}', '{$image}', 1)";
        $create_result = mysqli_query($connection, $sql_create);
        confirmQuery($create_result);

    }
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

            <form action="" method="post"  enctype="multipart/form-data">
                <input type="text" name="title" class="form-control" placeholder="title">
                <input type="text" name="author" class="form-control" placeholder="author">
                <input type="text" name="created_at" class="form-control" placeholder="created">
                <input type="text" name="content" class="form-control" placeholder="content">
                <input type="file" name="image" class="form-control" placeholder="image">
                <input type="text" name="cat_id" class="form-control" placeholder="cat">

                <input type="submit" name="store" value="Создать">
            </form>


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

