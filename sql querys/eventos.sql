/*
Navicat MySQL Data Transfer

Source Server         : Conexion Servicios
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : web_app_inge_web

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-11-16 02:45:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for eventos
-- ----------------------------
DROP TABLE IF EXISTS `eventos`;
CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(100) CHARACTER SET utf8 NOT NULL,
  `direccion_evento` varchar(250) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL,
  `lim_personas` int(11) DEFAULT NULL,
  `detalle_evento` varchar(600) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of eventos
-- ----------------------------
INSERT INTO `eventos` VALUES ('1', 'Campus Party Loja', 'UTPL ', '2015-11-20', '2015-11-20', '09:00:00', '20:00:00', '50', 'Este evento esta enfocado al software por ende habra muchos programadores independientes exponiendo sus trabajos a lavez que losmejores progframadores de algunas empresas como apple y demasexponiendo sus tecnicas y recomendaciones al momento de programar');
