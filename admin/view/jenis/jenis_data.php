<?php include 'model/jenis/jenis_update.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jenis Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data Jenis Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Jenis Sepatu</h3>
              <div class="float-right">

              <a href="?halaman=jenis&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus-circle"></i>  Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 10%">No</th>
                  <th style="width: 80%">Nama</th>
                  <th style="width: 20%">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "select id_jenis,nama_jenis from tb_jenis_sepatu");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="50%"><?php echo $result['nama_jenis']; ?></td>
                  <td class="text-center">
                      <div class="btn-group-justified btn-group-sm">
                      <button id="select" class="btn btn-default" data-toggle="modal" data-target="#modal-item" 
                        data-id="<?php echo $result['id_jenis']; ?>" 
                        data-jenis="<?php echo $result['nama_jenis']; ?>" 
                        data-ubah="ubah" 
                        ><i class="fas fa-edit"></i> Ubah</button>
                        <button onClick="ShowModals(this)"  data-id="<?php echo $result ['id_jenis']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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
              <h4 class="modal-title">Jenis Sepatu</h4>
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
                            <input type="text" class="form-control" value="" name="jenis" id="m_jenis" >
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
    var newJenis = $(this).data('jenis');
    var newEdit = $(this).data('ubah');
    $('#m_id').val(newId);
    $('#m_jenis').val(newJenis);
    $('#m_aksi').val(newEdit);

});
});
</script> 

<script>
function ShowModals(elem){
var dataId = $(elem).data("id");
  
Swal.fire({
  title: 'Apakah anda yakin?',
  text: "Data yang dihapus tidak dapat dekembalikan kembali",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya, Hapus !',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=jenis&aksi=hapus&id="+dataId;
  }
});
}
</script>