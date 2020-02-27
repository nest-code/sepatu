<?php

if(isset($_POST['kirim'])) {
$nama = $_POST['nama'];

$sql = "insert into tb_jenis_sepatu (id_jenis, nama_jenis)values('','$nama')";
mysqli_query($koneksi,$sql);
if ($sql){

?>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript"> 

$(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      confirmButtonText : "Ok"     
    });

      Toast.fire({
        type: 'success',
        title: '<?php echo $nama ?>, Data berhasil disimpan !',
        timer: 3000,
        timeOut: 5000
      })
      });
   
      window.location='?halaman=jenis';
</script>
<?php } ?>

<?php }?>