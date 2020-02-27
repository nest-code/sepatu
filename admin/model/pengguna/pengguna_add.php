<?php
if(isset($_POST['kirim'])) {

$nama=$_POST['nama'];
$jk=$_POST['jk'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_hp=$_POST['no_hp'];
$nama_akun=$_POST['nama_akun'];
$kata_sandi=$_POST['kata_sandi'];
$level=$_POST['level'];

$ekstensi_diperbolehkan	= array('png','jpg');
$foto_nama = $_FILES['foto']['name'];
$config['file_name'] = 'pengguna-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x = explode('.', $foto_nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];

$namanya = 'pengguna-'.date('dmYgis').'-'.$foto_nama;


if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 1044070){			

    move_uploaded_file($file_tmp, 'upload/merek/'.$namanya);

    $sql= "insert into tb_pengguna (id_pengguna, nama, jk, tgl_lahir, alamat, email, no_hp, foto, nama_akun, kata_sandi, level) values('','$nama','$jk','$tgl_lahir','$alamat','$email','$no_hp',' $namanya','$nama_akun','$kata_sandi','$level')";mysqli_query($koneksi,$sql);

        if($sql){ 
                  echo 'FILE BERHASIL DI UPLOAD';
              }else{
                  echo 'GAGAL MENGUPLOAD GAMBAR';
              }
          }else{
              echo 'UKURAN FILE TERLALU BESAR';
          }
      }else{
          echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
      }
    }

?>