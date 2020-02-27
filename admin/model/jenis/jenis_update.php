<?php

if(isset($_POST['kirim'])) {
$aksi = $_POST['aksi'];
if ($aksi =="ubah") {

  $id =  mysqli_real_escape_string($koneksi, $_POST["id"]);
  $nama =  mysqli_real_escape_string($koneksi, $_POST["jenis"]);

  $sql = "update tb_jenis_sepatu set nama_jenis='$nama' where id_jenis='$id'";
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
       
          // window.location='?halaman=jenis';
    </script>
    <?php } ?>





<?php }elseif ($aksi =="tambah"){

  $nama =  mysqli_real_escape_string($koneksi, $_POST["ukuran"]);

  $sql = "INSERT into tb_ukuran_sepatu (id_ukuran, nama)values('','$nama')";
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

    </script>
    <?php } ?>
<?php
}
} 
?>