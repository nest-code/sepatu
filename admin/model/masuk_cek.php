<?php

		$koneksi = mysqli_connect("localhost","root","","db_sepatu");

		$akun_nama_akun =  mysqli_real_escape_string($koneksi, $_POST["nama_akun"]);
		$akun_kata_sandi =  mysqli_real_escape_string($koneksi, $_POST["kata_sandi"]);

 
		$hasil=null;
		$query="SELECT * FROM tb_pelanggan WHERE nama_akun='$akun_nama_akun' and kata_sandi='$akun_kata_sandi'";
		
		$login = mysqli_query($koneksi, $query);
		$hasil=mysqli_num_rows($login);

		// var_dump($hasil);
		// die();

		if ($hasil > 0 ) {
			$data= mysqli_fetch_assoc($login);
			$akun_id=$data['id_pelanggan'];
      		$akun_nama=$data['nama'];
			$akun_nama_akun=$data['nama_akun'];
			$akun_kata_sandi=$data['kata_sandi'];
			// $akun_level=$data['level'];
			$akun_foto=$data['foto'];

			session_start();

			//membuat session
			$_SESSION['start'] = time(); // Taking now logged in time.
			$_SESSION['expire'] = $_SESSION['start'] + (30 * 60);
			$_SESSION['id_pelanggan']=$akun_id;
			$_SESSION['nama']=$akun_nama;
			$_SESSION['nama_akun']=$akun_nama_akun;
			$_SESSION['kata_sandi']=$akun_kata_sandi;
			// $_SESSION['level']=$akun_level;
     		$_SESSION['foto']=$akun_foto;
			 
			 
			header('location:../../');
		}else{
      	?>
				<script type="text/javascript">
				alert("Ada yang salah");
				window.location="../../";
				</script>
      	<?php
		}
?>
