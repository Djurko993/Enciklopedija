-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2014 at 12:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enciklopedija`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorije`
--

CREATE TABLE IF NOT EXISTS `kategorije` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategorije`
--

INSERT INTO `kategorije` (`ID`, `ime`) VALUES
(2, 'Spomenici kulture'),
(3, 'Prostorno kulturno istorijske celine'),
(4, 'Arheološka nalazišta'),
(5, 'Znamenita mesta'),
(6, 'NKD od izuzetnog značaja'),
(7, 'NKD od velikog značaja'),
(8, 'Ostalo');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ID`, `username`, `password`) VALUES
(3, '14299', '4f57e66f36a95aa4bcb7670b283dd6925912d0a8'),
(4, '14273', '0ba812ac5b067243df040308e3c856bd3f1af42d');

-- --------------------------------------------------------

--
-- Table structure for table `okruzi`
--

CREATE TABLE IF NOT EXISTS `okruzi` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ime_okruga` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `okruzi`
--

INSERT INTO `okruzi` (`ID`, `ime_okruga`) VALUES
(1, 'Nišavski okrug');

-- --------------------------------------------------------

--
-- Table structure for table `opstine`
--

CREATE TABLE IF NOT EXISTS `opstine` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ime_opstine` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_okrug` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_okrug` (`id_okrug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `opstine`
--

INSERT INTO `opstine` (`ID`, `ime_opstine`, `id_okrug`) VALUES
(1, 'Medijana', 1),
(2, 'Niška banja', 1),
(3, 'Crveni Krst', 1),
(4, 'Palilula', 1),
(5, 'Pantelej', 1),
(6, 'Ražanj', 1),
(7, 'Aleksinac', 1),
(8, 'Doljevac', 1),
(9, 'Merošina', 1),
(10, 'Gadžin Han', 1),
(11, 'Svrljig', 1),
(12, 'Knjaževac', 1),
(13, 'Sokobanja', 1),
(14, 'Boljevac', 1),
(15, 'Zaječar', 1),
(16, 'Medijana', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slike`
--

CREATE TABLE IF NOT EXISTS `slike` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `putanja` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `id_spomenik` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_spomenik` (`id_spomenik`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `slike`
--

INSERT INTO `slike` (`ID`, `putanja`, `id_spomenik`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `spomenici`
--

CREATE TABLE IF NOT EXISTS `spomenici` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kratko_ime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_opstina` int(11) NOT NULL,
  `opis` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_opstina` (`id_opstina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `spomenici`
--

INSERT INTO `spomenici` (`ID`, `ime`, `kratko_ime`, `id_opstina`, `opis`) VALUES
(4, 'medijana', '', 1, ''),
(13, 'boljevac', '', 1, ''),
(14, 'asd', '', 1, ''),
(15, 'asd', '', 1, ''),
(16, 'as', '', 1, ''),
(17, 'ššš', '', 1, ''),
(18, 'ššš', '', 1, ''),
(19, 'as', '', 1, ''),
(20, 'ml', '', 1, ''),
(21, 'neki_spomenik', '', 11, ''),
(22, 'medijaaaa', '', 1, '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `opstine`
--
ALTER TABLE `opstine`
  ADD CONSTRAINT `opstine_ibfk_1` FOREIGN KEY (`id_okrug`) REFERENCES `okruzi` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
