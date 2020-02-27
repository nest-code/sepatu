<?php

if(isset($_POST['kirim'])) {

  $id_sepatu =  mysqli_real_escape_string($koneksi, $_POST["id_sepatu"]);
  $ukuran =  mysqli_real_escape_string($koneksi, $_POST["ukuran"]);
  $jenis =  'in';
  $detail =  mysqli_real_escape_string($koneksi, $_POST["detail"]);
  $id_supplier =  mysqli_real_escape_string($koneksi, $_POST["id_supplier"]);
  $jumlah =  mysqli_real_escape_string($koneksi, $_POST["jumlah"]);
  $tanggal =  mysqli_real_escape_string($koneksi, $_POST["tanggal"]);
  $dibuat = date('Y-m-d h:i:s');
  $id_pengguna =  mysqli_real_escape_string($koneksi, $_POST["id_pengguna"]);


$sql = "insert into tb_stok (id_stok,id_sepatu,ukuran,jenis,detail,id_supplier,jumlah,tanggal,dibuat,id_pengguna)values('','$id_sepatu','$ukuran','$jenis','$detail','$id_supplier','$jumlah','$tanggal','$dibuat','$id_pengguna')";
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
   
      window.location='?halaman=stok&aksi=tambah';
</script>
<?php } ?>

<?php }?>