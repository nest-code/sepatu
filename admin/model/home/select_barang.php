<?php
    $sql = mysqli_query ($koneksi, "select nama_sepatu,harga,gambar_1 from tb_sepatu");
    $result = $sql->fetch_assoc();
?>