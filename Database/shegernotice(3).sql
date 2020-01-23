-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2018 at 11:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shegernotice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `title`) VALUES
(1, 'Getinet Fekadu', 'gech123', '1gech1', 'Project Manager'),
(2, 'Mickael Belete', 'miku', 'miku21', 'Interface Designer'),
(3, 'Misgana Daniel', 'm15ga3', '1234', 'Interface Designer'),
(4, 'messay', 'messay', '21', 'Administrator'),
(5, 'tinsae', 'tinsae', 'amen', 'interface designer'),
(59277, 'Yitbarek', 'MasterAdmin', 'thegreatestalive', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `advert_a`
--

CREATE TABLE IF NOT EXISTS `advert_a` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert_a`
--

INSERT INTO `advert_a` (`company`, `format`, `category`, `file`, `details`, `status`) VALUES
('yibe', 'Advert-Audio', 'Restaurant', 0x44617368656e5f42616e6b5f5456432e6d7034, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `advert_p`
--

CREATE TABLE IF NOT EXISTS `advert_p` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `paid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert_p`
--

INSERT INTO `advert_p` (`company`, `format`, `category`, `file`, `details`, `status`, `paid`) VALUES
('admin', 'Picture', 'Cinema', 0x312e6a7067, 'Title : Ewer Amora Kelabi.<br>\r\nStaring : Zekarias Tibebu<br>\r\nDirector : Sewmehon Yismaw<br>\r\nWriter : Zekarias Tibebu<br>\r\nGenre : Family Drama<br>\r\nDescription: A true story about Zekarias Tibebu<br>\r\nDuration : 1hr 32 min<br>', 'Post', ''),
('mikubel', 'Picture', 'Cinema', 0x332e6a7067, 'Title : Yalteshofew.<br>\r\nStaring : Melat Nebeyu<br>\r\nHaile Asmelash and Others<br>\r\nDirector : Elias Mulualem<br>\r\nWriter : Elias Mulalem<br>\r\nGenre : Romantic Comedy<br>\r\nDescription : A Kamen Films Present<br>\r\nDuration : 1hr 50 min', 'Post', ''),
('matana', 'Picture', 'Music_festival', 0x32202833292e6a7067, 'Title : Matana Holiday Carnival<br>\r\nDate  : Saturday April 14th.<br>\r\nFrom: 6:00 - 6:00 LOCAL TIME<br>\r\nLocation : Bole Fana Park Hall<br>\r\nTickets : Normal 100 birr | VIP 200 birr<br>\r\nTickets Available : At Every CBE Branch <br>', 'Post', ''),
('ethio head shot', 'Picture', 'Music_festival', 0x33202832292e6a7067, 'Title : Ethios Head Shot<br>\r\nDate : Febrary 17th.<br>\r\nFrom : 10:00 - 1:00 local time<br>\r\nLocation : Dh Geda Tower<br> \r\n4th floor Cork & Cellar Wine Bar<br>\r\nTickets:Normal 200 birr | VIP 500 birr<br>\r\nTickets Available : Capital Hotel<br>', 'Post', ''),
('Jorka', 'Picture', 'Concert', 0x31202832292e6a7067, 'Title : JorkaFest<br>\r\nDate : Saturday April 17th.<br>\r\nFrom: 6:00 - 6:00 LOCAL TIME<br>\r\nLocation : Ghion Hotel<br>\r\nTickets:Normal 400 birr | VIP 1000 birr<br>\r\nTickets Available : Ghion Hotel <br> ', 'Post', ''),
('Kistet', 'Picture', 'Concert', 0x32202832292e6a7067, 'Title : Lerasin New<br>\r\nDate  : Saturday April 28th.<br>\r\nFrom: 8:00 - 4:00 LOCAL TIME<br>\r\nLocation : Millennium Hall<br>\r\nTickets:Student 150 birr | VIP 1000 birr<br>\r\n| Door 300 birr | Normal 200 birr<br>\r\nTickets Available : +251922347323<br> ', 'Post', ''),
('Birahanu Admas', 'Picture', 'Books & Magazines', 0x31202834292e6a7067, 'Title : Emegwa<br>\r\nWriter : Alemayew Wese Eshete.<br>\r\nPublisher : Birahanu Admas<br>\r\nGenre: Spiritual <br>\r\nYear: 2016 <br>\r\nPrice : 52.00 ETB <br> ', 'Post', ''),
('Negash Zeleke', 'Picture', 'Books & Magazines', 0x32202834292e6a7067, 'Title : Huletu Metsahafoch<br>\r\nWriter : Egegu Beyene.<br>\r\nPublisher : Negash Zeleke<br>\r\nGenre: Spiritual <br>\r\nYear: 2017 <br>\r\nPrice : 120.00 ETB <br> ', 'Post', ''),
('Blue Media', 'Picture', 'Sport_Events', 0x342e6a7067, 'Title : Zooom Zooom Motor Sport<br>\r\nEthiopian Motor Sport Association<br>\r\nIn Collaboration with Blue Media<br>\r\nDate : Saturday April 23th 2017.<br>\r\nFrom : 11:00 -9:00 LOCAL TIME<br>\r\nLocation:Ethiopian Youth Sport Academy<br>\r\nSponsored by: Total, Trane Battries<br>', 'Post', ''),
('Sport Federation', 'Picture', 'Sport_Events', 0x352e6a7067, 'Title : Great Run of Ethiopia <br>\r\nOver 20000 People Will Participate<br>\r\nDate : November 21th - 28th 2017.<br>\r\nStarts : Meskel Flower (6:00 am) <br>\r\nSponsored by  : Sport Federation <br> ', 'Post', ''),
('Dr. Sara Dental Clinic', 'Picture', 'Medical Center', 0x31202836292e6a7067, 'A Right Place For Your Teeth ...<br>\r\nP.O.Box: 255<br>\r\nAddis Abeba<br>\r\nEthiopia<br>\r\nWebsite: www.Drsara.com<br>', 'Post', ''),
('Fklm', 'Picture', 'Tour & Travel', 0x32202835292e6a7067, 'A friend to the environment<br>\r\nService : Tours | Travel | Car Rental .<br>\r\nEthiopia<br>\r\nAddis Ababa<br>\r\nWebsite : www.fklmethiopia.com', 'Post', ''),
('Travel Ethiopia', 'Picture', 'Tour & Travel', 0x33202835292e6a7067, 'Travel Ethiopia<br>\r\nService : Tours<br>\r\nEthiopia<br>\r\nAddis Ababa<br>\r\nWebsite : www.travelethiopia.com', 'Post', ''),
('Tar', 'Picture', 'Bar', 0x626172312e6a706567, 'Come and enjoy our bar<br>\r\nLocation: 22 Road, <br>\r\nfrom the left to capital hotel  <br>\r\nTel: 09-13-25-45-32<br>\r\nContact us on facebook,twitter <br>', 'Post', ''),
('Debonaires', 'Picture', 'Restaurant', 0x31372e6a7067, 'Try Something New<br>\r\nShare Amazing Pizza with Friends<br>\r\nLocation: Meskel Flower, Atlas<br>\r\nTel: 0974151515, 0973151515<br>\r\nFree Delivery: Tax Apply<br>  ', 'Post', ''),
('My burger', 'Picture', 'Restaurant', 0x33322e6a7067, 'Best Pizza Ever<br>\r\nLocation:Down the Road to moneco<br>\r\nfrom Kebe cake the left <br>\r\nTel :0986347372', 'Post', '');

-- --------------------------------------------------------

--
-- Table structure for table `advert_t`
--

CREATE TABLE IF NOT EXISTS `advert_t` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `advert_v`
--

CREATE TABLE IF NOT EXISTS `advert_v` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `paid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert_v`
--

INSERT INTO `advert_v` (`company`, `format`, `category`, `file`, `details`, `status`, `paid`) VALUES
('mikubel', 'Video', 'Music_Album', 0x546564647920596f202d204172616461205f202623343736383b2623343635313b2623343835313b202d204e657720457468696f7069616e204d7573696320416c62756d2e6d7034, '1 (3).jpg', 'Post', 'paid'),
('flute', 'Video', 'Music_Album', 0x426973726174205375726166656c202d204b616c2042656b616c205f202623343637353b2623343632313b202623343730343b2623343637353b2623343632313b202d204e657720457468696f7069612e6d7034, '3 (3).jpg', 'Post', ''),
('Arki', 'Video', 'Soft_Drink', 0x312e6d7034, '1 (5).jpg', 'Post', ''),
('Pepsi', 'Video', 'Soft_Drink', 0x4e455720436f6d6d65726369616c202d204d657373695f204d617263656c6f5f204b726f6f735f2044656c6520416c6c692e6d7034, '1 (12).jpg', 'Post', ''),
('Habesha', 'Video', 'Alcohol', 0x342e6d7034, '3 (4).jpg', 'Post', ''),
('Heineken', 'Video', 'Alcohol', 0x352e6d7034, 'walia.png', 'Post', ''),
('Don', 'Video', 'Medical Center', 0x646f6e2e6d7034, 'don.png', 'Post', ''),
('cbe', 'Video', 'Bank', 0x436f6d6d65726369616c5f42616e6b5f6f665f457468696f7069615f28466f7265785f436f6d6d65726369616c292e6d7034, '11.jpg', 'Post', ''),
('Dashen Bank', 'Video', 'Bank', 0x44617368656e5f42616e6b5f5456432e6d7034, '12.jpg', 'Post', ''),
('Jolly', 'Video', 'Bar', 0x4a6f6c6c795f4261725f616e645f4c6f756e67652e6d7034, 'bar.jpeg', 'Post', ''),
('Sheraton', 'Video', 'Star_Hotel', 0x5368657261746f6e5f41646469732c5f615f4c75787572795f436f6c6c656374696f6e5f486f74656c5f2d5f41646469735f41626162612c5f457468696f7069612e6d7034, '15.jpg', 'Post', ''),
('Radisson', 'Video', 'Star_Hotel', 0x5261646973736f6e5f426c755f486f74656c2c5f41646469735f41626162615f2d5f41646469735f41626162615f2d5f457468696f7069612e6d7034, '21.png', 'Post', ''),
('Capital', 'Video', 'Hotel & Spa', 0x362e6d7034, '9.jpg', 'Post', ''),
('Planet ', 'Video', 'Hotel & Spa', 0x526f6f6d20546f7572202d2d20506c616e657420486f74656c5f204d656b656c6520457468696f7069612e6d7034, '111.png', 'Post', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('miku', 'chumkodk@gmail.com', 'hi there my name is miku and am very impressed about this website.'),
('misgana', 'ssss', 'Hello'),
('misgana', 'ssss', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('Administrator', 'chumkodk@gmail.com', 'Thank you very much...\r\nDo share our website to your friends...'),
('meesay', 'chumkodk@gmail.com', 'thank u for your comment!'),
('admin', 'ssss', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `News_ID` varchar(14) NOT NULL,
  `News_Name` varchar(25) NOT NULL,
  `News_Category` varchar(25) NOT NULL,
  `News_Content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_a`
--

CREATE TABLE IF NOT EXISTS `notice_a` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_p`
--

CREATE TABLE IF NOT EXISTS `notice_p` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `paid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice_p`
--

INSERT INTO `notice_p` (`company`, `format`, `category`, `file`, `details`, `status`, `paid`) VALUES
('DEC', 'Notice-Pi', 'Tender', 0x32202831292e6a7067, 'none', 'Post', ''),
('World Vision Ethiopia', 'Notice-Pi', 'Tender', 0x32202836292e6a7067, 'none', 'Post', ''),
('16 film production', 'Notice-Pi', 'Entertainment', 0x31202831292e6a7067, 'none', 'Post', ''),
('bee agency', 'Notice-Pi', 'Jobs Vacancy', 0x31202837292e6a7067, 'none', 'Post', ''),
('Gebeya Recrutment Seminar', 'Notice-Pi', 'Education', 0x6564752e706e67, 'none', 'Post', ''),
('Study in China', 'Notice-Pi', 'Education', 0x656475312e6a7067, 'none', 'Post', ''),
('Salhami Travels', 'Notice-Pi', 'Events', 0x76616c2e6a7067, 'none', 'Post', ''),
('ICS', 'Notice-Pi', 'Events', 0x72756e2e706e67, 'none', 'Post', ''),
('Charity 1', 'Notice-Pi', 'Other', 0x63686172697479312e6a706567, 'none', 'Post', ''),
('Charity 2', 'Notice-Pi', 'Other', 0x636861726974792e6a7067, 'none', 'Post', ''),
('Menew Shewa', 'Notice-Pi', 'Entertainment', 0x656e742e6a7067, 'none', 'Post', ''),
('16 film production', 'Notice-Pi', 'Entertainment', 0x656e74312e6a7067, 'none', 'Post', ''),
('solomon', 'Notice-Pi', 'House Rent', 0x686f7573652e6a7067, 'Location: Bole,behide Dembel<br>\r\n- 5 bedrooms<br>\r\n- 3 bathrooms<br>\r\n- 2 kitchens <br>\r\nPrice: 40,000ETB/month<br>\r\nTel : 0986347372<br>', 'Post', ''),
('mikubel', 'Notice-Pi', 'House Rent', 0x686f6d652e6a7067, '<h2>Filmon Rent House</h2>\r\nwe Have Luxrious rooms<br>\r\nLocation: Meskel Flower, Atlas<br>\r\nTel: 0974151515, 0973151515<br> ', 'Post', ''),
('Ras Tsega', 'Notice-Pi', 'Car Rent', 0x6361722e6a7067, 'none', 'Post', ''),
('abc car rental', 'Notice-Pi', 'Car Rent', 0x636172312e6a7067, 'none', 'Post', '');

-- --------------------------------------------------------

--
-- Table structure for table `notice_t`
--

CREATE TABLE IF NOT EXISTS `notice_t` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notice_v`
--

CREATE TABLE IF NOT EXISTS `notice_v` (
  `company` varchar(100) NOT NULL,
  `format` varchar(25) NOT NULL,
  `category` varchar(30) NOT NULL,
  `file` blob NOT NULL,
  `details` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `company_name` varchar(50) NOT NULL,
  `payers_name` varchar(50) DEFAULT NULL,
  `to_whom` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `duration` date NOT NULL,
  `address` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(25) DEFAULT NULL,
  `payment_means` varchar(20) NOT NULL,
  `transaction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`company_name`, `payers_name`, `to_whom`, `amount`, `duration`, `address`, `email`, `phone_num`, `payment_means`, `transaction`) VALUES
