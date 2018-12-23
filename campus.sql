-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 09:07 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_in` int(11) NOT NULL DEFAULT '0',
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `admin_email`, `log_in`, `admin_password`, `created_at`, `updated_at`) VALUES
(1, 'Kaushik Mallik', 'kaushik@vs.com', 1, '123456', NULL, '2018-11-19 01:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `all_result`
--

CREATE TABLE `all_result` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ssc_gpa` varchar(255) NOT NULL,
  `hsc_gpa` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_result`
--

INSERT INTO `all_result` (`id`, `email`, `ssc_gpa`, `hsc_gpa`, `mark`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'k@gmail.com', '4.5', '4.5', '11', '2018-09-08 05:37:29', '2018-09-08 05:37:29', '2018-09-08 11:37:29'),
(4, 'arif@gmail.com', '5', '4', '12', '2018-09-08 06:02:03', '2018-09-08 06:02:03', '2018-09-08 12:02:03'),
(5, 'tareq@gmail.com', '2.5', '3', '4', '2018-09-08 06:03:56', '2018-09-08 06:03:56', '2018-09-08 12:03:56'),
(6, 'waheda@gmai.com', '3', '2.5', '1', '2018-09-08 06:05:15', '2018-09-08 06:05:15', '2018-09-08 12:05:15'),
(7, 'k@gmail.com', '4.5', '4.5', '11', '2018-09-08 06:06:29', '2018-09-08 06:06:29', '2018-09-08 12:06:29'),
(8, 'goni@gmail.com', '4.5', '4.9', '11', '2018-09-08 06:07:41', '2018-09-08 06:07:41', '2018-09-08 12:07:41'),
(9, 'mansura@gmail.com', '2.5', '3.0', '5', '2018-09-08 06:18:48', '2018-09-08 06:18:48', '2018-09-08 12:18:48'),
(10, 'suru@gmail.com', '5', '5', '15', '2018-09-08 06:26:46', '2018-09-08 06:26:46', '2018-09-08 12:26:46'),
(11, 'moni@gmail.com', '3.5', '2.3', '4', '2018-09-08 08:50:29', '2018-09-08 08:50:29', '2018-09-08 14:50:29'),
(12, NULL, '2.3', '3.2', '4', '2018-09-08 15:06:03', '2018-09-08 15:06:03', '2018-09-08 15:06:03'),
(13, NULL, '3.3', '2.5', '5', '2018-09-08 15:06:36', '2018-09-08 15:06:36', '2018-09-08 15:06:36'),
(14, NULL, '3.0', '3.0', '4', '2018-09-08 15:06:36', '2018-09-08 15:06:36', '2018-09-08 15:06:36'),
(15, NULL, '4.5', '4.6', '12', '2018-09-08 15:07:07', '2018-09-08 15:07:07', '2018-09-08 15:07:07'),
(16, NULL, '4.9', '5', '13', '2018-09-08 15:07:07', '2018-09-08 15:07:07', '2018-09-08 15:07:07'),
(17, NULL, '3.3', '2.2', '0', '2018-09-08 15:07:49', '2018-09-08 15:07:49', '2018-09-08 15:07:49'),
(18, NULL, '3.0', '2.6', '2', '2018-09-08 15:07:49', '2018-09-08 15:07:49', '2018-09-08 15:07:49'),
(23, NULL, '2.6', '2.4', '7', '2018-09-13 19:18:41', '2018-09-13 19:18:41', '2018-09-13 19:18:41'),
(24, NULL, '2.3', '2.5', '3', '2018-09-13 19:18:41', '2018-09-13 19:18:41', '2018-09-13 19:18:41'),
(25, NULL, '2.7', '2.2', '4', '2018-09-13 19:19:31', '2018-09-13 19:19:31', '2018-09-13 19:19:31'),
(26, NULL, '2.1', '2.2', '3', '2018-09-13 19:19:31', '2018-09-13 19:19:31', '2018-09-13 19:19:31'),
(31, NULL, '2.2', '2.3', '1', '2018-09-13 19:34:52', '2018-09-13 19:34:52', '2018-09-13 19:34:52'),
(32, NULL, '2.4', '2.5', '3', '2018-09-13 19:34:52', '2018-09-13 19:34:52', '2018-09-13 19:34:52'),
(33, NULL, '5', '5', '10', '2018-09-13 19:41:10', '2018-09-13 19:41:10', '2018-09-13 19:41:10'),
(34, NULL, '4.1', '4.6', '11', '2018-09-13 19:41:10', '2018-09-13 19:41:10', '2018-09-13 19:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `class_lavel`
--

CREATE TABLE `class_lavel` (
  `id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_lavel`
--

INSERT INTO `class_lavel` (`id`, `class`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-05-29 18:25:55', '2018-05-29 18:25:55'),
(2, 2, '2018-05-29 18:25:55', '2018-05-29 18:25:55'),
(3, 3, '2018-05-29 18:26:28', '2018-05-29 18:26:28'),
(4, 4, '2018-05-29 18:26:28', '2018-05-29 18:26:28'),
(5, 5, '2018-05-29 18:26:36', '2018-05-29 18:26:36'),
(6, 6, '2018-05-29 18:26:36', '2018-05-29 18:26:36'),
(7, 7, '2018-05-29 18:26:48', '2018-05-29 18:26:48'),
(8, 8, '2018-05-29 18:26:48', '2018-05-29 18:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `english_questions`
--

CREATE TABLE `english_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice_1` varchar(255) NOT NULL,
  `choice_2` varchar(255) NOT NULL,
  `choice_3` varchar(255) NOT NULL,
  `choice_4` varchar(255) NOT NULL,
  `right_ans` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `english_questions`
--

INSERT INTO `english_questions` (`id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `right_ans`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(46, 'I ..... tennis every Sunday morning.[1]', 'playing', 'play', 'am playing', 'am play', 'B', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(47, 'Don\'t make so much noise. Noriko ..... to study for her ESL test![1]', 'try', 'tries', 'tried', 'is trying', 'D', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(48, 'Jun-Sik ..... his teeth before breakfast every morning.[1]', 'will cleaned', 'is cleaning', 'cleans', 'clean', 'C', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(49, '..... many times every winter in Frankfurt.[1]', 'It snows', 'It snowed', 'It is snowing', 'It is snow', 'A', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(50, 'Sorry, she can\'t come to the phone. She ..... a bath![1]', 'is having', 'having', 'have', 'had', 'A', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(51, 'How many students in your class ..... from Korea?[1]', 'comes', 'come', 'came', 'is coming', 'B', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(52, 'Weather report: \"It\'s seven o\'clock in Frankfurt and ..... .\"[1]', 'there is snow', 'it`s snowing', 'it snows', 'it snowed', 'B', '1', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(53, 'Babies ..... when they are hungry.[2]', 'cry', 'cries', 'cried', 'are crying', 'A', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(54, 'Jane ..... her blue jeans today, but usually she wears a skirt or a dress.[2]', 'wears', 'wearing', 'wear', 'is wearing', 'D', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(55, 'I think I ..... a new calculator. This one does not work properly any more.[2]', 'needs', 'needed', 'need', 'am needing', 'C', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(56, 'Sorry, you can\'t borrow my pencil. I ..... it myself.[2]', 'was using', 'using', 'use', 'am using', 'D', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(57, 'At a school dance: Jane: \" ..... yourself?\" Mary: \"Yes, I\'m having a great time!\"[2]', 'You enjoying', 'Enjoy you', 'Do you enjoy', 'Are you enjoying', 'D', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(58, 'I\'ve just finished reading a story called Dangerous Game. It\'s about a man who ..... his wife because he doesn\'t want to lose her.[2]', 'kills', 'killed', 'kill', 'is killing', 'A', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(59, 'What time .....[2]', 'the train leaves?', 'leaves the train?', 'is the train leaving?', 'does the train leave?', 'D', '2', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(60, 'Jane: \"Are you going to the dance on Friday?\"  Mary: \"No, I\'m not. I ..... school dances; they\'re loud, hot and crowded!\"[3]', 'not enjoy', 'don`t enjoy', 'doesn`t enjoy', 'am not enjoying', 'B', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(61, 'I ..... for my pen. Have you seen it?[3]', 'will look', 'looking', 'look', 'am looking', 'D', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(62, 'You can keep my iPod if you like. I ..... it any more.[3]', 'don`t use', 'doesn`t use', 'didn`t use', 'am not using', 'A', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(63, 'The phone ...... Can you answer it, please?[3]', 'rings', 'ring', 'rang', 'is ringing', 'D', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(64, '\" ___________ is she?\" \"She\'s my friend from London\"[3]', 'Who', 'why', 'what', 'which', 'A', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(65, '___________ lots of animals in the zoo.[3]', 'There', 'There is', 'There are', 'There aren\'t', 'C', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33'),
(66, 'Where ___________ Sarah live?[3]', 'am', 'is', 'does', 'do', 'C', '3', '2018-09-15 13:21:33', '2018-09-15 13:21:33', '2018-09-15 19:21:33');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice_1` varchar(255) NOT NULL,
  `choice_2` varchar(255) NOT NULL,
  `choice_3` varchar(255) NOT NULL,
  `choice_4` varchar(255) NOT NULL,
  `right_ans` varchar(255) NOT NULL,
  `time` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `right_ans`, `time`, `date`, `created_at`, `updated_at`) VALUES
(1, 'I\'ve just finished reading a story called Dangerous Game. It\'s about a man who ..... his wife because he doesn\'t want to lose her.[2]', 'kills', 'killed', 'kill', 'is killing', 'A', 9, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(2, 'What time .....[2]', 'the train leaves?', 'leaves the train?', 'is the train leaving?', 'does the train leave?', 'D', 9, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(3, 'I think I ..... a new calculator. This one does not work properly any more.[2]', 'needs', 'needed', 'need', 'am needing', 'C', 9, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(4, 'Jun-Sik ..... his teeth before breakfast every morning.[1]', 'will cleaned', 'is cleaning', 'cleans', 'clean', 'C', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(5, 'I ..... for my pen. Have you seen it?[3]', 'will look', 'looking', 'look', 'am looking', 'D', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(6, 'A number is divisible by 5 if its unit digit is ………………… .[2]', '0,5', '2,3', '0,6', '1,2', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(7, 'The difference between the smallest number of four digits and the largest number of three digits is ……. .[2]', '1', '11', '100', '99', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(8, 'The smallest number of seven digits is ….. .[2]', '1000000', '9999999', '1256980', '0000000', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(9, 'In 24,673 ; the place-value of 6 is ….. .[1]', '600', '700', '800', '900', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(10, 'A clock strikes once at 1 o’clock, twice at 2 o’clock, thrice at 3 o’clock and so on. How many times will it strike in 24 hours?[3]', '156', '120', '300', '25', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(11, 'The hardest substance available on earth is[2]', 'Diamond', 'Platinum', 'Iron', 'Gold', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(12, 'The variety of coal in which the deposit contains recognizable traces of the original plant material is [2]', 'peat', 'lignite', 'anthracite', 'bitumen', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(13, 'Washing soda is the common name for[2]', 'Sodium carbonate', 'Calcium bicarbonate', 'Sodium bicarbonate', 'Calcium carbonate', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(14, 'Brass gets discoloured in air because of the presence of which of the following gases in air?[1]', 'Oxygen', 'Hydrogen sulphide', 'Carbon dioxide', 'Nitrogen', 'B', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14'),
(15, 'Which of the following is used as a lubricant? [3]', 'Graphite', 'Silica', 'Iron Oxide', 'Diamond', 'A', NULL, NULL, '2018-11-29 04:09:14', '2018-11-29 04:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `math_questions`
--

CREATE TABLE `math_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice_1` varchar(255) NOT NULL,
  `choice_2` varchar(255) NOT NULL,
  `choice_3` varchar(255) NOT NULL,
  `choice_4` varchar(255) NOT NULL,
  `right_ans` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `math_questions`
--

INSERT INTO `math_questions` (`id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `right_ans`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(34, 'The average of first 50 natural numbers is …………. .[3]', '25.30', '25.5', '30.3', '17.3', 'B', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(35, 'A fraction which bears the same ratio to 1/27 as 3/11 bear to 5/9 is equal to ……….. .[3]', '1/55', '55', '3/11', '1/11', 'A', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(36, 'The number of 3-digit numbers divisible by 6, is ………….. .[3]', '150', '151', '152', '153', 'A', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(37, 'A clock strikes once at 1 o’clock, twice at 2 o’clock, thrice at 3 o’clock and so on. How many times will it strike in 24 hours?[3]', '156', '120', '300', '25', 'A', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(38, 'What is 1004 divided by 2?[1]', '502', '503', '400', '100', 'A', '1', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(39, '125 gallons of a mixture contains 20% water. What amount of additional water should be added such that water content be raised to 25%?[3]', '8 1/3 gallons', '1 9/2 gallons', '1 7/2 gallons.', '1 5/2 gallons.', 'A', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(40, '106 × 106 – 94 × 94 = ?[3]', '2400', '2300', '2500', '2600', 'A', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(41, 'Which of the following numbers gives 240 when added to its own square?[3]', '15', '16', '17', '18', 'A', '3', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(42, 'Evaluation of 83 × 82 × 8-5 is …………. .[1]', '1', '2', '3', '4', 'A', '1', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(43, 'The simplest form of 1.5 : 2.5 is …………… .[1]', '3:5', '4:5', '6:7', '8:9', 'A', '1', '2018-09-15 18:47:24', '2018-09-15 18:47:24', '2018-09-15 18:47:24'),
(44, 'In 24,673 ; the place-value of 6 is ….. .[1]', '600', '700', '800', '900', 'A', '1', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(45, 'In 24,673 ; the face-value of 4 is ….. .[1]', '4', '5', '6', '7', 'A', '1', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(46, 'The least number of two digits is ….. .[1]', '99', '88', '89', '11', 'A', '1', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(47, 'The largest number of six digits is ….. .[1]', '999999', '452689', '100000', '900000', 'A', '1', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(48, 'The smallest number of seven digits is ….. .[2]', '1000000', '9999999', '1256980', '0000000', 'A', '2', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(49, 'The sum of the least number of three digits and largest number of two digits is ….. .[2]', '199', '299', '399', '499', 'A', '2', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(50, 'The difference between the smallest number of four digits and the largest number of three digits is ……. .[2]', '1', '11', '100', '99', 'A', '2', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(51, 'If a number has an even number or zero at its unit place; the number is always divisible by ……. .[2]', '2', '3', '4', '5', 'A', '2', '2018-09-15 18:56:50', '2018-09-15 18:56:50', '2018-09-15 18:56:50'),
(52, 'A number is divisible by 3 if the sum of its digits is divisible by …….. .[2]', '1', '2', '3', '4', 'C', '2', '2018-09-15 18:56:51', '2018-09-15 18:56:51', '2018-09-15 18:56:51'),
(53, 'A number is divisible by 5 if its unit digit is ………………… .[2]', '0,5', '2,3', '0,6', '1,2', 'A', '2', '2018-09-15 18:56:51', '2018-09-15 18:56:51', '2018-09-15 18:56:51'),
(54, '50 times 5 is equal to?[2]', '2500', '2600', '2700', '2800', 'A', '2', '2018-09-15 18:56:51', '2018-09-15 18:56:51', '2018-09-15 18:56:51'),
(55, 'The average of first 2natural numbers is …………. .[3]', '1', '2', '3', '4', 'A', '1', '2018-11-12 06:43:26', '2018-11-12 06:43:26', '2018-11-12 06:43:26'),
(56, '2+2=?', '1', '2', '3', '4', 'D', '1', '2018-11-29 09:50:05', '2018-11-29 09:50:05', '2018-11-29 09:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hsc_year` varchar(255) DEFAULT NULL,
  `ssc_year` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `ssc_gpa` varchar(255) NOT NULL,
  `hsc_gpa` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `hsc_year`, `ssc_year`, `email`, `ssc_gpa`, `hsc_gpa`, `mark`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kaushik Mallik', '2018', '2016', 'k@gmail.com', '4.5', '4.5', '12', '2018-11-17 23:11:45', '2018-11-17 23:11:45', '2018-11-18 05:11:45'),
(2, 'Arif', '2014', '2012', 'arif@gmail.com', '5', '4', '6', '2018-11-17 23:12:47', '2018-11-17 23:12:47', '2018-11-18 05:12:47'),
(3, 'Mansura Rahman', '2012', '2010', 'mansura@gmail.com', '4.88', '3.7', '2', '2018-11-19 01:44:03', '2018-11-19 01:44:03', '2018-11-19 07:44:03'),
(4, 'Tareq', '2012', '2010', 't@gmail.com', '3.00', '2.25', '14', '2018-11-19 07:50:21', '2018-11-19 07:50:21', '2018-11-19 07:50:21'),
(5, 'Shakil', '2012', '2010', 's@gmail.com', '2.5', '2.5', '12', '2018-11-19 07:50:21', '2018-11-19 07:50:21', '2018-11-19 07:50:21'),
(6, 'Waheda', '2014', '2012', 'w@gmail.com', '3', '3', '8', '2018-11-19 07:52:38', '2018-11-19 07:52:38', '2018-11-19 07:52:38'),
(7, 'Taniya', '2012', '2010', 't@gmail.com', '3.3', '3', '12', '2018-11-19 07:52:38', '2018-11-19 07:52:38', '2018-11-19 07:52:38'),
(8, 'Kohinur', '2017', '2015', 'kohinur@gmail.com', '4.55', '5', '9', '2018-11-22 01:21:57', '2018-11-22 01:21:57', '2018-11-22 07:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `number`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Haniz', 'haniz@vs.com', '123456789', 'Onak kotha bolar ace', '2018-05-25 08:14:16', '2018-05-25 08:14:16'),
(2, 'kaushik', 'azkaushikaz@gmail.com', '01855601369', 'sdsds', '2018-05-30 02:47:29', '2018-05-30 02:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `science_questions`
--

CREATE TABLE `science_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `choice_1` varchar(255) NOT NULL,
  `choice_2` varchar(255) NOT NULL,
  `choice_3` varchar(255) NOT NULL,
  `choice_4` varchar(255) NOT NULL,
  `right_ans` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `science_questions`
--

INSERT INTO `science_questions` (`id`, `question`, `choice_1`, `choice_2`, `choice_3`, `choice_4`, `right_ans`, `level`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 'Brass gets discoloured in air because of the presence of which of the following gases in air?[1]', 'Oxygen', 'Hydrogen sulphide', 'Carbon dioxide', 'Nitrogen', 'B', '1', '2018-09-15 13:42:40', '2018-09-15 13:42:40', '2018-09-15 19:42:40'),
(38, 'Which of the following is a non metal that remains liquid at room temperature?[1]', 'Bromine', 'Phosphorous', 'Chlorine', 'Helium', 'A', '1', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(39, 'Chlorophyll is a naturally occurring chelate compound in which central metal is?[1]', 'magnesium', 'copper', 'iron', 'calcium', 'A', '1', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(40, 'Which of the following is used in pencils?[1]', 'Silicon', 'Graphite', 'Charcoal', 'Phosphorous', 'A', '1', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(41, 'Which of the following metals forms an amalgam with other metals?[1]', 'Mercury', 'Tin', 'Lead', 'Zinc', 'A', '1', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(42, 'Chemical formula for water is[1]', 'NaAlO2', 'H2O', 'Al2O3', 'CaSiO3', 'B', '1', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(43, 'The gas usually filled in the electric bulb is?[1]', 'nitrogen', 'hydrogen', 'carbon dioxide', 'oxygen', 'A', '1', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(44, 'Washing soda is the common name for[2]', 'Sodium carbonate', 'Calcium bicarbonate', 'Sodium bicarbonate', 'Calcium carbonate', 'A', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(45, 'Quartz crystals normally used in quartz clocks etc. is chemically[2]', 'silicon dioxide', 'germanium oxide', 'a mixture of germanium oxide and silicon dioxide', 'sodium silicate', 'A', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(46, 'The hardest substance available on earth is[2]', 'Diamond', 'Platinum', 'Iron', 'Gold', 'A', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(47, 'Which of the gas is not known as green house gas?[2]', 'Hydrogen', 'Methane', 'Nitrous', 'Carbon', 'A', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(48, 'Bromine is a?[2]', 'red liquid', 'black solid', 'colourless gas', 'highly inflammable gas', 'A', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(49, 'The variety of coal in which the deposit contains recognizable traces of the original plant material is [2]', 'peat', 'lignite', 'anthracite', 'bitumen', 'A', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(50, 'Tetraethyl lead is used as [2]', 'petrol additive', 'fire extinguisher', 'mosquito repellent', 'pain killer', '0', '2', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(51, 'Which of the following is used as a lubricant? [3]', 'Graphite', 'Silica', 'Iron Oxide', 'Diamond', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(52, 'The inert gas which is substituted for nitrogen in the air used by deep sea divers for breathing, is [3]', 'Helium', 'Argon', 'Xenon', 'Krypton', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(53, 'The gases used in different types of welding would include [3]', 'oxygen and acetylene', 'oxygen, acetylene and argon', 'oxygen, hydrogen, acetylene and nitrogen', 'oxygen and hydrogen', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(54, 'The property of a substance to absorb moisture from the air on exposure is called [3]', 'deliquescence', 'osmosis', 'efflorescence', 'desiccation', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(55, 'In which of the following activities silicon carbide is used? [3]', 'Making cement and glass', 'Disinfecting water of ponds', 'cutting very hard substances', 'Making casts for statues', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(56, 'The average salinity of sea water is [3]', '3.5%', '3%', '2.5%', '2%', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(57, 'Galvanized iron sheets have a coating of [3]', 'zinc', 'chromium', 'lead', 'tin', 'A', '3', '2018-09-15 13:42:41', '2018-09-15 13:42:41', '2018-09-15 19:42:41'),
(58, 'rggr', 'a', 'b', 'c', 'd', 'A', '0', '2018-09-17 02:54:44', '2018-09-17 02:54:44', '2018-09-17 08:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `ssc_year` varchar(255) NOT NULL,
  `ssc_gpa` varchar(255) NOT NULL,
  `hsc_year` varchar(255) NOT NULL,
  `hsc_gpa` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`, `ssc_year`, `ssc_gpa`, `hsc_year`, `hsc_gpa`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Kaushik Mallik', 'k@gmail.com', 'a1460310', '2016', '4.5', '2018', '4.5', '2018-08-26 10:54:44', '2018-08-26 10:54:44', '2018-08-26 16:54:45'),
(2, 'Arif', 'arif@gmail.com', '50076879', '2012', '5', '2014', '4', '2018-09-08 06:01:20', '2018-09-08 06:01:20', '2018-09-08 12:01:20'),
(13, 'Mansura Rahman', 'mansura@gmail.com', 'f660a068', '2010', '4.88', '2012', '3.7', '2018-11-19 01:43:07', '2018-11-19 01:43:07', '2018-11-19 07:43:07'),
(14, 'Kohinur', 'kohinur@gmail.com', 'afb03d81', '2015', '4.55', '2017', '5', '2018-11-22 01:20:36', '2018-11-22 01:20:36', '2018-11-22 07:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`, `created_at`, `updated_at`) VALUES
(2, 'English', '2018-05-14 17:44:23', '2018-05-14 17:44:23'),
(7, 'Math', '2018-05-14 17:45:52', '2018-05-14 17:45:52'),
(8, 'Science', '2018-05-14 17:45:52', '2018-05-14 17:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_father_name` varchar(255) NOT NULL,
  `teacher_mother_name` varchar(255) NOT NULL,
  `teacher_birth_date` varchar(255) NOT NULL,
  `teacher_religion` varchar(255) NOT NULL,
  `teacher_gender` varchar(255) NOT NULL,
  `teacher_photo_link` varchar(255) NOT NULL,
  `teacher_university` varchar(255) NOT NULL,
  `teacher_cgpa` varchar(255) DEFAULT NULL,
  `teacher_email` varchar(255) NOT NULL,
  `teacher_password` varchar(255) NOT NULL,
  `log_in` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `teacher_name`, `teacher_father_name`, `teacher_mother_name`, `teacher_birth_date`, `teacher_religion`, `teacher_gender`, `teacher_photo_link`, `teacher_university`, `teacher_cgpa`, `teacher_email`, `teacher_password`, `log_in`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'MR.Jack', 'MR.Robin', 'Denerish', '1990-11-23', 'Christianity', 'Male', 'image/Teacher photo/MR.Jack114074492.jpg', 'University of London', NULL, 'jack@vs.com', '123456', '1', '2018-11-09 12:48:42', '2018-11-25 14:31:34', '2018-11-09 18:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kaushik Mallik', 'k@gmail.com', '$2y$10$OaTFFp/prSUq2g/ICMdDZeYrU1Wn.KtpqDlnEyFoD8KMWhTBWtoOG', 'ANTyopNOU4x2KzBloH9XvZpsZqPKCrz4iR0W8JCOBs4Mvcaaexb4EIjDTnAH', '2018-08-21 08:55:15', '2018-08-21 08:55:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_result`
--
ALTER TABLE `all_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_lavel`
--
ALTER TABLE `class_lavel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english_questions`
--
ALTER TABLE `english_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math_questions`
--
ALTER TABLE `math_questions`
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
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science_questions`
--
ALTER TABLE `science_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_result`
--
ALTER TABLE `all_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `class_lavel`
--
ALTER TABLE `class_lavel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `english_questions`
--
ALTER TABLE `english_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `math_questions`
--
ALTER TABLE `math_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `science_questions`
--
ALTER TABLE `science_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
