<?php
$var='kosong';
if($var=='kosong'){ ?>
    
<li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header"><?php echo $nama?></span>
            <div class="dropdown-divider"></div>
            <a href="view/masuk.php" class="dropdown-item dropdown-footer">Keluar</a>
          </div>
        </li>
 
    
<?php } elseif ($var=='penuh') { ?>
        
<ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-cart-plus"></i>
            <span class="badge badge-warning navbar-badge"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">Keranjang</span>

              <?php
              $query = mysqli_query ($koneksi, "SELECT tb_pemesanan.id_pemesanan, tb_pemesanan.kuantitas as jumlah, tb_sepatu.nama_sepatu FROM tb_pemesanan INNER join tb_sepatu on tb_pemesanan.id_sepatu=tb_pemesanan.id_sepatu INNER join tb_pelanggan on tb_pelanggan.id_pelanggan=tb_pemesanan.id_pelanggan WHERE tb_pemesanan.id_pelanggan='$akun_id' GROUP by tb_pemesanan.id_pemesanan");
              while ($data = $query->fetch_assoc()) {
              ?>

              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> <?php echo $data['nama_sepatu']; ?>
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
                 
                  
              <?php }
            ?>
           
          
            <div class="dropdown-divider"></div>
            <a href="?halaman=keranjang" class="dropdown-item dropdown-footer">Lihat Semua Keranjang</a>
          </div>
        </li>

        <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="admin/assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?php echo $nama?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="admin/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

            <p>
              <?php echo $nama?>
              <small>Member since Nov. 2012</small>
            </p>
          </li>

          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profil</a>
            <a href="#" class="btn btn-default btn-flat float-right">Keluar</a>
          </li>
        </ul>
      </li>

 

<?php }?>
