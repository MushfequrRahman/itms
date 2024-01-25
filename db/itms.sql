-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 12:46 PM
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
('20240120115732', 'A4Tech');

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
(12, 'Accounts');

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
(94, 'Wash Technician');

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
('20240123154319', 'None', 'NVR'),
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
('20240125133141', 'Toner 76A', 'TNR');

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
('20240113123136', '202401131231360', 'IPT', '20240113122908', '', 2, 1, '1 for Replacement and another for New', 4600, 'Replace faulty set and new one', 'Shafiq - Fabric store,', 0),
('20240114102604', '202401141026040', 'SCN', '20240114102233', '', 1, 5, 'SCANNER LIDE -300 CANNON', 20000, '', '', 0),
('20240114104041', '202401141040410', 'TNR', '20240111140218', '', 2, 1, '', 1, '', 'AFL USER', 0),
('20240114104041', '202401141040411', 'TNR', '20240111140250', '', 4, 1, '', 1, '', 'AFL USER', 0),
('20240114104041', '202401141040412', 'TNR', '20240113094956', '', 2, 1, '', 1, '', 'AFL USER', 0),
('20240114104041', '202401141040413', 'TNR', '20240113103017', '', 3, 1, '', 1, '', 'AFL USER', 0),
('20240114104041', '202401141040414', 'TNR', '20240113095022', '', 2, 1, '', 2, '', 'AFL USER', 0),
('20240114104041', '202401141040415', 'CTG', '20240113095222', '', 12, 3, '', 2, '', 'AFL USER', 0),
('20240116164442', '202401161644420', 'HDD', '20240116164039', '20240116164212', 1, 1, 'WD 1TB HDD', 4600, '', 'Replace faulty  HDD', 0),
('20240117111832', '202401171118320', 'CBL', '20240113113547', '20240117104145', 1, 2, 'networking purpose', 19500, '', 'networking purpose', 0),
('20240117111832', '202401171118331', 'FCBL', '20240117105727', '20240117104145', 300, 7, 'networking purpose', 20, '', 'networking purpose', 0),
('20240117111832', '202401171118332', 'SFP', '20240117104905', '20240117104145', 4, 1, 'networking purpose', 2000, '', 'networking purpose', 0),
('20240117115010', '202401171150100', 'CBL', '20240113113547', '20240117105230', 1, 2, 'networking purpose', 19500, '', 'BDL Use ', 0),
('20240120125700', '202401201257000', 'OFUPS', '20240120124900', '20240117104145', 1, 1, 'New UPS for Security', 3800, '', 'for new system', 0),
('20240120125700', '202401201257001', 'CTG', '20240113095331', '20240120115642', 1, 1, 'HR use', 3200, '', 'monthly use', 0),
('20240120125700', '202401201305240', 'UMS', '20240120125552', '20240120115732', 2, 1, '', 450, '', '', 0),
('20240120125700', '202401201305241', 'UKB', '20240120125759', '20240120115732', 2, 1, '', 950, '', '', 0),
('20240121125819', '202401211258190', 'LPT', '20240111125009', '20240117104145', 1, 1, 'Core i3, 8GB RAM, SSD 256, HDD 1TB, 14 Inch', 68000, '', 'Previous Sr. Mgrs old laptop were handover to Sr. ', 0),
('20240121130911', '202401211309110', 'PTRPR', '20240121125832', '20240117104145', 1, 1, '', 4800, '', '', 0),
('20240121130911', '202401211309121', 'HTRPCR', '20240121123926', '20240117104145', 1, 1, '', 4200, '', '', 0),
('20240121130911', '202401211309122', 'CPRGR', '20240121130508', '20240117104145', 3, 1, '', 1000, '', '', 0),
('20240122103642', '202401221036420', 'CTG', '20240113095222', '20240117104145', 8, 1, 'BOK Cartridge', 2060, '', 'For Feb 24 use', 0),
('20240125114230', '202401251142300', 'LPT', '20240111124947', '20240117104145', 1, 5, 'Core i3, 8GB RAM, SSD 256, HDD 1TB, 14 inch', 68000, '', 'Previous Finishing Manager old laptop were handove', 0),
('20240125133417', '202401251334170', 'TNR', '20240125133141', '20240117104145', 2, 1, 'Monthly', 1650, '', 'Store Stock', 0),
('20240125133417', '202401251334171', 'HDD', '20240121120834', '20240116164212', 1, 1, 'For emergency support', 5000, '', 'Store Stock', 0);

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
  `mpstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mpr_insert_id`
