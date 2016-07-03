/*
Navicat MySQL Data Transfer

Source Server         : EsLion
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : students

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-07-01 11:41:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for deptsystem
-- ----------------------------
DROP TABLE IF EXISTS `deptsystem`;
CREATE TABLE `deptsystem` (
  `deptId` int(4) NOT NULL,
  `deptName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`deptId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of deptsystem
-- ----------------------------
INSERT INTO `deptsystem` VALUES ('1', 'web');
INSERT INTO `deptsystem` VALUES ('2', 'java');
INSERT INTO `deptsystem` VALUES ('3', '.Net');
INSERT INTO `deptsystem` VALUES ('4', '测试');

-- ----------------------------
-- Table structure for loginsystem
-- ----------------------------
DROP TABLE IF EXISTS `loginsystem`;
CREATE TABLE `loginsystem` (
  `loginId` int(10) NOT NULL,
  `loginAccount` varchar(255) DEFAULT NULL,
  `loginPwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`loginId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of loginsystem
-- ----------------------------
INSERT INTO `loginsystem` VALUES ('1', 'yang', '123');
INSERT INTO `loginsystem` VALUES ('2', 'jing', '456');

-- ----------------------------
-- Table structure for studentsystem
-- ----------------------------
DROP TABLE IF EXISTS `studentsystem`;
CREATE TABLE `studentsystem` (
  `studentId` int(4) NOT NULL,
  `studentName` varchar(255) DEFAULT NULL,
  `studentAge` int(4) DEFAULT NULL,
  `deptId` int(4) NOT NULL,
  PRIMARY KEY (`studentId`),
  KEY `deptId_studentSystem_` (`deptId`),
  CONSTRAINT `deptId_studentSystem_` FOREIGN KEY (`deptId`) REFERENCES `deptsystem` (`deptId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentsystem
-- ----------------------------
INSERT INTO `studentsystem` VALUES ('1', '张三', '12', '2');
INSERT INTO `studentsystem` VALUES ('2', '李斯', '1002', '4');
INSERT INTO `studentsystem` VALUES ('3', '发哥', '18', '2');
