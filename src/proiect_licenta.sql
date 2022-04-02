-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 10:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proiect_licenta`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_products_status` ()  BEGIN
DECLARE active int;
DECLARE inactive int;
select count(an1.id) from anunturi AS an1 where an1.status = 1 INTO active;
select count(an2.id) from anunturi AS an2 where an2.status = 0 INTO inactive;
SELECT active,inactive;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `wishlist_toggle` (IN `product_id_var` INT UNSIGNED, IN `user_id_var` INT UNSIGNED)  IF EXISTS(SELECT id FROM wishlist WHERE product_id=product_id_var and user_id=user_id_var)
THEN BEGIN
	DELETE FROM wishlist WHERE product_id=product_id_var and user_id=user_id_var;
    END;
ELSE
BEGIN
INSERT INTO wishlist(product_id,user_id) VALUES (product_id_var,user_id_var);
END;
END IF$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `anunturi`
--

CREATE TABLE `anunturi` (
  `id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `titlu` varchar(50) NOT NULL,
  `telefon` int(11) NOT NULL,
  `descriere` text NOT NULL,
  `adresa` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `pret` decimal(7,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = inactiv\r\n1 = activ',
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `visits` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`id`, `image_id`, `titlu`, `telefon`, `descriere`, `adresa`, `user_id`, `created`, `modified`, `pret`, `status`, `category_id`, `sub_category_id`, `visits`) VALUES
(32, 13, 'daa', 1, 'dsad', 'd21', 18, '2021-12-12 15:19:49', '2021-12-12 15:19:49', '3.00', 1, 1, 1, 17),
(53, 65, 'vand legume', 746150725, '', '12', 105, '2022-03-26 15:12:23', '2022-03-26 15:12:23', '12.00', 1, 1, 1, 0),
(54, 66, 'vand legume', 1234567891, '', '123', 105, '2022-03-26 15:13:09', '2022-03-26 15:13:09', '123.00', 1, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `user_id`, `mesaj`) VALUES
(5, 102, 'da'),
(6, 102, 'da'),
(7, 102, 'da'),
(8, 102, 'das'),
(9, 102, 'da'),
(10, 102, 'da'),
(11, 102, 'da'),
(12, 102, 'ceva'),
(13, 102, 'sda'),
(14, 102, 'sda');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Fructe'),
(2, 'Legume'),
(3, 'Lactate');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(13, '1.jpg', '2021-12-12 15:19:49', '1'),
(14, 'legume.jpg', '2021-12-12 19:07:42', '1'),
(15, '2.jpg', '2021-12-12 19:11:17', '1'),
(16, 'langrau.jpg', '2021-12-12 19:12:23', '1'),
(17, 'Hnet.com-image.jpg', '2021-12-12 20:34:07', '1'),
(18, 'maxresdefault.jpg', '2022-02-01 18:44:30', '1'),
(19, 'maxresdefault.jpg', '2022-02-01 18:46:14', '1'),
(20, 'maxresdefault.jpg', '2022-02-01 18:49:08', '1'),
(21, 'maxresdefault.jpg', '2022-02-01 18:50:00', '1'),
(22, 'maxresdefault.jpg', '2022-02-01 18:52:09', '1'),
(23, 'maxresdefault.jpg', '2022-02-01 18:53:11', '1'),
(24, 'poza.jpg', '2022-02-01 18:55:03', '1'),
(25, 'poza.jpg', '2022-02-01 18:56:25', '1'),
(26, 'poza.jpg', '2022-02-01 19:02:17', '1'),
(27, 'poza.jpg', '2022-02-01 19:02:19', '1'),
(28, 'poza.jpg', '2022-02-01 19:02:23', '1'),
(29, 'poza.jpg', '2022-02-01 19:04:19', '1'),
(30, 'poza.jpg', '2022-02-01 19:04:22', '1'),
(31, 'poza.jpg', '2022-02-01 19:04:23', '1'),
(32, 'poza.jpg', '2022-02-01 19:04:32', '1'),
(33, 'poza.jpg', '2022-02-01 19:05:46', '1'),
(34, 'poza.jpg', '2022-02-01 19:05:49', '1'),
(35, 'poza.jpg', '2022-02-01 19:05:50', '1'),
(36, 'poza.jpg', '2022-02-01 19:05:52', '1'),
(37, 'poza.jpg', '2022-02-01 19:06:55', '1'),
(38, 'poza.jpg', '2022-02-01 19:17:01', '1'),
(39, 'poza.jpg', '2022-02-01 19:17:05', '1'),
(40, 'poza.jpg', '2022-02-01 19:21:48', '1'),
(41, 'poza.jpg', '2022-02-01 19:32:59', '1'),
(42, 'poza.jpg', '2022-02-01 19:33:46', '1'),
(43, 'maxresdefault.jpg', '2022-02-04 12:21:52', '1'),
(44, 'poza.jpg', '2022-02-04 12:23:36', '1'),
(45, 'maxresdefault.jpg', '2022-02-04 13:04:46', '1'),
(46, 'poza.jpg', '2022-02-04 13:06:54', '1'),
(47, 'maxresdefault.jpg', '2022-02-04 15:34:08', '1'),
(48, 'xbox-controller-minimal-abstract-wallpaper-tapet-1920x1080_48.jpg', '2022-02-04 15:55:16', '1'),
(49, 'bg4.jpg', '2022-02-15 14:15:17', '1'),
(50, 'bg4.jpg', '2022-02-15 14:16:22', '1'),
(51, 'bg4.jpg', '2022-02-17 10:53:19', '1'),
(52, 'bg4.jpg', '2022-02-17 10:56:16', '1'),
(53, 'bg3.jpg', '2022-02-17 10:58:49', '1'),
(54, 'bg2.jpg', '2022-02-17 18:23:21', '1'),
(55, 'sushobhan-badhai-LrPKL7jOldI-unsplash.jpg', '2022-02-21 18:01:20', '1'),
(56, 'sushobhan-badhai-LrPKL7jOldI-unsplash.jpg', '2022-02-21 18:03:23', '1'),
(57, 'about-head1.jpg', '2022-02-22 15:28:15', '1'),
(58, '2.jpg', '2022-02-23 13:18:08', '1'),
(59, '2.jpg', '2022-02-23 13:22:57', '1'),
(60, '4.jpg', '2022-02-23 14:02:52', '1'),
(61, '2.jpg', '2022-02-23 14:12:48', '1'),
(62, 'about-blog-2.jpg', '2022-02-23 14:14:52', '1'),
(63, 'about-head1.jpg', '2022-03-20 16:32:01', '1'),
(64, 'Hnet.com-image.jpg', '2022-03-25 09:44:03', '1'),
(65, 'magenta_explorer-wallpaper-1920x1080.jpg', '2022-03-26 15:12:23', '1'),
(66, 'magenta_explorer-wallpaper-1920x1080.jpg', '2022-03-26 15:13:09', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mesaje`
--

CREATE TABLE `mesaje` (
  `id` int(11) NOT NULL,
  `id_anunt` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `mesaj` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `raspuns` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `nume` varchar(40) NOT NULL,
  `min_user_level_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `section_id`, `nume`, `min_user_level_id`) VALUES
(1, 1, 'dashboard', 3),
(2, 2, 'adaugare anunt', 2),
(4, 1, 'orders_table', 3),
(5, 1, 'users_table', 3),
(7, 1, 'profil', 1),
(8, 1, 'settings', 1),
(9, 2, 'adauga', 2),
(10, 2, 'contact_us', 1),
(11, 2, 'store', 1),
(12, 2, 'view_anunt', 1),
(13, 2, 'wishlist', 1),
(14, 1, 'anunturi', 1),
(15, 1, 'category', 3),
(16, 1, 'message', 1),
(17, 1, 'sub_category', 3),
(18, 1, 'vizualizare_anunt', 1),
(19, 1, 'edit_users', 1),
(20, 1, 'edit_category', 3),
(21, 1, 'edit_orders', 1),
(22, 1, 'edit_sub_category', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_rating`
--

CREATE TABLE `product_rating` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `review` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `proprietar_anunt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_rating`
--

INSERT INTO `product_rating` (`id`, `name`, `rate`, `email`, `review`, `product_id`, `proprietar_anunt`) VALUES
(72, 'danndsa', 4.6, 'user1@user.com', 'cacas', 32, 18),
(73, 'dan', 3.4, 'user1@user.com', 'ceva', 32, 18),
(74, 'gabi', 4.6, 'user1@user.com', 'foarte important', 32, 18),
(75, 'cineva', 5, 'user1@user.com', 'este un produs bun', 32, 18);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `min_user_level_id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `ordine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `min_user_level_id`, `nume`, `ordine`) VALUES
(1, 3, 'dashboard', 1),
(2, 3, 'anunturi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sub_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `sub_category_id`) VALUES
(1, 'Mere', 1),
(2, 'Varza', 2),
(3, 'Castraveti', 2),
(4, 'Lapte', 3),
(5, 'Pere', 1),
(6, 'Ardei', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `blocat` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = neblocat\r\n1 = blocat',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL DEFAULT current_timestamp(),
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_level_id`, `username`, `email`, `phone`, `password`, `blocat`, `created_at`, `modified`, `image_id`) VALUES
(18, 3, 'Dann09', 'user1@user.com', '0757544', '$2y$10$nzuvkTa7pkZm.oPLLkIGNuNqZhrtWxBzfMmT1Tmd6uQohGKNewujS', 0, '2021-12-09 10:39:27', '2021-12-09 10:39:27', 17),
(102, 1, 'userr', 'user1@user.com', '0746150725', '', 0, '2022-02-04 15:54:20', '2022-02-04 15:54:20', 63),
(105, 3, 'dan', 'cardos.dan08@gmail.com', '0746150725', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-03-24 19:26:40', '2022-03-24 19:26:40', 64);

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL,
  `nume` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`id`, `nume`) VALUES
(1, 'user'),
(2, 'seller'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expeditor` (`id_client`),
  ADD KEY `mesaje_ibfk_1` (`id_anunt`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagina_id` (`section_id`),
  ADD KEY `pages_ibfk_2` (`min_user_level_id`);

--
-- Indexes for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_rating_ibfk_1` (`product_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `min_user_level_id` (`min_user_level_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_id` (`sub_category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_level_id` (`user_level_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `user_levels`
--
ALTER TABLE `user_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anunturi`
--
ALTER TABLE `anunturi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_rating`
--
ALTER TABLE `product_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `user_levels`
--
ALTER TABLE `user_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD CONSTRAINT `anunturi_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `anunturi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anunturi_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anunturi_ibfk_4` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD CONSTRAINT `mesaje_ibfk_1` FOREIGN KEY (`id_anunt`) REFERENCES `anunturi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesaje_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_2` FOREIGN KEY (`min_user_level_id`) REFERENCES `user_levels` (`id`),
  ADD CONSTRAINT `pages_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_rating`
--
ALTER TABLE `product_rating`
  ADD CONSTRAINT `product_rating_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `anunturi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_ibfk_1` FOREIGN KEY (`min_user_level_id`) REFERENCES `user_levels` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`sub_category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `anunturi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
