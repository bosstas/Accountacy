-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 23 2020 г., 15:41
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
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `credit`
--

INSERT INTO `credit` (`id`, `name`) VALUES
(1, 'Simplu'),
(2, 'Rapid');

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
(1, 'Cu TVA'),
(2, 'Fara TVA');

-- --------------------------------------------------------

--
-- Структура таблицы `num_cont`
--

CREATE TABLE `num_cont` (
  `id` int(1) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `num_cont`
--

INSERT INTO `num_cont` (`id`, `num`) VALUES
(1, 22248272);

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
(1, 'nou'),
(2, 'verificat'),
(3, 'inchis');

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'R');

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
(2, 'V'),
(3, 'I');

-- --------------------------------------------------------

--
-- Структура таблицы `tva`
--

CREATE TABLE `tva` (
  `id` int(1) NOT NULL,
  `num` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tva`
--

INSERT INTO `tva` (`id`, `num`) VALUES
(1, 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `credit`
--
ALTER TABLE `credit`
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
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `factor_tva`
--
ALTER TABLE `factor_tva`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `num_cont`
--
ALTER TABLE `num_cont`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tip`
--
ALTER TABLE `tip`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `tva`
--
ALTER TABLE `tva`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
