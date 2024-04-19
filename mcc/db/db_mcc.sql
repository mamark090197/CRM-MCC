-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2024 at 10:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mcc_transm`
--

CREATE TABLE `mcc_transm` (
  `CompanyName` varchar(10) NOT NULL,
  `CorrectDob` varchar(10) NOT NULL,
  `Leads` varchar(10) NOT NULL,
  `LeadsID` varchar(10) NOT NULL,
  `ProductType` varchar(10) NOT NULL,
  `ToyotaDealer` varchar(10) NOT NULL,
  `AccountName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `GivenName` varchar(255) DEFAULT NULL,
  `MiddleName` varchar(255) DEFAULT NULL,
  `Suffix` varchar(255) DEFAULT NULL,
  `EmbosingName` varchar(255) DEFAULT NULL,
  `DateOfBirth` varchar(255) DEFAULT NULL,
  `PlaceOfBirth` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `CivilStatus` varchar(255) DEFAULT NULL,
  `CitizenShip` varchar(255) DEFAULT NULL,
  `CID` varchar(255) DEFAULT NULL,
  `HomePhone` varchar(255) DEFAULT NULL,
  `MobilePhone` varchar(255) DEFAULT NULL,
  `AlternativeNumber1` varchar(255) DEFAULT NULL,
  `AlternativeNumber2` varchar(255) DEFAULT NULL,
  `EmailAddress` varchar(255) DEFAULT NULL,
  `HomeAddress` varchar(255) DEFAULT NULL,
  `ZipCode` varchar(255) DEFAULT NULL,
  `HomeOwnership` varchar(255) DEFAULT NULL,
  `YearsOfStay` varchar(255) DEFAULT NULL,
  `EducationalAttaintment` varchar(255) DEFAULT NULL,
  `MothersMaidenName` varchar(255) DEFAULT NULL,
  `Tin` varchar(255) DEFAULT NULL,
  `OtherIdCardType` varchar(255) DEFAULT NULL,
  `SourceOfFunds` varchar(255) DEFAULT NULL,
  `NatureOfBusiness` varchar(255) DEFAULT NULL,
  `YearsWithCurrentCompany` varchar(255) DEFAULT NULL,
  `TotalYearsWorking` varchar(255) DEFAULT NULL,
  `EmploymentStatus` varchar(255) DEFAULT NULL,
  `CpName` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `OfficePhone` varchar(255) DEFAULT NULL,
  `OfficeAddress` varchar(255) DEFAULT NULL,
  `OfficeZipCode` varchar(255) DEFAULT NULL,
  `DeliveryTag` varchar(255) DEFAULT NULL,
  `OfficeCardNo` varchar(255) DEFAULT NULL,
  `OfficeIssuingBank` varchar(255) DEFAULT NULL,
  `OfficeCreditLimit` varchar(255) DEFAULT NULL,
  `OfficeMemberSince` varchar(255) DEFAULT NULL,
  `SuppleLastname` varchar(255) DEFAULT NULL,
  `SuppleGivenName` varchar(255) DEFAULT NULL,
  `SuppleMiddleName` varchar(255) DEFAULT NULL,
  `SuppleSuffix` varchar(255) DEFAULT NULL,
  `SuppleEmbossingName` varchar(255) DEFAULT NULL,
  `SuppleDateOfBirth` varchar(255) DEFAULT NULL,
  `SupplePlaceOfBirth` varchar(255) DEFAULT NULL,
  `SuppleCitizenShip` varchar(255) DEFAULT NULL,
  `SuppleSourceOfFund` varchar(255) DEFAULT NULL,
  `SuppleRelationShipWithPrincipal` varchar(255) DEFAULT NULL,
  `SuppleCreditLimit` varchar(255) DEFAULT NULL,
  `SuppleAddressAndZipCode` varchar(50) DEFAULT NULL,
  `SupplePhoneNumber` varchar(50) DEFAULT NULL,
  `SuppleMobileNumber` varchar(50) DEFAULT NULL,
  `Supple2Lastname` varchar(50) DEFAULT NULL,
  `Supple2GivenName` varchar(50) DEFAULT NULL,
  `Supple2Suffix` varchar(50) DEFAULT NULL,
  `Supple2EmbossingName` varchar(50) DEFAULT NULL,
  `Supple2DateOfBirth` date DEFAULT NULL,
  `Supple2PlaceOfBirth` varchar(50) DEFAULT NULL,
  `Supple2CitizenShip` varchar(50) DEFAULT NULL,
  `Supple2SourceOfFund` varchar(50) DEFAULT NULL,
  `Supple2RelationshipWithPrincipal` varchar(50) DEFAULT NULL,
  `Supple2CreditLimit` varchar(50) DEFAULT NULL,
  `Supple2AddressAndZipCode` varchar(50) DEFAULT NULL,
  `Supple2PhoneNumber` varchar(50) DEFAULT NULL,
  `Supple2MobileNumber` varchar(255) DEFAULT NULL,
  `Supple3GivenName` varchar(50) DEFAULT NULL,
  `Supple3MiddleName` varchar(50) DEFAULT NULL,
  `Supple3EmbossingName` varchar(50) DEFAULT NULL,
  `Supple3DateOfBirth` date DEFAULT NULL,
  `Supple3PlaceOfBirth` date DEFAULT NULL,
  `Supple3CitezenShip` varchar(50) DEFAULT NULL,
  `Supple3SourceOfFund` varchar(50) DEFAULT NULL,
  `Supple3RelationshipWithPrincipal` varchar(50) DEFAULT NULL,
  `Supple3CreditLimit` varchar(50) DEFAULT NULL,
  `Suple3AddressAndZipCode` varchar(50) DEFAULT NULL,
  `Supple3PhoneNumber` varchar(50) DEFAULT NULL,
  `Supple3MobileNumber` varchar(50) DEFAULT NULL,
  `Supple4LastName` varchar(50) DEFAULT NULL,
  `Supple4GivenName` varchar(50) DEFAULT NULL,
  `Supple4MiddleName` varchar(50) DEFAULT NULL,
  `Supple4Suffix` varchar(50) DEFAULT NULL,
  `Supple4EmbossingName` varchar(50) DEFAULT NULL,
  `Supple4DateOfBirth` date DEFAULT NULL,
  `Supple4PlaceOfBirth` varchar(100) DEFAULT NULL,
  `Supple4Citizenship` varchar(50) DEFAULT NULL,
  `Supple4SourceOfFund` varchar(50) DEFAULT NULL,
  `Supple4RelationshipWithPrincipal` varchar(50) DEFAULT NULL,
  `Supple4CreditLimit` decimal(10,2) DEFAULT NULL,
  `Supple4AddressAndZipCode` varchar(100) DEFAULT NULL,
  `Supple4PhoneNumber` varchar(50) DEFAULT NULL,
  `Supple4MobileNumber` varchar(50) DEFAULT NULL,
  `MsoaEnrollment` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcc_transm`
--

INSERT INTO `mcc_transm` (`CompanyName`, `CorrectDob`, `Leads`, `LeadsID`, `ProductType`, `ToyotaDealer`, `AccountName`, `LastName`, `GivenName`, `MiddleName`, `Suffix`, `EmbosingName`, `DateOfBirth`, `PlaceOfBirth`, `Gender`, `CivilStatus`, `CitizenShip`, `CID`, `HomePhone`, `MobilePhone`, `AlternativeNumber1`, `AlternativeNumber2`, `EmailAddress`, `HomeAddress`, `ZipCode`, `HomeOwnership`, `YearsOfStay`, `EducationalAttaintment`, `MothersMaidenName`, `Tin`, `OtherIdCardType`, `SourceOfFunds`, `NatureOfBusiness`, `YearsWithCurrentCompany`, `TotalYearsWorking`, `EmploymentStatus`, `CpName`, `Position`, `OfficePhone`, `OfficeAddress`, `OfficeZipCode`, `DeliveryTag`, `OfficeCardNo`, `OfficeIssuingBank`, `OfficeCreditLimit`, `OfficeMemberSince`, `SuppleLastname`, `SuppleGivenName`, `SuppleMiddleName`, `SuppleSuffix`, `SuppleEmbossingName`, `SuppleDateOfBirth`, `SupplePlaceOfBirth`, `SuppleCitizenShip`, `SuppleSourceOfFund`, `SuppleRelationShipWithPrincipal`, `SuppleCreditLimit`, `SuppleAddressAndZipCode`, `SupplePhoneNumber`, `SuppleMobileNumber`, `Supple2Lastname`, `Supple2GivenName`, `Supple2Suffix`, `Supple2EmbossingName`, `Supple2DateOfBirth`, `Supple2PlaceOfBirth`, `Supple2CitizenShip`, `Supple2SourceOfFund`, `Supple2RelationshipWithPrincipal`, `Supple2CreditLimit`, `Supple2AddressAndZipCode`, `Supple2PhoneNumber`, `Supple2MobileNumber`, `Supple3GivenName`, `Supple3MiddleName`, `Supple3EmbossingName`, `Supple3DateOfBirth`, `Supple3PlaceOfBirth`, `Supple3CitezenShip`, `Supple3SourceOfFund`, `Supple3RelationshipWithPrincipal`, `Supple3CreditLimit`, `Suple3AddressAndZipCode`, `Supple3PhoneNumber`, `Supple3MobileNumber`, `Supple4LastName`, `Supple4GivenName`, `Supple4MiddleName`, `Supple4Suffix`, `Supple4EmbossingName`, `Supple4DateOfBirth`, `Supple4PlaceOfBirth`, `Supple4Citizenship`, `Supple4SourceOfFund`, `Supple4RelationshipWithPrincipal`, `Supple4CreditLimit`, `Supple4AddressAndZipCode`, `Supple4PhoneNumber`, `Supple4MobileNumber`, `MsoaEnrollment`) VALUES
('asdas', 'asdasd', 'adasd', 'asdasd', 'adasd', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('123123', '123123', '123123', '123123', '12321', '12312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12312', '12312', '12312', '123123', '12312', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('12312', '123123', '123123', '123123', '123123', '123123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('asi', '13123', '123123', '123123', '123123', '12312312', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('check', '1414', '123', '#1234124', 'PL', 'TESSDAW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('sampple', 'sampple', 'sampple', 'sampple', 'sampple', 'sampple', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
