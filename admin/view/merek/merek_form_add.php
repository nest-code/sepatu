<?php include 'model/merek/merek_add.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Merek Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?halaman=merek">Merek Sepatu</a></li>
              <li class="breadcrumb-item active">Tambah Data Merek Sepatu</li>
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
                    <label for="nama_merek" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" id="nama_merek" placeholder="Nama Merek Sepatu" require>
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

  