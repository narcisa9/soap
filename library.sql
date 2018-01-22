-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 10:35 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------
--
-- Structura de tabel pentru tabelul `autori`
--

CREATE TABLE `autori` (
  `id_autor` int(11) NOT NULL,
  `nume_autor` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `autori`
--

INSERT INTO `autori` (`id_autor`, `nume_autor`, `status`) VALUES
(1, 'autor1', 1),
(2, 'autor2', 1),
(3, 'autor3', 1),
(10, 'autor4', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `carti`
--

CREATE TABLE `carti` (
  `id_carte` int(11) NOT NULL,
  `titlu_carte` varchar(60) NOT NULL,
  `id_autor` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `booking` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `carti`
--

INSERT INTO `carti` (`id_carte`, `titlu_carte`, `id_autor`, `status`, `booking`) VALUES
(0, 'carte1', '1,3,10', 1, 1),
(2, 'carte2', '2,3', 1, 0),
(3, 'carte3', '1,2', 1, 0),
(7, 'carte4', '1,2,3', 1, 1),
(10, 'carte5', '1,2', 1, 0),
(13, 'carte6', '1,3,10', 1, 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `clienti`
--

CREATE TABLE `clienti` (
  `id_client` int(11) NOT NULL,
  `nume_client` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `clienti`
--

INSERT INTO `clienti` (`id_client`, `nume_client`, `status`) VALUES
(1, 'client1', 1),
(2, 'client2', 1),
(5, 'client4', 1),
(8, 'client5', 1);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `imprumuturi`
--

CREATE TABLE `imprumuturi` (
  `id_imprumut` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_carte` int(11) NOT NULL,
  `data_imprumut` date NOT NULL,
  `numar_zile` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `imprumuturi`
--

INSERT INTO `imprumuturi` (`id_imprumut`, `id_client`, `id_carte`, `data_imprumut`, `numar_zile`, `status`) VALUES
(15, 1, 0, '2018-01-18', 2, 1),
(11, 2, 7, '2018-01-19', 3, 1),
(12, 8, 13, '2018-01-01', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indexes for table `carti`
--
ALTER TABLE `carti`
  ADD PRIMARY KEY (`id_carte`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `imprumuturi`
--
ALTER TABLE `imprumuturi`
  ADD PRIMARY KEY (`id_imprumut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autori`
--
ALTER TABLE `autori`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carti`
--
ALTER TABLE `carti`
  MODIFY `id_carte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clienti`
--
ALTER TABLE `clienti`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `imprumuturi`
--
ALTER TABLE `imprumuturi`
  MODIFY `id_imprumut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
