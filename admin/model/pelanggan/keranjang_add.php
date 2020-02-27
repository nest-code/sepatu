<?php

if(isset($_POST['kirim'])) {

$sepatu = $_POST['id_sepatu'];

$pelanggan = $_POST['id_pelanggan'];
$ukuran = $_POST['ukuran'];
$kuantitas = $_POST['kuantitas'];



$sql = "INSERT into tb_keranjang (id_keranjang, id_pelanggan, id_sepatu, ukuran, kuantitas,id_pemesanan)
values('','$pelanggan','$sepatu','$ukuran','$kuantitas',NULL)";
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
        title: 'Data berhasil disimpan !',
        timer: 3000,
        timeOut: 5000
      })
      });
   
      window.location='?halaman=jenis';
</script>
<?php } ?>

<?php }?>