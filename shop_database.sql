-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 01:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(10) NOT NULL,
  `code` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name_db` varchar(100) NOT NULL,
  `items_name` varchar(100) NOT NULL,
  `items_gen` varchar(100) NOT NULL,
  `items_link` varchar(100) NOT NULL,
  `items_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name_db`, `items_name`, `items_gen`, `items_link`, `items_img`) VALUES
(1, 'หลวงพ่อรวย ปาสาทิโก รุ่น เลื่อนสมณศักดิ์', 'หลวงพ่อรวย ปาสาทิโก', 'เลื่อนสมณศักดิ์', 'a01.php', 'a01.png'),
(2, 'หลวงพ่อคูณ ปริสุทโธ รุ่น สร้างบารมี', 'หลวงพ่อคูณ ปริสุทโธ', 'สร้างบารมี', 'a02.php', 'a02.png'),
(3, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาจัมโบ้ 2', 'หลวงปู่โต๊ะ อินทสุวัณโณ', 'ปิดตาจัมโบ้ 2', 'a03.php', 'a03.png'),
(4, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น แรก', 'หลวงพ่อพัฒน์ ปุญญกาโม', 'แรก', 'a04.php', 'a04.png'),
(5, 'หลวงพ่อคูณ ปริสุทโธ รุ่น นั่งพานชนะมาร', 'หลวงพ่อคูณ ปริสุทโธ', 'นั่งพานชนะมาร', 'a05.php', 'a05.png'),
(6, 'หลวงพ่อคูณ ปริสุทโธ รุ่น พิเศษ', 'หลวงพ่อคูณ ปริสุทโธ', 'พิเศษ', 'a06.php', 'a06.png'),
(7, 'หลวงพ่อคูณ ปริสุทโธ รุ่น เจริญพรบน', 'หลวงพ่อคูณ ปริสุทโธ', 'เจริญพรบน', 'a07.php', 'a07.png'),
(8, 'หลวงพ่อคูณ ปริสุทโธ รุ่น เพชรน้ำเอก', 'หลวงพ่อคูณ ปริสุทโธ', 'เพชรน้ำเอก', 'a08.php', 'a08.png'),
(9, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'หลวงพ่อวัดไร่ขิง', 'ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'a09.php', 'a09.png'),
(10, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'หลวงพ่อวัดไร่ขิง', 'ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'a10.php', 'a10.png'),
(11, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'หลวงพ่อวัดไร่ขิง', 'ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'a11.php', 'a11.png'),
(12, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'หลวงพ่อวัดไร่ขิง', 'ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 'a12.php', 'a12.png'),
(13, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตากนกข้าง', 'หลวงปู่โต๊ะ อินทสุวัณโณ', 'ปิดตากนกข้าง', 'a13.php', 'a13.png'),
(14, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาหลังเต่า', 'หลวงปู่โต๊ะ อินทสุวัณโณ', 'ปิดตาหลังเต่า', 'a14.php', 'a14.png'),
(15, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาปลดหนี้หลังยันต์ตรี', 'หลวงปู่โต๊ะ อินทสุวัณโณ', 'ปิดตาปลดหนี้หลังยันต์ตรี', 'a15.php', 'a15.png'),
(16, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาหลังยันต์นะทะนะ', 'หลวงปู่โต๊ะ อินทสุวัณโณ', 'ปิดตาหลังยันต์นะทะนะ', 'a16.php', 'a16.png'),
(17, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น คงกระพัน100ปี', 'หลวงพ่อพัฒน์ ปุญญกาโม', 'คงกระพัน100ปี', 'b01.php', 'b01.png'),
(18, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น ปิดตาทันใจ168', 'หลวงพ่อพัฒน์ ปุญญกาโม', 'ปิดตาทันใจ168', 'b02.php', 'b02.png'),
(19, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น เศรษฐีรวยสมปรารถนา', 'หลวงพ่อพัฒน์ ปุญญกาโม', 'เศรษฐีรวยสมปรารถนา', 'b03.php', 'b03.png'),
(20, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น มงคล100ปี', 'หลวงพ่อพัฒน์ ปุญญกาโม', 'มงคล100ปี', 'b04.php', 'b04.png'),
(21, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น บุญอีสาน', 'ท้าวเวสุวรรณวัดจุฬามณี', 'บุญอีสาน', 'b05.php', 'b05.png'),
(22, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น รับขวัญศิษย์', 'ท้าวเวสุวรรณวัดจุฬามณี', 'รับขวัญศิษย์', 'b06.php', 'b06.png'),
(23, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น องค์บูชาปี60', 'ท้าวเวสุวรรณวัดจุฬามณี', 'องค์บูชาปี60', 'b07.php', 'b07.png'),
(24, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น องค์บูชาหน้าเทพปี61', 'ท้าวเวสุวรรณวัดจุฬามณี', 'องค์บูชาหน้าเทพปี61', 'b08.php', 'b08.png'),
(25, 'หลวงปู่แผ้ว ปวโร รุ่น ปลอดภัย', 'หลวงปู่แผ้ว ปวโร', 'ปลอดภัย', 'ิb09.php', 'b09.png'),
(26, 'หลวงปู่แผ้ว ปวโร รุ่น เจริญพรล่าง', 'หลวงปู่แผ้ว ปวโร', 'เจริญพรล่าง', 'b10.php', 'b10.png'),
(27, 'หลวงพ่อทองอยู่ รุ่น หลังเสือ', 'หลวงพ่อทองอยู่', 'หลังเสือ', 'b11.php', 'b11.png'),
(28, 'หลวงพ่อทองอยู่ รุ่น ก้าวหน้าหลังเสือ', 'หลวงพ่อทองอยู่', 'ก้าวหน้าหลังเสือ', 'b12.php', 'b12.png'),
(29, 'หลวงปู่หลิว ปณุณโก รุ่น ปลดหนี้', 'หลวงปู่หลิว ปณุณโก', 'ปลดหนี้', 'c01.php', 'c01.png'),
(30, 'หลวงปู่หลิว ปณุณโก รุ่น สุขใจ', 'หลวงปู่หลิว ปณุณโก', 'สุขใจ', 'c02.php', 'c02.png'),
(31, 'หลวงปู่หลิว ปณุณโก รุ่น พระบูชาปี39', 'หลวงปู่หลิว ปณุณโก', 'พระบูชาปี39', 'c03.php', 'c03.png'),
(32, 'หลวงปู่หลิว ปณุณโก รุ่น รวมพุทธคุณ', 'หลวงปู่หลิว ปณุณโก', 'รวมพุทธคุณ', 'c04.php', 'c04.png'),
(33, 'หลวงพ่อรวย ปาสาทิโก รุ่น 2 รวย', 'หลวงพ่อรวย ปาสาทิโก', '2 รวย', 'c05.php', 'c05.png'),
(34, 'หลวงปู่หวล ภูริภทุโท รุ่น อายุวัฒนมงคล 92 ปี', 'หลวงปู่หวล ภูริภทุโท', 'อายุวัฒนมงคล 92 ปี', 'c06.php', 'c06.png'),
(35, 'หลวงพ่อรวย ปาสาทิโก รุ่น อายุยืน', 'หลวงพ่อรวย ปาสาทิโก', 'อายุยืน', 'c07.php', 'c07.png'),
(36, 'หลวงพ่อรวย ปาสาทิโก รุ่น เจริญพร', 'หลวงพ่อรวย ปาสาทิโก', 'เจริญพร', 'c08.php', 'c08.png'),
(37, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น ชนะจน 99', 'หลวงพ่อพัฒน์ ปุญญกาโม', 'ชนะจน 99', 'c09.php', 'c09.png'),
(38, 'หลวงพ่ออิฐ ภทุทจาโร รุ่น หมื่นยันต์', 'หลวงพ่ออิฐ ภทุทจาโร', 'หมื่นยันต์', 'c10.php', 'c11.png'),
(39, 'หลวงพ่อเฉลิม ผละปญุโญ รุ่น ชนะจน', 'หลวงพ่อเฉลิม ผละปญุโญ', 'ชนะจน', 'c11.php', 'c11.png'),
(40, 'หลวงพ่อเฉลิม ผละปญุโญ รุ่น ชนะจน', 'หลวงพ่อเฉลิม ผละปญุโญ', 'ชนะจน', 'c12.php', 'c12.png'),
(41, 'หลวงพ่อรวย ปาสาทิโก รุ่น รวยเจริญไพศาล', 'หลวงพ่อรวย ปาสาทิโก', 'รวยเจริญไพศาล', 'd01.php', 'd01.png'),
(42, 'หลวงพ่อคูณ ปริสุทโธ รุ่น พระปิดตา ปริสุทโธ', 'หลวงพ่อคูณ ปริสุทโธ', 'พระปิดตา ปริสุทโธ', 'd02.php', 'd02.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_name` varchar(100) NOT NULL,
  `order_email` varchar(100) NOT NULL,
  `order_phone` varchar(20) NOT NULL,
  `order_address` text NOT NULL,
  `total` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_name`, `order_email`, `order_phone`, `order_address`, `total`, `cust_name`) VALUES
(1, '2022-01-12 11:14:43', 'worawut yachaiya', 'worawutavc@gmail.com', '0927255199', '32 หมู่ 11 ฟหกฟหกฟไำกฟกฟหกฟ', 20000, 'getcrunner');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `detail_id` int(11) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`detail_id`, `order_id`, `product_id`, `qty`, `total`) VALUES
(1, 1, 6, 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`) VALUES
(1, 'หลวงพ่อรวย ปาสาทิโก รุ่น เลื่อนสมณศักดิ์', 300000),
(2, 'หลวงพ่อคูณ ปริสุทโธ รุ่น สร้างบารมี', 200000),
(3, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาจัมโบ้ 2', 70000),
(4, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น แรก', 10000),
(5, 'หลวงพ่อคูณ ปริสุทโธ รุ่น นั่งพานชนะมาร', 10000),
(6, 'หลวงพ่อคูณ ปริสุทโธ รุ่น พิเศษ', 20000),
(7, 'หลวงพ่อคูณ ปริสุทโธ รุ่น เจริญพรบน', 8000),
(8, 'หลวงพ่อคูณ ปริสุทโธ รุ่น เพชรน้ำเอก', 800),
(9, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 250),
(10, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 250),
(11, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 1500),
(12, 'หลวงพ่อวัดไร่ขิง รุ่น ลาภผลพูนทวี รุ่งเรืองร่ำรวย', 3000),
(13, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตากนกข้าง', 38000),
(14, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาหลังเต่า', 80000),
(15, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาปลดหนี้หลังยันต์ตรี', 85000),
(16, 'หลวงปู่โต๊ะ อินทสุวัณโณ รุ่น ปิดตาหลังยันต์นะทะนะ', 70000),
(17, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น คงกระพัน100ปี', 200),
(18, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น ปิดตาทันใจ168', 300),
(19, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น ปิดตาทันใจ168', 150),
(20, 'หลวงพ่อพัฒน์ ปุญญกาโม รุ่น มงคล100ปี', 300),
(21, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น บุญอีสาน', 400),
(22, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น รับขวัญศิษย์', 250),
(23, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น องค์บูชา ปี 2560', 1500),
(24, 'ท้าวเวสุวรรณวัดจุฬามณี รุ่น องค์บูชาหน้าเทพ ปี 2561', 1500),
(25, 'หลวงปู่แผ้ว รุ่น ปลอดภัย ปี 2557', 1800),
(26, 'หลวงปู่แผ้ว รุ่น เจริญพรล่าง ปี 2564', 1500),
(27, 'หลวงพ่อทองอยู่ รุ่น หลังเสือ ปี 2519', 2100),
(28, 'หลวงพ่อทองอยู่ รุ่น ก้าวหน้าหลังเสือ ปี 2526', 250),
(29, 'หลวงปู่หลิว ปณุณโก รุ่น ปลดหนี้ ปี 2536', 3000),
(30, 'หลวงปู่หลิว ปณุณโก รุ่น สุขใจ ปี 2537', 7000),
(31, 'หลวงปู่หลิว ปณุณโก รุ่น พระบูชา ปี 2539', 2500),
(32, 'หลวงปู่หลิว ปณุณโก รุ่น รวมพุทธคุณ ปี 2538', 12000),
(33, 'หลวงพ่อรวย ปาสาทิโก รุ่น 2 รวย ปี 2554', 4000),
(34, 'หลวงปู่หวล ภูริภทุโท รุ่น อายุวัฒนมงคล 92ปี ปี 2564', 500),
(35, 'หลวงพ่อรวย ปาสาทิโก รุ่น อายุยืน ปี 2555', 1500),
(36, 'หลวงพ่อรวย ปาสาทิโก รุ่น เจริยญพร ปี 2554', 5000),
(37, 'หลวงพ่อพัฒน์ รุ่น ชนะจน 99 ปี 2562', 1200),
(38, 'หลวงพ่ออิฐ ภทุทจาโร รุ่น หมื่นยันต์ ปี 2561', 2000),
(39, 'หลวงพ่อเฉลิม ผละปญุโญ รุ่น ชนะจน ปี 2563', 450),
(40, 'หลวงพ่อเฉลิม ผละปญุโญ รุ่น ชนะจน ปี 2563', 450),
(41, 'หลวงพ่อรวย รุ่น รวยเจริญไพศาล ปี 2559', 8000),
(42, 'หลวงพ่อคูณ รุ่น พระปิดตา ปริสุทโธ ปี 2536หลวงพ่อคูณ รุ่น พระปิดตา ปริสุทโธ ปี 2536', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(5, 'g', 'getcrunner@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d'),
(6, 'getcrunner', 'kuyfirst@kuy.com', 'b2f5ff47436671b6e533d8dc3614845d'),
(7, 'first', 'joke@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d'),
(8, 'bomngo', 'bom@g.com', '92eb5ffee6ae2fec3ad71c777531578f'),
(9, 'test', 'test@gmail.g', 'b2f5ff47436671b6e533d8dc3614845d'),
(10, 'f', 'first@f.com', '8fa14cdd754f91cc6554c9e71929cce7'),
(11, 'aphinya', 'aphinya@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d'),
(12, 'admin', 'admin@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
