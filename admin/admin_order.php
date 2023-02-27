
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

                            <div class="container-fluid">
                              <form class="d-flex my-1">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-info" type="submit">Search</button>
                              </form>
                            </div>

                         </div>

                         <div class="row">

                            <div class="col">
                            <table class="table my-3">
                                    <thead>
                                      <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Receipt Date</th>
                                        <th scope="col">Customer name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class = "col-1">1</td>
                                        <td class="col-2">30/12/2022</td>
                                        <td class="col-3">Nguyen Dinh Anh</td>
                                        <td class="col-3">
                                        <p class="bg-success rounded fs-6 py-1 text-center text-light col-9">Received</p>
                                        </td>
                                        <!-- <td>
                                        <p class="bg-danger rounded fs-6 py-1 text-center text-light col-9">Not yet received</p>
                                        </td> -->
                                        <td class="col-3">
                                            <a href="view_order.php" type="button" class="btn btn-outline-primary my-1" tabindex="-1" role="button" aria-disabled="true">
                                            <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="" type="button" class="btn btn-outline-success my-1" tabindex="-1" role="button" aria-disabled="true">
                                            <i class="fa-solid fa-check"></i>
                                            </a>
                                            <a href="" type="button" class="btn btn-outline-danger my-1" tabindex="-1" role="button" aria-disabled="true">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                            
                                           
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class = "col-1">1</td>
                                        <td class="col-2">12/02/2022</td>
                                        <td class="col-3">Hoang Duc Tam</td>
                                        <td class="col-3">
                                        <p class="bg-success rounded fs-6 py-1 text-center text-light col-9">Received</p>
                                        </td>
                                        <!-- <td>
                                        <p class="bg-danger rounded fs-6 py-1 text-center text-light col-9">Not yet received</p>
                                        </td> -->
                                        <td class="col-3">
                                            <a href="view_order.php" type="button" class="btn btn-outline-primary my-1" tabindex="-1" role="button" aria-disabled="true">
                                            <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="" type="button" class="btn btn-outline-success my-1" tabindex="-1" role="button" aria-disabled="true">
                                            <i class="fa-solid fa-check"></i>
                                            </a>
                                            <a href="" type="button" class="btn btn-outline-danger my-1" tabindex="-1" role="button" aria-disabled="true">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                            
                                           
                                        </td>
                                      </tr>
                                      <tr>
                                        <td class = "col-1">1</td>
                                        <td class="col-2">29/12/2022</td>
                                        <td class="col-3">Nguyen Ngoc Diep</td>
                                        <!-- <td class="col-2">
                                        <p class="bg-success rounded fs-6 py-1 text-center text-light col-9">Received</p>
                                        </td> -->
                                        <td class="col-3">
                                        <p class="bg-danger rounded fs-6 py-1 text-center text-light col-9">Not yet received</p>
                                        </td>
                                        <td class="col-3">
                                            <a href="view_order.php" type="button" class="btn btn-outline-primary my-1" tabindex="-1" role="button" aria-disabled="true">
                                            <i class="fa-solid fa-eye"></i>
                                            </a>
                                            <a href="" type="button" class="btn btn-outline-success my-1" tabindex="-1" role="button" aria-disabled="true">
                                            <i class="fa-solid fa-check"></i>
                                            </a>
                                            <a href="" type="button" class="btn btn-outline-danger my-1" tabindex="-1" role="button" aria-disabled="true">
                                                <i class="fa-solid fa-trash"></i>
                                            </a>
                                            
                                           
                                        </td>
                                      </tr>
                                      
                                    </tbody>
                            </table>
                            </div>

                         </div>
                         
                         <div class="row">
                            <div class="col">
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