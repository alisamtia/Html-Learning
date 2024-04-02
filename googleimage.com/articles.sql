-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 01:02 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `search`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) DEFAULT NULL,
  `Title` varchar(1000) NOT NULL,
  `image` mediumtext NOT NULL,
  `Detail` varchar(10000) NOT NULL,
  `link` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `Title`, `image`, `Detail`, `link`) VALUES
(NULL, 'Benefit Fruit', 'images/fruit.jpg', 'Besides being a good source of vitamins and minerals, it is known for its ability to aid weight loss and reduce insulin resistance.\r\n\r\nFor example, in a study in 91 people, those who ate half a fresh grapefruit before meals lost 2.9 pounds (1.3 kg) more weight than those who didn’t (1Trusted Source).', '15 fruit Benefits.php'),
(NULL, 'Vegetable Benefit', 'images/fruit.jpg', 'Eating plenty of vegetables may be one of the simplest ways to improve health and well-being.\r\n\r\nAll vegetables contain healthful vitamins, minerals, and dietary fiber — but some stand out for their exceptional benefits.\r\n\r\nSpecific vegetables may offer more health advantages to certain people, depending on their diets, overall health, and nutritional needs.\r\n', '15 Vegetables Benefits.php'),
(NULL, 'What is html', 'images/html.png', 'HTML stands for Hypertext Markup Language. It allows the user to create and structure sections, paragraphs, headings, links, and blockquotes for web pages and applications.\r\n\r\nHTML is not a programming language, meaning it doesn’t have the ability to create dynamic functionality. Instead, it makes it possible to organize and format documents, similarly to Microsoft Word.', 'What is html.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
