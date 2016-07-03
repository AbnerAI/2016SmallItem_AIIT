/*
Navicat MySQL Data Transfer

Source Server         : abner
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : work20160629

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-07-03 19:43:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for userlist
-- ----------------------------
DROP TABLE IF EXISTS `userlist`;
CREATE TABLE `userlist` (
  `mId` int(11) NOT NULL,
  `mName` varchar(255) DEFAULT NULL,
  `mAge` varchar(255) DEFAULT NULL,
  `mSex` int(11) DEFAULT NULL,
  `mDept` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userlist
-- ----------------------------
INSERT INTO `userlist` VALUES ('2014002', '刘东ffds', '19', '1', '计算机科学部');
INSERT INTO `userlist` VALUES ('2014003', '清华', '16', '0', '基础教学 ');
