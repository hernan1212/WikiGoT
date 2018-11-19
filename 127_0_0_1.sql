-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2018 a las 17:44:04
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `got_db`
--
CREATE DATABASE IF NOT EXISTS `got_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `got_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `characters_seasons`
--

CREATE TABLE `characters_seasons` (
  `personaje_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `characters_seasons`
--

INSERT INTO `characters_seasons` (`personaje_id`, `season_id`) VALUES
(1, 5),
(1, 6),
(1, 7),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(6, 1),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(7, 1),
(7, 2),
(7, 3),
(7, 4),
(7, 5),
(7, 6),
(7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `house`
--

CREATE TABLE `house` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `motto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `animal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `emblem` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `house`
--

INSERT INTO `house` (`id`, `name`, `motto`, `animal`, `description`, `emblem`) VALUES
(1, 'Casa Greyjoy', 'Nosotros no sembramos', 'Un kraken de oro sobre campo de sable', 'La Casa Greyjoy de Pyke es una de las grandes casas de Poniente. Es la principal casa de las Islas del Hierro, un conjunto de islas desoladas en la costa oeste de Poniente. Su asentamiento es Pyke, un castillo situado en la isla del mismo nombre.', 'images/escudos/Casa_Greyjoy_escudo.jpg'),
(2, 'Casa Baratheon', 'Nuestra es la Furia', 'Un venado coronado de sable sobre campo de oro', 'La Casa Baratheon de Bastión de Tormentas es una casa noble de las Tierras de la Tormenta. Su asentamiento es Bastión de Tormentas, que fue residencia de la Casa Durrandon, los antiguos Reyes de la Tormenta.', 'images/escudos/Casa_Baratheon_estandarte.jpg'),
(3, 'Casa Martell', 'Nunca Doblegado, Nunca Roto', 'Un sol de gules atravesado por una lanza de oro en fondo naranja', 'La Casa Nymeros Martell de Lanza del Sol es la casa gobernante de Dorne. La palabra Nymeros significa de la línea de Nymeria, aunque generalmente es llamada sólo Casa Martell. Su asentamiento es el Palacio Antiguo de Lanza del Sol.', 'images/escudos/Casa_Martell.jpg'),
(4, 'Casa Tyrell', 'Crecer Fuerte', 'Una rosa en oro sobre campo de sinople', 'La Casa Tyrell de Altojardín es la casa gobernante del Dominio. Su asentamiento es Altojardín', 'images/escudos/Casa_Tyrell.jpg'),
(5, 'Casa Lannister', '¡Oye mi Rugido!', 'Un león rampante de oro sobre campo de gules', 'La Casa Lannister de Roca Casterly es la principal casa noble de las Tierras del Oeste. Su asentamiento es Roca Casterly.Su lema es ¡Oye mi Rugido!, aunque su lema no oficial, Un Lannister siempre paga sus deudas, es más conocido.', 'images/escudos/Casa_Lannister_escudo.jpg'),
(6, 'Casa Targaryen', 'Fuego y Sangre', 'Un dragón tricéfalo de gules en campo de sable', 'La Casa Targaryen es una casa noble de ascendencia Valyria que escapó de la Maldición. Sus asentamientos eran la capital del reino Desembarco del Rey, la isla de Rocadragón y el castillo de Refugio Estival. Su emblema es un dragón de tres cabezas de gules en campo sable, representando a Aegon I y sus hermanas Rhaenys y Visenya. Su lema es Fuego y Sangre.\r\n\r\nSus miembros vivieron durante siglos en la isla de Rocadragón hasta que Aegon Targaryen y sus hermanas montaron sus dragones y conquistaron seis de los Siete Reinos. Gobernaron Poniente durante casi 300 años hasta la Rebelión de Robert.\r\n\r\nSus espadas ancestrales de acero valyrio, ambas en actual paradero desconocido, son Fuegoscuro y Hermana Oscura.', 'images/escudos/Casa_Targaryen_estandarte.jpg'),
(7, 'Casa Stark', 'Se acerca el Invierno', 'Un lobo huargo de cenizo corriendo sobre campo de plata', 'La Casa Stark de Invernalia es una casa noble del Norte. Su asentamiento es Invernalia. Durante siglos, fue la casa principal del Norte y su linaje se extiende hasta los Primeros Hombres, gobernando el Norte como reyes por derecho propio.', 'images/escudos/Casa_Stark_escudo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id` int(11) NOT NULL,
  `house_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id`, `house_id`, `name`, `description`, `gender`, `foto`) VALUES
