-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 08:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
  `id_designer` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id_designer`, `name`) VALUES
(1, 'Allure Bridals'),
(2, 'Hayley Paige'),
(3, 'Pnina Tornai'),
(4, 'Maison Signore'),
(5, 'Paloma Blanca'),
(6, 'Pronovias'),
(7, 'Sottero and Midgley'),
(8, 'Tara Keely');

-- --------------------------------------------------------

--
-- Table structure for table `dresses`
--

CREATE TABLE `dresses` (
  `id_dress` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(65,2) NOT NULL,
  `description` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `id_Silhouette` int(30) NOT NULL,
  `id_picture` int(30) NOT NULL,
  `id_designer` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dresses`
--

INSERT INTO `dresses` (`id_dress`, `name`, `price`, `description`, `in_stock`, `id_Silhouette`, `id_picture`, `id_designer`) VALUES
(1, 'TRENDY BALL GOWN WEDDING DRESS', '1000.00', 'On the bodice and hemline of this ballgown, delicate floral embroidery creates a bridal bouquet in its own right.', 1, 1, 1, 1),
(2, 'A-LINE WEDDING DRESS', '1800.00', 'Amethyst long sleeve rococo bridal gown, beaded and embroidered bodice with illusion bateau neckline and V-neck front, full intricate back, tulle skirt with cathedral train. Also available in Ivory.', 1, 2, 2, 2),
(3, 'BALL GOWN WEDDING DRESS', '900.00', 'Ivory striped organza bridal ball gown, draped ballerina bodice with curved V-neckline, open back with cut-out detail, full cascading skirt.', 1, 1, 3, 2),
(4, 'CAP SLEEVE EMBROIDERED A-LINE WEDDING DRESS', '1000.00', 'Ivory Luxemburg embroidered A-line gown, deep sweetheart neckline and scalloped cap sleeve detail, full skirt with layered starlight sparkle tulle and cashmere lining.', 0, 2, 4, 2),
(5, 'ROMANTIC BALL GOWN WEDDING DRESS', '1600.00', 'Ivory Mikado and tulle bridal ball gown, spaghetti strap bodice with deep sweetheart neckline, ivory net side cut out, cascading banded tulle skirt.', 1, 1, 5, 2),
(6, 'TULLE STRAPLESS TIERED BALL GOWN WEDDING DRESS', '1100.00', 'White silk razmir and tulle ball gown, structured pendulum strapless neckline, cascading tiered skirt with tulle underlay.', 0, 1, 6, 2),
(7, 'A-LINE SLEEVELESS LACE WEDDING DRESS', '2000.00', 'A-line style gown made from guipure lace with a plunging front and back v-neckline and sheer corseted structure.', 1, 2, 7, 3),
(8, 'CLASSIC BALL GOWN WEDDING DRESS', '1700.00', 'Strapless sweetheart ball gown with ruffle chiffon skirt.', 1, 1, 8, 3),
(9, 'FLORAL APPLIQUE V-NECK BODICE A-LINE WEDDING DRESS', '2100.00', 'Sleeveless v-neck a-line wedding dress. Floral applique bodice and layer tulle skirt', 1, 2, 9, 4),
(10, 'ROMANTIC BALL GOWN WEDDING DRESS', '1000.00', 'Silk Dupioni Wedding Dress. Strapless pleated sweetheart bodice in Silk Dupioni. Removable beaded belt at waist. Full Dupioni circle skirt with side pockets. Fabric covered buttons down back of skirt to hem.', 1, 1, 10, 5),
(11, 'FLORAL APPLIQUE TULLE BALL GOWN', '2900.00', 'Cap sleeve floral applique tulle ball gown wedding dress.', 0, 1, 11, 3),
(12, 'SWEETHEART A-LINE LACE AND TULLE WEDDING DRESS', '1800.00', 'A-line wedding dress with full skirt fitted at the natural waist. Layers of tulle and lace panels make up the skirt topped with appliques added through the end of the train', 1, 2, 12, 6),
(13, 'SLEEVELESS LACE EMBROIDERED SHEATH WEDDING DRESS', '1000.00', 'Sleeveless v-neckline crepe sheath wedding dress with sheer floral lace embroidered bodice and matching appliqués continuing down the sides and train.', 1, 3, 13, 6),
(14, 'SPAGHETTI STRAP V-NECK BALL GOWN', '900.00', 'This princess wedding dress features a bead and Swarovski crystal-encrusted bodice atop a tiered ballgown skirt of tulle and horsehair. Double spaghetti straps glide from the V-neck into a crisscross pattern over the scoop back.', 1, 1, 14, 7),
(15, 'BOHEMIAN A-LINE WEDDING DRESS', '950.00', 'Blush tulle A-line bridal gown, floral beaded and embroidered long sleeve bodice, draped deep V neckline, sweetheart underlay, ribbon at natural waist, sheer high back with covered buttons and chapel train.', 0, 2, 15, 8);

