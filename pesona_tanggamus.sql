-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2020 at 05:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesona_tanggamus`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `jenis_wisata` varchar(256) NOT NULL,
  `alamat` varchar(126) NOT NULL,
  `tiket` varchar(126) NOT NULL,
  `harga_tiket` varchar(126) NOT NULL,
  `fasilitas` varchar(256) NOT NULL,
  `idr_fasilitas` varchar(126) NOT NULL,
  `wahana` varchar(256) NOT NULL,
  `hari_operasional` varchar(126) NOT NULL,
  `jam_operasional` varchar(126) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `photo` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `jenis_wisata`, `alamat`, `tiket`, `harga_tiket`, `fasilitas`, `idr_fasilitas`, `wahana`, `hari_operasional`, `jam_operasional`, `deskripsi`, `longitude`, `latitude`, `photo`) VALUES
(384, 'Gunung Tanggamus', 'Gunung', 'Kabupaten Tanggamus', 'Umum', '10000', '[\"Camp\"]', '[\"-\"]', 'Spot Foto', '[\"Senin-Minggu\"]', '[\"00.00-23.59\"]', 'Gunung Tanggamus adalah sebuah gunung yang terletak di Kecamatan Kota Agung Kabupaten Tanggamus Provinsi Lampung. Berada di sebelah timur laut dari kota Kota Agung dengan jarak sekitar 10 km. Gunung Tanggamus merupakan gunung tertinggi kedua di Provinsi Lampung setelah Gunung Pesagi. Gunug Tanggamus berada di ketinggian 2.100 MDPL dan merupakan destinasi wisata yang memiliki panorama yang sangat menarik bagi para wisatawan ataupun pendaki. 												', '-5.421198425722598', '104.67393182905276', 'Gunung-tanggamus.jpg'),
(385, 'Way Lalaan', 'Air Terjun', 'Kampung Baru, Kota Agung Timur, Kp. Baru, Kota Agung Tim., Kabupaten Tanggamus, Lampung 35384', 'Umum', '10000', '[\"Toilet, Kantin, Mushola, Parkir\"]', '[\"-\"]', 'Spot Foto, Pemandangan Indah', '[\"Senin-Minggu\"]', '[\"09.00-18.00\"]', 'Air terjun Way Lalaan terletak di kaki gunung Tanggamus dan merupakan air terjun bertingkat dengan jarak tempuh sekitar 200 m. Air terjun ini dikenal sejak tahun 1937 yaitu pada zaman pemerintahan Belanda. Berada di pekon Kampung Baru, Kecamatan Kota Agung, Kabupaten Tanggamus, Lampung. Air terjun ini dikelola oleh Dinas Kebudayaan Pariwisata Pemuda dan Olahrata Kabupaten Tanggamus dan juga Kelompok Sadar Wisata (Pokdarwis) yang memiliki anggota dari warga sekitar air terjun.												', '-5.485173295084459', '104.68929552229007', 'Air-Terjun-Way-Lalaan.jpg'),
(386, 'Bendungan Batu Tegi', 'Bendungan', 'Batu Tegi, Air Naningan, Kabupaten Tanggamus, Lampung 35679', 'Umum', '10000', '[\"Toilet\",\"Parkir\",\"Kantin\"]', '[\"2000\",\"2000\",\"-\"]', 'Sport Foto', '[\"Senin-Minggu\"]', '[\"09.00-1800\"]', 'Bendungan atau dam ini terletak di kawasan pegunungan di kaki Gunung Tanggamus dan dataran tinggi. Bendungan ini terletak di Desa Batu Tegi, Kecamatan Air Naningan, Kabupaten Tanggamus. Jarak dari Kota Bandar Lampung sekitar 79,3 km dengan waktu tempuh normal 2,5 jam. Bendungan ini mulai dibangun pada tahun 1995 dan kemudian diresmikan pada tahun 2004 oleh Presiden Indonesia ke lima yaitu ibu Megawati Soekarno Putri.								', '-5.255751034938136', '104.77847360761722', 'Bendungan-Batutegi.jpg'),
(387, 'Pantai Gigi Hiu', 'Pantai', 'Pekon Susuk, Kelumbayan, Kabupaten Tanggamus, Lampung', 'Umum', '10000', '[\"Masjid\",\"Kantin\",\"Parkir\"]', '[\"-\",\"-\",\"5000\"]', 'Spot Foto, Renang', '[\"Senin-Minggu\"]', '[\"09.00-1800\"]', 'Pantai Gigi Hiu merupakan salah satu pantai yang termasuk kategori pantai terindah di Lampung. Hal menarik yang dapat anda jumpai di Pantai Gigi Hiu adalah adanya gugusan batu karang yang terjajal menambah keeksotisan pantai tersebut. Beralamatkan di desa Pegadungan kecamatan Kelumbayan Kabupaten Tanggamus. Nama Pantai Gigi Hiu diberikan kepada pantai ini karena adanya batu karang yang bentuknya tajam seperti deretan gigi pada ikan hiu. Selain itu, pantai ini juga memiliki nama lain yaitu Pantai', '-5.675220122848348', '104.90546011121829', 'gigi-hiu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_umum`
--

CREATE TABLE `fasilitas_umum` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `jenis_fasilitas` varchar(126) NOT NULL,
  `alamat` varchar(126) NOT NULL,
  `fasilitas` varchar(126) NOT NULL,
  `longitude` varchar(126) NOT NULL,
  `latitude` varchar(126) NOT NULL,
  `foto` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_umum`
--

INSERT INTO `fasilitas_umum` (`id`, `nama`, `jenis_fasilitas`, `alamat`, `fasilitas`, `longitude`, `latitude`, `foto`) VALUES
(1, 'dsv', 'sdvsd', '  sdvss\r\n      ', 'vsd', 'sdv', 'sdvsd', 'api.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(126) NOT NULL,
  `password` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'agung@gmail.com', '12345'),
(2, 'uu@gmail.com', 'susumuda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `fasilitas_umum`
--
ALTER TABLE `fasilitas_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
