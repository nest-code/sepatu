-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 10:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sepatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_detail_sepatu`
--

CREATE TABLE `db_detail_sepatu` (
  `id_dlt_sepatu` int(15) NOT NULL,
  `id_sepatu` int(15) NOT NULL,
  `stok` int(15) NOT NULL,
  `ukuran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_alamat`
--

CREATE TABLE `tb_alamat` (
  `id_alamat` int(11) NOT NULL,
  `nama_penerima` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` tinytext NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pemesanan`
--

CREATE TABLE `tb_detail_pemesanan` (
  `id_dtl_pemesanan` int(20) NOT NULL,
  `tgl_pesan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_pemesanan` varchar(10) NOT NULL,
  `status_pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_pemesanan`
--

INSERT INTO `tb_detail_pemesanan` (`id_dtl_pemesanan`, `tgl_pesan`, `id_pemesanan`, `status_pesan`) VALUES
(3, '2020-02-14 18:27:13', 'PMS001', 'dibuat'),
(4, '2020-02-14 18:27:22', 'PMS002', 'dibuat'),
(5, '2020-02-14 18:27:36', 'PMS003', 'dibuat'),
(6, '2020-02-14 18:28:33', 'PMS004', 'dibuat'),
(7, '2020-02-14 18:28:40', 'PMS005', 'dibuat'),
(8, '2020-02-14 18:30:07', 'PMS006', 'dibuat'),
(9, '2020-02-14 18:30:12', 'PMS007', 'dibuat'),
(10, '2020-02-14 18:31:22', 'PMS008', 'dibuat'),
(11, '2020-02-14 18:32:37', 'PMS009', 'dibuat'),
(12, '2020-02-14 18:32:48', 'PMS010', 'dibuat'),
(13, '2020-02-14 18:34:13', 'PMS011', 'dibuat'),
(14, '2020-02-14 18:37:31', 'PMS012', 'dibuat'),
(15, '2020-02-14 19:16:20', 'PMS013', 'dibuat'),
(16, '2020-02-14 19:21:01', 'PMS014', 'dibuat'),
(17, '2020-02-14 20:26:18', 'PMS015', 'dibuat'),
(18, '2020-02-14 20:27:02', 'PMS016', 'dibuat'),
(19, '2020-02-14 20:29:53', 'PMS017', 'dibuat'),
(20, '2020-02-14 20:31:50', 'PMS018', 'dibuat'),
(21, '2020-02-14 21:03:48', 'PMS019', 'dibuat'),
(22, '2020-02-16 19:23:08', 'PMS020', 'dibuat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_sepatu`
--

