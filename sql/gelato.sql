-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 00.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gelato`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('suwarto', '54321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventori`
--

CREATE TABLE `inventori` (
  `kode` varchar(10) NOT NULL,
  `nama_produk` text NOT NULL,
  `harga_produk` int(25) NOT NULL,
  `tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventori`
--

INSERT INTO `inventori` (`kode`, `nama_produk`, `harga_produk`, `tglinput`) VALUES
('01', 'susu', 5000, '2021-07-01'),
('02', 'kue', 5000, '2021-07-01'),
('03', 'Vanila Ice', 10000, '2021-07-02'),
('04', 'Choco Latto Special', 15000, '2021-07-04'),
('05', 'Air Minereal', 4000, '2021-07-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(10) NOT NULL,
  `nama_pegawai` varchar(25) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `gaji_pegawai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekap`
--

CREATE TABLE `rekap` (
  `nama_pro` varchar(20) NOT NULL,
  `harga` int(16) NOT NULL,
  `qty` int(3) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekap`
--

INSERT INTO `rekap` (`nama_pro`, `harga`, `qty`, `tanggal_transaksi`) VALUES
('Black Forest', 12000, 3, '2021-07-06'),
('Black Mamba', 13000, 2, '2021-06-09'),
('Brownies', 15000, 1, '2021-06-02'),
('Red Ngepet', 12000, 3, '2021-07-14'),
('Black Mamba', 13000, 1, '2020-10-14'),
('Brownies', 15000, 1, '2020-07-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `total`
--

CREATE TABLE `total` (
  `nama_pro` varchar(20) NOT NULL,
  `harga` int(16) NOT NULL,
  `qty` int(3) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `total`
--

INSERT INTO `total` (`nama_pro`, `harga`, `qty`, `tanggal_transaksi`) VALUES
('susu', 5000, 3, '2021-07-01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `inventori`
--
ALTER TABLE `inventori`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`nama_pro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
