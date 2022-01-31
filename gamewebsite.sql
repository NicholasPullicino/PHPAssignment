-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 03:08 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamewebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameID` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descrip` varchar(500) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `name`, `descrip`, `image`) VALUES
(1, 'It Takes Two', 'Embark on the craziest journey of your life in It Takes Two. Invite a friend to join for free with Friend’s Pass and work together across a huge variety of gleefully disruptive gameplay challenges. Winner of GAME OF THE YEAR at the Game Awards 2021.', 'It-Takes-Two.jpg'),
(2, 'Monster Hunter Rise', 'Rise to the challenge and join the hunt! In Monster Hunter Rise, the latest installment in the award-winning and top-selling Monster Hunter series, you’ll become a hunter, explore brand new maps and use a variety of weapons to take down fearsome monsters as part of an all-new storyline.', 'hero.jpg'),
(3, 'Dying Light 2', 'The virus won and civilization has fallen back to the Dark Ages. The City, one of the last human settlements, is on the brink of collapse. Use your agility and combat skills to survive, and reshape the world. Your choices matter.', 'dyinglight.jpg'),
(4, 'Among Us ', 'An online and local party game of teamwork and betrayal for 4-15 players...in space!', 'among-us.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `image`) VALUES
(2, 'nickp', 'pnick809@gmail.com', '$2y$10$A84IOWipreF6AsIO4chCNenhO9wqjJEFYf9LJmCTkJgcku1kV2bIy', 'memory.png'),
(3, 'test', 'test@gmail.com', '$2y$10$.74Lxz/DQ/DycbbPyOj9Qumxzv8S3IUO4DAJqfHNxcizen/ZQ4NaW', 'ittakestwo.png'),
(4, 'test1', 'test1@gmail.com', '$2y$10$6NPVCjpO0UIgMCDQI.bkiux.0YOmo//9m8U7PRX2JA9iJd98xWCKi', 'memory.png'),
(5, 'test8', 'test5@gmail.com', '$2y$10$UkZ6M5kntpcZZvmET1o2Mu61eqg9AioWQB2isyqIMii3oD9mq6e7W', 'memory.png'),
(7, 'test11', 'test11@gmail.com', '$2y$10$soDkKLzGNT8tBAAQEfVi9e.C4GgeP8D2ZrV8UeBODjAxbPxEcsWze', 'memory.png'),
(8, 'test30', 'test31@gmail.com', '$2y$10$sVy/a4w9iUmt4d79FTCTXOu3pFknEhJC5CcM5qUILeDVPC8FqGb12', 'genshin.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
