-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 10:06 AM
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
  `fid` varchar(50) NOT NULL,
  `mdeptid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mdesigid` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `qty` float NOT NULL,
  `uom` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `mdate` date NOT NULL,
  `mstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert`
--

INSERT INTO `mpr_insert` (`smprid`, `simprid`, `suserid`, `mprid`, `fid`, `mdeptid`, `name`, `mdesigid`, `item`, `model`, `type`, `qty`, `uom`, `description`, `price`, `remarks`, `uname`, `mdate`, `mstatus`) VALUES
('20221110155424', '202211101554240', 'HO926', '1', 'HO', 1, 'ABC', 2, 'LPT', '', 1, 5, 1, '4 GB RAM', 200000, '', 'A', '2022-11-10', 0),
('20221110155424', '202211101554241', 'HO926', '1', 'HO', 1, 'ABC', 2, 'Mouse', '', 1, 10, 1, 'Wireless', 2000, 'A4 Tech', 'B', '2022-11-10', 0),
('20221115113724', '202211151137240', 'HO926', '2', 'HO', 1, 'Helal', 2, 'LPT', 'Lenevo', 1, 5, 1, 'Core i5', 55000, '4 GB Ram', 'Helal', '2022-11-15', 0),
('20221115113724', '202211151137241', 'HO926', '2', 'HO', 1, 'Helal', 2, 'Mouse', 'A4 Tech', 1, 10, 1, 'Wireless', 750, 'Bluetooth', 'AB', '2022-11-15', 0);

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
('20221110155424'),
('20221115113724');

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
  `premarks` varchar(500) NOT NULL,
  `pprice` float NOT NULL,
  `supplier` varchar(200) NOT NULL,
  `pdate` date NOT NULL,
  `pstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_insert`
--

INSERT INTO `po_insert` (`spoid`, `sipoid`, `suserid`, `mprid`, `po`, `simprid`, `pqty`, `premarks`, `pprice`, `supplier`, `pdate`, `pstatus`) VALUES
('20221113104848', '202211131048480', 'HO926', '1', '1', '202211101554240', 2, '', 7000, 'Global', '2022-11-10', 0),
('20221113104848', '202211131048481', 'HO926', '1', '', '202211101554241', 0, '', 0, '', '2022-11-13', 0),
('20221113105317', '202211131053170', 'HO926', '1', '2', '202211101554240', 1, '', 3000, 'Ryans', '2022-11-12', 0),
('20221113105317', '202211131053171', 'HO926', '1', '', '202211101554241', 0, '', 0, '', '2022-11-13', 0),
('20221113125857', '202211131258570', 'HO926', '1', '3', '202211101554240', 2, 'Complete', 10000, 'Global', '2022-11-13', 0),
('20221113125857', '202211131258571', 'HO926', '1', '', '202211101554241', 0, '', 0, '', '2022-11-13', 0),
('20221113130509', '202211131305090', 'HO926', '1', '', '202211101554240', 0, '', 0, '', '2022-11-13', 0),
('20221113130509', '202211131305091', 'HO926', '1', '4', '202211101554241', 1, 'Remaining 9 Pcs', 200, 'Smartech', '2022-11-13', 0),
('20221115123801', '202211151238010', 'HO926', '1', '', '202211101554240', 0, '', 0, '', '2022-11-15', 0),
('20221115123801', '202211151238011', 'HO926', '1', '5', '202211101554241', 3, 'Remaining', 2400, 'Global', '2022-11-15', 0),
('20221115135146', '202211151351460', 'HO926', '2', '6', '202211151137240', 4, '1st', 50000, 'Global', '2022-11-15', 0),
('20221115135146', '202211151351461', 'HO926', '2', '6', '202211151137241', 5, '2nd', 700, 'Global', '2022-11-15', 0);

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
('20221113104848', '1', '1'),
('20221113105317', '1', '2'),
('20221113125857', '1', '3'),
('20221113130509', '1', ''),
('20221115123801', '1', ''),
('20221115134249', '2', '6'),
('20221115135146', '2', '6');

-- --------------------------------------------------------

