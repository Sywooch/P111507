/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : quickrep

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-01-02 14:41:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for topics_group
-- ----------------------------
DROP TABLE IF EXISTS `topics_group`;
CREATE TABLE `topics_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `create_time` int(11) NOT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of topics_group
-- ----------------------------
INSERT INTO `topics_group` VALUES ('1', 'Sức khoẻ và Y học', '1514685122', '1514685122');
INSERT INTO `topics_group` VALUES ('4', 'Lịch sử, Triết học, Tôn giáo và Nhân văn', '1514685470', '1514685470');
INSERT INTO `topics_group` VALUES ('5', 'Văn học, Ngôn ngữ và Truyền thông', '1514685497', '1514685497');
INSERT INTO `topics_group` VALUES ('6', 'Khoa học, Công nghệ, Kỹ thuật và Toán học', '1514685619', '1514685619');
INSERT INTO `topics_group` VALUES ('7', 'Startups', '1514685657', '1514685657');
INSERT INTO `topics_group` VALUES ('8', 'Kinh doanh, công việc và nghề nghiệp', '1514685867', '1514685867');
INSERT INTO `topics_group` VALUES ('10', 'Nghệ thuật, Thiết kế và Phong cách', '1514685996', '1514685996');
INSERT INTO `topics_group` VALUES ('12', 'Giải trí, Thể thao, Du lịch và Các hoạt động', '1514686029', '1514686029');
INSERT INTO `topics_group` VALUES ('13', 'Giáo dục, Trường học và Học vấn', '1514686073', '1514686073');
INSERT INTO `topics_group` VALUES ('14', 'Tin tức, Giải trí và Văn hoá', '1514686483', '1514686483');
INSERT INTO `topics_group` VALUES ('15', 'Cuộc sống, Mối quan hệ, và Bản thân', '1514686512', '1514686512');
INSERT INTO `topics_group` VALUES ('16', ' Chính trị, Luật, Chính phủ và Tư pháp', '1514686539', '1514686539');
INSERT INTO `topics_group` VALUES ('17', 'Thức ăn, ẩm thực và Nấu ăn', '1514686557', '1514686557');
INSERT INTO `topics_group` VALUES ('19', 'Mạng xã hội', '1514686683', '1514686683');
