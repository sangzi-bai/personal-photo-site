/*
Navicat MySQL Data Transfer

Source Server         : database
Source Server Version : 50715
Source Host           : localhost:3306
Source Database       : database

Target Server Type    : MYSQL
Target Server Version : 50715
File Encoding         : 65001

Date: 2016-12-01 19:55:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for picshowindex
-- ----------------------------
DROP TABLE IF EXISTS `picshowindex`;
CREATE TABLE `picshowindex` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `imgtype` varchar(255) NOT NULL,
  `imgtypemark` varchar(255) NOT NULL,
  `imgtitle` varchar(255) NOT NULL,
  `imgintro` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
SET FOREIGN_KEY_CHECKS=1;
