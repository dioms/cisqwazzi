-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2012 at 02:41 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `qwazzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `art_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`art_id`, `user_id`, `title`, `description`, `approved`, `quantity`, `price`, `photo`) VALUES
(1, 0, 'daslmdadamskda', 'asmdklamdmalm', 0, 1, 11, ''),
(2, 0, 'sadmlamk', 'saas', 0, 1, 12, ''),
(3, 4, 'New title', 'saas', 0, 4, 12, ''),
(4, 4, 'yes', 'dmalkdmak', 0, 1, 12, 'OnvardLogo.jpg'),
(5, 4, 'dasda', 'asdad', 0, 1, 1212, 'oldonvardlogo.jpg'),
(6, 4, 'dasda', 'asdad', 0, 1, 1212, 'oldonvardlogo.jpg'),
(7, 4, 'dasda', 'asdad', 0, 1, 1212, 'oldonvardlogo.jpg'),
(8, 4, 'dasda', 'asdad', 0, 1, 1212, 'oldonvardlogo.jpg'),
(9, 4, 'dsamlkdm', 'mldasmkdalk', 0, 1, 12, ''),
(10, 4, 'dsamlkdm', 'mldasmkdalk', 0, 1, 12, ''),
(11, 4, 'dsamlkdmsadasdsadada', 'mldasmkdalk', 0, 1, 12, ''),
(12, 4, 'asda', 'dasdasd', 0, 1, 12, 'OnvardLogo.jpg'),
(13, 4, 'sdadasda', 'sadasd', 0, 1, 33, 'index-wordle.jpg'),
(14, 4, 'sdadasda', 'sadasd', 0, 1, 33, 'index-wordle.jpg'),
(15, 4, 'das', 'sadsad', 0, 1, 5, 'oldonvardlogo.jpg'),
(16, 4, 'das', 'sadsad', 0, 1, 5, 'oldonvardlogo.jpg'),
(17, 4, 'sda', 'dasdas', 0, 1, 2, 'newsyl.JPG'),
(18, 4, 'sda', 'dasdas', 0, 1, 2, 'newsyl.JPG'),
(19, 4, 'sda', 'dasdas', 0, 1, 2, 'newsyl.JPG'),
(20, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(21, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(22, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(23, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(24, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(25, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(26, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(27, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(28, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(29, 4, 'dsada', 'dsad', 0, 1, 2, 'newsyl.JPG'),
(30, 4, 'thidiosa', 'dsaada', 0, 1, 19, 'OnvardLogo.jpg'),
(31, 4, 'thidiosa', 'dsaada', 0, 1, 19, 'OnvardLogo.jpg'),
(32, 4, 'thidiosa', 'dsaada', 0, 1, 19, 'OnvardLogo.jpg'),
(33, 4, 'thidiosa', 'dsaada', 0, 1, 19, 'OnvardLogo.jpg'),
(34, 4, 'This is Testing Artwork', 'hey yooo', 0, 10, 100, 'dragdrop for fields.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `art_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `checkout` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `art_id`, `quantity`, `checkout`) VALUES
(14, 4, 3, 3, 0),
(15, 4, 2, 1, 0),
(16, 4, 1, 1, 0),
(17, 7, 3, 4, 0),
(18, 7, 20, 1, 0),
(19, 7, 34, 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `admin` tinyint(1) NOT NULL COMMENT 'zero by default, 1 is admin',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `email`, `photo`, `bio`, `admin`) VALUES
(1, 'kk2222', 'kiabekrda', 'f3181a4130b4a503b58e7fcddd20dda80c4d668d', 'kibaekr@gmail.com', '', '', 0),
(2, 'kk2222ad', 'kiabekrda', 'f3181a4130b4a503b58e7fcddd20dda80c4d668d', 'kibaekr@gmail.com', '', '', 0),
(3, 'lmakdk', 'kladmklsmam', 'f3181a4130b4a503b58e7fcddd20dda80c4d668d', 'mkldam2gmai@gmail.com', '', '', 0),
(4, 'Keith Ryu', 'kibaekr', 'f3181a4130b4a503b58e7fcddd20dda80c4d668d', 'kibaekr@gmail.com', '', '', 0),
(5, 'Keith Ryu', 'kibaekrr', 'f3181a4130b4a503b58e7fcddd20dda80c4d668d', 'kibaekr@gmail.com', '', '', 0),
(6, 'NewMan', 'kibaek', 'f3181a4130b4a503b58e7fcddd20dda80c4d668d', 'kmlkd@gmail.com', '', '', 0),
(7, 'Diego', 'test', 'dc724af18fbdd4e59189f5fe768a5f8311527050', 'edda@gmail.com', '', '', 0);
