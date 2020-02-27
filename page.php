<?php
  $halaman = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($halaman =="beranda") {
        if ($aksi == "") {
          include'view/beranda.php';
        }elseif ($aksi == "select_pengumuman") {
          include 'data/select_sampah.php';
        }
      

  }

elseif ($halaman =="barang"){
    if ($aksi== "") {
        include 'view/barang.php';
    }

}elseif ($halaman =="beranda"){
      if ($aksi== "") {
        include 'view/beranda.php';
      }

}elseif ($halaman =="detail"){
      if ($aksi== "") {
        include 'view/barang_detail.php';
      }

}elseif ($halaman =="keranjang"){
    if ($aksi== "") {
      include 'view/keranjang.php';
    }elseif ($aksi == "hapus") {
      include 'admin/model/pelanggan/keranjang_del.php';
    }
}elseif ($halaman =="checkout"){
  if ($aksi== "") {
    include 'view/checkout.php';
  }elseif ($aksi == "hapus") {
    include 'admin/model/pelanggan/keranjang_del.php';
  }elseif ($aksi == "pemesanan") {
    include 'admin/model/pelanggan/keranjang_order.php';
  }elseif ($aksi == "detailchek") {
    include 'view/keranjang_detail.php';
  }elseif ($aksi == "data") {
    include 'view/checkout_data.php';
  }

}elseif ($halaman =="login"){
  if ($aksi== "") {
    include 'view/login.php';
  }
}elseif ($halaman =="profil"){
  if ($aksi== "") {
    include 'view/profil.php';
  }

}elseif ($halaman ==""){
  if ($aksi== "") {
    include 'view/beranda.php';
  }
}




?>