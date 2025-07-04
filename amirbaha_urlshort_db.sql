-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2025 at 12:51 PM
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
-- Database: `amirbaha_urlshort_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `amirbaha_urlshort_tb`
--

CREATE TABLE `amirbaha_urlshort_tb` (
  `url_id` varchar(8) NOT NULL,
  `url_text` text NOT NULL,
  `show_ads` tinyint(1) NOT NULL DEFAULT 0,
  `click_number` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `amirbaha_urlshort_tb`
--

INSERT INTO `amirbaha_urlshort_tb` (`url_id`, `url_text`, `show_ads`, `click_number`) VALUES
('', '', 0, 0),
('amirbaha', 'https://google.com', 0, 0),
('newbaby2', 'https://stackoverflow.com/questions/5411538/how-to-redirect-one-html-page-to-another-on-load', 0, 0),
('qq123412', 'http://google.com', 0, 0),
('qq123413', 'http://google.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amirbaha_urlshort_tb`
--
ALTER TABLE `amirbaha_urlshort_tb`
  ADD PRIMARY KEY (`url_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