('mickael', 'kodkd', 'dldld', 2018, '2010-00-00', 'ethiopia', 'chumicakel@yahoo.com', '0913166323', 'CBE Mobile Banking', ''),
('kofk', 'dlpflplf', 'fkflpfl', 2018, '2010-00-00', 'ethiopia', 'chumickael', '09733833', 'In cash', ''),
('miku', 'miku', 'sheger notice', 2018, '0000-00-00', 'a.a', 'chumickael@yahoo.com', '0987654321', 'CBE Mobile Banking', 'tr193837334'),
('djidj', 'jfifjjf', 'jdijid', 10000, '0000-00-00', 'a.a', 'jifijfijf', '0987654321', 'CBE Mobile Banking', 'tr4535637'),
('ddddd', 'dfdf', 'ggg', 0, '2018-06-04', 'tggfgf', 'gfgfg', 'fgfgf', 'CBE Mobile Banking', 'tr373hfrl'),
('habesha', 'habesha', 'sheger', 100, '2018-06-15', 'a.a', 'tinsae@gmail.com', '091234567', 'CBE Mobile Banking', 'tr124343');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `bdate` date DEFAULT NULL,
  `gender` varchar(8) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `name`, `bdate`, `gender`, `username`, `password`, `repassword`, `email`) VALUES
(1, 'miku', '2015-07-06', 'Male', 'mikubel', 'miku21', 'miku21', 'chumkodk@gmail.com'),
(10, 'miku', '2018-06-06', 'Male', 'miku', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'mickael@yahoo.com'),
(11, 'yit', '2018-06-08', 'Male', 'yitbe', 'e8c59e3624f838ff1e925d64a9511203', 'e8c59e3624f838ff1e925d64a9511203', 'yit@gmail.com'),
(12, 'Coca cola', '2018-06-13', 'Male', 'm15ga3', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'ssssss'),
(13, 'habesha', '2018-06-14', 'Male', 'tinsae', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', 'tinsae@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
