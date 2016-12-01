/*
Navicat MySQL Data Transfer

Source Server         : database
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : database

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-12-01 19:55:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for picgroup
-- ----------------------------
DROP TABLE IF EXISTS `picgroup`;
CREATE TABLE `picgroup` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imgtitle` varchar(255) DEFAULT NULL,
  `filename` varchar(255) NOT NULL,
  `imgtype` varchar(255) NOT NULL,
  `imgtypemark` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
