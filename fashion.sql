-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2023 at 02:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `fashion`
--


DROP TABLE IF EXISTS `fashion`;
CREATE TABLE `fashion` (
  `fashionID` int(11) NOT NULL,
  `fashionCode` varchar(10) NOT NULL,
  `fashionName` varchar(255) NOT NULL,
  `fashionPrice` decimal(10,2) NOT NULL,
  `fashionDate` date NOT NULL,
  `fashionDescription` varchar(300) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `fashion`
--

INSERT INTO `fashion` (`fashionID`, `fashionCode`, `fashionName`, `fashionPrice`, `fashionDate`, `fashionDescription`, `image_url`) VALUES
(1, 'D', 'Dior Saddle Bag', '3250.00', '2021-03-01', 'Gallianos design features kidney-shaped curves, and a short detachable strap that was designed to be worn tight under the arm, embellished with horse bit-style CD buckles. The front flap fastens with velcro, and inside you will find a fabric lining.', 'https://i.ibb.co/8PsxcCX/1666251931-M0455-CTZQ-M928-E01-GH.jpg'),
(2, 'MJ', 'Marc Jacobs Tote', '450.00', '2022-10-01', 'The tote bag is made from a new plush towelling effect fabric, which is soft to touch and ultra-feminine. The range includes black and white combinations and also some bright colours perfect for summer, the baby pink and sunshine yellow are team favourites.', 'https://i.ibb.co/q9VDR59/med-black-f.jpg'),
(3, 'P', 'Prada Mini', '2517.00', '2019-01-19', 'Outstanding quality, unique designs made from soft, high-quality leather and tough durable synthetics.', 'https://i.ibb.co/JywL5T7/1-BP020-2-EVU-F0002-V-N2-O-SLF.jpg');
(3, 'B', 'Birkin Bag', '201029.00', '2015-10-29', 'Named after Jane Birkin, this bag has been coveted since its inception in 1984. The BBC revealed how it came to be: "Its existence was a happy accident, borne out of an exchange between Birkin and former Hermès chief executive Jean-Louis Dumas on an Air France flight from Paris to London in the early 80s," the BBC wrote. ', 'https://i.ibb.co/3mN0fy2/birkin.webp');
(3, 'C', 'Chanel Quilted Flap', '5000', '2020-06-22', 'Nothing says luxury like a Chanel bag. The quilted flap designs have been an integral part of the brands history since Coco Chanel herself designed this bag in 1955.', 'https://i.ibb.co/QkSzSJp/chanel.jpg');
(3, 'A', 'Mulberry Alexa', '1450.00', '2016-05-29', 'Having launched at the very start of the 2010s, Mulberrys Alexa bag—which was, of course, named after Alexa Chung—became an instant It bag. If you didnt have one, you wanted one. ', 'https://i.ibb.co/qpdDG0V/alexa.jpg');
(3, 'G', 'Gucci Jackie', '2257.00', '2010-01-09', 'A handbag roundup is not complete without mentioning Gucci, and the brands Jackie bag has become a classic. If you recognise the name, then its probably because, technically, this bag isnt new. ', 'https://i.ibb.co/TRmvfCW/jackie.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fashion`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`fashionID`),
  ADD UNIQUE KEY `fashionCode` (`fashionCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fashion`
--
ALTER TABLE `fashion`
  MODIFY `fashionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
