<?php
require_once "../config/connect_server.php";

if(isset($_GET['category_id'])){
    $category_id = $_GET['category_id'];
    $category_id_search = "SELECT * FROM category WHERE category_id = $category_id";
    $category_search_result = mysqli_query($connect,$category_id_search);
    if(mysqli_num_rows($category_search_result)>0){
        $category_edit = mysqli_fetch_assoc($category_search_result);
    }
    else{
        header("Location: admin_category.php");
    } 

    if(isset($_POST['submit_btn'])){
            $category_name=$_POST['category_name'];

             //Check img if there are a new img 
             if($_FILES['category_img']['name'] != ""){
                $category_img=$_FILES['category_img']['name'];
                $category_tmp_img=$_FILES['category_img']['tmp_name'];
                move_uploaded_file($category_tmp_img,"../public/img/".$category_img);
            }
            else{
                $category_img = $category_edit['category_img'];
            }


            // echo '<pre>';
            // print_r($_FILES);
            // die();
                $category_insert_query = "UPDATE category
                                          SET
                                          category_name = '$category_name',
                                          category_img = '$category_img'
                                          WHERE category_id = $category_id
                                          ";
                mysqli_query($connect,$category_insert_query);
                header("Location: admin_category.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThinkPro-Member Management-Add Category</title>
    <link rel="stylesheet" href="../public/vendor/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="../public/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/admin_resource/css/custom.css">
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
             <!-- Header -->

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="../public/img/ThinkPro-Logo-PNG cut.png" alt="" height="35" class="d-inline-block align-text-top">
                </a>
                <div class="dropdown d-flex">
                    <div class=" d-flex">
                        <i class="fa-solid fa-user my-auto mx-3"></i>
                        <p class="my-auto">Admin</p>
                    </div>
                    <button class="btn dropdown-toggle bg-transparent border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                  </div>
            </div>
        </nav>
        </div>
        <div class="row">
            <div class="col-10 mx-auto" style="margin-top:5em;">
                <div class="row">
                    <div class="col-3 shadow p-3 bg-body rounded mb-3 min-vh-100">
                        <div class="btn-group-vertical col-12 " role="group" aria-label="Basic example">
                            <a href="admin_home.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Dashboard</a>
                            <a href="admin_user.php" class="btn border-0 rounded text-start " tabindex="-1" role="button" aria-disabled="true">Member management</a>
                            <a href="admin_category.php" class="btn border-0 rounded text-start bg-primary text-light" tabindex="-1" role="button" aria-disabled="true">Category management</a>
                            <a href="admin_product.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Product management</a>
                            <a href="admin_order.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Order management</a>
                          </div>
                    </div>
                    <div class="col-9">

                        <!-- Title -->
                         <div class="row">
                            <div class="col">
                                <h2 class="text-muted mb-4">Edit category</h2>
                            </div>
                         </div>

                         <!-- Main -->
                        <div class="row">
                            <div class="col-10">
                                <form role="form" method="post" action="" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <?php 
                                            if(isset($errors['category_name'])){
                                                echo '<div class="alert alert-danger" role="alert">';
                                                echo $errors['category_name'];
                                                echo '</div>';
                                            }
                                            elseif(isset($errors['category_exist'])){
                                                echo '<div class="alert alert-danger" role="alert">';
                                                echo $errors['category_exist'];
                                                echo '</div>';
                                            }
                                        ?>
                                                                          
                                    </div>
                                    <div class="mb-3">
                                        <label for="category_name" class="form-label">Category name</label>
                                        <input type="text" class="form-control" id="category_name" name="category_name" value ="<?php echo $category_edit['category_name']; ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_img" class="form-label">Category image</label>
                                        <input class="form-control" type="file" id="category_img" name="category_img" onchange = "loadFile(event)">
                                     
                                        <img class="col-12 my-3" id = "img_preview" src = "../public/img/<?php echo $category_edit['category_img'] ?>">
                                    </div>
                                    
                                    <input type="submit" class="btn btn-success my-2 col-2" value="Edit" name="submit_btn"></input>
                                  </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../public/vendor/font_awesome/js/all.min.js"></script>
    <script src="admin_resource/js/change_preview_img.js"></script>
</body>
</html>