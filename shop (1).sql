-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 06:24 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Shivanjali Chaurasia', 'Shivanjali012@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile` int(15) NOT NULL,
  `delivery_method` varchar(50) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`bill_id`, `user_id`, `name`, `email`, `street`, `city`, `zip`, `state`, `mobile`, `delivery_method`, `payment_method`) VALUES
(1, 4, 'Shivanjali Chaurasia', 'shivanjali012@gmail.com', '910/A Chandapur Ka Hata,', 'Prayagaraj', 211003, 'Uttar Pradesh', 1234567890, 'normal', 'cod');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `size` varchar(2) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `ip_address`, `quantity`, `size`, `price`) VALUES
(1, 1, NULL, '::1', 1, 'xl', 1049);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `cnt_fname` varchar(100) NOT NULL,
  `cnt_lname` varchar(100) NOT NULL,
  `cnt_email` varchar(255) NOT NULL,
  `cnt_message` text NOT NULL,
  `cnt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `cnt_fname`, `cnt_lname`, `cnt_email`, `cnt_message`, `cnt_date`) VALUES
(1, 'Shivanjali', 'Chaurasiaa', 'shivanjali012@gmail.com', 'erwgjnw;tjsrgo;srughrao;uh', '0000-00-00'),
(2, 'Shivanjali', 'Chaurasiaa', 'shivanjali012@gmail.com', 'blreiv;baoerugq3orhgq\'3-9g', '0000-00-00'),
(3, 'dkjv;', 'slfgvh;o', 'shivanjali012@gmail.com', ';eoguh;qorugar;', '0000-00-00'),
(4, 'Shivanjali', 'Chaurasiaa', 'shivanjali012@gmail.com', 'vuhfebfvgtrdrgfldgfj,', '0000-00-00'),
(5, 'Shivanjali', 'Chaurasiaa', 'shivanjali012@gmail.com', 'rsedckmlfgbuf,qegfbkv', '0000-00-00'),
(6, 'Shivanjali', 'Chaurasiaa', 'shivanjali012@gmail.com', 'rsuhedmklfgtujikwe;lrgtjimdkruhjrnke3lrgbujrfvc', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_total`, `order_status`, `order_date`) VALUES
(9, 4, 7549, 'confirm', '2019-05-20'),
(13, 4, 1049, 'confirm', '2019-05-20'),
(14, 4, 800, 'confirm', '2019-05-20'),
(17, 4, 1049, 'confirm', '2019-05-20'),
(18, 4, 1049, 'confirm', '2019-05-20'),
(19, 4, 11082, 'confirm', '2019-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_detail_id`, `order_id`, `product_id`, `product_price`, `product_size`, `product_quantity`) VALUES
(2, 9, 1, 1049, 'm', 1),
(3, 9, 6, 6500, 'l', 1),
(4, 13, 1, 1049, 'xl', 1),
(5, 14, 5, 800, 'xl', 1),
(7, 17, 1, 1049, 'xl', 1),
(8, 19, 2, 4582, 'l', 1),
(9, 19, 6, 6500, 'm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `gender` varchar(5) NOT NULL,
  `category` text NOT NULL,
  `subcategory` text NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `size` text NOT NULL,
  `color` varchar(7) NOT NULL,
  `pimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `gender`, `category`, `subcategory`, `price`, `discount`, `size`, `color`, `pimage`) VALUES
(1, 'Navy Blue indo-Western', 'men', 'ethnic', 'Indo-Western', 1049, 0, 'l,m,xl,s', '#000066', 'men/ethnic/m14.jpg'),
(2, 'Black-Maroon Sherwani', 'men', 'ethnic', 'Sherwani', 4582, 0, 'l,m,xl,s', '#000000', 'men/ethnic/m8.jpg'),
(4, 'Beige Overcoat', 'women', 'winter', 'Overcoat', 4500, 0, 'l,m,xl,s', '#665c40', 'women/winter/w6.jpg'),
(5, 'Short Jacket', 'women', 'western', 'Jacket', 800, 0, 'l,m,xl,s', '#870026', 'women/western/w3.jpg'),
(6, 'Golden Sherwani', 'men', 'ethnic', 'Sherwani', 6500, 0, 'l,m,xl,s,xs', '#876849', 'men/ethnic/sherwani2.jpg'),
(7, 'Golden Sherwani', 'men', 'ethnic', 'Sherwani', 7850, 0, 'l,m,xl,xs', '#876849', 'men/ethnic/sherwani3.jpg'),
(8, 'Ethnic Blazer', 'men', 'ethnic', 'Indo-Western', 4500, 0, 'l,m,xl,xs', '#876849', 'men/ethnic/m12.jpg'),
(9, 'Golden Indo-Western', 'men', 'ethnic', 'Indo-Western', 4500, 0, 'l,m,xl,xs', '#876849', 'men/ethnic/m15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `mobile`, `password`, `gender`) VALUES
(4, 'shivanjali012@gmail.com', NULL, '9c381e09b53b86969e0de89138aed8a7191b400b', 'f'),
(8, 'shivansh@gmail.com', NULL, '9355f6ab69200a681b4f3d3c6c86288ed775e157', 'm'),
(9, 'Kabir012@gmail.com', NULL, '9c381e09b53b86969e0de89138aed8a7191b400b', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
