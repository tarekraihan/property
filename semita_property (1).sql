-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2015 at 06:54 AM
-- Server version: 5.5.41-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `semita_property`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_profile`
--

CREATE TABLE IF NOT EXISTS `customer_profile` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(50) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `area_code` int(3) NOT NULL,
  `phone_start` int(3) NOT NULL,
  `phone_end` int(4) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`customer_id`)
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
  `area_id` int(3) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(30) NOT NULL,
  `state_id` int(3) NOT NULL,
  PRIMARY KEY (`area_id`)
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
-- Table structure for table `tbl_blueprint_request`
--

CREATE TABLE IF NOT EXISTS `tbl_blueprint_request` (
  `blueprint_id` int(10) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(70) NOT NULL,
  PRIMARY KEY (`blueprint_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_blueprint_request`
--

INSERT INTO `tbl_blueprint_request` (`blueprint_id`, `email_address`) VALUES
(1, 'asad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_call_request`
--

CREATE TABLE IF NOT EXISTS `tbl_call_request` (
  `call_request_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `postal_code` varchar(15) NOT NULL,
  PRIMARY KEY (`call_request_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_call_request`
--

INSERT INTO `tbl_call_request` (`call_request_id`, `first_name`, `last_name`, `phone`, `postal_code`) VALUES
(1, 'Tarek', 'Raihan', '+8801977090909', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `country_id` int(3) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(30) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`country_id`, `country_name`) VALUES
(1, 'Quebec');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE IF NOT EXISTS `tbl_message` (
  `message_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email_address` varchar(70) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `postalcode` varchar(15) NOT NULL,
  `message_body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`message_id`, `first_name`, `last_name`, `email_address`, `phone`, `postalcode`, `message_body`) VALUES
