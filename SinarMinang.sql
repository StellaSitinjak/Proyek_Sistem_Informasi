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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sinarminang` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `sinarminang`;

/*Table structure for table `bahan` */

DROP TABLE IF EXISTS `bahan`;

CREATE TABLE `bahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stok` int(255) NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `bahan` */

insert  into `bahan`(`id`,`stok`,`nama`,`satuan`,`created_at`,`updated_at`) values 
(1,21,'Banana','buah',NULL,'2020-06-13 04:45:42'),
(2,12,'Apple','buah',NULL,NULL),
(3,2,'Grape','buah',NULL,NULL),
(4,6,'Melon','buah',NULL,NULL),
(5,9,'Watermelon','buah',NULL,NULL),
(6,13,'Papaya','buah',NULL,NULL),
(7,22,'Nasi','kg','2020-05-25 09:56:57','2020-05-25 10:17:03'),
(8,5,'Ayam','kg','2020-06-13 06:28:07','2020-06-13 06:28:07');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noHP` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `visited` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customer` */

insert  into `customer`(`id`,`nama`,`alamat`,`birthdate`,`gender`,`email`,`noHP`,`visited`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Stella','Rumah','2000-05-12','P','stella@gmail.com','085359198820',1,NULL,'2020-05-21 14:53:25','2020-05-21 14:53:25'),
(17,'Tire','Rmh','2020-04-30','P','tire@gmail.com','085359198820',14,NULL,'2020-06-11 13:36:00','2020-06-14 06:44:11'),
(18,'Chain','lala','2020-05-01','L','try@gmail.com','lallalala',0,NULL,'2020-06-13 04:32:33','2020-06-13 04:32:33'),
(20,'Chain','lala','2020-05-01','L','chain@gmail.com','lallalala',0,NULL,'2020-06-13 04:33:00','2020-06-13 04:33:00');

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

CREATE TABLE `laporan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `laporan` */

/*Table structure for table `meja` */

DROP TABLE IF EXISTS `meja`;

