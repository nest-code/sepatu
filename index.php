<?php
    session_start();
    if(!isset($_SESSION['nama_akun'])){
      include_once 'admin/model/config.php';
    }else {
          $akun_id=$_SESSION['id_pelanggan'];
          $user_username=$_SESSION['nama_akun'];
          $nama=$_SESSION['nama'];
          $foto=$_SESSION['foto'];
          include_once 'admin/model/config.php';

          // echo $akun_id;
          // var_dump($akun_id);
          // die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Top Navigation</title>

  <link rel="stylesheet" href="admin/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="admin/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="admin/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition layout-top-nav" >
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-dark navbar-white-fixed" style="position: fixed; width:100%;">
    <div class="container">
      <a href="./" class="navbar-brand">
        <img src="admin/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Go-Sepatu</span>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="?halaman=barang" class="nav-link">Sepatu</a>
        </li>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li><a href="#" class="dropdown-item">Some action </a></li>
            <li><a href="#" class="dropdown-item">Some other action</a></li>

            <li class="dropdown-divider"></li>
            <li class="dropdown-submenu dropdown-hover">
              <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                <li>
                  <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                </li>

                <li class="dropdown-submenu">
                  <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                  <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                    <li><a href="#" class="dropdown-item">3rd level</a></li>
                  </ul>
                </li>

                <li><a href="#" class="dropdown-item">level 2</a></li>
                <li><a href="#" class="dropdown-item">level 2</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>


      <?php

if(!isset($akun_id)){ ?>

<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header"></span>
            <div class="card-body" style="padding-bottom: 0px;">
              <form action="admin/model/masuk_cek.php" method="post">
                <div class="form-group row">
                  <label class="col-sm-5 control-label">Nama Akun</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form-control-sm" name="nama_akun" required >
                  </div>
                  <label class="col-sm-5 control-label">Kata Sandi</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control form-control-sm" name="kata_sandi" required >
                  </div>
                  
                  <label class="col-sm-5 control-label"></label>
                  <div class="col-sm-7" style="margin-top: 10px;" >
                    <div class="pull-right">
                      <button type="button"  class="btn-default btn-sm">Batal</button>
                      <button type="submit"  class="btn-primary btn-sm">Masuk</button>
                    </div>
                  </div>
                </div>
                </div>
              </form>

              
            <div class="dropdown-divider"></div>
            <a href="view/masuk.php" class="dropdown-item dropdown-footer">Buat Akun ?</a>
          </div>
</li>
</ul>
 
    
<?php } elseif (isset($akun_id)) { ?>
        
<ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cart-plus"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">Keranjang</span>

              <?php
              $query = mysqli_query ($koneksi, "SELECT tb_keranjang.id_keranjang, tb_keranjang.kuantitas as jumlah, tb_sepatu.nama_sepatu as sepatu  From tb_keranjang inner join tb_sepatu on tb_keranjang.id_sepatu=tb_sepatu.id_sepatu where tb_keranjang.id_pelanggan='$akun_id' AND tb_keranjang.id_pemesanan IS NULL");
              while ($data = $query->fetch_assoc()) {
              ?>

              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> <?php echo $data['sepatu']; ?>
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <?php 
              }
            ?>
           
          
            <div class="dropdown-divider"></div>
            <a href="?halaman=keranjang" class="dropdown-item dropdown-footer">Lihat Semua Keranjang</a>
          </div>
        </li>

        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="admin/assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <li class="user-header bg-dark">
            <img src="admin/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              <?php echo $nama?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>

          <li class="user-footer">
            <a href="?halaman=profil" class="btn btn-default btn-flat">Profil</a>
            <button onClick="ShowModal(this)"  data-id="1"  class="btn btn-default btn-flat float-right">Keluar</button>
            
          </li>
        </ul>
      </li>

 

<?php }?>




      </ul>
    </div>


    
  </nav>
    
    <?php include 'page.php'; ?>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="admin/assets/plugins/jquery/jquery.min.js"></script>
<script src="admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="admin/assets/dist/js/adminlte.min.js"></script>
<script src="admin/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
</html>

<script>

function rupiah($angka){
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah; 
}
</script>

<script>
function ShowModal(elem){  
Swal.fire({
  title: 'keluar?',
  text: "Apakah anda ingin keluar dari akun?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya',
}).then((result) => {
  if (result.value) {
    window.location.href="admin/model/logout_pelanggan.php";
  }
});
}
</script>


