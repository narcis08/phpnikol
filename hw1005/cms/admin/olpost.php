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

            <div class="col-md-12"> <a href="create-post.php" class="btn btn-success" > Создать пост </a>

            </div>

            <?php
            if(isset($_GET['delete'])) {
                $cat_id = $_GET['delete'];

                $delete_sql = "DELETE FROM posts WHERE id = $cat_id LIMIT 1";
                $del_result = mysqli_query($connection, $delete_sql);
                if(!$del_result) {
                    echo "Запрос не удался";
                } else {
                    echo "Категория удалена";
                }
            }
            ?>

           <?php
           if(isset($_GET['update'])) {
            $cat_id = $_GET['update'];
            $sql_one_cat = "SELECT * FROM posts WHERE id = $cat_id";
            $result_one_cat = mysqli_query($connection, $sql_one_cat);
            confirmQuery($result_one_cat);
            foreach ($result_one_cat as $post): ?>
            <form action="" method="post">
                <input type="hidden"
                       name="id"
                       class="form-control"
                       value="<?=$post['id']?>">
                <input type="text"
                       name="title"
                       class="form-control"
                       value="<?=$post['title']?>">
                <input type="text"
                       name="author"
                       class="form-control"
                       value="<?=$post['author']?>">
                <input type="text"
                       name="created_at"
                       class="form-control"
                       value="<?=$post['created_at']?>">
                <input type="text"
                       name="content"
                       class="form-control"
                       value="<?=$post['content']?>">
                <input type="text"
                       name="image"
                       class="form-control"
                       value="<?=$post['image']?>">
                <input type="text"
                       name="cat_id"
                       class="form-control"
                       value="<?=$post['cat_id']?>">
                

                <input type="submit" class="btn btn-success" name="update" value="Редактировать">
            </form>

            <?php
            endforeach;

            }
           if(isset($_POST['update'])) {
               $id = htmlspecialchars($_POST['id']);
               $title = htmlspecialchars($_POST['title']);
               $author = htmlspecialchars($_POST['author']);
               $created_at = htmlspecialchars($_POST['created_at']);
               $content = htmlspecialchars($_POST['content']);
               $image = $_FILES['image']['name'];
               $cat_id = htmlspecialchars($_POST['cat_id']);
               $update_sql = "UPDATE posts SET name='{$title}', '{$author}', now(),
               '{$content}', '{$image}', 1 WHERE id = $id";
               $upd_result = mysqli_query($connection, $update_sql);
               confirmQuery($upd_result);


           }

            ?>

            <div class="col-md-12">

                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>author</th>
                        <th>created_at</th>
                        <th>content</th>
                        <th>image</th>
                        <th>управления</th>
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
                            <td><?=$post['author']?></td>
                            <td><?=$post['created_at']?></td>
                            <td><?=$post['content']?></td>
                            <td><?=$post['image']?></td>
                            <td><?=$post['cat_id']?></td>
                            <td>
                                <a href="olpost.php?update=<?=$post['id']?>" class="btn btn-primary">
                                    Редактировать
                                </a>
                                <a
                                        href="olpost.php?delete=<?=$post['id']?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Вы уверены?')"
                                >Удалить
                                </a>
                            </td>

                        </tr>

                        <?php endforeach;?>
                    </tbody>

                </table>

            </div>
        </div>


    </div>


</div>


</div>


<?php

include "includes/footer.php";
?>


?>

