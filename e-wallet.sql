-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 01, 2021 at 01:55 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`) VALUES
(1, 'Farhanul');

-- --------------------------------------------------------

--
-- Table structure for table `user_balance`
--

CREATE TABLE `user_balance` (
  `ID_User` int(11) NOT NULL,
  `Balance` bigint(20) NOT NULL,
  `Income` bigint(20) NOT NULL,
  `Outcome` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_balance`
--

INSERT INTO `user_balance` (`ID_User`, `Balance`, `Income`, `Outcome`) VALUES
(1, 1000, 200, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_balance_history`
--

CREATE TABLE `user_balance_history` (
  `ID` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `Status` enum('Income','Outcome') NOT NULL,
  `Nominal` bigint(20) NOT NULL,
  `Tgl_Transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_balance_history`
--

INSERT INTO `user_balance_history` (`ID`, `ID_user`, `Status`, `Nominal`, `Tgl_Transaksi`) VALUES
(1, 1, 'Income', 200, '2021-10-28'),
(2, 1, 'Income', 500, '2020-10-14'),
(3, 1, 'Income', 800, '2021-04-05'),
(4, 1, 'Outcome', 500, '2021-10-04'),
(5, 1, 'Outcome', 400, '2021-09-29'),
(6, 1, 'Income', 700, '2021-10-13'),
(16, 1, 'Outcome', 800, '2021-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_balance`
--
ALTER TABLE `user_balance`
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `user_balance_history`
--
ALTER TABLE `user_balance_history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_user` (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_balance_history`
--
ALTER TABLE `user_balance_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_balance`
--
ALTER TABLE `user_balance`
  ADD CONSTRAINT `user_balance_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_balance_history`
--
ALTER TABLE `user_balance_history`
  ADD CONSTRAINT `user_balance_history_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `user` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
