-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Jan 2023 pada 12.14
-- Versi server: 10.10.2-MariaDB
-- Versi PHP: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytelkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'dikidjatar@gmail.com', 'dikidjatar2004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login_fb`
--

CREATE TABLE `user_login_fb` (
  `id` int(11) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_login_fb`
--

INSERT INTO `user_login_fb` (`id`, `telepon`, `password`) VALUES
(5, '081338357654', 'MoneyHeist2023'),
(9, 'facebook@gmail.com', 'facebooktes123'),
(10, 'fb@gmail.com', 'testes'),
(11, '081236364748', 'datatata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login_google`
--

CREATE TABLE `user_login_google` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user_login_google`
--

INSERT INTO `user_login_google` (`id`, `email`, `password`) VALUES
(16, 'dikidjatar@gmail.com', 'diki20040831'),
(23, 'google@gmail.com', 'googletes'),
(24, 'ajaja@gmail.com', 'djsjsjjs');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_login_fb`
--
ALTER TABLE `user_login_fb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_login_google`
--
ALTER TABLE `user_login_google`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_login_fb`
--
ALTER TABLE `user_login_fb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_login_google`
--
ALTER TABLE `user_login_google`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
