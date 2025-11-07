-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Sep 2025 pada 13.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_sisfor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `CustomDetails`
--

CREATE TABLE `CustomDetails` (
  `CustomID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `JenisBahan` varchar(100) DEFAULT NULL,
  `Warna` varchar(50) DEFAULT NULL,
  `Ukuran` int(11) DEFAULT NULL,
  `Model` varchar(100) DEFAULT NULL,
  `CatatanTambahan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Customers`
--

CREATE TABLE `Customers` (
  `CustomerID` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `NoTelp` varchar(20) DEFAULT NULL,
  `Alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Materials`
--

CREATE TABLE `Materials` (
  `MaterialID` int(11) NOT NULL,
  `NamaBahan` varchar(100) NOT NULL,
  `Kategori` varchar(50) DEFAULT NULL,
  `StokBahan` int(11) NOT NULL,
  `MinimumStok` int(11) DEFAULT 10,
  `HargaSatuan` decimal(12,2) DEFAULT NULL,
  `JenisBahan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `OrderDetails`
--

CREATE TABLE `OrderDetails` (
  `OrderDetailID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `Jumlah` int(11) NOT NULL,
  `HargaSatuan` decimal(12,2) DEFAULT NULL,
  `Subtotal` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Orders`
--

CREATE TABLE `Orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Tanggal` date NOT NULL,
  `StatusOrder` varchar(50) DEFAULT 'Proses',
  `TotalHarga` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Products`
--

CREATE TABLE `Products` (
  `ProductID` int(11) NOT NULL,
  `NamaProduk` varchar(100) NOT NULL,
  `JenisProduk` varchar(50) DEFAULT NULL,
  `Model` varchar(50) NOT NULL,
  `Ukuran` int(11) NOT NULL,
  `Harga` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Produksi`
--

CREATE TABLE `Produksi` (
  `ProduksiID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `TanggalMulai` date NOT NULL,
  `TanggalSelesai` date DEFAULT NULL,
  `StatusProduksi` varchar(50) DEFAULT 'Dalam Proses',
  `Keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Transactions`
--

CREATE TABLE `Transactions` (
  `TransaksiID` int(11) NOT NULL,
  `OrderID` int(11) DEFAULT NULL,
  `JenisTransaksi` enum('Pemasukan','Pengeluaran') NOT NULL,
  `Jumlah` decimal(12,2) NOT NULL,
  `Tanggal` date NOT NULL,
  `Keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `NamaLengkap` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Role` enum('Owner','Admin','Produksi','Keuangan') NOT NULL,
  `TanggalDaftar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `CustomDetails`
--
ALTER TABLE `CustomDetails`
  ADD PRIMARY KEY (`CustomID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indeks untuk tabel `Customers`
--
ALTER TABLE `Customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indeks untuk tabel `Materials`
--
ALTER TABLE `Materials`
  ADD PRIMARY KEY (`MaterialID`);

--
-- Indeks untuk tabel `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD PRIMARY KEY (`OrderDetailID`),
  ADD KEY `OrderID` (`OrderID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indeks untuk tabel `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indeks untuk tabel `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductID`),
  ADD UNIQUE KEY `JenisProduk` (`JenisProduk`);

--
-- Indeks untuk tabel `Produksi`
--
ALTER TABLE `Produksi`
  ADD PRIMARY KEY (`ProduksiID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indeks untuk tabel `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`TransaksiID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indeks untuk tabel `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `CustomDetails`
--
ALTER TABLE `CustomDetails`
  MODIFY `CustomID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Customers`
--
ALTER TABLE `Customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Materials`
--
ALTER TABLE `Materials`
  MODIFY `MaterialID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `OrderDetails`
--
ALTER TABLE `OrderDetails`
  MODIFY `OrderDetailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Orders`
--
ALTER TABLE `Orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Products`
--
ALTER TABLE `Products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Produksi`
--
ALTER TABLE `Produksi`
  MODIFY `ProduksiID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `TransaksiID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `CustomDetails`
--
ALTER TABLE `CustomDetails`
  ADD CONSTRAINT `customdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Orders` (`OrderID`);

--
-- Ketidakleluasaan untuk tabel `OrderDetails`
--
ALTER TABLE `OrderDetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Orders` (`OrderID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `Products` (`ProductID`);

--
-- Ketidakleluasaan untuk tabel `Produksi`
--
ALTER TABLE `Produksi`
  ADD CONSTRAINT `produksi_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Orders` (`OrderID`);

--
-- Ketidakleluasaan untuk tabel `Transactions`
--
ALTER TABLE `Transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `Orders` (`OrderID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
