-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2017 at 08:28 AM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`AdvertisementID`, `AdvertisementText`, `AdvertisementImage`, `AdvertisementShortDescription`, `AdvertisementDescription`, `AdvertisementType`, `Status`, `Deleted`) VALUES
(1, 'Test', '21logo.png,21progress.gif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien dolor. Aliquam sapien sem, luctus id libero at, interdum iaculis purus. Nunc arcu lacus, mattis eget erat non, cursus vestibulum ante. Vivamus eget purus nisi. Pellentesque eu ex volutpat nibh viverra rutrum. Curabitur quis ante condimentum, consequat dui euismod, varius lectus. Ut vitae pretium sapien. In eget sodales ex.\r\nInterdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin co', '<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#96;Open Sans&#96;, Arial, sans-serif;">Nunc semper ligula et dignissim cursus. Quisque imperdiet, turpis vel ornare condimentum, neque tortor fermentum tellus, in sagittis lectus leo aliquam leo. Cras commodo ex nec nulla blandit rhoncus. Vivamus eget lectus vitae lacus eleifend dignissim. Cras laoreet lacus eu mattis varius. Integer varius, sem nec consectetur tristique, est nunc mattis nibh, eget finibus diam turpis rhoncus ante. Sed id urna porttitor, feugiat tellus eget, dapibus erat.</p>\r\n<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: &#96;Open Sans&#96;, Arial, sans-serif;">&nbsp;</p>', 1, 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`BannerID`, `BannerText`, `BannerImage`, `BannerType`, `Status`, `Deleted`) VALUES
(1, 'Test', '13.png', 1, 1, 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `career`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `enquiry`
--


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
(1, 'Test', '1logo.png,1progress.gif', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse ', '<ul>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">There may be one or more arguments.</li>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Returns the string that results from concatenating the arguments.</li>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Returns a nonbinary string, if all arguments are nonbinary strings.</li>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Returns a binary string, if the arguments include any binary strings.</li>\r\n</ul>', 1, 1, 0),
(2, 'Test', '21logo.png,21progress.gif', 'There may be one or more arguments.\r\nReturns the string that results from concatenating the arguments.\r\nReturns a nonbinary string, if all arguments are nonbinary strings.\r\nReturns a binary string, if the arguments include any binary strings.', '<ul>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">There may be one or more arguments.</li>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Returns the string that results from concatenating the arguments.</li>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Returns a nonbinary string, if all arguments are nonbinary strings.</li>\r\n<li style="margin: 0px; line-height: 18px; color: #333333; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">Returns a binary string, if the arguments include any binary strings.</li>\r\n</ul>', 1, 1, 0),
(3, 'Test 3444', '21logo.png', 'There may be one or more arguments. Returns the string that results from concatenating the arguments. Returns a nonbinary string, if all arguments are nonbinary strings. Returns a binary string, if the arguments include any binary strings. 42332', '<p>There may be one or more arguments. Returns the string that results from concatenating the arguments. Returns a nonbinary string, if all arguments are nonbinary strings. Returns a binary string, if the arguments include any binary strings.</p>\r\n<p>&nbsp;</p>\r\n<p>2433</p>', 1, 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`PageID`, `PageTitle`, `PageImage`, `PageShortDescription`, `PageDescription`, `PageSlug`, `ShowInHeaderMenu`, `ShowInFooterMenu`, `ShowInSideMenu`, `SEOTitle`, `MetaKeywords`, `MetaDescription`, `Position`, `Status`, `Deleted`) VALUES
(1, 'Test', '3.png', 'Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu. Donec mattis adipiscing imperdiet.', '<p>Nullam ultrices tempor nisi, ac egestas diam aliquam a. Ut eleifend semper turpis, id feugiat arcu dignissim eu. Donec mattis adipiscing imperdiet.</p>', 'test', 0, 0, 0, 'Nullam ultrices tempor nisi,', 'Nullam ultrices tempor nisi,', 'Nullam ultrices tempor nisi,', 0, 1, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ServiceID`, `ServiceText`, `ServiceImage`, `ServiceShortDescription`, `ServiceDescription`, `ServiceType`, `Status`, `Deleted`) VALUES
(1, 'New', 'logo.png,progress.gif', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse ', '<p><span style="font-family: `Open Sans`, Arial, sans-serif; text-align: justify;">Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse vulputate tincidunt turpis. Suspendisse potenti. Donec pulvinar condimentum lacus, in ornare risus dignissim eu. Integer sollicitudin, odio in viverra bibendum, eros mauris varius lectus, id tempus urna turpis a leo.</span></p>', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `ServiceID` int(11) NOT NULL AUTO_INCREMENT,
  `ServiceText` varchar(300) NOT NULL,
  `ServiceImage` varchar(500) NOT NULL,
  `ServiceDescription` text,
  `ServiceType` tinyint(4) NOT NULL DEFAULT '1',
  `Status` tinyint(4) NOT NULL DEFAULT '1',
  `Deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ServiceID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `services`
--


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
  `Location` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`CompanyName`, `Logo`, `Address`, `ContactNo`, `Fax`, `Email`, `FromEmail`, `Location`) VALUES
('Global Pack Shipping & Freight Services L.L.C', '54321logo.jpg', 'Test Company', '9876543210,987659876', '9876543210,987659876', 'test@test.com', 'test@test.com', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse vulputate tincidunt turpis. Suspendisse potenti. Donec pulvinar condimentum lacus, in ornare risus dignissim eu. Integer sollicitudin, odio in viverra bibendum, eros mauris varius lectus, id tempus urna turpis a leo.'),
('Global Pack Shipping & Freight Services L.L.C', '54321logo.jpg', 'Test Company', '9876543210,987659876', '9876543210,987659876', 'test@test.com', 'test@test.com', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris et risus et nibh sollicitudin consequat. Donec scelerisque vehicula luctus. Morbi nunc lorem, posuere et massa feugiat, pellentesque varius tellus. Ut gravida egestas tortor ut egestas. Nunc eget hendrerit justo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras fringilla velit diam, quis bibendum justo semper id. Cras lorem erat, consequat sed ultrices ut, laoreet a enim. Suspendisse vulputate tincidunt turpis. Suspendisse potenti. Donec pulvinar condimentum lacus, in ornare risus dignissim eu. Integer sollicitudin, odio in viverra bibendum, eros mauris varius lectus, id tempus urna turpis a leo.');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`LogID`, `LoggedInUser`, `LoggedInTime`, `IPAddress`, `MACAddress`, `Browser`, `LogoutTime`, `UserAction`) VALUES
(1, 1, '2017-06-23 16:10:54', '127.0.0.1', '', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 23-06-2017 10:40:54</li><li>Suresh Raju did bulk upload  at 23-06-2017 10:41:12</li><li>Suresh Raju updated Product with ID 1  at 23-06-2017 10:41:51</li><li>Suresh Raju did bulk upload  at 23-06-2017 10:45:29</li><li>Suresh Raju updated Product with ID 1  at 23-06-2017 10:45:47</li><li>Suresh Raju added Product with ID 615  at 23-06-2017 10:48:35</li>'),
(2, 1, '2017-06-26 12:53:01', '127.0.0.1', '', 'Chrome 58', '2017-06-26 13:16:00', '<li>Suresh Raju logged in at 26-06-2017 07:23:01</li>'),
(3, 1, '2017-06-26 13:02:37', '127.0.0.1', '', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 07:32:37</li>'),
(4, 1, '2017-06-26 13:17:04', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 07:47:04</li>'),
(5, 1, '2017-06-26 13:25:57', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 07:55:56</li>'),
(6, 1, '2017-06-26 13:53:51', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 08:23:51</li>'),
(7, 1, '2017-06-26 15:50:08', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 10:20:08</li>'),
(8, 1, '2017-06-26 17:27:17', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 58', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 26-06-2017 11:57:17</li><li>Suresh Raju created invoice with no 123  at 26-06-2017 13:03:02</li><li>Suresh Raju created invoice with no 12309  at 26-06-2017 13:11:51</li>'),
(9, 1, '2017-06-28 20:15:52', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 28-06-2017 14:45:52</li>'),
(10, 1, '2017-07-01 18:16:06', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '0000-00-00 00:00:00', '<li>Suresh Raju logged in at 01-07-2017 12:46:05</li>'),
(11, 1, '2017-07-02 12:42:46', '127.0.0.1', 'AC-D1-B8-C4-16-1F', 'Chrome 59', '2017-07-02 13:57:51', '<li>Suresh Raju logged in at 02-07-2017 07:12:45</li>');

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
(1, 'Suresh Raju', 'mr.suresh89@gmail.com', '618c450c775ca7ced5145a8c4a1ca66c', '9876543210', 1, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":2,"PageName":"Configuration","Page":"javascript:void(0)","DisplayOrder":2,"Icon":"fa-cogs","Path":"","Status":1,"SubPage":[{"PageID":3,"PageName":"Product Fields","Page":"viewproductfield.php","Icon":"fa-bars","Path":"../productfield/","DisplayOrder":1,"Status":1},{"PageID":4,"PageName":"Product Field Types","Page":"viewproductfieldtype.php","Icon":"fa-exchange","Path":"../productfieldtype/","DisplayOrder":2,"Status":1},{"PageID":5,"PageName":"Product Field Values","Page":"viewproductfieldvalue.php","Icon":"fa-flag","Path":"../productfieldvalue/","DisplayOrder":3,"Status":1},{"PageID":6,"PageName":"Category Field Mapping","Page":"fieldmapping.php","Icon":"fa-map","Path":"../mapping/","DisplayOrder":4,"Status":1}]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":8,"PageName":"User","Page":"viewusers.php","Icon":"fa-user","Path":"../user/","DisplayOrder":1,"Status":1},{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1},\r\n{"PageID":9,"PageName":"User Log","Page":"userlog.php","Icon":"fa-clock-o","Path":"../user/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":1}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":1},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":1},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":1},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":1},{"PageID":18,"PageName":"Invoice Generator","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":1},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":1}]}]', 1, 0),
(7, 'Priyanka', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '65475', 3, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":1}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":1}]}]', 1, 0),
(8, 'Suriya', 'suriya@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '34432', 2, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":1}]}]', 1, 0),
(9, 'Aarush', 'aarush@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '3243546789', 2, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":0,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":0},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":0,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":0},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":0}]}]', 1, 0),
(10, 'Tom', 'tom@gmail.com', '34b7da764b21d298ef307d04d8152dc5', '234432342', 3, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":1,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":1},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":1,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":1},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":0},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":1}]}]', 1, 0),
(11, 'err', 'aaerush@gmail.com', '76d80224611fc919a5d54f0ff9fba446', '4', 2, '[{"PageID":1,"PageName":"Dashboard","Page":"index.php","DisplayOrder":1,"Icon":"fa-dashboard","Path":"../dashboard/","Status":1,"SubPage":[]},{"PageID":7,"PageName":"Users","Page":"javascript:void(0)","Icon":"fa-users","Path":"","DisplayOrder":3,"Status":1,"SubPage":[{"PageID":9,"PageName":"Permissions","Page":"permissions.php","Icon":"fa-sitemap","Path":"../permissions/","DisplayOrder":2,"Status":1}]},{"PageID":10,"PageName":"Products","Page":"javascript:void(0)","DisplayOrder":4,"Icon":"fa-tags","Path":"","Status":0,"SubPage":[{"PageID":11,"PageName":"Categories","Page":"viewcategories.php","Icon":"fa-shopping-cart","Path":"../category/","DisplayOrder":1,"Status":0},{"PageID":12,"PageName":"Products","Page":"viewproducts.php","Icon":"fa-list","Path":"../product/","DisplayOrder":2,"Status":0}]},{"PageID":13,"PageName":"Reports","Page":"javascript:void(0)","Icon":"fa-files-o","Path":"","DisplayOrder":5,"Status":0,"SubPage":[{"PageID":14,"PageName":"Product Report","Page":"productreport.php","Icon":"fa-files-o","Path":"../reports/","DisplayOrder":1,"Status":0},{"PageID":15,"PageName":"Overview Report","Page":"overviewreport.php","Icon":"fa-file-excel-o","Path":"../reports/","DisplayOrder":2,"Status":0},{"PageID":16,"PageName":"Product History Report","Page":"producthistoryreport.php","Icon":"fa-history","Path":"../reports/","DisplayOrder":3,"Status":0},{"PageID":17,"PageName":"Date/Month Wise Report","Page":"datewisereport.php","Icon":"fa-calendar","Path":"../reports/","DisplayOrder":4,"Status":0},{"PageID":18,"PageName":"Invoice Generatort","Page":"invoice.php","Icon":"fa-file-pdf-o","Path":"../reports/","DisplayOrder":5,"Status":0},{"PageID":19,"PageName":"General Invoice","Page":"invoicegen.php","Icon":"fa-print","Path":"../reports/","DisplayOrder":6,"Status":0}]}]', 1, 0);
