-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 07 maj 2018 kl 05:52
-- Serverversion: 10.1.28-MariaDB
-- PHP-version: 7.1.10

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
-- Tabellstruktur `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` int(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `email`, `password`, `avatar`) VALUES
(1, 'test', 0, '0', ''),
(2, 'test2', 0, '$2y$10$PipwUEZHvDtWL/dTtyv9AucXrxuKV60NkJCzFiS6cuEj/UADbqxPG', ''),
(3, 'david', 0, '$2y$10$.sBqIm6Bf8la2U6bJGYLyeXsRNVNRcz3FO7Yhgz5a50Km6IO9QKo.', ''),
(4, 'Testigen', 0, '$2y$10$BXANCI9lfPkhVQEHsAODOeL4SORlEKUdZmyuZ42/GkAd5CiYbcMK2', ''),
(5, 'Basd', 0, '$2y$10$6HEtM9EC75lnWhU4/7WRqeScLUm2HX6oWUHKqSzR0WGEtSltailom', ''),
(6, 'test', 0, '$2y$10$QwAByPNvClRjccUCatLCLuGY5rENZzrpa57C9S7OI5WIZ8fIRHG6e', ''),
(7, 'a', 0, '$2y$10$IywwyBGJU3dypfMxmH0StuC1zGr0n17qbhB74EW.mzgZwWDy4YUB.', ''),
(8, 'as', 0, '$2y$10$94hUUiLnvXxbZhHXkt3GDeCp9eglV0KE4px0SNfSjbeOJ8BUqbePm', ''),
(9, 'admin', 0, '$2y$10$a2B.r5T9fNfsqIN/aWq49O/igJ1yCd/4Zgm6KXFzhzCaQJFC4rhVy', '');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
