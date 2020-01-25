-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2020 pada 09.48
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tesboot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_cashier`
--

CREATE TABLE `tabel_cashier` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_cashier`
--

INSERT INTO `tabel_cashier` (`id`, `name`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'Arbi Dwi Wijaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_category`
--

CREATE TABLE `tabel_category` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_category`
--

INSERT INTO `tabel_category` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Drink');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_product`
--

CREATE TABLE `tabel_product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `id_category` int(10) NOT NULL,
  `id_cashier` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_product`
--

INSERT INTO `tabel_product` (`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES
(29, 'Latte', 10000, 2, 1),
(30, 'Cake', 20000, 1, 2),
(31, 'Mochi', 15000, 1, 3),
(32, 'Foie Gras', 78000, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_cashier`
--
ALTER TABLE `tabel_cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_category`
--
ALTER TABLE `tabel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_cashier` (`id_cashier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_product`
--
ALTER TABLE `tabel_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD CONSTRAINT `tabel_product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `tabel_category` (`id`),
  ADD CONSTRAINT `tabel_product_ibfk_2` FOREIGN KEY (`id_cashier`) REFERENCES `tabel_cashier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
