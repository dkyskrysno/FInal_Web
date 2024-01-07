-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2024 pada 18.14
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jurusan`, `fakultas`, `alamat`, `foto`) VALUES
(26, 'Dikcy sukkrysno', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f53637265656e73686f7420323032332d31322d3131203039313133332e706e67),
(27, 'yuna', '60900121052', 'Teknik informatika', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f53637265656e73686f7420323032332d31322d3133203039313633322e706e67),
(28, 'Firman Reski', '60900121062', 'Sistem Informasi', 'Sains dan Teknologi', 'syekh yusuf', 0x67616d6261722f4669726d616e5f312e706e67),
(29, 'yuna', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f6238303865613764656466202831292e706e67),
(30, 'Dikcy sukkrysno', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f73616d70756c312e6a7067),
(31, 'kyn', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f53637265656e73686f7420323032332d31322d3235203134313731342e706e67),
(32, 'Dikcy sukkrysno', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f53637265656e73686f7420323032332d31322d3138203134313731362e706e67),
(33, 'Dikcy sukkrysno', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f53637265656e73686f7420323032332d31322d3131203039313133332e706e67),
(35, 'dkyn', '60900121052', 'Sistem Informasi', 'Sains dan Teknologi', 'Perumahan bumi zarindah blok c8', 0x67616d6261722f6c6f67732e706e67);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `clave`) VALUES
(1, 'cristiancedano1030@gmail.com', 'cristian', '$2y$10$2zxLD5hKzIxJVry5N1bKquZJqMzQnShj/jdVGkP5Fmu5QI1jJapg.'),
(2, 'cristian', 'cristiancedano1030@gmail.com', '$2y$10$V.P9IiAXneiEdV1XDJGqa.VzdK0GYksBFsLsrm3EA3G4xkgQUzIkO'),
(3, 'JUAN', 'juan@gmail.com', '$2y$10$XXqX4oe8YHIhy.WN3EU6FeqratJdbF45UuKaitXDuUkvnGLSESJPa'),
(4, 'dkyskrysno', 'sukkrysnod@gmail.com', '$2y$10$hNmvZXvbCdvzanqVOf2Q8.kK4/JElfzaYKaWm9pJc/YrO62SWEZxu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
