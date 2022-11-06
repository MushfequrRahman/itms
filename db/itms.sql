-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 04:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itms`
--

-- --------------------------------------------------------

--
-- Table structure for table `antivirus`
--

CREATE TABLE `antivirus` (
  `avid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antivirus`
--

INSERT INTO `antivirus` (`avid`, `status`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `deptid` int(11) NOT NULL,
  `departmentname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`deptid`, `departmentname`) VALUES
(1, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `desigid` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desigid`, `designation`) VALUES
(2, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `factoryid` varchar(50) NOT NULL,
  `factoryname` varchar(50) NOT NULL,
  `factory_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`factoryid`, `factoryname`, `factory_address`) VALUES
('AFL', 'Aboni Fashions Ltd.', '23-24, Tetuljhora, Hemayetpur, Savar, Dhaka-1340'),
('AKL', 'Aboni Knit Wear Ltd.', '169-171, Tetulzhora, Hemayetpur, Savar, Dhaka'),
('ATL', 'Aboni Textiles Ltd.', '169-171, Tetulzhora, Hemayetpur, Savar, Dhaka'),
('BADL', 'Babylon Agro & Dairy Ltd.', 'Uttara, Dhaka'),
('BASL', 'Babylon Agri Science Ltd.', 'Uttara, Dhaka'),
('BBSL', 'Babylon Buying Services Ltd.', 'Uttara, Dhaka'),
('BCL', 'Babylon Casualwear Ltd.', '23-24, Tetulzhora, Hemayetpur, Savar, Dhaka'),
('BG', 'Babylon Group', '2-B/1, Darus Salam Road, Mirpur, Dhaka'),
('BGL', 'Babylon Garments Ltd', '2-B/1, Darus Salam Road, Mirpur, Dhaka-1216'),
('BLL', 'Babylon Logistics Ltd.', 'Holding # 30/1, 2-B/1, Darus Salam Road, Mirpur, Dhaka-1216'),
('BMV', 'Babylon Marine Venture', '2-B/1, Darus Salam Road, Mirpur, Dhaka-1216'),
('BPL', 'Babylon Printers Ltd.', 'Horindhora, Hemayetpur, Savar, Dhaka'),
('BRL', 'Babylon Resources Ltd.', 'Lalmatia, Mohammadpur, Dhaka'),
('BTL', 'Babylon Trims Ltd.', '69, Kandi Bailarpur, Horindhora, Hemayetpur, Savar, Dhaka'),
('BWL', 'Babylon Washing Ltd.', '169-171, Tetulzhora, Hemayetpur, Savar, Dhaka'),
('HO', 'HO', 'Mirpur'),
('JEL', 'Juniper Embroideries Ltd.', 'Horindhora, Hemayetpur, Savar, Dhaka'),
('NTL', 'Newgen Technology Ltd.', 'Lalmatia, Mohammadpur, Dhaka'),
('SE', 'Sabuj Enterprise', 'Hemayetpur, Savar, Dhaka'),
('Softy', 'Babylon Products', '242-243, South Shampur, Tetulzhora, Hemayetpur, Savar, Dhaka'),
('TNZ', 'Babylon Outfit Ltd. (Trendz)', 'Hemayetpur, Savar, Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `internet`
--

CREATE TABLE `internet` (
  `iid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internet`
--

INSERT INTO `internet` (`iid`, `status`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `product_assign_insert`
--

CREATE TABLE `product_assign_insert` (
  `paiid` int(11) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `adate` date NOT NULL,
  `rdate` date NOT NULL,
  `astatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_capop_insert`
--

CREATE TABLE `product_capop_insert` (
  `pcoid` int(11) NOT NULL,
  `pcapop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_capop_insert`
--

INSERT INTO `product_capop_insert` (`pcoid`, `pcapop`) VALUES
(1, 'Capex'),
(2, 'Opex');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_insert`
--

CREATE TABLE `product_category_insert` (
  `pccode` varchar(50) NOT NULL,
  `pcname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category_insert`
--

INSERT INTO `product_category_insert` (`pccode`, `pcname`) VALUES
('LPT', 'Laptop'),
('Mouse', 'Mouse'),
('Pri', 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `product_details_insert`
--

CREATE TABLE `product_details_insert` (
  `pdiid` int(11) NOT NULL,
  `pccode` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `hdd` varchar(50) NOT NULL,
  `monitor` varchar(50) NOT NULL,
  `ups` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `mb` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `os` varchar(50) NOT NULL,
  `ms` varchar(50) NOT NULL,
  `avid` varchar(50) NOT NULL,
  `iid` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `pqty` float NOT NULL,
  `puomid` int(11) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `pcoid` int(11) NOT NULL,
  `warranty` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `adate` date NOT NULL,
  `rdate` date NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pastatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details_insert`
--

INSERT INTO `product_details_insert` (`pdiid`, `pccode`, `pcode`, `brand`, `hdd`, `monitor`, `ups`, `ip`, `mb`, `sn`, `processor`, `ram`, `os`, `ms`, `avid`, `iid`, `description`, `price`, `pqty`, `puomid`, `vendor`, `pcoid`, `warranty`, `pdate`, `adate`, `rdate`, `userid`, `pastatus`) VALUES
(18, 'LPT', 'LPT-1', 'aa', 'as', 'ww', 'ee', '111.12', 'ss', '11-22', 'aaass', '2', 'dfdf', 'am', '2', '1', 'ccc', '20000', 1, 1, 'qq', 1, 365, '2021-08-01', '0000-00-00', '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_history_insert`
--

CREATE TABLE `product_history_insert` (
  `phiid` int(11) NOT NULL,
  `pccode` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `factoryid` varchar(50) NOT NULL,
  `phstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_history_insert`
--

INSERT INTO `product_history_insert` (`phiid`, `pccode`, `pcode`, `factoryid`, `phstatus`) VALUES
(18, 'LPT', 'LPT-1', 'AFL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_uom_insert`
--

CREATE TABLE `product_uom_insert` (
  `puomid` int(11) NOT NULL,
  `puom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_uom_insert`
--

INSERT INTO `product_uom_insert` (`puomid`, `puom`) VALUES
(1, 'Pcs');

-- --------------------------------------------------------

--
-- Table structure for table `ruser`
--

CREATE TABLE `ruser` (
  `ruserid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruser`
--

INSERT INTO `ruser` (`ruserid`) VALUES
('HO926');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `factoryid` varchar(50) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `designationid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `ruserid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ustatus` varchar(100) NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`factoryid`, `departmentid`, `designationid`, `name`, `email`, `mobile`, `user_type`, `userid`, `ruserid`, `password`, `image`, `ustatus`, `indate`) VALUES
('HO', 1, 2, 'MD Mushfequr Rahman', '1@email.com', '000000', '1', 'HO926', 'HO926', '123456', 'babylon7.jpg', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userstatus`
--

CREATE TABLE `userstatus` (
  `userstatusid` int(11) NOT NULL,
  `userstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userstatus`
--

INSERT INTO `userstatus` (`userstatusid`, `userstatus`) VALUES
(1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `usertypeid` int(11) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`usertypeid`, `usertype`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antivirus`
--
ALTER TABLE `antivirus`
  ADD PRIMARY KEY (`avid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`deptid`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`desigid`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
  ADD PRIMARY KEY (`factoryid`) USING BTREE;

--
-- Indexes for table `internet`
--
ALTER TABLE `internet`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `product_assign_insert`
--
ALTER TABLE `product_assign_insert`
  ADD PRIMARY KEY (`paiid`);

--
-- Indexes for table `product_capop_insert`
--
ALTER TABLE `product_capop_insert`
  ADD PRIMARY KEY (`pcoid`);

--
-- Indexes for table `product_category_insert`
--
ALTER TABLE `product_category_insert`
  ADD PRIMARY KEY (`pccode`) USING BTREE;

--
-- Indexes for table `product_details_insert`
--
ALTER TABLE `product_details_insert`
  ADD PRIMARY KEY (`pdiid`);

--
-- Indexes for table `product_history_insert`
--
ALTER TABLE `product_history_insert`
  ADD PRIMARY KEY (`phiid`);

--
-- Indexes for table `product_uom_insert`
--
ALTER TABLE `product_uom_insert`
  ADD PRIMARY KEY (`puomid`);

--
-- Indexes for table `ruser`
--
ALTER TABLE `ruser`
  ADD PRIMARY KEY (`ruserid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `userstatus`
--
ALTER TABLE `userstatus`
  ADD PRIMARY KEY (`userstatusid`) USING BTREE;

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`usertypeid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antivirus`
--
ALTER TABLE `antivirus`
  MODIFY `avid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desigid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `internet`
--
ALTER TABLE `internet`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_assign_insert`
--
ALTER TABLE `product_assign_insert`
  MODIFY `paiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_capop_insert`
--
ALTER TABLE `product_capop_insert`
  MODIFY `pcoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_details_insert`
--
ALTER TABLE `product_details_insert`
  MODIFY `pdiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_history_insert`
--
ALTER TABLE `product_history_insert`
  MODIFY `phiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_uom_insert`
--
ALTER TABLE `product_uom_insert`
  MODIFY `puomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userstatus`
--
ALTER TABLE `userstatus`
  MODIFY `userstatusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `usertypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
