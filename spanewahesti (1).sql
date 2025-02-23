-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2025 at 06:00 AM
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
-- Database: `spanewahesti`
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
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `author`, `image`, `date`) VALUES
(1, 'hestinj', 'aku', '17 agustus.jpg', '2025-02-22 16:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `date`) VALUES
(2, 'Aula.jpg', '2025-02-20 08:16:10');

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
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id`, `title`, `content`, `image`, `date`, `author`) VALUES
(2, 'futsal', '', '17 agustus.jpg', '2025-02-20 08:07:17', 'aku'),
(3, 'haha', '', 'ABk4Pb6VbkP8CYUfyLEo9dG4nqy8zaX9vlWgj5n5.jpg', '2025-02-20 09:09:02', 'aku'),
(4, 'apa yayh', '', 'Aula.jpg', '2025-02-20 09:10:10', 'gwa'),
(5, 'hahaio', '', 'birput 9c.jpg', '2025-02-20 09:10:48', 'hihi,KJJK');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `title`, `author`, `image`, `date`) VALUES
(18, 'AULA g', 'hhLHNL', 'Aula.jpg', '2025-02-22 10:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `email`, `date`) VALUES
(1, 'hesti', 'haha', 'hestisuryaningrum123@gmail.com', '2025-02-20 09:34:51'),
(2, 'hesti', 'haha', 'hestisuryaningrum123@gmail.com', '2025-02-20 09:35:26'),
(3, 'hesti', 'haha', 'hestisuryaningrum123@gmail.com', '2025-02-20 09:37:51'),
(6, 'tutis', 'jha', 'hestisuryaningrum@gmail.com', '2025-02-23 11:50:28');

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

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `content`, `author`, `image`, `date`) VALUES
(1, 'apa yah', '', 'akuknl', 'badminton.jpg', '2025-02-23 11:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `date`, `image`, `mapel`) VALUES
(2, 'jwbw', '2025-02-23 10:43:00', '710b831c-af99-4e02-b501-5e72be882d15.jpg', 'jdjd');

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
  `date` datetime DEFAULT current_timestamp(),
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karya_siswa`
--

INSERT INTO `karya_siswa` (`id`, `title`, `content`, `author`, `image`, `date`, `nama`) VALUES
(1, 'lukisan', '', 'hesti', 'adiwiyata.jpg', '2025-02-22 16:45:00', 'sunjae'),
(2, 'rfr', '', 'hlfee', '21e49cd8-6408-4396-b9de-41fe25850a8d.jpg', '2025-02-22 17:32:03', 'khew');

-- --------------------------------------------------------

--
-- Table structure for table `kepsek`
--

CREATE TABLE `kepsek` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `nama` varchar(255) NOT NULL,
  `tanggal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kepsek`
--

INSERT INTO `kepsek` (`id`, `content`, `date`, `nama`, `tanggal`) VALUES
(4, '', '2025-02-23 11:37:00', 'hesti bkgu', '2000-2003');

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
(26, 'pjbl', 'Lorem ipsum odor amet, consectetuer adipiscing elit. Diam sodales eget primis metus curabitur. Malesuada nisi etiam sed, blandit tempus sem. Dignissim proin netus magna nunc suspendisse lectus, metus sapien. Rutrum nunc augue eu sociosqu vivamus aptent integer consequat. Elit conubia ex integer cubilia potenti; eros congue torquent convallis.  Vulputate consectetur natoque aliquet litora dignissim magnis volutpat tristique rhoncus. Sagittis morbi viverra, orci laoreet cursus netus. Ac senectus vivamus finibus litora cubilia natoque. Justo et at eu suscipit litora fermentum nulla molestie lectus. Semper pharetra curabitur sem tempus euismod porttitor. Cursus cras erat ipsum eget per sodales fusce nunc. Eget nec venenatis feugiat interdum varius mus dignissim adipiscing sed. Molestie molestie phasellus semper vivamus praesent rhoncus.  Class dignissim ornare aenean eu ornare fringilla bibendum dui. Dolor sit pellentesque litora erat imperdiet enim ante feugiat ante. Lacinia nulla risus est orci fringilla accums', 'hesti d', '17 agustus.jpg', '2025-02-22 16:23:00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `title`, `content`, `author`, `image`, `date`) VALUES
(2, 'h', 'Lorem ipsum odor amet, consectetuer adipiscing elit. Diam sodales eget primis metus curabitur. Malesuada nisi etiam sed, blandit tempus sem. Dignissim proin netus magna nunc suspendisse lectus, metus sapien. Rutrum nunc augue eu sociosqu vivamus aptent integer consequat. Elit conubia ex integer cubilia potenti; eros congue torquent convallis.  Vulputate consectetur natoque aliquet litora dignissim magnis volutpat tristique rhoncus. Sagittis morbi viverra, orci laoreet cursus netus. Ac senectus vivamus finibus litora cubilia natoque. Justo et at eu suscipit litora fermentum nulla molestie lectus. Semper pharetra curabitur sem tempus euismod porttitor. Cursus cras erat ipsum eget per sodales fusce nunc. Eget nec venenatis feugiat interdum varius mus dignissim adipiscing sed. Molestie molestie phasellus semper vivamus praesent rhoncus.  Class dignissim ornare aenean eu ornare fringilla bibendum dui. Dolor sit pellentesque litora erat imperdiet enim ante feugiat ante. Lacinia nulla risus est orci fringilla accums', 'aku', '21e49cd8-6408-4396-b9de-41fe25850a8d.jpg', '2025-02-23 10:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL,
  `bidang_kerja` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `nama`, `date`, `image`, `bidang_kerja`) VALUES
(2, 'jwbw', '2025-02-23 11:16:00', '710b831c-af99-4e02-b501-5e72be882d15.jpg', 'jdjd knk');

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
-- Indexes for table `banner`
--
ALTER TABLE `banner`
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
-- Indexes for table `kepsek`
--
ALTER TABLE `kepsek`
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `karya_siswa`
--
ALTER TABLE `karya_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kepsek`
--
ALTER TABLE `kepsek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visitor_monthly`
--
ALTER TABLE `visitor_monthly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