CREATE TABLE `meja` (
  `id` int(11) NOT NULL,
  `kapasitas` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `booking` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `meja` */

insert  into `meja`(`id`,`kapasitas`,`status`,`booking`,`created_at`,`updated_at`) values 
(1,'4',1,NULL,NULL,NULL),
(2,'4',1,NULL,NULL,NULL),
(3,'4',1,'2020-06-13 20:19:00',NULL,'2020-06-13 13:19:26'),
(4,'4',1,NULL,NULL,'2020-06-14 07:30:26'),
(5,'6',0,NULL,NULL,'2020-06-13 06:48:02'),
(6,'8',0,NULL,NULL,'2020-06-13 06:48:49');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promo` decimal(8,2) NOT NULL,
  `resep` text COLLATE utf8_unicode_ci NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menu` */

insert  into `menu`(`id`,`nama`,`harga`,`jenis`,`promo`,`resep`,`file`,`rating`,`created_at`,`updated_at`) values 
(1,'Rendang','36000','Makanan',10.00,'admin\r\nmengelola menu promosi/diskon				\r\nmengelola keuangan: pemasukan & pengeluaran		\r\n\r\ninventory/chef\r\nmengelola stok\r\nmengelola resep/menu\r\n\r\ncustomer\r\nmemberi rating\r\nmemesan makanan\r\nmemesan meja\r\n\r\n	masukkan daging\r\nmengelola keuangan: pemasukan & pengeluaran\r\nmengelola meja yang tersedia\r\n\r\nregister\r\nmelihat menu yg paling sering dipesan\r\nmelihat menu yg jarang dipesan','image/img-01.jpg',5,NULL,'2020-06-13 06:30:35'),
(2,'Sate Padang','18000','Makanan',0.00,'','image/img-02.jpg',4,NULL,NULL),
(3,'Nasi Campur Padang','25000','Makanan',2.00,'','image/menu-3.jpg',4,NULL,'2020-05-21 14:54:09'),
(4,'Ikan Bakar Bumbu','24000','Makanan',0.00,'','image/menu-4.jpg',4,NULL,NULL),
(5,'Lemon Tea Minang','12000','Minuman',6.00,'','image/drink-1.jpg',4,NULL,'2020-05-04 14:54:12'),
(6,'Orange Juice + Lime','15000','Minuman',0.00,'','image/drink-2.jpeg',4,NULL,NULL),
(7,'Manggo Breeze','19000','Minuman',0.00,'','image/drink-3.jpg',3,NULL,'2020-05-10 14:54:16'),
(8,'Dalgona Coffee','17000','Minuman',20.00,'','image/drink-4.jpg',2,NULL,NULL),
(9,'Lapis Ketan Srikaya','5000','Kue',25.00,'','image/kue-1.jpg',3,NULL,'2020-05-01 14:54:22'),
(10,'Lemang Ungu','6000','Kue',35.00,'','image/kue-2.jpg',4,NULL,NULL),
(11,'Pie Gula Merah','7000','Kue',0.00,'','image/kue-3.jpg',5,NULL,'2020-05-04 14:54:27'),
(12,'Kue Apem','6500','Kue',0.00,'','image/kue-4.jpg',3,NULL,NULL),
(13,'Fresh Fruit','25000','Lainnya',11.00,'','image/fruit-1.jpg',4,NULL,'2020-05-09 14:54:30'),
(14,'VIP Fruit','32000','Lainnya',0.00,'','image/fruit-2.png',4,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(80,'2014_10_12_000000_create_users_table',3),
(81,'2020_05_06_171426_create_bahan_table',3),
(82,'2020_05_06_172050_create_customer_table',3),
(83,'2020_05_06_172459_create_laporan_table',3),
(84,'2020_05_06_172610_create_meja_table',3),
(85,'2020_05_06_172622_create_menu_table',3),
(86,'2020_05_06_172633_create_pegawai_table',3),
(87,'2020_05_06_172641_create_pesanan_table',3);

/*Table structure for table `pegawai` */

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noHP` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pegawai_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pegawai` */

insert  into `pegawai`(`id`,`nama`,`alamat`,`birthdate`,`gender`,`email`,`noHP`,`jabatan`,`remember_token`,`created_at`,`updated_at`) values 
(2,'Frame','Kantor','2020-04-30','L','frame@gmail.com','085359198820','Kasir',NULL,'2020-06-12 09:03:04','2020-06-12 09:03:04'),
(3,'Lala','Office','2020-05-09','P','lala@gmail.com','085359198820','Inventory/Chef',NULL,'2020-06-12 09:08:08','2020-06-12 09:08:08');

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `pesananID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(10) NOT NULL,
  `menuID` int(11) NOT NULL,
  `mejaID` int(11) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pesananID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pesanan` */

insert  into `pesanan`(`pesananID`,`userID`,`menuID`,`mejaID`,`jumlah`,`status`,`created_at`,`updated_at`) values 
(1,17,2,1,2,0,NULL,NULL),
(4,17,1,1,2,0,NULL,'2020-06-12 12:45:41'),
(13,1,1,2,1,0,NULL,NULL),
(14,17,3,1,1,1,NULL,NULL),
(15,17,3,1,1,0,'2020-06-13 04:16:18','2020-06-13 04:16:18'),
(16,17,4,1,1,0,'2020-06-13 04:25:16','2020-06-13 04:25:16'),
(17,17,1,1,1,0,'2020-06-13 06:42:00','2020-06-13 06:42:00'),
(18,17,0,3,0,0,'2020-06-13 13:14:47','2020-06-13 13:14:47');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
('admin@gmail.com','$2y$10$PYWsKzaLMaxXD0crQPRSfeDOZ/D0fABKf12Q8RcQ8RhfijnzikCW.',NULL,'2020-06-11 15:37:16','2020-06-11 15:37:16'),
('chain@gmail.com','$2y$10$zI3TbEZ3AMUU4ZRJX5T2u.Z7gKqE5R7.v6DnEH79TD3REpEEX3k0C',NULL,'2020-06-13 04:33:00','2020-06-13 04:33:00'),
('frame@gmail.com','$2y$10$g967jrFUiKDyS4jVJvFCMOBSJXStfyMVrrdMIBeKYsVMu0pbkdVUy',NULL,'2020-06-12 09:03:05','2020-06-12 09:03:05'),
('lala@gmail.com','$2y$10$gUCjhox.c2egpsfk6vSEAe9hiXcVrTjRtPKTFClbjZd.HcYU0HMbG',NULL,'2020-06-12 09:08:08','2020-06-12 09:08:08'),
('stella@gmail.com','$2y$10$eAGuoZjMg0k6/nHRU5tq1eEeV6aXMvcEmrkr6hLDGAv9OhphTmkxa',NULL,'2020-05-21 14:53:26','2020-05-21 14:53:26'),
('tire@gmail.com','$2y$10$kcJpYr08Y6l/rFBufXqRwuJp0K5biO5Vi0Ts2KKRoO436.y36XBpK',NULL,'2020-06-11 13:36:01','2020-06-11 13:36:01'),
('try@gmail.com','$2y$10$fPtH3vcPdo/Gvx9USgGvjOIv8D7AJtern1icP57O6v4Ft2MF.9Mv.',NULL,'2020-06-13 04:32:35','2020-06-13 04:32:35');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
