<?php
    $sql = mysqli_query ($koneksi, "select* from tb_profil_perusahaan");
    $result = $sql->fetch_assoc();
?>