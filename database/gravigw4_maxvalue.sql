-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 02:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gravigw4_maxvalue`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_am_details`
--

CREATE TABLE `tbl_am_details` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_am_details`
--

INSERT INTO `tbl_am_details` (`id`, `name`, `status`, `created_on`, `updated_on`) VALUES
(1, 'KRISHNAPRASAD', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(2, 'SREEJITH', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(3, 'SANJAY MOSES', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(4, 'JHONY JOSEPH', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(5, 'ALOSIOUS STANELY', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(6, 'SHINU T ABRAHAM', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(7, 'SUNNY O D', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(8, 'MUHAZIN', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(9, 'BOBAN', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(10, 'SARATH', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(11, 'NEETHU SAI', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(12, 'SELEESHYA', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(13, 'REJIBALA', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(14, 'MARY BABU', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(15, 'SURESH P', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(16, 'ANJU JOSHY', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(17, 'JITHA', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(18, 'SAJITHA', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(19, 'LISSY ADAI', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38'),
(20, 'RAMAKRISHNAN', '', '2022-01-21 17:04:38', '2022-01-21 17:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_avp_details`
--

CREATE TABLE `tbl_avp_details` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_avp_details`
--

INSERT INTO `tbl_avp_details` (`id`, `name`, `status`, `created_on`, `updated_on`) VALUES
(1, 'AJITH PALERI', '', '2022-01-21 16:56:30', '2022-01-21 18:24:57'),
(2, 'FIROSE', '', '2022-01-21 16:57:45', '2022-01-21 18:26:09'),
(3, 'JITHESH', '', '2022-01-21 16:57:45', '2022-01-21 18:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch_details`
--

CREATE TABLE `tbl_branch_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_branch_details`
--

