-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 03:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courage_school_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(25) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `id` int(100) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`, `id`, `created_at`) VALUES
('admin@pc.edu.gh', 'newadmin', 'Adofo Michael', 1, '2020-11-12 23:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `password`, `created_at`, `updated_at`, `username`) VALUES
(29, '$2y$10$8b.R4dpT.v6R/O1fjUhBbeMBhzibM3pcG5j1kOKvLOGTa4Tksb7vK', '2021-11-10 17:36:30', '2021-11-10 17:36:30', 'sakoe courage'),
(30, '$2y$10$AgS0ZPlQJRUexgth2eOOquN5IqD109PGSM7zg.YHASxz4bEfOfdCy', '2021-11-11 17:08:46', '2021-11-11 17:08:46', 'james bond'),
(31, '$2y$10$xyLsVJAjW1gagZ9Uhgs/TORT9yfCiZFX9.WYueXXljo07.NsJt54q', '2021-11-11 19:32:25', '2021-11-11 19:32:25', 'king bright'),
(32, '$2y$10$6UbwOajVYAKi8FigIghPfOAJ4zaUFQ5nmuI3cHFNvyT1Mva..25Um', '2021-11-11 19:44:06', '2021-11-11 19:44:06', 'asare john'),
(33, '$2y$10$mzv.MLheOuFxbRQKBFG/WeU52wFb73KcW/ilMGTPN8Dns.V5RNLo.', '2021-11-11 19:48:16', '2021-11-11 19:48:16', 'esther sakoe'),
(34, '$2y$10$OnJbVRtMV8Yt625RNoAtVe.1T8N8CdnQVmjoStN71lVBIlBqUapAW', '2021-11-11 20:00:25', '2021-11-11 20:00:25', 'rand_one'),
(35, '$2y$10$KCzWpg0ujm/4Kk7Bp5wF7uq3AAmam5QKriVeStkkhLuaFyurpeBc6', '2021-11-11 20:04:33', '2021-11-11 20:04:33', 'rand_two'),
(36, '$2y$10$esVrawWdbgOEnXEw4lTfGumvdwrW0D3sgqEHCb267hcausFVMCfkO', '2021-11-11 20:08:26', '2021-11-11 20:08:26', 'rand_three'),
(37, '$2y$10$TpX/iAH/ogew8MKYzw2sXu1437ePZnOpDcwD4mrfHbjZLKCTiwS62', '2021-11-11 20:18:34', '2021-11-11 20:18:34', 'rand_four'),
(38, '$2y$10$itw1Dl8nq.XILA8sOCRG9OG6rOdc59WO3weUC0X7ykb1ygjhDKV1C', '2021-11-11 20:22:24', '2021-11-11 20:22:24', 'rand_five'),
(39, '$2y$10$NqorxzMr62wrVjD6VaFJA.NzjJrM44B2508Abuf.ECEDax90esQrO', '2021-11-11 20:25:44', '2021-11-11 20:25:44', 'rand_six'),
(40, '$2y$10$a0Tob3hWj7BmfeZaJm0dF.hF9bSp4RfXp732pv4ZYsdUS8n/EdSwi', '2021-11-11 20:29:34', '2021-11-11 20:29:34', 'rand_seven'),
(41, '$2y$10$a/KREYI392I3RDn1XXGTEetBzb8pLzcizehw/aLQY8dZe0w5S9GeC', '2021-11-11 20:33:51', '2021-11-11 20:33:51', 'rand_eight'),
(42, '$2y$10$vxclhS1Va.sjmqrtBp3Fk.wS0B1xMCLwbXBOZYHTJ2HGAt/HEj0LS', '2021-11-11 23:12:10', '2021-11-11 23:12:10', 'akorli courage'),
(43, '$2y$10$20OmH/6IdIBAhZVus5seCOBQtsACRoRaJW15HgaZXH2dq.y3UrbUW', '2021-11-12 00:44:51', '2021-11-12 00:44:51', 'jude aggah'),
(44, '$2y$10$v4d0L0zaT.m4Tx/DocoPsuXgyEl2/RLzAgGoNDrsVEv7yzkjXYHGG', '2021-11-12 21:11:13', '2021-11-12 21:11:13', 'new king'),
(45, '$2y$10$Tgty8zNRDmdJf90257eo6enCkQa1r.WYdW1BZ/QdiewrYYfd9SHh.', '2021-11-12 22:39:51', '2021-11-12 22:39:51', 'emmanuel agbozo'),
(46, '$2y$10$q63uRqcJl4zp/8PkkkFVb.jrMpT2wqazkrXSoWwbx7CwsO0EaR2pm', '2021-11-16 18:50:43', '2021-11-16 18:50:43', 'skjaykeys'),
(47, '$2y$10$hlEEHKsaNKm0j9eL8/kH7.7XbszLZKNr3oobhgqFtq0PDOstqc2T.', '2021-11-16 18:55:44', '2021-11-16 18:55:44', 'johny key'),
(48, '$2y$10$O3Bxyk77AAySAouyRIY/LO5os8JyO6ZU5Lwu2PV2w4rWUNoARe3v.', '2021-11-19 17:39:37', '2021-11-19 17:39:37', 'sakoe godfred');

-- --------------------------------------------------------

--
-- Table structure for table `applicants_data`
--

CREATE TABLE `applicants_data` (
  `id` int(11) NOT NULL,
  `salutation` varchar(5) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `dateofbirth` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `martialstatus` varchar(20) DEFAULT NULL,
  `homeregion` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `residentialaddr` varchar(100) DEFAULT NULL,
  `postaddr` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `disability` varchar(100) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `application` varchar(100) DEFAULT NULL,
  `salutation_g` varchar(5) DEFAULT NULL,
  `firstname_g` varchar(100) DEFAULT NULL,
  `lastname_g` varchar(100) DEFAULT NULL,
  `relation_g` varchar(100) DEFAULT NULL,
  `Address_g` varchar(100) DEFAULT NULL,
  `occupation_g` varchar(100) DEFAULT NULL,
  `contact_g` int(20) DEFAULT NULL,
  `email_g` varchar(100) DEFAULT NULL,
  `firstchoice_p` varchar(100) DEFAULT NULL,
  `secondchoice_p` varchar(100) DEFAULT NULL,
  `thirdchoice_p` varchar(100) DEFAULT NULL,
  `campus_p` varchar(100) DEFAULT NULL,
  `intake_p` varchar(100) DEFAULT NULL,
  `session_p` varchar(100) DEFAULT NULL,
  `applicant_id` int(11) DEFAULT NULL,
  `iscompleted` tinyint(1) NOT NULL,
  `isadmitted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants_data`
--

INSERT INTO `applicants_data` (`id`, `salutation`, `firstname`, `lastname`, `dateofbirth`, `gender`, `martialstatus`, `homeregion`, `street`, `residentialaddr`, `postaddr`, `city`, `country`, `religion`, `occupation`, `disability`, `contact`, `email`, `application`, `salutation_g`, `firstname_g`, `lastname_g`, `relation_g`, `Address_g`, `occupation_g`, `contact_g`, `email_g`, `firstchoice_p`, `secondchoice_p`, `thirdchoice_p`, `campus_p`, `intake_p`, `session_p`, `applicant_id`, `iscompleted`, `isadmitted`) VALUES
(25, 'Mr.', 'Sakoe', 'Courage', '11/10/2021', '', 'Single', 'accra/tema', 'PMB KIA 320', 'Tema steel company', 'asdf', 'accra', 'Ghana', 'christian', 'none', 'none', 203843143, 'akorlicourage@gmail.com', 'NULL', 'Mr.', 'rand_two', 'kobby', 'Father', 'ADJ/2 Adjei Kojo', 'worker', 549656666, 'Mamakottoh@gmail.com', 'GENERAL SCIENCE', 'GENERAL ARTS', 'BUSINESS', 'Abeka', 'May', 'Evening', 29, 1, 0),
(26, 'Mr.', 'james', 'bond', '11/03/2021', 'male', 'Single', 'accra/tema', 'accra', 'gh/Accra', 'z/10/631', 'accra', 'Ghana', 'christian', 'none', 'no', 2147483647, 'akorlicourage@gmail.com', 'NULL', 'Mr.', 'Akorli', 'Courage', 'father', 'Tesano', 'trader', 2147483647, 'aakka@gmail.com', 'GENERAL SCIENCE', 'GENERAL SCIENCE', 'GENERAL ARTS', 'Abeka', 'May', 'Evening', 30, 1, 0),
(27, 'Mr.', 'Bright', 'King', '11/03/2021', 'male', 'Single', 'accra/tema', 'Tesano', 'gh/Accra', 'P.O BOX 1233', 'accra', 'Ghana', 'christian', 'no', 'no', 2147483647, 'brightking@gmail.com', 'NULL', 'Mr.', 'King', 'Oduro', 'Father', 'PMB KIA 320', 'Steel worker', 203843143, 'mroduro@gmail.com', 'BUSINESS ', 'BUSINESS ', 'TECHNICAL STUDIES', 'Koforidua', 'September', 'Morning', 31, 1, 0),
(28, 'Mr.', 'Asare', 'John', '11/15/2021', 'male', 'Single', 'Fante Region', 'Fante', 'konte', 'pox 2344', 'Accra', 'Ghana', 'christian', 'student', 'no', 254555544, 'asarejohn@gmail.com', 'NULL', 'Mr.', 'Asare', 'Kobina', 'Step Father', 'pox 234', 'Driver', 54565222, 'kobinaasare@gmail.com', 'BUSINESS (MARKETING)', 'BUSINESS', 'INFORMATION COMMUNICATION TECHNOLOGY', 'Takoradi', 'May', 'Morning', 32, 1, 0),
(29, 'Mrs.', 'Esther', 'Sakoe', '04/18/2010', 'male', 'Single', 'Kpando', 'hohoe', 'accra', 'tema', 'accra', 'Ghana', 'christian', 'none', 'no', 2147483647, 'akorlicourage@gmail.com', 'NULL', 'Mrs.', 'Akorli', 'Joyce', 'mother', 'pox 234324', 'seller', 200955448, 'akorlij6@gmail.com', 'INFORMATION COMMUNICATION TECHNOLOGY', 'GENERAL ARTS', 'INFORMATION COMMUNICATION TEDCHNOLOGY', 'Ho', 'September', 'Weekend', 33, 1, 0),
(30, 'Mr.', 'rand_one', 'klago', '11/02/2021', 'male', 'Divorced', 'rand ssdkfl', 'kljsdf sadkfkk jkl', 'sadfj posx ss', 'pox isf23', 'accra', 'Ghana', 'christran', 'klklsdfsf', 'non', 556522222, 'rand_one@live.com', 'NULL', 'Mr.', 'rand_one', 'klago', 'dad', 'kljsdf sadkfkk jkl', 'none', 556522222, 'rand_one@live.com', 'INFORMATION COMMUNICATION TEDCHNOLOGY', 'BUSINESS', 'INFORMATION COMMUNICATION TECHNOLOGY', 'Ho', 'May', 'Evening', 34, 1, 0),
(31, 'Miss', 'rand_two', 'kobby', '11/15/2021', 'male', 'Married', 'GREATER ACCRA', 'ADJ/2 Adjei Kojo', 'gh/Accra', 'tema', 'Adjei Kojo', 'Ghana', 'christian', 'none', 'no', 549656666, 'Mamakottoh@gmail.com', 'NULL', 'Mr.', 'rand_two', 'dad', 'father', 'PMB KIA 320', 'none', 203843143, 'asarejohn@gmail.com', 'BUSINESS', 'VISUAL ARTS', 'GENERAL SCIENCE', 'Kumasi', 'May', 'Evening', 35, 1, 0),
(32, 'Mrs.', 'rand_three', 'Jason', '11/02/2021', 'male', 'Divorced', 'Fante Region', 'Fante', 'konte', 'pox 2344', 'Accra', 'Ghana', 'christian', 'none', 'no', 254555523, 'asarejohnssdfs@gmail.com', 'bece', 'Mr.', 'rand_three', 'dad', 'mother', 'Fante', 'trader', 254555523, 'sdsdfsdf@gmail.com', 'BUSINESS ', 'GENERAL SCIENCE', 'INFORMATION COMMUNICATION TEDCHNOLOGY', 'Ho', 'September', 'Evening', 36, 1, 0),
(33, 'Mr.', 'Sakoe', 'jay', '11/14/2021', 'male', 'Divorced', 'accra/tema', 'Tesano', 'gh/Accra', 'tema', 'accra', 'Ghana', 'muslim', 'none', 'none', 2147483647, 'skjay@gmail.com', 'NULL', 'Mrs.', 'Skjay', 'meean', 'mum', 'pox 8888', 'fishmoger', 587654565, 'skmom@gmail.com', 'GENERAL SCIENCE', 'GENERAL SCIENCE', 'GENERAL SCIENCE', 'Koforidua', 'May', 'Morning', 37, 1, 0),
(34, 'Mr.', 'rand_five', 'Serum', '11/02/2021', 'male', 'Married', 'Fante Region', 'Fante', 'konte', 'pox 2344', 'Accra', 'Ghana', 'muslim', 'soldier', 'none', 254555523, 'asarejohnssdfs@gmail.com', 'NULL', 'Miss', 'rand_five', 'mome', 'mommy', 'pox 55555', 'trader', 259796566, 'momeee@gmail.com', 'VISUAL ARTS', 'GENERAL SCIENCE', 'INFORMATION COMMUNICATION TEDCHNOLOGY', 'Kumasi', 'September', 'Weekend', 38, 1, 0),
(35, 'Mrs.', 'rand_six', 'userkeww', '11/03/2021', 'male', 'Single', 'accra/tema', 'Tesano', 'gh/Accra', 'pox 55sdfa', 'Accra', 'Ghana', 'muslim', 'non', 'no', 554885555, 'ceejay995@live.com', 'NULL', 'Mrs.', 'rand_six', 'dadd', 'father', 'pox 77555', 'driver', 88555666, 'dadddd@gmail.com', 'BUSINESS ', 'INFORMATION COMMUNICATION TECHNOLOGY', 'GENERAL SCIENCE', 'Ho', 'September', 'Evening', 39, 1, 0),
(36, 'Mr.', 'rand_seven', 'osei', '11/15/2021', 'female', 'Single', 'kobekuroo', 'kakaw234', 'ho', 'pox 555888', 'accra', 'Ghana', 'christian', 'officer', 'none', 588456522, 'rand_seven@live.com', 'NULL', 'Mrs.', 'rand_seven', 'guardian', 'guardian', 'pox 85555', 'trader', 52555444, 'guradianseven@gmail.com', 'VISUAL ARTS ', 'BUSINESS', 'INFORMATION COMMUNICATION TECHNOLOGY', 'Ho', 'September', 'Morning', 40, 1, 0),
(37, 'Mr.', 'rand_eight', 'Deku', '11/07/2021', 'female', 'Single', 'down', 'thllist', 'cors555', 'pox 7777', 'accra', 'Ghana', 'muslim', 'none', 'none', 56655555, 'ddddd@gmail.com', 'NULL', 'Mr.', 'Dekuss', 'Deks', 'father', 'pox 888', 'steel bender', 588888888, 'kes@gmail.com', 'VISUAL ARTS ', 'GENERAL ARTS', 'GENERAL ARTS', 'Koforidua', 'May', 'Weekend', 41, 1, 0),
(38, 'Mr.', 'sakoe', 'courage', '11/08/2021', 'female', 'Single', 'Greater Accra', 'ADJ/2 Adjei Kojo', 'gh/Accra', 'tema', 'Adjei Kojo', 'Ghana', 'christian', 'none', 'none', 204633788, 'Mamakottoh@gmail.com', 'NULL', 'Mr.', 'Sena', 'Sakoe', 'Father', 'zenu/z10/631', 'billionaire', 208981728, 'sksena@gmail.com', 'INFORMATION COMMUNICATION TECHNOLOGY', 'GENERAL SCIENCE', 'GENERAL ARTS', 'Abeka', 'May', 'Morning', 42, 1, 1),
(39, 'Mr.', 'Aggah', 'Jude', '11/10/2021', 'Male', 'Single', 'Fante Region', 'Fante', 'konte', 'pox 2344', 'Accra', 'Ghana', 'muslim', 'trader', 'no', 254555523, 'asarejohnssdfs@gmail.com', 'NULL', 'Mr.', 'rand_three', 'Jason', 'Father', 'Fante', 'worker', 254555523, 'asarejohnssdfs@gmail.com', 'TECHNICAL STUDIES', 'TECHNICAL STUDIES', 'TECHNICAL STUDIES', 'Kumasi', 'May', 'Morning', 43, 1, 0),
(41, 'Mr.', 'agbozo', 'emmanuel', '11/16/2021', 'Male', 'Married', 'Greater Accra', 'osu', 'labone', 'pox 2342', 'accra', 'Ghana', 'christian', 'none', 'none', 254555555, 'emma@gmail.com', 'NULL', 'Mr.', 'Agbozodad', 'emadad', 'Father', 'pox 19', 'workaholic', 54665555, 'mydad@gmail.com', 'TECHNICAL STUDIES', 'BUSINESS ', 'BUSINESS ', 'Koforidua', 'May', 'Evening', 45, 1, 1),
(44, 'Mrs.', 'Sakoe', 'Courage', '11/03/2021', 'Male', 'Single', 'accra/tema', 'PMB KIA 320', 'Tema steel company', 'asdf', 'accra', 'Ghana', 'ASDF', 'NONE', 'NONE', 203843143, 'akorlicourage@gmail.com', 'NULL', 'Mr.', 'Akorli', 'Courage', 'asdfggg', 'Tesano', 'worker', 2147483647, 'akorlicourage@gmail.com', 'INFORMATION COMMUNICATION TECHNOLOGY', 'VISUAL ARTS ', 'VISUAL ARTS ', 'Koforidua', 'May', 'Morning', 46, 1, 0),
(45, 'Mr.', 'Sakoe', 'Godfred', '4/20/2007', 'Male', 'Single', 'Greater Accra', 'BBC', 'BBC', 'BBC', 'Accra', 'Ghana', 'Christian', 'Student', 'No', 548677177, 'akorlicourage@gmail.com', 'NULL', 'Mr.', 'Akorli', 'Joyce', 'Mother', 'BBC', 'Enterpreneur', 552628310, 'akorlij@gmail.com', 'INFORMATION COMMUNICATION TECHNOLOGY', 'INFORMATION COMMUNICATION TEDCHNOLOGY', 'VISUAL ARTS ', 'Koforidua', 'May', 'Weekend', 48, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicants_documents`
--

