-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2023 pada 09.45
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakatfitrah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayarzakat`
--

CREATE TABLE `bayarzakat` (
  `id_zakat` int(17) NOT NULL,
  `nama_KK` varchar(100) NOT NULL,
  `jumlah_tanggungan` int(20) NOT NULL,
  `jenis_bayar` enum('beras','uang') NOT NULL,
  `jumlah_tanggunganyangdibayar` int(20) NOT NULL,
  `bayar_beras` float NOT NULL,
  `bayar_uang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bayarzakat`
--

INSERT INTO `bayarzakat` (`id_zakat`, `nama_KK`, `jumlah_tanggungan`, `jenis_bayar`, `jumlah_tanggunganyangdibayar`, `bayar_beras`, `bayar_uang`) VALUES
(17, 'Muliani', 3, 'beras', 3, 0, 90000),
(24, 'Muliani', 4, 'uang', 4, 0, 120000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_mustahik`
--

CREATE TABLE `kategori_mustahik` (
  `id_kategori` int(17) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `jumlah_hak` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_mustahik`
--

INSERT INTO `kategori_mustahik` (`id_kategori`, `nama_kategori`, `jumlah_hak`) VALUES
(5, 'Fakir', 4),
(6, 'mampu', 5),
(7, 'Miskin', 6),
(8, 'Mualaf', 7),
(9, 'Fisabilillah', 8),
(10, 'Ibnu Sabil', 3),
(11, 'Amil', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik_lainnya`
--

CREATE TABLE `mustahik_lainnya` (
  `id_mustahiklainnya` int(17) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('amil','fisabilillah','ibnusabil','mualaf') NOT NULL,
  `hak` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik_warga`
--

CREATE TABLE `mustahik_warga` (
  `id_mustahikwarga` int(17) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('fakir','miskin','mampu') NOT NULL,
  `hak` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mustahik_warga`
--

INSERT INTO `mustahik_warga` (`id_mustahikwarga`, `nama`, `kategori`, `hak`) VALUES
(9, 'Muliani', 'mampu', 3),
(10, 'Muliani', 'fakir', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `muzakki`
--

CREATE TABLE `muzakki` (
  `id_muzakki` int(8) NOT NULL,
  `nama_muzakki` varchar(45) NOT NULL,
  `jumlah_tanggungan` int(15) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `muzakki`
--

INSERT INTO `muzakki` (`id_muzakki`, `nama_muzakki`, `jumlah_tanggungan`, `keterangan`) VALUES
(6, 'Muliani', 4, 'Warga Sementara'),
(7, 'Bakti', 1, 'Warga Tetap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(17) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayarzakat`
--
ALTER TABLE `bayarzakat`
  ADD PRIMARY KEY (`id_zakat`);

--
-- Indeks untuk tabel `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  ADD PRIMARY KEY (`id_mustahiklainnya`);

--
-- Indeks untuk tabel `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  ADD PRIMARY KEY (`id_mustahikwarga`);

--
-- Indeks untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id_muzakki`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayarzakat`
--
ALTER TABLE `bayarzakat`
  MODIFY `id_zakat` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kategori_mustahik`
--
ALTER TABLE `kategori_mustahik`
  MODIFY `id_kategori` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mustahik_lainnya`
--
ALTER TABLE `mustahik_lainnya`
  MODIFY `id_mustahiklainnya` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mustahik_warga`
--
ALTER TABLE `mustahik_warga`
  MODIFY `id_mustahikwarga` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_muzakki` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
