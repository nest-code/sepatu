<?php
if(isset($_POST['kirim'])) {
    
$barcode = $_POST['barcode'];
$nama = $_POST['nama'];
$id_merek = $_POST['id_merek'];
$id_jenis = $_POST['id_jenis'];
$harga= $_POST['harga'];
$status_sepatu = 'tersedia';
$detail = $_POST['detail'];

$ekstensi_diperbolehkan	= array('png','jpg');
$foto_nama = $_FILES['gambar1']['name'];
$config['file_name'] = 'sepatu-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x = explode('.', $foto_nama);
$ekstensi = strtolower(end($x));
$ukuran	= $_FILES['gambar1']['size'];
$file_tmp = $_FILES['gambar1']['tmp_name'];
$gambar = 'sepatu-'.date('dmYgis').'-'.$foto_nama;



$foto_nama2 = $_FILES['gambar2']['name'];
$config2['file_name'] = 'sepatu-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x2 = explode('.', $foto_nama2);
$file_tmp2 = $_FILES['gambar2']['tmp_name'];
$gambar2 = 'sepatu-'.date('dmYgis').'-'.$foto_nama2;


$foto_nama3 = $_FILES['gambar3']['name'];
$config3['file_name'] = 'sepatu-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x3 = explode('.', $foto_nama3);
$ekstensi3 = strtolower(end($x3));
$ukuran3	= $_FILES['gambar3']['size'];
$file_tmp3 = $_FILES['gambar3']['tmp_name'];
$gambar3 = 'sepatu-'.date('dmYgis').'-'.$foto_nama3;


$foto_nama4 = $_FILES['gambar4']['name'];
$confi4['file_name'] = 'sepatu-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x4 = explode('.', $foto_nama4);
$ekstensi4 = strtolower(end($x4));
$ukuran4	= $_FILES['gambar4']['size'];
$file_tmp4 = $_FILES['gambar4']['tmp_name'];
$gambar4 = 'sepatu-'.date('dmYgis').'-'.$foto_nama4;


$foto_nama5 = $_FILES['gambar5']['name'];
$config5['file_name'] = 'sepatu-'.date('ymd').'-'.substr(md5(rand()),0,10);
$x5 = explode('.', $foto_nama5);
$ekstensi5 = strtolower(end($x5));
$ukuran5	= $_FILES['gambar5']['size'];
$file_tmp5 = $_FILES['gambar5']['tmp_name'];
$gambar5 = 'sepatu-'.date('dmYgis').'-'.$foto_nama5;


if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
          if($ukuran < 1044070){			

    move_uploaded_file($file_tmp, 'upload/sepatu/'.$gambar);
    move_uploaded_file($file_tmp2, 'upload/sepatu/'.$gambar2);
    move_uploaded_file($file_tmp3, 'upload/sepatu/'.$gambar3);
    move_uploaded_file($file_tmp4, 'upload/sepatu/'.$gambar4);
    move_uploaded_file($file_tmp5, 'upload/sepatu/'.$gambar5);


    $sql= "insert into tb_sepatu (id_sepatu,barcode,nama_sepatu,gambar_1, gambar_2,gambar_3,gambar_4,gambar_5,harga,status_sepatu,detail,id_merek,id_jenis) values
        ('',
        '$barcode',
        '$nama',
        '$gambar',
        '$gambar2',
        '$gambar3',
        '$gambar4',
        '$gambar5',
        '$harga',
        '$status_sepatu',
        '$detail',
        '$id_merek',
        '$id_jenis'
        )";mysqli_query($koneksi,$sql);

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