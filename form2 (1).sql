-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2021 pada 16.22
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `id` int(11) NOT NULL,
  `nik` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmptlahir` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`id`, `nik`, `nama`, `tmptlahir`, `agama`, `password`) VALUES
(1, 12121212, 'Yuslih', 'Milan', 'Islam', ''),
(2, 2147483647, 'kevin', 'Malang', 'Kristen', ''),
(3, 123456789, 'Fahmi', 'Surabaya', 'Katolik', ''),
(4, 2147483647, 'rizal', 'Kediri', 'Islam', ''),
(5, 23123, 'tab', 'wqwd', '-', ''),
(6, 1212, 'dimas', 'Mojokerto', 'Islam', ''),
(7, 12312321, 'Wahyu', 'Blitar', 'Islam', '121123'),
(8, 123, 'Azis', 'klaten', 'Islam', '123'),
(9, 9012, 'Aman', 'Kuburan', 'Ateis', '202cb962ac59075b964b07152d234b70'),
(11, 18888, 'Ga Aman', 'Kuburan', 'Atheis', '202cb962ac59075b964b07152d234b70'),
(12, 131313, 'Muslih', 'Malang', 'Islam', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 12321312, 'wqeqweqw', 'Tuban', 'Islam', '202cb962ac59075b964b07152d234b70'),
(14, 2000, 'roziqin', 'Pasuruan', 'Islam', '202cb962ac59075b964b07152d234b70'),
(15, 809, 'Agil', 'Ngawi', 'Islam', '202cb962ac59075b964b07152d234b70'),
(16, 1211111, 'alan', 'Boyolali', 'Islam', '202cb962ac59075b964b07152d234b70'),
(17, 2147483647, 'zidan', 'Banyuwangi', 'Islam', '202cb962ac59075b964b07152d234b70'),
(18, 50808132, 'fadil', 'bogor', 'islam', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