CREATE TABLE `applicants_documents` (
  `id` int(11) NOT NULL,
  `applicants_id` int(11) DEFAULT NULL,
  `passport` varchar(100) DEFAULT NULL,
  `transcript` varchar(100) DEFAULT NULL,
  `other_documents` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants_documents`
--

INSERT INTO `applicants_documents` (`id`, `applicants_id`, `passport`, `transcript`, `other_documents`) VALUES
(12, 29, 'sakoe courage_passport.jpg', 'sakoe courage_transcript.pdf', NULL),
(13, 30, 'james bond_passport.jpg', 'james bond_transcript.pdf', NULL),
(14, 31, 'king bright_passport.jpg', 'king bright_transcript.pdf', 'king bright_otherdocs.pdf'),
(15, 32, 'asare john_passport.jpg', 'asare john_transcript.pdf', 'asare john_otherdocs.pdf'),
(16, 33, 'esther sakoe_passport.jpg', 'esther sakoe_transcript.pdf', NULL),
(17, 34, 'rand_one_passport.jpg', 'rand_one_transcript.pdf', NULL),
(18, 35, 'rand_two_passport.jpg', 'rand_two_transcript.pdf', 'rand_two_otherdocs.pdf'),
(19, 36, 'rand_three_passport.jpg', 'rand_three_transcript.pdf', 'rand_three_otherdocs.pdf'),
(20, 37, 'rand_four_passport.jpg', 'rand_four_transcript.pdf', 'rand_four_otherdocs.pdf'),
(21, 38, 'rand_five_passport.jpg', 'rand_five_transcript.pdf', 'rand_five_otherdocs.pdf'),
(22, 39, 'rand_six_passport.jpg', 'rand_six_transcript.pdf', NULL),
(23, 40, 'rand_seven_passport.jpg', 'rand_seven_transcript.pdf', NULL),
(24, 41, 'rand_eight_passport.jpg', 'rand_eight_transcript.pdf', 'rand_eight_otherdocs.pdf'),
(25, 42, 'akorli courage_passport.jpg', 'akorli courage_transcript.pdf', NULL),
(26, 43, 'jude aggah_passport.jpg', 'jude aggah_transcript.pdf', NULL),
(27, 44, 'new king_passport.jpeg', 'new king_transcript.pdf', NULL),
(28, 45, 'emmanuel agbozo_passport.jpg', 'emmanuel agbozo_transcript.pdf', NULL),
(29, 46, 'skjaykeys_passport.jpg', 'skjaykeys_transcript.pdf', NULL),
(30, 48, 'sakoe godfred_passport.jpg', 'sakoe godfred_transcript.pdf', 'sakoe godfred_otherdocs.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `applicants_exams`
--

CREATE TABLE `applicants_exams` (
  `id` int(11) UNSIGNED NOT NULL,
  `applicants_id` int(11) DEFAULT NULL,
  `exams_type` varchar(100) DEFAULT NULL,
  `sitting` varchar(100) DEFAULT NULL,
  `exams_year` int(100) DEFAULT NULL,
  `index_number` varchar(100) DEFAULT NULL,
  `course_one` varchar(255) DEFAULT NULL,
  `grade_one` varchar(2) DEFAULT NULL,
  `course_two` varchar(255) DEFAULT NULL,
  `grade_two` varchar(2) DEFAULT NULL,
  `course_three` varchar(255) DEFAULT NULL,
  `grade_three` varchar(2) DEFAULT NULL,
  `course_four` varchar(255) DEFAULT NULL,
  `grade_four` varchar(2) DEFAULT NULL,
  `course_five` varchar(255) DEFAULT NULL,
  `grade_five` varchar(2) DEFAULT NULL,
  `course_six` varchar(255) DEFAULT NULL,
  `grade_six` varchar(2) DEFAULT NULL,
  `course_seven` varchar(255) DEFAULT NULL,
  `grade_seven` varchar(2) DEFAULT NULL,
  `course_eight` varchar(255) DEFAULT NULL,
  `grade_eight` varchar(2) DEFAULT NULL,
  `course_nine` varchar(255) DEFAULT NULL,
  `grade_nine` varchar(2) DEFAULT NULL,
  `course_ten` varchar(255) DEFAULT NULL,
  `grade_ten` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicants_exams`
--

INSERT INTO `applicants_exams` (`id`, `applicants_id`, `exams_type`, `sitting`, `exams_year`, `index_number`, `course_one`, `grade_one`, `course_two`, `grade_two`, `course_three`, `grade_three`, `course_four`, `grade_four`, `course_five`, `grade_five`, `course_six`, `grade_six`, `course_seven`, `grade_seven`, `course_eight`, `grade_eight`, `course_nine`, `grade_nine`, `course_ten`, `grade_ten`) VALUES
(10, 29, 'bece', 'May/June(School)', 2012, '040916109', 'English', '1', 'Science', '3', 'core-maths', '3', 'e-maths', '5', 'Home Econs', '1', 'OWOP', '1', 'RME', '5', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 30, 'bece', 'May/June(School)', 2025, '040916109', 'e-maths', '5', 'core-maths', '4', 'social', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 31, 'bece (Ghanaian)', 'May/June(School)', 2029, '05AS/45', 'English', '2', 'French', '2', 'RME', '2', 'Science', '4', 'core-maths', '3', 'E-maths', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 32, 'bece (Ghanaian)', 'May/June(School)', 2021, 'asasdf55555', 'core-maths', '5', 'e-maths', '2', 'social', '1', 'English', '1', 'Science', '2', 'French', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 33, 'bece', 'Nov/Dec', 2020, 'asdfkllll4555', 'core-maths', '5', 'e-maths', '3', 'social', '3', 'OWOP', '2', 'ICT', '2', 'RME', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 34, 'bece', 'May/June(School)', 2023, '5444', 'e-maths', '5', 'social', '7', 'core-maths', '6', 'OWOP', '2', 'RME', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 35, 'bece (Ghanaian)', 'May/June(School)', 2019, '545asdf', 'asdfasdf', '5', 'dfdggg', '4', 'dfgggga', '6', 'sdf', '6', 'sdfdggg', '6', 'e-maths', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 36, 'bece Nigeria Only', 'May/June(School)', 2026, '5444ssdfs', 'emather', '7', 'core-maths', '7', 'asdfsf', '7', 'noting', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 37, 'bece', 'May/June(School)', 2010, '5444asdfa', 'e-maths', '7', 'core-maths', '7', 'hey', '6', 'nothing', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 38, 'bece (International)', 'Nov/Dec (Private)', 2001, 'aasdf', 'asdf', '7', 'core-maths', '6', 'e-maths', '6', 'sffgggg', '4', 'sahhrr', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 39, 'bece (Ghanaian)', 'Nov/Dec (Private)', 2020, '5444asdfff', 'emather', '8', 'core-maths', '5', 'social', '1', 'OWOP', '2', 'RME', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 40, 'bece (International)', 'May/June(School)', 2020, 'asfuck', 'OWOP', '2', 'e-maths', '2', 'core-maths', '2', 'RME', '2', 'ICT', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 41, 'bece (Ghanaian)', 'May/June(School)', 2019, '5444adf', 'emather', '2', 'e-maths', '3', 'hey', '7', 'core-maths', '6', 'OWOP', '2', 'RME', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 42, 'bece (Ghanaian)', 'May/June(School)', 2012, '040916109', 'e-maths', '5', 'core-maths', '5', 'OWOP', '2', 'RME', '1', 'Home Econs', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 43, 'bece (Ghanaian)', 'Nov/Dec (Private)', 2023, '5444', 'e-maths', '1', 'core-maths', '1', 'french', '2', 'twi', '2', 'OWOP', '2', 'RME', '2', 'OWOP', '2', 'Home Econs', '1', NULL, NULL, NULL, NULL),
(25, 44, 'bece (Ghanaian)', 'May/June(School)', 2020, '5444AAA', 'core-maths', '4', 'e-maths', '5', 'OWOP', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 45, 'bece', 'May/June(School)', 1990, 'SDF02005544', 'e maths', '2', 'core maths', '5', 'social studies', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 46, 'bece', 'Nov/Dec', 2025, '55sdfs', 'social studies', '2', 'e-maths', '2', 'French', '2', 'core-maths', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 48, 'bece (Ghanaian)', 'May/June(School)', 2021, 'SDF02005544', 'Social studies', '3', 'French', '3', 'English', '2', 'Twi', '4', 'Maths', '1', 'ICT', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `lecturer` varchar(100) DEFAULT NULL,
  `credit_hours` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `lecturer`, `credit_hours`) VALUES
(1, 'CSM 143', 'CALCULUS', 'Mr MICHAEL XENYA', '3'),
(2, 'ENTE 432', 'ELECTIVE MATHEMATICS', 'DR. RUHIYA ABUBAKAR', '3'),
(3, 'BIO 456', 'BILOGY', 'Mr Owusu Agyeman Antwi', '2'),
(4, 'CHEM 123', 'CHEMISTRY', 'MR. DEXUXA HILLALIMAN', '3'),
(5, 'MATH 601', 'CORE MATHEMATICS', 'MR. OSEI MCMILLAN', '2'),
(6, 'PHY 101', 'PHYSICS', 'MR. CHARLES OSEI', '3'),
(7, 'SOC 458', 'SOCIAL STUDIES', 'MR. EDWARK KEKUTU', '2'),
(8, 'SCI 403', 'INTEGRATED SCIENCE', 'MR. GOKA PRESIDO', '3'),
(9, 'ENG 405', 'ENGLISH', 'MR. ALIMAMU KOFI', '3');

-- --------------------------------------------------------

--
-- Table structure for table `course_enroll_list`
--

CREATE TABLE `course_enroll_list` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `course_one` varchar(100) DEFAULT NULL,
  `course_two` varchar(100) DEFAULT NULL,
  `course_three` varchar(100) DEFAULT NULL,
  `course_four` varchar(100) DEFAULT NULL,
  `course_five` varchar(100) DEFAULT NULL,
  `course_six` varchar(100) DEFAULT NULL,
  `course_seven` varchar(100) DEFAULT NULL,
  `course_eight` varchar(100) DEFAULT NULL,
  `course_nine` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_enroll_list`
--

INSERT INTO `course_enroll_list` (`id`, `student_id`, `firstname`, `lastname`, `course_one`, `course_two`, `course_three`, `course_four`, `course_five`, `course_six`, `course_seven`, `course_eight`, `course_nine`) VALUES
(4, 12, 'sakoe', 'courage', 'ADVANCED COMPUTER ARCHITECTURE', 'DATA COMMUNICATION AND COMPUTER NETWORKING', 'PROJECT WORK', 'PRINCIPLES OF PROGRAMING', 'DIGITAL COMPUTER LITERACY', 'PRINCIPLES OF PROGRAMING', 'DIGITAL COMPUTER LITERACY', 'PRINCIPLES OF ACCOUNTING', 'PROGRAMMING WITH VISUAL BASIC'),
(5, 14, 'Sakoe', 'Godfred', 'ADVANCED COMPUTER ARCHITECTURE', 'DATA COMMUNICATION AND COMPUTER NETWORKING', 'PROJECT WORK', 'PRINCIPLES OF PROGRAMING', 'DIGITAL COMPUTER LITERACY', 'PRINCIPLES OF PROGRAMING', 'DIGITAL COMPUTER LITERACY', 'PRINCIPLES OF ACCOUNTING', 'PROGRAMMING WITH VISUAL BASIC');

-- --------------------------------------------------------

--
-- Table structure for table `fee_payment_list`
--

CREATE TABLE `fee_payment_list` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `index_number` varchar(100) DEFAULT NULL,
  `transaction_id` varchar(200) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  `paid_at` datetime DEFAULT current_timestamp(),
  `payment_accepted` tinyint(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_payment_list`
--

INSERT INTO `fee_payment_list` (`id`, `student_id`, `firstname`, `lastname`, `index_number`, `transaction_id`, `amount`, `paid_at`, `payment_accepted`) VALUES
(16, 12, 'sakoe', 'courage', '0400038', '2548822-5545454-656565', 1900, '2021-11-19 09:32:16', 1),
(17, 13, 'agbozo', 'emmanuel', '0400041', '2548822-554545444-6565688', 1900, '2021-11-18 11:49:48', 1),
(18, 12, 'sakoe', 'courage', '0400038', '254882255-5852E545454-656565', 1900, '2021-11-19 17:10:40', 0),
(19, 14, 'Sakoe', 'Godfred', '0400045', '22385E-586612-7V8QT', 1900, '2021-11-19 18:06:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_table`
--

CREATE TABLE `students_table` (
  `id` int(11) NOT NULL,
  `applicants_data_id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `index_number` varchar(100) DEFAULT NULL,
  `passport` varchar(100) DEFAULT NULL,
  `current_level` int(20) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `session` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_table`
--

INSERT INTO `students_table` (`id`, `applicants_data_id`, `firstname`, `lastname`, `email`, `password`, `index_number`, `passport`, `current_level`, `contact`, `session`, `gender`, `created_at`, `updated_at`) VALUES
(12, 38, 'sakoe', 'courage', '0400038@pc.edu.gh', '$2y$10$5gWvpaAgUK3exBuJJ.pQAutJ.3UDyNb56inTBdOZ/Hfo1/JmOdnj.', '0400038', 'akorli courage_passport.jpg', 100, 204633788, 'Morning', 'male', '2021-11-19 09:04:29', '2021-11-19 09:04:29'),
(13, 41, 'agbozo', 'emmanuel', '0400041@pc.edu.gh', '$2y$10$mKMOHCluRDI5w.GBjWdRzO0QZxMbxRtVoqu.c00m0dw6zZKRLqyPG', '0400041', 'emmanuel agbozo_passport.jpg', 100, 254555555, 'Evening', 'Male', '2021-11-19 11:48:15', '2021-11-19 11:48:15'),
(14, 45, 'Sakoe', 'Godfred', '0400045@pc.edu.gh', '$2y$10$YZItPukTOQZnF.r1wRZKbuj1OQWD8yINA8gbsvLRWOvkUqa72tGuW', '0400045', 'sakoe godfred_passport.jpg', 100, 548677177, 'Weekend', 'Male', '2021-11-19 17:58:55', '2021-11-19 17:58:55'),
(15, 46, 'Yaw',  'Boamah',  '0400046@pc.edu.gh', '0400046', '0400046', 'yaw_passport.jpg', 100, 537465648, 'Morning', 'Male', '2023-11-29 21:34:11', '2023-11-29 21:34:11'),
(16, 47, 'Kofi', 'Adofo', '0400047@pc.edu.gh',  '0400047', '0400047', 'adofo_passport.jpg', 100, 537465000, 'Evening', 'Male', '2023-11-29 22:05:02', '2023-11-29 22:05:02');
-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `serialcode` varchar(8) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`serialcode`, `pincode`) VALUES
('qwertyup', 12345),
('ONhandsx', 543210),
('qwertyup', 12345),
('ONhandsx', 543210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants_data`
--
ALTER TABLE `applicants_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_data_ibfk_1` (`applicant_id`);
ALTER TABLE `applicants_data` ADD FULLTEXT KEY `firstchoice_p` (`firstchoice_p`);
ALTER TABLE `applicants_data` ADD FULLTEXT KEY `secondchoice_p` (`secondchoice_p`);
ALTER TABLE `applicants_data` ADD FULLTEXT KEY `thirdchoice_p` (`thirdchoice_p`);

--
-- Indexes for table `applicants_documents`
--
ALTER TABLE `applicants_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_id` (`applicants_id`);

--
-- Indexes for table `applicants_exams`
--
ALTER TABLE `applicants_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicants_exams_ibfk_1` (`applicants_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_enroll_list`
--
ALTER TABLE `course_enroll_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `fee_payment_list`
--
ALTER TABLE `fee_payment_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students_table`
--
ALTER TABLE `students_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_table_ibfk_1` (`applicants_data_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `applicants_data`
--
ALTER TABLE `applicants_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `applicants_documents`
--
ALTER TABLE `applicants_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `applicants_exams`
--
ALTER TABLE `applicants_exams`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course_enroll_list`
--
ALTER TABLE `course_enroll_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fee_payment_list`
--
ALTER TABLE `fee_payment_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students_table`
--
ALTER TABLE `students_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants_data`
--
ALTER TABLE `applicants_data`
  ADD CONSTRAINT `applicants_data_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicants_documents`
--
ALTER TABLE `applicants_documents`
  ADD CONSTRAINT `applicants_documents_ibfk_1` FOREIGN KEY (`applicants_id`) REFERENCES `applicants` (`id`);

--
-- Constraints for table `applicants_exams`
--
ALTER TABLE `applicants_exams`
  ADD CONSTRAINT `applicants_exams_ibfk_1` FOREIGN KEY (`applicants_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_enroll_list`
--
ALTER TABLE `course_enroll_list`
  ADD CONSTRAINT `course_enroll_list_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fee_payment_list`
--
ALTER TABLE `fee_payment_list`
  ADD CONSTRAINT `fee_payment_list_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students_table` (`id`);

--
-- Constraints for table `students_table`
--
ALTER TABLE `students_table`
  ADD CONSTRAINT `students_table_ibfk_1` FOREIGN KEY (`applicants_data_id`) REFERENCES `applicants_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
