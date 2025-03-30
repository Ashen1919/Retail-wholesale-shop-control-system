-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2025 at 08:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sandaru1_retail_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_number` varchar(15) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `nic` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `product_details` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `lending_amount` decimal(10,2) DEFAULT NULL,
  `given_amount` decimal(10,2) DEFAULT NULL,
  `balance` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_number`, `status`, `nic`, `date`, `time`, `product_details`, `total_amount`, `lending_amount`, `given_amount`, `balance`) VALUES
('B-00001', 'completed', '200202902180', '2025-02-06', '11:00:00', 'P-00018|1|500', 500.00, 150.00, 500.00, 150.00),
('B-00002', 'in-progress', '200202902160', '2025-02-06', '10:30:00', 'P-00005|5|100.00,P-00001|7|300.00', 2600.00, 0.00, 3000.00, 400.00),
('B-00003', 'in-progress', '200202902160', '2025-02-07', '02:13:12', 'P-00001|2|300.00,P-00027|3|609.00,P-00034|4|1400.00', 8027.00, 0.00, 10000.00, 1973.00),
('B-00004', 'in-progress', '200202902100', '2025-02-07', '02:14:04', 'P-00034|4|1400.00', 5600.00, 0.00, 6000.00, 400.00),
('B-00005', 'in-progress', '200202902180', '2025-02-07', '02:38:08', 'P-00025|3|300.00,P-00026|2|440.00,P-00009|6|130.00', 2560.00, 500.00, 2500.00, 440.00),
('B-00006', 'in-progress', '200202902160', '2025-02-07', '14:40:18', 'P-00034|2|1400.00,P-00012|5|110.00', 3350.00, 0.00, 5000.00, 1650.00),
('B-00007', 'completed', '200202902180', '2025-02-07', '16:54:05', 'P-00034|5|1400.00', 7000.00, 0.00, 10000.00, 3000.00),
('B-00008', 'completed', '200202902160', '2025-02-07', '16:55:29', 'P-00025|6|300.00', 1800.00, 0.00, 2000.00, 200.00),
('B-00009', 'completed', '200202904815', '2025-02-07', '17:00:23', 'P-00001|5|300.00', 1500.00, 0.00, 2000.00, 500.00),
('B-00010', 'completed', '200202904815', '2025-02-07', '17:01:57', 'P-00017|5|680.00', 3400.00, 0.00, 4000.00, 600.00),
('B-00011', 'completed', '200202902160', '2025-02-07', '17:08:31', 'P-00027|4|609.00,P-00018|3|600.00', 4236.00, 0.00, 5000.00, 764.00),
('B-00012', 'completed', '200202902180', '2025-02-07', '17:10:05', 'P-00029|5|127.00', 635.00, 0.00, 1000.00, -635.00),
('B-00013', 'completed', '200202902160', '2025-02-07', '17:16:04', 'P-00001|20|300.00', 6000.00, 4000.00, 3000.00, 1000.00),
('B-00014', 'completed', '200202902160', '2025-02-07', '17:19:34', 'P-00018|2|600.00,P-00027|5|609.00,P-00012|5|110.00', 4795.00, 2000.00, 3000.00, 205.00),
('B-00015', 'completed', '200202902100', '2025-02-07', '19:30:04', 'P-00001|40|300.00', 12000.00, 0.00, 15000.00, 3000.00),
('B-00016', 'in-progress', '200202902168', '2025-02-07', '19:36:18', 'P-00001|4|300.00', 1200.00, 0.00, 2000.00, -1200.00),
('B-00017', 'completed', '200202902000', '2025-02-07', '19:38:42', 'P-00001|5|300.00', 1500.00, 0.00, 2000.00, 500.00),
('B-00018', 'completed', '200202902160', '2025-02-07', '19:44:08', 'P-00006|5|298.00', 1490.00, 0.00, 1500.00, 10.00),
('B-00019', 'completed', '200202902180', '2025-02-08', '15:39:07', 'P-00001|4|300.00', 1200.00, 0.00, 2000.00, 800.00),
('B-00020', 'in-progress', '200202902160', '2025-02-08', '15:43:02', 'P-00001|7|300.00', 2100.00, 1000.00, 2000.00, 900.00),
('B-00021', 'completed', '200202902160', '2025-02-08', '15:53:37', 'P-00034|2|1400.00', 2800.00, 500.00, 2500.00, 200.00),
('B-00022', 'completed', '200202902160', '2025-02-08', '17:55:44', 'P-00001|5|300.00', 1500.00, 500.00, 2000.00, 1000.00),
('B-00023', 'completed', '200202902160', '2025-02-08', '22:19:21', 'P-00001|5|300.00,P-00025|4|300.00', 2700.00, 2000.00, 1000.00, 300.00),
('B-00024', 'completed', '200202902180', '2025-02-08', '22:20:27', 'P-00017|5|680.00', 3400.00, 0.00, 5000.00, 1600.00),
('B-00025', 'completed', '200202902160', '2025-02-08', '22:34:08', 'P-00001|5|300.00,P-00016|4|100.00,P-00009|5|130.00', 2550.00, 0.00, 5000.00, 2450.00),
('B-00026', 'completed', '200202902160', '2025-02-08', '22:41:21', 'P-00001|5|300.00', 1500.00, 0.00, 2000.00, 500.00),
('B-00027', 'completed', '200202902160', '2025-02-08', '22:46:26', 'P-00001|5|300.00,P-00007|5|280.00,P-00027|2|609.00,P-00018|7|600.00,P-00018|2|600.00,P-00017|7|680.00', 14278.00, 0.00, 15000.00, 722.00),
('B-00028', 'completed', '200202902180', '2025-02-08', '22:48:34', 'P-00001|8|300.00', 2400.00, 0.00, 3000.00, 600.00),
('B-00029', 'completed', '200202902160', '2025-02-08', '22:56:26', 'P-00001|5|300.00,P-00017|5|680.00', 4900.00, 0.00, 5000.00, 100.00),
('B-00030', 'completed', '200202902160', '2025-02-08', '23:00:06', 'P-00001|5|300.00,P-00017|5|680.00', 4900.00, 0.00, 5000.00, 100.00),
('B-00031', 'completed', '200202902160', '2025-02-08', '23:01:45', 'P-00001|7|300.00,P-00016|5|100.00', 2600.00, 0.00, 3000.00, 400.00),
('B-00032', 'completed', '200202902160', '2025-02-08', '23:03:19', 'P-00017|5|680.00,P-00018|2|600.00', 4600.00, 0.00, 5000.00, 400.00),
('B-00033', 'completed', '200202904815', '2025-02-08', '23:04:41', 'P-00007|7|280.00,P-00011|4|207.00', 2788.00, 0.00, 3000.00, 212.00),
('B-00034', 'completed', '200202902000', '2025-02-08', '23:09:37', 'P-00027|5|609.00,P-00007|5|280.00', 4445.00, 0.00, 4500.00, 55.00),
('B-00035', 'completed', '200202902160', '2025-02-08', '23:12:41', 'P-00014|2|150.00,P-00012|4|110.00,P-00023|4|130.00', 1260.00, 0.00, 2000.00, 740.00),
('B-00036', 'completed', '200202902160', '2025-02-08', '23:16:10', 'P-00001|5|300.00,P-00017|5|680.00', 4900.00, 0.00, 5000.00, 100.00),
('B-00037', 'completed', '200202902100', '2025-02-08', '23:21:49', 'P-00024|8|320.00,P-00015|7|440.00', 5640.00, 0.00, 6000.00, 360.00),
('B-00038', 'completed', '200202902160', '2025-02-08', '23:30:28', 'P-00001|5|300.00,P-00028|7|476.00', 4832.00, 0.00, 5000.00, 168.00),
('B-00039', 'completed', '200202902160', '2025-02-08', '23:35:20', 'P-00001|7|300.00', 2100.00, 0.00, 3000.00, 900.00),
('B-00040', 'completed', '200202902000', '2025-02-08', '23:36:53', 'P-00001|5|300.00', 1500.00, 500.00, 2000.00, 1000.00),
('B-00041', 'completed', '200202902160', '2025-02-09', '00:05:26', 'P-00001|4|300.00,P-00017|4|680.00,P-00029|3|127.00,P-00027|8|609.00,P-00009|2|130.00,P-00028|9|476.00', 13717.00, 5000.00, 9000.00, 283.00);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `product_id`) VALUES
(34, 'annsteven0@example.com', 'P-00081'),
(36, 'ashendissanayaka0@gmail.com', 'P-00100');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`) VALUES
(3, 'Vegetables', 'Fresh, high-quality grocery items at Sandaru Food Mart, including produce, meats, dairy, snacks, and essentials.', '1737575642.jpg'),
(4, 'Fruits', 'Fresh, high-quality grocery items at Sandaru Food Mart, including produce, meats, dairy, snacks, and essentials.', '1737575686.jpg'),
(5, 'Beverages', 'Fresh, high-quality grocery items at Sandaru Food Mart, including produce, meats, dairy, snacks, and essentials.', '1737575709.jpg'),
(6, 'Household', 'Fresh, high-quality grocery items at Sandaru Food Mart, including produce, meats, dairy, snacks, and essentials.', '1737575727.jpg'),
(7, 'Grocery', 'Fresh, high-quality grocery items at Sandaru Food Mart, including produce, meats, dairy, snacks, and essentials.', '1737575803.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', 'About payment concern', 'I have problem with my credit card, when I try to add my credit card it shows an error. Please contact me quickly to resolve this problem as well as posible.'),
(2, 'Kasuni Madeesha', 'test@gmail.com', 'Delivery problem', 'I have an order to deliver more than 150km. Please give me details how to do it.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `customerType` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `first_name`, `last_name`, `phone_number`, `password`, `image`, `status`, `customerType`, `userType`, `date`) VALUES
(2, 'ashendissanayaka0@gmail.com', 'Ashen', 'Dissanayaka', '0764426675', '$2y$10$r.2ns1fiBC6IvThdcdZE.O1l2SVdJtBKhaw7AAOVbR.YUzHG78wP6', '1739000301.jpg', 'active', 'retail', 'user', '2025-02-12'),
(3, 'annsteven0@example.com', 'Ann', 'Steven', '0718183768', '$2y$10$E7lhSXfM.cjoyqtHe29QyeUyPWyC6gLZt3ynyYnwWfWfI3VIPFXlu', 'profile_default.jpg', 'active', 'retail', 'user', '2025-02-13'),
(4, 'stevesmith0@example.com', 'Steve', 'Smith', '0741234567', '$2y$10$OAECh2jZfxYRl7V/KweKj.V68Ch8nTKUIwNh1ce5yWc2Oy2Gqlx/u', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(5, 'nextwaveadmin@example.com', 'Admin', 'Sandaruwan', '0332678970', '$2y$10$8ZKLc02TJA6zJsuqWaTWducHPpwLq5GnkUs6cC/IFLA4jb.y0jzXS', 'profile_default.jpg', 'active', 'retail', 'admin', NULL),
(6, 'sfmcashier1@example.com', 'Sophia', 'Potter', '0761234558', '$2y$10$s8MPao5EpRq.jp8xyy7VE.wFPg/U24o4SZS5JmNUuIsPhqmjCw8jq', 'profile_default.jpg', 'active', '', 'cashier', NULL),
(7, 'sfmcashier2@example.com', 'Lily', 'Adams', '0741366911', '$2y$10$w7QDihm9Kv.XOC2PXdP4P.r6epjiNKlaJV3j0IuhYPFm7U7YV8I/i', 'profile_default.jpg', 'active', '', 'cashier', NULL),
(10, 'disurasandaruwan0@gmail.com', 'Disura', 'Sandaruwan', '0718183768', '$2y$10$Bf9cCowLtKSr.00lazhQ4eO0Ryh/c9Shy/qVKUkSU/cYrbmx6fi7W', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-08'),
(11, 'madushika@gmail.com', 'madushika', 'chathuranganee', '0762219874', '$2y$10$Gn5UcHyuZWccatgNCJFZ5OjGy7tEUrunbF9glE7bT/AvApCUPSbLa', '1741865984.PNG', 'active', 'retail', 'user', '2025-03-13'),
(12, 'kavishi1@gmail.com', 'Kavishi', 'Ranasingha ', '0768954529', '$2y$10$C1oZz7T1vHTFyWLgxLGu7.Z7L41J0JnCvo5xk3/xOenfFxZs4T4WS', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(13, 'kasuni1@gmail.com', 'Kasuni', 'Madeesha', '0764584369', '$2y$10$oBYM3p9wqANhjyIr5XdN3eoiCWdDnddsdj6yDsDYWUwC29o2zWkoG', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(14, 'maleesha1@gmail.com', 'Maleesha', 'Nethmini', '0748654723', '$2y$10$CD8sbwiB34DyBjOaHuUSDukaQBSXGGuyTg5.V6T5yHsx.12MwgFZW', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(15, 'mikeshi3@gmail.com', 'Mikeshi', 'Neksha', '0748654723', '$2y$10$oW8QeEbZO.IDXdGw/4p4eeRA2Wv7jaOm0M69zq36xE1SLYM4ktxgC', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(16, 'shala@gmail.com', 'Shalani', 'Mihanya', '0758469247', '$2y$10$3MPm86KYOUf3Lob8iAN3VOXgtdVi3rDXkt2rJVS0GAgtRyL/lcDsa', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(17, 'chamodhya@gmail.com', 'Chamodhya', 'Chathurangi', '0742789543', '$2y$10$1J.AoLwoCYmBJ.IMnBl4O.kE47TeJvY1uTSCKyZ.OV/LUpAQKHmze', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(18, 'sanduni@gmail.com', 'Sanduni', 'Madushika', '0758469246', '$2y$10$ia/sY1nNwDeE.5i4hxzMwu3ZZCfuliVcXFsg3gHJIpsIkMLTk5Dvy', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(19, 'dew2@gmail.com', 'Dewmini', 'Prasadi', '0769842715', '$2y$10$eSLdUSVuEIBbiWmb2/pX3Ouf51JYzhTj7onS4UAFe/mL87cqtdkn6', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(20, 'shehan@gmail.com', 'Shehan', 'Udith', '074895726', '$2y$10$a3KtsLWAjvujXBKfSCtX5OjVP8N76tDj7X6aQYMG3ACg3i7Z7/9Ma', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(21, 'anu5@gmail.com', 'Anuji', 'Shashiprabha', '0752849635', '$2y$10$UJlhooZQ0fL8hiaZTixJzOygNyXql/eE2xlxGUbotwCL0PcI3lni2', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(22, 'parami@gmail.com', 'Parami', 'Disanayaka', '0768495723', '$2y$10$yfvfF0aTFMm.dCJNIQ5VE.tAUjv/13B8Z.vub4rapgVttqZV2Kqvq', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(23, 'ushani@gmail.com', 'Ushani', 'Ranasingha ', '0705879641', '$2y$10$4rQHLn5e9EE7B2DJil1qZ./9N4HCFZgCY13vssE5TvP4DTyqJNcx.', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-13'),
(24, 'nethmi3@gmail.com', 'Nethmi', 'bhagya', '0768845753', '$2y$10$JSZklsOiSUbtFSBDl1LtOuLkEKdCSfViyY/FjysAltVoEuiIlnjQG', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(25, 'user1@gmail.com', 'User', '1', '0768845972', '$2y$10$cVf1cQ1WgmCyYyknBWr7fu0z2zR6Y8SlVaAy9TSBaLtZ5Mxt3z.K.', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(26, 'user2@gmail.com', 'User', '2', '0745286914', '$2y$10$skrmpb97NCLiaMoLn3.hcevoRqknp2rn3M3heFCrB.4CFYwK9PpX2', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(27, 'user3@gmail.com', 'User', '3', '0754476958', '$2y$10$bL.jAs7Kfpp/suyHLDCqQOWfztW7U63MbtnPraIFPNgpJpLbN5dWW', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(28, 'user4@gmail.com', 'User', '4', '0748895672', '$2y$10$gHsXcE1DTAApQU05F/LxNOPQ3I4Q1gdMsStg6FrbOD7IQ5xkHtIvO', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(29, 'user5@gmail.com', 'User', '5', '0768476592', '$2y$10$seeFZL/0Ys2lY2BkX8iPw.JW.oqjVs346RZAb63a2/CVlehyKJ33.', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(30, 'user6@gmail.com', 'User', '6', '074859175', '$2y$10$kCXpHVZnAcU7srS7M6/rJ.oHtYZE2jWp.qXX6RBHHuBuJweVt0/KS', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(31, 'user7@gmail.com', 'User', '7', '0758476297', '$2y$10$lYoLzzcJ79DKVo9CUA6u4u.igeWx7SBXEebeUgqfd3nbhq801z6Ou', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(32, 'user8@gmail.com', 'User', '8', '0745218796', '$2y$10$QGpnjsQL5866N7BiVRxOhedLs.AZz3KcmnmJ3sYhGOTgQObu12pee', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(33, 'user9@gmail.com', 'User', '9', '0767694852', '$2y$10$9pt0wQpgYDcy.Ey.zVmJd.QOxNg4aKc4yK5mJTuixVVayhOKOYdZq', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-14'),
(34, 'nextwave@example.com', 'Ashen', 'Gimhana', '0764426675', '$2y$10$ZmJC71csOCJh.2DGbl6bSOnEeERG6QnoiZ/zfmGguzGn2VMRU3AnK', 'profile_default.jpg', 'active', 'retail', 'user', '2025-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `lendings`
--

CREATE TABLE `lendings` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lendings`
--

