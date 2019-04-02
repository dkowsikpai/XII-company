-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 03, 2017 at 09:05 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `comp`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `emp`
-- 

CREATE TABLE `emp` (
  `name` varchar(25) NOT NULL,
  `gender` char(2) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `parent` varchar(25) NOT NULL,
  `contact` int(12) NOT NULL,
  `emp_no` int(5) NOT NULL auto_increment,
  `depat` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `desig` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `del` int(1) NOT NULL default '0',
  `basic_pay` decimal(8,2) NOT NULL,
  `da` decimal(8,2) NOT NULL,
  `pf` decimal(8,2) NOT NULL,
  `hra` decimal(8,2) NOT NULL,
  `net_sal` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`emp_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

-- 
-- Dumping data for table `emp`
-- 

INSERT INTO `emp` VALUES ('Dinesh', 'M', 'Madassery House, Chendamangalam', '1969-05-05', 'Sadanandan', 1234567890, 1, 'Programming', 'Developing', 'PM', 'admin@gmail.com', 0, 100000.00, 50000.00, 50000.00, 50000.00, 150000.00);
INSERT INTO `emp` VALUES ('a', 'M', 'abc', '1234-12-20', 'c', 1234567890, 2, 'ff', 'gg', 'hh', 'tdasdt@', 0, 10000.00, 5000.00, 5000.00, 5000.00, 15000.00);
INSERT INTO `emp` VALUES ('Nandagopan', 'M', 'Madassery, Chendamangalam', '2000-04-17', 'Dinesh', 1234567890, 3, 'Computer Science', 'XII D', 'Student ', 'admin@gmail.com', 0, 15000.00, 3750.00, 3750.00, 3750.00, 18750.00);
INSERT INTO `emp` VALUES ('Kowsik', 'M', 'Madassery, Chendamangalam', '2000-04-17', 'Dinesh', 1234567890, 4, 'Computer Science', 'XII D', 'Student ', 'admin@gmail.com', 0, 12000.00, 1440.00, 1560.00, 3000.00, 14880.00);
INSERT INTO `emp` VALUES ('Kowsik N', 'M', 'Madassery, Chendamangalam', '2000-04-17', 'Dinesh', 1234567890, 5, 'Computer Science', 'XII D', 'Student ', 'admin@gmail.com', 0, 13000.00, 1820.00, 2080.00, 2600.00, 15340.00);
INSERT INTO `emp` VALUES ('Kowsik N', 'M', 'Madassery, Chendamangalam', '2000-04-17', 'Dinesh', 1234567890, 6, 'Computer Science', 'XII D', 'Student ', 'admin@gmail.com', 0, 18000.00, 4500.00, 1980.00, 1800.00, 22320.00);
INSERT INTO `emp` VALUES ('Anto', 'M', 'Varapuza', '2000-12-25', 'Josu', 2147483647, 8, 'Computer Science', 'XII D', 'Student', 'anto@gmail.com', 0, 14000.00, 2240.00, 2100.00, 3500.00, 17640.00);
INSERT INTO `emp` VALUES ('Raman', 'M', 'Kunnathutalli', '2000-04-17', 'Krishnan', 2147483647, 9, 'Self', 'Self', 'MD', 'raman@gmail.com', 0, 10000.00, 9500.00, 9500.00, 9500.00, 19500.00);
INSERT INTO `emp` VALUES ('Nandhu', 'M', 'Manally', '2000-06-15', 'Santhosh', 1234567890, 10, 'Computer Science', 'XII D', 'Student', 'nandhu@gmail.com', 1, 12000.00, 1440.00, 1560.00, 1800.00, 13680.00);
INSERT INTO `emp` VALUES ('Arun', 'M', 'Vazikulamkara', '1999-12-12', 'Varma', 123445678, 12, 'Commerce', 'XII C', 'Student', 'arun@gmail.com', 0, 2000.00, 240.00, 240.00, 240.00, 2240.00);
INSERT INTO `emp` VALUES ('Ajith', 'M', 'Kunnathutali', '2018-01-06', 'Kumar', 997744561, 13, 'Computer Science', 'XII D', 'Student', 'Ajith@yahoo.com', 1, 140000.00, 28000.00, 42000.00, 70000.00, 196000.00);
INSERT INTO `emp` VALUES ('Rameshan', 'M', 'Chendamangalam', '1977-03-20', 'dfasdf', 4544, 16, 'Grinding', 'Floor Mill', 'Operator', 'rameshan@hotmail.com', 0, 0.00, 0.00, 0.00, 0.00, 0.00);
INSERT INTO `emp` VALUES ('Raju', 'M', 'Karmbadam', '1978-10-02', 'Krishnan', 2147483647, 17, 'BSNL', 'Server', 'Mechanic', 'raju@bsnl.co.in', 0, 0.00, 0.00, 0.00, 0.00, 0.00);
