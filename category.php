<?php

require_once "config/connect_server.php";

if(isset($_GET['category_id'])){
  $categoryId = $_GET['category_id'];

  echo $categoryId;
  // thiet lap va lay ra tong so san pham hien co
  $totalProductQuery = "SELECT count(product_id) as total FROM product
                        WHERE category_id = $categoryId";
  $totalProduct = mysqli_query($connect,$totalProductQuery);
  $total = mysqli_fetch_assoc($totalProduct);
  // echo $total['total'];

  // Thiet lap so san pham toi da tren 1 trang
  $productLimit = 8;

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

  $categoryDetailQuery = "SELECT * FROM product
                      INNER JOIN category
                      ON product.category_id = category.category_id
                      WHERE category.category_id = $categoryId
                      ORDER BY product.product_id DESC
                      LIMIT $productStart,$productLimit
                      ";

  $categoryDetailSearch = mysqli_query($connect, $categoryDetailQuery);


  // $categoryDetailQuery = "SELECT * FROM product
  //                        INNER JOIN category
  //                        ON product.category_id = category.category_id
  //                        WHERE category.category_id = $categoryId ";
  // $categoryDetailSearch  = mysqli_query($connect,$categoryDetailQuery);

  $categoryQuery = "SELECT * FROM category WHERE category_id = $categoryId";
  $categorySearch = mysqli_query($connect,$categoryQuery);
  $category = mysqli_fetch_assoc($categorySearch);
}
else{
  header("Location: home.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $category['category_name'] ?> </title>
    <link rel="stylesheet" href="./public/vendor/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="./public/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/custom.css">
</head>
<body>
    <div class="container-fluid p-0">
        
        <!-- Header -->

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <img src="public/img/ThinkPro-Logo-PNG cut.png" alt="" height="35" class="d-inline-block align-text-top">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="btn-group">
                        <button type="button" class="btn btn-light rounded-circle d-lg-inline-block d-none" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa-solid fa-bars"></i>
                        </button>
                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">Categories</button>
                        <ul class="dropdown-menu">
                        <?php
                          $select_all_category = "SELECT * FROM category";
                          $query_all_category = mysqli_query($connect,$select_all_category);
                          if(mysqli_num_rows($query_all_category) > 0){
                            while($row = mysqli_fetch_assoc($query_all_category)){
                              echo '<li><a class="dropdown-item" href="category.php?category_id='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
                            }
                          }             
                        ?>
                          
                      </ul>
                    </div>
                </ul>
                <form class="d-flex border rounded-pill col-lg-6">
                  <button class="btn" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                  <input class="col-xl-10 border-0 me-4 bg-transparent disable_focus_form" type="search" placeholder="Product name, manugacturer,etc." aria-label="Search">
                </form>
                
                <div class="btn-group ms-2 ms-xl-5 px-auto">

                  <a href="cart.php" class="btn d-flex rounded-pill background_color_btn ">
                    <i class="fa-solid fa-cart-shopping my-auto mx-1"></i>
                    <p class="my-auto ">1</p> 
                  </a>

                  <a href="#" class="btn rounded-pill background_color_btn mx-2">
                    <i class="fa-solid fa-bell"></i>
                  </a>

                  <button type="button" class="btn rounded-pill background_color_btn">
                    <i class="fa-solid fa-user"></i>
                  </button>
                </div>

              </div>
            </div>
          </nav>

        <!-- Body -->
        <div class="row">
          
          <div class="col-10 mx-auto margin_top_custom">

            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a class="text-decoration-none" href="home.php">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page"> <?php echo $category['category_name'] ?> </li>
                        </ol>
                      </nav>
                </div>
            </div>
            <!-- Banner -->
            
            <div class="row">
                <div class="col ">
                    <a href="" class="">
                        <img src="public/img/<?php echo $category['category_img'] ?>" class="img-fluid border border_custom_top shadow bg-body" alt="...">
                      </a>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="col border shadow bg-body border_custom_bottom">
                        <p class="fs-3 fw-bold m-1 m-md-4"> <?php echo $category['category_name'] ?> </p>
                    </div>
              </div>
            </div>

              <!--Product -->
              <div class="row margin_top_custom">

              <?php

                if(mysqli_num_rows($categoryDetailSearch) > 0) {
                  while($row = mysqli_fetch_assoc($categoryDetailSearch)){

              ?>

              <div class="col-6 col-lg-3">
                <a class = "text-decoration-none text-dark"  href="<?php echo 'product_detail.php?product_id='.$row['product_id'] ?>">
                  <div class="card border shadow p-0 bg-body my-2" style="border-radius: 5%;">
                    <img src="public/upload/<?php echo $row['product_img'] ?>" class="col-10 mx-auto my-4" alt="...">
                    <div class="card-body">
                      <h5 class=" fw-bold" style="height: 3em;"> <?php echo $row['product_name']?> </h5>
                      <p class="text-danger fw-bold my-2"> <?php $price= ($row['product_price'] - $row['product_price'] * ($row['product_promotion'] / 100)); echo number_format($price,0,'.','.') ?> </p>
                      <del> <?php echo number_format($row['product_price'],0,'.','.')?> </del> 
                      <span class="fw-bold mx-2 text-danger"> -<?php echo $row['product_promotion']?> %</span>
                  <!-- <div class="my-2">
                  <span class="me-1">Color</span>
                  <i class="fa-solid fa-square text-info"></i>
                  <i class="fa-solid fa-square"></i>
                  </div> -->
                    </div>
                  </div>
                </a>
              </div>  

              <?php

                  }
                }

              ?>
                
              </div>

              <div class="row">
                            <div class="col-11 mt-4">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php 
                                            if($current_page > 1){
                                                echo '<li class="page-item">
                                                        <a class="page-link" href="category.php?category_id='.$categoryId.'&current_page='.($current_page - 1).'" aria-label="Previous">
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
                                                    echo '<li class="page-item"><a class="page-link" href="category.php?category_id='.$categoryId.'&current_page='.$i.'">'.$i.'</a></li>';
                                                }
                                            }
                                        ?>

                                        <?php 
                                            if($current_page < $totalPage){
                                                echo '<li class="page-item">
                                                        <a class="page-link" href="category.php?category_id='.$categoryId.'&current_page='.($current_page+ 1).'" aria-label="Next">
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
        

        <!-- Footer -->
        <div class="row margin_top_custom ">

          <div class="col-10 mx-auto d-flex shadow p-0 bg-body rounded">

            <!-- Link -->
            <div class="col-6">

                  <div class="row ms-3">
                      <img src="./public/img/ThinkPro-Logo-PNG cut.png" alt="" class="d-inline-block align-text-top col-4 mt-2 mt-lg-5">
                      <p class="font-size-sml">Sincerely serving since 2013</p>
                  </div>
                  <div class="row ms-3">
                    <div class="col  d-flex flex-wrap">

                    <a class="col-6 col-lg-4" href="about_us.php">
                        <p class="d-inline-block fw-bold">About Us</p>
                      </a>
                      <a class="col-6 col-lg-4" href="">
                        <p class="d-inline-block fw-bold">Youtobe</p>
                      </a>
                      <a class="col-6 col-lg-4" href="">
                        <p class="d-inline-block fw-bold">Facebook</p>
                      </a>
                      <a class="col-6 col-lg-4" href="">
                        <p class="d-inline-block fw-bold">Instagram</p>
                      </a>
                      <a class="col-6 col-lg-4" href="">
                        <p class="d-inline-block fw-bold">Tiktok</p>
                      </a>
                      <a class="col-6 col-lg-4" href="">
                        <img src="./public/img/think-bocongthuong.08b4936.png" alt="" class="d-inline-block align-text-top col-9">
                      </a>

                    </div>
                    
                  </div>
              
            </div>

            <!-- Store img -->
            
            <div class="col-6">

              <div id="carouselExampleIndicators" class="carousel slide position-relative d-inline-block" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/img/store-1.c50f7e3.png" class="d-block w-100 rounded-end" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="public/img/store-1.c50f7e3.png" class="d-block w-100 rounded-end" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="public/img/store-1.c50f7e3.png" class="d-block w-100 rounded-end" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="public/img/store-1.c50f7e3.png" class="d-block w-100 rounded-end" alt="...">
                  </div>
                </div>

                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                  </div>

                  <div class="d-inline-block position-absolute bottom-0 mb-1">
                    <button class="border-0 bg-transparent " type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon k" aria-hidden="true"></span>
                    </button>
                    <button class="border-0 bg-transparent" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                  </div>
              </div>

            </div>

          </div>

        </div>

    </div>

    <script src="./public/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./public/vendor/font_awesome/js/all.min.js"></script>
</body>
</html>