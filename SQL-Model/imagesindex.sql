/*
Navicat MySQL Data Transfer

Source Server         : database
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : database

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-12-01 19:55:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for imagesindex
-- ----------------------------
DROP TABLE IF EXISTS `imagesindex`;
CREATE TABLE `imagesindex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgtitle` varchar(255) NOT NULL DEFAULT '',
  `imgintro` varchar(255) NOT NULL DEFAULT '',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `imgtype` varchar(255) NOT NULL DEFAULT '',
  `imgtypemark` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
