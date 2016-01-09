-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2015 at 01:53 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` char(25) DEFAULT NULL,
  `comment` varchar(2000) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(25) DEFAULT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `processed` tinyint(1) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `place_name`, `comment`, `user_name`, `user_email`, `user_phone`, `processed`, `time`) VALUES
(25, 'adams', 'I love the pizza! But I think the veggies are too greasy. Also I wish we had more fresh fruit.       ', 'jan', 'janetchen1@yahoo.com', '87234239', 1, '0000-00-00 00:00:00'),
(27, 'dunster', 'Breakfast is the best meal. I wish you would bring back Chinese dumplings.', 'jc', 'janetchen1@yahoo.com', '234809', 1, '0000-00-00 00:00:00'),
(26, 'adams', 'I love the pizza! But I think the veggies are too greasy. Also I wish we had more fresh fruit.       ', 'jan', 'janetchen1@yahoo.com', '87234239', 1, '0000-00-00 00:00:00'),
(28, '', 'Great service.    ', 'jon', 'jchen300@gmail.com', 'kaslifj', 1, '2015-12-05 16:11:20'),
(29, 'currier', '    Okay.', 'janet', '', '', 1, '2015-12-05 16:11:20'),
(30, '', '    eh', '', '', '', 1, '2015-12-05 16:11:20'),
(31, '', '    Love it!', '', '', '', 1, '2015-12-05 16:11:20'),
(32, '', '    I love HUDS!', '', '', '', 1, '2015-12-05 16:11:20'),
(33, '', '    Go HUDS!', '', '', '', 1, '2015-12-05 16:11:20'),
(34, '', '    lol', '', '', '', 1, '2015-12-05 16:11:20'),
(35, '', '    hi', '', '', '', 1, '2015-12-05 16:11:20'),
(36, '', '    works?', '', '', '', 1, '2015-12-05 16:11:20'),
(37, 'bauer_cafe', '    Great food!', 'Jon', 'jchen@exeter.edu', '', 1, '2015-12-05 16:11:20'),
(38, '', 'good food', 'P', 'philipbtsien@gmail.com', '', 1, '2015-12-05 16:11:20'),
(39, '', '    11th comment', '', '', '', 1, '2015-12-05 16:11:20'),
(40, '', '    hi', '', '', '', 1, '2015-12-05 16:36:39'),
(41, '', '    hello again', '', '', '', 1, '2015-12-05 16:39:08'),
(42, 'dudley', '    The pizza is terrible. What happened to the salad bar? The new sandwich bar is understocked and unhealthy. And the coffee is too bitter.', '', '', 'jlfkasjd', 1, '2015-12-05 18:47:04'),
(43, 'dudley', '    terrible', '', '', '', 1, '2015-12-05 18:49:43'),
(44, 'dudley', '    terrible unacceptable inedible', '', '', '', 1, '2015-12-05 18:51:15'),
(45, 'chauhaus', '    good pizza', '', '', '', 1, '2015-12-05 19:27:32'),
(46, 'chauhaus', '    bad pizza', '', '', '', 1, '2015-12-05 19:30:54'),
(47, 'chauhaus', '    bad pizza', '', '', '', 1, '2015-12-05 19:35:19'),
(48, 'chauhaus', '    bad pizza', '', '', '', 1, '2015-12-05 19:35:48'),
(49, 'chauhaus', '    bad pizza', '', '', '', 1, '2015-12-05 19:41:28'),
(50, 'cronkhite', '    bad pizza', '', '', '', 1, '2015-12-05 19:42:31'),
(51, 'cronkhite', '    bad pizza', '', '', '', 1, '2015-12-05 19:43:47'),
(52, 'cronkhite', '    bad pizza', '', '', '', 1, '2015-12-05 19:44:29'),
(53, 'cronkhite', '    bad pizza', '', '', '', 1, '2015-12-05 19:48:08'),
(54, '', '    bad pizza', '', '', '', 1, '2015-12-05 19:52:08'),
(55, '', 'bad pizza', '', '', '', 1, '2015-12-05 19:52:44'),
(56, '', '    bad pizza', '', '', '', 1, '2015-12-05 19:54:50'),
(57, '', 'bad pizza', '', '', '', 1, '2015-12-05 19:55:17'),
(58, '', '    bad pizza', '', '', '', 1, '2015-12-05 20:02:33'),
(59, '', 'bad pizza', '', '', '', 1, '2015-12-05 20:02:33'),
(60, '', 'bad pizza', '', '', '', 1, '2015-12-05 20:02:48'),
(61, 'observatory', 'good pizza', '', '', '', 1, '2015-12-05 20:03:38'),
(62, 'observatory', 'bad pizza', '', '', '', 1, '2015-12-05 20:04:01'),
(63, 'cronkhite', 'The checker is very friendly and I love the sandwiches! Keep up the good work, HUDS!', '', '', '', 1, '2015-12-06 00:26:48'),
(64, 'cronkhite', 'The chicken is dry and somehow everything is unappetizing. Not a good experience at all.', '', '', '', 1, '2015-12-06 00:28:09'),
(65, '', 'cool', '', 'janetchen1@yahoo.com', '', 1, '2015-12-06 00:55:55'),
(66, 'bauer_cafe', 'I love the pizza! The pasta is delicious too. Keep up the good work, HUDS!', 'Janet', '', '', 1, '2015-12-06 00:59:31'),
(67, 'bauer_cafe', 'The checker is quite unfriendly. Overall I had an unsatisfactory experience.', '', '', '', 1, '2015-12-06 01:00:05'),
(68, 'bauer_cafe', 'I love the pizza! Also, the pasta today was great. I’m consistently satisfied when I come to Bauer.', '', '', '', 1, '2015-12-06 01:05:10'),
(69, 'bauer_cafe', 'The checker is quite unfriendly, and even rude. The food is almost inedible.', '', '', '', 1, '2015-12-06 01:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `place_name` char(25) NOT NULL,
  `comments_received` int(11) NOT NULL,
  `overall_score` int(11) NOT NULL,
  `food_score` int(11) NOT NULL,
  `service_score` int(11) NOT NULL,
  `responses` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `place_name`, `comments_received`, `overall_score`, `food_score`, `service_score`, `responses`) VALUES
(1, 'bauer_cafe', 5, 7, 2, -1, 0),
(2, 'cgis', 0, 0, 0, 0, 0),
(3, 'lise', 0, 0, 0, 0, 0),
(4, 'chauhaus', 5, 1, 4, 4, 0),
(5, 'cronkhite', 6, 1, -2, 3, 0),
(6, 'barker', 0, 0, 0, 0, 0),
(7, 'observatory', 2, 0, 0, 0, 0),
(8, 'dudley', 3, 11, 0, 0, 0),
(9, 'greenhouse', 0, 0, 0, 0, 0),
(10, 'hks', 0, 0, 0, 0, 0),
(11, 'lamont', 0, 0, 0, 0, 0),
(12, 'northwest', 0, 0, 0, 0, 0),
(13, 'sebastians', 0, 0, 0, 0, 0),
(14, 'dudley', 3, 11, 0, 0, 0),
(15, 'cronkhite', 6, 1, -2, 3, 0),
(16, 'adams', 2, 2, 0, 0, 0),
(17, 'annenberg', 0, 0, 0, 0, 0),
(18, 'cabot', 0, 0, 0, 0, 0),
(19, 'pforzheimer', 0, 0, 0, 0, 0),
(20, 'currier', 1, 4, 0, 0, 0),
(21, 'dunster', 1, 0, 0, 0, 0),
(22, 'mather', 0, 0, 0, 0, 0),
(23, 'eliot', 0, 0, 0, 0, 0),
(24, 'kirkland', 0, 0, 0, 0, 0),
(25, 'leverett', 0, 0, 0, 0, 0),
(26, 'lowell', 0, 0, 0, 0, 0),
(27, 'winthrop', 0, 0, 0, 0, 0),
(28, 'quincy', 0, 0, 0, 0, 0),
(29, '', 9, 45, -6, -3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
