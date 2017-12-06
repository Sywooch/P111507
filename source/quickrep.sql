/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : quickrep

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-04 22:57:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answers_text` text COLLATE utf8_unicode_ci NOT NULL,
  `is_anonymous` varchar(45) COLLATE utf8_unicode_ci DEFAULT '0',
  `create_time` int(11) NOT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '0', '0', 'adfadf', null, '0', null);
INSERT INTO `answers` VALUES ('2', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('3', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('4', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('5', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('6', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('7', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('8', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('9', '0', '0', 'i love you so much\n', null, '0', null);
INSERT INTO `answers` VALUES ('10', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('11', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('12', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('13', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('14', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('15', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('16', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('17', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('18', '12', '64', 'test', null, '0', null);
INSERT INTO `answers` VALUES ('19', '12', '64', 'some time', null, '0', null);
INSERT INTO `answers` VALUES ('20', '12', '64', 'some time', null, '0', null);
INSERT INTO `answers` VALUES ('21', '12', '64', 'some time', null, '0', null);
INSERT INTO `answers` VALUES ('22', '12', '64', 'some time', null, '0', null);
INSERT INTO `answers` VALUES ('23', '12', '64', 'aa', null, '2147483647', '2017');
INSERT INTO `answers` VALUES ('24', '12', '64', 'aa', null, '2147483647', '2017');
INSERT INTO `answers` VALUES ('25', '12', '64', 'aa', null, '1492354634', '1492354634');
INSERT INTO `answers` VALUES ('26', '12', '64', 'aa', null, '1492354748', '1492354748');
INSERT INTO `answers` VALUES ('27', '12', '64', 'aa', null, '1492354770', '1492354771');
INSERT INTO `answers` VALUES ('28', '12', '64', 'aa', null, '1492354799', '1492354799');
INSERT INTO `answers` VALUES ('29', '12', '64', 'aa', null, '1492354813', '1492354813');
INSERT INTO `answers` VALUES ('30', '12', '64', 'aa', null, '1492354868', '1492354869');
INSERT INTO `answers` VALUES ('31', '15', '0', '', null, '1492960271', '1492960271');
INSERT INTO `answers` VALUES ('32', '15', '180', 'Quasi ipsa vel labore ut non qui possimus. Qui sit rem fuga repudiandae. Veritatis maiores fuga voluptatum officiis amet earum consectetur et. Similique quidem ut debitis quo.', null, '1492960289', '1492960289');
INSERT INTO `answers` VALUES ('33', '15', '176', 'Eum in pariatur quasi molestias. Veritatis quis sapiente quo illum est. Adipisci voluptatem vitae sed.', null, '1492960290', '1492960290');
INSERT INTO `answers` VALUES ('34', '15', '172', 'Quis autem voluptas delectus reprehenderit suscipit asperiores id. Error aut mollitia cum architecto voluptas. Culpa dolorem illum sunt sunt praesentium deserunt praesentium velit.', null, '1492960290', '1492960290');
INSERT INTO `answers` VALUES ('35', '15', '180', 'Libero minus quas est perferendis qui. Pariatur modi beatae autem est. Nobis perspiciatis unde impedit est sapiente harum. Dolorum accusantium rerum dolorum culpa voluptatum expedita sunt.', null, '1492960290', '1492960290');
INSERT INTO `answers` VALUES ('36', '15', '175', 'Sit velit est exercitationem. Quo quis quia ipsa voluptas. Libero et rerum repellendus quos dolores autem.', null, '1492960291', '1492960291');
INSERT INTO `answers` VALUES ('37', '15', '174', 'Saepe maxime cupiditate quibusdam possimus aut. Eum cumque praesentium quibusdam. Hic rem exercitationem cum ut velit.', null, '1492960291', '1492960291');
INSERT INTO `answers` VALUES ('38', '15', '181', 'Laborum deleniti officia a provident quo aliquam et. Dicta est itaque dolorem molestias illum magnam id quis.', null, '1492960291', '1492960291');
INSERT INTO `answers` VALUES ('39', '15', '172', 'Optio doloribus assumenda dolores ipsam consequatur sapiente dolorem quia. Dolor sed doloremque vero aut. Sed officia quo totam accusamus dolorum nihil provident.', null, '1492960291', '1492960291');
INSERT INTO `answers` VALUES ('40', '15', '172', 'Doloremque exercitationem quia doloremque laborum. Harum qui molestiae porro. Ad molestias sit sit voluptas praesentium neque cupiditate. Minima sunt facere consectetur omnis omnis culpa sequi.', null, '1492960291', '1492960292');
INSERT INTO `answers` VALUES ('41', '15', '179', 'Perferendis enim ut et sapiente aliquid. Error eligendi accusantium excepturi est accusantium. Aspernatur laborum doloribus animi vero autem aut tenetur.', null, '1492960292', '1492960292');
INSERT INTO `answers` VALUES ('42', '15', '172', 'Omnis molestias voluptatibus iusto necessitatibus quidem repudiandae molestiae. Praesentium facere non dicta. Quia dolore ullam amet commodi nostrum. Delectus dolore possimus at provident et.', null, '1492960479', '1492960479');
INSERT INTO `answers` VALUES ('43', '15', '180', 'Vel et animi blanditiis. Praesentium ducimus laboriosam voluptates quaerat sint temporibus enim. Tempore earum sit culpa. Consectetur error quas aut dicta.', null, '1492960479', '1492960479');
INSERT INTO `answers` VALUES ('44', '15', '178', 'Impedit inventore voluptas corrupti amet quidem eum. Et error aliquid eligendi ex accusamus. Aut ut voluptate nihil eos autem.', null, '1492960479', '1492960480');
INSERT INTO `answers` VALUES ('45', '15', '170', 'Modi qui aut quo et nihil dolorum. Quam mollitia veritatis sit eveniet et vel natus. Similique aperiam in qui velit. Blanditiis laudantium voluptatibus adipisci harum id voluptas voluptas.', null, '1492960480', '1492960480');
INSERT INTO `answers` VALUES ('46', '15', '176', 'Tempora impedit voluptas error suscipit nihil dolore ut. Enim ut eos ut sint sed illo. Vero consequuntur aut mollitia suscipit provident ut.', null, '1492960480', '1492960481');
INSERT INTO `answers` VALUES ('47', '15', '174', 'Consequuntur possimus voluptas corrupti saepe qui. Dolor omnis magni odit molestiae sapiente porro. Qui optio non et tempore voluptas asperiores id autem. Porro repellat sequi veniam.', null, '1492960482', '1492960483');
INSERT INTO `answers` VALUES ('48', '15', '182', 'Dolor sint et eum et. Officia possimus blanditiis ut dolor rerum sit cupiditate. Quia quas similique quo ipsam qui. Debitis eveniet accusamus est et iure quo recusandae.', null, '1492960483', '1492960483');
INSERT INTO `answers` VALUES ('49', '15', '175', 'Aut provident et cupiditate vel ea voluptas eaque sed. Eum dolores asperiores in facere ad quaerat. Asperiores quis enim est facilis quam eos. Eos qui cumque incidunt sit est.', null, '1492960484', '1492960484');
INSERT INTO `answers` VALUES ('50', '15', '179', 'Voluptatem dolore voluptates et consequatur. Unde error magnam ea ratione accusamus.', null, '1492960486', '1492960486');
INSERT INTO `answers` VALUES ('51', '15', '180', 'Beatae perferendis repellat id voluptas atque reprehenderit. Doloremque debitis quia non in ut. Aut atque id perspiciatis veritatis. Suscipit rem incidunt velit enim.', null, '1492960486', '1492960486');
INSERT INTO `answers` VALUES ('52', '16', '170', 'yes', null, '1493061826', '1493061826');
INSERT INTO `answers` VALUES ('53', '16', '170', 'testttttt', null, '1493061837', '1493061837');
INSERT INTO `answers` VALUES ('54', '16', '170', 'tinh hinh la dang trien khai', null, '1493061915', '1493061915');
INSERT INTO `answers` VALUES ('55', '16', '185', 'Theo thông tư 84/2008/tt-btc ngày 30. 9. 2008 của bộ tài chính, căn cứ xác định thu nhập từ chuyển nhượng nhà ở, đất ở duy nhất được miễn thuế do người chuyển nhượng bất động sản tự khai và chịu trách nhiệm vế tính trung thực trong bản khai. Nếu phát hiện không đúng thì cơ quan thuế sẽ xử lý truy thu thuế và phạt về hành vi gian lận thuế. \ntheo đó bạn chỉ cần khai nhận nhà ở chuyển nhượng là nhà ở duy nhất mà không phải chứng minh gì thêm. Bản khai này có thể phải được ubnd cấp phường chứng thực chữ ký tùy theo yêu cầu cụ thể của cơ quan thuế địa phương. ', '0', '1493709110', '1493709110');
INSERT INTO `answers` VALUES ('56', '16', '184', 'ahihi có cái cc', '0', '1493710142', '1493710142');

-- ----------------------------
-- Table structure for answer_bookmark
-- ----------------------------
DROP TABLE IF EXISTS `answer_bookmark`;
CREATE TABLE `answer_bookmark` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer_bookmark
-- ----------------------------

-- ----------------------------
-- Table structure for answer_vote
-- ----------------------------
DROP TABLE IF EXISTS `answer_vote`;
CREATE TABLE `answer_vote` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answer_vote
-- ----------------------------

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('Admin', '1', '1487308520');
INSERT INTO `auth_assignment` VALUES ('Quản lí câu hỏi', '2', '1487308897');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1487308189', '1487308189');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1487308189', '1487308189');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1487308189', '1487308189');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1487308189', '1487308189');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1487308189', '1487308189');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1487308190', '1487308190');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1487308191', '1487308191');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1487308192', '1487308192');
INSERT INTO `auth_item` VALUES ('/ajax/*', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/ajax/generateslugtitle', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/answers/*', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/answers/create', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/answers/delete', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/answers/index', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/answers/update', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/answers/view', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/auth/*', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/auth/default/*', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/auth/default/index', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/authassignment/*', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authassignment/create', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authassignment/delete', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authassignment/index', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitem/*', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/authitem/create', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitem/delete', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/authitem/index', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitem/update', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitem/view', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitemchild/*', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitemchild/auth-item', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitemchild/create', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitemchild/delete', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitemchild/index', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/authitemchild/view', '2', null, null, null, '1487308194', '1487308194');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1487308193', '1487308193');
INSERT INTO `auth_item` VALUES ('/gridview/*', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/gridview/export/*', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/gridview/export/download', '2', null, null, null, '1487308203', '1487308203');
INSERT INTO `auth_item` VALUES ('/questions/*', '2', null, null, null, '1487308139', '1487308139');
INSERT INTO `auth_item` VALUES ('/questions/create', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/questions/delete', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/questions/index', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/questions/update', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/questions/view', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/site/captcha', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1487308195', '1487308195');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/user/create', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/user/delete', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/user/index', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/user/update', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('/user/view', '2', null, null, null, '1487308196', '1487308196');
INSERT INTO `auth_item` VALUES ('Admin', '2', 'can do anything', null, null, '1487308447', '1487308469');
INSERT INTO `auth_item` VALUES ('Quản lí câu hỏi', '2', 'Chỉ có thể xem được câu hỏi.', null, null, '1487308754', '1487308754');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('Admin', '/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('Admin', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/ajax/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/ajax/generateslugtitle');
INSERT INTO `auth_item_child` VALUES ('Admin', '/answers/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/answers/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/answers/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/answers/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/answers/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/answers/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/auth/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/auth/default/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/auth/default/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authassignment/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authassignment/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authassignment/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authassignment/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitem/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitem/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitem/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitem/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitem/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitem/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitemchild/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitemchild/auth-item');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitemchild/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitemchild/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitemchild/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/authitemchild/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('Admin', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gridview/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gridview/export/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/gridview/export/download');
INSERT INTO `auth_item_child` VALUES ('Admin', '/questions/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/questions/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/questions/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/questions/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/questions/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/questions/view');
INSERT INTO `auth_item_child` VALUES ('Admin', '/site/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/site/captcha');
INSERT INTO `auth_item_child` VALUES ('Admin', '/site/error');
INSERT INTO `auth_item_child` VALUES ('Admin', '/site/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/site/login');
INSERT INTO `auth_item_child` VALUES ('Admin', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('Admin', '/user/*');
INSERT INTO `auth_item_child` VALUES ('Admin', '/user/create');
INSERT INTO `auth_item_child` VALUES ('Admin', '/user/delete');
INSERT INTO `auth_item_child` VALUES ('Admin', '/user/index');
INSERT INTO `auth_item_child` VALUES ('Admin', '/user/update');
INSERT INTO `auth_item_child` VALUES ('Admin', '/user/view');
INSERT INTO `auth_item_child` VALUES ('Quản lí câu hỏi', '/questions/*');
INSERT INTO `auth_item_child` VALUES ('Quản lí câu hỏi', '/site/*');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for bookmarked_answers
-- ----------------------------
DROP TABLE IF EXISTS `bookmarked_answers`;
CREATE TABLE `bookmarked_answers` (
  `id` int(11) NOT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of bookmarked_answers
-- ----------------------------

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text,
  `comment_parent_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL COMMENT 'is của cau hoi , hoac cau tra loi',
  `create_time` int(11) NOT NULL,
  `update_time` varchar(45) DEFAULT NULL,
  `comment_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('7', 'biet em da khong quay lai', null, '12', '66', '1492444262', '1492444263', '1');
INSERT INTO `comments` VALUES ('8', 'test add comment', null, '12', '65', '1492927307', '1492927307', '1');
INSERT INTO `comments` VALUES ('9', 'firt comment', null, '12', '64', '1492929863', '1492929864', '1');
INSERT INTO `comments` VALUES ('10', 'second comment', null, '12', '64', '1492937047', '1492937047', '1');
INSERT INTO `comments` VALUES ('11', 'third comment', null, '12', '64', '1492937534', '1492937535', '1');
INSERT INTO `comments` VALUES ('12', 'fourth comment', null, '15', '64', '1492937927', '1492937927', '1');
INSERT INTO `comments` VALUES ('13', 'fiveth comment', null, '15', '64', '1492937952', '1492937952', '1');
INSERT INTO `comments` VALUES ('14', 'sixth comment', null, '15', '64', '1492937961', '1492937961', '1');
INSERT INTO `comments` VALUES ('15', 'seventh comment', null, '15', '64', '1492938025', '1492938025', '1');
INSERT INTO `comments` VALUES ('16', 'eight comment', null, '15', '64', '1492938406', '1492938406', '1');
INSERT INTO `comments` VALUES ('17', 'nineth comment', null, '15', '64', '1492939775', '1492939775', '1');
INSERT INTO `comments` VALUES ('21', 'comment 1', null, '15', '66', '1492950088', '1492950088', '1');
INSERT INTO `comments` VALUES ('22', 'comment 2', null, '15', '64', '1492950154', '1492950154', '1');
INSERT INTO `comments` VALUES ('23', 'a', null, '15', '64', '1492950370', '1492950370', '1');
INSERT INTO `comments` VALUES ('24', 'bb', null, '15', '64', '1492950461', '1492950462', '1');
INSERT INTO `comments` VALUES ('25', 'bbc', null, '15', '64', '1492950482', '1492950482', '1');
INSERT INTO `comments` VALUES ('26', 'mns', null, '15', '64', '1492950539', '1492950539', '1');
INSERT INTO `comments` VALUES ('27', 'ryu', null, '15', '64', '1492950954', '1492950954', '1');
INSERT INTO `comments` VALUES ('28', 'khong the tha thu', null, '15', '65', '1492951007', '1492951007', '1');
INSERT INTO `comments` VALUES ('29', 'comment 1', null, '15', '67', '1492951851', '1492951851', '1');
INSERT INTO `comments` VALUES ('30', 'some comment', null, '15', '64', '1492952426', '1492952426', '1');
INSERT INTO `comments` VALUES ('31', 'a comment ', null, '15', '64', '1492952503', '1492952503', '1');
INSERT INTO `comments` VALUES ('32', 'comemnt ', null, '15', '64', '1492952510', '1492952510', '1');
INSERT INTO `comments` VALUES ('33', 'cm', null, '15', '64', '1492952585', '1492952585', '1');
INSERT INTO `comments` VALUES ('34', 'new comment', null, '15', '65', '1492952598', '1492952598', '1');
INSERT INTO `comments` VALUES ('35', 'Doloremque dolorum veritatis tenetur velit aliquid sequi quae. Nobis id distinctio ut. Hic velit fugit harum quod maxime dolorem mollitia quia.', null, '15', '172', '1492960479', '1492960479', '1');
INSERT INTO `comments` VALUES ('36', 'Sapiente expedita illo rem ut. Deserunt blanditiis aut similique repellendus rerum. Voluptatem vitae iure aut autem est. Rerum molestias illum illo est.', null, '15', '180', '1492960479', '1492960479', '1');
INSERT INTO `comments` VALUES ('37', 'Sit aut omnis architecto. Aut reiciendis tempora numquam sit in aut ut. Sint voluptas et veritatis.', null, '15', '178', '1492960480', '1492960480', '1');
INSERT INTO `comments` VALUES ('38', 'Accusantium ex non quaerat dignissimos minima distinctio. Cupiditate dolore occaecati laborum veniam vitae ut. Et voluptatem enim iure provident repellendus pariatur.', null, '15', '170', '1492960480', '1492960480', '1');
INSERT INTO `comments` VALUES ('39', 'Reiciendis similique qui et necessitatibus sit optio nobis. Explicabo at quia aut nostrum deserunt quis ratione. Amet aliquam et eum odit quidem illo. Cupiditate in id et sint placeat dolorem optio.', null, '15', '176', '1492960481', '1492960482', '1');
INSERT INTO `comments` VALUES ('40', 'Corrupti ea eum ullam sit voluptatem. Consequatur voluptates assumenda mollitia odit.\nItaque repudiandae quae cumque fugit eos atque non voluptatem. Eveniet earum quasi tempora nesciunt.', null, '15', '174', '1492960483', '1492960483', '1');
INSERT INTO `comments` VALUES ('41', 'Voluptatem animi non beatae voluptatem iusto harum. Id omnis tenetur nihil aliquam corporis. Facere cupiditate exercitationem voluptatem quibusdam. Vel nemo accusamus non atque modi.', null, '15', '182', '1492960483', '1492960484', '1');
INSERT INTO `comments` VALUES ('42', 'Eum aut et incidunt nemo eum eveniet similique. Vel architecto unde suscipit sit labore animi. Sed nostrum a consequuntur vitae rerum dolores.', null, '15', '175', '1492960484', '1492960485', '1');
INSERT INTO `comments` VALUES ('43', 'Distinctio in aut autem molestiae quaerat possimus. Consequuntur fugit sit nemo debitis iusto voluptas velit. Perferendis sunt cupiditate eum voluptas. Minima voluptas voluptatem cupiditate.', null, '15', '179', '1492960486', '1492960486', '1');
INSERT INTO `comments` VALUES ('44', 'Quasi aut minima doloremque quibusdam. Deserunt nihil quo ex voluptas sunt. Dolore eveniet harum animi quo qui vitae nemo. Expedita vitae reprehenderit cupiditate quia modi.', null, '15', '180', '1492960487', '1492960487', '1');
INSERT INTO `comments` VALUES ('45', 'Nihil et vel et. Voluptatibus optio culpa quia. Assumenda et doloremque quibusdam soluta.', null, '15', '171', '1492960592', '1492960592', '1');
INSERT INTO `comments` VALUES ('46', 'Voluptate minus optio maxime. Incidunt qui qui culpa alias. Et atque quo modi quis dignissimos optio aut.', null, '15', '174', '1492960592', '1492960592', '1');
INSERT INTO `comments` VALUES ('47', 'Beatae illum cumque modi ipsum qui animi culpa id. Odit consequatur consequatur architecto tenetur itaque iusto rerum.', null, '15', '180', '1492960593', '1492960593', '1');
INSERT INTO `comments` VALUES ('48', 'Nisi error non alias tempora autem. Veniam ut consequuntur eligendi fugit enim.\nCorrupti nihil quas quo. Eos sint et quisquam commodi quas qui. Soluta ut at aperiam voluptas eius.', null, '15', '178', '1492960593', '1492960593', '1');
INSERT INTO `comments` VALUES ('49', 'Vel sunt dicta ab et. Qui et voluptatem et fugiat et numquam qui. Ea quos cum autem quam.\nReprehenderit sequi omnis ratione. Incidunt sit maiores vel excepturi.', null, '15', '170', '1492960593', '1492960593', '1');
INSERT INTO `comments` VALUES ('50', 'Velit quibusdam dolorum sit aut in consequuntur. Nemo in dolor aut quas nostrum. Quasi consectetur fugiat animi porro qui molestiae delectus. Eligendi ipsa et sit ducimus.', null, '15', '179', '1492960593', '1492960594', '1');
INSERT INTO `comments` VALUES ('51', 'Est ut similique consequatur velit voluptates deleniti. Voluptatum eum placeat veniam necessitatibus modi eligendi. Nihil corporis reprehenderit mollitia sed ducimus ut.', null, '15', '172', '1492960594', '1492960594', '1');
INSERT INTO `comments` VALUES ('52', 'Tempore quia repudiandae quaerat. Consequatur totam excepturi sunt neque adipisci maxime impedit.', null, '15', '182', '1492960595', '1492960595', '1');
INSERT INTO `comments` VALUES ('53', 'Ad provident nihil nesciunt qui et rerum porro. Sequi quia ut perferendis porro quia repellendus.', null, '15', '178', '1492960595', '1492960595', '1');
INSERT INTO `comments` VALUES ('54', 'Libero provident qui reprehenderit eum sunt in ipsam. Quisquam architecto dolorem reiciendis inventore nulla tempore sint modi.', null, '15', '173', '1492960595', '1492960595', '1');
INSERT INTO `comments` VALUES ('55', 'Ut nemo perferendis molestiae quasi nam maiores illum et. Nihil et architecto numquam rerum non. Ut veritatis ducimus quis. Mollitia cupiditate nulla repellendus debitis.', null, '15', '175', '1492960595', '1492960596', '1');
INSERT INTO `comments` VALUES ('56', 'Dolor sit cum qui debitis dolor et rerum. Dicta ea quisquam iure sed cumque consequatur. Esse rerum molestiae porro placeat ipsam eum ipsa.', null, '15', '177', '1492960596', '1492960597', '1');
INSERT INTO `comments` VALUES ('57', 'Sit atque sint cum est possimus iste. Qui ullam aut excepturi aut. Quis explicabo ut voluptas et. Dicta cum et ea facere a iste delectus similique. Ipsum illo aspernatur magnam ea culpa.', null, '15', '181', '1492960597', '1492960597', '1');
INSERT INTO `comments` VALUES ('58', 'Et eveniet magni aut. Eligendi voluptates exercitationem illo quod qui.\nEnim beatae placeat eos vel est dolore. Consequatur nulla quis qui magni. Et velit qui pariatur. Quisquam et ducimus saepe et.', null, '15', '182', '1492960597', '1492960597', '1');
INSERT INTO `comments` VALUES ('59', 'Aliquid voluptas quis deserunt rerum magni. Cupiditate voluptas eos officiis ex.', null, '15', '175', '1492960597', '1492960599', '1');
INSERT INTO `comments` VALUES ('60', 'Eaque perspiciatis consectetur ducimus fuga at quibusdam est. Ut delectus placeat harum. Consequuntur autem molestiae ex non ut.', null, '15', '170', '1492960599', '1492960600', '1');
INSERT INTO `comments` VALUES ('61', 'Ea enim non vero nostrum ducimus voluptatibus voluptate et. Sunt fugiat enim assumenda nihil repellat et voluptatem. Aperiam dolores in maiores qui assumenda dolore.', null, '15', '180', '1492960600', '1492960601', '1');
INSERT INTO `comments` VALUES ('62', 'Ex suscipit quaerat perferendis itaque itaque. Voluptatem itaque nulla modi deserunt. Voluptate blanditiis sint dolores. Autem nulla et illum quisquam ut.', null, '15', '171', '1492960601', '1492960601', '1');
INSERT INTO `comments` VALUES ('63', 'Tempore vitae possimus soluta impedit. Quod suscipit atque et velit porro. Molestiae ut quasi voluptate ut modi quia excepturi. Dolore qui dignissimos ut dolores.', null, '15', '181', '1492960601', '1492960601', '1');
INSERT INTO `comments` VALUES ('64', 'Qui voluptate odit est voluptate nemo id magni quisquam. Aspernatur minus ut placeat non autem. Recusandae officiis amet praesentium quaerat voluptas eius.', null, '15', '178', '1492960601', '1492960602', '1');
INSERT INTO `comments` VALUES ('65', 'Sed omnis ut sequi. Eveniet ut ea qui nostrum et. Corporis molestiae cupiditate assumenda quae natus. Quis accusamus voluptatem vel quo nesciunt ut.', null, '15', '175', '1492960602', '1492960602', '1');
INSERT INTO `comments` VALUES ('66', 'Ratione culpa nisi et magnam deleniti sit. Totam numquam cum pariatur est et vitae. Ea et velit harum et.', null, '15', '175', '1492960602', '1492960602', '1');
INSERT INTO `comments` VALUES ('67', 'Ipsam ipsum nisi minima voluptate repudiandae non dolor nulla. Autem libero aspernatur assumenda eos earum voluptas. Iste a a quis voluptatibus id. Sed eum fugiat quisquam aut quaerat vel sed atque.', null, '15', '174', '1492960602', '1492960603', '1');
INSERT INTO `comments` VALUES ('68', 'Quo ut magni cumque. Eius eius qui rerum veritatis occaecati. Sequi in voluptas dolore ad possimus quis. Delectus beatae omnis quo aliquam molestiae tenetur qui.', null, '15', '170', '1492960603', '1492960603', '1');
INSERT INTO `comments` VALUES ('69', 'Officia velit atque reiciendis veniam et sint. Consequatur fuga exercitationem quasi molestiae non placeat. Exercitationem labore nulla est est in officia nesciunt.', null, '15', '177', '1492960603', '1492960604', '1');
INSERT INTO `comments` VALUES ('70', 'Odit omnis eum reiciendis est atque sint repudiandae. Est aperiam autem et. Nobis accusantium rem fuga accusamus.\nMaxime optio autem iste quae. Sed nulla impedit totam rem fuga et.', null, '15', '181', '1492960604', '1492960604', '1');
INSERT INTO `comments` VALUES ('71', 'Quam et cupiditate tempore vero tenetur. Quo esse adipisci deserunt nostrum illo. Qui et excepturi ducimus et sed cumque.', null, '15', '174', '1492960604', '1492960605', '1');
INSERT INTO `comments` VALUES ('72', 'Dolorum est eligendi excepturi consequatur asperiores nesciunt. Sunt non et adipisci aut voluptate.', null, '15', '175', '1492960605', '1492960606', '1');
INSERT INTO `comments` VALUES ('73', 'Ullam corrupti corporis ducimus quam. Quo aut eius voluptatem aut ad. Vel aperiam non doloremque iure quibusdam voluptatem. Doloremque nesciunt corporis cum tempore eum reprehenderit.', null, '15', '170', '1492960606', '1492960606', '1');
INSERT INTO `comments` VALUES ('74', 'Minima repellat incidunt et. Molestias exercitationem non eos at aut. Modi vel quos aut eum sed. Explicabo temporibus impedit laborum et et officia eos. Labore fugiat consectetur est dolores.', null, '15', '177', '1492960606', '1492960606', '1');
INSERT INTO `comments` VALUES ('75', 'Rerum aliquid et reprehenderit nam optio autem ea tenetur. Occaecati et fugiat et neque vel debitis. Sit tenetur tempora voluptates magnam consequatur.', null, '15', '174', '1492960606', '1492960607', '1');
INSERT INTO `comments` VALUES ('76', 'Nemo saepe vitae ea vitae. Animi non vitae quibusdam omnis ut voluptatem. Qui eum facilis sed eligendi dolorem alias nobis.', null, '15', '182', '1492960607', '1492960607', '1');
INSERT INTO `comments` VALUES ('77', 'Voluptatem explicabo explicabo pariatur quasi sed ad rem ab. Maiores laboriosam repudiandae at rerum. Aut voluptatem quidem voluptatem. Architecto atque libero consequatur voluptatem est et.', null, '15', '181', '1492960607', '1492960607', '1');
INSERT INTO `comments` VALUES ('78', 'Illo dolores architecto officiis odio. Animi vel cumque et illum nobis ex dolorem est. Eos molestiae sit et commodi nihil aliquid.', null, '15', '177', '1492960608', '1492960608', '1');
INSERT INTO `comments` VALUES ('79', 'Voluptate maiores similique impedit. Totam omnis nobis consequatur dolores rerum dolor. Rerum a sed id.', null, '15', '179', '1492960608', '1492960608', '1');
INSERT INTO `comments` VALUES ('80', 'Dolores non id molestiae dolore deserunt ex exercitationem. Aut quibusdam dolores ea dolore dolores omnis.', null, '15', '177', '1492960608', '1492960609', '1');
INSERT INTO `comments` VALUES ('81', 'Ut voluptates sunt quaerat harum rem voluptatum quia voluptas. Unde est voluptatem pariatur vitae unde. Atque in labore esse quasi qui. Et recusandae modi quasi voluptatem qui quia.', null, '15', '182', '1492960609', '1492960609', '1');
INSERT INTO `comments` VALUES ('82', 'Culpa facilis rerum pariatur aliquid. Iste beatae voluptatibus repellendus rerum molestiae. Nihil sit enim rerum doloremque sint. Omnis nemo nam sit provident maxime molestiae.', null, '15', '174', '1492960609', '1492960610', '1');
INSERT INTO `comments` VALUES ('83', 'Consequatur tempora nemo molestiae. Possimus velit qui minima accusantium. Qui itaque quo unde et distinctio.\nError repellat error corporis perferendis odio excepturi. Ut esse sed voluptates saepe.', null, '15', '174', '1492960610', '1492960610', '1');
INSERT INTO `comments` VALUES ('84', 'Explicabo explicabo fugit dolor magni. Voluptatem beatae quisquam quia voluptatem totam et. Labore rem et incidunt dicta voluptatem.', null, '15', '181', '1492960610', '1492960611', '1');
INSERT INTO `comments` VALUES ('85', 'Ut dignissimos et et alias. Ullam qui similique laboriosam fugiat ea pariatur maxime. Qui ab voluptate architecto sed. Sed omnis consectetur repudiandae qui.', null, '15', '179', '1492960611', '1492960611', '1');
INSERT INTO `comments` VALUES ('86', 'Voluptates quae alias voluptas nobis commodi odio. Eius rem exercitationem necessitatibus est. Officiis quo id et debitis dolorum velit.', null, '15', '177', '1492960611', '1492960611', '1');
INSERT INTO `comments` VALUES ('87', 'Nisi ex culpa et labore eum qui. Quas rerum vel et sunt ut deserunt. Commodi et harum totam sequi ea.', null, '15', '173', '1492960611', '1492960611', '1');
INSERT INTO `comments` VALUES ('88', 'Sed magnam enim et quaerat quas. Enim nemo consequatur vitae quod nam. Est est facere odit qui. Praesentium consectetur quas aut omnis numquam fugit earum.', null, '15', '177', '1492960612', '1492960612', '1');
INSERT INTO `comments` VALUES ('89', 'Dolorem harum quia recusandae. Aut rem dolor nobis necessitatibus aliquid eius et nam. Consequatur aut ullam omnis provident omnis. Molestiae enim totam dolore sit reprehenderit dolor placeat.', null, '15', '172', '1492960612', '1492960612', '1');
INSERT INTO `comments` VALUES ('90', 'Harum omnis nam voluptas fugiat est. Laboriosam consectetur et rerum. Necessitatibus omnis tenetur aut. Voluptatum aliquam minus voluptatem et hic asperiores aut.', null, '15', '174', '1492960612', '1492960613', '1');
INSERT INTO `comments` VALUES ('91', 'Aliquam ipsam quis voluptas tempora. Illo saepe enim repudiandae laboriosam omnis occaecati maiores at. Autem veniam voluptatibus dolor mollitia saepe omnis nam consectetur.', null, '15', '172', '1492960613', '1492960614', '1');
INSERT INTO `comments` VALUES ('92', 'Magnam quaerat doloribus rem dolorem eos et deserunt molestias. Accusamus quia consequatur aut officia. Minus provident sed officiis ad.', null, '15', '171', '1492960614', '1492960614', '1');
INSERT INTO `comments` VALUES ('93', 'Iste officiis ut voluptatibus et impedit voluptas blanditiis. Quo sit iusto asperiores cum. Exercitationem est nemo quis qui voluptatem qui.', null, '15', '179', '1492960614', '1492960615', '1');
INSERT INTO `comments` VALUES ('94', 'Ea id sint in alias aut. Ut ut tenetur laborum et non sit ipsam. Dolores nam ex voluptatem aut modi a. Qui voluptas nisi ad et natus.', null, '15', '177', '1492960615', '1492960615', '1');
INSERT INTO `comments` VALUES ('95', 'Aut placeat dolorem aut. Voluptatem laboriosam ut et qui cum dolorem qui omnis.', null, '15', '171', '1492960616', '1492960616', '1');
INSERT INTO `comments` VALUES ('96', 'Et ab explicabo eum. Aliquam nulla nihil ab excepturi aperiam vel. Rerum quidem quis molestiae dolor. Distinctio ipsum commodi quae.', null, '15', '177', '1492960616', '1492960616', '1');
INSERT INTO `comments` VALUES ('97', 'Consequatur fugiat commodi molestiae consequuntur aut. Ea aut exercitationem deserunt aliquid velit. Rerum in consequatur possimus aut ut harum delectus expedita.', null, '15', '179', '1492960616', '1492960616', '1');
INSERT INTO `comments` VALUES ('98', 'Ratione qui quis quia veniam. Aut a sint optio rem. Fugit sapiente voluptas eligendi quis aspernatur dignissimos maiores autem. Fugiat eaque ut autem aliquid quia.', null, '15', '180', '1492960617', '1492960617', '1');
INSERT INTO `comments` VALUES ('99', 'Quis tempore soluta et amet et doloribus eum. Quo placeat nobis nihil est. Cumque rerum ad rerum amet. Voluptatem et incidunt voluptas quam blanditiis ut eligendi.', null, '15', '180', '1492960618', '1492960618', '1');
INSERT INTO `comments` VALUES ('100', 'Quo deleniti aut incidunt provident vitae qui et. Est omnis quae ea. Recusandae id repudiandae non et autem facilis quia officiis. Hic eaque id facilis quaerat commodi deleniti.', null, '15', '170', '1492960618', '1492960618', '1');
INSERT INTO `comments` VALUES ('101', 'Et qui et et. Consequatur placeat porro labore qui non maxime consequatur. Quam iusto iure iure vel. Illo est autem ipsam.', null, '15', '180', '1492960619', '1492960619', '1');
INSERT INTO `comments` VALUES ('102', 'Omnis unde ut ipsum accusantium fuga beatae. Quis fugiat aliquid accusamus earum fugiat. Harum voluptatibus cupiditate dicta ipsa ut quaerat.', null, '15', '179', '1492960619', '1492960619', '1');
INSERT INTO `comments` VALUES ('103', 'Dolorem doloribus omnis dolorem aut assumenda veritatis. Consequatur accusamus consectetur minima. Explicabo et adipisci sequi libero.', null, '15', '171', '1492960620', '1492960620', '1');
INSERT INTO `comments` VALUES ('104', 'Quis praesentium voluptas voluptas est. Veniam aliquid veniam nihil quod ea quidem. Vitae excepturi dolores aperiam ut. Sed minus omnis nihil assumenda enim enim nulla.', null, '15', '175', '1492960620', '1492960620', '1');
INSERT INTO `comments` VALUES ('105', 'Reiciendis quis est rerum a voluptatem voluptatem necessitatibus id. Sint et magni aut numquam cum. Esse corporis rerum neque est tempora minima.', null, '15', '182', '1492960620', '1492960621', '1');
INSERT INTO `comments` VALUES ('106', 'Deleniti quia non voluptatibus aliquid rerum quibusdam. Deserunt qui unde nihil a. Eveniet et aut quis placeat corporis consequatur consectetur. Animi veritatis non recusandae commodi deleniti.', null, '15', '172', '1492960621', '1492960621', '1');
INSERT INTO `comments` VALUES ('107', 'Ut maxime et et qui voluptatum quo. Impedit officia rerum tempore iure voluptas. Vel quidem harum quam numquam ut consequatur aperiam. Iste explicabo exercitationem nam ut corrupti ea.', null, '15', '181', '1492960621', '1492960622', '1');
INSERT INTO `comments` VALUES ('108', 'Consequatur et facilis harum nam vitae veniam vel perferendis. Ut beatae ratione unde commodi. Porro neque et delectus molestiae.', null, '15', '182', '1492960622', '1492960622', '1');
INSERT INTO `comments` VALUES ('109', 'Nesciunt mollitia eius et eos non. Ab laborum quibusdam numquam optio. Vel ut voluptate enim consectetur in ad maxime quibusdam.', null, '15', '181', '1492960622', '1492960622', '1');
INSERT INTO `comments` VALUES ('110', 'Libero ea consectetur iste quaerat aut ut. Quis repellendus iusto iusto dolor cupiditate reprehenderit nisi expedita. Fuga repellendus non non est. Voluptatum et error saepe sit sunt.', null, '15', '181', '1492960623', '1492960623', '1');
INSERT INTO `comments` VALUES ('111', 'Accusamus laboriosam modi eum alias mollitia ab. Accusantium accusamus eos id qui. Harum sunt aperiam recusandae expedita nesciunt nulla. Error praesentium sint occaecati at veniam iusto voluptatem.', null, '15', '178', '1492960623', '1492960623', '1');
INSERT INTO `comments` VALUES ('112', 'Nihil et quo aperiam rerum dolores accusantium nihil. Officiis officiis doloremque sequi exercitationem voluptatum rerum est omnis. Et est aut quos consequuntur sed ut.', null, '15', '173', '1492960624', '1492960624', '1');
INSERT INTO `comments` VALUES ('113', 'Quidem totam nostrum consequatur error velit. Et quos quibusdam est non. Sunt quis ea at nam voluptatem nihil blanditiis. Corporis et distinctio deserunt praesentium natus sequi.', null, '15', '170', '1492960624', '1492960625', '1');
INSERT INTO `comments` VALUES ('114', 'Et reprehenderit iure saepe non laudantium quos officia. Soluta deserunt est cumque fugiat. Maxime earum et minus voluptatum. Sint est ut et omnis.', null, '15', '174', '1492960625', '1492960626', '1');
INSERT INTO `comments` VALUES ('115', 'Explicabo commodi et ut recusandae asperiores. Voluptas et iure libero dolore pariatur cupiditate iure. Voluptatem qui sit iusto neque fugiat eos et.', null, '15', '170', '1492960626', '1492960626', '1');
INSERT INTO `comments` VALUES ('116', 'Cupiditate quo est qui quibusdam sed cum. Nihil nesciunt cum aut. Optio aut voluptatem odio. Omnis natus hic nisi odit.', null, '15', '177', '1492960626', '1492960626', '1');
INSERT INTO `comments` VALUES ('117', 'Vero architecto tempora officia. Autem at error sit ipsam. Consectetur sequi consectetur ad itaque molestiae nisi velit.', null, '15', '179', '1492960626', '1492960627', '1');
INSERT INTO `comments` VALUES ('118', 'Dignissimos quo error dolor consequuntur repudiandae veritatis. Similique aliquid accusantium enim sed.', null, '15', '176', '1492960627', '1492960627', '1');
INSERT INTO `comments` VALUES ('119', 'Expedita non officiis molestiae voluptatum temporibus et alias et. Cupiditate qui deleniti vitae ut ut et error. Cum optio enim magnam velit explicabo et doloremque.', null, '15', '171', '1492960627', '1492960627', '1');
INSERT INTO `comments` VALUES ('120', 'Et vero nihil illo voluptatem quis molestias. Natus aut vitae cumque ab harum cum consequatur. Dolorem alias et ab ducimus maxime modi explicabo.', null, '15', '181', '1492960627', '1492960627', '1');
INSERT INTO `comments` VALUES ('121', 'Est quam quia rem officiis et. Placeat porro error accusantium eius voluptatem quos non ea. Cumque molestiae magni porro voluptatem. Qui ut et sit. Optio et ipsum consequuntur totam.', null, '15', '175', '1492960627', '1492960627', '1');
INSERT INTO `comments` VALUES ('122', 'Et omnis deserunt consequatur non dolorem quam qui impedit. Veritatis quo qui eum placeat et. Eligendi quasi illo aut est explicabo ipsa beatae.', null, '15', '181', '1492960628', '1492960628', '1');
INSERT INTO `comments` VALUES ('123', 'Molestiae alias incidunt itaque et. Enim ipsum consequuntur voluptatem in qui sit nobis molestiae. Expedita ea nisi consequuntur ea hic.', null, '15', '177', '1492960628', '1492960628', '1');
INSERT INTO `comments` VALUES ('124', 'Occaecati et officia libero dolorem sit quos ratione. Cum ad et blanditiis vero dolores. Doloremque vitae dolor voluptatem deleniti.', null, '15', '176', '1492960628', '1492960629', '1');
INSERT INTO `comments` VALUES ('125', 'Beatae consequatur ut itaque natus eligendi dolor rerum. Molestiae ut eos doloribus provident rerum ipsum labore. Eius provident reiciendis expedita culpa.', null, '15', '176', '1492960630', '1492960630', '1');
INSERT INTO `comments` VALUES ('126', 'Tenetur est nesciunt deleniti esse tenetur est. In esse itaque dolorem laboriosam ad. Et consequatur ipsa cupiditate dolor.', null, '15', '181', '1492960630', '1492960631', '1');
INSERT INTO `comments` VALUES ('127', 'Et eius autem harum velit. Voluptatem fugiat voluptas ducimus et recusandae et eveniet. Et et assumenda vitae magni a. Sit mollitia quod et earum. Iusto rem ipsum vel quibusdam.', null, '15', '178', '1492960631', '1492960631', '1');
INSERT INTO `comments` VALUES ('128', 'Ut sunt magni facere rerum perferendis voluptatibus. Non aliquam magnam eum perspiciatis odio consequatur tenetur facere. Deserunt et qui quod dignissimos.', null, '15', '180', '1492960631', '1492960631', '1');
INSERT INTO `comments` VALUES ('129', 'Necessitatibus qui error voluptatem labore molestiae. Ex minus atque enim et sit ut. Ullam earum ut exercitationem facilis eius. Tenetur quod est nemo ab aut animi excepturi.', null, '15', '181', '1492960631', '1492960632', '1');
INSERT INTO `comments` VALUES ('130', 'Natus fugit consequuntur nihil eveniet sed dicta et. Commodi repellat repellendus et minima maxime est. Magnam iure doloremque deserunt eum consequuntur.', null, '15', '171', '1492960632', '1492960632', '1');
INSERT INTO `comments` VALUES ('131', 'Dolorem consequatur quia repellendus reiciendis. Labore porro minus explicabo est maxime dolores. Blanditiis dolor rerum ullam ut.', null, '15', '170', '1492960632', '1492960632', '1');
INSERT INTO `comments` VALUES ('132', 'Accusamus et rerum illo nam aut voluptas. Dolores aliquid occaecati expedita ipsum repellat rerum. Cum ab quo porro id iste.', null, '15', '171', '1492960633', '1492960633', '1');
INSERT INTO `comments` VALUES ('133', 'Necessitatibus est et velit. Laboriosam enim vitae nihil iure. Molestiae et quam culpa non at. Illum deleniti libero commodi aut id.', null, '15', '171', '1492960633', '1492960633', '1');
INSERT INTO `comments` VALUES ('134', 'Ad aliquid eos quis asperiores maxime. Voluptas veniam assumenda pariatur voluptas id blanditiis. Natus a quod ut facere.', null, '15', '178', '1492960633', '1492960634', '1');
INSERT INTO `comments` VALUES ('135', 'Sunt consequatur et qui id accusantium voluptas tenetur. Maiores aliquid magnam quia dicta culpa. Officia aperiam eaque dolorem ipsum odit adipisci.', null, '15', '173', '1492960634', '1492960634', '1');
INSERT INTO `comments` VALUES ('136', 'Corrupti minus aliquid numquam molestiae qui aperiam. Nisi corrupti earum dolore. Est quia rem atque quia rem ducimus et.', null, '15', '179', '1492960634', '1492960635', '1');
INSERT INTO `comments` VALUES ('137', 'Voluptate tempore a velit. Quo quos reprehenderit impedit dignissimos. Quibusdam magni eveniet et fugit labore.', null, '15', '180', '1492960635', '1492960635', '1');
INSERT INTO `comments` VALUES ('138', 'Delectus similique provident qui hic. Sint iusto iure blanditiis qui quidem molestiae odio. Aperiam eos sed deserunt praesentium. Quam a aut consequatur et aliquid ut non.', null, '15', '173', '1492960636', '1492960636', '1');
INSERT INTO `comments` VALUES ('139', 'Aut sunt est non dolores. Earum ab ipsum neque rem voluptatem occaecati debitis. Et quibusdam mollitia dolore voluptate ea dolores ea. Rerum exercitationem natus distinctio vel omnis commodi.', null, '15', '178', '1492960636', '1492960637', '1');
INSERT INTO `comments` VALUES ('140', 'Incidunt sed pariatur qui molestias et. Doloremque aspernatur voluptatum necessitatibus rerum eius. Quo iure voluptatem aut doloribus sed exercitationem.', null, '15', '170', '1492960637', '1492960637', '1');
INSERT INTO `comments` VALUES ('141', 'Ab voluptas corrupti alias. Itaque illum enim corrupti non eos perspiciatis sunt asperiores. Dolorem odit quis fugit totam magnam quo quia. Ad explicabo perferendis reprehenderit at et.', null, '15', '172', '1492960637', '1492960638', '1');
INSERT INTO `comments` VALUES ('142', 'Ipsam hic quis quas atque repellat. Non odit fuga deserunt ut. Excepturi quidem sunt ipsa tempora enim minus recusandae. Aut odio veritatis nemo omnis corporis nesciunt qui.', null, '15', '179', '1492960639', '1492960639', '1');
INSERT INTO `comments` VALUES ('143', 'Ut velit veniam corrupti sit. Sed quas ut nobis incidunt dolorum sapiente accusamus ut. Eos dolore ea nesciunt facere. Aut placeat et sed quis autem in ipsum.', null, '15', '178', '1492960639', '1492960639', '1');
INSERT INTO `comments` VALUES ('144', 'Est ad et perspiciatis quis. Facilis natus eos aspernatur qui facilis deserunt. Voluptatem quis error doloremque velit sed pariatur doloribus.', null, '15', '176', '1492960639', '1492960640', '1');
INSERT INTO `comments` VALUES ('145', 'test', null, '16', '181', '1493065163', '1493065163', '1');
INSERT INTO `comments` VALUES ('146', 'test comment', null, '16', '170', '1493345224', '1493345224', '1');

-- ----------------------------
-- Table structure for comment_answer
-- ----------------------------
DROP TABLE IF EXISTS `comment_answer`;
CREATE TABLE `comment_answer` (
  `id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment_answer
