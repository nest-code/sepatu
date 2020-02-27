<?php
include '../config.php';
$id=$_POST['id'];

$sql = "select nama_akun from tb_pengguna where nama_akun='$id'";

$process = mysqli_query($koneksi,$sql);
$num = mysqli_num_rows($process);

if($num == 0){
	echo "";
}else{
	echo " ❌ Nama akun sudah dipakai, coba yang lain ";
}

?>
<script>

</script>