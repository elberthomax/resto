-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2018 pada 04.25
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resto`
--
CREATE DATABASE IF NOT EXISTS `resto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `resto`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Makanan'),
(3, 'Minuman'),
(7, 'Dessert');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`, `image_url`, `category_id`) VALUES
(2, 'Jus Jeruk', 10000, 'https://doktersehat.com/wp-content/uploads/2018/09/jus-jeruk-696x457.jpg', 3),
(4, 'Nasi Goreng', 18000, 'http://www.dapurkobe.co.id/wp-content/uploads/nasi-goreng-kencur-kemangi.jpg', 1),
(5, 'Ayam Bakar', 15000, 'https://selerasa.com/wp-content/uploads/2015/12/images_daging_ayam-bakar-pedas-manis.jpg', 1),
(6, 'Indomie Soto', 5000, 'http://www.indomie.com/Content/Product/Category/indomie-kuah.jpg', 1),
(7, 'Jus Alpukat', 15000, 'https://cdn-images-1.medium.com/max/1600/1*XJATITm4NOSTATAlaXzIdA.png', 3),
(8, 'Es Krim Coklat', 5000, 'https://cdn-images-1.medium.com/max/800/1*WZBNCycaEQE2roSmLb5rGA.jpeg', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