-- ----------------------------

-- ----------------------------
-- Table structure for comment_question
-- ----------------------------
DROP TABLE IF EXISTS `comment_question`;
CREATE TABLE `comment_question` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `updated_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment_question
-- ----------------------------

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `update_at` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `config_fk_user_idx` (`update_by`),
  CONSTRAINT `config_ibfk_1` FOREIGN KEY (`update_by`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of config
-- ----------------------------

-- ----------------------------
-- Table structure for creadential_other
-- ----------------------------
DROP TABLE IF EXISTS `creadential_other`;
CREATE TABLE `creadential_other` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `describe_an_experience` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of creadential_other
-- ----------------------------

-- ----------------------------
-- Table structure for credential_education
-- ----------------------------
DROP TABLE IF EXISTS `credential_education`;
CREATE TABLE `credential_education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `concentration` varchar(255) DEFAULT NULL,
  `secondary_concentration` varchar(255) DEFAULT NULL,
  `degree_type` varchar(255) DEFAULT NULL,
  `graduation_year` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of credential_education
-- ----------------------------

-- ----------------------------
-- Table structure for credential_employment
-- ----------------------------
DROP TABLE IF EXISTS `credential_employment`;
CREATE TABLE `credential_employment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `i_current_work_here` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of credential_employment
-- ----------------------------

-- ----------------------------
-- Table structure for credential_location
-- ----------------------------
DROP TABLE IF EXISTS `credential_location`;
CREATE TABLE `credential_location` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `start_year` date DEFAULT NULL,
  `end_year` date DEFAULT NULL,
  `i_current_live_here` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of credential_location
-- ----------------------------

-- ----------------------------
-- Table structure for index_topic_question
-- ----------------------------
DROP TABLE IF EXISTS `index_topic_question`;
CREATE TABLE `index_topic_question` (
  `id` int(11) NOT NULL,
  `id_topic` int(11) DEFAULT NULL,
  `id_question` int(11) DEFAULT NULL,
  `create_times` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of index_topic_question
-- ----------------------------

-- ----------------------------
-- Table structure for knows_about
-- ----------------------------
DROP TABLE IF EXISTS `knows_about`;
CREATE TABLE `knows_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of knows_about
-- ----------------------------
INSERT INTO `knows_about` VALUES ('1', '12', '18');
INSERT INTO `knows_about` VALUES ('2', '12', '1');
INSERT INTO `knows_about` VALUES ('3', '15', '18');
INSERT INTO `knows_about` VALUES ('4', '15', '2');
INSERT INTO `knows_about` VALUES ('5', '15', '4');
INSERT INTO `knows_about` VALUES ('6', '16', '19');

