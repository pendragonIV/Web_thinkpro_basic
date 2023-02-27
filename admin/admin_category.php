<?php 
require_once "../config/connect_server.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThinkPro-Category Management</title>
    <link rel="stylesheet" href="../public/vendor/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="../public/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="admin/admin_resource/css/custom.css">
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
            <div class="col-10  mx-auto"  style="margin-top:5em;">
                <div class="row">
                    <div class="col-3 shadow p-3 bg-body rounded mb-3 min-vh-100">
                        <div class="btn-group-vertical col-12 " role="group" aria-label="Basic example">
                            <a href="admin_home.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Dashboard</a>
                            <a href="admin_user.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Member management</a>
                            <a href="admin_category.php" class="btn border-0 rounded text-start bg-primary text-light" tabindex="-1" role="button" aria-disabled="true">Category management</a>
                            <a href="admin_product.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Product management</a>
                            <a href="admin_order.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Order management</a>
                          </div>
                    </div>
                    <div class="col-9">

                        <!-- Title -->
                         <div class="row">
                            <div class="col">
                                <h2 class="text-muted">Category management site</h2>
                            </div>
                         </div>

                         <!-- Main -->
                         <div class="row">

                            <div class="container-fluid">
                              <form class="d-flex my-1">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-info" type="submit">Search</button>
                              </form>
                            </div>

                         </div>

                         <div class="row">
                            <div class="col-12">
                                <a href="add_category.php" type="button" class="btn btn-outline-success my-4" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="fa-solid fa-plus"></i>
                                    New category
                                </a>
                            </div>
                         </div>

                         <div class="row">

                            <div class="col">
                                <table class="table my-3">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $select_all_category = "SELECT * FROM category";
                                        $query_all_category = mysqli_query($connect,$select_all_category);
                                        if(mysqli_num_rows($query_all_category) > 0){
                                            while($row = mysqli_fetch_assoc($query_all_category)){

                                        
                                        ?>
                                      <tr>
                                        <th scope="row"><?php echo $row['category_id'] ?> </th>
                                        <td> <?php echo $row['category_name'] ?> </td>
                                        <td>
                                            <a href="edit_category.php?category_id= <?php echo $row['category_id'] ?>" type="button" class="btn btn-outline-primary my-1" tabindex="-1" role="button" aria-disabled="true">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="#" type="button" class="btn btn-outline-danger my-1" tabindex="-1" role="button" aria-disabled="true">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                           
                                        </td>
                                      </tr>

                                      <?php 
                                          }
                                        }
                                      ?>
                                    </tbody>
                                  </table>
                            </div>

                         </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../public/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../public/vendor/font_awesome/js/all.min.js"></script>
</body>
</html>