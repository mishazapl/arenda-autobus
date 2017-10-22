-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 21 2017 г., 21:37
-- Версия сервера: 5.7.19
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Main`
--

-- --------------------------------------------------------

--
-- Структура таблицы `City`
--

CREATE TABLE `City` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `City`
--

INSERT INTO `City` (`id`, `city`) VALUES
(2, 'Данбас'),
(5, 'Севастополь'),
(7, 'Киев');

-- --------------------------------------------------------

--
-- Структура таблицы `Time`
--

CREATE TABLE `Time` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Times` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Time`
--

INSERT INTO `Time` (`id`, `Times`) VALUES
(2, '14:00'),
(3, '12:00'),
(4, '22:00');

-- --------------------------------------------------------

--
-- Структура таблицы `Travel`
--

CREATE TABLE `Travel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wheres` varchar(100) NOT NULL,
  `wherever` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Travel`
--

INSERT INTO `Travel` (`id`, `wheres`, `wherever`, `data`, `person`, `name`, `number`, `time`) VALUES
(8, 'Данбас', 'Украина', '2017-10-05', '6 пассажиров', 'Михаил', '+79044289792', ''),
(9, 'Украина', 'Данбас', '2444-02-22', '2 пассажира', 'Ирина', '+7555235335', ''),
(10, '', 'Севастополь', '0222-02-22', '5 пассажиров', 'Ирина', 'Дормаедова', ''),
(12, 'Данбас', 'Украина', '+790444289792', '5 пассажиров', 'Михаил', 'gdgd', ''),
(13, 'Севастополь', 'Данбас', '2111-02-22', '3 пассажира', 'Dasha', '79333356336', ''),
(14, 'Киев', 'Севастополь', '2017-03-22', '6 пассажиров', 'Mihail', '+3858353535', '12:00'),
(15, 'Севастополь', 'Данбас', '2020-02-22', '7 пассажиров', 'Aizer', '+35365363663', '22:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `City`
--
ALTER TABLE `City`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `Time`
--
ALTER TABLE `Time`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `Travel`
--
ALTER TABLE `Travel`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `City`
--
ALTER TABLE `City`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `Time`
--
ALTER TABLE `Time`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `Travel`
--
ALTER TABLE `Travel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
