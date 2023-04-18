-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 11, 2023 at 05:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'no_image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`, `img`) VALUES
(1, 'Gamburger', 'gamburger', 0, '23000 so\'m', 'Online buyurtma bering!', '6b12b06a18a57434c92de69638de3226.png'),
(2, 'Lavash', 'lavash', 0, '23000  so\'m', 'Online buyurtma bering!', '2b7e23b3ebb402364d44a18ac6130f19.png'),
(3, 'Klap Sandvich', 'klap-sandvich', 0, '21000  so\'m', 'Online buyurtma bering!', '7069fffea5f62d4dbd7aadc75499a450.png'),
(4, 'Donar', 'donar', 0, '26000  so\'m', 'Online buyurtma bering!', 'efb0d717be3951f797cedb088867cdc8.png'),
(5, 'Kartoshka', 'kartoshka', 0, '12000  so\'m', 'Online buyurtma bering!', '2fe9bf9fb8c3fe4471e5ae7984919db0.png'),
(6, 'Sandvich', 'sandvich', 0, '20000 so\'m', 'Online buyurtma bering!', 'dd384d74f544886ad6439a64ed58bdb8.png');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `symbol_left` varchar(10) NOT NULL,
  `symbol_right` varchar(10) NOT NULL,
  `value` double NOT NULL,
  `base` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `value`, `base`) VALUES
(9, 'So\'m', 'so\'m', '', 'so\'m', 1, '0'),
(10, 'dollar', 'USD', '$', '', 0.0000888, '0'),
(11, 'Rubl', 'RUB', '₽', '', 0.00555, '0');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'no_image.jpg',
  `status` enum('1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `title`, `alias`, `description`, `img`, `status`) VALUES
(4, 'Buyurtma xizmatidan foydalaning', 'buyurtma-xizmatidan-foydalaning', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo iaculis felis non auctor. Praesent rutrum ligula quam, eget euismod nisi convallis eu. Nullam ex magna, ornare eleifend lorem eu, tempor suscipit nulla. Aenean a urna turpis. Aliquam erat volutpat. Donec tincidunt urna a sem varius, vitae pulvinar sem semper. Duis eu auctor felis, nec egestas orci. Nam sagittis eget augue vitae facilisis. Nulla ac lectus id risus hendrerit consectetur id quis libero!</p>\r\n', 'delivery-1.jpg', '1'),
(5, 'Bepul yetkazib berish ', 'bepul-yetkazib-berish', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo iaculis felis non auctor. Praesent rutrum ligula quam, eget euismod nisi convallis eu. Nullam ex magna, ornare eleifend lorem eu, tempor suscipit nulla. Aenean a urna turpis. Aliquam erat volutpat. Donec tincidunt urna a sem varius, vitae pulvinar sem semper. Duis eu auctor felis, nec egestas orci. Nam sagittis eget augue vitae facilisis. Nulla ac lectus id risus hendrerit consectetur id quis libero.</p>\r\n', 'delivery-2.jpg', '1'),
(6, 'Tezkor yetkazib berish ', 'tezkor-yetkazib-berish', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus commodo iaculis felis non auctor. Praesent rutrum ligula quam, eget euismod nisi convallis eu. Nullam ex magna, ornare eleifend lorem eu, tempor suscipit nulla. Aenean a urna turpis. Aliquam erat volutpat. Donec tincidunt urna a sem varius, vitae pulvinar sem semper.&nbsp;</p>\r\n', 'delivery-3.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(101, 6, 'ea433daa6e956673d2e2c990677a5fad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

CREATE TABLE `modification` (
  `id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `modification`
--

INSERT INTO `modification` (`id`, `product_id`, `title`, `price`) VALUES
(1, 1, 'Kumush ', 300),
(2, 1, 'Qora', 300),
(3, 1, 'Oq', 305),
(4, 1, 'Qizil', 310),
(5, 2, 'Kulrang', 80),
(6, 2, 'Qizil', 70);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `currency`) VALUES
(133, 137, '0', '2023-01-26 03:41:59', '2023-01-26 04:09:52', 'so\'m');

-- --------------------------------------------------------

--
-- Table structure for table `orderuser`
--

CREATE TABLE `orderuser` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orderuser`
--

INSERT INTO `orderuser` (`id`, `name`, `phone`) VALUES
(137, 'Hamidullo', '912500760');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int UNSIGNED NOT NULL,
  `order_id` int UNSIGNED NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `qty` int NOT NULL DEFAULT '1',
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(16, 133, 11, 1, 'Donar', 26000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int UNSIGNED NOT NULL,
  `category_id` tinyint UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `status` enum('1') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '1',
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` enum('1') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `alias`, `price`, `status`, `img`, `hit`) VALUES
(1, 1, 'Gamburger', 'mekro-to-lqinli-pech', 22000, '1', 'hamburger.png', '1'),
(2, 1, 'Gamburger (o\'rta)', 'gamburger-o-rta', 22000, '1', 'hamburger.png', '1'),
(3, 6, 'Sandvich', 'sandvich', 21000, '1', 'sendvich.png', '1'),
(6, 4, 'Donar (katta)', 'donar-katta', 26000, '1', 'donar.png', '1'),
(7, 2, 'Lavash (kichik)', 'lavash-kichik', 21000, '1', 'lavash.png', '1'),
(8, 1, 'Gamburger (kichik)', 'gamburger-kichik', 19000, '1', 'hamburger.png', '1'),
(9, 2, 'Lavash (katta)', 'lavash-katta', 23000, '1', 'lavash.png', '1'),
(10, 6, 'Sandvich (katta)', 'sandvich-katta', 24000, '1', 'sendvich.png', '1'),
(11, 4, 'Donar', 'donar', 26000, '1', 'donar.png', '1'),
(12, 5, 'Kartoshka', 'kartoshka', 12000, '1', 'kartoshka.png', '1'),
(678, 5, 'Kartoshka', 'kartoshka-678', 13000, '1', '4b161538ef2b2b2f4904bf0d510d5cd8.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `phone`, `name`, `address`, `role`) VALUES
(1, 'founder', '$2y$10$0Xe3YFBPYTpuwDydq.06qOnFybtuWRVVEOEE4bDiMtqZxLpzX06Ha', 'hamidullo0760@gmail.com', '912500760', 'Hamidullo Rahmonberdiyev', 'Xatirchi tuman', 'admin'),
(3, 'admin', '$2y$10$WaNUjJSrFHOrHJeDZ2LWeenD5d9O7swX/UOfeJvuYBI9rqmvFEUDq', 'husniddin29@gmail.com', '990945995', 'Husniddin Rahmonberdiyev', 'Xatirchi tuman', 'admin'),
(5, 'adminstrator', '$2y$10$Xb6gUsHJA0k2tHxT203ZQ..Y6lLakMDK.62zfBoIUxeobsijla0PO', 'example@gmail.com', '992566478', 'Salohiddin', 'Xatirchi tuman', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderuser`
--
ALTER TABLE `orderuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `hit` (`hit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `orderuser`
--
ALTER TABLE `orderuser`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=680;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
