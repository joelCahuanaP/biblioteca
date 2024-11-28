-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 17:08:10
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID` int(4) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Codigo` varchar(4) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID`, `Nombre`, `Apellido`, `DNI`, `Correo`, `Codigo`, `Contraseña`, `Telefono`) VALUES
(1, 'joel', ' Rojas', '12345', 'joel@unfv', '1234', '1234', '987654321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `ID_Alumno` int(4) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Facultad` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`ID_Alumno`, `Nombre`, `Apellido`, `Facultad`, `Correo`, `Telefono`, `ID`) VALUES
(3, 'Joseph', ' Rojas', 'Industrial y Sistemas', 'joseph@unfv', '987654321', 11),
(4, 'joel', '  cahuana', 'sistemas', 'joel@unfv', '987654321', 7),
(5, 'joel', ' 12', 'Industrial y Sistemas', 'joel@unfv', '1234567', 7),
(6, '', ' ', 'Facultad', '', '', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `ID_AREA` int(4) NOT NULL,
  `Materia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`ID_AREA`, `Materia`) VALUES
(1, 'matematica'),
(2, 'programacion'),
(3, 'fisica'),
(4, 'biologia'),
(5, 'administracion'),
(6, 'quimica'),
(7, 'sistemas'),
(8, 'industrial'),
(9, 'agroindustrial'),
(10, 'transporte'),
(11, 'economia'),
(12, 'contabilidad'),
(13, 'matematica3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `ID_AUTOR` int(4) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`ID_AUTOR`, `Nombre`) VALUES
(1, 'Zapata'),
(2, 'Espinoza'),
(3, 'ezpinozaRamos'),
(4, 'espinoza ramos'),
(5, 'mario triola'),
(6, 'Mendenhall - Beaver'),
(7, 'jose ricardo'),
(8, 'raul salvador'),
(9, 'luis gil'),
(10, 'javier ceballos'),
(11, 'gabriel baca'),
(12, 'bocangel weydert'),
(13, 'carlos a. da silva'),
(14, 'stanley'),
(15, 'ralph S.Polimeni'),
(16, 'carlos augusto'),
(17, 'luis felipe jimenez'),
(18, 'alma rebeca galindo'),
(19, 'roberto marengo'),
(20, 'pedro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `ID_Detalles` int(4) NOT NULL,
  `ID_LIBRO` int(4) NOT NULL,
  `ID` int(4) NOT NULL,
  `Fe_Retorno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ID_Docente` int(4) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Facultad` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ID_Docente`, `Nombre`, `Apellido`, `Facultad`, `Correo`, `Telefono`, `ID`) VALUES
(1, 'Carlos', ' reyna', 'Industrial y Sistemas', 'Carlos@unfv', '987654321', 9),
(2, 'Ernesto', ' Valverde', 'Industrial y Sistemas', 'ernesto@unfv', '987654321', 12),
(3, 'rafael', ' quispe', 'sistemas', 'rafael@', '987654321', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `ID_EDITORIAL` int(4) NOT NULL,
  `NombreEdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`ID_EDITORIAL`, `NombreEdi`) VALUES
