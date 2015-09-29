/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.0.45-community-nt-log : Database - db_uas_sihxsp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_uas_sihxsp` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_uas_sihxsp`;

/*Table structure for table `tbl_mahasiswa` */

DROP TABLE IF EXISTS `tbl_mahasiswa`;

CREATE TABLE `tbl_mahasiswa` (
  `id` int(8) NOT NULL auto_increment,
  `nama` varchar(35) default NULL,
  `alamat` varchar(55) default NULL,
  `nope` varchar(35) default NULL,
  `jeniskelamin` varchar(35) default NULL,
  `jurusan` varchar(35) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_mahasiswa` */

insert  into `tbl_mahasiswa`(`id`,`nama`,`alamat`,`nope`,`jeniskelamin`,`jurusan`) values (1,'RICARDO','jalan ketumban no 27','089621213','Laki-laki','teknik informatika');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
