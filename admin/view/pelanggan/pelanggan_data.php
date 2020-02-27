<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengguna Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data Pengguna Sistem</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pengguna Sistem</h3>
              <div class="float-right">

              <a href="?halaman=pengguna&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus-circle"></i>  Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="width: 10%">No</th>
                  <th style="width: 10%">ID Pelanggan</th>
                  <th style="width: 80%">Nama</th>
                  <th style="width: 80%">Jenis Kelamin</th>
                  <th style="width: 20%">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "SELECT * from tb_pelanggan");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="20%"><?php echo $result['id_pelanggan']; ?></td>
                  <td width="20%"><?php echo $result['nama']; ?></td>
                  <td width="25 %">
                    <?php if($result['jk']== 'L'){ echo 'Laki- laki';} else{ echo 'Perempuan';} ?>
                  </td>
                  <td class="text-center">
                      <div class="btn-group-justified btn-group-sm">
                        <button id="select" class="btn btn-info" data-toggle="modal" data-target="#modal-item" 
                        data-id="<?php echo $result['id_pelanggan']; ?>" 
                        data-nama="<?php echo $result['nama']; ?>" 
                        data-jk="<?php echo $result['jk']; ?>" 
                        data-tgl="<?php echo $result['tgl_lahir']; ?>"
                        data-alamat="<?php echo $result['alamat']; ?>"
                        data-email="<?php echo $result['email']; ?>" 
                        data-hp="<?php echo $result['no_hp']; ?>" 
                        data-akun="<?php echo $result['nama_akun']; ?>" 
                        data-level="<?php echo $result['level']; ?>"
                        data-foto="<?php echo $result['foto']; ?>"
                        ><i class="fas fa-eye"></i> Lihat</button>
                        <a href="?halaman=pengguna&aksi=edit&id=<?php echo $result ['id_pengguna']; ?>" class="btn btn-default"><i class="fas fa-edit"></i> Ubah</a>
                        <button onClick="ShowModal(this)"  data-id="<?php echo $result ['id_pengguna']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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
                      <div class="col-12">
                        <div class="form-group">
                          <div class="text-center">
                          <img class="profile-user-img img-fluid img-circle" src="" id="m_foto" alt="User profile picture">
                          </div>  
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Nama</label>
                        <input type="text"  class="form-control form-control-sm" id="m_nama" readonly>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <input type="text"  class="form-control form-control-sm" id="m_jk" readonly>
                        </div>
                      </div>
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label>Tanggal Lahir</label>
                        <input type="date"  class="form-control form-control-sm" id="m_tgl" readonly>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text"  class="form-control form-control-sm" id="m_email" readonly>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>No Hp</label>
                          <input type="text"  class="form-control form-control-sm" id="m_hp" readonly>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text"  class="form-control form-control-sm" id="m_alamat"readonly>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Nama Akun</label>
                          <input type="text"  class="form-control form-control-sm" id="m_akun" readonly>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Level</label>
                          <input type="text"  class="form-control form-control-sm" id="m_level" readonly>
                        </div>
                      </div>
                    </div>
                  </form>
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
    var newId = $(this).data('id');
    var newNama = $(this).data('nama');
    var newJk = $(this).data('jk');
    var newTgl = $(this).data('tgl');
    var newAlamat = $(this).data('alamat');
    var newHp = $(this).data('hp');
    var newEmail = $(this).data('email');
    var newAkun = $(this).data('akun');
    var newLevel = $(this).data('level');
    var newFoto = $(this).data('foto');

    $('#m_pengguna').val(newId);
    $('#m_nama').val(newNama);
    $('#m_jk').val(newJk);
    $('#m_tgl').val(newTgl);
    $('#m_alamat').val(newAlamat);
    $('#m_hp').val(newHp);
    $('#m_email').val(newEmail);
    $('#m_akun').val(newAkun);
    $('#m_level').val(newLevel);
    $('#m_foto').attr("src", "upload/pengguna/"+newFoto);
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
  confirmButtonText: 'Yes, hapus!',
}).then((result) => {
  if (result.value) {
    window.location.href="?halaman=pengguna&aksi=hapus&id="+dataId;
  }
});
}
</script>