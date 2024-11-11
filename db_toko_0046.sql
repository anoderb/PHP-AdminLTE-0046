-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 01:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_0046`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`) VALUES
('B001', 'Buku Tulis', 5000, 100),
('B002', 'Pulpen', 3000, 200),
('B003', 'Penghapus', 1500, 150),
('B004', 'Pensil', 2500, 180),
('B005', 'Spidol', 6000, 120),
('B006', 'Penggaris', 4000, 90),
('B007', 'Map Plastik', 2000, 80),
('B008', 'Binder', 12000, 60),
('B009', 'Amplop', 500, 300),
('B010', 'Stapler', 8000, 50),
('B011', 'Kertas A4', 25000, 70),
('B012', 'Lakban', 5000, 110),
('B013', 'Klip Kertas', 1000, 250),
('B014', 'Correction Tape', 7000, 130),
('B015', 'Notebook', 15000, 40),
('B016', 'Bolpoin Gel', 5000, 140);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`) VALUES
('P001', 'Budi Santoso', 'Jl. Merpati No.12, Jakarta'),
('P002', 'Siti Aminah', 'Jl. Mangga No.23, Bandung'),
('P003', 'Ahmad Fauzi', 'Jl. Kenanga No.5, Surabaya'),
('P004', 'Rina Kurniawati', 'Jl. Melati No.10, Medan'),
('P005', 'Andi Pratama', 'Jl. Mawar No.8, Yogyakarta'),
('P006', 'Sri Rahayu', 'Jl. Dahlia No.17, Semarang'),
('P007', 'Hendri Saputra', 'Jl. Anggrek No.2, Palembang'),
('P008', 'Fitri Nuraini', 'Jl. Cemara No.14, Bogor'),
('P009', 'Aditya Firmansyah', 'Jl. Flamboyan No.6, Makassar'),
('P010', 'Rika Damayanti', 'Jl. Tulip No.20, Malang'),
('P011', 'Dedi Setiawan', 'Jl. Bougenville No.3, Padang'),
('P012', 'Lilis Sukmawati', 'Jl. Teratai No.11, Denpasar'),
('P013', 'Rudi Wijaya', 'Jl. Kamboja No.4, Balikpapan'),
('P014', 'Nanda Wijayanti', 'Jl. Soka No.15, Bandar Lampung'),
('P015', 'Yuni Lestari', 'Jl. Dahlia No.19, Pontianak'),
('P016', 'Farid Maulana', 'Jl. Jati No.21, Manado');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` varchar(10) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga_total` decimal(15,2) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `jumlah`, `harga_total`, `tanggal`) VALUES
(2, 'B001', 2, 10000.00, '2024-09-30 17:00:00'),
(3, 'B003', 5, 7500.00, '2024-10-01 17:00:00'),
(4, 'B005', 1, 6000.00, '2024-10-02 17:00:00'),
(5, 'B002', 3, 9000.00, '2024-10-03 17:00:00'),
(6, 'B010', 2, 16000.00, '2024-10-04 17:00:00'),
(7, 'B012', 4, 20000.00, '2024-10-05 17:00:00'),
(8, 'B007', 2, 4000.00, '2024-10-06 17:00:00'),
(9, 'B015', 1, 15000.00, '2024-10-07 17:00:00'),
(10, 'B004', 3, 7500.00, '2024-10-08 17:00:00'),
(11, 'B013', 10, 10000.00, '2024-10-09 17:00:00'),
(12, 'B008', 1, 12000.00, '2024-10-10 17:00:00'),
(13, 'B011', 2, 50000.00, '2024-10-11 17:00:00'),
(14, 'B006', 3, 12000.00, '2024-10-12 17:00:00'),
(15, 'B009', 20, 10000.00, '2024-10-13 17:00:00'),
(16, 'B016', 5, 25000.00, '2024-10-14 17:00:00'),
(17, 'B014', 2, 14000.00, '2024-10-15 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
