<?php

if(isset($_POST['kirim'])) {

$nama =  mysqli_real_escape_string($koneksi, $_POST["nama"]);
$alamat =  mysqli_real_escape_string($koneksi, $_POST["alamat"]);
$hp =  mysqli_real_escape_string($koneksi, $_POST["hp"]);
$detail =  mysqli_real_escape_string($koneksi, $_POST["detail"]);
$dibuat = date('Y-m-d h:i:s');



$sql = "insert into tb_supplier (id_supplier, nama, hp, alamat, detail, dibuat, diubah )values('','$nama','$hp','$alamat','$detail','$dibuat','NULL')";
mysqli_query($koneksi,$sql);
if ($sql){

?>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript"> 

Swal.fire({
  icon: 'success',
  title: 'Berhasil',
  text: "Data Berhasil Ditambahkan",
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oke',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=supplier";
  }
});
</script>
<?php } ?>

<?php }?>