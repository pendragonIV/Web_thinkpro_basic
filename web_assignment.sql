-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 11:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_img`) VALUES
(1, 'SmartWatch', 'smart_watch_banner.jpg'),
(2, 'Tablet', 'tablet_banner.jpg'),
(3, 'Accessory', 'apple-accessory.jpg'),
(4, 'Phone', 'phone_banner.jpg'),
(5, 'Laptop', 'macbook_banner.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `detailed_invoice`
--

CREATE TABLE `detailed_invoice` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `receipt_id` int(10) UNSIGNED NOT NULL,
  `detailed_invoice_price` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_price` int(11) UNSIGNED NOT NULL,
  `product_insurance` varchar(255) NOT NULL,
  `product_promotion` int(3) UNSIGNED NOT NULL,
  `product_status` int(10) UNSIGNED NOT NULL,
  `product_detail` text NOT NULL,
  `product_featured` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `product_img`, `product_price`, `product_insurance`, `product_promotion`, `product_status`, `product_detail`, `product_featured`) VALUES
(5, 2, 'iPad Mini 6 (WiFi 64GB) Gray', 'ipad-mini-6-thinkpro-01 (1).png', 12900000, 'genuine 12 months Apple Vietnam', 19, 1, 'No Detail', 0),
(6, 5, 'MacBook Air 2022 (Apple M2) MidNight', 'macbook-air-2022-m2-thinkpro-1.png', 25990000, 'genuine 12 months Apple Vietnam', 4, 0, 'No Detail', 0),
(7, 2, 'iPad Air 4 10.9\" (Wifi + Cellular 64GB) Green', 'ipad-air-4-thinkpro-01.png', 15950000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 0),
(8, 2, 'iPad Pro M1 11\" (Wifi 256GB)', 'apple_ipad_pro_2021_silver_11_1-_tejar_1.jpeg', 22990000, 'genuine 12 months Apple Vietnam', 12, 0, 'No Detail', 1),
(9, 2, 'iPad Pro M2 11 inch - 128GB Wi-Fi Space Gray', 'iPad-Pro-M2-WF-ThinkPro-01.png', 21990000, 'genuine 12 months Apple Vietnam', 8, 1, '', 1),
(11, 1, 'Apple Watch Ultra (GPS + Cellular)', 'Apple-Watch-Ultra-White-ThinkPro-01.png', 20990000, 'genuine 12 months Apple Vietnam', 13, 1, 'No comment', 1),
(12, 3, 'Apple Pencil 2 (MU8F2ZP/A)', 'apple-pencil-2-thinkpro-01.png', 3990000, 'genuine 12 months Apple Vietnam', 18, 1, 'No comment', 0),
(13, 1, 'Apple Watch Series 7 (GPS 41mm)', 'apple-watch-series-7-thinkpro-01.png', 8990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No detail', 0),
(14, 4, 'iPhone 14 Pro Max - 128GB Space Black', 'ip_14_prm_space_black.png', 36990000, 'genuine 12 months Apple Vietnam', 13, 1, 'No Detail', 1),
(15, 4, 'iPhone 14 Pro Max - 128GB Deep Purple', 'ip_14_prm_deep_purple.png', 36990000, 'genuine 12 months Apple Vietnam', 6, 0, 'No Detail', 1),
(16, 4, 'iPhone 14 Pro Max - 128GB Silver', 'ip_14_prm_silver.png', 36990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(17, 2, 'iPad Gen10 10.9\" (WiFi 64GB) SkyBlue', 'ipad-gen-10.png', 12990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(18, 2, 'iPad Gen9 10.2\" (WiFi 64GB) Silver', 'ipad-gen9.jpg', 8990000, 'genuine 12 months Apple Vietnam', 14, 1, 'No Detail', 0),
(19, 3, 'Magic Keyboard iPad Pro 12.9\" M1 Black', 'mg_kboard.jpeg', 9990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(20, 2, 'iPad Pro M1 12.9\" (Wifi + Cellular 512GB) Silver', 'iPad-Pro-M1_12.9.png', 3990000, 'genuine 12 months Apple Vietnam', 13, 1, 'No Detail', 0),
(22, 2, 'iPad Pro M2 11 inch - 128GB Wi-Fi Silver', 'iPad-Pro-M2-WF-ThinkPro-05.png', 23990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(23, 2, 'iPad Air (Gen 5) WIFI 64GB Silver', 'iPad-Air-5G-Cell-2022-starl9-2.jpg', 15990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(24, 2, 'iPad Mini 6 (WiFi 64GB) StarLight', 'iPad_mini_Cellular_Starlight.jpeg', 15990000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 0),
(25, 2, 'iPad Mini 6 (WiFi 64GB) Purple', 'iPad_mini_Cellular_Purple_PDP.jpeg', 15990000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 1),
(26, 2, 'iPad Mini 6 (WiFi 64GB) Pink', 'iPad_mini_Cellular_Pink.jpeg', 15990000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 0),
(27, 2, 'iPad Gen10 10.9\" (WiFi 64GB) Silver', 'ipad-gen-10-sv.jpg', 12990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(28, 2, 'iPad Gen10 10.9\" (WiFi 64GB) Pink', 'ipad-gen-10_pink.png', 12990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(29, 2, 'iPad Gen10 10.9\" (WiFi 64GB) Yellow', 'ipad-gen-10-yl.png', 12990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(30, 2, 'iPad Gen9 10.2\' (WiFi 64GB) SpaceGray', 'ipad-gen9-spg.jpg', 8990000, 'genuine 12 months Apple Vietnam', 14, 1, 'No Detail', 0),
(31, 2, 'iPad Pro M1 12.9\" (Wifi + Cellular 512GB) Gray', 'iPad-Pro-M1-gr.png', 3990000, 'genuine 12 months Apple Vietnam', 13, 1, 'No Detail', 0),
(32, 2, 'iPad Air 4 10.9\" (Wifi + Cellular 64GB) Blue', 'ipad-air-4-blue.png', 19990000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 0),
(33, 2, 'iPad Air 4 10.9', 'ipad-air-4-silver.png', 19990000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 0),
(34, 3, 'Magic Keyboard iPad Pro 12.9\" M1 White', 'Magic-Keyboard-iPad-Pro-12.9-M1-2021-ThinkPro-01.png', 9990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(35, 3, 'Apple Pencil 1', 'apple-pencil-1-thinkpro-01.png', 2990000, 'genuine 12 months Apple Vietnam', 23, 1, 'No Detail', 0),
(36, 4, 'iPhone 14 Pro - 128GB Gold', 'iphone-14-pro-128gb_gold.png', 31990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(37, 4, 'iPhone 14 Pro - 128GB Silver', 'iphone-14-pro-128gb_silver.png', 31990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(38, 4, 'iPhone 14 Pro - 128GB Space Black', 'iphone-14-pro-128gb_spbl.png', 31990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 0),
(39, 4, 'iPhone 14 Pro - 128GB Deep Purple', 'iphone-14-pro-128gb_dpp.png', 31990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail', 1),
(40, 4, 'iPhone 14 128GB - Midnight', 'iphone-14-128gb_mn.png', 24990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(41, 4, 'iPhone 14 128GB - Starlight', '_iphone-14-128gb_sl.png', 24990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(42, 4, 'iPhone 14 128GB - Blue', '0009200_iphone-14-128gb_bl.png', 24990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 1),
(43, 4, 'iPhone 14 128GB - Purple', '0009209_iphone-14-128gb_pp.png', 24990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(44, 4, 'iPhone 14 128GB - (PRODUCT) RED', '0009218_iphone-14-128gb_550.png', 24990000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 0),
(45, 4, 'iPhone 14 Plus 128GB - Starlight', 'iphone-14pl-128gb_mn.png', 27990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(46, 4, 'iPhone 14 128GB - Blue', 'iphone-14-plus-128gb_Bl.png', 27990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0),
(47, 4, 'iPhone 13 - 128GB Alpine Green', '0000567_alpine-green_550.png', 24990000, 'genuine 12 months Apple Vietnam', 22, 1, 'No Detail', 1),
(48, 4, 'iPhone 13 - 128GB Midnight', '0000607_midnight_550.png', 24990000, 'genuine 12 months Apple Vietnam', 22, 1, 'No Detail', 0),
(49, 4, 'iPhone 13 - 128GB Pink', '0000647_pink_550.png', 24990000, 'genuine 12 months Apple Vietnam', 22, 1, 'No Detail', 0),
(50, 4, 'iPhone 13 - 128GB Blue', '0000626_blue_550.png', 24990000, 'genuine 12 months Apple Vietnam', 22, 1, 'No Detail', 0),
(51, 4, 'iPhone 13 - 128GB Starlight', '0000617_starlight_550.png', 24990000, 'genuine 12 months Apple Vietnam', 22, 1, 'No Detail', 0),
(52, 4, 'iPhone 13 - 128GB (PRODUCT) RED', '0000639_product-red_550.png', 24990000, 'genuine 12 months Apple Vietnam', 25, 1, 'No Detail', 0),
(53, 4, 'iPhone 12 128GB - Blue', '0006868_iphone-12-128gb_550.png', 24990000, 'genuine 12 months Apple Vietnam', 30, 1, 'No Detail', 0),
(54, 4, 'iPhone 12 128GB - Black', '0006859_iphone-12-128gb_550.png', 24990000, 'genuine 12 months Apple Vietnam', 30, 1, 'No Detail', 0),
(55, 5, 'MacBook Air 2022 (Apple M2) Space Gray', 'macbook-air-2022-m2-04-thinkpro-1.png', 26990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(56, 5, 'MacBook Air 2022 (Apple M2) StarLight', 'macbook-air-starlight-gallery1-20220606.jpeg', 26990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(57, 5, 'MacBook Air 2022 (Apple M2) Silver', 'macbook-air-silver-gallery1-20220606.jpeg', 26990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(58, 5, 'Apple Macbook Pro 16 (Apple M1)', 'macbook-pro-16-inch_silver.png', 64990000, 'genuine 12 months Apple Vietnam', 11, 1, 'No Detail', 1),
(59, 5, 'Apple Macbook Pro 14 (Apple M1)', 'macbook-pro-14-inch-large-2x.png', 44990000, 'genuine 12 months Apple Vietnam', 7, 1, 'No Detail', 1),
(60, 5, 'Apple Macbook Pro 13 (Apple M1 - Late 2020)', 'Macbook-Pro-13-ThinkPro.jpg', 33990000, 'genuine 12 months Apple Vietnam', 10, 1, 'No Detail\r\n', 0),
(61, 5, 'Apple Macbook Air(Apple M1-Late 2020) SpaceGray', 'apple-macbook-air-01-thinkpro-1.png', 22990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(62, 5, 'Apple Macbook Air(Apple M1-Late 2020) Gold', 'Macbook-Air-M1-ThinkPro-1.jpg', 22990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(63, 5, 'Apple Macbook Air(Apple M1-Late 2020) Silver', 'apple-macbook-air-2020-03-thinkpro-1.png', 22990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(65, 5, 'MacBook Pro 13 (Apple M2) SpaceGray', 'mbp-spacegray-gallery1-202206.jpeg', 34990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 1),
(66, 5, 'MacBook Pro 14 M1 Max 24 - 512GB 16GB Space Gray', '0000606_macbook-pro-14-m1-max-24-core-gpu_550.png', 85500000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 1),
(67, 5, 'MacBook Pro 14 M1 Max 24 - 512GB 16GB Silver', '0000606_macbook-pro-14-m1-max-24-core-gpu_550.png', 85500000, 'genuine 12 months Apple Vietnam', 20, 1, 'No Detail', 1),
(68, 5, 'MacBook Pro 16 M1 Max - 32GB Space Gray', '0001343_space-gray_550.webp', 87990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 0),
(69, 5, 'MacBook Pro 16 M1 Max - 32GB Silver', '0001354_silver_550.webp', 87990000, 'genuine 12 months Apple Vietnam', 5, 1, 'No Detail', 1),
(70, 5, 'MacBook Pro 16 M1 Pro - Space Gray', '0008043_macbook-pro-16-m1-pro-16-core16gb1tb_550.png', 73990000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 1),
(71, 5, 'MacBook Pro 14 M1 Pro - Space Gray', '0007997_macbook-pro-14-m1-pro-14-core16gb512gb_550.webp', 55500000, 'genuine 12 months Apple Vietnam', 15, 1, 'No Detail', 0);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(10) UNSIGNED NOT NULL,
  `receipt_date` date NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `receipt_total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_passw` varchar(16) NOT NULL,
  `user_role` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `detailed_invoice`
--
ALTER TABLE `detailed_invoice`
  ADD PRIMARY KEY (`product_id`,`receipt_id`),
  ADD KEY `receipt_id` (`receipt_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailed_invoice`
--
ALTER TABLE `detailed_invoice`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `receipt_id` FOREIGN KEY (`receipt_id`) REFERENCES `receipt` (`receipt_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
