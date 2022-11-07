-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: אוגוסט 14, 2021 בזמן 04:00 PM
-- גרסת שרת: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('tomgr151@gmail.com', 'c1bee99518', '2021-07-09 19:50:14'),
('tomgr151@gmail.com', 'd59a901ab1', '2021-07-09 19:50:16'),
('apol9@walla.co.il', '1c9bf147f6', '2021-07-09 19:53:46');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `person`
--

INSERT INTO `person` (`id`, `name`, `email`, `phone`, `city`) VALUES
(0, 'tom', 'tomgr151@gmail.com', '0505427551', 'Tel-Aviv');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `product`
--

INSERT INTO `product` (`id`, `product_name`) VALUES
(1, 'soccer ball'),
(2, 'tennis ball'),
(3, 'hand ball'),
(4, 'american foot ball'),
(5, 'basket ball'),
(6, 'water polo ball');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `products`
--

CREATE TABLE `products` (
  `name` varchar(100) NOT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `products`
--

INSERT INTO `products` (`name`, `amount`, `email`, `date`) VALUES
('hand ball', '1', 'Name@email.com', '2021-08-14'),
('hand ball', '2', 'tomgr151@gmail.com', '2021-08-14'),
('foot ball', '', '', '2021-08-14'),
('tennis ball', '17', 'tomgr151@gmail.com', '2021-08-14'),
('hand ball', '1', 'tomgr151@gmail.com', '2021-08-14');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Nickname` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `reset_link_token` varchar(100) NOT NULL,
  `exp_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `register`
--

INSERT INTO `register` (`ID`, `email`, `Nickname`, `PhoneNumber`, `password`, `reset_link_token`, `exp_date`) VALUES
(12, 'denis@gmail.com', 'blat', '41122131', '', 'f02b4e5a55412c4624ff2fd55e6368132196', '2021-08-14 09:57:28'),
(11, 'tomgr151@gmail.com', 'tom', '099382473', '', '5fbf80862d732077e21165a4d89462a14704', '2021-08-15 12:33:46');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `users`
--

CREATE TABLE `users` (
  `email` varchar(20) DEFAULT NULL,
  `reset_link_token` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
