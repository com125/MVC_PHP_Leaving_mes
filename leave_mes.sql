/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-05-07 21:10:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for leave_mes
-- ----------------------------
DROP TABLE IF EXISTS `leave_mes`;
CREATE TABLE `leave_mes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '留言表编号',
  `content` text COMMENT '留言内容',
  `add_time` int(10) unsigned NOT NULL COMMENT '添加时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of leave_mes
-- ----------------------------
INSERT INTO `leave_mes` VALUES ('4', '阿德法撒旦法', '1525697090', '2018-05-07 21:01:12');
INSERT INTO `leave_mes` VALUES ('5', '阿德法十分的啊艾丝凡', '1525697101', '2018-05-07 20:45:01');
INSERT INTO `leave_mes` VALUES ('7', '撒旦法的萨芬阿萨德范德萨分 ', '1525698080', '2018-05-07 21:01:20');
INSERT INTO `leave_mes` VALUES ('8', '阿德法萨芬的萨芬大师法萨芬撒发', '1525698085', '2018-05-07 21:06:12');
INSERT INTO `leave_mes` VALUES ('9', '&lt;div style=&quot;font:bold 24px 微软雅黑;&quot;&gt;哈哈哈&lt;/div&gt;', '1525698119', '2018-05-07 21:01:59');
