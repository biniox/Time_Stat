-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Mar 2017, 12:33
-- Wersja serwera: 5.7.14
-- Wersja PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `timestat`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `value` text COLLATE utf8_polish_ci NOT NULL,
  `star` int(1) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `end` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `value`, `star`, `date`, `end`) VALUES
(33, 2, 'Daniel Dejniuch', 1, NULL, 1),
(32, 2, 'Daniel Dejniuch', 1, NULL, 1),
(34, 2, 'awdwadwadawd', 1, NULL, 0),
(35, 2, 'Daniel Dejniuch', 1, NULL, 0),
(36, 2, 'Daniel Dejniuch', 1, NULL, 0),
(37, 2, 'Daniel Dejniuch', 0, NULL, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'biniox', 'c905e0c66e2419c3c5c0024728b5fd7989b6a77f1d3006ee09f2s487m36ffu9'),
(2, 'Jarek', 'c905e0c66e2419c3c5c0024728b5fd7989b6a77f1d3006ee09f2s487m36ffu9');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
