-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2013 at 05:20 p.m.
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zombie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE IF NOT EXISTS `tb_products` (
  `zombie_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dod` date NOT NULL,
  `price` double NOT NULL,  
  PRIMARY KEY (`zombie_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`zombie_id`, `name`, `description`, `gender`, `dod`, `price`) VALUES
(1, 'Lori Grimes', 'Former married mother of two, Lori Grimes would be a perfect addition to your zombie herd, as she has no sympathy even for her family. The only recommendations is to keep her away from cars. Price includes free shipping and authentic death certificate.', 'Female', '2013-11-04', 699.99),
(2, 'Headless Hannah', 'Yes, she may have no head, but don''t undermind her ability! Price includes free shipping and authentic death certificate.', 'Female', '1997-03-27', 799.99),
(3, 'Azamat Petrov', 'Former Kazakh militant, Petrov does pack a deadly punch. Price includes free shipping and authentic death certificate.', 'Male', '1988-07-09', 699.99),
(4, 'Johnny Dead', 'Dead would make a good addition to your zombie herd due to his cunning and innovative nature, diverting from normal tactics and taking post-apocolyptic survivors by surprise. Price includes free shipping and authentic death certificate.', 'Male', '1992-12-15', 1099.99),
(5, 'Jon Moxley', 'An absolutely psychotic as a human. So can you begin to imagine him as a zombie? The maniacal, yet cunning nature of Moxley ensures the consumer of a high success rate. Price includes free shipping and authentic death certificate.', 'Male', '1989-03-17', 1199.99),
(6, 'Laura The Destroyah', 'A destroyer, not of human life, but of paitence. The least recommended zombie on the market, Laura The Destroyah is not recommended to anyone in need of a good zombie, or at least one that will do as it''s told. Price includes free shipping and authentic death certificate.', 'Female', '1999-10-22', 399.99),
(7, 'Lee Everett', 'Everett, as a human, was known for his bravery and for his survival techniques against all zombies in his way. As a zombie however, he has developed an even larger arsenal of skills of which he uses to get his victims. Price includes free shipping and authentic death certificate.', 'Male', '2015-02-19', 999.99),
(8, 'Clementine Hutchison', 'The youngest zombie on the market, Clementine is known to be the longest-surviving human of the 2013 Zombie Holocaust. Because of her knowledge of human survival techniques, she does not allow for humans to easily get away, although due to her size and age at death, she lacks strength compared to other zombies on the market. Price includes free shipping and authentic death certificate.', 'Female', '2015-06-08', 799.99),
(9, 'Fred Durst', 'Former rapper-turned zombie, this zombie has the unique ability to diss his victims into submittion. As random as that may sound, it does provide for a spectacular sight of a zombie rap-battling his victim, making him the colour zombie of your herd! Price includes free shipping and authentic death certificate.', 'Male', '2004-01-11', 899.99),
(10, 'Catalina Marquez', 'Beautiful, but deadly. You do not want to mess with Catalina, it may just be the last thing you''ll ever do. Probably the most dangerous zombie on the market today, she is a must-have in your zombie herd! Price includes free shipping and authentic death certificate.', 'Female', '1993-07-19', 1499.99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
