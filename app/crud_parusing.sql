-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2024 pada 08.10
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_parusing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `no` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`no`, `nama`, `kelas`, `jurusan`, `nisn`, `jenis_kelamin`, `waktu`) VALUES
(18, 'abdul azis', '12', 'rpl', '22345', 'laki-laki', '2024-02-23 06:14:32'),
(19, 'adila maulia', '12', 'rpl', '22346', 'perempuan', '2024-02-23 06:14:45'),
(20, 'ahmad ikhsan', '12', 'rpl', '22342', 'laki-laki', '2024-02-23 06:14:56'),
(21, 'ahmad sidki', '12', 'rpl', '22348', 'laki-laki', '2024-02-23 06:17:04'),
(22, 'ai melisa', '12', 'rpl', '22349', 'perempuan', '2024-02-23 07:10:45'),
(23, 'ai siti asfi', '12', 'rpl', '22351', 'perempuan', '2024-02-23 06:17:47'),
(24, 'aldi ardian', '12', 'rpl', '22344', 'laki-laki', '2024-02-23 07:09:07'),
(25, 'alya ramadhani', '12', 'rpl', '22341', 'perempuan', '2024-02-23 06:23:13'),
(27, 'andre', '', 'rpl', '123455', 'laki-laki', '2024-02-28 03:44:04'),
(28, 'assifa zahra', '', 'rpl', '223455', 'perempuan', '2024-02-28 03:39:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `user`, `pass`) VALUES
(1, 'alya', 'sicantikalya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(10) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`no`, `nama`, `keterangan`, `waktu`) VALUES
(54, 'abdul azis', 'izin', '2024-02-21 04:02:25'),
(55, 'adila maulia', 'sakit', '2024-02-21 02:57:35'),
(56, 'ahmad ikhsan', 'hadir', '2024-02-21 02:57:42'),
(57, 'ahmad sidki', 'hadir', '2024-02-21 02:57:50'),
(58, 'ai melisa', 'hadir', '2024-02-21 02:57:59'),
(59, 'ai siti asfi', 'hadir', '2024-02-21 02:58:06'),
(68, 'aldi ardian', 'hadir', '2024-02-21 04:25:10'),
(76, 'abdul azis', 'hadir', '2024-02-22 06:52:38'),
(77, 'abdul azis', 'hadir', '2024-02-23 02:39:28'),
(78, 'adila maulia', 'sakit', '2024-02-23 02:39:33'),
(79, 'ahmad ikhsan', 'sakit', '2024-02-23 02:39:37'),
(80, 'alya ramadhani', 'hadir', '2024-02-23 02:39:57'),
(81, 'ai melisa', 'izin', '2024-02-23 02:41:59'),
(82, 'ai siti asfi', 'izin', '2024-02-23 02:57:41'),
(83, 'alya ramadhani', 'hadir', '2024-02-23 03:22:19'),
(84, 'aldi ardian', 'alpa', '2024-02-23 03:23:23'),
(85, 'ai siti asfi', 'alpa', '2024-02-23 03:24:39'),
(86, 'aceng', 'izin', '2024-02-23 03:25:11'),
(87, 'abdul azis', 'hadir', '2024-02-28 03:59:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
