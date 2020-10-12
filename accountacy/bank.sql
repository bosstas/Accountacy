-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 12 2020 г., 18:34
-- Версия сервера: 5.7.14
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bank`
--

-- --------------------------------------------------------

--
-- Структура таблицы `credit`
--

CREATE TABLE `credit` (
  `id` int(4) NOT NULL,
  `transfer_type` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `credit`
--

INSERT INTO `credit` (`id`, `transfer_type`) VALUES
(1, 'obisuit'),
(2, 'bugetar');

-- --------------------------------------------------------

--
-- Структура таблицы `data_pers`
--

CREATE TABLE `data_pers` (
  `id` int(4) NOT NULL,
  `surname` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `fisc` char(4) COLLATE utf8_bin NOT NULL,
  `fiscsub` char(4) COLLATE utf8_bin NOT NULL,
  `test` tinyint(1) NOT NULL,
  `account` varchar(24) COLLATE utf8_bin NOT NULL,
  `bic` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `data_pers`
--

INSERT INTO `data_pers` (`id`, `surname`, `name`, `fisc`, `fiscsub`, `test`, `account`, `bic`) VALUES
(1, 'Puscas', 'Corina', '7563', '4558', 1, '65647464', 'BECOMD2X614'),
(2, 'Munteanu', 'Iuliana', '6545', '798', 0, '4649947', 'BECOMD2X615'),
(3, 'Punga', 'Anastasia', '7532', '5443', 0, '1451136', 'BECOMD2X614');

-- --------------------------------------------------------

--
-- Структура таблицы `dialog`
--

CREATE TABLE `dialog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dialog`
--

INSERT INTO `dialog` (`id`, `name`, `bic`) VALUES
(1, 'BC\'Banca de Economii\'SA fil.nr.14 Soroca', 'BECOMD2X614'),
(2, 'BC\'Banca de Economii\'SA fil.nr.15 Drochia', 'BECOMD2X615'),
(3, 'BC\'Banca de Economii\'SA fil.nr.16 Cantemir', 'BECOMD2X616'),
(4, 'BC\'Banca de Economii\'SA fil.nr.17 Floresti', 'BECOMD2X617'),
(5, 'BC\'Banca de Economii\'SA fil.nr.18 Causeni', 'BECOMD2X618'),
(6, 'BC\'Banca de Economii\'SA fil.nr.19 Cahul', 'BECOMD2X619'),
(7, 'BC\'Banca de Economii\'SA fil.nr.20 Cainari', 'BECOMD2X620'),
(8, 'BC\'Banca de Economii\'SA fil.nr.21 Ceadir-Lunga', 'BECOMD2X621'),
(9, 'BC\'Banca de Economii\'SA fil.nr.22 Cimislia', 'BECOMD2X622'),
(10, 'BC\'Banca de Economii\'SA fil.nr.24 Comrat', 'BECOMD2X624'),
(11, 'BC\'Banca de Economii\'SA fil.nr.25 Criuleni', 'BECOMD2X625'),
(12, 'BC\'Banca de Economii\'SA fil.nr.27 Edinet', 'BECOMD2X627'),
(13, 'BC\'Banca de Economii\'SA fil.nr.29 Glodeni', 'BECOMD2X629'),
(14, 'BC\'Banca de Economii\'SA fil.nr.31 Hincesti', 'BECOMD2X631'),
(15, 'BC\'Banca de Economii\'SA fil.nr.32 Ialoveni', 'BECOMD2X632'),
(16, 'BC\'Banca de Economii\'SA fil.nr.33 Leova', 'BECOMD2X633'),
(17, 'BC\'Banca de Economii\'SA fil.nr.34 Ocnita', 'BECOMD2X634'),
(18, 'BC\'Banca de Economii\'SA fil.nr.35 Stefan Voda', 'BECOMD2X635'),
(19, 'BC\'Banca de Economii\'SA fil.nr.36 Orhei', 'BECOMD2X636'),
(20, 'BC\'Banca de Economii\'SA fil.nr.37 Rezina', 'BECOMD2X637');

-- --------------------------------------------------------

--
-- Структура таблицы `factor_tva`
--

CREATE TABLE `factor_tva` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `factor_tva`
--

INSERT INTO `factor_tva` (`id`, `name`) VALUES
(1, 'Inclusiv TVA'),
(2, 'Fara TVA');

-- --------------------------------------------------------

--
-- Структура таблицы `num_cont`
--

CREATE TABLE `num_cont` (
  `id` int(3) NOT NULL,
  `num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num_cont`
--

INSERT INTO `num_cont` (`id`, `num`) VALUES
(1, '22248272');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'normal'),
(2, 'urgent');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(1) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`, `text`) VALUES
(1, 'R', 'TEST RECEIVER 1'),
(2, 'N', 'TEST NERECEIVER 2');

-- --------------------------------------------------------

--
-- Структура таблицы `tip`
--

CREATE TABLE `tip` (
  `id` int(1) NOT NULL,
  `name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tip`
--

INSERT INTO `tip` (`id`, `name`) VALUES
(1, 'N'),
(2, 'U');

-- --------------------------------------------------------

--
-- Структура таблицы `tva`
--

CREATE TABLE `tva` (
  `id` int(2) NOT NULL,
  `num` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tva`
--

INSERT INTO `tva` (`id`, `num`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_pers`
--
ALTER TABLE `data_pers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dialog`
--
ALTER TABLE `dialog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `factor_tva`
--
ALTER TABLE `factor_tva`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `num_cont`
--
ALTER TABLE `num_cont`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tva`
--
ALTER TABLE `tva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `credit`
--
ALTER TABLE `credit`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `data_pers`
--
ALTER TABLE `data_pers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `dialog`
--
ALTER TABLE `dialog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `factor_tva`
--
ALTER TABLE `factor_tva`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `num_cont`
--
ALTER TABLE `num_cont`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tip`
--
ALTER TABLE `tip`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tva`
--
ALTER TABLE `tva`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