(1, 1, 'Euron Greyjoy', 'El rey Euron Greyjoy, apodado Ojo de Cuervo, es Rey de las Islas del Hierro y del Norte desde 300 AC, elegido en una asamblea de sucesión tras la muerte de su hermano Balon. Es el capitán del Silencio, un barco tripulado enteramente por mudos cuyas lenguas fueron arrancadas por Euron. Su emblema personal es un ojo rojo bajo una corona de hierro negro sostenida por dos cuervos.', 'masculino', 'images/personajes/Euron_Greyjoy.jpg'),
(2, 2, 'Stannis Baratheon', 'Stannis es descrito como un hombre alto, como sus hermanos, aunque no es descrito como particularmente atractivo, calvo, de ojos azules, y con la sombra de una barba. Es un hombre tenaz y carente de sentido del humor que no despierta ningún sentimiento de simpatía o lealtad entre sus vasallos. Es conocido por su duro e inalterable sentido de la justicia y por su obsesión con los desaires, reales o imaginarios, de los que ha sido víctima. Uno de sus rasgos característicos es la manía de rechinar los dientes constantemente. Es un considerado un comandante, marinero y guerrero experimentado, aunque su personalidad dificulta su ascensión a ser un líder verdaderamente grande. Aunque es respetado y temido, nunca ha sido amado o ha tenido el cariño de la nobleza o el pueblo llano.', 'masculino', 'images/personajes/Stannis_Baratheon.jpg'),
(3, 4, 'Mace Tyrell', 'Lord Mace Tyrell es cabeza de la Casa Tyrell y, como tal, Señor de Altojardín, Defensor de las Marcas, Alto Mariscal del Dominio y Guardián del Sur. Está casado con Lady Alerie Hightower con quien tiene cuatro hijos, Willas, Garlan, Loras y Margaery. Es Mano del Rey Tommen I Baratheon.', 'masculino', 'images/personajes/Mace_Tyrell.jpg'),
(4, 3, 'Doran Martell', 'Doran es descrito como un hombre prudente y reflexivo. Tiene problemas para caminar debido a la gota, por lo que sus extremidades se ven deformadas y sufre horribles dolores.', 'masculino', 'iamges/personajes/Doran_Martell.jpg'),
(5, 5, 'Cersei Lannister', 'La reina Cersei Lannister es la hija mayor de Lord Tywin Lannister y Lady Joanna Lannister. Tiene dos hermanos, su mellizo Jaime y su hermano menor Tyrion. Tras la Guerra del Usurpador se casó con el nuevo rey, Robert Baratheon, y se convirtió en Reina de los Siete Reinos. Es madre de tres hijos, Joffrey, Myrcella y Tommen, todos fruto de su secreta relación incestuosa con su hermano Jaime.', 'Femenino', 'images/personajes/Cersei_Lannister.jpg'),
(6, 6, 'Daenerys Targaryen', 'La reina Daenerys Targaryen, también llamada Daenerys de la Tormenta, La que no Arde, Rompedora de Cadenas, Madre de Dragones y, de manera más informal, Dany, es la hija menor del rey Aerys II Targaryen y su hermana esposa, la reina Rhaella. Luego de la Guerra del Usurpador, durante la que murieron sus padres y su hermano mayor Rhaegar, ella y su hermano Viserys vivieron en el exilio en varias Ciudades Libres. Luego de arrasar la Bahía de los Esclavos, se convirtió en Reina de Meereen.', 'Femenino', 'images/personajes/Daenerys_Targaryen.jpg'),
(7, 7, 'Bran Stark', 'Brandon Stark, mejor conocido como Bran, es el segundo hijo y heredero de Lord Eddard Stark y Lady Catelyn Tully. Tiene dos hermanas, Sansa y Arya; dos hermanos, Robb y Rickon, y un medio-hermano bastardo, Jon Nieve. Debido a una caída, queda paralítico y depende de Hodor, un mozo de cuadra retrasado, para desplazarse. Está siempre acompañado de su lobo huargo Verano, con quien mantiene una poderosa conexión warg.', 'Masculino', 'iamges/personajes/Bran_Stark.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `season`
--

CREATE TABLE `season` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `capitulos` int(11) NOT NULL,
  `resumen` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `season`
--

INSERT INTO `season` (`id`, `name`, `fecha`, `capitulos`, `resumen`) VALUES
(1, 'temporada 1', '2011-04-17', 10, 'La trama se desarrolla principalmente en Poniente donde las grandes casas nobles luchan por el Trono de Hierro.\r\nLa serie comienza cuando el rey Robert Baratheon ofrece a Ned Stark convertirse en la Mano del Rey. Su mujer, Catelyn Stark, recibe una carta donde le explican que la anterior Mano del Rey fue asesinada por sus rivales, la Casa Lannister. Ned Stark debe averiguar quién le mató y asegurar la protección de su familia.\r\nAdemás, hay una trama en otro continente llamado Essos con la familia Targaryen. Esta casa, actualmente exhiliada, ostentó el poder hasta que le usurparon el Trono de Hierro'),
(2, 'temporada 2', '2012-04-01', 10, 'Tras el final de la primera temporada con el asesinato de Ned Stark, el resto de su familiad eclara la guerra a los Lannister. Robb Stark ofrece un acuerdo de paz con la condición de que el Norte sea independiente. Joffrey Baratheon se proclama rey de los siete reinos pero sus tíos Renly Baratheon y Stannis Baratheon reclaman el Trono de Hierro porque afirman que Joffrey es hijo ilegítimo del difunto rey.\r\nTras la muerte de Khal Drogo y el nacimiento de sus dragones, Daenerys Targaryen se hace con el control del Khalasar.'),
(3, 'temporada 3', '2013-03-31', 10, 'Tras derrotar a Stannis Baratheon en la Batalla del Aguasnegras, los Lannister continúan reforzados en el Trono de Hierro. Tyrion sufre los desplantes de su padre al serle retirado el título de Mano del Rey y Jaime Lannister mantiene su prioridad de volver a casa.\r\nLos Stark comienzan a perder la guerra. Todo comienza a desmoronarse cuando Robb Stark rompe su promesa y se casa con Talisa Maegyr. Más allá del Muro, Jon Snow se une a los salvajes con intenciones ocultas y Daenerys Targaryen, que se encuentra en Astapor, continúa su lucha como heredera legítima del Trono de Hierro.'),
(4, 'temporada 4', '2014-04-06', 10, 'Desembarco del Rey se prepara para la boda del rey Joffrey Baratheon y Margaery Tyrell. Tras el envenenamiento del rey en su boda, Cersei Lannister culpa a su hermano Tyrion y este es encarcelado. Finalmente, Sansa Stark consigue escapar de Desembarco del Rey con la ayuda de Petyr Baelish y se refugia en el Valle de Arryn. Bran Stark continúa buscando el cuervo de tres ojos.\r\nEn el Muro, Jon Snow debe advertir a sus superiores de los peligros de los salvajes y el ataque que planea Mance Ryder. Daenerys Targaryen conquista la Bahía de los Esclavos y toma el control de Meereen.'),
(5, 'temporada 5', '2015-04-12', 10, 'En Meereen, Daenerys Targaryen debe lidiar con los Hijos de la Arpía, una organización que pondrá en entredicho la paz y el control de la ciudad. En el Muro, Jon Snow es elegido Lord Comandante de la Guardia de la Noche y se deberá aliar con los salvajes para detener a los Caminantes Blancos. En Invernalia, Sansa Stark (influenciada por Meñique) se casa con Ramsay Bolton. Tyrion Lannister y Varis, tras huir de Desembarco del Rey, ponen rumbo a Meereen para encontrarse con Daenerys Targaryen. Arya Stark viaja a Braavos para comenzar su entrenamiento con el Hombre sin Rostro.'),
(6, 'temporada 6', '2016-04-24', 10, 'En esta temporada se mantienen las continuas luchas entre los Stark y el resto de familias nobles de Westeros por alcanzar el Trono de Hierro.\r\nLos Stark derrotan a los Bolton en la épica Batalla de los Bastardos, recuperan Invernalia y finalmente, Jon Snow es coronado Rey en el Norte. Tyrion Lannister intenta gobernar Mereen, mientras que Daenerys Targaryen es prisionera de los Dothraki pero les quema vivos y se hace con el control de los Dothraki. En Desembarco del Rey, el Gorrión Supremo cada vez se hace con más poder entre su comunidad de fanáticos religiosos e incluso la reina Cersei no podrá evitar su castigo.'),
(7, 'temporada 7', '2017-08-16', 7, 'La séptima temporada se centra principalmente en la convergencia de las principales tramas de la serie. Se incluyen algunos de los eventos más importantes como Daenerys Targaryen llegando finalmente a Westeros con su ejército y tres dragones, la alianza de Jon Snow con Daenerys para acabar con los caminantes blancos, Arya y Bran volviendo a Invernalia para reencontrase con su hermana Sansa y la ruptura del muro por parte del ejército de muertos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `characters_seasons`
--
ALTER TABLE `characters_seasons`
  ADD PRIMARY KEY (`personaje_id`,`season_id`),
  ADD KEY `IDX_FC784947121EFAFB` (`personaje_id`),
  ADD KEY `IDX_FC7849474EC001D1` (`season_id`);

--
-- Indices de la tabla `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_53A410886BB74515` (`house_id`);

--
-- Indices de la tabla `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `house`
--
ALTER TABLE `house`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `season`
--
ALTER TABLE `season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `characters_seasons`
--
ALTER TABLE `characters_seasons`
  ADD CONSTRAINT `FK_FC784947121EFAFB` FOREIGN KEY (`personaje_id`) REFERENCES `personaje` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FC7849474EC001D1` FOREIGN KEY (`season_id`) REFERENCES `season` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD CONSTRAINT `FK_53A410886BB74515` FOREIGN KEY (`house_id`) REFERENCES `house` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
