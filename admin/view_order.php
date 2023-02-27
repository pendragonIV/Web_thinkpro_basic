
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
                            <a href="admin_product.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Product management</a>
                            <a href="admin_order.php" class="btn border-0 rounded text-start  bg-primary text-light" tabindex="-1" role="button" aria-disabled="true">Order management</a>
                          </div>
                    </div>
                    <div class="col-9">

                        <!-- Title -->
                         <div class="row">
                            <div class="col">
                                <h2 class="text-muted">Order management site</h2>
                            </div>
                         </div>

                         <!-- Main -->
                         <div class="row">
                         <div class="col">
                <div class="row">
                    <div class="col-8">
                        <div class="fs-5 fw-bold my-3 text-muted">Customer information</div>
                    <table class="table my-3">
                        <tr>
                            <td class="col-3">ID</td>
                            <td class="col-9">1</td>
                        </tr>
                        <tr>
                            <td class="col-3">Customer name</td>
                            <td class="col-9">Nguyen Dinh Anh</td>
                        </tr>
                        <tr>
                            <td class="col-3">Customer phone number</td>
                            <td class="col-9">0859237866</td>
                        </tr>
                        <tr>
                            <td class="col-3">Customer address</td>
                            <td class="col-9">Quang Trung - Ha Dong - Ha Noi</td>
                        </tr>
                        
                    </table>
                    <div class="fs-5 fw-bold my-3 text-muted">Customer's product</div>
                        <!-- Item -->
                        <div class="col-12 border shadow p-4 bg-body my-2 d-flex" style="border-radius: 1em;">
                          <img class="col-2 p-1 border rounded" src="../public/upload/ipad-mini-6-thinkpro-01 (1).png" >
                          <div class="col-7 px-3 my-auto">
                            <p class="fw-bold">iPad Mini 6 (WiFi 64GB)</p>
                            <div class="">
                              
                              <span class="fw-bold text-danger">12.900.000</span>
                              <del class="mx-1">15.990.000</del>
                              <span class="fw-bold">-19%</span>
                            </div>
                          </div>
                          

                          <div class="col-3 my-auto" >
                            <p class="fw-bold text-danger text-end">12.900.000</p>
                            </p>
                            
                          </div>
                        </div>
                        <div class="col-12 border shadow p-4 bg-body my-2 d-flex" style="border-radius: 1em;">
                          <img class="col-2 p-1 border rounded" src="../public/upload/ipad-mini-6-thinkpro-01 (1).png" >
                          <div class="col-7 px-3 my-auto">
                            <p class="fw-bold">iPad Mini 6 (WiFi 64GB)</p>
                            <div class="">
                              
                              <span class="fw-bold text-danger">12.900.000</span>
                              <del class="mx-1">15.990.000</del>
                              <span class="fw-bold">-19%</span>
                            </div>
                          </div>
                          

                          <div class="col-3 my-auto" >
                            <p class="fw-bold text-danger text-end">12.900.000</p>
                            </p>
                            
                          </div>
                        </div>


                        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
                    </div>

                    <!-- Total -->
                    <div class="col-4">

                        
                        
                        
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

                            <div class="row">
                            <a href="payment.php" class="col-6"><input class="my-3 col-12 border-0 bg-success p-2 text-light fw-bold" type="button" value = "Accept" style="border-radius: .5em;"></input></a>
                            <a href="payment.php" class="col-6"><input class="my-3 col-12 border-0 bg-danger p-2 text-light fw-bold" type="button" value = "Deny" style="border-radius: .5em;"></input></a>
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