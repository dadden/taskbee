-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 23 maj 2018 kl 12:22
-- Serverversion: 10.1.30-MariaDB
-- PHP-version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `taskbee`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `tb_projects`
--

CREATE TABLE `tb_projects` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(256) NOT NULL,
  `thumb` varchar(150) NOT NULL,
  `image` varchar(60) NOT NULL,
  `zip` varchar(150) NOT NULL,
  `public` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tb_projects`
--

INSERT INTO `tb_projects` (`id`, `user`, `name`, `description`, `thumb`, `image`, `zip`, `public`) VALUES
(20, 'admin', 'Public Test', 'test', '../uploads/5b027fc44c36d6.88845564.jpg', '../uploads/5b027fc44b4600.79198092.jpg', '../uploads/5b027fc44ccd88.64869146.zip', 0),
(21, 'admin', 'Private test', 'test', '../uploads/5b027fda6e74d3.38308137.jpg', '../uploads/5b027fda6e3930.35663877.jpg', '../uploads/5b027fda6eaf25.20044958.zip', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `email`, `password`, `avatar`) VALUES
(13, 'admin', 'admin@taskbee.com', '$2y$10$bJTZPTrtUZAZDABxnUpLdO1ENrO6r3piV1lEGkY4qOKaPHrfhNk1S', '');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `tb_projects`
--
ALTER TABLE `tb_projects`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `tb_projects`
--
ALTER TABLE `tb_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT för tabell `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
