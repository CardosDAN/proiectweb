-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 04:48 PM
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
  `creat` datetime NOT NULL DEFAULT current_timestamp(),
  `modificat` datetime NOT NULL DEFAULT current_timestamp(),
  `pret` decimal(7,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = inactiv\r\n1 = activ',
  `categorie_id` int(11) NOT NULL,
  `sub_categorie_id` int(11) NOT NULL,
  `vizualizari` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anunturi`
--

INSERT INTO `anunturi` (`id`, `image_id`, `titlu`, `telefon`, `descriere`, `adresa`, `user_id`, `creat`, `modificat`, `pret`, `status`, `categorie_id`, `sub_categorie_id`, `vizualizari`) VALUES
(55, 68, 'Vand mere rosii la deosebit pret', 746150725, 'Vand mere rosii la super pret, aduse din Olanda recent', 'Primaria Jibou, Strada Libertății, Jibou', 105, '2022-04-27 16:48:48', '2022-04-27 16:48:48', '12.00', 1, 1, 1, 5),
(56, 69, 'Vand rosii la pret decent', 748406079, 'Vand rosii la pret decent, cultivate in solar cu ingrasământ natural', 'Jibou ', 105, '2022-04-27 16:50:57', '2022-04-27 16:50:57', '9.00', 1, 2, 7, 2),
(57, 70, 'Vand castraveti proaspeti', 748406079, 'Vand castraveti la pret decent, cultivate in solar cu ingrasământ natural', 'Jibou ', 105, '2022-04-27 16:51:44', '2022-04-27 16:51:44', '11.00', 1, 2, 3, 0),
(58, 75, 'varza de vanzare', 1234567891, 'vand varza la un pret acceptabil, pentru mai multe informatii sunati-ma', 'inau, 224', 105, '2022-05-21 17:44:55', '2022-05-21 17:44:55', '5.00', 1, 2, 2, 1),
(59, 76, 'Produse lactate', 1234567891, 'Vand produse lactate, cum ar fi lapte, branza si amantana', 'Jibou ', 105, '2022-05-21 17:51:40', '2022-05-21 17:51:40', '34.00', 1, 3, 4, 0),
(60, 77, 'vand pere romanaesti', 2147483647, 'vand pere romanaesti, numai bune pentru consum ', 'zalau', 105, '2022-05-21 17:54:48', '2022-05-21 17:54:48', '34.00', 1, 1, 5, 0),
(61, 78, 'vand ardei romanaesti', 2147483647, 'vand pere romanaesti, numai buni pentru consum ', 'zalau', 105, '2022-05-21 17:56:39', '2022-05-21 17:56:39', '34.00', 1, 2, 6, 0),
(62, 69, 'Vând Rosi la un preț accesibil ', 734, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0734 527 860', '\nFeldru, 389303', 134, '2022-05-21 19:51:22', '2022-05-21 19:51:22', '633.00', 1, 2, 7, 2),
(63, 70, 'Vând Castraveti la un preț accesibil ', 235, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0235 779 679', 'Valea Mare (Babeni)', 124, '2022-05-21 19:58:56', '2022-05-21 19:58:56', '518.00', 1, 2, 3, 1),
(64, 75, 'Vând Varza la un preț accesibil ', 770, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0770 980 886', 'Jibou', 146, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '2.00', 1, 2, 2, 0),
(65, 75, 'Vând Varza la un preț accesibil ', 751, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0751 852 662', 'Sinaia', 145, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '17.00', 1, 2, 2, 0),
(66, 75, 'Vând Varza la un preț accesibil ', 734, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0734 810 821', 'Targu Neamt', 154, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '90.00', 1, 2, 2, 0),
(67, 75, 'Vând Varza la un preț accesibil ', 745, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0745 618 044', 'Buhusi', 162, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '99.00', 1, 2, 2, 0),
(69, 76, 'Vând Lapte la un preț accesibil ', 721, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0721 303 213', 'Prejmer', 138, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '60.00', 1, 3, 4, 0),
(70, 70, 'Vând Castraveti la un preț accesibil ', 231, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0231 726 505', 'Viseu de Sus', 169, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '42.00', 1, 2, 3, 0),
(71, 75, 'Vând Varza la un preț accesibil ', 767, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0767 505 869', 'Tulcea', 124, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '92.00', 1, 2, 2, 0),
(72, 68, 'Vând Mere la un preț accesibil ', 741, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0741 388 688', 'Arad', 134, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '98.00', 1, 1, 1, 3),
(74, 78, 'Vând Ardei la un preț accesibil ', 734, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0734 953 496', 'Cisnadie', 185, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '71.00', 1, 2, 6, 0),
(75, 70, 'Vând Castraveti la un preț accesibil ', 240, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0240 511 557', 'Peris', 156, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '17.00', 1, 2, 3, 0),
(76, 78, 'Vând Ardei la un preț accesibil ', 759, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0759 145 545', 'Toplita', 112, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '91.00', 1, 2, 6, 0),
(77, 77, 'Vând Pere la un preț accesibil ', 727, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0727 419 867', 'Dej', 139, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '78.00', 1, 1, 5, 0),
(78, 75, 'Vând Varza la un preț accesibil ', 762, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0762 161 056', 'Gaesti', 138, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '91.00', 1, 2, 2, 0),
(79, 77, 'Vând Pere la un preț accesibil ', 752, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0752 909 708', 'Lipova', 129, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '44.00', 1, 1, 5, 0),
(80, 76, 'Vând Lapte la un preț accesibil ', 720, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0720 204 865', 'Pechea', 196, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '98.00', 1, 3, 4, 0),
(81, 68, 'Vând Mere la un preț accesibil ', 262, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0262 352 834', 'Arad', 129, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '59.00', 1, 1, 1, 0),
(82, 78, 'Vând Ardei la un preț accesibil ', 766, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0766 683 589', 'Nadlac', 143, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '22.00', 1, 2, 6, 0),
(83, 69, 'Vând Rosi la un preț accesibil ', 259, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0259 297 399', 'Avrig', 136, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '27.00', 1, 2, 7, 0),
(84, 68, 'Vând Mere la un preț accesibil ', 785, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0785 481 598', 'Harlau', 155, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '95.00', 1, 1, 1, 0),
(87, 77, 'Vând Pere la un preț accesibil ', 269, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0269 042 157', 'Valea lui Mihai', 152, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '67.00', 1, 1, 5, 0),
(90, 68, 'Vând Mere la un preț accesibil ', 726, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0726 523 120', 'Radauti', 129, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '46.00', 1, 1, 1, 0),
(91, 68, 'Vând Mere la un preț accesibil ', 749, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0749 161 460', 'Ineu', 121, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '91.00', 1, 1, 1, 0),
(92, 69, 'Vând Rosi la un preț accesibil ', 234, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0234 896 214', 'Targu Mures', 183, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '39.00', 1, 2, 7, 0),
(94, 70, 'Vând Castraveti la un preț accesibil ', 761, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0761 470 908', 'Reghin', 133, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '7.00', 1, 2, 3, 0),
(95, 69, 'Vând Rosi la un preț accesibil ', 237, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0237 643 617', 'Campia Turzii', 113, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '60.00', 1, 2, 7, 0),
(96, 69, 'Vând Rosi la un preț accesibil ', 245, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0245 161 667', 'Plosca', 125, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '59.00', 1, 2, 7, 0),
(97, 76, 'Vând Lapte la un preț accesibil ', 254, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0254 492 182', 'Tomesti', 155, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '47.00', 1, 3, 4, 0),
(98, 75, 'Vând Varza la un preț accesibil ', 231, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0231 219 441', 'Cudalbi', 185, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '21.00', 1, 2, 2, 0),
(99, 69, 'Vând Rosi la un preț accesibil ', 245, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0245 067 325', 'Miercurea-Ciuc', 119, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '7.00', 1, 2, 7, 0),
(100, 69, 'Vând Rosi la un preț accesibil ', 233, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0233 659 875', 'Craiova', 114, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '48.00', 1, 2, 7, 0),
(101, 68, 'Vând Mere la un preț accesibil ', 231, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0231 679 670', 'Remetea', 160, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '53.00', 1, 1, 1, 0),
(104, 77, 'Vând Pere la un preț accesibil ', 246, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0246 690 473', 'Chitila', 145, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '21.00', 1, 1, 5, 0),
(105, 70, 'Vând Castraveti la un preț accesibil ', 738, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0738 744 787', 'Brasov', 164, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '93.00', 1, 2, 3, 0),
(107, 68, 'Vând Mere la un preț accesibil ', 738, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0738 476 477', 'Corabia', 160, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '13.00', 1, 1, 1, 0),
(108, 77, 'Vând Pere la un preț accesibil ', 255, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0255 278 843', 'Deva', 153, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '76.00', 1, 1, 5, 0),
(109, 68, 'Vând Mere la un preț accesibil ', 258, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0258 967 723', 'Toplita', 186, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '47.00', 1, 1, 1, 0),
(110, 75, 'Vând Varza la un preț accesibil ', 755, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0755 634 494', 'Tomesti', 158, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '13.00', 1, 2, 2, 0),
(111, 78, 'Vând Ardei la un preț accesibil ', 264, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0264 016 014', 'Targu Mures', 152, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '64.00', 1, 2, 6, 0),
(112, 76, 'Vând Lapte la un preț accesibil ', 263, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0263 845 575', 'Draganesti-Olt', 139, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '58.00', 1, 3, 4, 0),
(113, 70, 'Vând Castraveti la un preț accesibil ', 244, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0244 439 755', 'Segarcea', 154, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '92.00', 1, 2, 3, 0),
(114, 75, 'Vând Varza la un preț accesibil ', 238, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0238 627 121', 'Calafat', 149, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '15.00', 1, 2, 2, 0),
(115, 70, 'Vând Castraveti la un preț accesibil ', 739, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0739 101 543', 'Giurgiu', 185, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '22.00', 1, 2, 3, 0),
(116, 68, 'Vând Mere la un preț accesibil ', 249, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0249 985 120', 'Curtea de Arges', 142, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '91.00', 1, 1, 1, 0),
(117, 69, 'Vând Rosi la un preț accesibil ', 246, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0246 953 925', 'Jilava', 155, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '76.00', 1, 2, 7, 0),
(119, 77, 'Vând Pere la un preț accesibil ', 737, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0737 640 952', 'Sandominic', 161, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '49.00', 1, 1, 5, 0),
(120, 76, 'Vând Lapte la un preț accesibil ', 249, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0249 971 185', 'Deva', 176, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '34.00', 1, 3, 4, 0),
(121, 78, 'Vând Ardei la un preț accesibil ', 745, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0745 173 485', 'Sancraiu de Mures', 121, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '36.00', 1, 2, 6, 0),
(122, 68, 'Vând Mere la un preț accesibil ', 765, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0765 645 078', 'Piatra-Neamt', 192, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '77.00', 1, 1, 1, 0),
(123, 77, 'Vând Pere la un preț accesibil ', 755, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0755 171 229', 'Victoria', 157, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '92.00', 1, 1, 5, 0),
(124, 75, 'Vând Varza la un preț accesibil ', 735, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0735 034 205', 'Pecica', 121, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '17.00', 1, 2, 2, 0),
(125, 78, 'Vând Ardei la un preț accesibil ', 231, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0231 286 229', 'Calan', 171, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '91.00', 1, 2, 6, 0),
(126, 70, 'Vând Castraveti la un preț accesibil ', 239, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0239 247 137', 'Zimnicea', 190, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '51.00', 1, 2, 3, 0),
(127, 75, 'Vând Varza la un preț accesibil ', 767, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0767 840 245', 'Paunesti', 146, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '10.00', 1, 2, 2, 0),
(129, 77, 'Vând Pere la un preț accesibil ', 740, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0740 808 812', 'Poienile de sub Munte', 175, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '58.00', 1, 1, 5, 0),
(130, 68, 'Vând Mere la un preț accesibil ', 780, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0780 427 261', 'Prejmer', 192, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '43.00', 1, 1, 1, 0),
(132, 68, 'Vând Mere la un preț accesibil ', 236, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0236 397 431', 'Sinaia', 172, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '11.00', 1, 1, 1, 0),
(134, 76, 'Vând Lapte la un preț accesibil ', 246, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0246 555 392', 'Vicovu de Sus', 114, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '52.00', 1, 3, 4, 0),
(135, 75, 'Vând Varza la un preț accesibil ', 744, 'Vând Varza la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0744 199 364', 'Huedin', 136, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '46.00', 1, 2, 2, 0),
(136, 77, 'Vând Pere la un preț accesibil ', 748, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0748 204 022', 'Vatra Dornei', 112, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '40.00', 1, 1, 5, 0),
(137, 76, 'Vând Lapte la un preț accesibil ', 741, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0741 466 397', 'Sfantu Gheorghe', 146, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '64.00', 1, 3, 4, 0),
(138, 69, 'Vând Rosi la un preț accesibil ', 267, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0267 201 965', 'Campia Turzii', 113, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '55.00', 1, 2, 7, 0),
(139, 77, 'Vând Pere la un preț accesibil ', 765, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0765 436 095', 'Barbulesti', 192, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '63.00', 1, 1, 5, 0),
(140, 78, 'Vând Ardei la un preț accesibil ', 232, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0232 767 672', 'Mioveni', 135, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '52.00', 1, 2, 6, 0),
(141, 69, 'Vând Rosi la un preț accesibil ', 259, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0259 364 763', 'Valea Mare (Babeni)', 191, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '54.00', 1, 2, 7, 0),
(143, 68, 'Vând Mere la un preț accesibil ', 741, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0741 684 711', 'Slatina', 139, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '35.00', 1, 1, 1, 0),
(144, 68, 'Vând Mere la un preț accesibil ', 731, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0731 861 176', 'Giroc', 123, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '61.00', 1, 1, 1, 0),
(145, 78, 'Vând Ardei la un preț accesibil ', 729, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0729 476 332', 'Baia', 175, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '89.00', 1, 2, 6, 0),
(146, 70, 'Vând Castraveti la un preț accesibil ', 745, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0745 695 701', 'Savinesti', 122, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '45.00', 1, 2, 3, 0),
(147, 69, 'Vând Rosi la un preț accesibil ', 737, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0737 233 763', 'Arbore', 198, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '67.00', 1, 2, 7, 0),
(148, 68, 'Vând Mere la un preț accesibil ', 242, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0242 552 722', 'Sighisoara', 196, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '85.00', 1, 1, 1, 0),
(149, 78, 'Vând Ardei la un preț accesibil ', 251, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0251 918 829', 'Simleu Silvaniei', 155, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '44.00', 1, 2, 6, 0),
(150, 69, 'Vând Rosi la un preț accesibil ', 723, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0723 366 646', 'Otopeni', 158, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '87.00', 1, 2, 7, 0),
(152, 78, 'Vând Ardei la un preț accesibil ', 784, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0784 491 794', 'Otelu Rosu', 121, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '70.00', 1, 2, 6, 0),
(153, 69, 'Vând Rosi la un preț accesibil ', 735, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0735 435 820', 'Filiasi', 134, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '39.00', 1, 2, 7, 0),
(154, 70, 'Vând Castraveti la un preț accesibil ', 243, 'Vând Castraveti la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0243 474 525', 'Sancraiu de Mures', 168, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '64.00', 1, 2, 3, 0),
(155, 76, 'Vând Lapte la un preț accesibil ', 732, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0732 851 663', 'Borcea', 154, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '65.00', 1, 3, 4, 0),
(156, 77, 'Vând Pere la un preț accesibil ', 784, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0784 896 592', 'Curtici', 139, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '25.00', 1, 1, 5, 0),
(157, 77, 'Vând Pere la un preț accesibil ', 751, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0751 753 063', 'Corund', 140, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '16.00', 1, 1, 5, 0),
(158, 77, 'Vând Pere la un preț accesibil ', 269, 'Vând Pere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0269 591 512', 'Murfatlar', 150, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '89.00', 1, 1, 5, 0),
(159, 68, 'Vând Mere la un preț accesibil ', 720, 'Vând Mere la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0720 231 071', 'Rasnov', 191, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '53.00', 1, 1, 1, 0),
(161, 69, 'Vând Rosi la un preț accesibil ', 237, 'Vând Rosi la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0237 232 444', 'Cugir', 167, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '96.00', 1, 2, 7, 0),
(162, 76, 'Vând Lapte la un preț accesibil ', 254, 'Vând Lapte la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0254 103 264', 'Lipova', 173, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '41.00', 1, 3, 4, 0),
(163, 78, 'Vând Ardei la un preț accesibil ', 734, 'Vând Ardei la un preț accesibil  pentru mai multe informații vă rog frumos să mă contactați la numărul de telefon 0734 653 511', 'Darmanesti', 131, '2022-05-21 20:03:18', '2022-05-21 20:03:18', '91.00', 1, 2, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `applicati`
--

CREATE TABLE `applicati` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categorii`
--

CREATE TABLE `categorii` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorii`
--

INSERT INTO `categorii` (`id`, `nume`) VALUES
(1, 'Fructe'),
(2, 'Legume'),
(3, 'Lactate');

-- --------------------------------------------------------

--
-- Table structure for table `imagini`
--

CREATE TABLE `imagini` (
  `id` int(11) NOT NULL,
  `nume_fisier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `incarcat` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `imagini`
--

INSERT INTO `imagini` (`id`, `nume_fisier`, `incarcat`, `status`) VALUES
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
(66, 'magenta_explorer-wallpaper-1920x1080.jpg', '2022-03-26 15:13:09', '1'),
(67, 'AQVOYW.jpg', '2022-04-05 14:19:36', '1'),
(68, 'download.jpg', '2022-04-27 16:48:48', '1'),
(69, '2017-11-03-23-28-54-1200x790.jpg', '2022-04-27 16:50:57', '1'),
(70, 'cultura-castraveti-1_360x203.jpg', '2022-04-27 16:51:44', '1'),
(71, 'river_home_art_128746_1920x1080.jpg', '2022-04-28 09:07:21', '1'),
(72, 'download.jpg', '2022-04-28 09:14:37', '1'),
(73, 'download.jpg', '2022-04-28 09:15:46', '1'),
(74, 'download.jpg', '2022-04-28 09:15:51', '1'),
(75, 'varza.jpg', '2022-05-21 17:44:55', '1'),
(76, 'mai-destept-in-bucatarie-cum-alegi-cel-mai-bun-lapte-de-baut_size1.jpg', '2022-05-21 17:51:40', '1'),
(77, 'pere.jpg', '2022-05-21 17:54:48', '1'),
(78, '1-ardeiul-gras.jpg', '2022-05-21 17:56:39', '1');

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

--
-- Dumping data for table `mesaje`
--

INSERT INTO `mesaje` (`id`, `id_anunt`, `id_client`, `mesaj`, `status`, `time`, `raspuns`) VALUES
(47, 55, 111, 'mesaj dan', 1, '2022-05-18 17:25:15', 0),
(48, 55, 111, 'mesaj gabi', 1, '2022-05-18 17:25:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nivele_utilizatori`
--

CREATE TABLE `nivele_utilizatori` (
  `id` int(11) NOT NULL,
  `nume` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nivele_utilizatori`
--

INSERT INTO `nivele_utilizatori` (`id`, `nume`) VALUES
(1, 'utilizator'),
(2, 'vânzător'),
(3, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `notificari`
--

CREATE TABLE `notificari` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `mesaj` text NOT NULL,
  `timp` datetime NOT NULL DEFAULT current_timestamp(),
  `link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notificari`
--

INSERT INTO `notificari` (`id`, `user_id`, `mesaj`, `timp`, `link`) VALUES
(61, 18, 'Anuntul a fost dezactivat', '2022-05-15 11:16:10', 'http://proiectweb.local/src/front_pages/view_anunt.php?id=32');

-- --------------------------------------------------------

--
-- Table structure for table `pagini`
--

CREATE TABLE `pagini` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `nume` varchar(40) NOT NULL,
  `min_user_level_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pagini`
--

INSERT INTO `pagini` (`id`, `section_id`, `nume`, `min_user_level_id`) VALUES
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
(22, 1, 'edit_sub_category', 3),
(23, 1, 'rating', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pareri_produs`
--

CREATE TABLE `pareri_produs` (
  `id` int(11) NOT NULL,
  `rate` float NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `proprietar_anunt` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pareri_produs`
--

INSERT INTO `pareri_produs` (`id`, `rate`, `mesaj`, `product_id`, `proprietar_anunt`, `user_id`) VALUES
(110, 3.8, 'este un produs bun', 55, 105, 105),
(111, 1.7, 'sda', 55, 105, 105);

-- --------------------------------------------------------

--
-- Table structure for table `sectiuni`
--

CREATE TABLE `sectiuni` (
  `id` int(11) NOT NULL,
  `min_user_level_id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `ordine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sectiuni`
--

INSERT INTO `sectiuni` (`id`, `min_user_level_id`, `nume`, `ordine`) VALUES
(1, 3, 'dashboard', 1),
(2, 3, 'anunturi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categori`
--

CREATE TABLE `sub_categori` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categori`
--

INSERT INTO `sub_categori` (`id`, `nume`, `categorie_id`) VALUES
(1, 'Mere', 1),
(2, 'Varza', 2),
(3, 'Castraveti', 2),
(4, 'Lapte', 3),
(5, 'Pere', 1),
(6, 'Ardei', 2),
(7, 'Rosii', 2),
(8, 'Prune', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL DEFAULT 1,
  `username` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `parola` varchar(225) NOT NULL,
  `blocat` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = neblocat\r\n1 = blocat',
  `creat` datetime NOT NULL DEFAULT current_timestamp(),
  `modificat` datetime NOT NULL DEFAULT current_timestamp(),
  `image_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `user_level_id`, `username`, `email`, `telefon`, `parola`, `blocat`, `creat`, `modificat`, `image_id`) VALUES
(18, 3, 'Dann09', 'user1@user.com', '0757544', '$2y$10$nzuvkTa7pkZm.oPLLkIGNuNqZhrtWxBzfMmT1Tmd6uQohGKNewujS', 0, '2021-12-09 10:39:27', '2021-12-09 10:39:27', 17),
(102, 2, 'userr', 'user1@user.com', '0746150725', '', 0, '2022-02-04 15:54:20', '2022-02-04 15:54:20', 63),
(105, 3, 'dan', 'cardos.dan08@gmail.com', '07461507533', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-03-24 19:26:40', '2022-03-24 19:26:40', 64),
(111, 2, 'gabi', '', '', '$2y$10$H/apHmERtRWjVW6qP6ht6uDowvywlg2g3iSfpuBTrPjLML/wn6tIW', 0, '2022-04-17 16:01:12', '2022-04-17 16:01:12', NULL),
(112, 2, 'Adonis', 'Adonis@yopmail.com', '0746150725', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 18:57:22', '2022-05-02 18:57:22', NULL),
(113, 2, 'Titus', 'Titus@yopmail.com', '0768 396 126', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(114, 2, 'Flaviu', 'Flaviu@yopmail.com', '0762 041 095', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(115, 2, 'Octav', 'Octav@yopmail.com', '0738 265 349', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(116, 2, 'Grigore', 'Grigore@yopmail.com', '0765 953 696', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(117, 2, 'Leontin', 'Leontin@yopmail.com', '0758 745 642', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(118, 2, 'Leordean', 'Leordean@yopmail.com', '0243 899 559', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(119, 2, 'Toma', 'Toma@yopmail.com', '0263 811 673', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(120, 2, 'Ghiță', 'Ghiță@yopmail.com', '0262 001 325', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(121, 2, 'Alexe', 'Alexe@yopmail.com', '0780 607 272', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(122, 2, 'Alistar', 'Alistar@yopmail.com', '021 076 2584', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(123, 2, 'Todor', 'Todor@yopmail.com', '0750 642 890', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(124, 2, 'Petre', 'Petre@yopmail.com', '0749 004 990', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(125, 2, 'Mihai', 'Mihai@yopmail.com', '0251 966 639', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(126, 2, 'Cornel', 'Cornel@yopmail.com', '0238 183 536', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(127, 2, 'Matei', 'Matei@yopmail.com', '0743 221 078', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(128, 2, 'Cătălin', 'Cătălin@yopmail.com', '0249 528 438', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(129, 2, 'Amedeu', 'Amedeu@yopmail.com', '0764 133 774', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(130, 2, 'Gică', 'Gică@yopmail.com', '0732 672 878', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(131, 2, 'Fabian', 'Fabian@yopmail.com', '021 800 3967', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:00:27', '2022-05-02 19:00:27', NULL),
(133, 2, 'Visarion', 'Visarion@yopmail.com', '0251 030 627', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(134, 2, 'Costel', 'Costel@yopmail.com', '0723 746 278', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(135, 2, 'Florea', 'Florea@yopmail.com', '0236 203 142', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(136, 2, 'Amza', 'Amza@yopmail.com', '0257 348 374', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(138, 2, 'Dominic', 'Dominic@yopmail.com', '0738 232 721', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(139, 2, 'Leonard', 'Leonard@yopmail.com', '0721 755 533', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(140, 2, 'David', 'David@yopmail.com', '0747 808 793', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(142, 2, 'Dumitru', 'Dumitru@yopmail.com', '0785 843 307', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(143, 2, 'Costin', 'Costin@yopmail.com', '0750 586 828', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(144, 2, 'Francisc', 'Francisc@yopmail.com', '0752 040 250', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(145, 2, 'Relu', 'Relu@yopmail.com', '0242 974 026', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(146, 2, 'Sabin', 'Sabin@yopmail.com', '0236 203 824', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(147, 2, 'Adrian', 'Adrian@yopmail.com', '0767 196 533', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(148, 2, 'Radu', 'Radu@yopmail.com', '0256 443 956', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(149, 2, 'Antonie', 'Antonie@yopmail.com', '0724 179 413', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(150, 2, 'Jan', 'Jan@yopmail.com', '0751 374 242', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(151, 2, 'Cosmin', 'Cosmin@yopmail.com', '0237 141 223', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(152, 2, 'Marius', 'Marius@yopmail.com', '0745 464 077', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(153, 2, 'Ivan', 'Ivan@yopmail.com', '0251 691 539', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(154, 2, 'Georgel', 'Georgel@yopmail.com', '0262 154 972', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(155, 2, 'Eremia', 'Eremia@yopmail.com', '0736 043 728', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(156, 2, 'Simion', 'Simion@yopmail.com', '0267 954 578', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(157, 2, 'Antoniu', 'Antoniu@yopmail.com', '0234 806 207', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(158, 2, 'Doru', 'Doru@yopmail.com', '0764 603 621', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(159, 2, 'Horea', 'Horea@yopmail.com', '0761 509 767', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(160, 2, 'Gicu', 'Gicu@yopmail.com', '0742 208 805', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(161, 2, 'Sandu', 'Sandu@yopmail.com', '0731 923 666', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(162, 2, 'Brăduț', 'Brăduț@yopmail.com', '0770 942 985', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(164, 2, 'Stelian', 'Stelian@yopmail.com', '0252 214 187', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(165, 2, 'Bartolomeu', 'Bartolomeu@yopmail.com', '0761 512 889', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(167, 2, 'Maximilian', 'Maximilian@yopmail.com', '0768 611 281', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(168, 2, 'Andrei', 'Andrei@yopmail.com', '0262 493 076', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(169, 2, 'Severin', 'Severin@yopmail.com', '0784 363 463', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(171, 2, 'Ionică', 'Ionică@yopmail.com', '0235 060 008', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(172, 2, 'Jean', 'Jean@yopmail.com', '0757 899 694', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(173, 2, 'Andrian', 'Andrian@yopmail.com', '0238 988 451', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(174, 2, 'Ioan', 'Ioan@yopmail.com', '0263 241 241', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(175, 2, 'Cristian', 'Cristian@yopmail.com', '0741 340 988', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(176, 2, 'Ladislau', 'Ladislau@yopmail.com', '0235 398 310', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(178, 2, 'Basarab', 'Basarab@yopmail.com', '0267 677 428', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(180, 2, 'Victor', 'Victor@yopmail.com', '0754 159 877', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(183, 2, 'Alex', 'Alex@yopmail.com', '0260 881 812', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(184, 2, 'Antim', 'Antim@yopmail.com', '0758 907 161', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(185, 2, 'Eric', 'Eric@yopmail.com', '0766 071 926', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(186, 2, 'Niculiță', 'Niculiță@yopmail.com', '0231 122 783', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(187, 2, 'Stan', 'Stan@yopmail.com', '0726 902 196', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(189, 2, 'Filip', 'Filip@yopmail.com', '0746 240 146', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(190, 2, 'Cedrin', 'Cedrin@yopmail.com', '0763 580 372', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(191, 2, 'Ion', 'Ion@yopmail.com', '0765 140 022', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(192, 2, 'Jenel', 'Jenel@yopmail.com', '0735 964 337', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(194, 2, 'Marcel', 'Marcel@yopmail.com', '0259 242 192', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(196, 2, 'Tiberiu', 'Tiberiu@yopmail.com', '0728 965 047', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(197, 2, 'Mitruț', 'Mitruț@yopmail.com', '0268 603 734', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(198, 2, 'Vasilică', 'Vasilică@yopmail.com', '0738 863 654', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(199, 2, 'Nelu', 'Nelu@yopmail.com', '0742 846 525', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(200, 2, 'Iustinian', 'Iustinian@yopmail.com', '0722 177 239', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(201, 2, 'Aurel', 'Aurel@yopmail.com', '0233 333 936', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(202, 2, 'Alin', 'Alin@yopmail.com', '0757 554 053', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(203, 2, 'Eustațiu', 'Eustațiu@yopmail.com', '0254 247 739', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(204, 2, 'Arsenie', 'Arsenie@yopmail.com', '0780 942 609', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(206, 2, 'Panagachie', 'Panagachie@yopmail.com', '0731 714 115', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(207, 2, 'Inocențiu', 'Inocențiu@yopmail.com', '0753 085 592', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(209, 2, 'Horia', 'Horia@yopmail.com', '0754 114 091', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(211, 2, 'Veniamin', 'Veniamin@yopmail.com', '0235 538 106', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(212, 2, 'Gelu', 'Gelu@yopmail.com', '0268 406 119', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(213, 2, 'Raul', 'Raul@yopmail.com', '0762 404 896', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(214, 2, 'Olimpiu', 'Olimpiu@yopmail.com', '0721 017 202', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(215, 2, 'Vladimir', 'Vladimir@yopmail.com', '0722 666 772', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(216, 2, 'Rareș', 'Rareș@yopmail.com', '0254 906 723', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(219, 2, 'Norman', 'Norman@yopmail.com', '0233 312 854', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(220, 2, 'Bogdan', 'Bogdan@yopmail.com', '0762 935 600', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(221, 2, 'Timotei', 'Timotei@yopmail.com', '0240 054 513', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(222, 2, 'Horațiu', 'Horațiu@yopmail.com', '0734 029 245', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(224, 2, 'George', 'George@yopmail.com', '0725 550 307', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(225, 2, 'Liviu', 'Liviu@yopmail.com', '0252 984 722', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(226, 2, 'Zeno', 'Zeno@yopmail.com', '0254 216 439', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(228, 2, 'Agnos', 'Agnos@yopmail.com', '0267 482 990', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(229, 2, 'Dorin', 'Dorin@yopmail.com', '0768 105 333', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(231, 2, 'Codrin', 'Codrin@yopmail.com', '0759 896 723', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(232, 2, 'Pompiliu', 'Pompiliu@yopmail.com', '0727 917 795', '$2y$10$nLA/2gKOtU4inrNza3SLJeteWXUaTQa9VXQRRJjTHzoLRcmbHGQLe', 0, '2022-05-02 19:02:29', '2022-05-02 19:02:29', NULL),
(233, 2, 'ned', '', '', '$2y$10$KlqSmQzB18MJiAjY..kJ8Og..FLm2MYWlG5TqS5zgOw9ZxLov.bOa', 0, '2022-05-03 19:31:54', '2022-05-03 19:31:54', NULL);

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
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `user_id`) VALUES
(11, 57, 105),
(12, 55, 105);

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
  ADD KEY `category_id` (`categorie_id`),
  ADD KEY `sub_category_id` (`sub_categorie_id`);

--
-- Indexes for table `applicati`
--
ALTER TABLE `applicati`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categorii`
--
ALTER TABLE `categorii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagini`
--
ALTER TABLE `imagini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expeditor` (`id_client`),
  ADD KEY `mesaje_ibfk_1` (`id_anunt`);

--
-- Indexes for table `nivele_utilizatori`
--
ALTER TABLE `nivele_utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificari`
--
ALTER TABLE `notificari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pagini`
--
ALTER TABLE `pagini`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pagina_id` (`section_id`),
  ADD KEY `pages_ibfk_2` (`min_user_level_id`);

--
-- Indexes for table `pareri_produs`
--
ALTER TABLE `pareri_produs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_rating_ibfk_1` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sectiuni`
--
ALTER TABLE `sectiuni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `min_user_level_id` (`min_user_level_id`);

--
-- Indexes for table `sub_categori`
--
ALTER TABLE `sub_categori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_id` (`categorie_id`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_level_id` (`user_level_id`),
  ADD KEY `image_id` (`image_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `applicati`
--
ALTER TABLE `applicati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categorii`
--
ALTER TABLE `categorii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imagini`
--
ALTER TABLE `imagini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `mesaje`
--
ALTER TABLE `mesaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `nivele_utilizatori`
--
ALTER TABLE `nivele_utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notificari`
--
ALTER TABLE `notificari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `pagini`
--
ALTER TABLE `pagini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pareri_produs`
--
ALTER TABLE `pareri_produs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `sectiuni`
--
ALTER TABLE `sectiuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categori`
--
ALTER TABLE `sub_categori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anunturi`
--
ALTER TABLE `anunturi`
  ADD CONSTRAINT `anunturi_ibfk_1` FOREIGN KEY (`image_id`) REFERENCES `imagini` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `anunturi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anunturi_ibfk_3` FOREIGN KEY (`categorie_id`) REFERENCES `categorii` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anunturi_ibfk_4` FOREIGN KEY (`sub_categorie_id`) REFERENCES `sub_categori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicati`
--
ALTER TABLE `applicati`
  ADD CONSTRAINT `applicati_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mesaje`
--
ALTER TABLE `mesaje`
  ADD CONSTRAINT `mesaje_ibfk_1` FOREIGN KEY (`id_anunt`) REFERENCES `anunturi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mesaje_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notificari`
--
ALTER TABLE `notificari`
  ADD CONSTRAINT `notificari_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pagini`
--
ALTER TABLE `pagini`
  ADD CONSTRAINT `pagini_ibfk_2` FOREIGN KEY (`min_user_level_id`) REFERENCES `nivele_utilizatori` (`id`),
  ADD CONSTRAINT `pagini_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `sectiuni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pareri_produs`
--
ALTER TABLE `pareri_produs`
  ADD CONSTRAINT `pareri_produs_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `anunturi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pareri_produs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sectiuni`
--
ALTER TABLE `sectiuni`
  ADD CONSTRAINT `sectiuni_ibfk_1` FOREIGN KEY (`min_user_level_id`) REFERENCES `nivele_utilizatori` (`id`);

--
-- Constraints for table `sub_categori`
--
ALTER TABLE `sub_categori`
  ADD CONSTRAINT `sub_categori_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categorii` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD CONSTRAINT `utilizatori_ibfk_1` FOREIGN KEY (`user_level_id`) REFERENCES `nivele_utilizatori` (`id`),
  ADD CONSTRAINT `utilizatori_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `imagini` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `anunturi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `utilizatori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