--

INSERT INTO `mpr_insert_id` (`smprid`, `suserid`, `mprid`, `fid`, `mdeptid`, `name`, `mdesigid`, `mdate`, `mpstatus`) VALUES
('20240113113926', 'HO75', 'AKL7413', 'AKL', 1, 'Shukur Ali', 11, '2024-01-13', 0),
('20240113123136', 'HO75', 'ATL278060', 'ATL', 8, 'Badiul Alam', 72, '2024-01-13', 0),
('20240114102604', 'ho12', 'AFL16330', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-06', 0),
('20240114104041', 'ho12', 'AFL16316', 'AFL', 8, 'MR. JEWEL', 9, '2024-01-01', 0),
('20240116164442', 'HO75', 'ATL278061', 'ATL', 8, 'Sumon Hossain', 63, '2024-01-16', 0),
('20240117111832', 'HO147', 'AFL16338', 'AFL', 8, 'Md. Jewel', 9, '2024-01-16', 0),
('20240117111833', '', '', '', 0, '', 0, '0000-00-00', 0),
('20240117115010', 'HO147', 'AFL16335', 'AFL', 8, 'Md. Jewel', 9, '2024-01-15', 0),
('20240120125700', 'HO75', 'BWL14199', 'BWL', 8, 'Abdul Halim Badal', 4, '2024-01-20', 0),
('20240121125759', '', '', '', 0, '', 0, '0000-00-00', 0),
('20240121125805', '', '', '', 0, '', 0, '0000-00-00', 0),
('20240121125819', 'HO75', 'ATL24390', 'ATL', 5, 'Mustakin Rahman', 9, '2024-01-21', 0),
('20240121130911', 'HO95', 'BGL18408', 'BGL', 9, 'Sushanto', 4, '2024-01-15', 0),
('20240121130912', '', '', '', 0, '', 0, '0000-00-00', 0),
('20240122103642', 'HO75', 'AKL7199', 'AKL', 10, 'Alamgir Sheak', 72, '2024-01-22', 0),
('20240125114230', 'HO75', 'AFL27390', 'AFL', 5, 'Mostakim Rahman', 9, '2024-01-21', 0),
('20240125133417', 'HO75', 'ATL278067', 'ATL', 8, 'Badiul Alam', 4, '2024-01-25', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `po_insert_id`
--

CREATE TABLE `po_insert_id` (
  `spoid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('CBL', '20230820083757', '20230822072519', '20240108102520', 'UTP Cable (Cat6)'),
('CBTR', '20230820083757', '20230822072519', '20240108102520', 'CMOS Battery'),
('CF', '20230820083757', '20230822072519', '20240108102520', 'Cooling Fan (CPU)'),
('CLB', '20230820083757', '20230822072537', '20240108102127', 'Cleaning Blade'),
('CPR', '20230820083743', '20230822072652', '20230822082854', 'Copier'),
('CPRDM', '20230820083757', '20230822072537', '20240108102127', 'Copier Drum'),
('CPRDR', '20230820083757', '20230822072537', '20240108102127', 'Copier Developer'),
('CPRGR', '20230820083757', '20230822072537', '20240108102127', 'Copier Gear'),
('CSG', '20230820083757', '20230822072519', '20240108102520', 'Casing (CPU)'),
('CSR', '20230820083757', '20230822072537', '20240108102127', 'Copier Scraper'),
('CTG', '20230820083757', '20230822072551', '20240108105112', 'Cartridge'),
('DKTP', '20230820083743', '20230822072652', '20230822082725', 'Desktop'),
('FCBL', '20230820083757', '20230822072519', '20240108102520', 'Fiber Cable'),
('FW', '20230820083743', '20230822072652', '20230822082942', 'Firewall'),
('HDD', '20230820083757', '20230822072519', '20240108102520', 'Hard Disk Drive'),
('HP', '20230820083757', '20230822072519', '20240108102520', 'Headphone'),
('HTRPCR', '20230820083757', '20230822072537', '20240108102127', 'Heat Roller'),
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
('NFP', '20230820083757', '20230822072519', '20240108102520', 'Faceplate'),
('NMDL', '20230820083757', '20230822072519', '20240108102520', 'Modular'),
('NPP', '20230820083757', '20230822072519', '20240108102520', 'Patch Panel(NPP)'),
('NTRK', '20230820083743', '20230822072652', '20230822083502', 'Network Rack'),
('NTSW', '20230820083743', '20230822072652', '20230822083005', 'Network Switch'),
('NVR', '20230820083743', '20230822072652', '20230822083355', 'NVR'),
('OFUPS', '20230820083743', '20230822072652', '20240120074424', 'Offline UPS'),
('OUPS', '20230820083743', '20230822072652', '20230822083051', 'Online UPS'),
('PD', '20230820083757', '20230822072519', '20240108102520', 'Pendrive'),
('PJTR', '20230820083743', '20230822072652', '20230822082919', 'Projector'),
('PLT', '20230820083743', '20230822072652', '20240122114924', 'Plotter'),
('PP', '20230820083757', '20230822072519', '20240108102520', 'Patch Panel'),
('PSU', '20230820083757', '20230822072519', '20240108102520', 'Power Supply'),
('PTR', '20230820083743', '20230822072652', '20230822082821', 'Printer'),
('PTRFF', '20230820083757', '20230822072537', '20240108102127', 'Fuser Film'),
('PTRGR', '20230820083757', '20230822072537', '20240108102127', 'Printer Gear'),
('PTRPCR', '20230820083757', '20230822072537', '20240108102127', 'Pickup Roller'),
('PTRPR', '20230820083757', '20230822072537', '20240108102127', 'Pressure Roller'),
('RAM', '20230820083757', '20230822072519', '20240108102520', 'RAM'),
('RCB', '20230820083757', '20230822072537', '20240108102127', 'RC Blade'),
('RJC', '20230820083757', '20230822072519', '20240108102520', 'RJ45 Connector'),
('SCN', '20230820083743', '20230822072652', '20230822082828', 'Scanner'),
('SFP', '20230820083757', '20230822072519', '20240108102520', 'SFP Modular'),
('SSD', '20230820083757', '20230822072519', '20240108102520', 'SSD'),
('TNR', '20230820083757', '20230822072551', '20240108105102', 'Toner'),
('UKB', '20230820083757', '20230822072519', '20240108102520', 'Keyboard USB'),
('ULC', '20230820083757', '20230822072519', '20240108102520', 'USB Lan Card'),
('UMS', '20230820083757', '20230822072519', '20240108102520', 'Mouse USB'),
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
('20240122114924', '20230820083743', '20230822072652', 'Plotter');

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
(11, 'Wireless M');

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

-- --------------------------------------------------------

--
-- Table structure for table `receive_insert_id`
--

CREATE TABLE `receive_insert_id` (
  `grnid` varchar(50) NOT NULL,
  `mprid` varchar(50) NOT NULL,
  `grn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `po_qty_remaining`  AS  select `mpr_insert_id`.`mprid` AS `mprid`,`mpr_insert_id`.`fid` AS `fid`,`product_category_insert`.`pcname` AS `pcname`,`product_insert`.`pname` AS `pname`,`mpr_insert`.`model` AS `model`,`po_insert_view`.`simprid` AS `simprid`,`mpr_insert`.`mpcode` AS `pcode`,`mpr_insert`.`qty` AS `qty`,`product_uom_insert`.`puom` AS `puom`,sum(`po_insert_view`.`pqty`) AS `prqty`,sum(`po_insert_view`.`mpprice`) AS `tpprice` from (((((((`po_insert_view` join `mpr_insert` on(`mpr_insert`.`simprid` = `po_insert_view`.`simprid`)) join `mpr_insert_id` on(`mpr_insert`.`smprid` = `mpr_insert_id`.`smprid`)) join `product_uom_insert` on(`product_uom_insert`.`puomid` = `mpr_insert`.`uom`)) join `product_insert` on(`product_insert`.`pcode` = `mpr_insert`.`mpcode`)) join `product_category_insert` on(`product_category_insert`.`pccode` = `product_insert`.`pccode`)) join `department` on(`department`.`deptid` = `mpr_insert_id`.`mdeptid`)) join `designation` on(`designation`.`desigid` = `mpr_insert_id`.`mdesigid`)) group by `po_insert_view`.`simprid` ;

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
  MODIFY `deptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `desigid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

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
  MODIFY `puomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