INSERT INTO `tbl_branch_details` (`id`, `name`, `status`, `created_on`, `updated_on`) VALUES
(1, 'ATTINGAL', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(2, 'CHATHANNOOR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(3, 'EDAPAZHANJI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(4, 'KARAMANA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(5, 'KATTAKADA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(6, 'KESAVADASAPURAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(7, 'KOLLAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(8, 'KOTTARAKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(9, 'KOTTIYAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(10, 'MALAYANKEEZHU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(11, 'MANACAUD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(12, 'MANNANTHALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(13, 'NEDUMANGAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(14, 'NEMOM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(15, 'NEYYATTINKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(16, 'PARIPPALLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(17, 'PEROORKADA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(18, 'PEYAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(19, 'PLAMOODU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(20, 'POOJAPPURA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(21, 'THIRUMALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(22, 'VENJARAMOODU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(23, 'ANCHAL', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(24, 'KADAPPAKADA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(25, 'SASTHAMANGALAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(26, 'ANGAMALY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(27, 'ANJERICHIRA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(28, 'CHALAKKUDI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(29, 'CHERPU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(30, 'EDAPPAL', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(31, 'GURUVAYUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(32, 'IRINJALAKUDA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(33, 'KODAKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(34, 'KODUNGALLUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(35, 'KOORKKENCHERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(36, 'KOTTAKAL', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(37, 'KUNNAMKULAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(38, 'MALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(39, 'MOONUPEEDIKA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(40, 'PATTIKKAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(41, 'PATTURAIKKAL', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(42, 'PUDUKKAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(43, 'TIRUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(44, 'THRIPRAYAR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(45, 'VADANAPILLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(46, 'VALANCHERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(47, 'VENGARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(48, 'WADAKKANCHERRY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(49, 'NORTH PARAVUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(50, 'AYYANTHOLE', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(51, 'ALATHUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(52, 'CHELAKKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(53, 'CHERPULASSERRY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(54, 'CHITTUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(55, 'EDAKKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(56, 'EDAVANNA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(57, 'EDAVANNAPARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(58, 'KALIKAVU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(59, 'KODUVAYUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(60, 'KOLLENGODE', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(61, 'KOZHINJAMPARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(62, 'KUZHALMANNAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(63, 'MALAPPURAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(64, 'MANJERI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(65, 'MANNARKAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(66, 'NENMARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(67, 'NILAMBUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(68, 'OTTAPALAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(69, 'PALAKKAD TOWN', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(70, 'PANDIKKAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(71, 'PATTAMBI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(72, 'PERINTHALMANNA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(73, 'SHORNUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(74, 'SREEKRISHNAPURAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(75, 'THIRUVILWAMALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(76, 'VADAKKENCHERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(77, 'WANDOOR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(78, 'KONDOTTY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(79, 'PUDUNAGARAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(80, 'CHANGANASSERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(81, 'CHENGANNUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(82, 'ERUMELY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(83, 'ETTUMANUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(84, 'KANJIRAPPALLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(85, 'KOTTAYAM RO', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(86, 'KURAVILANGADU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(87, 'MUNDAKKAYAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(88, 'PALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(89, 'PANDALAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(90, 'PATHANAMTHITTA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(91, 'RANNY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(92, 'THIRUVALLA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(93, 'KATTAPANA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(94, 'KUMALI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(95, 'NEDUMKANDAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(96, 'PATHANAPURAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(97, 'KARUKACHAL', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(98, 'ELAPPARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(99, 'KANJIKUZHI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(100, 'ADIMALY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(101, 'ADOOR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(102, 'ALAPPUZHA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(103, 'ALUVA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(104, 'HARIPPADU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(105, 'KALAMASSERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(106, 'KARUNAGAPPALLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(107, 'KAYAMKULAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(108, 'KOOTHATTUKULAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(109, 'KOTHAMANGALAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(110, 'MARAYUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(111, 'MAVELIKKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(112, 'MOOVATUPUZHA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(113, 'MULANTHURUTHY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(114, 'MUNNAR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(115, 'PERUMBAVOOR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(116, 'PIRAVAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(117, 'RAJAKKAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(118, 'THODUPUZHA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(119, 'THOPPUMPADI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(120, 'THRIPUNITHURA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(121, 'VAZHAKALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(122, 'CHERTHALA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(123, 'VAIKOM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(124, 'MARADU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(125, 'EDAPALLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(126, 'BALUSSERRY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(127, 'CALICUT RO', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(128, 'FEROKE', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(129, 'KAKKODI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(130, 'KALPETTA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(131, 'KANHANGAD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(132, 'KANNUR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(133, 'KASARGOD', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(134, 'KODUVALLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(135, 'KOYILANDY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(136, 'KUNNAMANGALAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(137, 'KUTTIYADI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(138, 'MANANTHAVADY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(139, 'MEENANGADY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(140, 'ARAKINAR', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(141, 'MUKKAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(142, 'NADAKKAVU', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(143, 'NEELESWARAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(144, 'PADINJARETHARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(145, 'PALAYAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(146, 'PANAMARAM', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(147, 'PERAMBRA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(148, 'PULPALLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(149, 'PUTHIYANGADI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(150, 'SULTAN BATHERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(151, 'THALASSERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(152, 'THAMARASSERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(153, 'VADAKARA', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(154, 'MEPPADI', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(155, 'OMASSERY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41'),
(156, 'KULAPULLY', '', '2022-01-21 17:35:41', '2022-01-21 17:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_details`
--

CREATE TABLE `tbl_business_details` (
  `id` int(11) NOT NULL,
  `company_id` int(15) NOT NULL,
  `product_id` int(15) NOT NULL,
  `application_date` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `customer_id` int(15) NOT NULL,
  `bank_details_id` int(15) NOT NULL,
  `share_no` varchar(50) NOT NULL,
  `shares_purchased` varchar(15) NOT NULL,
  `investment_period` varchar(15) NOT NULL,
  `investment_amount` varchar(15) NOT NULL,
  `fund_transfer_date` varchar(50) NOT NULL,
  `cheque_utr_no` varchar(50) NOT NULL,
  `clearing_date` date NOT NULL,
  `demat_participant` varchar(50) NOT NULL,
  `demat_ac_no` varchar(50) NOT NULL,
  `avp` varchar(50) NOT NULL,
  `zm` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `am` varchar(50) NOT NULL,
  `product_scheme` varchar(50) NOT NULL,
  `interest` varchar(15) NOT NULL,
  `ncd_allot_no` varchar(50) NOT NULL,
  `maturity_date` varchar(50) NOT NULL,
  `fd_no` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canvasser_details`
--

CREATE TABLE `tbl_canvasser_details` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_canvass_details`
--

CREATE TABLE `tbl_canvass_details` (
  `id` int(11) NOT NULL,
  `business_id` int(15) NOT NULL,
  `customer_id` int(15) NOT NULL,
  `canvasser_name` varchar(50) NOT NULL,
  `canvas_code` varchar(50) NOT NULL,
  `canvas_type` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_details`
--

CREATE TABLE `tbl_company_details` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company_details`
--

INSERT INTO `tbl_company_details` (`id`, `name`, `description`, `status`, `created_on`, `updated_on`) VALUES
(1, 'Supra Pacefic', '', 'Active', '2022-01-13 11:43:50', '2022-01-13 11:43:50'),
(2, 'Sanat Multi Trade', '', 'Active', '2022-01-13 11:44:58', '2022-01-13 11:44:58'),
(3, 'Maxvalue Credits', '', 'Active', '2022-01-13 11:46:01', '2022-01-13 12:02:53'),
(4, 'hmjhnj,c', '', 'Deleted', '2022-01-13 15:04:33', '2022-01-13 15:04:37'),
(5, 'Maxvalue Nidhi', '', 'Active', '2022-01-13 15:04:53', '2022-01-13 15:04:53'),
(6, 'CFCICI', '', 'Active', '2022-01-13 15:05:02', '2022-01-13 15:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_bank_details`
--

CREATE TABLE `tbl_customer_bank_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(15) NOT NULL,
  `name_in_bank` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_ac_no` varchar(150) NOT NULL,
  `ifsc` varchar(70) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_details`
--

CREATE TABLE `tbl_customer_details` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `customer_mobile` varchar(20) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `nominee_name` varchar(50) NOT NULL,
  `nominee_relation` varchar(50) NOT NULL,
  `membership_id` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_details`
--

CREATE TABLE `tbl_product_details` (
  `id` int(11) NOT NULL,
  `company_id` int(15) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(350) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_details`
--

INSERT INTO `tbl_product_details` (`id`, `company_id`, `name`, `description`, `status`, `created_on`, `updated_on`) VALUES
(1, 1, 'NCD', '', 'Active', '2022-01-13 14:53:41', '2022-01-13 14:53:41'),
(2, 1, 'SubDebt', '', 'Deleted', '2022-01-13 14:55:10', '2022-01-13 15:00:52'),
(3, 1, 'SubDebt', '', 'Deleted', '2022-01-13 14:55:10', '2022-01-13 15:02:49'),
(4, 1, 'SubDebt', '', 'Active', '2022-01-13 15:03:03', '2022-01-13 15:03:03'),
(5, 1, 'Share', '', 'Active', '2022-01-13 15:03:19', '2022-01-13 15:03:19'),
(6, 2, 'Share', '', 'Active', '2022-01-13 15:03:32', '2022-01-13 15:03:32'),
(7, 3, 'NCD', '', 'Active', '2022-01-13 15:03:46', '2022-01-13 15:03:46'),
(8, 3, 'SubDebt', '', 'Active', '2022-01-13 15:04:00', '2022-01-13 15:04:00'),
(9, 3, 'Share', '', 'Active', '2022-01-13 15:04:10', '2022-01-13 15:04:10'),
(10, 5, 'Deposit', '', 'Active', '2022-01-13 15:05:33', '2022-01-13 15:05:33'),
(11, 6, 'Deposit', '', 'Active', '2022-01-13 15:05:48', '2022-01-13 15:05:48'),
(12, 6, 'Membership', '', 'Active', '2022-01-13 15:06:00', '2022-01-13 15:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_region_details`
--

CREATE TABLE `tbl_region_details` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_region_details`
--

INSERT INTO `tbl_region_details` (`id`, `name`, `status`, `created_on`, `updated_on`) VALUES
(1, 'CALICUT', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34'),
(2, 'ERNAKULAM', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34'),
(3, 'KOTTAYAM', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34'),
(4, 'PALAKKAD', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34'),
(5, 'THRISSUR', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34'),
(6, 'CC', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34'),
(7, 'TRIVANDRUM', '', '2022-01-21 17:00:34', '2022-01-21 17:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zm_details`
--

CREATE TABLE `tbl_zm_details` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_zm_details`
--

INSERT INTO `tbl_zm_details` (`id`, `name`, `status`, `created_on`, `updated_on`) VALUES
(1, 'SAJI', '', '2022-01-21 16:58:37', '2022-01-21 16:58:37'),
(2, 'VIMAL CHANDRAN', '', '2022-01-21 16:58:37', '2022-01-21 16:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(15) NOT NULL,
  `username` varchar(45) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `mob_no` varchar(20) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(35) NOT NULL,
  `status` varchar(35) NOT NULL DEFAULT 'Active',
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `display_name`, `mob_no`, `email_id`, `password`, `role`, `status`, `created_on`, `updated_on`) VALUES
(1, 'admin', 'admin', '0000000000', 'admin.maxvalue@gmail.com', '12345', 'admin', 'Active', '2021-10-01 15:20:08', '2021-12-02 15:12:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_am_details`
--
ALTER TABLE `tbl_am_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_avp_details`
--
ALTER TABLE `tbl_avp_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_branch_details`
--
ALTER TABLE `tbl_branch_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_business_details`
--
ALTER TABLE `tbl_business_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_canvasser_details`
--
ALTER TABLE `tbl_canvasser_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_canvass_details`
--
ALTER TABLE `tbl_canvass_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company_details`
--
ALTER TABLE `tbl_company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_bank_details`
--
ALTER TABLE `tbl_customer_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_details`
--
ALTER TABLE `tbl_customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_region_details`
--
ALTER TABLE `tbl_region_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_zm_details`
--
ALTER TABLE `tbl_zm_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_am_details`
--
ALTER TABLE `tbl_am_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_avp_details`
--
ALTER TABLE `tbl_avp_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_branch_details`
--
ALTER TABLE `tbl_branch_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `tbl_business_details`
--
ALTER TABLE `tbl_business_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_canvasser_details`
--
ALTER TABLE `tbl_canvasser_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_canvass_details`
--
ALTER TABLE `tbl_canvass_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_company_details`
--
ALTER TABLE `tbl_company_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customer_bank_details`
--
ALTER TABLE `tbl_customer_bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer_details`
--
ALTER TABLE `tbl_customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product_details`
--
ALTER TABLE `tbl_product_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_region_details`
--
ALTER TABLE `tbl_region_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_zm_details`
--
ALTER TABLE `tbl_zm_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
