-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jan 2023 pada 06.27
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
-- Database: `uas_wd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `name`, `price`, `image`) VALUES
(1, 'Tiramisu', 20000, 'produk6.jpg'),
(2, 'Blueberry Cheesecake', 25000, 'produk2.jpg'),
(3, 'Berry Waffle', 28000, 'produk18.jpg'),
(4, 'Chocolate Layers', 35000, 'produk7.jpg'),
(5, 'Red Velvet Cake', 35000, 'produk3.jpg'),
(6, 'Fruity Layers', 35000, 'produk5.jpg'),
(7, 'Choux Choco-Puff', 20000, 'produk19.jpg'),
(8, 'Cheesy Milkcake', 28000, 'produk9.jpg'),
(9, 'Strawberry Shortcake', 35000, 'produk16.jpg'),
(10, 'Choco Tiramisu', 32000, 'produk15.jpg'),
(11, 'Almond Croissant', 25000, 'produk20.jpg'),
(12, 'Oreo Sprinkled Cake', 30000, 'produk10.jpg'),
(13, 'Rainbow Macaroons', 35000, 'produk17.jpg'),
(14, 'Dark Chocoroll', 39000, 'produk13.jpg'),
(15, 'Matcha Cake', 32000, 'produk1.jpg'),
(16, 'Baked Oreo Cake', 30000, 'produk8.jpg'),
(17, 'Puffy Cheesecake', 28000, 'produk21.jpg'),
(18, 'Crispy Mocca Cookies', 20000, 'produk22.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bill`
--

CREATE TABLE `bill` (
  `bill_no` int(11) NOT NULL,
  `bill_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bill`
--

INSERT INTO `bill` (`bill_no`, `bill_date`, `email`) VALUES
(13, '2022-12-31 18:26:22', 'monicans'),
(14, '2023-01-01 01:05:32', 'monicans'),
(15, '2023-01-01 01:19:23', 'monicans'),
(16, '2023-01-01 03:02:59', 'monicans'),
(17, '2023-01-02 05:18:22', 'salwaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bill_detail`
--

CREATE TABLE `bill_detail` (
  `bill_no` int(11) NOT NULL,
  `itemid` int(11) NOT NULL,
  `itemqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bill_detail`
--

INSERT INTO `bill_detail` (`bill_no`, `itemid`, `itemqty`) VALUES
(1, 2, 0),
(2, 2, 0),
(3, 2, 1),
(3, 1, 2),
(4, 2, 1),
(5, 2, 1),
(5, 1, 1),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(8, 15, 1),
(9, 16, 1),
(11, 15, 1),
(12, 2, 1),
(12, 13, 1),
(12, 7, 1),
(12, 1, 1),
(13, 3, 1),
(13, 9, 1),
(13, 7, 1),
(14, 1, 1),
(14, 9, 2),
(15, 14, 1),
(16, 15, 1),
(17, 3, 1),
(17, 15, 2),
(17, 14, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `delivery` int(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `kecamatan` varchar(200) NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL,
  `metode_bayar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`name`, `email`, `mobile`, `delivery`, `address`, `kecamatan`, `provinsi`, `negara`, `notes`, `metode_bayar`) VALUES
('Monica Salwa Azzahra', '', '081221541696', 2022, 'Jl. Padasuka No. 68A,', 'Tawang', 'Jawa Barat', 'Indonesia', '', 'BNI'),
('Monica Salwa Azzahra', 'monicasalwaa@gmail.com', '081221541696', 2022, 'Jl. Padasuka ', 'Tawang', 'Jawa Barat', 'Indonesia', '', 'OVO'),
('Monica Salwa Azzahra', 'monicasalwaa@gmail.com', '081221541696', 2023, 'Tasikmalaya', 'Tawang', 'Jawa Barat', 'Indonesia', '', 'BNI'),
('Monica Salwa Azzahra', 'monicasalwaa@gmail.com', '081221541696', 2023, 'Tasikmalaya', 'Tawang', 'Jawa Barat', 'Indonesia', '', 'OVO'),
('Monica Salwa Azzahra', 'monicasalwaa@gmail.com', '081221541696', 2023, 'Tasikmalaya', 'Tawang', 'Jawa Barat', 'Indonesia', 'minta notecard nya ya, thanks!', 'Shopee'),
('Monica ', 'monica.salwa@upi.edu', '081221541696', 2023, 'Jl. Lengkong, Bandung', 'Bandung Wetan', 'Jawa Barat', 'Indonesia', 'Tolong diantar jam 10.00 pagi ya, thx <3', 'BCA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`name`, `email`, `comments`) VALUES
('Monica Salwa Azzahra', 'monicasalwaa@gmail.com', 'delicious!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_order`
--

CREATE TABLE `temp_order` (
  `email` varchar(30) NOT NULL,
  `itemid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `temp_order`
--

INSERT INTO `temp_order` (`email`, `itemid`, `qty`) VALUES
('mmmmm', 2, 0),
('mmmmm', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `mobile`, `address`) VALUES
(5, 'monicasalwaa@gmail.com', 'monicans', 'Monica Salwa Azzahra', '081221541696', 'Tasikmalaya'),
(6, 'monica.salwa@upi.edu', 'salwaaa', 'Monica ', '081221541696', 'Bandung');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