(1, 'Tarek', 'Raihan', 'tarekraihan@yahoo.com', '+88019770909', '1000', 'Development Gateway is a non-profit organization that delivers information solutions to the people on the front lines of international development work. Whether they are government policy makers deciding how to invest scarce resources, aid workers building schools and clinics, or citizens who want to have a voice in the development process, Development Gateway offers tools and advisory services that empower them to be more effective. We work behind the scenes to enable others to make a difference.'),
(2, 'GOLAM HOSSAIN', 'REGAN', 'tarekraihan@yahoo.com', '+88019770909', '1000', 'Development Gateway is a non-profit organization that delivers information solutions to the people on the front lines of international development work. Whether they are government policy makers deciding how to invest scarce resources, aid workers building schools and clinics, or citizens who want to have a voice in the development process, Development Gateway offers tools and advisory services that empower them to be more effective. We work behind the scenes to enable others to make a difference.'),
(3, 'GOLAM HOSSAIN', 'REGAN', 'asad@gmail.com', '+88019770909', '1000', 'খলনায়কের সত্যিকারের চাহিদা কী? টাকা, পয়সা নাকি ক্ষমতা? কিন্তু জোকার চায় নৈরাজ্য আর উম্মাদনা। ব্যাটম্যান: দ্য ডার্ক নাইট সিনেমার জোকারের কথা বলছি। জোকার মনে করত গোথাম শহরে একজন ভয়ংকর খলনায়ক দরকার। নিজেই হবে তা। সুপারহিরো সিনেমা হিসেবে ব্যাটমান যেমন আলোড়ন সৃষ্টি করা এক নাম, তেমনি গেমের জগতেও সবচেয়ে সফল সুপারহিরো সিরিজের গেমও এটি। সব জল্পনাকল্পনার অবসান ঘটিয়ে অ্যাকশন-অ্যাডভেঞ্চার ঘরানার ব্যাটম্যান সিরিজের চতুর্থ গেম ব্যাটম্যান: আ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE IF NOT EXISTS `tbl_property` (
  `property_id` int(10) NOT NULL AUTO_INCREMENT,
  `states_id` int(2) NOT NULL,
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
  `image_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`property_id`, `states_id`, `area_id`, `property_owner_id`, `sign`, `property_address`, `description`, `property_type_id`, `property_use_id`, `annual_tax`, `age`, `exterior`, `floring`, `leavels`, `foundation`, `heatmethod`, `heat_source`, `garage`, `water_source`, `interior`, `price`, `bedroom_no`, `bathroom_no`, `feature_post`, `image_name`) VALUES
(2, 1, 45, 5, '#123288', '36 Nightingale Crescent Elmira, ON', 'The maintenance free exterior is a brick / vinyl combination. The driveway accommodates 4 vehicles. The lovely front garden accentuates the home''s curb appeal. The fully fenced, private, pool-sized backyard with mature trees has an expansive deck with lower level patio with adjacent hot tub. The yard backs on a tranquil babbling brook! \r\n\r\nRecent Upgrades:\r\n* Built-in Dishwasher (2014)\r\n* Insulated Garage Door (2014)\r\n* Roof (2013)', 13, 4, '567', '40 years old', 'Wood', 'Hardwood', '1', 'Stone', 'Baseboard', 'Electricity, Wood', 'Multi-Vehicle', 'Well', 'Formal Dining', '464900', '7', '3', 1, '1.jpg'),
(3, 1, 44, 4, '#987908', '6497 Roszell Rd Puslinch, ON', 'This custom designed home at the edge of Cambridge was built in 2003. A loft bungalow floor plan with 4,529 sq feet of finished space. \r\n\r\nThe main floor has a large entry way the leads into the great room with a ceiling that rises to 17 feet. The great room is flows into the over-sized kitchen with a breakfast bar and eat in dining area. The elevated southern view from the great room and kitchen provide a panoramic view of the back yard, in-ground pool, gardens, surrounding forest and mill pond. \r\n\r\nThe home has living space on 3 levels with 2,100 sq feet on the main level, 980 sq. feet on the second floor and another 1,500 sq. feet on the lower level.', 13, 4, '2200', '10 years old', 'Wood', 'Hardwood', '2', 'Stone', 'Baseboard', 'Electricity, Wood', 'Multi-Vehicle', 'Well', 'Formal Dining', '1150000', '6', '4', 1, '11.jpg'),
(4, 1, 45, 2, '#836278', '12 Butler Ave Cambridge, ON', 'There are only a few times you can say "Custom One of a Kind Home". This is one of them. From the custom designed bungaloft to the 100 feet of waterfront property to the unique cottage like community with easy access to KW, Cambridge and Guelph as well as minutes from the 401 for the commuters.\r\n\r\nLocated on a private road on the north side of Puslinch Lake this 2600+ square foot bungaloft is the ideal property for someone looking to downsize from their large family home and live life on one level. With the multi-use loft space and a finished basement walkout with 2 additional bedrooms it provides additional opportunity for families or even an in-law suite in the basement.', 12, 4, '3463', '2 years', 'Brick', 'Hardwood', '1', 'Stone', 'Baseboard', 'Electricity, Wood', 'Single-Vehicle', 'Well', 'Formal Dining', '829900', '6', '4', 1, '12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_type`
--

CREATE TABLE IF NOT EXISTS `tbl_property_type` (
  `property_type_id` int(2) NOT NULL AUTO_INCREMENT,
  `property_type_name` varchar(30) NOT NULL,
  PRIMARY KEY (`property_type_id`)
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
  `property_used_id` int(2) NOT NULL AUTO_INCREMENT,
  `property_used_name` varchar(30) NOT NULL,
  PRIMARY KEY (`property_used_id`)
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
-- Table structure for table `tbl_sample_request`
--

CREATE TABLE IF NOT EXISTS `tbl_sample_request` (
  `sample_request_id` int(10) NOT NULL AUTO_INCREMENT,
  `request_email` varchar(80) NOT NULL,
  PRIMARY KEY (`sample_request_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE IF NOT EXISTS `tbl_states` (
  `states_id` int(3) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(30) NOT NULL,
  `country_id` int(3) NOT NULL,
  PRIMARY KEY (`states_id`)
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
  `user_id` int(2) NOT NULL AUTO_INCREMENT,
  `email_address` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_role_id` int(1) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `email_address`, `first_name`, `last_name`, `user_role_id`, `password`) VALUES
(1, 'tarekraihan@yahoo.com', 'Tarek', 'Raihan', 1, 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
