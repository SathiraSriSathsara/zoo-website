-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2024 at 12:26 AM
-- Server version: 8.0.39-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo-parc`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int NOT NULL,
  `name` char(50) NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `image` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `short_description`, `description`, `image`) VALUES
(5, 'Zoo Animal Enrichment Day', 'A special day dedicated to enriching the lives of our zoo animals with new activities and toys.', 'Experience a behind-the-scenes look at how we keep our animals mentally and physically stimulated. This event includes demonstrations of enrichment activities, Q&A sessions with zookeepers, and interactive stations where visitors can create enrichment items for animals. A fun and educational event for the whole family!', '5.png'),
(6, 'Nocturnal Safari Night', 'An evening adventure exploring the zoo\'s nocturnal animals and their behaviors.', 'Discover the zoo after dark during our Nocturnal Safari Night. Participants will embark on guided tours to observe animals that are active during the night, learn about their unique adaptations, and enjoy special night-time activities. This event includes a flashlight tour, educational talks, and the chance to see some of our animals in a new light.', '6.png'),
(8, 'Nocturnal Safari Night', 'A special day dedicated to enriching the lives of our zoo animals with new activities and toys.', 'fgfffgjfghfghfghfgh', '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `food_outlet`
--

CREATE TABLE `food_outlet` (
  `id` int NOT NULL,
  `name` char(50) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food_outlet`
--

INSERT INTO `food_outlet` (`id`, `name`, `price`, `image`) VALUES
(1, 'Buger2', 7000, '1.png'),
(3, 'Chicken Nuggets', 500, '3.png'),
(4, 'Dumble', 850, '4.png'),
(5, 'Buger', 700, '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` varchar(2550) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `short_description`, `description`, `image`) VALUES
(2, 'Poisonous Frogs', '', 'Poisonous frogs are among the most fascinating and vibrant creatures at Zoo Parc. Known for their striking colors, these tiny amphibians use their bright hues as a warning to predators of their toxic nature. Found in tropical rainforests, they secrete powerful toxins through their skin, making them both beautiful and deadly. Despite their small size, these frogs play a significant role in their ecosystems, helping to control insect populations. At Zoo Parc, you can safely observe these remarkable frogs while learning about their unique adaptations and the vital importance of conserving their natural habitats.', '1.png'),
(3, 'Lions', '', 'Lions, often called the \"Kings of the Jungle,\" are one of the most iconic and majestic animals at Zoo Parc. Known for their powerful presence and regal manes, these big cats are social animals that live in prides, which are led by a dominant male. Lions are skilled hunters, with their roar echoing across the savannah as a symbol of strength and dominance. At Zoo Parc, you can witness the awe-inspiring beauty of lions up close, learn about their role in the wild, and discover the conservation efforts we support to protect these magnificent creatures from extinction.', '2.png'),
(4, 'Bald Eagles', '', 'Bald eagles are majestic birds of prey and a symbol of strength and freedom. With their striking white heads, powerful beaks, and impressive wingspans, these raptors are a sight to behold at Zoo Parc. Native to North America, bald eagles are expert hunters, using their sharp talons and keen eyesight to catch fish and other prey. Once endangered, their populations have rebounded thanks to conservation efforts. At Zoo Parc, you can observe these incredible birds in action and learn about the ongoing efforts to protect their habitats and ensure their survival for generations to come.', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` char(50) NOT NULL,
  `image` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `image`) VALUES
(1, 'Amiru', 'Senanayake', 'admin@email.com', 'password', 'admin', 'evt.png'),
(5, 'Daham ', 'Punsara', 'user@email.com', 'password', 'user', 'evt.png'),
(7, 'Sathira Sri', 'Sathsara', 'sathira.nirmal@gmail.com', '$2y$10$z9lby9Vs/vtYhCuWuVRWb.6Vl1dI2BKaBUiMPtbROT4.AUyByu5gW', 'admin', '66d03d070a940.png'),
(11, 'Sathira', 'nirmal', 'sathira.nirmal@gmail.com', 'password', 'user', '66d0ed1ee6140.png'),
(12, 'Kalum', 'Senanayake', 'kalum@email.com', 'password', 'user', '66d6b412658f7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_outlet`
--
ALTER TABLE `food_outlet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `food_outlet`
--
ALTER TABLE `food_outlet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
