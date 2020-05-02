<?php
include '../config.php';
$id=$_POST['barcode'];

$sql = "select barcode from tb_sepatu where barcode='$id'";

$process = mysqli_query($koneksi,$sql);

$num = mysqli_num_rows($process);

if($num == 0){
	echo " ✔ Barcode Bisa digunakan";
}else{
	echo " ❌ Barcode sudah dipakai";
}

?>
<script>

</script>