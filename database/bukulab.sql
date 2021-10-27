-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Agu 2021 pada 15.13
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukulab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_masuk`
--

CREATE TABLE `buku_masuk` (
  `id` int(11) NOT NULL,
  `no_buku` varchar(35) NOT NULL,
  `versi` varchar(35) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `penerbit` varchar(35) NOT NULL,
  `pengarang` varchar(35) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `lokasi_rak` varchar(15) NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_masuk`
--

INSERT INTO `buku_masuk` (`id`, `no_buku`, `versi`, `judul`, `kategori`, `penerbit`, `pengarang`, `jumlah`, `tgl_masuk`, `lokasi_rak`, `keterangan`) VALUES
(1, 'STEL-E-001-2021', 'Revisi 2', 'Codeigniter', 'LAB ENERGI', 'Johan', 'Yani', 3, '2021-07-22', 'R/E/1-5', 'Tersimpan'),
(9, 'STEL-D-002-2020', 'Awal', 'Laravel', 'LAB DEVICE', 'Angga', 'Marina', 3, '2021-07-15', 'R/D/6-10', 'Tersimpan'),
(11, 'STEL-T-003-2022', 'Terbaru', 'The Sims', 'LAB TRANSMISI', 'Eko', 'Zahida', 3, '2021-08-01', 'R/T/16-20', 'Tersimpan'),
(12, 'STEL-E-002-2022', 'Terbaru', 'Esktra change', 'LAB ENERGI', 'Yerin', 'Zahida', 1, '2021-08-01', 'R/E/1-5', 'Tersimpan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode`
--

CREATE TABLE `kode` (
  `id` int(11) NOT NULL,
  `kategori_lab` varchar(50) NOT NULL,
  `nomor_buku` varchar(50) NOT NULL,
  `lokasi_rak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode`
--

INSERT INTO `kode` (`id`, `kategori_lab`, `nomor_buku`, `lokasi_rak`) VALUES
(1, 'LAB ENERGI', 'STEL-E-00', 'R/E/1-5'),
(2, 'LAB DEVICE', 'STEL-D-00', 'R/D/6-10'),
(3, 'LAB KABEL', 'STEL-K-00', 'R/K/11-15'),
(4, 'LAB TRANSMISI', 'STEL-T-00', 'R/T/16-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_pinjam` varchar(11) NOT NULL,
  `kode_lab` varchar(11) NOT NULL,
  `nama_lab` varchar(35) NOT NULL,
  `nama_peminjam` varchar(35) NOT NULL,
  `nomor_buku` varchar(20) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_pinjam`, `kode_lab`, `nama_lab`, `nama_peminjam`, `nomor_buku`, `penerbit`, `pengarang`, `judul`, `tgl_pinjam`, `jumlah`) VALUES
('TLKM-P-1', '01 E', 'LAB ENERGI', 'Fauzi', 'STEL-E-001-2021', 'Johan', 'Yani', 'Codeigniter', '2021-07-15', 1),
('TLKM-P-2', '01 D', 'LAB DEVICE', 'Ussy', 'STEL-D-002-2020', 'Angga', 'Marina', 'Laravel', '2021-07-22', 1),
('TLKM-P-3', '04 T', 'LAB TRANSMISI', 'Farid', 'STEL-T-003-2022', 'Eko', 'Zahida', 'The Sims', '2021-08-01', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `no_pinjam` varchar(11) NOT NULL,
  `kode_lab` varchar(15) NOT NULL,
  `nama_lab` varchar(35) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `nomor_buku` varchar(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `no_pinjam`, `kode_lab`, `nama_lab`, `nama_peminjam`, `tgl_pinjam`, `tgl_kembali`, `nomor_buku`, `judul`, `penerbit`, `pengarang`, `tahun`, `jumlah`) VALUES
(1, 'TLKM-P-1', '01 E', 'LAB ENERGI', 'Fauzi', '2021-07-15', '2021-07-20', 'STEL-E-001-2021', 'Codeigniter', 'Johan', 'Yani', 2021, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` int(2) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `is_active`) VALUES
(4408, 'Manager', '12345', 2, 1),
(6340, 'admin', '12345', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku_masuk`
--
ALTER TABLE `buku_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode`
--
ALTER TABLE `kode`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_pinjam`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku_masuk`
--
ALTER TABLE `buku_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kode`
--
ALTER TABLE `kode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
