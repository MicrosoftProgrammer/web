-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2017 at 12:54 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wmssite`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `AdvertisementID` int(11) NOT NULL AUTO_INCREMENT,
  `AdvertisementText` varchar(300) NOT NULL,
  `AdvertisementImage` varchar(500) NOT NULL,
  `AdvertisementShortDescription` varchar(500) NOT NULL,
  `AdvertisementDescription` text,
  `AdvertisementType` tinyint(4) NOT NULL DEFAULT '1',
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`AdvertisementID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`AdvertisementID`, `AdvertisementText`, `AdvertisementImage`, `AdvertisementShortDescription`, `AdvertisementDescription`, `AdvertisementType`, `Status`, `Deleted`) VALUES
(1, 'Advertisement 1', 'a1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero at, interdum iaculis purus. Nunc arcu lacus, mattis eget erat non, cursus vestibulum ante. Vivamus eget purus nisi. Pellentesque eu ex volutpat nibh viverra rutrum. Curabitur quis ante condimentum, consequat dui euismod, varius lectus. Ut vitae pretium sapien. In eget sodales ex.\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin co', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#96;Open Sans&#96;, Arial, sans-serif;">Nunc semper ligula et dignissim cursus. Quisque imperdiet, turpis vel ornare condimentum, neque tortor fermentum tellus, in sagittis lectus leo aliquam leo. Cras commodo ex nec nulla blandit rhoncus. Vivamus eget lectus vitae lacus eleifend dignissim. Cras laoreet lacus eu mattis varius. Integer varius, sem nec consectetur tristique, est nunc mattis nibh, eget finibus diam turpis rhoncus ante. Sed id urna porttitor, feugiat tellus eget, dapibus erat.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#96;Open Sans&#96;, Arial, sans-serif;">&nbsp;</p>', 1, 1, 0),
(2, 'Advertisement 2', '320x150.png', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse ', '<p><span style="font-family: &#96;Open Sans&#96;, Arial, sans-serif; text-align: justify;">Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse vulputate tincidunt turpis. Suspendisse potenti. Donec pulvinar condimentum lacus, in ornare risus dignissim eu. Integer sollicitudin, odio in viverra bibendum, eros mauris varius lectus, id tempus urna turpis a leo.</span></p>', 1, 1, 0),
(3, 'Advertisement 4', '1320x150.png', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse ', '<p><span style="font-family: `Open Sans`, Arial, sans-serif; text-align: justify;">Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse vulputate tincidunt turpis. Suspendisse potenti. Donec pulvinar condimentum lacus, in ornare risus dignissim eu. Integer sollicitudin, odio in viverra bibendum, eros mauris varius lectus, id tempus urna turpis a leo.</span></p>', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `BannerID` int(11) NOT NULL AUTO_INCREMENT,
  `BannerText` varchar(300) NOT NULL,
  `BannerImage` varchar(300) NOT NULL,
  `BannerType` tinyint(4) NOT NULL DEFAULT '1',
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`BannerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`BannerID`, `BannerText`, `BannerImage`, `BannerType`, `Status`, `Deleted`) VALUES
(1, 'Banner 1', 'b11.jpg', 1, 1, 0),
(2, 'Banner 2', '1b2.jpg', 1, 1, 0),
(3, 'Banner 3', 'b1.jpg', 1, 1, 0),
(4, 'Banner 4', 'b2.jpg', 1, 1, 0),
(5, 'Banner 5', 'b3.jpg', 1, 1, 0),
(6, 'Banner 6', '1b3.jpg', 1, 1, 0),
(7, 'Banner  7', 'b4.jpg', 1, 1, 0),
(8, 'Banner 8', 'b15.jpg', 1, 1, 1),
(9, 'Banner 9', 'b13.jpg', 1, 1, 1),
(10, 'Banner 8', 'b6.jpg', 1, 1, 0),
(11, 'Banner 9', 'b7.jpg', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `CareerID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Resume` varchar(300) NOT NULL,
  `UploadedTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CareerID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`CareerID`, `Name`, `Email`, `ContactNo`, `Resume`, `UploadedTime`, `Status`, `Deleted`) VALUES
(1, 'Suresh', '', '4234324234', 'filename.pdf', '2017-07-03 14:21:05', 1, 0),
(2, 'Suresh', '', '987654321', 'filename_(2).pdf', '2017-07-03 14:22:38', 1, 0),
(3, 'Suresh', '', '423', 'wms-bugreport1.docx', '2017-07-03 14:29:17', 1, 1),
(4, 'Suresh', '', '3454353', '3241_(2).pdf', '2017-07-03 14:41:01', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryID` bigint(20) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(150) NOT NULL,
  `CategoryDescription` varchar(500) DEFAULT NULL,
  `ProductPrimaryName` varchar(200) NOT NULL,
  `ProductPrimaryKey` varchar(200) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`CategoryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`, `CategoryDescription`, `ProductPrimaryName`, `ProductPrimaryKey`, `Status`, `Deleted`) VALUES
(1, 'Gulf Tool List', 'Gulf Tool List', 'Tool Ref No', 'SNo', 1, 0),
(2, 'US & Transducers', 'US & Transducers', '', '', 1, 0),
(3, 'X`Ray Demo', 'X`Ray Demo', '', '', 1, 0),
(4, 'WS,CES,EDNA', 'WS,CES,EDNA', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `EnquiryID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `EnquiredTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`EnquiryID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`EnquiryID`, `Name`, `Email`, `ContactNo`, `Description`, `EnquiredTime`, `Status`, `Deleted`) VALUES
(1, 'Suresh', '', '132231', '231213', '2017-07-03 14:49:00', 1, 1),
(2, 'Suresh', 'mr.suresh89@gmail.com', '234', '234', '2017-07-03 15:01:15', 1, 1),
(3, 'suriya', 'test@test.com', '9876543210', 'testing', '2017-07-15 00:38:32', 1, 0),
(4, 'hi', 'mspnandu@gmail.com', '0509577951', 'hi', '2017-07-26 12:21:20', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `NewsID` int(11) NOT NULL AUTO_INCREMENT,
  `NewsText` varchar(300) NOT NULL,
  `NewsImage` varchar(500) NOT NULL,
  `NewsShortDescription` varchar(500) NOT NULL,
  `NewsDescription` text,
  `NewsType` tinyint(4) NOT NULL DEFAULT '1',
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`NewsID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `NewsText`, `NewsImage`, `NewsShortDescription`, `NewsDescription`, `NewsType`, `Status`, `Deleted`) VALUES
(1, 'News 1', 'n2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero ', '<p class="MsoNormal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero&nbsp;</p>', 1, 1, 0),
(2, 'News 2', 'n1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero&nbsp;</p>', 1, 1, 0),
(3, 'News 3', 'n4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero&nbsp;</p>', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `PageID` int(11) NOT NULL AUTO_INCREMENT,
  `PageTitle` varchar(300) NOT NULL,
  `PageImage` varchar(200) DEFAULT 'noimage.png',
  `PageShortDescription` varchar(500) NOT NULL,
  `PageDescription` text NOT NULL,
  `PageSlug` varchar(300) NOT NULL,
  `ShowInHeaderMenu` tinyint(4) NOT NULL DEFAULT '0',
  `ShowInFooterMenu` tinyint(4) NOT NULL DEFAULT '0',
  `ShowInSideMenu` tinyint(4) NOT NULL DEFAULT '0',
  `SEOTitle` varchar(300) NOT NULL,
  `MetaKeywords` varchar(500) NOT NULL,
  `MetaDescription` varchar(500) NOT NULL,
  `Position` int(11) NOT NULL DEFAULT '0',
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`PageID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`PageID`, `PageTitle`, `PageImage`, `PageShortDescription`, `PageDescription`, `PageSlug`, `ShowInHeaderMenu`, `ShowInFooterMenu`, `ShowInSideMenu`, `SEOTitle`, `MetaKeywords`, `MetaDescription`, `Position`, `Status`, `Deleted`) VALUES
(1, 'Home', 'bannerglobalpack.swf', 'GLOBALPACK SHIPPING, we serve you for your local, inter emirate and international moves. Whether you are corporate or residential, we will get you where you want toâ€“by land, sea or air.', '<p><strong><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;">GLOBALPACK</span></strong><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;"> <strong>SHIPPING,</strong> </span><span style="font-family: Georgia, serif;">we serve you for your local, inter emirate and international moves. Whether you are corporate or residential, we will get you where you want to&ndash;by land, sea or air.</span></p>\r\n<p><strong><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;">GLOBALPACK</span></strong><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;"> <strong>SHIPPING </strong></span><span style="font-family: Georgia, serif;">is one of the leading Packing, Moving and Storage Company. You can rely on our proven expertise in the following areas:</span></p>\r\n<p><span style="font-family: Georgia, serif;">1) Worldwide Freight Forwarding&nbsp;&nbsp;<br /> 2) Packing &amp; Removal Services &ndash; Local and International<br /> 3) Shifting of Villas/Flats/Offices/Warehouses<br /> 4) Warehousing, Distribution and Public Storage<br /> 5) Industrial Packing / Casing / Handling Services<br /> 6) Door to Door Services<br /> 7) Customs Clearance and Delivery<br /> 8) Fairs and Exhibitions</span></p>\r\n<p><span style="font-family: Georgia, serif;">If you are moving for the first time and confused as to where to start from, we will happily guide you through the packing, shipping and documentation process, in a step by step manner. GLOBALPACK specializes in packing, crating, loading and shipping your personal belongings. Nothing is too small if it is important to you and no destination is difficult.</span></p>\r\n<p><span style="font-family: Georgia, serif;">You can obtain a free consultation over the phone. We will gladly answer any question you might have. If needed, our representatives will come to your place, at your convenience, to provide an estimate without any obligation.</span></p>\r\n<p><span style="font-family: Georgia, serif;">Our philosophy is &ldquo;To provide quick and superior quality relocation services to our customer at all times.&rdquo;</span></p>\r\n<p><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;">&ldquo;<strong>GLOBALPACK</strong> <strong>SHIPPING</strong>&rdquo; </span><span style="font-family: Georgia, serif;">&ndash; the solution for all your moving problems.</span></p>\r\n<p class="MsoNormal"><span style="font-size: 12.0pt; line-height: 115%; font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; mso-bidi-font-family: &#96;Times New Roman&#96;;">&nbsp;</span></p>\r\n<p class="MsoNormal">&nbsp;</p>', 'home', 1, 0, 0, 'GlobalPack Shipping & Freight Services L.L.C - home', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 0, 1, 0),
(2, 'About Us', 'noimage.png', 'GLOBALPACK SHIPPING, we serve you for your local, inter emirate and international moves. Whether you are corporate or residential, we will get you where you want toâ€“by land, sea or air.', '<p><strong><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;">GLOBALPACK</span></strong><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;">&nbsp;<strong>SHIPPING&nbsp;</strong></span><span style="font-family: Georgia, serif;">is one of the leading Packing, Moving and Storage Company. You can rely on our proven expertise in the following areas:</span></p>\r\n<p><span style="font-family: Georgia, serif;">1) Worldwide Freight Forwarding&nbsp;&nbsp;<br />2) Packing &amp; Removal Services &ndash; Local and International<br />3) Shifting of Villas/Flats/Offices/Warehouses<br />4) Warehousing, Distribution and Public Storage<br />5) Industrial Packing / Casing / Handling Services<br />6) Door to Door Services<br />7) Customs Clearance and Delivery<br />8) Fairs and Exhibitions</span></p>\r\n<p><span style="font-family: Georgia, serif;">If you are moving for the first time and confused as to where to start from, we will happily guide you through the packing, shipping and documentation process, in a step by step manner. GLOBALPACK specializes in packing, crating, loading and shipping your personal belongings. Nothing is too small if it is important to you and no destination is difficult.</span></p>\r\n<p><span style="font-family: Georgia, serif;">You can obtain a free consultation over the phone. We will gladly answer any question you might have. If needed, our representatives will come to your place, at your convenience, to provide an estimate without any obligation.</span></p>\r\n<p><span style="font-family: Georgia, serif;">Our philosophy is &ldquo;To provide quick and superior quality relocation services to our customer at all times.&rdquo;</span></p>\r\n<p><span style="font-family: &#96;Georgia&#96;,&#96;serif&#96;; mso-fareast-font-family: Batang; color: #558ed5; mso-themecolor: text2; mso-themetint: 153; mso-style-textfill-fill-color: #558ED5; mso-style-textfill-fill-themecolor: text2; mso-style-textfill-fill-alpha: 100.0%; mso-style-textfill-fill-colortransforms: &#96;lumm=60000 lumo=40000&#96;;">&ldquo;<strong>GLOBALPACK</strong>&nbsp;<strong>SHIPPING</strong>&rdquo;&nbsp;</span><span style="font-family: Georgia, serif;">&ndash; the solution for all your moving problems.</span></p>', 'about-us', 1, 0, 0, 'GlobalPack Shipping & Freight Services L.L.C - About us', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions\r\n\r\n', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 0, 1, 0),
(3, 'News', 'noimage.png', 'Latest news at globalpack are coming soon..', '<p>Latest news at globalpack are coming soon..</p>', 'news', 0, 0, 0, 'GlobalPack Shipping & Freight Services L.L.C - News', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 0, 1, 0),
(4, 'Privacy Policy', 'noimage.png', 'Coming soon', '<p>Privacy Policies are coming soon...</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#96;Open Sans&#96;, Arial, sans-serif;">&nbsp;</p>', 'privacy-policy', 0, 1, 0, 'GLOBALPACK SHIPPING & FREIGHT SERVICES LLC - Privacy policy', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 0, 1, 0),
(5, 'Services', 'noimage.png', 'WE at GLOBALPACK SHIPPING AND FREIGHT SERVICES aim to provide our clients with a complete service from the start to end and every care is taken to ensure prompt and safe delivery of your possessions.', '<p><span style="font-size: 10.0pt; font-family: &#96;Calibri&#96;,&#96;sans-serif&#96;; mso-ascii-theme-font: minor-latin; mso-hansi-theme-font: minor-latin; mso-bidi-font-family: &#96;Times New Roman&#96;;">WE at GLOBALPACK SHIPPING AND FREIGHT SERVICES aim to provide our clients with a complete service from the start to end and every care is taken to ensure prompt and safe delivery of your possessions.</span></p>', 'services', 1, 0, 0, 'GLOBALPACK SHIPPING & FREIGHT SERVICES LLC - Services', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 0, 1, 0),
(6, 'Career', 'career.jpg', 'Career', '', 'career', 1, 1, 0, 'GlobalPack Shipping & Freight Services L.L.C - Career', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions\r\n\r\n', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions\r\n', 0, 1, 0),
(7, 'Contact Us', 'noimage.png', 'P.O.BOX: 38447\r\nW/H NO: FG6, First Gulf Property Compound\r\nDIP-1, DUBAI, UAE', '<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;"><strong>GLOBALPACK SHIPPING &amp; FREIGHT SERVICES LLC</strong></span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">P.O.BOX: 38447</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">W/H NO: FG6, First Gulf Property Compound</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">DIP-1, DUBAI, UAE</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">TEL: +971 4 8850566</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">FAX: +971 4 8852620</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">MOB: +971 50 654 2448/ 957 7951</span></p>\r\n<p class="MsoNormal" style="text-align: center; line-height: normal;" align="center"><span style="font-size: 12.0pt; font-family: &#96;Cambria&#96;,&#96;serif&#96;; mso-ascii-theme-font: major-latin; mso-hansi-theme-font: major-latin;">Email: <a href="mailto:globalpc@emirates.net.ae"><span style="color: windowtext;">globalpc@emirates.net.ae</span></a></span></p>\r\n<p>&nbsp;</p>', 'contact-us', 1, 1, 0, 'GLOBALPACK SHIPPING & FREIGHT SERVICES LLC - Contact us', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 'Worldwide Freight Forwarding, Packing & Removal Services â€“ Local and International, Shifting of Villas/Flats/Offices/Warehouses, Warehousing, Distribution and Public Storage, Industrial Packing / Casing / Handling Services,Door to Door Services, Customs Clearance and Delivery, Fairs and Exhibitions', 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `ServiceID` int(11) NOT NULL AUTO_INCREMENT,
  `ServiceText` varchar(300) NOT NULL,
  `ServiceImage` varchar(500) NOT NULL,
  `ServiceShortDescription` varchar(500) NOT NULL,
  `ServiceDescription` text,
  `ServiceType` tinyint(4) NOT NULL DEFAULT '1',
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ServiceID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ServiceID`, `ServiceText`, `ServiceImage`, `ServiceShortDescription`, `ServiceDescription`, `ServiceType`, `Status`, `Deleted`) VALUES
(1, 'World wide Freight Forwarding ', 's1.jpg', 'We offer comprehensive freight forwarding services by Land, Air and Sea. We take care of all the custom formalities, documentation and ensure prompt delivery of goods at destination.', '<p>We offer comprehensive freight forwarding services by Land, Air and Sea. We take care of all the custom formalities, documentation and ensure prompt delivery of goods at destination.</p>', 1, 1, 0),
(2, 'Packing & Removal Services â€“ Local and International', 's2.jpg', 'Good packing is essential for a safe move. \r\nWe at Globalpack shipping, take care of each and every aspects involved in the move. ', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Good packing is essential for a safe move.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">We at Globalpack shipping, take care of each and every aspects involved in the move.&nbsp;</span><br style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;" /><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Our professional and dedicated teams who are experts in packing and unpacking will take charge of the move and offer you a complete peace of mind. We care the sentimental value attached to the personal effects so your fragile possessions will be carefully packed to ensure maximum protection.</span></p>\r\n<p style="text-align: justify;">&nbsp;</p>', 1, 1, 0),
(8, 'Fairs and Exhibitions', 's8.jpg', 'We understand the specific logistics needs and co-ordination required for Fairs and exhibition. Our specialized expertise with proper planning and co-ordination ensure the prompt and timely services in tact condition of your material.', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">We understand the specific logistics needs and co-ordination required for Fairs and exhibition. Our specialized expertise with proper planning and co-ordination ensure the prompt and timely services in tact condition of your material.</span></p>', 1, 1, 0),
(3, 'Shifting of Villas/Flats/Offices/Warehouses', 's3.jpg', 'The relocation process, whether a family or an organization is not an easy task. But with our experienced and dedicated crew members we can accommodate all your moving and relocation needs whether youâ€™re moving within same or inter emirate. ', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">The relocation process, whether a family or an organization is not an easy task. But with our experienced and dedicated crew members we can accommodate all your moving and relocation needs whether you&rsquo;re moving within same or inter emirate. We can handle complicated office relocation also in a very professional way and in a short time. We understand the different needs of our customers and fulfill them by providing quick, stress free and customized service.</span></p>', 1, 1, 0),
(7, 'Customs Clearance and Delivery', 's7.jpg', 'If you require a complete door delivery service for your export/import shipments delivered to door at any major international airport or port, Globalpack Shipping can deliver. ', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">If you require a complete door delivery service for your export/import shipments delivered to door at any major international airport or port, Globalpack Shipping can deliver. We can arrange customs clearance for import and export cargo efficiently</span></p>', 1, 1, 0),
(4, 'Warehousing, Distribution and Public Storage', 's4.jpg', 'We provide the storage facility for short and long term. We will provide the inventory list of the items stored and can arrange delivery upon request.', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">We provide the storage facility for short and long term. We will provide the inventory list of the items stored and can arrange delivery upon request.</span></p>', 1, 1, 0),
(5, 'Industrial packing/casing/handling service', 's5.jpg', 'We specialize in the strategic Project movements, heavy equipment handling, planning and execution. ', '<p>Our skilled professionals are well talented to make the project manager&rsquo;s insight into what is really going on with a project so that they can make the timely and effective project status necessary for delivering a project on schedule. Our firm commitment towards excellent service, clearly manifest the key for a continual growth and success..</p>', 1, 1, 0),
(6, 'Door to Door Services', 's6.jpg', 'We provide door to door services through our worldwide network of dedicated agents and professional teams. ', '<p><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">We provide door to door services through our worldwide network of dedicated agents and professional teams. We take care of the documentation formalities and ensure you the timely delivery of the shipment to your destination.</span></p>', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `CompanyName` varchar(200) NOT NULL,
  `Logo` varchar(200) NOT NULL DEFAULT 'logo.png',
  `Address` varchar(500) NOT NULL,
  `ContactNo` varchar(100) NOT NULL,
  `Fax` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `FromEmail` varchar(150) NOT NULL,
  `AdminUrl` varchar(300) NOT NULL,
  `WMSUrl` varchar(300) NOT NULL,
  `Location` text NOT NULL,
  `Caption` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`CompanyName`, `Logo`, `Address`, `ContactNo`, `Fax`, `Email`, `FromEmail`, `AdminUrl`, `WMSUrl`, `Location`, `Caption`) VALUES
('GlobalPack Shipping & Freight Services L.L.C', '211logo.jpg', 'GLOBALPACK SHIPPING & FREIGHT SERVICES LLC\r\nP.O.BOX: 38447\r\nW/H NO: FG6, First Gulf Property Compound\r\nDIP-1, DUBAI, UAE\r\nTel : +971 4 8850566', '+971 50 654 2448, 957 7951', '+971 4 8852620', 'globalpc@emirates.net.ae', 'globalpc@emirates.net.ae', 'http://www.globalpackshippingllc.com/adminpanel/login.php', 'http://www.globalpackshippingllc.com/wms/login.php', '<iframe src="http://www.map-generator.org/c268185e-2d0c-459b-95d7-5f3ed89c5622/iframe-map.aspx" scrolling="no" width="400px" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><small><a href="http://www.map-generator.org/c268185e-2d0c-459b-95d7-5f3ed89c5622/large-map.aspx" target="_blank">Open large map<a/></small>', '1123-banner_com_2641235.swf');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `LogID` bigint(20) NOT NULL AUTO_INCREMENT,
  `LoggedInUser` int(11) NOT NULL,
  `LoggedInTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IPAddress` varchar(30) NOT NULL,
  `MACAddress` varchar(50) NOT NULL,
  `Browser` varchar(30) NOT NULL,
  `LogoutTime` datetime NOT NULL,
  `UserAction` text NOT NULL,
  PRIMARY KEY (`LogID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`LogID`, `LoggedInUser`, `LoggedInTime`, `IPAddress`, `MACAddress`, `Browser`, `LogoutTime`, `UserAction`) VALUES
(1, 1, '2017-06-23 17:40:54', '127.0.0.1', '', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 23-06-2017 10:40:54</li><li>Suresh Raju did bulk upload  at 23-06-2017 10:41:12</li><li>Suresh Raju updated Product with ID 1  at 23-06-2017 10:41:51</li><li>Suresh Raju did bulk upload  at 23-06-2017 10:45:29</li><li>Suresh Raju updated Product with ID 1  at 23-06-2017 10:45:47</li><li>Suresh Raju added Product with ID 615  at 23-06-2017 10:48:35</li>'),
(2, 1, '2017-06-26 14:23:01', '127.0.0.1', '', 'Chrome 58', '2017-06-26 13:16:00', '<li>Suresh Raju logged in at 26-06-2017 07:23:01</li>'),
(3, 1, '2017-06-26 14:32:37', '127.0.0.1', '', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 07:32:37</li>'),
(4, 1, '2017-06-26 14:47:04', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 07:47:04</li>'),
(5, 1, '2017-06-26 14:55:57', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 07:55:56</li>'),
(6, 1, '2017-06-26 15:23:51', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 08:23:51</li>'),
(7, 1, '2017-06-26 17:20:08', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 10:20:08</li>'),
(8, 1, '2017-06-26 18:57:17', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 11:57:17</li><li>Suresh Raju created invoice with no 123  at 26-06-2017 13:03:02</li><li>Suresh Raju created invoice with no 12309  at 26-06-2017 13:11:51</li>'),
(9, 1, '2017-06-28 21:45:52', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 28-06-2017 14:45:52</li>'),
(10, 1, '2017-07-01 19:46:06', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 01-07-2017 12:46:05</li>'),
(11, 1, '2017-07-02 14:12:46', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '2017-07-02 13:57:51', '<li>Suresh Raju logged in at 02-07-2017 07:12:45</li>'),
(12, 1, '2017-07-02 15:51:25', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 02-07-2017 08:51:23</li>'),
(13, 1, '2017-07-02 15:58:42', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 02-07-2017 08:58:42</li>'),
(14, 1, '2017-07-02 21:49:54', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 02-07-2017 14:49:52</li>'),
(15, 1, '2017-07-03 01:29:06', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 02-07-2017 18:29:06</li>'),
(16, 1, '2017-07-03 17:44:57', '::1', '00-24-D7-C6-6C-98', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 03-07-2017 14:14:56</li>'),
(17, 1, '2017-07-03 17:53:11', '::1', '00-24-D7-C6-6C-98', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 03-07-2017 14:23:09</li>'),
(18, 1, '2017-07-03 20:43:20', '::1', '00-24-D7-C6-6C-98', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 03-07-2017 17:13:17</li>'),
(19, 1, '2017-07-04 02:24:02', '92.96.219.101', '', 'Firefox 54', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 03-07-2017 14:54:02</li>'),
(20, 1, '2017-07-04 02:39:45', '92.96.219.101', '', 'Firefox 54', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 03-07-2017 15:09:45</li>'),
(21, 1, '2017-07-04 04:00:08', '92.96.219.101', '', 'Firefox 54', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 03-07-2017 16:30:08</li>'),
(22, 1, '2017-07-04 04:17:43', '92.96.219.101', '', 'Firefox 54', '0000-00-00 00:00:00', '<li>Suriya logged in at 03-07-2017 16:47:43</li>'),
(23, 1, '2017-07-05 23:53:29', '109.177.156.11', '', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suriya logged in at 05-07-2017 12:23:29</li>'),
(24, 1, '2017-07-14 22:56:38', '27.62.71.252', '', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suriya logged in at 14-07-2017 11:26:38</li>'),
(25, 1, '2017-07-14 23:25:33', '27.62.71.252', '', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suriya logged in at 14-07-2017 11:55:33</li>'),
(26, 1, '2017-07-22 20:15:03', '101.222.224.205', '', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suriya logged in at 22-07-2017 08:45:03</li>'),
(27, 1, '2017-07-26 23:18:08', '27.62.252.107', '', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suriya logged in at 26-07-2017 11:48:08</li>'),
(28, 1, '2017-08-19 18:10:07', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 60', '0000-00-00 00:00:00', '<li>Suriya logged in at 19-08-2017 12:40:07</li>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `UserType` smallint(6) NOT NULL,
  `Permissions` text NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Email`, `Password`, `ContactNo`, `UserType`, `Permissions`, `Status`, `Deleted`) VALUES
(1, 'Suriya', 'superadmin@test.com', '618c450c775ca7ced5145a8c4a1ca66c', '9876543210', 1, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":2,"PageName":"Configuration","Page":"javascript:void(0)","DisplayOrder":2,"Icon":"fa-cogs","Path":"","Status":1,"SubPage":[{"PageID":3,"PageName":"Product Fields","Page":"viewproductfield.php","Icon":"fa-bars","Path":"../productfield/","DisplayOrder":1,"Status":1},{"PageID":4,"PageName":"Product Field Types","Page":"viewproductfieldtype.php","Icon":"fa-exchange","Path":"../productfieldtype/","DisplayOrder":2,"Status":1},{"PageID":5,"PageName":"Product Field Values","Page":"viewproductfieldvalue.php","Icon":"fa-flag","Path":"../productfieldvalue/","DisplayOrder":3,"Status":1},{"PageID":6,"PageName":"Category Field Mapping","Page":"fieldmapping.php","Icon":"fa-map","Path":"../mapping/","DisplayOrder":4,"Status":1}]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":8,"PageName":"User","Page":"viewusers.php","Icon":"fa-user","Path":"../user/","DisplayOrder":1,"Status":1},{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1},\r\n{"PageID":9,"PageName":"User Log","Page":"userlog.php","Icon":"fa-clock-o","Path":"../user/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":1}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":1},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":1},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":1},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":1},{"PageID":18,"PageName":"Invoice Generator","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":1},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":1}]}]', 1, 0),
(7, 'Priyanka', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '65475', 3, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":1}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":1}]}]', 1, 0),
(8, 'Suriya', 'suriya@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '34432', 2, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":1}]}]', 1, 0),
(9, 'Aarush', 'aarush@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '3243546789', 2, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":0,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":0},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":0,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":0},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":0}]}]', 1, 0),
(10, 'Tom', 'tom@gmail.com', '34b7da764b21d298ef307d04d8152dc5', '234432342', 3, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":1},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":0},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":1}]}]', 1, 0),
(11, 'err', 'aaerush@gmail.com', '76d80224611fc919a5d54f0ff9fba446', '4', 2, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":0,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":0},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":0,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":0},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":0}]}]', 1, 0);
