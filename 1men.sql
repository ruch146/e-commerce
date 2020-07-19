-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 12:35 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

CREATE TABLE `men` (
  `id` int(11) NOT NULL,
  `pbrand` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` double NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pgender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`id`, `pbrand`, `pname`, `pprice`, `pimage`, `pgender`) VALUES
(1, 'GAP', 'Men\'s Navy Pattern Oxford Shirt in Stretch', 2499, 'imag/a.jpg', 'M'),
(2, 'Adidas', 'Men White Shower Striped Sliders', 2499, 'imag/c.jpg', 'M'),
(3, 'Adidas', 'Men White Printed Linear T-shirt', 1299, 'imag/b.jpg', 'M'),
(4, 'GAP', 'Men\'s Black Denim Western Shirt.', 2999, 'imag/d.jpg', 'M'),
(5, 'Roadster', 'Time Travlr Men Black Skinny Fit Jeans', 1259, 'imag/e.jpg', 'M'),
(6, 'HIGHLANDER', 'Men Blue Slim Fit Clean Look Jeans', 679, 'imag/f.jpg', 'M'),
(7, 'United Colors of Benetton', 'Men Black & White Printed Sliders', 1499, 'imag/week..jpg', 'M'),
(8, 'RED TAPE', 'Men Blue Running Shoes', 1498, 'imag/rt.jpg', 'M'),
(9, 'HIGHLANDER', 'Men Black Solid Slim Fit Solid Casual Shirt', 549, 'imag/hil.jpg', 'M'),
(10, 'WROGN', 'Men Black Slim Fit Printed Casual Shirt', 1549, 'imag/wr.jpg', 'M'),
(11, 'United Colors of Benetton', 'Men Navy Blue Slim Fit Casual Shirt', 2049, 'imag/ucb.jpg', 'M'),
(12, 'Tommy Hilfiger', 'Men White Slim Fit Solid Casual Shirt', 3999, 'imag/th.jpg', 'M'),
(13, 'Louis Philippe Sport', 'Men Olive Green Casual Shirt', 1299, 'imag/lp.jpg', 'M'),
(14, 'CELIO', 'Men Grey & White Casual Shirt', 1259, 'imag/celio.jpg', 'M'),
(15, 'John Players', 'Men Navy Slim Fit Low-Rise Clean Jeans', 899, 'imag/jp.jpg', 'M'),
(16, 'United Colors of Benetton', 'Men Coral Pink Solid Round Neck T-shirt', 499, 'imag/4.jpg', 'M'),
(17, 'Arrow Sport', 'Men Khaki Chrysler Regular Chinos', 1119, 'imag/chi.jpg', 'M'),
(18, 'United Colors of Benetton', 'Men Pink Slim Fit Casual Shirt', 1349, 'imag/cel.jpg', 'M'),
(19, 'Zotw', 'Men Black Solid Straight Kurta', 999, 'imag/26.jpg', 'M'),
(20, 'See Designs', 'Men Maroon Solid A-Line Kurta', 1299, 'imag/25.jpg', 'M'),
(21, 'Celio', 'Men Beige Solid Shorts', 999, 'imag/23.jpg', 'M'),
(22, 'U.S. Polo Assn.', 'Black Faux Leather Jacket', 3749, 'imag/22.jpg', 'M'),
(23, 'John Players', 'Men Brown Solid Bomber Jacket', 2399, 'imag/21.jpg', 'M'),
(24, 'Arrow Sport', 'Men Green Slim Fit Casual Shirt', 1569, 'imag/20.jpg', 'M'),
(25, 'United Colors Of Benetton', 'Men White & Blue Striped T-shirt', 2199, 'imag/19.jpg', 'M'),
(26, 'INVICTUS', 'Red & Navy Checked Formal Shirt', 1599, 'imag/26.jpg', 'M'),
(27, 'GAP', 'Men\'s White Long T-shirt', 1199, 'imag/270.jpg', 'M'),
(28, 'Indian Terrain', 'Men Beige Chiseled Shirt', 1999, 'imag/28.jpg', 'M'),
(29, 'EV1 from Ellen DeGeneres', 'Women\'s Ombre Heart Baseball Tee', 1000, 'imag/w1.png', 'F'),
(30, 'Clementine Apparel', 'Women\'s Flowy Short Sleeve Circle Top', 1500, 'imag/w2.jpeg', 'F'),
(31, 'veromoda', 'Metronaut Women\'s Gathered Dark Blue Dress', 1200, 'imag/w3.jpeg', 'F'),
(32, 'FabAlley ', ' Women\'s A-line Black Dress', 715, 'imag/w5.jpeg', 'F'),
(33, 'Tokyo Talkies', 'Women\'s Shirt Multicolor Dress', 749, 'imag/w4.jpeg', 'F'),
(34, 'Cation', 'Women\'s Maxi Multicolor Dress', 945, 'imag/w6.jpeg', 'F'),
(35, 'FabAlley', ' Women\'s Shift Blue Dress', 1440, 'imag/w7.jpeg', 'F'),
(39, 'Pluss', 'Women A-line Multicolor Dress', 799, 'imag/w11.jpeg', 'F'),
(41, 'Mango', 'Women Shorts', 600, 'imag/w8.jpeg', 'F'),
(42, 'Sassafras ', 'Women Fit and Flare Pink Dress', 1139, 'imag/w9.jpeg', 'F'),
(43, ' Levi\'s  ', ' Women\'s Black Jeans', 1514, 'imag/w12.jpeg', 'F'),
(44, 'Newport ', 'Newport Skinny Women Blue Jeans', 1400, 'imag/w13.jpeg', 'F'),
(45, 'Mango', 'Crease & Clips Skinny Women Light Blue Jeans', 1200, 'imag/w14.jpeg', 'F'),
(46, 'People', 'Skinny Women Blue Jeans', 880, 'imag/w15.jpeg', 'F'),
(47, 'Levi\'s ', 'Slim Women Light Blue Jeans', 1549, 'imag/w16.jpeg', 'F'),
(48, 'United Colors of Benetton ', 'Regular Women\'s Blue Jeans', 1640, 'imag/w17.jpeg', 'F'),
(49, 'Levis', 'Jogger Fit Women\'s Light Blue Jeans', 1514, 'imag/w18.jpeg', 'F'),
(50, 'Numero Uno \r\n', 'Full Sleeve Solid Women Jacket\r\n', 1024, 'imag/w19.jpeg', 'F'),
(51, 'Vero Moda Full', ' Full Sleeve Embroidered Women\'s Biker jacket Jacket', 999, 'imag/w20.jpeg', 'F'),
(52, 'NorthmanPlus', 'Full Sleeve Solid Women Jacket', 10051, 'imag/w21.jpeg', 'F'),
(53, 'Flying Machine ', ' Full Sleeve Solid Women\'s Jacket', 1540, 'imag/w22.jpeg', 'F'),
(54, 'Forever 21 ', ' Full Sleeve Solid Women\'s Jacket', 2099, 'imag/w23.jpeg', 'F'),
(55, 'Girls Shopping', 'Full Sleeve Self Design Women Denim Jacket', 1425, 'imag/w24.jpeg', 'F'),
(56, 'Oxolloxo ', '3/4th Sleeve Solid Women Jacket', 312, 'imag/w25.jpeg', 'F'),
(57, 'JustVH ', 'Women\'s Solid Henley V-Neck Casual Blouse Pleated Button Tunic Shirt Top', 1500, 'imag/w26.jpeg', 'F'),
(58, 'Just My Size', 'Women\'s plus-size french terry pocket capri', 660, 'imag/w27.jpeg', 'F'),
(59, 'ZANZEA', 'Women Solid Color Long SleeveButtons V-Neck Loose Top Blouse Casual', 1000, 'imag/w28.jpeg', 'F'),
(60, 'STARVNC', 'STARVNC Women Long Sleeve Floral Print Chiffon Blouse', 1320, 'imag/w29.jpeg', 'F'),
(61, 'Nlife', ' Women V Neck Liberty Print Pleated T Shirt', 2500, 'imag/w30.jpeg', 'F'),
(62, 'Hanes', '\r\nSport Women\'s Mesh Shorts', 599, 'imag/w31.jpeg', 'F'),
(63, 'Hanes\r\n', '\r\nSport Women\'s Heathered Performance V-Neck Tee\r\n', 300, 'imag/w32.jpeg', 'F'),
(64, '\r\nNlife ', '\r\n Women\'s Floral Print Crew Neck Tank Top', 700, 'imag/w33.jpeg', 'F'),
(65, 'Wonder Nation\r\n', '\r\nGirls\' Tribal Embroidered Ruffle Tiered Dress', 400, 'imag/g1.jpeg', 'fs'),
(66, 'Lots of Love by Speechless', '\r\nPatchwork Chiffon Dress and Fur Vest, 2-Piece Set with Necklace (Big Girls)', 550, 'imag/g2.jpeg', 'fs'),
(67, 'Limited Too\r\n', '\r\nEmbellished Chenille Sweater With Beanie, 2-Piece (Little Girls & Big Girls', 800, 'imag/g3.jpeg', 'fs'),
(68, 'AMY BYER\r\n', '\r\nPopover Dress with Necklace (Big Girls)', 900, 'imag/g4.jpeg', 'fs'),
(69, '365 Kids From Garanimals\r\nP', '\r\nGirls\' Long Sleeve Graphic Tee & Knit Denim Jeggings, 2pc Outfit Set', 1200, 'imag/g5.jpeg', 'fs'),
(70, 'Wonder Nation', ' Embellished Animal Long Sleeve Ruffle Hem T-Shirt\r\n', 450, 'imag/g6.jpeg', 'fs'),
(71, 'ONE STEP UP\r\n', ' Applique Cold Shoulder Tunic and Leggings, 2-Piece Outfit Set\r\n', 1100, 'imag/g7.jpeg', 'fs'),
(72, '365 Kids From Garanimals\r\n', '\r\nGirls\' Long Sleeve Graphic Tee & All Over Print Leggings, 2pc Outfit Set', 599, 'imag/g8.jpeg', 'fs'),
(73, 'Kacakid\r\nP', ' Baby Girls 2pcs T-shirt Tops+ Shorts Outfits Clothes Sets 2-7Y\r\n', 990, 'imag/g9.jpeg', 'fs'),
(74, 'Child of Mine by Carter\'', '\r\nLong Sleeve Fleece Owl Top & Leggings, 2-Piece Outfit Set (Toddler Girls)\r\n', 1119, 'imag/g10.jpeg', 'fs'),
(75, 'Child of Mine by Carter\'s', '\r\nLong Sleeve Fleece Top & Leggings, 2-Piece Outfit Set (Toddler Girls)', 1200, 'imag/g11.jpeg', 'fs'),
(76, 'Child of Mine by Carter\'s\r\n', '\r\nLong Sleeve Ruffle Fleece Top & Leggings, 2-Piece Outfit Set (Toddler Girls)', 1000, 'imag/g12.jpeg', 'fs'),
(77, 'Wonder Nation ', '\r\nLong Sleeve Raglan 3D Graphic Tunic & Leggings, 2-Piece Outfit Set ', 1220, 'imag/g13.jpeg', 'fs'),
(78, 'Wonder Nation\r\n', '\r\nEssential Pull-On Jegging (Little Girls & Big Girls)', 880, 'imag/g14.jpeg', 'fs'),
(79, 'Btween\r\nP\r\n', '\r\nGirls\' Ombre Sequin Hearts Tee And Tutu Skirt 2-Piece Outfit Set\r\n', 800, 'imag/g15.jpeg', 'fs'),
(80, 'Awkward Styles\r\n\r\n', 'France Flag Youth Shirt Flag of France French Youth French Kids Shirt Kids France Soccer Tshirt Soccer Gifts for Boys France Shirt for Girls French Soccer 2018 Tshirt France Gifts\r\n', 250, 'imag/b1.jpeg', 'ms'),
(81, 'Wonder Nation', '\r\nBoys Long Sleeve Flannel Shirt', 350, 'imag/b2.jpeg', 'ms'),
(82, 'Awkward Styles\r\nP', '\r\nAwkward Styles Love Autism Puzzle Raglan Shirt Love Puzzle Jersey Shirt for Kid', 550, 'imag/b3.jpeg', 'ms'),
(83, '365 Kids From Garanimals\r\n', '\r\nLong Sleeve Hangdown Graphic T-Shirt & Long Sleeve Solid Raglan T-Shirt, 2-pack (Little Boys & Big Boys)\r\n', 600, 'imag/b4.jpeg', 'ms'),
(84, '365 Printing\r\n', 'Their Prince Kid Baseball Tee For Boys Black Sleeve Raglan For Boys\r\n', 500, 'imag/b5.jpeg', 'ms'),
(85, 'Child of Mine by Carter\'s\r\n ', '\r\nHooded Long Sleeve T-Shirt & Jogger ', 999, 'imag/b6.jpeg', 'ms'),
(86, 'Teenage Mutant Ninja Turtles\r\n', '\r\nInto Fitness Boys Graphic Tee\r\n', 700, 'imag/b7.jpeg', 'ms'),
(87, 'No Retreat\r\n', '\r\nBoys\' Long Sleeve Double Stripe Henley T-Shirt', 400, 'imag/b8.jpeg', 'ms'),
(88, '\r\nShort Sleeve Two Color Marled Jersey Henley Tee With Front Pocke', '\r\nShort Sleeve Two Color Marled Jersey Henley Tee With Front Pocket', 889, 'imag/b9.jpeg', 'ms'),
(89, 'Garanimals\r\n', '\r\nLong Sleeve Henley Shirt & French Terry Jogger Pants,', 1200, 'imag/b10.jpeg', 'ms'),
(90, 'Oshkosh B\'gosh', ' Baby Boys\' Thermal Henley Tee', 750, 'imag/b11.jpeg', 'ms'),
(91, 'Wonder Natio', ' Long Sleeve Thermal Henley', 500, 'imag/b12.jpeg', 'ms'),
(92, 'Cherokee\r\n', '\r\nBoys\' Long Sleeve Solid And Graphic Thermal Tee, 2 Pack', 600, 'imag/b13.jpeg', 'ms'),
(93, 'Athletic Works', '\r\nBoys Long Sleeve Raglan Graphic Tee Shirt', 350, 'imag/b14.jpeg', 'ms'),
(94, 'George', '\r\nBoys Packaged Dress Shirt-Tie', 550, 'imag/b15.jpeg', 'ms');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `men`
--
ALTER TABLE `men`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `men`
--
ALTER TABLE `men`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
