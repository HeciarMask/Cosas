-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-11-2013 a las 18:20:28
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

DROP DATABASE if exists ejemplos;
create database ejemplos;
use ejemplos;
CREATE TABLE IF NOT EXISTS `demo4` (
  `Contador` tinyint(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `DNI` char(8) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(15) NOT NULL,
  `Apellido2` varchar(15) NOT NULL,
  `Nacimiento` date DEFAULT '1970-12-21',
  `Hora` time DEFAULT '00:00:00',
  `Sexo` enum('M','F') NOT NULL DEFAULT 'M',
  `Fumador` char(1) DEFAULT 'N',
  `Idiomas` set(' Castellano',' Francés','Inglés',' Alemán',' Búlgaro',' Chino') DEFAULT NULL,
  PRIMARY KEY (`DNI`),
  KEY `auto` (`Contador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Volcado de datos para la tabla `demo4`
--

INSERT INTO `demo4` (`Contador`, `DNI`, `Nombre`, `Apellido1`, `Apellido2`, `Nacimiento`, `Hora`, `Sexo`, `Fumador`, `Idiomas`) VALUES
(00000020, '11638620', 'Dorotea', 'Alvarez', 'de Nora', '1970-09-06', '04:45:12', 'F', 'N', ' Castellano,Inglés, Búlgaro'),
(00000006, '11888458', 'Generosa', 'Domínguez', 'de Grado', '1978-03-30', '12:31:15', 'F', 'S', ' Francés,Inglés, Alemán'),
(00000001, '1234', 'Lupicinio', 'Servidor', 'Servido', '1954-11-23', '16:24:52', 'M', 'S', ' Castellano, Francés'),
(00000074, '13472139', 'Ambrosio', 'Fernández', 'del Rio', '1982-02-02', '05:08:11', 'M', 'N', ' Alemán, Búlgaro'),
(00000017, '13864457', 'Tiburcio', 'Alonso', 'de las Asturias', '1984-06-04', '07:53:12', 'M', 'S', ' Francés, Chino'),
(00000046, '15733136', 'Gonzalo', 'García', 'de Grado', '1981-03-02', '06:59:45', 'M', 'N', ' Francés, Chino'),
(00000030, '17073518', 'Lupicinia', 'Barcena', 'de Loriana', '1983-12-05', '07:02:33', 'F', 'S', ' Castellano, Francés,Inglés, Búlgaro, Chino'),
(00000071, '23204554', 'Lupicinia', 'López', 'de Aviles', '1974-03-18', '04:49:02', 'F', 'N', ' Castellano, Alemán, Búlgaro'),
(00000087, '25166742', 'Generosa', 'Barcena', 'del Rio', '1981-03-12', '12:20:19', 'F', 'S', ' Castellano, Francés, Chino'),
(00000073, '28505520', 'Gonzalo', 'Rodríguez', 'de Loriana', '1984-05-30', '01:45:22', 'M', 'N', ' Castellano, Francés, Chino'),
(00000090, '30011692', 'Fernando', 'López', 'de Nora', '1978-01-31', '12:54:59', 'M', 'S', ' Francés,Inglés, Alemán, Búlgaro, Chino'),
(00000050, '31470615', 'Gonzalo', 'García', 'del Campo', '1978-05-04', '07:56:39', 'M', 'N', ' Castellano, Chino'),
(00000069, '31838811', 'Filiberto', 'Alonso', 'del Monte', '1973-02-08', '08:01:00', 'M', 'N', ' Castellano, Alemán, Chino'),
(00000031, '3199561', 'Filiberto', 'Domínguez', 'de Nora', '1981-05-10', '06:54:19', 'M', 'N', ' Castellano, Francés,Inglés, Alemán'),
(00000013, '35682897', 'Gonzalo', 'García', 'del Campo', '1976-01-25', '10:39:08', 'M', 'N', ' Castellano, Francés,Inglés, Búlgaro, Chino'),
(00000067, '37123306', 'Tiburcio', 'Barcena', 'de Blimea', '1976-06-01', '04:36:22', 'M', 'S', ' Francés, Chino'),
(00000063, '37525565', 'Tiburcio', 'Alvarez', 'de Loriana', '1982-06-22', '04:51:54', 'M', 'S', ' Castellano,Inglés, Alemán, Búlgaro'),
(00000076, '37719872', 'Generosa', 'Fernández', 'del Campo', '1977-05-15', '11:09:00', 'F', 'N', ' Castellano, Francés,Inglés, Alemán, Búlgaro, Chino'),
(00000003, '38026510', 'Filiberto', 'Alvarez', 'de Aviles', '1982-04-09', '11:16:05', 'M', 'S', ' Francés, Alemán, Búlgaro, Chino'),
(00000061, '38155202', 'Generosa', 'Cano', 'de Grado', '1971-01-24', '07:46:50', 'F', 'S', ' Castellano, Alemán'),
(00000010, '39544896', 'Telesfora', 'López', 'del Campo', '1978-02-25', '09:37:06', 'F', 'N', ' Alemán, Chino'),
(00000083, '4101510', 'Servanda', 'Iglesias', 'de Loriana', '1975-10-19', '02:58:39', 'F', 'N', 'Inglés, Búlgaro'),
(00000018, '4124345', 'Dorotea', 'Alvarez', 'del Monte', '1977-05-02', '11:25:36', 'F', 'S', ' Francés,Inglés, Chino'),
(00000057, '42912044', 'Fernando', 'Alonso', 'del Rio', '1981-01-18', '02:24:20', 'M', 'S', ' Francés'),
(00000015, '42955909', 'Generosa', 'Alvarez', 'de Aviles', '1971-06-07', '03:41:24', 'F', 'N', ' Castellano, Francés,Inglés, Alemán, Chino'),
(00000100, '44024369', 'Fernando', 'Domínguez', 'del Monte', '1983-09-25', '07:46:05', 'M', 'S', 'Inglés, Alemán'),
(00000028, '45225782', 'Generosa', 'Rodríguez', 'de Aviles', '1981-09-23', '04:13:41', 'F', 'S', ' Castellano, Alemán'),
(00000104, '4545', 'ewheh', 'thhhtth', 'yuklyky', '1961-01-01', '04:00:00', 'F', 'S', ' Castellano, Alemán'),
(00000054, '46356823', 'Gonzalo', 'Domínguez', 'de Grado', '1970-05-15', '09:40:33', 'M', 'N', ' Castellano, Francés,Inglés, Alemán, Búlgaro, Chino'),
(00000036, '46745161', 'Ambrosio', 'Rodríguez', 'del Campo', '1978-01-23', '04:12:08', 'M', 'N', ' Francés'),
(00000089, '47775065', 'Telesfora', 'Rodríguez', 'del Monte', '1976-12-15', '03:31:57', 'F', 'N', ' Castellano, Francés, Búlgaro, Chino'),
(00000012, '48534032', 'Ambrosio', 'García', 'del Campo', '1980-02-06', '05:25:13', 'M', 'S', ' Francés, Alemán, Búlgaro, Chino'),
(00000011, '49123254', 'Ambrosio', 'Alvarez', 'de Aviles', '1979-11-01', '04:35:55', 'M', 'S', ' Búlgaro, Chino'),
(00000096, '50357170', 'Dorotea', 'Domínguez', 'de Nora', '1975-12-08', '04:30:46', 'F', 'N', ' Castellano, Búlgaro, Chino'),
(00000072, '50681864', 'Dorotea', 'Alvarez', 'de Loriana', '1972-02-17', '11:30:22', 'F', 'S', ' Castellano'),
(00000045, '52290397', 'Fernando', 'Fernández', 'del Campo', '1981-07-25', '12:51:24', 'M', 'N', 'Inglés, Búlgaro'),
(00000101, '52480816', 'Generosa', 'Fernández', 'de Nora', '1983-05-30', '10:51:00', 'F', 'S', 'Inglés'),
(00000077, '5309946', 'Telesfora', 'Rodríguez', 'de Grado', '1976-10-06', '11:25:04', 'F', 'S', ' Francés,Inglés, Alemán'),
(00000014, '533576', 'Telesfora', 'Alonso', 'de Blimea', '1981-01-10', '05:33:56', 'F', 'N', ' Francés, Búlgaro'),
(00000049, '54303189', 'Fernando', 'Iglesias', 'de las Asturias', '1977-02-09', '09:20:26', 'M', 'N', ' Castellano,Inglés, Alemán, Búlgaro, Chino'),
(00000099, '54572599', 'Filiberto', 'Cano', 'de Grado', '1984-03-28', '04:10:07', 'M', 'S', ' Francés,Inglés, Búlgaro'),
(00000047, '54948456', 'Generosa', 'López', 'de Grado', '1972-03-31', '03:09:43', 'F', 'S', ' Castellano, Francés,Inglés, Alemán, Búlgaro, Chino'),
(00000059, '54989630', 'Tiburcio', 'Barcena', 'de Aviles', '1970-10-31', '10:18:19', 'M', 'S', ' Castellano, Búlgaro'),
(00000080, '56684347', 'Servanda', 'López', 'de Grado', '1984-08-22', '07:40:18', 'F', 'S', ' Castellano, Francés,Inglés, Búlgaro'),
(00000095, '57720137', 'Ambrosio', 'Fernández', 'de Blimea', '1978-10-30', '08:21:13', 'M', 'N', ' Castellano, Francés,Inglés, Búlgaro'),
(00000056, '57836952', 'Servanda', 'Alonso', 'del Monte', '1975-08-12', '01:08:46', 'F', 'S', 'Inglés, Alemán, Búlgaro, Chino'),
(00000052, '5842927', 'Generosa', 'García', 'de Grado', '1977-08-22', '05:26:30', 'F', 'S', ' Castellano,Inglés, Alemán, Búlgaro'),
(00000092, '61614213', 'Gonzalo', 'Fernández', 'de Nora', '1980-03-09', '09:55:53', 'M', 'N', ' Francés'),
(00000081, '62386515', 'Fernando', 'García', 'del Rio', '1984-05-05', '01:42:38', 'M', 'S', ' Castellano, Francés'),
(00000037, '64536949', 'Telesfora', 'Fernández', 'del Rio', '1979-07-02', '08:52:14', 'F', 'S', ' Castellano, Francés,Inglés, Alemán, Búlgaro, Chino'),
(00000027, '65874029', 'Telesfora', 'Rodríguez', 'del Rio', '1980-11-04', '05:19:12', 'F', 'N', ' Castellano, Francés, Alemán'),
(00000042, '65889410', 'Ambrosio', 'Fernández', 'de Nora', '1976-09-12', '02:39:50', 'M', 'N', ' Castellano, Alemán, Búlgaro'),
(00000022, '66781845', 'Filiberto', 'Alvarez', 'del Rio', '1977-05-25', '05:58:05', 'M', 'S', ' Castellano, Alemán'),
(00000048, '67403001', 'Gonzalo', 'Fernández', 'de Nora', '1984-01-22', '01:41:15', 'M', 'N', ''),
(00000032, '67574850', 'Servanda', 'Barcena', 'de Grado', '1976-08-05', '02:54:12', 'F', 'N', ' Castellano, Francés, Chino'),
(00000008, '68069224', 'Servanda', 'Iglesias', 'de Nora', '1978-09-11', '01:00:42', 'F', 'N', ' Alemán, Búlgaro'),
(00000038, '68647006', 'Ambrosio', 'Barcena', 'de Grado', '1978-06-02', '12:34:54', 'M', 'N', ' Castellano, Francés,Inglés'),
(00000041, '70374042', 'Dorotea', 'Iglesias', 'del Valle', '1972-07-19', '04:25:19', 'F', 'N', 'Inglés, Alemán'),
(00000025, '71100184', 'Gonzalo', 'Rodríguez', 'de Aviles', '1981-07-11', '07:06:11', 'M', 'N', ' Castellano, Francés,Inglés, Chino'),
(00000026, '72137123', 'Fernando', 'Alvarez', 'de Loriana', '1983-05-29', '06:29:21', 'M', 'S', ' Francés,Inglés, Búlgaro, Chino'),
(00000043, '72745375', 'Filiberto', 'Fernández', 'del Rio', '1977-04-25', '06:20:58', 'M', 'S', ' Castellano,Inglés, Alemán, Búlgaro'),
(00000084, '73903774', 'Lupicinia', 'Iglesias', 'de Aviles', '1972-12-10', '06:19:09', 'F', 'S', ' Castellano, Francés,Inglés, Alemán, Chino'),
(00000097, '74916481', 'Dorotea', 'Alonso', 'de las Asturias', '1978-10-06', '12:44:26', 'F', 'N', ' Castellano, Francés, Alemán, Chino'),
(00000091, '75462777', 'Fernando', 'Rodríguez', 'de las Asturias', '1980-01-15', '06:47:39', 'M', 'S', ' Francés,Inglés'),
(00000039, '7548421', 'Dorotea', 'Domínguez', 'del Campo', '1973-04-21', '04:00:06', 'F', 'S', ' Castellano, Francés, Alemán'),
(00000004, '75701689', 'Tiburcio', 'Alvarez', 'del Campo', '1972-06-21', '07:57:22', 'M', 'S', 'Inglés, Chino'),
(00000068, '75731307', 'Dorotea', 'Alvarez', 'de Grado', '1974-06-11', '04:45:07', 'F', 'S', ' Castellano, Francés, Búlgaro'),
(00000093, '75872967', 'Filiberto', 'García', 'de Grado', '1980-11-23', '08:57:39', 'M', 'N', ' Castellano'),
(00000094, '76450134', 'Dorotea', 'García', 'de las Asturias', '1972-06-04', '12:24:39', 'F', 'N', ' Castellano'),
(00000105, '776', 't35t3', 'ertr', 'ergter', '1935-02-06', '08:05:00', 'M', 'N', ' Castellano,Inglés'),
(00000086, '78237774', 'Lupicinia', 'García', 'de Blimea', '1970-06-04', '01:28:33', 'F', 'S', ' Castellano, Francés,Inglés, Búlgaro'),
(00000035, '78461029', 'Servanda', 'Fernández', 'del Campo', '1980-12-20', '12:14:57', 'F', 'N', ''),
(00000062, '79357740', 'Filiberto', 'Iglesias', 'del Campo', '1980-04-06', '07:10:41', 'M', 'S', ' Castellano,Inglés, Chino'),
(00000065, '80167443', 'Filiberto', 'Alonso', 'de Nora', '1982-12-24', '08:15:27', 'M', 'S', ' Castellano, Francés, Búlgaro'),
(00000040, '81868543', 'Dorotea', 'Alvarez', 'de Nora', '1974-11-27', '11:22:36', 'F', 'S', 'Inglés, Alemán'),
(00000082, '82726993', 'Telesfora', 'Fernández', 'del Valle', '1971-10-11', '01:41:41', 'F', 'S', ' Castellano,Inglés, Alemán'),
(00000044, '83158686', 'Lupicinia', 'Iglesias', 'del Campo', '1977-02-02', '04:05:46', 'F', 'S', ' Castellano, Francés, Alemán'),
(00000075, '84049876', 'Generosa', 'García', 'de Loriana', '1981-04-29', '08:37:14', 'F', 'N', 'Inglés, Búlgaro, Chino'),
(00000021, '86477604', 'Servanda', 'Rodríguez', 'de las Asturias', '1980-07-10', '03:34:09', 'F', 'N', ' Castellano,Inglés, Búlgaro'),
(00000034, '86949773', 'Telesfora', 'Barcena', 'del Campo', '1973-12-29', '12:06:30', 'F', 'N', ' Búlgaro'),
(00000088, '87204930', 'Telesfora', 'Alonso', 'del Campo', '1979-03-23', '02:15:06', 'F', 'S', ' Castellano, Chino'),
(00000055, '87672943', 'Tiburcio', 'Fernández', 'del Valle', '1977-09-17', '02:43:46', 'M', 'S', 'Inglés, Búlgaro, Chino'),
(00000051, '87688946', 'Ambrosio', 'García', 'de Blimea', '1973-12-05', '04:54:41', 'M', 'S', ' Francés, Búlgaro, Chino'),
(00000023, '89250187', 'Tiburcio', 'Barcena', 'del Monte', '1977-08-04', '03:38:49', 'M', 'S', ' Búlgaro, Chino'),
(00000053, '9006793', 'Dorotea', 'Rodríguez', 'de Loriana', '1976-05-12', '05:03:25', 'F', 'S', ' Francés, Alemán, Búlgaro'),
(00000016, '90831224', 'Generosa', 'Alvarez', 'de Loriana', '1980-06-09', '10:41:40', 'F', 'N', ' Castellano, Francés,Inglés, Chino'),
(00000009, '91986098', 'Fernando', 'Alvarez', 'de Aviles', '1972-06-15', '05:37:24', 'M', 'S', ' Búlgaro'),
(00000085, '92232122', 'Lupicinia', 'Rodríguez', 'de Loriana', '1982-06-18', '07:44:19', 'F', 'S', ' Castellano, Chino'),
(00000070, '93371787', 'Telesfora', 'Barcena', 'del Valle', '1980-11-22', '05:35:51', 'F', 'S', ' Francés, Alemán, Búlgaro'),
(00000058, '93740134', 'Dorotea', 'Domínguez', 'del Valle', '1983-01-05', '06:46:13', 'F', 'N', ' Castellano, Alemán'),
(00000098, '93927135', 'Filiberto', 'Alvarez', 'del Campo', '1983-09-24', '04:03:22', 'M', 'S', ' Castellano,Inglés, Búlgaro'),
(00000033, '94839640', 'Gonzalo', 'Cano', 'de Aviles', '1980-06-10', '05:44:08', 'M', 'N', ' Francés,Inglés, Alemán, Chino'),
(00000064, '95537617', 'Servanda', 'Alonso', 'del Valle', '1974-04-26', '06:45:51', 'F', 'S', ' Castellano, Francés, Alemán, Búlgaro, Chino'),
(00000007, '97013631', 'Filiberto', 'Alonso', 'del Rio', '1977-02-04', '06:25:56', 'M', 'S', ' Francés,Inglés, Alemán, Búlgaro, Chino'),
(00000079, '97401441', 'Ambrosio', 'Barcena', 'de Nora', '1975-01-18', '12:39:01', 'M', 'S', ' Castellano, Francés,Inglés, Alemán, Búlgaro'),
(00000002, '9876545', 'Gonzalo', 'Fernández', 'del Campo', '1957-11-21', '02:00:26', 'M', 'S', ' Castellano, Francés,Inglés'),
(00000024, '98884849', 'Tiburcio', 'López', 'del Rio', '1973-05-01', '04:34:43', 'M', 'S', ' Castellano, Alemán, Búlgaro, Chino'),
(00000066, '99075036', 'Dorotea', 'Barcena', 'de Nora', '1982-04-27', '04:05:07', 'F', 'N', ' Alemán'),
(00000029, '99398152', 'Gonzalo', 'Rodríguez', 'del Campo', '1982-07-04', '01:53:37', 'M', 'N', ' Castellano,Inglés, Alemán, Búlgaro, Chino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demodat1`
--

CREATE TABLE IF NOT EXISTS `demodat1` (
  `DNI` char(8) NOT NULL,
  `Puntos` decimal(6,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demodat1`
--

INSERT INTO `demodat1` (`DNI`, `Puntos`) VALUES
('11638620', 9.000),
('11888458', 8.000),
('1234', 6.000),
('13472139', 7.000),
('13864457', 9.000),
('15733136', 4.000),
('17073518', 7.000),
('23204554', 3.000),
('25166742', 1.000),
('28505520', 0.000),
('30011692', 2.000),
('31470615', 10.000),
('31838811', 7.000),
('3199561', 3.000),
('35682897', 10.000),
('37123306', 8.000),
('37525565', 1.000),
('37719872', 1.000),
('38026510', 0.000),
('38155202', 7.000),
('39544896', 2.000),
('4101510', 9.000),
('4124345', 9.000),
('42912044', 5.000),
('42955909', 7.000),
('44024369', 7.000),
('45225782', 3.000),
('4545', 1.000),
('46356823', 9.000),
('46745161', 1.000),
('47775065', 2.000),
('48534032', 10.000),
('49123254', 7.000),
('50357170', 5.000),
('50681864', 0.000),
('52290397', 7.000),
('52480816', 10.000),
('5309946', 4.000),
('533576', 1.000),
('54303189', 0.000),
('54572599', 7.000),
('54948456', 10.000),
('54989630', 1.000),
('56684347', 8.000),
('57720137', 0.000),
('57836952', 1.000),
('5842927', 0.000),
('61614213', 6.000),
('62386515', 1.000),
('64536949', 2.000),
('65874029', 7.000),
('65889410', 4.000),
('66781845', 10.000),
('67403001', 0.000),
('67574850', 2.000),
('68069224', 7.000),
('68647006', 4.000),
('70374042', 10.000),
('71100184', 0.000),
('72137123', 6.000),
('72745375', 0.000),
('73903774', 10.000),
('74916481', 7.000),
('75462777', 4.000),
('7548421', 8.000),
('75701689', 4.000),
('75731307', 8.000),
('75872967', 10.000),
('76450134', 9.000),
('776', 7.000),
('78237774', 0.000),
('78461029', 0.000),
('79357740', 7.000),
('80167443', 1.000),
('81868543', 5.000),
('82726993', 3.000),
('83158686', 6.000),
('84049876', 4.000),
('86477604', 1.000),
('86949773', 7.000),
('87204930', 8.000),
('87672943', 2.000),
('87688946', 10.000),
('89250187', 6.000),
('9006793', 4.000),
('90831224', 7.000),
('91986098', 2.000),
('92232122', 5.000),
('93371787', 8.000),
('93740134', 7.000),
('93927135', 9.000),
('94839640', 0.000),
('95537617', 9.000),
('97013631', 8.000),
('97401441', 8.000),
('9876545', 4.000),
('98884849', 0.000),
('99075036', 7.000),
('99398152', 8.000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demodat2`
--

CREATE TABLE IF NOT EXISTS `demodat2` (
  `DNI` char(8) NOT NULL,
  `Puntos` decimal(6,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demodat2`
--

INSERT INTO `demodat2` (`DNI`, `Puntos`) VALUES
('11638620', 6.000),
('11888458', 2.000),
('1234', 5.000),
('13472139', 1.000),
('13864457', 9.000),
('15733136', 7.000),
('17073518', 1.000),
('23204554', 9.000),
('25166742', 7.000),
('28505520', 2.000),
('30011692', 2.000),
('31470615', 7.000),
('31838811', 7.000),
('3199561', 8.000),
('35682897', 3.000),
('37123306', 7.000),
('37525565', 8.000),
('37719872', 10.000),
('38026510', 6.000),
('38155202', 9.000),
('39544896', 3.000),
('4101510', 6.000),
('4124345', 10.000),
('42912044', 6.000),
('42955909', 10.000),
('44024369', 0.000),
('45225782', 7.000),
('4545', 1.000),
('46356823', 8.000),
('46745161', 6.000),
('47775065', 5.000),
('48534032', 0.000),
('49123254', 1.000),
('50357170', 7.000),
('50681864', 0.000),
('52290397', 6.000),
('52480816', 8.000),
('5309946', 5.000),
('533576', 3.000),
('54303189', 10.000),
('54572599', 10.000),
('54948456', 8.000),
('54989630', 9.000),
('56684347', 4.000),
('57720137', 5.000),
('57836952', 1.000),
('5842927', 10.000),
('61614213', 10.000),
('62386515', 1.000),
('64536949', 4.000),
('65874029', 5.000),
('65889410', 10.000),
('66781845', 3.000),
('67403001', 3.000),
('67574850', 8.000),
('68069224', 2.000),
('68647006', 2.000),
('70374042', 8.000),
('71100184', 7.000),
('72137123', 8.000),
('72745375', 7.000),
('73903774', 9.000),
('74916481', 5.000),
('75462777', 4.000),
('7548421', 7.000),
('75701689', 10.000),
('75731307', 1.000),
('75872967', 0.000),
('76450134', 5.000),
('776', 6.000),
('78237774', 7.000),
('78461029', 4.000),
('79357740', 7.000),
('80167443', 8.000),
('81868543', 10.000),
('82726993', 10.000),
('83158686', 6.000),
('84049876', 5.000),
('86477604', 4.000),
('86949773', 8.000),
('87204930', 6.000),
('87672943', 1.000),
('87688946', 8.000),
('89250187', 8.000),
('9006793', 6.000),
('90831224', 2.000),
('91986098', 8.000),
('92232122', 5.000),
('93371787', 0.000),
('93740134', 2.000),
('93927135', 1.000),
('94839640', 8.000),
('95537617', 2.000),
('97013631', 10.000),
('97401441', 10.000),
('9876545', 10.000),
('98884849', 5.000),
('99075036', 10.000),
('99398152', 8.000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demodat3`
--

CREATE TABLE IF NOT EXISTS `demodat3` (
  `DNI` char(8) NOT NULL,
  `Puntos` decimal(6,3) NOT NULL DEFAULT '0.000',
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demodat3`
--

INSERT INTO `demodat3` (`DNI`, `Puntos`) VALUES
('11638620', 0.000),
('11888458', 3.000),
('1234', 9.000),
('13472139', 1.000),
('13864457', 9.000),
('15733136', 4.000),
('17073518', 4.000),
('23204554', 2.000),
('25166742', 10.000),
('28505520', 4.000),
('30011692', 3.000),
('31470615', 1.000),
('31838811', 4.000),
('3199561', 9.000),
('35682897', 0.000),
('37123306', 7.000),
('37525565', 1.000),
('37719872', 10.000),
('38026510', 7.000),
('38155202', 0.000),
('39544896', 9.000),
('4101510', 6.000),
('4124345', 8.000),
('42912044', 6.000),
('42955909', 5.000),
('44024369', 2.000),
('45225782', 3.000),
('4545', 0.000),
('46356823', 3.000),
('46745161', 7.000),
('47775065', 2.000),
('48534032', 4.000),
('49123254', 7.000),
('50357170', 8.000),
('50681864', 0.000),
('52290397', 9.000),
('52480816', 8.000),
('5309946', 1.000),
('533576', 8.000),
('54303189', 1.000),
('54572599', 3.000),
('54948456', 0.000),
('54989630', 3.000),
('56684347', 6.000),
('57720137', 0.000),
('57836952', 3.000),
('5842927', 9.000),
('61614213', 5.000),
('62386515', 7.000),
('64536949', 9.000),
('65874029', 8.000),
('65889410', 10.000),
('66781845', 8.000),
('67403001', 2.000),
('67574850', 4.000),
('68069224', 2.000),
('68647006', 2.000),
('70374042', 5.000),
('71100184', 7.000),
('72137123', 6.000),
('72745375', 2.000),
('73903774', 3.000),
('74916481', 1.000),
('75462777', 10.000),
('7548421', 0.000),
('75701689', 0.000),
('75731307', 8.000),
('75872967', 2.000),
('76450134', 7.000),
('776', 3.000),
('78237774', 5.000),
('78461029', 1.000),
('79357740', 4.000),
('80167443', 10.000),
('81868543', 3.000),
('82726993', 8.000),
('83158686', 5.000),
('84049876', 5.000),
('86477604', 8.000),
('86949773', 9.000),
('87204930', 8.000),
('87672943', 0.000),
('87688946', 2.000),
('89250187', 1.000),
('9006793', 7.000),
('90831224', 0.000),
('91986098', 4.000),
('92232122', 0.000),
('93371787', 4.000),
('93740134', 6.000),
('93927135', 5.000),
('94839640', 4.000),
('95537617', 3.000),
('97013631', 1.000),
('97401441', 8.000),
('9876545', 9.000),
('98884849', 2.000),
('99075036', 2.000),
('99398152', 2.000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `ID` int(2) NOT NULL,
  `TITULO` varchar(15) NOT NULL,
  `TEXTO` varchar(15) NOT NULL,
  `CATEGORIA` varchar(20) NOT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID`, `TITULO`, `TEXTO`, `CATEGORIA`, `FECHA`) VALUES
(1, 'Titulo 1', 'Texto 1', 'ofertas', '2012-02-05'),
(2, 'Titulo 2', 'Texto 2', 'promociones', '2012-02-05'),
(3, 'Titulo 3', 'Texto 3', 'promociones', '2012-02-04'),
(4, 'Titulo 4', 'Texto 4', 'costas', '2012-02-01'),
(5, 'Titulo 5', 'Texto 5', 'promociones', '2012-01-31');
-- Índices para tablas volcadas
--

--

--
-- AUTO_INCREMENT de la tabla `demo4`
--
ALTER TABLE `demo4`
  MODIFY `Contador` tinyint(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `demodat1`
--
ALTER TABLE `demodat1`
  ADD CONSTRAINT `demodat1_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `demo4` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `demodat2`
--
ALTER TABLE `demodat2`
  ADD CONSTRAINT `demodat2_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `demo4` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `demodat3`
--
ALTER TABLE `demodat3`
  ADD CONSTRAINT `demodat3_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `demo4` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
