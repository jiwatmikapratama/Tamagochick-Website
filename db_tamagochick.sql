-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Des 2021 pada 15.12
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tamagochick`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `pesanan` enum('Ayam Caru','Ayam Banten') NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `alamat`, `telpon`, `pesanan`, `jumlah`, `total`) VALUES
(24, 'Yuki', 'Br. Dauh Peken', '089772626265', 'Ayam Banten', 2, 0),
(26, 'Kadek Rizal Andiananta', 'Singaraja', '089772626265', 'Ayam Caru', 12, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$nxIxnlT6gLxodVnDeZetQOwx9p8DKof7H9QuoikosH123wR4OOAlG'),
(2, 'pratama', '$2y$10$WFjrqdv3YkCk6LpvFb0xhu.jbzp3tu4cvLLNF/IpeTdcx31OiD.xO'),
(3, 'angga', '$2y$10$vBK9Cal1FasssGsrXdl6TuDu57WRoYCn.MtGw5J2z/MvKj9fir/5S'),
(4, 'widana', '$2y$10$.AZPvQVpiTa4KS.tuyiNS.cJXV4dsYRCtD7OYfBnqfWczXB1U64V2'),
(5, 'santhi', '$2y$10$M8Sbqu6x1L37rMWZF14Hsew16gOVZFn5PGi/tulike4zYu/0jpb2y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