-- ----------------------------
-- Table structure for logs
-- ----------------------------
DROP TABLE IF EXISTS `logs`;
CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_message` tinytext,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of logs
-- ----------------------------

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m130524_201442_init', '1487304972');
INSERT INTO `migration` VALUES ('m140506_102106_rbac_init', '1487305015');
INSERT INTO `migration` VALUES ('m140602_111327_create_menu_table', '1487304999');
INSERT INTO `migration` VALUES ('m160312_050000_create_user', '1487304999');
INSERT INTO `migration` VALUES ('m170311_153803_insert_topic', '1489247841');

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_anonymous` int(11) DEFAULT '0',
  `body` text,
  `follow_total` int(11) DEFAULT NULL,
  `comment_total` int(11) DEFAULT NULL,
  `upvote_total` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0',
  `slug` varchar(500) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES ('170', 'quora viet nam la website nao ?', '15', '1', 'Dolorem qui voluptas ipsam quidem. Ducimus consequatur est in et omnis temporibus porro. Qui laudantium animi nemo aut. Eos laborum iste corrupti autem.', null, null, null, null, '1', 'natus-provident-nam-vel-dolorum-et-eos-perspiciatis-a-qui-blanditiis-corporis-ut-sit-nostrum-ut-aut-optio-ut', '1492959796', '1492959796');
