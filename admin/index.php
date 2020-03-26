<?php
    session_start();

    if(!isset($_SESSION['nama_akun'])){
      header("location: ../.../../view/login.php"); 
  
    }else {
        $now = time();
        if ($now > $_SESSION['expire']) {
            session_destroy();
            header("location: ../.../../view/login.php"); 
        }else { 
          $akun_id=$_SESSION['id_pengguna'];
          $user_username=$_SESSION['nama_akun'];
          $nama=$_SESSION['nama'];
          $level=$_SESSION['level'];
          $foto=$_SESSION['foto'];
          include_once 'model/config.php';
          include_once 'model/perusahaan/perusahaan_profil.php';
          include_once 'model/perusahaan/beranda_jumlah.php';

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href=" upload/toko/<?php echo $result['logo']; ?>" type="image/png"/>
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>



    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Pengguna</span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="model/logout.php" class="dropdown-item dropdown-footer"> Keluar</a>
        </div>
      </li>
     
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="assets/index3.html" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $result['nama'];?></span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="upload/pengguna/<?php echo($foto)?>" class="img-circle elevation-2" alt="a">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo($nama)?></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a href="./" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
        
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
            <i class="fas fa-shoe-prints nav-icon"></i>
              <p>
                Sepatu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?halaman=sepatu" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>Sepatu</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="?halaman=merek" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merek</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?halaman=jenis" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="?halaman=ukuran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ukuran</p>
                </a>
              </li>
            </ul>
          </li>


              
          <li class="nav-item">
                <a href="?halaman=supplier" class="nav-link">
                <i class="fas fa-hands-helping nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li> 

          <li class="nav-header">Transaksi</li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">


              <li class="nav-item">
                <a href="?halaman=stok&aksi=tambah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok In</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="?halaman=laporan" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
            </ul>
          </li>
              

          <li class="nav-header">Pengaturan</li>
          <li class="nav-item">
                <a href="?halaman=instansi" class="nav-link">
                <i class="fas fa-warehouse  nav-icon"></i>
                  <p>Toko</p>
                </a>
              </li>

              
              <li class="nav-item">  
                <a href="?halaman=pengguna" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Pengguna</p>
                </a>
              </li>

          <li class="nav-item">
            <a href="../" class="nav-link">
            <i class="fas fa-globe nav-icon"></i>
              <p>Halaman Website</p>
            </a>
          </li>
 
        </ul>
      </nav>
    </div>
  </aside>
    <?php include 'page.php'; ?>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.1v
    </div>
    <strong>Copyright &copy; <a href="">Nest Studio</a>.</strong>
  </footer>
</div>

<?php
        }
    }
?>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
  });
</script>


<script>
function ShowModal(elem){
var dataId = $(elem).data("id");
  
Swal.fire({
  title: 'Apakah anda yakin?',
  text: "Data yang dihapus tidak dapat dekembalikan kembali",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, hapus!',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=pengguna&aksi=hapus&id="+dataId;
  }
});
}
</script>



</body>
</html>
