-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 10:52 AM
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
(1, 'IT'),
(2, 'CUTTING'),
(3, 'Production'),
(4, 'RND'),
(5, 'HRD'),
(6, 'QAD'),
(7, 'PLANNING');

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
(2, 'Manager'),
(3, 'DGM'),
(4, 'SENIOR OFFICER'),
(5, 'DEPUTY MANAGER'),
(6, 'EXECUTIVE'),
(7, 'SENIOR MANAGER'),
(8, 'SENIOR SUPERVISOR');

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
-- Table structure for table `item_insert`
--

CREATE TABLE `item_insert` (
  `itemcode` varchar(50) NOT NULL,
  `item` varchar(100) NOT NULL,
  `pcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_insert`
--

INSERT INTO `item_insert` (`itemcode`, `item`, `pcode`) VALUES
('20240111124928', 'Acer 1080', 'LPT'),
('20240111124947', 'Acer Travel mate P214', 'LPT'),
('20240111124959', 'Acer Travel matep2', 'LPT'),
('20240111125009', 'Asus ExpertBook B1400G', 'LPT'),
('20240111125019', 'ASUS EXPERTBOOK B1500C', 'LPT'),
('20240111125029', 'Asus ExpertBook P2451F', 'LPT'),
('20240111125049', 'ASUS Zenbook 1000', 'LPT'),
('20240111125059', 'Asus ZenBook 14 UX425JA', 'LPT'),
('20240111125108', 'Asus ZenBook UX425JA-1035G1', 'LPT'),
('20240111125117', 'Clone PC', 'DKTP'),
('20240111125127', 'Fortinet FG100EF', 'FW'),
('20240111125135', 'HP EliteBook ', 'LPT'),
('20240111125146', 'HP Probook 440', 'LPT'),
('20240111125155', 'HP ProBook 440 G3', 'LPT'),
('20240111125206', 'HP ProBook 440 G4', 'LPT'),
('20240111125215', 'HP ProBook 450 G4', 'LPT'),
('20240111125223', 'HP ProBook 450 G5 ', 'LPT'),
('20240111125231', 'HP Probook 450 G5 7th Gen', 'LPT'),
('20240111125241', 'Hp probook 450G4', 'LPT'),
('20240111125250', 'Lenovo Ideapad 330', 'LPT');

-- --------------------------------------------------------

--
-- Table structure for table `item_release_insert`
--

CREATE TABLE `item_release_insert` (
  `iriid` varchar(50) NOT NULL,
  `pacode` varchar(50) NOT NULL,
  `irid` varchar(50) NOT NULL,
  `dremarks` varchar(100) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_release_insert`
--

INSERT INTO `item_release_insert` (`iriid`, `pacode`, `irid`, `dremarks`, `ddate`) VALUES
('20231204131639', 'BGL-AP-1', '20230823173156', '', '2023-12-04'),
('20231204152238', 'BGL-LPT-1', '20230823173202', '', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `item_release_type_insert`
--

CREATE TABLE `item_release_type_insert` (
  `irid` varchar(50) NOT NULL,
  `releasetype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_release_type_insert`
--

INSERT INTO `item_release_type_insert` (`irid`, `releasetype`) VALUES
('20230823173156', 'Dispose'),
('20230823173202', 'Missing');

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
  `mpcode` varchar(50) NOT NULL,
  `model` varchar(300) NOT NULL,
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

INSERT INTO `mpr_insert` (`smprid`, `simprid`, `suserid`, `mprid`, `fid`, `mdeptid`, `name`, `mdesigid`, `mpcode`, `model`, `qty`, `uom`, `description`, `price`, `remarks`, `uname`, `mdate`, `mstatus`) VALUES
('20240111154038', '202401111540380', 'HO926', 'BGL1', 'BGL', 1, 'AAA', 2, 'LPT', '20240111124928', 1, 1, '', 55000, '', '', '2024-01-11', 0),
('20240111154038', '202401111540381', 'HO926', 'BGL1', 'BGL', 1, 'AAA', 2, 'LPT', '20240111125135', 1, 1, '', 52000, '', '', '2024-01-11', 0),
('20240111154038', '202401111540382', 'HO926', 'BGL1', 'BGL', 1, 'AAA', 2, 'DKTP', '20240111125117', 1, 1, '', 50000, '', '', '2024-01-11', 0);

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
('20240111154038');

-- --------------------------------------------------------

--
-- Stand-in structure for view `mpr_wise_receive_list_view`
-- (See below for the actual view)
--
CREATE TABLE `mpr_wise_receive_list_view` (
`mprid` varchar(50)
,`fid` varchar(50)
,`pccode` varchar(50)
,`item` varchar(100)
,`pcname` varchar(50)
,`model` varchar(300)
,`po` varchar(50)
,`qty` float
,`puom` varchar(10)
,`price` float
,`remarks` varchar(500)
,`uname` varchar(50)
,`mdate` date
,`grn` varchar(50)
,`rqty` float
,`rdate` date
,`description` varchar(500)
,`simprid` varchar(50)
,`sipoid` varchar(50)
,`pcode` varchar(50)
,`pname` varchar(100)
);

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
('20240111154129', '202401111541290', 'HO926', 'BGL1', '1', '202401111540380', 1, '', 55000, '1', '2024-01-11', 0),
('20240111154129', '202401111541291', 'HO926', 'BGL1', '', '202401111540381', 0, '', 0, '', '2024-01-11', 0),
('20240111154129', '202401111541292', 'HO926', 'BGL1', '', '202401111540382', 0, '', 0, '', '2024-01-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `po_insert_id`
--

CREATE TABLE `po_insert_id` (
  `spoid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_insert_id`
--

INSERT INTO `po_insert_id` (`spoid`, `mprid`) VALUES
('20240111154129', 'BGL1');

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
,`pname` varchar(100)
,`model` varchar(300)
,`simprid` varchar(50)
,`pcode` varchar(50)
,`qty` float
,`puom` varchar(10)
,`prqty` double
,`tpprice` double
);

-- --------------------------------------------------------

--
-- Table structure for table `product_asset_code`
--

CREATE TABLE `product_asset_code` (
  `pacode` varchar(50) NOT NULL,
  `pafid` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `pcidnum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_asset_code`
--

INSERT INTO `product_asset_code` (`pacode`, `pafid`, `pcode`, `pcidnum`) VALUES
('BGL-DKTP-1', 'BGL', 'DKTP', 1),
('BGL-LPT-1', 'BGL', 'LPT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_assign_insert`
--

CREATE TABLE `product_assign_insert` (
  `paiid` varchar(50) NOT NULL,
  `pacode` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `adate` date NOT NULL,
  `rdate` date NOT NULL,
  `rremarks` varchar(100) NOT NULL,
  `astatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_assign_insert`
--

INSERT INTO `product_assign_insert` (`paiid`, `pacode`, `userid`, `adate`, `rdate`, `rremarks`, `astatus`) VALUES
('20240111155032', 'BGL-LPT-1', 'HO926', '2024-01-11', '2024-01-11', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_capop_insert`
--

CREATE TABLE `product_capop_insert` (
  `pcoid` int(11) NOT NULL,
  `pcapop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('20230820083743', 'Capex'),
('20230820083757', 'Opex');

-- --------------------------------------------------------

--
-- Table structure for table `product_details_insert`
--

CREATE TABLE `product_details_insert` (
  `pacode` varchar(50) NOT NULL,
  `pcode` varchar(50) NOT NULL,
  `factoryid` varchar(50) NOT NULL,
  `supplierid` varchar(50) NOT NULL,
  `mpr` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `item` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `pqty` float NOT NULL,
  `puomid` int(11) NOT NULL,
  `warranty` int(11) NOT NULL,
  `price` float NOT NULL,
  `pdate` date NOT NULL,
  `adate` date NOT NULL,
  `rdate` date NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pastatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_group_insert`
--

CREATE TABLE `product_group_insert` (
  `pgid` varchar(50) NOT NULL,
  `pccode` varchar(50) NOT NULL,
  `pgname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_group_insert`
--

INSERT INTO `product_group_insert` (`pgid`, `pccode`, `pgname`) VALUES
('20230822072519', '20230820083757', 'IT Spares & Accessories'),
('20230822072537', '20230820083757', 'IT Maintenance & Repairs'),
('20230822072551', '20230820083757', 'Printing & Toners'),
('20230822072618', '20230820083757', 'Software Service'),
('20230822072637', '20230820083757', 'Internet & Telecom'),
('20230822072652', '20230820083743', 'IT Equipment');

-- --------------------------------------------------------

--
-- Table structure for table `product_history_insert`
--

CREATE TABLE `product_history_insert` (
  `phiid` varchar(50) NOT NULL,
  `pacode` varchar(50) NOT NULL,
  `factoryid` varchar(50) NOT NULL,
  `phstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_ihistory_insert`
--

CREATE TABLE `product_ihistory_insert` (
  `phiid` varchar(50) NOT NULL,
  `pacode` varchar(50) NOT NULL,
  `factoryid` varchar(50) NOT NULL,
  `phstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_ihistory_insert`
--

INSERT INTO `product_ihistory_insert` (`phiid`, `pacode`, `factoryid`, `phstatus`) VALUES
('20240111154845', 'BGL-LPT-1', 'BGL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_insert`
--

CREATE TABLE `product_insert` (
  `pcode` varchar(50) NOT NULL,
  `pccode` varchar(50) NOT NULL,
  `pgid` varchar(50) NOT NULL,
  `psgid` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_insert`
--

INSERT INTO `product_insert` (`pcode`, `pccode`, `pgid`, `psgid`, `pname`) VALUES
('AP', '20230820083743', '20230822072652', '20230822083026', 'Access Point'),
('AR', '20230820083743', '20230822072652', '20230822083344', 'Attendance Reader'),
('CPR', '20230820083743', '20230822072652', '20230822082854', 'Copier'),
('DKTP', '20230820083743', '20230822072652', '20230822082725', 'Desktop'),
('FW', '20230820083743', '20230822072652', '20230822082942', 'Firewall'),
('LPT', '20230820083743', '20230822072652', '20230822082725', 'Laptop'),
('MNT', '20230820083743', '20230822072652', '20230822083124', 'Monitor'),
('NTRK', '20230820083743', '20230822072652', '20230822083502', 'Network Rack'),
('NTSW', '20230820083743', '20230822072652', '20230822083005', 'Network Switch'),
('NVR', '20230820083743', '20230822072652', '20230822083355', 'NVR'),
('OUPS', '20230820083743', '20230822072652', '20230822083051', 'Online UPS'),
('PJTR', '20230820083743', '20230822072652', '20230822082919', 'Projector'),
('PTR', '20230820083743', '20230822072652', '20230822082821', 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `piv` varchar(50) NOT NULL,
  `sipoid` varchar(50) NOT NULL,
  `ifid` varchar(50) NOT NULL,
  `pacode` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `idescription` varchar(500) NOT NULL,
  `iqty` float NOT NULL,
  `warranty` float NOT NULL,
  `pdate` date NOT NULL,
  `adate` date NOT NULL,
  `rdate` date NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pastatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_inventory`
--

INSERT INTO `product_inventory` (`piv`, `sipoid`, `ifid`, `pacode`, `sn`, `idescription`, `iqty`, `warranty`, `pdate`, `adate`, `rdate`, `userid`, `pastatus`) VALUES
('20240111154845', '202401111541290', 'BGL', 'BGL-LPT-1', '1', '', 1, 365, '2024-01-11', '2024-01-11', '2024-01-11', '', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_inventory_view`
-- (See below for the actual view)
--
CREATE TABLE `product_inventory_view` (
`sipoid` varchar(50)
,`iqty` double
);

-- --------------------------------------------------------

--
-- Table structure for table `product_subgroup_insert`
--

CREATE TABLE `product_subgroup_insert` (
  `psgid` varchar(50) NOT NULL,
  `pccode` varchar(50) NOT NULL,
  `pgid` varchar(50) NOT NULL,
  `psgname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_subgroup_insert`
--

INSERT INTO `product_subgroup_insert` (`psgid`, `pccode`, `pgid`, `psgname`) VALUES
('20230822082725', '20230820083743', '20230822072652', 'Computer'),
('20230822082751', '20230820083743', '20230822072652', 'Server'),
('20230822082821', '20230820083743', '20230822072652', 'Printer'),
('20230822082828', '20230820083743', '20230822072652', 'Scanner'),
('20230822082854', '20230820083743', '20230822072652', 'Copier'),
('20230822082919', '20230820083743', '20230822072652', 'Projector'),
('20230822082942', '20230820083743', '20230822072652', 'Firewall'),
('20230822082952', '20230820083743', '20230822072652', 'Router'),
('20230822083005', '20230820083743', '20230822072652', 'Network Switch'),
('20230822083026', '20230820083743', '20230822072652', 'Access Point'),
('20230822083051', '20230820083743', '20230822072652', 'Online UPS'),
('20230822083124', '20230820083743', '20230822072652', 'Monitor'),
('20230822083344', '20230820083743', '20230822072652', 'Attendance Reader'),
('20230822083355', '20230820083743', '20230822072652', 'NVR'),
('20230822083502', '20230820083743', '20230822072652', 'Network Rack');

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
  `rdate` date NOT NULL,
  `invoice` varchar(50) NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive_insert`
--

INSERT INTO `receive_insert` (`grnid`, `grnrid`, `suserid`, `mprid`, `simprid`, `sipoid`, `po`, `grn`, `rqty`, `rremarks`, `rdate`, `invoice`, `cdate`) VALUES
('20240111154327', '20240111154327', 'HO926', 'BGL1', '202401111540380', '202401111541290', '1', '1', 1, '', '2024-01-11', '1', '2024-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `receive_insert_id`
--

CREATE TABLE `receive_insert_id` (
  `grnid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `grn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive_insert_id`
--

INSERT INTO `receive_insert_id` (`grnid`, `mprid`, `grn`) VALUES
('20240111154327', 'BGL1', '1');

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
('10961'),
('12056'),
('15762'),
('1614'),
('18447'),
('22736'),
('24020'),
('31638'),
('6649'),
('7451'),
('774'),
('AFL31638'),
('HO690'),
('HO926');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_insert`
--

CREATE TABLE `supplier_insert` (
  `supplierid` int(11) NOT NULL,
  `supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_insert`
--

INSERT INTO `supplier_insert` (`supplierid`, `supplier`) VALUES
(1, 'Global'),
(2, 'Computer Source'),
(3, 'Comteck Solution'),
(4, 'NA');

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
('AFL', 4, 5, 'Rani Mridha', 'ronyrnd@babylon-bd.com', '01859654313', '2', '10961', '10961', '', '', '1', '0000-00-00'),
('AFL', 5, 6, 'Ayisha  Siddiqa', 'arju@babylon-bd.com', '01771683032', '2', '12056', '12056', '', '', '1', '0000-00-00'),
('BCL', 4, 4, 'Al Amin    ', 'alaminrnd@babylon-bd.com', '01710768980', '2', '15762', '15762', '', '', '1', '0000-00-00'),
('AFL', 6, 5, 'S.M Omar Faruque', 'qs@babylon-bd.com', '01720836313', '2', '1614', '1614', '', '', '1', '0000-00-00'),
('BCL', 4, 5, 'Mr. Kamruzzaman    ', 'kzamanrnd@babylon-bd.com', '01709655225', '2', '18447', '18447', '', '', '1', '0000-00-00'),
('BCL', 5, 5, 'Md.Sharif Tanik Arefin   ', 'bclhrac@babylon-bd.com', '01717513487', '2', '22736', '22736', '', '', '1', '0000-00-00'),
('BCL', 6, 5, 'Md. Sohel Rana   ', 'shohelbcl@babylon-bd.com', '01954232946', '2', '24020', '24020', '', '', '1', '0000-00-00'),
('BCL', 3, 3, 'M.M Tofazzal Hossain', 'tofazzal@babylon-bd.com', '01971595682', '2', '31638', '31638', '', '', '1', '0000-00-00'),
('AFL', 3, 8, 'Md: Shajahan Ali', 'shajahanafl@babylon-bd.com', '01713588430', '2', '6649', '6649', '', '', '1', '0000-00-00'),
('AFL', 6, 7, 'M Atikur Rahman Rintu', 'atiqueqa@babylon-bd.com', '01675714124', '2', '7451', '7451', '', '', '1', '0000-00-00'),
('AFL', 7, 4, 'Syed Jahidul Hoque Badal', 'badalplan@babylon-bd.com', '1782845050', '2', '774', '774', '', '', '1', '0000-00-00'),
('AFL', 5, 5, 'Hasan Al-  Arefin', 'aflhrac@babylon-bd.com', '01716373432', '2', 'AFL31638', 'AFL31638', '', '', '1', '0000-00-00'),
('HO', 1, 6, 'Shukur Ali', '', '', '1', 'HO112', 'HO112', '123456', 'shukur.jpg', '1', '0000-00-00'),
('HO', 1, 3, 'Mohammed Syful Islam', '', '', '1', 'HO12', 'HO12', '123456', 'syful.jpg', '1', '0000-00-00'),
('HO', 1, 5, 'Choudhury Noor Aftab', '', '', '1', 'HO131', 'HO131', '123456', 'aftab.jpg', '1', '0000-00-00'),
('HO', 1, 5, 'Md. Ahsan Habib', '', '', '1', 'HO147', 'HO147', '123456', 'ahsan.jpg', '1', '0000-00-00'),
('HO', 1, 3, ' Md. Khondakar Mashiur Rahman', '', '', '1', 'HO37', 'HO37', '123456', 'mashiur.jpg', '1', '0000-00-00'),
('HO', 1, 7, 'Md. Jahid Hossain', '', '', '1', 'HO526', 'HO526', '123456', 'jahid.jpg', '1', '0000-00-00'),
('HO', 1, 5, 'Md. Sujon Mia', '', '', '1', 'HO537', 'HO537', '123456', 'sujon.jpg', '1', '0000-00-00'),
('HO', 1, 4, ' Md. Shahidullah', '', '', '1', 'HO61', 'HO61', '123456', 'shahidullah.jpg', '1', '0000-00-00'),
('HO', 1, 2, 'Habib Motiur Rahman', '', '', '1', 'HO63', 'HO63', '123456', 'habib.jpg', '1', '0000-00-00'),
('HO', 1, 8, 'Shahajalal Palash', '', '', '1', 'HO690', 'HO690', '123456', 'palash.jpg', '1', '0000-00-00'),
('HO', 1, 3, 'Md. Ashaduzzaman', '', '', '1', 'HO75', 'HO75', '123456', 'asaduzzamn.jpg', '1', '0000-00-00'),
('HO', 1, 2, 'MD Mushfequr Rahman', '1@email.com', '000000', '1', 'HO926', 'HO926', '123456', 'babylon7.jpg', '1', '0000-00-00'),
('HO', 1, 5, 'Sushanta Chandro Mondo', '', '', '1', 'HO95', 'HO95', '123456', 'sushanto.jpg', '1', '0000-00-00'),
('HO', 1, 9, 'Shakib Salim', '', '', '1', 'HO989', 'HO989', '123456', 'shakib.jpg', '1', '0000-00-00');

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
-- Structure for view `mpr_wise_receive_list_view`
--
DROP TABLE IF EXISTS `mpr_wise_receive_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mpr_wise_receive_list_view`  AS  select `mpr_insert`.`mprid` AS `mprid`,`mpr_insert`.`fid` AS `fid`,`product_category_insert`.`pccode` AS `pccode`,`item_insert`.`item` AS `item`,`product_category_insert`.`pcname` AS `pcname`,`mpr_insert`.`model` AS `model`,`receive_insert`.`po` AS `po`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,`mpr_insert`.`price` AS `price`,`mpr_insert`.`remarks` AS `remarks`,`mpr_insert`.`uname` AS `uname`,`mpr_insert`.`mdate` AS `mdate`,`receive_insert`.`grn` AS `grn`,`receive_insert`.`rqty` AS `rqty`,`receive_insert`.`rdate` AS `rdate`,`mpr_insert`.`description` AS `description`,`receive_insert`.`simprid` AS `simprid`,`receive_insert`.`sipoid` AS `sipoid`,`product_insert`.`pcode` AS `pcode`,`product_insert`.`pname` AS `pname` from (((((`mpr_insert` join `receive_insert` on(`receive_insert`.`simprid` = `mpr_insert`.`simprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_insert` on(`product_insert`.`pcode` = `mpr_insert`.`mpcode`)) join `item_insert` on(`item_insert`.`itemcode` = `mpr_insert`.`model`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `product_insert`.`pccode`)) where `receive_insert`.`grn` <> '' ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `po_qty_remaining`  AS  select `mpr_insert`.`mprid` AS `mprid`,`mpr_insert`.`fid` AS `fid`,`product_category_insert`.`pcname` AS `pcname`,`product_insert`.`pname` AS `pname`,`mpr_insert`.`model` AS `model`,`po_insert_view`.`simprid` AS `simprid`,`mpr_insert`.`mpcode` AS `pcode`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,sum(`po_insert_view`.`pqty`) AS `prqty`,sum(`po_insert_view`.`mpprice`) AS `tpprice` from ((((((`po_insert_view` join `mpr_insert` on(`mpr_insert`.`simprid` = `po_insert_view`.`simprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_insert` on(`product_insert`.`pcode` = `mpr_insert`.`mpcode`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `product_insert`.`pccode`)) join `department` on(`department`.`deptid` = `mpr_insert`.`mdeptid`)) join `designation` on(`designation`.`desigid` = `mpr_insert`.`mdesigid`)) group by `po_insert_view`.`simprid` ;

-- --------------------------------------------------------

--
-- Structure for view `product_inventory_view`
--
DROP TABLE IF EXISTS `product_inventory_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_inventory_view`  AS  select `product_inventory`.`sipoid` AS `sipoid`,sum(`product_inventory`.`iqty`) AS `iqty` from `product_inventory` group by `product_inventory`.`sipoid` ;

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
-- Indexes for table `item_insert`
--
ALTER TABLE `item_insert`
  ADD PRIMARY KEY (`itemcode`);

--
-- Indexes for table `item_release_insert`
--
ALTER TABLE `item_release_insert`
  ADD PRIMARY KEY (`iriid`) USING BTREE;

--
-- Indexes for table `item_release_type_insert`
--
ALTER TABLE `item_release_type_insert`
  ADD PRIMARY KEY (`irid`) USING BTREE;

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
-- Indexes for table `product_asset_code`
--
ALTER TABLE `product_asset_code`
  ADD PRIMARY KEY (`pacode`);

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
  ADD PRIMARY KEY (`pacode`);

--
-- Indexes for table `product_group_insert`
--
ALTER TABLE `product_group_insert`
  ADD PRIMARY KEY (`pgid`);

--
-- Indexes for table `product_history_insert`
--
ALTER TABLE `product_history_insert`
  ADD PRIMARY KEY (`phiid`);

--
-- Indexes for table `product_ihistory_insert`
--
ALTER TABLE `product_ihistory_insert`
  ADD PRIMARY KEY (`phiid`) USING BTREE;

--
-- Indexes for table `product_insert`
--
ALTER TABLE `product_insert`
  ADD PRIMARY KEY (`pcode`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`piv`);

--
-- Indexes for table `product_subgroup_insert`
--
ALTER TABLE `product_subgroup_insert`
  ADD PRIMARY KEY (`psgid`) USING BTREE;

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
-- Indexes for table `supplier_insert`
--
ALTER TABLE `supplier_insert`
  ADD PRIMARY KEY (`supplierid`);

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
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desigid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `internet`
--
ALTER TABLE `internet`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_capop_insert`
--
ALTER TABLE `product_capop_insert`
  MODIFY `pcoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_uom_insert`
--
ALTER TABLE `product_uom_insert`
  MODIFY `puomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_insert`
--
ALTER TABLE `supplier_insert`
  MODIFY `supplierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