INSERT INTO `lendings` (`id`, `nic`, `date`, `amount`) VALUES
(1, '200202902160', '2025-02-08', 2000.00),
(3, '200202902000', '2025-02-08', 500.00),
(5, '200202902160', '2025-02-09', 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `table_id` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `p_code` int(25) DEFAULT NULL,
  `order_details` varchar(255) NOT NULL,
  `lending_amount` varchar(100) NOT NULL,
  `full_amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`table_id`, `id`, `type`, `status`, `payment`, `name`, `email`, `date`, `time`, `phone_number`, `address`, `city`, `p_code`, `order_details`, `lending_amount`, `full_amount`) VALUES
(1, 'O-00001', 'retail', 'pending', 'pending', 'Disura Sandaruwan', 'disurasandaruwan0@gmail.com', '2025-02-02', '03:27:36', '0702658840', 'No:44/3/A, Mahena Waththa, Pahala Imbulgoda, Imbulgoda.', NULL, NULL, 'O-00001&10,O-00002&5,O-00003&8,O-00001&15,O-00002&11,O-00003&2,', '0.00', '5000.00'),
(2, 'O-00002', 'retail', 'delivered', 'paid', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-02', '18:31:18', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00007=2&P-00011=1', '0', '1067.00'),
(3, 'O-00003', 'retail', 'on-the-way', 'paid', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-02', '18:34:18', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00006=1&P-00034=1', '0', '1998.00'),
(4, 'O-00004', 'retail', 'pending', 'paid', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-02', '18:39:38', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00005=1', '0', '821.00'),
(5, 'O-00005', 'retail', 'on-the-way', 'pending', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-02', '18:56:54', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00005=1', '0', '821.00'),
(6, 'O-00006', 'retail', 'pending', 'pending', 'Ann Steven', 'annsteven0@example.com', '2025-03-08', '12:07:14', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00022=2', '0', '1500.00'),
(7, 'O-00007', 'retail', 'pending', 'pending', 'Ann Steven', 'annsteven0@example.com', '2025-03-08', '12:12:59', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00001=2', '0', '900.00'),
(8, 'O-00008', 'retail', 'pending', 'pending', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-08', '12:15:46', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00033=1', '0', '1800.00'),
(9, 'O-00009', 'retail', 'pending', 'paid', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-08', '12:20:27', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00001=2', '0', '900.00'),
(10, 'O-00010', 'retail', 'pending', 'paid', 'Hashini Supunsara', 'annsteven0@example.com', '2025-03-25', '18:10:25', '0764389370', 'NO:222, Nedungolla, Mandawala', 'Gampaha', 11061, 'P-00010=1&P-00059=1', '0', '525.00'),
(11, 'O-00011', 'retail', 'pending', 'paid', 'Hashini Supunsara', 'annsteven0@example.com', '2025-03-25', '18:18:15', '0764389370', 'NO:222, Nedungolla, Mandawala', 'Gampaha', 11061, 'P-00079=1&P-00115=1', '0', '2551.00'),
(12, 'O-00012', 'retail', 'pending', 'paid', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-27', '15:05:34', '0764426675', 'NO:222, Nedungolla, Mandawala', 'Gampaha', 11061, 'P-00040=1&P-00053=1&P-00106=1', '0', '1622.00'),
(13, 'O-00013', 'retail', 'pending', 'paid', 'Hashini Supunsara', 'annsteven0@example.com', '2025-03-27', '15:27:35', '0764389370', 'NO:222, Nedungolla, Mandawala', 'Gampaha', 11061, 'P-00018=1&P-00091=1', '0', '1142.00'),
(14, 'O-00014', 'retail', 'pending', 'paid', 'Ashen Gimhana', 'annsteven0@example.com', '2025-03-27', '20:06:37', '0764426675', 'NO:222, Nedungolla, Mandawala', 'Gampaha', 11061, 'P-00048=1&P-00088=1', '0', '1092.00'),
(15, 'O-00015', 'retail', 'pending', 'paid', 'Hashini Supunsara', 'annsteven0@example.com', '2025-03-27', '20:11:57', '0764389370', 'NO:222, Nedungolla, Mandawala', 'Gampaha', 11061, 'P-00099=1', '0', '660.00'),
(16, 'O-00016', 'retail', 'pending', 'paid', 'Kasuni Madeesha', 'annsteven0@example.com', '2025-03-27', '20:25:05', '0741366911', 'NO:222, Nedungolla, Mandawala', 'Matara', 11061, 'P-00074=1', '0', '1445.00'),
(17, 'O-00017', 'retail', 'pending', 'paid', 'Hashini Supunsara', 'annsteven0@example.com', '2025-03-27', '23:34:02', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00081=1', '0', '600.00'),
(18, 'O-00018', 'retail', 'pending', 'paid', 'Ashen Gimhana', 'ashendissanayaka0@gmail.com', '2025-03-29', '09:19:15', '0764426675', 'No:222,Nedungolla,Mandawala', 'Gampaha', 11061, 'P-00040=1', '0', '530.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `units` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(300) NOT NULL,
  `purchased_price` varchar(100) NOT NULL,
  `retail_price` varchar(100) NOT NULL,
  `retail_profit` varchar(100) NOT NULL,
  `whole_price` varchar(100) NOT NULL,
  `whole_profit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_category`, `units`, `quantity`, `supplier`, `image`, `description`, `purchased_price`, `retail_price`, `retail_profit`, `whole_price`, `whole_profit`) VALUES
(1, 'P-00001', 'Harischandra Plain Noodles', 'Grocery', '400g', '0', 'Harischandra', '1738496955.jpg', 'Noodles are a versatile, long, and slender staple food made from flour, water, and sometimes eggs. Popular worldwide, they can be boiled, fried, or steamed and paired with various flavors.', '250', '300', '50', '280', '30'),
(6, 'P-00005', 'Pack of 10 Eggs', 'Grocery', 'Large 10S', '50', 'NelFarms', '1738485912.jpg', 'Fresh and nutritious large eggs, packed in a set of 10. Perfect for breakfast, baking, and daily protein needs.', '570', '521', '49', '490', '31'),
(7, 'P-00006', 'White Sugar', 'Grocery', '1kg', '500', 'Sugar Mills', '1738486743.jpg', 'Premium quality white sugar, ideal for cooking, baking, and beverages. Pure, fine crystals ensure sweetness and freshness every time.', '250', '298', '48', '280', '30'),
(8, 'P-00007', 'Mysoore Dhal Bulk', 'Grocery', '1kg', '500', 'Pulses Traders', '1738487095.jpg', 'High-quality Mysoore dhal, rich in protein and fiber. Ideal for dal recipes, soups, and nutritious meals for daily consumption.', '240', '280', '40', '260', '20'),
(9, 'P-00008', 'Catch Canned Fish', 'Grocery', '425g', '100', 'Catch Seafood Ltd', '1738487298.jpg', 'Premium canned fish, rich in protein and Omega-3. Perfect for quick meals, salads, sandwiches, and healthy seafood dishes.', '600', '650', '50', '630', '30'),
(10, 'P-00009', 'Carrot', 'Vegetables', '500g', '6', 'Fresh Farm Produce', '1738503011.jpg', 'Fresh, crunchy carrots packed with nutrients and sweetness. Perfect for salads, cooking, and juicing for a healthy diet.', '110', '130', '20', '120', '10'),
(11, 'P-00010', 'Green Beans', 'Vegetables', '250g', '99', 'Organic Greens Ltd', '1738595573.jpg', ' Fresh, tender green beans rich in fiber and vitamins. Ideal for stir-fries, curries, and healthy vegetable side dishes.', '120', '135', '15', '125', '5'),
(12, 'P-00011', 'Brinjal', 'Vegetables', '350g', '100', 'Farm Fresh Veggies', '1738595663.jpg', 'Fresh, glossy brinjals with rich flavor and texture. Perfect for curries, grilling, roasting, and healthy vegetable dishes.', '180', '207', '27', '195', '15'),
(13, 'P-00012', 'Pumpkin', 'Vegetables', '500g', '100', 'Organic Harvest Farms', '1738595767.jpg', 'Sweet and nutritious pumpkin, rich in fiber and vitamins. Great for soups, curries, baking, and healthy dishes.', '95', '110', '15', '100', '5'),
(14, 'P-00013', 'Ash Plantain', 'Vegetables', '250g', '100', 'Green Valley Farms', '1738595868.jpg', 'Nutritious ash plantain, ideal for curries, fries, and healthy meals. Packed with fiber and essential vitamins for balanced nutrition.', '35', '45', '10', '40', '5'),
(15, 'P-00014', 'Beetroot', 'Vegetables', '250g', '100', 'Fresh Roots Ltd', '1738595953.jpg', 'Fresh, vibrant beetroot rich in antioxidants and iron. Perfect for salads, juices, and healthy meals for improved well-being.', '130', '150', '20', '140', '10'),
(16, 'P-00015', 'Sweet Melon', 'Fruits', '2kg', '50', 'Fresh Harvest Farms', '1738597255.jpg', 'Juicy and refreshing sweet melon, perfect for hydration. Rich in vitamins, ideal for salads, smoothies, and fresh fruit platters.', '400', '440', '40', '420', '20'),
(17, 'P-00016', 'Sour Plantain', 'Fruits', '500g', '30', 'Organic Banana Growers', '1738597365.jpg', 'Starchy and versatile sour plantains, ideal for frying, boiling, and making delicious side dishes with a rich, savory taste.', '85', '100', '15', '90', '5'),
(18, 'P-00017', 'Guava', 'Fruits', '1kg', '100', 'Tropical Fruit Suppliers', '1738597458.jpg', 'Fresh, fragrant guavas rich in fiber and vitamin C. Perfect for snacking, juices, and healthy fruit salads.', '620', '680', '60', '650', '30'),
(19, 'P-00018', 'Pineapple', 'Fruits', '1.25kg', '49', 'Golden Tropics Ltd', '1738597571.jpg', 'Sweet and tangy pineapple, perfect for juices, salads, and desserts. Packed with enzymes and vitamins for a healthy diet.\r\n', '550', '600', '50', '580', '30'),
(20, 'P-00019', 'Papaw - Red Lady', 'Fruits', '1.25g', '50', 'Tropical Farms Ltd', '1738597655.jpg', 'Delicious Red Lady papaya, rich in antioxidants and vitamin C. Perfect for digestion, juices, and fresh fruit salads.', '320', '350', '30', '330', '10'),
(21, 'P-00020', 'Imported Red Grapes', 'Fruits', '500g', '100', 'Global Fruit Imports', '1738597755.jpg', 'Juicy and sweet imported red grapes, perfect for snacking, salads, and wine-making. Packed with antioxidants and essential nutrients.', '1100', '1180', '80', '1150', '50'),
(22, 'P-00021', ' Elephant House Necto', 'Beverages', '1.5L', '200', 'Elephant House Beverages', '1738598614.jpg', 'Refreshing and fruity Necto soft drink with a unique sweet taste. Perfect for parties, gatherings, and a cooling beverage.\r\n', '280', '320', '40', '300', '20'),
(23, 'P-00022', 'Viva Malted Food Drink', 'Beverages', '795g', '100', 'Nestlé Lanka', '1738598706.jpg', 'Nutritious malted food drink, rich in vitamins and minerals. Ideal for energy, strong bones, and a delicious daily beverage.', '550', '600', '50', '580', '30'),
(24, 'P-00023', 'Milo RTD Tetra Pack', 'Beverages', '180ml', '100', 'Nestlé Lanka', '1738598837.jpg', 'Ready-to-drink Milo with a rich chocolate malt flavor. Perfect for instant energy, sports recovery, and a refreshing snack drink.', '110', '130', '20', '120', '10'),
(25, 'P-00024', 'Pepsi', 'Beverages', '1.5L', '200', 'PepsiCo Lanka', '1738598908.jpg', 'Classic Pepsi soft drink with a bold cola flavor. Perfect for refreshing moments, parties, and pairing with favorite meals.', '280', '320', '40', '300', '20'),
(26, 'P-00025', 'Elephant House Orange', 'Beverages', '1.5L', '200', 'Elephant House Beverages', '1738598972.jpg', 'Refreshing orange-flavored soft drink with a tangy citrus taste. Perfect for summer refreshment and enjoying with family and friends.', '270', '300', '30', '290', '20'),
(27, 'P-00026', 'Kist Mango Nectar', 'Beverages', '1L', '100', 'Kist Lanka', '1738599061.jpg', 'Delicious mango nectar made from ripe mangoes. Rich, thick, and perfect for smoothies, cocktails, or enjoying pure fruit goodness.', '400', '440', '40', '420', '20'),
(28, 'P-00027', 'Diva Colour Guard Liquid', 'Household', '1L', '100', 'Hemas Consumer', '1738599736.jpg', 'Special fabric care liquid protects colors while washing. Gentle on clothes, removes stains, and keeps garments bright and fresh.', '570', '609', '39', '590', '20'),
(29, 'P-00028', 'Surf Excel Matic Top Load', 'Household', '1kg', '100', 'Unilever Sri Lanka', '1738599952.jpg', 'Advanced detergent for top-load machines. Removes tough stains effectively while protecting fabric and ensuring long-lasting freshness.', '450', '476', '26', '460', '10'),
(30, 'P-00029', 'Lifebuoy Active Total Soap', 'Household', '100g', '300', 'Unilever Sri Lanka', '1738600039.jpg', 'Antibacterial soap for total skin protection. Kills 99.9% of germs while keeping skin fresh, healthy, and moisturized.', '110', '127', '17', '120', '10'),
(31, 'P-00030', 'Lysol Floral Disinfectant', 'Household', '500ml', '200', 'Reckitt Benckiser', '1738600139.jpg', 'Powerful disinfectant with floral fragrance. Kills 99.9% of bacteria and viruses, ensuring clean and germ-free surfaces.', '400', '425', '25', '410', '10'),
(32, 'P-00031', 'Vim Liquid Dishwash', 'Household', '500ml', '200', 'Unilever Sri Lanka', '1738600225.jpg', 'Effective dishwashing liquid removes grease and tough stains easily while being gentle on hands. Leaves dishes sparkling clean.', '400', '425', '25', '410', '10'),
(33, 'P-00032', ' Mortein Fast Killer', 'Household', '400ml', '200', 'Reckitt Benckiser', '1738600311.jpg', 'Instant mosquito and insect killer with powerful formula. Provides long-lasting protection and keeps your home safe from pests.', '1100', '1147', '47', '1120', '20'),
(34, 'P-00033', 'Keeri Samba Rice', 'Grocery', '5kg', '150', 'Araliya', '1738653959.jpg', 'Samba 5kg rice, available at Sandaru Food Mart, is premium-quality, long-grain rice known for its rich aroma and superior taste. Perfect for daily meals and special occasions.', '1200', '1500', '300', '1350', '150'),
(35, 'P-00034', 'Gold Winner Sunflower Oil', 'Grocery', '1L', '150', 'Sunflower Traders', '1738654928.jpg', 'Pure, high-quality sunflower oil, ideal for cooking, frying, and baking. Known for its light texture and mild flavor, making it a versatile kitchen staple.', '1350', '1400', '50', '1380', '30'),
(38, 'P-00035', 'Zesta Tea Bags - 50 pcs', 'Beverages', '100g', '100', ' Zesta Tea Lanka', '1738665334.jpg', 'Premium Zesta tea bags for a rich, aromatic Ceylon tea experience. Perfect for daily refreshment with a smooth taste.', '630', '675', '45', '650', '25'),
(40, 'P-00036', 'Finagle Sandwich Bread', 'Grocery', '500g', '50', 'Finagle Lanka Pvt Ltd', '1738821311.jpg', 'A soft and fresh sandwich bread, perfect for breakfast, sandwiches, and snacks. Made with high-quality ingredients to ensure great taste and texture.(50 units per day)', '450', '495', '45', '470', '20'),
(41, 'P-00037', 'Potatoes', 'Vegetables', '500g', '100', 'Local Farmers', '1738826978.jpg', 'Fresh, high-quality potatoes ideal for boiling, frying, and cooking. Rich in nutrients, these versatile vegetables are a staple in many households.', '150', '180', '30', '165', '15'),
(42, 'P-00038', ' Big Onion', 'Vegetables', '500g', '80', 'Wholesale Market', '1738827327.jpg', 'Fresh and flavorful big onions, perfect for curries, salads, and stir-fries. A kitchen essential known for its rich taste and long shelf life.', '120', '140', '20', '130', '10'),
(43, 'P-00039', 'Coconut', 'Grocery', '3pcs (Large)', '60', 'Coconut Plantations', '1738827775.jpg', 'Fresh large coconuts, ideal for cooking, coconut milk extraction, and other culinary uses. Rich in flavor and nutrients, sourced from quality plantations.', '570', '627', '57', '600', '30'),
(44, 'P-00040', 'Munchee Milk Short Cake', 'Grocery', '200g', '98', 'Ceylon Biscuits Limited (CBL)', '1738828116.jpg', ' A delicious, buttery milk shortcake biscuit with a rich, milky flavor. Perfect for tea-time snacks, made with high-quality ingredients for great taste.', '200', '230', '30', '215', '15'),
(45, 'P-00041', 'Ambewela Fresh Milk', 'Beverages', '1L', '99', 'Ambewela Dairy Farms', '1738828523.jpg', 'High-quality fresh milk from Ambewela Dairy Farms, rich in nutrients and free from preservatives. Perfect for drinking, tea, coffee, and cooking.', '500', '550', '50', '525', '25'),
(46, 'P-00042', 'Sunlight (Lemon)', 'Household', '110g', '98', 'Unilever Sri Lanka', '1738829088.jpg', 'A powerful lemon-scented detergent soap that removes tough stains while keeping clothes fresh and bright. Ideal for handwashing and gentle on fabrics.', '130', '150', '20', '140', '10'),
(47, 'P-00043', 'Tomato', 'Vegetables', '500g', '100', 'Local Farmers', '1741411593.jpg', 'Tomatoes are juicy and sweet, full of antioxidants, and may help fight several diseases. They are especially high in lycopene, a plant compound linked to improved heart health, cancer prevention, and protection against sunburns.', '110', '135', '25', '125', '15'),
(48, 'P-00044', 'Premium Garlic', 'Vegetables', '250g', '150', 'Local Farmers', '1741417153.jpg', 'Fresh and aromatic premium garlic, ideal for seasoning, cooking, and boosting immunity with natural health benefits.', '230', '260', '30', '250', '20'),
(49, 'P-00045', 'Green Chillies', 'Vegetables', '100g', '200', 'Local Farmers', '1741417863.jpg', 'Fresh, spicy green chillies perfect for curries, stir-fries, and enhancing flavors in daily cooking.', '110', '129', '19', '120', '10'),
(50, 'P-00046', 'Raw Ginger', 'Vegetables', '150g', '180', 'Local Farmers', '1741418222.jpg', 'Fresh and aromatic raw ginger, perfect for teas, curries, and enhancing flavors in cooking with natural health benefits.', '240', '267', '27', '255', '15'),
(51, 'P-00047', 'Lime', 'Vegetables', '250g', '200', 'Local Farmers', '1741418420.jpg', 'Fresh, zesty limes perfect for juices, salads, and enhancing flavors in cooking and beverages.', '40', '53', '13', '48', '8'),
(52, 'P-00048', 'Capsicum', 'Vegetables', '250g', '149', 'Local Farmers', '1741418620.jpg', 'Fresh, crunchy capsicum perfect for stir-fries, salads, curries, and enhancing flavors in various dishes.', '210', '240', '30', '230', '20'),
(53, 'P-00049', 'Red Onion', 'Vegetables', '250g', '180', 'Local Farmers', '1741419257.jpg', 'Fresh, high-quality red onions, perfect for salads, curries, and daily cooking needs with a rich, bold flavor.', '100', '118', '18', '110', '10'),
(54, 'P-00050', 'Cabbage', 'Vegetables', '500g', '160', 'Local Farmers', '1741419491.jpg', 'Fresh, crisp cabbage, perfect for salads, stir-fries, and curries, packed with essential nutrients and fiber.', '230', '260', '30', '250', '20'),
(55, 'P-00051', 'Leeks', 'Vegetables', '250g', '170', 'Local Farmers', '1741425580.jpg', 'Fresh, flavorful leeks perfect for soups, stir-fries, and curries, adding a mild onion-like taste to dishes.', '60', '73', '13', '68', '8'),
(56, 'P-00052', 'Sweet Potatoes', 'Vegetables', '500g', '150', 'Local Farmers', '1741425718.jpg', 'Fresh, nutritious sweet potatoes, rich in fiber and vitamins, perfect for roasting, boiling, and healthy meals.', '90', '111', '21', '100', '10'),
(57, 'P-00053', 'Cauliflower', 'Vegetables', '300g', '139', 'Local Farmers', '1741426484.jpg', 'Fresh, crunchy cauliflower, perfect for stir-fries, curries, and healthy meals, packed with fiber and essential nutrients.', '240', '267', '27', '255', '15'),
(58, 'P-00054', 'Bitter Gourd', 'Vegetables', '250g', '130', 'Local Farmers', '1741426684.jpg', 'Fresh, nutrient-rich bitter gourd, perfect for curries, stir-fries, and healthy meals with numerous medicinal benefits.', '130', '150', '20', '140', '10'),
(59, 'P-00055', 'Broccoli', 'Vegetables', '300g', '0', 'Local Farmers', '1741427010.jpg', 'Fresh, nutrient-rich broccoli, perfect for steaming, stir-fries, and salads, packed with fiber, vitamins, and antioxidants.', '1300', '1395', '95', '1350', '50'),
(60, 'P-00056', 'Cucumber', 'Vegetables', '400g', '180', 'Local Farmers', '1741427583.jpg', 'Fresh, hydrating cucumbers, perfect for salads, juices, and refreshing snacks, rich in vitamins and antioxidants.', '45', '60', '15', '55', '10'),
(61, 'P-00057', 'Ladies Fingers', 'Vegetables', '250g', '160', 'Local Farmers', '1741427944.jpg', 'Okra is a nutritious food with many health benefits. It’s rich in magnesium, folate, fiber, antioxidants, and vitamin C, K1, and A. Okra may benefit pregnant women, heart health, and blood sugar control.', '55', '68', '13', '63', '8'),
(62, 'P-00058', 'Thalana Batu', 'Vegetables', '250g', '140', 'Local Farmers', '1741428178.jpg', ' Fresh and tender Thalana Batu, perfect for curries and stir-fries, offering a delicious taste and nutritional benefits.', '35', '45', '10', '40', '5'),
(63, 'P-00059', 'Snake Gourd', 'Vegetables', '500g', '149', 'Local Farmers', '1741428332.jpg', 'Fresh, tender snake gourd, ideal for stir-fries and curries, packed with fiber, vitamins, and health benefits.', '75', '90', '15', '85', '10'),
(64, 'P-00060', 'Raw Peanuts', 'Vegetables', '250g', '50', 'Local Farmers', '1741428513.jpg', 'Fresh, high-quality raw peanuts, perfect for roasting, snacking, and cooking, rich in protein and healthy fats.', '350', '380', '30', '370', '20'),
(65, 'P-00061', 'Imported Mandarin', 'Fruits', '600g', '100', 'Imported Suppliers', '1741767008.jpg', 'Fresh, juicy imported mandarins with a sweet citrus flavor, perfect for snacking and juicing, rich in vitamin C.', '820', '864', '44', '850', '30'),
(66, 'P-00062', 'T. J. C. Mango', 'Fruits', '1kg', '90', 'Local Farmers', '1741767307.jpg', 'Sweet, juicy T. J. C. mangoes with a rich aroma, perfect for fresh eating, smoothies, and desserts.', '1130', '1190', '60', '1170', '40'),
(67, 'P-00063', 'Chinese Fuji Apple', 'Fruits', '600g', '120', 'Imported Suppliers', '1741768754.jpg', 'Crisp and sweet Chinese Fuji apples, perfect for snacking, salads, and desserts, rich in fiber and antioxidants.', '1030', '1080', '50', '1060', '30'),
(68, 'P-00064', 'Imported Orange', 'Fruits', '600g', '110', 'Imported Suppliers', '1741768932.jpg', 'Juicy, sweet imported oranges, rich in vitamin C, perfect for fresh snacking, juices, and desserts.', '1030', '1080', '50', '1060', '30'),
(69, 'P-00065', 'Imported Pomegranate', 'Fruits', '500g', '100', 'Imported Suppliers', '1741769085.jpg', 'Fresh, juicy imported pomegranates, packed with antioxidants, perfect for snacking, juicing, and healthy recipes.', '1470', '1530', '60', '1500', '30'),
(70, 'P-00066', 'Sugar Plantain', 'Fruits', '1kg', '150', 'Local Farmers', '1741769249.jpg', 'Sweet, nutritious sugar plantains, perfect for frying, boiling, or making delicious traditional dishes.', '120', '138', '18', '130', '10'),
(71, 'P-00067', 'Green Apple', 'Fruits', '700g', '110', 'Imported Suppliers', '1741850061.jpg', 'Crisp, tangy green apples, rich in fiber and antioxidants, perfect for snacking, salads, and baking.', '1600', '1652', '52', '1630', '30'),
(72, 'P-00068', 'Royal Gala Apple', 'Fruits', '700g', '120', 'Imported Suppliers', '1741850251.jpg', 'Sweet, juicy Royal Gala apples with a crisp texture, perfect for snacking, salads, and desserts.', '770', '806', '36', '790', '20'),
(74, 'P-00069', 'Papaw - Tainung', 'Fruits', '1.20kg', '130', 'Local Farmers', '1741851462.jpg', ' Sweet and juicy Tainung papaw, rich in vitamins and fiber, perfect for fresh consumption, smoothies, and desserts.', '450', '476', '26', '460', '10'),
(75, 'P-00070', 'Kolikuttu', 'Fruits', '2kg', '140', 'Local Farmers', '1741851913.jpg', 'Sweet and creamy Kolikuttu bananas, perfect for desserts, snacks, and smoothies, packed with essential nutrients.', '630', '664', '34', '650', '20'),
(76, 'P-00071', 'King Coconut', 'Fruits', '1 piece', '150', 'Local Farmers', '1741852730.jpg', 'Fresh, hydrating King Coconut, rich in electrolytes and nutrients, perfect for refreshing drinks and healthy hydration.', '220', '240', '20', '230', '10'),
(77, 'P-00072', 'Cavendish Banana', 'Fruits', '1kg', '160', 'Local Farmers', '1741852864.jpg', 'Sweet and creamy Cavendish bananas, perfect for snacking, smoothies, and desserts, rich in potassium and vitamins.', '430', '462', '32', '450', '20'),
(78, 'P-00073', 'Sour Plantain Full Hand', 'Fruits', '1.20kg', '140', 'Local Farmers', '1741853014.jpg', 'Fresh and tangy sour plantains, ideal for frying, boiling, or adding a unique flavor to traditional dishes.', '190', '214', '24', '200', '10'),
(79, 'P-00074', 'Imported Green Grapes', 'Fruits', '500g', '99', 'Imported Suppliers', '1741937810.jpg', 'Fresh, juicy imported green grapes, perfect for snacking, salads, and desserts, rich in vitamins and antioxidants.', '1100', '1145', '45', '1125', '25'),
(80, 'P-00075', 'Ambun Large', 'Fruits', '1kg', '150', 'Local Farmers', '1741938864.jpg', 'Sweet and nutritious Ambun bananas, perfect for snacking, smoothies, and desserts, rich in vitamins and potassium.', '420', '450', '30', '435', '15'),
(81, 'P-00076', 'Kiwi Fruit', 'Fruits', '500g', '100', 'Imported Suppliers', '1741939283.jpg', 'Fresh, tangy kiwi fruits, rich in vitamin C and antioxidants, perfect for salads, smoothies, and desserts.', '1400', '1460', '60', '1440', '40'),
(82, 'P-00077', 'Narang Large', 'Fruits', '250g', '120', 'Local Farmers', '1741939590.jpg', 'Juicy and flavorful local mandarins, rich in vitamin C, perfect for snacking and fresh juices.', '240', '260', '20', '250', '10'),
(83, 'P-00078', 'Nelli', 'Fruits', '200g', '130', 'Local Farmers', '1741940052.jpg', 'Fresh and tangy Nelli, packed with antioxidants and vitamin C, ideal for boosting immunity and enhancing health.', '100', '111', '11', '105', '5'),
(84, 'P-00079', 'USA Red Apple', 'Fruits', '700g', '109', 'Imported Suppliers', '1741940228.jpg', 'Sweet and crisp USA Red Apples, rich in fiber and antioxidants, perfect for snacking and baking.', '1300', '1351', '51', '1330', '30'),
(85, 'P-00080', 'Ambul Dodan', 'Fruits', '500g', '120', 'Local Farmers', '1741940619.jpg', 'Tangy and flavorful sour oranges, perfect for juices, cooking, and adding zest to dishes.', '180', '197', '17', '190', '10'),
(86, 'P-00081', '7 Up', 'Beverages', '1.5L', '199', 'Beverage Distributor', '1742303939.jpg', 'Refreshing lemon-lime flavored soft drink, perfect for any occasion, best served chilled.', '280', '300', '20', '290', '10'),
(87, 'P-00082', 'Milo RTD Multi Pack', 'Beverages', '180ml x 6 packs', '150', 'Beverage Distributor', '1742304308.jpg', 'Nutritious malted chocolate-flavored milk, rich in energy and essential vitamins, perfect for active lifestyles.', '650', '680', '30', '665.50', '15'),
(88, 'P-00083', 'Ride Classic Energy Drink', 'Beverages', '250ml', '180', 'Beverage Distributor', '1742306672.jpg', 'Refreshing and energizing drink with essential vitamins and caffeine, perfect for boosting energy and focus.', '260', '280', '20', '270', '10'),
(89, 'P-00084', 'Kist Absolute Orange Juice', 'Beverages', '1L', '120', 'Beverage Distributor', '1742306815.jpg', 'Fresh and tangy 100% orange juice, rich in vitamin C, perfect for a refreshing and healthy drink.', '1300', '1350', '50', '1330', '30'),
(90, 'P-00085', 'Sunquick Mandarin Cordial', 'Beverages', '700ml', '100', 'Beverage Distributor', '1742307587.jpg', 'Refreshing and concentrated mandarin-flavored cordial, rich in vitamin C, perfect for making delicious fruit drinks.', '1070', '1114', '44', '1095', '25'),
(91, 'P-00086', 'Mountain Dew', 'Beverages', '1.5L', '200', 'Beverage Distributor', '1742307813.jpg', 'Bold and refreshing citrus-flavored soft drink, perfect for energizing and quenching thirst. Best served chilled.', '300', '320', '20', '310', '10'),
(92, 'P-00087', 'Mirinda (Soft Drink)', 'Beverages', '1.5L', '180', 'Beverage Distributor', '1742307951.jpg', 'Fizzy and refreshing orange-flavored soft drink, perfect for any occasion. Best enjoyed chilled.', '300', '320', '20', '310', '10'),
(93, 'P-00088', 'MD Mango Cordial', 'Beverages', '400ml', '149', 'Beverage Distributor', '1742308066.jpg', 'Rich and flavorful mango cordial, perfect for making refreshing fruit drinks and cocktails. Best served chilled.\r\n', '530', '552', '22', '545', '15'),
(94, 'P-00089', 'MD Passion Fruit Cordial', 'Beverages', '750ml', '120', 'Beverage Distributor', '1742308237.jpg', ' Delicious and tangy passion fruit cordial, perfect for making refreshing drinks and cocktails. Best served chilled.', '1320', '1360', '40', '1340', '20'),
(95, 'P-00090', 'Aquafina Drinking Water', 'Beverages', '1L', '250', 'Beverage Distributor', '1742308459.jpg', 'Pure and refreshing bottled drinking water, ideal for staying hydrated anytime, anywhere.\r\n\r\n', '85', '91', '6', '88', '3'),
(96, 'P-00091', 'Motha Rose Faluda Mix', 'Beverages', '200g', '149', 'Beverage Distributor', '1742308676.jpg', 'Sweet and aromatic rose-flavored faluda mix, perfect for making traditional faluda drinks, enjoyed with ice cream or fruits.', '220', '242', '22', '230', '10'),
(97, 'P-00092', 'Kist Absolute Apple Juice', 'Beverages', '1L', '100', 'Beverage Distributor', '1742309353.jpg', 'Fresh and pure 100% apple juice, rich in vitamins, perfect for a refreshing drink any time of the day.', '790', '825', '35', '810', '20'),
(98, 'P-00093', 'Elephant House Ginger Beer', 'Beverages', '1.5L', '180', 'Beverage Distributor', '1742309739.jpg', 'Zesty and refreshing ginger beer, perfect for quenching thirst or adding a spicy kick to your beverages.', '300', '320', '20', '310', '10'),
(99, 'P-00094', 'Anchor Basmati Rice', 'Grocery', '5kg', '150', 'Grain Distributor', '1742311136.jpg', 'Premium quality basmati rice, long-grain, aromatic, perfect for biryanis, pilafs, and everyday meals.', '5400', '5580', '180', '5500', '100'),
(100, 'P-00095', 'Sunbul Basmati Rice', 'Grocery', '5kg', '160', 'Grain Distributor', '1742311577.jpg', 'High-quality long-grain basmati rice, fragrant and perfect for cooking biryanis, pilafs, and traditional dishes.', '5300', '5500', '200', '5400', '100'),
(101, 'P-00096', 'White Samba Kekulu Rice', 'Grocery', '1kg', '200', 'Local Rice Supplier', '1742311741.jpg', 'Fragrant and nutritious white samba rice, ideal for everyday meals and traditional Sri Lankan dishes.', '220', '240', '20', '230', '10'),
(102, 'P-00097', 'Red Raw Rice', 'Grocery', '1kg', '180', 'Local Rice Supplier', '1742312192.jpg', 'Nutritious and high-fiber red raw rice, perfect for healthy meals and traditional Sri Lankan cuisine.', '200', '220', '20', '210', '10'),
(103, 'P-00098', 'Munchee Cream Cracker', 'Grocery', '490g', '200', 'Biscuit Manufacturer', '1742312516.jpg', 'Delicious and crispy cream crackers, perfect for snacking or pairing with tea and other treats.', '340', '360', '20', '350', '10'),
(104, 'P-00099', 'Ritzbury Chocolate Fingers', 'Grocery', '200g', '149', 'Chocolate Manufacturer', '1742312643.jpg', 'Crispy, crunchy biscuit fingers covered in rich, smooth chocolate, perfect for satisfying your sweet cravings.', '340', '360', '20', '350', '10'),
(105, 'P-00100', 'Munchee Rollz Chocolate', 'Grocery', '100g', '180', 'Biscuit Manufacturer', '1742312764.jpg', 'Tasty and crunchy chocolate-filled snacks, perfect for a quick treat or indulgent snack time.', '230', '255', '25', '240', '10'),
(106, 'P-00101', 'Munchee Nice Biscuits', 'Grocery', '400g', '200', 'Biscuit Manufacturer', '1742313050.jpg', 'Light and crispy biscuits with a delightful, slightly sweet flavor, perfect for tea time or snacking.', '300', '322', '22', '310', '10'),
(107, 'P-00102', 'Little Lion Chocolate Roll', 'Grocery', '200g', '150', 'Snack Manufacturer', '1742313564.jpg', 'Soft and fluffy Swiss roll filled with rich, creamy chocolate, perfect for a delicious snack or dessert.', '450', '468', '18', '460', '10'),
(108, 'P-00103', 'Knorr Seasoning Cubes', 'Grocery', '280g', '120', 'Food Supplier', '1742313953.jpg', 'Flavorful seasoning cubes that enhance the taste of soups, stews, and rice dishes with rich, savory flavor.', '1100', '1155', '55', '1120', '20'),
(109, 'P-00104', 'Turkey Sunflower Oil', 'Grocery', '1L', '180', 'Oil Supplier', '1742314071.jpg', 'High-quality sunflower oil, ideal for cooking, frying, and baking, providing a light flavor and healthy fats.', '1400', '1455', '55', '1425', '25'),
(110, 'P-00105', 'Flora Toilet Rolls', 'Household', '10 pcs', '120', 'Household Supplier', '1742314906.jpg', 'Soft and durable toilet rolls, perfect for daily use, offering comfort and reliability in every sheet.', '2250', '2362', '112', '2300', '50'),
(111, 'P-00106', 'Comfort Fabric Conditioner', 'Household', '860ml', '149', 'Household Supplier', '1742315361.jpg', 'Refreshing fabric conditioner with a long-lasting fragrance, softening clothes and providing a fresh, clean feel.', '800', '825', '25', '810', '10'),
(112, 'P-00107', 'Flora Paper Serviettes 1Ply', 'Household', '100 pcs', '200', 'Household Supplier', '1742318546.jpg', 'Soft and absorbent 1-ply paper serviettes, perfect for meals, events, and daily use to maintain cleanliness.', '290', '316', '26', '300', '10'),
(113, 'P-00108', 'Harpic Power Plus Cleaner', 'Household', '750ml', '180', 'Cleaning Products Supplier', '1742318791.jpg', 'Powerful toilet cleaner with 5X action, eliminates tough stains, odors, and provides long-lasting freshness.', '480', '506', '26', '495', '15'),
(114, 'P-00109', 'Bio Clean Toilet Cleaner ', 'Household', '500ml', '150', 'Cleaning Products Supplier', '1742318918.jpg', 'Eco-friendly toilet cleaner with a floral fragrance, effectively removes stains and ensures a clean, fresh bathroom.', '300', '328', '28', '310', '10'),
(115, 'P-00110', 'Bubble Washing Powder', 'Household', '1kg', '200', 'Detergent Supplier', '1742319078.jpg', 'Gentle yet powerful washing powder with aloe vera, designed to clean clothes effectively while being soft on fabrics.', '390', '416', '26', '405', '15'),
(116, 'P-00111', 'Dettol Anti Bacterial Surface', 'Household', '500ml', '180', 'Cleaning Products Supplier', '1742319244.jpg', 'Powerful antibacterial disinfectant spray that kills germs and provides a fresh, hygienic clean for surfaces.', '480', '506', '26', '495', '15'),
(117, 'P-00112', 'Lysol Citrus Surface Cleaner', 'Household', '950ml', '150', 'Cleaning Products Supplier', '1742319420.jpg', 'Fresh citrus-scented surface cleaner that effectively disinfects and removes dirt, leaving surfaces clean and hygienic.', '540', '562', '22', '550', '10'),
(118, 'P-00113', 'Kingdo Rose & Lime Soap', 'Household', '110g', '200', 'Soap Manufacturer', '1742319839.jpg', 'Rose and lime scented soap that cleanses and refreshes, leaving skin soft, smooth, and subtly fragrant.', '85', '99', '14', '90', '5'),
(119, 'P-00114', 'Ninja Re-Fill Vaporizer', 'Household', '1 pc', '150', 'Household Supplier', '1742320051.jpg', 'Long-lasting vaporizer refill providing up to 30 nights of mosquito protection with a pleasant, calming fragrance.', '300', '318', '18', '310', '10'),
(120, 'P-00115', 'DIMO 12W Screw LED Bulb', 'Household', '1 pc', '99', 'Lighting Supplier', '1742320240.jpg', 'Energy-efficient 12W LED bulb providing bright, daylight illumination, designed for long-lasting performance and reduced energy consumption.', '850', '900', '50', '875', '25'),
(121, 'P-00116', 'Amritha Jasmine Joss Sticks', 'Household', '20 pcs', '250', ' Fragrance Supplier', '1742320383.jpg', 'Fragrant jasmine incense sticks that create a soothing atmosphere, perfect for meditation, relaxation, and enhancing your home environment.', '110', '127', '17', '120', '10'),
(122, 'P-00117', 'SunligSunlight Detergent Powder', 'Household', '1kg', '150', 'Detergent Supplier', '1742320740.jpg', 'Jasmine-scented detergent powder that cleans clothes effectively, leaving them fresh, bright, and pleasantly fragrant.', '350', '380', '30', '360', '10'),
(123, 'P-00118', 'Dash Tile Cleaner', 'Household', '500ml', '120', 'Cleaning Products Supplier', '1742320895.jpg', 'Powerful tile cleaner that removes tough stains, grime, and dirt, leaving tiles sparkling clean and refreshed.', '310', '340', '30', '325', '15');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` int(11) NOT NULL,
  `promo_id` varchar(100) NOT NULL,
  `promo_title` varchar(250) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `promo_id`, `promo_title`, `description`, `image`) VALUES
