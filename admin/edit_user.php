<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThinkPro-Member Management-Add Menber</title>
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
            <div class="col-10 margin_top_custom mx-auto" style="margin-top:5em;">
                <div class="row">
                    <div class="col-3 shadow p-3 bg-body rounded mb-3 min-vh-100">
                        <div class="btn-group-vertical col-12 " role="group" aria-label="Basic example">
                        <a href="admin_home.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Dashboard</a>
                            <a href="admin_user.php" class="btn border-0 rounded text-start  bg-primary text-light" tabindex="-1" role="button" aria-disabled="true">Member management</a>
                            <a href="admin_category.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Category management</a>
                            <a href="admin_product.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Product management</a>
                            <a href="admin_order.php" class="btn border-0 rounded text-start" tabindex="-1" role="button" aria-disabled="true">Order management</a>
                          </div>
                    </div>
                    <div class="col-9">

                        <!-- Title -->
                         <div class="row">
                            <div class="col">
                                <h2 class="text-muted mb-4">Edit member</h2>
                            </div>
                         </div>

                         <!-- Main -->
                        <div class="row">
                            <div class="col-10">
                                <form role="form" method="post">
                                    <div class="mb-3">
                                        <div class="alert alert-danger" role="alert">
                                            A simple danger alert—check it out!
                                        </div>                                          
                                    </div>
                                    <div class="mb-3">
                                        <label for="full_name" class="form-label">Full name</label>
                                        <input type="text" class="form-control" id="full_name" name="user_name">
                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_email">
                                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="exampleInputPassword1" name="user_password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword2" class="form-label">Re-enter password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword2   " name="user_re_password">
                                      </div>
                                      
                                    <div class="mb-3">
                                        <label for="role_select" class="form-label">Select role</label>
                                        <select id="role_select" class="form-select">
                                          <option >Admin</option>
                                          <option selected>Member</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-success my-2 col-2">Edit</button>
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
</body>
</html>