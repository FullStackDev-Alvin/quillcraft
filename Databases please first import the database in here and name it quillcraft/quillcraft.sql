-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 03:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quillcraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `img_src`, `username`, `likes`, `dislikes`) VALUES
(1, 'quillcraft@gmail.com', 'quillcraft@team4', 'logo.jpg', 'QuillCraft', 0, 0),
(2, 'musyokaalvin2020@gmail.com', '123', 'QuillCraft662f6bf1938b57.69710337download (1)-min.jpg', 'Xiller', 0, 0),
(3, 'me@gmail.com', '123', 'QuillCraft662f9041b7c357.66669609images (2).jpg', 'me', 2, 3),
(4, 'someone@gmail.com', '123', 'QuillCraft66334c7ca84371.29804116colour-psychology-graphics.png', 'someone', 0, 0),
(5, 'uwase@gmail.com', '123', 'QuillCraft66335853e248c4.85691684pexels-godisable-jacob-226636-993868.jpg', 'uwase', 0, 0),
(6, 'ishimwe@gmail.com', '123', 'QuillCraft663358922e0a89.62015285pexels-tubarones-3026283.jpg', 'ishimwe', 0, 0),
(7, 'buche@gmail.com', '123', 'QuillCraft663358b3364436.74498253wow.jpg', 'buche', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
