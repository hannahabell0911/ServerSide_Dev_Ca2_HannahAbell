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
   `fashionDescription`varchar(300) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `fashion` (`fashionID`, `fashionCode`, `fashionName`, `fashionPrice`,`fashionDate`,`fashionDescription`) VALUES
(1, 'G', 'Guicci Saddle Bag', '699.00','2021/3/1', 'Nicely shaped with three zips and outside pockets'),
(2, 'LV', 'Louis Vuitton Backpack', '1199.00','2022/10/1','Black with three inside pockets and leather interior'),
(3, 'P', 'Prada Mini', '2517.00','2019/19/1','Very small with no pockets meant for small items');



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

