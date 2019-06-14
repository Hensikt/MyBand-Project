-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 13 jun 2019 om 13:57
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thePantheons`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `tmp_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `text` varchar(15) NOT NULL,
  `About` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `fotos`
--

INSERT INTO `fotos` (`id`, `name`, `size`, `tmp_name`, `type`, `text`, `About`) VALUES
(1, 'aztec.png', 140, 'aztecs', 'png', 'Aztec', 'The Aztecs were a Mesoamerican culture that flourished in central Mexico.'),
(2, 'Celtic.png', 21, 'Celticpic', 'png', 'Celtic', 'The Celts are an Indo-European ethnolinguistic group of Europe identified by their use of Celtic languages and cultural similarities'),
(3, 'Egyptian.png', 19, 'EgyptianPic', 'png', 'Egyptian', 'The culture of Egypt has thousands of years of recorded history. Ancient Egypt was among the earliest civilizations in Middle East and Africa.'),
(4, 'Greek.png', 221, 'GreekPic', 'png', 'Greek', 'The culture of Greece has evolved over thousands of years, beginning in Mycenaean Greece, continuing most notably into Classical Greece.'),
(5, 'hindu.png', 92, 'hinduPic', 'png', 'Hindu', 'Hindoestanen of Hindostanen (of Hindoestani) zijn een bevolkingsgroep in Suriname waarvan de voorouders van Indiase afkomst zijn. '),
(7, 'Incan.png', 388, 'IncanPic', 'png', 'Incan', 'The Inca Empire (Quechua: Tawantinsuyu, lit. \"The Four Regions\"), also known as the Incan Empire and the Inka Empire, was the largest empire in pre-Columbian America.'),
(9, 'Maya.png', 1000, 'MayaPic', 'Png', 'Mayan', 'The Maya civilization was a Mesoamerican civilization developed by the Maya peoples. '),
(10, 'Norse.png', 18, 'NorsePic', 'png', 'Norse', 'Norse mythology is the body of myths of the North Germanic peoples, stemming from Norse paganism and continuing after the Christianization of Scandinavia. '),
(11, 'Rigvedic.png', 21, 'RigvedicPic', 'png', 'Rigveda', 'The Rigveda is an ancient Indian collection of Vedic Sanskrit hymns along with associated commentaries on liturgy, ritual and mystical exegesi');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `People`
--

CREATE TABLE `People` (
  `id` int(11) NOT NULL,
  `Name` tinytext NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `username` char(15) NOT NULL,
  `password` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `People`
--
ALTER TABLE `People`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `People`
--
ALTER TABLE `People`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
