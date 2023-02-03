-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 10:28 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `id` int(70) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pword` varchar(210) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL,
  `role` varchar(130) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `staffid` varchar(80) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`id`, `fname`, `email`, `pword`, `passport`, `status`, `role`, `phone`, `staffid`, `updated_at`) VALUES
(1, 'Admin', 'admin@live.com', '81dc9bdb52d04dc20036dbd8313ed055', 'pic/christina-wocintechchat-com-Zpzf7TLj_g-unsplash.jpg', 'Admin', 'Founder', '08123232323', 'LM100', '2023-01-26 15:16:26'),
(3, 'Desmond Tutu', 'desmond@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'pic/pavel-anoshin-d0peGya6R5Y-unsplash.jpg', 'Tutor', 'Front-End Tutor', '09012121224', 'LM201', '2023-02-03 06:48:17'),
(23, 'Alexia Okwudiri', 'lexia67@live.com', '81dc9bdb52d04dc20036dbd8313ed055', 'pic/christina-wocintechchat-com-8jwCWlsBy8-unsplash.jpg', 'Tutor', 'Back-End Tutor', '09067686877', 'LM358', '2023-01-27 10:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `email` varchar(220) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(150) NOT NULL,
  `title` varchar(50) NOT NULL,
  `assignment` varchar(200) NOT NULL,
  `duedate` date NOT NULL,
  `assid` varchar(200) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `email`, `date`, `course`, `title`, `assignment`, `duedate`, `assid`, `updated_at`) VALUES
(11, 'lexia67@live.com', '2023-01-26', 'Product Design', 'Wireframe', '../assignment/Brian Tracy- Eat That Frog.pdf', '2023-01-31', 'ASS179', '2023-01-26 13:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `assid` varchar(50) NOT NULL,
  `regnum` varchar(200) NOT NULL,
  `assignment` varchar(300) NOT NULL,
  `grade` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `date`, `assid`, `regnum`, `assignment`, `grade`, `updated_at`) VALUES
(3, '2023-01-26', 'ASS426', 'LM12695', 'assignment/BESTWILL- Loving Adesuwa.pdf', 44, '2023-02-01 12:03:30'),
(4, '2023-01-26', 'ASS179', 'LM12204', '../assignment/Kenneth Blanchard- Who moved my cheese.pdf', 70, '2023-02-03 08:42:21'),
(5, '2023-01-24', 'ASS426', 'LM12204', 'assignment/BESTWILL- Loving Adesuwa.pdf', 0, '2023-02-01 11:55:03'),
(6, '2023-01-27', 'ASS179', 'LM12695', 'assignment/BESTWILL- Loving Adesuwa.pdf', 0, '2023-02-01 11:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `event` varchar(500) NOT NULL,
  `time` varchar(15) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `event`, `time`, `updated_at`) VALUES
(3, '2023-02-01', '', '05:57:', '2023-02-02 14:58:19'),
(4, '2023-02-01', '', '05:57:', '2023-02-02 14:59:07'),
(5, '2023-02-01', '', '05:57:', '2023-02-02 14:59:50'),
(13, '2023-02-01', 'CSR at St John of God School ', '06:30', '2023-02-02 15:28:39'),
(14, '2023-02-02', 'CSR at St John of God School ', '06:29', '2023-02-02 15:29:33'),
(15, '2023-02-09', 'CSR at Flora Field School ', '09:30', '2023-02-02 15:30:17'),
(16, '2023-02-08', 'CSR at St Mary School ', '13:30', '2023-02-02 15:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(11) NOT NULL,
  `passport` varchar(120) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `address` varchar(150) NOT NULL,
  `state` varchar(50) NOT NULL,
  `course` varchar(80) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `email` varchar(90) NOT NULL,
  `pword` varchar(250) NOT NULL,
  `regnum` varchar(70) NOT NULL,
  `status` varchar(80) NOT NULL,
  `quizscore` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `passport`, `fname`, `dob`, `gender`, `phone`, `address`, `state`, `course`, `bio`, `email`, `pword`, `regnum`, `status`, `quizscore`, `updated_at`) VALUES
(1, 'pic/elizeu-dias-2EGNqazbAMk-unsplash.jpg', 'Cletus Okpalaeze', '1995-12-30', 'Male', '08123232322', '105, Emeka Offor Drive, Lagos', 'Abia', 'Front-end Web Development', 'I am smart and result driven and would love to join', 'cletus67@live.com', '81dc9bdb52d04dc20036dbd8313ed055', 'LM12695', 'Admitted', '', '2023-02-03 08:01:38'),
(2, 'pic/christina-wocintechchat-com-SJvDxwazqw-unsplash.jpg', 'Ifeoma Mbadike', '2005-11-27', 'Female', '08123232329', '105, Emeka Offor Drive, Awka', 'Imo', 'Back-end Web Development', 'I love coding and I am a fast learner', 'ify4real@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Suspended', '', '2023-02-03 08:30:10'),
(3, 'pic/rui-silvestre-jeVRUQslTs-unsplash.jpg', 'Melidem Mba', '1996-02-06', 'Male', '09012121212', '105, Emeka Offor Drive, Awka', 'Abia', 'Product Design', 'I love coding', 'lemedim@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Suspended', '', '2023-02-03 08:30:10'),
(5, 'pic/alex-starnes-WYE2UhXsU1-unsplash.jpg', 'Alexia Amadi', '1995-12-07', 'Female', '08123232328', '105, Emeka Offor Drive, Awka', 'Ebonyi', 'Product Design', 'I am a newbie in tech, I want to join the program to learn more.', 'alexia1@live.com', '81dc9bdb52d04dc20036dbd8313ed055', 'LM12204', 'Admitted', '', '2023-01-31 23:09:29'),
(6, 'pic/christina-wocintechchat-com-SJvDxwazqw-unsplash.jpg', 'Rose Emeli', '1992-01-12', 'Female', '09023232346', '2, James Crescent, Apapa, Lagos', 'Abia', 'Front-end Web Development', 'iiiii', 'rose67@live.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Suspended', '', '2023-02-03 08:30:10'),
(8, 'pic/profile.png', 'Felix Okoye', '2000-09-15', 'Male', '07090909077', '12A, Puma Avenue, Ikorodu, Lagos', 'Imo', 'Front-end Web Development', 'I love coding and want to join to know more', 'felix4@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Suspended', '', '2023-02-03 08:30:10'),
(9, 'pic/etty-fidele-AzVexpHvuK-unsplash.jpg', 'Bisi Oyewole', '2000-01-10', 'Female', '08123232329', '2, Fagbile Street, Isheri, Lagos', 'Ekiti', 'Back-end Web Development', 'Learning is in my blood. I will love to learn how to code and be a full-stack developer.', 'bisi67@live.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Suspended', '', '2023-02-03 08:30:10'),
(10, 'pic/prince-akachi-4Yv84VgQkR-unsplash.jpg', 'Joel Okpala', '1991-05-10', 'Male', '09021212345', '12A, Puma Avenue, Ikorodu, Lagos', 'Imo', 'Back-end Web Development', 'I am already trained in front end so it is backend for me', 'joel67@live.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Suspended', '', '2023-02-03 08:30:10'),
(11, 'pic/ryan-hoffman-Ft4p5E9HjT-unsplash.jpg', 'Emeka Amadi', '1993-07-10', 'Male', '09067686877', '105, Emeka Offor Drive, Lagos', 'Abia', 'Back-end Web Development', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium velit tenetur recusandae quae voluptatibus nobis labore iste, molestias dignissimos animi accusamus ipsum commodi qui deleniti aspernatur libero, sint hic reiciendis.', 'emeka@live.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Denied', '', '2023-02-03 08:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `fname` varchar(190) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `ticketid` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `status` varchar(30) NOT NULL,
  `attendedby` varchar(240) NOT NULL,
  `date` date NOT NULL,
  `reply` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `fname`, `email`, `phone`, `ticketid`, `subject`, `message`, `status`, `attendedby`, `date`, `reply`, `updated_at`) VALUES
(1, 'Alexia Amadi', 'alexia1@live.com', '08123232328', 'SUP788', 'PAYMENT', 'Are we to pay for this course?', 'Pending', '', '2023-01-24', '', '2023-02-01 09:04:21'),
(2, 'Cletus Okpalaeze', 'cletus67@live.com', '08123232323', 'SUP207', 'REMINDER', 'Please when do we begin?  ', 'Pending', '', '2023-01-24', '', '2023-02-01 08:51:45'),
(3, 'Cletus Okpalaeze', 'cletus67@live.com', '08123232322', 'SUP450', 'PAYMENT', 'Is it free or paid course?', 'Resolved', 'Admin', '2023-02-01', 'free', '2023-02-01 11:17:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindata`
--
ALTER TABLE `admindata`
  MODIFY `id` int(70) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
