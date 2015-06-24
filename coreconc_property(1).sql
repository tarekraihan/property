-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 06:23 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coreconc_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_profile`
--

CREATE TABLE IF NOT EXISTS `customer_profile` (
`customer_id` int(10) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `area_code` int(3) NOT NULL,
  `phone_start` int(3) NOT NULL,
  `phone_end` int(4) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer_profile`
--

INSERT INTO `customer_profile` (`customer_id`, `email_address`, `first_name`, `last_name`, `zip_code`, `area_code`, `phone_start`, `phone_end`, `password`) VALUES
(1, 'tarekraihan@yahoo.com', 'Tarek', 'Raihan', '12341', 222, 333, 4444, 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'tarekraihan@yahoo.comm', 'Faysal', 'Hasan', '33983993', 222, 444, 6567, '074fd28eff0f5ad'),
(3, 'ShahW@yahoo.com', 'Riage', 'Shah', '33983993', 344, 543, 6789, '96e79218965eb72c92a549dd5a330112'),
(4, 'shah_riaz007@yahoo.com', 'shah', 'riaz', '1212', 123, 123, 1234, 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'rahatbappa@gmail.com', 'rahat', 'bappa', '1212', 123, 123, 1234, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_area`
--

CREATE TABLE IF NOT EXISTS `tbl_area` (
`area_id` int(3) NOT NULL,
  `area_name` varchar(30) NOT NULL,
  `state_id` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tbl_area`
--

INSERT INTO `tbl_area` (`area_id`, `area_name`, `state_id`) VALUES
(1, 'Ahuntsic-Cartierville', 1),
(2, 'Anjou', 1),
(3, 'Côte-des-Neiges-Notre-Dame-de-', 1),
(4, 'Lachine', 1),
(5, 'LaSalle', 1),
(6, 'Le Plateau-Mont-Royal', 1),
(7, 'The Southwest', 1),
(8, 'L''Île-Bizard-Sainte-Geneviève', 1),
(9, 'Mercier-Hochelaga-Maisonneuve', 1),
(10, 'Montreal Nord', 1),
(11, 'Outremont', 1),
(12, 'Pierrefonds-Roxboro', 1),
(13, 'Rivière-des-Prairies-Pointe-au', 1),
(14, 'Rosemont-La Petite-Patrie', 1),
(15, 'VilleSt.laurent', 1),
(16, 'Saint-Léonard', 1),
(17, 'Verdun', 1),
(18, 'Ville-Marie / Centre ville', 1),
(19, 'Villeray-Saint-Michel-Parc-Ext', 1),
(20, 'West Island', 1),
(21, 'Longueuil', 2),
(22, 'Saint-Jean-sur-Richelieu', 2),
(23, 'Brossard', 2),
(24, 'Granby', 2),
(25, 'Saint-Hyacinthe', 2),
(26, 'Châteauguay', 2),
(27, 'Boucherville', 2),
(28, 'Salaberry-de-Valleyfield', 2),
(29, 'Beloeil', 2),
(30, 'Mont-Saint-Hilaire', 2),
(31, 'Others', 2),
(32, 'Auteuil', 3),
(33, 'Chomedey', 3),
(34, 'Duvernay', 3),
(35, 'Fabreville', 3),
(36, 'Îles-Laval', 3),
(37, 'Laval-des-Rapides', 3),
(38, 'Laval-sur-le-Lac', 3),
(39, 'Laval-Ouest', 3),
(40, 'Pont-Viau', 3),
(41, 'Sainte-Rose', 3),
(42, 'Sainte-Dorothée', 3),
(43, 'Saint-François', 3),
(44, 'Saint-Vincent-de-Paul et', 3),
(45, 'Autres / montreal north / lava', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
`country_id` int(3) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(1, 'Quebec');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE IF NOT EXISTS `tbl_property` (
`property_id` int(10) NOT NULL,
  `area_id` int(3) NOT NULL,
  `property_owner_id` int(10) NOT NULL,
  `sign` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `property_address` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `property_type_id` int(1) NOT NULL,
  `property_use_id` int(1) NOT NULL,
  `annual_tax` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exterior` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `floring` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `leavels` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `foundation` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `heatmethod` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `heat_source` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `garage` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `water_source` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `interior` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bedroom_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bathroom_no` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `feature_post` int(2) NOT NULL,
  `image_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`property_id`, `area_id`, `property_owner_id`, `sign`, `property_address`, `description`, `property_type_id`, `property_use_id`, `annual_tax`, `age`, `exterior`, `floring`, `leavels`, `foundation`, `heatmethod`, `heat_source`, `garage`, `water_source`, `interior`, `price`, `bedroom_no`, `bathroom_no`, `feature_post`, `image_name`) VALUES
(2, 45, 5, '#123288', '36 Nightingale Crescent Elmira, ON', 'The maintenance free exterior is a brick / vinyl combination. The driveway accommodates 4 vehicles. The lovely front garden accentuates the home''s curb appeal. The fully fenced, private, pool-sized backyard with mature trees has an expansive deck with lower level patio with adjacent hot tub. The yard backs on a tranquil babbling brook! \r\n\r\nRecent Upgrades:\r\n* Built-in Dishwasher (2014)\r\n* Insulated Garage Door (2014)\r\n* Roof (2013)', 13, 4, '567', '40 years old', 'Wood', 'Hardwood', '1', 'Stone', 'Baseboard', 'Electricity, Wood', 'Multi-Vehicle', 'Well', 'Formal Dining', '464900', '7', '3', 1, '1.jpg'),
(3, 44, 4, '#987908', '6497 Roszell Rd Puslinch, ON', 'This custom designed home at the edge of Cambridge was built in 2003. A loft bungalow floor plan with 4,529 sq feet of finished space. \r\n\r\nThe main floor has a large entry way the leads into the great room with a ceiling that rises to 17 feet. The great room is flows into the over-sized kitchen with a breakfast bar and eat in dining area. The elevated southern view from the great room and kitchen provide a panoramic view of the back yard, in-ground pool, gardens, surrounding forest and mill pond. \r\n\r\nThe home has living space on 3 levels with 2,100 sq feet on the main level, 980 sq. feet on the second floor and another 1,500 sq. feet on the lower level.', 13, 4, '2200', '10 years old', 'Wood', 'Hardwood', '2', 'Stone', 'Baseboard', 'Electricity, Wood', 'Multi-Vehicle', 'Well', 'Formal Dining', '1150000', '6', '4', 1, '11.jpg'),
(4, 45, 2, '#836278', '12 Butler Ave Cambridge, ON', 'There are only a few times you can say "Custom One of a Kind Home". This is one of them. From the custom designed bungaloft to the 100 feet of waterfront property to the unique cottage like community with easy access to KW, Cambridge and Guelph as well as minutes from the 401 for the commuters.\r\n\r\nLocated on a private road on the north side of Puslinch Lake this 2600+ square foot bungaloft is the ideal property for someone looking to downsize from their large family home and live life on one level. With the multi-use loft space and a finished basement walkout with 2 additional bedrooms it provides additional opportunity for families or even an in-law suite in the basement.', 12, 4, '3463', '2 years', 'Brick', 'Hardwood', '1', 'Stone', 'Baseboard', 'Electricity, Wood', 'Single-Vehicle', 'Well', 'Formal Dining', '829900', '6', '4', 1, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_type`
--

CREATE TABLE IF NOT EXISTS `tbl_property_type` (
`property_type_id` int(2) NOT NULL,
  `property_type_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_property_type`
--

INSERT INTO `tbl_property_type` (`property_type_id`, `property_type_name`) VALUES
(3, 'All Types'),
(4, 'Business'),
(5, 'Commercial Property'),
(6, 'Condominium'),
(7, 'Cottage'),
(8, 'Single Family Home'),
(9, 'Farm or Acreage with dwelling'),
(10, 'Land or Acreage no dwelling'),
(11, 'Rent to Own'),
(12, 'Semi-Detached House'),
(13, 'Townhouse');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_used`
--

CREATE TABLE IF NOT EXISTS `tbl_property_used` (
`property_used_id` int(2) NOT NULL,
  `property_used_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_property_used`
--

INSERT INTO `tbl_property_used` (`property_used_id`, `property_used_name`) VALUES
(1, 'Residential'),
(2, 'Recreational'),
(3, 'Commercial'),
(4, 'Agricultural');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE IF NOT EXISTS `tbl_states` (
`states_id` int(3) NOT NULL,
  `state_name` varchar(30) NOT NULL,
  `country_id` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`states_id`, `state_name`, `country_id`) VALUES
(1, 'Montreal Island', 1),
(2, 'Montreal south / Monterigie', 1),
(3, 'Montreal Rive Nord / Laval', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(2) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_role_id` int(1) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `email_address`, `first_name`, `last_name`, `user_role_id`, `password`) VALUES
(1, 'tarekraihan@yahoo.com', 'Tarek', 'Raihan', 1, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_profile`
--
ALTER TABLE `customer_profile`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_area`
--
ALTER TABLE `tbl_area`
 ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
 ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
 ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
 ADD PRIMARY KEY (`property_type_id`);

--
-- Indexes for table `tbl_property_used`
--
ALTER TABLE `tbl_property_used`
 ADD PRIMARY KEY (`property_used_id`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
 ADD PRIMARY KEY (`states_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_profile`
--
ALTER TABLE `customer_profile`
MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_area`
--
ALTER TABLE `tbl_area`
MODIFY `area_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
MODIFY `country_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_property_type`
--
ALTER TABLE `tbl_property_type`
MODIFY `property_type_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_property_used`
--
ALTER TABLE `tbl_property_used`
MODIFY `property_used_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
MODIFY `states_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
