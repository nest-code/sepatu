<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Supplier Sepatu </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data Supplier Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Supplier</h3>
              <div class="float-right">
              <a href="?halaman=supplier&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus-circle"></i>  Tambah Data</a>
              </div>
            </div>
            
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover float-left">
                <thead>
                <tr>
                  <th style="width: 10%">No</th>
                  <th style="width: 20%">Nama</th>
                  <th style="width: 5%">Hp</th>
                  <th style="width: 30%">Alamat</th>
                  <th style="width: 30%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "select * from tb_supplier");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="20%"><?php echo $result['nama']; ?></td>
                  <td width="10%"><?php echo $result['hp']; ?></td>
                  <td width="30%"><?php echo $result['alamat']; ?></td>


                  <td class="text-center">
                      <div class="btn-group btn-group-sm float-none">
                      <button id="select" class="btn btn-info" data-toggle="modal" data-target="#modal-item" 
                        data-nama="<?php echo $result['nama']; ?>" 
                        data-hp="<?php echo $result['hp']; ?>"
                        data-alamat="<?php echo $result['alamat']; ?>"
                        data-detail="<?php echo $result['detail']; ?>"

                        ><i class="fas fa-eye"></i> Lihat</button>
                        <a href="?halaman=supplier&aksi=edit&id=<?php echo $result ['id_supplier']; ?>" class="btn btn-default"><i class="fas fa-edit"></i> Ubah</a>
                        <button onClick="ShowModals(this)"  data-id="<?php echo $result ['id_supplier']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Sepatu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          
            <div class="modal-body">
              <div class="col-md-12">
                <div class="card-body" style="margin-top:0px;padding-top: 0px;padding-bottom: 0px;">
                  <form role="form">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="form-group">
                          <label>Nama</label>
                        <input type="text"  class="form-control form-control-sm" id="m_nama" readonly>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Hp</label>
                          <input type="text"  class="form-control form-control-sm" id="m_hp" readonly>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Alamat</label>
                        <input type="text"  class="form-control form-control-sm" id="m_alamat" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Detail</label>
                          <input type="text"  class="form-control form-control-sm" id="m_detail" readonly>
                        </div>
                      </div>
                     
                    </div>

                    
                  </form>
                </div>
            </div>
            </div>
        

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>


      
<script src="assets/plugins/jquery/jquery.min.js"></script>

<script>

  $(document).ready(function(){
    $(document).on('click', '#select', function(){

    var newNama = $(this).data('nama');
    var newAlamat = $(this).data('alamat');
    var newHp = $(this).data('hp');
    var newDetail = $(this).data('detail'); 
    $('#m_nama').val(newNama);
    $('#m_alamat').val(newAlamat);
    $('#m_hp').val(newHp);
    $('#m_detail').val(newDetail);


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
  cancelButtonText: 'Batal',
  confirmButtonText: 'Ya, Hapus Data!',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=supplier&aksi=hapus&id="+dataId;
  }
});
}
</script>