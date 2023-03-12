--
-- Database: `guitar_shop`
--
CREATE DATABASE IF NOT EXISTS `Fashion` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Fashion`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `fashion`;
CREATE TABLE `fashion` (

  `fashionID` int(11) NOT NULL,
  `fashionCode` varchar(10) NOT NULL,
  `fashionName` varchar(255) NOT NULL,
  `fashionPrice` decimal(10,2) NOT NULL,
   `fashionDate` date NOT NULL,
   `fashionDescription`varchar(300) NOT NULL,
     `image_url` VARCHAR(255)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `fashion` (`fashionID`, `fashionCode`, `fashionName`, `fashionPrice`,`fashionDate`,`fashionDescription`,`image_url`) VALUES
(1, 'D', 'Dior Saddle Bag', '3250','2021/3/1', 'Gallianos design features kidney-shaped curves, and a short detachable strap that was designed to be worn tight under the arm, embellished with horse bit-style CD buckles. The front flap fastens with velcro, and inside you will find a fabric lining.','https://i.ibb.co/85ptkCM/saddle.jpg'),
(2, 'MJ', 'Marc Jacobs Tote', '450','2022/10/1','The tote bag is made from a new plush towelling effect fabric, which is soft to touch and ultra-feminine. The range includes black and white combinations and also some bright colours perfect for summer, the baby pink and sunshine yellow are team favourites.','https://i.ibb.co/dmLby0j'),
(3, 'P', 'Prada Mini', '2517','2019/19/1','outstanding quality, unique designs made from soft, high-quality leather and tough durable synthetics.','https://i.ibb.co/60rCnJy/SHANPRA219091-1-XL.jpg');



--
-- Indexes for table `products`
--
ALTER TABLE `fashion`
  ADD PRIMARY KEY (`fashionID`),
  ADD UNIQUE KEY `fashionCode` (`fashionCode`);

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `fashion`
  MODIFY `fashionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

