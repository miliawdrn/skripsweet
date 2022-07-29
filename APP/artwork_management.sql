-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 07:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artwork_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork_draft`
--

CREATE TABLE `artwork_draft` (
  `drafter_id` int(11) NOT NULL,
  `jo_number` int(11) NOT NULL,
  `drafter_name` varchar(30) NOT NULL,
  `artwork_draft_doc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artwork_final`
--

CREATE TABLE `artwork_final` (
  `corrector_id` int(11) NOT NULL,
  `jo_number` int(11) NOT NULL,
  `corrector_name` varchar(30) NOT NULL,
  `artwork_final_doc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `attachment_doc`
--

CREATE TABLE `attachment_doc` (
  `specialist_id` int(11) NOT NULL,
  `jo_number` int(11) NOT NULL,
  `specialist_name` varchar(30) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `corrector_comment`
--

CREATE TABLE `corrector_comment` (
  `corrector_id` int(11) NOT NULL,
  `jo_number` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `corrector_user`
--

CREATE TABLE `corrector_user` (
  `corrector_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `corrector_nik` varchar(10) NOT NULL,
  `corrector_full_name` varchar(100) NOT NULL,
  `corrector_role` varchar(10) NOT NULL,
  `corrector_username` varchar(25) NOT NULL,
  `corrector_join_date` date NOT NULL,
  `corrector_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `drafter_user`
--

CREATE TABLE `drafter_user` (
  `drafter_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `drafter_nik` varchar(10) NOT NULL,
  `drafter_full_name` varchar(100) NOT NULL,
  `drafter_role` varchar(10) NOT NULL,
  `drafter_username` varchar(25) NOT NULL,
  `drafter_join_date` date NOT NULL,
  `drafter_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_order`
--

CREATE TABLE `job_order` (
  `jo_number` int(11) NOT NULL,
  `artwork_status` varchar(10) NOT NULL,
  `jo_input_date` date NOT NULL,
  `jo_due_date` date NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `drug_category` varchar(50) NOT NULL,
  `dosage_form` varchar(50) NOT NULL,
  `roa` varchar(50) NOT NULL,
  `storage` varchar(50) NOT NULL,
  `mfg_by` varchar(50) NOT NULL,
  `import_by` varchar(50) NOT NULL,
  `under_license` varchar(50) NOT NULL,
  `mkt_by` varchar(50) NOT NULL,
  `no_cc` varchar(50) NOT NULL,
  `cc_detail` varchar(500) NOT NULL,
  `compositon` varchar(50) NOT NULL,
  `presentation` varchar(50) NOT NULL,
  `nie` varchar(50) NOT NULL,
  `dimension` varchar(50) NOT NULL,
  `packaging` varchar(50) NOT NULL,
  `item_number` int(10) NOT NULL,
  `specialist_name` varchar(50) NOT NULL,
  `drafter_name` varchar(50) NOT NULL,
  `corrector_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_role`
--

CREATE TABLE `master_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_role`
--

INSERT INTO `master_role` (`role_id`, `role`) VALUES
(1, 'specialist'),
(2, 'drafter'),
(3, 'corrector');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_user`
--

CREATE TABLE `specialist_user` (
  `specialist_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `specialist_nik` varchar(10) NOT NULL,
  `specialist_full_name` varchar(100) NOT NULL,
  `specialist_role` varchar(10) NOT NULL,
  `specialist_username` varchar(25) NOT NULL,
  `specialist_join_date` date NOT NULL,
  `specialist_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialist_user`
--

INSERT INTO `specialist_user` (`specialist_id`, `role_id`, `specialist_nik`, `specialist_full_name`, `specialist_role`, `specialist_username`, `specialist_join_date`, `specialist_password`) VALUES
(1, 1, 'SP00012345', 'Gina Sonya', 'Specialist', 'gmo', '2019-05-01', 'gmo123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artwork_draft`
--
ALTER TABLE `artwork_draft`
  ADD PRIMARY KEY (`drafter_id`),
  ADD KEY `jo_number` (`jo_number`);

--
-- Indexes for table `artwork_final`
--
ALTER TABLE `artwork_final`
  ADD PRIMARY KEY (`corrector_id`),
  ADD KEY `jo_number` (`jo_number`);

--
-- Indexes for table `attachment_doc`
--
ALTER TABLE `attachment_doc`
  ADD PRIMARY KEY (`specialist_id`),
  ADD KEY `jo_number` (`jo_number`);

--
-- Indexes for table `corrector_comment`
--
ALTER TABLE `corrector_comment`
  ADD KEY `jo_number` (`jo_number`);

--
-- Indexes for table `corrector_user`
--
ALTER TABLE `corrector_user`
  ADD PRIMARY KEY (`corrector_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `drafter_user`
--
ALTER TABLE `drafter_user`
  ADD PRIMARY KEY (`drafter_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `job_order`
--
ALTER TABLE `job_order`
  ADD PRIMARY KEY (`jo_number`);

--
-- Indexes for table `master_role`
--
ALTER TABLE `master_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `specialist_user`
--
ALTER TABLE `specialist_user`
  ADD PRIMARY KEY (`specialist_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork_draft`
--
ALTER TABLE `artwork_draft`
  MODIFY `drafter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artwork_final`
--
ALTER TABLE `artwork_final`
  MODIFY `corrector_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attachment_doc`
--
ALTER TABLE `attachment_doc`
  MODIFY `specialist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corrector_user`
--
ALTER TABLE `corrector_user`
  MODIFY `corrector_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drafter_user`
--
ALTER TABLE `drafter_user`
  MODIFY `drafter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_order`
--
ALTER TABLE `job_order`
  MODIFY `jo_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_role`
--
ALTER TABLE `master_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialist_user`
--
ALTER TABLE `specialist_user`
  MODIFY `specialist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artwork_draft`
--
ALTER TABLE `artwork_draft`
  ADD CONSTRAINT `artwork_draft_ibfk_1` FOREIGN KEY (`jo_number`) REFERENCES `job_order` (`jo_number`);

--
-- Constraints for table `artwork_final`
--
ALTER TABLE `artwork_final`
  ADD CONSTRAINT `artwork_final_ibfk_1` FOREIGN KEY (`jo_number`) REFERENCES `job_order` (`jo_number`);

--
-- Constraints for table `attachment_doc`
--
ALTER TABLE `attachment_doc`
  ADD CONSTRAINT `attachment_doc_ibfk_1` FOREIGN KEY (`jo_number`) REFERENCES `job_order` (`jo_number`);

--
-- Constraints for table `corrector_comment`
--
ALTER TABLE `corrector_comment`
  ADD CONSTRAINT `corrector_comment_ibfk_1` FOREIGN KEY (`jo_number`) REFERENCES `job_order` (`jo_number`);

--
-- Constraints for table `corrector_user`
--
ALTER TABLE `corrector_user`
  ADD CONSTRAINT `corrector_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `master_role` (`role_id`);

--
-- Constraints for table `drafter_user`
--
ALTER TABLE `drafter_user`
  ADD CONSTRAINT `drafter_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `master_role` (`role_id`);

--
-- Constraints for table `specialist_user`
--
ALTER TABLE `specialist_user`
  ADD CONSTRAINT `specialist_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `master_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
