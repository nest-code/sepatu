<?php include 'admin/model/pelanggan/keranjang_order.php'?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bangsat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data Merek Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    
    <section class="content" >
      <div class="row">
        <div class="offset-1 col-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bangsat || <b> Segera lakukan pembayaran </b> </h3>
              <div class="float-right">
                <form action="" method="post">
                  <label for="" style="margin-right: 20px">00:00:00</label>

              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>



    <?php
    $sql = mysqli_query ($koneksi, "SELECT  DISTINCT tb_keranjang.id_pemesanan From tb_keranjang inner join tb_sepatu on tb_keranjang.id_sepatu=tb_sepatu.id_sepatu where tb_keranjang.id_pelanggan='$akun_id' AND tb_keranjang.id_pemesanan IS NOT NULL");
    while ($result = $sql->fetch_assoc()) {
    ?>

                
    <section class="content">
      <div class="row">
        <div class="offset-1 col-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Checkout : </b><?php echo $result['id_pemesanan']?></h3> 
              <div class="float-right">
              <form action="" method="post">
              <label for="" style="margin-right: 20px">00:00:00</label>
                <button type="submit" name="kirim" value="kirim" class="btn-sm btn-primary"><i class="fas  fa-money"></i> Bayarkan</button>
                <button type="submit" name="hapus" value="hapus" class="btn-sm btn-danger"><i class="fas  fa-trash"></i> Hapus</button>
            </div>
            </div>

                <div class="card-body">     
                <table id="example2" class="table table-bordered table-hover float-left">
                <thead>
                <tr>
                  <th style="width: 5%">No</th>
                  <th style="width: 10%">Foto</th>
                  <th style="width: 20%">Nama Sepatu</th>
                  <th style="width: 10%">Kuantitas</th>
                  <th style="width: 20%">Harga Satuan</th>
                  <th style="width: 20%">Total</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                $no=1;
                $pemesanid=$result['id_pemesanan'];
                $sql2 = mysqli_query ($koneksi, "SELECT tb_keranjang.id_pemesanan, tb_keranjang.id_sepatu, tb_sepatu.harga, tb_keranjang.kuantitas, tb_sepatu.nama_sepatu, (tb_keranjang.kuantitas * tb_sepatu.harga) AS jumlah From tb_keranjang inner join tb_sepatu on tb_keranjang.id_sepatu=tb_sepatu.id_sepatu where tb_keranjang.id_pemesanan='$pemesanid' AND tb_keranjang.id_pemesanan IS NOT NULL");
                while ($data = $sql2->fetch_assoc()) {
                    ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td></td>
                  <td><?php echo $data['nama_sepatu'];?></td>
                  <td><?php echo $data['kuantitas'];?></td>
                  <td>Rp.  <?php echo number_format($data['harga']);?></td>
                  <td>Rp.  <?php echo number_format($data['jumlah']);?></td>
                </tr>
                  <?php } ?>
                  <tr>
                  <td colspan="5" class="text-center"><b>Total Bayar</b></td>
                  <td>
                <b>Rp.  </b>
                  </td>
                </tr>
                </tbody>
              </table>
                </div>
            </form>
            <div class="card-footer">
                    <label for=""> Alamat Tujuan</label>
                </div>
          </div>
        </div>
      </div>
    </section>
                  <?php } ?>
              




  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
<script>

  $(document).ready(function(){
    $(document).on('click', '#select', function(){
    var newIds = $(this).data('merek');
    var newFoto = $(this).data('foto');

    $('#m_merek').val(newIds);
    $('#m_foto').attr("src", "upload/merek/"+newFoto);
});
});
</script>

<script>

  $(document).ready(function(){
    $(document).on('click', '#keranjang', function(){
    var newIds = $(this).data('merek');
    var newFoto = $(this).data('foto');

    $('#m_merek').val(newIds);
    $('#m_foto').attr("src", "upload/merek/"+newFoto);
});
});
</script>



<script>
function HapusKeranjang(elem){
var newHapusKeranjang = $(elem).data("id");

  
Swal.fire({
  title: 'Apakah anda yakin?',
  text: "Data yang dihapus tidak dapat dekembalikan kembali",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=keranjang&aksi=hapus&id="+newHapusKeranjang;
  }
});
}
</script>