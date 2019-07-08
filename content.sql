-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2019 at 09:15 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks_2019`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` longtext NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `img`, `description`) VALUES
(2, 'Content 199', 'http://localhost/lks_2019/public/assets/cewek-min.jpg', 'Cras ex nisl, gravida at lacinia eu, feugiat in tellus. Donec ut placerat est. Proin volutpat mattis elementum. Maecenas imperdiet nec magna vel posuere. Fusce arcu mi, rhoncus et tincidunt sit amet, pellentesque eleifend lorem. Praesent quis eros malesuada, tincidunt purus sed, efficitur risus. Pellentesque pulvinar finibus odio, in iaculis neque tempor vel. Nam auctor dui eu lacinia auctor. Nam sapien ex, dapibus at malesuada ac, venenatis non purus. Maecenas eu tortor condimentum lorem viverra consequat. Morbi tincidunt tellus a varius finibus. Aenean feugiat, mauris nec elementum aliquet, velit ex sollicitudin orci, sed porta quam purus sit amet lacus. Quisque eros leo, efficitur in lectus facilisis, ultrices interdum massa.\r\n\r\n'),
(7, 'Anzalla Dzikri Dhamara', 'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Testi'),
(9, 'Testing lala', 'https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
