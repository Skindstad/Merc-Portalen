-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 14. 06 2018 kl. 14:52:29
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
  `fuldeNavn` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `alder` int(11) DEFAULT NULL,
  `brugernavn` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `kodeord` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_danish_ci NOT NULL,
  `fødselsdag` date DEFAULT NULL,
  `billede` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `bruger`
--

INSERT INTO `bruger` (`id`, `fuldeNavn`, `alder`, `brugernavn`, `kodeord`, `email`, `fødselsdag`, `billede`) VALUES
(1, 'Joy Neilsen', 18, 'Joysen12', 'joyPetersen', 'Joyneilsen@gmail.com', '2000-06-12', NULL),
(2, 'James Johnsen', 13, 'JamesJ12', 'Jomes351', 'Jamesjohnsen@gmail.com', '2005-04-28', NULL),
(3, 'Jakob Frederiksen', NULL, 'Merc', 'Merc', 'sdsaas@gmail.com', NULL, NULL),
(4, 'kiuqweiuqw', NULL, 'qiuweiu', 'rootasdasd', 'askdjaskjd@mail.dk', NULL, NULL),
(5, 'sadasd', NULL, 'adssadasd', 'root', 'askdjaskjd@mail.dk', NULL, NULL),
(6, 'sadsadsafd', NULL, 'mercdsaassadasd', 'KNld,.skjf.nsdjkfa,', 'sadsasad@gmail.com', NULL, NULL),
(7, 'sadsadsafd', NULL, 'sdasasdfad', 'root', 'sadsasad@gmail.com', NULL, NULL);

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
(1, 2, 1, 'Jeg synes det samme fordi Grønne ærter er seje', '2018-06-12 11:38:11', '2018-06-12 11:44:28'),
(2, 1, 2, 'Hey', '2018-06-13 09:43:08', '2018-06-13 09:43:08'),
(3, 1, 2, 'Virker det', '2018-06-14 07:43:17', '2018-06-14 07:54:01'),
(4, 3, 5, 'asdfghjklÃ¦Ã¸', '2018-06-14 07:45:22', '2018-06-14 07:54:05'),
(15, 1, 3, '', '2018-06-14 12:05:49', '2018-06-14 12:05:49'),
(16, 1, 3, 'sadasfdasfafaas', '2018-06-14 12:07:20', '2018-06-14 12:07:20'),
(17, 1, 3, 'adslksafdslkjfbdsak', '2018-06-14 12:09:29', '2018-06-14 12:09:29');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `profilId` int(11) NOT NULL,
  `content` text COLLATE utf8_danish_ci NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `newTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `billede` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci;

--
-- Data dump for tabellen `forum`
--

INSERT INTO `forum` (`id`, `profilId`, `content`, `time`, `newTime`, `billede`) VALUES
(1, 1, 'Hvad er dette for en hjemmeside? Jeg synes denne side skulle hedde Grønne ærter!!!', '2018-06-12 11:22:01', '2018-06-12 11:39:32', NULL),
(2, 2, 'Hej alle sammen ', '2018-06-13 09:23:33', '2018-06-13 09:23:33', NULL),
(3, 2, 'Jeg er har nu!', '2018-06-13 11:53:10', '2018-06-13 11:53:10', NULL),
(4, 1, 'Jeg ville rigtig gerne have noget hjælpe?', '2018-06-13 13:38:03', '2018-06-13 18:41:48', NULL),
(5, 1, 'Hej Hvor er i guys', '2018-06-13 18:48:08', '2018-06-13 18:48:08', NULL),
(7, 3, 'Jeg ville rigtig gerne have noget hjÃ¦lpe?', '2018-06-14 07:32:16', '2018-06-14 07:32:16', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tilføj AUTO_INCREMENT i tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tilføj AUTO_INCREMENT i tabel `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
