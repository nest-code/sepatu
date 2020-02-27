<?php
  $hal = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($hal =="beranda") {
        if ($aksi == "") {
          include'view/beranda.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }
      

}elseif ($hal =="barang"){
    if ($aksi== "") {
        include 'view/barang.php';
    }


}elseif ($hal =="login"){
  if ($aksi== "") {
    include 'view/login.php';
  }

}elseif ($hal ==""){
    if ($aksi== "") {
      include 'view/beranda.php';
    }
  }
  


?>