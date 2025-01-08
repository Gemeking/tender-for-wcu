-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 06:29 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3


CREATE TABLE webhook_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
   
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    currency VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    
    date DATE,
    
);






SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tender`
--

-- --------------------------------------------------------

--
-- Table structure for table `approveditems`
--

CREATE TABLE IF NOT EXISTS `approveditems` (
`id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `date` date NOT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `Discription` varchar(2000) NOT NULL,
  `quantity` int(200) NOT NULL,
  `unitprice` int(100) NOT NULL,
  `totalprice` int(200) NOT NULL,
  `winnername` varchar(100) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `abstraction` varchar(1000) NOT NULL,
  `scname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assessdsupplier`
--

CREATE TABLE IF NOT EXISTS `assessdsupplier` (
`id` int(25) NOT NULL,
  `campany_name` varchar(30) NOT NULL,
  `tin_no` int(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(100) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `no` int(100) NOT NULL,
  `prepare_date` date DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `item_model` varchar(20) NOT NULL,
  `market_birr` int(11) DEFAULT NULL,
  `supplier_birr` int(11) DEFAULT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `assess_date` date NOT NULL,
  `assess` varchar(200) NOT NULL,
  `reason` varchar(2000) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessdsupplier`
--

INSERT INTO `assessdsupplier` (`id`, `campany_name`, `tin_no`, `city`, `email`, `telephone`, `fax_no`, `no`, `prepare_date`, `item_name`, `item_model`, `market_birr`, `supplier_birr`, `open_date`, `close_date`, `assess_date`, `assess`, `reason`, `status`) VALUES
(1, 'senysaid', 34567890, 'Aksum', 'me@gmail.com', 945678954, '3456777784', 3, '2019-06-08', 'projector', '4545', 30000, 25000, '2019-06-01', '2019-06-15', '2019-06-08', 'Winner', ' write the reason\r\n', 'Approved'),
(2, 'campany d', 2147483647, 'Addis Abeba', 'mh@gmail.com', 956734567, '3456789345', 3, '2019-06-08', 'projector', '4545', 30000, 35000, '2019-06-01', '2019-06-15', '2019-06-08', 'Fail', 'high cost', 'Approved'),
(3, 'campany d', 2147483647, 'Addis Abeba', 'mh@gmail.com', 956734567, '3456789345', 3, '2019-06-08', 'projector', '4545', 40000, 35000, '2019-06-01', '2019-06-15', '2020-02-16', '-1', ' write the reason\r\n', 'pending...'),
(4, 'campany d', 2147483647, 'Addis Abeba', 'mh@gmail.com', 956734567, '3456789345', 3, '2019-06-08', 'projector', '4545', 40000, 22000, '2019-06-01', '2019-06-15', '2020-02-16', '-1', ' write the reason\r\n', 'pending...'),
(5, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 30000, 27000, '2019-06-01', '2019-06-15', '2020-02-16', '-1', ' write the reason\r\n', 'pending...'),
(6, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 40000, 27000, '2019-06-01', '2019-06-15', '2020-02-22', '-1', ' write the reason\r\n', 'pending...'),
(7, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 30000, 27000, '2019-06-01', '2019-06-15', '2020-02-22', '-1', ' write the reason\r\n', 'pending...'),
(8, 'senysaid', 34567890, 'Aksum', 'me@gmail.com', 945678954, '3456777784', 3, '2019-06-08', 'projector', '4545', 30000, 25000, '2019-06-01', '2019-06-15', '2020-02-25', '-1', ' write the reason\r\n', 'pending...'),
(9, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 150000, 27000, '2019-06-01', '2019-06-15', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(10, 'ras degen', 219033, 'Ambo', 'nega@gmail.com', 983683408, '13', 2, '2019-06-08', 'chair', 'uyiuyu', 40000, 27000, '2019-06-01', '2019-06-15', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(11, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 15000, 27000, '2019-06-01', '2019-06-15', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(12, 'ras degen', 219033, 'Ambo', 'nega@gmail.com', 983683408, '13', 2, '2019-06-08', 'chair', '', 40000, 27000, '2019-06-01', '2019-06-15', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(13, 'kk b', 323123, 'Alamata', 'gedi@gmail.com', 956683408, '78', 7, '2020-02-28', 'boared', '', 40000, 20000, '2020-02-28', '2020-02-28', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(14, 'tame campany', 34687887, 'Areka', 'gedoi@gmail.com', 976683408, '78', 1, '2019-06-08', 'computer', '', 15000, 10000, '2019-06-01', '2019-06-15', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(15, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 15000, 27000, '2019-06-01', '2019-06-15', '2020-02-28', '-1', ' write the reason\r\n', 'pending...'),
(16, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 15000, 27000, '2019-06-01', '2019-06-15', '2020-02-29', '-1', ' write the reason\r\n', 'pending...'),
(17, 'ras degen', 219033, 'Ambo', 'nega@gmail.com', 983683408, '13', 2, '2019-06-08', 'chair', '', 40000, 27000, '2019-06-01', '2019-06-15', '2020-02-29', '-1', ' write the reason\r\n', 'pending...'),
(18, 'kk b', 323123, 'Alamata', 'gedi@gmail.com', 956683408, '78', 7, '2020-02-28', 'boared', '', 40000, 20000, '2020-02-28', '2020-02-28', '2020-02-29', '-1', ' write the reason\r\n', 'pending...'),
(19, 'tame campany', 34687887, 'Areka', 'gedoi@gmail.com', 976683408, '78', 1, '2019-06-08', 'computer', '', 15000, 10000, '2019-06-01', '2019-06-15', '2020-02-29', '-1', ' write the reason\r\n', 'pending...'),
(20, 'nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 15000, 27000, '2019-06-01', '2019-06-15', '2020-02-29', 'Fail', 'high cost\r\n', 'Approved'),
(21, 'campany d', 2147483647, 'Addis Abeba', 'mh@gmail.com', 956734567, '3456789345', 3, '2019-06-08', 'projector', '4545', 30000, 35000, '2019-06-01', '2019-06-15', '2020-02-29', 'Winner', 'low cost', 'Approved'),
(22, 'tame campany', 34687887, 'Areka', 'gedoi@gmail.com', 976683408, '78', 1, '2019-06-08', 'computer', 'uytuytuy', 15000, 10000, '2019-06-01', '2019-06-15', '2020-02-29', 'Fail', ' write the reason\r\ntyutuy', 'Approved'),
(23, 'tame campany', 34687887, 'Areka', 'gedoi@gmail.com', 976683408, '78', 1, '2019-06-08', 'computer', '', 15000, 10000, '2019-06-01', '2019-06-15', '2020-02-29', 'Winner', 'low cost of computer', 'Approved'),
(24, 'adigrat material room', 12123, 'Adigrat', 'adi@gmail.com', 993683408, '66', 10, '2020-03-03', 'daster', '', 100, 90, '2020-03-03', '2020-03-03', '2020-03-03', 'Winner', ' write the reason\r\n', 'Approved'),
(25, 'masha reused center', 5746, 'Asella', 'geditame@gmail.com', 996683408, '77', 10, '2020-03-03', 'daster', '', 100, 110, '2020-03-03', '2020-03-03', '2020-03-03', 'Fail', ' write the reason\r\n', 'Approved'),
(26, 'tamrat campany', 6576, 'Adama', 'aduuui@gmail.com', 950683408, '56', 11, '2020-03-03', 'bulb', '', 60, 0, '2020-03-03', '2020-03-03', '2020-03-03', 'Winner', 'low cost\r\n', 'Approved'),
(27, 'akalu', 7895, 'Areka', 'ahgdi@gmail.com', 983683408, '767', 11, '2020-03-03', 'bulb', '', 60, 40, '2020-03-03', '2020-03-03', '2020-03-03', 'Fail', 'hihn cost\r\n', 'Approved'),
(28, 'a table frnicher', 219000, 'Aksum', 'gegditame@gmail.com', 987683408, '18', 12, '2020-03-08', 'table', '', 950, 1000, '2020-03-08', '2020-03-08', '2020-03-08', 'Fail', 'high cost\r\n', 'Approved'),
(29, 'baba table frnicher', 219009, 'Arsi Negele', 'neggga@gmail.com', 985683408, '79', 12, '2020-03-08', 'table', '', 950, 900, '2020-03-08', '2020-03-08', '2020-03-08', 'Winner', 'low cost\r\n', 'Approved'),
(30, 'ZALATES', 121212, 'Areka', 'chaluchala11@gmail.c', 2147483647, '89777', 21, '2020-12-27', 'CHARGER', '', 28, 30, '2020-12-27', '2020-12-28', '2020-12-27', 'Fail', 'HIGN VALUE\r\n', 'Approved'),
(31, 'GIGI', 121213, 'Adama', 'alembggbmtha@gmail.c', 987654646, '89778', 21, '2020-12-27', 'CHARGER', '', 28, 30, '2020-12-27', '2020-12-28', '2020-12-27', 'Fail', ' HIGN VALUE\r\n', 'Approved'),
(32, 'DFR', 121284, 'Arba Minch', 'alemFbbmtha@gmail.co', 988054846, '8977084', 21, '2020-12-27', 'CHARGER', '', 28, 25, '2020-12-27', '2020-12-28', '2020-12-27', 'Winner', 'BEST INCOME\r\n', 'Approved'),
(33, 'xyz', 2123, 'Adwa', 'fhgf@gmail.com', 989654646, '5678', 45, '2020-12-28', 'hp', '', 3600, 3500, '2020-12-28', '2020-12-30', '2020-12-28', 'Winner', 'low value\r\n', 'Approved'),
(34, 'gggi', 890, 'Arsi Negele', 'chaluchhhbnhala11@gm', 989054646, '0980', 45, '2020-12-28', 'hp', '', 3600, 3700, '2020-12-28', '2020-12-30', '2020-12-28', 'Fail', 'high value', 'Approved'),
(35, 'jky', 8908, 'Agaro', 'chaluchbnhauu@gmail', 988054689, '897770', 89, '2020-12-28', 'hppc', '', 4000, 3600, '2020-12-28', '2020-12-29', '2020-12-28', 'Winner', 'low value\r\n', 'pending...'),
(36, 'bvc', 7890, 'Addis Abeba', 'alemajj@gmail.com', 987654646, '9087', 89, '2020-12-28', 'hppc', '', 4000, 4100, '2020-12-28', '2020-12-29', '2020-12-28', 'Fail', 'hign', 'pending...');

-- --------------------------------------------------------

--
-- Table structure for table `biddocument`
--

CREATE TABLE IF NOT EXISTS `biddocument` (
`no` int(100) NOT NULL,
  `date` date DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `item_model` varchar(20) NOT NULL,
  `market_birr` int(11) DEFAULT NULL,
  `supplier_birr` int(11) DEFAULT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `instruction` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biddocument`
--

INSERT INTO `biddocument` (`no`, `date`, `item_name`, `item_model`, `market_birr`, `supplier_birr`, `open_date`, `close_date`, `instruction`, `status`) VALUES
(1, '2019-06-08', 'computer', 'corei3', 0, 0, '2019-06-01', '2019-06-15', '     1.á‰°áŒ«áˆ«á‰¾á', 'open'),
(2, '2019-06-08', 'chair', '3434', 0, 0, '2019-06-01', '2019-06-15', '     1.á‰°áŒ«áˆ«á‰¾á', 'open'),
(3, '2019-06-08', 'projector', '4545', 0, 0, '2019-06-01', '2019-06-15', '     1.á‰°áŒ«áˆ«á‰¾á', 'open'),
(7, '2020-02-28', 'boared', '', 0, 0, '2020-02-28', '2020-02-28', '	 1.Suppliers only f', 'open'),
(9, '2020-02-28', 'paper', 'white', 0, 0, '2020-02-28', '2020-02-28', '	 1.Suppliers only f', 'open'),
(10, '2020-03-03', 'daster', 'for it department la', 0, 0, '2020-03-03', '2020-03-03', '	 1.Suppliers only f', 'open'),
(11, '2020-03-03', 'bulb', 'for lab section', 0, 0, '2020-03-03', '2020-03-03', '	 1.Suppliers only f', 'open'),
(12, '2020-03-08', 'table', 'for lab section', 0, 0, '2020-03-08', '2020-03-08', '	 1.Suppliers only f', 'open'),
(21, '2020-12-27', 'CHARGER', 'LATEST', 0, 0, '2020-12-27', '2020-12-28', '	 1.Suppliers only f', 'open'),
(43, '2020-12-24', 'projectorrrrr', 'quality', 0, 0, '2020-12-24', '2020-12-25', '	 1.Suppliers only f', 'open'),
(45, '2020-12-28', 'hp', 'gfghguff', 0, 0, '2020-12-28', '2020-12-30', '	 1.Suppliers only f', 'open'),
(89, '2020-12-28', 'hppc', 'cor3', 0, 0, '2020-12-28', '2020-12-29', '	 1.Suppliers only f', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `message` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('tam', 'nega@gmail.com', 'hhhhhhhhhhhhhhh', 'bbbbbbbbbbbbbb'),
('bereket', 'nega@gmail.com', 'i am the owner of this organization', 'so let us be cotact with me'),
('100', 'neggga@gmail.com', '', ''),
('1000181647117', 'hg@gmail.com', '', ''),
('70000', 'hg@gmail.com', '55555555555', ''),
('70000', 'hg@gmail.com', '55555555555', '0987694562');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`fid` int(100) NOT NULL,
  `itemname` varchar(20) DEFAULT NULL,
  `itemmodel` varchar(20) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(20) DEFAULT NULL,
  `status` int(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `itemname`, `itemmodel`, `firstname`, `lastname`, `email`, `date`, `message`, `status`) VALUES
(1, 'cpomputer', 'corei3', 'beshir', 'adem', 'b@gmail.com', '2019-06-08', 'enter feedbackno suc', 1),
(2, 'chaitr', '3434', 'beshir', 'adem', 'b@gmail.com', '2019-06-08', 'no such chair in the', 1),
(3, 'projector', '4545', 'beshir', 'adem', 'b@gmail.com', '2019-06-08', 'such item is not in ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbackfin`
--

CREATE TABLE IF NOT EXISTS `feedbackfin` (
`fid` int(100) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `itemmodel` varchar(300) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(20) DEFAULT NULL,
  `status` int(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackfin`
--

INSERT INTO `feedbackfin` (`fid`, `itemname`, `itemmodel`, `firstname`, `lastname`, `email`, `date`, `message`, `status`) VALUES
(1, 'cpomputer', 'corei3', 'seada', 'kassaw', 'se@gmail.com', '2019-06-08', 'have budget', 1),
(2, 'chair', '3434', 'seada', 'kassaw', 'se@gmail.com', '2019-06-08', 'have budget', 1),
(3, 'lockers', '2323', 'seada', 'kassaw', 'seada2@gmail.com', '2019-06-08', 'no such budget', 1),
(4, 'projector', '4545', 'seada', 'kassaw', 'seada2@gmail.com', '2019-06-08', 'have budget', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbackpr`
--

CREATE TABLE IF NOT EXISTS `feedbackpr` (
`fid` int(100) NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(20) DEFAULT NULL,
  `status` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `register_date` date DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `Discription` varchar(2000) NOT NULL,
  `quantity` int(200) NOT NULL,
  `unitprice` int(100) NOT NULL,
  `totalprice` int(200) NOT NULL,
  `winnername` varchar(100) NOT NULL,
  `reason` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `no`, `register_date`, `item_name`, `Discription`, `quantity`, `unitprice`, `totalprice`, `winnername`, `reason`) VALUES
(1, 1, '2020-02-27', 'projector', 'for lab section', 2, 20000, 40000, 'tttttt', 'jghbhj'),
(2, 2, '2020-03-01', 'computer', 'corei3', 2, 20000, 40000, 'campany x', 'for lab section');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`nid` int(100) NOT NULL,
  `message` longtext,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `message`, `status`) VALUES
(17, 'Our team uses this method by orally asking different people who have some knowledge regarding the bid. We will orally discuss and interview our adviser for necessary informationâ€™s regarding about the process of the bid. This information will help us to identify the main actors that participate on the tender and also about the way that how the project works. So we will analyze informationâ€™s of the bid system that apply in kiot.Our team uses this method by orally asking different people who have some knowledge regarding the bid. We will orally discuss and interview our adviser for necessary informationâ€™s regarding about the process of the bid. This information will help us to identify the main actors that participate on the tender and also about the way that how the project works. So we will analyze informationâ€™s of the bid system that apply in kiot.', 1),
(18, 'The proposed system is behaviorally feasible and can not cause any harm in the environments. The project would be beneficial because it satisfies the need of customer. The system will be developed to be user friendly, needless training and improves the working environment. Our system is behaviorally feasible, because the staff of bid was open minded towards the acceptance of the new system.\r\nSupplier face many problems during tender process .The first problem are that cannot get full information about tender; it might not view all advertisement or view after left their closed days. The second problem is maximizing transport cost. This means if supplier lives far away from tender place it waste high cost to register in the tender.\r\nThe third problem is personal case (most likely disable person). Disable canâ€™t participate in the bid because of distance (place).\r\n', 1),
(19, 'ghyjjkyuuuuu hp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`nid` int(100) NOT NULL,
  `date` date NOT NULL,
  `reg_no` int(100) NOT NULL,
  `target` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `message` varchar(20000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `date`, `reg_no`, `target`, `title`, `post_by`, `message`) VALUES
(11, '2019-06-01', 5656, 'for all qualified supplier', 'open tender for computer', 'procurement team', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(12, '2019-06-08', 2323, 'abate kebede', 'winner of tender', 'procurement team', 'Performance of any system is required exhibition of users `need of the system. The current systemâ€™s performance is weak.  This is due to the following reasons: -first the acceptable through put rate is relatively high i.e. the time required from initiation to completion of a particular task is relatively high. For example bidding one item it may take a day or more due to its manual operation. The system manipulates and manages all of these and other records manually on papers.'),
(17, '2019-06-08', 3455, 'for all qualified', 'projector material ', 'adamu', 'fghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(18, '2020-02-28', 1, 'for all qualified supplier', 'selling boerd', 'it dept', 'all supplier equlity particeipate on this tender in assosa university'),
(19, '2020-03-03', 10, 'for all qualified supplier', 'selling a daster', 'procurement team', 'all qualified supplier participate to this tender from open date to the end date of the tender process'),
(20, '2020-03-03', 11, 'for all qualified supplier', 'selling a bulb', 'procurement team', 'ryu7yrfuyffffffffff'),
(21, '2020-12-27', 21, 'ALL QUALIFIED SUPPLIER', 'CHARGER', 'PT', 'ALL QUALIFIED TENDER OPEN IN THBIS QALIFIED PROCCESS'),
(22, '2020-12-28', 42, 'all qalified', 'hp ', 'pt', 'fghgfghfug'),
(23, '2020-12-28', 98, 'for qalified supplier', 'hppc', 'pt', 'jggggggggggggggghfhj');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`nid` int(100) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchaseditems`
--

CREATE TABLE IF NOT EXISTS `purchaseditems` (
`id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `Discription` varchar(2000) NOT NULL,
  `quantity` int(200) NOT NULL,
  `unitprice` int(100) NOT NULL,
  `totalprice` int(200) NOT NULL,
  `winnername` varchar(100) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `abstraction` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseditems`
--

INSERT INTO `purchaseditems` (`id`, `no`, `item_name`, `Discription`, `quantity`, `unitprice`, `totalprice`, `winnername`, `reason`, `abstraction`) VALUES
(1, 0, '', '', 0, 0, 0, '', '', '		\r\n		\r\n		'),
(2, 0, '', '', 0, 0, 0, '', '', '		\r\n		\r\n		'),
(3, 0, '', '', 0, 0, 0, '', '', ''),
(4, 0, '', '', 0, 0, 0, '', '', ''),
(5, 0, '', '', 0, 0, 0, '', '', ''),
(6, 0, '', '', 0, 0, 0, '', '', ''),
(7, 0, '', '', 0, 0, 0, '', '', ''),
(8, 0, '', '', 0, 0, 0, '', '', ''),
(9, 0, '', '', 0, 0, 0, '', '', ''),
(10, 1, 'projector', '', 2, 20000, 40000, 'tttttt', 'jghbhj', ''),
(11, 0, '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registerdsupplier`
--

CREATE TABLE IF NOT EXISTS `registerdsupplier` (
  `campany_name` varchar(30) NOT NULL,
  `tin_no` int(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(100) NOT NULL,
  `fax_no` varchar(20) NOT NULL,
  `no` int(100) NOT NULL,
  `prepare_date` date DEFAULT NULL,
  `item_name` varchar(20) DEFAULT NULL,
  `item_model` varchar(20) NOT NULL,
  `market_birr` int(11) DEFAULT NULL,
  `supplier_birr` int(11) DEFAULT NULL,
  `open_date` date NOT NULL,
  `close_date` date NOT NULL,
  `fill_date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerdsupplier`
--

INSERT INTO `registerdsupplier` (`campany_name`, `tin_no`, `city`, `email`, `telephone`, `fax_no`, `no`, `prepare_date`, `item_name`, `item_model`, `market_birr`, `supplier_birr`, `open_date`, `close_date`, `fill_date`, `status`) VALUES
('senysaid', 34567890, 'Aksum', 'me@gmail.com', 945678954, '3456777784', 3, '2019-06-08', 'projector', '4545', 30000, 25000, '2019-06-01', '2019-06-15', '2019-06-01', 'open'),
('campany d', 2147483647, 'Addis Abeba', 'mh@gmail.com', 956734567, '3456789345', 3, '2019-06-08', 'projector', '4545', 30000, 35000, '2019-06-01', '2019-06-15', '2019-06-08', 'open'),
('nega cherk', 2190, 'Assosa', 'tg@GMAIL.COM', 963683409, '13', 1, '2019-06-08', 'computer', '', 15000, 27000, '2019-06-01', '2019-06-15', '2020-02-16', 'open'),
('ras degen', 219033, 'Ambo', 'nega@gmail.com', 983683408, '13', 2, '2019-06-08', 'chair', '', 40000, 27000, '2019-06-01', '2019-06-15', '2020-02-22', 'open'),
('kk b', 323123, 'Alamata', 'gedi@gmail.com', 956683408, '78', 7, '2020-02-28', 'boared', '', 40000, 20000, '2020-02-28', '2020-02-28', '2020-02-28', 'open'),
('tame campany', 34687887, 'Areka', 'gedoi@gmail.com', 976683408, '78', 1, '2019-06-08', 'computer', '', 15000, 10000, '2019-06-01', '2019-06-15', '2020-02-28', 'open'),
('adigrat material room', 12123, 'Adigrat', 'adi@gmail.com', 993683408, '66', 10, '2020-03-03', 'daster', '', 100, 90, '2020-03-03', '2020-03-03', '2020-03-03', 'open'),
('masha reused center', 5746, 'Asella', 'geditame@gmail.com', 996683408, '77', 10, '2020-03-03', 'daster', '', 100, 110, '2020-03-03', '2020-03-03', '2020-03-03', 'open'),
('akalu', 7895, 'Areka', 'ahgdi@gmail.com', 983683408, '767', 11, '2020-03-03', 'bulb', '', 60, 40, '2020-03-03', '2020-03-03', '2020-03-03', 'open'),
('tamrat campany', 6576, 'Adama', 'aduuui@gmail.com', 950683408, '56', 11, '2020-03-03', 'bulb', '', 60, 0, '2020-03-03', '2020-03-03', '2020-03-03', 'open'),
('a table frnicher', 219000, 'Aksum', 'gegditame@gmail.com', 987683408, '18', 12, '2020-03-08', 'table', '', 950, 1000, '2020-03-08', '2020-03-08', '2020-03-08', 'open'),
('baba table frnicher', 219009, 'Arsi Negele', 'neggga@gmail.com', 985683408, '79', 12, '2020-03-08', 'table', '', 950, 900, '2020-03-08', '2020-03-08', '2020-03-08', 'open'),
('ZALATES', 121212, 'Areka', 'chaluchala11@gmail.c', 2147483647, '89777', 21, '2020-12-27', 'CHARGER', '', 28, 30, '2020-12-27', '2020-12-28', '2020-12-27', 'open'),
('GIGI', 121213, 'Adama', 'alembggbmtha@gmail.c', 987654646, '89778', 21, '2020-12-27', 'CHARGER', '', 28, 30, '2020-12-27', '2020-12-28', '2020-12-27', 'open'),
('DFR', 121284, 'Arba Minch', 'alemFbbmtha@gmail.co', 988054846, '8977084', 21, '2020-12-27', 'CHARGER', '', 28, 25, '2020-12-27', '2020-12-28', '2020-12-27', 'open'),
('xyz', 2123, 'Adwa', 'fhgf@gmail.com', 989654646, '5678', 45, '2020-12-28', 'hp', '', 3600, 3500, '2020-12-28', '2020-12-30', '2020-12-28', 'open'),
('gggi', 890, 'Arsi Negele', 'chaluchhhbnhala11@gm', 989054646, '0980', 45, '2020-12-28', 'hp', '', 3600, 3700, '2020-12-28', '2020-12-30', '2020-12-28', 'open'),
('jky', 8908, 'Agaro', 'chaluchbnhauu@gmail', 988054689, '897770', 89, '2020-12-28', 'hppc', '', 4000, 3600, '2020-12-28', '2020-12-29', '2020-12-28', 'open'),
('bvc', 7890, 'Addis Abeba', 'alemajj@gmail.com', 987654646, '9087', 89, '2020-12-28', 'hppc', '', 4000, 4100, '2020-12-28', '2020-12-29', '2020-12-28', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`rid` int(100) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `date` date NOT NULL,
  `abstraction` varchar(10000) NOT NULL,
  `downloads` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`rid`, `uploaded_by`, `file_name`, `size`, `date`, `abstraction`, `downloads`) VALUES
(11, 'adamu', '1.docx', 16466, '2019-06-01', 'hi hi hi', '4'),
(12, 'adamu', 'GEBB.docx', 90670, '2019-06-08', 'report2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
`rid` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `reason` varchar(300) NOT NULL,
  `itemkind` varchar(30) NOT NULL,
  `Discription` varchar(7000) NOT NULL,
  `measure` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unitprice` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `approve` varchar(20) NOT NULL,
  `checked` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `name`, `date`, `reason`, `itemkind`, `Discription`, `measure`, `quantity`, `unitprice`, `totalprice`, `department`, `status`, `approve`, `checked`) VALUES
(1, 'belay', '2019-06-01', 'i want to have computer for lab section for teacing purpose\r\n', 'computer', 'corei3', 'number', 4, 12000, 48000, 'information system', 'approved', 'accept', 'yes'),
(2, 'belay', '2019-06-08', 'chair in the staff\r\n', 'chair', '3434', 'number', 10, 100, 1000, 'electrical enginering', 'approved', 'accept', 'yes'),
(3, 'belay', '2019-06-08', 'lockers for student material storing\r\n', 'lockers', '2323', 'number', 10, 1000, 10000, 'procter', 'approved', 'accept', 'No'),
(4, 'belay', '2019-06-08', 'shortage of table in the office\r\n', 'table', '5656', 'number', 10, 100, 1000, 'water enginering', 'approved', 'accept', 'yes'),
(5, 'amare', '2019-06-08', 'shortage of projector\r\n', 'projector', '4545', 'number', 1, 30000, 30000, 'computer science', 'approved', 'accept', 'yes'),
(6, 'amare', '2019-06-18', 'for lab station\r\n', 'pc', 'core i3\r\n1 terabyte\r', 'number', 3, 15000, 45000, 'Computer science', 'approved', 'accept', 'yes'),
(8, 'amare', '2019-06-18', 'shortage of paper in the department', 'paper', 'a4 and also hard thick', 'number', 2, 200, 400, 'Computer science', 'approved', 'accept', 'yes'),
(9, 'tamrat', '2020-02-28', 'for student', 'boared', 'please sell this item', 'quality', 4, 3000, 12000, 'it', 'approved', 'accept', 'yes'),
(10, 'tamrat gashaw', '2020-03-03', 'for it class room', 'daster', 'please sell the given item for it department', 'quality', 10, 100, 10000, 'it', 'approved', 'accept', 'No'),
(11, '11', '2020-03-03', 'shortage of lab section light', 'bulb', 'FDJHFJHDSJH', 'quality', 20, 50, 1000, ' ECONOMIC', 'approved', 'accept', 'No'),
(12, 'gg', '2020-12-24', 'ghjg', 'projectorrrrr', 'vcvbcvbcbvcbv', 'qality', 3, 300, 900, 'it', 'approved', 'accept', 'No'),
(13, 'material', '2020-12-27', 'shortege', 'charger', 'for many reasen in the forrmation to name the of information in the calculation', 'quality', 23, 20, 230, 'ict', 'approved', 'accept', 'No'),
(14, 'pr', '2020-12-28', 'shortee', 'hp', 'ghhjkyuu', 'qality', 4, 4000, 16000, 'it', 'approved', 'accept', 'No'),
(15, 'pr', '2020-12-28', 'shortege', 'hppc', 'ghhhhhhhhh', 'qality', 4, 4000, 16000, 'it', 'approved', 'accept', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(100) NOT NULL,
  `profile` blob NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `profile`, `firstname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(2, 'beky', 'Yibeltal', 22, 'male', '0934343434', 'beshir@gmail.com', 'beshir123', '890098', '890098', 'property_department', 0),
(4, 'Getaneh', 'Geto', 20, 'male', '0945691034', 'getaneh@gmail.com', 'tame123', '123321', '', 'Administrator', 1);

INSERT INTO `users` (`user_id`, `profile`, `firstname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(11, 'melat', 'abebe', 21, 'Female', '0956435635', 'me@gmail.com', 'melat123', 'm123321', 'm123321', 'supplier', 1);

INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(17, 'atnasiya', 'sema', 'arega', 19, 'Female', '0912348756', 'at@gmail.com', 'atnasiya', 'atnasiya', '', 'procurement_request', 1);

INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `usertype`, `status`) VALUES
(18, 'nurilign', 'yitbarek', 23, 'Male', '0912873465', 'nu@gmail.com', 'yitbarek', 'yitbarek', 'supplier', 1);


(19,  ' frezer', ' arega', 23, 'Male', ' 09198765432', 'freh@gmail.com', ' frezer', 'frezerr', '', 'Finance', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(21,  ' ezra', ' mesfin', 34, 'Male', ' 0957845678', 'gfggbmtha@gmail.com', 'ezramesfin', 'ezramesfin', '', 'supplier', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(22,  ' marta', ' gashaw', 21, 'Female', ' 0945345678', 'alemmara@gmail.com', ' martagashaw', 'martagashaw', '', 'procurement_request', 1),
(23, ' nolawit', ' gashaw', 23, 'Female', ' 0959045678', 'alembguybmtha@gmail.', 'nolawitgashaw', 'nolawitgashaw', '', 'supplier', 1),
(25,  'alemayehu', ' gedi', 20, 'Male', ' 0945369678', 'almabnhala11@gmail.c', ' alemayehu', ' alemayehu', '', 'procurement_request', 1),
(27,  'abelo', ' wase', 24, 'Male', ' 0945354878', 'alfdhgfhjha@gmail.co', 'abelowase', 'abelowase', '', 'Procurement_Team', 1),
(28,  ' soliyana', ' gashaw', 12, 'Female', ' 0946989686978', 'sobmtha@gmail.com', 'tamrat', '12345678', '', 'procurement_Approvin', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(29,  ' zeab', ' mesfin', 32, 'Male', ' 0940145678', 'chaluchbnhalahgt11@g', 'zeab', '12345678', '', 'property_Department', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(30,  ' zelalem', 'fisha', 45, 'Male', '0986089231', 'chjhguyfjkhala11@gma', 'zelalemfisha', 'zelalemfisha', '', 'Procurement_Team', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(31,  ' goliyad', ' dawit', 56, 'Male', ' 0940145078', 'alembhuu@gmail.com', 'goliyad', 'goliyaddawit', '', 'procurement_request', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(32,  ' kebrom', ' abera', 23, 'Female', ' 0949685078', 'alehjgfftha@gmail.co', 'kebrom', 'kebrom', '', 'Finance', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(33,  ' ghfjgkj', ' guguijgbjh', 45, 'Male', ' 0940145678', 'chaluchalahh@gmail.c', 'ffffffff', 'ffffffff', '', 'Finance', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(34,  'BAMAKASH', ' gashaw', 12, 'Male', ' 0940145078', 'alefvbma@gmail.com', 'bamakash', 'bamakash', '', 'supplier', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(35,  ' bamaniya', ' oz', 54, 'Male', ' 0940145078', 'alemhhhhhhhhhhbbmtha', 'qqqqqqqq', 'qqqqqqqq', '', 'procurement_request', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(36,  ' rgfb', ' dgbb', 36, 'Female', ' 0940145078', 'alembbmtha@gmail.com', 'alemayehu', 'alemayehu', '', 'supplier', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(37,  'sofoniyas', 'kebede', 23, 'Male', '0940145078', 'alemgga@gmail.com', 'sofoniyas', 'sofoniyas', '', 'supplier', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(38,  'ASHENAFI', ' FIKIRU', 23, 'Male', '0940145678', 'chaluchala11@gmail.c', 'ASHENAFI', 'ASHENAFI', '', 'scientific_director', 1);
INSERT INTO `users` (`user_id`, `profile`, `firstname`, `lastname`, `Age`, `Sex`, `phonenumber`, `email`, `username`, `password`, `confirmpassword`, `usertype`, `status`) VALUES
(39, '', ' CHERNET ', ' DAWIT ', 23, '-1', '0940145078 ', 'alema@gmail.com', 'GIGI ', 'GIGIGI', '', 'supplier', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approveditems`
--
ALTER TABLE `approveditems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assessdsupplier`
--
ALTER TABLE `assessdsupplier`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biddocument`
--
ALTER TABLE `biddocument`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `feedbackfin`
--
ALTER TABLE `feedbackfin`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `feedbackpr`
--
ALTER TABLE `feedbackpr`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `purchaseditems`
--
ALTER TABLE `purchaseditems`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approveditems`
--
ALTER TABLE `approveditems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessdsupplier`
--
ALTER TABLE `assessdsupplier`
MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `biddocument`
--
ALTER TABLE `biddocument`
MODIFY `no` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedbackfin`
--
ALTER TABLE `feedbackfin`
MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `feedbackpr`
--
ALTER TABLE `feedbackpr`
MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchaseditems`
--
ALTER TABLE `purchaseditems`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
