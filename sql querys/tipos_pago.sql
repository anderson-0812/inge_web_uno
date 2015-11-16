/*
Navicat MySQL Data Transfer

Source Server         : Conexion Servicios
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : web_app_inge_web

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-11-16 02:45:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tipos_pago
-- ----------------------------
DROP TABLE IF EXISTS `tipos_pago`;
CREATE TABLE `tipos_pago` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_pago` varchar(255) CHARACTER SET utf8 NOT NULL,
  `detalle_pago` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipos_pago
-- ----------------------------
INSERT INTO `tipos_pago` VALUES ('1', 'Tarjeta', 'si es contarjeta debe hacerlo antes de ingresar al evento');
INSERT INTO `tipos_pago` VALUES ('2', 'Efectivo', '');
