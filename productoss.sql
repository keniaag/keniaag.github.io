-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:43:39
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_ropa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoss`
--

CREATE TABLE `productoss` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `color` varchar(50) NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `medida` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productoss`
--

INSERT INTO `productoss` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(0, '\r\nAmpliar imagen\r\nCámara Instantánea Fujifilm Instax Mini 11 Rosa', 0, 'Impresión instantánea\r\n\r\nRevelado en solo 90 segundos\r\n\r\nExposición automática\r\n\r\nFlash automático\r\n\r\nGracias a su diseño compacto y ligero es una cámara instantánea ideal para llevar a todos lados\r\n\r', 'Rosa', 5900, 'Fujifilm', 'Alto (cm)  13.8  Ancho (cm)  1'),
(0, 'Audífonos inalámbricos con estuche de carga Gadgets and Fun Diseño de gato con bluetooth', 0, ' Audífonos twins inalámbricos\r\n\r\n Diseño práctico y divertido\r\n\r\n Compatibles con cualquier dispositivo bluetooth\r\n\r\n Cuentan con estuche de carga\r\n\r\nLevalos contigo a todas partes', 'Rosa', 346, 'Gadgets and Fun', ''),
(0, 'Bálsamo labial Labello fresa 4.8 g', 117, 'Fácil de usar\r\n\r\nUso diario\r\n\r\nUso personal', 'Rojo', 436578, 'Labello', 'chico'),
(0, 'Closet Portátil STAY ELIT CLOS-01', 0, 'Closet\r\n\r\nPortátil\r\n\r\nArmable\r\n\r\nOrganiza ropa, zapatos y accesorios a tu gusto; Almacena sin ocupar mucho espacio en tu habitación; Protege tus zapatos y ropa gracias a su cubierta exterior con un he', 'Gris', 480, 'STAY ELIT', 'Largo del Producto Armado  105'),
(0, 'Escritorio Mainstays Café con Repisas', 1, 'Imagen ilustrativa. No incluye accesorios\r\n\r\nEstilo contemporáneo\r\n\r\n Fabricado en MDF\r\n\r\n Patas de metal\r\n\r\nEsta mesa para portátil combinará a la perfección con la decoración de tu casa, tendrás la ', 'Café', 50, 'Mainstays', 'Alto (cm)  8.5 -  Ancho (cm)  '),
(0, 'Lampara de techo estilo industrial hierro forjado minimalista ilios innova gold 8 luces', 0, 'LMATERIAL: Cuerpo de lámpara pintado de hierro forjado de alta calidad, mano de obra exquisita, a todo color, anticorrosión y antioxidante. CONTENIDO: Lámpara modelo de 8 luces MEDIDAS (largo x ancho ', 'Dorado', 400, 'ilios innova', 'Largo del Producto Armado  90 '),
(0, 'Lentes de sol RB3016 W0366 Clubmaster Ray-Ban Carey', 0, 'Tipo: Lentes de sol\r\n\r\nPolarizado: No\r\n\r\nFiltro: UV 400\r\n\r\nMaterial: Aleacion\r\n\r\nTamaño del lente:Mediano\r\n\r\nGénero: Unisex', 'Dorado', 34, 'Ray-Ban', 'Largo del Producto Armado  30 '),
(0, 'Mundo In Silla de Oficina - Silla de Escritorio JM-2006A Mesh - Negro Mundo In Home Office', 1, '¡Completa tu espacio con un elemento cómodo, elegante y funcional! Esta silla oficina ergonómica secretarial es perfecta para la oficina o para hacer home office.\r\n\r\n<span data-sheets-value=\"{&quot;1&', 'Negro', 3000, 'Mundo In', 'Largo del Producto Armado  50 '),
(0, 'Termo Acero Inoxidable Gummy Mouse 310 ml Verde', 230.5, 'Capacidad de 310 ml\r\n\r\nCon tapa hermética\r\n\r\nForro interior de aluminio para conservar mejor la temperatura de la bebida\r\n\r\nTermo elaborado de que mantiene las bebidas calientes o frías hasta por 6 ho', 'Verde', 5, 'Gummy', 'Largo del Producto Armado  7 c'),
(0, 'Ventilador MyTek ENC3190173 Pedestal MY3197 16 Pulgadas 3 Velocidades', 747, 'Aspa de plástico 16\".\r\n\r\nAjuste de inclinación.\r\n\r\nBase de plástico en cruz.\r\n\r\nEs ideal para cualquier habitación y puedes acomodarlo a como más te convenga.\r\n\r\nArmado de sin herramientas, fácil y rá', 'Blanco', 834, 'MyTek', 'Largo del Producto Armado  40 ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productoss`
--
ALTER TABLE `productoss`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
