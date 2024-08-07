<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Kadis | Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <link rel="stylesheet" href="assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="assets/css/form/all-type-forms.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        body{
            background-color: #387adf ;
            font-family: "Poppins", sans-serif ;
        }
        form .btn{
            background-color: #fba834;
        } 
        .content {
  padding: 7rem 0; }

h2 {
  font-size: 20px; }

.half, .half .container > .row {
  height: 100vh;
  min-height: 700px; }

@media (max-width: 991.98px) {
  .half .bg {
    height: 200px; } }

/* .half .contents {
  background: rgb(80,122,138);
background: linear-gradient(40deg, rgba(80,122,138,1) 0%, rgba(120,156,172,1) 100%);
 } */
  .half .contents{
    background-image: linear-gradient(to top, #3b41c5 0%, #a981bb 49%, #ffc8a9 100%);

  }
  

.half .contents, .half .bg {
  width: 50%; }
  @media (max-width: 1199.98px) {
    .half .contents, .half .bg {
      width: 100%; } }
.half .bg {
  background-size: cover;
  background-position: center; }


    </style>
</head>

<body>
    <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('gambar/depan/g-dinas.png');"></div>
    <div class="contents order-2 order-md-1">
    <div class="container">
    <div class="row align-items-center justify-content-center">
    <div class="col-md-7">
        <div class="error-pagewrap">
    <div class="error-page-int">
        
        <div class="content-error">
            <?php 
            // pesan notifikasi

            if(isset($_GET['alert'])){
                if($_GET['alert'] == "gagal"){
                    echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                }else if($_GET['alert'] == "logout"){
                    echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                }else if($_GET['alert'] == "belum_login"){
                    echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                }
            }
            ?>
                    <div class="hpanel">
                <div>
                <h2 class="text-center mt-2 mb-5">LOGIN KEPALA DINAS</h2> 
                    <form action="periksa_user_login.php" method="POST" id="loginForm">
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="username" title="Please enter you username" required="required" autocomplete="off" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                        </div>
                            <input type="submit" class="btn btn-warning btn-block loginbtn mt-2" value="Login">
                        
                    </form>
                </div>
            </div>
                </div>
                <a href="index.php"><button type="button" class="btn btn-primary">Kembali</button></a>
            
        </div>
    </div>   
</div>
 <!-- <div class="col-sm-6 col-md-5 col-lg-6 mt-4">
        <img src="gambar/depan/g-login.png" alt="">
    </div> -->
    </div>
    <!-- <div>
            <p class="text-muted">Copyright © <?php echo date('Y') ?>. All rights reserved. Sistem Informasi Arsip Digital (SIAD)</p>
        </div> -->
    </div>


    </div>
    </div>



    
</body>




    <!-- <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>SISTEM INFORMASI</h3>
                <h4>ARSIP DIGITAL</h4>

                <br>

                <p>Silahkan login untuk mengakses arsip.</p>

            </div>
            <div class="content-error">
                <?php 
                if(isset($_GET['alert'])){
                    if($_GET['alert'] == "gagal"){
                        echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                    }else if($_GET['alert'] == "logout"){
                        echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                    }else if($_GET['alert'] == "belum_login"){
                        echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                    }
                }
                ?>
                <div class="hpanel">
                    <div class="panel-body">

                        <br>
                        <br>
                        <center>
                            <h4>LOGIN USER</h4>    
                        </center>
                        <br>
                        <br>

                        <form action="periksa_user_login.php" method="POST" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="username" title="Please enter you username" required="required" autocomplete="off" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="required" autocomplete="off" name="password" id="password" class="form-control">
                            </div>

                            <input type="submit" class="btn btn-success btn-block loginbtn" value="Login">
                        </form>

                        <br>

                    </div>
                </div>
                <br>
                <a href="index.php">Kembali</a>
                <br>
            </div>
            <div class="text-center login-footer">
                <p class="text-muted">Copyright © <?php echo date('Y') ?>. All rights reserved</p>
            </div>
        </div>   
    </div> -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-price-slider.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets/js/metisMenu/metisMenu-active.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/icheck/icheck.min.js"></script>
    <script src="assets/js/icheck/icheck-active.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
	<!-- <body class="hold-transition login-page" style="background:url(gambar/depan/bg.jpg)
no-repeat center center fixed; background-size: cover;
 -webkit-background-size: cover; 
 -moz-background-size: cover; -o-background-size: cover;">
</body> -->
</html>