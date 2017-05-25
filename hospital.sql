-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.14 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para hospital
DROP DATABASE IF EXISTS `hospital`;
CREATE DATABASE IF NOT EXISTS `hospital` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `hospital`;

-- Volcando estructura para tabla hospital.frontpage_cards
DROP TABLE IF EXISTS `frontpage_cards`;
CREATE TABLE IF NOT EXISTS `frontpage_cards` (
  `cod_card` int(1) NOT NULL,
  `imagen` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla hospital.frontpage_cards: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `frontpage_cards` DISABLE KEYS */;
INSERT INTO `frontpage_cards` (`cod_card`, `imagen`, `h3`, `p`) VALUES
	(1, 'res/img/12345.jpg', 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus quis orci venenatis dignissim. Integer rutrum est non lacus varius, ut hendrerit tellus gravida. Maecenas sodales, odio id pharetra gravida, lectus libero egestas lorem, vitae pretium leo lectus a augue. '),
	(2, 'res/img/12346.jpg', 'Ipsum', 'Morbi eget lacinia augue, a maximus dolor. Suspendisse eu placerat massa. Cras ullamcorper est eu tortor ultricies, et volutpat felis vestibulum. Pellentesque ornare sollicitudin malesuada. Quisque commodo accumsan libero, sed suscipit eros. Maecenas sed nibh eget neque blandit congue.'),
	(3, 'res/img/12347.jpg', 'Dolor', 'In hac habitasse platea dictumst. Quisque nec laoreet erat, eu sodales erat. Donec malesuada mi sapien, nec iaculis mauris efficitur consequat. Nam et auctor mi, in aliquam risus. Sed vitae neque turpis. Aliquam erat volutpat. Ut vel consequat turpis, eget dignissim arcu. Etiam elementum nisi justo, sed commodo mi placerat et.');
/*!40000 ALTER TABLE `frontpage_cards` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.ingresos
DROP TABLE IF EXISTS `ingresos`;
CREATE TABLE IF NOT EXISTS `ingresos` (
  `Num_Ingreso` int(10) NOT NULL,
  `FIngreso` datetime DEFAULT NULL,
  `FAlta` datetime DEFAULT NULL,
  `Planta` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Cama` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Alergico` bit(1) NOT NULL,
  `Diagnostico` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Coste` decimal(19,4) DEFAULT NULL,
  `Num_Historial` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Num_Colegiado` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Num_Ingreso`),
  KEY `Num_Historial` (`Num_Historial`),
  KEY `Num_Colegiado` (`Num_Colegiado`),
  CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`Num_Historial`) REFERENCES `pacientes` (`Num_Historial`),
  CONSTRAINT `ingresos_ibfk_2` FOREIGN KEY (`Num_Colegiado`) REFERENCES `medicos` (`Num_Colegiado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla hospital.ingresos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `ingresos` DISABLE KEYS */;
INSERT INTO `ingresos` (`Num_Ingreso`, `FIngreso`, `FAlta`, `Planta`, `Cama`, `Alergico`, `Diagnostico`, `Coste`, `Num_Historial`, `Num_Colegiado`) VALUES
	(1, '2002-01-27 00:00:00', '2002-02-20 00:00:00', '2', '121', b'0', 'Amputación', 600.0000, '12342-F', '1010'),
	(2, '2002-05-15 00:00:00', '2002-05-20 00:00:00', '1', '12', b'1', 'Depresión', 120.5000, '15343-D', '3655'),
	(3, '2002-06-20 00:00:00', '2002-06-22 00:00:00', '1', '15', b'0', 'Esquizofrenia', 53.6000, '13131-P', '3655'),
	(4, '2002-07-01 00:00:00', '2002-07-01 00:00:00', '3', '22', b'1', 'Fractura', 32.4000, '15343-D', '2121'),
	(5, '2002-07-01 00:00:00', '2002-07-11 00:00:00', '2', '120', b'1', 'Amputación', 450.0000, '12127-B', '1010'),
	(6, '2002-09-28 00:00:00', '2002-10-03 00:00:00', '1', '31', b'0', 'Depresión', 120.5000, '13131-P', '2020'),
	(7, '2003-01-01 00:00:00', '2003-01-04 00:00:00', '3', '26', b'0', 'Fractura', 47.3600, '52140-K', '2121'),
	(8, '2017-05-02 00:00:00', '2017-06-02 00:00:00', '1', '15', b'1', 'Esquizofrenia', 500.0000, '12342-F', '1010');
/*!40000 ALTER TABLE `ingresos` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.medicos
DROP TABLE IF EXISTS `medicos`;
CREATE TABLE IF NOT EXISTS `medicos` (
  `Num_Colegiado` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Medico` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apell_Medico` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Especialidad` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Antiguedad` int(10) DEFAULT NULL,
  PRIMARY KEY (`Num_Colegiado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla hospital.medicos: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `medicos` DISABLE KEYS */;
INSERT INTO `medicos` (`Num_Colegiado`, `Nom_Medico`, `Apell_Medico`, `Especialidad`, `Antiguedad`) VALUES
	('1010', 'Juana', 'Morenos Navarro', 'Cirujano', 3),
	('1111', 'asd', 'asd', 'dsa', 3),
	('1231', 'Sebastián', 'Esteban Muñoz', 'Psiquiatra', 5),
	('2020', 'Antonio', 'Vidal Torres', 'Psiquiatra', 2),
	('2121', 'Eva', 'Pons Prats', 'Radiólogo', 3),
	('3655', 'Carlos', 'Hernández Álvarez', 'Psiquiatra', 6);
/*!40000 ALTER TABLE `medicos` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.pacientes
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `Num_Historial` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `Nom_Paciente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Apell_Paciente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FNacimiento` datetime DEFAULT NULL,
  `Domicilio` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Poblacion` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sexo` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Num_Historial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla hospital.pacientes: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` (`Num_Historial`, `Nom_Paciente`, `Apell_Paciente`, `FNacimiento`, `Domicilio`, `Poblacion`, `Sexo`) VALUES
	('12127-B', 'Olga', 'Navarrete Puch', '1980-05-23 00:00:00', 'Avda. Madrid, 6', 'Alicante', 'M'),
	('12135-B', 'test', 'test', '2017-05-25 00:00:00', 'test', 'test', 'H'),
	('12155-B', 'test', 'test', '2017-05-25 00:00:00', 'test', 'test', 'H'),
	('12342-F', 'Enrique', 'Morales López', '1975-01-03 00:00:00', 'Pº de la Castellana, 133', 'Madrid', 'H'),
	('13131-P', 'Jaime', 'Flores ', '1970-12-15 00:00:00', 'c/ Trujillo, 13', 'Alicante', 'H'),
	('14444-B', 'dasdf', 'sdfsdfdsf', '2017-05-17 00:00:00', 'cxvxcv', 'xcvxcv', 'H'),
	('15343-D', 'Rogelio', 'Martínez Lozano', '1956-04-01 00:00:00', 'c/ Versalles, 17', 'Fuenlabrada', 'H'),
	('32154-I', 'Carlos', 'Jimenez Blanco', '1955-12-15 00:00:00', 'c/ Gran Vía, 34', 'Madrid', 'H'),
	('52140-K', 'Mónica', 'Armengol Prats', '1970-06-21 00:00:00', 'c/ Doce de Octubre, 25', 'Madrid', 'M');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Volcando estructura para tabla hospital.personal_administrativo
DROP TABLE IF EXISTS `personal_administrativo`;
CREATE TABLE IF NOT EXISTS `personal_administrativo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla hospital.personal_administrativo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_administrativo` DISABLE KEYS */;
INSERT INTO `personal_administrativo` (`id`, `nombre`, `pass`) VALUES
	(1, 'uno', 'uno'),
	(2, 'dos', 'dos'),
	(3, 'tres', 'tres');
/*!40000 ALTER TABLE `personal_administrativo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
