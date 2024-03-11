-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 12:01 PM
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
-- Table structure for table `brand_insert`
--

CREATE TABLE `brand_insert` (
  `brandid` varchar(50) NOT NULL,
  `brandname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand_insert`
--

INSERT INTO `brand_insert` (`brandid`, `brandname`) VALUES
('20240116164212', 'Western Digital'),
('20240117104145', 'None'),
('20240117105230', 'Dintek'),
('20240117105342', 'Safenet'),
('20240120115642', 'Canon'),
('20240120115732', 'A4Tech'),
('20240127121456', 'TP Link'),
('20240129101429', 'HP'),
('20240129102116', 'Lenovo'),
('20240129142825', 'Intel'),
('20240129142832', 'Samsung'),
('20240129142843', 'Asus'),
('20240129142957', 'Adata'),
('20240129143020', 'KSTAR'),
('20240129143032', 'PowerPack'),
('20240130112130', 'Value Top'),
('20240130112137', 'ASTA'),
('20240130160104', 'Toshiba'),
('20240203104959', 'MICRONET'),
('20240204102841', 'ZTeco'),
('20240204110504', 'Transcend'),
('20240204125303', 'Grandstream'),
('20240304135155', 'Power Guard');

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
(7, 'PLANNING'),
(8, 'STORE'),
(9, 'Commercial'),
(10, 'CAD'),
(11, 'Sample'),
(12, 'Accounts'),
(13, 'Logistic'),
(14, 'CNF'),
(15, 'Dyeing'),
(16, 'Distribution'),
(17, 'Creadit & Legal'),
(18, 'Market Service'),
(19, 'Sales & Marketing'),
(20, 'EMS'),
(21, 'Operations'),
(22, 'Fabric Store'),
(23, 'Security'),
(24, 'Treasury'),
(25, 'Maintenance'),
(26, 'Supply Chain Management'),
(27, 'FINISHING');

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
(8, 'SENIOR SUPERVISOR'),
(9, 'Assistant Manager'),
(10, 'TECHNICIAN'),
(11, 'SENIOR TECHNICIAN'),
(12, 'Area Sales Manager'),
(13, 'Assistant Cutting'),
(14, 'Assistant Designer'),
(15, 'Assistant General Manager'),
(16, 'Assistant Merchandiser'),
(17, 'Assistant Officer'),
(18, 'Assistant Supervisor'),
(19, 'Attendant'),
(20, 'CEO'),
(21, 'CFO'),
(22, 'Co-Ordinator'),
(23, 'Color Master'),
(24, 'Commercial Assistant'),
(25, 'Computer Operator'),
(26, 'Content Writer'),
(27, 'COO'),
(28, 'Cutter Man'),
(29, 'Data Entry Operator'),
(30, 'Deputy General Manager'),
(31, 'Deputy Regional Sales Manager'),
(32, 'Designer'),
(33, 'Digital Marketer'),
(34, 'Director'),
(35, 'Distribution Executive'),
(36, 'Finance Controller'),
(37, 'Fire man'),
(38, 'Fire Safety Officer'),
(39, 'Garments Technologist'),
(40, 'GCEO'),
(41, 'GCFO'),
(42, 'General Manager'),
(43, 'GGM'),
(44, 'Graphics Designer'),
(45, 'Group Senior Manager'),
(46, 'Head Of Operation '),
(47, 'Head Of SCM'),
(48, 'Inspector (QA)'),
(49, 'Internee'),
(50, 'Junior Cutter Man'),
(51, 'Junior Manager'),
(52, 'Junior Officer '),
(53, 'Junior Supervisor'),
(54, 'Laser Designer'),
(55, 'Logistics Officer'),
(56, 'Management Trainee'),
(57, 'Management Trainee Officer'),
(58, 'Marchandiser'),
(59, 'Marketing Assistant'),
(60, 'Medical Assistant'),
(61, 'Office Assistant'),
(62, 'Office Attendent'),
(63, 'Officer'),
(64, 'Peramedical'),
(65, 'POLE'),
(66, 'Project Manager'),
(67, 'Quality Inspector'),
(68, 'RBDM'),
(69, 'Sales Manager'),
(70, 'Sample Man'),
(71, 'Senior Designer'),
(72, 'Senior Executive'),
(73, 'Senior Graphic Designer'),
(74, 'Senior Inspector'),
(75, 'Senior Merchandiser'),
(76, 'Senior QC'),
(77, 'Senior Sales Executive'),
(78, 'Senior Sample Man'),
(79, 'Senior Shop in Charge'),
(80, 'Shop in Charge'),
(81, 'SMO'),
(82, 'Software Engineer'),
(83, 'Supervisor'),
(84, 'Technical Services Executive'),
(85, 'Territory Executive'),
(86, 'Territory Manager'),
(87, 'Trainee'),
(88, 'Trainee Designer'),
(89, 'Trainee Merchandiser'),
(90, 'Trainee Officer'),
(91, 'Trianee Welfare Officer'),
(92, 'UI/UX Designer   '),
(93, 'Walfare Officer'),
(94, 'Wash Technician'),
(95, 'Advisor'),
(96, 'N/A');

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
('20240111125250', 'Lenovo Ideapad 330', 'LPT'),
('20240111140218', 'Toner 26A', 'TNR'),
('20240111140250', 'Toner 80A', 'TNR'),
('20240113094733', 'Toner 05A', 'TNR'),
('20240113094754', 'Toner 78A', 'TNR'),
('20240113094956', 'Toner 85A', 'TNR'),
('20240113095022', 'Toner 87A', 'TNR'),
('20240113095222', 'Cartridge 45A', 'CTG'),
('20240113095331', 'Canon 810', 'CTG'),
('20240113095344', 'Canon 811', 'CTG'),
('20240113103017', 'Toner 326A', 'TNR'),
('20240113113547', 'Cat6 UTP Cable ', 'CBL'),
('20240113122908', 'GRP 2601P', 'IPT'),
('20240114102233', 'LIDE 300', 'SCN'),
('20240116164039', 'None', 'HDD'),
('20240117104905', 'SC Type', 'SFP'),
('20240117105017', 'DC Type', 'SFP'),
('20240117105727', 'None', 'FCBL'),
('20240117105819', 'LC Type', 'SFP'),
('20240120120752', 'None', 'OUPS'),
('20240120124705', 'None', 'OFUPS'),
('20240120124900', '600VA', 'OFUPS'),
('20240120124913', '1KVA', 'OFUPS'),
('20240120124926', '3KVA', 'OFUPS'),
('20240120124951', '600VA', 'OUPS'),
('20240120125018', '1KVA', 'OUPS'),
('20240120125100', '3KVA', 'OUPS'),
('20240120125552', 'Mouse USB', 'UMS'),
('20240120125612', 'Mouse Wireless', 'WMS'),
('20240120125759', 'keyboard USB', 'UKB'),
('20240120130008', 'Wire Keyboard', 'WKB'),
('20240121120834', '1 TB', 'HDD'),
('20240121120845', '500GB', 'HDD'),
('20240121120905', '250GB', 'HDD'),
('20240121120919', '128GB', 'HDD'),
('20240121120928', '2TB', 'HDD'),
('20240121120939', '750GB', 'HDD'),
('20240121120948', '350GB', 'HDD'),
('20240121123926', 'Toshiba e-Studio 3018', 'HTRPCR'),
('20240121124109', 'Copier Pick-up Roller ', 'PTRPCR'),
('20240121124141', 'Printer Pick-Up Roller ', 'PTRPCR'),
('20240121124221', 'Printer Pressure ', 'PTRPR'),
('20240121125832', 'Toshiba e-Studio ', 'PTRPR'),
('20240121130508', 'None', 'CPRGR'),
('20240122165016', 'Plotter', 'PLT'),
('20240123153719', 'None', 'AP'),
('20240123153727', 'None', 'AR'),
('20240123153733', 'None', 'CTG'),
('20240123153741', 'None', 'CSG'),
('20240123153749', 'None', 'CBTR'),
('20240123153757', 'None', 'MCVTR'),
('20240123153805', 'None', 'CF'),
('20240123153814', 'None', 'CPR'),
('20240123153831', 'None', 'CPRDR'),
('20240123153839', 'None', 'CPRDM'),
('20240123153853', 'None', 'DKTP'),
('20240123153904', 'None', 'NFP'),
('20240123153926', 'None', 'FW'),
('20240123153940', 'None', 'PTRFF'),
('20240123154005', 'None', 'HP'),
('20240123154015', 'None', 'HTRPCR'),
('20240123154024', 'None', 'IPT'),
('20240123154047', 'None', 'UKB'),
('20240123154056', 'None', 'WKB'),
('20240123154107', 'None', 'LC'),
('20240123154116', 'None', 'LPT'),
('20240123154124', 'None', 'LBTR'),
('20240123154134', 'None', 'LCRG'),
('20240123154142', 'None', 'LDSP'),
('20240123154150', 'None', 'LKB'),
('20240123154157', 'None', 'LSTD'),
('20240123154210', 'None', 'NMDL'),
('20240123154219', 'None', 'MNT'),
('20240123154227', 'None', 'MBD'),
('20240123154239', 'None', 'UMS'),
('20240123154251', 'None', 'WMS'),
('20240123154301', 'None', 'NTRK'),
('20240123154310', 'None', 'NTSW'),
('20240123154357', 'None', 'NPP'),
('20240123154437', 'None', 'PP'),
('20240123154459', 'None', 'PD'),
('20240123154521', 'None', 'PTRPCR'),
('20240123154531', 'None', 'PLT'),
('20240123154538', 'None', 'PSU'),
('20240123154548', 'None', 'PTRPR'),
('20240123154558', 'None', 'PTR'),
('20240123154608', 'None', 'PTRGR'),
('20240123154616', 'None', 'PJTR'),
('20240123154626', 'None', 'RAM'),
('20240123154635', 'None', 'RJC'),
('20240123154646', 'None', 'SCN'),
('20240123154656', 'None', 'SFP'),
('20240123154706', 'None', 'SSD'),
('20240123154716', 'None', 'TNR'),
('20240123154724', 'None', 'ULC'),
('20240123154732', 'None', 'CBL'),
('20240123154740', 'None', 'WM'),
('20240124160146', 'e-Studio 3018', 'CSR'),
('20240124160157', 'None', 'CSR'),
('20240124160259', 'e-Studio 3018', 'RCB'),
('20240124160323', 'e-Studio 3018', 'CLB'),
('20240124160337', 'None', 'RCB'),
('20240124160451', 'None', 'CLB'),
('20240124160541', 'e-Studio 3018', 'CPRDM'),
('20240125133141', 'Toner 76A', 'TNR'),
('20240127121416', 'Archer AX20', 'Wifi'),
('20240127121433', 'None', 'Wifi'),
('20240129101258', 'HP ProBook 440 G5', 'LBTR'),
('20240129101311', 'HP ProBook 440 G4', 'LBTR'),
('20240129101327', 'HP ProBook 450 G5', 'LBTR'),
('20240129102047', 'Think Pad T440', 'LKB'),
('20240129112346', 'None', 'MPD'),
('20240129142718', 'CORE -3 10GN', 'Processor'),
('20240129142739', 'CORE -5 10GN', 'Processor'),
('20240129142759', 'CORE -7 10GN', 'Processor'),
('20240130112527', 'None', 'VGCBL'),
('20240130112539', 'None', 'HDMIC'),
('20240130131158', 'None', 'Battery'),
('20240130131659', '128GB', 'SSD'),
('20240130131709', '256GB', 'SSD'),
('20240130131720', '512GB', 'SSD'),
('20240130131733', '1TB', 'SSD'),
('20240130152355', 'None', 'UBTR'),
('20240130155913', 'None', 'DCB'),
('20240130155953', 'e-Studio 282', 'DCB'),
('20240130160017', 'e-Studio 2006', 'DCB'),
('20240130160039', 'e-Studio 2306', 'DCB'),
('20240130162957', 'e-Studio 282', 'RCB'),
('20240130163017', 'e-Studio 2006', 'RCB'),
('20240130163033', 'e-Studio 2306', 'RCB'),
('20240130163121', 'e-Studio 282', 'CPRDM'),
('20240130163137', 'e-Studio 2006', 'CPRDM'),
('20240130163152', 'e-Studio 2306', 'CPRDM'),
('20240130163333', 'e-Studio 282', 'HTRPCR'),
('20240130163350', 'e-Studio 2006', 'HTRPCR'),
('20240130163407', 'e-Studio 2306', 'HTRPCR'),
('20240130163436', 'e-Studio 282', 'CSR'),
('20240130163457', 'e-Studio 2006', 'CSR'),
('20240130163514', 'e-Studio 2306', 'CSR'),
('20240130163530', 'e-Studio 282', 'CPRDR'),
('20240130163543', 'e-Studio 2006', 'CPRDR'),
('20240130163600', 'e-Studio 2306', 'CPRDR'),
('20240130165846', 'None', 'CCTV'),
('20240130170123', 'None', 'NVR'),
('20240130170134', 'None', 'DVR'),
('20240130170535', 'None', 'ACAM'),
('20240130170622', 'None', 'IPC'),
('20240130171605', 'NONE', 'BTR'),
('20240131144512', ' GALAXY A7', 'TABLET'),
('20240131145730', 'TONER 79A', 'TNR'),
('20240131152349', '15\"', 'MNT'),
('20240131152405', '18.5\"', 'MNT'),
('20240131152417', '19.5', 'MNT'),
('20240131152426', '22\"', 'MNT'),
('20240131173030', 'HP ProBook 440 G6', 'LBTR'),
('20240203104945', 'RJ45', 'NC'),
('20240203114039', 'Galaxy S6 Lite', 'TABLET'),
('20240204102806', 'uFACE 900 ', 'AR'),
('20240204102822', 'uFace800', 'AR'),
('20240206162856', '3008P', 'PHTNR'),
('20240206162910', '5018C', 'PHTNR'),
('20240206162945', 'None', 'PHTNR'),
('20240207104259', 'None', 'TCPASTE'),
('20240207105058', 'None', 'SENCL'),
('20240207105108', 'None', 'NENCL'),
('20240207105311', 'None', 'CCLR'),
('20240211161331', 'RADF (Reversing Automatic Document Feeder)', 'RADF'),
('20240211161340', 'None', 'RADF'),
('20240211161611', 'e-Studio 3018A', 'RADF'),
('20240229131215', 'None', 'IPSW'),
('20240229134701', 'None', 'PCK'),
('20240303131302', 'HP ProBook 450 G4', 'LKB'),
('20240303131318', 'HP ProBook 440 G4', 'LKB'),
('20240304134729', 'None', 'SEDOMs'),
('20240304135039', 'HPE ProLiant DL20', 'SVR'),
('20240304135225', 'PG3KVA', 'OUPS'),
('20240304135355', 'None', 'WINDS'),
('20240305145310', 'H110M-K', 'MBD'),
('20240309161404', 'None', 'PRCR'),
('20240309161423', 'Core i5', 'PRCR'),
('20240309161438', 'Core i3', 'PRCR'),
('20240309161453', 'Core i7', 'PRCR'),
('20240310111009', 'None', 'EPSINK'),
('20240310111104', '410A', 'TNR'),
('20240310111117', '411A', 'TNR'),
('20240310111126', '412A', 'TNR'),
('20240310111136', '413A', 'TNR'),
('20240310111154', '44A', 'TNR'),
('20240310111405', 'ZXP3', 'RIB'),
('20240310111418', 'None', 'RIB');

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
  `mpcode` varchar(50) NOT NULL,
  `model` varchar(300) NOT NULL,
  `brandid` varchar(300) NOT NULL,
  `qty` float NOT NULL,
  `uom` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `mstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert`
--

INSERT INTO `mpr_insert` (`smprid`, `simprid`, `mpcode`, `model`, `brandid`, `qty`, `uom`, `description`, `price`, `remarks`, `uname`, `mstatus`) VALUES
('20240113113926', '202401131139260', 'CBL', '20240113113547', '', 1, 2, 'Dintek UTP Cable', 19000, '', 'Support', 0),
('20240113123136', '202401131231360', 'IPT', '20240113122908', '', 2, 1, '1 for Replacement and another for New', 4600, 'Replace faulty set and new one', 'Shafiq - Fabric store,', 1),
('20240114102604', '202401141026040', 'SCN', '20240114102233', '', 1, 5, 'SCANNER LIDE -300 CANNON', 11500, '', '', 0),
('20240114104041', '202401141040410', 'TNR', '20240111140218', '', 2, 1, '', 1650, '', 'AFL USER', 1),
('20240114104041', '202401141040411', 'TNR', '20240111140250', '', 4, 1, '', 1300, '', 'AFL USER', 1),
('20240114104041', '202401141040412', 'TNR', '20240113094956', '', 2, 1, '', 1250, '', 'AFL USER', 1),
('20240114104041', '202401141040413', 'TNR', '20240113103017', '', 3, 1, '', 1200, '', 'AFL USER', 1),
('20240114104041', '202401141040414', 'TNR', '20240113095022', '', 2, 1, '', 2950, '', 'AFL USER', 1),
('20240114104041', '202401141040415', 'CTG', '20240113095222', '', 12, 3, '', 2060, '', 'AFL USER', 1),
('20240116164442', '202401161644420', 'HDD', '20240116164039', '20240116164212', 1, 1, 'WD 1TB HDD', 4600, '', 'Replace faulty  HDD', 1),
('20240117111832', '202401171118320', 'CBL', '20240113113547', '20240117104145', 1, 2, 'networking purpose', 19400, '', 'networking purpose', 0),
('20240117111832', '202401171118331', 'FCBL', '20240117105727', '20240117104145', 300, 7, 'networking purpose', 20, '', 'networking purpose', 0),
('20240117111832', '202401171118332', 'SFP', '20240117104905', '20240117104145', 4, 1, 'networking purpose', 2000, '', 'networking purpose', 0),
('20240117115010', '202401171150100', 'CBL', '20240113113547', '20240117105230', 1, 2, 'networking purpose', 19400, '', 'BDL Use ', 0),
('20240120125700', '202401201257000', 'OFUPS', '20240120124900', '20240117104145', 1, 1, 'New UPS for Security', 3800, '', 'for new system', 1),
('20240120125700', '202401201257001', 'CTG', '20240113095331', '20240120115642', 1, 1, 'HR use', 3200, '', 'monthly use', 1),
('20240120125700', '202401201305240', 'UMS', '20240120125552', '20240120115732', 2, 1, '', 450, '', '', 1),
('20240120125700', '202401201305241', 'UKB', '20240120125759', '20240120115732', 2, 1, '', 950, '', '', 1),
('20240121125819', '202401211258190', 'LPT', '20240111125009', '20240117104145', 1, 1, 'Core i3, 8GB RAM, SSD 256, HDD 1TB, 14 Inch', 68000, '', 'Previous Sr. Mgrs old laptop were handover to Sr. ', 0),
('20240121130911', '202401211309110', 'PTRPR', '20240121125832', '20240117104145', 1, 1, '', 4800, '', '', 0),
('20240121130911', '202401211309121', 'HTRPCR', '20240121123926', '20240117104145', 1, 1, '', 4200, '', '', 0),
('20240121130911', '202401211309122', 'CPRGR', '20240121130508', '20240117104145', 3, 1, '', 1000, '', '', 0),
('20240122103642', '202401221036420', 'CTG', '20240113095222', '20240117104145', 8, 1, 'BOK Cartridge', 2060, '', 'For Feb 24 use', 1),
('20240125114230', '202401251142300', 'LPT', '20240111124947', '20240117104145', 1, 5, 'Core i3, 8GB RAM, SSD 256, HDD 1TB, 14 inch', 68000, '', 'Previous Finishing Manager old laptop were handove', 0),
('20240125133417', '202401251334170', 'TNR', '20240125133141', '20240117104145', 2, 1, 'Monthly', 1650, '', 'Store Stock', 1),
('20240125133417', '202401251334171', 'HDD', '20240121120834', '20240116164212', 1, 1, 'For emergency support', 5000, '', 'Store Stock', 1),
('20240127113145', '202401271131450', 'DKTP', '20240123153853', '20240117104145', 4, 1, '', 35000, 'Proccesor,Mother Board,RAM,HDD', 'Firoz-CNF', 0),
('20240127121900', '202401271219000', 'Wifi', '20240127121416', '20240127121456', 1, 1, 'TP-Link Archer AX20 1800Mbps', 9500, 'For newly install at old washing', 'Batch, R&D, Store, display', 1),
('20240127165313', '202401271653130', 'CTG', '20240113095331', '20240120115642', 3, 1, 'Handtag print purpose', 3400, 'for 4 months use', 'Sample', 0),
('20240127165313', '202401271653131', 'CTG', '20240113095344', '20240120115642', 3, 1, 'Handtag print purpose', 3400, 'for 4 months use', 'Sample', 0),
('20240129090556', '202401290905560', 'TNR', '20240111140250', '20240117104145', 3, 1, '', 1650, '', 'Stock', 0),
('20240129090556', '202401290905561', 'TNR', '20240111140218', '20240117104145', 18, 1, '', 1650, '', 'Stock', 0),
('20240129090556', '202401290905562', 'UKB', '20240120125759', '20240120115732', 3, 1, '', 900, '', 'Stock', 0),
('20240129090556', '202401290905563', 'WMS', '20240120125612', '20240120115732', 5, 1, '', 900, '', 'Stock', 0),
('20240129090556', '202401290905564', 'UMS', '20240120125552', '20240120115732', 5, 1, '', 480, '', 'Stock', 0),
('20240129090556', '202401290905565', 'MPD', '20240129112346', '20240117104145', 5, 1, '', 150, '', 'Stock', 0),
('20240129090556', '202401290905566', 'CBTR', '20240123153749', '20240117104145', 12, 1, '', 110, '', 'Stock', 0),
('20240129090556', '202401290905567', 'TNR', '20240125133141', '20240117104145', 2, 1, '', 1650, '', 'Stock', 0),
('20240129090556', '202401290905568', 'IPT', '20240113122908', '20240117104145', 2, 1, '', 5000, '', 'Milon(Audit) & Ripon (VatChallan))', 0),
('20240129090556', '202401290905569', 'TNR', '20240123154716', '20240117104145', 1, 1, '', 9800, '', 'Stock', 0),
('20240129101651', '202401291016510', 'LBTR', '20240129101258', '20240129101429', 1, 1, 'Replace faulty battery', 4000, 'Replace faulty battery', 'Hamidur - Comm', 1),
('20240129102440', '202401291024400', 'LKB', '20240129102047', '20240129102116', 1, 1, 'Lenovo ThinkPad T440', 3200, 'Replace faulty KB', 'Mokhlesur - Manager - Dyeing', 1),
('20240129130431', '202401291304310', 'TNR', '20240111140218', '20240129101429', 5, 5, 'For BADL HO HP Printer', 1650, '1650*5=8250', '', 0),
('20240129141726', '202401291417260', 'UMS', '20240120125552', '20240120115732', 3, 1, '', 450, '', 'factory user', 0),
('20240129141726', '202401291417261', 'WMS', '20240120125612', '20240120115732', 1, 5, '', 1100, '', 'factory user', 0),
('20240129141726', '202401291417262', 'HDD', '20240121120834', '20240116164212', 2, 1, '', 5000, '', 'factory user', 0),
('20240129141726', '202401291417263', 'MBD', '20240123154227', '20240129142843', 1, 5, 'MOTHER BOARD H510M', 11500, '', 'factory user', 0),
('20240129141726', '202401291417264', 'RAM', '20240123154626', '20240129142957', 1, 5, 'RAM DDR4 8GB', 3300, '', 'factory user', 0),
('20240129141726', '202401291417265', 'OFUPS', '20240120124900', '20240129143020', 2, 1, 'UPS 650KVA', 3800, '', '', 0),
('20240130095158', '202401300951580', 'MNT', '20240123154219', '20240117104145', 1, 5, 'For  Braisal Depor', 12500, 'Still not receive this product', 'Barisal Depot (Mr. Rajib Hossain)', 1),
('20240130095158', '202401300951581', 'PSU', '20240123154538', '20240117104145', 1, 5, 'For Credit & Legal Department', 1500, 'Still not receive this product', 'Mr. Rokybul Islam Rakib', 1),
('20240130110115', '202401301101150', 'CBTR', '20240123153749', '20240117104145', 12, 1, 'For CMOS related machine use', 50, '', 'Sagar - HRD', 0),
('20240130112105', '202401301121050', 'PSU', '20240123154538', '20240117104145', 4, 1, 'Value Top PS', 1500, '', 'Emergency support', 1),
('20240130112105', '202401301121051', 'TNR', '20240111140250', '20240117104145', 2, 1, 'ASTA Toner 80A', 1300, '', 'Emergency support', 1),
('20240130112105', '202401301121052', 'WMS', '20240120125612', '20240120115732', 2, 1, 'A4 Tech Wireless mouse', 900, '', 'Emergency support', 1),
('20240130112105', '202401301121053', 'CBTR', '20240123153749', '20240117104145', 8, 1, 'CMOS Battery', 50, '', 'Emergency support', 1),
('20240130112105', '202401301127520', 'VGCBL', '20240130112527', '20240117104145', 2, 1, '', 300, '', 'Emergency support', 1),
('20240129141726', '202401301316320', 'PRCR', '20240129142718', '20240129142825', 1, 5, '', 15000, '', '', 0),
('20240129141726', '202401301316321', 'SSD', '20240130131659', '20240116164212', 1, 5, 'SSD 128GB', 2800, '', '', 0),
('20240129141726', '202401301527050', 'UBTR', '20240130152355', '20240129143020', 2, 1, 'UPS BATTERY 12V', 1550, '', 'factory user', 0),
('20240130153051', '202401301530510', 'CTG', '20240113095331', '20240120115642', 1, 5, '', 3200, '', 'qc inspection', 0),
('20240130153051', '202401301530511', 'CTG', '20240113095344', '20240120115642', 1, 5, '', 3600, '', 'qc inspection', 0),
('20240130164733', '202401301647330', 'TNR', '20240113094956', '20240130112137', 4, 1, 'ASTA HP supported toner', 1250, 'For 4 months use', 'EMS users', 1),
('20240130164733', '202401301701060', 'CCTV', '20240130165846', '20240117104145', 1, 1, 'Dahua 2MP IR Bullet IP Cam', 4500, 'Replace faulty cam', 'EMS', 1),
('20240130170506', '202401301705060', 'CPRDM', '20240130163121', '20240130160104', 1, 5, 'Photocopy ', 3400, '', 'HR Photocopy', 1),
('20240130170506', '202401301705061', 'DCB', '20240130155953', '20240130160104', 1, 5, 'Photocopy ', 1500, '', 'HR Photocopy', 1),
('20240130170506', '202401301705062', 'RCB', '20240130162957', '20240130160104', 2, 1, 'Photocopy ', 1200, '', 'HR Photocopy', 1),
('20240130170506', '202401301705063', 'HTRPCR', '20240130163333', '20240130160104', 1, 5, 'Photocopy ', 3200, '', 'HR Photocopy', 1),
('20240130170506', '202401301705064', 'CSR', '20240130163436', '20240130160104', 1, 5, 'Photocopy ', 3000, '', 'HR Photocopy', 1),
('20240130170506', '202401301705065', 'CPRDR', '20240130163530', '20240130160104', 1, 5, 'Photocopy ', 4800, '', 'HR Photocopy', 1),
('20240130171124', '202401301711240', 'MBD', '20240123154227', '20240117104145', 1, 5, 'ATPJET 41855 4 HEAD PLOTTER MACHINE MOTHER BOARD', 70000, 'CAD repair', 'CAD', 0),
('20240130171730', '202401301717300', 'BTR', '20240130171605', '20240117104145', 5, 1, 'ZTECO', 300, 'ACCESS CONTROL', 'HR ', 0),
('20240130171946', '202401301719460', 'TABLET', '', '20240117104145', 1, 5, 'TABLET (SAMSUNG GALAXY A7 LITE RAM 4 GB ROM 128GB REAR CAMERA 12MP', 35000, 'QC WORK', 'QC', 0),
('20240131112844', '202401311128440', 'PTRFF', '20240123153940', '20240129101429', 1, 1, 'HP LJ 400', 700, 'Replace faulty fuser film', 'Store', 1),
('20240131112844', '202401311128441', 'PTRPR', '20240121124221', '20240129101429', 1, 1, 'HP LJ 400', 1400, 'Replace faulty fuser film', 'Store', 1),
('20240131120927', '202401311209270', 'LBTR', '20240129101327', '20240129101429', 1, 1, '', 3200, '', 'Jahangir', 0),
('20240131122815', '202401311228150', 'OFUPS', '20240120124913', '20240117104145', 1, 1, '1200 VA', 7100, '', 'Helal', 0),
('20240131125216', '202401311252160', 'CPRDM', '20240123153839', '20240117104145', 1, 1, '', 4500, 'Accounts', '', 0),
('20240131125216', '202401311252161', 'CPRDR', '20240123153831', '20240117104145', 1, 1, '', 5500, 'Accounts', '', 0),
('20240131125216', '202401311252162', 'RCB', '20240124160337', '20240117104145', 1, 1, '', 1200, 'Accounts', '', 0),
('20240131125216', '202401311252163', 'CLB', '20240124160451', '20240117104145', 1, 1, '', 1500, 'Accounts', '', 0),
('20240131125216', '202401311252164', 'HTRPCR', '20240123154015', '20240117104145', 1, 1, '', 4200, 'Accounts', '', 0),
('20240131125216', '202401311252165', 'CSR', '20240124160157', '20240117104145', 5, 1, '', 500, 'Accounts', '', 0),
('20240131125216', '202401311252166', 'PTRPR', '20240123154548', '20240117104145', 1, 1, '', 4800, 'Accounts', '', 0),
('20240131131310', '202401311313100', 'UBTR', '20240130152355', '20240129143020', 6, 1, '', 1550, '', 'Stock Item', 0),
('20240131131310', '202401311313101', 'UMS', '20240120125552', '20240117104145', 10, 1, '', 500, '', '', 0),
('20240131131310', '202401311313102', 'IPT', '20240123154024', '20240117104145', 2, 1, '', 4800, '', '', 0),
('20240131131310', '202401311313103', 'HP', '20240123154005', '20240117104145', 1, 1, '', 2000, '', '', 0),
('20240131131310', '202401311313104', 'SSD', '20240130131720', '20240117104145', 2, 1, '', 7000, '', '', 1),
('20240131131310', '202401311313105', 'PTRPR', '20240121125832', '20240117104145', 1, 1, '', 4800, '', '', 1),
('20240131132001', '202401311320010', 'UBTR', '20240130152355', '20240129143020', 6, 1, '', 1550, '', '', 0),
('20240131132001', '202401311320011', 'PSU', '20240123154538', '20240130112130', 2, 1, '', 1500, '', '', 0),
('20240131132001', '202401311320012', 'VGCBL', '20240130112527', '20240117104145', 6, 1, '', 350, '', '', 0),
('20240131132001', '202401311320013', 'OFUPS', '20240120124900', '20240129143032', 1, 1, '600va', 3300, '', '', 0),
('20240131132357', '202401311323570', 'LPT', '20240111125019', '20240129142843', 1, 1, 'Corei5,8RGRAM,256SSD,1TB HDD', 85000, '', 'Shafiur rahman', 0),
('20240130171946', '202401311446210', 'TABLET', '20240131144512', '20240129142832', 1, 5, 'TABLET (SAMSUNG GALAXY A7 LITE RAM 4 GB ROM 128GB REAR CAMERA 12MP', 35000, 'QUALITY ONLINE DATA UPDATE', 'QA INSEPECTION', 0),
('20240131150101', '202401311501010', 'TNR', '20240113094956', '20240130112137', 5, 1, '', 1250, '', 'FACTORY', 0),
('20240131150101', '202401311501011', 'TNR', '20240111140218', '20240130112137', 2, 1, '', 1650, '', 'FACTORY', 0),
('20240131150101', '202401311501012', 'TNR', '20240131145730', '20240130112137', 1, 5, '', 1200, '', 'FACTORY', 0),
('20240131150101', '202401311501013', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 2950, '', 'FACTORY', 0),
('20240131150735', '202401311507350', 'UMS', '20240120125552', '20240130160104', 2, 1, 'MOUSE USB -A4TECH', 450, '', 'FACTORY', 0),
('20240131150735', '202401311507351', 'HDD', '20240121120834', '20240130160104', 1, 5, 'HDD (DESKTOP) 1 TB SATA WESTERN', 5000, '', 'FACTORY', 0),
('20240131150735', '202401311507352', 'MPD', '20240129112346', '20240130160104', 2, 1, '', 150, '', 'FACTORY', 0),
('20240131150735', '202401311507353', 'PTRFF', '20240123153940', '20240129101429', 4, 1, 'FUSER FILM 1102', 750, '', 'FACTORY', 0),
('20240131150735', '202401311507354', 'PTRPR', '20240123154548', '20240129101429', 1, 5, 'PRESSURE ROLLER 400', 2000, '', 'FACTORY', 0),
('20240131150735', '202401311507355', 'PTRPR', '20240123154548', '20240129101429', 1, 5, 'PRESSURE ROLLER 402', 2000, '', 'FACTORY', 0),
('20240131151533', '202401311515330', 'Wifi', '20240127121433', '20240127121456', 2, 1, 'TP-LINK TL-WR 840N 3000BPS', 2000, '', 'FACTORY', 0),
('20240131151533', '202401311515331', 'CBL', '20240113113547', '20240117105230', 1, 5, 'CAT-6 CABLE (GREEN) DINTEK', 19400, '', 'FACTORY', 0),
('20240131152206', '202401311522060', 'CPRDM', '20240130163152', '20240130160104', 1, 5, '', 3500, '', 'HR', 0),
('20240131152206', '202401311522061', 'CPRDR', '20240130163600', '20240130160104', 1, 5, '', 3500, '', 'HR', 0),
('20240131152206', '202401311522062', 'DCB', '20240130160039', '20240130160104', 1, 5, '', 1500, '', 'HR', 0),
('20240131152206', '202401311522063', 'HTRPCR', '20240130163407', '20240130160104', 1, 5, '', 2200, '', 'HR', 0),
('20240131152206', '202401311522064', 'CSR', '20240130163514', '20240130160104', 1, 5, '', 2500, '', 'HR', 0),
('20240131152601', '202401311526010', 'MNT', '20240131152426', '20240129101429', 1, 5, 'MONITOR 22\"V22V HP FOR CAD', 13000, '', '', 0),
('20240131173224', '202401311732240', 'LBTR', '20240131173030', '20240129101429', 1, 1, 'Replace faulty battery', 4000, 'Replace faulty battery', 'Nazmul Sumon', 0),
('20240201122801', '202402011228010', 'CTG', '20240113095331', '20240120115642', 1, 1, '', 3200, '', 'Deb', 1),
('20240201122801', '202402011228011', 'CTG', '20240113095344', '20240120115642', 1, 1, '', 3600, '', 'Deb', 1),
('20240201122801', '202402011228012', 'ULC', '20240123154724', '20240117104145', 1, 1, 'Yuanxin X-3328L USB male to 3 USB Female', 1000, 'Replace faulty USB Hub', 'Deb', 1),
('20240201150128', '202402011501280', 'TNR', '20240111140218', '20240130112137', 1, 5, '', 1650, '', 'FACTORY USER', 0),
('20240201150128', '202402011501281', 'TNR', '20240113094956', '20240130112137', 1, 5, '', 1250, '', 'FACTORY USER', 0),
('20240201150128', '202402011501282', 'TNR', '20240113103017', '20240130112137', 3, 1, '', 1200, '', 'FACTORY USER', 0),
('20240201150128', '202402011501283', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 2950, '', 'FACTORY USER', 0),
('20240201150128', '202402011501284', 'CTG', '20240113095222', '20240129101429', 12, 1, '', 2060, '', 'FACTORY USER', 0),
('20240203104410', '202402031044100', 'TNR', '20240111140250', '20240130112137', 1, 5, '', 1700, '', 'FACTORY', 0),
('20240203104410', '202402031044101', 'TNR', '20240111140218', '20240130112137', 2, 1, '', 1700, '', 'FACTORY', 0),
('20240203104410', '202402031044102', 'TNR', '20240113103017', '20240130112137', 1, 5, '', 1300, '', 'FACTORY', 0),
('20240203104410', '202402031044103', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 3000, '', 'FACTORY', 0),
('20240203104410', '202402031044104', 'CTG', '20240113095222', '20240129101429', 8, 1, '', 2060, '', 'FACTORY', 0),
('20240203104833', '202402031048330', 'UMS', '20240123154239', '20240120115732', 2, 1, '', 500, '', 'FACTR', 0),
('20240203104833', '202402031048331', 'UKB', '20240123154047', '20240120115732', 2, 1, '', 900, '', 'FACTR', 0),
('20240203104833', '202402031048332', 'WMS', '20240123154251', '20240120115732', 1, 5, '', 900, '', 'FACTR', 0),
('20240203104833', '202402031048333', 'MBD', '20240123154227', '20240129142843', 1, 5, 'MOTHER BOARD G510M-H', 11500, '', 'FACTR', 0),
('20240203104833', '202402031048334', 'PRCR', '20240129142718', '20240129142825', 1, 5, 'INTEL 10G ', 15500, '', 'FACTR', 0),
('20240203104833', '202402031048335', 'RAM', '20240123154626', '20240129142957', 1, 5, '8GB 3200MHZ', 3300, '', 'FACTR', 0),
('20240203104833', '202402031051120', 'NC', '20240203104945', '20240203104959', 40, 1, '', 32.5, '', 'FACTORY', 0),
('20240203114901', '202402031149010', 'TABLET', '20240203114039', '20240129142832', 1, 1, 'Galaxy S6 Lite, SIM supported, 4/64', 40000, 'New tab for advisor of Textile', 'Mr. Kamran - Advisor', 1),
('20240203153913', '202402031539130', 'IPT', '20240113122908', '20240117104145', 1, 1, 'Grandstream GRP 2601P', 4600, 'Replace faulty IP Phone', 'Ashraf - A/C', 1),
('20240204093045', '202402040930450', 'OFUPS', '20240120124900', '20240130112130', 1, 1, '', 3200, '', 'Shahin -Commercial', 0),
('20240204093439', '202402040934390', 'HDD', '20240121120834', '20240116164212', 1, 1, 'Data Back for Kothokotha /Scolarship Video', 7000, '', 'SubonPathang/Rumana', 0),
('20240204103004', '202402041030040', 'AR', '20240204102806', '20240204102841', 1, 5, '', 35000, '', 'FACTORY WOKRER', 0),
('20240204104619', '202402041046190', 'HDD', '20240121120834', '20240116164212', 1, 1, 'WD 1TB Original', 4800, 'Replace faulty HDD', 'Washim -Store', 1),
('20240204104619', '202402041046191', 'WMS', '20240120125612', '20240120115732', 1, 1, 'A4 Tech Wireless mouse', 850, 'Replace faulty mouse', 'Store stock', 1),
('20240120125700', '202402041100170', 'CTG', '20240113095344', '20240120115642', 1, 1, 'COLOUR', 3600, '', 'All users', 1),
('20240204110751', '202402041107510', 'SSD', '20240130131720', '20240204110504', 1, 1, 'Transcend 512 SATA Type SSD', 6500, 'Replace fulty SSD', 'Imtiajur - Planning', 0),
('20240204125442', '202402041254420', 'IPT', '20240113122908', '20240204125303', 1, 1, 'POE IP Phone', 4600, 'Replace faulty IPT', 'Syamol - Dy. Manager', 1),
('20240205093447', '202402050934470', 'UMS', '20240120125552', '20240117104145', 6, 1, '', 450, 'Montly Sotck ', 'HO', 1),
('20240205093447', '202402050934471', 'WMS', '20240120125612', '20240120115732', 3, 1, '', 750, 'Montly Sotck ', 'HO', 1),
('20240205093447', '202402050934472', 'IPT', '20240113122908', '20240204125303', 3, 1, '', 4600, 'Montly Sotck ', 'HO', 1),
('20240205093447', '202402050934473', 'HP', '20240123154005', '20240117104145', 1, 1, 'Logitech', 1000, 'Montly Sotck ', 'HO', 1),
('20240205094758', '202402050947580', 'TNR', '20240111140250', '20240130112137', 5, 1, 'Montly Stock Item-BGL', 1300, 'Montly Stock Item-', 'BGL', 1),
('20240205094758', '202402050947581', 'TNR', '20240123154716', '20240130112137', 1, 1, '53A', 1300, 'Montly Stock Item-', 'BGL', 1),
('20240205094758', '202402050947582', 'TNR', '20240113094754', '20240130112137', 2, 1, '', 2950, 'Montly Stock Item-', 'BGL', 1),
('20240205094758', '202402050947583', 'TNR', '20240123154716', '20240117104145', 1, 1, 'Toshiba photocopier Toner', 9500, 'Montly Stock Item-', 'BGL', 1),
('20240205094758', '202402050947584', 'CTG', '20240113095222', '20240117104145', 12, 1, 'For CAD plotter', 2060, 'Montly Stock Item-', 'BGL', 1),
('20240205095602', '202402050956020', 'MPD', '20240129112346', '20240117104145', 5, 1, '', 150, 'Montly Stock Item-', 'BGL', 1),
('20240205095602', '202402050956021', 'UKB', '20240120125759', '20240120115732', 4, 1, '', 800, 'Montly Stock Item-', 'BGL', 1),
('20240205095602', '202402050956022', 'PSU', '20240123154538', '20240130112130', 2, 1, '', 1500, 'Montly Stock Item-', 'BGL', 1),
('20240205095602', '202402050956023', 'PTRPR', '20240121124221', '20240117104145', 1, 1, '', 1500, 'Montly Stock Item-', 'BGL', 1),
('20240205100146', '202402051001460', 'TNR', '20240125133141', '20240130112137', 1, 1, '', 1600, 'Montly Stock Item-', 'HO', 1),
('20240205100146', '202402051001461', 'TNR', '20240131145730', '20240130112137', 2, 1, '', 1250, 'Montly Stock Item-', 'HO', 1),
('20240205100146', '202402051001462', 'TNR', '20240113094754', '20240130112137', 4, 1, '', 1250, 'Montly Stock Item-', 'HO', 1),
('20240205100146', '202402051001463', 'TNR', '20240123154716', '20240117104145', 2, 1, 'Toshiba Photocopier 5018C', 9500, 'Montly Stock Item-', 'HO', 1),
('20240205100146', '202402051001464', 'CTG', '20240113095344', '20240120115642', 2, 1, 'Canon IP2772', 2500, 'Montly Stock Item-', 'HO', 1),
('20240205100435', '202402051004350', 'Wifi', '20240127121433', '20240117104145', 2, 1, 'Pocket Router GP', 3200, 'Inspection Room For Buyer ', 'Inspection Buyer ', 0),
('20240206134030', '202402061340300', 'PTR', '20240123154558', '20240117104145', 1, 1, 'Epson LQ-310 Dot marix printer', 23500, 'Bogura Depot ', 'Bogura Depot ', 1),
('20240206163347', '202402061633470', 'PHTNR', '20240206162856', '20240130160104', 1, 1, 'Toshiba 3008P Toner', 9500, 'Monthly', 'M&M users', 0),
('20240206163347', '202402061633471', 'PHTNR', '20240206162910', '20240130160104', 1, 1, 'Toshiba 5018C Toner', 9500, 'Monthly', 'Comm users', 0),
('20240207105905', '202402071059050', 'TCPASTE', '20240207104259', '20240117104145', 1, 1, 'Processor cooler paste', 100, '', 'IT use', 0),
('20240207105905', '202402071059051', 'SENCL', '20240207105058', '20240117104145', 1, 1, 'UGREAN CM400 M.2 NVMe/SATA SSD Enclosure', 3100, '', 'IT use', 0),
('20240207105905', '202402071059052', 'CCLR', '20240207105311', '20240117104145', 1, 1, 'Contact cleaner', 1600, '', 'IT use', 0),
('20240211161835', '202402111618350', 'RADF', '20240211161611', '20240130160104', 1, 1, 'Photocopy Machine Tray', 35000, 'Approve by Salam sir', 'Treasury', 1),
('20240212160538', '202402121605380', 'TNR', '20240111140250', '20240130112137', 3, 1, 'For 3 months', 1400, '', 'Accounts', 1),
('20240215104813', '202402151048130', 'SCN', '20240114102233', '20240120115642', 1, 1, 'For maintenance dpet differnt documents scanning purpose. ', 10000, 'Important docs scanning purpose', 'Mnts team', 1),
('20240215130826', '202402151308260', 'LKB', '20240123154150', '20240117104145', 1, 1, 'Hp Prpbook 440 G2', 2000, '', 'Nazmul-COM', 0),
('20240217154911', '202402171549110', 'HDD', '20240121120834', '20240116164212', 1, 1, 'Replace faulty HDD', 5000, '', 'Mahbub Alam- MNTS', 1),
('20240219162217', '202402191622170', 'MCVTR', '20240123153757', '20240117104145', 1, 1, 'USB to LAN Converter', 1000, 'Built lan is damaged', 'Jahidul', 0),
('20240222110741', '202402221107410', 'TNR', '20240125133141', '20240130112137', 4, 1, 'For the month of March 2024', 1650, '', 'Knitting & HRD', 1),
('20240222110741', '202402221107411', 'UKB', '20240120125759', '20240120115732', 6, 1, 'For the month of March 2024', 850, '', 'Store stock', 1),
('20240222110741', '202402221107412', 'UMS', '20240120125552', '20240120115732', 4, 1, 'For the month of March 2024', 400, '', 'Store stock', 1),
('20240224153641', '202402241536410', 'CTG', '20240113095222', '20240129101429', 8, 1, 'CAD Cartridge', 2000, '', 'CAD users', 1),
('20240227102825', '202402271028250', 'TNR', '20240111140218', '20240130112137', 2, 1, '', 1650, '', 'All users', 1),
('20240227150640', '202402271506400', 'MBD', '20240123154227', '20240117104145', 1, 1, 'Gigabyte H510M', 11500, 'replace faulty Motherboard', 'Osman - HRD', 1),
('20240229131625', '202402291316250', 'UKB', '20240120125759', '20240120115732', 3, 1, 'with numeric KB', 900, '', 'Store stock', 0),
('20240229131625', '202402291316251', 'TNR', '20240131145730', '20240130112137', 2, 1, '', 1200, '', 'Store stock', 0),
('20240229131625', '202402291316252', 'UMS', '20240120125552', '20240120115732', 4, 1, 'A4 Tech Good quality', 400, '', 'Store stock', 0),
('20240229131625', '202402291316253', 'WMS', '20240120125612', '20240120115732', 2, 1, 'A4 Tech Good quality', 900, '', 'Store stock', 0),
('20240229131625', '202402291316254', 'CTG', '20240123153733', '20240117104145', 2, 1, 'Lexmark 664 (Black)', 600, '', 'Store stock', 0),
('20240229131625', '202402291317560', 'IPSW', '20240229131215', '20240117104145', 50, 1, '', 50, 'Emergency support', 'Store Stock', 0),
('20240205095602', '202402291350000', 'PCK', '20240229134701', '20240117104145', 10, 1, '', 3600, '', 'CAD', 1),
('20240229143134', '202402291431340', 'DKTP', '20240111125117', '20240117104145', 1, 1, '', 60000, '', 'Mahbub Alam-CAD', 0),
('20240229153519', '202402291535190', 'MNT', '20240131152405', '20240117104145', 1, 1, '', 11500, 'Dell', '', 1),
('20240229181723', '202402291817230', 'LPT', '20240111125009', '20240129142843', 1, 1, 'Corei3,8GB RAM,256 SDD,1TB HDD', 65000, '', 'Sajjad Hossain', 0),
('20240302172058', '202403021720580', 'OFUPS', '20240120124913', '20240129143032', 1, 1, 'Power Guard ', 8500, '', 'Saiful Islam', 0),
('20240303131101', '202403031311010', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP ProBook 450 G4', 2000, 'Replace faulty Kayboard', 'Manjurul', 1),
('20240303132652', '202403031326520', 'RJC', '20240123154635', '20240203104959', 2, 2, '20 Pcs each box', 550, 'For Sedomaster network', 'For Sedomaster network', 1),
('20240304152430', '202403041524300', 'SVR', '20240304135039', '20240129101429', 1, 1, 'HPE ProLiant DL20\r\nGen10 Plus 4SFF CTO Server 1 x Intel Xeon\r\nE-2314', 418000, 'SedoMaster Server', 'SedoMaster Server', 0),
('20240304152430', '202403041524301', 'WINDS', '20240304135355', '20240117104145', 1, 1, 'Windows Server 2022 License', 51000, 'SedoMaster Server', 'SedoMaster Server', 0),
('20240304152430', '202403041524302', 'DKTP', '20240111125117', '20240117104145', 4, 4, '12th Gen Core i5 Processor,  Mother Board 12th Gen, RAM 16GBDDRR4, (8x2) SSD 512GB 2280 (type M2), Desktop Casing, Keyboard A4Tech, Mouse\r\nA4Tech, LG 24\"\" Monitor, UPS\r\n1200va', 77650, 'SedoMaster Server', 'SedoMaster Server', 0),
('20240304152430', '202403041524303', 'OUPS', '20240120125100', '20240304135155', 1, 1, 'Online UPS Capacity: 3000 VA /\r\n3000W / 2700W / 2400W AC\r\nMode: 93% LED Panel: UPS', 35000, 'SedoMaster Server', 'Server backup', 0),
('20240304152430', '202403041524304', 'CBL', '20240113113547', '20240117105230', 9, 2, 'CAT 6 UTP Network cable', 19400, 'SedoMaster Server Network', 'SedoMaster ', 1),
('20240304152430', '202403041524305', 'NTSW', '20240123154310', '20240117104145', 1, 1, 'Cisco POE SG350 28P ', 52000, 'SedoMaster Server Network', 'SedoMaster ', 1),
('20240304152933', '202403041529330', 'SEDOMs', '20240304134729', '20240117104145', 1, 12, 'SedoMaster Advanced System (including 1 workstation, 04 additional user license, 05 OPC controller, VAT & AIT 50+3%)', 9304400, 'Dying monitoring ', 'Dying ', 0),
('20240304154545', '202403041545450', 'NTRK', '20240123154301', '20240117105342', 1, 1, '9U Wall mount with PDU', 17200, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545451', 'WM', '20240123154740', '20240117105342', 1, 1, '1U Wire manager panel', 1400, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545452', 'PP', '20240123154437', '20240117105230', 1, 1, 'Cat6 24Port Patch Panel ', 11800, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545453', 'CBL', '20240123154732', '20240117105230', 20, 1, '.5m UTP Cable', 330, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545454', 'RJC', '20240123154635', '20240117105230', 20, 1, 'CAT6 RJ45 Connector ', 35, 'SedoMaster Network', 'Dying', 1),
('20240304162555', '202403041625550', 'HDD', '20240121120834', '20240116164212', 1, 1, 'Replace faulty HDD', 5000, 'Replace faulty HDD', 'Milon', 0),
('20240305101452', '202403051014520', 'PHTNR', '20240206162910', '20240130160104', 1, 1, '', 8500, '', 'Treasury ', 1),
('20240305110041', '202403051100410', 'CTG', '20240113095331', '20240120115642', 1, 1, '', 4100, 'Monthly ', 'HRD', 0),
('20240305110041', '202403051100411', 'CTG', '20240113095344', '20240120115642', 1, 1, '', 4100, 'Monthly ', 'HRD', 0),
('20240305110041', '202403051100412', 'WMS', '20240120125612', '20240120115732', 1, 1, '', 1000, 'Monthly ', 'HoO', 0),
('20240305110041', '202403051100413', 'UKB', '20240120125759', '20240120115732', 2, 1, '', 800, 'Monthly ', 'Store stock', 0),
('20240305110041', '202403051100414', 'HDD', '20240121120834', '20240116164212', 1, 1, '7200rpm', 4600, 'Emergency support', 'Store stock', 0),
('20240305110041', '202403051100415', 'CCTV', '20240130165846', '20240117104145', 2, 1, 'Dahua DH-IPC-HFW 1230S-S5', 4800, 'Rooftop safety purpose', 'HRD', 0),
('20240305110041', '202403051100416', 'CBL', '20240113113547', '20240117105230', 1, 2, '', 19600, 'Rooftop safety purpose', 'HRD', 0),
('20240305151132', '202403051511320', 'MBD', '20240305145310', '20240129142843', 1, 1, 'Core i3 supported MB', 11000, 'Replace faulty MB', 'Ratan', 0),
('20240305151132', '202403051511321', 'RAM', '20240123154626', '20240117104145', 1, 1, '8GB DDR4 Hynix', 2500, 'Replace faulty RAM', 'Ratan', 0),
('20240305165158', '202403051651580', 'LPT', '20240111125009', '20240129142843', 1, 1, 'Core i5, 8GB, SSD250GB, HDD1TB, 14” Display', 85000, 'Replacement device', 'Quazi Quadiruzzaman', 0),
('20240307165202', '202403071652020', 'MNT', '20240131152405', '20240129101429', 1, 1, '18.5\" Sq LED  monitor', 9500, 'Replace faulty monitor (Panel damaged) ', 'Mozaffor', 0),
('20240309154604', '202403091546040', 'PTR', '20240123154558', '20240129101429', 1, 5, 'PRINTER HP LASERJET PRO 501DN', 74800, '', 'FINISHING USER', 0),
('20240309154857', '202403091548570', 'AR', '20240204102806', '20240204102841', 1, 5, 'ZKTECO ATTENDANCE MACHINE (REPLACE)\r\n', 35000, '', 'HRD ATTENDANCE USER', 0),
('20240309155151', '202403091551510', 'CCTV', '20240130165846', '20240117104145', 10, 1, 'Dahua IPC HFW1280', 4800, 'Replace faulty camera', 'Pdn ground floor', 0),
('20240309155151', '202403091551511', 'HDD', '20240116164039', '20240116164212', 1, 1, '6TB WD Purple ', 21000, 'CCTV  storage purpose', 'Pdn ground floor', 0),
('20240309155151', '202403091551512', 'CBL', '20240113113547', '20240117105230', 1, 2, 'UTP CAT6 Cable', 19500, 'CCTV Network', 'Pdn ground floor', 0),
('20240309155410', '202403091554100', 'TNR', '20240113094956', '20240130112137', 5, 1, '', 1300, '', 'FACTORY', 0),
('20240309155410', '202403091554101', 'TNR', '20240131145730', '20240130112137', 1, 5, '', 1300, '', 'FACTORY', 0),
('20240309155410', '202403091554102', 'CTG', '20240113095222', '20240129101429', 8, 4, '', 2060, '', 'FACTORY', 0),
('20240309155410', '202403091554103', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 3000, '', 'FACTORY', 0),
('20240309155410', '202403091554104', 'TNR', '20240111140250', '20240130112137', 1, 5, '', 1700, '', 'FACTORY', 0),
('20240309161329', '202403091613290', 'UMS', '20240120125552', '20240120115732', 2, 1, 'USB MOUSE A4TECH', 400, '', 'FACTORY', 0),
('20240309161329', '202403091613291', 'UKB', '20240120125759', '20240120115732', 2, 1, 'USB KEYBOARD A4TECH', 750, '', 'FACTORY', 0),
('20240309161329', '202403091613292', 'PSU', '20240123154538', '20240117104145', 1, 1, 'POWER SUPPLY', 3000, '', 'FACTORY', 0),
('20240309161329', '202403091613293', 'UBTR', '20240130152355', '20240129143020', 3, 5, 'UPS BATTERY 12V 9A K-STAR', 1900, '', 'FACTORY', 0),
('20240309161329', '202403091613294', 'HDD', '20240121120834', '20240129142957', 1, 5, 'HDD WD 1 TB', 5000, '', 'FACTORY', 0),
('20240309161329', '202403091613295', 'MPD', '20240129112346', '20240117104145', 2, 1, 'Mouse Pad', 150, '', 'FACTORY', 0),
('20240309161329', '202403091613296', 'WMS', '20240120125612', '20240120115732', 1, 5, 'Mouse Wireless', 900, '', 'FACTORY', 0),
('20240309161329', '202403091613297', 'PTRFF', '20240123153940', '20240129101429', 3, 1, 'Fuser Film', 1000, '', 'Factory', 0),
('20240309161329', '202403091613298', 'PTRPR', '20240121124221', '20240129101429', 1, 5, 'Pressure Roller ', 1000, '', 'Factory', 0),
('20240309161329', '202403091617150', 'PRCR', '20240309161423', '20240129142825', 1, 5, 'PROCESSOR i5 11th GENERATION INTEL', 20500, '', 'Factory', 0),
('20240309164632', '202403091646320', 'UMS', '20240120125552', '20240120115732', 2, 1, 'MOUSE USB', 400, '', '', 0),
('20240309164632', '202403091646321', 'WMS', '20240120125612', '20240120115732', 1, 5, 'MOUSE WIRELESS LOGITECH', 1100, '', '', 0),
('20240309164632', '202403091646322', 'MBD', '20240305145310', '20240129142843', 1, 5, 'MOTHER BOARD H510M', 10400, '', '', 0),
('20240309164632', '202403091646323', 'RAM', '20240123154626', '20240129142957', 1, 5, 'RAM DDR4 8GB', 2400, '', '', 0),
('20240309164632', '202403091646324', 'PRCR', '20240309161438', '20240129142825', 1, 5, 'PROCESSOR CORE -3 10GN', 12700, '', '', 0),
('20240309164632', '202403091646325', 'OFUPS', '20240120124900', '20240129143020', 1, 5, 'UPS 650KVA', 3300, '', '', 0),
('20240309164632', '202403091646326', 'UBTR', '20240130152355', '20240129143020', 2, 1, 'UPS BATTERY 12V', 1250, '', '', 0),
('20240309164632', '202403091646327', 'CSG', '20240123153741', '20240130112130', 1, 5, 'CPU CASING', 2500, '', '', 0),
('20240309164632', '202403091646328', 'SSD', '20240130131659', '20240129142957', 1, 5, 'SSD 128GB', 1600, '', '', 0),
('20240309170845', '202403091708450', 'TABLET', '20240203114039', '20240129142832', 1, 1, '10.4\"', 42000, 'TAO inspection TAB (Mail attached)', 'Jel Haque', 0),
('20240309171153', '202403091711530', 'IPT', '20240113122908', '20240204125303', 3, 1, 'IP TELEPHONE (IP 2601)', 4300, '', 'Factory', 1),
('20240309171949', '202403091719490', 'LPT', '20240123154116', '20240129142843', 1, 5, 'laptop asus expert book b1 core i3, 11th gen, 15.6 ssd ram 8gb ddr4 3200mhz ', 60000, 'laptop asus expert book b1 core i3, 11th gen, 15.6 ssd ram 8gb ddr4 3200mhz', 'OFFICE', 0),
('20240309172214', '202403091722140', 'PHTNR', '20240206162945', '20240130160104', 1, 5, 'TONER 2340D FOR PHOTOCOPY M/C ', 3300, '', 'FACTORY', 0),
('20240309172442', '202403091724420', 'LCRG', '20240123154134', '20240129101429', 1, 5, 'LAPTOP ADAPTER', 2500, 'LAPTOP ADAPTER\r\n', 'FACTORY', 0),
('20240309172659', '202403091726590', 'AR', '20240204102806', '20240204102841', 2, 1, 'FACE PUNCH MACHINE ZKT-900', 28000, 'FACE PUNCH MACHINE ZKT-900', 'FACTORY', 0),
('20240309173516', '202403091735160', 'UKB', '20240120125759', '20240120115732', 3, 1, 'KEYBOARD USB', 900, '', '', 0),
('20240309173516', '202403091735161', 'UMS', '20240120125552', '20240120115732', 3, 1, 'MOUSE USB\r\n', 400, '', '', 0),
('20240309173516', '202403091735162', 'WMS', '20240120125612', '20240117104145', 1, 5, 'MOUSE WIRELESS LOGITECH', 1200, '', '', 0),
('20240309173516', '202403091735163', 'HDD', '20240121120834', '20240116164212', 1, 5, 'DESKTOP HARD DRIVE 1', 5000, '', '', 0),
('20240309173516', '202403091735164', 'MBD', '20240123154227', '20240129142843', 1, 5, 'MOTHER BOARD H510M', 10500, '', '', 0),
('20240309173516', '202403091735165', 'RAM', '20240123154626', '20240129142957', 1, 5, 'RAM DDR4 8GB', 2400, '', '', 0),
('20240309173516', '202403091735166', 'PRCR', '20240309161438', '20240129142825', 1, 5, 'PROCESSOR CORE -3 10GN', 12700, '', '', 0),
('20240309180218', '202403091802180', 'TNR', '20240111140250', '20240130112137', 2, 1, 'TONER 80A/05A', 1300, '', 'FACTORY', 0),
('20240309180218', '202403091802181', 'TNR', '20240113094956', '20240130112137', 2, 1, 'TONER 85A', 1200, '', '', 0),
('20240309180218', '202403091802182', 'TNR', '20240113103017', '20240130112137', 2, 1, 'TONER 326A', 1200, '', '', 0),
('20240309180218', '202403091802183', 'TNR', '20240113095022', '20240130112137', 2, 1, 'TONER 87A', 2900, '', '', 0),
('20240309180218', '202403091802184', 'CTG', '20240113095222', '20240129101429', 12, 1, 'PLOTTER INK 45A', 2060, '', '', 0),
('20240310102835', '202403101028350', 'LPT', '20240111125019', '20240129142843', 2, 1, 'Core i7,16GB RAM,512 SSD,15.6 Inch', 145000, '', '', 1),
('20240310102835', '202403101028351', 'LPT', '20240123154116', '20240129142843', 8, 1, 'Corei5,8GB RAM,512 SSD', 85000, '', '', 0),
('20240310105418', '202403101054180', 'TNR', '20240113094733', '20240130112137', 5, 1, '', 1300, '', '', 0),
('20240310105418', '202403101054181', 'TNR', '20240113094956', '20240130112137', 2, 1, '', 1200, '', '', 0),
('20240310105418', '202403101054182', 'TNR', '20240131145730', '20240130112137', 3, 1, '', 1100, '', '', 0),
('20240310105418', '202403101054183', 'TNR', '20240123154716', '20240130112137', 2, 1, '44 A', 1400, '', '', 0),
('20240310105418', '202403101054184', 'TNR', '20240113095022', '20240130112137', 6, 1, '', 2950, '', '', 0),
('20240310105418', '202403101054185', 'CTG', '20240113095222', '20240117104145', 10, 1, 'BOK Brand', 2000, '', '', 0),
('20240310105818', '202403101058180', 'UMS', '20240120125552', '20240120115732', 6, 1, '', 400, '', '', 0),
('20240310105818', '202403101058181', 'PTRFF', '20240123153940', '20240117104145', 2, 1, 'HP 3015', 1400, '', '', 0),
('20240310105818', '202403101058182', 'PTRFF', '20240123153940', '20240117104145', 3, 1, 'HP 401', 800, '', '', 0),
('20240310105818', '202403101058183', 'PTRPR', '20240121124221', '20240117104145', 3, 1, 'HP 2035', 1200, '', '', 0),
('20240310111318', '202403101113180', 'TNR', '20240123154716', '20240130112137', 4, 1, '1 Set,Toner 410,411,412,413', 10300, '', 'DND', 0),
('20240310111318', '202403101113181', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '', 8500, '', 'HO', 0),
('20240310111318', '202403101117500', 'EPSINK', '20240310111009', '20240117104145', 2, 1, 'BK 664', 850, '', 'HO', 0),
('20240310111318', '202403101117501', 'RIB', '20240310111405', '20240117104145', 3, 1, '', 4000, '', 'HO', 0),
('20240310112218', '202403101122180', 'PTRFF', '20240123153940', '20240117104145', 1, 1, '', 1, '', '', 0),
('20240310120948', '202403101209480', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP 1000', 1500, '', 'Zahid-Audit-BASL', 0),
('20240310170111', '202403101701110', 'LPT', '20240111125009', '20240129142843', 1, 1, 'Core i3-8GB RAM-250GB SSD-1TB HDD-14\"', 68000, 'Existing Acer Travelmat laptop Motherboard has been damaged along with Network portion not working. ', 'Tanay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mpr_insert_id`
--

CREATE TABLE `mpr_insert_id` (
  `smprid` varchar(50) NOT NULL,
  `suserid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `fid` varchar(50) NOT NULL,
  `mdeptid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `mdesigid` int(11) NOT NULL,
  `mdate` date NOT NULL,
  `mmonth` varchar(15) NOT NULL,
  `myear` varchar(15) NOT NULL,
  `mpstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert_id`
--

INSERT INTO `mpr_insert_id` (`smprid`, `suserid`, `mprid`, `fid`, `mdeptid`, `name`, `mdesigid`, `mdate`, `mmonth`, `myear`, `mpstatus`) VALUES
('20240113113926', 'HO75', 'AKL7413', 'AKL', 1, 'Shukur Ali', 11, '2024-01-13', 'January', '2024', 0),
('20240113123136', 'HO75', 'ATL278060', 'ATL', 8, 'Badiul Alam', 72, '2024-01-13', 'January', '2024', 0),
('20240114102604', 'ho12', 'AFL16330', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-06', 'January', '2024', 0),
('20240114104041', 'ho12', 'AFL16316', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-01', 'January', '2024', 0),
('20240116164442', 'HO75', 'ATL278061', 'ATL', 8, 'Sumon Hossain', 63, '2024-01-16', 'January', '2024', 0),
('20240117111832', 'HO147', 'AFL16338', 'AFL', 8, 'Md. Jewel', 9, '2024-01-16', 'January', '2024', 0),
('20240117111833', '', '', '', 0, '', 0, '0000-00-00', 'January', '2024', 0),
('20240117115010', 'HO147', 'AFL16335', 'AFL', 8, 'Md. Jewel', 9, '2024-01-15', 'January', '2024', 0),
('20240120125700', 'HO75', 'BWL14199', 'BWL', 8, 'Abdul Halim Badal', 4, '2024-01-20', 'January', '2024', 0),
('20240121125759', '', '', '', 0, '', 0, '0000-00-00', 'January', '2024', 0),
('20240121125805', '', '', '', 0, '', 0, '0000-00-00', 'January', '2024', 0),
('20240121125819', 'HO75', 'ATL24390', 'ATL', 5, 'Mustakin Rahman', 9, '2024-01-21', 'January', '2024', 0),
('20240121130911', 'HO95', 'BGL18408', 'BGL', 9, 'Sushanto', 4, '2024-01-15', 'January', '2024', 0),
('20240121130912', '', '', '', 0, '', 0, '0000-00-00', 'January', '2024', 0),
('20240122103642', 'HO75', 'AKL7199', 'AKL', 10, 'Alamgir Sheak', 72, '2024-01-22', 'January', '2024', 0),
('20240125114230', 'HO75', 'AFL27390', 'AFL', 5, 'Mostakim Rahman', 9, '2024-01-21', 'January', '2024', 0),
('20240125133417', 'HO75', 'ATL278067', 'ATL', 8, 'Badiul Alam', 4, '2024-01-25', 'January', '2024', 0),
('20240127113145', 'HO537', 'BGL18409', 'BGL', 14, 'Firoz -CTG-CNF', 4, '2024-01-15', 'January', '2024', 0),
('20240127121900', 'HO75', 'ATL24383', 'ATL', 5, 'Mostakin Rahman', 9, '2024-01-27', 'January', '2024', 0),
('20240127165313', 'HO75', 'AKL7420', 'AKL', 11, 'Sirajul Alam', 9, '2024-01-27', 'January', '2024', 0),
('20240129090556', 'HO61', 'BTL14672', 'BTL', 8, 'Khademul Islam', 63, '2024-01-01', 'January', '2024', 0),
('20240129101651', 'HO75', 'AKL7093', 'AKL', 9, 'Hamidur Rahman', 9, '2024-01-29', 'January', '2024', 0),
('20240129102440', 'HO75', 'ATL24394', 'ATL', 5, 'Mostakin Rahman', 9, '2024-01-28', 'January', '2024', 0),
('20240129130431', 'HO989', 'BADL381', 'BADL', 1, 'Md. Shakib Salim', 63, '2024-01-09', 'January', '2024', 0),
('20240129141726', 'ho12', 'AFL16317', 'AFL', 8, 'MR. JEWEL ', 9, '2024-01-01', 'January', '2024', 0),
('20240130095158', 'HO989', 'BADL382', 'BADL', 16, 'Md. Shakib Salim', 63, '2024-01-18', 'January', '2024', 0),
('20240130110115', 'HO75', 'AKL7206', 'AKL', 5, 'Abdullah Al Mamun', 9, '2024-01-30', 'January', '2024', 0),
('20240130112105', 'HO75', 'AKL7435', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-01-30', 'January', '2024', 0),
('20240130153051', 'ho12', 'AFL16329', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-06', 'January', '2024', 0),
('20240130164733', 'HO75', 'ATL277921', 'ATL', 20, 'Manjurul Alam', 5, '2024-01-13', 'January', '2024', 0),
('20240130170506', 'ho12', 'AFL16360', 'AFL', 5, 'Mr. Kazi Sumon', 9, '2024-01-22', 'January', '2024', 0),
('20240130171124', 'ho12', 'AFL10970', 'AFL', 10, 'MR. ASHRAFUL ALAM', 9, '2024-01-17', 'January', '2024', 0),
('20240130171730', 'ho12', 'AFL16346', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-27', 'January', '2024', 0),
('20240130171946', 'ho12', 'AFL16347', 'AFL', 6, 'MR. ZAKIR', 9, '2024-01-28', 'January', '2024', 0),
('20240131112844', 'HO75', 'AKL7449', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-01-31', 'January', '2024', 0),
('20240131120927', 'HO537', 'BGL18603', 'BGL', 2, 'Jahangir Alam', 2, '2024-01-31', 'January', '2024', 0),
('20240131122815', 'HO537', 'BGL18511', 'BGL', 5, 'Helal Ahmed', 61, '2024-01-31', 'January', '2024', 0),
('20240131125216', 'HO537', 'BGL18411', 'BGL', 12, 'Sushanto Mondol', 4, '2024-01-31', 'January', '2024', 0),
('20240131131310', 'HO537', 'BGL18615', 'BGL', 8, 'Anwar Shah', 63, '2024-01-31', 'January', '2024', 0),
('20240131132001', 'HO537', 'BGL18614', 'BGL', 8, 'Anwar Shah', 4, '2024-01-31', 'January', '2024', 0),
('20240131132357', 'HO537', 'BGL18449', 'BGL', 19, 'Shafiur rahman', 15, '2023-12-13', 'December', '2023', 0),
('20240131150101', 'ho12', 'BCL14227', 'BCL', 8, 'MR. NASIR UDDIN', 9, '2024-01-04', 'January', '2024', 0),
('20240131150735', 'ho12', 'BCL14228', 'BCL', 8, 'MR. NASIR UDDIN', 9, '2024-01-04', 'January', '2024', 0),
('20240131151533', 'ho12', 'BCL14405', 'BCL', 8, 'MR. AHSAN HABIB IT', 4, '2024-01-23', 'January', '2024', 0),
('20240131152206', 'ho12', 'BCL14406', 'BCL', 8, 'MR. AHSAN HABIB', 4, '2024-01-23', 'January', '2024', 0),
('20240131152601', 'ho12', 'BCL18447', 'BCL', 10, 'MR. NASIR UDDIN', 9, '2024-01-01', 'January', '2024', 0),
('20240131173224', 'HO75', 'AKL7407', 'AKL', 11, 'Nazmul Kabir Sumon', 7, '2024-01-02', 'January', '2024', 0),
('20240201122801', 'HO75', 'ATL2861', 'ATL', 3, 'Debabrata Joarder', 30, '2024-02-01', 'February', '2024', 0),
('20240201150128', 'ho12', 'AFL16415', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-01', 'February', '2024', 0),
('20240203104410', 'ho12', 'BCL14445', 'BCL', 8, 'MD. BADSHA', 4, '2024-02-01', 'February', '2024', 0),
('20240203104833', 'ho12', 'BCL14446', 'BCL', 8, 'MD. BADSHA', 4, '2024-02-01', 'February', '2024', 0),
('20240203114901', 'HO75', 'ATL18413', 'ATL', 5, 'Shahed', 4, '2024-02-03', 'February', '2024', 0),
('20240203153913', 'HO75', 'AKL4898', 'AKL', 12, 'Ashraful Islam', 2, '2024-02-03', 'February', '2024', 0),
('20240204093045', 'HO537', 'BGL13052', 'BGL', 9, 'Shahin Alam', 61, '2024-02-04', 'February', '2024', 0),
('20240204093439', 'HO537', 'BGL18301', 'BGL', 5, 'Subon Pathang ', 63, '2024-02-04', 'February', '2024', 0),
('20240204103004', 'ho12', 'BCL14438', 'BCL', 5, 'MD. ARIF', 4, '2024-02-03', 'February', '2024', 0),
('20240204104619', 'HO75', 'BWL13811', 'BWL', 8, 'Abdul Halim Badol', 9, '2024-02-04', 'February', '2024', 0),
('20240204110751', 'HO75', 'AKL7100', 'AKL', 7, 'Imtiajur', 63, '2024-02-04', 'February', '2024', 0),
('20240204125442', 'HO75', 'ATL278072', 'ATL', 22, 'Badiul Alam', 4, '2024-02-04', 'February', '2024', 0),
('20240205093447', 'HO537', 'BGL18780', 'BGL', 1, 'Md Sujon Mia ', 4, '2024-02-03', 'February', '2024', 0),
('20240205094758', 'HO537', 'BGL18778', 'BGL', 8, 'Anwar Shah', 4, '2024-02-03', 'February', '2024', 0),
('20240205095602', 'HO537', 'BGL18781', 'BGL', 8, 'Anwar Shah', 4, '2024-02-03', 'February', '2024', 0),
('20240205100146', 'HO537', 'BGL18779', 'BGL', 8, 'Anwar Shah', 4, '2024-02-03', 'February', '2024', 0),
('20240205100435', 'HO537', 'BGL18756', 'BGL', 6, 'Mizanur Rahman Sumon', 9, '2024-02-01', 'February', '2024', 0),
('20240206134030', 'HO537', 'BADL1129', 'BADL', 16, 'Ashraful Alam', 4, '2024-02-04', 'February', '2024', 0),
('20240206163347', 'HO75', 'AKL7453', 'AKL', 19, 'Mohiuddin', 19, '2024-02-06', 'February', '2024', 0),
('20240207105905', 'HO75', 'AKL4862', 'AKL', 1, 'Shukur Ali', 11, '2024-02-07', 'February', '2024', 0),
('20240211161835', 'HO75', 'AKL7454', 'AKL', 24, 'Zahid Hossain', 9, '2024-02-11', 'February', '2024', 0),
('20240212160538', 'HO75', 'AKL4899', 'AKL', 12, 'Morsalin Hasan', 61, '2024-02-12', 'February', '2024', 0),
('20240215104813', 'HO75', 'ATL278144', 'ATL', 25, 'Ali Ajgor', 4, '2024-02-15', 'February', '2024', 0),
('20240215130826', 'HO537', 'BGL18417', 'BGL', 9, 'Nazmul Islam', 4, '2024-02-13', 'February', '2024', 0),
('20240217154911', 'HO75', 'ATL3014', 'ATL', 25, 'Liakot Hossain', 63, '2024-02-17', 'February', '2024', 0),
('20240219162217', 'HO75', 'AKL7455', 'AKL', 19, 'jahidul Islam', 58, '2024-02-19', 'February', '2024', 0),
('20240222110741', 'HO75', 'ATL278077', 'ATL', 8, 'badiul Alam', 4, '2024-02-22', 'February', '2024', 0),
('20240224153641', 'HO75', 'AKL7521', 'AKL', 10, 'Alamgir Sheikh', 72, '2024-02-24', 'February', '2024', 0),
('20240227102825', 'HO75', 'ATL278087', 'ATL', 8, 'Badiul Alam', 4, '2024-02-27', 'February', '2024', 0),
('20240227150640', 'HO75', 'BWL14186', 'BWL', 5, 'Osman', 63, '2024-02-10', 'February', '2024', 0),
('20240229131625', 'HO75', 'AKL7539', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-02-29', 'February', '2024', 0),
('20240229143134', 'HO537', 'BCL18418', 'BCL', 10, 'Obaydur Rahman', 2, '2024-02-28', 'February', '2024', 0),
('20240229153519', 'HO537', 'BGL18838', 'BGL', 8, 'Anwar Shah', 4, '2024-02-22', 'February', '2024', 0),
('20240229181723', 'HO537', 'BGL18530', 'BGL', 4, 'Md Sujon Mia', 2, '2024-02-27', 'February', '2024', 0),
('20240302172058', 'HO537', 'BGL18911', 'BGL', 4, 'Kabir ', 9, '2024-03-02', 'March', '2024', 0),
('20240303131101', 'HO75', 'ATL277906', 'ATL', 20, 'Manjurul ', 5, '2023-11-09', 'November', '2023', 0),
('20240303132652', 'HO75', 'ATL278038', 'ATL', 8, 'Badiul Alam', 4, '2024-02-28', 'February', '2024', 0),
('20240304152430', 'HO75', 'ATL278101', 'ATL', 25, 'Ali Ajgor', 4, '2024-01-25', 'January', '2024', 0),
('20240304152933', 'HO75', 'ATL278050', 'ATL', 25, 'Ali Ajgor', 4, '2024-01-25', 'January', '2024', 0),
('20240304154545', 'HO75', 'AKL278073', 'AKL', 1, 'Sukur Ali', 11, '2024-02-06', 'February', '2024', 0),
('20240304162555', 'HO75', 'ATL7564', 'ATL', 2, 'Milon', 6, '2024-03-04', 'March', '2024', 0),
('20240305101452', 'HO75', 'AKL7461', 'AKL', 24, 'Zahid Hossain', 9, '2024-03-05', 'March', '2024', 0),
('20240305110041', 'HO75', 'BWL13836', 'BWL', 8, 'Abdul Halim Badal', 63, '2024-03-05', 'March', '2024', 0),
('20240305151132', 'HO75', 'AKL7562', 'AKL', 26, 'Ratan Kumar Saha', 52, '2024-03-05', 'March', '2024', 0),
('20240305165158', 'HO75', 'AKL7566', 'AKL', 26, 'Quazi Quadiruzzaman', 42, '2024-03-05', 'March', '2024', 0),
('20240307165202', 'HO75', 'AKL7568', 'AKL', 8, 'Mozaffor', 63, '2024-03-07', 'March', '2024', 0),
('20240309154604', 'ho12', 'BCL14404', 'BCL', 27, 'MR. JAHANGIR ALAM', 5, '2024-01-22', 'January', '2024', 0),
('20240309154857', 'ho12', 'BCL13495', 'BCL', 5, 'MR. MD ARIF', 4, '2024-02-03', 'February', '2024', 0),
('20240309155151', 'HO75', 'AKL23558', 'AKL', 1, 'Shukur Ali', 11, '2024-03-09', 'March', '2024', 0),
('20240309155410', 'ho12', 'BCL68', 'BCL', 8, 'MR. MD BADSHA', 4, '2024-03-02', 'March', '2024', 0),
('20240309161329', 'ho12', 'BCL67', 'BCL', 8, 'MR. MD BADSHA', 4, '2024-03-02', 'March', '2024', 0),
('20240309164632', 'ho12', 'AFL16416', 'AFL', 8, 'MR. JEWEL ', 9, '2024-02-01', 'February', '2024', 0),
('20240309170845', 'HO75', 'AKL7567', 'AKL', 6, 'Jel Haque', 83, '2024-03-09', 'March', '2024', 0),
('20240309171153', 'ho12', 'AFL16420', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-01', 'February', '2024', 0),
('20240309171949', 'ho12', 'AFL16423', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-04', 'February', '2024', 0),
('20240309172214', 'ho12', 'AFL16429', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-11', 'February', '2024', 0),
('20240309172442', 'ho12', 'AFL16430', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-10', 'February', '2024', 0),
('20240309172659', 'ho12', 'AFL16458', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-18', 'February', '2024', 0),
('20240309173516', 'ho12', 'AFL16511', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-03', 'March', '2024', 0),
('20240309180218', 'ho12', 'AFL16510', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-03', 'March', '2024', 0),
('20240310102835', 'HO537', 'BRL16873', 'BRL', 1, 'Chapal', 72, '2024-02-10', 'February', '2024', 0),
('20240310105418', 'HO537', 'BGL18901', 'BGL', 8, 'Anwar Shah', 4, '2024-03-05', 'March', '2024', 0),
('20240310105818', 'HO537', 'BGL18902', 'BGL', 8, 'Anwar Shah', 4, '2024-03-05', 'March', '2024', 0),
('20240310111318', 'HO537', 'BGL18904', 'BGL', 8, 'Anwar Shah', 4, '2024-03-05', 'March', '2024', 0),
('20240310112218', 'HO537', 'BGL18910', 'BGL', 2, 'Jahangir Alam', 2, '2024-03-02', 'March', '2024', 0),
('20240310120948', 'HO537', 'BASL18421', 'BASL', 12, 'Zahid -Audit ', 4, '2024-03-04', 'March', '2024', 0),
('20240310170111', 'HO75', 'AKL7462', 'AKL', 19, 'Sayed Tanay Miah', 9, '2024-03-10', 'March', '2024', 0);

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
('20240130170648', '202401301706480', 'HO75', 'ATL277921', 'ATL-2024-01-0073', '202401301647330', 4, '', 1250, '5', '2024-01-22', 0),
('20240131114417', '202401311144171', 'HO75', 'ATL277921', 'ATL-2024-01-0073', '202401301701060', 1, '', 4500, '5', '2024-01-22', 0),
('20240203115027', '202402031150270', 'HO75', 'ATL18413', 'ATL-2024-01-0088', '202402031149010', 1, '', 40000, '5', '2024-02-03', 0),
('20240203122602', '202402031226020', 'HO75', 'ATL278067', 'ATL-2024-01-0102', '202401251334170', 2, '', 1650, '5', '2024-01-30', 0),
('20240203124629', '202402031246290', 'HO75', 'ATL278061', 'ATL-2024-01-0080', '202401161644420', 1, '', 5000, '6', '2024-01-23', 0),
('20240203125624', '202402031256240', 'HO75', 'ATL278060', 'ATL-2024-01-0074', '202401131231360', 2, '', 4600, '6', '2024-01-22', 0),
('20240204105819', '202402041058190', 'HO75', 'BWL14199', 'BWL-2024-01-0081', '202401201257000', 1, '', 3800, '6', '2024-01-22', 0),
('20240204105819', '202402041058191', 'HO75', 'BWL14199', 'BWL-2024-01-0081', '202401201257001', 1, '', 3200, '6', '2024-01-22', 0),
('20240204105819', '202402041058192', 'HO75', 'BWL14199', 'BWL-2024-01-0081', '202401201305240', 2, '', 450, '6', '2024-01-22', 0),
('20240204105819', '202402041058193', 'HO75', 'BWL14199', 'BWL-2024-01-0081', '202401201305241', 2, '', 950, '6', '2024-02-22', 0),
('20240204110130', '202402041101304', 'HO75', 'BWL14199', 'BWL-2024-01-0081', '202402041100170', 1, '', 3600, '6', '2024-01-22', 0),
('20240204112342', '202402041123420', 'ho12', 'AFL16360', 'AFL-24-01-0078', '202401301705060', 1, '', 3400, '26', '2024-01-29', 0),
('20240204112342', '202402041123421', 'ho12', 'AFL16360', 'AFL-24-01-0078', '202401301705061', 1, '', 1500, '26', '2024-01-29', 0),
('20240204112342', '202402041123422', 'ho12', 'AFL16360', 'AFL-24-01-0078', '202401301705062', 2, '', 1200, '26', '2024-01-29', 0),
('20240204112342', '202402041123423', 'ho12', 'AFL16360', 'AFL-24-01-0078', '202401301705063', 1, '', 3200, '26', '2024-01-29', 0),
('20240204112342', '202402041123424', 'ho12', 'AFL16360', 'AFL-24-01-0078', '202401301705064', 1, '', 3000, '26', '2024-01-29', 0),
('20240204112342', '202402041123425', 'ho12', 'AFL16360', 'AFL-24-01-0078', '202401301705065', 1, '', 4800, '26', '2024-01-29', 0),
('20240205114353', '202402051143530', 'ho12', 'AFL16316', 'AFL-24-01-0028', '202401141040410', 2, '', 1650, '11', '2024-01-04', 0),
('20240205114353', '202402051143531', 'ho12', 'AFL16316', 'AFL-24-01-0028', '202401141040411', 4, '', 1300, '11', '2024-01-04', 0),
('20240205114353', '202402051143532', 'ho12', 'AFL16316', 'AFL-24-01-0028', '202401141040412', 2, '', 1250, '11', '2024-01-04', 0),
('20240205114353', '202402051143533', 'ho12', 'AFL16316', 'AFL-24-01-0028', '202401141040413', 3, '', 1200, '11', '2024-01-04', 0),
('20240205114353', '202402051143534', 'ho12', 'AFL16316', 'AFL-24-01-0028', '202401141040414', 2, '', 2950, '11', '2024-01-04', 0),
('20240205114353', '202402051143535', 'ho12', 'AFL16316', 'AFL-24-01-0029', '202401141040415', 12, '', 2060, '10', '2024-01-04', 0),
('20240220171553', '202402201715530', 'HO75', 'AKL7454', 'AKL-2024-02-0032', '202402111618350', 1, '', 32500, '26', '2024-02-13', 0),
('20240222152632', '202402221526320', 'HO75', 'AKL7435', 'AKL-2024-02-0046', '202401301121050', 4, '', 1200, '22', '2024-02-17', 0),
('20240222152632', '202402221526321', 'HO75', 'AKL7435', 'AKL-2024-02-0046', '202401301121051', 2, '', 1200, '22', '2024-02-17', 0),
('20240222152632', '202402221526322', 'HO75', 'AKL7435', 'AKL-2024-02-0046', '202401301121052', 2, '', 900, '22', '2024-02-17', 0),
('20240222152632', '202402221526323', 'HO75', 'AKL7435', 'AKL-2024-02-0046', '202401301121053', 8, '', 50, '22', '2024-02-17', 0),
('20240222152632', '202402221526324', 'HO75', 'AKL7435', 'AKL-2024-02-0046', '202401301127520', 2, '', 150, '22', '2024-02-17', 0),
('20240222154134', '202402221541340', 'HO75', 'AKL4898', 'AKL-2024-02-0043', '202402031539130', 1, '', 4300, '22', '2024-02-17', 0),
('20240224120700', '202402241207000', 'HO75', 'AKL7199', 'AKL-2024-02-0047', '202401221036420', 8, '', 2000, '11', '2024-02-17', 0),
('20240227131729', '202402271317290', 'HO75', 'ATL2861', 'ATL-2024-02-0077', '202402011228010', 1, '', 2500, '5', '2024-02-17', 0),
('20240227131729', '202402271317291', 'HO75', 'ATL2861', 'ATL-2024-02-0077', '202402011228011', 1, '', 2500, '5', '2024-02-17', 0),
('20240227131729', '202402271317292', 'HO75', 'ATL2861', 'ATL-2024-02-0077', '202402011228012', 1, '', 600, '5', '2024-02-17', 0),
('20240227132806', '202402271328060', 'HO75', 'ATL24394', 'ATL-2024-02-0081', '202401291024400', 1, '', 3200, '11', '2024-02-17', 0),
('20240227133113', '202402271331130', 'HO75', 'ATL3014', 'ATL-2024-02-0101', '202402171549110', 1, '', 3800, '22', '2024-02-19', 0),
('20240227133446', '202402271334461', 'HO75', 'ATL278067', 'ATL-2024-02-0102', '202401251334171', 1, '', 3800, '22', '2024-02-19', 0),
('20240227134421', '202402271344210', 'HO75', 'ATL24383', 'ATL-2024-02-0079', '202401271219000', 1, '', 8500, '6', '2024-02-17', 0),
('20240227143056', '202402271430560', 'HO75', 'ATL278072', 'ATL-2024-02-0083', '202402041254420', 1, '', 4300, '22', '2024-02-17', 0),
('20240227143636', '202402271436360', 'HO75', 'ATL278077', 'ATL-2024-02-0108', '202402221107410', 4, '', 1500, '22', '2024-02-22', 0),
('20240227143636', '202402271436361', 'HO75', 'ATL278077', 'ATL-2024-02-0108', '202402221107411', 6, '', 750, '22', '2024-02-22', 0),
('20240227143636', '202402271436362', 'HO75', 'ATL278077', 'ATL-2024-02-0108', '202402221107412', 4, '', 400, '22', '2024-02-22', 0),
('20240227151050', '202402271510500', 'HO75', 'BWL14186', 'BWL-2024-01-0039', '202402271506400', 1, '', 11500, '11', '2024-01-10', 0),
('20240229122402', '202402291224020', 'HO537', 'BGL18778', 'BGL-2024-02-0055', '202402050947580', 5, '', 1150, '5', '2024-02-24', 0),
('20240229122402', '202402291224021', 'HO537', 'BGL18778', 'BGL-2024-02-0055', '202402050947581', 1, '', 1200, '5', '2024-02-24', 0),
('20240229122402', '202402291224022', 'HO537', 'BGL18778', 'BGL-2024-02-0055', '202402050947582', 2, '', 2800, '5', '2024-02-24', 0),
('20240229131859', '202402291318594', 'HO537', 'BGL18615', 'BGL-2024-02-0060', '202401311313104', 2, '', 6900, '6', '2024-02-24', 0),
('20240229133353', '202402291333533', 'HO537', 'BGL18778', 'BGL-2024-02-0056', '202402050947583', 1, '', 8500, '22', '2024-02-24', 0),
('20240229133353', '202402291333534', 'HO537', 'BGL18778', 'BGL-2024-02-0057', '202402050947584', 12, '', 2000, '10', '2024-02-24', 0),
('20240229135357', '202402291353570', 'HO537', 'BGL18781', 'BGL-BGL-2024-02-0045', '202402050956020', 5, '', 95, '22', '2024-02-18', 0),
('20240229135357', '202402291353571', 'HO537', 'BGL18781', 'BGL-BGL-2024-02-0045', '202402050956021', 4, '', 750, '22', '2024-02-18', 0),
('20240229135357', '202402291353572', 'HO537', 'BGL18781', 'BGL-BGL-2024-02-0045', '202402050956022', 2, '', 1280, '22', '2024-02-18', 0),
('20240229135357', '202402291353573', 'HO537', 'BGL18781', 'BGL-BGL-2024-02-0045', '202402050956023', 1, '', 1500, '22', '2024-02-18', 0),
('20240229135357', '202402291353574', 'HO537', 'BGL18781', 'BGL-BGL-2024-02-0058', '202402291350000', 10, '', 3600, '10', '2024-02-24', 0),
('20240229140223', '202402291402230', 'HO537', 'BGL18780', 'BGL-BGL-2024-02-0044', '202402050934470', 6, '', 400, '22', '2024-02-18', 0),
('20240229140223', '202402291402231', 'HO537', 'BGL18780', 'BGL-BGL-2024-02-0044', '202402050934471', 3, '', 900, '22', '2024-02-18', 0),
('20240229140223', '202402291402232', 'HO537', 'BGL18780', 'BGL-BGL-2024-02-0044', '202402050934472', 2, '', 4300, '22', '2024-02-18', 0),
('20240229140223', '202402291402233', 'HO537', 'BGL18780', 'BGL-BGL-2024-02-0044', '202402050934473', 1, '', 900, '22', '2024-02-18', 0),
('20240229140735', '202402291407350', 'HO537', 'BGL18779', 'BGL-2024-02-0043', '202402051001460', 1, '', 1500, '22', '2024-02-18', 0),
('20240229140735', '202402291407351', 'HO537', 'BGL18779', 'BGL-2024-02-0043', '202402051001461', 2, '', 1100, '22', '2024-02-18', 0),
('20240229140735', '202402291407352', 'HO537', 'BGL18779', 'BGL-2024-02-0043', '202402051001462', 4, '', 1100, '22', '2024-02-18', 0),
('20240229140735', '202402291407353', 'HO537', 'BGL18779', 'BGL-2024-02-0043', '202402051001463', 2, '', 8500, '22', '2024-02-18', 0),
('20240229140735', '202402291407354', 'HO537', 'BGL18779', 'BGL-2024-02-0043', '202402051001464', 2, '', 3500, '22', '2024-02-18', 0),
('20240229141040', '202402291410405', 'HO537', 'BGL18615', 'BGL-2024-02-0061', '202401311313105', 2, '', 1150, '5', '2024-02-24', 0),
('20240229153639', '202402291536390', 'HO537', 'BGL18838', 'BGL-2024-02-0062', '202402291535190', 1, '', 11000, '5', '2024-02-24', 0),
('20240302145206', '202403021452060', 'HO75', 'ATL278087', '2024-02-0131', '202402271028250', 2, '', 1500, '11', '2024-02-28', 0),
('20240302151717', '202403021517170', 'HO75', 'ATL278144', '2024-02-0117', '202402151048130', 1, '', 10000, '22', '2024-02-24', 0),
('20240303131432', '202403031314320', 'HO75', 'ATL277906', '2023-11-0059', '202403031311010', 1, '', 2000, '6', '2023-11-15', 0),
('20240303132804', '202403031328040', 'HO75', 'ATL278038', '2024-02-0132', '202403031326520', 2, '', 550, '11', '2024-02-28', 0),
('20240303174041', '202403031740410', 'HO75', 'BWL13811', '2024-02-0063', '202402041046190', 1, '', 3500, '22', '2024-02-17', 0),
('20240303174041', '202403031740411', 'HO75', 'BWL13811', '2024-02-0063', '202402041046191', 1, '', 900, '22', '2024-02-17', 0),
('20240304131850', '202403041318500', 'HO75', 'AKL7093', '2024-02-0075', '202401291016510', 1, '', 3900, '11', '2024-02-27', 0),
('20240304153213', '202403041532134', 'HO75', 'ATL278101', '2024-02-0024', '202403041524304', 9, '', 19400, '23', '2024-02-06', 0),
('20240304155335', '202403041553350', 'HO75', 'AKL278073', '2024-02-0024', '202403041545450', 1, '', 19400, '23', '2024-02-06', 0),
('20240304155335', '202403041553351', 'HO75', 'AKL278073', '2024-02-0024', '202403041545451', 1, '', 1400, '23', '2024-02-06', 0),
('20240304155335', '202403041553352', 'HO75', 'AKL278073', '2024-02-0024', '202403041545452', 1, '', 11800, '23', '2024-02-06', 0),
('20240304155335', '202403041553353', 'HO75', 'AKL278073', '2024-02-0024', '202403041545453', 20, '', 330, '23', '2024-02-06', 0),
('20240304155335', '202403041553354', 'HO75', 'AKL278073', '2024-02-0024', '202403041545454', 20, '', 35, '23', '2024-02-06', 0),
('20240304161301', '202403041613015', 'HO75', 'ATL278101', '2024-02-0025', '202403041524305', 1, 'Cisco CBS350-24P-4G-EU Managed 24Port GE, PoE, 1SFP', 48000, '9', '2024-02-06', 0),
('20240306141955', '202403061419550', 'HO75', 'AKL7449', '2024-03-0007', '202401311128440', 1, '', 700, '22', '2024-03-02', 0),
('20240306141955', '202403061419551', 'HO75', 'AKL7449', '2024-03-0007', '202401311128441', 1, '', 1050, '22', '2024-03-02', 0),
('20240306142518', '202403061425180', 'HO75', 'AKL7521', '2024-03-0008', '202402241536410', 8, '', 2000, '11', '2024-03-02', 0),
('20240306144149', '202403061441490', 'HO75', 'AKL4899', '2024-02-0054', '202402121605380', 3, '', 1150, '11', '2024-02-19', 0),
('20240309171359', '202403091713590', 'ho12', 'AFL16420', '24-02-0055', '202403091711530', 1, '', 4300, '22', '2024-02-17', 0),
('20240309171520', '202403091715200', 'ho12', 'AFL16420', '24-02-0073', '202403091711530', 2, '', 4300, '22', '2024-02-29', 0),
('20240310100104', '202403101001040', 'HO537', 'BADL1129', 'BADL-2024-02-0019', '202402061340300', 1, '', 21800, '14', '2024-02-13', 0),
('20240310102950', '202403101029500', 'HO537', 'BRL16873', 'BRL-2024-02-0002', '202403101028350', 2, '', 10500, '14', '2024-04-28', 0),
('20240310103952', '202403101039520', 'HO537', 'BADL382', 'BADl-2024-02-0020', '202401300951580', 1, '', 11000, '5', '2024-02-13', 0),
('20240310103952', '202403101039521', 'HO537', 'BADL382', 'BADl-2024-02-0020', '202401300951581', 1, '', 1250, '5', '2024-02-13', 0),
('20240310154542', '202403101545420', 'HO75', 'AKL7461', '2024-03-0017', '202403051014520', 1, '', 8500, '8', '2024-03-06', 0);

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
('20240130170648', 'ATL277921'),
('20240131114417', 'ATL277921'),
('20240203115027', 'ATL18413'),
('20240203122602', 'ATL278067'),
('20240203124629', 'ATL278061'),
('20240203125624', 'ATL278060'),
('20240204105819', 'BWL14199'),
('20240204110130', 'BWL14199'),
('20240204111221', ''),
('20240204112342', 'AFL16360'),
('20240205114353', 'AFL16316'),
('20240220171553', 'AKL7454'),
('20240222152632', 'AKL7435'),
('20240222154134', 'AKL4898'),
('20240224120700', 'AKL7199'),
('20240227131729', 'ATL2861'),
('20240227132806', 'ATL24394'),
('20240227133113', 'ATL3014'),
('20240227133446', 'ATL278067'),
('20240227134421', 'ATL24383'),
('20240227143056', 'ATL278072'),
('20240227143636', 'ATL278077'),
('20240227151050', 'BWL14186'),
('20240229122402', 'BGL18778'),
('20240229131859', 'BGL18615'),
('20240229132003', 'BGL18615'),
('20240229132536', 'BGL18778'),
('20240229133353', 'BGL18778'),
('20240229133508', 'BGL18778'),
('20240229135357', 'BGL18781'),
('20240229140223', 'BGL18780'),
('20240229140735', 'BGL18779'),
('20240229141040', 'BGL18615'),
('20240229153639', 'BGL18838'),
('20240302145206', 'ATL278087'),
('20240302151717', 'ATL278144'),
('20240303131432', 'ATL277906'),
('20240303132804', 'ATL278038'),
('20240303174041', 'BWL13811'),
('20240304131850', 'AKL7093'),
('20240304153213', 'ATL278101'),
('20240304155335', 'AKL278073'),
('20240304161301', 'ATL278101'),
('20240306141955', 'AKL7449'),
('20240306142518', 'AKL7521'),
('20240306144149', 'AKL4899'),
('20240309171232', 'AFL16420'),
('20240309171359', 'AFL16420'),
('20240309171520', 'AFL16420'),
('20240310100104', 'BADL1129'),
('20240310102950', 'BRL16873'),
('20240310103952', 'BADL382'),
('20240310154542', 'AKL7461');

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
,`pgname` varchar(50)
,`psgname` varchar(50)
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
('AFL-TNR-1', 'AFL', 'TNR', 1),
('AKL-LBTR-1', 'AKL', 'LBTR', 1),
('ATL-CCTV-1', 'ATL', 'CCTV', 1),
('ATL-HDD-1', 'ATL', 'HDD', 1),
('ATL-HDD-3', 'ATL', 'HDD', 3),
('ATL-IPT-1', 'ATL', 'IPT', 1),
('ATL-IPT-2', 'ATL', 'IPT', 2),
('ATL-IPT-3', 'ATL', 'IPT', 3),
('ATL-LKB-1', 'ATL', 'LKB', 1),
('ATL-NTSW-1', 'ATL', 'NTSW', 1),
('ATL-SCN-1', 'ATL', 'SCN', 1),
('ATL-TABLET-1', 'ATL', 'TABLET', 1),
('ATL-Wifi-1', 'ATL', 'Wifi', 1),
('BWL-HDD-2', 'BWL', 'HDD', 2),
('BWL-HDD-4', 'BWL', 'HDD', 4),
('BWL-OFUPS-1', 'BWL', 'OFUPS', 1);

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
('20240203121822', 'ATL-TABLET-1', 'ATL0000', '2024-02-03', '0000-00-00', '', 1),
('20240203131454', 'ATL-HDD-1', 'ATL3444', '2024-02-03', '0000-00-00', '', 1),
('20240203133351', 'ATL-IPT-1', 'ATL230', '2024-02-03', '0000-00-00', '', 1),
('20240203134657', 'ATL-IPT-2', 'ATL4209', '2024-02-03', '0000-00-00', '', 1),
('20240204124338', 'BWL-OFUPS-1', 'BWL1571', '2024-02-04', '0000-00-00', '', 1),
('20240303125119', 'ATL-SCN-1', 'ATL4574', '2024-03-03', '2024-03-27', '', 0),
('20240303125256', 'ATL-SCN-1', 'ATL4574', '2024-02-27', '0000-00-00', '', 1),
('20240303174620', 'BWL-HDD-2', 'BWL1438', '2024-03-03', '0000-00-00', '', 1),
('20240304132347', 'AKL-LBTR-1', 'AKL1108', '2024-03-04', '0000-00-00', '', 1),
('20240304162146', 'ATL-NTSW-1', 'ATL4574', '2024-03-04', '0000-00-00', '', 1),
('20240306150835', 'ATL-Wifi-1', 'ATL4300', '2024-03-06', '0000-00-00', '', 1),
('20240306153709', 'ATL-IPT-3', 'AKL169', '2024-03-06', '0000-00-00', '', 1);

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
('20230822072652', '20230820083743', 'IT Equipment'),
('20240309112007', '20230820083757', 'Microsoft License');

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
('20240131115037', 'ATL-CCTV-1', 'ATL', 1),
('20240203120002', 'ATL-TABLET-1', 'ATL', 1),
('20240203125209', 'ATL-HDD-1', 'ATL', 1),
('20240203131318', 'ATL-IPT-1', 'ATL', 1),
('20240203134549', 'ATL-IPT-2', 'ATL', 1),
('20240204124311', 'BWL-OFUPS-1', 'BWL', 1),
('20240205115231', 'AFL-TNR-1', 'AFL', 1),
('20240303124448', 'ATL-SCN-1', 'ATL', 1),
('20240303174449', 'BWL-HDD-2', 'BWL', 1),
('20240304132124', 'AKL-LBTR-1', 'AKL', 1),
('20240304162050', 'ATL-NTSW-1', 'ATL', 1),
('20240306150406', 'ATL-Wifi-1', 'ATL', 1),
('20240306152814', 'ATL-IPT-3', 'ATL', 1),
('20240306161850', 'ATL-HDD-3', 'ATL', 1),
('20240307150229', 'BWL-HDD-4', 'BWL', 1),
('20240307151154', 'ATL-LKB-1', 'ATL', 1);

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
('ACAM', '20230820083743', '20230822072652', '20240130115112', 'Analoge Camera'),
('AP', '20230820083743', '20230822072652', '20230822083026', 'Access Point'),
('AR', '20230820083743', '20230822072652', '20230822083344', 'Attendance Reader'),
('BTR', '20230820083757', '20230822072519', '20240108102520', 'BATTERY FOR ACCESS CONTROL'),
('CBL', '20230820083757', '20230822072519', '20240108102520', 'UTP Cable (Cat6)'),
('CBTR', '20230820083757', '20230822072519', '20240108102520', 'CMOS Battery'),
('CCLR', '20230820083757', '20230822072537', '20240207054000', 'WD-40 Contact Cleaner'),
('CCTV', '20230820083743', '20230822072652', '20240130115112', 'CC Camera'),
('CF', '20230820083757', '20230822072519', '20240108102520', 'Cooling Fan (CPU)'),
('CLB', '20230820083757', '20230822072537', '20240108102127', 'Cleaning Blade'),
('CPR', '20230820083743', '20230822072652', '20230822082854', 'Copier'),
('CPRDM', '20230820083757', '20230822072537', '20240108102127', 'Copier Drum'),
('CPRDR', '20230820083757', '20230822072537', '20240108102127', 'Copier Developer'),
('CPRGR', '20230820083757', '20230822072537', '20240108102127', 'Copier Gear'),
('CSG', '20230820083757', '20230822072519', '20240108102520', 'Casing (CPU)'),
('CSR', '20230820083757', '20230822072537', '20240108102127', 'Copier Scraper'),
('CTG', '20230820083757', '20230822072551', '20240108105112', 'Cartridge'),
('DCB', '20230820083757', '20230822072537', '20240108102127', 'DC Blade'),
('DKTP', '20230820083743', '20230822072652', '20230822082725', 'Desktop'),
('DVR', '20230820083743', '20230822072652', '20240130115112', 'DVR'),
('EPSINK', '20230820083757', '20230822072551', '20240108105220', 'Epson INK'),
('FCBL', '20230820083757', '20230822072519', '20240108102520', 'Fiber Cable'),
('FW', '20230820083743', '20230822072652', '20230822082942', 'Firewall'),
('HDD', '20230820083757', '20230822072519', '20240108102520', 'Hard Disk Drive'),
('HDMIC', '20230820083757', '20230822072519', '20240108102520', 'HDMI Cable'),
('HP', '20230820083757', '20230822072519', '20240108102520', 'Headphone'),
('HTRPCR', '20230820083757', '20230822072537', '20240108102127', 'Heat Roller'),
('IPC', '20230820083743', '20230822072652', '20240130115112', 'IP Camera'),
('IPSW', '20230820083757', '20230822072519', '20240108102520', 'IP Phone Switch'),
('IPT', '20230820083743', '20230822072652', '20240113072651', 'IP Telephone'),
('LBTR', '20230820083757', '20230822072519', '20240108102520', 'Laptop Battery'),
('LC', '20230820083757', '20230822072519', '20240108102520', 'Lan Card'),
('LCRG', '20230820083757', '20230822072519', '20240108102520', 'Laptop Charger'),
('LDSP', '20230820083757', '20230822072519', '20240108102520', 'Laptop Display'),
('LKB', '20230820083757', '20230822072519', '20240108102520', 'Laptop Keyboard'),
('LPT', '20230820083743', '20230822072652', '20230822082725', 'Laptop'),
('LSTD', '20230820083757', '20230822072519', '20240108102520', 'Laptop Stand'),
('MBD', '20230820083757', '20230822072519', '20240108102520', 'Mother Board'),
('MCVTR', '20230820083757', '20230822072519', '20240108102520', 'Converter (Multiport)'),
('MNT', '20230820083743', '20230822072652', '20230822083124', 'Monitor'),
('MPD', '20230820083757', '20230822072519', '20240108102520', 'Mouse Pad'),
('NC', '20230820083757', '20230822072519', '20240108102520', 'NETWORK CONNECTOR'),
('NENCL', '20230820083757', '20230822072519', '20240207054610', 'M.2 NVMe'),
('NFP', '20230820083757', '20230822072519', '20240108102520', 'Faceplate'),
('NMDL', '20230820083757', '20230822072519', '20240108102520', 'Modular'),
('NPP', '20230820083757', '20230822072519', '20240108102520', 'Patch Panel(NPP)'),
('NTRK', '20230820083743', '20230822072652', '20230822083502', 'Network Rack'),
('NTSW', '20230820083743', '20230822072652', '20230822083005', 'Network Switch'),
('NVR', '20230820083743', '20230822072652', '20240130115112', 'NVR'),
('OFUPS', '20230820083743', '20230822072652', '20240120074424', 'Offline UPS'),
('OUPS', '20230820083743', '20230822072652', '20230822083051', 'Online UPS'),
('PCK', '20230820083757', '20230822072519', '20240108102520', 'Pattern Cutter Knife'),
('PD', '20230820083757', '20230822072519', '20240108102520', 'Pendrive'),
('PHTNR', '20230820083757', '20230822072551', '20240206112614', 'Photocopy Toner'),
('PJTR', '20230820083743', '20230822072652', '20230822082919', 'Projector'),
('PLT', '20230820083743', '20230822072652', '20240122114924', 'Plotter'),
('PP', '20230820083757', '20230822072519', '20240108102520', 'Patch Panel'),
('PRCR', '20230820083757', '20230822072519', '20240108102520', 'Processor'),
('PSU', '20230820083757', '20230822072519', '20240108102520', 'Power Supply'),
('PTR', '20230820083743', '20230822072652', '20230822082821', 'Printer'),
('PTRFF', '20230820083757', '20230822072537', '20240108102127', 'Fuser Film'),
('PTRGR', '20230820083757', '20230822072537', '20240108102127', 'Printer Gear'),
('PTRPCR', '20230820083757', '20230822072537', '20240108102127', 'Pickup Roller'),
('PTRPR', '20230820083757', '20230822072537', '20240108102127', 'Pressure Roller'),
('RADF', '20230820083743', '20230822072652', '20240211111140', 'Reversing Automatic Document Feeder'),
('RAM', '20230820083757', '20230822072519', '20240108102520', 'RAM'),
('RCB', '20230820083757', '20230822072537', '20240108102127', 'RC Blade'),
('RIB', '20230820083757', '20230822072551', '20240108105232', 'Ribbon'),
('RJC', '20230820083757', '20230822072519', '20240108102520', 'RJ45 Connector'),
('SCN', '20230820083743', '20230822072652', '20230822082828', 'Scanner'),
('SEDOMs', '20230820083757', '20230822072618', '20240108105540', 'SedoMaster Advanced System'),
('SENCL', '20230820083757', '20230822072519', '20240207054610', 'Sata SSD Enclosure'),
('SFP', '20230820083757', '20230822072519', '20240108102520', 'SFP Modular'),
('SSD', '20230820083757', '20230822072519', '20240108102520', 'SSD'),
('SVR', '20230820083743', '20230822072652', '20230822082751', 'HP Server'),
('TABLET', '20230820083743', '20230822072652', '20240130122044', 'TABLET'),
('TCPASTE', '20230820083757', '20230822072537', '20240207054000', 'Heat Sink Thermal Compound Paste'),
('TNR', '20230820083757', '20230822072551', '20240108105102', 'Toner'),
('UBTR', '20230820083757', '20230822072519', '20240108102520', 'Battery For Ups'),
('UKB', '20230820083757', '20230822072519', '20240108102520', 'Keyboard USB'),
('ULC', '20230820083757', '20230822072519', '20240108102520', 'USB Lan Card'),
('UMS', '20230820083757', '20230822072519', '20240108102520', 'Mouse USB'),
('VGCBL', '20230820083757', '20230822072519', '20240108102520', 'VGA Cable'),
('Wifi', '20230820083743', '20230822072652', '20230822082952', 'Wifi Router'),
('WINDS', '20230820083757', '20230822072618', '20240108105311', 'Windows Server License'),
('WKB', '20230820083757', '20230822072519', '20240108102520', 'Keyboard Wire'),
('WM', '20230820083757', '20230822072519', '20240108102520', 'Wire Manager'),
('WMS', '20230820083757', '20230822072519', '20240108102520', 'Mouse Wire');

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
('20240131115037', '202401311144171', 'ATL', 'ATL-CCTV-1', '8F0C2F9PAGF710E', '2M IR BULLET NET CAM 30M DH-IPC-HFW1230SP', 1, 365, '2024-01-31', '0000-00-00', '0000-00-00', '', 0),
('20240203120002', '202402031150270', 'ATL', 'ATL-TABLET-1', '352294625859395', 'Galaxy Tab S6 Lite - 2022 Ed (SIM Supported, 4/64)', 1, 365, '2024-02-03', '2024-02-03', '0000-00-00', 'ATL0000', 1),
('20240203125209', '202402031246290', 'ATL', 'ATL-HDD-1', 'WCC6Y7L2DR27', 'HDD WD 1TB', 1, 730, '2024-01-24', '2024-02-03', '0000-00-00', 'ATL3444', 1),
('20240203131318', '202402031256240', 'ATL', 'ATL-IPT-1', '', 'Grandstream GRP2601P', 1, 365, '2024-02-03', '2024-02-03', '0000-00-00', 'ATL230', 1),
('20240203134549', '202402031256240', 'ATL', 'ATL-IPT-2', '', 'Grandstream GRP2601P', 1, 365, '2024-02-03', '2024-02-03', '0000-00-00', 'ATL4209', 1),
('20240204124311', '202402041058190', 'BWL', 'BWL-OFUPS-1', '230421082784', 'Power Guard 650VA UPS', 1, 365, '2024-01-27', '2024-02-04', '0000-00-00', 'BWL1571', 1),
('20240205115231', '202402051143530', 'AFL', 'AFL-TNR-1', '', '', 1, 0, '2024-02-05', '0000-00-00', '0000-00-00', '', 0),
('20240303124448', '202403021517170', 'ATL', 'ATL-SCN-1', 'KNJP22298', 'CANON LIDE SCANNER 300', 1, 365, '2024-02-25', '2024-02-27', '2024-03-27', 'ATL4574', 1),
('20240303174449', '202403031740410', 'BWL', 'BWL-HDD-2', 'VG962GBUS', 'TOSHIBA HDD 1TB', 1, 730, '2024-02-17', '2024-03-03', '0000-00-00', 'BWL1438', 1),
('20240304132124', '202403041318500', 'AKL', 'AKL-LBTR-1', '6FSTH06TZ619R5', 'HP 440 G5 BATTERT', 1, 90, '2024-02-28', '2024-03-04', '0000-00-00', 'AKL1108', 1),
('20240304162050', '202403041613015', 'ATL', 'ATL-NTSW-1', 'FOC2651Z58J', 'Cisco Business 350 Switch CBS350-24P-4G-EU', 1, 365, '2024-02-11', '2024-03-04', '0000-00-00', 'ATL4574', 1),
('20240306150406', '202402271344210', 'ATL', 'ATL-Wifi-1', 'AX20AX1800', 'TP-LINK ARCHER AX20AX1800Mbps GIGABIT DUAL BAND WIFI 6 ROUTER', 1, 365, '2024-02-18', '2024-03-06', '0000-00-00', 'ATL4300', 1),
('20240306152814', '202402271430560', 'ATL', 'ATL-IPT-3', 'BCFBD2', 'GRANDSTEAM GRP-2601P', 1, 365, '2024-03-06', '2024-03-06', '0000-00-00', 'AKL169', 1),
('20240306161850', '202402271334461', 'ATL', 'ATL-HDD-3', 'WC82Y0092663', 'WD 1TB ', 1, 730, '2024-02-20', '0000-00-00', '0000-00-00', '', 0),
('20240307150229', '202403031740410', 'BWL', 'BWL-HDD-4', 'VGGBUS', 'TOSHIBA TB HDD (Unfortunately it goes to ATL user)', 0, 730, '2024-02-17', '0000-00-00', '0000-00-00', '', 0),
('20240307151154', '202402271328060', 'ATL', 'ATL-LKB-1', 'LENOVOT440KB', 'LENOVO T440 KEYBOARD', 1, 90, '2024-02-19', '0000-00-00', '0000-00-00', '', 0);

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
('20230822083502', '20230820083743', '20230822072652', 'Network Rack'),
('20240108095837', '20230820083757', '20230822072637', 'Internet Bill'),
('20240108101032', '20230820083757', '20230822072637', 'Data Bill'),
('20240108101047', '20230820083757', '20230822072637', 'IP Phone Bill'),
('20240108101258', '20230820083757', '20230822072637', 'Internet Maintenance '),
('20240108102127', '20230820083757', '20230822072537', 'Spare Parts'),
('20240108102156', '20230820083757', '20230822072537', 'Repair Charge'),
('20240108102520', '20230820083757', '20230822072519', 'Accessories'),
('20240108105102', '20230820083757', '20230822072551', 'Toner'),
('20240108105112', '20230820083757', '20230822072551', 'Cartridge'),
('20240108105220', '20230820083757', '20230822072551', 'Ink'),
('20240108105232', '20230820083757', '20230822072551', 'Ribbon'),
('20240108105311', '20230820083757', '20230822072618', 'AMC/MMC'),
('20240108105540', '20230820083757', '20230822072618', 'OTC/Service Charge'),
('20240113072651', '20230820083743', '20230822072652', 'IP Telephone'),
('20240120074424', '20230820083743', '20230822072652', 'Offline UPS'),
('20240122114924', '20230820083743', '20230822072652', 'Plotter'),
('20240129092350', '20230820083757', '20230822072519', 'Processor'),
('20240129092407', '20230820083757', '20230822072519', 'Battery'),
('20240130115112', '20230820083743', '20230822072652', 'CCTV'),
('20240130122044', '20230820083743', '20230822072652', 'TABLET'),
('20240206112614', '20230820083757', '20230822072551', 'Photocopy Toner'),
('20240207054000', '20230820083757', '20230822072537', 'Reparing Material'),
('20240207054610', '20230820083757', '20230822072519', 'Enclosure'),
('20240211111140', '20230820083743', '20230822072652', 'RADF');

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
(1, 'Pcs'),
(2, 'Box'),
(3, 'Set'),
(4, 'Sets'),
(5, 'Pc'),
(6, 'Dozen'),
(7, 'Meter'),
(8, 'Year/s'),
(9, 'Barcode St'),
(10, 'Roll'),
(11, 'Wireless M'),
(12, 'Unit');

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
('20240130170926', '20240130170926', 'HO75', 'ATL277921', '202401301647330', '202401301706480', 'ATL-2024-01-0073', 'ATLATL/GS/24/0062', 4, '', '2024-01-30', 'CHS-B0-220124-003', '2024-01-22'),
('20240131114738', '20240131114738', 'HO75', 'ATL277921', '202401301701060', '202401311144171', 'ATL-2024-01-0073', 'ATLATL/GS/24/0062', 1, '', '2024-01-22', 'SEL-B0-220124-003', '2024-01-22'),
('20240203115640', '20240203115640', 'HO75', 'ATL18413', '202402031149010', '202402031150270', 'ATL-2024-01-0088', 'ATLATL/GS/24/0062', 1, '', '2024-02-03', 'SEL-B0-250124-001', '2024-02-03'),
('20240203123254', '20240203123254', 'HO75', 'ATL278067', '202401251334170', '202402031226020', 'ATL2024-01-0102', 'ATLATL/GS/24/0073', 2, '', '2024-02-03', 'ESL-B0-300124-001', '2024-01-31'),
('20240203125011', '20240203125011', 'HO75', 'ATL278061', '202401161644420', '202402031246290', 'ATL-2024-01-0080', 'ATLATL/GS/24/0073', 1, '', '2024-01-24', 'FG24YINV0033', '2024-01-24'),
('20240203125818', '20240203125818', 'HO75', 'ATL278060', '202401131231360', '202402031256240', 'ATL-2024-01-0074', 'ATLATL/GS/24/0074', 2, '', '2024-01-29', 'FG24YUNV005', '2024-01-29'),
('20240204111307', '20240204111307', 'HO75', 'BWL14199', '202401201257000', '202402041058190', 'BWL-2024-01-0081', 'BWL-ST-24-31', 1, '', '2024-02-03', 'FG24YINV0044', '2024-01-27'),
('20240204111310', '20240204111310', 'HO75', 'BWL14199', '202401201305240', '202402041058192', 'BWL-2024-01-0081', 'BWL-ST-24-31', 2, '', '2024-02-03', 'FG24YINV0044', '2024-01-27'),
('20240204111312', '20240204111312', 'HO75', 'BWL14199', '202401201257001', '202402041058191', 'BWL-2024-01-0081', 'BWL-ST-24-31', 1, '', '2024-02-03', 'FG24YINV0044', '2024-01-27'),
('20240204111315', '20240204111315', 'HO75', 'BWL14199', '202401201305241', '202402041058193', 'BWL-2024-01-0081', 'BWL-ST-24-31', 2, '', '2024-02-03', 'FG24YINV0044', '2024-01-27'),
('20240204111317', '20240204111317', 'HO75', 'BWL14199', '202402041100170', '202402041101304', 'BWL-2024-01-0081', 'BWL-ST-24-31', 1, '', '2024-02-03', 'FG24YINV0044', '2024-01-27'),
('20240205114810', '20240205114810', 'ho12', 'AFL16316', '202401141040410', '202402051143530', 'AFL-24-01-0028', '25', 2, '', '2024-01-09', '10375', '2024-01-09'),
('20240205114811', '20240205114811', 'ho12', 'AFL16316', '202401141040411', '202402051143531', 'AFL-24-01-0028', '25', 4, '', '2024-01-09', '10375', '2024-01-09'),
('20240205114813', '20240205114813', 'ho12', 'AFL16316', '202401141040413', '202402051143533', 'AFL-24-01-0028', '25', 3, '', '2024-01-09', '10375', '2024-01-09'),
('20240205114814', '20240205114814', 'ho12', 'AFL16316', '202401141040414', '202402051143534', 'AFL-24-01-0028', '4', 2, '', '2024-01-09', '10375', '2024-01-09'),
('20240205114816', '20240205114816', 'ho12', 'AFL16316', '202401141040412', '202402051143532', 'AFL-24-01-0028', '25', 2, '', '2024-01-09', '10375', '2024-01-09'),
('20240205114818', '20240205114818', 'ho12', 'AFL16316', '202401141040412', '202402051143532', 'AFL-24-01-0028', '25', 2, '', '2024-01-09', '10375', '2024-01-09'),
('20240205114950', '20240205114950', 'ho12', 'AFL16316', '202401141040415', '202402051143535', 'AFL-24-01-0029', '4', 12, '', '2024-01-04', '40104', '2024-01-04'),
('20240220171657', '20240220171657', 'HO75', 'AKL7454', '202402111618350', '202402201715530', 'AKL-2024-02-0032', '3590', 1, '', '2024-02-15', 'ROE-02-2024', '2024-02-15'),
('20240222153019', '20240222153019', 'HO75', 'AKL7435', '202401301127520', '202402221526324', 'AKL-2024-02-0046', '3818', 2, '', '2024-02-18', 'RC/REP-3059-23/24', '2024-02-18'),
('20240222153020', '20240222153020', 'HO75', 'AKL7435', '202401301121051', '202402221526321', 'AKL-2024-02-0046', '3818', 2, '', '2024-02-18', 'RC/REP-3059-23/24', '2024-02-18'),
('20240222154837', '20240222154837', 'HO75', 'AKL4898', '202402031539130', '202402221541340', 'AKL-2024-02-0043', '3819', 1, '', '2024-02-18', 'RC/REP-3060-23/24', '2024-02-18'),
('20240224120851', '20240224120851', 'HO75', 'AKL7199', '202401221036420', '202402241207000', 'AKL-2024-02-0047', '3824', 8, '', '2024-02-19', '10438', '2024-02-19'),
('20240227132035', '20240227132035', 'HO75', 'ATL2861', '202402011228012', '202402271317292', 'ATL-2024-02-0077', 'ATL/GS/24/0140', 1, '', '2024-02-22', 'SEL-B0-220224-001', '2024-02-22'),
('20240227132038', '20240227132038', 'HO75', 'ATL2861', '202402011228011', '202402271317291', 'ATL-2024-02-0077', 'ATL/GS/24/0140', 1, '', '2024-02-22', 'SEL-B0-220224-001', '2024-02-22'),
('20240227132041', '20240227132041', 'HO75', 'ATL2861', '202402011228010', '202402271317290', 'ATL-2024-02-0077', 'ATL/GS/24/0140', 1, '', '2024-02-22', 'SEL-B0-220224-001', '2024-02-22'),
('20240227132916', '20240227132916', 'HO75', 'ATL24394', '202401291024400', '202402271328060', 'ATL-2024-02-0081', 'ATL/GS/24/0145', 1, '', '2024-02-19', '10437', '2024-02-20'),
('20240227133304', '20240227133304', 'HO75', 'ATL3014', '202402171549110', '202402271331130', 'ATL-2024-02-0101', 'ATL/GS/24/0149', 1, '', '2024-02-20', 'RC/REP-3110-23/24', '2024-02-20'),
('20240227133604', '20240227133604', 'HO75', 'ATL278067', '202401251334171', '202402271334461', 'ATL-2024-02-0102', 'ATL/GS/24/0148', 1, '', '2024-02-20', 'RC/REP-3112-23/24', '2024-02-20'),
('20240227134609', '20240227134609', 'HO75', 'ATL24383', '202401271219000', '202402271344210', 'ATL-2024-02-0079', 'ATL/GS/24/0147', 1, '', '2024-02-18', 'FG24YINV0083', '2024-02-18'),
('20240227143226', '20240227143226', 'HO75', 'ATL278072', '202402041254420', '202402271430560', 'ATL-2024-02-0083', 'ATL/GS/24/02/0139', 1, '', '2024-02-18', 'RC/REP-3062-23/24', '2024-02-18'),
('20240227143828', '20240227143828', 'HO75', 'ATL278077', '202402221107412', '202402271436362', 'ATL-2024-02-0108', 'ATL/GS/24/02/0138', 4, '', '2024-02-24', 'RC/REP-3146/23/24', '2024-02-24'),
('20240227143829', '20240227143829', 'HO75', 'ATL278077', '202402221107411', '202402271436361', 'ATL-2024-02-0108', 'ATL/GS/24/02/0138', 6, '', '2024-02-24', 'RC/REP-3146/23/24', '2024-02-24'),
('20240227151211', '20240227151211', 'HO75', 'BWL14186', '202402271506400', '202402271510500', 'BWL-2024-01-0039', 'BWL-SF24-15', 1, '', '2024-02-10', '10379', '2024-02-10'),
('20240229132332', '20240229132332', 'HO537', 'BGL18615', '202401311313104', '202402291318594', 'BGL-BGL-2024-02-0060', '1489', 2, '', '2024-02-29', '0099', '2024-02-24'),
('20240229133103', '20240229133103', 'HO537', 'BGL18778', '202402050947580', '202402291224020', 'BGL-2024-02-0055', '1507', 5, '', '2024-02-26', 'CHS-BO-260224-001', '2024-02-26'),
('20240229133104', '20240229133104', 'HO537', 'BGL18778', '202402050947581', '202402291224021', 'BGL-2024-02-0055', '1507', 1, '', '2024-02-26', 'CHS-BO-260224-001', '2024-02-26'),
('20240229133107', '20240229133107', 'HO537', 'BGL18778', '202402050947582', '202402291224022', 'BGL-2024-02-0055', '1507', 2, '', '2024-02-26', 'CHS-BO-260224-001', '2024-02-26'),
('20240229133915', '20240229133915', 'HO537', 'BGL18778', '202402050947583', '202402291333533', 'BGL-BGL-2024-02-0056', '1511', 1, '', '2024-02-25', '3154-23/24', '2024-02-25'),
('20240229134056', '20240229134056', 'HO537', 'BGL18778', '202402050947584', '202402291333534', 'BGL-BGL-2024-02-0057', '1490', 12, '', '2024-02-25', 'BK20240225', '2024-02-25'),
('20240229135657', '20240229135657', 'HO537', 'BGL18781', '202402050956020', '202402291353570', 'BGL-BGL-2024-02-0045', '1495', 5, '', '2024-02-19', '3079', '2024-02-29'),
('20240229135700', '20240229135700', 'HO537', 'BGL18781', '202402050956021', '202402291353571', 'BGL-BGL-2024-02-0045', '1495', 4, '', '2024-02-19', '3079', '2024-02-29'),
('20240229135703', '20240229135703', 'HO537', 'BGL18781', '202402050956022', '202402291353572', 'BGL-BGL-2024-02-0045', '1495', 2, '', '2024-02-19', '3079', '2024-02-29'),
('20240229135705', '20240229135705', 'HO537', 'BGL18781', '202402050956023', '202402291353573', 'BGL-BGL-2024-02-0045', '1495', 1, '', '2024-02-19', '3079', '2024-02-29'),
('20240229140357', '20240229140357', 'HO537', 'BGL18780', '202402050934470', '202402291402230', 'BGL-BGL-2024-02-0044', '1496', 6, '', '2024-02-19', '3078', '2024-02-19'),
('20240229140400', '20240229140400', 'HO537', 'BGL18780', '202402050934471', '202402291402231', 'BGL-BGL-2024-02-0044', '1496', 3, '', '2024-02-19', '3078', '2024-02-19'),
('20240229140402', '20240229140402', 'HO537', 'BGL18780', '202402050934472', '202402291402232', 'BGL-BGL-2024-02-0044', '1496', 2, '', '2024-02-19', '3078', '2024-02-19'),
('20240229140405', '20240229140405', 'HO537', 'BGL18780', '202402050934473', '202402291402233', 'BGL-BGL-2024-02-0044', '1496', 1, '', '2024-02-19', '3078', '2024-02-19'),
('20240229140909', '20240229140909', 'HO537', 'BGL18779', '202402051001460', '202402291407350', 'BGL-2024-02-0043', '1497', 1, '', '2024-02-19', '3080', '2024-02-19'),
('20240229140912', '20240229140912', 'HO537', 'BGL18779', '202402051001461', '202402291407351', 'BGL-2024-02-0043', '1497', 2, '', '2024-02-19', '3080', '2024-02-19'),
('20240229140915', '20240229140915', 'HO537', 'BGL18779', '202402051001462', '202402291407352', 'BGL-2024-02-0043', '1497', 4, '', '2024-02-19', '3080', '2024-02-19'),
('20240229140917', '20240229140917', 'HO537', 'BGL18779', '202402051001463', '202402291407353', 'BGL-2024-02-0043', '1497', 2, '', '2024-02-19', '3080', '2024-02-19'),
('20240229140920', '20240229140920', 'HO537', 'BGL18779', '202402051001464', '202402291407354', 'BGL-2024-02-0043', '1497', 2, '', '2024-02-19', '3080', '2024-02-19'),
('20240229141137', '20240229141137', 'HO537', 'BGL18615', '202401311313105', '202402291410405', 'BGL-2024-02-0061', '1509', 2, '', '2024-02-26', '260224-003', '2024-02-26'),
('20240229153727', '20240229153727', 'HO537', 'BGL18838', '202402291535190', '202402291536390', 'BGL-2024-02-0062', '1508', 1, '', '2024-02-26', '260224-002', '2024-02-26'),
('20240303123220', '20240303123220', 'HO75', 'ATL278087', '202402271028250', '202403021452060', '2024-02-0131', 'ATL/GS/24/0159', 2, '', '2024-02-28', '10446', '2024-02-28'),
('20240303124139', '20240303124139', 'HO75', 'ATL278144', '202402151048130', '202403021517170', '2024-02-0117', 'ATL/GS/24/0153', 1, '', '2024-02-25', 'RC/REP-3152-23/24', '2024-02-25'),
('20240303131613', '20240303131613', 'HO75', 'ATL277906', '202403031311010', '202403031314320', '2023-11-0059', 'ATL/GS/23/0906', 1, '', '2023-11-15', 'FG2023000597', '2023-11-15'),
('20240303132911', '20240303132911', 'HO75', 'ATL278038', '202403031326520', '202403031328040', '2024-02-0132', 'ATL/GS/24/0160', 2, '', '2024-02-29', '10448', '2024-02-29'),
('20240303174220', '20240303174220', 'HO75', 'BWL13811', '202402041046191', '202403031740411', '2024-02-0063', 'BWL-ST-24-40', 0, '', '2024-02-17', 'RC/REP-2769-22/23', '2024-02-17'),
('20240303174227', '20240303174227', 'HO75', 'BWL13811', '202402041046190', '202403031740410', '2024-02-0063', 'BWL-ST-24-40', 1, '', '2024-02-17', 'RC/REP-2769-22/23', '2024-02-17'),
('20240304131940', '20240304131940', 'HO75', 'AKL7093', '202401291016510', '202403041318500', '2024-02-0075', '3859', 1, '', '2024-02-28', '10447', '2024-02-28'),
('20240304160037', '20240304160037', 'HO75', 'ATL278101', '202403041545454', '202403041553354', '2024-02-0024', 'ATL/GS/24/0178', 20, '', '2024-02-11', 'A001INV24000109', '2024-02-11'),
('20240304160038', '20240304160038', 'HO75', 'ATL278101', '202403041545453', '202403041553353', '2024-02-0024', 'ATL/GS/24/0178', 20, '', '2024-02-11', 'A001INV24000109', '2024-02-11'),
('20240304160039', '20240304160039', 'HO75', 'ATL278101', '202403041545451', '202403041553351', '2024-02-0024', 'ATL/GS/24/0178', 1, '', '2024-02-11', 'A001INV24000109', '2024-02-11'),
('20240304160044', '20240304160044', 'HO75', 'ATL278101', '202403041524304', '202403041532134', '2024-02-0024', 'ATL/GS/24/0178', 9, '', '2024-02-11', 'A001INV24000109', '2024-02-11'),
('20240304161621', '20240304161621', 'HO75', 'ATL278101', '202403041524305', '202403041613015', '2024-02-0025', 'ATL/GS/24/0177', 1, '', '2024-02-11', 'SI-BPL-FEB24-8', '2024-02-11'),
('20240306142103', '20240306142103', 'HO75', 'AKL7449', '202401311128440', '202403061419550', '2024-03-0007', '3872', 1, '', '2024-03-03', 'RC/REP-3251-23/24', '2024-03-03'),
('20240306142132', '20240306142132', 'HO75', 'AKL7449', '202401311128441', '202403061419551', '2024-03-0007', '3872', 1, '', '2024-03-03', 'RC/REP-3251-23/24', '2024-03-03'),
('20240306142638', '20240306142638', 'HO75', 'AKL7521', '202402241536410', '202403061425180', '2024-03-0008', '3876', 8, 'Replacement Guarantee ', '2024-03-04', '10459', '2024-03-04'),
('20240306144336', '20240306144336', 'HO75', 'AKL4899', '202402121605380', '202403061441490', '2024-02-0054', '3875', 3, '', '2024-03-04', '10458', '2024-03-04'),
('20240307145851', '20240307145851', 'HO75', 'BWL13811', '202402041046191', '202403031740411', '2024-02-0063', 'BWL-ST-24-40', 1, '', '2024-03-07', 'RC/REP-2769-22/23', '2024-02-17'),
('20240310100253', '20240310100253', 'HO537', 'BADL1129', '202402061340300', '202403101001040', 'BADL-2024-02-0019', '69/24', 1, '', '2024-03-10', '002124', '2024-02-13'),
('20240310103035', '20240310103035', 'HO537', 'BRL16873', '202403101028350', '202403101029500', 'BRL-2024-02-0002', '100', 2, '', '2024-02-10', '002741', '2024-03-10'),
('20240310104133', '20240310104133', 'HO537', 'BADL382', '202401300951580', '202403101039520', 'BADl-2024-02-0020', '64/24', 1, '', '2024-04-14', '630', '2024-02-14'),
('20240310104135', '20240310104135', 'HO537', 'BADL382', '202401300951581', '202403101039521', 'BADl-2024-02-0020', '64/24', 1, '', '2024-02-14', '630', '2024-02-14'),
('20240310154658', '20240310154658', 'HO75', 'AKL7461', '202403051014520', '202403101545420', '2024-03-0017', '3906', 1, '', '2024-03-06', '171/24', '2024-03-06');

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
('20240130170926', 'ATL277921', 'ATLATL/GS/24/0062'),
('20240131114738', 'ATL277921', 'ATLATL/GS/24/0062'),
('20240203115640', 'ATL18413', 'ATLATL/GS/24/0062'),
('20240203123254', 'ATL278067', 'ATLATL/GS/24/0073'),
('20240203125011', 'ATL278061', 'ATLATL/GS/24/0073'),
('20240203125818', 'ATL278060', 'ATLATL/GS/24/0074'),
('20240204111307', 'BWL14199', 'BWL-ST-24-31'),
('20240204111310', 'BWL14199', 'BWL-ST-24-31'),
('20240204111312', 'BWL14199', 'BWL-ST-24-31'),
('20240204111315', 'BWL14199', 'BWL-ST-24-31'),
('20240204111317', 'BWL14199', 'BWL-ST-24-31'),
('20240205114810', 'AFL16316', '25'),
('20240205114811', 'AFL16316', '25'),
('20240205114813', 'AFL16316', '25'),
('20240205114814', 'AFL16316', '4'),
('20240205114816', 'AFL16316', '25'),
('20240205114818', 'AFL16316', '25'),
('20240205114950', 'AFL16316', '4'),
('20240220171657', 'AKL7454', '3590'),
('20240222153019', 'AKL7435', '3818'),
('20240222153020', 'AKL7435', '3818'),
('20240222154837', 'AKL4898', '3819'),
('20240224120851', 'AKL7199', '3824'),
('20240227132035', 'ATL2861', 'ATL/GS/24/0140'),
('20240227132038', 'ATL2861', 'ATL/GS/24/0140'),
('20240227132041', 'ATL2861', 'ATL/GS/24/0140'),
('20240227132916', 'ATL24394', 'ATL/GS/24/0145'),
('20240227133304', 'ATL3014', 'ATL/GS/24/0149'),
('20240227133604', 'ATL278067', 'ATL/GS/24/0148'),
('20240227134609', 'ATL24383', 'ATL/GS/24/0147'),
('20240227143226', 'ATL278072', 'ATL/GS/24/02/0139'),
('20240227143828', 'ATL278077', 'ATL/GS/24/02/0138'),
('20240227143829', 'ATL278077', 'ATL/GS/24/02/0138'),
('20240227151211', 'BWL14186', 'BWL-SF24-15'),
('20240229132332', 'BGL18615', '1489'),
('20240229133103', 'BGL18778', '1507'),
('20240229133104', 'BGL18778', '1507'),
('20240229133107', 'BGL18778', '1507'),
('20240229133915', 'BGL18778', '1511'),
('20240229134056', 'BGL18778', '1490'),
('20240229135657', 'BGL18781', '1495'),
('20240229135700', 'BGL18781', '1495'),
('20240229135703', 'BGL18781', '1495'),
('20240229135705', 'BGL18781', '1495'),
('20240229140357', 'BGL18780', '1496'),
('20240229140400', 'BGL18780', '1496'),
('20240229140402', 'BGL18780', '1496'),
('20240229140405', 'BGL18780', '1496'),
('20240229140909', 'BGL18779', '1497'),
('20240229140912', 'BGL18779', '1497'),
('20240229140915', 'BGL18779', '1497'),
('20240229140917', 'BGL18779', '1497'),
('20240229140920', 'BGL18779', '1497'),
('20240229141137', 'BGL18615', '1509'),
('20240229153727', 'BGL18838', '1508'),
('20240303123220', 'ATL278087', 'ATL/GS/24/0159'),
('20240303124139', 'ATL278144', 'ATL/GS/24/0153'),
('20240303131613', 'ATL277906', 'ATL/GS/23/0906'),
('20240303132911', 'ATL278038', 'ATL/GS/24/0160'),
('20240303174220', 'BWL13811', 'BWL-ST-24-40'),
('20240303174227', 'BWL13811', 'BWL-ST-24-40'),
('20240304131940', 'AKL7093', '3859'),
('20240304160037', 'ATL278101', 'ATL/GS/24/0178'),
('20240304160038', 'ATL278101', 'ATL/GS/24/0178'),
('20240304160039', 'ATL278101', 'ATL/GS/24/0178'),
('20240304160044', 'ATL278101', 'ATL/GS/24/0178'),
('20240304161621', 'ATL278101', 'ATL/GS/24/0177'),
('20240306142103', 'AKL7449', '3872'),
('20240306142132', 'AKL7449', '3872'),
('20240306142638', 'AKL7521', '3876'),
('20240306144336', 'AKL4899', '3875'),
('20240307145851', 'BWL13811', 'BWL-ST-24-40'),
('20240310100253', 'BADL1129', '69/24'),
('20240310103035', 'BRL16873', '100'),
('20240310104133', 'BADL382', '64/24'),
('20240310104135', 'BADL382', '64/24'),
('20240310154658', 'AKL7461', '3906');

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
('230'),
('24020'),
('31638'),
('4209'),
('6649'),
('7451'),
('774'),
('AFL31638'),
('AKL1108'),
('AKL169'),
('AKL43030'),
('ATL0000'),
('ATL3444'),
('ATL4300'),
('ATL4574'),
('BWL1438'),
('BWL1571'),
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
(4, 'NA'),
(5, 'EARS N EYES'),
(6, 'Fine Solution'),
(7, 'A.R.A COROPORATION'),
(8, 'ABDULLAH TRADERS'),
(9, 'Blue Pill Limited'),
(10, 'BOK International'),
(11, 'Comptech Solutions Ltd.'),
(12, 'E-DESK LIMITED'),
(13, 'ELEVATE SOLUTIONS'),
(14, 'GLOBAL BRAND LIMITED'),
(15, 'HARDY TECH'),
(16, 'INTERNATIONAL OFFICE SOLUTION'),
(17, 'IOM'),
(18, 'NEW GULSHAN COMPUTER'),
(19, 'ONESTOP SOLUTION'),
(20, 'OPTIMAL TECHNOLOGY (PVT.) LTD.'),
(21, 'Power Source'),
(22, 'RAIN COMPUTERS'),
(23, 'RICHMAN INFORMATICS'),
(24, 'ROBOTICS BD'),
(25, 'ROBUST INTERNATIONAL'),
(26, 'ROYAL OFFICE EQUIPMENT'),
(27, 'SOLUTIONS 1 AUTOMATION'),
(28, 'UPDATE TECHNOLOGY'),
(29, 'WEKI SOLUTION');

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
('AKL', 9, 9, 'Hamidur Rahman', 'hamid@babylon-bd.com', '01923103054', '2', 'AKL1108', 'AKL1108', '', '', '1', '0000-00-00'),
('ATL', 22, 9, 'Shamol', '', '01733568757', '2', 'AKL169', 'AKL169', '', '', '1', '0000-00-00'),
('AKL', 8, 63, 'Mozaffor', 'aklstore6@babylon-bd.com', '01740014377', '2', 'AKL43030', 'AKL43030', '', '', '1', '0000-00-00'),
('ATL', 21, 95, 'Dewan Mahbub Kamran', 'atlconsultant@babylon-bd.com', ' 01710879554 ', '2', 'ATL0000', 'ATL0000', '', '', '1', '0000-00-00'),
('ATL', 22, 63, 'Mr. Shafiq', '', '', '2', 'ATL230', 'ATL230', '', '', '1', '0000-00-00'),
('ATL', 8, 52, 'Md Sumon', '', '', '2', 'ATL3444', 'ATL3444', '', '', '1', '0000-00-00'),
('ATL', 22, 5, 'Mr. Siddique', '', '', '2', 'ATL4209', 'ATL4209', '', '', '1', '0000-00-00'),
('ATL', 5, 9, 'Shaikh Mrinmoy Zaman', 'atlhrac@babylon-bd.com', '01716622784', '2', 'ATL4300', 'ATL4300', '', '', '1', '0000-00-00'),
('ATL', 25, 4, 'Ali Ajgor', 'atlmaintenance@babylon-bd.com', '01677570267', '2', 'ATL4574', 'ATL4574', '', '', '1', '0000-00-00'),
('BWL', 8, 25, 'Washim', '', '', '2', 'BWL1438', 'BWL1438', '', '', '1', '0000-00-00'),
('BWL', 23, 83, 'Ali Hossain Amin', '', '', '2', 'BWL1571', 'BWL1571', '', '', '1', '0000-00-00'),
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mpr_wise_receive_list_view`  AS  select `mpr_insert_id`.`mprid` AS `mprid`,`mpr_insert_id`.`fid` AS `fid`,`product_category_insert`.`pccode` AS `pccode`,`item_insert`.`item` AS `item`,`product_category_insert`.`pcname` AS `pcname`,`mpr_insert`.`model` AS `model`,`receive_insert`.`po` AS `po`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,`mpr_insert`.`price` AS `price`,`mpr_insert`.`remarks` AS `remarks`,`mpr_insert`.`uname` AS `uname`,`mpr_insert_id`.`mdate` AS `mdate`,`receive_insert`.`grn` AS `grn`,`receive_insert`.`rqty` AS `rqty`,`receive_insert`.`rdate` AS `rdate`,`mpr_insert`.`description` AS `description`,`receive_insert`.`simprid` AS `simprid`,`receive_insert`.`sipoid` AS `sipoid`,`product_insert`.`pcode` AS `pcode`,`product_insert`.`pname` AS `pname` from ((((((`mpr_insert_id` join `mpr_insert` on(`mpr_insert`.`smprid` = `mpr_insert_id`.`smprid`)) join `receive_insert` on(`receive_insert`.`simprid` = `mpr_insert`.`simprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_insert` on(`product_insert`.`pcode` = `mpr_insert`.`mpcode`)) join `item_insert` on(`item_insert`.`itemcode` = `mpr_insert`.`model`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `product_insert`.`pccode`)) where `receive_insert`.`grn` <> '' ;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `po_qty_remaining`  AS  select `mpr_insert_id`.`mprid` AS `mprid`,`mpr_insert_id`.`fid` AS `fid`,`product_category_insert`.`pcname` AS `pcname`,`product_group_insert`.`pgname` AS `pgname`,`product_subgroup_insert`.`psgname` AS `psgname`,`product_insert`.`pname` AS `pname`,`mpr_insert`.`model` AS `model`,`po_insert_view`.`simprid` AS `simprid`,`mpr_insert`.`mpcode` AS `pcode`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,sum(`po_insert_view`.`pqty`) AS `prqty`,sum(`po_insert_view`.`mpprice`) AS `tpprice` from (((((((((`po_insert_view` join `mpr_insert` on(`mpr_insert`.`simprid` = `po_insert_view`.`simprid`)) join `mpr_insert_id` on(`mpr_insert`.`smprid` = `mpr_insert_id`.`smprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_insert` on(`product_insert`.`pcode` = `mpr_insert`.`mpcode`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `product_insert`.`pccode`)) join `product_group_insert` on(`product_group_insert`.`pgid` = `product_insert`.`pgid`)) join `product_subgroup_insert` on(`product_subgroup_insert`.`psgid` = `product_insert`.`psgid`)) join `department` on(`department`.`deptid` = `mpr_insert_id`.`mdeptid`)) join `designation` on(`designation`.`desigid` = `mpr_insert_id`.`mdesigid`)) group by `po_insert_view`.`simprid` ;

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
-- Indexes for table `brand_insert`
--
ALTER TABLE `brand_insert`
  ADD PRIMARY KEY (`brandid`) USING BTREE;

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
  ADD PRIMARY KEY (`itemcode`) USING BTREE;

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
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desigid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

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
  MODIFY `puomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplier_insert`
--
ALTER TABLE `supplier_insert`
  MODIFY `supplierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
