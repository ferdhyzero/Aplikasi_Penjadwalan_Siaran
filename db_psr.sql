-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2023 pada 06.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'AHMAD FERDHY', 'ferdhy', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dj`
--

CREATE TABLE `dj` (
  `id_dj` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_udara` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dj`
--

INSERT INTO `dj` (`id_dj`, `nama_lengkap`, `nama_udara`, `alamat`) VALUES
(1, 'CORNELYA MAGDALENA MANSOARA, A.Md', 'NELLY', 'AROWI 2'),
(2, 'SELVIANA TERESIA LANGODAY', 'SELVIE', ' SWAPEN CENTRE'),
(3, 'YOKBETH ESTERLINA KUBIARI, SE', 'YOCKE', 'SOWI GUNUNG'),
(4, 'INYEL SUHADERTIA BOYMAU', 'ANGELL', 'AMBAN'),
(5, 'FREDICK ALEXANDER MANSOARA', 'ALEX', 'AROWI 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `id_jam` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`id_jam`, `jam_mulai`, `jam_selesai`) VALUES
(1, '04:55:00', '10:00:00'),
(2, '10:00:00', '15:00:00'),
(3, '15:00:00', '19:00:00'),
(4, '19:00:00', '00:00:00'),
(5, '08:31:00', '00:32:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_jadwal`
--

CREATE TABLE `keterangan_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_tanggal` int(22) NOT NULL,
  `id_jam` int(22) NOT NULL,
  `id_dj` int(22) NOT NULL,
  `keterangan` set('libur','masuk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keterangan_jadwal`
--

INSERT INTO `keterangan_jadwal` (`id_jadwal`, `id_tanggal`, `id_jam`, `id_dj`, `keterangan`) VALUES
(73, 26, 2, 4, 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `id_dj` int(11) NOT NULL,
  `id_tanggal` int(11) NOT NULL,
  `id_jam` int(11) NOT NULL,
  `keterangan` set('libur','masuk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_jadwal`, `id_dj`, `id_tanggal`, `id_jam`, `keterangan`) VALUES
(62, NULL, 3, 1, 1, 'masuk'),
(63, NULL, 4, 1, 1, 'masuk'),
(64, NULL, 5, 2, 2, 'masuk'),
(66, NULL, 5, 8, 3, 'masuk'),
(67, NULL, 5, 19, 3, 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggal`
--

CREATE TABLE `tanggal` (
  `id_tanggal` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tanggal`
--

INSERT INTO `tanggal` (`id_tanggal`, `tanggal`) VALUES
(1, '2023-07-10'),
(2, '2023-07-11'),
(3, '2023-07-12'),
(4, '2023-07-13'),
(5, '2023-07-14'),
(6, '2023-07-15'),
(7, '2023-07-16'),
(8, '2023-07-17'),
(9, '2023-07-18'),
(10, '2023-07-19'),
(11, '2023-07-20'),
(12, '2023-07-21'),
(13, '2023-07-22'),
(14, '2023-07-23'),
(15, '2023-07-24'),
(16, '2023-07-25'),
(17, '2023-07-26'),
(18, '2023-07-27'),
(19, '2023-07-28'),
(20, '2023-07-29'),
(21, '2023-07-30'),
(26, '2023-07-31'),
(27, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(2, 'User', 'kabid', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Emer', 'ferdhy', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dj`
--
ALTER TABLE `dj`
  ADD PRIMARY KEY (`id_dj`);

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indeks untuk tabel `keterangan_jadwal`
--
ALTER TABLE `keterangan_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `keterangan_jadwal_ibfk_1` (`id_tanggal`),
  ADD KEY `keterangan_jadwal_ibfk_2` (`id_jam`),
  ADD KEY `keterangan_jadwal_ibfk_3` (`id_dj`);

--
-- Indeks untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `konfirmasi_ibfk_1` (`id_jadwal`),
  ADD KEY `konfirmasi_ibfk_2` (`id_dj`),
  ADD KEY `konfirmasi_ibfk_3` (`id_tanggal`),
  ADD KEY `konfirmasi_ibfk_4` (`id_jam`);

--
-- Indeks untuk tabel `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`id_tanggal`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dj`
--
ALTER TABLE `dj`
  MODIFY `id_dj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `keterangan_jadwal`
--
ALTER TABLE `keterangan_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id_tanggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keterangan_jadwal`
--
ALTER TABLE `keterangan_jadwal`
  ADD CONSTRAINT `keterangan_jadwal_ibfk_1` FOREIGN KEY (`id_tanggal`) REFERENCES `tanggal` (`id_tanggal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keterangan_jadwal_ibfk_2` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keterangan_jadwal_ibfk_3` FOREIGN KEY (`id_dj`) REFERENCES `dj` (`id_dj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `konfirmasi_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `keterangan_jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirmasi_ibfk_2` FOREIGN KEY (`id_dj`) REFERENCES `dj` (`id_dj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirmasi_ibfk_3` FOREIGN KEY (`id_tanggal`) REFERENCES `tanggal` (`id_tanggal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirmasi_ibfk_4` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
