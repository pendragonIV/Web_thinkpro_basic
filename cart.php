<?php

require_once "config/connect_server.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./public/vendor/font_awesome/css/all.min.css">
    <link rel="stylesheet" href="./public/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/custom.css">
</head>
<body>
    
    <div class="container-fluid">

        <!-- Header -->

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand" href="home.php">
                            <img src="./public/img/ThinkPro-Logo-PNG cut.png" alt="" height="35" class="d-inline-block align-text-top">
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
        
                          <a href="" class="btn d-flex rounded-pill background_color_btn ">
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
                <div class="fs-3 text-secondary">Shopping Cart</div>
                <div class="row">
                    <div class="col-8">

                        <!-- Item -->
                        <div class="col-12 border shadow p-4 bg-body my-2 d-flex" style="border-radius: 1em;">
                          <img class="col-2 p-1 border rounded" src="public/upload/ipad-mini-6-thinkpro-01 (1).png" >
                          <div class="col-6 px-3 my-auto">
                            <p class="fw-bold">iPad Mini 6 (WiFi 64GB)</p>
                            <div class="">
                              
                              <span class="fw-bold text-danger">12.900.000</span>
                              <del class="mx-1">15.990.000</del>
                              <span class="fw-bold">-19%</span>
                            </div>
                          </div>
                          <div class = "col-2 d-flex">
                              <input  class = "col-4 border-0 text-center fw-bold bg-transparent" onclick="var result = document.getElementById('list__item--input-id'); var qty = result.value; if( !isNaN(qty) & qty > 1 ) result.value--;return false;" type='button' value='-' />
                              <input  class = "col-4 border-0 text-center fw-bold" id = "list__item--input-id" class ="" value = "1">
                              <input  class = "col-4 border-0 text-center fw-bold bg-transparent" onclick="var result = document.getElementById('list__item--input-id'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                          </div>

                          <div class="col-2 my-auto" >
                            <p class="fw-bold text-danger text-end">12.900.000</p>
                            <p class="text-muted text-end">Delete
                            </p>
                            
                          </div>
                        </div>
    
                    </div>

                    <!-- Total -->
                    <div class="col-4">

                        
                        <div class="col-12 border shadow px-3 pt-3 bg-body my-2" style="border-radius:1em;">
                                <p class="fs-5 fw-bold">
                                    <i class="fa-solid fa-ticket me-1"></i> Promotional code
                                    <div class="bg-primary border rounded-3">
                                        <img src="public/img/promo-image.93bb1ff.png" >
                                        <input class="p-2 px-3 disable_focus_form border rounded" type="text" placeholder = "Enter promo code">
                                    </div>
                                </p>
                        </div>
                        
                        <div class="col-12 border shadow px-3 pt-3 bg-body my-2" style="border-radius:1em;">
                            <p class="fs-5 fw-bold">
                                <i class="fa-regular fa-clipboard me-1"></i>
                                Order summary</p>
                            
                            <div class="border-bottom ">
                                <div class="d-flex justify-content-between mt-3">
                                    <span>Provisional</span>
                                    <span>25.800.000</span>
                                </div>
                                <div class="d-flex justify-content-between my-3">
                                    <span>Promotion</span>
                                    <span>0</span>
                                </div>
                            </div>

                            <div class="border-bottom ">
                                <div class="d-flex justify-content-between my-3">
                                    <span>Total</span>
                                    <span class="text-danger fw-bold">25.800.000</span>
                                </div>
                            </div>

                            <a href="payment.php"><input class="my-3 col-12 border-0 background_pink_custom p-2 text-light fw-bold" type="button" value = "Order" style="border-radius: .5em;"></input></a>

                        </div>
    
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="row margin_top_custom ">

            <div class="col-10 mx-auto d-flex shadow p-0  bg-body rounded">
  
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