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
                <img src="upload/sepatu/<?php echo $result['gambar_2']?>" class="product-image" alt="Product Image">
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

              <div class="mt-4">
                <div class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                  Add to Cart
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-heart fa-lg mr-2"></i> 
                  Add to Wishlist
                </div>
              </div>

              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
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
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
