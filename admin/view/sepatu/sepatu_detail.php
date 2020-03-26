<?php
$id_sepatu=$_GET['id'];

$sql = mysqli_query ($koneksi, "SELECT * FROM tb_sepatu where id_sepatu='$id_sepatu'");
$result = $sql->fetch_assoc();



$sql29 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='29'");
$data29 = $sql29->fetch_assoc();
$jumlah_29=$data29['total'];

$sql30 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='30'");
$data30 = $sql->fetch_assoc();
$jumlah_30=$data30['total'];

$sql31 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='31'");
$data31 = $sql31->fetch_assoc();
$jumlah_31=$data31['total'];

$sql32 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='32'");
$data32 = $sql32->fetch_assoc();
$jumlah_32=$data32['total'];

$sql33 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='33'");
$data33 = $sql33->fetch_assoc();
$jumlah_33=$data33['total'];

$sql34 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='34'");
$data34 = $sql34->fetch_assoc();
$jumlah_34=$data34['total'];

$sql35 = mysqli_query ($koneksi, "SELECT sum(tb_stok.jumlah) AS total FROM tb_sepatu inner join tb_stok on tb_stok.id_sepatu=tb_sepatu.id_sepatu where tb_sepatu.id_sepatu='$id_sepatu' AND tb_stok.ukuran='35'");
$data35 = $sql35->fetch_assoc();
$jumlah_35=$data35['total'];




?>
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Data Sepatu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="?halaman=sepatu">Sepatu</a></li>
              <li class="breadcrumb-item active">Detail Sepatu</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"><?php echo$result['nama_sepatu'];?></h3>
              <div class="col-12">
                <img src="upload/sepatu/<?php echo $result['gambar_1']?>" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="upload/sepatu/<?php echo $result['gambar_1']?>" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="upload/sepatu/<?php echo $result['gambar_2']?>" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="upload/sepatu/<?php echo $result['gambar_3']?>" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="upload/sepatu/<?php echo $result['gambar_4']?>" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="upload/sepatu/<?php echo $result['gambar_5']?>" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo$result['nama_sepatu'];?></h3>
              <p><?php echo$result['detail'];?></p>



              <h4 class="mt-3">Ukuran <small> | Ukuran Sepatu</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">29</span>
                  <br>
                  Stok : <?php echo $jumlah_29?>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">30</span>
                  <br>
                  Stok : <?php echo $jumlah_30?>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">31</span>
                  <br>
                  Stok : <?php echo $jumlah_31?>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">32</span>
                  <br>
                  Stok : <?php echo $jumlah_32?>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">33</span>
                  <br>
                  Stok : <?php echo $jumlah_33?>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">34</span>
                  <br>
                  Stok : <?php echo $jumlah_34?>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option1" autocomplete="off">
                  <span class="text-xl">35</span>
                  <br>
                  Stok : <?php echo $jumlah_35?>
                </label>
          
              </div>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                Rp.<?php echo$result['harga'];?>
                </h2>
              </div>

           
            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?php echo $result['detail']?></div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"></div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
