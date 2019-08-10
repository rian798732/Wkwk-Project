-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2019 pada 12.16
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `uname` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(0, 'rian', '069c546d1d97fd9648d8142b3e0fd3a3'),
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `smartphone`
--

CREATE TABLE `smartphone` (
  `id` int(255) NOT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `brand` varchar(1000) NOT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `spek` text,
  `link` varchar(1000) NOT NULL,
  `ram` varchar(1000) NOT NULL,
  `internal` varchar(1000) NOT NULL,
  `label` varchar(1000) NOT NULL,
  `gambar` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `smartphone`
--

INSERT INTO `smartphone` (`id`, `merk`, `brand`, `harga`, `spek`, `link`, `ram`, `internal`, `label`, `gambar`, `file_name`, `file_size`, `file_type`, `tgl_upload`) VALUES
(13, 'Galaxy S10+', 'Samsung', '5900000', '', '', '4', '32', 'BARU', '', 'Realme_3.jpg', 36920, '', '2019-08-10'),
(14, 'J2 Prime', 'Samsung', '1200000', '-', '', '2', '16', 'BARU', '', 'Samsung_j2_prime.jpg', 7654, 'jpg', '2019-08-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` text NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uploads`
--

INSERT INTO `uploads` (`id`, `file_name`, `file_size`, `file_type`, `tgl_upload`) VALUES
(0, '54167', 0, '2019-08-10', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `smartphone`
--
ALTER TABLE `smartphone`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