CREATE TABLE `tb_jenis_sepatu` (
  `id_jenis` int(5) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_sepatu`
--

INSERT INTO `tb_jenis_sepatu` (`id_jenis`, `nama_jenis`) VALUES
(37, 'Sneakers'),
(38, 'Cassual'),
(39, 'Sport'),
(40, 'Style');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(105) NOT NULL,
  `id_pelanggan` varchar(3) NOT NULL,
  `id_sepatu` varchar(4) NOT NULL,
  `ukuran` varchar(2) NOT NULL,
  `kuantitas` int(3) NOT NULL,
  `id_pemesanan` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `id_pelanggan`, `id_sepatu`, `ukuran`, `kuantitas`, `id_pemesanan`) VALUES
(19, '1', '3', '34', 1, 'PMS005'),
(20, '1', '3', '34', 1, 'PMS007'),
(21, '1', '2', '34', 1, 'PMS011'),
(22, '1', '2', '34', 3, 'PMS012'),
(23, '1', '1', '34', 4, 'PMS012'),
(24, '1', '2', '34', 1, 'PMS013');

-- --------------------------------------------------------

--
-- Table structure for table `tb_merek_sepatu`
--

CREATE TABLE `tb_merek_sepatu` (
  `id_merek` int(10) NOT NULL,
  `nama_merek` varchar(50) NOT NULL,
  `gambar_merek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_merek_sepatu`
--

INSERT INTO `tb_merek_sepatu` (`id_merek`, `nama_merek`, `gambar_merek`) VALUES
(8, 'Vans', 'merek-0702202090252-vans.png'),
(11, 'Converse', 'merek-0702202092338-converse.png'),
(12, 'Puma', 'merek-0702202092618-pumas.png'),
(13, 'Kodachi', 'merek-0702202092825-kodachi.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `nama_akun` varchar(25) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `kota` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_akun`, `kata_sandi`, `nama`, `jk`, `email`, `hp`, `kota`, `alamat`, `foto`, `dibuat`) VALUES
(1, 'pelanggan', 'pelanggan', 'Agus', 'L', 'agus@gmail.com', '085277889900', 'Jakarta', 'Jakarta Indonesia', '', '2020-02-10 09:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(11) NOT NULL,
  `id_dtl_pemesanan` varchar(11) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `gambar_bukti` varchar(50) NOT NULL,
  `bank_tujuan` varchar(30) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `nama_rek` varchar(20) NOT NULL,
  `nominal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`id_pemesanan`) VALUES
('PMS001'),
('PMS002'),
('PMS003'),
('PMS004'),
('PMS005'),
('PMS006'),
('PMS007'),
('PMS008'),
('PMS009'),
('PMS010'),
('PMS011'),
('PMS012'),
('PMS013'),
('PMS014'),
('PMS015'),
('PMS016'),
('PMS017'),
('PMS018'),
('PMS019'),
('PMS020');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nama_akun` varchar(30) NOT NULL,
  `kata_sandi` varchar(30) NOT NULL,
  `level` enum('Admin','Petugas','Pimpinan','Pelatih') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama`, `jk`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `foto`, `nama_akun`, `kata_sandi`, `level`) VALUES
(1, 'Admin', 'L', '2020-01-12', 'Bandung', 'ernestoandreyulian@gmail.com', '089999999999', 'pengguna-0502202070209-3.jpg', 'admin', 'admin', 'Admin'),
(12, 'Ernesto Andre Yulian Manurung', 'L', '2020-02-06', 'Pulau Temiang', 'ernestoandreyulian@gmail.com', '085266226498', ' pengguna-0702202041933-3.jpg', 'ernesto', 'ernesto', 'Pimpinan'),
(13, 'Baginda', '', '2020-02-05', 'Jakarta', 'baginda@gmail.com', '085266226487', ' pengguna-0702202042208-6.JPG', 'baginda', 'baginda', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengiriman`
--

CREATE TABLE `tb_pengiriman` (
  `id_pengiriman` varchar(25) NOT NULL,
  `id_dtl_pemesanan` varchar(25) NOT NULL,
  `id_alamat` varchar(13) NOT NULL,
  `kurir` varchar(15) NOT NULL,
  `resi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil_perusahaan`
--

CREATE TABLE `tb_profil_perusahaan` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `slogan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `detail` text NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil_perusahaan`
--

INSERT INTO `tb_profil_perusahaan` (`id_profil`, `nama`, `slogan`, `alamat`, `no_hp`, `email`, `detail`, `logo`) VALUES
(1, 'Golang', 'Motor Motoran', 'Jambi Sajo', '1222', 'ernestoandreyulian@gmail.com', 'Tidak Ada Detail', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sepatu`
--

CREATE TABLE `tb_sepatu` (
  `id_sepatu` int(10) NOT NULL,
  `barcode` varchar(9) NOT NULL,
  `nama_sepatu` varchar(100) NOT NULL,
  `gambar_1` varchar(50) DEFAULT NULL,
  `gambar_2` varchar(50) DEFAULT NULL,
  `gambar_3` varchar(50) DEFAULT NULL,
  `gambar_4` varchar(50) DEFAULT NULL,
  `gambar_5` varchar(50) DEFAULT NULL,
  `harga` int(15) NOT NULL,
  `status_sepatu` enum('tersedia','kosong') NOT NULL,
  `detail` text NOT NULL,
  `id_merek` int(4) NOT NULL,
  `id_jenis` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sepatu`
--

INSERT INTO `tb_sepatu` (`id_sepatu`, `barcode`, `nama_sepatu`, `gambar_1`, `gambar_2`, `gambar_3`, `gambar_4`, `gambar_5`, `harga`, `status_sepatu`, `detail`, `id_merek`, `id_jenis`) VALUES
(1, 'S001', 'Converse - All Stars J', 'sepatu-0702202093832-converse.png', 'sepatu-0702202093832-', 'sepatu-0702202093832-', 'sepatu-0702202093832-', 'sepatu-0702202093832-', 499000, 'tersedia', '', 11, 37),
(2, 'A002', 'Vans - Old School', 'sepatu-0702202094006-2.jpg', 'sepatu-0702202094006-', 'sepatu-0702202094006-', 'sepatu-0702202094006-', 'sepatu-0702202094006-', 99000, 'tersedia', 'Sepatu Vans Old School adalah sepatu yang mempunyai', 8, 37),
(3, 'S003', 'Puma - Sports Log', 'sepatu-0702202094056-pumas.png', 'sepatu-0702202094056-', 'sepatu-0702202094056-', 'sepatu-0702202094056-', 'sepatu-0702202094056-', 900000, 'tersedia', '', 12, 39);

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok`
--

CREATE TABLE `tb_stok` (
  `id_stok` int(11) NOT NULL,
  `id_sepatu` int(11) NOT NULL,
  `ukuran` varchar(3) NOT NULL,
  `jenis` enum('in','out') NOT NULL,
  `detail` varchar(200) NOT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `id_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stok`
--

INSERT INTO `tb_stok` (`id_stok`, `id_sepatu`, `ukuran`, `jenis`, `detail`, `id_supplier`, `jumlah`, `tanggal`, `dibuat`, `id_pengguna`) VALUES
(8, 7, '31', 'in', '-', 1, 200, '2020-02-06', '2020-02-06 06:54:41', 1),
(9, 8, '29', 'in', '-', 1, 10, '2020-02-06', '2020-02-06 06:55:46', 1),
(10, 7, '31', 'in', '-', 1, 40, '2020-02-06', '2020-02-06 07:26:09', 1),
(11, 7, '33', 'in', '-', 1, 34, '2020-02-06', '2020-02-06 07:26:40', 1),
(12, 7, '33', 'in', '-', 0, 89, '2020-02-06', '2020-02-06 07:27:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `hp` varchar(14) NOT NULL,
  `alamat` text NOT NULL,
  `detail` text DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `diubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama`, `hp`, `alamat`, `detail`, `dibuat`, `diubah`) VALUES
(5, 'Converse Indonesia', '0823878782738', 'Mangarai, No. 1, Blok A Prum Masurai Sengketa, Jakarta Barat ', 'Supplier Pertama', '2020-02-06 04:36:15', '0000-00-00 00:00:00'),
(8, 'Vans Indonesia', '08998399288', 'Jakarta Barat', '', '2020-02-07 09:10:47', '0000-00-00 00:00:00'),
(9, 'Kodachi Indonesia', '0800000000', 'Yogyakarta', '', '2020-02-07 09:11:22', '0000-00-00 00:00:00'),
(10, 'Puma International', '0210029930029', 'London, United Kingdom', '', '2020-02-07 09:12:14', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ukuran_sepatu`
--

CREATE TABLE `tb_ukuran_sepatu` (
  `id_ukuran` int(2) NOT NULL,
  `nama` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ukuran_sepatu`
--

INSERT INTO `tb_ukuran_sepatu` (`id_ukuran`, `nama`) VALUES
(8, '32'),
(9, '33'),
(10, '34'),
(11, '35'),
(12, '36'),
(13, '37'),
(14, '38'),
(15, '39'),
(16, '40'),
(17, '41'),
(18, '42'),
(19, '43'),
(22, '31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_detail_sepatu`
--
ALTER TABLE `db_detail_sepatu`
  ADD PRIMARY KEY (`id_dlt_sepatu`);

--
-- Indexes for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `tb_detail_pemesanan`
--
ALTER TABLE `tb_detail_pemesanan`
  ADD PRIMARY KEY (`id_dtl_pemesanan`);

--
-- Indexes for table `tb_jenis_sepatu`
--
ALTER TABLE `tb_jenis_sepatu`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_merek_sepatu`
--
ALTER TABLE `tb_merek_sepatu`
  ADD PRIMARY KEY (`id_merek`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD UNIQUE KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_pengiriman`
--
ALTER TABLE `tb_pengiriman`
  ADD PRIMARY KEY (`id_pengiriman`);

--
-- Indexes for table `tb_profil_perusahaan`
--
ALTER TABLE `tb_profil_perusahaan`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_sepatu`
--
ALTER TABLE `tb_sepatu`
  ADD PRIMARY KEY (`id_sepatu`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
  ADD PRIMARY KEY (`id_stok`),
  ADD KEY `item_id` (`id_sepatu`),
  ADD KEY `supplier_id` (`id_supplier`),
  ADD KEY `user_id` (`id_pengguna`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tb_ukuran_sepatu`
--
ALTER TABLE `tb_ukuran_sepatu`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_detail_sepatu`
--
ALTER TABLE `db_detail_sepatu`
  MODIFY `id_dlt_sepatu` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_alamat`
--
ALTER TABLE `tb_alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_pemesanan`
--
ALTER TABLE `tb_detail_pemesanan`
  MODIFY `id_dtl_pemesanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_jenis_sepatu`
--
ALTER TABLE `tb_jenis_sepatu`
  MODIFY `id_jenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(105) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_merek_sepatu`
--
ALTER TABLE `tb_merek_sepatu`
  MODIFY `id_merek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_profil_perusahaan`
--
ALTER TABLE `tb_profil_perusahaan`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_sepatu`
--
ALTER TABLE `tb_sepatu`
  MODIFY `id_sepatu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
  MODIFY `id_stok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_ukuran_sepatu`
--
ALTER TABLE `tb_ukuran_sepatu`
  MODIFY `id_ukuran` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
