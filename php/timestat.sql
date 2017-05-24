-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2017, 15:37
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
(218, 1, 'edfsefsefews', 0, NULL, 0),
(217, 1, 'edfsefsefews', 0, NULL, 0),
(216, 1, 'edfsefsefews', 0, NULL, 0),
(215, 1, 'edfsefsefews', 0, NULL, 0),
(214, 1, 'edfsefsefews', 0, NULL, 0),
(213, 1, 'edfsefsefews', 0, NULL, 0),
(212, 1, 'edfsefsefews', 0, NULL, 0),
(211, 1, 'dwawdaw', 0, NULL, 0),
(210, 1, 'dwawdaw', 0, NULL, 0),
(209, 1, 'dwwadawddaniel', 0, NULL, 0),
(208, 1, 'dwwadawd', 0, NULL, 0),
(207, 1, 'adawdwd', 0, NULL, 0),
(205, 1, 'cscscsc', 0, NULL, 0),
(206, 1, 'adawdwd', 0, NULL, 0),
(204, 1, 'cscscsc', 0, NULL, 0),
(203, 1, 'cscscsc', 0, NULL, 0),
(201, 1, 'cscscsc', 0, NULL, 1),
(200, 1, 'cscscsc', 0, NULL, 1),
(199, 1, 'cscscsc', 0, NULL, 1),
(198, 1, 'cscscsc', 0, NULL, 1),
(202, 1, 'cscscsc', 0, NULL, 1),
(197, 1, 'lfe;mef', 1, NULL, 1);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
