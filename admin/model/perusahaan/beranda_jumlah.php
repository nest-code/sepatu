<?php
$sql = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_sepatu");
$data = $sql->fetch_assoc();
$jumlah_sepatu=$data['jumlah'];

$sql2 = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_merek_sepatu");
$data2 = $sql2->fetch_assoc();
$jumlah_merek=$data2['jumlah'];

$sql3 = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_pelanggan");
$data3 = $sql3->fetch_assoc();
$jumlah_pelanggan=$data3['jumlah'];

$sql4 = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_pemesanan");
$data4 = $sql4->fetch_assoc();
$jumlah_pemesanan=$data4['jumlah'];

?>