INSERT INTO `questions` VALUES ('171', 'Qui vel in repudiandae veniam possimus et vel. Recusandae velit tempora labore est ratione distinctio iste. Magnam omnis omnis earum ea. Praesentium ipsa aut occaecati cupiditate.', '15', '1', 'Consequatur dolore praesentium ab error modi non enim autem. Consequatur perferendis et saepe ut. Suscipit iusto sunt animi dolorum vel illo. Cum voluptate sed aut ut expedita.', null, null, null, null, '1', 'qui-vel-in-repudiandae-veniam-possimus-et-vel-recusandae-velit-tempora-labore-est-ratione-distinctio-iste-magnam-omnis-omnis-earum-ea-praesentium-ipsa-aut-occaecati-cupiditate', '1492959796', '1492959796');
INSERT INTO `questions` VALUES ('172', 'Voluptas qui expedita velit quo soluta officiis unde sunt. Debitis aliquam facere qui nisi ratione est. Dolores exercitationem cupiditate minus omnis autem et. Quisquam modi nihil laudantium numquam sit nulla pariatur nihil.', '15', '1', 'Aut quisquam asperiores fuga. Corrupti nulla sed atque non ea. Officiis quo recusandae dolor nihil dolores unde. Ea quis pariatur voluptate aliquid ex id aut nobis.', null, null, null, null, '1', 'voluptas-qui-expedita-velit-quo-soluta-officiis-unde-sunt-debitis-aliquam-facere-qui-nisi-ratione-est-dolores-exercitationem-cupiditate-minus-omnis-autem-et-quisquam-modi-nihil-laudantium-numquam-sit-nulla-pariatur-nihil', '1492959796', '1492959796');
INSERT INTO `questions` VALUES ('173', 'Laboriosam nobis et ullam molestiae. Harum omnis quisquam id corporis eos omnis sint.\nQui quos aut est qui et. Numquam hic sequi eum quo tempore quis. Et fugiat consectetur rerum.', '15', '1', 'Ut laboriosam et sit et. Eos id consequatur aspernatur similique consequuntur. Sit mollitia rem perferendis vitae quis perspiciatis numquam. Et ex magni consequatur aperiam.', null, null, null, null, '1', 'laboriosam-nobis-et-ullam-molestiae-harum-omnis-quisquam-id-corporis-eos-omnis-sint-qui-quos-aut-est-qui-et-numquam-hic-sequi-eum-quo-tempore-quis-et-fugiat-consectetur-rerum', '1492959796', '1492959797');
INSERT INTO `questions` VALUES ('174', 'Quidem distinctio molestias culpa dolorem qui fuga facere. Consectetur ut autem totam sit nemo. Dolorem debitis ab consequatur ex.', '15', '1', 'Ut architecto qui veritatis id. Laborum aut dicta et et voluptas rerum. Dolores aut vitae occaecati non et dicta ut harum.', null, null, null, null, '1', 'quidem-distinctio-molestias-culpa-dolorem-qui-fuga-facere-consectetur-ut-autem-totam-sit-nemo-dolorem-debitis-ab-consequatur-ex', '1492959797', '1492959797');
INSERT INTO `questions` VALUES ('175', 'Cupiditate laudantium voluptatem quia tenetur. Accusantium velit vel eum libero tempora qui quo quia. Nihil nulla ut qui iure. Magni non illo sit quibusdam quo.', '15', '1', 'Hic deserunt exercitationem enim saepe. Et et veniam laborum voluptatem fugiat. Veritatis fugit maxime rerum ut nisi ullam totam.', null, null, null, null, '1', 'cupiditate-laudantium-voluptatem-quia-tenetur-accusantium-velit-vel-eum-libero-tempora-qui-quo-quia-nihil-nulla-ut-qui-iure-magni-non-illo-sit-quibusdam-quo', '1492959797', '1492959797');
INSERT INTO `questions` VALUES ('176', 'Rerum quo sunt rerum atque cupiditate vel et. Molestiae quod tempore voluptate ipsum in ab est qui. Consequatur veniam et necessitatibus dolores commodi ipsam quibusdam voluptatibus.', '15', '1', 'Ipsam dolorem ratione inventore modi eveniet sequi illum tempora. Dicta id dicta minima ullam tenetur. Quam rerum totam non sit est. Possimus qui veritatis qui commodi quaerat laudantium dolores.', null, null, null, null, '1', 'rerum-quo-sunt-rerum-atque-cupiditate-vel-et-molestiae-quod-tempore-voluptate-ipsum-in-ab-est-qui-consequatur-veniam-et-necessitatibus-dolores-commodi-ipsam-quibusdam-voluptatibus', '1492959797', '1492959797');
INSERT INTO `questions` VALUES ('177', 'Laboriosam aut quia odio accusantium autem qui. Nostrum ullam culpa hic debitis vero sunt. Ipsa necessitatibus quidem quia itaque totam.\nOmnis earum enim aut ut illo. Maxime ut sit optio illum perspiciatis rerum.', '15', '1', 'Quidem accusantium qui dolor adipisci. Adipisci dolores omnis voluptas et consectetur aut. Nihil quo rerum necessitatibus.', null, null, null, null, '1', 'laboriosam-aut-quia-odio-accusantium-autem-qui-nostrum-ullam-culpa-hic-debitis-vero-sunt-ipsa-necessitatibus-quidem-quia-itaque-totam-omnis-earum-enim-aut-ut-illo-maxime-ut-sit-optio-illum-perspiciatis-rerum', '1492959797', '1492959797');
INSERT INTO `questions` VALUES ('178', 'Et et quia sint vel sit et. Inventore ipsam ex sunt beatae dolor corrupti est. Veritatis numquam expedita velit distinctio consequatur quos. Voluptas est voluptatum inventore molestiae hic.', '15', '1', 'Voluptatum et aut inventore quia corrupti est. Amet et quaerat quod suscipit. Voluptate omnis velit ut consequuntur.', null, null, null, null, '1', 'et-et-quia-sint-vel-sit-et-inventore-ipsam-ex-sunt-beatae-dolor-corrupti-est-veritatis-numquam-expedita-velit-distinctio-consequatur-quos-voluptas-est-voluptatum-inventore-molestiae-hic', '1492959797', '1492959797');
INSERT INTO `questions` VALUES ('179', 'Non minus aut est voluptatem placeat praesentium vel doloribus. Quis quas velit excepturi natus quisquam libero. Veritatis cumque natus quo et placeat provident et. Quos quia laudantium ut. Reprehenderit iste quae ducimus id harum.', '15', '1', 'Eaque qui placeat similique qui sit porro dolore. Animi velit est rerum molestiae maxime laudantium et. Autem corrupti est voluptatem ex ut dignissimos.', null, null, null, null, '1', 'non-minus-aut-est-voluptatem-placeat-praesentium-vel-doloribus-quis-quas-velit-excepturi-natus-quisquam-libero-veritatis-cumque-natus-quo-et-placeat-provident-et-quos-quia-laudantium-ut-reprehenderit-iste-quae-ducimus-id-harum', '1492959797', '1492959798');
INSERT INTO `questions` VALUES ('180', 'Quia amet voluptatem animi iusto debitis. Hic praesentium veritatis id quasi vitae hic adipisci. Hic ut quia dolores.', '15', '1', 'Minus veritatis in totam. Maiores placeat aliquam possimus voluptatem rem. Accusamus dolorum enim pariatur excepturi qui hic consequatur.', null, null, null, null, '1', 'quia-amet-voluptatem-animi-iusto-debitis-hic-praesentium-veritatis-id-quasi-vitae-hic-adipisci-hic-ut-quia-dolores', '1492960270', '1492960271');
INSERT INTO `questions` VALUES ('181', 'Neque sed dolores velit quia id in. Quis iste ex facere sed non. Atque optio velit amet consequatur perferendis. Earum ullam animi excepturi dolorem natus.', '15', '1', 'Minima et placeat quas ut dolorem exercitationem. Pariatur rerum quo officia ut tempore sed. Aut praesentium ut dolorum ut. Quae ratione non incidunt et ducimus non hic.', null, null, null, null, '1', 'neque-sed-dolores-velit-quia-id-in-quis-iste-ex-facere-sed-non-atque-optio-velit-amet-consequatur-perferendis-earum-ullam-animi-excepturi-dolorem-natus', '1492960289', '1492960289');
INSERT INTO `questions` VALUES ('182', 'Libero accusantium perspiciatis aliquid corrupti amet placeat laudantium rerum. Ipsa et quaerat eum. Mollitia eligendi consectetur officiis dolore.', '15', '1', 'Amet autem nemo amet eligendi in qui beatae. Aut praesentium praesentium earum. Explicabo magni harum ut eos quaerat enim dignissimos. Qui ipsa consequatur ut ratione impedit adipisci.', null, null, null, null, '1', 'libero-accusantium-perspiciatis-aliquid-corrupti-amet-placeat-laudantium-rerum-ipsa-et-quaerat-eum-mollitia-eligendi-consectetur-officiis-dolore', '1492960479', '1492960479');
INSERT INTO `questions` VALUES ('183', 'dsadasdasdasdasdasdsasadasd', '16', '1', 'dsadsadsadsaddas\n\nsadasdasd\n\n\n\n\ndsadasdasdas', null, null, null, null, '1', 'dsadasdasdasdasdasdsasadasd', '1493062081', '1493062081');
INSERT INTO `questions` VALUES ('184', 'Có được miễn thuế TNCN khi chuyển nhượng Bất Động Sản?', '16', '0', '', null, null, null, null, '1', 'co-duoc-mien-thue-tncn-khi-chuyen-nhuong-bat-dong-san', '1493707342', '1493707342');
INSERT INTO `questions` VALUES ('185', 'Cách tính thuế chuyển nhượng bất động sản như thế nào?', '16', '0', '', null, null, null, null, '1', 'cach-tinh-thue-chuyen-nhuong-bat-dong-san-nhu-the-nao', '1493709063', '1493709063');

