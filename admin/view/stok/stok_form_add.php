<?php include 'model/transaksi/transaksi_stok_in_add.php' ?>

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Stok In</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Beranda</a></li>
              <li class="breadcrumb-item active">Tambah Stok Sepatu</li>
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
                    <label for="nama_merek" class="col-sm-2 control-label">Tanggal</label>
                    <div class="col-sm-10">
                    <input type="hidden" name="id_sepatu" id="id_sepatu">
                      <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d')?>" readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_merek" class="col-sm-2 control-label">Supplier</label>
                    <div class="col-sm-10">
                    <select name="id_supplier" class="form-control">
                        <option value="">-Suplier-</option>
                        <?php
                            $sql2 = mysqli_query ($koneksi, "select * from tb_supplier");
                            while ($result2 = $sql2->fetch_assoc()) {
                            ?>
                               <option value="<?php echo $result2['id_supplier']; ?>"><?php echo $result2['nama']; ?></option>                   
                                <?php }
                          ?>
                    </select>
                    </div>
                  </div>

                  <div class="form-group row"> 
                  <label for="nama_merek" class="col-sm-2 control-label">Barcode</label>
                  <div class="col-sm-10">
                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="text" name="barcode" id="barcode" class="form-control">
                        <div class="input-group-append" data-toggle="modal" data-target="#modal-item">
                            <div class="input-group-text"><i class="fa fa-search"></i></div>
                            </div>
                        </div>
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label for="nama_merek" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control"  id="nama_sepatu" placeholder="Nama Sepatu" readonly>
                    </div>

                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="id_merek" id="id_merek"  readonly>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_merek" class="col-sm-2 control-label">Ukuran | Jumlah </label>
                    <div class="col-sm-6">
                        <select name="ukuran" id="" class="form-control">
                            <option value="">-Ukuran Sepatu-</option>
                            <option value="29">29</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Sepatu" maxlength="4" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="nama_merek" class="col-sm-2 control-label">Detail</label>                
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="detail" id="detail" placeholder="Detail Sepatu" required>
                      <input type="hidden" class="form-control" name="id_pengguna" value="<?php echo $akun_id ?>" >
                    
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

  
  <div class="modal fade" id="modal-item"  aria-modal="close">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Data Sepatu</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
          
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="example2" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Barcode</th>
                            <th>Nama</th>
                            <th>Merek</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php
                            $no=1;
                            $sql = mysqli_query ($koneksi, "SELECT tb_sepatu.id_sepatu,tb_sepatu.nama_sepatu, tb_merek_sepatu.id_merek ,tb_merek_sepatu.nama_merek,tb_sepatu.barcode from tb_sepatu inner join tb_merek_sepatu on tb_sepatu.id_merek=tb_merek_sepatu.id_merek");
                            while ($result = $sql->fetch_assoc()) {
                            ?>
                            <td width="5%"><?php echo $no++; ?></td>
                            <td width="20%"><?php echo $result['barcode']; ?></td>
                            <td width="20%"><?php echo $result['nama_sepatu']; ?></td>
                            <td width="10%"><?php echo $result['nama_merek']; ?></td>

                            <td class="text-center">
                            <button id="select" class="btn btn-xs btn-info" 
                                        data-id="<?php echo $result['id_sepatu']; ?>"
                                        data-barcode="<?php echo $result['barcode']; ?>"
                                        data-nama="<?php echo $result['nama_sepatu']; ?>"
                                        data-merek="<?php echo $result['nama_merek']; ?>">
                                        <i class="fa fa-check"></i>Pilih
                                </button>
                            </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
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
    var id_sepatu = $(this).data('id');
    var barcode = $(this).data('barcode');
    var nama_sepatu = $(this).data('nama');
    var id_merek = $(this).data('merek');
    var nama_merek = $(this).data('nama');

    $('#id_sepatu').val(id_sepatu);
    $('#barcode').val(barcode);
    $('#nama_sepatu').val(nama_sepatu);
    $('#id_merek').val(id_merek);
    $('#nama_merek').val(nama_merek);
    $('#modal-item').modal('hide');
});
});
</script>

<script>
function showID(button) {
  alert($(button).attr('data-ids'));
}
</script>
