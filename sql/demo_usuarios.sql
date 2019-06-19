SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `departamentos`
-- -------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255)  NOT NULL,
  `apellidos` varchar(255)  NOT NULL,
  `correo` varchar(255)  NOT NULL,
  `username` varchar(50)  NOT NULL,
  `password` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `departamentos`
-- ----------------------------

INSERT INTO `usuarios` VALUES
('1', 'admin', 'admin', 'admin@admin', 'admin', 'admin', 'M'),
('2', 'pepe', 'pepe', 'pepe@pepe', 'pepe', 'pepe', 'M') ;