--
-- Stand-in structure for view `po_insert_view`
-- (See below for the actual view)
--
CREATE TABLE `po_insert_view` (
`spoid` varchar(50)
,`sipoid` varchar(50)
,`suserid` varchar(50)
,`mprid` varchar(50)
,`po` varchar(50)
,`simprid` varchar(50)
,`pqty` float
,`premarks` varchar(500)
,`pprice` float
,`mpprice` double
,`supplier` varchar(200)
,`pdate` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `po_qty_remaining`
-- (See below for the actual view)
--
CREATE TABLE `po_qty_remaining` (
`mprid` varchar(50)
,`fid` varchar(50)
,`pcname` varchar(50)
,`model` varchar(50)
,`simprid` varchar(50)
,`pcapop` varchar(50)
,`item` varchar(50)
,`qty` float
,`puom` varchar(10)
,`prqty` double
,`tpprice` double
);

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
-- Table structure for table `receive_insert`
--

CREATE TABLE `receive_insert` (
  `grnid` varchar(50) NOT NULL,
  `grnrid` varchar(50) NOT NULL,
  `suserid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `simprid` varchar(50) NOT NULL,
  `sipoid` varchar(50) NOT NULL,
  `po` varchar(50) NOT NULL,
  `grn` varchar(50) NOT NULL,
  `rqty` float NOT NULL,
  `rremarks` varchar(500) NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive_insert`
--

INSERT INTO `receive_insert` (`grnid`, `grnrid`, `suserid`, `mprid`, `simprid`, `sipoid`, `po`, `grn`, `rqty`, `rremarks`, `rdate`) VALUES
('20221114094820', '202211140948200', 'HO926', '1', '202211101554240', '202211131048480', '1', '1', 5, 'All', '2022-11-14'),
('20221114094820', '202211140948201', 'HO926', '1', '202211101554241', '202211131048481', '', '', 0, '', '2022-11-14'),
('20221116143821', '202211161438210', 'HO926', '2', '202211151137240', '202211151351460', '10', '10', 1, '', '2022-11-16'),
('20221116143821', '202211161438211', 'HO926', '2', '202211151137241', '202211151351461', '', '', 0, '', '2022-11-16'),
('20221116143856', '202211161438560', 'HO926', '2', '202211151137240', '202211151351460', '11', '11', 2, '', '2022-11-16'),
('20221116143856', '202211161438561', 'HO926', '2', '202211151137241', '202211151351461', '', '', 0, '', '2022-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `receive_insert_id`
--

CREATE TABLE `receive_insert_id` (
  `grnid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `po` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive_insert_id`
--

INSERT INTO `receive_insert_id` (`grnid`, `mprid`, `po`) VALUES
('20221114094820', '1', '1'),
('20221116143821', '2', '10'),
('20221116143856', '2', '11');

-- --------------------------------------------------------

--
-- Stand-in structure for view `receive_qty_remaining`
-- (See below for the actual view)
--
CREATE TABLE `receive_qty_remaining` (
`simprid` varchar(50)
,`rqty` double
);

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

-- --------------------------------------------------------

--
-- Structure for view `po_insert_view`
--
DROP TABLE IF EXISTS `po_insert_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `po_insert_view`  AS  select `po_insert`.`spoid` AS `spoid`,`po_insert`.`sipoid` AS `sipoid`,`po_insert`.`suserid` AS `suserid`,`po_insert`.`mprid` AS `mprid`,`po_insert`.`po` AS `po`,`po_insert`.`simprid` AS `simprid`,`po_insert`.`pqty` AS `pqty`,`po_insert`.`premarks` AS `premarks`,`po_insert`.`pprice` AS `pprice`,`po_insert`.`pqty` * `po_insert`.`pprice` AS `mpprice`,`po_insert`.`supplier` AS `supplier`,`po_insert`.`pdate` AS `pdate` from `po_insert` ;

-- --------------------------------------------------------

--
-- Structure for view `po_qty_remaining`
--
DROP TABLE IF EXISTS `po_qty_remaining`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `po_qty_remaining`  AS  select `mpr_insert`.`mprid` AS `mprid`,`mpr_insert`.`fid` AS `fid`,`product_category_insert`.`pcname` AS `pcname`,`mpr_insert`.`model` AS `model`,`po_insert_view`.`simprid` AS `simprid`,`product_capop_insert`.`pcapop` AS `pcapop`,`mpr_insert`.`item` AS `item`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,sum(`po_insert_view`.`pqty`) AS `prqty`,sum(`po_insert_view`.`mpprice`) AS `tpprice` from ((((((`po_insert_view` join `mpr_insert` on(`mpr_insert`.`simprid` = `po_insert_view`.`simprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `mpr_insert`.`item`)) join `product_capop_insert` on(`product_capop_insert`.`pcoid` = `mpr_insert`.`type`)) join `department` on(`department`.`deptid` = `mpr_insert`.`mdeptid`)) join `designation` on(`designation`.`desigid` = `mpr_insert`.`mdesigid`)) group by `po_insert_view`.`simprid` ;

-- --------------------------------------------------------

--
-- Structure for view `receive_qty_remaining`
--
DROP TABLE IF EXISTS `receive_qty_remaining`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `receive_qty_remaining`  AS  select `receive_insert`.`simprid` AS `simprid`,sum(`receive_insert`.`rqty`) AS `rqty` from `receive_insert` group by `receive_insert`.`simprid` ;

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
-- Indexes for table `receive_insert`
--
ALTER TABLE `receive_insert`
  ADD PRIMARY KEY (`grnrid`);

--
-- Indexes for table `receive_insert_id`
--
ALTER TABLE `receive_insert_id`
  ADD PRIMARY KEY (`grnid`);

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
