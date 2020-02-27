<?php
if(isset($_POST['kirim'])) {
$nama = $_POST['nama'];


$ekstensi_diperbolehkan	= array('png','jpg');
$foto_nama = $_FILES['foto']['name'];
$config['file_name'] = 'merek-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x = explode('.', $foto_nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];

$namanya = 'merek-'.date('dmYgis').'-'.$foto_nama;


if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 1044070){			

    move_uploaded_file($file_tmp, 'upload/merek/'.$namanya);

    $sql= "insert into tb_merek_sepatu (id_merek, nama_merek, gambar_merek) values('','$nama','$namanya')";mysqli_query($koneksi,$sql);

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