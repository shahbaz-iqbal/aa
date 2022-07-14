-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 10:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lords_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `discription` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `discription`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"box-sizing: border-box; margin: 10px 0px; background: 0px 0px #ffffff; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px; text-align: justify;\">Lloyds PR Solicitors is a leading UK criminal defence law firm, with offices in London and Watford. We are recommended in the Legal 500 as an &lsquo;astute&rsquo; firm which possess a &lsquo;first class legal brain&rsquo;. Our lawyers have been involved in many leading &lsquo;high profile&rsquo; cases and are experts in their fields.</p>\r\n<p style=\"box-sizing: border-box; margin: 10px 0px; background: 0px 0px #ffffff; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px; text-align: justify;\">Our reputation is based on our sharp legal skills,pragmatism and client care, and our results-driven approach. We regularly achieve impressive outcomes for our clients. We have expertise in all aspects of criminal law: serious and complex crime, business crime and confiscation, extradition and road traffic offences.</p>\r\n<p style=\"box-sizing: border-box; margin: 10px 0px 0px; background: 0px 0px #ffffff; border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px; text-align: justify;\">We have acted for individuals, corporate bodies and governments in the UK and internationally. We accept private and legal aid funding.</p>', '2022-06-14 10:49:25', '2022-06-21 12:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `accessibility`
--

