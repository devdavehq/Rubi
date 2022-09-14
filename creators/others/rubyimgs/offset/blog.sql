-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 06:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `topics` varchar(150) NOT NULL,
  `category` varchar(50) NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `topics`, `category`, `article`) VALUES
(1, 'Application coding master class', 'Trainng', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(2, 'Who leaves APC', 'POLICTS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(3, 'Website design class', 'Trainng', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(4, 'PDP for ATIKU', 'POLICTS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(5, 'ui/ux design class', 'Trainng', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(6, 'Mavins record label', 'POLICTS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(7, 'Flutter class', 'Trainng', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(8, 'LB for Peter Obi for the youth', 'POLITICS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(9, 'React-js Master class', 'Trainng', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(10, 'Graphics Design master class', 'Trainng', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(11, 'Tinubu for APC', 'POLITICS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(13, 'YBNL record label', 'Entertainment', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(14, 'Mavins record label', 'Entertainment', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(15, 'DMW record label', 'Entertainment', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(16, 'TINUMBU DON DIE', 'POLITICS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(17, 'MR DAVID\'S PICNIC', 'Entertainment', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(18, 'THE RISE OF DUDU TWELVEO\'CLOCK', 'Entertainment', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(19, 'BODE LIFE STORY', 'Entertainment', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(20, 'Breaking News obi cubana don win election', 'POLITICS', ' example is a quick exercise to illustrate how the top-aligned navbar works.'),
(21, 'Iphone users are living fake life', 'Trainng', ' example is a summary to illustrate \r\nshairkiru life experience. '),
(22, 'Samsung is doing GIVEAWAY ', 'Trainng', 'Shey you no go check am'),
(23, 'Fashola for the win.', 'POLITICS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(24, 'Davido have reconcile with chioma', 'Trainng', 'Shey you no go check am for news'),
(25, 'Tinumbu and his followers no go make heaven SURE TIN.', 'POLITICS', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.'),
(26, 'Bode is an ignoramous ', 'classwork', ' example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
