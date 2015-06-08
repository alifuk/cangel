-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2015 at 01:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cangel`
--

-- --------------------------------------------------------

--
-- Table structure for table `detaily`
--

CREATE TABLE IF NOT EXISTS `detaily` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nazev` varchar(150) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `obsah` varchar(20000) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `nadpis` varchar(200) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `kodProduktu` varchar(20) NOT NULL DEFAULT '0',
  `material` varchar(300) NOT NULL,
  `podkategorie` varchar(300) NOT NULL,
  `rozmery` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `detaily`
--

INSERT INTO `detaily` (`Id`, `nazev`, `obsah`, `foto`, `nadpis`, `kodProduktu`, `material`, `podkategorie`, `rozmery`) VALUES
(1, 'ZakÃ¡zkovÃ¡ vÃ½roba ruÄnÄ› foukanÃ©ho a umÄ›leckÃ©ho skla', '                \r\n                        \r\n                        \r\n                        \r\n\r\n\r\n<p>\r\n\r\nNabÃ­zÃ­me VÃ¡m moÅ¾nost zakÃ¡zkovÃ© vÃ½roby vaÅ¡ich produktÅ¯. DÃ¡le se zabÃ½vÃ¡me vzorovÃ¡nÃ­m novÃ½ch produktÅ¯ Äi autorskÃ½ch pracÃ­. Sklo tavÃ­me pomocÃ­ tradiÄnÃ­ch ÄeskÃ½ch surovin vÂ podobÄ› â€žkmeneâ€œ a zaklÃ¡dÃ¡me si na jeho maximÃ¡lnÃ­ kvalitÄ›. VÂ pÅ™Ã­padÄ› vÄ›tÅ¡Ã­ zakÃ¡zky jsme schopni natavit i jinÃ© barvy skloviny. VÂ ostatnÃ­ch pÅ™Ã­padech pouÅ¾Ã­vÃ¡me kvalitnÃ­ NÄ›meckÃ© barvy, aÅ¥ uÅ¾ vÂ podobÄ› tyÄÃ­ Äi obalovaÄek. <br><br>\r\n\r\n<b>VaÅ¡e zakÃ¡zky realizujeme pomocÃ­ nÃ¡sledujÃ­cÃ­ch technik:</b>\r\n\r\n<br>ZuÅ¡lechÅ¥ovÃ¡nÃ­ hutnÃ­ suroviny foukÃ¡nÃ­m do formy\r\n<br>TvarovÃ¡nÃ­ z volnÃ© ruky za pouÅ¾itÃ­ nÃ¡Å™adÃ­\r\n<br>OdlÃ©vÃ¡nÃ­ skla do kovovÃ½ch forem\r\n<br>JednoduchÃ© lisovÃ¡nÃ­ skla\r\n\r\n\r\n\r\n\r\n</p>                    ', '/img/foto/image3.jpg', 'foukane', '200', 'fsa', '', ''),
(24, 'Flat vase', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Flat vase.jpg', 'flat', 'HS001', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'ploche', '30 x 15 x 15 cm'),
(25, 'Beveling bowl', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Beveling bowl.jpg', 'bowl', 'HS002', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '31 x 15 x 15 cm'),
(26, 'Brick', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Brick.jpg', 'brick', 'HS003', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '32 x 15 x 15 cm'),
(27, 'Hexagon', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Hexagon a.jpg', 'hexagon', 'HS004', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '33 x 15 x 15 cm'),
(28, 'Iron big', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Iron big a.jpg', 'iron big', 'HS005', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '34 x 15 x 15 cm'),
(29, 'Iron small', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Iron small a.jpg', 'iron small', 'HS006', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '35 x 15 x 15 cm'),
(30, 'Lux', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Lux.jpg', 'lux', 'HS007', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '36 x 15 x 15 cm'),
(31, 'Pentagon', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Pentagon.jpg', 'pentagon', 'HS008', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '37 x 15 x 15 cm'),
(32, 'Pyramid', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Pyramid a.jpg', 'pyramid', 'HS009', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '38 x 15 x 15 cm'),
(33, 'Rectangle big', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Rectangle big.jpg', 'rectangle', 'HS010', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '39 x 15 x 15 cm'),
(34, 'Rectangle small', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Rectangle small a.jpg', 'rectangle small', 'HS011', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '40 x 15 x 15 cm'),
(35, 'Rhombus', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Rhombus.jpg', 'rhombus', 'HS012', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '41 x 15 x 15 cm'),
(36, 'Square big', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Square big a.jpg', 'square big', 'HS013', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '42 x 15 x 15 cm'),
(37, 'Square small', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Square small a.jpg', 'square small', 'HS014', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '43 x 15 x 15 cm'),
(38, 'Tainted', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Tainted square.jpg', 'tainted', 'HS015', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '44 x 15 x 15 cm'),
(39, 'Tiffany', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Tiffany.jpg', 'tiffany', 'HS016', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '45 x 15 x 15 cm'),
(40, 'Triangle', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Triangle big.jpg', 'triangle', 'HS017', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '46 x 15 x 15 cm'),
(41, 'Triangle small', 'JednÃ¡ se o luxusnÃ­ trojhrannou vÃ¡zu, kterÃ¡ je celÃ¡ vysoce vyleÅ¡tÄ›nÃ¡, avÅ¡ak malÃ© hrany zÅ¯stali matnÃ©, ÄÃ­mÅ¾ nÃ¡m vznikÃ¡ jedineÄnÃ½ efekt. VÃ¡za se dÃ¡ pouÅ¾Ã­t aÅ¥ uÅ¾ jako luxusnÃ­ detail ve vaÅ¡em nÃ¡bytku Äi vÂ pÅ™Ã­padÄ› potÅ™eby jako vÃ¡za na kvÄ›tiny. ', 'Triangle small.jpg', 'triangle small', 'HS018', 'KÅ™iÅ¡Å¥Ã¡l/Smoke', 'brousene', '47 x 15 x 15 cm'),
(44, 'BrouÅ¡enÃ­, Å™ezÃ¡nÃ­ a vrtÃ¡nÃ­ skla', '                \n       \n\n\n<p>\n\nVÃ½robou sklenÄ›nÃ©ho vÃ½robku vÅ¡e nekonÄÃ­. DÃ¡le je potÅ™eba zÂ vÃ½robku odstranit pÅ™ebytek skla tzv. â€žkopnuâ€œ a to pomocÃ­ opukÃ¡vÃ¡nÃ­ nebo vÂ pÅ™Ã­padÄ› silnÄ›jÅ¡Ã­ch vÃ½robkÅ¯ Å™ezÃ¡nÃ­m. ObÄ› tyto techniky nabÃ­zÃ­me. \nPotÃ© je potÅ™eba vzniklou ostrou hranu obrousit a vyleÅ¡tit, to je dalÅ¡Ã­ technika zuÅ¡lechÅ¥ovÃ¡nÃ­, kterou se zabÃ½vÃ¡me. \nVÂ neposlednÃ­ Å™adÄ› zÃ¡kaznÃ­kÅ¯m nabÃ­zÃ­me moÅ¾nost vrtÃ¡nÃ­ otvorÅ¯ do skla. <br><br>\n\n<b>VyuÅ¾Ã­vÃ¡me nÃ¡sledujÃ­cÃ­ techniky:</b>\n\n<br>OpukÃ¡vÃ¡nÃ­ a Å™ezÃ¡nÃ­ skla\n<br>HladinÃ¡Å™skÃ© a kuliÄskÃ© brouÅ¡enÃ­\n<br>ZapalovÃ¡nÃ­ ostrÃ½ch hran skla\n<br>VrtÃ¡nÃ­ otvorÅ¯ o velikostech 0,5 â€“ 50mm\n\n\n\n\n</p>                        ', '/img/foto/image5.jpg', 'brouseni', '200', 'fsa', '', ''),
(45, 'VÃ½roba sklÃ¡Å™skÃ½ch dÅ™evÄ›nÃ½ch a pecoldovÃ½ch forem', '                \r\n                        \r\n                        \r\n       \r\n\r\n\r\n\r\n<p>\r\n\r\nNabÃ­zÃ­me vÃ¡m moÅ¾nost zakÃ¡zkovÃ© vÃ½roby sklÃ¡Å™skÃ½ch forem aÅ¥ uÅ¾ dÅ™evÄ›nÃ½ch nebo pecoldovÃ½ch, kterÃ© majÃ­ vÄ›tÅ¡Ã­ Å¾ivotnost. VÂ pÅ™Ã­padÄ›, Å¾e zÃ¡kaznÃ­k nemÃ¡ vÃ½kres pro poÅ¾adovanou formu, si tento vÃ½kres samy vyrobÃ­me dle vzorku Äi nÄ›jakÃ©ho nÃ¡kresu.<br><br>\r\n\r\n<b>Druhy sklÃ¡Å™skÃ½ch forem, jejichÅ¾ vÃ½robou se zabÃ½vÃ¡me:</b>\r\n\r\n<br>DÅ™evÄ›nÃ© formy\r\n<br>PecoldovÃ© formy\r\n<br>JednoduchÃ© kovovÃ© formy (napÅ™. pro hranovanÃ© sklo)\r\n\r\n\r\n\r\n\r\n</p>                    ', '/img/foto/image5.jpg', 'pelcove', '200', 'fsa', '', ''),
(46, 'PÃ­skovÃ¡nÃ­ aÂ lepenÃ­ skla', '                \r\n                    \r\n\r\n\r\n\r\n<p>\r\n\r\nPÃ­skovÃ¡nÃ­ se provÃ¡dÃ­ pomocÃ­ vysokotlakÃ©ho nanÃ¡Å¡enÃ­ jemnÃ©ho kÅ™emiÄitÃ©ho pÃ­sku na povrch skla ÄÃ­mÅ¾ na tomto mÃ­stÄ› vytvoÅ™Ã­me matnÃ½ efekt. PÃ­skovÃ¡nÃ­ provÃ¡dÃ­me vÄetnÄ› zhotovenÃ­ pÃ­skovacÃ­ Å¡ablony dle pÅ™edchozÃ­ho domluvenÃ©ho nÃ¡vrhu.\r\nKÂ lepenÃ­ dvou a vÃ­ce skel kÂ sobÄ› pouÅ¾Ã­vÃ¡me UV lepidlo, kterÃ© se vyznaÄuje vysokou pevnostÃ­ a je prÅ¯hlednÃ© tudÃ­Å¾ nenÃ­ vidÄ›t. KÂ lepenÃ­ skla kÂ jinÃ©mu materiÃ¡lu vÄ›tÅ¡inou pouÅ¾Ã­vÃ¡me dvousloÅ¾kovÃ© lepidlo. <br><br>\r\n\r\n<b>VyuÅ¾Ã­vÃ¡me nÃ¡sledujÃ­cÃ­ techniky:</b>\r\n\r\n<br>PÃ­skovÃ¡nÃ­ skla (max. rozmÄ›ry 50x50cm)\r\n<br>LepenÃ­ pomocÃ­ UV lepidla a dvousloÅ¾kovÃ©ho lepidla\r\n\r\n\r\n\r\n\r\n</p>            ', '', 'piskovani', '200', 'fsa', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
