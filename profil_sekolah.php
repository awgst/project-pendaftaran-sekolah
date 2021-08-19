<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    session_start();
    if (!empty($_SESSION['login'])) {
      if($_SESSION['nama']!="admin"){
        header("location:login.php");
      }
      else{
        header("location:admin.php");
      }
    }
  ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PENERIMAAN SISWA BARU 2018</title>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head> 
<body>
<nav class="navbar navbar-default navbar-expand-lg">
  <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="#">PSB<b>2018</b></a>     
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
      <span class="navbar-toggler-icon"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <ul class="nav navbar-nav">
      <li class="nav-item"><a href="index.php" class="nav-link">Beranda</a></li>
      <li class="nav-item"><a href="profil_sekolah.php" class="nav-link">Tentang</a></li>
    </ul>
    <form class="navbar-form form-inline" method="POST" action="proses_cari.php">
      <div class="input-group search-box">                
        <input type="text" id="search" class="form-control" placeholder="Cari Nomor Pendaftaran" name="cari">
        <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
      </div>
    </form>
    <ul class="nav navbar-nav navbar-right ml-auto">      
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Masuk</a>
        <ul class="dropdown-menu form-wrapper">         
          <li>
            <form action="proses_login.php" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="E-mail" required="required" name="email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required" name="pass">
              </div>
              <input type="submit" class="btn btn-primary btn-block" value="Login">
              <div class="form-footer">
              </div>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div class="header">
  
    <img src="header.jpg">
    <div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-5">
      <h1 style="background-color: white;border-radius: 5px;">SELAMAT DATANG DI WEB PENERIMAAN SISWA BARU</h1>
    </div>
    <div class="col-lg-3">
    </div>
  </div>
</div>
  <div class="isi">
    <div class="container">
        <h2>PROFIL SEKOLAH</h2 >
        <p>SMA NEGERI 1 SUKACITA adalah Sekolah Menengah Atas yang berlokasi di Kecamatan Asa dan Kabupaten Harapan. Sekolah yang sudah memiliki akreditasi A dan pernah menjadi sekolah yang memiliki taraf RSBI atau Rintisan Sekolah Bertaraf Internasional.</p>
      
    </div>
  </div>
</div>
<footer class="page-footer font-small unique-color-dark">
    <div style="background-color: #222;">
    <div class="container text-center text-md-left mt-5">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">SMA NEGERI 1 SUKACITA</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Sekolah Menengah Atas Negeri 1 Sukacita adalah satu bentuk perjuangan dalam dunia pendidikan.</p>
        </div>
        <div class="col-md-2 col-lg-3 col-xl-2 mx-auto mb-4">
          <p>
          </p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> Jl. Perjuangan No.69</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> smaneg1@gmail.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 08123456789</p>
        </div>
      </div>
    </div>
    </div>
  </footer>
</body>
</html>                                                                                    