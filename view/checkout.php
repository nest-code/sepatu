<div class="content-wrapper">
    <section class="content">
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
        <div class="offset-1 col-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Alamat</h3>
              <div class="float-right">
              <a href="?halaman=merek&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus"></i>  Tambah Alamat</a>
              <a href="?halaman=merek&aksi=tambah" class="btn-sm btn-default"><i class="fas  fa-edit"></i>  Ubah</a>
              </div>
            </div>
            <div class="card-body">
                <?php 
                echo $id_akun;
                $sql="SELECT alamat FROM tb_pengguna where id_pengguna='$id_akun'";
                mysqli_query($koneksi,$sql);
                $hasil = $sql->fetch_assoc()
                ?>
            <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <label for="" class="form-control"> Alamat</label>
                    <input type="texxt" name="" value="<?php echo $hasil?>" id="">
                  </div>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="row">
        <div class="offset-1 col-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Metode Pembayaran</h3>
              <div class="float-right">
              <a href="?halaman=merek&aksi=tambah" class="btn-sm btn-info"><i class="fas  fa-plus"></i>  Tambah Alamat</a>
              <a href="?halaman=merek&aksi=tambah" class="btn-sm btn-default"><i class="fas  fa-edit"></i>  Ubah</a>
              </div>
            </div>
            <div class="card-body">
                <div class="form-group ">
            <div class="row">
                  <label class="col-sm-2 control-label">Transfer Bank</label>
                  <div class="col-sm-10">
                        <button type="button" class="btn-primary">BRI</button>
                        <button type="button" class="btn-primary">BCA</button>
                        <button type="button" class="btn-primary">BNI</button>
                  </div>
                  
                
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

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