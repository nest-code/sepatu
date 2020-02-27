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
              <li class="breadcrumb-item active">Data Merek Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Merek Sepatu (Brand)</h3>
              <div class="float-right">

              <a href="?halaman=merek&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus-circle"></i>  Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover float-left">
                <thead>
                <tr>
                  <th style="width: 10%">No</th>
                  <th style="width: 30%">Nama</th>
                  <th style="width: 20%">Foto</th>
                  <th style="width: 30%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "select id_merek,nama_merek,gambar_merek from tb_merek_sepatu order by nama_merek asc");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="30%"><?php echo $result['nama_merek']; ?></td>
                  <td width="30%" class="text-center">
                    <img src="upload/merek/<?php echo $result['gambar_merek']; ?>" alt="" width="40px">
                  </td>

                  <td class="text-center">
                      <div class="text-center">
                        <button id="select" class="btn btn-info" data-toggle="modal" data-target="#modal-item" 
                        data-merek="<?php echo $result['nama_merek']; ?>" 
                        data-foto="<?php echo $result['gambar_merek']; ?>"
                        ><i class="fas fa-eye"></i> Lihat</button>

                        <a href="?halaman=jenis&aksi=edit&id=<?php echo $result ['id_jenis']; ?>" class="btn btn-default"><i class="fas fa-edit"></i> Ubah</a>
                        <button onClick="ShowModal(this)"  data-id="<?php echo $result ['id_merek']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>

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
    window.location.href="?halaman=merek&aksi=hapus&id="+dataId;
  }
});
}
</script>