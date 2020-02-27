<?php //include 'model/order/order_update.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data order Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data order Sepatu</h3>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pemesanan</th>
                  <th>Waktu Pesan</th>
                  <th>Nama Pemesan</th>
                  <th>Sepatu</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "SELECT * from tb_pemesanan inner join tb_sepatu on tb_sepatu.id_sepatu=tb_pemesanan.id_pemesanan inner join tb_pelanggan on tb_pelanggan.id_pelanggan=tb_pemesanan.id_pelanggan");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="10%"><?php echo $result['id_pemesanan']; ?></td>
                  <td width="10%"><?php echo $result['id_dtl_pemesanan']; ?></td>
                  <td width="10%"><?php echo $result['id_pelanggan']; ?></td>
                  <td width="10%"><?php echo $result['id_sepatu']; ?></td>

                  <td class="text-center">
                      <div class="btn-group-justified btn-group-sm">
                      <button id="select" class="btn btn-default" data-toggle="modal" data-target="#modal-item" 
                        data-id="<?php echo $result['id_order']; ?>" 
                        data-order="<?php echo $result['nama_order']; ?>" 
                        data-ubah="ubah" 
                        ><i class="fas fa-edit"></i> Ubah</button>
                        <button onClick="ShowModal(this)"  data-id="<?php echo $result ['id_order']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  
  <div class="modal fade" id="modal-item"  aria-modal="close">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">order Sepatu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <div class="modal-body">
                <form role="form" action="" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Ukuran</label>
                            <input type="hidden" class="form-control" value="" name="id" id="m_id" >
                            <input type="text" class="form-control" value="" name="order" id="m_order" >
                            <input type="hidden" class="form-control" value="" name="aksi" id="m_aksi"  >
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" value="kirim" name="kirim" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>

                </div>
                </form>
            </div>
          </div>
        </div>
      </div>

  

  <script src="assets/plugins/jquery/jquery.min.js"></script>

<script>

  $(document).ready(function(){
    $(document).on('click', '#select', function(){
    var newId = $(this).data('id');
    var neworder = $(this).data('order');
    var newEdit = $(this).data('ubah');

    $('#m_id').val(newId);
    $('#m_order').val(neworder);
    $('#m_aksi').val(newEdit);

});
});
</script>

<script>
function ShowModal(elem){
var dataId = $(elem).data("id");
  
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
    window.location.href="?halaman=order&aksi=hapus&id="+dataId;
  }
});
}
</script>