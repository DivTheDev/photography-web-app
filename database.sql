/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.37-MariaDB : Database - photography
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`photography` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `photography`;

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `numbers` varchar(50) DEFAULT NULL,
  `description` text,
  `image` varchar(50) DEFAULT NULL,
  `insertion_date` DATETIME DEFAULT NULL,
  `inserted_by` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(1,'Stars in the universe','London','1','Billion stars in the universe','gallery-1.jpg',NOW(),3,'abstract');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(2,'Windy day','London','2','Flying hair','gallery-2.jpg',NOW(),3,'weather');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(3,'Light house','London','3','Lighthouse on the cliff','gallery-3.jpg',NOW(),3,'buildings');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(4,'Wedding','London','3','Happiest person in the world','gallery-4.jpg',NOW(),3,'event');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(5,'In the woods','London','3','darkness in the forest','gallery-5.jpg',NOW(),3,'nature');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(6,'Dusk and dawn','London','3','Weather today..very foggy','gallery-6.jpg',NOW(),3,'buildings');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(7,'Dessert','London','3','Lost in the desert','gallery-7.jpg',NOW(),3,'nature');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(8,'Cliff','London','3','Ready to jump in the water','gallery-8.jpg',NOW(),3,'nature');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(9,'Tram','london','3','Snowy weather...journey in tram','gallery-9.jpg',NOW(),3,'weather');
insert  into `images`(`id`,`title`,`location`,`numbers`,`description`,`image`,`insertion_date`,`inserted_by`,`type`) values 
(10,'Photoshoot','london','3','Rainy weather...always ready for pictures','gallery-10.jpg',NOW(),3,'weather');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`f_name`,`l_name`,`user_name`,`email`,`password`,`dob`) values 
(1,'zeel','jethwa','zeelthedesigner','1826924@brunel.ac.uk','zeel','2000-04-28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
