-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Maj 2017, 18:17
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID_logowanie` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID_logowanie`, `FirstName`, `LastName`, `Email`, `Password`) VALUES
(1, '1', '2', '3', '4'),
(2, '1', '2', '3', '4'),
(3, '1', '2', '3', '4'),
(4, '1', '2', '3', '4'),
(5, '1', '2', '3', '4'),
(6, '1', '2', '3', '4'),
(7, '1', '2', '3', '4'),
(8, 'a', 's', 'd', 'f'),
(9, 'g', 'gg', 'gggg', 'gggg'),
(10, 'dddd', 'f', 'gfd', 'der'),
(11, 'gfds', 'hgrtew', 'vds', 'gfrtrew'),
(12, 'bvdf', 'fdsa', 'fgdew', 'fgdsewa'),
(13, 'gfdsa', 'fgterwaw', 'fgdsa', 'ghdsa'),
(14, 'ghfdfsa', 'rtrewq', 'rtrewq', 'rewqq'),
(15, 'jhgfdsa', 'ttrew', 'gewq', 'fdsa'),
(16, 'yhgfdsa', 'muinyujbhtgrc', 'NIKYUJBTRGCRFE', 'brvtecwdx'),
(17, 'rtgerweqws', 'rtverewxw', 'tbyvrex', 'ytvrtgexed'),
(18, 'ytbhtrgvrec', 'tyh rtgerfwc', ' trgerfwed', 'tgerwfcedqwxs'),
(19, 'yujytgtrrew', 'uyjbgtrverwsw', 'yujtyhrgterfedw', 'yubjtyhrtgerfed'),
(20, 'uyjtrgexw', 'tybhrtgvercfedx', 'bhyrtgvrewdxw', 'rvtgrewqdw'),
(21, 'htgfdss', 'rtvrewxws', 'rrewqd', 'yhrtgreweert'),
(22, 'ygtdfrdews', 'tyrgrefewdw', 'ujtyhrtgrfed', 'yhtgrfedw');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_logowanie`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID_logowanie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
