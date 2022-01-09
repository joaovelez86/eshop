-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 12:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`, `disabled`, `views`) VALUES
(1, 'Sagres', 0, 0),
(2, 'Adidas', 0, 0),
(3, 'Sony Music Entertainment Portu', 0, 0),
(4, 'Toyota', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `carrousel`
--

CREATE TABLE `carrousel` (
  `id` int(11) NOT NULL,
  `header1_text` varchar(20) NOT NULL,
  `header2_text` varchar(30) DEFAULT NULL,
  `text` varchar(200) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carrousel`
--

INSERT INTO `carrousel` (`id`, `header1_text`, `header2_text`, `text`, `link`, `image`, `image2`, `disabled`) VALUES
(3, 'wisky 15 anos', 'Este Wisky é do melhor.', 'Melhor não há, só se for Medronho.', 'http://localhost/public/product_details/johnnie-walker-15-anos', 'uploads\\BCJ5wAzK2jjGpKccQOtpl3EV8AFu0rQUOGgqydMwejUIubY4sq0NNvDpX4G0.jpg', '', 0),
(4, 'Olha este classico!', 'Vespa 50cc de 1972', 'A melhor de todos os tempos!', 'http://localhost/public/product_details/vespa-50cc', 'uploads\\CcYYahs25qqTlICbQlOlgkJPjnp2Rzf6pTJCE2SbBVnCr85ccNEjVylJGgVz.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `parent` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `disabled`, `parent`, `views`) VALUES
(1, 'comida', 0, 0, 19),
(2, 'bebidas', 0, 0, 24),
(4, 'Musica', 0, 0, 12),
(5, 'Roupas', 0, 0, 6),
(10, 'Carros', 0, 0, 9),
(12, 'motas', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(2, 'Manel', 'ze@gmail.com', 'A ver se isto está ok', 'está?!', '2022-01-08 18:05:21'),
(3, 'Joao', 'joaovelez86@gmail.com', 'A ver se isto está ok', 'ola', '2022-01-09 14:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `disabled`) VALUES
(1, 'Portugal', 0),
(2, 'Espanha', 0),
(3, 'Alemanha', 0),
(4, 'Italia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_url` varchar(60) NOT NULL,
  `description` varchar(20) NOT NULL,
  `delivery_address` varchar(1024) DEFAULT NULL,
  `total` double NOT NULL DEFAULT 0,
  `country` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `tax` double DEFAULT 0,
  `shipping` double DEFAULT 0,
  `date` datetime NOT NULL,
  `sessionid` varchar(30) NOT NULL,
  `home_phone` varchar(15) NOT NULL,
  `mobile_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_url`, `description`, `delivery_address`, `total`, `country`, `state`, `zip`, `tax`, `shipping`, `date`, `sessionid`, `home_phone`, `mobile_phone`) VALUES
(1, 'EknvqzHVnp8k2pK2yINQk1OIxbpcP', '1', 'rua aqui e ali ', 998.99, 'Portugal', NULL, '1143', 0, 0, '2022-01-08 20:54:33', '4ulloq9i7kio8317cfm8hr1c59', '', '969597640'),
(2, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'order 2', 'rua aqui e ali ', 10000000, 'Portugal', NULL, '1143', 0, 0, '2022-01-08 22:14:31', '4ulloq9i7kio8317cfm8hr1c59', '', '89898989'),
(3, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'order 3', 'rua aqui e ali ', 60, 'Portugal', NULL, '1143', 0, 0, '2022-01-09 13:56:47', 'jsbo7tj5a3bbgn9bkg4aq6bks8', '', '969597640'),
(4, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'order 4', 'rua aqui e ali ', 1997.98, 'Portugal', NULL, '1143', 0, 0, '2022-01-09 20:51:35', 'tg18se0jff26m0o686mfm493eq', '', '89898989');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) NOT NULL,
  `orderid` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `productid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `orderid`, `qty`, `description`, `amount`, `total`, `productid`) VALUES
(2, 1, 2, 'Weet Bix 1.4 Kg', 20.99, 41.98, 8),
(26, 2, 1, 'Marco Paulo', 10000000, 10000000, 26),
(27, 3, 1, 'Johnnie Walker 15 Anos', 60, 60, 25),
(28, 4, 2, 'Vespa 50cc', 998.99, 1997.98, 21);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `trans_id` varchar(255) NOT NULL,
  `raw` mediumtext NOT NULL,
  `event_type` varchar(100) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payer_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `user_url` varchar(60) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image2` varchar(500) DEFAULT NULL,
  `image3` varchar(500) DEFAULT NULL,
  `image4` varchar(500) DEFAULT NULL,
  `date` datetime NOT NULL,
  `permalink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_url`, `description`, `category`, `brand`, `price`, `quantity`, `image`, `image2`, `image3`, `image4`, `date`, `permalink`) VALUES
(21, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'Vespa 50cc', 12, 0, 998.99, 1, 'uploads/XcamLWj9IIeTwcrm0tCrJM4zO6ZZIzsl9JlGbPaIZNWKrfjH7rftVJas1mkx.jpg', 'uploads/I2GNvPwiLSBnML6ouFP4SgYhJfvj30CE9Zns0FctK1qH4fwljErfkHAKc0NP.jpg', 'uploads/L5MEYV2GTIMleM45Gwmzh1HmG9oNy88apMmviHwWvkC4GMndk5sCLnrP74ft.jpg', 'uploads/yFeXYLlHFyvqjb5mL1Gd3FhBdjl5mcfewtUpmWBdPuijSOS8pabR7CgLtniq.jpg', '2022-01-08 20:07:41', 'vespa-50cc'),
(22, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'Bmw Xpto', 10, 0, 80000.99, 6, 'uploads/Spn4b3bRGu5qHn9uV6rmRXPTamg9EiXC344g061Gy3ao7xTzAgqdAqretvuG.jpg', 'uploads/JpW6KYjc1hjsw9FWfqMD5kHEhTfoWjUazIlausGGpOwIPH4ZuCBRHKB4VPyO.jpg', 'uploads/moQK9h9tlsvZA04sOwyEv1Jepsw2sWVEBdV5LAWh1bkwBFP6pcLi91ahO8XU.jpg', 'uploads/L8y1CjDhj5M3UUyUTy2DCzBaJv9dqp52sI8tjLQPbE6tbeiixJUOSKYzX0He.jpg', '2022-01-08 20:12:31', 'bmw-xpto'),
(23, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'Pastel De Nata', 1, 0, 1.5, 6, 'uploads/TrZpLDHJSZlQHwr1tBWazbx705imdX0l0kqPBf1MZCABp6bVwvUQbQfdJ3Kv.jpg', '', '', '', '2022-01-08 20:14:48', 'pastel-de-nata'),
(24, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'Levis 501', 5, 0, 75, 7, 'uploads/Yh9LoVRujl9Ju8yyN64g1SDtlUBnbTosoBbMBjsZeLWYUryr8yovDzaeyTBr.jpg', '', '', '', '2022-01-08 20:20:33', 'levis-501'),
(25, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'Johnnie Walker 15 Anos', 2, 0, 60, 5, 'uploads/BCJ5wAzK2jjGpKccQOtpl3EV8AFu0rQUOGgqydMwejUIubY4sq0NNvDpX4G0.jpg', '', '', '', '2022-01-08 20:30:33', 'johnnie-walker-15-anos'),
(26, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'Marco Paulo', 4, 0, 10000000, 1, 'uploads/Gv2ffJMoV5g6JHlLizhLoBOpViEzCYHtqiIPy815sgInCciKNP9mp2ZGlJUO.jpg', 'uploads/doKBdwhc1dHyDShkbQjmr1VVjP1RTlrTeFsKLgLjDkhhQtVD4ZjQUcAkFvyM.jpg', 'uploads/p0HQyhlxMTWJHWmbgwlfvYPFZ0AOq3wlsRs2y7fAXh7HXmFd3lsAststrl6a.jpg', '', '2022-01-08 20:33:28', 'marco-paulo');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `setting` varchar(30) DEFAULT NULL,
  `value` varchar(2048) DEFAULT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `value`, `type`) VALUES
