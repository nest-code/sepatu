<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Data sepatu Sepatu</li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Sepatu</h3>
              <div class="float-right">

              <a href="?halaman=sepatu&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus-circle"></i>  Tambah Data</a>
              </div>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover float-left">
                <thead>
                <tr>
                  <th style="width: 10%">No</th>
                  <th style="width: 10%">Barcode</th>
                  <th style="width: 30%">Nama</th>
                  <th style="width: 10%">Merek</th>
                  <th style="width: 10%">Jenis</th>
                  <th style="width: 20%">Status</th>
                  <th style="width: 30%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <?php
                $no=1;
                $sql = mysqli_query ($koneksi, "SELECT tb_sepatu.id_sepatu,tb_sepatu.nama_sepatu, tb_sepatu.barcode, tb_sepatu.harga, tb_sepatu.status_sepatu, tb_merek_sepatu.nama_merek, tb_jenis_sepatu.nama_jenis from tb_sepatu inner join tb_merek_sepatu on tb_sepatu.id_merek=tb_merek_sepatu.id_merek INNER join tb_jenis_sepatu on tb_sepatu.id_jenis=tb_jenis_sepatu.id_jenis");
                while ($result = $sql->fetch_assoc()) {
                ?>
                  <td width="5%"><?php echo $no++; ?></td>
                  <td width="10%"><?php echo $result['barcode']; ?></td>
                  <td width="20%"><?php echo $result['nama_sepatu']; ?></td>
                  <td width="10%"><?php echo $result['nama_merek']; ?></td>
                  <td width="10%"><?php echo $result['nama_jenis']; ?></td>
                  <td width="20%"><?php echo $result['status_sepatu']; ?></td>
                  <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm float-none">
                        <a href="?halaman=sepatu&aksi=lihat&id=<?php echo $result['id_sepatu']; ?>" class="btn btn-info"><i class="fas fa-eye"></i> Lihat</a>
                        <a href="?halaman=sepatu&aksi=edit&id=<?php echo $result ['id_sepatu']; ?>" class="btn btn-default"><i class="fas fa-edit"></i> Ubah</a>
                        <button onClick="ShowModal(this)"  data-id="<?php echo $result ['id_sepatu']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</button>
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

  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



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
    window.location.href="?halaman=sepatu&aksi=hapus&id="+dataId;
  }
});
}
</script>
