-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 13, 2021 at 12:57 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dblyrah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE IF NOT EXISTS `tblcart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `pId` int(11) NOT NULL,
  `cEmail` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  PRIMARY KEY (`cartId`),
  KEY `pId` (`pId`,`cEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblcart`
--


-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`catid`, `category`) VALUES
(1, 'Women''s clothing'),
(2, 'Accessories'),
(3, 'Scarfs');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`name`, `email`) VALUES
('Meghna', 'meghna@gmail.com'),
('Mithra Kurian', 'mithrak@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbldeliveryad`
--

CREATE TABLE IF NOT EXISTS `tbldeliveryad` (
  `dId` int(11) NOT NULL AUTO_INCREMENT,
  `cEmail` varchar(50) NOT NULL,
  `dName` varchar(50) NOT NULL,
  `dHouse` varchar(50) NOT NULL,
  `dStreet` varchar(50) NOT NULL,
  `dPlace` varchar(50) NOT NULL,
  `dDistrict` varchar(50) NOT NULL,
  `dState` varchar(50) NOT NULL,
  `dPin` varchar(50) NOT NULL,
  `dLandmark` varchar(100) NOT NULL,
  `dContact` varchar(50) NOT NULL,
  PRIMARY KEY (`dId`),
  KEY `cEmail` (`cEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbldeliveryad`
--

INSERT INTO `tbldeliveryad` (`dId`, `cEmail`, `dName`, `dHouse`, `dStreet`, `dPlace`, `dDistrict`, `dState`, `dPin`, `dLandmark`, `dContact`) VALUES
(1, 'mithrak@gmail.com', 'Mithra', 'kjnk', 'kjnkjh', 'khj', 'kjbnhjb', 'kjbnj', '658947', 'jbhuyjb', '9586471230');

-- --------------------------------------------------------

--
-- Table structure for table `tblimages`
--

CREATE TABLE IF NOT EXISTS `tblimages` (
  `imgid` int(11) NOT NULL AUTO_INCREMENT,
  `pId` int(11) NOT NULL,
  `imgpath` varchar(500) NOT NULL,
  PRIMARY KEY (`imgid`),
  KEY `pId` (`pId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tblimages`
--

INSERT INTO `tblimages` (`imgid`, `pId`, `imgpath`) VALUES
(1, 1, 'products/3434121141_1994964681.jpg'),
(3, 1, 'products/3434121141_1994964681.jpg'),
(4, 3, 'products/5f6e2c70d8cccd5d4d71b83b17ed4b4f.jpg'),
(5, 4, 'products/scarf-women-hijab-500x500.jpg'),
(6, 5, 'products/61o9b8KupZL._UL1000_.jpg'),
(7, 6, 'products/Women-Silk-Scarf-Chiffon-Hijab-Hijab-Mousseline-Designer-Scarf-Women-Scarves-Foulard-Femme-Head-Scarf-Small__84734.1568200660.webp'),
(8, 6, 'products/2019-luxury-brand-women-scarf-summer-silk-scarves-shawls-lady-wraps-soft-pashimina-female-Echarpe-Designer.jpg'),
(9, 7, 'products/61o9b8KupZL._UL1000_.jpg'),
(10, 7, 'products/wwww.jpg'),
(11, 8, 'products/kissclipart-party-popper-confetti-clip-art-95200bebd7542c69.png'),
(12, 9, 'products/3434121141_1994964681.jpg'),
(13, 10, 'products/poster-party-clip-art-golden-party-poster.jpg'),
(14, 14, 'products/61o9b8KupZL._UL1000_.jpg'),
(15, 15, 'products/kissclipart-confetti-black-and-white-vector-clipart-clip-art-bb9f2462ed58b2cb.png'),
(16, 16, 'products/depositphotos_188628414-stock-photo-young-plant-ground-white-background.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE IF NOT EXISTS `tbllogin` (
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`uname`, `pwd`, `utype`) VALUES
('lyrahadmin@gmail.com', 'lyrah', 'admin'),
('meghna@gmail.com', 'meghna', 'customer'),
('mithrak@gmail.com', 'mithra@123', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tblorderchild`
--

CREATE TABLE IF NOT EXISTS `tblorderchild` (
  `ocid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `pId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ocid`),
  KEY `oid` (`oid`,`pId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tblorderchild`
--

INSERT INTO `tblorderchild` (`ocid`, `oid`, `pId`, `qty`, `size`) VALUES
(1, 1, 7, 1, ''),
(2, 2, 7, 1, ''),
(3, 3, 7, 1, ''),
(4, 4, 7, 1, ''),
(5, 5, 7, 1, ''),
(6, 5, 6, 1, ''),
(7, 6, 7, 1, ''),
(8, 8, 6, 1, ''),
(9, 9, 7, 1, ''),
(10, 10, 6, 0, ''),
(11, 10, 1, 0, ''),
(12, 11, 6, 0, ''),
(13, 11, 1, 0, ''),
(14, 12, 6, 2, ''),
(15, 12, 1, 1, ''),
(16, 13, 1, 1, ''),
(17, 14, 13, 1, NULL),
(18, 15, 13, 1, NULL),
(19, 18, 13, 1, NULL),
(20, 19, 13, 1, 'M'),
(21, 21, 13, 1, 'M'),
(22, 22, 13, 1, 'S'),
(23, 25, 13, 1, 'S'),
(24, 26, 13, 1, 'M'),
(25, 28, 13, 1, 'S'),
(26, 29, 13, 1, 'S'),
(27, 30, 13, 1, NULL),
(28, 31, 15, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tblordermaster`
--

CREATE TABLE IF NOT EXISTS `tblordermaster` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `cEmail` varchar(50) NOT NULL,
  `oDate` datetime NOT NULL,
  `dId` int(11) DEFAULT NULL,
  `oTotal` varchar(50) DEFAULT NULL,
  `shipping` varchar(50) DEFAULT NULL,
  `oStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `cEmail` (`cEmail`,`dId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tblordermaster`
--

INSERT INTO `tblordermaster` (`oid`, `cEmail`, `oDate`, `dId`, `oTotal`, `shipping`, `oStatus`) VALUES
(1, 'mithrak@gmail.com', '2021-01-09 19:21:21', NULL, NULL, NULL, 'partial'),
(2, 'mithrak@gmail.com', '2021-01-09 19:23:04', NULL, NULL, NULL, 'partial'),
(3, 'mithrak@gmail.com', '2021-01-09 19:23:39', NULL, NULL, NULL, 'partial'),
(4, 'mithrak@gmail.com', '2021-01-09 19:24:05', NULL, NULL, NULL, 'partial'),
(5, 'mithrak@gmail.com', '2021-01-09 19:25:58', NULL, '100', NULL, 'partial'),
(6, 'mithrak@gmail.com', '2021-01-09 19:27:36', NULL, '100', NULL, 'partial'),
(7, 'mithrak@gmail.com', '2021-01-09 19:29:36', NULL, NULL, NULL, 'partial'),
(8, 'mithrak@gmail.com', '2021-01-09 19:30:33', 1, '100', NULL, 'delivered'),
(9, 'mithrak@gmail.com', '2021-01-09 20:13:38', 1, '100', '100', 'orderplaced'),
(10, 'mithrak@gmail.com', '2021-01-09 21:56:26', 1, '0', '100', 'orderplaced'),
(11, 'mithrak@gmail.com', '2021-01-09 21:59:06', NULL, '0', '100', 'partial'),
(12, 'mithrak@gmail.com', '2021-01-09 22:00:34', 1, '0', '100', 'delivered'),
(13, 'mithrak@gmail.com', '2021-01-10 22:02:53', 1, '1499', '100', 'orderplaced'),
(14, 'mithrak@gmail.com', '2021-01-12 19:47:34', 1, '750', '100', 'orderplaced'),
(15, 'mithrak@gmail.com', '2021-01-12 19:54:47', 1, '0', '100', 'orderplaced'),
(16, 'mithrak@gmail.com', '2021-01-12 19:56:33', NULL, NULL, NULL, 'partial'),
(17, 'mithrak@gmail.com', '2021-01-12 19:56:54', NULL, NULL, NULL, 'partial'),
(18, 'mithrak@gmail.com', '2021-01-12 20:12:51', NULL, '0', '100', 'partial'),
(19, 'mithrak@gmail.com', '2021-01-12 20:18:11', NULL, '0', '100', 'partial'),
(20, 'mithrak@gmail.com', '2021-01-12 20:19:06', NULL, NULL, NULL, 'partial'),
(21, 'mithrak@gmail.com', '2021-01-12 20:19:40', 1, '750', '100', 'orderplaced'),
(22, 'mithrak@gmail.com', '2021-01-12 20:21:58', NULL, '750', '100', 'partial'),
(23, 'mithrak@gmail.com', '2021-01-12 20:22:39', NULL, NULL, NULL, 'partial'),
(24, 'mithrak@gmail.com', '2021-01-12 20:22:54', NULL, NULL, NULL, 'partial'),
(25, 'mithrak@gmail.com', '2021-01-12 20:23:14', NULL, '750', '100', 'partial'),
(26, 'mithrak@gmail.com', '2021-01-12 20:24:22', NULL, '750', '100', 'partial'),
(27, 'mithrak@gmail.com', '2021-01-12 20:24:27', 1, NULL, NULL, 'orderplaced'),
(28, 'mithrak@gmail.com', '2021-01-12 20:29:19', 1, NULL, NULL, 'orderplaced'),
(29, 'mithrak@gmail.com', '2021-01-12 20:30:51', NULL, NULL, NULL, 'partial'),
(30, 'mithrak@gmail.com', '2021-01-12 20:31:50', 1, '750', '100', 'delivered'),
(31, 'mithrak@gmail.com', '2021-01-13 06:24:24', 1, '111', '100', 'orderplaced');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE IF NOT EXISTS `tblpayment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `oid` int(11) NOT NULL,
  `pDate` date NOT NULL,
  `pAmount` bigint(20) NOT NULL,
  `pStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`payid`),
  KEY `oid` (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`payid`, `oid`, `pDate`, `pAmount`, `pStatus`) VALUES
(1, 8, '2021-01-09', 100, 'Online payment'),
(2, 9, '0000-00-00', 0, 'POD'),
(3, 10, '0000-00-00', 0, 'POD'),
(4, 12, '0000-00-00', 0, 'POD'),
(5, 13, '0000-00-00', 0, 'POD'),
(6, 14, '0000-00-00', 0, 'POD'),
(7, 15, '0000-00-00', 0, 'POD'),
(8, 21, '0000-00-00', 0, 'POD'),
(9, 27, '0000-00-00', 0, 'POD'),
(10, 28, '0000-00-00', 0, 'POD'),
(11, 30, '0000-00-00', 850, 'POD'),
(12, 31, '0000-00-00', 0, 'POD');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `pId` int(11) NOT NULL AUTO_INCREMENT,
  `subid` int(11) NOT NULL,
  `pName` varchar(70) NOT NULL,
  `pDesc` varchar(500) NOT NULL,
  `pSsize` varchar(50) DEFAULT NULL,
  `pEsize` varchar(50) DEFAULT NULL,
  `pFabric` varchar(50) NOT NULL,
  `pWash` varchar(50) NOT NULL,
  `pHighlight` varchar(50) NOT NULL,
  `pRate` varchar(50) NOT NULL,
  `pStatus` varchar(50) NOT NULL,
  PRIMARY KEY (`pId`),
  KEY `FOREIGN` (`subid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`pId`, `subid`, `pName`, `pDesc`, `pSsize`, `pEsize`, `pFabric`, `pWash`, `pHighlight`, `pRate`, `pStatus`) VALUES
(1, 1, 'ABc', 'kjbjkb', NULL, NULL, 'ijgh', 'jbh', 'kjbb', '1499', 'In stock'),
(3, 3, 'Cotton hijab collection', 'kjnik', NULL, NULL, 'Cotton', 'Regular wash', 'kjbb', '150', 'In stock'),
(4, 3, 'Stylish Hijab', 'kjbnjhb', NULL, NULL, 'Cotton', 'Regular wash', 'jhb', '51', 'In stock'),
(5, 3, 'Stylish Scarf', 'ihnhjb', NULL, NULL, 'Chiffon', 'Regular wash', 'jhnhj', '100', 'In stock'),
(6, 3, 'Normal dailywear Hijabs', 'jhbnhjb', NULL, NULL, 'Synthetic', 'Regular wash', 'hgbyb', '100', 'In stock'),
(7, 3, 'Hijab', 'jhb', NULL, NULL, 'Cotton', 'Regular wash', 'jnkn', '100', 'In stock'),
(8, 4, 'Chiffon sareee', 'kjnkij', NULL, NULL, 'Chiffon', 'Regular wash', 'oiuhi', '550', 'In stock'),
(9, 1, 'oij', 'oijuio', NULL, NULL, 'ojiuji', 'ninu', 'iun', '850', 'In stock'),
(10, 1, 'kuhji', 'iujij', NULL, NULL, 'kjnjkn', 'ijnion', 'inju', '880', 'In stock'),
(11, 1, 'lkmui', 'yhui', NULL, NULL, 'iuhu', 'ihio', 'oiuhoi', '750', 'In stock'),
(12, 1, 'lkmui', 'yhui', NULL, NULL, 'iuhu', 'ihio', 'oiuhoi', '750', 'In stock'),
(13, 1, 'lkmui', 'yhui', NULL, NULL, 'iuhu', 'ihio', 'oiuhoi', '750', 'In stock'),
(14, 3, 'oiuhi', 'ujiph', NULL, NULL, 'iuhji', 'jiuhjp', 'jhih', '150', 'In stock'),
(15, 6, 'ljn', 'kjbnkj', NULL, NULL, '---', '---', 'kjbk', '111', 'In stock'),
(16, 5, 'kjnhjk', 'lkljn', NULL, NULL, '---', '---', 'jhkj', '111', 'In stock');

-- --------------------------------------------------------

--
-- Table structure for table `tblproductsize`
--

CREATE TABLE IF NOT EXISTS `tblproductsize` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `pId` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tblproductsize`
--

INSERT INTO `tblproductsize` (`sid`, `pId`, `size`) VALUES
(1, 9, 'S'),
(4, 10, 'XS'),
(9, 11, 'S'),
(12, 12, 'S'),
(19, 13, 'S'),
(20, 13, 'M'),
(21, 13, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofile`
--

CREATE TABLE IF NOT EXISTS `tblprofile` (
  `profId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  PRIMARY KEY (`profId`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblprofile`
--

INSERT INTO `tblprofile` (`profId`, `email`, `name`, `bio`, `occupation`, `location`, `contact`) VALUES
(1, 'mithrak@gmail.com', 'Mithra Kurian', 'yyy', '', '', '9568471203');

-- --------------------------------------------------------

--
-- Table structure for table `tblrating`
--

CREATE TABLE IF NOT EXISTS `tblrating` (
  `rId` int(11) NOT NULL AUTO_INCREMENT,
  `pId` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`rId`),
  KEY `pId` (`pId`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblrating`
--

INSERT INTO `tblrating` (`rId`, `pId`, `email`, `rating`) VALUES
(1, 6, 'mithrak@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE IF NOT EXISTS `tblsubcategory` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`subid`, `catid`, `subcategory`, `status`) VALUES
(1, 1, 'Dresses', 'active'),
(2, 1, 'T-shirts', 'active'),
(3, 3, 'Hijab', 'active'),
(4, 1, 'Saree', 'active'),
(5, 1, 'aaa', 'active'),
(6, 2, 'jjjj', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tblwishlist`
--

CREATE TABLE IF NOT EXISTS `tblwishlist` (
  `wId` int(11) NOT NULL AUTO_INCREMENT,
  `pId` int(11) NOT NULL,
  `cEmail` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  PRIMARY KEY (`wId`),
  KEY `pId` (`pId`,`cEmail`),
  KEY `cEmail` (`cEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblwishlist`
--

INSERT INTO `tblwishlist` (`wId`, `pId`, `cEmail`, `qty`, `size`) VALUES
(1, 13, 'mithrak@gmail.com', 1, '0'),
(2, 1, 'mithrak@gmail.com', 1, '0');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblimages`
--
ALTER TABLE `tblimages`
  ADD CONSTRAINT `tblimages_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `tblproduct` (`pId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD CONSTRAINT `tblproduct_ibfk_1` FOREIGN KEY (`subid`) REFERENCES `tblsubcategory` (`subid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblwishlist`
--
ALTER TABLE `tblwishlist`
  ADD CONSTRAINT `tblwishlist_ibfk_1` FOREIGN KEY (`pId`) REFERENCES `tblproduct` (`pId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tblwishlist_ibfk_2` FOREIGN KEY (`cEmail`) REFERENCES `tblcustomer` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
