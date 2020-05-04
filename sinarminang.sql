/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.35-MariaDB : Database - sinarminang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sinarminang` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sinarminang`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `username` varchar(8) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `account` */

/*Table structure for table `bahan` */

DROP TABLE IF EXISTS `bahan`;

CREATE TABLE `bahan` (
  `ID` varchar(8) NOT NULL,
  `stok` int(255) DEFAULT NULL,
  `nama` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bahan` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `username` varchar(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(32) NOT NULL,
  `noHP` varchar(13) NOT NULL,
  `password` varchar(12) NOT NULL,
  `visited` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`username`),
  KEY `visited` (`visited`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `ID` varchar(8) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `laporan` */

/*Table structure for table `meja` */

DROP TABLE IF EXISTS `meja`;

CREATE TABLE `meja` (
  `nomor` int(100) NOT NULL,
  `kapasitas` int(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nomor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `meja` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `ID` varchar(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `promo` decimal(10,2) DEFAULT NULL,
  `resep` text NOT NULL,
  `rating` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `ID` varchar(8) NOT NULL,
  `accID` varchar(8) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `gender` char(1) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `account` (`accID`),
  CONSTRAINT `account` FOREIGN KEY (`accID`) REFERENCES `account` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pegawai` */

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `pesananID` varchar(8) NOT NULL,
  `menuID` varchar(8) NOT NULL,
  `mejaID` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`pesananID`),
  KEY `menuID` (`menuID`),
  KEY `mejaID` (`mejaID`),
  CONSTRAINT `mejaID` FOREIGN KEY (`mejaID`) REFERENCES `meja` (`nomor`),
  CONSTRAINT `menuID` FOREIGN KEY (`menuID`) REFERENCES `menu` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pesanan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
