-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 06:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`, `role_id`) VALUES
(17, 'NADIA ALMAIRA', 'nadia', 'JL. Merpati Putih III, Tangerang Kota', 'Perempuan', '087869667878', '367646461999006', '202cb962ac59075b964b07152d234b70', 2),
(18, 'ADMINISTRASI', 'admin', 'JL. Pamulang Permai No. 9A', 'Laki-laki', '02187890001', '367455670003', '202cb962ac59075b964b07152d234b70', 1),
(19, 'IVANA RAHMAWATI', 'ivana', 'JL. Pamulang Permai No. 9A', 'Perempuan', '081277665542', '366782901998003', '202cb962ac59075b964b07152d234b70', 2),
(21, 'ADI BANGKIT', 'adi', 'JL. Merdeka Raya', 'Laki-laki', '087899532299', '366574980005', '202cb962ac59075b964b07152d234b70', 2),
(22, 'HADI NURMANTYO', 'hadi', 'JL. Merdeka Raya No 19 A', 'Laki-laki', '12345678', '12345678', '202cb962ac59075b964b07152d234b70', 2),
(23, 'ARGI', 'argi', 'JL. Pamulang Permai No. 9A', 'Laki-laki', '980980980980', '7678687687687', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `opsi` varchar(20) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merk`, `opsi`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `gambar`) VALUES
(52, 'MIB', 'Toyota Calya', 'Lepas Kunci', 'B 6675 WRN', 'Putih', '2020', '1', 350000, 30000, '1_White6.png'),
(53, 'MIB', 'Honda Brio', 'Lepas Kunci', 'B 6272 AKN', 'Merah', '2018', '1', 350000, 30000, 'brio1.png'),
(54, 'MIB', 'Pajero Sport ', 'Dengan Sopir', 'B 6666 ADF', 'Hitam', '2019', '0', 850000, 0, 'pajero3.png'),
(56, 'MTR', 'Honda CBR-250', 'Lepas Kunci', 'B 6671 WIN', 'Hitam', '2021', '1', 200000, 25000, 'CBR1.png'),
(57, 'MED', 'Mitsubisi ELF', 'Dengan Sopir', 'B 4671 WGF', 'Silver', '2017', '1', 1300000, 0, 'elf51.png'),
(58, 'MED', 'Bus Pariwisata', 'Dengan Sopir', 'B 6617 WRZ', 'Putih', '2018', '0', 1600000, 0, 'med_bus31.jpeg'),
(59, 'MIB', 'Toyota Alphard ', 'Dengan Sopir', 'B 18 LMR', 'Hitam', '2017', '1', 1000000, 0, 'alpard1.jpeg'),
(60, 'MTR', 'Vespa LX', 'Lepas Kunci', 'B 6672 WIN', 'Putih', '2015', '1', 250000, 0, 'vespa21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `total_denda` int(120) NOT NULL,
  `lokasi_penjemputan` varchar(100) DEFAULT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_mobil`, `id_wisata`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `lokasi_penjemputan`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(62, 17, 52, 6, '2022-12-27', '2022-12-29', '350000', '30000', 30000, NULL, '2022-12-30', 'Kembali', 'Selesai', 'Screenshot_2018_11_22_20_41_14_33.jfif', 1),
(63, 23, 52, 9, '2022-12-28', '2022-12-29', '350000', '30000', 0, NULL, '2022-12-29', 'Kembali', 'Selesai', '11.png', 1),
(68, 17, 54, 6, '2023-01-09', '2023-01-14', '850000', '0', 0, 'JL. Pisangan Raya No. 7A', '2023-01-14', 'Kembali', 'Selesai', 'ABIEZY_IJAZAH_BELAKANG2.png', 0),
(70, 19, 58, 8, '2023-01-10', '2023-01-12', '1600000', '0', 0, 'JL. Tarumanegara III, Tangerang Selatan', '2023-01-12', 'Kembali', 'Selesai', 'Laporan_Omzet.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(20) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(21, 'SDN', 'Sedan'),
(22, 'MED', 'Medium Bus'),
(25, 'MIB', 'Mini Bus'),
(26, 'MTR', 'Motor'),
(27, 'MGE', 'Moge');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `buka` time DEFAULT NULL,
  `tutup` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama`, `harga`, `buka`, `tutup`) VALUES
(6, 'Prambanan Temple', 150000, '09:30:00', '17:30:00'),
(8, 'Borobudur Temple', 230000, '09:30:00', '16:30:00'),
(9, 'Pulau Pari', 85000, '07:00:00', '18:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