-- ----------------------------
-- Table structure for question_follow
-- ----------------------------
DROP TABLE IF EXISTS `question_follow`;
CREATE TABLE `question_follow` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question_follow
-- ----------------------------

-- ----------------------------
-- Table structure for question_topic
-- ----------------------------
DROP TABLE IF EXISTS `question_topic`;
CREATE TABLE `question_topic` (
  `id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question_topic
-- ----------------------------

-- ----------------------------
-- Table structure for question_vote
-- ----------------------------
DROP TABLE IF EXISTS `question_vote`;
CREATE TABLE `question_vote` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `value` tinyint(4) DEFAULT NULL COMMENT '1 upvote, 2downvote, null or 0 not vote',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question_vote
-- ----------------------------

-- ----------------------------
-- Table structure for session
-- ----------------------------
DROP TABLE IF EXISTS `session`;
CREATE TABLE `session` (
  `id` char(40) NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of session
-- ----------------------------
INSERT INTO `session` VALUES ('mro411lehon0hpncun9imudam5', '1493824149', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A31363B);
INSERT INTO `session` VALUES ('nlite5prhu08vff4tuj36hvbr2', '1493877045', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);
INSERT INTO `session` VALUES ('osfedmpta1557fobrut4l4cns7', '1493911148', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A31363B);
INSERT INTO `session` VALUES ('rfqfsmounbldqu11jqln69lj73', '1493876308', 0x5F5F666C6173687C613A303A7B7D5F5F69647C693A313B);

-- ----------------------------
-- Table structure for topics
-- ----------------------------
DROP TABLE IF EXISTS `topics`;
CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quote` tinytext CHARACTER SET latin1,
  `body` text CHARACTER SET latin1,
  `images` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `google_title` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `google_description` tinytext CHARACTER SET latin1,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `update_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci KEY_BLOCK_SIZE=1;

-- ----------------------------
-- Records of topics
-- ----------------------------
INSERT INTO `topics` VALUES ('1', 'topic1', null, 'body for description topic 1', null, null, null, '2017-04-02 22:04:56', '2017-04-02 22:04:56', '1');
INSERT INTO `topics` VALUES ('2', 'topic1', null, 'body for description topic 2', null, null, null, '2017-04-02 22:04:56', '2017-04-02 22:04:56', '1');
INSERT INTO `topics` VALUES ('3', 'topic2', null, 'body for description topic 3', null, null, null, '2017-04-02 22:04:56', '2017-04-02 22:04:56', '1');
INSERT INTO `topics` VALUES ('4', 'topic3', null, 'body for description topic 4', null, null, null, '2017-04-02 22:04:56', '2017-04-02 22:04:56', '1');
INSERT INTO `topics` VALUES ('5', 'topic4', null, 'some body help me? please', null, null, null, '2017-04-02 21:52:07', '2017-04-02 21:52:07', '1');
INSERT INTO `topics` VALUES ('6', 'topic5', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('7', 'topic6', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('8', 'topic7', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('9', 'topic8', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('10', 'topic9', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('11', 'topic10', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('12', 'topic11', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('13', 'topic12', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('14', 'topic13', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('15', 'topic14', null, null, null, null, null, '0000-00-00 00:00:00', null, '1');
INSERT INTO `topics` VALUES ('17', 'ajax', null, null, null, null, null, '2017-03-18 20:41:32', null, null);
INSERT INTO `topics` VALUES ('18', 'topic ', null, null, null, null, null, '2017-03-18 22:58:18', null, null);
INSERT INTO `topics` VALUES ('19', 'lien minh huyen thoai', null, null, null, null, null, '2017-04-30 11:45:58', null, null);

-- ----------------------------
-- Table structure for topic_bookmarks
-- ----------------------------
DROP TABLE IF EXISTS `topic_bookmarks`;
CREATE TABLE `topic_bookmarks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of topic_bookmarks
-- ----------------------------
INSERT INTO `topic_bookmarks` VALUES ('20', '14', '12', '1491657721');
INSERT INTO `topic_bookmarks` VALUES ('21', '13', '12', '1491657753');
INSERT INTO `topic_bookmarks` VALUES ('28', '8', '12', '1491658113');
INSERT INTO `topic_bookmarks` VALUES ('30', '10', '12', '1491658318');
INSERT INTO `topic_bookmarks` VALUES ('31', '11', '12', '1491658362');
INSERT INTO `topic_bookmarks` VALUES ('32', '15', '12', '1491658363');
INSERT INTO `topic_bookmarks` VALUES ('33', '8', '15', '1492960793');
INSERT INTO `topic_bookmarks` VALUES ('34', '15', '15', '1492960796');
INSERT INTO `topic_bookmarks` VALUES ('35', '14', '15', '1492960798');

-- ----------------------------
-- Table structure for upvotes
-- ----------------------------
DROP TABLE IF EXISTS `upvotes`;
CREATE TABLE `upvotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `upvote_type` tinyint(4) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of upvotes
-- ----------------------------
INSERT INTO `upvotes` VALUES ('9', '15', '0', '1492963380', '1492963380', null, null);
INSERT INTO `upvotes` VALUES ('10', '15', '0', '1492963426', '1492963426', null, null);
INSERT INTO `upvotes` VALUES ('11', '16', '182', '1493707096', '1493707097', '1', '1');
INSERT INTO `upvotes` VALUES ('13', '16', '181', '1493707120', '1493707120', '1', '1');
INSERT INTO `upvotes` VALUES ('14', '16', '183', '1493707126', '1493707126', '1', '1');
INSERT INTO `upvotes` VALUES ('15', '16', '177', '1493727854', '1493727854', '1', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `auth_key` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `access_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `logged_in_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL,
  `created_ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `banned_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `fbid` varchar(20) DEFAULT NULL,
  `fbtoken` varchar(255) DEFAULT NULL,
  `resettoken` varchar(50) DEFAULT NULL,
  `resetexpire` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `register_status` tinyint(4) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `google_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '0', '1', 'admin@gmail.com', 'admin super', null, 'Jw94lxE_5Eh22A3d0wBJ1K832z1mpxAJ', null, null, null, null, null, null, null, null, null, null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$RfljqqCbzJUSdAO.zk0KBuSmeB25XA4BVlcxnQrD7De7DY7hh2D/y', null, 'admin', 'super', '1', '0', null, null, null);
INSERT INTO `user` VALUES ('2', '0', '1', 'manage_question@gmail.com', 'Manage Question', null, 'rV9vawF85MkeX2xp6AHWm6BwCdH5T2Vk', null, null, null, null, null, null, null, null, null, null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$x05e8OUdg47QMQ17cWK/mexb1mGB14mWtbEImycluiWg7smAY/H82', null, 'Manage', 'Question', '1', '0', null, null, null);
INSERT INTO `user` VALUES ('9', '0', '1', 'tdt.smile1@gmail.com', 'Dinh Tin Tran', null, 'f5x1MoxLKn6L5uBtJ61qB5MBDJaR4DlD', null, null, null, null, null, null, '1064397450372338', 'EAAQzgcX1WNcBAASrYa83QvxLzsPb5C4ZAHLhZBImGCF2bZBB8MPtvMFkFSZCHFkqhZC5jpZAL3ZBoBE09nPidSWctzAYldd50kP8CfFtEK22ZAAmCgdwBIYRB9UhQtHrQ8MpCaYFXd6d1UqBlj32j30DClCfZAQE5iBHlFXq7GTZCPGQZDZD', null, null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$kyEcoaJN1D/AygIwTSQfBukZNk7y177KswuZR/BlKZnVIiMfLYZrO', null, 'Dinh Tin', 'Tran', '1', '0', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c225.34.275.275/s50x50/427573_106770242801735_624946084_n.jpg?oh=ae8367f0f172741d8067adae8d504916&oe=59738BCD', null, null);
INSERT INTO `user` VALUES ('10', '0', '1', 'tdt.smile2@gmail.com', 'Thug Like', null, '7SQYatG0b-s7y3phIjNenksp3ujjHQKy', null, null, null, null, null, null, null, null, null, null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$v0ews1/2qj91koPHMyO8iOhtibtwnDruSb.uCXsVV18a0/QoiJO8.', null, 'Thug', 'Like', '1', '0', 'https://lh6.googleusercontent.com/-FKPFAtLGfPQ/AAAAAAAAAAI/AAAAAAAAABU/haCcS-YB_jY/photo.jpg', '103356172200408113330', '{\"access_token\":\"ya29.GlsLBMHlMq95aOynkLQ17OKMCE1I2EKjEjaJgYZr7_9Fq6S8a889tLB7HbScF-AApVbDolzB0eOJ86mHtsrxIC99mb9KYueHM3UEIhmAnG4Wr5ZVuJu1ORquQkEv\",\"expires_in\":3600,\"id_token\":\"eyJhbGciOiJSUzI1NiIsImtpZCI6ImRmZTcxYTdhNDdkMmRjNTZhZDFiMTZkNDg0ZGI5YjkzNTUyZ');
INSERT INTO `user` VALUES ('11', '0', '1', 'dinhtin@gmail.com', 'dinhtin tran', null, '2CJeAlTi9dreWfK1zPup2utO1zvz6ixL', null, null, null, null, null, null, null, null, null, '2017-03-18 17:36:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$XcJ7sPUclHhFuSNtVadDCu2tXA2eyfYk1oh12CPt9DrK0ZhArn8Sq', null, 'dinhtin', 'tran', '1', '0', null, null, null);
INSERT INTO `user` VALUES ('12', '0', '1', 'tdt.smile5@gmail.com', 'tin test', null, 'QP5q-osFNS4CPW8JdIgDAB8t-OKyITra', null, null, null, null, null, null, null, null, null, '2017-03-19 00:26:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$2O9FxEem4q6uk5V49gBlruVQp.OXkS35m5.KHigOFT9VI8eFgXwcG', null, 'tin', 'test', '3', '0', null, null, null);
INSERT INTO `user` VALUES ('13', '0', '1', 'tdt.smile4@gmail.com', 'dinhtin tran', null, 'gCrOnqx802dVbTcIVHMgb8xse1xyvu6O', null, null, null, null, null, null, null, null, null, null, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$OM6x4xpIJ4hcDI4WkD0/LeR5XeHzgZuYplC/ElCbimgcTLIBHVd8S', null, 'dinhtin', 'tran', '1', '0', null, null, null);
INSERT INTO `user` VALUES ('14', '0', '1', 'tdt.smile7@gmail.com', 'tin test', null, 'whm--02NQ75prMz7oeVyFxF7wOxKOU-e', null, null, null, null, null, null, null, null, null, '2017-03-19 15:03:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$pInpIu6oBLfxrTOVYFKZL.Yb/PayGYOZrqcGBBI2blWEuAoQtmoo.', null, 'tin', 'test', '2', '0', null, null, null);
INSERT INTO `user` VALUES ('15', '0', '1', 'tdt.smile8@gmail.com', 'dinhtin tran', null, '4QGYS38GkmabgPi_T-qc9STjg5gG0q3d', null, null, null, null, null, null, null, null, null, '2017-03-26 19:07:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$6h3EsmZxxDBjIaEO85RPWeMO/GViXRAwzZYywqvJ9xDwcjfgi0yMm', null, 'dinhtin', 'tran', '3', '0', 'https://lh6.googleusercontent.com/-FKPFAtLGfPQ/AAAAAAAAAAI/AAAAAAAAABU/haCcS-YB_jY/photo.jpg', null, null);
INSERT INTO `user` VALUES ('16', '0', '1', 'ighost190@gmail.com', 'Ken Phạm', null, 'PwdPfJBBz6r8MZ6Vb_P5P98J3moRlf1n', null, null, null, null, null, null, '816133198550022', 'EAAQzgcX1WNcBAFwMGyjBKIwInfTyoZAZBfBbWG7gcZB3BM6DaZCROvkZCwvxCdH2X1zGhNwmFgT5M9m0v4s8AXQy8hssdZAeZCNY1xOYKYhYanYbi32oqmdUZCVkuqZBodZBref1lk5h7tBRrASIlqAuaTibCX8d7gsNIZD', null, '2017-05-02 14:13:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '$2y$13$RKUiBoNWDtVZ0qpSiZ5MXebdTQBVKoMJ48EzCmgroUHHO6eP5WLaW', null, 'Ken', 'Phạm', '3', '0', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/12106917_545832198913458_8233256916147299836_n.jpg?oh=101a1310962e1ffd940c609268ff7f73&oe=5985D5ED', null, null);

-- ----------------------------
-- Table structure for user_notifications
-- ----------------------------
DROP TABLE IF EXISTS `user_notifications`;
CREATE TABLE `user_notifications` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `extra` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_notifications
-- ----------------------------

-- ----------------------------
-- Table structure for user_question_follow
-- ----------------------------
DROP TABLE IF EXISTS `user_question_follow`;
CREATE TABLE `user_question_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_question_follow
-- ----------------------------
INSERT INTO `user_question_follow` VALUES ('1', '12', '1', null, '2017-05-02 16:33:46');
INSERT INTO `user_question_follow` VALUES ('2', '185', '15', null, '2017-05-02 16:38:51');
INSERT INTO `user_question_follow` VALUES ('3', '184', '15', null, '2017-05-02 18:45:14');
INSERT INTO `user_question_follow` VALUES ('4', '184', '14', null, '2017-05-02 18:45:43');
INSERT INTO `user_question_follow` VALUES ('5', '180', '14', null, '2017-05-02 19:03:25');
INSERT INTO `user_question_follow` VALUES ('6', '179', '14', null, '2017-05-02 19:03:39');
INSERT INTO `user_question_follow` VALUES ('7', '178', '14', null, '2017-05-02 19:05:23');
INSERT INTO `user_question_follow` VALUES ('8', '173', '14', null, '2017-05-02 19:05:51');
INSERT INTO `user_question_follow` VALUES ('9', '184', '14', null, '2017-05-02 19:07:11');
INSERT INTO `user_question_follow` VALUES ('10', '185', '14', null, '2017-05-02 19:11:46');
INSERT INTO `user_question_follow` VALUES ('11', '185', '13', null, '2017-05-02 19:14:41');
INSERT INTO `user_question_follow` VALUES ('12', '185', '12', null, '2017-05-02 19:16:33');
INSERT INTO `user_question_follow` VALUES ('13', '185', '11', null, '2017-05-02 19:17:23');
INSERT INTO `user_question_follow` VALUES ('14', '185', '10', null, '2017-05-02 19:18:04');
INSERT INTO `user_question_follow` VALUES ('22', '180', '16', null, '2017-05-03 12:54:37');
INSERT INTO `user_question_follow` VALUES ('23', '179', '16', null, '2017-05-03 12:54:42');
INSERT INTO `user_question_follow` VALUES ('24', '185', '16', null, '2017-05-03 12:54:46');
INSERT INTO `user_question_follow` VALUES ('25', '184', '16', null, '2017-05-03 12:54:51');
INSERT INTO `user_question_follow` VALUES ('26', '178', '16', null, '2017-05-03 12:54:53');
INSERT INTO `user_question_follow` VALUES ('27', '176', '16', null, '2017-05-03 12:54:54');
INSERT INTO `user_question_follow` VALUES ('28', '175', '16', null, '2017-05-03 12:54:55');
INSERT INTO `user_question_follow` VALUES ('29', '174', '16', null, '2017-05-03 12:54:56');
INSERT INTO `user_question_follow` VALUES ('30', '170', '16', null, '2017-05-03 12:55:01');
INSERT INTO `user_question_follow` VALUES ('31', '171', '16', null, '2017-05-03 12:55:37');

-- ----------------------------
-- Table structure for user_question_pass
-- ----------------------------
DROP TABLE IF EXISTS `user_question_pass`;
CREATE TABLE `user_question_pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_question_pass
-- ----------------------------
INSERT INTO `user_question_pass` VALUES ('1', '16', '170', '2017-05-03 12:57:22');
INSERT INTO `user_question_pass` VALUES ('2', '16', '171', '2017-05-03 13:00:26');
INSERT INTO `user_question_pass` VALUES ('3', '16', '185', '2017-05-03 13:34:11');
INSERT INTO `user_question_pass` VALUES ('4', '16', '184', '2017-05-03 13:59:18');
INSERT INTO `user_question_pass` VALUES ('5', '16', '183', '2017-05-03 13:59:22');

-- ----------------------------
-- Table structure for user_topic_follow
-- ----------------------------
DROP TABLE IF EXISTS `user_topic_follow`;
CREATE TABLE `user_topic_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_topic_follow
-- ----------------------------
INSERT INTO `user_topic_follow` VALUES ('1', '1', '11', null, '2017-03-11 23:14:30');
INSERT INTO `user_topic_follow` VALUES ('2', '2', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('3', '3', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('4', '4', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('5', '5', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('6', '6', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('7', '12', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('8', '11', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('9', '10', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('10', '8', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('11', '9', '11', null, '2017-03-11 23:23:00');
INSERT INTO `user_topic_follow` VALUES ('12', '7', '11', null, '2017-03-12 17:57:34');
INSERT INTO `user_topic_follow` VALUES ('13', '7', '11', null, '2017-03-12 17:57:34');
INSERT INTO `user_topic_follow` VALUES ('14', '7', '11', null, '2017-03-12 17:57:34');
INSERT INTO `user_topic_follow` VALUES ('29', '13', '12', null, '2017-03-18 18:22:45');
INSERT INTO `user_topic_follow` VALUES ('30', '1', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('31', '1', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('32', '2', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('33', '3', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('34', '4', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('35', '5', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('36', '6', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('37', '12', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('38', '11', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('39', '10', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('40', '9', '14', null, '2017-03-19 15:03:54');
INSERT INTO `user_topic_follow` VALUES ('41', '8', '14', null, '2017-03-19 15:03:55');
INSERT INTO `user_topic_follow` VALUES ('46', '5', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('47', '6', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('48', '12', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('49', '11', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('50', '10', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('51', '9', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('52', '7', '15', null, '2017-03-19 15:08:54');
INSERT INTO `user_topic_follow` VALUES ('53', '8', '15', null, '2017-03-19 15:10:00');
INSERT INTO `user_topic_follow` VALUES ('54', '8', '15', null, '2017-03-19 15:10:00');
INSERT INTO `user_topic_follow` VALUES ('55', '15', '15', null, '2017-03-19 15:20:20');
INSERT INTO `user_topic_follow` VALUES ('56', '15', '15', null, '2017-03-19 15:20:20');
INSERT INTO `user_topic_follow` VALUES ('57', '14', '15', null, '2017-03-19 15:20:20');
INSERT INTO `user_topic_follow` VALUES ('58', '13', '15', null, '2017-03-19 15:20:20');
INSERT INTO `user_topic_follow` VALUES ('63', '4', '15', null, null);
INSERT INTO `user_topic_follow` VALUES ('65', '3', '15', null, null);
INSERT INTO `user_topic_follow` VALUES ('68', '10', '12', null, null);
INSERT INTO `user_topic_follow` VALUES ('71', '12', '12', null, null);
INSERT INTO `user_topic_follow` VALUES ('73', '18', '12', null, null);
INSERT INTO `user_topic_follow` VALUES ('74', '17', '12', null, null);
INSERT INTO `user_topic_follow` VALUES ('75', '15', '12', null, null);
INSERT INTO `user_topic_follow` VALUES ('76', '9', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('77', '4', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('78', '10', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('79', '2', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('80', '1', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('81', '7', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('82', '13', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('83', '14', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('84', '15', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('85', '17', '16', null, '2017-04-25 02:23:34');
INSERT INTO `user_topic_follow` VALUES ('89', null, '16', null, null);
