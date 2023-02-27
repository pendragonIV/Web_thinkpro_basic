<?php

require_once "config/connect_server.php";


// Get featured products 
$featProductQuery = "SELECT * FROM product WHERE product_featured = 1 ORDER BY product_id DESC LIMIT 4";
$getFeatProduct = mysqli_query($connect,$featProductQuery);

// Get newest products 
$newProductQuery = "SELECT * FROM product ORDER BY product_id DESC LIMIT 4";
$getNewProduct = mysqli_query($connect,$newProductQuery);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="public/vendor/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="public/vendor/bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="admin/admin_resource/css/base.css"> -->
    <link rel="stylesheet" href="public/css/custom.css">
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
              <!-- Carousel -->

              <div class="col-12 col-lg-9">
               <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="public/img/banner_1.png" class="d-block w-100 rounded-4" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="public/img/banner_1.png" class="d-block w-100 rounded-4" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="public/img/banner_1.png" class="d-block w-100 rounded-4" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
               </div>
              </div>

              <!-- Detailed -->

              <div class="col-lg-3 d-flex flex-lg-column justify-content-between">

                <div class="card background_gray_custom border-0 rounded-4">
                  <div class="card-body">
                    <p class="card-title fs-6 fw-bold">Free shipping</p>
                    <p class="card-text font-size-sml">100% of orders are free shipping when paid in advance.</p>
                  </div>
                </div>

                <div class="card background_gray_custom border-0 rounded-4">
                  <div class="card-body">
                    <p class="card-title fs-6 fw-bold">Dedicated warranty</p>
                    <p class="card-text font-size-sml">Regardless of the paperwork, ThinkPro is always committed to supporting customers to the end.</p>
                  </div>
                </div>

                <div class="card background_gray_custom border-0 rounded-4">
                  <div class="card-body">
                    <p class="card-title fs-6 fw-bold">1-1 exchange or refund</p>
                    <p class="card-text font-size-sml">If there is an error or you feel that the product does not meet the needs.</p>
                  </div>
                </div>

              </div>
              
            </div>

            <div class="row">
              <div class="col">
                <p class="fs-5 fw-bold mt-4">Only sell online</p>
              <a href="" class="">
                <img src="public/img/Collection_Banner-Mobile.webp" class="img-fluid rounded-3" alt="...">
              </a>
              </div>
            </div>

              <!-- Newest Product -->

            <div class="row">

              <p class="fs-5 fw-bold mt-4">Newest product</p>

              <?php

                          if(mysqli_num_rows($getNewProduct) > 0) {
                            while($row = mysqli_fetch_assoc($getNewProduct)){

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

            <!-- Featured products -->

            <div class="row">

              <p class="fs-5 fw-bold mt-4">Featured product</p>

              <?php

              if(mysqli_num_rows($getFeatProduct) > 0) {
                while($row = mysqli_fetch_assoc($getFeatProduct)){

              ?>

              <div class="col-6 col-lg-3">
                <a class = "text-decoration-none text-dark" href="<?php echo 'product_detail.php?product_id='.$row['product_id'] ?>">
                <div class="card border shadow p-0 bg-body my-2" style="border-radius: 5%;">
                  <img src="public/upload/<?php echo $row['product_img'] ?>" class="col-8 mx-auto my-4" alt="...">
                  <div class="card-body">
                    <h5 class=" fw-bold" style="height: 3em;"> <?php echo $row['product_name']?> </h5>
                    <p class="text-danger fw-bold my-2"> <?php echo ($row['product_price'] - $row['product_price'] * ($row['product_promotion'] / 100)) ?> </p>
                    <del> <?php echo $row['product_price']?> </del> 
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