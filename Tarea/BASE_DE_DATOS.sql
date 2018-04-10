-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.5.0.5220
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para demo_ci
CREATE DATABASE IF NOT EXISTS `demo_ci` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `demo_ci`;

-- Volcando estructura para tabla demo_ci.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Persona` varchar(100) DEFAULT NULL,
  `Telefono` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Persona` (`Persona`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla demo_ci.personas: 5 rows
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`Id`, `Persona`, `Telefono`) VALUES
	(48, 'laura', '2233456'),
	(44, 'elvira', '75486263'),
	(40, 'sergio', '78956895'),
	(47, 'pedro', '23424'),
	(46, 'daniel', '24332432');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