(1, 'roma'),
(2, 'bruño'),
(3, 'palomino'),
(4, 'romas'),
(5, 'pearson'),
(6, 'cengage'),
(7, 'ricardo'),
(8, 'cuya'),
(9, 'upc'),
(10, 'rama'),
(11, 'ebook'),
(12, 'indu'),
(13, 'mc'),
(14, 'dgep'),
(15, 'ramon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `externo`
--

CREATE TABLE `externo` (
  `ID_Externo` int(4) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Universidad` varchar(100) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `externo`
--

INSERT INTO `externo` (`ID_Externo`, `Nombre`, `Apellido`, `DNI`, `Correo`, `Universidad`, `Telefono`, `ID`) VALUES
(1, 'juan', ' reyna', '12345', 'juan@unfv', 'lima', '987654321', 10),
(2, 'felipe', ' carpa', '12345', 'felipe@gmil', 'lima', '987654321', 13),
(3, 'Carlos', ' bustamante', '12345', 'carlos@unfv', '', '987654321', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `ID_LIBRO` int(4) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `ID_AUTOR` int(4) NOT NULL,
  `ID_AREA` int(4) NOT NULL,
  `ID_EDITORIAL` int(4) NOT NULL,
  `Ubicacion` varchar(20) NOT NULL,
  `Stock` int(4) NOT NULL,
  `Portada` varchar(100) NOT NULL,
  `ISBN` int(10) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`ID_LIBRO`, `Titulo`, `ID_AUTOR`, `ID_AREA`, `ID_EDITORIAL`, `Ubicacion`, `Stock`, `Portada`, `ISBN`, `Link`) VALUES
(1, 'analisis4', 2, 1, 2, 'estantea', 20, '../imagenes/alicia.jpg', 12345678, '\"../libros-pdf/mate/analisismatematico.pdf\"'),
(2, 'estadistica', 1, 1, 2, 'estanteb', 20, '\"../imagenes/alicia.jpg\"', 12345678, '\"../libros-pdf/mate/analisismatematico.pdf\"'),
(3, 'analisis 6', 3, 1, 3, 'estante6', 22, '\"../imagenes/alicia.jpg\"', 1234567, '\"../libros-pdf/mate/analisismatematico3.pdf\"'),
(4, 'analisis matematico', 4, 1, 4, 'estante A', 14, '\"../imagenes/analisis.jpg\"', 1234567, '\"../libros-pdf/mate/analisismatematico3.pdf\"'),
(5, 'estadistica', 5, 1, 5, 'estante A', 14, '\"../imagenes/estadistica.png\"', 1234567, '\"../libros-pdf/mate/analisismatematico3.pdf\"'),
(6, 'introduccion a la probabilidad y estadistica', 6, 1, 6, 'estante A', 24, '\"../imagenes/probabilidad.jpg\"', 1234568, '\"../libros-pdf/mate/probabilidad.pdf\"'),
(7, 'fisica basica', 7, 3, 7, 'estante C', 14, '\"../imagenes/libro-fisica.png\"', 1234569, '\"https://itscv.edu.ec/wp-content/uploads/2018/10/FISICA-BASICA-UNIVERSIDAD-RICARDO-PALMA.pdf\"'),
(8, 'estatica aplicada', 8, 3, 8, 'estante C', 4, '\"../imagenes/libro-fisica2.png\"', 1234569, '\"https://bdigital.uncuyo.edu.ar/objetos_digitales/11832/llano.pdf\"'),
(9, 'el c++', 9, 7, 9, 'estante D', 10, '\"../imagenes/libro-sistemas.png\"', 1234566, '\"https://upcommons.upc.edu/bitstream/handle/2099.3/36408/9788483013380.pdf\"'),
(10, 'java 2', 10, 7, 10, 'estante D', 4, '\"../imagenes/libro-sistemas2.png\"', 1234569, '\"../libros-pdf/sistemas/java_2.pdf\"'),
(11, 'introduccion a la ingenieria industrial', 11, 8, 11, 'estante E', 10, '\"../imagenes/libro-industrial.png\"', 1234398, '=\"https://www.editorialpatria.com.mx/mobile/pdffiles/9786074383164.pdf\"'),
(12, 'industrial - ingenieria de metodos', 12, 8, 12, 'estante E', 10, '\"../imagenes/libro-industrial2.png\"', 0, '\"https://www.unheval.edu.pe/portal/wp-content/uploads/2021/09/LIBRO-INGENIERIA-DE-METODOS-I.pdf\"'),
(13, 'agroindustrial para el desarrollo', 13, 9, 4, 'estante C', 6, '\"../imagenes/libro-agroindustrial.png\"', 1234316, '\"https://www.fao.org/3/i3125s/i3125s.pdf\"'),
(14, 'fundamentos administracion financiera', 14, 5, 13, 'estante E', 4, '\"../imagenes/libro-administracion.png\"', 1234317, '\"../pdf/estadistica.pdf\"'),
(15, 'contabilidad de costos', 15, 12, 4, 'estante F', 12, '\"../imagenes/libro-contabilidad1.png\"', 1234314, '\"../libros-pdf/contabilidad/Costosempresariales.pdf\"'),
(16, 'costos empresariales', 16, 12, 3, 'estante F', 7, '\"../imagenes/libro-contabilidad2.png\"', 1234142, '\"../libros-pdf/contabilidad/Costosempresariales.pdf\"'),
(17, 'biologia celular y molecular', 17, 4, 5, 'estante C', 3, '\"../imagenes/libro-biologia.png\"', 1124566, 'https://oncouasd.files.wordpress.com/2015/06/biologia-celular-y-molecular.pdf'),
(18, 'biologia basica', 18, 4, 14, 'estante C', 8, '\"../imagenes/libro-biologia2.png\"', 1234519, '\"https://www.guao.org/sites/default/files/biblioteca/Biologia%20Basica.pdf\"'),
(19, 'biologia', 19, 4, 15, 'estante C', 4, '\"../imagenes/libro-biologia3.png\"', 1234314, '\"https://www.oas.org/udse/cd_educacion/cd/materiales_bsas/bsas_biologia.pdf\"'),
(20, 'analisis 6', 3, 1, 4, 'estante A', 4, '\"../imagenes/libro-biologia.png\"', 1234567, '\"../libros-pdf/mate/probabilidad.pdf\"'),
(21, 'analisis 6', 3, 13, 3, 'estante A', 4, '\"../imagenes/analisis.jpg\"', 1234568, '\"../libros-pdf/mate/analisismatematico3.pdf\"'),
(22, 'Fundamentos2', 20, 3, 15, 'estante A', 4, '\"../imagenes/libro-biologia.png\"', 1234398, '\"../libros-pdf/mate/analisismatematico3.pdf\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `ID_Reserva` int(4) NOT NULL,
  `ID` int(4) NOT NULL,
  `ID_LIBRO` int(4) NOT NULL,
  `Fe_Reserva` varchar(20) NOT NULL,
  `Fe_Devo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`ID_Reserva`, `ID`, `ID_LIBRO`, `Fe_Reserva`, `Fe_Devo`) VALUES
(1, 14, 2, '2022-03-30', '2022-03-30'),
(2, 14, 10, '2022-03-30', '2022-03-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `ID-TESIS` int(4) NOT NULL,
  `Titulo` varchar(400) NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `Año` varchar(4) NOT NULL,
  `Escuela` varchar(50) NOT NULL,
  `Link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`ID-TESIS`, `Titulo`, `Autor`, `Año`, `Escuela`, `Link`) VALUES
(1, 'UN MODELO SISTÉMICO DE SIMULACIÓN PARA EVALUAR EL PROCESO\r\nDE MOLIENDA – CLASIFICACIÓN DIRECTA Y SU IMPACTO EN LA\r\nCOMPETITIVIDAD OPERATIVA DE PLANTAS CONCENTRADORAS\r\nMETALÚRGICAS', 'CARHUAZ RIVERA, ZILA MISRAIM', '2019', 'INGENIERIA DE SISTEMAS', '\"http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/3739/CARHUAZ%20RIVERA%20ZILA%20MISRAIM%20-%20MAESTRIA.pdf?sequence=1&isAllowed=y\"'),
(2, 'LA CERTIFICACIÓN DE COMERCIO JUSTO COMO PROPUESTA\r\nDE VALOR EN LAS EMPRESAS PERUANAS: EVALUACIÓN DEL\r\nCUMPLIMIENTO DE SUS REQUISITOS', 'Carranza Arroyo, Johnnatan Albert', '2019', 'INGENIERIA AGROINDUSTRIAL', '\"http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/4727/CARRANZA%20ARROYO%20JOHNNATAN%20ALBERT%20-%20%20TITULO%20PROFESIONAL.pdf?sequence=1&isAllowed=y\"'),
(3, 'PROPUESTA DE MEJORA EN BASE A LA GESTIÓN DE\r\nMANTENIMIENTO Y ORIENTADOS A LA DISPONIBILIDAD DE\r\nSERVICIOS DE LA FLOTA DE VEHÍCULOS PESADOS DE LA EMPRESA\r\nDE TRANSPORTE PEREDA', 'GUZMAN ACEVEDO, CELY JACKELINE', '2020', 'INGENIERIA DE TRANSPORTE', '\"http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/4639/GUZMAN%20ACEVEDO%20CELY%20JACKELINE%20-%20TITULO%20PROFESIOANAL.pdf?sequence=1&isAllowed=y\"'),
(4, 'IMPLEMENTACIÓN DE UN SOFTWARE EN EL MODELO DE\r\nGESTIÓN EN UN CENTRO DE EDUCACIÓN TÉCNICO\r\nPRODUCTIVA (CETPRO)', 'ASENCIOS CARRANZA HÉCTOR CELSO', '2018', 'INGENIERIA DE SISTEMAS', '\"http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/2325/Asencios%20Carranza%20Hector%20Celso.pdf?sequence=1&isAllowed=y\"'),
(5, 'IMPLEMENTACIÓN DEL PLAN HACCP PARA PODER EXPORTAR\r\nINGREDIENTES ELABORADOS POR LA EMPRESA ALITECNO AL\r\nMERCADO BOLIVIANO', 'DIAZ ALIAGA MARIANELA ELVA', '2019', 'INGENIERIA AGROINDUSTRIAL', '\"http://repositorio.unfv.edu.pe/bitstream/handle/UNFV/4696/DIAZ%20ALIAGA%20MARIAELA%20ELVA%20-%20TITULO%20PROFESIONAL.pdf?sequence=2&isAllowed=y\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(4) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `Usuario`, `Contraseña`) VALUES
(7, 'joelCP', '12345'),
(9, 'Carlos', '1234'),
(10, 'juan', '1234'),
(11, 'joseph', '1234'),
(12, 'ernesto', '1234'),
(13, 'felipe', '1234'),
(14, 'joelCP', '1234'),
(15, 'rafael', '1234'),
(16, 'Carlos', '1234'),
(17, 'joelCP', '12'),
(18, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`ID_Alumno`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID_AREA`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`ID_AUTOR`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`ID_Detalles`),
  ADD KEY `ID_LIBRO` (`ID_LIBRO`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`ID_Docente`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`ID_EDITORIAL`);

--
-- Indices de la tabla `externo`
--
ALTER TABLE `externo`
  ADD PRIMARY KEY (`ID_Externo`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`ID_LIBRO`),
  ADD KEY `ID_AUTOR` (`ID_AUTOR`),
  ADD KEY `ID_AREA` (`ID_AREA`),
  ADD KEY `ID_EDITORIAL` (`ID_EDITORIAL`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`ID_Reserva`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_LIBRO` (`ID_LIBRO`);

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`ID-TESIS`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `ID_Alumno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `ID_AREA` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `ID_AUTOR` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `ID_Detalles` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `ID_Docente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `editorial`
--
ALTER TABLE `editorial`
  MODIFY `ID_EDITORIAL` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `externo`
--
ALTER TABLE `externo`
  MODIFY `ID_Externo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `ID_LIBRO` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `ID_Reserva` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `ID-TESIS` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_ibfk_1` FOREIGN KEY (`ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalles_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `administrador` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `externo`
--
ALTER TABLE `externo`
  ADD CONSTRAINT `externo_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`ID_AUTOR`) REFERENCES `autor` (`ID_AUTOR`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_ibfk_2` FOREIGN KEY (`ID_AREA`) REFERENCES `area` (`ID_AREA`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `libro_ibfk_3` FOREIGN KEY (`ID_EDITORIAL`) REFERENCES `editorial` (`ID_EDITORIAL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`ID_LIBRO`) REFERENCES `libro` (`ID_LIBRO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `usuario` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
