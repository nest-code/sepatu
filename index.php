<?php
    session_start();
    if(!isset($_SESSION['nama_akun'])){
      include_once 'admin/model/config.php';
    }else {
      include_once 'admin/model/config.php';
          // $akun_id=$_SESSION['id_pelanggan'];
          // $user_username=$_SESSION['nama_akun'];
          // $nama=$_SESSION['nama'];
          // $foto=$_SESSION['foto'];
          // include_once 'admin/model/config.php';
          // echo $akun_id;
          // var_dump($akun_id);
          // die();
    }
?>

Halaman ini dapat dikembangkan oleh Frontend
Tuliskan ini pada browser 'http://localhost/sepatu/admin/' atau klik tautan berikut <a href="http://localhost/sepatu/admin/">admin</a>
