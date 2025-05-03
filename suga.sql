-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2025 pada 04.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `judul_laporan` varchar(255) NOT NULL,
  `deskripsi_laporan` text NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email_laporan` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `disetujui` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `judul_laporan`, `deskripsi_laporan`, `nama_lengkap`, `email_laporan`, `no_telp`, `disetujui`) VALUES
(3, 'Tetangga aku berisik banget', 'Saya yang bertanda tangan di bawah ini, ingin melaporkan adanya gangguan ketenangan yang terus-menerus terjadi di lingkungan tempat tinggal saya. Gangguan ini berasal dari salah satu tetangga yang berdomisili di [sebutkan alamat atau patokan rumah tetangga jika diketahui].\r\n\r\nAdapun bentuk gangguan yang saya alami adalah sebagai berikut:\r\n\r\n    Tetangga sering menyalakan musik atau televisi dengan volume sangat tinggi, terutama pada malam hari antara pukul [jam] hingga [jam], yang sangat mengganggu waktu istirahat saya dan keluarga.\r\n\r\n    Terdapat kegiatan berkumpul yang berisik hampir setiap malam, disertai dengan teriakan, tawa keras, dan suara kendaraan yang keluar masuk secara tidak teratur.\r\n\r\n    Saya telah mencoba menegur secara baik-baik, namun gangguan tersebut tetap berlanjut.\r\n\r\nGangguan ini telah berlangsung selama [berapa lama] dan menimbulkan dampak negatif seperti kurangnya waktu istirahat, stres, dan penurunan kenyamanan tinggal di lingkungan ini. Saya berharap pihak yang berwenang dapat menindaklanjuti laporan ini sesuai dengan peraturan yang berlaku, demi menciptakan lingkungan yang tenteram dan nyaman untuk semua warga.\r\n\r\nTindakan yang Diharapkan:\r\nSaya memohon agar dilakukan teguran atau pendekatan kepada pihak yang bersangkutan agar mereka lebih menjaga ketenangan lingkungan, khususnya pada malam hari. Jika memungkinkan, saya juga bersedia memberikan keterangan lebih lanjut atau berdialog bersama pihak yang dimaksud untuk mencari solusi terbaik.\r\n\r\nDemikian laporan ini saya buat dengan sebenar-benarnya. Atas perhatian dan tindak lanjutnya, saya ucapkan terima kasih.', 'Arasya Rafi Putra', 'arasyarafi130@gmail.com', '088213292687', 0),
(4, 'ada pembacokan ', 'ada pembacokan di daerah jakarta selatan', 'iyemm', 'tukiyemmm35@gmail.com', '0828368623', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(101010, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
