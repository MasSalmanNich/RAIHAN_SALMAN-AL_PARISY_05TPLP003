<?php
session_start();
include ("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistem Informasi Karyawan - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.html"><img src="img/" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="#login" rel="page-scroll">Login</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================ End Header =================-->

  <main class="side-main">
  <!--================ Login Feature Section =================--> 
  <section class="section-margin">
    <div class="row justify-content-center" id="login">
      <div class="col-lg-6 text-center">
        <h1>Silahkan Pilih</h1>
        <br>
        <div class="d-flex justify-content-center">
          <a href="login.php" target="_blank" class="btn btn-warning mx-2" style="width: 150px;">Login Admin</a>
          <a href="karyawan/login_karyawan.php" target="_blank" class="btn btn-primary mx-2" style="width: 150px;">Login Karyawan</a>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Login Feature Section =================--> 
</main>

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