(3, 'O-00001', 'Black Friday', 'Enjoy up to 50% off on select items during our Black Friday! Get Ready.', '1738041920.jpeg'),
(5, 'O-00002', 'Summer Sale', 'Enjoy up to 50% off on select items during our Summer Sale!', '1738042999.png'),
(6, 'O-00003', 'Winter Sale', 'Enjoy up to 50% off on select items during our Winter Sale!', '1738043088.jpeg'),
(7, 'O-00004', 'Weekend Specials', 'Get 30% Off for all products when shopping during weekend until 31/01/2025.', '1738049070.webp'),
(8, 'O-00005', 'Free Delivery Threshold', 'Free Delivery! When you buy more than LKR 3000 products.', '1738049176.webp'),
(9, 'O-00006', 'Bundle Offers', 'Exclusive offer! Buy 3 Beverage products, Get 20% Off. Hurry Up! This offer is valid until 04/02/2025.', '1738049303.webp');

-- --------------------------------------------------------

--
-- Table structure for table `repayments`
--

CREATE TABLE `repayments` (
  `id` int(11) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repayments`
--

INSERT INTO `repayments` (`id`, `nic`, `date`, `amount`) VALUES
(1, '200202902160', '2025-02-08', 1000.00),
(2, '200202902180', '2025-02-08', 500.00),
(3, '200202902100', '2025-02-08', 400.00);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `review_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `rating` int(10) NOT NULL,
  `feedback` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `review_id`, `name`, `occupation`, `rating`, `feedback`, `status`, `image`) VALUES
