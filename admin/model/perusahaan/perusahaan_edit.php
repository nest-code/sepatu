<?php
if(isset($_POST['kirim'])){
$id=$_POST['id_profil'];
$nama=$_POST['nama'];
$slogan=$_POST['slogan'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$hp=$_POST['no_hp'];
// $logo=$_POST['logo'];
// $logo=$_POST['logo'];
$detail=$_POST['detail'];

$sql = $koneksi->query("UPDATE tb_profil_perusahaan set nama='$nama',slogan='$slogan',alamat='$alamat',no_hp='$hp',email='$email',detail='$detail'  where id_profil='$id'");
if ($sql){
    ?>
    
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript"> 
        
    Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: "Data Berhasil Diubah",
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Oke',
    }).then((result) => {
      if (result.value) {
        window.location.href="?halaman=instansi";
      }
    });
    
    </script>
    <?php } 
    }?>