-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2021 at 01:10 AM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nicecollection_admin_database`
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
  `eply_Nid_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`employe_id`, `emly_photo`, `emply_infor`, `emple_address`, `empole_name`, `employe_email`, `employe_mobile`, `joining_date`, `eply_id_no`, `eply_Nid_no`) VALUES
(1, 'uploads/0db99929ab.png', 'afsafa', 'fsadfaf', 'Ariful', 'a@gmail.com', '0190314728', '2021-09-06', 'fdsafdaf', 'dsafsdfsaf'),
(2, 'uploads/245fa8bf63.png', 'afsafa', 'fsadfaf', 'Ariful2', 'a@gmail.com', '123', '2021-09-11', 'NID Number', 'NID Number');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expance_head`
--

CREATE TABLE `tbl_expance_head` (
  `expnc_id` int(11) NOT NULL,
  `expance_name` varchar(100) NOT NULL,
  `expance_dtails` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_expance_head`
--

INSERT INTO `tbl_expance_head` (`expnc_id`, `expance_name`, `expance_dtails`) VALUES
(1, 'salary', ' nai'),
(3, 'house rent', 'bari bara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income_head`
--

CREATE TABLE `tbl_income_head` (
  `in_h_id` int(11) NOT NULL,
  `incom_name` varchar(100) NOT NULL,
  `incom_dtails` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_income_head`
--

INSERT INTO `tbl_income_head` (`in_h_id`, `incom_name`, `incom_dtails`) VALUES
(18, 'arif', 'ddsfr gtgert');

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
  `details` varchar(255) NOT NULL,
  `employe_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manage_expance`
--

INSERT INTO `tbl_manage_expance` (`id`, `date`, `expance_head`, `pay_method`, `amount`, `note`, `details`, `employe_id`) VALUES
(1, '2021-09-01', '1', 'Cash', 5000, '', '', 1),
(2, '2021-09-01', '1', 'Cash', 500, '', '', 2),
(3, '2021-09-15', '2', 'Cash', 500, '', '', 0),
(4, '2021-09-15', '3', 'Cash', 1000, '', '', 0);

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
(1, '2021-09-13', '16', 1000, 'Cash', 'ghjghj', 'hjghjj'),
(2, '2021-09-14', '16', 12313, 'Mobile Banking', '12312', '1232'),
(3, '2021-09-16', '18', 10, 'Mobile Banking', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `cmr_p_id` varchar(11) NOT NULL,
  `transtion_id` varchar(100) NOT NULL,
  `ctn_no` varchar(100) NOT NULL,
  `total_taka` varchar(11) NOT NULL,
  `ctn_qty` varchar(100) NOT NULL,
  `delvry_we` varchar(100) NOT NULL,
  `taka_par_kg` varchar(100) NOT NULL,
  `cash_recevd` varchar(11) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `paymnt_meth` varchar(100) NOT NULL,
  `current_due` varchar(11) NOT NULL,
  `note` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `goods_name` varchar(255) NOT NULL,
  `delvry_ctn` varchar(100) NOT NULL,
  `total_g_w` varchar(100) NOT NULL,
  `shipping_mark` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL,
  `shipment_type` varchar(100) NOT NULL,
  `remaks` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `cmr_p_id`, `transtion_id`, `ctn_no`, `total_taka`, `ctn_qty`, `delvry_we`, `taka_par_kg`, `cash_recevd`, `payment_id`, `paymnt_meth`, `current_due`, `note`, `date`, `goods_name`, `delvry_ctn`, `total_g_w`, `shipping_mark`, `status`, `shipment_type`, `remaks`) VALUES
(1, '1', '2021171793', '10', '40000', '10', '40', '1000', '1100', '5427', 'Mobile Banking', '38900', '', '2021-10-17', 'computer/admin', '10', '40', 'dhakka', '1', 'By Air', ''),
(2, '1', '2021179881', '20', '400', '20', '', '20', '0', '5370', '', '0', '', '2021-10-17', '	computer', '', '20', 'dhaka/china', '0', 'By Air', ''),
(3, '1', '2021177042', '10', '35600', '10', '1000', '1000', '1000', '5986', 'Bank', '34600', '', '2021-10-17', 'computer', '100', '35.60', 'dhakka/ship', '0', 'By Ship', ''),
(4, '10', '$transiton_Id', '$ctn_no', '10', '$ctn_qty', '$delvry_we', '$taka_par_kg', '10', '$payment_Id', '$paymnt_meth', '10', '$note', '$today', '$goods_name', '$delvry_ctn', '$total_g_w', '$shipping_mark', '0', 'By Air', '$remaks'),
(5, '1', '2021175263', '100', '', '', '', '', '', '9088', '', '', '', '2021/10/17', 'computer new', '', '', 'dhakka0', '0', 'By Ship', ''),
(6, '1', '2021175699', '100', '', '121', '', '', '', '9265', '', '', '', '2021/10/17', 'computer', '', '', 'dhakka', '0', 'By Ship', ''),
(7, '1', '2021179366', '254', '', '', '', '', '', '5052', '', '', '', '2021/10/17', 'computer new', '', '', 'dhaka', '0', 'By Air', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pay_invoice`
--

CREATE TABLE `tbl_pay_invoice` (
  `id` int(11) NOT NULL,
  `cmr_p_id` varchar(11) NOT NULL,
  `transtion_id` varchar(100) NOT NULL,
  `total_taka` varchar(11) NOT NULL,
  `old_current_due` varchar(11) NOT NULL,
  `cash_recevd` varchar(11) NOT NULL,
  `new_due` varchar(11) NOT NULL,
  `paymnt_meth` varchar(100) NOT NULL,
  `note` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `payment_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pay_invoice`
--

INSERT INTO `tbl_pay_invoice` (`id`, `cmr_p_id`, `transtion_id`, `total_taka`, `old_current_due`, `cash_recevd`, `new_due`, `paymnt_meth`, `note`, `date`, `payment_id`) VALUES
(1, '1', '2021171793', '40000', '0', '1000', '39000', 'Mobile Banking', '0', '2021-10-17', '5427'),
(2, '1', '2021179881', '400', '0', '0', '0', '', '0', '2021-10-17', '5370'),
(3, '1', '2021177042', '35600', '0', '1000', '34600', 'Bank', '0', '2021-10-17', '5986'),
(4, '1', '$transiton_Id', '0', '0', '0', '0', '$paymnt_meth', '0', '$today', '$payment_Id'),
(5, '1', '2021171756', '', '0', '', '', '', '0', '2021/10/17', '3429'),
(6, '1', '2021176998', '', '0', '', '', '', '0', '2021/10/17', '4101'),
(7, '1', '202117402', '', '0', '', '', '', '0', '2021/10/17', '3599'),
(8, '1', '2021175263', '', '0', '', '', '', '0', '2021/10/17', '9088'),
(9, '1', '2021175699', '', '0', '', '', '', '0', '2021/10/17', '9265'),
(10, '1', '2021179366', '', '0', '', '', '', '0', '2021/10/17', '5052');

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

--
-- Dumping data for table `tbl_transation_form`
--

INSERT INTO `tbl_transation_form` (`id`, `cmr_p_id`, `transiton_id`, `ctn_no`, `shipping_mark`, `goods_name`, `ctn_qty`, `delvry_ctn`, `total_g_w`, `delvry_we`, `taka_par_kg`, `remaks`, `pament_date`) VALUES
(1, '1', '2021171793', '10', 'dhakka', 'computer/admin', '10', '10', '40', '40', '1000', '', '2021-10-17'),
(2, '1', '2021179881', '20', 'dhaka/china', '	computer', '20', '', '20', '', '20', '', '2021-10-17'),
(3, '1', '2021177042', '10', 'dhakka/ship', 'computer', '10', '100', '35.60', '1000', '1000', '', '2021-10-17'),
(4, '1', '2021171290', '10', 'dhakka/china new', 'computer new', '10', '', '40', '', '10', '', '2021-10-17'),
(5, '1', '2021177219', '10', 'dhakka', 'computer/china', '', '', '', '', '', '', '2021-10-17'),
(6, '1', '2021178675', '100', 'dhakka', 'computer/chana', '', '', '', '', '', '', '2021-10-17'),
(7, '1', '2021174433', '10', 'dhakka', 'computer', '10', '', '40', '', '1000', '', '2021-10-17'),
(8, '1', '2021175013', '10', 'dhakka', 'computer', '10', '', '10', '', '1000', '', '2021-10-17'),
(9, '1', '2021174504', '100', 'dhakka', 'coputeraasdfas', '10', '', '40', '', '', '', '2021-10-17'),
(10, '1', '2021175129', '10', '', '', '', '', '', '', '', '', '2021-10-17'),
(11, '1', '$transiton_Id', '$ctn_no', '$shipping_mark', '$goods_name', '$ctn_qty', '$delvry_ctn', '$total_g_w', '$delvry_we', '$taka_par_kg', '$remaks', '2021-10-10'),
(12, '1', '2021171756', '100', 'dhaka', 'coputeraasdfas', '121', '', '', '', '', '', '2021-10-17'),
(13, '1', '2021176998', '100', '', '', '', '', '', '', '', '', '2021-10-17'),
(14, '1', '202117402', '10', 'dhakka', 'computer', '', '', '', '', '', '', '2021-10-17'),
(15, '1', '2021175263', '100', 'dhakka0', 'computer new', '', '', '', '', '', '', '2021-10-17'),
(16, '1', '2021175699', '100', 'dhakka', 'computer', '121', '', '', '', '', '', '2021-10-17'),
(17, '1', '2021179366', '254', 'dhaka', 'computer new', '', '', '', '', '', '', '2021-10-17');

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
(2, 'superadmin', 'a@gmail.com', '019031477258', '123', 'Dhaka', '0', 'dhaka'),
(3, 'ariful', 'a@gmail.com', '0190314729', '123', 'Dhaka', '1', 'dhaka'),
(4, 'niceoffice', 'info@nicecollection', '', 'Nice123', '', '0', ''),
(5, 'nadim', 'nicecgtc@163.com', '018814128714', 'Nadim123', 'China office', '', ''),
(6, 'Titu', 'mdtitu777777@gmail.com', '01776277777', '', 'hazipara rampura', '', ''),
(7, '', '', '', '', '', '', ''),
(8, 'Rabin vai', '', '01711486479', '', 'Gulistan', '', ''),
(9, 'Al ', '', '', '', '', '', ''),
(10, 'Al Mamun Vai', '', '01716161984', '', 'Rampura', '', ''),
(11, 'Afroz vai', '', '01711986389', '', 'Platoon', '', ''),
(12, 'Arshad Vai', '', '01998080545', '', 'hazipara rampura', '', ''),
(13, 'Mehedi  Vai', '', '01718680735', '', 'Platoon', '', ''),
(14, 'Rafee Vai', '', '01922283894', '', 'Mirpur', '', ''),
(15, 'Sami vi', '', '', '', '', '', '');

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
  MODIFY `employe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_expance_head`
--
ALTER TABLE `tbl_expance_head`
  MODIFY `expnc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_income_head`
--
ALTER TABLE `tbl_income_head`
  MODIFY `in_h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_manage_expance`
--
ALTER TABLE `tbl_manage_expance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_manage_income`
--
ALTER TABLE `tbl_manage_income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pay_invoice`
--
ALTER TABLE `tbl_pay_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_transation_form`
--
ALTER TABLE `tbl_transation_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user_admin`
--
ALTER TABLE `tbl_user_admin`
  MODIFY `ad_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
