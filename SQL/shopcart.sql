-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2017 at 02:15 PM
-- Server version: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'product_comp'),
(2, 'product_electronics'),
(3, 'product_home'),
(4, 'product_men'),
(5, 'product_mobile'),
(6, 'product_women');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL,
  `comment` text,
  `comment_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `prod_id`, `cat_id`, `reg_id`, `comment`, `comment_date`) VALUES
(14, 1, 5, 1, 'Give some review about the product!', '2017-08-02'),
(15, 2, 5, 1, 'Please give some review about this product!', '2017-08-02'),
(16, 1, 5, 2, 'Wow', '2017-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `cust_details`
--

CREATE TABLE IF NOT EXISTS `cust_details` (
  `cust_id` int(11) NOT NULL,
  `cust_address` varchar(60) DEFAULT NULL,
  `cust_phone` int(10) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE IF NOT EXISTS `description` (
  `desc_id` int(11) NOT NULL,
  `description` text,
  `prod_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_comp`
--

CREATE TABLE IF NOT EXISTS `product_comp` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_image` text,
  `prod_price` float DEFAULT NULL,
  `prod_quan` int(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `keyword` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_electronics`
--

CREATE TABLE IF NOT EXISTS `product_electronics` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_image` text,
  `prod_price` float DEFAULT NULL,
  `prod_quan` int(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `keyword` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_home`
--

CREATE TABLE IF NOT EXISTS `product_home` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_image` text,
  `prod_price` float DEFAULT NULL,
  `prod_quan` int(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `keyword` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_men`
--

CREATE TABLE IF NOT EXISTS `product_men` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_image` text,
  `prod_price` float DEFAULT NULL,
  `prod_quan` int(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `keyword` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_mobile`
--

CREATE TABLE IF NOT EXISTS `product_mobile` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_image` text,
  `prod_price` float DEFAULT NULL,
  `prod_quan` int(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `keyword` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_mobile`
--

INSERT INTO `product_mobile` (`prod_id`, `prod_name`, `prod_image`, `prod_price`, `prod_quan`, `date_added`, `keyword`) VALUES
(1, 'Iphone 6 Plus', 'i8.jpg', 100000, 10, '1990-10-10 00:00:00', 'Iphone 6 Plus Apple Mobile'),
(2, 'Samsung Galaxy S8', 's8.jpg', 90000, 10, '2017-08-02 12:37:22', 'Samsung Galaxy s8 Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `product_women`
--

CREATE TABLE IF NOT EXISTS `product_women` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(60) DEFAULT NULL,
  `prod_image` text,
  `prod_price` float DEFAULT NULL,
  `prod_quan` int(10) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `keyword` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'Dipesh', 'Rai', 'Dipesh_Rai78@gmail.com', 'dipesh', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Rupesh', 'Poudel', 'Rupesh.Poudel@gmail.com', 'rupesh', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `reply_id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL,
  `reply` text,
  `reply_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`reply_id`, `comment_id`, `reg_id`, `reply`, `reply_date`) VALUES
(1, 14, 1, 'Okay Sir!', '2010-10-10'),
(2, 14, 2, 'I like this mobile', '2017-08-02'),
(3, 16, 1, 'woooooooooooooooo', '2017-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `reg_id` int(11) NOT NULL,
  `role` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `wish_id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `reg_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `reg_id` (`reg_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `cust_details`
--
ALTER TABLE `cust_details`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`desc_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `product_comp`
--
ALTER TABLE `product_comp`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_electronics`
--
ALTER TABLE `product_electronics`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_home`
--
ALTER TABLE `product_home`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_men`
--
ALTER TABLE `product_men`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_mobile`
--
ALTER TABLE `product_mobile`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `product_women`
--
ALTER TABLE `product_women`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`reply_id`),
  ADD KEY `reg_id` (`reg_id`),
  ADD KEY `comment_id` (`comment_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`),
  ADD UNIQUE KEY `prod_id` (`prod_id`),
  ADD KEY `reg_id` (`reg_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cust_details`
--
ALTER TABLE `cust_details`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `desc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_comp`
--
ALTER TABLE `product_comp`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_electronics`
--
ALTER TABLE `product_electronics`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_home`
--
ALTER TABLE `product_home`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_men`
--
ALTER TABLE `product_men`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_mobile`
--
ALTER TABLE `product_mobile`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_women`
--
ALTER TABLE `product_women`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `reply_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `register` (`reg_id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `cust_details`
--
ALTER TABLE `cust_details`
  ADD CONSTRAINT `cust_details_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `register` (`reg_id`);

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `description_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `register` (`reg_id`),
  ADD CONSTRAINT `reply_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `register` (`reg_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `register` (`reg_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
