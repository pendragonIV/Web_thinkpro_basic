<?php

require_once "config/connect_server.php";

if(isset($_GET['product_id'])){
  $productId = $_GET['product_id'];
  $productDetailQuery = "SELECT * FROM product
                         INNER JOIN category
                         ON product.category_id = category.category_id
                         WHERE product_id = $productId";
  $productDetailSearch  = mysqli_query($connect,$productDetailQuery);
  if(mysqli_num_rows($productDetailSearch)>0){
    $productDetail = mysqli_fetch_assoc($productDetailSearch);
  }
  else{
    header("Location: URL of previous page");
  }
  

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $productDetail['product_name'] ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
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
                          <li class="breadcrumb-item"><a class="text-decoration-none" href="category.php?category=<?php echo $productDetail['category_id']; ?>"> <?php echo $productDetail['category_name']; ?> </a></li>
                        </ol>
                      </nav>
                </div>
            </div>

<!-- Body   -->

            <div class="row">
                <div class="col-7">
                    
                    <!-- Carousel -->
                    <div class="row">
                        <div class="col">
                            <div id="carouselExampleCaptions" class="carousel carousel-dark slide  border shadow bg-body border_custom" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="public/upload/<?php echo $productDetail['product_img'] ?>" class="d-block w-70 mx-auto col-11 fancybox" data-fancybox="gallery" alt="public/upload/<?php echo $productDetail['product_img'] ?>">
                                    <div class="carousel-caption d-none d-md-block">
                                     
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="public/upload/<?php echo $productDetail['product_img'] ?>" class="d-block w-70 mx-auto col-11 fancybox" data-fancybox="gallery" alt="public/upload/<?php echo $productDetail['product_img'] ?>">
                                    <div class="carousel-caption d-none d-md-block">
                                      
                                    </div>
                                  </div>
                                  <div class="carousel-item">
                                    <img src="public/upload/<?php echo $productDetail['product_img'] ?>" class="d-block w-70 mx-auto col-11 fancybox" data-fancybox="gallery" alt="public/upload/<?php echo $productDetail['product_img'] ?>">
                                    <div class="carousel-caption d-none d-md-block">
                                      
                                    </div>
                                  </div>
                                </div>
                                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon text-secondary" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                    </div>
                    
                    <!-- Information -->

                    <div class="row">
                        <div class="col mt-4 ">
                            
                            <div class="border p-4 shadow bg-body" style="border-radius: 1em;">

                                <!-- configuration -->
                                <div class="pb-4 border-bottom">

                                  <!-- Title -->
                                <div class="d-flex pb-3 border-bottom">
                                  <i class="fa-solid fa-microchip my-auto fs-5"></i>
                                  <p class="fw-bold my-auto fs-5 mx-2 ">Configuration & characteristics</p>

                              </div>
                              
                              <!-- Details -->

                              <div class="text-primary fs-6 my-3" onclick = "" type="button">See detailed configuration
                                <i class="fa-solid fa-chevron-right " style = "font-size: 0.7em;"></i>
                              </div>

                              <!-- Discount -->

                              <div class="alert alert-warning text-dark border_custom my-4">
                                <div class="d-flex">
                                  <i class="fa-solid fa-gift my-auto fs-5"></i>
                                  <p class="fs-5 my-auto fw-bold mx-2">Offers & Promotions</p>
                                </div>
                                <div class="d-flex my-2">
                                  <p class="fw-bold m-0">Direct discount </p>
                                  <p class="text-danger fw-bold m-0 mx-2"> -<?php echo $productDetail['product_promotion'] ?>%</p>
                                </div>
                              </div>

                              <!-- Policy -->
                              
                              <div class="card background_gray_custom border-0 rounded-4">
                                <div class="card-body">
                                  <div class="d-flex">
                                    
                                    <p class="card-title fs-5 fw-bold">Warranty, Returns</p>
                                  </div>
                                  <ul>
                                    <li>Warranty <span class="fw-bold"><?php echo $productDetail['product_insurance'] ?></span> </li>
                                    <li> No return policy applies</li>
                                  </ul>
                                </div>
                              </div>

                                </div>

                                <!-- Commnent & Rating -->
                                <div class="pb-4">
                                  <div class="d-flex my-3">
                                    <i class="fa-solid fa-comment my-auto fs-5"></i>
                                    <p class="fs-5 my-auto fw-bold mx-2">Rate & Comments</p>
                                  </div>
                                  <div class="text-center mt-5">
                                    <i class="fa-regular fa-comment fs-1 text-black-50"></i>
                                  </div>
                                  <p class="text-center fw-bold fs-5 my-3 text-black-50">There are no reviews yet</p>
                                  <div class="row">
                                    <button type="button" class="btn btn-primary text-center col-6 mx-auto py-2 fw-bold">
                                      <i class="fa-regular fa-star fw-bold"></i>
                                      Rate
                                    </button>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Side bar -->
                <div class="col-5 ">
                  <div class="border p-4 shadow bg-body " style="border-radius: 1em;" id="sidebar_fixed">

                    <div class=" py-4 ps-4 background_red_custom rounded-3">
                      <span class="fs-5 fw-bold text-danger"> <?php $price= ($productDetail['product_price'] - $productDetail['product_price'] * ($productDetail['product_promotion'] / 100)); echo number_format($price,0,'.','.') ?> </span>
                      <del> <?php echo number_format($productDetail['product_price'],0,'.','.')?> </del>
                      <span class="fw-bold fs-6 text-danger">(-<?php echo $productDetail['product_promotion'] ?>%)</span>
                    </div>
                    <div class="fw-bold fs-4 mt-4 mb-1">
                      <?php echo $productDetail['product_name'] ?>
                    </div>
                    <div class="text-muted"><?php echo $productDetail['category_name']; ?></div>
                    <div class="alert alert-warning my-2 fs-6 text-dark" role="alert">
                      <i class="fa-solid fa-tag me-1"></i>
                      <span>Direct discount of 3,090,000 VND for online customer</span>
                    </div>
                    <!-- <p class="fw-bold fs-6 mt-4 mb-1">Color</p>
                    <div>
                        <i class="fa-solid fa-square text-info fs-4"></i>
                        <i class="fa-solid fa-square fs-4"></i>
                        <i class="fa-solid fa-square text-warning fs-4"></i>
                        <i class="fa-solid fa-square text-secondary fs-4"></i>
                    </div> -->

                    <a href="cart_empty.php">
                    <button class="my-3 col-12 background_pink_custom border-0 rounded text-light fw-bold py-2">Add to cart</button>
                    </a>
                  </div>
                  
                </div>
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
    
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="./public/vendor/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./public/vendor/font_awesome/js/all.min.js"></script>

        <script>
      $(document).ready(function() {
    $(".fancybox").fancybox();
 });
    </script>
</body>
</html>