(7, 'R-0001', 'Kasun Lakmal', 'Project Manager', 4, 'The shop has a great variety of products, excellent customer service, and fast delivery. Highly recommended for online shopping!', 'Rejected', 'profile_default.jpg'),
(10, 'R-0002', 'Jane Smith', 'Software Engineer', 4, 'The shop has a great variety of products, excellent customer service, and fast delivery. Highly recommended for online shopping!', 'Accepted', '1737815928.jpg'),
(11, 'R-0003', 'Jacob Oram', 'Civil Engineer', 5, 'I appreciate the friendly staff and the organized store layout. Prices are fair, and I’ll definitely shop here again.', 'Accepted', '1737815991.jpg'),
(12, 'R-0004', 'Micheal Clark', 'Doctor', 3, 'Delivery was quick, and the product quality exceeded my expectations. The online system is user-friendly and hassle-free.', 'Accepted', '1737816071.jpg'),
(13, 'R-0005', 'Harry Fernando', 'Businessman', 5, 'Great in-store experience! Staff were helpful, and checkout was quick. I found everything I needed without any issues.', 'Accepted', '1737816128.jpg'),
(14, 'R-0006', 'Ann Steven', 'Teacher', 5, 'The inventory is well-stocked, and customer support was responsive. Online orders are processed efficiently, and tracking was accurate.', 'Accepted', '1737816172.jpg'),
(19, 'R-0007', 'Ashen Gimhana', 'DevOps Engineer', 5, 'Great selection of fresh products at affordable prices. Friendly staff and excellent service. Highly recommend for all grocery needs!', 'Accepted', '1737829230.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `wholesale_customers`
--

CREATE TABLE `wholesale_customers` (
  `name` varchar(100) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wholesale_customers`
--

INSERT INTO `wholesale_customers` (`name`, `nic`, `phone`, `email`) VALUES
('Kasuni Madeesha', '200202902000', '0702650000', 'kasuni@gmail.com'),
('Ashen Gimhana', '200202902100', '0702658456', 'ashengimhana@gmail.com'),
('Disura Sandaruwan', '200202902160', '0702658840', 'disurasandaruwan0@gmail.com'),
('Pesara Priyanwith', '200202902168', '0782058840', 'pesarapriyanwith0@gmail.com'),
('Chathu', '200202902180', '0702658789', 'chathu@gmail.com'),
('Kavishi Ranasinghe', '200202904815', '0702684521', 'kavishi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_number`),
  ADD UNIQUE KEY `bill_number` (`bill_number`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lendings`
--
ALTER TABLE `lendings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lendings_ibfk_1` (`nic`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repayments`
--
ALTER TABLE `repayments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `repayments_ibfk_1` (`nic`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wholesale_customers`
--
ALTER TABLE `wholesale_customers`
  ADD PRIMARY KEY (`nic`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `lendings`
--
ALTER TABLE `lendings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `repayments`
--
ALTER TABLE `repayments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `wholesale_customers` (`nic`);

--
-- Constraints for table `lendings`
--
ALTER TABLE `lendings`
  ADD CONSTRAINT `lendings_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `wholesale_customers` (`nic`);

--
-- Constraints for table `repayments`
--
ALTER TABLE `repayments`
  ADD CONSTRAINT `repayments_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `wholesale_customers` (`nic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
