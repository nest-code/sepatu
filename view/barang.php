<?php //include_once 'admin/model/home/select_barang.php'?>
<br><br><br>
<div class="content" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-default" type="submit">
                                <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<section class="content">
         <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">


          <?php
                $sql = mysqli_query ($koneksi, "select id_sepatu,nama_sepatu,harga,gambar_1 from tb_sepatu");
                while ($result = $sql->fetch_assoc()) {
                ?>

                <a href="?halaman=detail&id=<?php echo $result['id_sepatu']; ?>">
                  <div class="col-12 col-sm-4 col-md-2 ">
                        <div class="card bg-light">
                          <div class="card-header text-muted border-bottom-0">
                          <?php echo $result['nama_sepatu']; ?>
                          </div>
                          <div class="">
                            <img src="admin/upload/sepatu/<?php echo $result['gambar_1']; ?>" width="206px" alt="" >
                          </div>
                        
                          <div class="card-footer">
                              <div class="text-right">
                            <label for="">Rp.<?php echo number_format($result['harga'])?>/stok</label>
                              <a href="?halaman=detail" class="btn btn-sm btn-primary">
                                <i class="fas fa-cart-plus"></i> 
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>
                  </a>
                
                <?php } ?>

          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
    

    </section>