-- --------------------------------------------------------

--
-- Table structure for table `meni`
--

CREATE TABLE `meni` (
  `id` int(11) NOT NULL,
  `href` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meni`
--

INSERT INTO `meni` (`id`, `href`, `name`) VALUES
(1, 'index.php', 'Shop'),
(3, 'aboutme.php', 'About me'),
(4, 'contact.php', 'Contact me'),
(5, 'cart.php', 'Cart');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id_picture` int(30) NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `src` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id_picture`, `alt`, `src`) VALUES
(1, 'first dress', 'images/dress1.jpg'),
(2, 'second dress', 'images/dress2.jpg'),
(3, 'third dress', 'images/dress3.jpg'),
(4, 'fourth dress', 'images/dress4.jpg'),
(5, 'fifth dress', 'images/dress5.jpg'),
(6, 'sixth dress', 'images/dress6.jpg'),
(7, 'seventh dress', 'images/dress7.jpg'),
(8, 'eighth dress', 'images/dress8.jpg'),
(9, 'nineth dress', 'images/dress9.jpg'),
(10, 'tenth dress', 'images/dress10.jpg'),
(11, 'eleventh dress', 'images/dress11.jpg'),
(12, 'twelth dress', 'images/dress12.jpg'),
(13, 'therteenth dress', 'images/dress13.jpg'),
(14, 'fourteenth dress', 'images/dress14.jpg'),
(15, 'fifteenth dress', 'images/dress15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(5) NOT NULL,
  `role_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `silhouette`
--

CREATE TABLE `silhouette` (
  `id_Silhouette` int(30) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `silhouette`
--

INSERT INTO `silhouette` (`id_Silhouette`, `name`) VALUES
(1, 'Ball Gown'),
(2, 'A-line'),
(3, 'Sheath');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_Id` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designers`
--
ALTER TABLE `designers`
  ADD PRIMARY KEY (`id_designer`);

--
-- Indexes for table `dresses`
--
ALTER TABLE `dresses`
  ADD PRIMARY KEY (`id_dress`),
  ADD KEY `dresses_categories` (`id_Silhouette`),
  ADD KEY `dress_picture` (`id_picture`),
  ADD KEY `dresses_designer` (`id_designer`);

--
-- Indexes for table `meni`
--
ALTER TABLE `meni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id_picture`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `silhouette`
--
ALTER TABLE `silhouette`
  ADD PRIMARY KEY (`id_Silhouette`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_Id`),
  ADD KEY `user_role` (`role_id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designers`
--
ALTER TABLE `designers`
  MODIFY `id_designer` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dresses`
--
ALTER TABLE `dresses`
  MODIFY `id_dress` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meni`
--
ALTER TABLE `meni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id_picture` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `silhouette`
--
ALTER TABLE `silhouette`
  MODIFY `id_Silhouette` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dresses`
--
ALTER TABLE `dresses`
  ADD CONSTRAINT `dress_picture` FOREIGN KEY (`id_picture`) REFERENCES `picture` (`id_picture`) ON DELETE CASCADE,
  ADD CONSTRAINT `dresses_categories` FOREIGN KEY (`id_Silhouette`) REFERENCES `silhouette` (`id_Silhouette`) ON DELETE CASCADE,
  ADD CONSTRAINT `dresses_designer` FOREIGN KEY (`id_designer`) REFERENCES `designers` (`id_designer`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`role_id_u`) REFERENCES `role` (`role_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
