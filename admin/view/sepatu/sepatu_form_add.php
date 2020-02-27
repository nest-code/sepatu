<?php include 'model/sepatu/sepatu_add.php' ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?halaman=sepatu">Sepatu</a></li>
              <li class="breadcrumb-item active">Tambah Data Sepatu</li>
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
                    <label  class="col-sm-2 control-label">Barcode</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="barcode" placeholder="Barcode" id="barcode" onkeyup="isi_otomatis()" maxlength="5">
                      <span class="float-right" id="alert">contoh : S001 </span>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" placeholder="Nama Sepatu">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 control-label">Merek dan Jenis</label>
                    <div class="col-sm-5">
                      <select name="id_jenis" class="form-control">
                      <option value="">-Pilih-</option>
                         <?php
                            include "model/config.php";
                            $sql = mysqli_query ($koneksi, "select * from tb_jenis_sepatu");
                            while ($result = $sql->fetch_assoc()) {
                            ?>
                               <option value="<?php echo $result['id_jenis']; ?>"><?php echo $result['nama_jenis']; ?></option>                   
                                <?php }
                          ?>
                      </select>
                    </div>
                    <div class="col-sm-5">
                      <select name="id_merek" class="form-control">
                      <option value="">-Pilih-</option>
                      <?php
                            include "model/config.php";
                            $sql2 = mysqli_query ($koneksi, "select * from tb_merek_sepatu");
                            while ($result2 = $sql2->fetch_assoc()) {
                            ?>
                               <option value="<?php echo $result2['id_merek']; ?>"><?php echo $result2['nama_merek']; ?></option>                   
                                <?php }
                          ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="foto" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="file" class="form-group" name="gambar1">
                      <input type="file" class="form-group" name="gambar2">
                      <input type="file" class="form-group" name="gambar3">
                      <input type="file" class="form-group" name="gambar4">
                      <input type="file" class="form-group" name="gambar5">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="harga" class="col-sm-2 control-label">Harga</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script type="text/javascript">
            function isi_otomatis(){
                var newBarcode = $("#barcode").val();
                $.ajax({
                url:"model/ajax/cek_barcode.php",
                method: "POST",
                data:{barcode:newBarcode},
                success:function(data){
                  console.log(data)
                  $('#alert').html(data);
                }
              });
            }
  </script>
