<?php
$id = @$_GET['id'];
$sql = "delete from tb_jenis_sepatu where id_jenis='$id'";
mysqli_query($koneksi,$sql);
if ($sql){
?>

<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript"> 
     window.location.href="?halaman=jenis";
Swal.fire({
  icon: 'success',
  title: 'Berhasil',
  text: "Data Berhasil Dihapus",
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Oke',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=jenis";
  }
});

</script>
<?php } ?>