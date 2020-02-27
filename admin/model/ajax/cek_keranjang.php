<?php

$sql = mysqli_query ($koneksi, "SELECT Count(*) as jumlah From tb_pemesanan where id_pelanggan='1'");
$data = $sql->fetch_assoc();
$jumlah_keranjang=$data['jumlah'];
?>