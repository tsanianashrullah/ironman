-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2015 at 11:01 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 18886000),
('BR', 'Brazil', 170115000),
('CA', 'Canada', 1147000),
('CN', 'China', 1277558000),
('DE', 'Germany', 82164700),
('FR', 'France', 59225700),
('GB', 'United Kingdom', 59623400),
('IN', 'India', 1013662000),
('RU', 'Russia', 146934000),
('US', 'United States', 278357000);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(14) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `logo` varchar(200) NOT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `jabatan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `tanggal_masuk`, `alamat`, `logo`, `jk`, `jabatan`) VALUES
(2, '998192893882', 'Suhendar S,Pd.I', '2015-02-04', 'Cimareme', '', 'Laki-Laki', 'Staff Pengajar'),
(3, '99283189289991', 'Rani Nur Rahmah', '2013-03-20', 'Cikudapateuh', '', 'Perempuan', 'Staff Tata Usaha'),
(4, '99379123821312', 'Merry Riana S.E', '2011-07-20', 'Cipatik', '', 'Perempuan', 'Staff Pengajar'),
(5, '99273912352131', 'Dra. Yeyen Ruswiyani M,Mpd', '1999-05-20', 'Cimahi', '', 'Perempuan', 'Kepala Sekolah'),
(6, '66277128361235', 'Keisha Sania S.Pd', '2015-04-30', 'CIhanjuang', 'uploads/Keisha Sania S.Pd.png', 'Laki-Laki', 'Staff Pengajar'),
(7, '99263123671253', 'Reynaldi Saputra S,Kom.', '2015-07-31', 'Kiara Condong', '', 'Laki-Laki', 'Bendahara'),
(8, '99812635635186', 'Salman Al-Qorni S.Pd,I', '2015-02-17', 'Muar Jambe', '', 'Laki-Laki', 'Staff Pengajar'),
(14, '88', 'kjhsad', '2015-07-07', 'sadhas', 'uploads/88.jpg', 'Laki-Laki', 'Bendahara'),
(15, '98218299999', 'Hauhs', '2015-07-14', 'sddasj', 'uploads/98218299999.jpg', 'Perempuan', 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1435717036),
('m130524_201442_init', 1435717039);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jk` varchar(30) DEFAULT NULL,
  `telp` varchar(11) DEFAULT NULL,
  `kelas` varchar(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama`, `tanggal_lahir`, `alamat`, `jk`, `telp`, `kelas`) VALUES
(2, '9951293990', 'Harry Kurniadi', '1995-03-05', 'Jl. Yangtse Kel. Cipatik Utara', 'Laki-Laki', '08912332145', 'XI'),
(4, '9928172817', 'Jefry Al Insyan', '1994-08-26', 'Jl. Petangguhan', 'Laki-Laki', '08928182828', 'X'),
(5, '999879898', 'Sandi', '1999-06-17', 'Jl. Harapan Bangsa No, 45 ', 'Laki-Laki', '02819292929', 'XI'),
(6, '9932843242', 'sadjhsda', '2015-07-19', 'jusadsa', 'Laki-Laki', '0342343242', 'XI');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tsaniihsania', 'k_ftp36IhJNuCKHqYl_KqUfbBMW1BN3k', '$2y$13$UvveXweXepVHnqHNUzVvN.AN5xARBxN7zIGI7MArzf6TBMsX5NFrC', NULL, 'kurangkerjaan@gmail.com', 10, 1435717092, 1435717092),
(2, 'tsania', 'xBxny5Q6fIzGniDfmzGedmNGhzp8uWbJ', '$2y$13$g2OuAmDv3GLy47Y1Uvv63.hdLLvf6LZKaUPC5.E0ThwjHRE6Uz6AS', NULL, 'uhuk@gmail.com', 10, 1435892729, 1435892729);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
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
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
