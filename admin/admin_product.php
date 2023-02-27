<?php 
require_once "../config/connect_server.php";

// thiet lap va lay ra tong so san pham hien co
$totalProductQuery = "SELECT count(product_id) as total from product";
$totalProduct = mysqli_query($connect,$totalProductQuery);
$total = mysqli_fetch_assoc($totalProduct);
// echo $total['total'];

// Thiet lap so san pham toi da tren 1 trang
$productLimit = 4;

//Thiet lap so trang bang ham ceil() cho phep lam tron len tren 1 so
$totalPage = ceil($total['total']/$productLimit);

// Thiet lap trang hien tai (khi mo trang ad_product khong co thong so de get => 1)
if(isset($_GET['current_page'])){
    $current_page = $_GET['current_page'];
}
else{
    $current_page = 1;
}

// Thiet lap san pham bat dau cua moi trang

$productStart = ($current_page - 1) * $productLimit;

$AllProductsQuery = "SELECT * FROM product
                    INNER JOIN category
                    ON product.category_id = category.category_id
                    ORDER BY product.product_id DESC
                    LIMIT $productStart,$productLimit
                    ";

$AllProductsResult = mysqli_query($connect,$AllProductsQuery);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThinkPro-Product Management</title>
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
                            <a href="admin_home.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Dashboard</a>
                            <a href="admin_user.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Member management</a>
                            <a href="admin_category.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Category management</a>
                            <a href="admin_product.php" class="btn border-0 rounded text-start bg-primary text-light" tabindex="-1" role="button" aria-disabled="true">Product management</a>
                            <a href="admin_order.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Order management</a>
                          </div>
                    </div>
                    <div class="col-9">

                        <!-- Title -->
                         <div class="row">
                            <div class="col">
                                <h2 class="text-muted">Product management site</h2>
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
                                <a href="add_product.php" type="button" class="btn btn-outline-success my-4" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="fa-solid fa-plus"></i>
                                    New product
                                </a>
                            </div>
                         </div>

                         <div class="row">

                            <div class="col">
                                <table class="table my-3">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Product name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Product image</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                      <?php 
                                      if(mysqli_num_rows($AllProductsResult) >0){
                                          while($row = mysqli_fetch_assoc($AllProductsResult)){

                                      ?>
                                            <tr>
                                            <th scope="row" class = "col-1"> <?php echo $row['product_id']; ?>  </th>
                                            <td class="col-2"> <?php echo $row['product_name']; ?>  </td>
                                            <td class="col-2"> <?php echo $row['product_price']; ?> vnd</td>
                                            <td class="col-2">
                                                <img class="col-12" src="../public/upload/<?php echo $row['product_img']; ?>">
                                            </td>
                                            <td class="col-2">
                                                
                                                <?php
                                                if($row['product_status'] == 1){
                                                    echo '<p class="bg-success rounded fs-6 py-1 text-center text-light col-9">Available</p>';
                                                }
                                                else{
                                                    echo '<p class="bg-danger rounded fs-6 py-1 text-center text-light col-9">Sold out</p>';
                                                }
                                                ?>

                                            </td>
                                            <td class="col-1">
                                                 <?php 
                                                  echo $row['category_name'];
                                                 ?>
                                            </td>
                                            <td class="col-2">
                                                <a href="edit_product.php?product_id= <?php echo $row['product_id']; ?>" type="button" class="btn btn-outline-primary my-1" tabindex="-1" role="button" aria-disabled="true">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="delete_product.php?product_id= <?php echo $row['product_id']; ?>" type="button" class="btn btn-outline-danger my-1" tabindex="-1" role="button" aria-disabled="true">
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
                         
                         <div class="row">
                            <div class="col">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php 
                                            if($current_page > 1){
                                                echo '<li class="page-item">
                                                        <a class="page-link" href="admin_product.php?current_page='.($current_page - 1).'" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                        </a>
                                                     </li>';
                                            }
                                        ?>

                                        <?php
                                            for($i  = 1; $i <= $totalPage; $i++){
                                                if($i == $current_page){
                                                    echo '<li class="page-item active"><a class="page-link" href="#">'.$i.'</a></li>';
                                                }
                                                else{
                                                    echo '<li class="page-item"><a class="page-link" href="admin_product.php?current_page='.$i.'">'.$i.'</a></li>';
                                                }
                                            }
                                        ?>

                                        <?php 
                                            if($current_page < $totalPage){
                                                echo '<li class="page-item">
                                                        <a class="page-link" href="admin_product.php?current_page='.($current_page+ 1).'" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                        </a>
                                                     </li>';
                                            }
                                        ?>
                                    </ul>
                                </nav>
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