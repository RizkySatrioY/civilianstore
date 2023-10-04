-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 06:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_civil`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `status` enum('Lunas') NOT NULL,
  `no_wa` varchar(30) NOT NULL,
  `email` char(255) NOT NULL,
  `size` enum('S','M','L','XL','XXL','XXXL') NOT NULL,
  `status_terbaru` enum('Sudah✅','Belum❌') NOT NULL,
  `eventdt` date NOT NULL,
  `order_id` varchar(30) NOT NULL,
  `baju` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `angkatan`, `status`, `no_wa`, `email`, `size`, `status_terbaru`, `eventdt`, `order_id`, `baju`) VALUES
(94, 'Vikri Abdillah', '2018', 'Lunas', '08231676271', 'vikriabdillah87@gmail.com', 'M', 'Belum❌', '2023-06-07', '1089790825', '2'),
(95, 'Rizky Satrio Yudhopriyono', '2019', 'Lunas', '081358682809', 'rizkysatrioyp84@gmail.com', 'XL', 'Sudah✅', '2023-06-07', '1250534970', '1'),
(103, 'mitha novia', '2019', 'Lunas', '087775444300', 'mithanovia97@gmail.com', 'S', 'Sudah✅', '2023-06-12', '1218679903', '1'),
(107, 'coba', '2019', 'Lunas', '081358682809', 'coba@gmail.com', 'S', 'Belum❌', '2023-06-22', '1012427328', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comment_text` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(24, 'Posisi', 'Sedang Di Sablon', 1),
(25, 'POSISI', 'SEDANG DIJAHIT', 1),
(29, 'Di kirim', 'OTW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(6, 0, 'Bajunya bagus,kain nya dingin', 'Mitha', '2023-04-20 06:10:10'),
(7, 0, 'Mantep Polll', 'Diki Ardiansyah', '2023-04-20 06:11:16'),
(8, 0, 'Bagussss', 'Rafli', '2023-05-16 11:12:23'),
(10, 0, 'bajunya bagus bgttt', 'zalva', '2023-06-12 13:25:51'),
(12, 0, 'MANTAPPP', 'Dhiyah', '2023-06-17 02:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `product_nama` varchar(100) NOT NULL,
  `product_harga` int(11) NOT NULL,
  `product_deskripsi` text NOT NULL,
  `product_gambar` varchar(100) NOT NULL,
  `product_status` enum('Aktif✅','Tidak Aktif❌') NOT NULL,
  `date created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_nama`, `product_harga`, `product_deskripsi`, `product_gambar`, `product_status`, `date created`) VALUES
(70, 'T-1981', 100000, '<p>Halo Civilian ! 👋🏻<br />\r\n<br />\r\nKami kembali memproduksi T-SHIRT CIVILIAN edisi 2022, tentunya dengan design dan kualitas terbaik loh😍‼️<br />\r\n<br />\r\nSpesifikasi Kaos :<br />\r\n&bull; Ukuran Tersedia : S, M, L, XL, XXL (+5k), XXXL (+10k)</p>\r\n\r\n<p><a href=\"https://i.postimg.cc/RVzhLd9z/size.jpg\" target=\"_self\"><img alt=\"\" src=\"https://i.postimg.cc/RVzhLd9z/size.jpg\" style=\"height:72px; width:60px\" /></a></p>\r\n\r\n<p><br />\r\n&bull; Bahan : Cotton Combed 30s Hitam, Sablon Plastisol (Plascharge)</p>\r\n\r\n<h2><br />\r\n<strong>Periode Pemesanan : 14-27 November 2022</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n', 'kaos.jpg', '', '2023-06-14 06:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `transaksi_nama` varchar(30) NOT NULL,
  `transaksi_angkatan` int(20) NOT NULL,
  `no_wa` varchar(12) NOT NULL,
  `baju` varchar(30) NOT NULL,
  `transaksi_bank` enum('BCA','BNI','DANA') NOT NULL,
  `bukti_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `transaksi_nama`, `transaksi_angkatan`, `no_wa`, `baju`, `transaksi_bank`, `bukti_gambar`) VALUES
(23, 'Rizky Satrio Y', 2019, '081358682809', '1', 'BNI', 'bukurek.jpeg'),
(24, 'Mitha', 2019, '087775444300', '1', 'BCA', '1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username_user`, `email`, `password`) VALUES
(1, 'Rizky Satrio Y', 'rizkysatrioyp84@gmail.com', '0592bedeca3e3a05e7ee0539a203a906'),
(6, 'Mitha Novia', 'mithanovia@gmail.com', '20134569851f3dd50fc400a3df818c56'),
(10, '', 'civilianumm@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(12, 'Vikri Abdillah', 'vikriabdillah87@gmail.com', 'b7472fc99a3a8cdde7e63e0fe90cc07e'),
(13, 'Dhiyah Ayu Sintawati', 'dhiyah@gmail.com', '4c5bf1ac3e8bc238352dfcc938afb928'),
(14, 'coba', 'c@gmail.com', 'c3ec0f7b054e729c5a716c8125839829'),
(15, 'root', 'asd@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(16, 'mithaaa', 'mithanovia97@gmail.com', '266c6d35fd70bf44e279a103f4e14ded'),
(17, 'Zalva Nabilah', 'zalvanabillahd@gmail.com', 'a990750fd37788d2b07fd0003b087a0b'),
(18, 'root', 'vaniafebrianti06@gmail.com', 'daa79954d11cbcd25c91dda710bb7f94'),
(19, 'root', 'ccc@gmail.com', '101a6ec9f938885df0a44f20458d2eb4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `no_telp`, `email`, `password`) VALUES
(1, 'Civilian UMM', 321, 'civilianumm@gmail.com', 'e7ff555ebb09134c02cbe6447f4ae23d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
