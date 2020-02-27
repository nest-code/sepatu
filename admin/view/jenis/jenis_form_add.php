<?php include 'model/jenis/jenis_add.php' ?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jenis Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?halaman=jenis">Jenis Sepatu</a></li>
              <li class="breadcrumb-item active">Tambah Data Jenis Sepatu</li>
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

              <form class="form-horizontal" action="" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_jenis" class="col-sm-2 control-label">Nama Jenis Sepatu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Jenis Sepatu" required>
                      <span class="float-left m-2">  contoh : sneaker</span>
                    </div>
                  </div>              
                </div>
                <div class="card-footer">
                    <a href="?halaman=jenis" class="btn btn-default float-right m-2"> Kembali</a>
                 <button type="submit" name="kirim" value="kirim" class="btn btn-info float-right m-2">Simpan</button>

                </div>
              </form>
            </div>
          </div>
      </div>

    </section>

  </div>

  <script type="text/javascript">

  function test2(){

    alert('asdasd');

    swal({
    title: "Sukses",
    text: "Data telah ditambahkan",
    icon: "success",
    confirmButtonText: "Ok",
    closeOnConfirm: false
  });

  };


  </script>