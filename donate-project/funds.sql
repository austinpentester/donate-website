-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 04:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funds`
--

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `user_id` int(30) NOT NULL,
  `payment_id` varchar(40) NOT NULL,
  `amount` int(100) NOT NULL,
  `product_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`user_id`, `payment_id`, `amount`, `product_id`) VALUES
(1, '64796479797', 10000, 5774);

-- --------------------------------------------------------

--
-- Table structure for table `sesssion`
--

CREATE TABLE `sesssion` (
  `id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `amount` int(20) NOT NULL,
  `access_time` datetime NOT NULL DEFAULT current_timestamp(),
  `expiry` datetime DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sesssion`
--

INSERT INTO `sesssion` (`id`, `email`, `name`, `amount`, `access_time`, `expiry`, `active`) VALUES
(1, 'austin@gmail.com', 'austin', 10000, '2021-11-13 19:52:15', NULL, 1),
(2, 'austin@gmail.com', 'austin', 1000, '2021-11-13 19:52:15', NULL, 1),
(3, 'austin@gmail.com', 'austin', 1000, '2021-11-13 19:52:15', NULL, 1),
(4, 'austin@gmail.com', 'austin', 1000, '2021-11-13 19:52:15', NULL, 1),
(5, 'dajemo4225@d3ff.com', 'Austin Pentester', 8888, '2021-11-13 19:52:15', NULL, 1),
(6, 'hacker@gmail.com', 'hacker', 1500, '2021-11-13 20:36:31', NULL, 1),
(7, 'dajemo4225@d3ff.com', 'Austin Pentester', 8888, '2021-11-13 20:43:48', '2022-01-12 16:13:48', 1),
(8, 'hacker@gmail.com', 'hacker', 1500, '2021-11-13 20:44:24', '2022-01-12 16:14:24', 1),
(9, 'austinravi2003@gmail', 'austin', 2500, '2021-11-13 20:50:38', '2022-01-12 16:20:38', 1),
(10, 'austinravi2003@gmail', 'Austin', 2500, '2021-11-13 20:54:12', '2022-01-12 16:24:12', 1),
(11, 'austinravi2003@gmail', 'Austin', 2500, '2021-11-13 20:56:46', '2022-01-12 16:26:46', 1),
(12, 'austinravi2003@gmail', 'Austin', 2500, '2021-11-13 20:56:48', '2022-01-12 16:26:48', 1),
(13, 'hackersomeone612@gma', 'hackersomeone', 5000, '2021-11-13 21:02:19', '2022-01-12 16:32:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `amount`) VALUES
(1, 'austin', 'austin@gmail.com', '1000'),
(2, 'hacker', 'hacker@gmail.com', '1500'),
(3, '20000', ' arun@gmail.com', '20000'),
(4, 'nixen', ' nixen@gmail.com', '5000'),
(5, 'nixen', ' nixen@gmail.com', '5000'),
(6, 'test', ' test@gmail.com', '5000'),
(7, 'test', ' test@gmail.com', '5000'),
(8, 'test', ' test@gmail.com', '5000'),
(9, 'test', ' test@gmail.com', '5000'),
(10, 'test', ' test@gmail.com', '5000'),
(11, 'test', ' test@gmail.com', '5000'),
(12, 'test', ' test@gmail.com', '5000'),
(13, 'test', ' test@gmail.com', '5000'),
(14, 'test', ' test@gmail.com', '5000'),
(15, 'test', ' test@gmail.com', '5000'),
(16, '', ' ', ''),
(17, 'test', ' test@gmail.com', '5000'),
(18, 'test', ' test@gmail.com', '5000'),
(19, 'test', ' test@gmail.com', '5000'),
(20, 'test', ' test@gmail.com', '5000'),
(21, 'test', ' test@gmail.com', '5000'),
(22, 'test', ' test@gmail.com', '5000'),
(23, 'test', ' test@gmail.com', '5000'),
(24, 'test', ' test@gmail.com', '5000'),
(25, 'test', ' test@gmail.com', '5000'),
(26, 'test', ' test@gmail.com', '5000'),
(27, 'test', ' test@gmail.com', '5000'),
(28, 'test', ' test@gmail.com', '5000'),
(29, 'test', ' test@gmail.com', '5000'),
(30, 'test', ' test@gmail.com', '5000'),
(31, 'test', ' test@gmail.com', '5000'),
(32, 'some', 'some@gmail.com', '40200'),
(33, 'prisha', 'prisha@gmail.com', '50000'),
(34, 'benat', 'banat@gmail', '7000'),
(35, 'benat', 'banat@gmail', '7000'),
(36, 'benat', 'banat@gmail', '7000'),
(37, 'benat', 'banat@gmail', '7000'),
(38, 'benat', 'banat@gmail', '7000'),
(39, 'benat', 'banat@gmail', '7000'),
(40, 'benat', 'banat@gmail', '7000'),
(41, 'benat', 'banat@gmail', '7000'),
(42, 'benat', 'banat@gmail', '7000'),
(43, 'benat', 'banat@gmail', '7000'),
(44, 'benat', 'banat@gmail', '7000'),
(45, 'benat', 'banat@gmail', '7000'),
(46, 'benat', 'banat@gmail', '7000'),
(47, 'benat', 'banat@gmail', '7000'),
(48, 'benat', 'banat@gmail', '7000'),
(49, 'nithish', 'nithish@gmail.com', '7000'),
(50, 'nithish', 'nithish@gmail.com', '7000'),
(51, 'nithish', 'nithish@gmail.com', '7000'),
(52, 'nithish', 'nithish@gmail.com', '7000'),
(53, 'nithish', 'nithish@gmail.com', '7000'),
(54, 'nithish', 'nithish@gmail.com', '7000'),
(55, 'nithish', 'nithish@gmail.com', '7000'),
(56, 'nithish', 'nithish@gmail.com', '7000'),
(57, 'nfeiuei', 'hfhoihe@gmail.com', '100'),
(58, 'nfeiuei', 'hfhoihe@gmail.com', '100'),
(59, 'nfeiuei', 'hfhoihe@gmail.com', '100'),
(60, 'nfeiuei', 'hfhoihe@gmail.com', '100'),
(61, 'cat', 'cat@gmail.com', '100'),
(62, 'cat', 'cat@gmail.com', '100'),
(63, 'cat', 'cat@gmail.com', '100'),
(64, 'cat', 'cat@gmail.com', '100'),
(65, 'cat', 'cat@gmail.com', '100'),
(66, 'cat', 'cat@gmail.com', '100'),
(67, 'cat', 'cat@gmail.com', '100'),
(68, 'cat', 'cat@gmail.com', '100'),
(69, 'cat', 'cat@gmail.com', '100'),
(70, 'cat', 'cat@gmail.com', '100'),
(71, 'cat', 'cat@gmail.com', '100'),
(72, 'cat', 'cat@gmail.com', '100'),
(73, 'cat', 'cat@gmail.com', '100'),
(74, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(75, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(76, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(77, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(78, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(79, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(80, 'Austin Pentester', 'austinpentester@gmail.com', '52000'),
(81, 'Austin Pentester', 'austinpentester@gmail.com', '55555'),
(82, 'Austin Pentester', 'austinpentester@gmail.com', '555555'),
(83, 'Austin Pentester', 'austinpentester@gmail.com', '888888'),
(84, 'Austin Pentester', 'austinpentester@gmail.com', '8888888'),
(85, 'Austin Pentester', 'austinpentester@gmail.com', '5455555'),
(86, 'bavin', 'bavin@gmail.com', '888888'),
(87, 'Austin Pentester', 'austinpentester@gmail.com', '555'),
(88, 'Austin Pentester', 'austinpentester@gmail.com', '555'),
(89, 'Austin Pentester', 'austinpentester@gmail.com', '555'),
(90, 'Austin Pentester', 'austinpentester@gmail.com', '2500'),
(91, 'Austin Pentester', 'austinpentester@gmail.com', '85555'),
(92, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(93, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(94, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(95, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(96, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(97, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(98, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(99, 'Austin Pentester', 'nixen@gmail.com', '77777'),
(100, 'Austin Pentester', 'rhehreh@gmail.com', '797964'),
(101, 'Austin Pentester', 'arun@gmail.com', '1000'),
(102, 'Austin Pentester', 'arun@gmail.com', '1000'),
(103, 'Austin Pentester', 'arun@gmail.com', '1000'),
(104, 'Austin Pentester', 'arun@gmail.com', '1000'),
(105, 'Austin Pentester', 'austinpentester@gmail.com', '8000'),
(106, 'austin', 'austin@gmail.com', '1000'),
(107, 'austin', 'austin@gmail.com', '1000'),
(108, 'austin', 'austin@gmail.com', '1000'),
(109, 'Austin Pentester', 'dajemo4225@d3ff.com', '8888'),
(110, 'Austin Pentester', 'dajemo4225@d3ff.com', '8888'),
(111, 'Austin Pentester', 'dajemo4225@d3ff.com', '8888'),
(112, 'hacker', 'hacker@gmail.com', '1500'),
(113, 'austin', 'austinravi2003@gmail.com', '2500'),
(114, 'Austin', 'austinravi2003@gmail.com', '2500'),
(115, 'Austin', 'austinravi2003@gmail.com', '2500'),
(116, 'Austin', 'austinravi2003@gmail.com', '2500'),
(117, 'hackersomeone', 'hackersomeone612@gmail.com', '5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sesssion`
--
ALTER TABLE `sesssion`
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
-- AUTO_INCREMENT for table `sesssion`
--
ALTER TABLE `sesssion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
