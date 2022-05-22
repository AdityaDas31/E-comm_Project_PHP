-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 09:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Girls Product', 1),
(2, 'Boys Product', 1),
(3, 'Babies Product', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mrp` float NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_desc` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(2000) NOT NULL,
  `meta_desc` varchar(2000) NOT NULL,
  `meta_keyword` varchar(2000) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `categories_id`, `name`, `mrp`, `price`, `qty`, `image`, `short_desc`, `description`, `meta_title`, `meta_desc`, `meta_keyword`, `status`) VALUES
(1, 2, 'Full Sleeve Solid Boys Casual Jacket', 400, 350, 10, '689252721_gallery-1A.jpg', 'Jacket', 'Give your winter wardrobe a style upgrade with the HRX Boys Active Jacket. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Jacket', 'Jacket', 'Jacket', 1),
(2, 2, 'Boys Graphic Print Hosiery TShirt', 425, 400, 10, '417562076_gallery-2B.jpg', 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Boys Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', 1),
(3, 2, 'New Gen-India Casual TShirt', 375, 350, 5, '591941084_gallery-4D.jpg', 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', 1),
(4, 2, 'Graphic Print Pure Cotton Yellow TShirt', 450, 400, 6, '845595782_gallery-5B.jpg', 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', 1),
(5, 2, 'Graphic Print Pure Cotton Green TShirt', 500, 450, 6, '561832256_gallery-5A.jpg', 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', 1),
(6, 2, 'Graphic Print Yellow TShirt', 415, 400, 10, '256378022_gallery-5D.jpg', 'Shirt', 'Give your summer wardrobe a style upgrade with the HRX Men\'s Active T\'Shirt. Team it with a pair of shorts for your morning workout or a denim for an evening out wioth the guys.', 'Shirt', 'Shirt', 'Shirt', 1),
(7, 1, 'Girls Long Skirt', 500, 450, 7, '318765813_Girl 1.jpg', 'Long Skirt', 'Girl\'s Classic Versatile Stretchy Skirt All Time Trendy Long Skirt Skater', 'Long Skirt', 'Long Skirt', 'Long Skirt', 1),
(8, 1, 'Girls Top Short', 475, 450, 4, '216658794_Girl 5.jpg', 'Skirt', 'Printed skirt, has a zip closure and slit on the back', 'Skirt', 'Skirt', 'Skirt', 1),
(9, 1, 'Girls Red Skirt', 500, 450, 5, '508615995_Girl 2.jpeg', 'Skirt', 'Burgundy solid accordion pleats woven flared  red skirt, has an elasticated waistband, flared hem', 'Skirt', 'Skirt', 'Skirt', 1),
(10, 1, 'Rainbow Skirt', 500, 500, 5, '149637547_Girl 4.jpg', 'Skirt', 'Rainbow printed flared skirt with pom-pom and tiered detail, has an elasticated waistband with drawstring closure, flared hem', 'Skirt', 'Skirt', 'Skirt', 1),
(11, 1, 'Girls Black Skirt', 375, 350, 10, '449992476_Girl 3.jpg', 'Skirt', 'Black solid pencil skirt, has an elasticated waistband, straight hem', 'Skirt', 'Skirt', 'Skirt', 1),
(12, 2, 'Boys Yellow Shirt Pant', 600, 500, 3, '241244209_img1.jpeg', 'TShirt', 'Yellow self-design T-shirt and has a polo collar and  a Pant', 'TShirt', 'TShirt', 'TShirt', 1),
(13, 2, 'Boys Red Kurta Pajama', 550, 500, 7, '319460977_img2.jpg', 'Kurta Pajama', 'Red printed kurta with dhoti pants', 'Kurta Pajama', 'Kurta Pajama', 'Kurta Pajama', 1),
(14, 2, 'Winter Jacket', 500, 500, 3, '860091744_exclusive.png', 'Jacket', 'Exclusive Green Jacket with zip', 'Jacket', 'Jacket', 'Jacket', 1),
(15, 1, 'Girls Yellow Short Skirt', 450, 400, 5, '567722764_img3.jpg', 'Skirt', 'Bring in the ethnic vibe with this tiered yellow skirt. Printed with floral motifs, it is easy to pair and flatters the waist with smocked detailing. Time to add a touch of style to your every spin.', 'Skirt', 'Skirt', 'Skirt', 1),
(16, 3, 'MammyPoko Pants Extra-L', 500, 500, 15, '396692613_buy-1.jpg', 'Dippers', 'Set of 2 Premium Wonder Pullups Diapers - Medium - 36 Pieces each', 'Dippers', 'Dippers', 'Dippers', 1),
(17, 3, 'HIMALAYA Happy Gift Pack', 675, 600, 10, '911623107_product-6.jpg', 'Gift Pack', 'Himalaya Babies necessary product gift pack, 100 ml each', 'Gift Pack', 'Gift Pack', 'Gift Pack', 1),
(18, 3, 'HIMALAYA Baby Lotion and Massage Oil', 425, 400, 7, '982799407_gallery-7B.jpg', 'Lotion', 'Himalaya babies Lotion and  Massage Oil 100 ml', 'Lotion', 'Lotion', 'Lotion', 1),
(19, 3, 'Cheesy Baby Sleeping Bed Combo', 650, 600, 8, '566945768_buy-3.jpg', 'Bed Combo', 'TC Multi Floral Polycotton net bed with Pillow Covers', 'Bed Combo', 'Bed Combo', 'Bed Combo', 1),
(20, 3, 'Fareto Cotton Bedding Set', 675, 600, 5, '306893207_gallery-11C.jpg', 'Bed Set', 'Set content: 2 bedsheet with 4 pillow covers, Quality: fine, Colour: blue , Pattern: graphic', 'Bed Set', 'Bed Set', 'Bed Set', 1),
(21, 3, 'YNA Baby Kick Play Gym Mosquito Net', 500, 450, 6, '664139462_gallery-10B.jpg', 'Mosquito Net', 'Babies Long-lasting superior quality zippers and double-stitched lining which stays like new even post washing Mosquito Net', 'mosquito net', 'mosquito net', 'mosquito net', 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Number` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `CPassword` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `FullName`, `UserName`, `Number`, `Email`, `Password`, `CPassword`) VALUES
(1, 'Kaustav Ghosh', 'kaustav123', 6289827302, 'kaustavghosh444@gmail.com', '$2y$10$vGjLaqltl4qPdP3FH0wTU.groI3tpfwKS.vqFZiT62BD6vrA1UxSq', '$2y$10$uolBkn4hIdIFElSvFvcA1e0n1o38ZlayIVBkz7.Vey8PaW9w2Xree');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
