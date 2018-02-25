-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2018 at 05:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softeng_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`) VALUES
(1, 'Standard user', ''),
(2, 'Administrator', '{\"admin\":1}');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `secondname` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `group` int(11) NOT NULL,
  `wallet` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `home1` varchar(30) NOT NULL,
  `home2` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `expiry` date NOT NULL,
  `cvc` varchar(11) NOT NULL,
  `cardname` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `firstname`, `secondname`, `joined`, `group`, `wallet`, `email`, `home1`, `home2`, `city`, `state`, `zip`, `cardnumber`, `expiry`, `cvc`, `cardname`) VALUES
(2, 'maraki', 'f5e5985b28a00ede7fbd036ac84f81cd36defe17a406170a87028922b0cfbb83', 'ð®®‚•˜', 'Maria', 'Marini', '2018-02-21 17:44:51', 1, 0, 'maraki', 'iroon 66', '', 'menidi', 'attiki', 13674, 2147483647, '0000-00-00', '3546', '0'),
(3, 'toni', 'f18945c4dffd27e0485d05c9de0e414ae6552792694e20f73a94c24368e1e53e', 'j%&[ôûýÉ{r¹xb(?Þ„[v°üWH9‚Scs®ü§', 'rafaki', 'katara', '2018-02-21 18:02:14', 1, 0, 'antoniark@gmail.com', 'papadimitriou 66', '', 'pouthena', 'attiki', 13674, 2147483647, '0000-00-00', '3456', 'mastercard'),
(4, 'nik', '11a231770deffa90cd3363c2cad1900f427237eb0fdbcb8548a389975f6cfe22', 'x®þ™òßë ¡F3O¨€Ôªß›ŽP° \"?…û$', 'Nikos', 'Tziris', '2018-02-21 18:37:11', 1, 0, 'nikostziris@gmail.com', 'anakreontos5', '', 'zografou', 'attiki', 15467, 2147483647, '0000-00-00', '3456', 'visa'),
(5, 'elenalnta', 'b7cd8e1b206e773a924a1552de62463eb3b49a4b2537acb8837f114644c6df26', '-¿ìàŸoz\'%øŽK0ÿë±C!Î=@è9`§', 'Eleni', 'Karanikola', '2018-02-23 11:20:27', 1, 0, 'elenis.karanikola@gmail.com', 'anakreontos 22', '', 'zografou', 'attiki', 12456, 2147483647, '0000-00-00', '5678', 'visa'),
(6, 'kathrin', '6863009d66f9a1a1c139381bbee785499b418b19afd31329faaeb7479ef95b81', 'Æª/?‰~ô6—\'Ì…¡Vc–Ã–Ê€UsŒë`\Z', 'katerina', 'papa', '2018-02-23 19:24:49', 1, 0, 'kathrin@gmail.com', 'troon 4', '', 'chalandri', 'attiki', 456745, 2147483647, '0000-00-00', '2345', 'visa'),
(7, 'peris', '62ece69d238bda2564caea5f7ce71b884be4c34ce8ba801ab129bf3fb93a54c9', '¥!Ów3šº¨xRB¾øË/°iÍ™QÁí×j,ïx”·»', 'periklis', 'katsaros', '2018-02-23 19:28:36', 1, 0, 'katsar@gmail.com', 'wert 67', '', 'california', 'los angeles', 2345678, 2147483647, '0000-00-00', '2345', 'visa'),
(8, 'cat', '98d525377487c933fb6c506edf9be76a9415882894bd9e097888daf5a9678d8d', 'JF	y~u0êCnï]W¤P\'ƒ<KLæ½0³<ºm£!', 'lebron', 'karanikolas', '2018-02-25 11:35:30', 2, 0, 'lebron@gmail.com', 'anakre 22', '', 'zografou', 'attiki', 12345, 2147483647, '0000-00-00', 'peiraios', 'LEBRON'),
(9, 'jo', '1233', '', '', '', '0000-00-00 00:00:00', 0, 0, '', '', '', '', '', 0, 0, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_session`
--

CREATE TABLE `users_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_session`
--
ALTER TABLE `users_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_session`
--
ALTER TABLE `users_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
