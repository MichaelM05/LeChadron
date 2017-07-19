-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2017 a las 05:53:14
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lechaudron`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcheesetype`
--

CREATE TABLE `tbcheesetype` (
  `idtbcheesetype` int(11) NOT NULL,
  `cheesetype` varchar(65) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcheesetype`
--

INSERT INTO `tbcheesetype` (`idtbcheesetype`, `cheesetype`) VALUES
(3, 'BRIE'),
(2, 'GRUYERE'),
(4, 'PETIT BLANC'),
(1, 'RACLETTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcreamtype`
--

CREATE TABLE `tbcreamtype` (
  `idtbcreamtype` int(11) NOT NULL,
  `creamtype` varchar(65) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbcreamtype`
--

INSERT INTO `tbcreamtype` (`idtbcreamtype`, `creamtype`) VALUES
(2, 'PASTA DURA'),
(5, 'PASTA FRESCA'),
(1, 'PASTA SEMIDURA'),
(3, 'PASTA SUAVE'),
(4, 'PASTA SUAVE CREMOSA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbemail`
--

CREATE TABLE `tbemail` (
  `idtbemail` int(11) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbemail`
--

INSERT INTO `tbemail` (`idtbemail`, `email`) VALUES
(1, 'Info@quesoschaudron.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbexcursion`
--

CREATE TABLE `tbexcursion` (
  `idtbexcursion` int(11) NOT NULL,
  `nameexcursion` varchar(65) CHARACTER SET utf8 NOT NULL,
  `descriptionexcursion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbexcursion`
--

INSERT INTO `tbexcursion` (`idtbexcursion`, `nameexcursion`, `descriptionexcursion`) VALUES
(1, 'Excursión a la finca en Santa Cruz ', 'Para los amantes del queso, ofrecemos una excursión a la finca en Santa Cruz de Turrialba que incluye visita didáctica a la planta y a la cava de maduración.\r\nLos visitantes también podrán disfrutar la degustación de nuestra amplia gama de quesos así como un delicioso almuerzo con Raclette de la casa y exclusivos vinos importados.\r\nLa duración promedio es de 9:00 am a 2:00 pm.\r\nEl costo es de $35 por adulto y $25 para menores de 12 años. Los grupos oscilan entre un mínimo de 10 a un máximo de 20 personas.\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbexcursionreservation`
--

CREATE TABLE `tbexcursionreservation` (
  `ibtbexcursionreservation` int(11) NOT NULL,
  `excursion` int(11) NOT NULL,
  `nameperson` varchar(120) CHARACTER SET utf8 NOT NULL,
  `emailperson` varchar(65) CHARACTER SET utf8 DEFAULT NULL,
  `phoneperson` varchar(12) CHARACTER SET utf8 DEFAULT NULL,
  `numberadults` int(11) NOT NULL DEFAULT '0',
  `numberchildrens` int(11) NOT NULL DEFAULT '0',
  `dateexcursion` date NOT NULL,
  `payment` varchar(20) CHARACTER SET utf8 NOT NULL,
  `specialrequirements` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbimageexcursion`
--

CREATE TABLE `tbimageexcursion` (
  `idtbimageexcursion` int(11) NOT NULL,
  `imageexcursion` varchar(65) CHARACTER SET utf8 NOT NULL,
  `excursion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbimagegallery`
--

CREATE TABLE `tbimagegallery` (
  `idtbimagegallery` int(11) NOT NULL,
  `imagegallery` varchar(65) CHARACTER SET utf8 NOT NULL,
  `imagegallerydescription` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbimagegallery`
--

INSERT INTO `tbimagegallery` (`idtbimagegallery`, `imagegallery`, `imagegallerydescription`) VALUES
(1, '1.jpg', NULL),
(2, '2.jpg', NULL),
(3, '3.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbimageindex`
--

CREATE TABLE `tbimageindex` (
  `idtbimageindex` int(11) NOT NULL,
  `imageindex` varchar(65) CHARACTER SET utf8 NOT NULL,
  `imageindexdescription` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbimageproduct`
--

CREATE TABLE `tbimageproduct` (
  `idtbimageproduct` int(11) NOT NULL,
  `pathimageproduct` varchar(65) CHARACTER SET utf8 NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbimageproduct`
--

INSERT INTO `tbimageproduct` (`idtbimageproduct`, `pathimageproduct`, `product`) VALUES
(3, 'raclette.jpg', 1),
(4, 'raclette2.jpg', 1),
(5, 'turrialba.jpg', 2),
(6, 'turrialba2.jpg', 2),
(7, 'guayabo.jpg', 3),
(8, 'guayabo2.jpg', 3),
(9, 'reblochon.jpg', 4),
(10, 'tomme.jpg', 5),
(11, 'volcan.jpg', 6),
(12, 'albahaca.jpg', 7),
(13, 'albahaca2.jpg', 7),
(14, 'cebollino.jpg', 8),
(15, 'cebollino2.jpg', 8),
(16, 'mango.jpg', 9),
(17, 'mango2.jpg', 9),
(18, 'nuez.jpg', 10),
(19, 'nuez2.jpg', 10),
(20, 'caprice.jpg', 11),
(21, 'caprice2.jpg', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tborganization`
--

CREATE TABLE `tborganization` (
  `idtborganization` int(11) NOT NULL,
  `nameorganization` varchar(65) CHARACTER SET utf8 NOT NULL,
  `basicinformation` text NOT NULL,
  `history` text NOT NULL,
  `mission` tinytext NOT NULL,
  `vission` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tborganization`
--

INSERT INTO `tborganization` (`idtborganization`, `nameorganization`, `basicinformation`, `history`, `mission`, `vission`) VALUES
(1, 'LE CHAUDRON', 'En las faldas del Volcán Turrialba en Costa Rica, entre cipreses y riachuelos, se encuentran las pasturas que dan a nuestra leche su sabor inigualable.\n\nEl fruto de una leche de calidad, trabajo esmerado y una receta Suiza ancestral, da como resultado texturas, aromas y sabores únicos.', 'Todo comenzó con seis vacas jersey y una pequeña planta en Santa Cruz de Turrialba en diciembre de 2011.\r\n\r\nMaritza Solano, fundadora de la empresa, vivió 5 años en Suiza con su familia. En los Alpes aprendió el arte de la fabricación artesanal de quesos afinados. Allá compró un viejo Chaudron (caldero de cobre) con el que inició la aventura y el sueño de producir quesos de clase mundial en las faldas del Volcán Turrialba en Costa Rica.\r\n\r\nEl Chaudron es un símbolo de la producción artesanal de quesos, de ahí que se convirtiera en el ícono y en el nombre de nuestra marca. Nuestro Chaudron fue fabricado en Lausanne, Suiza en 1891.\r\n\r\nNuestro primer producto fue el queso Raclette de 3 meses de maduración. Uno de los quesos insignia de Suiza, ahora elaborado en el trópico.\r\nTrabajamos bajo las más estrictas normas de higiene para garantizar quesos de leche de calidad y sabor irreprochables que rescatan una tradición artesanal milenaria.\r\n\r\nGradualmente fuimos introduciendo nuevas variedades y desarrollando productos propios. En la actualidad contamos con 11 variedades diferentes, incluyendo quesos frescos tipo Boursin francés en diferentes sabores (albahaca, cebollín, nuez, mango/jengibre y ajo/pimienta) y afinados que van desde un mes de maduración, como la Tomme francesa, hasta siete meses, como el Gruyère suizo.\r\n\r\nAdemás de deliciosos quesos, nuestra empresa introdujo prácticas ambientalmente responsables en la producción de leche. Utilizamos abono orgánico en nuestros campos y calentadores de agua con energía solar para la desinfección de equipos en la lechería y en la quesera. También formamos parte de un programa para la protección de la cuenca del Río Reventazón en Turrialba.\r\n\r\nLos productos se comercializan bajo la marca Le Chaudron y han tenido una excelente aceptación tanto en el mercado costarricense como por parte de extranjeros residentes en el país. Actualmente se pueden encontrar en las tiendas de cadenas como Auto Mercado, Price Smart y Fresh Market. También se comercializan en la Feria Verde y se disfrutan en deliciosos platillos en diversos restaurantes a nivel nacional.\r\n', 'Todo comenzó con seis vacas jersey y una pequeña planta en Santa Cruz de Turrialba en diciembre de 2011. Maritza Solano, fundadora de la empresa, vivió 5 años en Suiza con su familia. En los Alpes aprendió el arte de la fabricación artesanal de quesos afi', 'responsables en la producción de leche. Utilizamos abono orgánico en nuestros campos y calentadores de agua con energía solar para la desinfección de equipos en la lechería y en la quesera. También formamos parte de un programa para la protección de la cu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbphone`
--

CREATE TABLE `tbphone` (
  `idtbphone` int(11) NOT NULL,
  `phone` varchar(8) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbphone`
--

INSERT INTO `tbphone` (`idtbphone`, `phone`) VALUES
(1, '25368400');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbproduct`
--

CREATE TABLE `tbproduct` (
  `idtbproduct` int(11) NOT NULL,
  `nameproduct` varchar(65) CHARACTER SET utf8 NOT NULL,
  `descriptionproduct` tinytext NOT NULL,
  `creamtype` int(11) NOT NULL,
  `cheesetype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbproduct`
--

INSERT INTO `tbproduct` (`idtbproduct`, `nameproduct`, `descriptionproduct`, `creamtype`, `cheesetype`) VALUES
(1, 'RACLETTE', 'Su corteza natural se  funde con la suavidad de la pasta para  resaltar los aromas típicos del terruño de madera y ciprés.  Se puede degustar fundido sobre papa y acompañado de embutidos, pepinillos y cebollitas.', 1, 2),
(2, 'TURRIALBA SUPREMO', 'Queso de gran formato y maduración.  \nLa pasta compacta color marfil es suave y delicada al paladar. El  aroma a avellana contrasta con la firmeza de la corteza natural, la cual es el resultado de su cuidadosa y larga maduración.', 2, 2),
(3, 'TOMME GUAYABO', 'La fina corteza se degusta con la pasta cremosa y deja en el paladar un suave sabor amaderado con pinceladas de nuez.   Ideal con panes crujientes, mermeladas y frutas secas. En tablas de queso marida con vino tinto. Conlleva 1 mes de maduración.', 3, 2),
(4, 'REBLOCHON', 'Abanico de aromas agradablemente intensos y gusto pronunciado. Pasta cremosa. En tablas de queso marida con vino tinto. 2 meses de maduración.\nFormato: ruedas de 800 a 1 kg  c/u.\nPresentación: cuñas de 200 a 250 g.\n\n', 3, 3),
(5, 'TOMME TURRIALBA ', 'Fina corteza y delicado aroma que dan  paso a una pasta cremosa  que se funde al gusto.\n1 mes de maduración.\nFormato: tommes de 300g  c/u.\n', 3, 4),
(6, 'VOLCAN', 'Su carácter fuerte esconde una pasta finamente cremosa y a la vez compacta, que invade el paladar de una agradable sensación picante.\n1 mes de maduración.\nFormato: pirámide de 150g  a 200g c/u.\n', 3, 3),
(7, 'ALBAHACA FRESCA', 'Quesos  hechos  a mano con leche de vaca recién ordeñada, pleno de matices frescos que lo hacen un delicioso manjar en aperitivos, entradas y sándwich.  En platillos exaltan el sabor de carnes, mariscos, frutas y vegetales.', 4, 4),
(8, 'CEBOLLINO', 'Quesos  hechos  a mano con leche de vaca recién ordeñada, pleno de matices frescos que lo hacen un delicioso manjar en aperitivos, entradas y sándwich.  En platillos exaltan el sabor de carnes, mariscos, frutas y vegetales.', 4, 4),
(9, 'MANGO / JENGIBRE', 'Quesos  hechos  a mano con leche de vaca recién ordeñada, pleno de matices frescos que lo hacen un delicioso manjar en aperitivos, entradas y sándwich.  En platillos exaltan el sabor de carnes, mariscos, frutas y vegetales.', 4, 4),
(10, 'NUEZ NOGAL LIGHT', 'Quesos  hechos  a mano con leche de vaca recién ordeñada, pleno de matices frescos que lo hacen un delicioso manjar en aperitivos, entradas y sándwich.  En platillos exaltan el sabor de carnes, mariscos, frutas y vegetales.', 4, 4),
(11, 'CAPRICE', 'Queso hecho a mano con leche de vaca recién ordeñada.  La combinación de ajo fresco y su fina cobertura de pimienta negra crean un capricho al paladar.  Ideal para untar en croquetas y para acompañar pastas y mariscos.', 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbrecognition`
--

CREATE TABLE `tbrecognition` (
  `idtbrecognition` int(11) NOT NULL,
  `namerecognition` varchar(65) CHARACTER SET utf8 NOT NULL,
  `descriptionrecognition` tinytext NOT NULL,
  `imagerecognition` varchar(65) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbrecognition`
--

INSERT INTO `tbrecognition` (`idtbrecognition`, `namerecognition`, `descriptionrecognition`, `imagerecognition`) VALUES
(1, 'Micro-empresa innovadora', 'En 5 años de operaciones, la empresa ha recibido reconocimientos como micro-empresa innovadora por parte de instituciones tales como: el Ministerio de Economía, Industria y Comercio, la Fundación Citi, El Financiero y el Banco Nacional de Costa Rica.', 'default.jpg'),
(2, 'Concurso nacional de quesos', 'Sus productos recibieron medallas de oro y plata en el concurso nacional de quesos organizado por la Cámara Nacional de Productores de Leche en 2016.', 'default.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsalesfair`
--

CREATE TABLE `tbsalesfair` (
  `idtbsalesfair` int(11) NOT NULL,
  `namesalesfair` varchar(65) CHARACTER SET utf8 NOT NULL,
  `locationsalesfair` varchar(150) CHARACTER SET utf8 NOT NULL,
  `horarysalesfair` varchar(150) CHARACTER SET utf8 NOT NULL,
  `imagesalesfair` varchar(65) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbsalesfair`
--

INSERT INTO `tbsalesfair` (`idtbsalesfair`, `namesalesfair`, `locationsalesfair`, `horarysalesfair`, `imagesalesfair`) VALUES
(1, 'Feria Verde Aranjuez', 'Polideportivo Aranjuez', 'Sábados de 7:00 am a 12:00 md', 'pricesmart.jpg'),
(2, 'Feria Verde Ciudad Colón', 'Parque central Ciudad Colón, contiguo a la Iglesia', 'Martes de 3:00 pm a 8:00 pm', 'pricesmart.jpg'),
(3, 'Feria Cartago', 'Barrio El Molino', 'Sábados', 'pricesmart.jpg'),
(4, 'Feria Curridabat', '', 'Domingos ', 'pricesmart.jpg'),
(5, 'Feria La Garita', '', '', 'pricesmart.jpg'),
(6, 'Feria Cahuita', '', '', 'pricesmart.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsalestrade`
--

CREATE TABLE `tbsalestrade` (
  `idtbsalestrade` int(11) NOT NULL,
  `namesalestrade` varchar(65) CHARACTER SET utf8 NOT NULL,
  `imagesalestrade` varchar(65) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbsalestrade`
--

INSERT INTO `tbsalestrade` (`idtbsalestrade`, `namesalestrade`, `imagesalestrade`) VALUES
(1, 'Auto Mercado', 'automercado.jpg'),
(2, 'Price Smart', 'pricesmart.jpg'),
(3, 'Fresh Market', 'freshmarket.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbsocialred`
--

CREATE TABLE `tbsocialred` (
  `idtbsocialred` int(11) NOT NULL,
  `socialred` varchar(150) CHARACTER SET utf8 NOT NULL,
  `namesocialred` varchar(200) CHARACTER SET utf8 NOT NULL,
  `urlsocialred` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbsocialred`
--

INSERT INTO `tbsocialred` (`idtbsocialred`, `socialred`, `namesocialred`, `urlsocialred`) VALUES
(1, 'Facebook', 'Le Chaudron', 'https://www.facebook.com/QuesoArtesanalGourmet/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbuseradmin`
--

CREATE TABLE `tbuseradmin` (
  `idtbuseradmin` int(11) NOT NULL,
  `nameuseradmin` varchar(60) NOT NULL,
  `emailuseradmin` varchar(75) NOT NULL,
  `passworduseradmin` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbuseradmin`
--

INSERT INTO `tbuseradmin` (`idtbuseradmin`, `nameuseradmin`, `emailuseradmin`, `passworduseradmin`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbvideogallery`
--

CREATE TABLE `tbvideogallery` (
  `idtbvideogallery` int(11) NOT NULL,
  `videogallery` varchar(65) CHARACTER SET utf8 NOT NULL,
  `videodescription` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcheesetype`
--
ALTER TABLE `tbcheesetype`
  ADD PRIMARY KEY (`idtbcheesetype`) USING BTREE,
  ADD UNIQUE KEY `idtbcheesetype` (`idtbcheesetype`),
  ADD UNIQUE KEY `cheesetype` (`cheesetype`);

--
-- Indices de la tabla `tbcreamtype`
--
ALTER TABLE `tbcreamtype`
  ADD PRIMARY KEY (`idtbcreamtype`) USING BTREE,
  ADD UNIQUE KEY `idtbcreamtype` (`idtbcreamtype`),
  ADD UNIQUE KEY `creamtype` (`creamtype`);

--
-- Indices de la tabla `tbemail`
--
ALTER TABLE `tbemail`
  ADD PRIMARY KEY (`idtbemail`) USING BTREE;

--
-- Indices de la tabla `tbexcursion`
--
ALTER TABLE `tbexcursion`
  ADD PRIMARY KEY (`idtbexcursion`) USING BTREE,
  ADD UNIQUE KEY `idtbexcursion` (`idtbexcursion`),
  ADD UNIQUE KEY `nameexcursion` (`nameexcursion`);

--
-- Indices de la tabla `tbexcursionreservation`
--
ALTER TABLE `tbexcursionreservation`
  ADD PRIMARY KEY (`ibtbexcursionreservation`) USING BTREE,
  ADD UNIQUE KEY `ibtbexcursionreservation` (`ibtbexcursionreservation`);

--
-- Indices de la tabla `tbimageexcursion`
--
ALTER TABLE `tbimageexcursion`
  ADD PRIMARY KEY (`idtbimageexcursion`) USING BTREE,
  ADD UNIQUE KEY `idtbimageexcursion` (`idtbimageexcursion`),
  ADD UNIQUE KEY `imageexcursion` (`imageexcursion`),
  ADD KEY `fkimageexcursion` (`excursion`);

--
-- Indices de la tabla `tbimagegallery`
--
ALTER TABLE `tbimagegallery`
  ADD PRIMARY KEY (`idtbimagegallery`) USING BTREE,
  ADD UNIQUE KEY `idtbimagegallery` (`idtbimagegallery`),
  ADD UNIQUE KEY `imagegallery` (`imagegallery`);

--
-- Indices de la tabla `tbimageindex`
--
ALTER TABLE `tbimageindex`
  ADD PRIMARY KEY (`idtbimageindex`) USING BTREE,
  ADD UNIQUE KEY `idtbimageindex` (`idtbimageindex`),
  ADD UNIQUE KEY `imageindex` (`imageindex`);

--
-- Indices de la tabla `tbimageproduct`
--
ALTER TABLE `tbimageproduct`
  ADD PRIMARY KEY (`idtbimageproduct`) USING BTREE,
  ADD UNIQUE KEY `idtbimageproduct` (`idtbimageproduct`),
  ADD KEY `fkproduct` (`product`);

--
-- Indices de la tabla `tborganization`
--
ALTER TABLE `tborganization`
  ADD PRIMARY KEY (`idtborganization`) USING BTREE,
  ADD UNIQUE KEY `idtborganization` (`idtborganization`);

--
-- Indices de la tabla `tbphone`
--
ALTER TABLE `tbphone`
  ADD PRIMARY KEY (`idtbphone`) USING BTREE;

--
-- Indices de la tabla `tbproduct`
--
ALTER TABLE `tbproduct`
  ADD PRIMARY KEY (`idtbproduct`) USING BTREE,
  ADD UNIQUE KEY `idtbproduct` (`idtbproduct`),
  ADD UNIQUE KEY `nameproduct` (`nameproduct`),
  ADD KEY `fkproductcreamtype` (`creamtype`),
  ADD KEY `fkproductcheesetype` (`cheesetype`);

--
-- Indices de la tabla `tbrecognition`
--
ALTER TABLE `tbrecognition`
  ADD PRIMARY KEY (`idtbrecognition`) USING BTREE,
  ADD UNIQUE KEY `idtbrecognition` (`idtbrecognition`);

--
-- Indices de la tabla `tbsalesfair`
--
ALTER TABLE `tbsalesfair`
  ADD PRIMARY KEY (`idtbsalesfair`) USING BTREE,
  ADD UNIQUE KEY `idtbsalesfair` (`idtbsalesfair`),
  ADD UNIQUE KEY `namesalesfair` (`namesalesfair`);

--
-- Indices de la tabla `tbsalestrade`
--
ALTER TABLE `tbsalestrade`
  ADD PRIMARY KEY (`idtbsalestrade`) USING BTREE,
  ADD UNIQUE KEY `idtbsalestrade` (`idtbsalestrade`),
  ADD UNIQUE KEY `namesalestrade` (`namesalestrade`);

--
-- Indices de la tabla `tbsocialred`
--
ALTER TABLE `tbsocialred`
  ADD PRIMARY KEY (`idtbsocialred`) USING BTREE,
  ADD UNIQUE KEY `idtbsocialred` (`idtbsocialred`),
  ADD UNIQUE KEY `socialred` (`socialred`),
  ADD UNIQUE KEY `namesocialred` (`namesocialred`),
  ADD UNIQUE KEY `urlsocialred` (`urlsocialred`);

--
-- Indices de la tabla `tbuseradmin`
--
ALTER TABLE `tbuseradmin`
  ADD PRIMARY KEY (`idtbuseradmin`) USING BTREE;

--
-- Indices de la tabla `tbvideogallery`
--
ALTER TABLE `tbvideogallery`
  ADD PRIMARY KEY (`idtbvideogallery`) USING BTREE,
  ADD UNIQUE KEY `idtbvideogallery` (`idtbvideogallery`),
  ADD UNIQUE KEY `videogallery` (`videogallery`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbimagegallery`
--
ALTER TABLE `tbimagegallery`
  MODIFY `idtbimagegallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbimageindex`
--
ALTER TABLE `tbimageindex`
  MODIFY `idtbimageindex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbimageproduct`
--
ALTER TABLE `tbimageproduct`
  MODIFY `idtbimageproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbimageexcursion`
--
ALTER TABLE `tbimageexcursion`
  ADD CONSTRAINT `fkimageexcursion` FOREIGN KEY (`excursion`) REFERENCES `tbexcursion` (`idtbexcursion`);

--
-- Filtros para la tabla `tbimageproduct`
--
ALTER TABLE `tbimageproduct`
  ADD CONSTRAINT `fkproduct` FOREIGN KEY (`product`) REFERENCES `tbproduct` (`idtbproduct`);

--
-- Filtros para la tabla `tbproduct`
--
ALTER TABLE `tbproduct`
  ADD CONSTRAINT `fkproductcheesetype` FOREIGN KEY (`cheesetype`) REFERENCES `tbcheesetype` (`idtbcheesetype`),
  ADD CONSTRAINT `fkproductcreamtype` FOREIGN KEY (`creamtype`) REFERENCES `tbcreamtype` (`idtbcreamtype`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
