-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 09:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `cmnt_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` text NOT NULL,
  `replay_comments` text NOT NULL,
  `coment_date` varchar(100) NOT NULL,
  `replay_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`cmnt_id`, `full_name`, `email`, `comments`, `replay_comments`, `coment_date`, `replay_date`) VALUES
(3, 'ariful islam', 'ariful0027@gmail.com', 's the foot immobilised following surgery?\nThe foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.', 'abcsd thank you for comment', '', ''),
(4, 'ariful islam', 'a@gmail.com', 's the foot immobilised following surgery? The foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.', 's the foot immobilised following surgery? The foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.\ns the foot immobilised following surgery? The foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.', '', ''),
(5, 'ariful islam', 'dfsdf', 'dfsadf', 's the foot immobilised following surgery? The foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.', ' 18-October -2021,  7:15 pm', ''),
(6, 'ariful islam ', '', 'ariful islam\n\ns the foot immobilised following surgery? The foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.', 's the foot immobilised following surgery? The foot is not put in a cast or immobilised following hallux surgery. The big toe also remains passively flexible.', ' 18-October -2021,  7:37 pm', ' 18-October -2021,  7:40 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`cmnt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `cmnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
