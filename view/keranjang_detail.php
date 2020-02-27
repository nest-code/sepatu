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

    <section class="content">
      <div class="row">
        <div class="offset-1 col-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Keranjang</h3> 
              <div class="float-right">
              <form action="" method="post">
                <button type="submit" name="kirim" value="kirim" class="btn-sm btn-info"><i class="fas  fa-plus-circle"></i>Checkout</button>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover float-left">
                <thead>
                <tr>
                  <th></th>
                  <th>Sepatu</th>
                  <th>Harga</th>
                  <th>Kuantitas</th>
                  <th>Total Harga</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "SELECT * From tb_keranjang inner join tb_sepatu on tb_keranjang.id_sepatu=tb_sepatu.id_sepatu where tb_keranjang.id_pelanggan='$akun_id' AND tb_keranjang.id_pemesanan IS NULL");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%">
                  <div class="icheck-primary d-inline">
                    <input type="checkbox" name="id[]" value="<?php echo $result['id_keranjang'];?>">
                    <label for="checkboxPrimary2">
                    </label>
                  </div>
                  </td>
                  <td width="20%"><?php echo $result['nama_sepatu']; ?></td>
                  <td width="20%">
                      Rp. <?php echo number_format($result['harga']); ?>
                  </td>
                  <td width="20%">
                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas  fa-minus-circle"></i></span>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $result['kuantitas']; ?>" >
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas  fa-plus-circle"></i></span>
                    </div>
                    </div>
                  </td>

                  <td width="20%" class="">
                   Rp.
                  </td>

                  <td class="text-center">
                      <div class="text-center">
                        <button onClick="HapusKeranjang(this)" type="button"  data-id="<?php echo $result ['id_keranjang']; ?>" class="btn btn-default"><i class="fas fa-trash"></i> Hapus</button>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
              
              
                </tbody>
              </table>
            </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>

  
  
  <div class="modal fade" id="modal-item"  aria-modal="close">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Merek Sepatu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          
            <div class="modal-body table-responsive">
              <div class="col-md-12">
                <div class="card-body" style="margin-top:0px;padding-top: 0px;padding-bottom: 0px;">
                  <form role="form">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                                <div class="text-center">
                                <img class="" src="" id="m_foto" alt="User profile picture" style="width:300px">
                                </div>  
                        </div>
                      </div>

                      <div class="col-12">
                        <div class="form-group">
                                <div class="text-center">
                                <input type="text"  class="form-control form-control-sm" id="m_merek" readonly>
                                </div>  
                        </div>
                      </div>
                       
                    </div>
                </div>
            </div>
            </div>

            <div class="modal-footer">
              <div class="text-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
              </div>
            </div>
          </div>
        </div>
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