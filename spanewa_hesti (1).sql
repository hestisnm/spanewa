-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 01:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spanewa_hesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `login_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`login_id`, `username`, `password`) VALUES
(1, 'spanewa83', 'd12c030c5dd4843ff0010d97a6d2d710');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `content`, `author`, `image`, `date`) VALUES
(1, 'hesti', 'haha', 'aku', '17 agustus.jpg', '2025-02-17 15:31:21'),
(2, 'masjid', '', '', 'Login UI.jpg', '2025-02-18 19:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `medsos` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `title`, `content`, `image`, `date`, `medsos`, `author`) VALUES
(1, 'e', 'https://www.instagram.com/spanewaofficial?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', 'bulan bahsasa.jpg', '2025-02-17 10:54:14', '', 'aku');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `title`, `content`, `author`, `image`, `date`) VALUES
(1, 'y', 'g', 'aku', 'badminton.jpg', '2025-02-16 01:27:08'),
(2, 'y', 'h', 'wkwk', 'badminton.jpg', '2025-02-16 03:20:24'),
(3, 'dds', 'd', 'd', '17 agustus.jpg', '2025-02-16 03:21:51'),
(4, 'a', 'a', 'a', 'badminton.jpg', '2025-02-16 03:23:01'),
(5, 'y', 'n', 'h', 'banjari.jpg', '2025-02-16 03:26:49'),
(6, 'w', 'w', 'w', 'badminton.jpg', '2025-02-17 09:11:14'),
(7, 's', 'w', 'w', '072-SMPN-1-Wagir.jpg', '2025-02-17 09:12:04'),
(8, 'a', 'a', 'a', 'Aula.jpg', '2025-02-17 09:48:00'),
(9, 'ww', 'w', 'w', '072-SMPN-1-Wagir.jpg', '2025-02-17 09:54:05'),
(10, 'h', 'ju', 'ju', '072-SMPN-1-Wagir.jpg', '2025-02-17 10:10:24'),
(11, 'dd', 'cf', 'w', 'banjari.jpg', '2025-02-17 11:00:05'),
(12, 'qq', 'd', 's', '17 agustus.jpg', '2025-02-17 05:57:03'),
(13, 'ww', 'dd', 'd', 'admin1.png', '2025-02-17 12:52:08'),
(14, 'r', 'r', 'r', 'alken.jpg', '2025-02-17 12:53:02'),
(15, 'j', 'j', 'u', 'banjari.jpg', '2025-02-17 13:03:08'),
(16, 'hesti', 'hahah', 'surya', 'galeri (3).png', '2025-02-18 04:49:58'),
(17, 'hesti', 'hahah', 'surya', 'galeri (3).png', '2025-02-18 04:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karya_siswa`
--

CREATE TABLE `karya_siswa` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `tanggal` datetime NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `selengkapnya` text NOT NULL,
  `image_slider` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `author`, `image`, `date`, `selengkapnya`, `image_slider`) VALUES
(9, 'f', 's', 's', '17 agustus.jpg', '2025-02-16 03:28:45', '', NULL),
(10, 's', 'sss', 's', '17 agustus.jpg', '2025-02-16 03:35:32', '', NULL),
(11, 'lorem', 'Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BCSection 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC\r\n', 'hesti', 'admin1.png', '2025-02-16 14:57:39', '', NULL),
(12, 'coba', '\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"', 'aku', 'Aula.jpg', '2025-02-16 15:57:21', '', NULL),
(13, 'ss', 's', 's', '072-SMPN-1-Wagir.jpg', '2025-02-16 22:39:19', '', NULL),
(14, 'g', 'y', 'y', 'badminton.jpg', '2025-02-16 22:45:45', '', NULL),
(15, 'm', 'm', 'aku', 'Aula.jpg', '2025-02-16 22:48:59', '', NULL),
(16, 'w', 's', 's', '17 agustus.jpg', '2025-02-17 06:57:14', '', NULL),
(17, 'a', 'a', 'a', '072-SMPN-1-Wagir.jpg', '2025-02-17 07:02:21', '', NULL),
(18, 'AULA', 'aula smpn 1 wagir', 'hesti', 'Aula.jpg', '2025-02-17 09:02:56', '', NULL),
(19, 'aku', 'iya', 'aku', 'Aula.jpg', '2025-02-17 09:05:40', '', NULL),
(20, 'w', 'w', 'w', 'badminton.jpg', '2025-02-17 09:11:14', '', NULL),
(21, 's', 'w', 'w', '072-SMPN-1-Wagir.jpg', '2025-02-17 09:12:04', '', NULL),
(23, 'hut 54 wagir', 'seluruh warga smpn1 wagir senang konser.', 'satiya cool', 'banjari.jpg', '2025-02-17 19:16:53', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nim` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_monthly`
--

CREATE TABLE `visitor_monthly` (
  `id` int(11) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_monthly`
--

INSERT INTO `visitor_monthly` (`id`, `month`, `year`, `count`) VALUES
(1, 'February', 2025, 3),
(2, '2', 2025, 317);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karya_siswa`
--
ALTER TABLE `karya_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `visitor_monthly`
--
ALTER TABLE `visitor_monthly`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karya_siswa`
--
ALTER TABLE `karya_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor_monthly`
--
ALTER TABLE `visitor_monthly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
