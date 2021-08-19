
          <!DOCTYPE html>
<html lang="en">
<head>
  <?php
    session_start();
    if (empty($_SESSION['login'])) {
      header("location: index.php");
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
      <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
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
<center><h1>SELAMAT DATANG</h1></center>
  <div class="isi">
    <div class="container">
      <div class="col-lg-3">
          <table class="table table-hover">
            <thead >
            <tr>
              <th class="text-center"><?=$_SESSION['nama']?></th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th><?php
                 include 'koneksi.php';
                  $id=$_SESSION['id'];
                  $sql=mysqli_query($koneksi,"select * from siswa where id='$id
                    '");
                  $data=mysqli_fetch_array($sql);
                  if ($data['status']=="Belum Terverifikasi") {
                    echo "<a href='edit_user.php'>Edit Data</a>";
                  }
                  else{
                   echo "<a href='edit_user2.php'>Edit Data</a>"; 
                  }
                ?></th>
            </tr>
            <tr>
              <th><?php
                 include 'koneksi.php';
                  $id=$_SESSION['id'];
                  $sql=mysqli_query($koneksi,"select * from siswa where id='$id
                    '");
                  $data=mysqli_fetch_array($sql);
                  if ($data['status']=="Belum Terverifikasi") {
                    echo "<a href='verif.php'>Verifikasi</a>";
                  }
                  else{
                   echo "<a href='verif2.php'>Verifikasi</a>"; 
                  }
                ?></th>
            </tr>
            <tr>
              <th><a href="logout.php">Logout</a></th>
            </tr>
            </tbody>
          </table>
        </div>
         <div class="col-lg-9">
          <?php
            
            include 'koneksi.php';
          $id=$_SESSION['id'];
          $sql=mysqli_query($koneksi,"select * from siswa where id='$id
            '");
          $data=mysqli_fetch_array($sql);
          ?>
          <table class="table table-hover">
            <tr>
              <td class="text-left">Nomor</td>
              <td class="text-left"><?=$id?></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-left">Nama</td>
              <td class="text-left"><?=$data['nama']?></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-left">Email</td>
              <td class="text-left"><?=$data['email']?></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-left">Jenis Kelamin</td>
              <td class="text-left"><?=$data['jenis_kelamin']?></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-left">Agama</td>
              <td class="text-left"><?=$data['agama']?></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-left">Alamat</td>
              <td class="text-left"><?=$data['alamat']?></td>
              <td></td>
            </tr>
            <tr>
              <td class="text-left"></td>
              <td class="text-right"><form action="edit_user.php"><input type="submit" class="btn btn-primary" value="Edit"></form></td>
              <td class="text-left"><form action="proses_verif.php"><input type="submit" class="btn btn-primary" value="Verifikasi"></form></td>
            </tr>
          </table>
         </div>
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