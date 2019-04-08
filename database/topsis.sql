-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Mei 2018 pada 06.01
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_topsis_ridho`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `talternatif`
--

CREATE TABLE `talternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(60) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `talternatif`
--

INSERT INTO `talternatif` (`id_alternatif`, `nama_alternatif`, `keterangan`) VALUES
(17, 'Belanti', 'Padang Utara'),
(18, 'Gunung Pangilun', 'Padang Utara'),
(19, 'Alang Laweh', 'Padang Selatan'),
(20, 'Teluk Bayur', 'Padang Selatan'),
(21, 'Ujung Gurun', 'Padang Barat'),
(22, 'Purus', 'Padang Barat'),
(23, 'Sawahan', 'Padang Timur'),
(24, 'Marapalam', 'Padang Timur'),
(25, 'Lapai', 'Nanggalo'),
(26, 'Surau Gadang', 'Nanggalo'),
(27, 'Anduring', 'Kuranji'),
(28, 'Pasar Ambacang', 'Kuranji'),
(29, 'Limau Manih', 'Pauh'),
(30, 'Kapalo Koto', 'Pauh'),
(31, 'Gurun Laweh', 'Lubuk Begalung'),
(32, 'Parak Laweh', 'Lubuk Begalung'),
(33, 'Indarung', 'Lubuk Kilangan'),
(34, 'Bandar Buat', 'Lubuk Kilangan'),
(35, 'Bungus Barat', 'Bungus'),
(36, 'Teluk Kabung Utara', 'Bungus'),
(37, 'Aia Pacah', 'Koto Tangah'),
(38, 'Balai Gadang', 'Koto Tangah'),
(40, 'Khatib Sulaiman', 'Padang Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `talternatif_kriteria`
--

CREATE TABLE `talternatif_kriteria` (
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `talternatif_kriteria`
--

INSERT INTO `talternatif_kriteria` (`id_alternatif`, `id_kriteria`, `nilai`) VALUES
(17, 21, 555),
(17, 22, 400000),
(17, 23, 1400000),
(17, 27, 2),
(18, 21, 788),
(18, 22, 320000),
(18, 23, 2000000),
(18, 27, 1),
(19, 21, 600),
(19, 22, 300000),
(19, 23, 1800000),
(19, 27, 2),
(20, 21, 500),
(20, 22, 100000),
(20, 23, 2000000),
(20, 27, 1),
(21, 21, 400),
(21, 22, 400000),
(21, 23, 2000000),
(21, 27, 1),
(22, 21, 700),
(22, 22, 390000),
(22, 23, 1200000),
(22, 27, 1),
(23, 21, 600),
(23, 22, 400000),
(23, 23, 2000000),
(23, 27, 2),
(24, 21, 800),
(24, 22, 390000),
(24, 23, 1800000),
(24, 27, 1),
(25, 21, 690),
(25, 22, 200000),
(25, 23, 1500000),
(25, 27, 1),
(26, 21, 800),
(26, 22, 300000),
(26, 23, 1900000),
(26, 27, 2),
(27, 21, 890),
(27, 22, 350000),
(27, 23, 2200000),
(27, 27, 2),
(28, 21, 888),
(28, 22, 400000),
(28, 23, 2000000),
(28, 27, 2),
(29, 21, 800),
(29, 22, 400000),
(29, 23, 2100000),
(29, 27, 1),
(30, 21, 890),
(30, 22, 400000),
(30, 23, 2000000),
(30, 27, 3),
(31, 21, 888),
(31, 22, 200000),
(31, 23, 2000000),
(31, 27, 2),
(32, 21, 860),
(32, 22, 290000),
(32, 23, 2100000),
(32, 27, 2),
(33, 21, 900),
(33, 22, 330000),
(33, 23, 1900000),
(33, 27, 1),
(34, 21, 888),
(34, 22, 380000),
(34, 23, 1600000),
(34, 27, 2),
(35, 21, 655),
(35, 22, 200000),
(35, 23, 2100000),
(35, 27, 1),
(36, 21, 550),
(36, 22, 400000),
(36, 23, 2200000),
(36, 27, 2),
(37, 21, 700),
(37, 22, 400000),
(37, 23, 2000000),
(37, 27, 1),
(38, 21, 999),
(38, 22, 330000),
(38, 23, 1700000),
(38, 27, 2),
(40, 21, 1000),
(40, 22, 100000),
(40, 23, 500000),
(40, 27, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tkriteria`
--

CREATE TABLE `tkriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(60) NOT NULL,
  `kepentingan` double NOT NULL,
  `costbenefit` varchar(10) NOT NULL,
  `rentangnilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tkriteria`
--

INSERT INTO `tkriteria` (`id_kriteria`, `nama_kriteria`, `kepentingan`, `costbenefit`, `rentangnilai`) VALUES
(21, 'Luas Tanah (m2)', 3, 'Benefit', 0),
(22, 'Harga Tanah (Rp/m2)', 3, 'Cost', 0),
(23, 'Biaya akomodasi dari pusat ke tempat retail (Rp)', 2, 'Cost', 0),
(27, 'Akses Menuju Angkutan Publik ', 1, 'Benefit', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `talternatif`
--
ALTER TABLE `talternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `talternatif_kriteria`
--
ALTER TABLE `talternatif_kriteria`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `tkriteria`
--
ALTER TABLE `tkriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `talternatif`
--
ALTER TABLE `talternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tkriteria`
--
ALTER TABLE `tkriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `talternatif_kriteria`
--
ALTER TABLE `talternatif_kriteria`
  ADD CONSTRAINT `talternatif_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tkriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `talternatif_kriteria_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `talternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
