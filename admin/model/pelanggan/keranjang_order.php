<?php
if(isset($_POST['kirim'])) {
  $id=$_POST['id'];

$queryjum = "SELECT max(id_pemesanan) as maxKode FROM tb_pemesanan";
$hasil = mysqli_query($koneksi,$queryjum);
$data = mysqli_fetch_array($hasil);
$kodePesan = $data['maxKode'];
$noUrut = (int) substr($kodePesan, 3, 3);
$noUrut++;
$char = "PMS";
$kodePesan= $char . sprintf("%03s", $noUrut);
$dibuat = date('Y-m-d h:i:s');
$status='dibuat';

$query = "UPDATE tb_keranjang set id_pemesanan='$kodePesan' WHERE id_keranjang IN (".implode(",", $id).")";
mysqli_query($koneksi,$query);

$query = "INSERT INTO tb_pemesanan (id_pemesanan)VALUE('$kodePesan')";
mysqli_query($koneksi,$query);


$query = "INSERT INTO tb_detail_pemesanan (id_dtl_pemesanan,tgl_pesan,id_pemesanan,status_pesan)VALUE('','$dibuat','$kodePesan','$status')";
mysqli_query($koneksi,$query);
if ($query){

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
       
        
        //   window.location='?halaman=jenis';
    </script>

<?php 
}
}

?>