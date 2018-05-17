-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 17 maj 2018 kl 14:49
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
  `public` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tb_projects`
--

INSERT INTO `tb_projects` (`id`, `user`, `name`, `description`, `thumb`, `image`, `zip`, `public`) VALUES
(8, 'admin', 'sdf', 'scf', '', '../uploads/5afd749c4fa029.79792279.jpg', '../uploads/5afd749c4fe574.11636594.zip', 0),
(9, 'admin', 'Ghost: Papa Emeritus IV', 'Lorem ipsum lorem ipsum description text just testing how this will look in the table later yup maybe it stretches but Im not sure thats why Im testing lol shut up', '', '../uploads/5afd79ac810779.12481100.jpg', '../uploads/5afd79ac813b36.63661398.zip', 0),
(10, 'admin', 'ASDLKFJSDALKFJSDLKJ', 'LAKSJDLASKJDlaksjdlksajdaslKSJDLKASJdaslkdjassLKDJASLDKjALKDSJaLKSJD', '../uploads/5afd79e7608fe7.68192549.jpg', '../uploads/5afd79e76067e0.09946180.jpg', '../uploads/5afd79e760b6d9.08024198.zip', 0);

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
(13, 'admin', '0', '$2y$10$bJTZPTrtUZAZDABxnUpLdO1ENrO6r3piV1lEGkY4qOKaPHrfhNk1S', ''),
(14, 'Alfredlundgren', '0', '$2y$10$FXBw31tpHcGT6D15rHZM5O4cIa2/yxU2isqvQMw5l8I9xz3uMIBIS', ''),
(15, 'Kentaki', 'Samuel@hotmail.com', '$2y$10$jihLVef/4lyT1XmrIQ3cnO3NDcCAwGIkxIWx2yruW2bYwvVr4f1UW', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT för tabell `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
