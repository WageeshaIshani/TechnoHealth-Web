-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 02:30 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`, `product_qty`, `category_id`) VALUES
(1, 'PD001', 'Electric Wheel Chair', 'Powder coating steel frame.\r\nRubber foam castor and drive wheel.', 'electricWlChr.jpg', '250000.00', 5, 1),
(2, 'PD002', 'Commode Wheel Chair', 'Foldable chromed steel frame.\r\nsoft commode seat.\r\nfixed arm rest and foot.', 'cmdWlChr.jpg', '20000.50', 5, 1),
(3, 'PD003', 'Walking stick', 'Two fold.\r\nAvailable with chrome plated and powder coated.', 'walkingStick.jpg', '2700.00', 5, 1),
(4, 'PD004', 'Walking stick with stool', 'Plastic seat fix on walking stick.\r\nFoldable.\r\nWeightless aluminum frame.', 'walkingStickNStool.jpg', '2700.00', 4, 1),
(5, 'PD005', 'Under Arm crutches', 'Aluminum Underarm Crutches are a "rock steady" walking support, designed to reduce walking loads during recovery.', 'UACrutches.jpg', '4000.00', 4, 1),
(6, 'PD006', 'Elbow crutches(open type)', 'Forearm open type crutches are a durable and strong walking support to reduce walking loads during recovery.', 'elbowCrutches.jpg', '2700.00', 5, 1),
(7, 'PD007', 'Moving walker with wheel', 'This walker folds flat for easy transport and each leg is adjustable in height.', 'movingWalker.jpg', '7900.00', 4, 1),
(8, 'PD008', 'Quad Cane', 'Weight less chromed stick.\r\nHeight adjustable.', 'quadCane.jpg', '3000.00', 5, 1),
(9, 'PD009', '2 in 1 SilkY Smooth Shampoo', 'Specially imported shampoo from India. Available for limited season. Recommended for curly hair.', 'shampoo.jpg', '650.00', 4, 4),
(10, 'PD010', 'Clean & Clear face cleanser', 'Face cleanser specially designed for teens'' skin. Imported from India.', 'cleanser.jpg', '400.00', 2, 4),
(11, 'PD011', 'Dove original deodrant', 'Available in vanilla, mint smells. Imported from italy. ', 'deodrant.jpg', '450.00', 4, 4),
(12, 'PD012', 'Barefoot towel pack Price ', 'Blue color cotton towel pack. Made in Sri Lanka.', 'towel.jpg', '2000.00', 5, 4),
(13, 'PD013', 'Crest Toothpaste - Mint', 'Toothpaste imported from Pakistan. With mint flavour.', 'toothpaste.jpg', '150.00', 5, 4),
(14, 'PD014', 'Deto instant hand sanitizer', 'Zero germs with one wipe. 100% results. Specially from India.', 'sanitizer.jpg', '250.00', 5, 4),
(15, 'PD015', 'PiyoPiyo baby nail cutter', 'Nail cutter speially designed for babies.', 'cutter.jpg', '150.00', 5, 4),
(16, 'PD016', 'Palmolive natural soap', 'Soap for oily skin made from fresh olives from Italy.', 'soap.jpg', '150.00', 5, 4),
(17, 'PD017', 'Ammonia Inhalants', 'Smelling salts, also known as ammonia inhalants, spirit of hartshorn or sal volatile, are chemical compounds used for arousing consciousness', 'Amo.jpg', '2200.00', 5, 2),
(18, 'PD018', 'Redux Electrolyte Creme', ' A cosmetic quality, pleasing to patients,\r\nbacteriostatic,highly conductive electrode cream. Not recoended for defibrillation', 'reduc.jpg', '133.00', 4, 2),
(19, 'PD019', 'Dynarex A and D Ointment', 'A Skin Protectant. Specially used as a Diaper Rash Ointment.', 'oil.jpg', '48.00', 5, 2),
(20, 'PD020', 'NovoPen 4 Insulin Pen, Blue', 'Reuseable Insulin Pen for use with Novo Nordisk 3ml Penfill cartridges.\r\nNovoPen 4 Insulin Pen, Blue\r\nSleek, blue, reuseable insulin pen.\r\nFor use with Novo Nordisk 3ml Penfill insulin cartridges and Screw on pen needles.\r\nAllows 1-unit dose adjustment', 'insulin.jpg', '400.99', 5, 2),
(21, 'PD021', 'GlucoTabs Raspberry x 50 Tablets', 'Glucose Tabs are designed for energy management, containing 4g of measured fast acting glucose per tablet. Air tight spiral shock absorber lids with silica balls help keep the tablets fresh and robust packaging protects the tablets from breaking.', 'glucos.jpg', '4.00', 5, 2),
(22, 'PD022', 'Diabetone Tablets x 30', 'Diabetone Tablets x 30 are a nutritional supplement ideally for people with diabetes. Diabetone has been specially formulated with 21 nutrients to help ensure you recieve your daily requirements. Daily requirements of the correct nutrients is particularly', 'tab.jpg', '10.00', 5, 2),
(23, 'PD023', 'Lestrin tablets', 'Taking the contraceptive pill usually results in lighter, less painful and more regular menstrual bleeding.', 'lest.jpg', '14.00', 5, 2),
(24, 'PD024', 'Needle Bay 2 (2 x Needlebay daily modules)', 'NeedleBay allows you to simplify your daily routine by preparing your needles and medication up to 7 days in advance with daily Needlebay modules. A stylish case provides convenient storage for up to seven modules. Each module provides storage for two nee', 'needle.png', '12.95', 5, 2),
(25, 'PD025', 'Oh Yeah! One Bar..Almond Bliss', 'Save:28% OFF..', 'protein_bar.gif', '25.00', 5, 3),
(26, 'PD026', 'Combat Protein..Chocolate Milk', 'Save:37% OFF', 'mussle.gif', '49.99', 5, 3),
(27, 'PD027', 'Superfood Protein', 'Pure Vanilla..570 Grams. Save:16% OFF', 'veg.gif', '49.99', 4, 3),
(28, 'PD028', 'Skin Rejuvenator with Verisol', '270 Tablets. 40% OFF', 'skin.gif', '29.99', 5, 3),
(29, 'PD029', 'NestlÃ© NAN PRO 1 Infant Formula', '(Upto 6 Months) 400g', 'nan.jpg', '490.00', 5, 3),
(30, 'PD030', 'Wow Apple Cider Vinegar', '750 ml (Pack of 1)', 'juice.jpg', '4097.00', 4, 3),
(31, 'PD031', 'Organic India The Tulsi Green Tea', '100 g', 'tea.jpg', '200.00', 5, 3),
(32, 'PD032', 'NestlÃ© CERELAC Infant Cereal ', 'Stage-1 (6 Months-24 Months) Wheat Apple 300g', 'cerelac.jpg', '170.00', 5, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
