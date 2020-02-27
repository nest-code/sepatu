<?php include 'model/supplier/supplier_add.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?halaman=supplier">Supplier</a></li>
              <li class="breadcrumb-item active">Tambah Data Supplier</li>
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
                    <label  class="col-sm-2 control-label">Nama Supplier</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama supplier">
                    </div>
                  </div>


                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 control-label">Hp</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="harga" name="hp" placeholder="Harga">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                    <textarea name="alamat" name="alamat" class="form-control"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="detail" class="col-sm-2 control-label">Detail</label>
                    <div class="col-sm-10">
                      <textarea name="detail" id="detail" name="detail" class="form-control"></textarea>
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