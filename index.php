<?php 
include "koneksi.php";
include "aksiLogin.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Site Akun IT</title>
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet" />
  </head>

  <body class="bg-theme bg-theme1">
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
      <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner"><div class="loader"></div></div>
      </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">
      <div class="loader-wrapper">
        <div class="lds-ring">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="card card-authentication1 mx-auto my-5">
        <div class="card-body">
          <div class="card-content p-2">
            <div class="text-center">
              <img src="assets/images/logo-icon.png" alt="logo icon" />
            </div>
            <div class="card-title text-uppercase text-center py-3">SI | Akun RSMP</div>
            
            <form action="aksiLogin.php" method="POST">
              <div class="form-group">
                <label for="exampleInputUsername" class="sr-only"
                  >Username</label
                >
                <div class="position-relative has-icon-right">
                  <input
                    type="text"
                    name="username"
                    id="exampleInputUsername"
                    class="form-control input-shadow"
                    placeholder="Enter Username"
                  />
                  <div class="form-control-position">
                    <i class="icon-user"></i>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword" class="sr-only"
                  >Password</label
                >
                <div class="position-relative has-icon-right">
                  <input
                    type="password"
                    name="password"
                    id="exampleInputPassword"
                    class="form-control input-shadow"
                    placeholder="Enter Password"
                  />
                  <div class="form-control-position">
                    <i class="icon-lock"></i>
                  </div>
                </div>
              </div>
             
              <button type="submit" name="login" class="btn btn-light btn-block">
                Login
              </button>
              <div class="text-center mt-3">Support By IT RSMP</div> 
            </form>

          </div>
        </div>
        <div class="card-footer text-center py-3">
          <p class="text-warning mb-0">
            Aplikasi <a href="#"> Penyimpanan Data Akun</a>
          </p>
        </div>
      </div>

      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"
        ><i class="fa fa-angle-double-up"></i>
      </a>
      <!--End Back To Top Button-->
      <!-- ganti warna tema -->
      <?php 
      include "layouts/warnatema.php";
      ?>
      <!-- akhir warna tema -->
    </div>
    <!--wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
  </body>
</html>
