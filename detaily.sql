-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2015 at 11:06 PM
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
  `nazev` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `obsah` varchar(20000) COLLATE utf8_czech_ci NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `detaily`
--

INSERT INTO `detaily` (`Id`, `nazev`, `obsah`) VALUES
(1, 'foukane', '<h1>ZakÃ¡zkovÃ¡ vÃ½roba ruÄnÄ› foukanÃ©ho a umÄ›leckÃ©ho skla</h1>\r\n\r\n<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">\r\n\r\n<p>\r\n\r\nNabÃ­zÃ­me VÃ¡m moÅ¾nost zakÃ¡zkovÃ© vÃ½roby vaÅ¡ich produktÅ¯. DÃ¡le se zabÃ½vÃ¡me vzorovÃ¡nÃ­m novÃ½ch produktÅ¯ Äi autorskÃ½ch pracÃ­. Sklo tavÃ­me pomocÃ­ tradiÄnÃ­ch ÄeskÃ½ch surovin vÂ podobÄ› â€žkmeneâ€œ a zaklÃ¡dÃ¡me si na jeho maximÃ¡lnÃ­ kvalitÄ›. VÂ pÅ™Ã­padÄ› vÄ›tÅ¡Ã­ zakÃ¡zky jsme schopni natavit i jinÃ© barvy skloviny. VÂ ostatnÃ­ch pÅ™Ã­padech pouÅ¾Ã­vÃ¡me kvalitnÃ­ NÄ›meckÃ© barvy, aÅ¥ uÅ¾ vÂ podobÄ› tyÄÃ­ Äi obalovaÄek. <br><br>\r\n\r\n<b>VaÅ¡e zakÃ¡zky realizujeme pomocÃ­ nÃ¡sledujÃ­cÃ­ch technik:</b>\r\n\r\n<br>ZuÅ¡lechÅ¥ovÃ¡nÃ­ hutnÃ­ suroviny foukÃ¡nÃ­m do formy\r\n<br>TvarovÃ¡nÃ­ z volnÃ© ruky za pouÅ¾itÃ­ nÃ¡Å™adÃ­\r\n<br>OdlÃ©vÃ¡nÃ­ skla do kovovÃ½ch forem\r\n<br>JednoduchÃ© lisovÃ¡nÃ­ skla\r\n\r\n\r\n\r\n\r\n</p>'),
(2, 'pelcove', '                \r\n                <h1>VÃ½roba sklÃ¡Å™skÃ½ch dÅ™evÄ›nÃ½ch a pecoldovÃ½ch forem</h1>\r\n\r\n<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">\r\n\r\n<p>\r\n\r\nNabÃ­zÃ­me vÃ¡m moÅ¾nost zakÃ¡zkovÃ© vÃ½roby sklÃ¡Å™skÃ½ch forem aÅ¥ uÅ¾ dÅ™evÄ›nÃ½ch nebo pecoldovÃ½ch, kterÃ© majÃ­ vÄ›tÅ¡Ã­ Å¾ivotnost. VÂ pÅ™Ã­padÄ›, Å¾e zÃ¡kaznÃ­k nemÃ¡ vÃ½kres pro poÅ¾adovanou formu, si tento vÃ½kres samy vyrobÃ­me dle vzorku Äi nÄ›jakÃ©ho nÃ¡kresu. <br><br>\r\n\r\n<b>Druhy sklÃ¡Å™skÃ½ch forem, jejichÅ¾ vÃ½robou se zabÃ½vÃ¡me:</b>\r\n\r\n<br>\r\n<br>DÅ™evÄ›nÃ© formy\r\n<br>PecoldovÃ© formy\r\n<br>JednoduchÃ© kovovÃ© formy (napÅ™. pro hranovanÃ© sklo)\r\n\r\n\r\n\r\n\r\n\r\n</p>            '),
(3, 'brouseni', '                \r\n                                \r\n                <h1>BrouÅ¡enÃ­, Å™ezÃ¡nÃ­ a vrtÃ¡nÃ­ skla</h1>\r\n\r\n<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">\r\n\r\n<p>\r\n\r\nVÃ½robou sklenÄ›nÃ©ho vÃ½robku vÅ¡e nekonÄÃ­. DÃ¡le je potÅ™eba zÂ vÃ½robku odstranit pÅ™ebytek skla tzv. â€žkopnuâ€œ a to pomocÃ­ opukÃ¡vÃ¡nÃ­ nebo vÂ pÅ™Ã­padÄ› silnÄ›jÅ¡Ã­ch vÃ½robkÅ¯ Å™ezÃ¡nÃ­m. ObÄ› tyto techniky nabÃ­zÃ­me. <br>\r\nPotÃ© je potÅ™eba vzniklou ostrou hranu obrousit a vyleÅ¡tit, to je dalÅ¡Ã­ technika zuÅ¡lechÅ¥ovÃ¡nÃ­, kterou se zabÃ½vÃ¡me. \r\nVÂ neposlednÃ­ Å™adÄ› zÃ¡kaznÃ­kÅ¯m nabÃ­zÃ­me moÅ¾nost vrtÃ¡nÃ­ otvorÅ¯ do skla. <br><br>\r\n\r\n<b>VyuÅ¾Ã­vÃ¡me nÃ¡sledujÃ­cÃ­ techniky:</b>\r\n\r\n<br>\r\n<br>OpukÃ¡vÃ¡nÃ­ a Å™ezÃ¡nÃ­ skla\r\n<br>HladinÃ¡Å™skÃ© a kuliÄskÃ© brouÅ¡enÃ­\r\n<br>ZapalovÃ¡nÃ­ ostrÃ½ch hran skla\r\n<br>VrtÃ¡nÃ­ otvorÅ¯ o velikostech 0,5 â€“ 50mm\r\n\r\n</ul>\r\n\r\n\r\n\r\n</p>                        '),
(4, 'piskovani', '                \r\n                                \r\n                                \r\n                <h1>PÃ­skovÃ¡nÃ­ aÂ lepenÃ­ skla</h1>\r\n\r\n<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">\r\n\r\n<p>\r\n\r\nPÃ­skovÃ¡nÃ­ se provÃ¡dÃ­ pomocÃ­ vysokotlakÃ©ho nanÃ¡Å¡enÃ­ jemnÃ©ho kÅ™emiÄitÃ©ho pÃ­sku na povrch skla ÄÃ­mÅ¾ na tomto mÃ­stÄ› vytvoÅ™Ã­me matnÃ½ efekt. PÃ­skovÃ¡nÃ­ provÃ¡dÃ­me vÄetnÄ› zhotovenÃ­ pÃ­skovacÃ­ Å¡ablony dle pÅ™edchozÃ­ho domluvenÃ©ho nÃ¡vrhu.<br>\r\nKÂ lepenÃ­ dvou a vÃ­ce skel kÂ sobÄ› pouÅ¾Ã­vÃ¡me UV lepidlo, kterÃ© se vyznaÄuje vysokou pevnostÃ­ a je prÅ¯hlednÃ© tudÃ­Å¾ nenÃ­ vidÄ›t. KÂ lepenÃ­ skla kÂ jinÃ©mu materiÃ¡lu vÄ›tÅ¡inou pouÅ¾Ã­vÃ¡me dvousloÅ¾kovÃ© lepidlo.  <br><br>\r\n\r\n<b>VyuÅ¾Ã­vÃ¡me nÃ¡sledujÃ­cÃ­ techniky:</b>\r\n\r\n<br>\r\n<br>PÃ­skovÃ¡nÃ­ skla (max. rozmÄ›ry 50x50cm)\r\n<br>LepenÃ­ pomocÃ­ UV lepidla a dvousloÅ¾kovÃ©ho lepidla\r\n\r\n\r\n\r\n\r\n</p>                                    '),
(5, 'piskovani', '                \r\n                                \r\n                                \r\n                <h1>PÃ­skovÃ¡nÃ­ aÂ lepenÃ­ skla</h1>\r\n\r\n<img src="./img/foto/separator.png" style="margin: 10px auto; max-width: 400px;">\r\n\r\n<p>\r\n\r\nPÃ­skovÃ¡nÃ­ se provÃ¡dÃ­ pomocÃ­ vysokotlakÃ©ho nanÃ¡Å¡enÃ­ jemnÃ©ho kÅ™emiÄitÃ©ho pÃ­sku na povrch skla ÄÃ­mÅ¾ na tomto mÃ­stÄ› vytvoÅ™Ã­me matnÃ½ efekt. PÃ­skovÃ¡nÃ­ provÃ¡dÃ­me vÄetnÄ› zhotovenÃ­ pÃ­skovacÃ­ Å¡ablony dle pÅ™edchozÃ­ho domluvenÃ©ho nÃ¡vrhu.<br>\r\nKÂ lepenÃ­ dvou a vÃ­ce skel kÂ sobÄ› pouÅ¾Ã­vÃ¡me UV lepidlo, kterÃ© se vyznaÄuje vysokou pevnostÃ­ a je prÅ¯hlednÃ© tudÃ­Å¾ nenÃ­ vidÄ›t. KÂ lepenÃ­ skla kÂ jinÃ©mu materiÃ¡lu vÄ›tÅ¡inou pouÅ¾Ã­vÃ¡me dvousloÅ¾kovÃ© lepidlo.  <br><br>\r\n\r\n<b>VyuÅ¾Ã­vÃ¡me nÃ¡sledujÃ­cÃ­ techniky:</b>\r\n\r\n<ul>\r\n<li>PÃ­skovÃ¡nÃ­ skla (max. rozmÄ›ry 50x50cm)</li>\r\n<li>LepenÃ­ pomocÃ­ UV lepidla a dvousloÅ¾kovÃ©ho lepidla</li>\r\n\r\n</ul>\r\n\r\n\r\n\r\n</p>                                    ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
