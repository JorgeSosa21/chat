-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2014 at 04:00 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mensaje` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `tipo` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `mensajes`
--

INSERT INTO `mensajes` (`id`, `mensaje`, `timestamp`, `status`, `tipo`) VALUES
(1, 'Hola mar', '2014-05-05 02:22:38', 1, 1),
(2, 'Como te v Fernando', '2014-05-05 02:22:53', 1, 2),
(3, 'Quee haces Laura', '2014-05-05 02:23:01', 1, 3),
(4, 'Adios Adios Cesar', '2014-05-05 02:23:18', 1, 4),
(5, 'Bye', '2014-05-05 02:23:29', 1, 4),
(16, 'buenas noches. como esta.', '2014-05-05 03:07:29', 1, 1),
(17, 'que tal fernanda', '2014-05-05 03:07:49', 1, 2),
(18, 'buenas noches laura', '2014-05-05 03:07:58', 1, 3),
(19, 'cesar estas ahi???', '2014-05-05 03:10:52', 1, 4),
(20, 'hola 123', '2014-05-05 03:16:13', 1, 1),
(21, 'send email', '2014-05-05 03:16:42', 1, 1),
(22, 'tipo, mensaje', '2014-05-05 03:23:13', 1, 2),
(23, 'aaaaa', '2014-05-05 03:24:10', 1, 1),
(24, 'asasas', '2014-05-05 03:25:17', 1, 1),
(25, 'ffff', '2014-05-05 03:25:25', 1, 1),
(26, '', '2014-05-05 03:25:31', 1, 1),
(27, 'sdasdasd', '2014-05-05 03:26:05', 1, 1),
(28, 'aaaaaaa', '2014-05-05 03:26:44', 1, 2),
(29, 'aaaaaaa', '2014-05-05 03:27:28', 1, 3),
(30, 'aaaaaaa', '2014-05-05 03:27:55', 1, 1),
(31, 'aaaaaaa', '2014-05-05 03:28:11', 1, 4),
(32, 'aaaaaa', '2014-05-05 03:28:23', 1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
