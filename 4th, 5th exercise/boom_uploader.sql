-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2013 at 04:36 PM
-- Server version: 5.5.32
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `boom_uploader`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `fileid` int(11) NOT NULL AUTO_INCREMENT,
  `user` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `filesize` int(11) NOT NULL,
  `filetype` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `saved` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`fileid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`fileid`, `user`, `filename`, `filesize`, `filetype`, `description`, `saved`) VALUES
(1, 'akelas', 'head.php', 368, 'application/php', 'φσαδ', 'C:/test/head.php'),
(2, 'akelas', 'head.php', 368, 'application/php', 'φσαδ', 'C:/test/head.php'),
(3, 'akelas', 'corrections.txt', 4800, 'text/plain', 'φσαδ', 'C:/test/corrections.txt'),
(4, 'akelas', 'corrections.txt', 4800, 'text/plain', 'φσαδ', 'C:/test/corrections.txt'),
(5, 'akelas', 'corrections.txt', 4800, 'text/plain', 'φσαδ', 'C:/test/corrections.txt'),
(6, 'akelas', 'corrections.txt', 4800, 'text/plain', 'φσαδ', 'C:/test/corrections.txt'),
(7, 'akelas', 'corrections.txt', 4800, 'text/plain', 'φσαδ', 'C:/test/corrections.txt'),
(8, 'akelas', 'openofficecalcportable.exe', 87776, 'application/x-msdownload', ' Say some things about the file you want to upload !!', 'C:/test/openofficecalcportable.exe'),
(9, 'akelas', 'openofficecalcportable.exe', 87776, 'application/x-msdownload', ' Say some things about the file you want to upload !!', 'C:/test/openofficecalcportable.exe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `surname` text COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `surname`, `age`, `username`, `password`, `email`) VALUES
(1, 'aaaaaq', 'aaaaa', 20, 'aaasaaa', 'sasasaasasas', 'akelas@hotmail.com'),
(2, 'aaaaaq', 'aaaaa', 20, 'aaasaaa', 'sasasaasasas', 'akelas@hotmail.com'),
(3, 'aaaaaq', 'aaaaa', 20, 'aaasaaa', 'sasasaasasas', 'akelas@hotmail.com'),
(4, 'aaaaaq', 'aaaaa', 20, 'aaasaaa', 'sasasaasasas', 'akelas@hotmail.com'),
(5, 'aaaaaq', 'aaaaa', 20, 'aaasaaa', 'sasasaasasas', 'akelas@hotmail.com'),
(6, 'aaaaaq', 'aaaaa', 20, 'aaasaaa', 'sasasaasasas', 'akelas@hotmail.com'),
(7, 'Dimitris', 'Lamprinos', 20, 'akelas', 'akelas', 'akelas@hotmail.com'),
(8, 'Dimitris', 'Lamprinos', 20, 'akelas', 'akelas', 'akelas@hotmail.com'),
(9, 'Dimitris', 'Lamprinos', 20, 'akelas', 'akelas', 'akelas@hotmail.com'),
(10, 'Dimitris', 'Lamprinos', 20, 'akelas', 'akelas', 'akelas@hotmail.com'),
(11, 'Dimitris', 'Lamprinos', 20, 'a', 'a', 'akelas@hotmail.com'),
(12, 'Dimitris', 'Lamprinos', 20, 'a', 'a', 'akelas@hotmail.com'),
(13, 'Dimitris', 'Lamprinos', 20, 'a', 'a', 'akelas@hotmail.com'),
(14, 'Dimitris', 'Lamprinos', 20, 'a', 'φ', 'akelas@hotmail.com'),
(15, 'Dimitris', 'Lamprinos', 20, 'a', 'φ', 'akelas@hotmail.com'),
(16, 'Dimitris', 'Lamprinos', 20, 'as', 'η', 'akelas@hotmail.com');
