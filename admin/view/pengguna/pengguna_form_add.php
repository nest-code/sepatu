<?php include 'model/pengguna/pengguna_add.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?halaman=pengguna">Pengguna </a></li>
              <li class="breadcrumb-item active">Tambah Data Pengguna </li>
            </ol>
          </div>
        </div>
    </section>

    <section class="content">
      <div class="row">
      <div class="col-md-12">
       
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tambah Data</h3>
              </div>

              <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="nama_Pengguna" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pengguna Sepatu" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_Pengguna" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                       <select name="jk" class="form-control" >
                            <option value="">-Pilih-</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <label for="tgl_lahir" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="date" name="tgl_lahir" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_Pengguna" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>

                    <label for="tgl_lahir" class="col-sm-2 control-label">No Hp</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="no_hp" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_Pengguna" class="col-sm-2 control-label">Nama Akun</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="nama_akun" id="nama_akun" onkeyup="isi_otomatis()" placeholder="Nama Akun" required>
                      <span id="alert"></span>
                    </div>

                    <label for="tgl_lahir" class="col-sm-2 control-label">Kata Sandi</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" name="kata_sandi" id="sandi" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_Pengguna" class="col-sm-2 control-label">Level </label>
                    <div class="col-sm-4">
                    <select name="level" class="form-control" required>
                            <option value="">-Pilih-</option>
                            <option value="Admin">Admin</option>
                            <option value="Petugas">Petugas</option>
                            <option value="Pimpinan">Pimpinan</option>

                        </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 control-label">Foto</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-control" name="foto" required>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-default float-right m-2">Batal</button>
                 <button type="submit" name="kirim" value="kirim" class="btn btn-info float-right m-2">Simpan</button>
                </div>
              </form>
            </div>
          </div>
      </div>

    </section>

  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript">
          function isi_otomatis(){
              var newNamakun = $("#nama_akun").val();
              $.ajax({
              url:"model/ajax/cek_akun.php",
              method: "POST",
              data:{id:newNamakun},
              success:function(data){
                console.log(data)
                $('#alert').html(data);
              }
            });
          }
</script>