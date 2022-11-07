-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:41 AM
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
-- Table structure for table `mpr_insert`
--

CREATE TABLE `mpr_insert` (
  `smprid` varchar(50) NOT NULL,
  `simprid` varchar(50) NOT NULL,
  `suserid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `cuserid` varchar(50) NOT NULL,
  `item` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `uom` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `mdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert`
--

INSERT INTO `mpr_insert` (`smprid`, `simprid`, `suserid`, `mprid`, `cuserid`, `item`, `qty`, `uom`, `description`, `price`, `mdate`) VALUES
('20221106123324', '202211061233240', 'HO926', '1', 'HO690', 'LPT', 4, 1, '4 GB RAM', 200000, '2022-11-06'),
('20221106123324', '202211061233241', 'HO926', '1', 'HO690', 'Mouse', 3, 1, 'Wireless', 1000, '2022-11-06'),
('20221106165327', '202211061653270', 'HO926', '2', 'HO926', 'LPT', 2, 1, '8 GB RAM', 100000, '2022-11-06'),
('20221106165327', '202211061653271', 'HO926', '2', 'HO926', 'Mouse', 2, 1, 'Wireless', 1500, '2022-11-06'),
('20221106165327', '202211061653272', 'HO926', '2', 'HO926', 'Pri', 3, 1, 'HP', 50000, '2022-11-06'),
('20221107151432', '202211071514320', 'HO926', '3', 'HO690', 'LPT', 3, 1, '16 GB RAM', 120000, '2022-11-07'),
('20221107151432', '202211071514321', 'HO926', '3', 'HO690', 'Mouse', 5, 1, 'Wireless', 2000, '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `mpr_insert_id`
--

CREATE TABLE `mpr_insert_id` (
  `smprid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert_id`
--

INSERT INTO `mpr_insert_id` (`smprid`) VALUES
('20221106123324'),
('20221106165327'),
('20221107151432');

-- --------------------------------------------------------

--
-- Table structure for table `po_insert`
--

CREATE TABLE `po_insert` (
  `spoid` varchar(50) NOT NULL,
  `sipoid` varchar(50) NOT NULL,
  `suserid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `po` varchar(50) NOT NULL,
  `simprid` varchar(50) NOT NULL,
  `pqty` float NOT NULL,
  `uom` int(11) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pprice` float NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `pdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_insert`
--

INSERT INTO `po_insert` (`spoid`, `sipoid`, `suserid`, `mprid`, `po`, `simprid`, `pqty`, `uom`, `pdescription`, `pprice`, `supplier`, `pdate`) VALUES
('20221107110942', '202211071109420', 'HO926', '1', '1', '202211061233240', 4, 1, '4 GB RAM', 200000, 'Global', '2022-11-07'),
('20221107110942', '202211071109421', 'HO926', '1', '1', '202211061233241', 3, 1, 'Wireless', 1000, 'Global', '2022-11-07'),
('20221107115521', '202211071155210', 'HO926', '2', '2', '202211061653270', 1, 1, '8 GB RAM', 50000, 'Ryans', '2022-11-07'),
('20221107115521', '202211071155211', 'HO926', '2', '2', '202211061653271', 2, 1, 'Wireless', 1500, 'Ryans', '2022-11-07'),
('20221107135040', '202211071350400', 'HO926', '2', '3', '202211061653270', 1, 1, '8 GB RAM', 50000, 'Global', '2022-11-07'),
('20221107152717', '202211071527170', 'HO926', '3', '1122', '202211071514320', 3, 1, '16 GB', 120000, 'abc', '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `po_insert_id`
--

CREATE TABLE `po_insert_id` (
  `spoid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `po` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_insert_id`
--

INSERT INTO `po_insert_id` (`spoid`, `mprid`, `po`) VALUES
('20221107110942', '1', '1'),
('20221107115521', '2', '2'),
('20221107135040', '2', '3'),
('20221107152717', '3', '1122');

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
('HO690'),
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
('HO', 1, 2, 'Shahajalal Palash', '', '', '1', 'HO690', 'HO690', '123456', '', '1', '0000-00-00'),
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
-- Indexes for table `mpr_insert`
--
ALTER TABLE `mpr_insert`
  ADD PRIMARY KEY (`simprid`);

--
-- Indexes for table `mpr_insert_id`
--
ALTER TABLE `mpr_insert_id`
  ADD PRIMARY KEY (`smprid`);

--
-- Indexes for table `po_insert`
--
ALTER TABLE `po_insert`
  ADD PRIMARY KEY (`sipoid`) USING BTREE;

--
-- Indexes for table `po_insert_id`
--
ALTER TABLE `po_insert_id`
  ADD PRIMARY KEY (`spoid`) USING BTREE;

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
