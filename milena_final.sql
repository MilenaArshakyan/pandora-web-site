-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 22, 2023 at 10:12 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milena_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `info`, `price`, `image`, `image1`, `image2`, `image3`) VALUES
(1, 'Pandora Moments Heart Clasp Snake Chain Bracelet', 'Set your heart a-flutter with this romantic version of Pandoras bestselling charm bracelet.Hand-finished with a heart-shaped clasp, this sterling silver snake chain bracelet looks stunning on its own but even better adorned with your favorite Pandora char', 65, 'images/Bracelet.jpeg', 'images/single1.jpeg', 'images/single2.jpeg', 'images/single3.jpeg'),
(2, 'Pandora ME Sparkling Star Medallion Charm', 'The stars are always aligned when you wear the Pandora ME Sparkling Star Medallion Charm. With a prism-shaped profile, this sterling silver star charm includes a sparkling stone hand-set in one of its five points.', 35, 'images/star.jpeg', 'images/star1.jpg', 'images/star2.jpg', 'images/star3.jpg'),
(3, 'Marvel Spider-Man Necklace Set', 'Trending all over social media! This Spider-Man Necklace Set makes the perfect gift for him. Includes the Spider-Man Dangle Charm and the Pandora Curb Chain Necklace.', 115, 'images/marvel.jpg', 'images/marvel1.jpeg', 'images/marvel2.jpg', 'images/marvel3.webp'),
(4, 'Celestial Sun and Moon Ring Set', 'Radiate cosmic energy with the Celestial Sun & Moon Ring Set. This set pairs the Celestial Sparkling Sun Ring in 14k gold plating with clear pavé and the Celestial Blue Sparkling Moon Ring in sterling silver with deep blue stones.', 145, 'images/sun&moon.jpeg', 'images/sun&moon1.jpg', 'images/sun&moon2.jpg', 'images/sun&moon3.jpeg'),
(5, 'Pandora ME Sparkling Eyes Medallion Charm', 'All eyes will be on you when you wear the Pandora ME Sparkling Eyes Medallion Charm. Engraved with the words \"With sparkling eyes like the stars in the sky.', 65, 'images/eyes.jpeg', 'images/eyes1.jpg', 'images/eyes2.jpg', 'images/eyes3.jpg'),
(6, 'Pandora ME Zodiac Necklace Set', 'Celebrate your sun sign with the Pandora ME Zodiac Necklace Set. Featuring two sterling silver pieces – a link chain necklace and a zodiac wheel medallion charm – this set forms the perfect pair. ', 180, 'images/zodiac.jpeg', 'images/zodiac1.jpg', 'images/zodiac2.jpg', 'images/zodiac3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
