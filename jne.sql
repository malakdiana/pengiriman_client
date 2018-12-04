-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 10:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jne`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `password`) VALUES
(1, 'malak', '123');

-- --------------------------------------------------------

--
-- Table structure for table `adminpusat`
--

CREATE TABLE `adminpusat` (
  `idPusat` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `alamatPengirim` varchar(50) NOT NULL,
  `teleponPengirim` varchar(50) NOT NULL,
  `jenisBarang` varchar(50) NOT NULL,
  `berat` int(11) NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `idJenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `idCabang` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`idCabang`, `username`, `password`, `kota`, `telepon`) VALUES
(1, 'surabaya', '123', 'Surabaya', '085678876567'),
(2, 'malang', '123', 'Malang', '081222676456');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `idJenis` int(11) NOT NULL,
  `keterangan` enum('Luar Cabang','Dalam Cabang') NOT NULL,
  `jenis` enum('REG','OKE','YES','') NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`idJenis`, `keterangan`, `jenis`, `harga`) VALUES
(1, 'Dalam Cabang', 'REG', 6000),
(2, 'Luar Cabang', 'REG', 8000),
(3, 'Dalam Cabang', 'OKE', 7000),
(4, 'Luar Cabang', 'OKE', 9000),
(5, 'Dalam Cabang', 'YES', 9000),
(6, 'Luar Cabang', 'YES', 11000);

-- --------------------------------------------------------

--
-- Table structure for table `kirim`
--

CREATE TABLE `kirim` (
  `idPengiriman` int(11) NOT NULL,
  `noResi` varchar(30) NOT NULL,
  `asal` int(11) NOT NULL,
  `tujuan` int(11) NOT NULL,
  `idKurir` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Delivered','On Process') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kirim`
--

INSERT INTO `kirim` (`idPengiriman`, `noResi`, `asal`, `tujuan`, `idKurir`, `tanggal`, `status`) VALUES
(14, '14560001', 1, 2, 1, '2018-12-04', 'Delivered'),
(15, '14560001', 2, 2, 2, '2018-12-04', 'Delivered'),
(16, '14560002', 1, 1, 1, '2018-12-04', 'On Process');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `idKurir` int(11) NOT NULL,
  `idCabang` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `jenisKelamin` enum('L','P') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`idKurir`, `idCabang`, `nama`, `nik`, `jenisKelamin`, `alamat`, `telepon`) VALUES
(1, 1, 'DESI HANDAYANI', '3456738488477388', 'P', 'Jl. Semarang', '0876442663553'),
(2, 2, 'ARMAN', '3456738488477399', 'L', 'MALANG', '0876442663554');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `noResi` varchar(11) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `alamatPengirim` varchar(30) NOT NULL,
  `teleponPengirim` varchar(30) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `alamatPenerima` varchar(30) NOT NULL,
  `teleponPenerima` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `jenisBarang` varchar(30) NOT NULL,
  `berat` int(11) NOT NULL,
  `idCabang` int(11) NOT NULL,
  `idJenis` int(30) NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `namaPenerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`noResi`, `pengirim`, `alamatPengirim`, `teleponPengirim`, `penerima`, `alamatPenerima`, `teleponPenerima`, `tanggal`, `jenisBarang`, `berat`, `idCabang`, `idJenis`, `totalHarga`, `status`, `namaPenerima`) VALUES
('14560001', 'Maya', 'jl. sepatu', '0865467776', 'Andi', 'jl bunga', '0876789888', '2018-12-04', 'kosmetik', 2, 1, 4, 18000, 'Delivered', 'susi'),
('14560002', 'Maya', 'jl. sepatu', '0865467776', 'Jihan', 'jl bunga', '0876789888', '2018-12-04', 'kosmetik', 2, 1, 1, 12000, 'On Process', '-');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `noResi` varchar(30) NOT NULL,
  `status` enum('Delivered','On Process') NOT NULL,
  `penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `adminpusat`
--
ALTER TABLE `adminpusat`
  ADD PRIMARY KEY (`idPusat`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`idCabang`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`idJenis`);

--
-- Indexes for table `kirim`
--
ALTER TABLE `kirim`
  ADD PRIMARY KEY (`idPengiriman`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`idKurir`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`noResi`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `adminpusat`
--
ALTER TABLE `adminpusat`
  MODIFY `idPusat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `idCabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `idJenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kirim`
--
ALTER TABLE `kirim`
  MODIFY `idPengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `idKurir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
