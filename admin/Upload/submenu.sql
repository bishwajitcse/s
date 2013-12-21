-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2013 at 10:58 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smartcity`
--

-- --------------------------------------------------------

--
-- Structure for view `submenu`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `submenu` AS select distinct `a`.`MenuID` AS `MenuID`,`a`.`Parent_id` AS `parent_id`,`a`.`Title` AS `title`,`a`.`Template` AS `template` from `menu` `a` where (`a`.`Parent_id` <> 0) union all select distinct `b`.`Parent_id` AS `parent_id`,`b`.`Parent_id` AS `parent_id`,`b`.`Title` AS `title`,`b`.`Template` AS `template` from `menu` `b`;

--
-- VIEW  `submenu`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
