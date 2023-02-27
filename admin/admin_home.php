<?php 
require_once "../config/connect_server.php";

$totalProductQuery = "SELECT count(product_id) as total from product";
$totalProduct = mysqli_query($connect,$totalProductQuery);
$total = mysqli_fetch_assoc($totalProduct);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThinkPro-Manage Site</title>
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
            <div class="col-10 mx-auto"  style="margin-top:5em;">
                <div class="row">
                    <div class="col-3 shadow p-3 bg-body rounded mb-3 min-vh-100">
                        <div class="btn-group-vertical col-12 " role="group" aria-label="Basic example">
                            <a href="admin_home.php" class="btn border-0 rounded text-start bg-primary text-light" tabindex="-1" role="button" aria-disabled="true">Dashboard</a>
                            <a href="admin_user.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Member management</a>
                            <a href="admin_category.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Category management</a>
                            <a href="admin_product.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Product management</a>
                            <a href="admin_order.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Order management</a>
                        
                          </div>
                    </div>
                    <div class="col-9">

                          <div class="row">
                            <div class="col-6">
                                <div class="card text-light bg-body mb-3">
                                    <div class="card-body d-flex">
                                        <div class="my-auto ms-5 me-3">
                                            <i class="fa-solid fa-mobile-screen fs-1 text-success"></i>
                                        </div>
                                        <div>
                                            <h6 class="card-title text-dark text-muted">Total product</h6>
                                            <h3 class="card-text fw-bold text-dark"><?php echo $total['total'] ?></h3>
                                            
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-light bg-body mb-3">
                                    <div class="card-body d-flex">
                                        <div class="my-auto ms-5 me-3">
                                            <i class="fa-solid fa-comments fs-1 text-warning"></i>
                                        </div>
                                        <div>
                                            <h6 class="card-title text-dark text-muted">Total comment</h6>
                                            <h3 class="card-text fw-bold text-dark">100</h3>
                                            
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-light bg-body mb-3">
                                    <div class="card-body d-flex">
                                        <div class="my-auto ms-5 me-3">
                                            <i class="fa-solid fa-user fs-1 text-danger"></i>
                                        </div>
                                        <div>
                                            <h6 class="card-title text-dark text-muted">Total user</h6>
                                            <h3 class="card-text fw-bold text-dark">100</h3>
                                            
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="card text-light bg-body mb-3">
                                    <div class="card-body d-flex">
                                        <div class="my-auto ms-5 me-3">
                                            <i class="fa-solid fa-rectangle-ad fs-1 text-info"></i>
                                        </div>
                                        <div>
                                            <h6 class="card-title text-dark text-muted">Total ad</h6>
                                            <h3 class="card-text fw-bold text-dark">100</h3>
                                            
                                        </div>
                                    </div>
                                  </div>
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