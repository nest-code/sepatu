<?php
  $halaman = @$_GET['halaman'];
  $aksi = @$_GET['aksi'];

if ($halaman =="sepatu") {
        if ($aksi == "") {
          include'view/sepatu/sepatu_data.php';
        }elseif ($aksi == "lihat") {
          include 'view/sepatu/sepatu_detail.php';
        }elseif ($aksi == "tambah"){
          include 'view/sepatu/sepatu_form_add.php';
        }elseif ($aksi == "hapus"){
          include 'model/sepatu/sepatu_del.php';
        }elseif ($aksi == "edit_sampah"){
          include 'data/edit_sampah.php';
        }
      
}elseif ($halaman =="merek"){
      if ($aksi== "") {
        include 'view/merek/merek_data.php';
      }elseif ($aksi == "ubah") {
        include 'view/member_ubah.php';
      }elseif ($aksi == "tambah"){
        include 'view/merek/merek_form_add.php';
      }elseif ($aksi == "hapus"){
        include 'model/merek/merek_del.php';
      }elseif ($aksi == "edit"){
        include 'data/edit_sampah.php';
      }

}elseif ($halaman =="jenis"){
      if ($aksi== "") {
        include 'view/jenis/jenis_data.php';
      }elseif ($aksi == "select_pengumuman") {
        include 'data/select_paket.php';
      }elseif ($aksi == "tambah"){
        include 'view/jenis/jenis_form_add.php';
      }elseif ($aksi == "hapus"){
        include 'model/jenis/jenis_del.php';
      }elseif ($aksi == "edit"){
        include 'data/paket_edit.php';
      }


}elseif ($halaman =="pengguna"){
  if ($aksi== "") {
    include 'view/pengguna/pengguna_data.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'view/pengguna/pengguna_form_add.php';
  }elseif ($aksi == "hapus"){
    include 'backend/pengguna_delete.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }

}elseif ($halaman =="pelanggan"){
  if ($aksi== "") {
    include 'view/pelanggan/pelanggan_data.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'view/pelanggan/pelanggan_form_add.php';
  }elseif ($aksi == "hapus"){
    include 'backend/pengguna_delete.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }

  
}elseif ($halaman =="supplier"){
  if ($aksi== "") {
    include 'view/supplier/supplier_data.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'view/supplier/supplier_form_add.php';
  }elseif ($aksi == "hapus"){
    include 'model/supplier/supplier_del.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }

}elseif ($halaman =="ukuran"){
  if ($aksi== "") {
    include 'view/ukuran/ukuran_data.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'view/ukuran/ukuran_form_add.php';
  }elseif ($aksi == "hapus"){
    include 'model/ukuran/ukuran_del.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }
  
}elseif ($halaman =="stok"){
  if ($aksi== "") {
    include 'view/supplier/supplier_data.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'view/stok/stok_form_add.php';
  }elseif ($aksi == "hapus"){
    include 'backend/pengguna_delete.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }

  
}elseif ($halaman =="order"){
  if ($aksi== "") {
    include 'view/order/order_in_data.php';
  }elseif ($aksi == "select_") {
    include 'data/pengguna_select.php';
  }elseif ($aksi == "tambah"){
    include 'view/stok/stok_form_add.php';
  }elseif ($aksi == "hapus"){
    include 'backend/pengguna_delete.php';
  }elseif ($aksi == "edit"){
    include 'data/pengguna_edit.php';
  }

  
}elseif ($halaman =="instansi"){
  if ($aksi== "") {
    include 'view/perusahaan/perusahaan_form.php';
  }

}elseif ($halaman =="logout"){
  if ($aksi== "") {
    include 'backend/logout.php';
  }



}elseif ($halaman =="login"){
  if ($aksi== "") {
    include 'view/login.php';
  }
}


elseif ($halaman =="perusahaan"){
  if ($aksi== "") {
    include 'view/perusahaan.php';
  }elseif ($aksi == "ubah") {
    include 'view/perusahaan_ubah.php';
  }
}

elseif ($halaman =="pembayaran"){
  if ($aksi== "") {
    include 'view/pembayaran.php';
  }elseif ($aksi == "langsung") {
    include 'view/pembayaran_langsung.php';
  }elseif ($aksi == "konfirmasi") {
    include 'view/pembayaran_konfirmasi.php';
  }
}


elseif ($halaman =="laporan"){
  if ($aksi== "") {
    include 'view/laporan/laporan_data.php';
  }elseif ($aksi == "ubah") {
    include 'view/perusahaan_ubah.php';
  }
}

elseif ($halaman ==""){
  if ($aksi== "") {
    include 'view/beranda.php';
  }
}




?>