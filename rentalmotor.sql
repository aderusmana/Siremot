-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 10:42 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'ADE Ganteng', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(20) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nik`, `nama`, `username`, `alamat`, `gender`, `no_telp`, `password`, `foto`) VALUES
('CUS003', '3120321025120', 'SRI', 'sri', 'Boyolali', 'Perempuan', '0218978978', '81dc9bdb52d04dc20036dbd8313ed055', 'KTP1588914168.jpg'),
('CUS004', '321045654875', 'Jae', 'Jae', 'Tanjung Priok', 'Laki-laki', '08132654987', '81dc9bdb52d04dc20036dbd8313ed055', 'ktp11.jpg'),
('CUS005', '3126545987878', 'Sulis', 'sulis', 'Purwokerto', 'Laki-laki', '0812548714587', '81dc9bdb52d04dc20036dbd8313ed055', 'ktp2.jpg'),
('CUS12062020006', '3172054698787898', 'ade', 'ade', 'sunter', 'Laki-laki', '081905431118', '81dc9bdb52d04dc20036dbd8313ed055', 'KTP1591963613.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` varchar(20) NOT NULL,
  `kode_type` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `jas_hujan` int(11) NOT NULL,
  `bensin` int(11) NOT NULL,
  `helm` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `kode_type`, `merk`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `jas_hujan`, `bensin`, `helm`, `gambar`) VALUES
('MOT003', 'SPO', 'Yamaha R15', 'B 8899 CM', 'Merah', '2019', '0', 150000, 50000, 1, 1, 1, 'yzf-r15-supernova-white.png'),
('MOT004', 'SKT', 'Yamaha Aerox', 'B 8888 FF', 'Kuning', '2020', '0', 110000, 40000, 1, 1, 1, 'aerox2.png'),
('MOT005', 'SKT', 'Yamaha Nmax', 'B 9898 XX', 'Merah', '2019', '1', 100000, 30000, 1, 1, 1, 'nmax.png'),
('MOT006', 'SKT', 'Honda PCX', 'B 6575 MM', 'Putih', '2020', '0', 110000, 35000, 1, 1, 1, 'pcx1.png'),
('MOT007', 'SKT', 'Vario 125', 'B 1213', 'Biru', '2016', '1', 65000, 15000, 1, 1, 1, 'vario-125-titanium-black.jpg'),
('MOT008', 'SKT', 'New Fino', 'B 3153 AS', 'Putih', '2018', '1', 75000, 20000, 1, 1, 1, 'new-fino-125-blue-core-premium-white-cappuccino-putih.jpeg'),
('MOT009', 'BBK', 'Jupiter Mx 135cc', 'B 9080 NN', 'Putih', '2015', '1', 75000, 20000, 1, 1, 1, 'new-jupiter-mx-31.png'),
('MOT010', 'BBK', 'Honda Blade', 'B 3545 HH', 'Orange', '2014', '1', 75000, 20000, 1, 1, 1, 'blade-hd1.jpg'),
('MOT011', 'BBK', 'Supra X 125cc', 'B 6585 SS', 'Hitam', '2014', '1', 75000, 20000, 1, 1, 1, 'honda_supra_x.jpg'),
('MOT012', 'SPO', 'CBR 150R', 'B 9999 ZZ', 'Hitam', '2019', '1', 125000, 40000, 1, 1, 1, 'cbr150r-asteroid-black-metallic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` varchar(20) NOT NULL,
  `id_customer` varchar(20) NOT NULL,
  `id_motor` varchar(20) NOT NULL,
  `tanggal_rental` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `harga` varchar(100) NOT NULL,
  `denda` varchar(100) NOT NULL,
  `total_denda` varchar(100) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(20) NOT NULL,
  `status_rental` varchar(20) NOT NULL,
  `status_pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_motor`, `tanggal_rental`, `tanggal_kembali`, `harga`, `denda`, `total_denda`, `tanggal_pengembalian`, `status_pengembalian`, `status_rental`, `status_pembayaran`, `bukti_pembayaran`) VALUES
('REN12062020001', 'CUS003', 'MOT004', '2020-06-12', '2020-06-13', '110000', '40000', '0', '2020-06-13', 'Kembali', 'Selesai', 1, 'bukti_pembayaran11.jpg'),
('REN12062020002', 'CUS12062020006', 'MOT006', '2020-06-15', '2020-06-20', '110000', '35000', '35000', '2020-06-21', 'Kembali', 'Selesai', 1, 'bukti_pembayaran12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SKT', 'Skuter Matic'),
(2, 'SPO', 'Sport'),
(3, 'BBK', 'Bebek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
