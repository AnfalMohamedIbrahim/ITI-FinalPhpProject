-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `success`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `downloadsCounter` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `size` float DEFAULT NULL,
  `content` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `size`, `content`) VALUES
(1, '[phpProjectXYZAswan.zip]', 0, '[PK\0\0\0\0\0+=KV?<??;\0\0\0;\0\0\0	\0\0\0readMe.md# Thanks for downloading Hope you re fine and successful :)PK?\0\0\0\0\0+=KV?<??;\0\0\0;\0\0\0	\0\0\0\0\0\0\0\0\0\0\0??\0\0\0\0readMe.mdPK\0\0\0\0\0\07\0\0\0b\0\0\0\0\0]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'Anfal.mohamed38@gmail.com', 'f3b2468d7f3da992e76366cc5e88ff607db58722'),
(4, 'Ibrahim.10@gmail.com', '836817700a5c63b13d3a505f1c3929986646d00e'),
(5, 'Marina11@gmail.com', 'f572fae3b641e3b2cee0b4407d35affd3f12f1db'),
(6, 'Shimaa.10@gmail.com', 'ea1eb7550e8c8a6cebf8905de369a341188268c6'),
(7, 'Mohamed.10@gmail.com', '3d56b95bb30f2748ad101235c95b5d8a53328622'),
(8, 'Ahmed.10@gmail.com', 'ed24693f7ceccd1ffbd5898659496f9ea6937b13'),
(9, 'Admin.10@gmail.com', '276c9ef9a3b0f714827e115479259540ce48deda'),
(10, 'Nadia.10@gmail.com', '86f55abea57707d10bd79d699e5ecdc71f0ffb52'),
(11, 'Mostafa.10@gmail.com', '1addc1191b9c39dabd4d63b47d14049dc374da14'),
(12, 'Arwa.10@gmail.com', 'db67d0b30bc7e7dbf3351b0930ca9409bc2df6d4'),
(13, 'Arwa.10@gmail.com', 'db67d0b30bc7e7dbf3351b0930ca9409bc2df6d4'),
(14, 'Fatma.10@gmail.com', '701d432183ae7fbfa7b02301b4b29cc567305957'),
(15, 'Fatma.10@gmail.com', '701d432183ae7fbfa7b02301b4b29cc567305957'),
(16, 'Rana.10@gmail.com', '1231e2f682e75966343a03453704d7e3ff0c86b1'),
(17, 'Tasneem.10@gmail.com', '832919da0af3cc4856021dfbc9719efad1a3bdbc'),
(18, 'Reda.10@gmail.com', '037cafcf27f1c6eff4281b6a917ebec84005adad'),
(20, 'Mazen.10@gmail.com', '73eb814cd13547d3b9d4b479c13aff22284dbd79');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
