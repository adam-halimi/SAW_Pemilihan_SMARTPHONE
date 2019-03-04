-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2018 pada 11.12
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifhp`
--

CREATE TABLE `alternatifhp` (
  `idhp` int(11) NOT NULL,
  `merk_hp` varchar(50) NOT NULL,
  `thn_hp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatifhp`
--

INSERT INTO `alternatifhp` (`idhp`, `merk_hp`, `thn_hp`) VALUES
(1, 'Galaxy Core 2', '2013'),
(2, 'Galaxy V', '2017'),
(3, 'Galaxy S6', '2017'),
(4, 'Lumia 620', '2017'),
(5, 'Lumia 535', '2017'),
(6, 'Lumia 930', '2017'),
(7, 'Zenfone 5', '2017'),
(8, 'Oppo R7', '2017'),
(9, 'Oppo R5', '2017');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `attribut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `attribut`) VALUES
(1, 'Harga', 'Cost'),
(2, 'RAM', 'Benefit'),
(3, 'Memori Internal', 'Benefit'),
(4, 'Camera', 'Benefit'),
(5, 'Resolusi Layar', 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `normal`
--

CREATE TABLE `normal` (
  `id_normal` int(11) NOT NULL,
  `idhp` int(11) NOT NULL,
  `harga` double NOT NULL,
  `ram` double NOT NULL,
  `memory` double NOT NULL,
  `camera` double NOT NULL,
  `layar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `normal`
--

INSERT INTO `normal` (`id_normal`, `idhp`, `harga`, `ram`, `memory`, `camera`, `layar`) VALUES
(11, 1, 25, 25, 50, 25, 50),
(12, 2, 25, 25, 50, 25, 25),
(13, 3, 75, 75, 100, 100, 75),
(14, 4, 25, 25, 50, 50, 25),
(15, 5, 25, 25, 50, 50, 75),
(16, 6, 50, 50, 75, 100, 75),
(17, 7, 25, 50, 75, 75, 50),
(18, 8, 50, 75, 75, 100, 75),
(19, 9, 50, 50, 75, 100, 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_sub` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_sub` varchar(100) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id_sub`, `id_kriteria`, `nama_sub`, `nilai`, `keterangan`) VALUES
(1, 1, '> Rp 10.000.000', '100', 'Kurang'),
(4, 1, 'Rp 7.000.000 - Rp 10.000.000', '75', 'Cukup'),
(5, 1, 'Rp 3.000.000 - Rp 7.000.000', '50', 'Baik'),
(6, 1, 'Rp 1.000.000 - Rp 3.000.000', '25', 'Sangat Baik'),
(7, 2, '1 Gb - 2 Gb', '25', 'Kurang'),
(8, 2, '2 Gb - 3 Gb', '50', 'Cukup'),
(9, 2, '3 Gb - 4 Gb', '75', 'Baik'),
(10, 2, '4 Gb - 8 Gb', '100', 'Sangat Baik'),
(11, 3, '2 Gb - 3 Gb', '25', 'Kurang'),
(12, 3, '3 Gb - 16 Gb', '50', 'Cukup'),
(13, 3, '16 Gb - 32 Gb', '75', 'Baik'),
(15, 3, '32 Gb - 64 Gb', '100', 'Sangat Baik'),
(16, 4, '2 Mp - 5 Mp', '25', 'Kurang'),
(17, 4, '5 Mp - 7 Mp', '50', 'Cukup'),
(18, 4, '7 Mp - 12 Mp', '75', 'Baik'),
(19, 4, '12 Mp - 20 Mp', '100', 'Sangat Baik'),
(20, 6, '3 Inchi - 4 Inchi', '25', 'Kurang'),
(21, 6, '4 Inchi - 5 Inch', '50', 'Cukup'),
(22, 6, '5 Inchi - 6 Inchi', '75', 'Baik'),
(23, 6, '6 Inchi - 7 Inchi', '100', 'Sangat Baik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifhp`
--
ALTER TABLE `alternatifhp`
  ADD PRIMARY KEY (`idhp`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `normal`
--
ALTER TABLE `normal`
  ADD PRIMARY KEY (`id_normal`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_sub`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `normal`
--
ALTER TABLE `normal`
  MODIFY `id_normal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