(1, 'telemovel', '00351 969 597 640', ''),
(2, 'email', 'joaovelez86@gmail.com', ''),
(5, 'linkedin_link', 'https://www.linkedin.com/in/jo%C3%A3o-velez-52276b213/', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `header1_text` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `header2_text` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `text` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `link` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `image2` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `state` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `parent`, `state`, `disabled`) VALUES
(1, 1, 'Lisboa', 0),
(2, 1, 'Porto', 0),
(3, 2, 'Benfica', 0),
(4, 2, 'Maia', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `url_address` varchar(60) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(252) NOT NULL,
  `date` datetime NOT NULL,
  `rank` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `url_address`, `name`, `email`, `password`, `date`, `rank`) VALUES
(13, 'Yk3tCFV0RRdH4K3w5uoExX548nJUUt4Yq8GE6h', 'João Velez', 'joaovelez@mail.com', '$2y$10$lw9fHNMWObk/suYNa6Kjx.m8GL5xlL4zgeCpy.OeNBnq/Bpe0iaB6', '2022-01-08 17:00:02', 'admin'),
(14, 'EknvqzHVnp8k2pK2yINQk1OIxbpcP', 'John Doe aka the unknown', 'johndoe@mail.com', '$2y$10$9dgN8OCAloCRtDgPd9AUD.y7DC1At/5l6/eKYNEi8Sj1B/cCnvTmS', '2022-01-08 17:01:21', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`brand`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `views` (`views`),
  ADD KEY `brand` (`brand`);

--
-- Indexes for table `carrousel`
--
ALTER TABLE `carrousel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `disabled` (`disabled`),
  ADD KEY `parent` (`parent`),
  ADD KEY `views` (`views`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `subject` (`subject`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`user_url`),
  ADD KEY `date` (`date`),
  ADD KEY `sessionid` (`sessionid`),
  ADD KEY `description` (`description`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `description` (`description`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `status` (`status`),
  ADD KEY `amount` (`amount`),
  ADD KEY `event_type` (`event_type`),
  ADD KEY `trans_id` (`trans_id`),
  ADD KEY `date` (`date`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `email` (`email`),
  ADD KEY `last_name` (`last_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slag` (`permalink`),
  ADD KEY `date` (`date`),
  ADD KEY `quantity` (`quantity`),
  ADD KEY `price` (`price`),
  ADD KEY `category` (`category`),
  ADD KEY `description` (`description`),
  ADD KEY `user_url` (`user_url`),
  ADD KEY `brand` (`brand`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting` (`setting`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disabled` (`disabled`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_address` (`url_address`),
  ADD KEY `email` (`email`),
  ADD KEY `name` (`name`),
  ADD KEY `rank` (`rank`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carrousel`
--
ALTER TABLE `carrousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
