-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2024 pada 04.06
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
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id` int(11) NOT NULL,
  `kd_skema` varchar(10) DEFAULT NULL,
  `nm_peserta` varchar(50) DEFAULT NULL,
  `jekel` varchar(10) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_peserta`
--

INSERT INTO `tb_peserta` (`id`, `kd_skema`, `nm_peserta`, `jekel`, `alamat`, `no_hp`) VALUES
(13, 'SKM-001', 'van', 'Laki-laki', 'JL.Kopo', '08997'),
(14, 'SKM-003', 'giri', 'Laki-laki', 'situsaeur', '0895352308300');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skema`
--

CREATE TABLE `tb_skema` (
  `kd_skema` varchar(10) NOT NULL,
  `nm_skema` varchar(50) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `jml_unit` int(11) DEFAULT NULL,
  `thn_lulus` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_skema`
--

INSERT INTO `tb_skema` (`kd_skema`, `nm_skema`, `jenis`, `jml_unit`, `thn_lulus`) VALUES
('SKM-001', 'Junior Web Developer', 'KKNI', 6, 2021),
('SKM-002', 'Digital Marketing', 'KKNI', 10, 2022),
('SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10, 2023),
('SKM-004', 'analisis online', 'KKNI', 22, 2024);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_skema` (`kd_skema`);

--
-- Indeks untuk tabel `tb_skema`
--
ALTER TABLE `tb_skema`
  ADD PRIMARY KEY (`kd_skema`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD CONSTRAINT `tb_peserta_ibfk_1` FOREIGN KEY (`kd_skema`) REFERENCES `tb_skema` (`kd_skema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
