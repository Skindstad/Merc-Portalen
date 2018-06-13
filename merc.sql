-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 13. 06 2018 kl. 09:06:11
-- Serverversion: 10.1.32-MariaDB
-- PHP-version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merc`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bruger`
--

CREATE TABLE `bruger` (
  `id` int(11) NOT NULL,
  `fuldname` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `alder` int(11) DEFAULT NULL,
  `brugernavn` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `adgangskode` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `fødselsdag` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `bruger`
--

INSERT INTO `bruger` (`id`, `fuldname`, `alder`, `brugernavn`, `adgangskode`, `email`, `fødselsdag`) VALUES
(1, 'Joy Neilsen', 18, 'Joysen12', 'joyPetersen', 'Joyneilsen@gmail.com', '2000-06-12'),
(2, 'James Johnsen', 13, 'JamesJ12', 'Jomes351', 'Jamesjohnsen@gmail.com', '2005-04-28');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `profilId` int(11) NOT NULL,
  `forumId` int(11) NOT NULL,
  `content` text COLLATE utf8_danish_ci NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `newTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `comment`
--

INSERT INTO `comment` (`id`, `profilId`, `forumId`, `content`, `time`, `newTime`) VALUES
(1, 2, 1, 'Jeg synes det samme fordi Grønne ærter er seje', '2018-06-12 11:38:11', '2018-06-12 11:44:28');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `profilId` int(11) NOT NULL,
  `content` text COLLATE utf8_danish_ci NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `newTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `forum`
--

INSERT INTO `forum` (`id`, `profilId`, `content`, `time`, `newTime`) VALUES
(1, 1, 'Hvad er dette for en hjemmeside? Jeg synes denne side skulle hedde Grønne ærter!!!', '2018-06-12 11:22:01', '2018-06-12 11:39:32');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `bruger`
--
ALTER TABLE `bruger`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `One of me` (`brugernavn`) USING BTREE;

--
-- Indeks for tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forumId` (`forumId`),
  ADD KEY `profilId` (`profilId`);

--
-- Indeks for tabel `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profilId` (`profilId`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `bruger`
--
ALTER TABLE `bruger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tilføj AUTO_INCREMENT i tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`profilId`) REFERENCES `bruger` (`id`),
  ADD CONSTRAINT `forumId` FOREIGN KEY (`forumId`) REFERENCES `forum` (`id`);

--
-- Begrænsninger for tabel `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `Profilandbruger` FOREIGN KEY (`profilId`) REFERENCES `bruger` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
