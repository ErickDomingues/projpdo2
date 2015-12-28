/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50626
Source Host           : localhost:3306
Source Database       : pdo

Target Server Type    : MYSQL
Target Server Version : 50626
File Encoding         : 65001

Date: 2015-12-28 14:05:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clientes
-- ----------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
`id`  int(7) NOT NULL AUTO_INCREMENT ,
`name`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=16

;

-- ----------------------------
-- Records of clientes
-- ----------------------------
BEGIN;
INSERT INTO `clientes` VALUES ('11', 'Bull Peendranande 3'), ('12', 'Mariana'), ('13', 'Marhteus'), ('14', 'Macaco Aranha'), ('15', 'Periquito');
COMMIT;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`usuario`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`email`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`senha`  varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=4

;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
BEGIN;
INSERT INTO `usuarios` VALUES ('1', 'Erickão', 'erickdesouzadomingues@gmail.com', '123456'), ('3', 'Boi', 'boi@boi.com', '1234567');
COMMIT;

-- ----------------------------
-- Auto increment value for clientes
-- ----------------------------
ALTER TABLE `clientes` AUTO_INCREMENT=16;

-- ----------------------------
-- Auto increment value for usuarios
-- ----------------------------
ALTER TABLE `usuarios` AUTO_INCREMENT=4;
