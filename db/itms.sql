-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 01:23 PM
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
('20240304135155', 'Power Guard'),
('20240324141234', 'Zebra'),
('20240404095504', 'DELL'),
('20240417125550', 'Godex'),
('20240513120743', 'TEMEISHENG');

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
(27, 'FINISHING'),
(28, 'IE');

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
(96, 'N/A'),
(97, 'Head of IE');

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
('20240304135039', 'HPE ProLiant DL20(HP)', 'SVR'),
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
('20240310111418', 'None', 'RIB'),
('20240313115244', 'Business Basic', 'M365'),
('20240313115755', 'HP 501', 'PRTMT'),
('20240313115820', 'HP 401', 'PRTMT'),
('20240323133057', 'Asus Zenbook14 FLIP OLED', 'LPT'),
('20240324141209', 'None', 'PTRH'),
('20240325111537', 'Asus ExpertBook', 'LPT'),
('20240331102008', 'Toshiba e-Studio 3018', 'DCB'),
('20240331102032', 'Toshiba e-Studio 3018', 'CPRDWR'),
('20240331103518', 'ZC300', 'PTR'),
('20240331104152', 'ZC300', 'RIB'),
('20240331132127', 'Scanner Cable ', 'CBL-MT'),
('20240331132142', 'None', 'CBL-MT'),
('20240403141321', 'HP 1102', 'FUSER UNIT MOVING GEAR'),
('20240403141341', 'HP 400', 'DRIVE BELT GEAR'),
('20240403141402', 'HP 2035', 'DRIVE BELT GEAR'),
('20240403141429', 'HP 2035', 'FUSER UNIT'),
('20240403141439', 'HP 1102', 'FUSER UNIT'),
('20240403141500', 'HP 400', 'FUSER UNIT'),
('20240403141528', 'HP 1102', 'DRIVE BELT GEAR'),
('20240403145058', '9U ', 'NTRK'),
('20240403145114', '12U', 'NTRK'),
('20240403145147', '16U', 'NTRK'),
('20240403145201', '32U', 'NTRK'),
('20240403145212', '42U', 'NTRK'),
('20240403150132', 'NONE', 'DRUM'),
('20240403150711', 'NONE', 'LASER OPTIC UNIT BOARD'),
('20240404094628', 'DELL Server', 'SVR'),
('20240404094755', 'None', 'SVR'),
('20240417125455', 'BPZ 420i', 'PRTRH'),
('20240417125510', 'None', 'PRTRH'),
('20240424111855', 'None', 'BARL'),
('20240424111918', 'Printer Barcode Label', 'BARL'),
('20240424122413', 'None', 'FEEDROLL'),
('20240424125954', 'None', 'MOB'),
('20240429111738', 'None', 'PLTMTR'),
('20240429112204', 'None', 'CCBL'),
('20240505113507', 'None', 'WWBEARING'),
('20240505113519', 'None', 'LONGRIBBON'),
('20240505113528', 'None', 'HEADCABLE'),
('20240513120712', 'SL15-02', 'PSS'),
('20240513120722', 'None', 'PSS'),
('20240521171346', 'None', 'DP100'),
('20240529162451', 'Barcode Scanner', 'SCN'),
('20240601092818', 'Portable SSD', 'PDE'),
('20240601092835', 'Portable HDD', 'PDE'),
('20240601092908', 'None', 'PDE'),
('20240601093258', 'Digital Camera(Canon)', 'CAM'),
('20240601093308', 'None', 'CAM'),
('20240601093326', 'Digital Camera(Nicon)', 'CAM'),
('20240630130401', 'Norcel Barcode Printer', 'PRTCUTTER'),
('20240630130408', 'None', 'PRTCUTTER'),
('20240703101129', 'None', 'POINTER10'),
('20240703121941', 'Fortigate Firewall', 'Firewall-LICENSE');

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
('20230823173202', 'Missing'),
('20240331132245', 'USB to RJ45 Cable');

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
('20240127165313', '202401271653130', 'CTG', '20240113095331', '20240120115642', 3, 1, 'Handtag print purpose', 3400, 'for 4 months use', 'Sample', 1),
('20240127165313', '202401271653131', 'CTG', '20240113095344', '20240120115642', 3, 1, 'Handtag print purpose', 3400, 'for 4 months use', 'Sample', 1),
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
('20240204093439', '202402040934390', 'HDD', '20240121120834', '20240116164212', 1, 1, 'Data Back for Kothokotha /Scolarship Video', 7000, '', 'SubonPathang/Rumana', 1),
('20240204103004', '202402041030040', 'AR', '20240204102806', '20240204102841', 1, 5, '', 35000, '', 'FACTORY WOKRER', 0),
('20240204104619', '202402041046190', 'HDD', '20240121120834', '20240116164212', 1, 1, 'WD 1TB Original', 4800, 'Replace faulty HDD', 'Washim -Store', 1),
('20240204104619', '202402041046191', 'WMS', '20240120125612', '20240120115732', 1, 1, 'A4 Tech Wireless mouse', 850, 'Replace faulty mouse', 'Store stock', 1),
('20240120125700', '202402041100170', 'CTG', '20240113095344', '20240120115642', 1, 1, 'COLOUR', 3600, '', 'All users', 1),
('20240204110751', '202402041107510', 'SSD', '20240130131720', '20240204110504', 1, 1, 'Transcend 512 SATA Type SSD', 6500, 'Replace fulty SSD', 'Imtiajur - Planning', 1),
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
('20240205100435', '202402051004350', 'Wifi', '20240127121433', '20240117104145', 2, 1, 'Pocket Router GP', 3200, 'Inspection Room For Buyer ', 'Inspection Buyer ', 1),
('20240206134030', '202402061340300', 'PTR', '20240123154558', '20240117104145', 1, 1, 'Epson LQ-310 Dot marix printer', 23500, 'Bogura Depot ', 'Bogura Depot ', 1),
('20240206163347', '202402061633470', 'PHTNR', '20240206162856', '20240130160104', 1, 1, 'Toshiba 3008P Toner', 9500, 'Monthly', 'M&M users', 1),
('20240206163347', '202402061633471', 'PHTNR', '20240206162910', '20240130160104', 1, 1, 'Toshiba 5018C Toner', 9500, 'Monthly', 'Comm users', 1),
('20240207105905', '202402071059050', 'TCPASTE', '20240207104259', '20240117104145', 1, 1, 'Processor cooler paste', 100, '', 'IT use', 1),
('20240207105905', '202402071059051', 'SENCL', '20240207105058', '20240117104145', 1, 1, 'UGREAN CM400 M.2 NVMe/SATA SSD Enclosure', 3100, '', 'IT use', 1),
('20240207105905', '202402071059052', 'CCLR', '20240207105311', '20240117104145', 1, 1, 'Contact cleaner', 1600, '', 'IT use', 1),
('20240211161835', '202402111618350', 'RADF', '20240211161611', '20240130160104', 1, 1, 'Photocopy Machine Tray', 35000, 'Approve by Salam sir', 'Treasury', 1),
('20240212160538', '202402121605380', 'TNR', '20240111140250', '20240130112137', 3, 1, 'For 3 months', 1400, '', 'Accounts', 1),
('20240215104813', '202402151048130', 'SCN', '20240114102233', '20240120115642', 1, 1, 'For maintenance dpet differnt documents scanning purpose. ', 10000, 'Important docs scanning purpose', 'Mnts team', 1),
('20240215130826', '202402151308260', 'LKB', '20240123154150', '20240117104145', 1, 1, 'Hp Prpbook 440 G2', 2000, '', 'Nazmul-COM', 1),
('20240217154911', '202402171549110', 'HDD', '20240121120834', '20240116164212', 1, 1, 'Replace faulty HDD', 5000, '', 'Mahbub Alam- MNTS', 1),
('20240219162217', '202402191622170', 'MCVTR', '20240123153757', '20240117104145', 1, 1, 'USB to LAN Converter', 1000, 'Built lan is damaged', 'Jahidul', 1),
('20240222110741', '202402221107410', 'TNR', '20240125133141', '20240130112137', 4, 1, 'For the month of March 2024', 1650, '', 'Knitting & HRD', 1),
('20240222110741', '202402221107411', 'UKB', '20240120125759', '20240120115732', 6, 1, 'For the month of March 2024', 850, '', 'Store stock', 1),
('20240222110741', '202402221107412', 'UMS', '20240120125552', '20240120115732', 4, 1, 'For the month of March 2024', 400, '', 'Store stock', 1),
('20240224153641', '202402241536410', 'CTG', '20240113095222', '20240129101429', 8, 1, 'CAD Cartridge', 2000, '', 'CAD users', 1),
('20240227102825', '202402271028250', 'TNR', '20240111140218', '20240130112137', 2, 1, '', 1650, '', 'All users', 1),
('20240227150640', '202402271506400', 'MBD', '20240123154227', '20240117104145', 1, 1, 'Gigabyte H510M', 11500, 'replace faulty Motherboard', 'Osman - HRD', 1),
('20240229131625', '202402291316250', 'UKB', '20240120125759', '20240120115732', 3, 1, 'with numeric KB', 900, '', 'Store stock', 1),
('20240229131625', '202402291316251', 'TNR', '20240131145730', '20240130112137', 2, 1, '', 1200, '', 'Store stock', 1),
('20240229131625', '202402291316252', 'UMS', '20240120125552', '20240120115732', 4, 1, 'A4 Tech Good quality', 400, '', 'Store stock', 1),
('20240229131625', '202402291316253', 'WMS', '20240120125612', '20240120115732', 2, 1, 'A4 Tech Good quality', 900, '', 'Store stock', 1),
('20240229131625', '202402291316254', 'CTG', '20240123153733', '20240117104145', 2, 1, 'Lexmark 664 (Black)', 600, '', 'Store stock', 1),
('20240229131625', '202402291317560', 'IPSW', '20240229131215', '20240117104145', 50, 1, '', 50, 'Emergency support', 'Store Stock', 0),
('20240205095602', '202402291350000', 'PCK', '20240229134701', '20240117104145', 10, 1, '', 3600, '', 'CAD', 1),
('20240229143134', '202402291431340', 'DKTP', '20240111125117', '20240117104145', 1, 1, '', 60000, '', 'Mahbub Alam-CAD', 0),
('20240229153519', '202402291535190', 'MNT', '20240131152405', '20240117104145', 1, 1, '', 11500, 'Dell', '', 1),
('20240229181723', '202402291817230', 'LPT', '20240111125009', '20240129142843', 1, 1, 'Corei3,8GB RAM,256 SDD,1TB HDD', 65000, '', 'Sajjad Hossain', 1),
('20240302172058', '202403021720580', 'OFUPS', '20240120124913', '20240129143032', 1, 1, 'Power Guard ', 8500, '', 'Saiful Islam', 1),
('20240303131101', '202403031311010', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP ProBook 450 G4', 2000, 'Replace faulty Kayboard', 'Manjurul', 1),
('20240303132652', '202403031326520', 'RJC', '20240123154635', '20240203104959', 2, 2, '20 Pcs each box', 550, 'For Sedomaster network', 'For Sedomaster network', 1),
('20240304152430', '202403041524300', 'SVR', '20240304135039', '20240129101429', 1, 1, 'HPE ProLiant DL20\r\nGen10 Plus 4SFF CTO Server 1 x Intel Xeon\r\nE-2314', 418000, 'SedoMaster Server', 'SedoMaster Server', 1),
('20240304152430', '202403041524301', 'WINDS', '20240304135355', '20240117104145', 1, 1, 'Windows Server 2022 License', 51000, 'SedoMaster Server', 'SedoMaster Server', 1),
('20240304152430', '202403041524302', 'DKTP', '20240111125117', '20240117104145', 4, 4, '12th Gen Core i5 Processor,  Mother Board 12th Gen, RAM 16GBDDRR4, (8x2) SSD 512GB 2280 (type M2), Desktop Casing, Keyboard A4Tech, Mouse\r\nA4Tech, LG 24\"\" Monitor, UPS\r\n1200va', 77650, 'SedoMaster Server', 'SedoMaster Server', 1),
('20240304152430', '202403041524303', 'OUPS', '20240120125100', '20240304135155', 1, 1, 'Online UPS Capacity: 3000 VA /\r\n3000W / 2700W / 2400W AC\r\nMode: 93% LED Panel: UPS', 35000, 'SedoMaster Server', 'Server backup', 1),
('20240304152430', '202403041524304', 'CBL', '20240113113547', '20240117105230', 9, 2, 'CAT 6 UTP Network cable', 19400, 'SedoMaster Server Network', 'SedoMaster ', 1),
('20240304152430', '202403041524305', 'NTSW', '20240123154310', '20240117104145', 1, 1, 'Cisco POE SG350 28P ', 52000, 'SedoMaster Server Network', 'SedoMaster ', 1),
('20240304152933', '202403041529330', 'SEDOMs', '20240304134729', '20240117104145', 1, 12, 'SedoMaster Advanced System (including 1 workstation, 04 additional user license, 05 OPC controller, VAT & AIT 50+3%)', 9304400, 'Dying monitoring ', 'Dying ', 0),
('20240304154545', '202403041545450', 'NTRK', '20240123154301', '20240117105342', 1, 1, '9U Wall mount with PDU', 17200, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545451', 'WM', '20240123154740', '20240117105342', 1, 1, '1U Wire manager panel', 1400, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545452', 'PP', '20240123154437', '20240117105230', 1, 1, 'Cat6 24Port Patch Panel ', 11800, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545453', 'CBL', '20240123154732', '20240117105230', 20, 1, '.5m UTP Cable', 330, 'SedoMaster Network', 'Dying', 1),
('20240304154545', '202403041545454', 'RJC', '20240123154635', '20240117105230', 20, 1, 'CAT6 RJ45 Connector ', 35, 'SedoMaster Network', 'Dying', 1),
('20240304162555', '202403041625550', 'HDD', '20240121120834', '20240116164212', 1, 1, 'Replace faulty HDD', 5000, 'Replace faulty HDD', 'Milon', 1),
('20240305101452', '202403051014520', 'PHTNR', '20240206162910', '20240130160104', 1, 1, '', 8500, '', 'Treasury ', 1),
('20240305110041', '202403051100410', 'CTG', '20240113095331', '20240120115642', 1, 1, '', 4100, 'Monthly ', 'HRD', 1),
('20240305110041', '202403051100411', 'CTG', '20240113095344', '20240120115642', 1, 1, '', 4100, 'Monthly ', 'HRD', 1),
('20240305110041', '202403051100412', 'WMS', '20240120125612', '20240120115732', 1, 1, '', 1000, 'Monthly ', 'HoO', 1),
('20240305110041', '202403051100413', 'UKB', '20240120125759', '20240120115732', 2, 1, '', 800, 'Monthly ', 'Store stock', 1),
('20240305110041', '202403051100414', 'HDD', '20240121120834', '20240116164212', 1, 1, '7200rpm', 4600, 'Emergency support', 'Store stock', 1),
('20240305110041', '202403051100415', 'CCTV', '20240130165846', '20240117104145', 2, 1, 'Dahua DH-IPC-HFW 1230S-S5', 4800, 'Rooftop safety purpose', 'HRD', 0),
('20240305110041', '202403051100416', 'CBL', '20240113113547', '20240117105230', 1, 2, '', 19600, 'Rooftop safety purpose', 'HRD', 0),
('20240305151132', '202403051511320', 'MBD', '20240305145310', '20240129142843', 1, 1, 'Core i3 supported MB', 11000, 'Replace faulty MB', 'Ratan', 1),
('20240305151132', '202403051511321', 'RAM', '20240123154626', '20240117104145', 1, 1, '8GB DDR4 Hynix', 2500, 'Replace faulty RAM', 'Ratan', 1),
('20240305165158', '202403051651580', 'LPT', '20240111125009', '20240129142843', 1, 1, 'Core i5, 8GB, SSD250GB, HDD1TB, 14” Display', 85000, 'Replacement device', 'Quazi Quadiruzzaman', 1),
('20240307165202', '202403071652020', 'MNT', '20240131152405', '20240129101429', 1, 1, '18.5\" Sq LED  monitor', 9500, 'Replace faulty monitor (Panel damaged) ', 'Mozaffor', 1),
('20240309154604', '202403091546040', 'PTR', '20240123154558', '20240129101429', 1, 5, 'PRINTER HP LASERJET PRO 501DN', 74800, '', 'FINISHING USER', 0),
('20240309154857', '202403091548570', 'AR', '20240204102806', '20240204102841', 1, 5, 'ZKTECO ATTENDANCE MACHINE (REPLACE)\r\n', 35000, '', 'HRD ATTENDANCE USER', 0),
('20240309155151', '202403091551510', 'CCTV', '20240130165846', '20240117104145', 10, 1, 'Dahua IPC HFW1280', 4800, 'Replace faulty camera', 'Pdn ground floor', 1),
('20240309155151', '202403091551511', 'HDD', '20240116164039', '20240116164212', 1, 1, '6TB WD Purple ', 21000, 'CCTV  storage purpose', 'Pdn ground floor', 1),
('20240309155151', '202403091551512', 'CBL', '20240113113547', '20240117105230', 1, 2, 'UTP CAT6 Cable', 19500, 'CCTV Network', 'Pdn ground floor', 1),
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
('20240309170845', '202403091708450', 'TABLET', '20240203114039', '20240129142832', 1, 1, '10.4\"', 42000, 'TAO inspection TAB (Mail attached)', 'Jel Haque', 1),
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
('20240310105418', '202403101054180', 'TNR', '20240113094733', '20240130112137', 5, 1, '', 1300, '', '', 1),
('20240310105418', '202403101054181', 'TNR', '20240113094956', '20240130112137', 2, 1, '', 1200, '', '', 1),
('20240310105418', '202403101054182', 'TNR', '20240131145730', '20240130112137', 3, 1, '', 1100, '', '', 1),
('20240310105418', '202403101054183', 'TNR', '20240123154716', '20240130112137', 2, 1, '44 A', 1400, '', '', 0),
('20240310105418', '202403101054184', 'TNR', '20240113095022', '20240130112137', 6, 1, '', 2950, '', '', 1),
('20240310105418', '202403101054185', 'CTG', '20240113095222', '20240117104145', 10, 1, 'BOK Brand', 2000, '', '', 1),
('20240310105818', '202403101058180', 'UMS', '20240120125552', '20240120115732', 6, 1, '', 400, '', '', 1),
('20240310105818', '202403101058181', 'PTRFF', '20240123153940', '20240117104145', 2, 1, 'HP 3015', 1400, '', '', 1),
('20240310105818', '202403101058182', 'PTRFF', '20240123153940', '20240117104145', 3, 1, 'HP 401', 800, '', '', 1),
('20240310105818', '202403101058183', 'PTRPR', '20240121124221', '20240117104145', 3, 1, 'HP 2035', 1200, '', '', 1),
('20240310111318', '202403101113180', 'TNR', '20240123154716', '20240130112137', 4, 1, '1 Set,Toner 410,411,412,413', 10300, '', 'DND', 1),
('20240310111318', '202403101113181', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '', 8500, '', 'HO', 0),
('20240310111318', '202403101117500', 'EPSINK', '20240310111009', '20240117104145', 2, 1, 'BK 664', 850, '', 'HO', 1),
('20240310111318', '202403101117501', 'RIB', '20240310111405', '20240117104145', 3, 1, '', 4000, '', 'HO', 0),
('20240310112218', '202403101122180', 'PRTMT', '20240313115755', '20240117104145', 1, 1, '', 6200, '', 'Jahangir Alam', 1),
('20240310120948', '202403101209480', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP 1000', 1500, '', 'Zahid-Audit-BASL', 1),
('20240310170111', '202403101701110', 'LPT', '20240111125009', '20240129142843', 1, 1, 'Core i3-8GB RAM-250GB SSD-1TB HDD-14\"', 68000, 'Existing Acer Travelmat laptop Motherboard has been damaged along with Network portion not working. ', 'Tanay', 1),
('20240311141040', '202403111410400', 'PSU', '20240123154538', '20240130112130', 1, 1, 'Best Quality', 1650, '', 'Store', 0),
('20240311141040', '202403111410401', 'UMS', '20240120125552', '20240120115732', 3, 1, '', 450, '', 'Store', 0),
('20240313144907', '202403131449070', 'M365', '20240313115244', '20240117104145', 5, 12, 'Renewal License for MS Teams/One Drive/Azure', 4200, 'One year renewal', 'hasanscm, quazi, sajahangir, sajjadscm, sayedtanay', 0),
('20240313145300', '202403131453000', 'M365', '20240313115244', '20240117104145', 5, 12, 'Renewal License for MS Teams/One Drive/Azure', 4200, 'Renewal for 1 Year', 'debabrata, manjurulems, mazharul, sohag', 0),
('20240316144147', '202403161441470', 'LCRG', '20240123154134', '20240129101429', 1, 1, 'Charger for HP ProBook 440 G3', 2500, 'Laptop sent from head office without charger.', 'Mushfiq - HR (OCMS/Druty)', 1),
('20240317152320', '202403171523200', 'PTRPR', '20240123154548', '20240129101429', 1, 1, 'HP 402/403 Pressure roller', 1200, '', 'Production', 1),
('20240317152320', '202403171523201', 'PTRFF', '20240123153940', '20240129101429', 1, 1, 'HP 402/403 Fuser Film', 800, '', 'Production', 1),
('20240319094534', '202403190945340', 'M365', '20240313115244', '20240117104145', 10, 1, 'MS Team License ', 4200, '', 'BTL User', 0),
('20240319094735', '202403190947350', 'M365', '20240313115244', '20240117104145', 7, 1, 'Ms Teams License', 4200, '', 'AFL User', 0),
('20240319094853', '202403190948530', 'M365', '20240313115244', '20240117104145', 2, 1, 'Ms Teams License', 4200, '', 'BCL User', 0),
('20240319095423', '202403190954230', 'M365', '20240313115244', '20240117104145', 5, 1, 'Ms Teams License', 4200, '', 'BASL/BADl User', 0),
('20240319101128', '202403191011280', 'M365', '20240313115244', '20240117104145', 20, 1, 'Ms Teams License', 4200, '', 'HO User', 0),
('20240319124935', '202403191249350', 'TNR', '20240111140218', '20240130112137', 2, 1, 'Monthly ', 1500, '', 'Store stock', 1),
('20240319124935', '202403191249351', 'TNR', '20240125133141', '20240130112137', 4, 1, 'Monthly ', 1500, '', 'Store stock', 1),
('20240319124935', '202403191249352', 'UKB', '20240120125759', '20240120115732', 4, 1, 'Monthly ', 750, '', 'Store stock', 1),
('20240319124935', '202403191249353', 'UMS', '20240120125552', '20240120115732', 4, 1, 'Monthly ', 400, '', 'Store stock', 1),
('20240319124935', '202403191249354', 'PTRPR', '20240121124221', '20240129101429', 2, 1, 'HP LJ 401N', 1000, '', 'Store stock', 1),
('20240319124935', '202403191249355', 'PTRFF', '20240123153940', '20240117104145', 6, 1, 'HP Printer', 700, '', 'Store stock', 1),
('20240319124935', '202403191249356', 'RAM', '20240123154626', '20240117104145', 1, 1, 'DDR4 2666V for laptop', 2000, '', 'Siddique -Store manager', 1),
('20240319124935', '202403191249357', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP 440 G5 laptop KB', 5000, '', 'Siddique -Store manager', 1),
('20240319124935', '202403191249358', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP 450 G6 laptop KB', 5100, '', 'Asadur Rahman - Planning', 1),
('20240319124935', '202403191249359', 'IPT', '20240113122908', '20240204125303', 1, 1, 'IP phone  ', 4300, '', 'R&D Imran', 1),
('20240323133300', '202403231333000', 'LPT', '20240323133057', '20240129142843', 1, 1, 'Corei5,16 GB RAM,512 SDD', 158000, '', 'GCFO', 1),
('20240324141810', '202403241418100', 'PTRH', '20240324141209', '20240324141234', 1, 1, '203 dpi zebra printer head', 60000, 'Finishing section use purpose', 'Mr. Latif', 0),
('20240325112856', '202403251128560', 'LPT', '20240325111537', '20240129142843', 1, 1, 'Asus ExpertBook B1>B1402CGA-NK0276, 12th Gen, i3-8GB-128GB UFS+256M.2  NVMESSD,  14\"', 66000, 'For new joiner', 'Ashraful Bari, Merchandiser', 1),
('20240325130719', '202403251307190', 'CTG', '20240113095222', '20240129101429', 8, 1, '', 2000, 'Plotter Cartridge', 'CAD users', 1),
('20240330100639', '202403301006390', 'UBTR', '20240130152355', '20240117104145', 4, 1, '', 1550, '', 'Emergency support', 1),
('20240330100639', '202403301006391', 'RJC', '20240123154635', '20240203104959', 40, 1, '', 23, '', 'Emergency support', 1),
('20240330100639', '202403301006392', 'UKB', '20240120125759', '20240120115732', 3, 1, '', 800, '', 'Emergency support', 1),
('20240330100639', '202403301006393', 'UMS', '20240120125552', '20240120115732', 4, 1, '', 400, '', 'Emergency support', 1),
('20240330124203', '202403301242030', 'TNR', '20240113095022', '20240130112137', 1, 1, '', 2900, '', 'QAD', 1),
('20240330153943', '202403301539430', 'MNT', '20240131152405', '20240129101429', 1, 1, 'Replace faulty monitor', 9000, 'Replace faulty monitor', 'Badal', 1),
('20240330153943', '202403301539431', 'PHTNR', '20240206162910', '20240130160104', 1, 1, '', 8500, '', 'All users', 1),
('20240331101550', '202403311015500', 'CPRDM', '20240124160541', '20240130160104', 1, 1, '100000 Warranty ', 3300, '', 'Treasury', 1),
('20240331101550', '202403311015501', 'DCB', '20240331102008', '20240130160104', 1, 1, '', 1500, '', 'Treasury', 1),
('20240331101550', '202403311015502', 'HTRPCR', '20240121123926', '20240130160104', 1, 1, '', 3000, '', 'Treasury', 1),
('20240331101550', '202403311015503', 'PTRPR', '20240121125832', '20240130160104', 1, 1, '', 4500, '', 'Treasury', 1),
('20240331101550', '202403311015504', 'CSR', '20240124160146', '20240130160104', 1, 1, '', 2250, '', 'Treasury', 1),
('20240331101550', '202403311023270', 'CPRDWR', '20240331102032', '20240130160104', 1, 1, '', 3200, '', 'Treasuy', 1),
('20240331103927', '202403311039270', 'PTR', '20240331103518', '20240324141234', 1, 1, 'Card Printer ', 99500, '', 'HRD', 0),
('20240331104054', '202403311046320', 'RIB', '20240331104152', '20240324141234', 2, 1, 'Card printer ', 4500, 'Ribbon', 'HRD', 1),
('20240331132432', '202403311324320', 'CBL-MT', '20240331132127', '20240117104145', 1, 1, 'Barcode Scanner Cable USB to RJ45 symble', 1800, 'Replace faulty cable', 'QC users', 1),
('20240331151943', '202403311519430', 'MBD', '20240305145310', '20240129142843', 1, 1, 'Asus H110M-K series 6th Gen', 11000, 'Replace faulty mother board', 'Chemical Store', 1),
('20240401100845', '202404011008450', 'LDSP', '20240123154142', '20240117104145', 1, 1, 'HP Probook 450 G6', 4800, '', 'Anwar Hossain-Planning', 1),
('20240401131246', '202404011312460', 'NTSW', '20240123154310', '20240117104145', 1, 1, 'Cisco Business 350 CBS350-24P-4G-EU', 48000, 'SedoMaster Network', 'Sedo Master', 1),
('20240401131246', '202404011312461', 'PP', '20240123154437', '20240117105230', 1, 1, '24 Port Patch Panel', 0, 'SedoMaster Network', 'Sedo Master', 1),
('20240401131246', '202404011312462', 'WM', '20240123154740', '20240117105230', 1, 1, '24 Port Wire Manager', 0, 'SedoMaster Networka', 'Sedo Master', 1),
('20240401131246', '202404011312463', 'CBL', '20240123154732', '20240117105230', 24, 1, '0.5m UTP short cable', 0, 'SedoMaster Networka', 'Sedo Master', 1),
('20240401131246', '202404011312464', 'RJC', '20240123154635', '20240203104959', 40, 1, '', 0, 'SedoMaster Networka', 'Sedo Master', 1),
('20240401131246', '202404011312465', 'SFP', '20240117105819', '20240117104145', 2, 1, 'MC type', 0, 'SedoMaster Networka', 'Sedo Master', 1),
('20240402111725', '202404021117250', 'MNT', '20240131152405', '20240117104145', 1, 1, '18\" FHD Monitor', 8500, 'Replace faulty monitor (Panel damaged)', 'ATL Security gate', 1),
('20240402120537', '202404021205370', 'IPT', '20240113122908', '20240204125303', 2, 1, 'Replacement and new one', 4300, 'Replacement and new one', 'Helal & Mukit', 1),
('20240403095151', '202404030951510', 'SSD', '20240130131720', '20240204110504', 1, 1, 'Replace old SSD', 7900, 'Replace old SSD', 'Tarequl Islam', 1),
('20240403122424', '202404031224240', 'LBTR', '20240129101311', '20240117104145', 2, 1, 'G3', 3200, '', 'BRL', 1),
('20240403122424', '202404031224241', 'CTG', '20240123153733', '20240117104145', 1, 1, 'HP 682', 2800, '', 'BRL', 1),
('20240403122424', '202404031224242', 'TNR', '20240111140250', '20240117104145', 6, 1, '', 1200, '', 'BRL', 1),
('20240403122424', '202404031224243', 'UMS', '20240120125552', '20240120115732', 5, 1, '', 400, '', 'BRL', 1),
('20240403125238', '202404031252380', 'SFP', '20240117105819', '20240117104145', 2, 1, '6COM', 4000, 'NETWORK', 'FACTORY', 0),
('20240403125814', '202404031258140', 'TNR', '20240111140250', '20240130112137', 2, 1, 'TONER 80A', 1300, '', '', 0),
('20240403125814', '202404031258141', 'TNR', '20240113103017', '20240130112137', 2, 1, 'TONER 326A', 1300, '', '', 0),
('20240403125814', '202404031258142', 'CTG', '20240113095222', '20240130112137', 8, 1, 'CARTTRIDGE 45A', 2060, '', '', 0),
('20240403125814', '202404031258143', 'TNR', '20240113095022', '20240130112137', 1, 5, 'TONER 87A', 3000, '', '', 0),
('20240403125814', '202404031258144', 'TNR', '20240113094956', '20240130112137', 3, 1, 'TONER 85A', 1300, '', '', 0),
('20240403130620', '202404031306200', 'UMS', '20240120125552', '20240120115732', 3, 1, '', 400, '', '', 0),
('20240403130620', '202404031306201', 'UKB', '20240120125759', '20240120115732', 3, 1, '', 750, '', '', 0),
('20240403130620', '202404031306202', 'UBTR', '20240130152355', '20240129143020', 2, 1, '', 1900, '', '', 0),
('20240403130620', '202404031306203', 'MBD', '20240305145310', '20240129142843', 1, 5, 'MOTHER BOARD H5110M', 10700, '', '', 0),
('20240403130620', '202404031306204', 'PRCR', '20240309161438', '20240129142825', 1, 5, 'PROCESSOR I3 10G INTEL', 12700, '', '', 0),
('20240403130620', '202404031306205', 'RAM', '20240123154626', '20240129142957', 1, 5, 'RAM 8GB 3200MHZ CORSAIR VENGEANCE', 2400, 'RAM 8GB 3200MHZ CORSAIR VENGEANCE', '', 0),
('20240403130620', '202404031306206', 'MPD', '20240129112346', '20240117104145', 2, 1, '', 150, '', '', 0),
('20240403130620', '202404031306207', 'RAM', '20240123154626', '20240129142957', 1, 5, 'DDR3 1600MZ 8GB', 1700, 'DDR3 1600MZ 8GB', '', 0),
('20240403130620', '202404031306208', 'RAM', '20240123154626', '20240129142957', 1, 5, 'DDR3 1333MZ 8GB', 1700, 'DDR3 1333MZ 8GB', '', 0),
('20240403142411', '202404031424110', 'FUSER UNIT', '20240403141429', '20240129101429', 1, 5, 'FUSER UNIT (MOD. HP 2035)', 4500, '', '', 0),
('20240403142411', '202404031424111', 'PTRFF', '20240123153940', '20240129101429', 5, 1, 'FUSER FILM', 700, '', '', 0),
('20240403142411', '202404031424112', 'FUSER UNIT', '20240403141500', '20240129101429', 1, 5, 'FUSER UNIT (MOD. HP 400)', 4500, '', '', 0),
('20240403142411', '202404031424113', 'DRIVE BELT GEAR', '20240403141528', '20240129101429', 2, 1, 'DRIVE BELT GEAR - HP 1102', 1200, '', '', 0),
('20240403142411', '202404031424114', 'FUSER UNIT MOVING GEAR', '20240403141321', '20240129101429', 2, 1, 'FUSER UNIT MOVING GEAR - HP 1102', 600, '', '', 0),
('20240403142643', '202404031426430', 'MNT', '20240131152405', '20240129101429', 1, 1, 'COMPUTER MONITOR 18\" ', 12000, '', '', 0),
('20240403143059', '202404031430590', 'Wifi', '20240127121416', '20240127121456', 1, 5, 'ROUTER ACRCHER C80 AC 19900 TPLINK', 4350, '', '', 0),
('20240403143242', '202404031432420', 'TNR', '20240111140250', '20240130112137', 2, 1, 'TONER 80/05A', 1200, '', '', 0),
('20240403143700', '202404031437000', 'TNR', '20240111140218', '20240130112137', 1, 5, '', 1650, '', '', 0),
('20240403143700', '202404031437001', 'TNR', '20240111140250', '20240130112137', 2, 1, '', 1200, '', '', 0),
('20240403143700', '202404031437002', 'TNR', '20240113103017', '20240130112137', 1, 5, '', 1200, '', '', 0);
INSERT INTO `mpr_insert` (`smprid`, `simprid`, `mpcode`, `model`, `brandid`, `qty`, `uom`, `description`, `price`, `remarks`, `uname`, `mstatus`) VALUES
('20240403143700', '202404031437003', 'TNR', '20240113095022', '20240129101429', 3, 1, '', 2900, '', '', 0),
('20240403143700', '202404031437004', 'CTG', '20240113095222', '20240129101429', 12, 1, '', 2000, '', '', 0),
('20240403144655', '202404031446550', 'UKB', '20240120125759', '20240120115732', 3, 1, '', 750, '', '', 0),
('20240403144655', '202404031446551', 'UMS', '20240120125552', '20240120115732', 2, 1, '', 400, '', '', 0),
('20240403144655', '2024040314465510', 'MPD', '20240129112346', '20240117104145', 4, 1, '', 100, '', '', 0),
('20240403144655', '202404031446552', 'WMS', '20240120125612', '20240120115732', 1, 5, '', 1150, '', '', 0),
('20240403144655', '202404031446553', 'MBD', '20240305145310', '20240129142843', 1, 5, 'MOTHER BOARD H510M (ASUS)', 10800, '', '', 0),
('20240403144655', '202404031446554', 'RAM', '20240123154626', '20240129142957', 2, 1, 'RAM DDR4 8GB CORSAIR VEGEANCEL LPX', 2500, '', '', 0),
('20240403144655', '202404031446555', 'RAM', '20240123154626', '20240129142957', 2, 1, 'RAM DDR3 (1600) 8GB', 2500, '', '', 0),
('20240403144655', '202404031446556', 'RAM', '20240123154626', '20240129142957', 2, 1, 'RAM DDR3 (1600) 8GB\r\n', 2500, '', '', 0),
('20240403144655', '202404031446557', 'OFUPS', '20240120124900', '20240129143020', 2, 1, '', 3800, '', '', 0),
('20240403144655', '202404031446558', 'UBTR', '20240130152355', '20240129143020', 4, 1, '', 1550, '', '', 0),
('20240403144655', '202404031446559', 'SSD', '20240130131659', '20240116164212', 1, 5, '', 2500, '', '', 0),
('20240403145426', '202404031454260', 'NTRK', '20240403145201', '20240117105342', 1, 1, '', 62500, '', '', 0),
('20240403145617', '202404031456170', 'MNT', '20240131152405', '20240129101429', 1, 5, '', 8500, '', '', 0),
('20240403151001', '202404031510010', 'DRUM', '20240403150132', '20240130160104', 1, 5, '', 3000, '', '', 0),
('20240403151001', '202404031510011', 'DCB', '20240130155913', '20240130160104', 1, 5, '', 1000, '', '', 0),
('20240403151001', '202404031510012', 'LASER OPTIC UNIT BOARD', '20240403150711', '20240130160104', 1, 5, 'LASER OPTIC UNIT BOARD', 2800, '', '', 0),
('20240403165208', '202404031652080', 'PRCR', '20240309161438', '20240129142825', 1, 1, '', 12500, '', 'Jessor Depot', 0),
('20240403165208', '202404031652081', 'MBD', '20240123154227', '20240129142843', 1, 1, '', 10000, '', 'Jessor Depot', 0),
('20240403165208', '202404031652082', 'RAM', '20240123154626', '20240129142957', 1, 1, '', 2500, '', 'Jessor Depot', 0),
('20240403165208', '202404031652083', 'HDD', '20240121120834', '20240129142957', 1, 1, '', 5000, '', 'Jessor Depot', 0),
('20240403165341', '202404031653410', 'PTRH', '20240324141209', '20240117104145', 1, 1, 'Epson LQ310', 7500, '', 'Cumilla depot', 0),
('20240404095911', '202404040959110', 'SVR', '20240404094628', '20240404095504', 1, 1, 'Dell Power Edge T350-For Challan Management System', 298969, '', 'Callan Managment System', 1),
('20240417130037', '202404171300370', 'PRTRH', '20240417125455', '20240417125550', 1, 1, 'Norcell Barcode Printer Head', 25500, 'Replace faulty head', 'Production', 0),
('20240417130859', '202404171308590', 'UKB', '20240120125759', '20240120115732', 2, 1, '', 750, '', 'Store stock', 1),
('20240417130859', '202404171308591', 'UMS', '20240120125552', '20240120115732', 2, 1, '', 400, '', 'Store stock', 1),
('20240417130859', '202404171308592', 'WMS', '20240120125612', '20240120115732', 1, 1, '', 850, '', 'GM use', 1),
('20240417130859', '202404171308593', 'IPT', '20240113122908', '20240204125303', 1, 1, '', 4600, 'Replace faulty phone', 'Ali nur - Chemical store', 1),
('20240420111510', '202404201115100', 'IPT', '20240113122908', '20240204125303', 1, 1, '', 4500, 'Replace faulty IP Phn', 'Siraj', 1),
('20240420134114', '202404201341140', 'DRUM', '20240403150132', '20240130160104', 1, 1, '', 3300, 'Replace faulty drum', 'All users', 1),
('20240420134114', '202404201341141', 'DCB', '20240130155913', '20240130160104', 1, 1, '', 1500, 'Replace faulty ', 'All users', 1),
('20240420134114', '202404201341142', 'RCB', '20240124160337', '20240130160104', 1, 1, '', 1000, 'Replace faulty ', 'All users', 1),
('20240420134114', '202404201341143', 'HTRPCR', '20240123154015', '20240130160104', 1, 1, '', 3000, 'Replace faulty ', 'All users', 1),
('20240420134114', '202404201420280', 'CSR', '20240124160157', '20240130160104', 1, 1, '', 2250, 'Replace faulty', 'All users', 1),
('20240421110928', '202404211109280', 'SSD', '20240130131659', '20240204110504', 1, 1, '128GB SSD M.2 NvME ', 2500, 'Replace faulty HDD', 'Emu', 1),
('20240421115021', '202404211150210', 'HDD', '20240121120834', '20240204110504', 1, 1, 'Portable HDD ', 8700, 'For data backup', 'Sumon - Sample', 1),
('20240421143745', '202404211437450', 'LBTR', '20240129101311', '20240117104145', 1, 1, '', 1200, '', 'Kabir Hossain', 1),
('20240421143937', '202404211439370', 'LBTR', '20240123154124', '20240117104145', 1, 1, 'HP 14d010TU', 2500, '', 'Monir -CNF', 1),
('20240421155213', '202404211552130', 'SSD', '20240130131659', '20240204110504', 1, 1, 'HP ProBook 450 G5 SSD 128G M.2 NvME', 2400, 'For win boot purpose', 'Noor', 1),
('20240421162246', '202404211622460', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 2950, '', 'Store stock', 1),
('20240421162246', '202404211622461', 'UBTR', '20240130152355', '20240304135155', 4, 1, 'Best battery 7.5A - 12V', 1550, '', 'Store stock', 1),
('20240421162246', '202404211622462', 'OFUPS', '20240120124900', '20240304135155', 1, 1, '650VA UPS', 3800, '', 'Emergency support', 1),
('20240423132318', '202404231323180', 'MBD', '20240123154227', '20240130160104', 1, 1, 'Toshiba e-Studio 2508A System Board with software', 22000, 'Replace faulty system board', 'HR Photocopier', 1),
('20240423132318', '202404231323181', 'DRUM', '20240403150132', '20240130160104', 1, 1, 'Toshiba e-Studio 2508A drum', 3300, 'Replace faulty drum', 'HR Photocopier', 1),
('20240423132318', '202404231323182', 'DCB', '20240130155913', '20240130160104', 1, 1, 'Toshiba e-Studio 2508A DC Blade', 1500, 'Replace faulty DC Blade', 'HR Photocopier', 1),
('20240423132318', '202404231323183', 'HTRPCR', '20240123154015', '20240130160104', 1, 1, 'Toshiba e-Studio 2508A Heat Roller (U)', 3000, 'Replace faulty Heat roller (U)', 'HR Photocopier', 1),
('20240423132318', '202404231323184', 'CSR', '20240124160157', '20240130160104', 1, 3, 'Toshiba e-Studio 2508A Scraper', 2250, 'Replace faulty scraper', 'HR Photocopier', 1),
('20240423175814', '202404231758140', 'PTRGR', '20240123154608', '20240129101429', 3, 5, 'Swing gear', 600, '', '', 1),
('20240423175814', '202404231758141', 'PTRH', '20240324141209', '20240120115642', 1, 5, 'Black head', 3200, '', '', 1),
('20240424111412', '202404241114120', 'TNR', '20240113094754', '20240130112137', 2, 1, 'Toner 78A', 1800, '', 'HO User', 1),
('20240424111412', '202404241114121', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '5018C', 8500, '', 'HO Photocopier User', 1),
('20240424111412', '202404241121500', 'BARL', '20240424111918', '20240117104145', 3, 10, '50*25 mm', 380, '', 'BGL& HO', 0),
('20240424113624', '202404241136240', 'UBTR', '20240130152355', '20240117104145', 6, 1, '12V,7.5A Kastar', 1400, '', 'BGL User', 1),
('20240424113624', '202404241136241', 'UMS', '20240120125552', '20240120115732', 10, 1, '', 400, '', 'HO & BGL User', 1),
('20240424113624', '202404241136242', 'MPD', '20240129112346', '20240117104145', 5, 1, '', 150, '', 'HO & BGL User', 1),
('20240424113624', '202404241136243', 'IPC', '20240130170622', '20240117104145', 2, 1, '2.MP Bullet Dhahua ', 4600, '', 'BGL', 1),
('20240424113624', '202404241136244', 'PTRFF', '20240123153940', '20240117104145', 4, 1, 'HP 401', 800, '', 'BGL Printer', 1),
('20240424113624', '202404241136245', 'OFUPS', '20240120124913', '20240304135155', 1, 1, 'UPS 1200VA', 7000, '', 'BGL User', 1),
('20240424115348', '202404241153480', 'TNR', '20240111140250', '20240130112137', 5, 1, '80A', 1200, '', 'BGL User', 1),
('20240424115348', '202404241153481', 'TNR', '20240131145730', '20240130112137', 2, 1, '79A', 1200, '', 'BGL User', 1),
('20240424115348', '202404241153482', 'TNR', '20240113095022', '20240130112137', 6, 1, '87A', 2900, '', 'BGL User', 1),
('20240424115348', '202404241153483', 'CTG', '20240113095222', '20240117104145', 12, 1, '45A', 2000, 'BOK', 'CAD ', 1),
('20240424115348', '202404241153484', 'PHTNR', '20240206162910', '20240117104145', 1, 1, '5018C', 8500, '', 'BGL', 1),
('20240424122159', '202404241221590', 'HTRPCR', '20240121123926', '20240117104145', 1, 1, 'Toshiba Studio', 3000, '', 'Sample', 1),
('20240424122159', '202404241221591', 'CSR', '20240124160146', '20240117104145', 5, 1, 'Toshiba Studio', 2250, '', 'Sample', 1),
('20240424122159', '202404241221592', 'PTRPR', '20240121125832', '20240117104145', 1, 1, 'Toshiba Studio', 4500, '', 'Sample', 1),
('20240424122159', '202404241221593', 'CPRDWR', '20240331102032', '20240117104145', 1, 1, 'Toshiba Studio', 8000, 'Upper Drower', 'Sample', 1),
('20240424122159', '202404241221594', 'DRUM', '20240403150132', '20240117104145', 1, 1, 'Toshiba Studio', 3300, '', 'Sample', 1),
('20240424122159', '202404241221595', 'DCB', '20240331102008', '20240117104145', 1, 1, 'Toshiba Studio', 1500, '', 'Sample', 1),
('20240424122159', '202404241221596', 'RCB', '20240124160259', '20240117104145', 1, 1, 'Toshiba Studio', 1000, '', 'Sample', 1),
('20240424122159', '202404241225150', 'FEEDROLL', '20240424122413', '20240117104145', 1, 1, 'Toshiba Photocopier ', 3000, '', 'Sample ', 1),
('20240424122938', '202404241229380', 'RADF', '20240211161611', '20240117104145', 1, 1, 'Photocopier Machine try Additional', 35000, '', 'Bipul-Cash Inceptive', 0),
('20240424123419', '202404241234190', 'CPRDM', '20240123153839', '20240117104145', 1, 1, 'BGL factory Photocopier ', 3300, '', 'BGL Fectory', 0),
('20240424123419', '202404241234191', 'DCB', '20240130155913', '20240117104145', 1, 1, 'BGL factory Photocopier ', 1500, '', 'BGL Fectory', 0),
('20240424123419', '202404241234192', 'HTRPCR', '20240123154015', '20240117104145', 1, 1, 'BGL factory Photocopier ', 3800, '', 'BGL Fectory', 0),
('20240424123419', '202404241234193', 'CSR', '20240124160157', '20240117104145', 1, 1, 'BGL factory Photocopier ', 3000, '', 'BGL Fectory', 0),
('20240424123419', '202404241234194', 'CPRDR', '20240123153831', '20240117104145', 1, 1, 'BGL factory Photocopier ', 4500, '', 'BGL Fectory', 0),
('20240424125119', '202404241251190', 'CTG', '20240113095331', '20240120115642', 2, 1, '', 2500, '', 'Commercial-HO', 1),
('20240424130558', '202404241305580', 'MOB', '20240424125954', '20240117104145', 2, 1, 'Realme Mobile C30(232)', 10000, 'For Custom Office OTP Notification ', 'Opel & Amin- Commercial', 1),
('20240425101331', '202404251013310', 'LPT', '20240123154116', '20240129142843', 1, 1, 'Asus Vivobook 15x1502ZA,Corei5,8GB RAM, 1TB SSD,15.6\" Display ', 86500, 'Core', 'Anwar Hosain-PPC', 1),
('20240425101558', '202404251015580', 'UMS', '20240120125552', '20240120115732', 2, 1, '', 400, '', 'BASL', 0),
('20240425101558', '202404251015581', 'UKB', '20240120125759', '20240120115732', 2, 1, '', 850, '', 'BASL', 0),
('20240428104940', '202404281049400', 'CTG', '20240113095222', '20240130112137', 8, 1, 'Plotter cartridge', 2000, 'HP 45 Cartridge', 'CAD', 1),
('20240428111248', '202404281112480', 'MCVTR', '20240123153757', '20240117104145', 1, 1, 'Baseus 8:1 C-type Multiport Converter', 4000, 'For additional port support', 'Muslim - HOIE', 1),
('20240428142510', '202404281425100', 'TABLET', '20240203114039', '20240129142832', 1, 1, 'For one of buyers farewell (Tesco)', 50000, 'For one of buyers farewell (Tesco)', 'M&M', 0),
('20240428165633', '202404281656330', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstrem ', 4300, 'replace faulty phone', 'Lab replace ', 1),
('20240428165633', '202404281656331', 'PSU', '20240123154538', '20240117104145', 4, 1, 'Best quality PS', 1500, 'Store stock', 'all users', 0),
('20240428165633', '202404281656332', 'UMS', '20240120125552', '20240120115732', 4, 1, '', 400, 'Store stock', 'all users', 1),
('20240428165633', '202404281656333', 'WMS', '20240120125612', '20240120115732', 4, 1, 'Wireless mouse', 750, 'Store stock', 'all users', 1),
('20240428165633', '202404281656334', 'UKB', '20240120125759', '20240120115732', 4, 1, '', 780, 'Store stock', 'all users', 1),
('20240428170052', '202404281700520', 'CF', '20240123153805', '20240129101429', 1, 1, 'Laptop cooling fan for HP ProBook 440 G3', 1600, 'Replace faulty cooler', 'Nazmul', 1),
('20240428170457', '202404281704570', 'IPT', '20240113122908', '20240204125303', 1, 1, '', 4600, 'Replace faulty phone', 'Nazmul', 1),
('20240429112510', '202404291125100', 'PLTMTR', '20240429111738', '20240117104145', 1, 1, 'ATP New Plotter 41855 Paper Advanced Motor', 13000, 'Replace faulty motor', 'CAD', 1),
('20240429112510', '202404291125101', 'CCBL', '20240429112204', '20240117104145', 4, 1, 'ATP New Plotter 41855 Head Short Cable', 1600, 'Replace faulty cable', 'CAD', 1),
('20240502113051', '202405021130510', 'UBTR', '20240130152355', '20240117104145', 4, 1, '12V-7.5A Good quality', 1500, 'Store stock', 'All users', 1),
('20240502113051', '202405021130511', 'TNR', '20240111140250', '20240130112137', 2, 1, '', 1150, 'Store stock', 'All users', 1),
('20240502113051', '202405021130512', 'UMS', '20240120125552', '20240120115732', 5, 1, '', 400, 'Store stock', 'All users', 1),
('20240502113051', '202405021130513', 'VGCBL', '20240130112527', '20240117104145', 4, 1, 'Good quality', 150, 'Store stock', 'All users', 1),
('20240504123721', '202405041237210', 'DRUM', '20240403150132', '20240130160104', 1, 1, 'Toshiba 3118A ', 4500, 'Replace faulty spare', 'HR & Comp', 0),
('20240504123721', '202405041237211', 'DCB', '20240130155913', '20240130160104', 1, 1, 'Toshiba 3118A ', 1700, 'Replace faulty spare', 'HR & Comp', 0),
('20240504123721', '202405041237212', 'RCB', '20240124160337', '20240130160104', 1, 1, 'Toshiba 3118A ', 1400, 'Replace faulty spare', 'HR & Comp', 0),
('20240504123721', '202405041237213', 'HTRPCR', '20240123154015', '20240130160104', 1, 1, 'Toshiba 3118A ', 4500, 'Replace faulty spare', 'HR & Comp', 0),
('20240504123721', '202405041237214', 'CSR', '20240124160157', '20240130160104', 5, 1, 'Toshiba 3118A ', 500, 'Replace faulty spare', 'HR & Comp', 0),
('20240504123721', '202405041237215', 'CPRDWR', '20240331102032', '20240130160104', 1, 1, 'Toshiba 3118A ', 1800, 'Replace faulty spare', 'HR & Comp', 0),
('20240504124950', '202405041249500', 'LBTR', '20240123154124', '20240129101429', 1, 1, 'BATTERY FOR HP 15-R086TU ', 1950, 'Replace faulty battery  ', 'Ali Noor - Chemical Store', 0),
('20240504124950', '202405041249501', 'PD', '20240123154459', '20240204110504', 1, 1, 'Transcend 64 GB Pendrive ', 700, 'Replace faulty pendrive', 'Laser machine user', 0),
('20240504150950', '202405041509500', 'SSD', '20240130131659', '20240204110504', 1, 1, 'Transcend SSD 125G M.2 NGFF', 2500, 'Upgrade storage device', 'Bipul-M&M', 1),
('20240504150950', '202405041509501', 'HDD', '20240121120834', '20240116164212', 1, 1, 'HDD WD 1TB ', 5000, 'Upgrade storage device', 'Bipul-M&M', 1),
('20240504151333', '202405041513330', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstream 2601P', 4600, 'Replace faulty phone', 'Jahid', 1),
('20240504151724', '202405041517240', 'WMS', '20240120125612', '20240120115732', 1, 1, 'A4Tech Wireless mouse', 850, 'New employee', 'Ashraful', 1),
('20240504151724', '202405041517241', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstream 2601P', 4600, 'New employee', 'Ashraful', 1),
('20240424113624', '202405051003320', 'UKB', '20240120125759', '20240117104145', 6, 1, '', 750, '', '', 1),
('20240505113804', '202405051138040', 'WWBEARING', '20240505113507', '20240117104145', 12, 1, '', 1600, '', 'CAD', 1),
('20240505113804', '202405051138041', 'LONGRIBBON', '20240505113519', '20240117104145', 3, 1, '', 4000, '', 'CAD', 1),
('20240505113804', '202405051138042', 'HEADCABLE', '20240505113528', '20240117104145', 8, 1, '', 1550, '', 'CAD', 1),
('20240505115250', '202405051152500', 'MCVTR', '20240123153757', '20240117104145', 1, 1, 'Baseus 8:1 C-type Multiport Converter	', 4000, 'For extended the USB port', 'Apu - AGM -HR', 1),
('20240506125938', '202405061259380', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstream ', 4400, 'New joiner phn', 'Muslim - HoIE', 0),
('20240506130453', '202405061304530', 'LCRG', '20240123154134', '20240129101429', 1, 1, 'Charger for HP ProBook 440 G4', 1500, 'Replace faulty charge', 'Saddam - Tesco sample', 1),
('20240508101922', '202405081019220', 'PSU', '20240123154538', '20240404095504', 1, 1, 'Power Supply for Dell Optiplex 3080 CPU / D29M Reg Type D29M002', 7000, 'Replace faulty PS', 'Laser Production PC', 1),
('20240509145150', '202405091451500', 'DRUM', '20240403150132', '20240130160104', 1, 1, 'Toshiba 3018A Drum', 3000, 'Replace faulty drum', 'Commercial', 1),
('20240509145150', '202405091451501', 'DCB', '20240331102008', '20240130160104', 1, 1, 'Toshiba 3018A DC Blade', 1000, 'Replace faulty blade', 'Commercial', 1),
('20240509145150', '202405091451502', 'RCB', '20240124160259', '20240130160104', 1, 1, 'Toshiba 3018A RC Blade', 900, 'Replace faulty blade', 'Commercial', 1),
('20240509145150', '202405091451503', 'HTRPCR', '20240121123926', '20240130160104', 1, 1, 'Toshiba 3018A Heat Roller', 2800, 'Replace faulty heat roller', 'Commercial', 1),
('20240509145150', '202405091451504', 'PTRPR', '20240121125832', '20240130160104', 1, 1, 'Toshiba 3018A Pressure roller', 4500, 'Replace faulty Pressure roller', 'Commercial', 1),
('20240509145150', '202405091451505', 'CSR', '20240124160146', '20240130160104', 1, 3, 'Toshiba 3018A Scrapper', 1800, 'Replace faulty Scrapper', 'Commercial', 1),
('20240509154558', '202405091545580', 'MNT', '20240131152405', '20240404095504', 1, 1, '', 8500, 'Replace faulty monitor', 'Faruk - Cutting', 1),
('20240511153249', '202405111532490', 'SCN', '20240114102233', '20240120115642', 1, 5, '', 10000, '', 'factory', 0),
('20240511153438', '202405111534380', 'MNT', '20240131152405', '20240129102116', 1, 5, '', 9000, '', 'FACTORY', 0),
('20240513122904', '202405131229040', 'MBD', '20240123154227', '20240117104145', 1, 1, 'GIGABYTE H510M S2H Intel 10th', 12000, 'Replace faulty M/B', 'R&D ATL', 0),
('20240513122904', '202405131229041', 'CSG', '20240123153741', '20240117104145', 1, 1, 'ATX Casing', 2700, 'Replace faulty casing', 'R&D ATL', 0),
('20240513122904', '202405131229042', 'LCRG', '20240123154134', '20240129101429', 1, 1, 'HP ProBook 440 G3 Charger', 1500, 'Replace faulty charger', 'Shyamol - Store ATL', 0),
('20240513122904', '202405131229043', 'CF', '20240123153805', '20240117104145', 1, 1, 'Processor cooling fan', 700, 'Replace faulty cooler', 'R&D ATL', 0),
('20240513122904', '202405131229044', 'OFUPS', '20240120124900', '20240304135155', 1, 1, 'Power Guard 650 VA UPS', 3400, 'Replace faulty UPS', 'Didar - Dying QC', 0),
('20240513124059', '202405131240590', 'CTG', '20240113095331', '20240120115642', 3, 1, '', 2750, 'For 3 months use', 'Sample', 1),
('20240513124059', '202405131240591', 'CTG', '20240113095344', '20240120115642', 3, 1, '', 2750, 'For 3 months use', 'Sample', 1),
('20240513180753', '202405131807530', 'SSD', '20240130131659', '20240204110504', 1, 1, 'SSD Transcend 128 M.2 ', 3000, 'Replace faulty SSD', 'Mominul - Civil - Mnts', 0),
('20240513180753', '202405131807531', 'HDD', '20240121120834', '20240116164212', 1, 1, 'WD 1TB HDD', 5000, 'Replace faulty HDD', 'Mominul - Civil - Mnts', 0),
('20240516153130', '202405161531300', 'HDD', '20240121120834', '20240116164212', 1, 1, 'WD 1TB HDD', 5000, 'Replace faulty HDD', 'Mahin', 1),
('20240518122118', '202405181221180', 'MNT', '20240131152405', '20240129101429', 1, 1, 'HP 18.5\"', 8500, 'For Norsel server monitor', 'Ashik - Pdn', 1),
('20240520112750', '202405201127500', 'MCVTR', '20240123153757', '20240117104145', 1, 1, 'Multiport converter ', 2000, 'for ethernet use', 'Arif - FC', 1),
('20240521093812', '202405210938120', 'UMS', '20240120125552', '20240120115732', 1, 1, '', 850, '', 'Mohiuddin', 0),
('20240521153207', '202405211532070', 'UBTR', '20240130152355', '20240129143020', 8, 1, '', 19500, '', 'Data Center', 1),
('20240521154755', '202405211547550', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '', 8500, '', 'BGL ', 1),
('20240521154755', '202405211547551', 'EPSINK', '20240310111009', '20240117104145', 2, 1, '664 Cyan,Megenta', 600, '', '', 1),
('20240521154755', '202405211547552', 'EPSINK', '20240310111009', '20240117104145', 1, 3, '1 Set', 2400, '', '', 1),
('20240521155409', '202405211554090', 'TNR', '20240113094733', '20240130112137', 5, 1, '', 1200, '', '', 1),
('20240521155409', '202405211554091', 'TNR', '20240123154716', '20240130112137', 1, 1, '', 1300, '', '', 1),
('20240521155409', '202405211554092', 'TNR', '20240131145730', '20240130112137', 1, 1, '', 1100, '', '', 1),
('20240521155409', '202405211554093', 'TNR', '20240113095022', '20240130112137', 3, 1, '', 2800, '', '', 1),
('20240521155409', '202405211554094', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '', 8500, '', '', 1),
('20240521155409', '202405211554095', 'CTG', '20240113095222', '20240117104145', 12, 1, '', 2000, '', '', 1),
('20240521155739', '202405211557390', 'UBTR', '20240130152355', '20240129143020', 5, 1, '', 1400, '', '', 1),
('20240521155739', '202405211557391', 'UMS', '20240120125552', '20240120115732', 10, 1, '', 400, '', '', 1),
('20240521155739', '202405211557392', 'UKB', '20240120125759', '20240120115732', 6, 1, '', 700, '', '', 1),
('20240521155739', '202405211557393', 'IPT', '20240113122908', '20240204125303', 2, 1, '', 4600, '', '', 1),
('20240521155739', '202405211557394', 'VGCBL', '20240130112527', '20240117104145', 3, 1, '', 350, '', '', 1),
('20240521161431', '202405211614310', 'WMS', '20240120125612', '20240120115732', 4, 1, '', 900, '', '', 1),
('20240521161431', '202405211614311', 'IPT', '20240113122908', '20240204125303', 3, 1, '', 4600, '', '', 1),
('20240521161431', '202405211614312', 'SSD', '20240130131720', '20240204110504', 4, 1, '', 6900, '', '', 1),
('20240521165639', '202405211656390', 'MNT', '20240131152426', '20240129101429', 1, 1, '', 11340, '', '', 0),
('20240521170251', '202405211702510', 'CBL', '20240113113547', '20240117105230', 1, 2, '', 19500, '', '', 1),
('20240521171623', '202405211716230', 'DP100', '20240521171346', '20240117104145', 1, 1, '', 30000, '', 'IT', 1),
('20240521171814', '202405211718140', 'TNR', '20240111140218', '20240130112137', 5, 1, '', 1750, '', 'BASL', 0),
('20240521172144', '202405211721440', 'TABLET', '20240203114039', '20240117104145', 1, 1, 'Note Realme Pad mini', 24000, 'Note Realme Pad mini', '', 0),
('20240521173407', '202405211734070', 'FW', '20240123153926', '20240117104145', 1, 1, 'FG-100F', 299000, '', 'HO Data center Backup for network ', 1),
('20240521174042', '202405211740420', 'MNT', '20240131152426', '20240129101429', 1, 1, '', 11340, '', 'Sample', 1),
('20240522095225', '202405220952250', 'HDD', '20240121120834', '20240204110504', 1, 1, 'Portable HDD ', 8000, 'Portable HDD for easy backup data', 'Asad & Team', 0),
('20240522101259', '202405221012590', 'WMS', '20240120125612', '20240120115732', 2, 1, 'A4 Tech Wireless Mouse', 850, 'Replace faulty mouse', 'Rezvee, Lenin', 0),
('20240522112450', '202405221124500', 'M365', '20240313115244', '20240117104145', 5, 12, 'MS Teams license ', 4000, 'New enroll MS teams for IE users', 'IE users', 0),
('20240522152742', '202405221527420', 'NTSW', '20240123154310', '20240117104145', 1, 1, 'Cisco B350 Switch', 60000, '', 'BASL', 0),
('20240522152742', '202405221527421', 'IPT', '20240113122908', '20240204125303', 5, 1, '', 4800, '', 'BASL', 0),
('20240522154427', '202405221544270', 'M365', '20240313115244', '20240117104145', 9, 1, 'Ms Team License for IE Team ', 4000, '', '', 0),
('20240525164730', '202405251647300', 'PHTNR', '20240206162945', '20240130160104', 1, 1, 'Toshiba 3018A for 5018P Toner', 8500, '', 'Treasury users', 1),
('20240526133422', '202405261334220', 'LPT', '20240325111537', '20240129142843', 1, 1, 'ASUS Expert Book B1 B1402CVA-NK0988', 65000, 'Masum Billah -Commercial-BGL', 'Masum Billah -Commercial-BGL', 1),
('20240526180125', '202405261801250', 'HDD', '20240116164039', '20240117104145', 10, 1, 'SAS Hard Disk 146 GB 10K', 4500, '', 'Data Center (HRMS,Mail,File Server)', 1),
('20240527114419', '202405271144190', 'CTG', '20240113095222', '20240129101429', 8, 1, '', 2000, '', 'Plotter ', 0),
('20240527130009', '202405271300090', 'PHTNR', '20240206162910', '20240130160104', 2, 1, '', 9500, '', 'hr users', 1),
('20240527143820', '202405271438200', 'DKTP', '20240123153853', '20240117104145', 1, 3, '', 43500, '', '', 0),
('20240529110937', '202405291109370', 'CTG', '20240113095331', '20240120115642', 1, 1, '', 2800, '', 'HR User', 1),
('20240529110937', '202405291109371', 'CTG', '20240113095344', '20240120115642', 1, 1, '', 2800, '', 'HR User', 1),
('20240529110937', '202405291109372', 'PTRFF', '20240123153940', '20240129101429', 1, 1, 'HP 400/401', 800, '', 'HR User', 1),
('20240529112047', '202405291120470', 'TNR', '20240111140218', '20240130112137', 2, 1, '', 1500, '', 'Knitting', 1),
('20240529112047', '202405291120471', 'TNR', '20240125133141', '20240130112137', 2, 1, '', 1500, '', 'All users', 1),
('20240529112047', '202405291120472', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 2950, '', 'LAB', 1),
('20240529112047', '202405291120473', 'RAM', '20240123154626', '20240117104145', 1, 1, 'DDR4 4GB 2400Bus', 2200, '', 'Chemical Store', 0),
('20240529112447', '202405291124470', 'CTG', '20240113095331', '20240120115642', 2, 1, '', 2500, 'For 3 Months use', 'HRD users', 1),
('20240529112447', '202405291124471', 'CTG', '20240113095344', '20240120115642', 2, 1, '', 2500, 'For 3 Months use', 'HRD users', 1),
('20240529113349', '202405291133490', 'OFUPS', '20240120124900', '20240304135155', 2, 1, '650VA UPS', 3600, '', 'For Store users', 0),
('20240529113349', '202405291133491', 'CTG', '20240123153733', '20240117104145', 3, 1, 'Lexmark 664 Ink kit', 600, '', 'Store', 0),
('20240529113349', '202405291133492', 'TNR', '20240111140250', '20240130112137', 2, 1, '', 1150, '', 'All users', 0),
('20240529144841', '202405291448410', 'LBTR', '20240123154124', '20240129101429', 2, 1, 'Hp probook 440G2', 2900, '', '', 1),
('20240529144841', '202405291448411', 'LKB', '20240303131302', '20240129101429', 1, 1, 'Hp probook 450G4', 2000, '', '', 1),
('20240529162543', '202405291625430', 'SCN', '20240123154646', '20240117104145', 1, 1, 'Barcode Scanner', 8500, '', '', 1),
('20240529162927', '202405291629270', 'CBL', '20240113113547', '20240117105230', 1, 1, '', 19500, '', '', 1),
('20240601090342', '202406010903420', 'OFUPS', '20240120124900', '20240129143020', 1, 1, '650VA UPS', 3500, 'For Civil Engr work', 'Saiful (Civil)', 0),
('20240601090342', '202406010903421', 'PDE', '20240601092818', '20240204110504', 1, 1, 'Portable USB Type C SSD', 5000, 'For Civil Engr work', 'Saiful (Civil)', 0),
('20240601090342', '202406010903422', 'CTG', '20240123153733', '20240117104145', 1, 3, '4 color (Cyan673, Black673, L Cyan673, Magenta673, L Magenta673, Yellow673', 7900, 'For Civil Engr work', 'Saiful (Civil)', 0),
('20240601090342', '202406010936080', 'CAM', '20240601093258', '20240120115642', 1, 1, 'Canon Powershot A2500 Camera', 6100, 'For Civil work', 'Saiful (Civil)', 0),
('20240601105141', '202406011051410', 'UKB', '20240120125759', '20240120115732', 3, 1, '', 750, '', 'Store stock', 0),
('20240601105141', '202406011051411', 'UBTR', '20240130152355', '20240117104145', 2, 1, '', 1600, '', 'Store stock', 0),
('20240601105141', '202406011051412', 'WMS', '20240120125612', '20240120115732', 1, 1, '', 850, '', 'Store stock', 0),
('20240601152228', '202406011522280', 'CTG', '20240123153733', '20240117104145', 2, 1, 'Epson Ink Black 664', 800, '', 'Maintenance', 0),
('20240602120752', '202406021207520', 'AR', '20240123153727', '20240204102841', 4, 1, 'ZKT Speed Face V5L[P]', 30000, 'Urgent migration to ZKT Bio environment with new model device', 'HR', 0),
('20240602120752', '202406021207521', 'AR', '20240123153727', '20240117104145', 1, 12, '5 devices for 1 software license', 16000, 'software for ZKT Speed Face V5L[P] devices', 'HR', 0),
('20240602160819', '202406021608190', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstream GRP2601P', 4500, 'Replace faulty phone', 'Ataur - AGM QC', 0),
('20240602160819', '202406021608191', 'LDSP', '20240123154142', '20240129101429', 1, 1, 'Display for HP ProBook 450 G6', 6000, 'Replace faulty display', 'Asad - Planning', 0),
('20240602160819', '202406021608192', 'EPSINK', '20240310111009', '20240117104145', 1, 3, 'Epson Ink 664 ', 2800, '', 'Mnts-R&D', 0),
('20240602160819', '202406021608193', 'TNR', '20240111140250', '20240130112137', 2, 1, '', 1200, '', 'central store', 0),
('20240603131154', '202406031311540', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstream GRP 2601P', 4400, 'Use at BWL for his sitting there. ', 'Momin', 0),
('20240606103723', '202406061037230', 'PHTNR', '20240206162856', '20240130160104', 1, 1, 'Toner 2508A', 11000, 'Replace toner', 'All users', 0),
('20240606154338', '202406061543380', 'IPT', '20240113122908', '20240204125303', 1, 1, 'Grandstream Grp2601P', 4400, '', 'Jahangir-Admin, Security', 0),
('20240606172821', '202406061728210', 'LKB', '20240123154150', '20240129101429', 1, 1, 'HP Probook 440 G5', 1500, '', 'Halim-HR', 0),
('20240606173429', '202406061734290', 'NTSW', '20240123154310', '20240117104145', 1, 1, 'CISCO Switch 350-24 Port', 48000, '', 'Treasury Department ', 1),
('20240606173659', '202406061736590', 'LCRG', '20240123154134', '20240129101429', 3, 1, 'HP Probook 450G4', 3200, '', 'HO User', 1),
('20240608184330', '202406081843300', 'LPT', '20240111125146', '20240129101429', 1, 1, 'HP Probook 440G10 ,Corei7,512 SSD,8GB RAM', 121650, '', 'COO-BADL', 0),
('20240609092941', '202406090929410', 'SSD', '20240130131659', '20240204110504', 1, 1, 'SSD M.2 NVME for HP ProBook 440 G5', 3000, '', 'Zahid-com', 0),
('20240609093340', '202406090933400', 'HDD', '20240121120834', '20240116164212', 1, 1, 'WD 1TB', 6000, 'Replace faulty HDD', 'Shourav - Comm', 0),
('20240610125344', '202406101253440', 'DRUM', '20240403150132', '20240117104145', 1, 1, 'Photocopier Parts', 3000, '', 'Accounts ', 1),
('20240610125344', '202406101253441', 'DCB', '20240130155913', '20240117104145', 1, 1, 'Photocopier Parts', 1000, '', 'Accounts ', 1),
('20240610125344', '202406101253442', 'RCB', '20240124160337', '20240117104145', 1, 1, 'Photocopier Parts', 900, '', 'Accounts ', 1),
('20240610125344', '202406101253443', 'PTRPR', '20240121125832', '20240117104145', 1, 1, 'Photocopier Parts', 4500, '', 'Accounts ', 1),
('20240610125344', '202406101253444', 'CSR', '20240124160157', '20240117104145', 1, 1, 'Photocopier Parts', 1800, '', 'Accounts ', 1),
('20240610130232', '202406101302320', 'HP', '20240123154005', '20240117104145', 1, 1, 'Wireless Head Phone (JBL)', 5500, '', 'COO-BADL', 0),
('20240610130232', '202406101302321', 'WMS', '20240120125612', '20240120115732', 1, 1, '', 850, '', 'COO-BADL', 0),
('20240610130232', '202406101302322', 'PSU', '20240123154538', '20240117104145', 1, 1, 'Value Top ', 1200, '', 'Aiman-IT', 0),
('20240610130510', '202406101305100', 'LKB', '20240123154150', '20240129142843', 1, 1, 'Asus Zenbook 13 Keyboard', 8700, '', 'Kamrul -AGM-BADL', 0),
('20240610130510', '202406101305101', 'LBTR', '20240123154124', '20240129142843', 1, 1, 'Asus Zenbook 13 Keyboard', 7000, '', 'Kamrul -AGM-BADL', 0),
('20240610130650', '202406101306500', 'UBTR', '20240130152355', '20240129143020', 12, 1, 'For BADL IT Server Room', 1400, '', 'BADL -IT', 0),
('20240610132105', '202406101321050', 'MBD', '20240123154227', '20240129142843', 1, 1, 'Asus H81-M-K', 10000, '', 'Shamsujjaman-Sample', 0),
('20240610132105', '202406101321051', 'RAM', '20240123154626', '20240117104145', 1, 1, 'DDR3', 3000, '', 'Shamsujjaman-Sample', 0),
('20240610132538', '202406101325380', 'HDD', '20240121120928', '20240404095504', 2, 1, 'Druti-RDS-ZKteco', 22680, '', 'IT-Server', 0),
('20240610133226', '202406101332260', 'TNR', '20240113094754', '20240130112137', 2, 1, '', 1150, '', 'HO-Monthly Stock -Item', 1),
('20240610133226', '202406101332261', 'TNR', '20240310111104', '20240130112137', 1, 3, '', 10000, '', 'HO-Monthly Stock -Item', 1),
('20240610133226', '202406101332262', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '', 8500, '', 'HO-Monthly Stock -Item', 1),
('20240610133226', '202406101332263', 'RIB', '20240331104152', '20240117104145', 3, 1, '', 3850, '', 'HO-Monthly Stock -Item', 1),
('20240610133821', '202406101338210', 'IPT', '20240113122908', '20240204125303', 3, 1, '', 4300, '', '', 1),
('20240610133821', '202406101338211', 'HP', '20240123154005', '20240120115732', 1, 1, '', 900, '', '', 1),
('20240610133821', '202406101338212', 'SSD', '20240130131720', '20240204110504', 2, 1, '', 6500, '', '', 1),
('20240610134554', '202406101345540', 'TNR', '20240113094733', '20240130112137', 4, 1, '', 1150, '', 'BGL-Monthly Stock Item', 1),
('20240610134554', '202406101345541', 'TNR', '20240113094956', '20240130112137', 4, 1, '', 1200, '', 'BGL-Monthly Stock Item', 1),
('20240610134554', '202406101345542', 'TNR', '20240123154716', '20240130112137', 2, 1, 'Toner 53', 1200, '', 'BGL-Monthly Stock Item', 1),
('20240610134554', '202406101345543', 'TNR', '20240113095022', '20240130112137', 2, 1, '', 2800, '', 'BGL-Monthly Stock Item', 1),
('20240610134554', '202406101345544', 'PHTNR', '20240206162910', '20240117104145', 2, 1, '', 8500, '', 'BGL-Monthly Stock Item', 1),
('20240610134554', '202406101345545', 'CTG', '20240113095222', '20240129101429', 12, 1, '', 2000, '', 'BGL-Monthly Stock Item', 1),
('20240610135025', '202406101350250', 'OFUPS', '20240120124913', '20240304135155', 1, 1, '', 7000, '', 'Sub Store', 1),
('20240610135025', '202406101350251', 'UMS', '20240120125552', '20240120115732', 6, 1, '', 400, '', '', 1),
('20240610135025', '202406101350252', 'IPT', '20240113122908', '20240204125303', 2, 1, '', 4300, '', '', 1),
('20240610135025', '202406101350253', 'HDD', '20240121120834', '20240116164212', 1, 1, '', 5800, '', '', 0),
('20240612150249', '202406121502490', 'NC', '20240203104945', '20240203104959', 3, 2, 'Micronet RJ45 Connector (60Pcs)', 550, 'Micronet RJ45 Connector (60Pcs)', 'All support', 0),
('20240612155108', '202406121551080', 'TABLET', '20240203114039', '20240129142832', 1, 1, 'Samsung S6 Lite Tab', 40000, 'Self inspection for LCWaiKiKi', 'Dilip', 0),
('20240613112731', '202406131127310', 'SVR', '20240404094628', '20240404095504', 1, 1, 'Dell power Edge R750xs,24 Core,128 GB RAm,6*2.4 TB', 940000, '', 'GB Mail Server-IT', 0),
('20240613140801', '202406131408010', 'PRCR', '20240309161438', '20240129142825', 1, 1, 'Core i3 12th Gen 12100 Adler lake LGA1700', 11500, 'Replace faulty CPU', 'Jel Haque', 0),
('20240613140801', '202406131408011', 'MBD', '20240123154227', '20240117104145', 1, 1, 'Gigabyte H610M H 14/13/12th Gen LGA1700', 11100, 'Replace faulty CPU', 'Jel Haque', 0),
('20240613140801', '202406131408012', 'RAM', '20240123154626', '20240204110504', 1, 1, 'Transcend DDR4 8GB ', 2500, 'Replace faulty CPU', 'Jel Haque', 0),
('20240613140801', '202406131410370', 'HDD', '20240121120834', '20240116164212', 1, 1, '1TB HDD WD/Toshiba 7200RPM', 6000, 'Replace faulty CPU', 'Jel Haque', 0),
('20240613140801', '202406131410371', 'CSG', '20240123153741', '20240117104145', 1, 1, 'ATX Thermal ', 2500, 'Replace faulty CPU', 'Jel Haque', 0),
('20240627102733', '202406271027330', 'LPT', '20240111125009', '20240129142843', 1, 1, 'ASUS EXPERTBOOK B1 > B1402CBA-NK3106, STAR BLACK, 12TH GEN. INTEL® CORE™ i5-1235U PROCESSOR, 8GB DDR4 3200MHz, 512GB M.2 2280 NVMe PCI 4.0 SSD 3Y.', 80000, 'New Head count for ATL', 'Azharul Islam, AGM, MNT', 1),
('20240627121940', '202406271219400', 'CTG', '20240113095222', '20240117104145', 8, 1, 'Plotter cartridge', 2000, '', 'CAD plotter', 0),
('20240627154639', '202406271546390', 'PRCR', '20240309161438', '20240129142825', 1, 1, '10 th gen', 13200, '', 'Barcode Generate', 0),
('20240627154639', '202406271546391', 'RAM', '20240123154626', '20240129142957', 1, 1, '8 GB DDR4 3200 Bus', 2700, '', 'Barcode Generate', 0),
('20240627154639', '202406271546392', 'MBD', '20240123154227', '20240129142843', 1, 1, 'Asus Prime H510 M-K', 10800, '', 'Barcode Generate', 0),
('20240627154639', '202406271546393', 'HDD', '20240121120834', '20240129142843', 1, 1, 'WD Blue ', 5500, '', 'Barcode Generate', 0),
('20240627155252', '202406271552520', 'CBL', '20240113113547', '20240117105230', 1, 2, '', 19500, 'BADL HO to Factory Network', '', 0),
('20240627155858', '202406271558580', 'NTSW', '20240123154310', '20240117104145', 1, 1, 'Cisco CBS 350', 48000, '', 'BADL IT Room', 0),
('20240629094241', '202406290942410', 'MBD', '20240123154227', '20240129142843', 1, 1, 'Asus H110-MK Mother Board', 1, 'Replace faulty Mother board', 'Sohel - QC', 0),
('20240629152022', '202406291520220', 'PRCR', '20240309161438', '20240129142825', 1, 1, '', 13200, '', 'QA', 1),
('20240629152022', '202406291520221', 'RAM', '20240123154626', '20240129142957', 1, 1, '', 2700, '', 'QA', 1),
('20240629152022', '202406291520222', 'MBD', '20240123154227', '20240129142843', 1, 1, '', 10800, '', 'QA', 1),
('20240629152022', '202406291520223', 'CSG', '20240123153741', '20240117104145', 1, 1, '', 2900, '', 'QA', 1),
('20240629152022', '202406291520224', 'MNT', '20240131152405', '20240129102116', 1, 1, '', 8200, '', 'QA', 1),
('20240630130650', '202406301306500', 'PRTCUTTER', '20240630130401', '20240117104145', 1, 1, 'Barcode Printer Cutter (Norcel)', 1, 'Replace faulty cutter', 'Pdn user', 0),
('20240630132027', '202406301320270', 'LKB', '20240123154150', '20240129101429', 2, 1, '', 1500, '', '', 1),
('20240630132027', '202406301320271', 'LBTR', '20240123154124', '20240129101429', 1, 1, '', 3200, '', '', 1),
('20240630153156', '202406301531560', 'LDSP', '20240123154142', '20240129101429', 1, 1, 'HP Elitebook 440P', 7000, '', 'Ziaur Rahman-Com', 0),
('20240701112726', '202407011127260', 'UKB', '20240120125759', '20240120115732', 5, 1, '', 800, 'For the month of July 24', 'Store stock', 0),
('20240701112726', '202407011127261', 'TNR', '20240111140250', '20240130112137', 2, 1, '', 1150, 'For the month of July 24', 'Store stock', 0),
('20240701112726', '202407011127262', 'UBTR', '20240130152355', '20240117104145', 4, 1, '', 1400, 'For the month of July 24', 'Store stock', 0),
('20240701112726', '202407011127263', 'UMS', '20240120125552', '20240120115732', 5, 1, '', 400, 'For the month of July 24', 'Store stock', 0),
('20240701162959', '202407011629590', 'PSS', '20240513120722', '20240117104145', 1, 1, 'Aver VC 520 Pro Expension Mic Pair ', 57800, '', 'HO Borad Room 3 For Meeting ', 0),
('20240701163733', '202407011637330', 'PSU', '20240123154538', '20240117104145', 1, 1, 'Adjustment power supply for laptop', 8000, '', '', 0),
('20240702100638', '202407021006380', 'CCTV', '20240130165846', '20240117104145', 2, 1, 'Dahua IPC-HFW 1230 2MP IP Camera', 4000, '', 'BWL HR', 0),
('20240702100638', '202407021006381', 'RJC', '20240123154635', '20240203104959', 1, 2, '1box=20 pcs', 460, '', 'BWL users', 0),
('20240703112357', '202407031123570', 'POINTER10', '20240703101129', '20240117104145', 1, 1, 'Micrepack WMP 06', 1980, '', 'Abdul Halim', 0),
('20240703122133', '202407031221330', 'Firewall-LICENSE', '20240703121941', '20240117104145', 1, 1, 'Fortigate License Renewal Aug-24-Aug-25 For BADL', 70000, 'Fortigate License Renewal Aug-24-Aug-25 ', 'For BADL', 0),
('20240704103033', '202407041030330', 'RAM', '20240123154626', '20240117104145', 1, 1, 'RAM 16 GB For Dell Server ', 37000, '', 'Druti Server & ZKteco ', 0),
('20240704110729', '202407041107290', 'LKB', '20240123154150', '20240129101429', 1, 1, 'Keyboard for HP ProBook 450 G5', 1100, 'Replace faulty KB', 'Nazmul', 0),
('20240704164056', '202407041640560', 'CBL', '20240113113547', '20240117105230', 1, 2, '', 19500, 'For Sedo network', 'for Sedo network', 0);

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
  `msdate` date NOT NULL,
  `mmonth` varchar(15) NOT NULL,
  `myear` varchar(15) NOT NULL,
  `mpstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert_id`
--

INSERT INTO `mpr_insert_id` (`smprid`, `suserid`, `mprid`, `fid`, `mdeptid`, `name`, `mdesigid`, `mdate`, `msdate`, `mmonth`, `myear`, `mpstatus`) VALUES
('20240113113926', 'HO75', 'AKL7413', 'AKL', 1, 'Shukur Ali', 11, '2024-01-13', '0000-00-00', 'January', '2024', 0),
('20240113123136', 'HO75', 'ATL278060', 'ATL', 8, 'Badiul Alam', 72, '2024-01-13', '0000-00-00', 'January', '2024', 0),
('20240114102604', 'ho12', 'AFL16330', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-06', '0000-00-00', 'January', '2024', 0),
('20240114104041', 'ho12', 'AFL16316', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-01', '0000-00-00', 'January', '2024', 0),
('20240116164442', 'HO75', 'ATL278061', 'ATL', 8, 'Sumon Hossain', 63, '2024-01-16', '0000-00-00', 'January', '2024', 0),
('20240117111832', 'HO147', 'AFL16338', 'AFL', 8, 'Md. Jewel', 9, '2024-01-16', '0000-00-00', 'January', '2024', 0),
('20240117111833', '', '', '', 0, '', 0, '0000-00-00', '0000-00-00', 'January', '2024', 0),
('20240117115010', 'HO147', 'AFL16335', 'AFL', 8, 'Md. Jewel', 9, '2024-01-15', '0000-00-00', 'January', '2024', 0),
('20240120125700', 'HO75', 'BWL14199', 'BWL', 8, 'Abdul Halim Badal', 4, '2024-01-20', '0000-00-00', 'January', '2024', 0),
('20240121125759', '', '', '', 0, '', 0, '0000-00-00', '0000-00-00', 'January', '2024', 0),
('20240121125805', '', '', '', 0, '', 0, '0000-00-00', '0000-00-00', 'January', '2024', 0),
('20240121125819', 'HO75', 'ATL24390', 'ATL', 5, 'Mustakin Rahman', 9, '2024-01-21', '0000-00-00', 'January', '2024', 0),
('20240121130911', 'HO95', 'BGL18408', 'BGL', 9, 'Sushanto', 4, '2024-01-15', '0000-00-00', 'January', '2024', 0),
('20240121130912', '', '', '', 0, '', 0, '0000-00-00', '0000-00-00', 'January', '2024', 0),
('20240122103642', 'HO75', 'AKL7199', 'AKL', 10, 'Alamgir Sheak', 72, '2024-01-22', '0000-00-00', 'January', '2024', 0),
('20240125114230', 'HO75', 'AFL27390', 'AFL', 5, 'Mostakim Rahman', 9, '2024-01-21', '0000-00-00', 'January', '2024', 0),
('20240125133417', 'HO75', 'ATL278067', 'ATL', 8, 'Badiul Alam', 4, '2024-01-25', '0000-00-00', 'January', '2024', 0),
('20240127113145', 'HO537', 'BGL18409', 'BGL', 14, 'Firoz -CTG-CNF', 4, '2024-01-15', '0000-00-00', 'January', '2024', 0),
('20240127121900', 'HO75', 'ATL24383', 'ATL', 5, 'Mostakin Rahman', 9, '2024-01-27', '0000-00-00', 'January', '2024', 0),
('20240127165313', 'HO75', 'AKL7420', 'AKL', 11, 'Sirajul Alam', 9, '2024-01-27', '0000-00-00', 'January', '2024', 0),
('20240129090556', 'HO61', 'BTL14672', 'BTL', 8, 'Khademul Islam', 63, '2024-01-01', '0000-00-00', 'January', '2024', 0),
('20240129101651', 'HO75', 'AKL7093', 'AKL', 9, 'Hamidur Rahman', 9, '2024-01-29', '0000-00-00', 'January', '2024', 0),
('20240129102440', 'HO75', 'ATL24394', 'ATL', 5, 'Mostakin Rahman', 9, '2024-01-28', '0000-00-00', 'January', '2024', 0),
('20240129130431', 'HO989', 'BADL381', 'BADL', 1, 'Md. Shakib Salim', 63, '2024-01-09', '0000-00-00', 'January', '2024', 0),
('20240129141726', 'ho12', 'AFL16317', 'AFL', 8, 'MR. JEWEL ', 9, '2024-01-01', '0000-00-00', 'January', '2024', 0),
('20240130095158', 'HO989', 'BADL382', 'BADL', 16, 'Md. Shakib Salim', 63, '2024-01-18', '0000-00-00', 'January', '2024', 0),
('20240130110115', 'HO75', 'AKL7206', 'AKL', 5, 'Abdullah Al Mamun', 9, '2024-01-30', '0000-00-00', 'January', '2024', 0),
('20240130112105', 'HO75', 'AKL7435', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-01-30', '0000-00-00', 'January', '2024', 0),
('20240130153051', 'ho12', 'AFL16329', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-06', '0000-00-00', 'January', '2024', 0),
('20240130164733', 'HO75', 'ATL277921', 'ATL', 20, 'Manjurul Alam', 5, '2024-01-13', '0000-00-00', 'January', '2024', 0),
('20240130170506', 'ho12', 'AFL16360', 'AFL', 5, 'Mr. Kazi Sumon', 9, '2024-01-22', '0000-00-00', 'January', '2024', 0),
('20240130171124', 'ho12', 'AFL10970', 'AFL', 10, 'MR. ASHRAFUL ALAM', 9, '2024-01-17', '0000-00-00', 'January', '2024', 0),
('20240130171730', 'ho12', 'AFL16346', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-27', '0000-00-00', 'January', '2024', 0),
('20240130171946', 'ho12', 'AFL16347', 'AFL', 6, 'MR. ZAKIR', 9, '2024-01-28', '0000-00-00', 'January', '2024', 0),
('20240131112844', 'HO75', 'AKL7449', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-01-31', '0000-00-00', 'January', '2024', 0),
('20240131120927', 'HO537', 'BGL18603', 'BGL', 2, 'Jahangir Alam', 2, '2024-01-31', '0000-00-00', 'January', '2024', 0),
('20240131122815', 'HO537', 'BGL18511', 'BGL', 5, 'Helal Ahmed', 61, '2024-01-31', '0000-00-00', 'January', '2024', 0),
('20240131125216', 'HO537', 'BGL18411', 'BGL', 12, 'Sushanto Mondol', 4, '2024-01-31', '0000-00-00', 'January', '2024', 0),
('20240131131310', 'HO537', 'BGL18615', 'BGL', 8, 'Anwar Shah', 63, '2024-01-31', '0000-00-00', 'January', '2024', 0),
('20240131132001', 'HO537', 'BGL18614', 'BGL', 8, 'Anwar Shah', 4, '2024-01-31', '0000-00-00', 'January', '2024', 0),
('20240131132357', 'HO537', 'BGL18449', 'BGL', 19, 'Shafiur rahman', 15, '2023-12-13', '0000-00-00', 'December', '2023', 0),
('20240131150101', 'ho12', 'BCL14227', 'BCL', 8, 'MR. NASIR UDDIN', 9, '2024-01-04', '0000-00-00', 'January', '2024', 0),
('20240131150735', 'ho12', 'BCL14228', 'BCL', 8, 'MR. NASIR UDDIN', 9, '2024-01-04', '0000-00-00', 'January', '2024', 0),
('20240131151533', 'ho12', 'BCL14405', 'BCL', 8, 'MR. AHSAN HABIB IT', 4, '2024-01-23', '0000-00-00', 'January', '2024', 0),
('20240131152206', 'ho12', 'BCL14406', 'BCL', 8, 'MR. AHSAN HABIB', 4, '2024-01-23', '0000-00-00', 'January', '2024', 0),
('20240131152601', 'ho12', 'BCL18447', 'BCL', 10, 'MR. NASIR UDDIN', 9, '2024-01-01', '0000-00-00', 'January', '2024', 0),
('20240131173224', 'HO75', 'AKL7407', 'AKL', 11, 'Nazmul Kabir Sumon', 7, '2024-01-02', '0000-00-00', 'January', '2024', 0),
('20240201122801', 'HO75', 'ATL2861', 'ATL', 3, 'Debabrata Joarder', 30, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240201150128', 'ho12', 'AFL16415', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240203104410', 'ho12', 'BCL14445', 'BCL', 8, 'MD. BADSHA', 4, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240203104833', 'ho12', 'BCL14446', 'BCL', 8, 'MD. BADSHA', 4, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240203114901', 'HO75', 'ATL18413', 'ATL', 5, 'Shahed', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240203153913', 'HO75', 'AKL4898', 'AKL', 12, 'Ashraful Islam', 2, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240204093045', 'HO537', 'BGL13052', 'BGL', 9, 'Shahin Alam', 61, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240204093439', 'HO537', 'BGL18301', 'BGL', 5, 'Subon Pathang ', 63, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240204103004', 'ho12', 'BCL14438', 'BCL', 5, 'MD. ARIF', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240204104619', 'HO75', 'BWL13811', 'BWL', 8, 'Abdul Halim Badol', 9, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240204110751', 'HO75', 'AKL7100', 'AKL', 7, 'Imtiajur', 63, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240204125442', 'HO75', 'ATL278072', 'ATL', 22, 'Badiul Alam', 4, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240205093447', 'HO537', 'BGL18780', 'BGL', 1, 'Md Sujon Mia ', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240205094758', 'HO537', 'BGL18778', 'BGL', 8, 'Anwar Shah', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240205095602', 'HO537', 'BGL18781', 'BGL', 8, 'Anwar Shah', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240205100146', 'HO537', 'BGL18779', 'BGL', 8, 'Anwar Shah', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240205100435', 'HO537', 'BGL18756', 'BGL', 6, 'Mizanur Rahman Sumon', 9, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240206134030', 'HO537', 'BADL1129', 'BADL', 16, 'Ashraful Alam', 4, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240206163347', 'HO75', 'AKL7453', 'AKL', 19, 'Mohiuddin', 19, '2024-02-06', '0000-00-00', 'February', '2024', 0),
('20240207105905', 'HO75', 'AKL4862', 'AKL', 1, 'Shukur Ali', 11, '2024-02-07', '0000-00-00', 'February', '2024', 0),
('20240211161835', 'HO75', 'AKL7454', 'AKL', 24, 'Zahid Hossain', 9, '2024-02-11', '0000-00-00', 'February', '2024', 0),
('20240212160538', 'HO75', 'AKL4899', 'AKL', 12, 'Morsalin Hasan', 61, '2024-02-12', '0000-00-00', 'February', '2024', 0),
('20240215104813', 'HO75', 'ATL278144', 'ATL', 25, 'Ali Ajgor', 4, '2024-02-15', '0000-00-00', 'February', '2024', 0),
('20240215130826', 'HO537', 'BGL18417', 'BGL', 9, 'Nazmul Islam', 4, '2024-02-13', '0000-00-00', 'February', '2024', 0),
('20240217154911', 'HO75', 'ATL3014', 'ATL', 25, 'Liakot Hossain', 63, '2024-02-17', '0000-00-00', 'February', '2024', 0),
('20240219162217', 'HO75', 'AKL7455', 'AKL', 19, 'jahidul Islam', 58, '2024-02-19', '0000-00-00', 'February', '2024', 0),
('20240222110741', 'HO75', 'ATL278077', 'ATL', 8, 'badiul Alam', 4, '2024-02-22', '0000-00-00', 'February', '2024', 0),
('20240224153641', 'HO75', 'AKL7521', 'AKL', 10, 'Alamgir Sheikh', 72, '2024-02-24', '0000-00-00', 'February', '2024', 0),
('20240227102825', 'HO75', 'ATL278087', 'ATL', 8, 'Badiul Alam', 4, '2024-02-27', '0000-00-00', 'February', '2024', 0),
('20240227150640', 'HO75', 'BWL14186', 'BWL', 5, 'Osman', 63, '2024-02-10', '0000-00-00', 'February', '2024', 0),
('20240229131625', 'HO75', 'AKL7539', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-02-29', '0000-00-00', 'February', '2024', 0),
('20240229143134', 'HO537', 'BCL18418', 'BCL', 10, 'Obaydur Rahman', 2, '2024-02-28', '0000-00-00', 'February', '2024', 0),
('20240229153519', 'HO537', 'BGL18838', 'BGL', 8, 'Anwar Shah', 4, '2024-02-22', '0000-00-00', 'February', '2024', 0),
('20240229181723', 'HO537', 'BGL18530', 'BGL', 4, 'Md Sujon Mia', 2, '2024-02-27', '0000-00-00', 'February', '2024', 0),
('20240302172058', 'HO537', 'BGL18911', 'BGL', 4, 'Kabir ', 9, '2024-03-02', '0000-00-00', 'March', '2024', 0),
('20240303131101', 'HO75', 'ATL277906', 'ATL', 20, 'Manjurul ', 5, '2023-11-09', '0000-00-00', 'November', '2023', 0),
('20240303132652', 'HO75', 'ATL278038', 'ATL', 8, 'Badiul Alam', 4, '2024-02-28', '0000-00-00', 'February', '2024', 0),
('20240304152430', 'HO75', 'ATL278101', 'ATL', 25, 'Ali Ajgor', 4, '2024-01-25', '0000-00-00', 'January', '2024', 0),
('20240304152933', 'HO75', 'ATL278050', 'ATL', 25, 'Ali Ajgor', 4, '2024-01-25', '0000-00-00', 'January', '2024', 0),
('20240304154545', 'HO75', 'AKL278073', 'AKL', 1, 'Sukur Ali', 11, '2024-02-06', '0000-00-00', 'February', '2024', 0),
('20240304162555', 'HO75', 'AKL7564', 'AKL', 2, 'Milon', 6, '2024-03-04', '0000-00-00', 'March', '2024', 0),
('20240305101452', 'HO75', 'AKL7461', 'AKL', 24, 'Zahid Hossain', 9, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240305110041', 'HO75', 'BWL13836', 'BWL', 8, 'Abdul Halim Badal', 63, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240305151132', 'HO75', 'AKL7562', 'AKL', 26, 'Ratan Kumar Saha', 52, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240305165158', 'HO75', 'AKL7566', 'AKL', 26, 'Quazi Quadiruzzaman', 42, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240307165202', 'HO75', 'AKL7568', 'AKL', 8, 'Mozaffor', 63, '2024-03-07', '0000-00-00', 'March', '2024', 0),
('20240309154604', 'ho12', 'BCL14404', 'BCL', 27, 'MR. JAHANGIR ALAM', 5, '2024-01-22', '0000-00-00', 'January', '2024', 0),
('20240309154857', 'ho12', 'BCL13495', 'BCL', 5, 'MR. MD ARIF', 4, '2024-02-03', '0000-00-00', 'February', '2024', 0),
('20240309155151', 'HO75', 'AKL23558', 'AKL', 1, 'Shukur Ali', 11, '2024-03-09', '0000-00-00', 'March', '2024', 0),
('20240309155410', 'ho12', 'BCL68', 'BCL', 8, 'MR. MD BADSHA', 4, '2024-03-02', '0000-00-00', 'March', '2024', 0),
('20240309161329', 'ho12', 'BCL67', 'BCL', 8, 'MR. MD BADSHA', 4, '2024-03-02', '0000-00-00', 'March', '2024', 0),
('20240309164632', 'ho12', 'AFL16416', 'AFL', 8, 'MR. JEWEL ', 9, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240309170845', 'HO75', 'AKL7567', 'AKL', 6, 'Jel Haque', 83, '2024-03-09', '0000-00-00', 'March', '2024', 0),
('20240309171153', 'ho12', 'AFL16420', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-01', '0000-00-00', 'February', '2024', 0),
('20240309171949', 'ho12', 'AFL16423', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-04', '0000-00-00', 'February', '2024', 0),
('20240309172214', 'ho12', 'AFL16429', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-11', '0000-00-00', 'February', '2024', 0),
('20240309172442', 'ho12', 'AFL16430', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-10', '0000-00-00', 'February', '2024', 0),
('20240309172659', 'ho12', 'AFL16458', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-18', '0000-00-00', 'February', '2024', 0),
('20240309173516', 'ho12', 'AFL16511', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-03', '0000-00-00', 'March', '2024', 0),
('20240309180218', 'ho12', 'AFL16510', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-03', '0000-00-00', 'March', '2024', 0),
('20240310102835', 'HO537', 'BRL16873', 'BRL', 1, 'Chapal', 72, '2024-02-10', '0000-00-00', 'February', '2024', 0),
('20240310105418', 'HO537', 'BGL18901', 'BGL', 8, 'Anwar Shah', 4, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240310105818', 'HO537', 'BGL18902', 'BGL', 8, 'Anwar Shah', 4, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240310111318', 'HO537', 'BGL18904', 'BGL', 8, 'Anwar Shah', 4, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240310112218', 'HO537', 'BGL18910', 'BGL', 2, 'Jahangir Alam', 2, '2024-03-02', '0000-00-00', 'March', '2024', 0),
('20240310120948', 'HO537', 'BASL18421', 'BASL', 12, 'Zahid -Audit ', 4, '2024-03-04', '0000-00-00', 'March', '2024', 0),
('20240310170111', 'HO75', 'AKL7462', 'AKL', 19, 'Sayed Tanay Miah', 9, '2024-03-10', '0000-00-00', 'March', '2024', 0),
('20240311141040', 'HO75', 'BWL14101', 'BWL', 8, 'Abdul Halim Badal', 4, '2024-03-11', '0000-00-00', 'March', '2024', 0),
('20240313144907', 'HO75', 'AKL4863', 'AKL', 1, 'Asad', 5, '2024-03-13', '0000-00-00', 'March', '2024', 0),
('20240313145300', 'HO75', 'ATL23559', 'ATL', 1, 'Asad', 5, '2024-03-13', '0000-00-00', 'March', '2024', 0),
('20240316144147', 'HO75', 'AKL4864', 'AKL', 1, 'Shukur Ali', 11, '2024-03-16', '0000-00-00', 'March', '2024', 0),
('20240317152320', 'HO75', 'ATL2864', 'ATL', 3, 'AShik Alom', 4, '2024-03-17', '0000-00-00', 'March', '2024', 0),
('20240319094534', 'HO537', 'BTL14588', 'BTL', 1, 'Shahidullah', 9, '2024-03-17', '0000-00-00', 'March', '2024', 0),
('20240319094735', 'HO537', 'AFL13939', 'AFL', 1, 'Ahsan Habib', 4, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240319094853', 'HO537', 'BCL12074', 'BCL', 1, 'Ahsan Habib', 4, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240319095423', 'HO537', 'BADL18422', 'BADL', 1, 'Md Sujon Mia', 4, '2024-03-05', '0000-00-00', 'March', '2024', 0),
('20240319101128', 'HO537', 'BGL18423', 'BGL', 1, 'Md Sujon Mia', 4, '2024-03-07', '0000-00-00', 'March', '2024', 0),
('20240319124935', 'HO75', 'ATL278097', 'ATL', 8, 'Badiul Alam', 4, '2024-03-19', '0000-00-00', 'March', '2024', 0),
('20240323133300', 'HO537', 'BGL18534', 'BGL', 1, 'Md Sujon Mia', 4, '2024-03-03', '0000-00-00', 'March', '2024', 0),
('20240324141810', 'HO147', 'AFL16540', 'AFL', 27, 'Md. Shahidul Haque', 2, '2024-03-24', '0000-00-00', 'March', '2024', 0),
('20240325112856', 'HO75', 'AKL18540', 'AKL', 5, 'Shahed', 4, '2024-03-25', '0000-00-00', 'March', '2024', 0),
('20240325130719', 'HO75', 'AKL7527', 'AKL', 10, 'Alamgir Shekh', 4, '2024-03-25', '0000-00-00', 'March', '2024', 0),
('20240330100639', 'HO75', 'AKL7598', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240330124203', 'HO75', 'AKL7656', 'AKL', 6, 'Zaman', 67, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240330153943', 'ho75', 'BWL14114', 'BWL', 8, 'Abdul Halim Badal', 9, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240331101550', 'HO537', 'BGL18434', 'BGL', 24, 'sushanto', 4, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240331103927', 'HO537', 'BGL18436', 'BGL', 5, 'sushanto', 4, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240331104054', 'HO537', 'BGL18435', 'BGL', 5, 'sushanto', 4, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240331132432', 'ho75', 'AKL7657', 'AKL', 6, 'Aslam Shekh', 2, '2024-03-31', '0000-00-00', 'March', '2024', 0),
('20240331151943', 'ho75', 'ATL278361', 'ATL', 8, 'Subra Ahmed', 4, '2024-03-31', '0000-00-00', 'March', '2024', 0),
('20240401100845', 'HO537', 'BGL18432', 'BGL', 7, 'Anwar Hosain', 5, '2024-05-25', '0000-00-00', 'May', '2024', 0),
('20240401131246', 'ho75', 'ATL278088', 'ATL', 1, 'Shukur Ali', 11, '2024-02-27', '0000-00-00', 'February', '2024', 0),
('20240402111725', 'ho75', 'ATL278362', 'ATL', 8, 'Badiul Alam', 4, '2024-04-02', '0000-00-00', 'April', '2024', 0),
('20240402120537', 'ho75', 'ATL21320', 'ATL', 7, 'Helal Uddin Ahmed', 2, '2024-04-02', '0000-00-00', 'April', '2024', 0),
('20240403095151', 'HO131', 'AKL7474', 'AKL', 19, 'Tarequl Islam', 58, '2024-03-31', '0000-00-00', 'March', '2024', 0),
('20240403122424', 'HO537', 'BRL16876', 'BRL', 5, 'Noman', 4, '2024-04-29', '0000-00-00', 'April', '2024', 0),
('20240403125238', 'HO12', 'BCL12075', 'BCL', 1, 'MR. AHSAN HABIB', 4, '2024-03-13', '0000-00-00', 'March', '2024', 0),
('20240403125814', 'HO12', 'BCL123', 'BCL', 8, 'MR. MD BADSHA', 63, '2024-03-27', '0000-00-00', 'March', '2024', 0),
('20240403130620', 'HO12', 'BCL124', 'BCL', 8, 'MR. MD BADSHA', 63, '2024-03-27', '0000-00-00', 'March', '2024', 0),
('20240403142411', 'HO12', 'AFL16437', 'AFL', 8, 'MR. JEWEL', 9, '2024-02-18', '0000-00-00', 'February', '2024', 0),
('20240403142643', 'HO12', 'AFL16492', 'AFL', 5, 'MR. KAZI SUMON', 9, '2024-03-11', '0000-00-00', 'March', '2024', 0),
('20240403143059', 'HO12', 'AFL16532', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-19', '0000-00-00', 'March', '2024', 0),
('20240403143242', 'HO12', 'AFL16531', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-19', '0000-00-00', 'March', '2024', 0),
('20240403143700', 'HO12', 'AFL16653', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240403144655', 'HO12', 'AFL16657', 'AFL', 8, 'MR. JEWEL ', 9, '2024-03-30', '0000-00-00', 'March', '2024', 0),
('20240403145426', 'HO12', 'AFL13940', 'AFL', 8, 'Mr. Md. Jewel', 9, '2024-03-31', '0000-00-00', 'March', '2024', 0),
('20240403145617', 'HO12', 'AFL16665', 'AFL', 8, 'MR. MD. JAKIR', 9, '2024-04-01', '0000-00-00', 'April', '2024', 0),
('20240403151001', 'HO12', 'AFL16496', 'AFL', 8, 'MR. JEWEL', 9, '2024-03-14', '0000-00-00', 'March', '2024', 0),
('20240403165208', 'HO537', 'BASL386', 'BASL', 1, 'Aiman', 52, '2024-04-03', '0000-00-00', 'April', '2024', 0),
('20240403165341', 'HO537', 'BASL387', 'BASL', 1, 'Aiman', 52, '2024-04-03', '0000-00-00', 'April', '2024', 0),
('20240404095911', 'HO537', 'BGL18440', 'BGL', 1, 'Md Sujon Mia', 4, '2024-04-04', '0000-00-00', 'April', '2024', 0),
('20240417130037', 'ho75', 'ATL3032', 'ATL', 25, 'Liakat Hossain', 4, '2024-04-17', '0000-00-00', 'April', '2024', 0),
('20240417130859', 'ho75', 'BWL14121', 'BWL', 8, 'Abdul Halim Badal', 9, '2024-04-17', '0000-00-00', 'April', '2024', 0),
('20240420111510', 'ho75', 'AKL7674', 'AKL', 10, 'Sirajul Islam', 9, '2024-04-20', '0000-00-00', 'April', '2024', 0),
('20240420134114', 'ho75', 'BWL14123', 'BWL', 8, 'Abdul halim Badal', 9, '2024-04-20', '0000-00-00', 'April', '2024', 0),
('20240421110928', 'ho75', 'AKL7704', 'AKL', 24, 'Zahid Hossain Emu', 9, '2024-04-21', '0000-00-00', 'April', '2024', 0),
('20240421115021', 'ho75', 'AKL7408', 'AKL', 10, 'Nazmul Kabir Sumon', 7, '2024-04-21', '0000-00-00', 'April', '2024', 0),
('20240421143745', 'HO537', 'BGL18443', 'BGL', 4, 'Kabir hossain', 9, '2024-04-17', '0000-00-00', 'April', '2024', 0),
('20240421143937', 'HO537', 'BGL18445', 'BGL', 1, 'Susanto', 4, '2024-04-18', '0000-00-00', 'April', '2024', 0),
('20240421155213', 'ho75', 'AKL7702', 'AKL', 7, 'Reashat Al Noor', 9, '2024-04-21', '0000-00-00', 'April', '2024', 0),
('20240421162246', 'ho75', 'ATL278363', 'ATL', 8, 'Badiul Alam', 9, '2024-04-21', '0000-00-00', 'April', '2024', 0),
('20240423132318', 'ho75', 'ATL2906', 'ATL', 5, 'Sohel Rana', 4, '2024-04-23', '0000-00-00', 'April', '2024', 0),
('20240423175814', 'HO537', 'BGL19151', 'BGL', 3, 'Susanto', 4, '2024-04-23', '0000-00-00', 'April', '2024', 0),
('20240424111412', 'HO537', 'BGL18968', 'BGL', 1, 'IT', 4, '2024-04-03', '0000-00-00', 'April', '2024', 0),
('20240424113624', 'HO537', 'BGL18970', 'BGL', 8, 'Anwar Shah', 4, '2024-04-03', '0000-00-00', 'April', '2024', 0),
('20240424115348', 'HO537', 'BGL18969', 'BGL', 8, 'Anwar Shah', 4, '2024-04-03', '0000-00-00', 'April', '2024', 0),
('20240424122159', 'HO537', 'BGL18259', 'BGL', 11, 'Umme Salma Dalia', 15, '2024-04-18', '0000-00-00', 'April', '2024', 0),
('20240424122938', 'HO537', 'BGL18425', 'BGL', 24, 'Bipul ', 4, '2024-03-13', '0000-00-00', 'March', '2024', 0),
('20240424123419', 'HO537', 'BGL18428', 'BGL', 1, 'Sushanto', 4, '2024-04-10', '0000-00-00', 'April', '2024', 0),
('20240424125119', 'HO537', 'BGL18947', 'BGL', 8, 'Anwar Shah', 4, '2024-04-23', '0000-00-00', 'April', '2024', 0),
('20240424130558', 'HO537', 'BGL13063', 'BGL', 9, 'Anasul Haque', 15, '2024-02-13', '0000-00-00', 'February', '2024', 0),
('20240425101331', 'HO537', 'BGL18444', 'BGL', 7, 'Anwar Hosain', 5, '2024-04-24', '0000-00-00', 'April', '2024', 0),
('20240425101558', 'HO537', 'BADL390', 'BADL', 1, 'Aiman', 52, '2024-04-18', '0000-00-00', 'April', '2024', 0),
('20240428104940', 'ho75', 'AKL7200', 'AKL', 10, 'Alamgir Shekh', 4, '2024-04-28', '0000-00-00', 'April', '2024', 0),
('20240428111248', 'ho75', 'AKL7712', 'AKL', 28, 'Muslim Uddin', 97, '2024-04-28', '0000-00-00', 'April', '2024', 0),
('20240428142510', 'ho75', 'AKL7713', 'AKL', 19, 'Shohrab', 9, '2024-04-28', '0000-00-00', 'April', '2024', 0),
('20240428165633', 'ho75', 'ATL278371', 'ATL', 8, 'Badiul Alam', 4, '2024-04-28', '0000-00-00', 'April', '2024', 0),
('20240428170052', 'ho75', 'AKL7609', 'AKL', 12, 'Nazmul Alam', 4, '2024-04-28', '0000-00-00', 'April', '2024', 0),
('20240428170457', 'ho75', 'AKL7611', 'AKL', 12, 'Nazmul Haque', 63, '2024-04-28', '0000-00-00', 'April', '2024', 0),
('20240429112510', 'ho75', 'AKL7695', 'AKL', 10, 'Alamgir Shekh', 9, '2024-04-29', '0000-00-00', 'April', '2024', 0),
('20240502113051', 'ho75', 'AKL7762', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-05-02', '0000-00-00', 'May', '2024', 0),
('20240504123721', 'ho75', 'AKL7775', 'AKL', 5, 'Abdullah Al Mamun', 9, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240504124950', 'ho75', 'BWL14135', 'BWL', 8, 'Abdul Halim Badal', 9, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240504150950', 'ho75', 'AKL7714', 'AKL', 19, 'Bipul Ahmed', 9, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240504151333', 'ho75', 'AKL7717', 'AKL', 7, 'SM Jahidul Islam', 9, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240504151724', 'ho75', 'AKL7716', 'AKL', 19, 'Ashraful Bari Khandakar', 58, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240505113804', 'HO537', 'BGL18997', 'BGL', 10, 'Abdul Alim', 9, '2024-04-22', '0000-00-00', 'April', '2024', 0),
('20240505115250', 'ho75', 'AKL7778', 'AKL', 5, 'Abdullah Al Mamun', 9, '2024-05-05', '0000-00-00', 'May', '2024', 0),
('20240506125938', 'ho75', 'AKL7362', 'AKL', 5, 'Abdullah Al Mamun', 5, '2024-05-06', '0000-00-00', 'May', '2024', 0),
('20240506130453', 'ho75', 'AKL7780', 'AKL', 10, 'Saddam Hossain', 52, '2024-05-06', '0000-00-00', 'May', '2024', 0),
('20240508101922', 'ho75', 'BWL14145', 'BWL', 8, 'Abdul Halim Badal', 9, '2024-05-08', '0000-00-00', 'May', '2024', 0),
('20240509145150', 'ho75', 'AKL7721', 'AKL', 9, 'Mohiuddin', 19, '2024-05-09', '0000-00-00', 'May', '2024', 0),
('20240509154558', 'ho75', 'AKL7783', 'AKL', 2, 'Faruk Hossen', 9, '2024-05-09', '0000-00-00', 'May', '2024', 0),
('20240511153249', 'ho12', 'BCL214', 'BCL', 8, 'MR. MD BADSHA', 4, '2024-05-09', '0000-00-00', 'May', '2024', 0),
('20240511153438', 'ho12', 'BCL222', 'BCL', 1, 'MR. AHSAN HABIB', 4, '2024-05-08', '0000-00-00', 'May', '2024', 0),
('20240513122904', 'ho75', 'ATL278381', 'ATL', 8, 'Badiul Alam', 4, '2024-05-13', '0000-00-00', 'May', '2024', 0),
('20240513124059', 'ho75', 'AKL7786', 'AKL', 11, 'Sirajul Islam', 9, '2024-05-13', '0000-00-00', 'May', '2024', 0),
('20240513180753', 'ho75', 'AKL7790', 'AKL', 1, 'Shukur Ali', 11, '2024-05-13', '0000-00-00', 'May', '2024', 0),
('20240516153130', 'ho75', 'AKL4866', 'AKL', 26, 'Mohiuddin Ahmed', 63, '2024-05-16', '0000-00-00', 'May', '2024', 0),
('20240518122118', 'ho75', 'ATL2866', 'ATL', 3, 'Ashik Alam', 72, '2024-05-18', '0000-00-00', 'May', '2024', 0),
('20240520112750', 'ho75', 'AKL4897', 'AKL', 12, 'Arif', 36, '2024-05-18', '0000-00-00', 'May', '2024', 0),
('20240521093812', 'ho75', 'AKL7705', 'AKL', 9, 'Mohiuddin', 17, '2024-05-21', '0000-00-00', 'May', '2024', 0),
('20240521153207', 'HO537', 'BGL19161', 'BGL', 1, 'Sushanto', 4, '2024-05-15', '0000-00-00', 'May', '2024', 0),
('20240521154755', 'HO537', 'BGL19227', 'BGL', 1, 'Anwar Shah', 4, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240521155409', 'HO537', 'BGL19229', 'BGL', 8, 'Anwar Shah', 4, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240521155739', 'HO537', 'BGL19230', 'BGL', 8, 'Anwar Shah', 4, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240521161431', 'HO537', 'BGL19228', 'BGL', 8, 'Anwar Shah', 4, '2024-05-04', '0000-00-00', 'May', '2024', 0),
('20240521165639', 'HO537', 'BGL19228', 'BGL', 8, 'Anwar Shah', 4, '2024-05-02', '0000-00-00', 'May', '2024', 0),
('20240521170251', 'HO537', 'BGL19275', 'BGL', 1, 'Anwar Shah', 4, '2024-04-29', '0000-00-00', 'April', '2024', 0),
('20240521171623', 'HO537', 'BGL19154', 'BGL', 1, 'Susanto', 4, '2024-04-30', '0000-00-00', 'April', '2024', 0),
('20240521171814', 'HO537', 'BADL399', 'BADL', 1, 'Aiman', 52, '2024-05-15', '0000-00-00', 'May', '2024', 0),
('20240521172144', 'HO537', 'BADL391', 'BADL', 18, 'Hanif', 4, '2024-04-18', '0000-00-00', 'April', '2024', 0),
('20240521173407', 'HO537', 'BGL18448', 'BGL', 1, 'Md Sujon Mia', 4, '2023-12-13', '0000-00-00', 'December', '2023', 0),
('20240521174042', 'HO537', 'BGL19155', 'BGL', 11, 'Raihan', 9, '2024-05-02', '0000-00-00', 'May', '2024', 0),
('20240522095225', 'ho75', 'AKL7719', 'AKL', 19, 'Asaduzzaman ', 9, '2024-05-22', '0000-00-00', 'May', '2024', 0),
('20240522101259', 'ho75', 'AKL7724', 'AKL', 19, 'Rezvee Khalid', 5, '2024-05-22', '0000-00-00', 'May', '2024', 0),
('20240522112450', 'ho75', 'AKL4867', 'AKL', 1, 'Asad', 5, '2024-05-22', '0000-00-00', 'May', '2024', 0),
('20240522152742', 'HO537', 'BADL398', 'BADL', 1, 'Aiman', 52, '2024-05-15', '0000-00-00', 'May', '2024', 0),
('20240522154427', 'HO537', 'BGL4868', 'BGL', 28, 'Muslim Uddin', 15, '2024-05-21', '0000-00-00', 'May', '2024', 0),
('20240525164730', 'ho75', 'AKL7678', 'AKL', 24, 'Zahid Hossain Emu', 9, '2024-05-25', '0000-00-00', 'May', '2024', 0),
('20240526133422', 'HO537', 'BGL19061', 'BGL', 5, 'Shahed ', 4, '2024-05-19', '0000-00-00', 'May', '2024', 0),
('20240526180125', 'HO537', 'BGL19170', 'BGL', 1, 'Md Sujon Mia', 4, '2024-05-26', '0000-00-00', 'May', '2024', 0),
('20240527114419', 'ho75', 'AKL7696', 'AKL', 10, 'Alamgir Shekh', 72, '2024-05-27', '0000-00-00', 'May', '2024', 0),
('20240527130009', 'ho75', 'AKL7958', 'AKL', 5, 'Liton Hossain', 19, '2024-05-27', '0000-00-00', 'May', '2024', 0),
('20240527143820', 'HO537', 'BCL13943', 'BCL', 1, 'Ahsan Habib', 4, '2024-05-26', '0000-00-00', 'May', '2024', 0),
('20240529110937', 'ho75', 'BWL12207', 'BWL', 8, 'Abdul Halim Badal', 9, '2024-05-28', '0000-00-00', 'May', '2024', 0),
('20240529112047', 'ho75', 'ATL278392', 'ATL', 8, 'Badiul Alam', 4, '2024-05-28', '0000-00-00', 'May', '2024', 0),
('20240529112447', 'ho75', 'ATL278224', 'ATL', 5, 'Mostakin Rahman', 9, '2024-05-28', '0000-00-00', 'May', '2024', 0),
('20240529113349', 'ho75', 'AKL7968', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-05-29', '0000-00-00', 'May', '2024', 0),
('20240529144841', 'HO537', 'BGL19165', 'BGL', 1, 'Susanto', 4, '2024-05-21', '0000-00-00', 'May', '2024', 0),
('20240529162543', 'HO537', 'BGL19270', 'BGL', 8, 'Anwar Shah', 4, '2024-05-22', '0000-00-00', 'May', '2024', 0),
('20240529162927', 'HO537', 'BGL19158', 'BGL', 1, 'Susanto', 4, '2024-05-29', '0000-00-00', 'May', '2024', 0),
('20240601090342', 'ho75', 'AKL7493', 'AKL', 25, 'Mizanur Rahman', 4, '2024-06-01', '0000-00-00', 'June', '2024', 0),
('20240601105141', 'ho75', 'BWL12210', 'BWL', 8, 'Abdul Halim Badal ', 9, '2024-06-01', '0000-00-00', 'June', '2024', 0),
('20240601152228', 'ho75', 'ATL278557', 'ATL', 25, 'Ali Ajgor', 63, '2024-06-01', '0000-00-00', 'June', '2024', 0),
('20240602120752', 'ho75', 'AKL7976', 'AKL', 5, 'Salauddin Sagar', 72, '2024-06-02', '0000-00-00', 'June', '2024', 0),
('20240602160819', 'ho75', 'ATL278395', 'ATL', 8, 'Badiul Alam', 4, '2024-06-02', '0000-00-00', 'June', '2024', 0),
('20240603131154', 'ho75', 'AKL7994', 'AKL', 25, 'Momin', 2, '2024-06-03', '0000-00-00', 'June', '2024', 0),
('20240606103723', 'ho75', 'ATL2920', 'ATL', 5, 'Mostakin Rahman', 9, '2024-06-06', '0000-00-00', 'June', '2024', 0),
('20240606154338', 'ho75', 'AKL7996', 'AKL', 23, 'Jahangir Alam', 15, '2024-06-06', '0000-00-00', 'June', '2024', 0),
('20240606172821', 'HO537', 'BGL19178', 'BGL', 5, 'Abdul Halim', 9, '2024-06-06', '0000-00-00', 'June', '2024', 0),
('20240606173429', 'HO537', 'BGL19177', 'BGL', 1, 'Susanto', 4, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240606173659', 'HO537', 'BGL19176', 'BGL', 1, 'Susanto', 4, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240608184330', 'HO537', 'BADL1136', 'BADL', 1, 'Aiman', 52, '2024-06-08', '0000-00-00', 'June', '2024', 0),
('20240609092941', 'ho75', 'AKL7732', 'AKL', 9, 'Zahiduzzaman Siddiquee', 9, '2024-06-09', '0000-00-00', 'June', '2024', 0),
('20240609093340', 'ho75', 'AKL7733', 'AKL', 9, 'Mohiuddin', 63, '2024-06-09', '0000-00-00', 'June', '2024', 0),
('20240610125344', 'HO537', 'BGL19174', 'BGL', 1, 'Susanto', 4, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240610130232', 'HO537', 'BADL1653', 'BADL', 1, 'Aiman', 52, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240610130510', 'HO537', 'BADL1655', 'BADL', 1, 'Aiman', 52, '2024-06-06', '0000-00-00', 'June', '2024', 0),
('20240610130650', 'HO537', 'BADL1654', 'BADL', 1, 'Aiman', 52, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240610132105', 'HO537', 'AFL19172', 'AFL', 1, 'Shamsujjaman', 78, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240610132538', 'HO537', 'BGL19182', 'BGL', 1, 'Sujon-IT', 4, '2024-06-09', '0000-00-00', 'June', '2024', 0),
('20240610133226', 'HO537', 'BGL19329', 'BGL', 8, 'Anwar Shah', 4, '2024-06-03', '0000-00-00', 'June', '2024', 0),
('20240610133821', 'HO537', 'BGL19354', 'BGL', 8, 'Anwar Shah', 4, '2024-06-03', '0000-00-00', 'June', '2024', 0),
('20240610134554', 'HO537', 'BGL19327', 'BGL', 8, 'Anwar Shah', 4, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240610135025', 'HO537', 'BGL19330', 'BGL', 8, 'Anwar Shah', 4, '2024-06-05', '0000-00-00', 'June', '2024', 0),
('20240612150249', 'ho75', 'AKL4869', 'AKL', 1, 'Shukur Ali', 11, '2024-06-12', '0000-00-00', 'June', '2024', 0),
('20240612155108', 'ho75', 'AKL7951', 'AKL', 6, 'Dilip Sarker', 67, '2024-06-12', '0000-00-00', 'June', '2024', 0),
('20240613112731', 'HO537', 'BGL19183', 'BGL', 1, 'Sujon', 4, '2024-06-10', '2024-06-13', 'June', '2024', 0),
('20240613140801', 'ho75', 'AKL8001', 'AKL', 6, 'Jel Haque', 67, '2024-06-13', '2024-06-13', 'June', '2024', 0),
('20240627102733', 'ho75', 'ATL19062', 'ATL', 25, 'Shahed', 4, '2024-05-23', '2024-06-12', 'June', '2024', 0),
('20240627121940', 'ho75', 'AKL7699', 'AKL', 10, 'Alamgir Sheak', 4, '2024-06-27', '2024-06-27', 'June', '2024', 0),
('20240627154639', 'HO537', 'BADL1662', 'BADL', 1, 'Aiman', 63, '2024-06-26', '2024-06-27', 'June', '2024', 0),
('20240627155252', 'HO537', 'BADL1664', 'BADL', 1, 'Aiman', 63, '2024-06-26', '2024-06-27', 'June', '2024', 0),
('20240627155858', 'HO537', 'BADL1663', 'BADL', 1, 'Aiman', 63, '2024-06-26', '2024-06-27', 'June', '2024', 0),
('20240629094241', 'ho75', 'AKL8004', 'AKL', 6, 'Sohel Miah', 17, '2024-06-27', '2024-06-29', 'June', '2024', 0),
('20240629152022', 'HO537', 'BGL19159', 'BGL', 6, 'Biplob Chandra', 4, '2024-05-13', '2024-05-23', 'May', '2024', 0),
('20240630130650', 'ho75', 'ATL2104', 'ATL', 25, 'Mahbub Alam', 9, '2024-06-29', '2024-06-30', 'June', '2024', 0),
('20240630132027', 'HO537', 'BGL19117', 'BGL', 1, 'Jahid', 63, '2024-05-25', '2024-05-28', 'May', '2024', 0),
('20240630153156', 'HO537', 'BGL19186', 'BGL', 9, 'Ziaur Rahman', 63, '2024-06-29', '2024-06-30', 'June', '2024', 0),
('20240701112726', 'ho75', 'AKL8017', 'AKL', 8, 'Lutfor Rahman Shaheen', 2, '2024-06-30', '2024-07-01', 'July', '2024', 0),
('20240701162959', 'HO537', 'BGL19187', 'BGL', 1, 'Sushanto', 4, '2024-07-30', '2024-07-01', 'July', '2024', 0),
('20240701163733', 'HO537', 'BGL19191', 'BGL', 1, 'Sushanto', 4, '2024-07-30', '2024-07-01', 'July', '2024', 0),
('20240702100638', 'ho75', 'BWL12225', 'BWL', 8, 'Abdul Halim Badal', 9, '2024-07-01', '2024-07-02', 'July', '2024', 0),
('20240703112357', 'HO526', 'BGL19194', 'BGL', 5, 'Md Abdul Halim', 4, '2024-07-02', '2024-07-03', 'July', '2024', 0),
('20240703122133', 'HO537', 'BADL19192', 'BADL', 1, 'Md Sujon Mia', 9, '2024-07-01', '2024-07-03', 'July', '2024', 0),
('20240704103033', 'HO537', 'BGL19451', 'BGL', 1, 'Md Sujon Mia', 9, '2024-07-03', '2024-07-04', 'July', '2024', 0),
('20240704110729', 'ho75', 'AKL7630', 'AKL', 12, 'Nazmul Haque', 63, '2024-06-29', '2024-07-04', 'July', '2024', 0),
('20240704164056', 'ho75', 'ATL278709', 'ATL', 8, 'Badiul Alam', 4, '2024-07-04', '2024-07-04', 'July', '2024', 0);

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
-- Stand-in structure for view `mpr_wise_receive_list_view1`
-- (See below for the actual view)
--
CREATE TABLE `mpr_wise_receive_list_view1` (
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
('20240310154542', '202403101545420', 'HO75', 'AKL7461', '2024-03-0017', '202403051014520', 1, '', 8500, '8', '2024-03-06', 0),
('20240311095300', '202403110953000', 'HO537', 'BGL18301', 'BGL-2024-02-0082', '202402040934390', 1, '', 7800, '14', '2024-04-29', 0),
('20240311102058', '202403111020580', 'HO537', 'BGL18756', 'BGl-2024-02-0081', '202402051004350', 2, 'Inspection Room-Sumon', 7600, '6', '2024-04-13', 0),
('20240311102841', '202403111028412', 'HO537', 'BGL18780', 'BGL-2024-02-0080', '202402050934472', 1, 'User Support', 4300, '22', '2024-03-11', 0),
('20240317143650', '202403171436500', 'HO75', 'AKL7420', '2024-03-0030', '202401271653130', 3, '', 2500, '5', '2024-03-10', 0),
('20240317143650', '202403171436501', 'HO75', 'AKL7420', '2024-03-0030', '202401271653131', 3, '', 2500, '5', '2024-03-10', 0),
('20240320102008', '202403201020080', 'HO75', 'AKL7453', '2024-03-0058', '202402061633470', 1, '', 9500, '8', '2024-03-17', 0),
('20240320102008', '202403201020081', 'HO75', 'AKL7453', '2024-03-0058', '202402061633471', 1, '', 8500, '8', '2024-03-17', 0),
('20240321100307', '202403211003070', 'HO537', 'BGL18530', 'BGL-2024-03-0039', '202402291817230', 1, 'RND ', 66000, '14', '2024-02-29', 0),
('20240321101401', '202403211014010', 'HO537', 'BGL18902', 'BGL-2024-03-0070', '202403101058180', 6, '', 400, '14', '2024-03-11', 0),
('20240321105223', '202403211052235', 'HO537', 'BGL18901', 'BGL-2024-03-0065', '202403101054185', 10, 'CAD', 2000, '10', '2024-03-11', 0),
('20240321105721', '202403211057210', 'HO537', 'BGL18901', 'BGL-2024-03-0058', '202403101054180', 5, '', 1200, '11', '2024-03-11', 0),
('20240321105721', '202403211057211', 'HO537', 'BGL18901', 'BGL-2024-03-0058', '202403101054181', 2, '', 1200, '11', '2024-03-11', 0),
('20240321105721', '202403211057212', 'HO537', 'BGL18901', 'BGL-2024-03-0058', '202403101054182', 3, '', 1200, '11', '2024-03-11', 0),
('20240321105721', '202403211057214', 'HO537', 'BGL18901', 'BGL-2024-03-0058', '202403101054184', 6, '', 2900, '11', '2024-03-21', 0),
('20240321110211', '202403211102110', 'HO537', 'BGL18904', 'BGL-2024-03-0066', '202403101113180', 4, '410,411,412,413 for  DND', 2500, '5', '2024-03-21', 0),
('20240321131246', '202403211312463', 'HO75', 'AKL7539', '2024-03-0068', '202402291316253', 2, '', 1150, '5', '2024-03-18', 0),
('20240321132031', '202403211320310', 'HO75', 'AKL4862', '2024-03-0062', '202402071059050', 1, '', 300, '5', '2024-03-18', 0),
('20240323131543', '202403231315430', 'HO75', 'AKL7455', '2024-03-0065', '202402191622170', 1, '', 900, '22', '2024-03-18', 0),
('20240323133313', '202403231333131', 'HO75', 'AKL4862', '2024-03-0063', '202402071059051', 1, '', 2200, '6', '2024-03-18', 0),
('20240323133313', '202403231333132', 'HO75', 'AKL4862', '2024-03-0063', '202402071059052', 1, '', 700, '6', '2024-03-18', 0),
('20240323140007', '202403231400071', 'HO75', 'AKL23558', '2024-03-0080', '202403091551511', 1, '', 18500, '6', '2024-03-18', 0),
('20240323141406', '202403231414060', 'HO75', 'AKL23558', '2024-03-0087', '202403091551510', 10, '', 3750, '22', '2024-03-16', 0),
('20240323142323', '202403231423231', 'HO75', 'AKL7539', '2024-03-0067', '202402291316251', 2, '', 1200, '3', '2024-03-18', 0),
('20240323142323', '202403231423234', 'HO75', 'AKL7539', '2024-03-0067', '202402291316254', 2, '', 600, '3', '2024-03-18', 0),
('20240331092147', '202403310921470', 'HO537', 'BGL18534', 'BGL-2024-03-0096', '202403231333000', 1, 'CFO Sir', 156800, '14', '2024-03-24', 0),
('20240331092547', '202403310925470', 'HO537', 'BGL18417', 'BGL-2024-03-0088', '202402151308260', 1, '', 1100, '14', '2024-03-21', 0),
('20240331093209', '202403310932091', 'HO537', 'BGL18902', 'BGL-2024-03-0071', '202403101058181', 2, '', 1200, '22', '2024-03-17', 0),
('20240331093209', '202403310932092', 'HO537', 'BGL18902', 'BGL-2024-03-0071', '202403101058182', 3, '', 700, '22', '2024-03-17', 0),
('20240331093209', '202403310932093', 'HO537', 'BGL18902', 'BGL-2024-03-0071', '202403101058183', 3, '', 1000, '22', '2024-03-17', 0),
('20240331093542', '202403310935420', 'HO537', 'BGL18910', 'BGL-2024-03-0073', '202403101122180', 1, '', 6000, '22', '2024-03-17', 0),
('20240331093748', '202403310937480', 'HO537', 'BGL18911', 'BGL-2024-03-0074', '202403021720580', 1, '', 7000, '21', '2024-03-17', 0),
('20240331094155', '202403310941552', 'HO537', 'BGL18904', 'BGL-2024-03-0059', '202403101117500', 2, '', 600, '11', '2024-03-17', 0),
('20240331153701', '202403311537012', 'ho75', 'BWL13836', '2024-03-0086', '202403051100412', 1, 'USB MOUSE', 400, '14', '2024-03-18', 0),
('20240331153701', '202403311537013', 'ho75', 'BWL13836', '2024-03-0086', '202403051100413', 2, '', 750, '14', '2024-03-18', 0),
('20240331153701', '202403311537014', 'ho75', 'BWL13836', '2024-03-0086', '202403051100414', 1, '', 4500, '14', '2024-03-18', 0),
('20240331160200', '202403311602000', 'ho75', 'BWL13836', '2024-03-0085', '202403051100410', 1, '', 2500, '5', '2024-03-18', 0),
('20240331160200', '202403311602001', 'ho75', 'BWL13836', '2024-03-0085', '202403051100411', 1, '', 2500, '5', '2024-03-18', 0),
('20240401132127', '202404011321270', 'ho75', 'ATL278088', '2024-03-0016', '202404011312460', 1, '', 48000, '9', '2024-03-06', 0),
('20240401133656', '202404011336560', 'ho75', 'ATL278101', '2024-02-0017', '202403041524300', 1, '', 418000, '14', '2024-02-04', 0),
('20240401133656', '202404011336561', 'ho75', 'ATL278101', '2024-02-0017', '202403041524301', 1, '', 51000, '14', '2024-02-04', 0),
('20240401133656', '202404011336562', 'ho75', 'ATL278101', '2024-02-0017', '202403041524302', 4, '', 77650, '14', '2024-02-04', 0),
('20240401133656', '202404011336563', 'ho75', 'ATL278101', '2024-02-0017', '202403041524303', 1, '', 35000, '14', '2024-02-04', 0),
('20240401141218', '202404011412180', 'ho75', 'AKL7564', '2024-03-0064', '202403041625550', 1, '', 4500, '14', '2024-03-18', 0),
('20240401142352', '202404011423522', 'ho75', 'AKL23558', '2024-03-0077', '202403091551512', 1, '', 19400, '23', '2024-03-23', 0),
('20240402100230', '202404021002300', 'ho75', 'AKL7562', '2024-03-0015', '202403051511320', 1, '', 10700, '14', '2024-03-05', 0),
('20240402100230', '202404021002301', 'ho75', 'AKL7562', '2024-03-0015', '202403051511321', 1, '', 2400, '14', '2024-03-05', 0),
('20240402105651', '202404021056510', 'ho75', 'ATL278097', '2024-03-0094', '202403191249350', 2, '', 1500, '11', '2024-03-21', 0),
('20240402105651', '202404021056511', 'ho75', 'ATL278097', '2024-03-0094', '202403191249351', 4, '', 1500, '11', '2024-03-21', 0),
('20240402112041', '202404021120410', 'ho75', 'ATL2864', '2024-03-0093', '202403171523200', 1, '', 1150, '22', '2024-03-21', 0),
('20240402112041', '202404021120411', 'ho75', 'ATL2864', '2024-03-0093', '202403171523201', 1, '', 700, '22', '2024-03-21', 0),
('20240402112857', '202404021128574', 'ho75', 'ATL278097', '2024-03-0096', '202403191249354', 2, '', 1000, '22', '2024-03-21', 0),
('20240402112857', '202404021128575', 'ho75', 'ATL278097', '2024-03-0096', '202403191249355', 6, '', 700, '22', '2024-03-21', 0),
('20240402112857', '202404021128579', 'ho75', 'ATL278097', '2024-03-0096', '202403191249359', 1, '', 4300, '22', '2024-03-21', 0),
('20240403091436', '202404030914362', 'ho75', 'ATL278097', '2024-03-0095', '202403191249352', 4, '', 750, '14', '2024-03-21', 0),
('20240403091436', '202404030914363', 'ho75', 'ATL278097', '2024-03-0095', '202403191249353', 4, '', 400, '14', '2024-03-21', 0),
('20240403121127', '202404031211270', 'HO75', 'AKL4864', '2024-03-0088', '202403161441470', 1, '', 800, '6', '2024-03-24', 0),
('20240403123550', '202404031235500', 'HO537', 'BRL16876', 'BRL-2024-03-0001', '202404031224240', 2, '', 3200, '6', '2024-05-11', 0),
('20240403123550', '202404031235501', 'HO537', 'BRL16876', 'BRL-2024-03-0003', '202404031224241', 1, '', 2800, '6', '2024-06-17', 0),
('20240403123550', '202404031235502', 'HO537', 'BRL16876', 'BRL-2024-03-0004', '202404031224242', 6, '', 1200, '11', '2024-06-18', 0),
('20240403123550', '202404031235503', 'HO537', 'BRL16876', 'BRL-2024-03-0005', '202404031224243', 5, '', 400, '14', '2024-06-18', 0),
('20240403124252', '202404031242520', 'HO537', 'BASL18421', 'BASL-2024-03-0007', '202403101209480', 1, '', 1500, '6', '2024-04-17', 0),
('20240404114941', '202404041149410', 'ho75', 'AKL7462', '2024-03-0049', '202403101701110', 1, '', 66000, '14', '2024-02-24', 0),
('20240404154529', '202404041545296', 'ho75', 'ATL278097', '2024-03-0106', '202403191249356', 1, '', 2000, '11', '2024-03-21', 0),
('20240404154529', '202404041545297', 'ho75', 'ATL278097', '2024-03-0105', '202403191249357', 1, '', 1050, '12', '2024-03-21', 0),
('20240407131029', '202404071310295', 'ho75', 'ATL278088', '2024-03-0050', '202404011312465', 2, '', 1300, '6', '2024-03-13', 0),
('20240407134216', '202404071342161', 'ho75', 'ATL278088', '2024-03-0017', '202404011312461', 1, '', 11800, '23', '2024-04-07', 0),
('20240407134216', '202404071342162', 'ho75', 'ATL278088', '2024-03-0017', '202404011312462', 1, '', 1400, '23', '2024-04-07', 0),
('20240407134216', '202404071342163', 'ho75', 'ATL278088', '2024-03-0017', '202404011312463', 24, '', 330, '23', '2024-04-07', 0),
('20240407134216', '202404071342164', 'ho75', 'ATL278088', '2024-03-0017', '202404011312464', 40, '', 35, '23', '2024-04-07', 0),
('20240417114423', '202404171144238', 'ho75', 'ATL278097', '2024-03-0105', '202403191249358', 1, '', 1050, '12', '2024-03-24', 0),
('20240420113251', '202404201132510', 'ho75', 'AKL7598', '2024-04-0019', '202403301006390', 4, '', 1400, '6', '2024-04-03', 0),
('20240420113251', '202404201132511', 'ho75', 'AKL7598', '2024-04-0019', '202403301006391', 40, '', 22.5, '6', '2024-04-03', 0),
('20240420114308', '202404201143080', 'ho75', 'AKL18540', '2024-04-0002', '202403251128560', 1, '', 66000, '14', '2024-04-01', 0),
('20240422160246', '202404221602460', 'ho75', 'AKL7566', '2024-03-0096', '202403051651580', 1, '', 87000, '14', '2024-03-27', 0),
('20240422164353', '202404221643530', 'ho75', 'AKL7539', '2024-03-0066', '202402291316250', 3, '', 750, '14', '2024-03-18', 0),
('20240422164353', '202404221643532', 'ho75', 'AKL7539', '2024-03-0066', '202402291316252', 4, '', 400, '14', '2024-03-18', 0),
('20240422165321', '202404221653210', 'ho75', 'AKL7568', '2024-03-0089', '202403071652020', 1, '', 8200, '6', '2024-03-24', 0),
('20240424102644', '202404241026441', 'ho75', 'BWL14114', '2024-04-0044', '202403301539431', 1, '', 8500, '8', '2024-04-07', 0),
('20240424131156', '202404241311560', 'HO537', 'BGL13063', 'BGL-2024-03-0147', '202404241305580', 2, '', 10000, '5', '2024-04-24', 0),
('20240424134529', '202404241345290', 'HO537', 'BGL18432', 'BGL-2024-04-0014', '202404011008450', 1, '', 4500, '11', '2024-04-04', 0),
('20240424135057', '202404241350570', 'HO537', 'BGL18434', 'BGL-2024-04-0013', '202403311015500', 1, '', 3300, '8', '2024-04-03', 0),
('20240424135057', '202404241350571', 'HO537', 'BGL18434', 'BGL-2024-04-0013', '202403311015501', 1, '', 1500, '8', '2024-04-03', 0),
('20240424135057', '202404241350572', 'HO537', 'BGL18434', 'BGL-2024-04-0013', '202403311015502', 1, '', 3000, '8', '2024-04-03', 0),
('20240424135057', '202404241350573', 'HO537', 'BGL18434', 'BGL-2024-04-0013', '202403311015503', 1, '', 4500, '8', '2024-04-03', 0),
('20240424135057', '202404241350574', 'HO537', 'BGL18434', 'BGL-2024-04-0013', '202403311015504', 5, '', 450, '8', '2024-04-03', 0),
('20240424135057', '202404241350575', 'HO537', 'BGL18434', 'BGL-2024-04-0013', '202403311023270', 1, '', 1500, '8', '2024-04-03', 0),
('20240424135949', '202404241359490', 'HO537', 'BGL18259', 'BGL-2024-04-0012', '202404241221590', 1, '', 3000, '8', '2024-04-03', 0),
('20240424135949', '202404241359491', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241221591', 5, '', 450, '8', '2024-04-03', 0),
('20240424135949', '202404241359492', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241221592', 1, '', 4500, '8', '2024-04-03', 0),
('20240424135949', '202404241359493', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241221593', 1, '', 4000, '8', '2024-04-03', 0),
('20240424135949', '202404241359494', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241221594', 1, '', 3300, '8', '2024-04-03', 0),
('20240424135949', '202404241359495', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241221595', 1, '', 1500, '8', '2024-04-03', 0),
('20240424135949', '202404241359496', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241221596', 1, '', 1000, '8', '2024-04-03', 0),
('20240424135949', '202404241359497', 'HO537', 'BGL18259', 'BGL-2024-04-0013', '202404241225150', 1, '', 2250, '8', '2024-04-03', 0),
('20240424141119', '202404241411191', 'HO537', 'BGL18968', 'BGL-2024-04-0026', '202404241114121', 2, '', 8500, '8', '2024-04-07', 0),
('20240424141803', '202404241418034', 'HO537', 'BGL18969', 'BGL-2024-04-0027', '202404241153484', 1, '', 8500, '8', '2024-04-07', 0),
('20240424142056', '202404241420563', 'HO537', 'BGL18969', 'BGL-2024-04-0028', '202404241153483', 12, '', 2000, '8', '2024-04-07', 0),
('20240427123335', '202404271233350', 'ho75', 'ATL278361', '2024-04-0072', '202403311519430', 1, '', 10600, '14', '2024-04-21', 0),
('20240427141703', '202404271417030', 'ho75', 'ATL21320', '2024-04-0071', '202404021205370', 2, '', 4300, '22', '2024-04-21', 0),
('20240427142808', '202404271428080', 'ho75', 'ATL278363', '2024-04-0073', '202404211622460', 2, '', 2800, '22', '2024-04-22', 0),
('20240427143825', '202404271438251', 'ho75', 'ATL278363', '2024-04-0084', '202404211622461', 4, '', 1400, '21', '2024-04-22', 0),
('20240427143825', '202404271438252', 'ho75', 'ATL278363', '2024-04-0084', '202404211622462', 1, '', 3350, '21', '2024-04-22', 0),
('20240427145307', '202404271453070', 'ho75', 'ATL278362', '2024-04-0083', '202404021117250', 1, '', 8200, '14', '2024-04-04', 0),
('20240504162858', '202405041628580', 'ho75', 'ATL278371', '2024-04-0131', '202404281656330', 1, '', 4300, '22', '2024-04-29', 0),
('20240505095100', '202405050951000', 'HO537', 'BGL18445', 'BGL-2024-04-0070', '202404211439370', 1, '', 1950, '12', '2024-04-25', 0),
('20240505095335', '202405050953350', 'HO537', 'BGL18443', 'BGL-2024-04-0071', '202404211437450', 1, '', 1150, '12', '2024-04-25', 0),
('20240505100011', '202405051000111', 'HO537', 'BGL18970', 'BGL-2024-04-0061', '202404241136241', 10, '', 400, '14', '2024-04-21', 0),
('20240505100453', '202405051004536', 'HO537', 'BGL18970', 'BGL-2024-04-0061', '202405051003320', 6, '', 700, '14', '2024-04-21', 0),
('20240505100805', '202405051008050', 'HO537', 'BGL18444', 'BGL-2024-04-0087', '202404251013310', 1, 'Anwar -PPC', 86000, '14', '2024-04-28', 0),
('20240505101113', '202405051011130', 'HO537', 'BGL19151', 'BGL-2024-04-0072', '202404231758140', 3, '', 500, '5', '2024-04-25', 0),
('20240505101113', '202405051011131', 'HO537', 'BGL19151', 'BGL-2024-04-0072', '202404231758141', 1, '', 3000, '5', '2024-04-25', 0),
('20240505102417', '202405051024170', 'HO537', 'BGL18435', 'BGL-2024-04-0058', '202403311046320', 2, '', 3850, '27', '2024-04-21', 0),
('20240505102719', '202405051027190', 'HO537', 'BGL18970', 'BGL-2024-04-0030', '202404241136240', 6, '', 1400, '21', '2024-04-07', 0),
('20240505102719', '202405051027195', 'HO537', 'BGL18970', 'BGL-2024-04-0030', '202404241136245', 1, '', 7000, '21', '2024-04-07', 0),
('20240505103724', '202405051037244', 'HO537', 'BGL18970', 'BGL-2024-04-0031', '202404241136244', 4, '', 700, '22', '2024-04-07', 0),
('20240505104302', '202405051043020', 'HO537', 'BGL18969', 'BGL-2024-04-0059', '202404241153480', 5, '', 1150, '22', '2024-04-21', 0),
('20240505104302', '202405051043021', 'HO537', 'BGL18969', 'BGL-2024-04-0059', '202404241153481', 2, '', 110, '22', '2024-04-21', 0),
('20240505104302', '202405051043022', 'HO537', 'BGL18969', 'BGL-2024-04-0059', '202404241153482', 6, '', 2800, '22', '2024-04-21', 0),
('20240505104940', '202405051049400', 'HO537', 'BGL18968', 'BGL-2024-04-0060', '202404241114120', 2, '', 1100, '22', '2024-04-21', 0),
('20240505105203', '202405051052033', 'HO537', 'BGL18970', 'BGL-2024-04-0062', '202404241136243', 2, '', 3750, '22', '2024-04-21', 0),
('20240505105937', '202405051059370', 'HO537', 'BGL18947', 'BGL-2024-04-0086', '202404241251190', 2, '', 2300, '22', '2024-04-28', 0),
('20240505112331', '202405051123312', 'HO537', 'BGL18970', 'BGL-2024-04-0089', '202404241136242', 5, '', 90, '22', '2024-04-28', 0),
('20240505115814', '202405051158140', 'ho75', 'AKL7200', '2024-05-0001', '202404281049400', 8, '', 2000, '10', '2024-05-05', 0),
('20240505125141', '202405051251410', 'HO537', 'BGL18997', 'BGL-2024-04-0088', '202405051138040', 12, '', 1600, '10', '2024-04-28', 0),
('20240505125141', '202405051251411', 'HO537', 'BGL18997', 'BGL-2024-04-0088', '202405051138041', 3, '', 4000, '10', '2024-04-28', 0),
('20240505125141', '202405051251412', 'HO537', 'BGL18997', 'BGL-2024-04-0088', '202405051138042', 8, '', 1550, '10', '2024-04-28', 0),
('20240506132550', '202405061325503', 'ho75', 'BWL14121', '2024-04-0066', '202404171308593', 1, '', 4300, '22', '2024-04-27', 0),
('20240506141851', '202405061418510', 'ho75', 'BWL14123', '2024-04-0068', '202404201341140', 1, '', 3300, '8', '2024-04-23', 0),
('20240506141851', '202405061418511', 'ho75', 'BWL14123', '2024-04-0068', '202404201341141', 1, '', 1500, '8', '2024-04-23', 0),
('20240506141851', '202405061418512', 'ho75', 'BWL14123', '2024-04-0068', '202404201341142', 1, '', 1000, '8', '2024-04-23', 0),
('20240506141851', '202405061418513', 'ho75', 'BWL14123', '2024-04-0068', '202404201341143', 1, '', 3000, '8', '2024-04-23', 0),
('20240506141851', '202405061418514', 'ho75', 'BWL14123', '2024-04-0068', '202404201420280', 1, '', 2250, '8', '2024-05-23', 0),
('20240506142635', '202405061426350', 'ho75', 'BWL14114', '2024-04-0065', '202403301539430', 1, '', 8200, '14', '2024-04-22', 0),
('20240506144250', '202405061442500', 'ho75', 'BWL14121', '2024-04-0067', '202404171308590', 2, '', 700, '14', '2024-04-23', 0),
('20240506144250', '202405061442501', 'ho75', 'BWL14121', '2024-04-0067', '202404171308591', 2, '', 400, '14', '2024-04-23', 0),
('20240506144250', '202405061442502', 'ho75', 'BWL14121', '2024-04-0067', '202404171308592', 1, '', 800, '14', '2024-04-23', 0),
('20240509151634', '202405091516340', 'ho75', 'AKL7702', '2024-05-0005', '202404211552130', 1, '', 2950, '11', '2024-05-02', 0),
('20240509153537', '202405091535370', 'ho75', 'AKL7704', '2024-05-0006', '202404211109280', 1, '', 2950, '11', '2024-05-03', 0),
('20240509154839', '202405091548390', 'ho75', 'AKL7408', '2024-05-0008', '202404211150210', 1, '', 7300, '11', '2024-05-02', 0),
('20240509162926', '202405091629260', 'ho75', 'AKL7609', '2024-05-0009', '202404281700520', 1, '', 1300, '6', '2024-05-02', 0),
('20240509163918', '202405091639180', 'ho75', 'AKL7474', '2024-05-0004', '202404030951510', 1, '', 5800, '5', '2024-05-02', 0),
('20240509171818', '202405091718180', 'ho75', 'AKL7712', '2024-05-0010', '202404281112480', 1, '', 3900, '6', '2024-05-02', 0),
('20240511155506', '202405111555062', 'ho75', 'ATL278371', '2024-05-0002', '202404281656332', 4, '', 400, '14', '2024-05-02', 0),
('20240511155506', '202405111555063', 'ho75', 'ATL278371', '2024-05-0002', '202404281656333', 4, '', 800, '14', '2024-05-02', 0),
('20240511155506', '202405111555064', 'ho75', 'ATL278371', '2024-05-0002', '202404281656334', 4, '', 700, '14', '2024-05-02', 0),
('20240515121524', '202405151215240', 'ho75', 'AKL7695', '2024-05-0040', '202404291125100', 1, '', 12000, '10', '2024-05-09', 0),
('20240515121524', '202405151215241', 'ho75', 'AKL7695', '2024-05-0040', '202404291125101', 4, '', 1550, '10', '2024-05-09', 0),
('20240515123047', '202405151230471', 'ho75', 'AKL7762', '2024-05-0050', '202405021130511', 2, '', 1150, '22', '2024-05-09', 0),
('20240515123047', '202405151230473', 'ho75', 'AKL7762', '2024-05-0050', '202405021130513', 3, '', 180, '22', '2024-05-09', 0),
('20240515124450', '202405151244500', 'ho75', 'AKL7717', '2024-05-0049', '202405041513330', 1, '', 4300, '22', '2024-05-09', 0),
('20240515125657', '202405151256571', 'ho75', 'AKL7716', '2024-05-0046', '202405041517241', 1, '', 4300, '22', '2024-05-09', 0),
('20240516115133', '202405161151330', 'ho75', 'BWL14145', '2024-05-0031', '202405081019220', 1, '', 6000, '6', '2024-05-10', 0),
('20240516153806', '202405161538060', 'ho75', 'AKL7656', '2024-04-0049', '202403301242030', 1, '', 2800, '22', '2024-04-21', 0),
('20240516155041', '202405161550410', 'ho75', 'AKL7674', '2024-04-0074', '202404201115100', 1, '', 4300, '22', '2024-04-28', 0),
('20240516165041', '202405161650410', 'ho75', 'AKL7657', '2024-04-0080', '202403311324320', 1, '', 1600, '6', '2024-04-29', 0),
('20240516165912', '202405161659122', 'ho75', 'AKL7598', '2024-04-0052', '202403301006392', 3, '', 700, '14', '2024-04-22', 0),
('20240516165912', '202405161659123', 'ho75', 'AKL7598', '2024-04-0052', '202403301006393', 4, '', 1600, '14', '2024-04-22', 0),
('20240516171357', '202405161713570', 'ho75', 'AKL7527', '2024-04-0039', '202403251307190', 8, '', 2000, '10', '2024-04-07', 0),
('20240516173432', '202405161734320', 'ho75', 'AKL7611', '2024-04-0084', '202404281704570', 1, '', 4300, '22', '2024-04-29', 0),
('20240516174930', '202405161749300', 'ho75', 'ATL2906', '2024-04-0093', '202404231323180', 1, '', 17000, '8', '2024-04-24', 0),
('20240516174930', '202405161749301', 'ho75', 'ATL2906', '2024-04-0093', '202404231323181', 1, '', 3000, '8', '2024-04-24', 0),
('20240516174930', '202405161749302', 'ho75', 'ATL2906', '2024-04-0093', '202404231323182', 1, '', 1000, '8', '2024-04-24', 0),
('20240516174930', '202405161749303', 'ho75', 'ATL2906', '2024-04-0093', '202404231323183', 1, '', 2800, '8', '2024-04-24', 0),
('20240516174930', '202405161749304', 'ho75', 'ATL2906', '2024-04-0093', '202404231323184', 1, '', 1800, '8', '2024-04-24', 0),
('20240518114047', '202405181140470', 'ho75', 'AKL7100', '2024-05-0056', '202402041107510', 1, '', 6500, '5', '2024-05-10', 0),
('20240518114941', '202405181149410', 'ho75', 'AKL7762', '2024-05-0055', '202405021130510', 4, '', 1400, '11', '2024-05-10', 0),
('20240520104428', '202405201044280', 'ho75', 'AKL7780', '2024-05-0072', '202405061304530', 1, '', 1100, '6', '2024-05-15', 0),
('20240520105513', '202405201055130', 'ho75', 'AKL7567', 'CASH-0524', '202403091708450', 1, '', 37000, '4', '2024-05-15', 0),
('20240520113925', '202405201139250', 'ho75', 'AKL4897', '2024-03-0061', '202405201127500', 1, '', 2000, '6', '2024-05-18', 0),
('20240521172331', '202405211723315', 'HO537', 'BGL19229', 'BGL-2024-05-0062', '202405211554095', 12, '', 2000, '11', '2024-05-16', 0),
('20240521172911', '202405211729111', 'HO537', 'BGL19227', 'BGL-2024-05-0039', '202405211547551', 2, '', 700, '22', '2024-05-10', 0),
('20240521172911', '202405211729112', 'HO537', 'BGL19227', 'BGL-2024-05-0039', '202405211547552', 1, '', 2400, '22', '2024-05-10', 0),
('20240521173648', '202405211736480', 'HO537', 'BGL18448', 'BGL-2023-12-0039', '202405211734070', 1, '', 299000, '9', '2023-12-14', 0),
('20240521174537', '202405211745370', 'HO537', 'BGL19155', 'BGL-2024-05-0043', '202405211740420', 1, '', 11340, '30', '2024-05-11', 0),
('20240521174752', '202405211747520', 'HO537', 'BGL19227', 'BGL-2024-05-0038', '202405211547550', 2, '', 8500, '8', '2024-05-09', 0),
('20240521175111', '202405211751114', 'HO537', 'BGL19229', 'BGL-2024-05-0034', '202405211554094', 2, '', 8500, '8', '2024-05-09', 0),
('20240521175541', '202405211755412', 'HO537', 'BGL19228', 'BGL-2024-05-0030', '202405211614312', 4, '', 6500, '5', '2024-05-08', 0),
('20240521181143', '202405211811430', 'HO537', 'BGL19228', 'BGL-2024-05-0028', '202405211614310', 4, '', 800, '14', '2024-05-08', 0),
('20240521181143', '202405211811431', 'HO537', 'BGL19228', 'BGL-2024-05-0028', '202405211614311', 3, '', 4300, '22', '2024-05-08', 0),
('20240521181518', '202405211815180', 'HO537', 'BGL19230', 'BGL-2024-0040', '202405211557390', 5, '', 1400, '11', '2024-05-10', 0),
('20240521182302', '202405211823020', 'HO537', 'BGL19229', 'BGL-2024-05-0033', '202405211554090', 5, '', 1150, '22', '2024-05-09', 0),
('20240521182302', '202405211823021', 'HO537', 'BGL19229', 'BGL-2024-05-0033', '202405211554091', 1, '', 1200, '22', '2024-05-09', 0),
('20240521182302', '202405211823022', 'HO537', 'BGL19229', 'BGL-2024-05-0033', '202405211554092', 1, '', 1100, '22', '2024-05-09', 0),
('20240521182302', '202405211823023', 'HO537', 'BGL19229', 'BGL-2024-05-0033', '202405211554093', 3, '', 2800, '22', '2024-05-09', 0),
('20240521182735', '202405211827353', 'HO537', 'BGL19230', 'BGL-2024-05-0037', '202405211557393', 2, '', 4300, '22', '2024-05-21', 0),
('20240521182735', '202405211827354', 'HO537', 'BGL19230', 'BGL-2024-05-0037', '202405211557394', 3, '', 180, '22', '2024-05-21', 0),
('20240529144959', '202405291449590', 'HO537', 'BGL19165', 'BGL-2024-05-0100', '202405291448410', 2, '', 1800, '11', '2024-05-25', 0),
('20240529144959', '202405291449591', 'HO537', 'BGL19165', 'BGL-2024-05-0100', '202405291448411', 1, '', 1150, '11', '2024-05-25', 0),
('20240529145518', '202405291455181', 'HO537', 'BGL19230', 'BGL-2024-05-0070', '202405211557391', 10, '', 400, '14', '2024-05-19', 0),
('20240529145518', '202405291455182', 'HO537', 'BGL19230', 'BGL-2024-05-0070', '202405211557392', 6, '', 800, '14', '2024-05-19', 0),
('20240529154414', '202405291544140', 'HO537', 'BGL19275', 'BGL-2024-05-0075', '202405211702510', 1, '', 190400, '23', '2024-05-19', 0),
('20240529162640', '202405291626400', 'HO537', 'BGL19270', 'BGL-2024-05-0089', '202405291625430', 1, '', 8500, '12', '2024-05-29', 0),
('20240529163218', '202405291632180', 'HO537', 'BGL19158', 'BGL-2024-05-0074', '202405291629270', 1, '', 19500, '23', '2024-05-29', 0),
('20240603111942', '202406031119420', 'HO95', 'BGL19161', 'BGL-2024-05-0105', '202405211532070', 8, '', 18000, '31', '2024-06-03', 0),
('20240603112103', '202406031121030', 'HO95', 'BGL19154', 'BGL2024-05-0082', '202405211716230', 1, '', 30000, '5', '2024-05-23', 0),
('20240609150744', '202406091507440', 'ho75', 'ATL2866', '2024-05-0116', '202405181221180', 1, '', 8200, '6', '2024-05-29', 0),
('20240609151709', '202406091517090', 'ho75', 'ATL278392', '2024-05-0131', '202405291120470', 2, '', 1500, '', '2024-06-09', 0),
('20240609151709', '202406091517091', 'ho75', 'ATL278392', '2024-05-0131', '202405291120471', 2, '', 1500, '', '2024-06-09', 0),
('20240609151709', '202406091517092', 'ho75', 'ATL278392', '2024-05-0131', '202405291120472', 2, '', 2800, '', '2024-06-09', 0),
('20240609152417', '202406091524170', 'ho75', 'ATL278224', '2024-05-0130', '202405291124470', 2, '', 2300, '22', '2024-05-30', 0),
('20240609152417', '202406091524171', 'ho75', 'ATL278224', '2024-05-0130', '202405291124471', 2, '', 2300, '22', '2024-05-30', 0),
('20240613163112', '202406131631120', 'ho75', 'BWL12207', '2024-06-0002', '202405291109370', 1, '', 2500, '22', '2024-06-01', 0),
('20240613163112', '202406131631121', 'ho75', 'BWL12207', '2024-06-0002', '202405291109371', 1, '', 2500, '22', '2024-06-01', 0),
('20240613163112', '202406131631122', 'ho75', 'BWL12207', '2024-06-0002', '202405291109372', 1, '', 700, '22', '2024-06-01', 0),
('20240627102836', '202406271028360', 'ho75', 'ATL19062', '2024-06-0091', '202406271027330', 1, '', 79700, '14', '2024-06-13', 0),
('20240629152719', '202406291527190', 'HO537', 'BGL19159', 'BGL-2024-06-0004', '202406291520220', 1, '', 13200, '14', '2024-06-29', 0),
('20240629152719', '202406291527191', 'HO537', 'BGL19159', 'BGL-2024-06-0004', '202406291520221', 1, '', 2700, '14', '2024-06-29', 0),
('20240629152719', '202406291527192', 'HO537', 'BGL19159', 'BGL-2024-06-0004', '202406291520222', 1, '', 10800, '14', '2024-06-29', 0),
('20240629152719', '202406291527193', 'HO537', 'BGL19159', 'BGL-2024-06-0004', '202406291520223', 1, '', 2900, '14', '2024-06-29', 0),
('20240629152719', '202406291527194', 'HO537', 'BGL19159', 'BGL-2024-06-0004', '202406291520224', 1, '', 8200, '14', '2024-06-29', 0),
('20240629154346', '202406291543460', 'HO537', 'BGL19329', 'BGL-2024-06-0033', '202406101332260', 2, '', 1100, '22', '2024-06-08', 0),
('20240629154346', '202406291543461', 'HO537', 'BGL19329', 'BGL-2024-06-0033', '202406101332261', 1, '', 9800, '22', '2024-06-29', 0),
('20240629154751', '202406291547510', 'HO537', 'BGL19327', 'BGL-2024-06-0044', '202406101345540', 4, '', 1150, '22', '2024-06-08', 0),
('20240629154751', '202406291547511', 'HO537', 'BGL19327', 'BGL-2024-06-0044', '202406101345541', 4, '', 1000, '22', '2024-06-08', 0),
('20240629154751', '202406291547512', 'HO537', 'BGL19327', 'BGL-2024-06-0044', '202406101345542', 2, '', 1200, '22', '2024-06-08', 0),
('20240629154751', '202406291547513', 'HO537', 'BGL19327', 'BGL-2024-06-0044', '202406101345543', 2, '', 2800, '22', '2024-06-08', 0),
('20240629155413', '202406291554130', 'HO537', 'BGL19354', 'BGL-2024-06-0050', '202406101338210', 3, '', 4300, '22', '2024-06-09', 0),
('20240629155413', '202406291554131', 'HO537', 'BGL19354', 'BGL-2024-06-0050', '202406101338211', 1, '', 900, '22', '2024-06-09', 0),
('20240629155658', '202406291556582', 'HO537', 'BGL19330', 'BGL-2024-06-0048', '202406101350252', 2, '', 4300, '22', '2024-06-08', 0),
('20240629155936', '202406291559364', 'HO537', 'BGL19327', 'BGL-2024-06-0045', '202406101345544', 2, '', 8500, '8', '2024-06-08', 0),
('20240629160138', '202406291601382', 'HO537', 'BGL19329', 'BGL-2024-06-0035', '202406101332262', 2, '', 8500, '8', '2024-06-08', 0),
('20240629160702', '202406291607020', 'HO537', 'BGL19170', 'BGL-2024-06-028', '202405261801250', 10, '', 4200, '32', '2024-06-06', 0),
('20240629161003', '202406291610030', 'HO537', 'BGL19177', 'BGL-2024-06-0032', '202406061734290', 1, '', 48000, '9', '2024-06-06', 0),
('20240629182603', '202406291826035', 'HO537', 'BGL19327', 'BGL-2024-06-0046', '202406101345545', 12, '', 2000, '11', '2024-06-08', 0),
('20240629183513', '202406291835130', 'HO537', 'BGL19061', 'BGL-2024-06-0001', '202405261334220', 1, '', 65000, '14', '2024-06-01', 0),
('20240629183945', '202406291839452', 'HO537', 'BGL19354', 'BGL-2024-06-0051', '202406101338212', 3, '', 6100, '12', '2024-06-29', 0),
('20240629184222', '202406291842220', 'HO537', 'BGL19330', 'BGL-06-0047', '202406101350250', 1, '', 7000, '11', '2024-06-08', 0),
('20240629184620', '202406291846203', 'HO537', 'BGL19329', 'BGL-2024-06-0036', '202406101332263', 3, '', 3850, '27', '2024-06-08', 0),
('20240630094823', '202406300948230', 'HO537', 'BGL18440', 'BGL-2024-04-0074', '202404040959110', 1, 'Smart-contact-01727554031', 297969, '30', '2024-06-30', 0),
('20240630095128', '202406300951281', 'HO537', 'BGL19330', 'BGL-2024-06-0049', '202406101350251', 6, '', 400, '14', '2024-06-30', 0),
('20240630095445', '202406300954450', 'HO537', 'BGL19176', 'BGL-2024-06-0031', '202406061736590', 3, '', 2500, '6', '2024-06-06', 0),
('20240630100147', '202406301001470', 'HO537', 'BGL19174', 'BGL-2024-06-0029', '202406101253440', 1, '', 3000, '8', '2024-06-06', 0),
('20240630100147', '202406301001471', 'HO537', 'BGL19174', 'BGL-2024-06-0029', '202406101253441', 1, '', 1000, '8', '2024-06-06', 0),
('20240630100147', '202406301001472', 'HO537', 'BGL19174', 'BGL-2024-06-0029', '202406101253442', 1, '', 900, '8', '2024-06-06', 0),
('20240630100147', '202406301001473', 'HO537', 'BGL19174', 'BGL-2024-06-0029', '202406101253443', 1, '', 4500, '8', '2024-06-06', 0),
('20240630100147', '202406301001474', 'HO537', 'BGL19174', 'BGL-2024-06-0029', '202406101253444', 1, '', 1800, '8', '2024-06-06', 0),
('20240630132150', '202406301321500', 'HO537', 'BGL19117', 'BGL-2024-05-0119', '202406301320270', 2, '', 1000, '12', '2024-05-30', 0),
('20240630132150', '202406301321501', 'HO537', 'BGL19117', 'BGL-2024-05-0119', '202406301320271', 1, '', 1650, '12', '2024-05-30', 0),
('20240704111333', '202407041113330', 'ho75', 'AKL7958', '2024-05-0110', '202405271300090', 2, '', 8500, '8', '2024-05-29', 0),
('20240704113248', '202407041132480', 'ho75', 'AKL7678', '2024-05-0109', '202405251647300', 1, '', 10000, '8', '2024-05-29', 0),
('20240704114333', '202407041143330', 'ho75', 'AKL7721', '2024-05-0074', '202405091451500', 1, '', 3000, '8', '2024-05-15', 0),
('20240704114333', '202407041143331', 'ho75', 'AKL7721', '2024-05-0074', '202405091451501', 1, '', 1000, '8', '2024-05-15', 0),
('20240704114333', '202407041143332', 'ho75', 'AKL7721', '2024-05-0074', '202405091451502', 1, '', 900, '8', '2024-05-15', 0),
('20240704114333', '202407041143333', 'ho75', 'AKL7721', '2024-05-0074', '202405091451503', 1, '', 2800, '8', '2024-05-15', 0),
('20240704114333', '202407041143334', 'ho75', 'AKL7721', '2024-05-0074', '202405091451504', 1, '', 4500, '8', '2024-05-15', 0),
('20240704114333', '202407041143335', 'ho75', 'AKL7721', '2024-05-0074', '202405091451505', 1, '', 1800, '8', '2024-05-15', 0),
('20240704134422', '202407041344220', 'ho75', 'AKL4866', '2024-05-0081', '202405161531300', 1, '', 5000, '11', '2024-05-19', 0),
('20240704150341', '202407041503410', 'ho75', 'AKL7714', '2024-05-0061', '202405041509500', 1, '', 2950, '11', '2024-05-11', 0),
('20240704150341', '202407041503411', 'ho75', 'AKL7714', '2024-05-0061', '202405041509501', 1, '', 6000, '11', '2024-05-11', 0),
('20240704155220', '202407041552200', 'ho75', 'AKL7778', '2024-05-0073', '202405051152500', 1, '', 3900, '6', '2024-05-15', 0),
('20240704160935', '202407041609350', 'ho75', 'AKL7786', '2024-05-0080', '202405131240590', 3, '', 2200, '22', '2024-05-19', 0),
('20240704160935', '202407041609351', 'ho75', 'AKL7786', '2024-05-0080', '202405131240591', 3, '', 2200, '22', '2024-05-19', 0),
('20240704162753', '202407041627530', 'ho75', 'AKL7716', '2024-05-0044', '202405041517240', 1, '', 800, '14', '2024-05-09', 0),
('20240704164336', '202407041643362', 'ho75', 'AKL7762', '2024-05-0051', '202405021130512', 5, '', 400, '14', '2024-05-09', 0),
('20240704165148', '202407041651480', 'ho75', 'AKL7783', '2024-05-0070', '202405091545580', 1, '', 8200, '14', '2024-05-14', 0);

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
('20240310154542', 'AKL7461'),
('20240311095300', 'BGL18301'),
('20240311102058', 'BGL18756'),
('20240311102841', 'BGL18780'),
('20240317143650', 'AKL7420'),
('20240320102008', 'AKL7453'),
('20240321100307', 'BGL18530'),
('20240321101401', 'BGL18902'),
('20240321105223', 'BGL18901'),
('20240321105721', 'BGL18901'),
('20240321110211', 'BGL18904'),
('20240321131246', 'AKL7539'),
('20240321132031', 'AKL4862'),
('20240323131543', 'AKL7455'),
('20240323133313', 'AKL4862'),
('20240323140007', 'AKL23558'),
('20240323141406', 'AKL23558'),
('20240323142323', 'AKL7539'),
('20240331092147', 'BGL18534'),
('20240331092547', 'BGL18417'),
('20240331093209', 'BGL18902'),
('20240331093542', 'BGL18910'),
('20240331093748', 'BGL18911'),
('20240331094155', 'BGL18904'),
('20240331153701', 'BWL13836'),
('20240331160200', 'BWL13836'),
('20240401131353', ''),
('20240401132127', 'ATL278088'),
('20240401133656', 'ATL278101'),
('20240401141218', 'AKL7564'),
('20240401142352', 'AKL23558'),
('20240402100230', 'AKL7562'),
('20240402105651', 'ATL278097'),
('20240402112041', 'ATL2864'),
('20240402112857', 'ATL278097'),
('20240403091436', 'ATL278097'),
('20240403121127', 'AKL4864'),
('20240403123550', 'BRL16876'),
('20240403124252', 'BASL18421'),
('20240404114941', 'AKL7462'),
('20240404154529', 'ATL278097'),
('20240407131029', 'ATL278088'),
('20240407134216', 'ATL278088'),
('20240417114423', 'ATL278097'),
('20240420113251', 'AKL7598'),
('20240420114308', 'AKL18540'),
('20240422160246', 'AKL7566'),
('20240422164353', 'AKL7539'),
('20240422165321', 'AKL7568'),
('20240424102644', 'BWL14114'),
('20240424131156', 'BGL13063'),
('20240424134529', 'BGL18432'),
('20240424135057', 'BGL18434'),
('20240424135949', 'BGL18259'),
('20240424141119', 'BGL18968'),
('20240424141803', 'BGL18969'),
('20240424142056', 'BGL18969'),
('20240427123335', 'ATL278361'),
('20240427141703', 'ATL21320'),
('20240427142808', 'ATL278363'),
('20240427143825', 'ATL278363'),
('20240427145307', 'ATL278362'),
('20240504162858', 'ATL278371'),
('20240505095100', 'BGL18445'),
('20240505095335', 'BGL18443'),
('20240505100011', 'BGL18970'),
('20240505100453', 'BGL18970'),
('20240505100805', 'BGL18444'),
('20240505101113', 'BGL19151'),
('20240505102417', 'BGL18435'),
('20240505102719', 'BGL18970'),
('20240505103724', 'BGL18970'),
('20240505104302', 'BGL18969'),
('20240505104940', 'BGL18968'),
('20240505105203', 'BGL18970'),
('20240505105937', 'BGL18947'),
('20240505112331', 'BGL18970'),
('20240505115814', 'AKL7200'),
('20240505125141', 'BGL18997'),
('20240506132550', 'BWL14121'),
('20240506141851', 'BWL14123'),
('20240506142635', 'BWL14114'),
('20240506144250', 'BWL14121'),
('20240509151634', 'AKL7702'),
('20240509153537', 'AKL7704'),
('20240509154839', 'AKL7408'),
('20240509162926', 'AKL7609'),
('20240509163918', 'AKL7474'),
('20240509171818', 'AKL7712'),
('20240511155506', 'ATL278371'),
('20240515121524', 'AKL7695'),
('20240515123047', 'AKL7762'),
('20240515124450', 'AKL7717'),
('20240515125657', 'AKL7716'),
('20240516115133', 'BWL14145'),
('20240516153806', 'AKL7656'),
('20240516155041', 'AKL7674'),
('20240516165041', 'AKL7657'),
('20240516165912', 'AKL7598'),
('20240516171357', 'AKL7527'),
('20240516173432', 'AKL7611'),
('20240516174930', 'ATL2906'),
('20240518114047', 'AKL7100'),
('20240518114941', 'AKL7762'),
('20240520104428', 'AKL7780'),
('20240520105513', 'AKL7567'),
('20240520113925', 'AKL4897'),
('20240521172331', 'BGL19229'),
('20240521172911', 'BGL19227'),
('20240521173648', 'BGL18448'),
('20240521174537', 'BGL19155'),
('20240521174752', 'BGL19227'),
('20240521175111', 'BGL19229'),
('20240521175541', 'BGL19228'),
('20240521181143', 'BGL19228'),
('20240521181518', 'BGL19230'),
('20240521182302', 'BGL19229'),
('20240521182735', 'BGL19230'),
('20240529144959', 'BGL19165'),
('20240529145518', 'BGL19230'),
('20240529154414', 'BGL19275'),
('20240529162640', 'BGL19270'),
('20240529163218', 'BGL19158'),
('20240603111942', 'BGL19161'),
('20240603112103', 'BGL19154'),
('20240603113213', 'BGL19154'),
('20240609150744', 'ATL2866'),
('20240609151709', 'ATL278392'),
('20240609152417', 'ATL278224'),
('20240613163112', 'BWL12207'),
('20240627102836', 'ATL19062'),
('20240629152719', 'BGL19159'),
('20240629154346', 'BGL19329'),
('20240629154751', 'BGL19327'),
('20240629155413', 'BGL19354'),
('20240629155658', 'BGL19330'),
('20240629155936', 'BGL19327'),
('20240629160138', 'BGL19329'),
('20240629160702', 'BGL19170'),
('20240629161003', 'BGL19177'),
('20240629182603', 'BGL19327'),
('20240629183513', 'BGL19061'),
('20240629183945', 'BGL19354'),
('20240629184222', 'BGL19330'),
('20240629184620', 'BGL19329'),
('20240630094823', 'BGL18440'),
('20240630095128', 'BGL19330'),
('20240630095445', 'BGL19176'),
('20240630100147', 'BGL19174'),
('20240630132150', 'BGL19117'),
('20240704111333', 'AKL7958'),
('20240704113248', 'AKL7678'),
('20240704114333', 'AKL7721'),
('20240704134422', 'AKL4866'),
('20240704150341', 'AKL7714'),
('20240704155220', 'AKL7778'),
('20240704160935', 'AKL7786'),
('20240704162753', 'AKL7716'),
('20240704164336', 'AKL7762'),
('20240704165148', 'AKL7783');

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
('AKL-CCTV-2', 'AKL', 'CCTV', 2),
('AKL-HDD-10', 'AKL', 'HDD', 10),
('AKL-HDD-11', 'AKL', 'HDD', 11),
('AKL-HDD-6', 'AKL', 'HDD', 6),
('AKL-HDD-8', 'AKL', 'HDD', 8),
('AKL-HDD-9', 'AKL', 'HDD', 9),
('AKL-IPT-10', 'AKL', 'IPT', 10),
('AKL-IPT-7', 'AKL', 'IPT', 7),
('AKL-IPT-8', 'AKL', 'IPT', 8),
('AKL-IPT-9', 'AKL', 'IPT', 9),
('AKL-LBTR-1', 'AKL', 'LBTR', 1),
('AKL-LPT-2', 'AKL', 'LPT', 2),
('AKL-LPT-3', 'AKL', 'LPT', 3),
('AKL-MBD-1', 'AKL', 'MBD', 1),
('AKL-MNT-2', 'AKL', 'MNT', 2),
('AKL-MNT-6', 'AKL', 'MNT', 6),
('AKL-SSD-1', 'AKL', 'SSD', 1),
('AKL-SSD-2', 'AKL', 'SSD', 2),
('AKL-SSD-3', 'AKL', 'SSD', 3),
('AKL-SSD-4', 'AKL', 'SSD', 4),
('AKL-SSD-5', 'AKL', 'SSD', 5),
('AKL-TABLET-2', 'AKL', 'TABLET', 2),
('ATL-CCTV-1', 'ATL', 'CCTV', 1),
('ATL-DKTP-1', 'ATL', 'DKTP', 1),
('ATL-HDD-1', 'ATL', 'HDD', 1),
('ATL-HDD-3', 'ATL', 'HDD', 3),
('ATL-IPT-1', 'ATL', 'IPT', 1),
('ATL-IPT-2', 'ATL', 'IPT', 2),
('ATL-IPT-3', 'ATL', 'IPT', 3),
('ATL-IPT-4', 'ATL', 'IPT', 4),
('ATL-IPT-5', 'ATL', 'IPT', 5),
('ATL-LKB-1', 'ATL', 'LKB', 1),
('ATL-LKB-2', 'ATL', 'LKB', 2),
('ATL-MBD-2', 'ATL', 'MBD', 2),
('ATL-MNT-3', 'ATL', 'MNT', 3),
('ATL-MNT-5', 'ATL', 'MNT', 5),
('ATL-NTSW-1', 'ATL', 'NTSW', 1),
('ATL-NTSW-2', 'ATL', 'NTSW', 2),
('ATL-OFUPS-2', 'ATL', 'OFUPS', 2),
('ATL-OUPS-1', 'ATL', 'OUPS', 1),
('ATL-RAM-1', 'ATL', 'RAM', 1),
('ATL-SCN-1', 'ATL', 'SCN', 1),
('ATL-SFP-1', 'ATL', 'SFP', 1),
('ATL-SVR-1', 'ATL', 'SVR', 1),
('ATL-TABLET-1', 'ATL', 'TABLET', 1),
('ATL-UKB-1', 'ATL', 'UKB', 1),
('ATL-Wifi-1', 'ATL', 'Wifi', 1),
('BGL-HDD-5', 'BGL', 'HDD', 5),
('BGL-LPT-1', 'BGL', 'LPT', 1),
('BGL-MNT-1', 'BGL', 'MNT', 1),
('BGL-MOB-1', 'BGL', 'MOB', 1),
('BWL-HDD-2', 'BWL', 'HDD', 2),
('BWL-HDD-4', 'BWL', 'HDD', 4),
('BWL-HDD-7', 'BWL', 'HDD', 7),
('BWL-IPT-6', 'BWL', 'IPT', 6),
('BWL-MNT-4', 'BWL', 'MNT', 4),
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
('20240306153709', 'ATL-IPT-3', 'AKL169', '2024-03-06', '0000-00-00', '', 1),
('20240313121708', 'AFL-TNR-1', 'HO690', '2024-03-13', '2024-03-13', '', 0),
('20240321104706', 'BGL-LPT-1', '45523', '2024-03-21', '2024-03-21', 'Sajjad-RND', 0),
('20240401132554', 'ATL-NTSW-2', 'ATL4574', '2024-04-01', '0000-00-00', '', 1),
('20240401140435', 'ATL-DKTP-1', 'ATL4574', '2024-04-01', '0000-00-00', '', 1),
('20240401140500', 'ATL-SVR-1', 'HO75', '2024-04-01', '0000-00-00', '', 1),
('20240401140526', 'ATL-OUPS-1', 'HO75', '2024-04-01', '0000-00-00', '', 1),
('20240401142229', 'AKL-HDD-8', 'AKL35329', '2024-04-01', '0000-00-00', '', 1),
('20240402101055', 'AKL-MBD-1', 'HO1019', '2024-04-02', '0000-00-00', '', 1),
('20240402113800', 'ATL-IPT-4', 'ATL4021', '2024-04-02', '0000-00-00', '', 1),
('20240407131544', 'ATL-SFP-1', 'ATL4574', '2024-04-07', '0000-00-00', '', 1),
('20240420121130', 'AKL-LPT-2', 'HO1198', '2024-04-07', '0000-00-00', '', 1),
('20240422163737', 'AKL-LPT-3', 'HO1191', '2024-04-22', '0000-00-00', '', 1),
('20240422170141', 'AKL-MNT-2', 'AKL43030', '2024-03-30', '0000-00-00', '', 1),
('20240427142537', 'ATL-IPT-5', 'ATL4021	', '2024-04-25', '0000-00-00', '', 1),
('20240506143710', 'BWL-MNT-4', 'BWL1675', '2024-04-24', '0000-00-00', '', 1),
('20240506145100', 'BWL-IPT-6', 'BWL53', '2024-04-25', '0000-00-00', '', 1),
('20240509161649', 'AKL-HDD-9', 'AKL37369', '2024-05-05', '0000-00-00', '', 1),
('20240516124951', 'ATL-MNT-3', 'ATL42878', '2024-04-24', '0000-00-00', '', 1),
('20240516160100', 'AKL-IPT-9', 'AKL216', '2024-04-30', '0000-00-00', '', 1),
('20240516174059', 'AKL-IPT-10', 'AKL841', '2024-05-01', '0000-00-00', '', 1),
('20240520110925', 'AKL-TABLET-2', 'AKL13274', '2024-05-15', '0000-00-00', '', 1),
('20240610174129', 'ATL-MNT-5', 'ATL-Knitting', '2024-06-10', '0000-00-00', '', 1),
('20240704165822', 'AKL-MNT-6', 'AKL393', '2024-05-16', '0000-00-00', '', 1);

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
('20240313064954', '20230820083743', 'ERP/Software'),
('20240521130511', '20230820083743', 'Digital Microscope');

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
('20240307151154', 'ATL-LKB-1', 'ATL', 1),
('20240311095734', 'BGL-HDD-5', 'BGL', 1),
('20240319093959', 'BGL-MNT-1', 'BGL', 1),
('20240321104448', 'BGL-LPT-1', 'BGL', 1),
('20240323140817', 'AKL-HDD-6', 'AKL', 0),
('20240323140849', 'AKL-HDD-6', 'ATL', 0),
('20240323141529', 'AKL-HDD-6', 'AKL', 1),
('20240323141954', 'AKL-CCTV-2', 'AKL', 1),
('20240331155324', 'BWL-HDD-7', 'BWL', 1),
('20240401132458', 'ATL-NTSW-2', 'ATL', 1),
('20240401135234', 'ATL-SVR-1', 'ATL', 1),
('20240401140042', 'ATL-DKTP-1', 'ATL', 1),
('20240401140343', 'ATL-OUPS-1', 'ATL', 1),
('20240401141500', 'AKL-HDD-8', 'AKL', 1),
('20240402100743', 'AKL-MBD-1', 'AKL', 1),
('20240402113621', 'ATL-IPT-4', 'ATL', 1),
('20240404154954', 'ATL-RAM-1', 'ATL', 1),
('20240404155314', 'ATL-UKB-1', 'ATL', 1),
('20240407131458', 'ATL-SFP-1', 'ATL', 1),
('20240417114951', 'ATL-LKB-2', 'ATL', 1),
('20240420115213', 'AKL-LPT-2', 'AKL', 1),
('20240422162957', 'AKL-LPT-3', 'AKL', 1),
('20240422165617', 'AKL-MNT-2', 'AKL', 1),
('20240424132349', 'BGL-MOB-1', 'BGL', 1),
('20240427124309', 'ATL-MBD-2', 'ATL', 1),
('20240427142349', 'ATL-IPT-5', 'ATL', 1),
('20240427144409', 'ATL-OFUPS-2', 'ATL', 1),
('20240427145552', 'ATL-MNT-3', 'ATL', 1),
('20240506143124', 'BWL-MNT-4', 'BWL', 1),
('20240506144818', 'BWL-IPT-6', 'BWL', 1),
('20240509152608', 'AKL-SSD-1', 'AKL', 1),
('20240509154302', 'AKL-SSD-2', 'AKL', 1),
('20240509155701', 'AKL-HDD-9', 'AKL', 1),
('20240509165404', 'AKL-SSD-3', 'AKL', 1),
('20240515124938', 'AKL-IPT-7', 'AKL', 1),
('20240515125946', 'AKL-IPT-8', 'AKL', 1),
('20240516155352', 'AKL-IPT-9', 'AKL', 1),
('20240516173742', 'AKL-IPT-10', 'AKL', 1),
('20240518114400', 'AKL-SSD-4', 'AKL', 1),
('20240520105917', 'AKL-TABLET-2', 'AKL', 1),
('20240610173617', 'ATL-MNT-5', 'ATL', 1),
('20240704134629', 'AKL-HDD-10', 'AKL', 1),
('20240704150834', 'AKL-SSD-5', 'AKL', 1),
('20240704151053', 'AKL-HDD-11', 'AKL', 1),
('20240704165447', 'AKL-MNT-6', 'AKL', 1);

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
('BARL', '20230820083757', '20230822072551', '20240424071751', 'Barcode Label'),
('BTR', '20230820083757', '20230822072519', '20240108102520', 'BATTERY FOR ACCESS CONTROL'),
('CAM', '20230820083743', '20230822072652', '20240601053136', 'Camera'),
('CBL', '20230820083757', '20230822072519', '20240108102520', 'UTP Cable (Cat6)'),
('CBL-MT', '20230820083757', '20230822072519', '20240331091640', 'Scanner Cable'),
('CBTR', '20230820083757', '20230822072519', '20240108102520', 'CMOS Battery'),
('CCBL', '20230820083757', '20230822072519', '20240108102520', 'Connecting Cable'),
('CCLR', '20230820083757', '20230822072537', '20240207054000', 'WD-40 Contact Cleaner'),
('CCTV', '20230820083743', '20230822072652', '20240130115112', 'CC Camera'),
('CF', '20230820083757', '20230822072519', '20240108102520', 'Cooling Fan (CPU)'),
('CLB', '20230820083757', '20230822072537', '20240108102127', 'Cleaning Blade'),
('CPR', '20230820083743', '20230822072652', '20230822082854', 'Copier'),
('CPRDM', '20230820083757', '20230822072537', '20240108102127', 'Copier Drum'),
('CPRDR', '20230820083757', '20230822072537', '20240108102127', 'Copier Developer'),
('CPRDWR', '20230820083757', '20230822072537', '20240108102127', 'Drawer'),
('CPRGR', '20230820083757', '20230822072537', '20240108102127', 'Copier Gear'),
('CPTR', '20230820083743', '20230822072652', '20230822082821', 'Cebra Card Printer '),
('CSG', '20230820083757', '20230822072519', '20240108102520', 'Casing (CPU)'),
('CSR', '20230820083757', '20230822072537', '20240108102127', 'Copier Scraper'),
('CTG', '20230820083757', '20230822072551', '20240108105112', 'Cartridge'),
('DCB', '20230820083757', '20230822072537', '20240108102127', 'DC Blade'),
('DKTP', '20230820083743', '20230822072652', '20230822082725', 'Desktop'),
('DP100', '20230820083743', '20240521130511', '20240521130729', 'Digital Microscope'),
('DRIVE BELT GEAR', '20230820083757', '20230822072537', '20240108102127', 'DRIVE BELT GEAR'),
('DRUM', '20230820083757', '20230822072537', '20240108102127', 'DRUM'),
('DVR', '20230820083743', '20230822072652', '20240130115112', 'DVR'),
('EPSINK', '20230820083757', '20230822072551', '20240108105220', 'Epson INK'),
('FCBL', '20230820083757', '20230822072519', '20240108102520', 'Fiber Cable'),
('FEEDROLL', '20230820083757', '20230822072537', '20240108102127', 'FEED Roll'),
('Firewall-LICENSE', '20230820083757', '20230822072618', '20240108105311', 'License Forti Gate Firewall '),
('FUSER UNIT', '20230820083757', '20230822072537', '20240108102127', 'FUSER UNIT'),
('FUSER UNIT MOVING GEAR', '20230820083757', '20230822072537', '20240108102127', 'FUSER UNIT MOVING GEAR'),
('FW', '20230820083743', '20230822072652', '20230822082942', 'Firewall'),
('HDD', '20230820083757', '20230822072519', '20240108102520', 'Hard Disk Drive'),
('HDMIC', '20230820083757', '20230822072519', '20240108102520', 'HDMI Cable'),
('HEADCABLE', '20230820083757', '20230822072519', '20240108102520', 'Head Short Cable/Ribon'),
('HP', '20230820083757', '20230822072519', '20240108102520', 'Headphone'),
('HTRPCR', '20230820083757', '20230822072537', '20240108102127', 'Heat Roller'),
('IPC', '20230820083743', '20230822072652', '20240130115112', 'IP Camera'),
('IPSW', '20230820083757', '20230822072519', '20240108102520', 'IP Phone Switch'),
('IPT', '20230820083743', '20230822072652', '20240113072651', 'IP Telephone'),
('LASER OPTIC UNIT BOARD', '20230820083757', '20230822072537', '20240108102127', 'LASER OPTIC UNIT BOARD'),
('LBTR', '20230820083757', '20230822072519', '20240108102520', 'Laptop Battery'),
('LC', '20230820083757', '20230822072519', '20240108102520', 'Lan Card'),
('LCRG', '20230820083757', '20230822072519', '20240108102520', 'Laptop Charger'),
('LDSP', '20230820083757', '20230822072519', '20240108102520', 'Laptop Display'),
('LKB', '20230820083757', '20230822072519', '20240108102520', 'Laptop Keyboard'),
('LONGRIBBON', '20230820083757', '20230822072519', '20240108102520', 'Long Ribon 14 Pin'),
('LPT', '20230820083743', '20230822072652', '20230822082725', 'Laptop'),
('LSTD', '20230820083757', '20230822072519', '20240108102520', 'Laptop Stand'),
('M365', '20230820083757', '20230822072618', '20240108105311', 'Microsoft 365 License'),
('MBD', '20230820083757', '20230822072519', '20240108102520', 'Mother Board'),
('MCVTR', '20230820083757', '20230822072519', '20240108102520', 'Converter (Multiport)'),
('MNT', '20230820083743', '20230822072652', '20230822083124', 'Monitor'),
('MOB', '20230820083743', '20230822072652', '20240424093852', 'Mobile'),
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
('PDE', '20230820083743', '20230822072652', '20240601052157', 'Portable Device'),
('PHTNR', '20230820083757', '20230822072551', '20240206112614', 'Photocopy Toner'),
('PJTR', '20230820083743', '20230822072652', '20230822082919', 'Projector'),
('PLT', '20230820083743', '20230822072652', '20240122114924', 'Plotter'),
('PLTMTR', '20230820083757', '20230822072537', '20240108102127', 'Plotter Motor'),
('POINTER10', '20230820083757', '20230822072519', '20240108102520', 'Pointer '),
('PP', '20230820083757', '20230822072519', '20240108102520', 'Patch Panel'),
('PRCR', '20230820083757', '20230822072519', '20240108102520', 'Processor'),
('PRTCUTTER', '20230820083757', '20230822072537', '20240108102127', 'Barcode Printer Cutter'),
('PRTMT', '20230820083757', '20230822072537', '20240108102127', 'Printer Motor'),
('PRTRH', '20230820083757', '20230822072519', '20240108102520', 'Printer Head'),
('PSS', '20230820083743', '20230822072652', '20240513080223', 'Portable Sound System With Microphone'),
('PSU', '20230820083757', '20230822072519', '20240108102520', 'Power Supply'),
('PTR', '20230820083743', '20230822072652', '20230822082821', 'Printer'),
('PTRFF', '20230820083757', '20230822072537', '20240108102127', 'Fuser Film'),
('PTRGR', '20230820083757', '20230822072537', '20240108102127', 'Printer Gear'),
('PTRH', '20230820083757', '20230822072519', '20240108102520', 'Printer Head'),
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
('SVR', '20230820083743', '20230822072652', '20230822082751', 'Server'),
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
('WMS', '20230820083757', '20230822072519', '20240108102520', 'Mouse Wire'),
('WWBEARING', '20230820083757', '20230822072519', '20240108102520', 'Wheel Wth Bearing ');

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
('20240205115231', '202402051143530', 'AFL', 'AFL-TNR-1', '', '', 1, 0, '2024-02-05', '2024-03-13', '2024-03-13', '', 0),
('20240303124448', '202403021517170', 'ATL', 'ATL-SCN-1', 'KNJP22298', 'CANON LIDE SCANNER 300', 1, 365, '2024-02-25', '2024-02-27', '2024-03-27', 'ATL4574', 1),
('20240303174449', '202403031740410', 'BWL', 'BWL-HDD-2', 'VG962GBUS', 'TOSHIBA HDD 1TB', 1, 730, '2024-02-17', '2024-03-03', '0000-00-00', 'BWL1438', 1),
('20240304132124', '202403041318500', 'AKL', 'AKL-LBTR-1', '6FSTH06TZ619R5', 'HP 440 G5 BATTERT', 1, 90, '2024-02-28', '2024-03-04', '0000-00-00', 'AKL1108', 1),
('20240304162050', '202403041613015', 'ATL', 'ATL-NTSW-1', 'FOC2651Z58J', 'Cisco Business 350 Switch CBS350-24P-4G-EU', 1, 365, '2024-02-11', '2024-03-04', '0000-00-00', 'ATL4574', 1),
('20240306150406', '202402271344210', 'ATL', 'ATL-Wifi-1', 'AX20AX1800', 'TP-LINK ARCHER AX20AX1800Mbps GIGABIT DUAL BAND WIFI 6 ROUTER', 1, 365, '2024-02-18', '2024-03-06', '0000-00-00', 'ATL4300', 1),
('20240306152814', '202402271430560', 'ATL', 'ATL-IPT-3', 'BCFBD2', 'GRANDSTEAM GRP-2601P', 1, 365, '2024-03-06', '2024-03-06', '0000-00-00', 'AKL169', 1),
('20240306161850', '202402271334461', 'ATL', 'ATL-HDD-3', 'WC82Y0092663', 'WD 1TB ', 1, 730, '2024-02-20', '0000-00-00', '0000-00-00', '', 0),
('20240307150229', '202403031740410', 'BWL', 'BWL-HDD-4', 'VGGBUS', 'TOSHIBA TB HDD (Unfortunately it goes to ATL user)', 0, 730, '2024-02-17', '0000-00-00', '0000-00-00', '', 0),
('20240307151154', '202402271328060', 'ATL', 'ATL-LKB-1', 'LENOVOT440KB', 'LENOVO T440 KEYBOARD', 1, 90, '2024-02-19', '0000-00-00', '0000-00-00', '', 0),
('20240311095734', '202403110953000', 'BGL', 'BGL-HDD-5', 'H727820482', 'External HDD for Data  Backup ', 1, 3, '2024-03-11', '0000-00-00', '0000-00-00', '', 0),
('20240319093959', '202402291536390', 'BGL', 'BGL-MNT-1', '', '', 1, 0, '2024-03-19', '0000-00-00', '0000-00-00', '', 0),
('20240321104448', '202403211003070', 'BGL', 'BGL-LPT-1', 'N1NXCV192769047', '', 1, 3, '2024-03-21', '2024-03-21', '2024-03-21', '', 0),
('20240323140817', '202403231400071', 'AKL', 'AKL-HDD-6', 'WX62D226TS3U', 'WD HDD PURPLE 6TB', 1, 1095, '2024-03-23', '0000-00-00', '0000-00-00', '', 0),
('20240323141954', '202403231414060', 'AKL', 'AKL-CCTV-2', 'B97A6/AG9D696/J0F3DA/G0F3B5/G9657D/G43AA3/J2CCA4/G', 'DAHUA BULLET IPC 1230SP', 10, 365, '2024-03-19', '0000-00-00', '0000-00-00', '', 0),
('20240331155324', '202403311537014', 'BWL', 'BWL-HDD-7', 'WCC6YA4E3N3Z', 'WD 1TB SATA BULK 7200', 1, 365, '2024-03-18', '0000-00-00', '0000-00-00', '', 0),
('20240401132458', '202404011321270', 'ATL', 'ATL-NTSW-2', 'FOC2715YLY7', 'Cisco Business 350 Switch CBS350-24P-4G-EU', 1, 365, '2024-03-06', '2024-04-01', '0000-00-00', 'ATL4574', 1),
('20240401135234', '202404011336560', 'ATL', 'ATL-SVR-1', 'SGH327MBCG', 'HPE ProLiant DL20 Gen10 Plus 4SFF \r\nIntel Xeon E-2324G, 3.1GHz 4 Core 65W\r\n32GB (2x16GB) x8 DDR4-3200 CAS-22-22-22\r\n4x480GB SATA 6G Read Intensive SFF BC Multi Vendor SSD, 2x500W Flex Slot', 1, 1095, '2024-04-01', '2024-04-01', '0000-00-00', 'HO75', 1),
('20240401140042', '202404011336562', 'ATL', 'ATL-DKTP-1', 'U3RR251600970, U3PN536701349, U3CV371301453, U3PN5', 'Core i5, 12th Gen, Asus Prime H610M-K D4, LG 241GN60R-B 24\" FHD, Power Guard 1200VA-CS', 4, 1095, '2024-02-12', '2024-04-01', '0000-00-00', 'ATL4574', 1),
('20240401140343', '202404011336563', 'ATL', 'ATL-OUPS-1', '230818170038', 'power guard 3000va online', 1, 365, '2024-02-12', '2024-04-01', '0000-00-00', 'HO75', 1),
('20240401141500', '202404011412180', 'AKL', 'AKL-HDD-8', 'WCC6YNKX2J1Z', 'WD 1TB SATA BULK 7200', 1, 365, '2024-03-18', '2024-04-01', '0000-00-00', 'AKL35329', 1),
('20240402100743', '202404021002300', 'AKL', 'AKL-MBD-1', 'R9M0KC190309EKJ', 'ASUS H110M-K INTEL H110 CHIPSET INTEL 6TH GEN, SOCKET 1151, DDR4 2133', 1, 1095, '2024-03-05', '2024-04-02', '0000-00-00', 'HO1019', 1),
('20240402113621', '202404021128579', 'ATL', 'ATL-IPT-4', '22MTD85P20CB1C76', 'Grandstam ', 1, 365, '2024-04-02', '2024-04-02', '0000-00-00', 'ATL4021', 1),
('20240404154954', '202404041545296', 'ATL', 'ATL-RAM-1', '112251305923', 'Apacer 4GB DDR4L 2666', 1, 1825, '2024-03-27', '0000-00-00', '0000-00-00', '', 0),
('20240404155314', '202404030914362', 'ATL', 'ATL-UKB-1', '0568616', 'HP PROBOOK 440 G5', 1, 90, '2024-04-01', '0000-00-00', '0000-00-00', '', 0),
('20240407131458', '202404071310295', 'ATL', 'ATL-SFP-1', '6CAA230922029, 6CAB230922054', 'SFP MODULAR, 1.25G20KM 6COM', 2, 180, '2024-03-14', '2024-04-07', '0000-00-00', 'ATL4574', 1),
('20240417114951', '202404171144238', 'ATL', 'ATL-LKB-2', '0568616', 'HP ProBook 440 G5 KB', 1, 90, '2024-04-01', '0000-00-00', '0000-00-00', '', 0),
('20240420115213', '202404201143080', 'AKL', 'AKL-LPT-2', 'RBNXCV11A31548D', 'Asus ExpertBook B1 > B1402CGA-NK0276, STAR BLACK, 12TH GEN, CORE I3-8GB DDR4-14\" FHD-128GB M.2 NVME SSD-UFS 256GB M.2 NVME', 1, 1095, '2024-04-06', '2024-04-07', '0000-00-00', 'HO1198', 1),
('20240422162957', '202404221602460', 'AKL', 'AKL-LPT-3', 'N1NXCV082977028', 'Asus ExpertBook B1>B1400CEAE (EK4021) STAR BLACK, 11TH GEN, i5-14\"FHD-DDR4 8GB RAM 3200Mhz-1TB SSD M.2 NVMe PCI 3.0-Finger Print-3 Cell 42W Adaptor', 1, 1095, '2024-03-28', '2024-04-22', '0000-00-00', 'HO1191', 1),
('20240422165617', '202404221653210', 'AKL', 'AKL-MNT-2', 'V90CZPKP', 'LENOVO D19 10 18.5\"', 1, 1095, '2024-03-30', '2024-03-30', '0000-00-00', 'AKL43030', 1),
('20240424132349', '202404241311560', 'BGL', 'BGL-MOB-1', '3814232000002955,3A26232000003861', '', 2, 1, '2024-04-01', '0000-00-00', '0000-00-00', '', 0),
('20240427124309', '202404271233350', 'ATL', 'ATL-MBD-2', 'R9M0KC189764HRM', 'ASUS H110M-K 6TH GEN, H110 CHIPSET MOTHERBOARD', 1, 365, '2024-04-22', '0000-00-00', '0000-00-00', '', 0),
('20240427142349', '202404271417030', 'ATL', 'ATL-IPT-5', 'E60582/E60574', 'GRANDSTEAM GRP2601P', 2, 365, '2024-04-23', '2024-04-25', '0000-00-00', 'ATL4021	', 1),
('20240427144409', '202404271438252', 'ATL', 'ATL-OFUPS-2', '1065F', 'APOLLO 1065F', 1, 365, '2024-04-24', '0000-00-00', '0000-00-00', '', 0),
('20240427145552', '202404271453070', 'ATL', 'ATL-MNT-3', 'V90CZPLF', 'LENOVO D19-10 18.5\" HDMI+VGA MONITOR', 1, 1095, '2024-04-23', '2024-04-24', '0000-00-00', 'ATL42878', 1),
('20240506143124', '202405061426350', 'BWL', 'BWL-MNT-4', 'V90CZPKN', 'Lenovo D19-10 (D19185AD0) 18.5\", HDMI+VGA', 1, 1095, '2024-04-23', '2024-04-24', '0000-00-00', 'BWL1675', 1),
('20240506144818', '202405061325503', 'BWL', 'BWL-IPT-6', '22MTD85P50E6057B', 'GRANDSTREAM GRP-2601', 1, 365, '2024-04-27', '2024-04-25', '0000-00-00', 'BWL53', 1),
('20240509152608', '202405091516340', 'AKL', 'AKL-SSD-1', 'I311300001', 'TRANSCEND 110S 125GB M.2 2280', 1, 1095, '2024-05-09', '0000-00-00', '0000-00-00', '', 0),
('20240509154302', '202405091535370', 'AKL', 'AKL-SSD-2', 'I311220001', 'TRANSCEND 110S 125GB M.2 2280', 1, 1095, '2024-05-05', '0000-00-00', '0000-00-00', '', 0),
('20240509155701', '202405091548390', 'AKL', 'AKL-HDD-9', 'WX32AA3HJNZP', 'WD MY PASSPORT 1TB USB', 1, 1095, '2024-05-05', '2024-05-05', '0000-00-00', 'AKL37369', 1),
('20240509165404', '202405091639180', 'AKL', 'AKL-SSD-3', '402922', 'TRANSCEND SATA UCC 500GB SSD', 1, 1095, '2024-05-04', '0000-00-00', '0000-00-00', '', 0),
('20240515124938', '202405151244500', 'AKL', 'AKL-IPT-7', 'CBDF1F', 'GRANDSTREM GRP-2601P', 1, 365, '2024-05-11', '0000-00-00', '0000-00-00', '', 0),
('20240515125946', '202405151256571', 'AKL', 'AKL-IPT-8', 'CBDF26', 'GRANDSTREAM GRP-2601P', 1, 365, '2024-05-11', '0000-00-00', '0000-00-00', '', 0),
('20240516155352', '202405161550410', 'AKL', 'AKL-IPT-9', 'C074ADCB20CBD95F', 'GRANDSTREAM GRP-2601P', 1, 365, '2024-04-30', '2024-04-30', '0000-00-00', 'AKL216', 1),
('20240516173742', '202405161734320', 'AKL', 'AKL-IPT-10', 'C074ADCB5P20DB167', 'GRANDSTREAM GRP-2601P', 1, 365, '2024-04-30', '2024-05-01', '0000-00-00', 'AKL841', 1),
('20240518114400', '202405181140470', 'AKL', 'AKL-SSD-4', '1302440746', 'TRANSCEND SSD 500GB SATA', 1, 1095, '2024-05-14', '0000-00-00', '0000-00-00', '', 0),
('20240520105917', '202405201055130', 'AKL', 'AKL-TABLET-2', '352294625424281', 'SAMSUNG S6 LITE TAB NON OFFICIAL', 1, 10, '2024-05-15', '2024-05-15', '0000-00-00', 'AKL13274', 1),
('20240610173617', '202406091507440', 'ATL', 'ATL-MNT-5', 'D-19-10', 'Lenovo D19 10 18.5\" ', 1, 1095, '2024-06-04', '2024-06-10', '0000-00-00', 'ATL-Knitting', 1),
('20240704134629', '202407041344220', 'AKL', 'AKL-HDD-10', 'WCC6Y3M0DU8P', 'WD 1TB BLUE DESKTOP HDD', 1, 730, '2024-05-27', '0000-00-00', '0000-00-00', '', 0),
('20240704150834', '202407041503410', 'AKL', 'AKL-SSD-5', 'I307410304', 'TRANSCEND 110S 128GB M.2 2280', 1, 1095, '2024-05-13', '0000-00-00', '0000-00-00', '', 0),
('20240704151053', '202407041503411', 'AKL', 'AKL-HDD-11', '43N7PS9XTVJH', 'TOHSIBA 1TB 2.5 INCH SATA HDD ', 1, 730, '2024-05-13', '0000-00-00', '0000-00-00', '', 0),
('20240704165447', '202407041651480', 'AKL', 'AKL-MNT-6', 'V90D3VX3', 'LENOVO D19-10 18.5\" HDMI+VGA', 1, 1095, '2024-05-14', '2024-05-16', '0000-00-00', 'AKL393', 1);

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
('20240211111140', '20230820083743', '20230822072652', 'RADF'),
('20240331091640', '20230820083757', '20230822072519', 'Cable (Multi type)'),
('20240424071751', '20230820083757', '20230822072551', 'Barcode Label'),
('20240424093852', '20230820083743', '20230822072652', 'Mobile'),
('20240513080223', '20230820083743', '20230822072652', 'Sound System'),
('20240521130729', '20230820083743', '20240521130511', 'Microscope'),
('20240601052157', '20230820083743', '20230822072652', 'Portable Device'),
('20240601053136', '20230820083743', '20230822072652', 'Camera');

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
('20240310154658', '20240310154658', 'HO75', 'AKL7461', '202403051014520', '202403101545420', '2024-03-0017', '3906', 1, '', '2024-03-06', '171/24', '2024-03-06'),
('20240311095351', '20240311095351', 'HO537', 'BGL18301', '202402040934390', '202403110953000', 'BGL-2024-02-0082', '1531', 1, '', '2024-03-11', '002773', '2024-04-29'),
('20240311102432', '20240311102432', 'HO537', 'BGL18756', '202402051004350', '202403111020580', 'BGl-2024-02-0081', '1530', 2, 'Sumon', '2024-03-11', 'inv0111', '2024-03-11'),
('20240311102953', '20240311102953', 'HO537', 'BGL18780', '202402050934472', '202403111028412', 'BGL-2024-02-0080', '1529', 1, '', '2024-03-02', '3228-23/24', '2024-03-11'),
('20240317144036', '20240317144036', 'HO75', 'AKL7420', '202401271653131', '202403171436501', '2024-03-0030', '3925', 3, '', '2024-03-11', 'SEL-B0-110324-002', '2024-03-11'),
('20240320102146', '20240320102146', 'HO75', 'AKL7453', '202402061633470', '202403201020080', '2024-03-0058', '3953', 1, '', '2024-03-19', '199/24', '2024-03-18'),
('20240320102213', '20240320102213', 'HO75', 'AKL7453', '202402061633471', '202403201020081', '2024-03-0058', '3953', 1, '', '2024-03-19', '199/24', '2024-03-18'),
('20240321100511', '20240321100511', 'HO537', 'BGL18530', '202402291817230', '202403211003070', 'BGL-2024-03-0039', '1585', 1, 'RND-SAJJAD', '2024-03-13', 'E03358', '2024-03-13'),
('20240321101504', '20240321101504', 'HO537', 'BGL18902', '202403101058180', '202403211014010', 'BGL-2024-03-0070', '1586', 1, '', '2024-03-18', 'E03567', '2024-03-18'),
('20240321102103', '20240321102103', 'HO537', 'BGL18902', '202403101058180', '202403211014010', 'BGL-2024-03-0070', '1586', 5, '', '2024-03-21', 'E03567', '2024-03-19'),
('20240321105312', '20240321105312', 'HO537', 'BGL18901', '202403101054185', '202403211052235', 'BGL-2024-03-0065', '1579', 10, 'CAD', '2024-03-11', 'BK20240318', '2024-03-11'),
('20240321110318', '20240321110318', 'HO537', 'BGL18904', '202403101113180', '202403211102110', 'BGL-2024-03-0066', '1577', 4, 'For DND', '2024-03-18', '180324-002', '2024-03-18'),
('20240321131346', '20240321131346', 'HO75', 'AKL7539', '202402291316253', '202403211312463', '2024-03-0068', '3957', 2, '', '2024-03-20', 'SEL-B0-180324-007', '2024-03-18'),
('20240321132154', '20240321132154', 'HO75', 'AKL4862', '202402071059050', '202403211320310', '2024-03-0062', '3956', 1, '', '2024-03-20', 'SEL-B0-180324-006', '2024-03-18'),
('20240323131641', '20240323131641', 'HO75', 'AKL7455', '202402191622170', '202403231315430', '2024-03-0065', '3963', 1, '', '2024-03-23', 'RC/REP-3499-23/24', '2024-03-19'),
('20240323140459', '20240323140459', 'HO75', 'AKL23558', '202403091551511', '202403231400071', '2024-03-0088', '3973', 1, '', '2024-03-20', 'FG24YINV0140', '2024-03-20'),
('20240323141504', '20240323141504', 'HO75', 'AKL23558', '202403091551510', '202403231414060', '2024-03-0087', '3974', 10, '', '2024-03-19', 'RC/REP-3497-23/24', '2024-03-19'),
('20240323142450', '20240323142450', 'HO75', 'AKL7539', '202402291316254', '202403231423234', '2024-03-0067', '3975', 2, '', '2024-03-21', '10483', '2024-03-21'),
('20240323142452', '20240323142452', 'HO75', 'AKL7539', '202402291316251', '202403231423231', '2024-03-0067', '3975', 2, '', '2024-03-21', '10483', '2024-03-21'),
('20240331092335', '20240331092335', 'HO537', 'BGL18534', '202403231333000', '202403310921470', 'BGL-2024-03-0096', '1665', 1, 'New CFO Sir', '2024-03-24', '', '2024-03-24'),
('20240331092820', '20240331092820', 'HO537', 'BGL18417', '202402151308260', '202403310925470', 'BGL-2024-03-0088', '1664', 1, 'G2', '2024-03-31', '10485', '2024-03-21'),
('20240331093337', '20240331093337', 'HO537', 'BGL18902', '202403101058181', '202403310932091', 'BGL-2024-03-0071', '1661', 2, '', '2024-03-19', '3424-23-24', '2024-03-19'),
('20240331093338', '20240331093338', 'HO537', 'BGL18902', '202403101058182', '202403310932092', 'BGL-2024-03-0071', '1661', 3, '', '2024-03-19', 'BGL-2024-03-0071', '2024-03-19'),
('20240331093339', '20240331093339', 'HO537', 'BGL18902', '202403101058182', '202403310932092', 'BGL-2024-03-0071', '1661', 3, '', '2024-03-19', 'BGL-2024-03-0071', '2024-03-19'),
('20240331093340', '20240331093340', 'HO537', 'BGL18902', '202403101058183', '202403310932093', 'BGL-2024-03-0071', '1661', 3, '', '2024-03-19', 'BGL-2024-03-0071', '2024-03-19'),
('20240331093618', '20240331093618', 'HO537', 'BGL18910', '202403101122180', '202403310935420', 'BGL-2024-03-0073', '1662', 1, '', '2024-03-19', '3496-23-24', '2024-03-19'),
('20240331094007', '20240331094007', 'HO537', 'BGL18911', '202403021720580', '202403310937480', 'BGL-2024-03-0074', '1660', 1, '', '2024-03-24', '001835', '2024-03-24'),
('20240331154537', '20240331154537', 'ho75', 'BWL13836', '202403051100412', '202403311537012', '2024-03-0086', 'BWL-ST-24', 1, '', '2024-03-18', 'INV-GBPIB-2024-E03560', '2024-03-18'),
('20240331154538', '20240331154538', 'ho75', 'BWL13836', '202403051100413', '202403311537013', '2024-03-0086', 'BWL-ST-24', 2, '', '2024-03-18', 'INV-GBPIB-2024-E03560', '2024-03-18'),
('20240331154951', '20240331154951', 'ho75', 'BWL13836', '202403051100414', '202403311537014', '2024-03-0086', 'BWL-ST-24', 1, '', '2024-03-18', 'INV-GBPIB-2024-E03560', '2024-03-31'),
('20240401090035', '20240401090035', 'ho75', 'BWL13836', '202403051100410', '202403311602000', '2024-03-0085', 'BWL-ST-24', 1, '', '2024-04-18', 'SEL-B0-180324-003', '2024-04-18'),
('20240401090037', '20240401090037', 'ho75', 'BWL13836', '202403051100411', '202403311602001', '2024-03-0085', 'BWL-ST-24', 1, '', '2024-04-18', 'SEL-B0-180324-003', '2024-04-18'),
('20240401132253', '20240401132253', 'ho75', 'ATL278088', '202404011312460', '202404011321270', '2024-03-0016', 'ATL/GS/24/0212', 1, '', '2024-03-07', 'SI-BPL-MAR24-12', '2024-03-06'),
('20240401134100', '20240401134100', 'ho75', 'ATL278101', '202403041524300', '202404011336560', '2024-02-0017', 'ATL/GS/24/0213', 1, '', '2024-02-12', 'INV-GBPIB-2024-E02041', '2024-02-12'),
('20240401134136', '20240401134136', 'ho75', 'ATL278101', '202403041524301', '202404011336561', '2024-02-0017', 'ATL/GS/24/0213', 1, '', '2024-02-12', 'INV-GBPIB-2024-E02041', '2024-02-12'),
('20240401134150', '20240401134150', 'ho75', 'ATL278101', '202403041524302', '202404011336562', '2024-02-0017', 'ATL/GS/24/0213', 4, '', '2024-02-12', 'INV-GBPIB-2024-E02041', '2024-02-12'),
('20240401134219', '20240401134219', 'ho75', 'ATL278101', '202403041524303', '202404011336563', '2024-02-0017', 'ATL/GS/24/0213', 1, '', '2024-02-12', 'INV-GBPIB-2024-E02041', '2024-02-12'),
('20240401141331', '20240401141331', 'ho75', 'AKL7564', '202403041625550', '202404011412180', '2024-03-0064', '3959', 1, '', '2024-03-20', 'INV-GBPIB-2024-E03597', '2024-03-18'),
('20240401142450', '20240401142450', 'ho75', 'AKL23558', '202403091551512', '202404011423522', '2024-03-0077', '3955', 1, '', '2024-03-20', 'A001INV24000207', '2024-03-18'),
('20240402100504', '20240402100504', 'ho75', 'AKL7562', '202403051511320', '202404021002300', '2024-03-0015', '3893', 1, '', '2024-03-05', 'INV-GBPIB-2024-E02989', '2024-03-05'),
('20240402100507', '20240402100507', 'ho75', 'AKL7562', '202403051511321', '202404021002301', '2024-03-0015', '3893', 0, '', '2024-03-05', 'INV-GBPIB-2024-E02989', '2024-03-05'),
('20240402105802', '20240402105802', 'ho75', 'ATL278097', '202403191249350', '202404021056510', '2024-03-0094', 'ATL/GS/24/0253', 2, '', '2024-03-27', '10493', '2024-03-27'),
('20240402105805', '20240402105805', 'ho75', 'ATL278097', '202403191249351', '202404021056511', '2024-03-0094', 'ATL/GS/24/0253', 4, '', '2024-03-27', '10493', '2024-03-27'),
('20240402112220', '20240402112220', 'ho75', 'ATL2864', '202403171523200', '202404021120410', '2024-03-0093', 'ATL/GS/24/0250', 1, '', '2024-03-23', 'RC/REP-3553-23/24', '2024-03-23'),
('20240402112223', '20240402112223', 'ho75', 'ATL2864', '202403171523201', '202404021120411', '2024-03-0093', 'ATL/GS/24/0250', 1, '', '2024-03-23', 'RC/REP-3553-23/24', '2024-03-23'),
('20240402113055', '20240402113055', 'ho75', 'ATL278097', '202403191249359', '202404021128579', '2024-03-0096', 'ATL/GS/24/0249', 1, '', '2024-03-23', 'RC/REP-3552-23/24', '2024-03-23'),
('20240402113056', '20240402113056', 'ho75', 'ATL278097', '202403191249355', '202404021128575', '2024-03-0096', 'ATL/GS/24/0249', 6, '', '2024-03-23', 'RC/REP-3552-23/24', '2024-03-23'),
('20240402113058', '20240402113058', 'ho75', 'ATL278097', '202403191249354', '202404021128574', '2024-03-0096', 'ATL/GS/24/0249', 2, '', '2024-03-23', 'RC/REP-3552-23/24', '2024-03-23'),
('20240403094105', '20240403094105', 'ho75', 'ATL278097', '202403191249352', '202404030914362', '2024-03-0095', 'ATL/GS/24/0257', 4, '', '2024-03-25', 'INV-GBPIB-2024-003892', '2024-03-25'),
('20240403094107', '20240403094107', 'ho75', 'ATL278097', '202403191249353', '202404030914363', '2024-03-0095', 'ATL/GS/24/0257', 4, '', '2024-03-25', 'INV-GBPIB-2024-003892', '2024-03-25'),
('20240403121236', '20240403121236', 'HO75', 'AKL23558', '202403161441470', '202404031211270', '2024-03-0088', '3994', 1, '', '2024-03-27', 'FG24YINV0151', '2024-03-27'),
('20240403123645', '20240403123645', 'HO537', 'BRL16876', '202404031224243', '202404031235503', 'BRL-2024-03-0005', '102', 1, '', '2024-04-03', '', '2024-05-18'),
('20240403123759', '20240403123759', 'HO537', 'BRL16876', '202404031224241', '202404031235501', 'BRL-2024-03-0003', '104', 1, '', '2024-05-18', '', '2024-04-03'),
('20240403123946', '20240403123946', 'HO537', 'BRL16876', '202404031224240', '202404031235500', 'BRL-2024-03-0001', '103', 2, '', '2024-05-13', '', '2024-05-13'),
('20240403124055', '20240403124055', 'HO537', 'BRL16876', '202404031224242', '202404031235502', 'BRL-2024-03-0004', '105', 6, '', '2024-05-21', '', '2024-05-21'),
('20240403124334', '20240403124334', 'HO537', 'BASL18421', '202403101209480', '202404031242520', 'BASL-2024-03-0007', 'BASL-95/24', 1, '', '2024-05-18', '', '2024-05-18'),
('20240404154808', '20240404154808', 'ho75', 'ATL278097', '202403191249356', '202404041545296', '2024-03-0106', 'ATL/GS/24/0269', 1, '', '2024-03-27', '10490', '2024-03-27'),
('20240404155132', '20240404155132', 'ho75', 'ATL278097', '202403191249357', '202404041545297', '2024-03-0105', 'ATL/GS/24/0268', 1, '', '2024-04-01', 'EDL/ATL/339', '2024-04-01'),
('20240407131200', '20240407131200', 'ho75', 'ATL278088', '202404011312465', '202404071310295', '2024-03-0050', 'ATL/GS/24/0227', 2, '', '2024-03-14', 'FG24YINV0123', '2024-04-07'),
('20240408090506', '20240408090506', 'ho75', 'AKL7461', '202404011312464', '202404071342164', '2024-03-0017', 'ATL/GS/24/0272', 40, '', '2024-03-14', 'A001INV24000189', '2024-03-14'),
('20240408090507', '20240408090507', 'ho75', 'AKL7461', '202404011312463', '202404071342163', '2024-03-0017', 'ATL/GS/24/0272', 24, '', '2024-03-14', 'A001INV24000189', '2024-03-14'),
('20240408090509', '20240408090509', 'ho75', 'AKL7461', '202404011312461', '202404071342161', '2024-03-0017', 'ATL/GS/24/0272', 1, '', '2024-03-14', 'A001INV24000189', '2024-03-14'),
('20240417114625', '20240417114625', 'ho75', 'ATL278097', '202403191249358', '202404171144238', '2024-03-0105', 'ATL/GS/24/0268', 1, '', '2024-04-01', 'EDL/ATL/339', '2024-04-01'),
('20240420113600', '20240420113600', 'ho75', 'AKL7598', '202403301006390', '202404201132510', '2024-04-0019', '4048', 4, '', '2024-04-04', 'FG24YINV0175', '2024-04-20'),
('20240420114518', '20240420114518', 'ho75', 'AKL18540', '202403251128560', '202404201143080', '2024-04-0002', '4049', 1, '', '2024-04-04', 'INV-GBPIB-2024-E04355', '2024-04-06'),
('20240422161431', '20240422161431', 'ho75', 'ATL278097', '202403051651580', '202404221602460', '2024-03-0096', '4008', 1, '', '2024-03-30', 'INV-GBPIB-2024-E03976', '2024-03-28'),
('20240422164515', '20240422164515', 'ho75', 'AKL7539', '202402291316252', '202404221643532', '2024-03-0066', '4013', 4, '', '2024-03-31', 'INV-GBPIB-2024-E04067', '2024-03-30'),
('20240422164516', '20240422164516', 'ho75', 'AKL7539', '202402291316250', '202404221643530', '2024-03-0066', '4013', 3, '', '2024-03-31', 'INV-GBPIB-2024-E04067', '2024-03-30'),
('20240422165420', '20240422165420', 'ho75', 'AKL7568', '202403071652020', '202404221653210', '2024-03-0089', '4007', 1, '', '2024-03-30', 'FG24YINV0161', '2024-03-30'),
('20240424102805', '20240424102805', 'ho75', 'BWL14114', '202403301539431', '202404241026441', '2024-04-0044', 'BWL-ST-24', 1, '', '2024-04-08', 'AT-S-276/24', '2024-04-07'),
('20240424131325', '20240424131325', 'HO537', 'BGL13063', '202404241305580', '202404241311560', 'BGL-2024-03-0147', '1701', 2, '', '2024-04-01', '010424-001', '2024-04-01'),
('20240424134631', '20240424134631', 'HO537', 'BGL18432', '202404011008450', '202404241345290', 'BGL-2024-04-0014', '1702', 1, '', '2024-04-06', '10502', '2024-04-06'),
('20240424141223', '20240424141223', 'HO537', 'BGL18968', '202404241114121', '202404241411191', 'BGL-2024-04-0026', '1699', 2, '', '2024-04-08', '280/24', '2024-04-08'),
('20240424141840', '20240424141840', 'HO537', 'BGL18969', '202404241153484', '202404241418034', 'BGL-2024-04-0027', '1700', 1, '', '2024-04-08', '278/24', '2024-04-08'),
('20240424142139', '20240424142139', 'HO537', 'BGL18969', '202404241153483', '202404241420563', 'BGL-2024-04-0028', '1766', 12, '', '2024-04-18', '18042024', '2024-04-18'),
('20240427123614', '20240427123614', 'ho75', 'ATL278361', '202403311519430', '202404271233350', '2024-04-0072', 'ATL/GS/24/0323', 1, '', '2024-04-18', 'INV-GBPIB-2024-E04740', '2024-04-22'),
('20240427141920', '20240427141920', 'ho75', 'ATL21320', '202404021205370', '202404271417030', '2024-04-0071', 'ATL/GS/24/320', 2, '', '2024-04-23', 'RC/REP-3762-23/24', '2024-04-23'),
('20240427142931', '20240427142931', 'ho75', 'ATL278363', '202404211622460', '202404271428080', '2024-04-0073', 'ATL/GS/24/0319', 2, '', '2024-04-23', 'RC/REP-3766-23/24', '2024-04-23'),
('20240427144027', '20240427144027', 'ho75', 'ATL278363', '202404211622461', '202404271438251', '2024-04-0084', 'ATL/GS/24/0324', 4, '', '2024-04-24', '1948', '2024-04-24'),
('20240427144044', '20240427144044', 'ho75', 'ATL278363', '202404211622462', '202404271438252', '2024-04-0084', 'ATL/GS/24/0324', 1, '', '2024-04-24', '1948', '2024-04-24'),
('20240427145424', '20240427145424', 'ho75', 'ATL278362', '202404021117250', '202404271453070', '2024-04-0083', 'ATL/GS/24/0322', 1, '', '2024-04-24', 'INV-GBPIB-2024-E04813', '2024-04-23'),
('20240504163110', '20240504163110', 'ho75', 'ATL278371', '202404281656330', '202405041628580', '2024-04-0131', 'ATL/GS/24/0352', 1, '', '2024-04-30', 'RC/REP-4010-23/24', '2024-04-30'),
('20240505095216', '20240505095216', 'HO537', 'BGL18445', '202404211439370', '202405050951000', 'BGL-2024-04-0070', '1796', 1, '', '2024-05-25', '345', '2024-04-25'),
('20240505095422', '20240505095422', 'HO537', 'BGL18443', '202404211437450', '202405050953350', 'BGL-2024-04-0071', '1795', 1, '', '2024-04-25', '344', '2024-04-25'),
('20240505100656', '20240505100656', 'HO537', 'BGL18970', '202404241136241', '202405051000111', 'BGL-2024-04-0061', '1790', 10, '', '2024-04-22', '004741', '2024-04-22'),
('20240505100657', '20240505100657', 'HO537', 'BGL18970', '202405051003320', '202405051004536', 'BGL-2024-04-0061', '1790', 6, '', '2024-04-22', '004741', '2024-04-22'),
('20240505100910', '20240505100910', 'HO537', 'BGL18444', '202404251013310', '202405051008050', 'BGL-2024-04-0087', '1779', 1, 'Anwar-PPC', '2024-04-29', '', '2024-04-29'),
('20240505102305', '20240505102305', 'HO537', 'BGL19151', '202404231758140', '202405051011130', 'BGL-2024-04-0072', '1814', 3, '', '2024-04-27', '270424-001', '2024-04-27'),
('20240505102306', '20240505102306', 'HO537', 'BGL19151', '202404231758141', '202405051011131', 'BGL-2024-04-0072', '1814', 1, '', '2024-04-27', '270424-001', '2024-04-27'),
('20240505102500', '20240505102500', 'HO537', 'BGL18435', '202403311046320', '202405051024170', 'BGL-2024-04-0058', '1816', 2, '', '2024-04-24', '11291', '2024-04-24'),
('20240505102822', '20240505102822', 'HO537', 'BGL18970', '202404241136240', '202405051027190', 'BGL-2024-04-0030', '1817', 6, '', '2024-04-07', '1845', '2024-04-07'),
('20240505103844', '20240505103844', 'HO537', 'BGL18970', '202404241136244', '202405051037244', 'BGL-2024-04-0031', '1792', 4, '', '2024-04-22', '3710-23/24', '2024-04-22'),
('20240505104752', '20240505104752', 'HO537', 'BGL18969', '202404241153480', '202405051043020', 'BGL-2024-04-0059', '1793', 5, '', '2024-04-23', '3757-23/24', '2024-04-23'),
('20240505104753', '20240505104753', 'HO537', 'BGL18969', '202404241153482', '202405051043022', 'BGL-2024-04-0059', '1793', 6, '', '2024-04-23', '3757-23/24', '2024-04-23'),
('20240505105023', '20240505105023', 'HO537', 'BGL18968', '202404241114120', '202405051049400', 'BGL-2024-04-0060', '1791', 2, '', '2024-05-05', '3758-23/24', '2024-04-23'),
('20240505105410', '20240505105410', 'HO537', 'BGL18970', '202404241136243', '202405051052033', 'BGL-2024-04-0062', '1794', 2, '', '2024-04-23', '3759-23/24', '2024-04-23'),
('20240505110024', '20240505110024', 'HO537', 'BGL18947', '202404241251190', '202405051059370', 'BGL-2024-04-0086', '1820', 2, '', '2024-04-30', '3952-23/24', '2024-05-30'),
('20240505112644', '20240505112644', 'HO537', 'BGL18970', '202404241136242', '202405051123312', 'BGL-2024-04-0089', '1819', 5, '', '2024-04-30', '3954-23/24', '2024-04-30'),
('20240505115936', '20240505115936', 'ho75', 'AKL7200', '202404281049400', '202405051158140', '2024-05-0001', '4136', 8, '', '2024-05-02', 'AKL/BK20240502', '2024-05-02'),
('20240505125250', '20240505125250', 'HO537', 'BGL18997', '202405051138040', '202405051251410', 'BGL-2024-04-0088', '1818', 12, '', '2024-04-30', '', '2024-05-05'),
('20240505125251', '20240505125251', 'HO537', 'BGL18997', '202405051138042', '202405051251412', 'BGL-2024-04-0088', '1818', 8, '', '2024-04-30', '', '2024-05-05'),
('20240506133003', '20240506133003', 'ho75', 'BWL14121', '202404171308593', '202405061325503', '2024-04-0066', 'BWL-ST-24', 1, '', '2024-05-27', 'RC/REP-3912-22/23', '2024-04-27'),
('20240506142140', '20240506142140', 'ho75', 'BWL14123', '202404201420280', '202405061418514', '2024-04-0068', 'BWL-ST-24', 1, '', '2024-04-23', 'AT-W-302/24', '2024-04-23'),
('20240506142142', '20240506142142', 'ho75', 'BWL14123', '202404201341143', '202405061418513', '2024-04-0068', 'BWL-ST-24', 1, '', '2024-04-23', 'AT-W-302/24', '2024-04-23'),
('20240506142144', '20240506142144', 'ho75', 'BWL14123', '202404201341142', '202405061418512', '2024-04-0068', 'BWL-ST-24', 1, '', '2024-04-23', 'AT-W-302/24', '2024-04-23'),
('20240506142147', '20240506142147', 'ho75', 'BWL14123', '202404201341141', '202405061418511', '2024-04-0068', 'BWL-ST-24', 1, '', '2024-04-23', 'AT-W-302/24', '2024-04-23'),
('20240506142149', '20240506142149', 'ho75', 'BWL14123', '202404201341140', '202405061418510', '2024-04-0068', 'BWL-ST-24', 1, '', '2024-04-23', 'AT-W-302/24', '2024-04-23'),
('20240506142746', '20240506142746', 'ho75', 'BWL14114', '202403301539430', '202405061426350', '2024-04-0065', 'BWL-ST-24', 1, '', '2024-04-24', 'INV-GBPIB-2024-004812', '2024-04-23'),
('20240506144456', '20240506144456', 'ho75', 'BWL14121', '202404171308592', '202405061442502', '2024-04-0067', 'BWL-ST-24', 1, '', '2024-04-24', 'INV-GBPIB-2024-E04816', '2024-04-23'),
('20240506144458', '20240506144458', 'ho75', 'BWL14121', '202404171308591', '202405061442501', '2024-04-0067', 'BWL-ST-24', 2, '', '2024-04-24', 'INV-GBPIB-2024-E04816', '2024-04-23'),
('20240506144500', '20240506144500', 'ho75', 'BWL14121', '202404171308590', '202405061442500', '2024-04-0067', 'BWL-ST-24', 2, '', '2024-04-24', 'INV-GBPIB-2024-E04816', '2024-04-23'),
('20240509151803', '20240509151803', 'ho75', 'AKL7702', '202404211552130', '202405091516340', '2024-05-0005', '4156', 1, '', '2024-05-05', '10521', '2024-05-09'),
('20240509153919', '20240509153919', 'ho75', 'AKL7704', '202404211109280', '202405091535370', '2024-05-0006', '4155', 1, '', '2024-05-05', '10524', '2024-05-05'),
('20240509155543', '20240509155543', 'ho75', 'AKL7408', '202404211150210', '202405091548390', '2024-05-0008', '4154', 1, '', '2024-05-05', '10522', '2024-05-05'),
('20240509163144', '20240509163144', 'ho75', 'AKL7609', '202404281700520', '202405091629260', '2024-05-0009', '4158', 1, '', '2024-05-05', 'FG24YINV0212', '2024-05-05'),
('20240509165221', '20240509165221', 'ho75', 'AKL7474', '202404030951510', '202405091639180', '2024-05-0004', '4145', 1, '', '2024-05-04', 'sel-b0-020524-005', '2024-05-04'),
('20240509171921', '20240509171921', 'ho75', 'AKL7712', '202404281112480', '202405091718180', '2024-05-0010', '4157', 1, '', '2024-05-05', 'FG24YINV0211', '2024-05-05'),
('20240511155806', '20240511155806', 'ho75', 'ATL278371', '202404281656332', '202405111555062', '2024-05-0002', 'ATL/GS/24/0363', 4, '', '2024-05-08', 'INV-GBPIB-2024-E05528', '2024-05-07'),
('20240511155810', '20240511155810', 'ho75', 'ATL278371', '202404281656333', '202405111555063', '2024-05-0002', 'ATL/GS/24/0363', 4, '', '2024-05-08', 'INV-GBPIB-2024-E05528', '2024-05-07'),
('20240511155813', '20240511155813', 'ho75', 'ATL278371', '202404281656334', '202405111555064', '2024-05-0002', 'ATL/GS/24/0363', 4, '', '2024-05-08', 'INV-GBPIB-2024-E05528', '2024-05-07'),
('20240515121704', '20240515121704', 'ho75', 'AKL7695', '202404291125101', '202405151215241', '2024-05-0040', '4200', 4, '', '2024-05-09', 'AKL/BK20240509', '2024-05-09'),
('20240515121706', '20240515121706', 'ho75', 'AKL7695', '202404291125100', '202405151215240', '2024-05-0040', '4200', 1, '', '2024-05-09', 'AKL/BK20240509', '2024-05-09'),
('20240515123200', '20240515123200', 'ho75', 'AKL7762', '202405021130513', '202405151230473', '2024-05-0050', '4201', 3, '', '2024-05-11', 'RC/REP-4194-23/24', '2024-05-11'),
('20240515123201', '20240515123201', 'ho75', 'AKL7762', '202405021130511', '202405151230471', '2024-05-0050', '4201', 2, '', '2024-05-11', 'RC/REP-4194-23/24', '2024-05-11'),
('20240515124631', '20240515124631', 'ho75', 'AKL7717', '202405041513330', '202405151244500', '2024-05-0049', '4202', 1, '', '2024-05-11', 'RC/REP-4187-23/24', '2024-05-11'),
('20240515125843', '20240515125843', 'ho75', 'AKL7716', '202405041517241', '202405151256571', '2024-05-0046', '4203', 1, '', '2024-05-11', 'RC/REP-4188-23/24', '2024-05-11'),
('20240516115229', '20240516115229', 'ho75', 'BWL14145', '202405081019220', '202405161151330', '2024-05-0031', 'BWL-ST-24', 1, '', '2024-05-11', 'FG24YINV0222', '2024-05-11'),
('20240516153944', '20240516153944', 'ho75', 'AKL7656', '202403301242030', '202405161538060', '2024-04-0049', '4081', 1, '', '2024-05-23', 'RC/REP-3761-23/24', '2024-04-23'),
('20240516155143', '20240516155143', 'ho75', 'AKL7674', '202404201115100', '202405161550410', '2024-04-0074', '4123', 1, '', '2024-04-30', 'RC/REP-3950-23/24', '2024-04-30'),
('20240516165208', '20240516165208', 'ho75', 'AKL7657', '202403311324320', '202405161650410', '2024-04-0080', '4122', 1, '', '2024-04-30', 'FG24YINV0208', '2024-04-30'),
('20240516170157', '20240516170157', 'ho75', 'AKL7598', '202403301006392', '202405161659122', '2024-04-0052', '4092', 3, '', '2024-04-24', 'INV-GBPIB-2024-E04815', '2024-04-23'),
('20240516170158', '20240516170158', 'ho75', 'AKL7598', '202403301006393', '202405161659123', '2024-04-0052', '4092', 4, '', '2024-04-24', 'INV-GBPIB-2024-E04815', '2024-04-23'),
('20240516171934', '20240516171934', 'ho75', 'AKL7527', '202403251307190', '202405161713570', '2024-04-0039', '4068', 8, '', '2024-04-18', 'AKL18042024', '2024-04-18'),
('20240516173608', '20240516173608', 'ho75', 'ATL278363', '202404281704570', '202405161734320', '2024-04-0084', '4120', 1, '', '2024-04-30', 'RC/REP-4011-23/24', '2024-04-30'),
('20240516175146', '20240516175146', 'ho75', 'ATL2906', '202404231323184', '202405161749304', '2024-04-0093', 'ATL-2 G/S-24/14 29', 1, '', '2024-04-29', 'AT-W-333/24', '2024-04-28'),
('20240516175148', '20240516175148', 'ho75', 'ATL2906', '202404231323183', '202405161749303', '2024-04-0093', 'ATL-2 G/S-24/14 29', 1, '', '2024-04-29', 'AT-W-333/24', '2024-04-28'),
('20240516175150', '20240516175150', 'ho75', 'ATL2906', '202404231323182', '202405161749302', '2024-04-0093', 'ATL-2 G/S-24/14 29', 1, '', '2024-04-29', 'AT-W-333/24', '2024-04-28'),
('20240516175152', '20240516175152', 'ho75', 'ATL2906', '202404231323181', '202405161749301', '2024-04-0093', 'ATL-2 G/S-24/14 29', 1, '', '2024-04-29', 'AT-W-333/24', '2024-04-28'),
('20240516175154', '20240516175154', 'ho75', 'ATL2906', '202404231323180', '202405161749300', '2024-04-0093', 'ATL-2 G/S-24/14 29', 1, '', '2024-04-29', 'AT-W-333/24', '2024-04-28'),
('20240518114218', '20240518114218', 'ho75', 'AKL7100', '202402041107510', '202405181140470', '2024-05-0056', '4234', 1, '', '2024-05-14', 'SEL-B0-140524-002', '2024-05-14'),
('20240518115034', '20240518115034', 'ho75', 'AKL7762', '202405021130510', '202405181149410', '2024-05-0055', '4232', 4, '', '2024-05-13', '10536', '2024-05-13'),
('20240520105014', '20240520105014', 'ho75', 'AKL7780', '202405061304530', '202405201044280', '2024-05-0072', '4250', 1, '', '2024-05-20', 'FG24YINV0235', '2024-05-15'),
('20240520105634', '20240520105634', 'ho75', 'AKL7567', '202403091708450', '202405201055130', 'CASH-0524', '4248', 1, 'KRY INTERNATIONAL', '2024-05-15', '2886', '2024-05-15'),
('20240520114023', '20240520114023', 'ho75', 'AKL4897', '202405201127500', '202405201139250', '2024-03-0061', '4251', 1, '', '2024-05-18', 'FG24YINV0230', '2024-05-14'),
('20240521172426', '20240521172426', 'HO537', 'BGL19229', '202405211554095', '202405211723315', 'BGL-2024-05-0062', '1916', 12, '', '2024-05-16', '10546', '2024-05-16'),
('20240521173046', '20240521173046', 'HO537', 'BGL19227', '202405211547551', '202405211729111', 'BGL-2024-05-0039', '1837', 2, '', '2024-05-11', '4191-23/24', '2024-05-11'),
('20240521173049', '20240521173049', 'HO537', 'BGL19227', '202405211547552', '202405211729112', 'BGL-2024-05-0039', '1837', 1, '', '2024-05-11', '4191-23/24', '2024-05-11'),
('20240521173727', '20240521173727', 'HO537', 'BGL18448', '202405211734070', '202405211736480', 'BGL-2023-12-0039', '1838', 1, '', '2024-05-12', '24050049', '2024-05-12'),
('20240521174830', '20240521174830', 'HO537', 'BGL19227', '202405211547550', '202405211747520', 'BGL-2024-05-0038', '1833', 2, '', '2024-05-09', 'S-343/24', '2024-05-09'),
('20240521175300', '20240521175300', 'HO537', 'BGL19229', '202405211554094', '202405211751114', 'BGL-2024-05-0034', '1832', 2, '', '2024-05-09', '342/24', '2024-05-09'),
('20240521180317', '20240521180317', 'HO537', 'BGL19228', '202405211614312', '202405211755412', 'BGL-2024-05-0030', '1840', 4, '', '2024-05-08', '140524-001', '2024-05-21'),
('20240521181244', '20240521181244', 'HO537', 'BGL19228', '202405211614310', '202405211811430', 'BGL-2024-05-0028', '1836', 4, '', '2024-05-21', '', '2024-05-21'),
('20240521181547', '20240521181547', 'HO537', 'BGL19230', '202405211557390', '202405211815180', 'BGL-2024-0040', '1839', 5, '', '2024-05-14', '', '2024-05-21'),
('20240521182436', '20240521182436', 'HO537', 'BGL19229', '202405211554090', '202405211823020', 'BGL-2024-05-0033', '1834', 5, '', '2024-05-11', '', '2024-05-21'),
('20240521182437', '20240521182437', 'HO537', 'BGL19229', '202405211554091', '202405211823021', 'BGL-2024-05-0033', '1834', 1, '', '2024-05-11', '', '2024-05-21'),
('20240521182438', '20240521182438', 'HO537', 'BGL19229', '202405211554092', '202405211823022', 'BGL-2024-05-0033', '1834', 1, '', '2024-05-11', '', '2024-05-21'),
('20240521182441', '20240521182441', 'HO537', 'BGL19229', '202405211554093', '202405211823023', 'BGL-2024-05-0033', '1834', 3, '', '2024-05-11', '', '2024-05-21'),
('20240521182805', '20240521182805', 'HO537', 'BGL19230', '202405211557393', '202405211827353', 'BGL-2024-05-0037', '1835', 2, '', '2024-05-21', '', '2024-05-21'),
('20240521182806', '20240521182806', 'HO537', 'BGL19230', '202405211557394', '202405211827354', 'BGL-2024-05-0037', '1835', 3, '', '2024-05-21', '', '2024-05-21'),
('20240529145038', '20240529145038', 'HO537', 'BGL19165', '202405291448410', '202405291449590', 'BGL-2024-05-0100', '1960', 2, '', '2024-05-27', '', '2024-05-27'),
('20240529145039', '20240529145039', 'HO537', 'BGL19165', '202405291448411', '202405291449591', 'BGL-2024-05-0100', '1960', 1, '', '2024-05-27', '', '2024-05-27'),
('20240529145734', '20240529145734', 'HO537', 'BGL19230', '202405211557391', '202405291455181', 'BGL-2024-05-0070', '1937', 10, '', '2024-05-20', '', '2024-05-20'),
('20240529145735', '20240529145735', 'HO537', 'BGL19230', '202405211557392', '202405291455182', 'BGL-2024-05-0070', '1937', 6, '', '2024-05-20', '', '2024-05-20'),
('20240529154447', '20240529154447', 'HO537', 'BGL19275', '202405211702510', '202405291544140', 'BGL-2024-05-0075', '1959', 1, '', '2024-05-26', '', '2024-05-26'),
('20240529162658', '20240529162658', 'HO537', 'BGL19270', '202405291625430', '202405291626400', 'BGL-2024-05-0089', '1939', 1, '', '2024-05-29', '', '2024-05-29'),
('20240529163237', '20240529163237', 'HO537', 'BGL19158', '202405291629270', '202405291632180', 'BGL-2024-05-0074', '1958', 1, '', '2024-05-29', '', '2024-05-29'),
('20240603112322', '20240603112322', 'HO95', 'BGL19161', '202405211532070', '202406031119420', 'BGL-2024-05-0105', '1966', 8, '', '2024-06-03', '2136', '2024-06-03'),
('20240603114409', '20240603114409', 'HO95', 'BGL19154', '202405211716230', '202406031121030', 'BGL2024-05-0082', '1938', 1, '', '2024-06-03', '230524-1', '2024-06-03'),
('20240609150926', '20240609150926', 'ho75', 'ATL2866', '202405181221180', '202406091507440', '2024-05-0116', 'ATL/GS/24/0450', 1, '', '2024-06-04', 'FG24YINV0263', '2024-06-04'),
('20240609151908', '20240609151908', 'ho75', 'ATL278392', '202405291120472', '202406091517092', '2024-05-0131', 'ATL/GS/24/0454', 2, '', '2024-06-01', 'RC/REP-4548-23/24', '2024-06-01'),
('20240609151911', '20240609151911', 'ho75', 'ATL278392', '202405291120471', '202406091517091', '2024-05-0131', 'ATL/GS/24/0454', 2, '', '2024-06-01', 'RC/REP-4548-23/24', '2024-06-01'),
('20240609151913', '20240609151913', 'ho75', 'ATL278392', '202405291120470', '202406091517090', '2024-05-0131', 'ATL/GS/24/0454', 2, '', '2024-06-01', 'RC/REP-4548-23/24', '2024-06-01'),
('20240609152556', '20240609152556', 'ho75', 'ATL278224', '202405291124471', '202406091524171', '2024-05-0130', 'ATL/GS/24/0455', 2, '', '2024-06-01', 'RC/REP-4544-23/24', '2024-06-01'),
('20240609152557', '20240609152557', 'ho75', 'ATL278224', '202405291124471', '202406091524171', '2024-05-0130', 'ATL/GS/24/0455', 2, '', '2024-06-01', 'RC/REP-4544-23/24', '2024-06-01'),
('20240609152558', '20240609152558', 'ho75', 'ATL278224', '202405291124470', '202406091524170', '2024-05-0130', 'ATL/GS/24/0455', 2, '', '2024-06-01', 'RC/REP-4544-23/24', '2024-06-01'),
('20240613163241', '20240613163241', 'ho75', 'BWL12207', '202405291109372', '202406131631122', '2024-06-0002', 'BWL-ST-24', 1, '', '2024-06-04', '', '2024-06-01'),
('20240613163243', '20240613163243', 'ho75', 'BWL12207', '202405291109371', '202406131631121', '2024-06-0002', 'BWL-ST-24', 1, '', '2024-06-04', '', '2024-06-01'),
('20240613163245', '20240613163245', 'ho75', 'BWL12207', '202405291109370', '202406131631120', '2024-06-0002', 'BWL-ST-24', 1, '', '2024-06-04', '', '2024-06-01'),
('20240629153640', '20240629153640', 'HO537', 'BGL19159', '202406291520220', '202406291527190', 'BGL-2024-06-0004', '2027', 1, '', '2024-06-03', 'E07055', '2024-06-29'),
('20240629153641', '20240629153641', 'HO537', 'BGL19159', '202406291520221', '202406291527191', 'BGL-2024-06-0004', '2027', 1, '', '2024-06-03', 'E07055', '2024-06-29'),
('20240629153642', '20240629153642', 'HO537', 'BGL19159', '202406291520224', '202406291527194', 'BGL-2024-06-0004', '2027', 1, '', '2024-06-03', 'E07055', '2024-06-29'),
('20240629153644', '20240629153644', 'HO537', 'BGL19159', '202406291520223', '202406291527193', 'BGL-2024-06-0004', '2027', 1, '', '2024-06-03', 'E07055', '2024-06-29'),
('20240629153645', '20240629153645', 'HO537', 'BGL19159', '202406291520223', '202406291527193', 'BGL-2024-06-0004', '2027', 1, '', '2024-06-03', 'E07055', '2024-06-29'),
('20240629154438', '20240629154438', 'HO537', 'BGL19329', '202406101332260', '202406291543460', 'BGL-2024-06-0033', '2030', 2, '', '2024-06-09', '4772-23/24', '2024-06-29'),
('20240629154440', '20240629154440', 'HO537', 'BGL19329', '202406101332261', '202406291543461', 'BGL-2024-06-0033', '2030', 1, '', '2024-06-09', '4772-23/24', '2024-06-29'),
('20240629155159', '20240629155159', 'HO537', 'BGL19327', '202406101345540', '202406291547510', 'BGL-2024-06-0044', '2029', 4, '', '2024-06-09', '4788-23/24', '2024-06-29'),
('20240629155200', '20240629155200', 'HO537', 'BGL19327', '202406101345541', '202406291547511', 'BGL-2024-06-0044', '2029', 4, '', '2024-06-09', '4788-23/24', '2024-06-29'),
('20240629155201', '20240629155201', 'HO537', 'BGL19327', '202406101345542', '202406291547512', 'BGL-2024-06-0044', '2029', 2, '', '2024-06-09', '4788-23/24', '2024-06-29'),
('20240629155202', '20240629155202', 'HO537', 'BGL19327', '202406101345543', '202406291547513', 'BGL-2024-06-0044', '2029', 2, '', '2024-06-09', '4788-23/24', '2024-06-29'),
('20240629155502', '20240629155502', 'HO537', 'BGL19354', '202406101338210', '202406291554130', 'BGL-2024-06-0050', '2032', 3, '', '2024-06-09', '4790-23/24', '2024-06-29'),
('20240629155737', '20240629155737', 'HO537', 'BGL19330', '202406101350252', '202406291556582', 'BGL-2024-06-0048', '2031', 2, '', '2024-06-09', '4789-23/24', '2024-06-29'),
('20240629160013', '20240629160013', 'HO537', 'BGL19327', '202406101345544', '202406291559364', 'BGL-2024-06-0045', '2034', 2, '', '2024-06-11', '422/24', '2024-06-29'),
('20240629160213', '20240629160213', 'HO537', 'BGL19329', '202406101332262', '202406291601382', 'BGL-2024-06-0035', '2033', 2, '', '2024-06-11', '429/24', '2024-06-29'),
('20240629160747', '20240629160747', 'HO537', 'BGL19170', '202405261801250', '202406291607020', 'BGL-2024-06-028', '2036', 10, '', '2024-06-08', '', '2024-06-29'),
('20240629161233', '20240629161233', 'HO537', 'BGL19177', '202406061734290', '202406291610030', 'BGL-2024-06-0032', '2037', 1, '', '2024-06-08', 'DC062024327', '2024-06-29'),
('20240629183223', '20240629183223', 'HO537', 'BGL19327', '202406101345545', '202406291826035', 'BGL-2024-06-0046', '2060', 12, '', '2024-06-11', '10596', '2024-06-29'),
('20240629183559', '20240629183559', 'HO537', 'BGL19061', '202405261334220', '202406291835130', 'BGL-2024-06-0001', '2028', 1, '', '2024-06-03', 'E07055', '2024-06-29'),
('20240629184022', '20240629184022', 'HO537', 'BGL19354', '202406101338212', '202406291839452', 'BGL-2024-06-0051', '2025', 3, '', '2024-06-10', '353', '2024-06-29'),
('20240629184358', '20240629184358', 'HO537', 'BGL19330', '202406101350250', '202406291842220', 'BGL-06-0047', '2061', 1, '', '2024-06-11', '10598', '2024-06-29'),
('20240629184713', '20240629184713', 'HO537', 'BGL19329', '202406101332263', '202406291846203', 'BGL-2024-06-0036', '2065', 3, '', '2024-06-09', '24/06/11493', '2024-06-29'),
('20240630094911', '20240630094911', 'HO537', 'BGL18440', '202404040959110', '202406300948230', 'BGL-2024-04-0074', '2057', 1, '', '2024-06-06', '2024-57935', '2024-06-30'),
('20240630095302', '20240630095302', 'HO537', 'BGL19330', '202406101350251', '202406300951281', 'BGL-2024-06-0049', '2064', 6, '', '2024-06-10', '007528', '2024-06-30'),
('20240630095615', '20240630095615', 'HO537', 'BGL19176', '202406061736590', '202406300954450', 'BGL-2024-06-0031', '2026', 3, '', '2024-06-09', 'FG24YINV0272', '2024-06-30'),
('20240630100254', '20240630100254', 'HO537', 'BGL19174', '202406101253440', '202406301001470', 'BGL-2024-06-0029', '2035', 1, '', '2024-06-08', '389/24', '2024-06-30'),
('20240630100255', '20240630100255', 'HO537', 'BGL19174', '202406101253442', '202406301001472', 'BGL-2024-06-0029', '2035', 1, '', '2024-06-08', '389/24', '2024-06-30'),
('20240630100258', '20240630100258', 'HO537', 'BGL19174', '202406101253444', '202406301001474', 'BGL-2024-06-0029', '2035', 1, '', '2024-06-08', '389/24', '2024-06-30'),
('20240630132245', '20240630132245', 'HO537', 'BGL19117', '202406301320270', '202406301321500', 'BGL-2024-05-0119', '2023', 2, '', '2024-06-03', '', '2024-06-30'),
('20240630132247', '20240630132247', 'HO537', 'BGL19117', '202406301320271', '202406301321501', 'BGL-2024-05-0119', '2023', 1, '', '2024-06-03', '', '2024-06-30'),
('20240704111742', '20240704111742', 'ho75', 'AKL7958', '202405271300090', '202407041113330', '2024-05-0110', '4337', 2, '', '2024-07-04', 'AT-413/24', '2024-05-30'),
('20240704113350', '20240704113350', 'ho75', 'AKL7678', '202405251647300', '202407041132480', '2024-05-0109', '4336', 1, '', '2024-07-04', 'AT-412/24', '2024-05-30'),
('20240704114510', '20240704114510', 'ho75', 'AKL7721', '202405091451500', '202407041143330', '2024-05-0074', '4257', 1, '', '2024-07-04', 'AT-372/24', '2024-05-16');
INSERT INTO `receive_insert` (`grnid`, `grnrid`, `suserid`, `mprid`, `simprid`, `sipoid`, `po`, `grn`, `rqty`, `rremarks`, `rdate`, `invoice`, `cdate`) VALUES
('20240704114512', '20240704114512', 'ho75', 'AKL7721', '202405091451502', '202407041143332', '2024-05-0074', '4257', 1, '', '2024-07-04', 'AT-372/24', '2024-05-16'),
('20240704114515', '20240704114515', 'ho75', 'AKL7721', '202405091451503', '202407041143333', '2024-05-0074', '4257', 1, '', '2024-07-04', 'AT-372/24', '2024-05-16'),
('20240704114517', '20240704114517', 'ho75', 'AKL7721', '202405091451504', '202407041143334', '2024-05-0074', '4257', 1, '', '2024-07-04', 'AT-372/24', '2024-05-16'),
('20240704114520', '20240704114520', 'ho75', 'AKL7721', '202405091451505', '202407041143335', '2024-05-0074', '4257', 1, '', '2024-07-04', 'AT-372/24', '2024-05-16'),
('20240704134456', '20240704134456', 'ho75', 'AKL4866', '202405161531300', '202407041344220', '2024-05-0081', '4324', 1, '', '2024-07-04', '10566', '2024-06-27'),
('20240704150529', '20240704150529', 'ho75', 'AKL7714', '202405041509500', '202407041503410', '2024-05-0061', '4231', 1, '', '2024-07-04', '10535', '2024-05-13'),
('20240704150532', '20240704150532', 'ho75', 'AKL7714', '202405041509501', '202407041503411', '2024-05-0061', '4231', 1, '', '2024-07-04', '10535', '2024-05-13'),
('20240704155415', '20240704155415', 'ho75', 'AKL7778', '202405051152500', '202407041552200', '2024-05-0073', '4270', 1, '', '2024-07-04', 'FG24YINV0241', '2024-05-19'),
('20240704162206', '20240704162206', 'ho75', 'AKL7786', '202405131240591', '202407041609351', '2024-05-0080', '4293', 3, '', '2024-07-04', 'RC/REP-4334-23/24', '2024-05-20'),
('20240704162208', '20240704162208', 'ho75', 'AKL7786', '202405131240590', '202407041609350', '2024-05-0080', '4293', 3, '', '2024-07-04', 'RC/REP-4334-23/24', '2024-05-20'),
('20240704162210', '20240704162210', 'ho75', 'AKL7786', '202405131240590', '202407041609350', '2024-05-0080', '4293', 3, '', '2024-07-04', 'RC/REP-4334-23/24', '2024-05-20'),
('20240704163536', '20240704163536', 'ho75', 'AKL7716', '202405041517240', '202407041627530', '2024-05-0044', '4244', 1, '', '2024-07-04', 'INV-GBPIB-2024-E05941', '2024-05-14'),
('20240704164627', '20240704164627', 'ho75', 'AKL7762', '202405021130512', '202407041643362', '2024-05-0051', '4246', 5, '', '2024-07-04', 'INV-GBPIB-2024-E05943', '2024-05-14'),
('20240704165246', '20240704165246', 'ho75', 'AKL7783', '202405091545580', '202407041651480', '2024-05-0070', '4245', 1, '', '2024-07-04', 'INV-GBPIB-2024-E05945', '2024-05-14');

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
('20240310154658', 'AKL7461', '3906'),
('20240311095351', 'BGL18301', '1531'),
('20240311102432', 'BGL18756', '1530'),
('20240311102953', 'BGL18780', '1529'),
('20240317144036', 'AKL7420', '3925'),
('20240320102146', 'AKL7453', '3953'),
('20240320102213', 'AKL7453', '3953'),
('20240321100511', 'BGL18530', '1585'),
('20240321101504', 'BGL18902', '1586'),
('20240321102103', 'BGL18902', '1586'),
('20240321105312', 'BGL18901', '1579'),
('20240321110318', 'BGL18904', '1577'),
('20240321131346', 'AKL7539', '3957'),
('20240321132154', 'AKL4862', '3956'),
('20240323131641', 'AKL7455', '3963'),
('20240323140459', 'AKL23558', '3973'),
('20240323141504', 'AKL23558', '3974'),
('20240323142450', 'AKL7539', '3975'),
('20240323142452', 'AKL7539', '3975'),
('20240331092335', 'BGL18534', '1665'),
('20240331092820', 'BGL18417', '1664'),
('20240331093337', 'BGL18902', '1661'),
('20240331093338', 'BGL18902', '1661'),
('20240331093339', 'BGL18902', '1661'),
('20240331093340', 'BGL18902', '1661'),
('20240331093618', 'BGL18910', '1662'),
('20240331094007', 'BGL18911', '1660'),
('20240331154537', 'BWL13836', 'BWL-ST-24'),
('20240331154538', 'BWL13836', 'BWL-ST-24'),
('20240331154951', 'BWL13836', 'BWL-ST-24'),
('20240401090035', 'BWL13836', 'BWL-ST-24'),
('20240401090037', 'BWL13836', 'BWL-ST-24'),
('20240401132253', 'ATL278088', 'ATL/GS/24/0212'),
('20240401134100', 'ATL278101', 'ATL/GS/24/0213'),
('20240401134136', 'ATL278101', 'ATL/GS/24/0213'),
('20240401134150', 'ATL278101', 'ATL/GS/24/0213'),
('20240401134219', 'ATL278101', 'ATL/GS/24/0213'),
('20240401141331', 'AKL7564', '3959'),
('20240401142450', 'AKL23558', '3955'),
('20240402100504', 'AKL7562', '3893'),
('20240402100507', 'AKL7562', '3893'),
('20240402105802', 'ATL278097', 'ATL/GS/24/0253'),
('20240402105805', 'ATL278097', 'ATL/GS/24/0253'),
('20240402112220', 'ATL2864', 'ATL/GS/24/0250'),
('20240402112223', 'ATL2864', 'ATL/GS/24/0250'),
('20240402113055', 'ATL278097', 'ATL/GS/24/0249'),
('20240402113056', 'ATL278097', 'ATL/GS/24/0249'),
('20240402113058', 'ATL278097', 'ATL/GS/24/0249'),
('20240403094105', 'ATL278097', 'ATL/GS/24/0257'),
('20240403094107', 'ATL278097', 'ATL/GS/24/0257'),
('20240403121236', 'AKL23558', '3994'),
('20240403123645', 'BRL16876', '102'),
('20240403123759', 'BRL16876', '104'),
('20240403123946', 'BRL16876', '103'),
('20240403124055', 'BRL16876', '105'),
('20240403124334', 'BASL18421', 'BASL-95/24'),
('20240404154808', 'ATL278097', 'ATL/GS/24/0269'),
('20240404155132', 'ATL278097', 'ATL/GS/24/0268'),
('20240407131200', 'ATL278088', 'ATL/GS/24/0227'),
('20240408090506', 'AKL7461', 'ATL/GS/24/0272'),
('20240408090507', 'AKL7461', 'ATL/GS/24/0272'),
('20240408090509', 'AKL7461', 'ATL/GS/24/0272'),
('20240417114625', 'ATL278097', 'ATL/GS/24/0268'),
('20240420113600', 'AKL7598', '4048'),
('20240420114518', 'AKL18540', '4049'),
('20240422161431', 'ATL278097', '4008'),
('20240422164515', 'AKL7539', '4013'),
('20240422164516', 'AKL7539', '4013'),
('20240422165420', 'AKL7568', '4007'),
('20240424102805', 'BWL14114', 'BWL-ST-24'),
('20240424131325', 'BGL13063', '1701'),
('20240424134631', 'BGL18432', '1702'),
('20240424141223', 'BGL18968', '1699'),
('20240424141840', 'BGL18969', '1700'),
('20240424142139', 'BGL18969', '1766'),
('20240427123614', 'ATL278361', 'ATL/GS/24/0323'),
('20240427141920', 'ATL21320', 'ATL/GS/24/320'),
('20240427142931', 'ATL278363', 'ATL/GS/24/0319'),
('20240427144027', 'ATL278363', 'ATL/GS/24/0324'),
('20240427144044', 'ATL278363', 'ATL/GS/24/0324'),
('20240427145424', 'ATL278362', 'ATL/GS/24/0322'),
('20240504163110', 'ATL278371', 'ATL/GS/24/0352'),
('20240505095216', 'BGL18445', '1796'),
('20240505095422', 'BGL18443', '1795'),
('20240505100656', 'BGL18970', '1790'),
('20240505100657', 'BGL18970', '1790'),
('20240505100910', 'BGL18444', '1779'),
('20240505102305', 'BGL19151', '1814'),
('20240505102306', 'BGL19151', '1814'),
('20240505102500', 'BGL18435', '1816'),
('20240505102822', 'BGL18970', '1817'),
('20240505103844', 'BGL18970', '1792'),
('20240505104752', 'BGL18969', '1793'),
('20240505104753', 'BGL18969', '1793'),
('20240505105023', 'BGL18968', '1791'),
('20240505105410', 'BGL18970', '1794'),
('20240505110024', 'BGL18947', '1820'),
('20240505112644', 'BGL18970', '1819'),
('20240505115936', 'AKL7200', '4136'),
('20240505125250', 'BGL18997', '1818'),
('20240505125251', 'BGL18997', '1818'),
('20240506133003', 'BWL14121', 'BWL-ST-24'),
('20240506142140', 'BWL14123', 'BWL-ST-24'),
('20240506142142', 'BWL14123', 'BWL-ST-24'),
('20240506142144', 'BWL14123', 'BWL-ST-24'),
('20240506142147', 'BWL14123', 'BWL-ST-24'),
('20240506142149', 'BWL14123', 'BWL-ST-24'),
('20240506142746', 'BWL14114', 'BWL-ST-24'),
('20240506144456', 'BWL14121', 'BWL-ST-24'),
('20240506144458', 'BWL14121', 'BWL-ST-24'),
('20240506144500', 'BWL14121', 'BWL-ST-24'),
('20240509151803', 'AKL7702', '4156'),
('20240509153919', 'AKL7704', '4155'),
('20240509155543', 'AKL7408', '4154'),
('20240509163144', 'AKL7609', '4158'),
('20240509165221', 'AKL7474', '4145'),
('20240509171921', 'AKL7712', '4157'),
('20240511155806', 'ATL278371', 'ATL/GS/24/0363'),
('20240511155810', 'ATL278371', 'ATL/GS/24/0363'),
('20240511155813', 'ATL278371', 'ATL/GS/24/0363'),
('20240515121704', 'AKL7695', '4200'),
('20240515121706', 'AKL7695', '4200'),
('20240515123200', 'AKL7762', '4201'),
('20240515123201', 'AKL7762', '4201'),
('20240515124631', 'AKL7717', '4202'),
('20240515125843', 'AKL7716', '4203'),
('20240516115229', 'BWL14145', 'BWL-ST-24'),
('20240516153944', 'AKL7656', '4081'),
('20240516155143', 'AKL7674', '4123'),
('20240516165208', 'AKL7657', '4122'),
('20240516170157', 'AKL7598', '4092'),
('20240516170158', 'AKL7598', '4092'),
('20240516171934', 'AKL7527', '4068'),
('20240516173608', 'ATL278363', '4120'),
('20240516175146', 'ATL2906', 'ATL-2 G/S-24/14 29'),
('20240516175148', 'ATL2906', 'ATL-2 G/S-24/14 29'),
('20240516175150', 'ATL2906', 'ATL-2 G/S-24/14 29'),
('20240516175152', 'ATL2906', 'ATL-2 G/S-24/14 29'),
('20240516175154', 'ATL2906', 'ATL-2 G/S-24/14 29'),
('20240518114218', 'AKL7100', '4234'),
('20240518115034', 'AKL7762', '4232'),
('20240520105014', 'AKL7780', '4250'),
('20240520105634', 'AKL7567', '4248'),
('20240520114023', 'AKL4897', '4251'),
('20240521172426', 'BGL19229', '1916'),
('20240521173046', 'BGL19227', '1837'),
('20240521173049', 'BGL19227', '1837'),
('20240521173727', 'BGL18448', '1838'),
('20240521174830', 'BGL19227', '1833'),
('20240521175300', 'BGL19229', '1832'),
('20240521180317', 'BGL19228', '1840'),
('20240521181244', 'BGL19228', '1836'),
('20240521181547', 'BGL19230', '1839'),
('20240521182436', 'BGL19229', '1834'),
('20240521182437', 'BGL19229', '1834'),
('20240521182438', 'BGL19229', '1834'),
('20240521182441', 'BGL19229', '1834'),
('20240521182805', 'BGL19230', '1835'),
('20240521182806', 'BGL19230', '1835'),
('20240529145038', 'BGL19165', '1960'),
('20240529145039', 'BGL19165', '1960'),
('20240529145734', 'BGL19230', '1937'),
('20240529145735', 'BGL19230', '1937'),
('20240529154447', 'BGL19275', '1959'),
('20240529162658', 'BGL19270', '1939'),
('20240529163237', 'BGL19158', '1958'),
('20240603112322', 'BGL19161', '1966'),
('20240603114409', 'BGL19154', '1938'),
('20240609150926', 'ATL2866', 'ATL/GS/24/0450'),
('20240609151908', 'ATL278392', 'ATL/GS/24/0454'),
('20240609151911', 'ATL278392', 'ATL/GS/24/0454'),
('20240609151913', 'ATL278392', 'ATL/GS/24/0454'),
('20240609152556', 'ATL278224', 'ATL/GS/24/0455'),
('20240609152557', 'ATL278224', 'ATL/GS/24/0455'),
('20240609152558', 'ATL278224', 'ATL/GS/24/0455'),
('20240613163241', 'BWL12207', 'BWL-ST-24'),
('20240613163243', 'BWL12207', 'BWL-ST-24'),
('20240613163245', 'BWL12207', 'BWL-ST-24'),
('20240629153640', 'BGL19159', '2027'),
('20240629153641', 'BGL19159', '2027'),
('20240629153642', 'BGL19159', '2027'),
('20240629153644', 'BGL19159', '2027'),
('20240629153645', 'BGL19159', '2027'),
('20240629154438', 'BGL19329', '2030'),
('20240629154440', 'BGL19329', '2030'),
('20240629155159', 'BGL19327', '2029'),
('20240629155200', 'BGL19327', '2029'),
('20240629155201', 'BGL19327', '2029'),
('20240629155202', 'BGL19327', '2029'),
('20240629155502', 'BGL19354', '2032'),
('20240629155737', 'BGL19330', '2031'),
('20240629160013', 'BGL19327', '2034'),
('20240629160213', 'BGL19329', '2033'),
('20240629160747', 'BGL19170', '2036'),
('20240629161233', 'BGL19177', '2037'),
('20240629183223', 'BGL19327', '2060'),
('20240629183559', 'BGL19061', '2028'),
('20240629184022', 'BGL19354', '2025'),
('20240629184358', 'BGL19330', '2061'),
('20240629184713', 'BGL19329', '2065'),
('20240630094911', 'BGL18440', '2057'),
('20240630095302', 'BGL19330', '2064'),
('20240630095615', 'BGL19176', '2026'),
('20240630100254', 'BGL19174', '2035'),
('20240630100255', 'BGL19174', '2035'),
('20240630100258', 'BGL19174', '2035'),
('20240630132245', 'BGL19117', '2023'),
('20240630132247', 'BGL19117', '2023'),
('20240704111742', 'AKL7958', '4337'),
('20240704113350', 'AKL7678', '4336'),
('20240704114510', 'AKL7721', '4257'),
('20240704114512', 'AKL7721', '4257'),
('20240704114515', 'AKL7721', '4257'),
('20240704114517', 'AKL7721', '4257'),
('20240704114520', 'AKL7721', '4257'),
('20240704134456', 'AKL4866', '4324'),
('20240704150529', 'AKL7714', '4231'),
('20240704150532', 'AKL7714', '4231'),
('20240704155415', 'AKL7778', '4270'),
('20240704162206', 'AKL7786', '4293'),
('20240704162208', 'AKL7786', '4293'),
('20240704162210', 'AKL7786', '4293'),
('20240704163536', 'AKL7716', '4244'),
('20240704164627', 'AKL7762', '4246'),
('20240704165246', 'AKL7783', '4245');

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
('AKL1212'),
('AKL13274'),
('AKL169'),
('AKL216'),
('AKL35329'),
('AKL37369'),
('AKL393'),
('AKL43030'),
('AKL841'),
('ATL0000'),
('ATL3444'),
('ATL4021'),
('ATL42878'),
('ATL4300'),
('ATL4574'),
('BWL1438'),
('BWL1571'),
('BWL1675'),
('BWL53'),
('HO1019'),
('HO1191'),
('HO1198'),
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
(29, 'WEKI SOLUTION'),
(30, 'Smart Technology (BD) Ltd'),
(31, 'Micro Marks Electronics '),
(32, 'Knowledge Infotech');

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
('AKL', 9, 63, 'Md. Miraz Hossain', 'miraz@babylon-bd.com', '01749918095', '2', 'AKL1212', 'AKL1212', '', '', '1', '0000-00-00'),
('AKL', 6, 63, 'Jel Haque', '', '', '2', 'AKL13274', 'AKL13274', '', '', '1', '0000-00-00'),
('ATL', 22, 9, 'Shamol', '', '01733568757', '2', 'AKL169', 'AKL169', '', '', '1', '0000-00-00'),
('AKL', 10, 9, 'Sirajul Islam Siraj', '', '', '2', 'AKL216', 'AKL216', '', '', '1', '0000-00-00'),
('AKL', 2, 9, 'Milon', '', '', '2', 'AKL35329', 'AKL35329', '', '', '1', '0000-00-00'),
('AKL', 11, 69, 'Nazmul Kabir Sumon', '', '', '2', 'AKL37369', 'AKL37369', '', '', '1', '0000-00-00'),
('AKL', 2, 5, 'Faruk Hossain', '', '', '2', 'AKL393', 'AKL393', '', '', '1', '0000-00-00'),
('AKL', 8, 63, 'Mozaffor', 'aklstore6@babylon-bd.com', '01740014377', '2', 'AKL43030', 'AKL43030', '', '', '1', '0000-00-00'),
('AKL', 12, 63, 'Nazmul Haque', '', '', '', 'AKL841', 'AKL841', '', '', '1', '0000-00-00'),
('ATL', 21, 95, 'Dewan Mahbub Kamran', 'atlconsultant@babylon-bd.com', ' 01710879554 ', '2', 'ATL0000', 'ATL0000', '', '', '1', '0000-00-00'),
('ATL', 22, 63, 'Mr. Shafiq', '', '', '2', 'ATL230', 'ATL230', '', '', '1', '0000-00-00'),
('ATL', 8, 52, 'Md Sumon', '', '', '2', 'ATL3444', 'ATL3444', '', '', '1', '0000-00-00'),
('ATL', 4, 63, 'Ikramul Hasan', '', '01632300288', '2', 'ATL4021', 'ATL4021', '', '', '1', '0000-00-00'),
('ATL', 22, 5, 'Mr. Siddique', '', '', '2', 'ATL4209', 'ATL4209', '', '', '1', '0000-00-00'),
('ATL', 23, 83, 'Monir', '', '', '2', 'ATL42878', 'ATL42878', '', '', '1', '0000-00-00'),
('ATL', 5, 9, 'Shaikh Mrinmoy Zaman', 'atlhrac@babylon-bd.com', '01716622784', '2', 'ATL4300', 'ATL4300', '', '', '1', '0000-00-00'),
('ATL', 25, 4, 'Ali Ajgor', 'atlmaintenance@babylon-bd.com', '01677570267', '2', 'ATL4574', 'ATL4574', '', '', '1', '0000-00-00'),
('BWL', 8, 25, 'Washim', '', '', '2', 'BWL1438', 'BWL1438', '', '', '1', '0000-00-00'),
('BWL', 23, 83, 'Ali Hossain Amin', '', '', '2', 'BWL1571', 'BWL1571', '', '', '1', '0000-00-00'),
('BWL', 8, 9, 'Abdul Halim Badal', 'halim@babylon-bd.com', '01714320356', '2', 'BWL1675', 'BWL1675', '', '', '1', '0000-00-00'),
('BWL', 8, 63, 'Ali Noor', '', '', '', 'BWL53', 'BWL53', '', '', '1', '0000-00-00'),
('HO', 26, 63, 'Ratan Kumar Saha', '', '', '2', 'HO1019', 'HO1019', '', '', '1', '0000-00-00'),
('HO', 1, 6, 'Shukur Ali', '', '', '1', 'HO112', 'HO112', '123456', 'shukur.jpg', '1', '0000-00-00'),
('AKL', 26, 42, 'Quazi Quadiruzzaman', 'quazi@babylon-bd.com', '01711218580', '2', 'HO1191', 'HO1191', '', '', '1', '0000-00-00'),
('AKL', 19, 58, 'Md. Ashraful Bari Khandakar', 'ashrafulmkt@babylon-bd.com', '01833789888', '2', 'HO1198', 'HO1198', '', '', '1', '0000-00-00'),
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
-- Structure for view `mpr_wise_receive_list_view1`
--
DROP TABLE IF EXISTS `mpr_wise_receive_list_view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mpr_wise_receive_list_view1`  AS  select `mpr_insert_id`.`mprid` AS `mprid`,`mpr_insert_id`.`fid` AS `fid`,`product_category_insert`.`pccode` AS `pccode`,`item_insert`.`item` AS `item`,`product_category_insert`.`pcname` AS `pcname`,`mpr_insert`.`model` AS `model`,`receive_insert`.`po` AS `po`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,`mpr_insert`.`price` AS `price`,`mpr_insert`.`remarks` AS `remarks`,`mpr_insert`.`uname` AS `uname`,`mpr_insert_id`.`mdate` AS `mdate`,`receive_insert`.`grn` AS `grn`,`receive_insert`.`rqty` AS `rqty`,`receive_insert`.`rdate` AS `rdate`,`mpr_insert`.`description` AS `description`,`receive_insert`.`simprid` AS `simprid`,`receive_insert`.`sipoid` AS `sipoid`,`product_insert`.`pcode` AS `pcode`,`product_insert`.`pname` AS `pname` from ((((((`mpr_insert_id` join `mpr_insert` on(`mpr_insert`.`smprid` = `mpr_insert_id`.`smprid`)) left join `receive_insert` on(`receive_insert`.`simprid` = `mpr_insert`.`simprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_insert` on(`product_insert`.`pcode` = `mpr_insert`.`mpcode`)) join `item_insert` on(`item_insert`.`itemcode` = `mpr_insert`.`model`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `product_insert`.`pccode`)) ;

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
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desigid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

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
  MODIFY `supplierid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
