/*
Navicat MySQL Data Transfer

Source Server         : EsLion
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : work20160629

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-06-29 16:07:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for userlist
-- ----------------------------
DROP TABLE IF EXISTS `userlist`;
CREATE TABLE `userlist` (
  `mId` int(11) NOT NULL,
  `mName` varchar(255) DEFAULT NULL,
  `mAge` int(11) DEFAULT NULL,
  `mSex` int(11) DEFAULT NULL,
  `mDept` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`mId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userlist
-- ----------------------------
INSERT INTO `userlist` VALUES ('2014003', '猫猫', '19', '1', '英语部门');
INSERT INTO `userlist` VALUES ('2014006', '李明', '18', '1', '国务院');
INSERT INTO `userlist` VALUES ('2014015', '猫猫', '20', '0', 'EngLish');
