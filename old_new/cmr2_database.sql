-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 12:24 PM
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
-- Database: `cmr2_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cmr_p_id` int(11) NOT NULL,
  `cmr_name` varchar(100) NOT NULL,
  `cmr_email` varchar(100) NOT NULL,
  `cmr_mobile` varchar(20) NOT NULL,
  `auth_mobile` varchar(20) NOT NULL,
  `auth_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `cmr_id` varchar(100) NOT NULL,
  `cmr_address` varchar(100) NOT NULL,
  `cmr_infor` varchar(300) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cmr_p_id`, `cmr_name`, `cmr_email`, `cmr_mobile`, `auth_mobile`, `auth_name`, `company_name`, `cmr_id`, `cmr_address`, `cmr_infor`, `reg_date`) VALUES
(1, 'arif', 'a@gmail.com', '0190314728', '', '', 'Webxpo', '1', 'Badda', '', '2021-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employe`
--

CREATE TABLE `tbl_employe` (
  `employe_id` int(11) NOT NULL,
  `emly_photo` varchar(300) NOT NULL,
  `emply_infor` varchar(255) NOT NULL,
  `emple_address` varchar(255) NOT NULL,
  `empole_name` varchar(200) NOT NULL,
  `employe_email` varchar(200) NOT NULL,
  `employe_mobile` varchar(50) NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `eply_id_no` varchar(100) NOT NULL,
  `eply_Nid_no` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`employe_id`, `emly_photo`, `emply_infor`, `emple_address`, `empole_name`, `employe_email`, `employe_mobile`, `joining_date`, `eply_id_no`, `eply_Nid_no`, `date`) VALUES
(1, 'uploads/0db99929ab.png', 'afsafa', 'fsadfaf', 'Ariful', 'a@gmail.com', '0190314728', '2021-09-06', 'fdsafdaf', 'dsafsdfsaf', '2021/09/05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expance_head`
--

CREATE TABLE `tbl_expance_head` (
  `expnc_id` int(11) NOT NULL,
  `expance_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income_head`
--

CREATE TABLE `tbl_income_head` (
  `in_h_id` int(11) NOT NULL,
  `incom_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_expance`
--

CREATE TABLE `tbl_manage_expance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `expance_head` varchar(255) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `note` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manage_expance`
--

INSERT INTO `tbl_manage_expance` (`id`, `date`, `expance_head`, `pay_method`, `amount`, `note`, `details`) VALUES
(2, '2021-08-30', '3', 'Mobile Banking', 1000, 'dfdf', 'fgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manage_income`
--

CREATE TABLE `tbl_manage_income` (
  `income_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `income_head` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manage_income`
--

INSERT INTO `tbl_manage_income` (`income_id`, `date`, `income_head`, `amount`, `pay_method`, `note`, `details`) VALUES
(1, '2021-08-30', '15', 1000, 'Cash', 'nai', 'nae');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `cmr_p_id` int(11) NOT NULL,
  `transtion_id` varchar(100) NOT NULL,
  `total_taka` int(11) NOT NULL,
  `cash_recevd` int(11) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `paymnt_meth` varchar(100) NOT NULL,
  `current_due` int(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `delvry_ctn` varchar(100) NOT NULL,
  `total_g_w` varchar(100) NOT NULL,
  `shipping_mark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_invoice`
--

CREATE TABLE `tbl_pay_invoice` (
  `id` int(11) NOT NULL,
  `cmr_p_id` int(11) NOT NULL,
  `transtion_id` varchar(100) NOT NULL,
  `total_taka` int(11) NOT NULL,
  `old_current_due` int(11) NOT NULL,
  `cash_recevd` int(11) NOT NULL,
  `new_due` int(11) NOT NULL,
  `paymnt_meth` varchar(100) NOT NULL,
  `note` int(255) NOT NULL,
  `date` date NOT NULL,
  `payment_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transation_form`
--

CREATE TABLE `tbl_transation_form` (
  `id` int(11) NOT NULL,
  `cmr_p_id` varchar(10) NOT NULL,
  `transiton_id` varchar(100) NOT NULL,
  `ctn_no` varchar(100) NOT NULL,
  `shipping_mark` varchar(100) NOT NULL,
  `goods_name` varchar(110) NOT NULL,
  `ctn_qty` varchar(11) NOT NULL,
  `delvry_ctn` varchar(11) NOT NULL,
  `total_g_w` varchar(11) NOT NULL,
  `delvry_we` varchar(11) NOT NULL,
  `taka_par_kg` varchar(110) NOT NULL,
  `remaks` varchar(255) NOT NULL,
  `pament_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_admin`
--

CREATE TABLE `tbl_user_admin` (
  `ad_user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `other_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_admin`
--

INSERT INTO `tbl_user_admin` (`ad_user_id`, `user_name`, `user_email`, `user_phone`, `password`, `address`, `user_role`, `other_info`) VALUES
(2, 'SuperAdmin', 'a@gmail.com', '019031477258', '123', 'Dhaka', 'Admin', 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cmr_p_id`);

--
-- Indexes for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  ADD PRIMARY KEY (`employe_id`);

--
-- Indexes for table `tbl_expance_head`
--
ALTER TABLE `tbl_expance_head`
  ADD PRIMARY KEY (`expnc_id`);

--
-- Indexes for table `tbl_income_head`
--
ALTER TABLE `tbl_income_head`
  ADD PRIMARY KEY (`in_h_id`);

--
-- Indexes for table `tbl_manage_expance`
--
ALTER TABLE `tbl_manage_expance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_manage_income`
--
ALTER TABLE `tbl_manage_income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pay_invoice`
--
ALTER TABLE `tbl_pay_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transation_form`
--
ALTER TABLE `tbl_transation_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  ADD PRIMARY KEY (`ad_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cmr_p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  MODIFY `employe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_expance_head`
--
ALTER TABLE `tbl_expance_head`
  MODIFY `expnc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_income_head`
--
ALTER TABLE `tbl_income_head`
  MODIFY `in_h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_manage_expance`
--
ALTER TABLE `tbl_manage_expance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_manage_income`
--
ALTER TABLE `tbl_manage_income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pay_invoice`
--
ALTER TABLE `tbl_pay_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transation_form`
--
ALTER TABLE `tbl_transation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  MODIFY `ad_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
