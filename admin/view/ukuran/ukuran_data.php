<?php include 'model/ukuran/ukuran_add.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ukuran Sepatu </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data Ukuran Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data ukuran</h3>
              <div class="float-right">
             <button  class="btn-sm btn-info"  id="add"  data-toggle="modal" data-target="#modal-item" data-tambah="tambah"><i class="fas  fa-plus-circle"></i>  Tambah Data</button>  
            </div>
            </div>
            
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover float-left">
                <thead>
                <tr>
                  <th >No</th>
                  <th >Ukuran</th>
                  <th >Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "select * from tb_ukuran_sepatu order by nama asc");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="60%"><?php echo $result['nama']; ?></td>
                  <td class="text-center">
                      <div class="btn-group btn-group-sm float-none">
                      <button id="select" class="btn btn-default" data-toggle="modal" data-target="#modal-item" 
                        data-id="<?php echo $result['id_ukuran']; ?>" 
                        data-ukuran="<?php echo $result['nama']; ?>" 
                        data-ubah="ubah" 
                        ><i class="fas fa-edit"></i> Ubah</button>
                        <button onClick="ShowModal(this)"  data-id="<?php echo $result ['id_ukuran']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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
              <h4 class="modal-title">Data Sepatu</h4>
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
                            <input type="hidden" class="form-control" value="" name="id" id="m_id" maxlength="2" >
                            <input type="text" class="form-control" value="" name="ukuran" id="m_ukuran" maxlength="2" >
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
    var newUkuran = $(this).data('ukuran');
    var newEdit = $(this).data('ubah');

    $('#m_id').val(newId);
    $('#m_ukuran').val(newUkuran);
    $('#m_aksi').val(newEdit);

});
});
</script>

<script>
  $(document).ready(function(){
    $(document).on('click', '#add', function(){
    var newTambah = $(this).data('tambah');
    
    $('#m_aksi').val(newTambah);



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
    window.location.href="?halaman=ukuran&aksi=hapus&id="+dataId;
  }
});
}
</script>