CREATE TABLE `accessibility` (
  `id` int(11) NOT NULL,
  `description` varchar(11111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accessibility`
--

INSERT INTO `accessibility` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, '2022-06-20 06:02:27', '2022-06-20 06:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `description` varchar(11111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Criminal Paralegal Position', '<p style=\"box-sizing: border-box; margin: 10px 0px 10px 36pt; background: 0px 0px rgba(194, 170, 128, 0.08); border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">We are pleased to advertise for a new paralegal position starting immediately.&nbsp;</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 10px 0px 10px 36pt; background: 0px 0px rgba(194, 170, 128, 0.08); border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">Lloyds PR Solicitors is a criminal defence firm which specialises in large complex cases. The practice is recognised by the Legal 500 for both crime and white collar crime.&nbsp;</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 10px 0px 10px 36pt; background: 0px 0px rgba(194, 170, 128, 0.08); border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">The benefits of working at Lloyds PR Solicitors:&nbsp;</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin: 15px 0px; background: 0px 0px rgba(194, 170, 128, 0.08); border: 0px; padding: 0px; vertical-align: baseline; outline: 0px; list-style-position: inside; color: #656565; font-family: \'Open Sans\', sans-serif; font-size: 16px;\">\r\n<li style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px 0px 0px 72pt; padding: 0px; vertical-align: baseline; outline: 0px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">Starting salary of &pound;22,000 (to be increased after a probation period upon review)&nbsp;</span></span></li>\r\n<li style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px 0px 0px 72pt; padding: 0px; vertical-align: baseline; outline: 0px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">Police station accreditation, with the opportunity for paid overtime&nbsp;</span></span></li>\r\n<li style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px 0px 0px 72pt; padding: 0px; vertical-align: baseline; outline: 0px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">Regular training by leading QCs and counsel&nbsp;</span></span></li>\r\n<li style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px 0px 0px 72pt; padding: 0px; vertical-align: baseline; outline: 0px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">Exposure to high profile cases and responsibility early on&nbsp;with own caseload</span></span></li>\r\n<li style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px 0px 0px 72pt; padding: 0px; vertical-align: baseline; outline: 0px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-size: 14px;\"><span style=\"box-sizing: border-box; background: 0px 0px; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; outline: 0px; font-family: verdana, geneva, sans-serif;\">Travel to Courts/prisons nationwide</span></span></li>\r\n</ul>', '2022-06-14 18:56:48', '2022-06-21 17:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'wild', '2022-06-15 13:18:09', '2022-06-15 13:18:09'),
(3, 'advertisement', '2022-06-15 15:15:11', '2022-06-27 13:34:51');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `description` varchar(111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello world 1</p>', '2022-06-16 12:04:14', '2022-06-20 11:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(111) DEFAULT NULL,
  `address` varchar(1111) DEFAULT NULL,
  `station` varchar(1111) DEFAULT NULL,
  `telephone` varchar(111) DEFAULT NULL,
  `fax` varchar(111) DEFAULT NULL,
  `email` varchar(111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `station`, `telephone`, `fax`, `email`, `created_at`, `updated_at`) VALUES
(1, 'London Office', '11 Station Road, Harlesden, London NW10 4UJ', 'Nearest Tube', '+44 (0) 2089 631 975', '+44 (0) 2089 631 975', 'info@lloydspr.com', '2022-06-15 17:00:42', '2022-06-21 17:55:20'),
(3, 'Nearest Tube', '11 Station Road, Harlesden, London NW10 4UJ  Nearest Tube Willesden Junction Station (High Street Exit)', 'Willesden Junction Station (High Street Exit)', '+44 (0) 2089 631 050', '+44 (0) 2089 631 050', 'info@lloydspr.com', '2022-06-21 17:56:12', '2022-06-21 17:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(111) DEFAULT NULL,
  `lastname` varchar(111) DEFAULT NULL,
  `email` varchar(1111) DEFAULT NULL,
  `tel` varchar(11111) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `lastname`, `email`, `tel`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sad', 'sad', 'sad@ds.czx', '23423432423', 'massagesdf ds d', '2022-06-24 09:39:18', '2022-06-24 09:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `cookie_policy`
--

CREATE TABLE `cookie_policy` (
  `id` int(11) NOT NULL,
  `description` varchar(11111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookie_policy`
--

INSERT INTO `cookie_policy` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello..</p>', '2022-06-20 06:02:12', '2022-06-20 13:20:57');

-- --------------------------------------------------------

--
-- Table structure for table `disclaimer`
--

CREATE TABLE `disclaimer` (
  `id` int(11) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disclaimer`
--

INSERT INTO `disclaimer` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello</p>', '2022-06-20 06:01:56', '2022-06-20 13:56:12');

-- --------------------------------------------------------

--
-- Table structure for table `eu_dispute`
--

CREATE TABLE `eu_dispute` (
  `id` int(11) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eu_dispute`
--

INSERT INTO `eu_dispute` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello</p>', '2022-06-20 06:01:26', '2022-06-20 14:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

CREATE TABLE `expertises` (
  `id` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `discription` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `title`, `short_description`, `discription`, `created_at`, `updated_at`) VALUES
(2, 'Serious and Complex Crime', 'We handle the most serious,\r\n																		complex and high-profile criminal cases in the\r\n																		UK. We fight fearlessly for our clients.', '<div class=\"p-rich_text_section\" style=\"box-sizing: inherit; counter-reset: list-0 0 list-1 0 list-2 0 list-3 0 list-4 0 list-5 0 list-6 0 list-7 0 list-8 0 list-9 0; color: #1d1c1d; font-family: Slack-Lato, Slack-Fractions, appleLogo, sans-serif; font-size: 15px; font-variant-ligatures: common-ligatures; background-color: #f8f8f8;\">\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">FRAUD, MONEY LAUNDERING, INSIDE DEALING, BRIBERY AND CORRUPTION</u></span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">We represent clients in every aspect of white-collar crime, we have for example:</span></span></p>\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\">\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">Advised a prominent sports body on bribery and corruption;</span></span></li>\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">Drafted anti-money laundering policies and procedures for money service businesses;</span></span></li>\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">Defended clients in complex &lsquo;high profile&rsquo; fraud trials.</span></span></li>\n</ul>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">Our expertise is recognised in the Legal 500 as&nbsp;<em style=\"box-sizing: border-box;\">&lsquo;remarkable&rsquo;</em>.</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">We act for individuals, companies, governments and institutions.</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">Our clients rely on us because we have a sharp grasp of the law and facts of each case, offer pragmatic advice and we get results.</span></span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; font-variant-ligatures: normal; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\">If you think we can help you, or someone you know, please contact us on 0208 963 1050 or&nbsp;<a style=\"box-sizing: border-box; background: transparent; color: #1d6fa5; text-decoration-line: none;\" href=\"mailto:info@lloydspr.com\">info@lloydspr.com</a>.&nbsp;</span></span></p>\n</div>', '2022-06-14 17:25:28', '2022-06-21 13:27:02');
INSERT INTO `expertises` (`id`, `title`, `short_description`, `discription`, `created_at`, `updated_at`) VALUES
(3, 'Business and Confiscation', 'Fraud, Money Laundering, Insider Dealing, Bribery And Corruption. We represent clients in every aspect of white-collar crime.', '<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">d murder of a police officer</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v M, Reading Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Attempted murder</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, St Albans Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Attempted murder&nbsp;</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, St Albans Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">False imprisonment and perverting the course of justice in relation to a murder (the &ldquo;thumb from the sky&rdquo; case)</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v D, Snaresbrook Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Causing death by dangerous driving</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v B, St Albans Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Causing death&nbsp;by dangerous driving</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v K, Wood Green Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Causing death by dangerous driving</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Geneview, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Prosecution of the murder of a youth aged 15 (stabbing)</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Homebush, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Prosecution of a 21 year old university student murdered following a street fight between two groups</span></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">TERRORISM</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Iridescent, Southwark Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Joint investigation by the Department of Homeland Security in the US and the Counter Terrorism Command in UK into funneling &pound;174 thousand to the terrorist organisation in Somalia, Al-Shabaab</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v H, Snaresbrook Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Grievous bodily harm case investigated by the Counter Terrorism Command</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">SEXUAL OFFENCES</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v K, Kingston Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Alleged rape by a taxi driver of a drunk passenger</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v H, St Albans Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Defendant faced multiple allegations of rape by different victims at various periods of time</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v P, Harrow Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Maternal uncle alleged to have sexually abused his nieces over a period of years</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v A, Harrow Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Attempted rape at a bus stop</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v W, Winchester Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Allegation of multiple rapes by wife against her husband</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Operation Veerde, Isleworth Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Large scale prosecution into the facilitation of vulnerable women mainly from the Czech Republic for sexual exploitation/prostitution</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v B, St Albans Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Allegation by step daughter against her step father of rape and serious sexual assault spanning several years</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v V, St Albans Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Medical staff accused of sexually assaulting a patient</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v&nbsp;K, Kingston Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Gang rape of sex workers at a brothel</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v V, Woolwich Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Rape of a minor</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v&nbsp;S, Croydon Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Rape and sexual assault of work colleagues</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v L, Bolton Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Allegations of running two brothels</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v S, Isleworth Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Historic sexual assault of a child family member</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">R v H, Southwark Crown Court</span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Investigation and prosecution into online paedophilia groups</span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">SLAVERY, PROSTITUTION, HUMAN TRAFFICKING AND FACILITATION OFFENCES</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Netwing, Luton Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">slavery conspiracy investigated by the Hertfordshire Police&rsquo;s Major Crime Unit and prosecuted by the CPS</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v W, Norwich Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Conspiracy to commit prostitution related offences</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, Guildhall Middlesex Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Human trafficking and prostitution conspiracy</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Sendal, Croydon Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">SOCA investigation in relation to the facilitation of non-EU migrants into UK and across Europe</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Curfew, Kingston Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">SOCA investigation in relation to the facilitation of non-EU migrants into UK and across Europe</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Gesticulate, Kingston Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">SOCA investigation in relation to the facilitation of illegal immigrants</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Veerde, Isleworth Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">An operation into the trafficking of vulnerable young females from Czech Republic for sexual exploitation and sham marriages in the UK</span></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">FIREARMS AND OFFENSIVE WEAPONS OFFENCES</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">A series of armed robberies across East London</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Rome, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Armed robbery of a money exchange bureau owner whilst transporting the end of day takings to a secure location (&pound;310,000)</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v B, Woolwich Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">&pound;40 million armed robbery at the Graff Diamond jeweller</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, Wood Green Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Armed robbery of high value goods</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Sanga, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Two year campaign of armed robberies investigated by the Flying Squad</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v G, Kingston Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Possession of a firearm</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">DRUGS AND PHARMACEUTICAL OFFENCES</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v DJ, Southwark Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">A &pound;12 million pharmaceutical fraud case investigated and prosecuted by the MHRA</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Penhurst, Manchester Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to import 34 kilogrammes of Class B drugs from Netherlands</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Demolish, Maidstone Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to supply Class A drugs involving 18 defendants</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Pagoda, Harrow Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to supply over &pound;4 million of Class A drugs estimated in the Hertfordshire area</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Opaque &amp; Rome, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">&pound;150 million drug conspiracy investigated by SOCA and Dutch authorities and prosecuted by the CPS</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v H, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to supply several kilos of high purity cocaine</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v H, Harrow Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Importation of Class B drugs from Spain</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Ruhr, Gloucester Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Undercover operation into the supply and distribution of high purity Class A drugs</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Pullman, Canterbury Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to supply Class A drugs initially estimated to be valued at &pound;8.1 million</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v M, Southampton Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to supply Class A drugs in the Southampton areas whilst the organisers were based in London</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Gadbrim, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Undercover operation to tackle street dealing in the Central London area</span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v B, Blackfriars Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Conspiracy to supply class A drugs</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v T, Ipswich Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Importation of class A drugs&nbsp;</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v N, Kingston Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Importation of class A drugs&nbsp;</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v H, St Albans Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Importation of class A drugs</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v G, Cambridge Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Importation of class A drugs</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v A, Manchester Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">High profile conspiracy to supply drugs</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v G, Birmingham Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Conspiracy to supply class A drugs</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v K, Canterbury Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Importation of 2500 kilograms of class B drugs</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v A, Birmingham Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Multimillion pound importation of cigarettes - HMRC prosecution</span></span></span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">ROBBERY, BURGLARY, THEFT AND DISHONESTY OFFENCES</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">A series of armed robberies across East London</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Anubis, Woolwich Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Cash in transit robberies in the South London area</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v B, Woolwich Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">&pound;40 million armed robbery at the Graff Diamond jeweller</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v T&amp;L, Leeds Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Extradited from Estonia for a number of high value jewellery robberies in the Leeds area&nbsp;</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, Wood Green Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Armed robbery of high value goods</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, Leeds Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">High value jeweller robbery</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Sanga, Central Criminal Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Two year campaign of armed robberies investigated by the Flying Squad</span></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Niji, Harrow Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to commit burglary UK counties</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Heartsease, Southwark Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Defendant alleged to have conspired to blackmail his wealthy father for $1 million in Bullion coins by staging his own kidnap</span></p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">&nbsp;</p>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-family: verdana, geneva, sans-serif;\"><u style=\"box-sizing: border-box;\">VIOLENT CRIMES</u></span></span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v H, Croydon Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">False imprisonment, wounding with intent (GBH) and robbery. The victims (including children) were tortured with a pair of scissors and hot water in their own home</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v J, Leicester Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Honour-based kidnap. Defendant initially charged with two counts of conspiracy to murder along with 6 other defendants</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Auroner, Croydon Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Conspiracy to kidnap, commit false imprisonment and to blackmail a couple from the UK who had travelled to India on a religious trip</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Bohemia, Norwich Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Kidnap, false imprisonment and wounding with intent (GBH) on a heavily pregnant woman and her partner</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">Operation Hamun, Southwark Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Blackmail and false imprisonment with a ransom demand made in Bangladesh</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v S, St Albans Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">GBH (initially arrested for attempted murder). A Street fight in Watford left the victim with serious life changing injuries</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v&nbsp;F, Snaresbrook Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">GBH and violent disorder where the victim was left in a state of coma</span></p>\r\n<ul style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\"><strong style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-size: 14px;\"><span style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; line-height: 1.538em;\">R v&nbsp;S, Isleworth Crown Court</span></span></span></strong></li>\r\n</ul>\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 0px 40px; color: #333333; font-family: Montserrat, sans-serif; font-size: 16px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; font-size: 14px;\">Multi-handed violent disorder where the defendant was acquitted following successful application for abuse of process by the police</span></p>', '2022-06-21 12:45:26', '2022-06-21 13:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `funding`
--

CREATE TABLE `funding` (
  `id` int(11) NOT NULL,
  `title` varchar(111) NOT NULL,
  `description` varchar(11111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `funding`
--

INSERT INTO `funding` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Best law practices', 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te ridens gloriatur temporibus qui, per enim veritus.', '2022-06-14 18:35:02', '2022-06-21 15:11:28'),
(3, 'Best law practices', 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expetendis in mei. Mei an pericula euripidis, hinc partem ei est. Eos ei nisl graecis, vix aperiri consequat an. Eius lorem tincidunt vix at, vel pertinax sensibus id, error epicurei mea et. Mea facilisis urbanitas moderatius id. Vis ei rationibus definiebas, eu qui purto zril laoreet. Ex error omnium interpretaris pro, alia illum ea vim. Lorem ipsum dolor sit amet, te ridens gloriatur temporibus qui, per enim veritus.', '2022-06-21 15:16:46', '2022-06-21 15:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `legal_notice`
--

CREATE TABLE `legal_notice` (
  `id` int(11) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `legal_notice`
--

INSERT INTO `legal_notice` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello</p>', '2022-06-20 06:01:08', '2022-06-20 13:48:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(111) DEFAULT NULL,
  `title` varchar(111) NOT NULL,
  `description` varchar(1111) NOT NULL,
  `image` varchar(1111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'title', '<p>Hello, World!</p>', '1656309375.jpg', '2022-06-15 14:45:20', '2022-06-27 12:56:15'),
(2, 2, 'assss', '<p>Hello, World!</p>', '1656309356.jpg', '2022-06-15 14:54:13', '2022-06-27 12:55:56'),
(3, 3, 'sadsda', '<p>Hello, World!</p>', '1655281450.png', '2022-06-15 14:54:49', '2022-06-15 15:24:10'),
(4, 2, 'sad', '<p>Hello, World!</p>', '1655279824.jpg', '2022-06-15 14:57:04', '2022-06-15 14:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(11) NOT NULL,
  `description` varchar(1111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>Hello...</p>', '2022-06-20 06:00:50', '2022-06-20 13:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `sub_title` varchar(111) DEFAULT NULL,
  `image` varchar(111) DEFAULT NULL,
  `facebook` varchar(111) DEFAULT NULL,
  `twitter` varchar(111) DEFAULT NULL,
  `linkdin` varchar(111) DEFAULT NULL,
  `trustpilot` varchar(111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `sub_title`, `image`, `facebook`, `twitter`, `linkdin`, `trustpilot`, `created_at`, `updated_at`) VALUES
(1, 'title', 'subtitle', '1655383622.png', 'facebook', 'twitter', 'linkedin', 'trustpilot', '2022-06-16 05:45:21', '2022-06-16 19:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `sub_title` varchar(111) DEFAULT NULL,
  `image` varchar(111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(3, 'title', 'A firm Described as ‘Remarkable’', '1655729340.jpg', '2022-06-14 16:20:23', '2022-06-20 19:58:40'),
(4, 'title 1', 'Leading Law Firm', '1655729612.jpg', '2022-06-14 16:25:44', '2022-06-20 19:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `title` varchar(111) DEFAULT NULL,
  `designation` varchar(111) DEFAULT NULL,
  `description` varchar(11111) DEFAULT NULL,
  `image` varchar(111) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `title`, `designation`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Rebecca Stevens', 'Designation', 'Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.', '1655798418.jpg', '2022-06-15 18:18:19', '2022-06-21 15:03:48'),
(5, 'Matthew Bates', 'Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.', 'Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.', '1655798751.jpg', '2022-06-21 15:05:51', '2022-06-21 15:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_condition`
--

CREATE TABLE `terms_and_condition` (
  `id` int(11) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `terms_and_condition`
--

INSERT INTO `terms_and_condition` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<p>hello</p>', '2022-06-20 06:00:20', '2022-06-20 13:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@demo.com', NULL, '$2y$10$AGnI2BJZFRED9MMkKEw4WunjGncpx.BDAuOe3sFBtfTkAiLam/.Tq', NULL, '2022-06-14 13:10:57', '2022-06-14 13:10:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessibility`
--
ALTER TABLE `accessibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie_policy`
--
ALTER TABLE `cookie_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disclaimer`
--
ALTER TABLE `disclaimer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eu_dispute`
--
ALTER TABLE `eu_dispute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `funding`
--
ALTER TABLE `funding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legal_notice`
--
ALTER TABLE `legal_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_condition`
--
ALTER TABLE `terms_and_condition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accessibility`
--
ALTER TABLE `accessibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cookie_policy`
--
ALTER TABLE `cookie_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disclaimer`
--
ALTER TABLE `disclaimer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eu_dispute`
--
ALTER TABLE `eu_dispute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funding`
--
ALTER TABLE `funding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `legal_notice`
--
ALTER TABLE `legal_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms_and_condition`
--
ALTER TABLE `terms_and_condition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
