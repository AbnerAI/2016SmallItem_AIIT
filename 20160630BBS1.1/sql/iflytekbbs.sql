/*
Navicat MySQL Data Transfer

Source Server         : abner
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : iflytekbbs

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2016-06-30 19:50:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for reply
-- ----------------------------
DROP TABLE IF EXISTS `reply`;
CREATE TABLE `reply` (
  `rid` int(11) NOT NULL,
  `rtitle` varchar(255) DEFAULT NULL,
  `rcontents` text,
  `rtid` int(11) DEFAULT NULL,
  `rtime` datetime DEFAULT NULL,
  `ruid` int(11) DEFAULT NULL,
  `rface` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`rid`),
  KEY `rtid_topic` (`rtid`),
  KEY `ruid_user` (`ruid`),
  CONSTRAINT `rtid_topic` FOREIGN KEY (`rtid`) REFERENCES `topic` (`tid`),
  CONSTRAINT `ruid_user` FOREIGN KEY (`ruid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of reply
-- ----------------------------
INSERT INTO `reply` VALUES ('1', 'ssss', '阿斯顿飞撒的话', '1', '2016-06-30 19:42:58', '1', '5');
INSERT INTO `reply` VALUES ('2', 'ssss', 'gedg  ', '1', '2016-06-30 19:43:14', '1', '5');

-- ----------------------------
-- Table structure for section
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section` (
  `sectionid` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `smaterid` int(11) DEFAULT NULL,
  `snotice` varchar(255) DEFAULT NULL,
  `sphoto` varchar(255) DEFAULT NULL,
  `stid` int(11) DEFAULT NULL,
  PRIMARY KEY (`sectionid`),
  KEY `stid_sectiontype` (`stid`),
  CONSTRAINT `stid_sectiontype` FOREIGN KEY (`stid`) REFERENCES `sectiontype` (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of section
-- ----------------------------
INSERT INTO `section` VALUES ('0', '', null, null, null, null);
INSERT INTO `section` VALUES ('2', 'Android讨论区', '1', 'Android讨论交流区', null, '2');
INSERT INTO `section` VALUES ('4', 'Java讨论区', '1', 'Java讨论交流区', null, '2');
INSERT INTO `section` VALUES ('5', '.Net讨论区', '1', '.Net讨论交流区', null, '2');
INSERT INTO `section` VALUES ('6', '数据库讨论区', '1', '数据库讨论交流区', null, '2');
INSERT INTO `section` VALUES ('7', 'Web技术讨论区', '1', 'Web技术讨论交流区', null, '2');

-- ----------------------------
-- Table structure for sectiontype
-- ----------------------------
DROP TABLE IF EXISTS `sectiontype`;
CREATE TABLE `sectiontype` (
  `tid` int(11) NOT NULL,
  `tname` varchar(255) DEFAULT NULL,
  `tdesc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sectiontype
-- ----------------------------
INSERT INTO `sectiontype` VALUES ('1', 'web开发', '版主招募中，赶紧报名');
INSERT INTO `sectiontype` VALUES ('2', '综合讨论', '综合讨论区，讨论各种技术');

-- ----------------------------
-- Table structure for topic
-- ----------------------------
DROP TABLE IF EXISTS `topic`;
CREATE TABLE `topic` (
  `tid` int(11) NOT NULL,
  `tsid` int(11) DEFAULT NULL,
  `ttitle` varchar(255) DEFAULT NULL,
  `tcontents` text,
  `tuid` int(11) DEFAULT NULL,
  `ttime` datetime DEFAULT NULL,
  `tface` varchar(255) DEFAULT NULL,
  `ttop` tinyint(4) DEFAULT NULL,
  `tessence` tinyint(4) DEFAULT NULL,
  `replycount` int(11) DEFAULT NULL,
  PRIMARY KEY (`tid`),
  KEY `tsid_section` (`tsid`),
  KEY `tuid_user` (`tuid`),
  CONSTRAINT `tsid_section` FOREIGN KEY (`tsid`) REFERENCES `section` (`sectionid`),
  CONSTRAINT `tuid_user` FOREIGN KEY (`tuid`) REFERENCES `user` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topic
-- ----------------------------
INSERT INTO `topic` VALUES ('1', '2', '今天天气不错', '今天天气不错，适合干什么呢', '1', '2016-06-30 19:41:45', '1', '1', '1', '7');
INSERT INTO `topic` VALUES ('2', '2', '啊aaaa', '啊啊方才sadfas', '1', '2016-06-30 19:42:13', '2', '1', '0', '0');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `upsd` varchar(255) DEFAULT NULL,
  `usex` bit(1) DEFAULT NULL,
  `ucity` varchar(255) DEFAULT NULL,
  `upermission` tinyint(4) DEFAULT NULL,
  `utel` char(255) DEFAULT NULL,
  `uphoto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'jack', '123456', '', '地球', '2', '15899888', null);
INSERT INTO `user` VALUES ('2', 'admin', '123456', '', '异次元', '0', '123456', null);
