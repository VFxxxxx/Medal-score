-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2018 г., 18:05
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `olimp_baze`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_reduction` varchar(40) DEFAULT NULL,
  `country_name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `country_reduction`, `country_name`) VALUES
(1, 'RUS', 'Россия'),
(2, 'NOR', 'Норвегия'),
(3, 'CAN', 'Канада'),
(4, 'USA', 'США'),
(5, 'GER', 'Германия'),
(6, 'NED', 'Нидерланды'),
(7, 'SUI', 'Швейцария'),
(8, 'BLR', 'Беларусь'),
(9, 'AUT', 'Австрия'),
(10, 'FRA', 'Франция'),
(11, 'CZE', 'Чехия');

-- --------------------------------------------------------

--
-- Структура таблицы `medails`
--

CREATE TABLE `medails` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `medails`
--

INSERT INTO `medails` (`id`, `type`, `name`) VALUES
(1, 'gold', 'золото'),
(2, 'silver', 'серебро'),
(3, 'bronze', 'бронза');

-- --------------------------------------------------------

--
-- Структура таблицы `medal_zachet`
--

CREATE TABLE `medal_zachet` (
  `id` int(11) NOT NULL,
  `medal_type_id` int(11) DEFAULT NULL,
  `sportsmen_id` int(11) DEFAULT NULL,
  `sport_type_id` int(11) DEFAULT NULL,
  `comand` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `medal_zachet`
--

INSERT INTO `medal_zachet` (`id`, `medal_type_id`, `sportsmen_id`, `sport_type_id`, `comand`) VALUES
(1, 1, 1, 1, NULL),
(2, 2, 2, 2, NULL),
(3, 3, 3, 3, NULL),
(4, 1, 4, 4, NULL),
(7, 1, 7, 14, 1),
(9, 1, 9, 14, 1),
(10, 1, 10, 14, 1),
(11, 2, 7, 8, NULL),
(12, 1, 2, 14, NULL),
(13, 1, 2, 14, NULL),
(14, 3, 7, 4, NULL),
(15, 1, 10, 3, NULL),
(16, 1, 3, 5, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `sportsmens`
--

CREATE TABLE `sportsmens` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL,
  `county_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sportsmens`
--

INSERT INTO `sportsmens` (`id`, `name`, `surname`, `county_id`) VALUES
(1, 'Уле-Эйнар', 'Бьёрндален', 2),
(2, 'Мартен', 'Фуркад', 10),
(3, 'Доминик', 'Ландертингер', 9),
(4, 'Ярослав', 'Соукуп', 11),
(5, 'Жан-Гийом', 'Беатрикс', 10),
(6, 'Ондржей', 'Моравец', 11),
(7, 'Алексей', 'Волков', 1),
(8, 'Евгений', 'Устюгов', 1),
(9, 'Дмитрий', 'Малышко', 1),
(10, 'Антон', 'Шипулин', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sport_type`
--

CREATE TABLE `sport_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `command_type` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sport_type`
--

INSERT INTO `sport_type` (`id`, `name`, `command_type`) VALUES
(1, 'Волейбол', NULL),
(2, 'Бег', NULL),
(3, 'Бадминтон', NULL),
(4, 'Баскетбол', NULL),
(5, 'Бокс', NULL),
(6, 'Борьба', NULL),
(7, 'Велоспорт', NULL),
(8, 'Плавание', NULL),
(9, 'Гимнастика', NULL),
(10, 'Гольф', NULL),
(11, 'Теннис', NULL),
(12, 'Конный спорт', NULL),
(13, 'Фигурное катание', NULL),
(14, 'Биатлон', NULL),
(18, 'NEW vid', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `medails`
--
ALTER TABLE `medails`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `medal_zachet`
--
ALTER TABLE `medal_zachet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medal_type_id` (`medal_type_id`),
  ADD KEY `sport_type_id` (`sport_type_id`),
  ADD KEY `sportsmen_id` (`sportsmen_id`);

--
-- Индексы таблицы `sportsmens`
--
ALTER TABLE `sportsmens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `county_id` (`county_id`);

--
-- Индексы таблицы `sport_type`
--
ALTER TABLE `sport_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT для таблицы `medails`
--
ALTER TABLE `medails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `medal_zachet`
--
ALTER TABLE `medal_zachet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `sportsmens`
--
ALTER TABLE `sportsmens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `sport_type`
--
ALTER TABLE `sport_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `medal_zachet`
--
ALTER TABLE `medal_zachet`
  ADD CONSTRAINT `medal_zachet_ibfk_1` FOREIGN KEY (`medal_type_id`) REFERENCES `medails` (`id`),
  ADD CONSTRAINT `medal_zachet_ibfk_2` FOREIGN KEY (`sport_type_id`) REFERENCES `sport_type` (`id`),
  ADD CONSTRAINT `medal_zachet_ibfk_3` FOREIGN KEY (`sportsmen_id`) REFERENCES `sportsmens` (`id`);

--
-- Ограничения внешнего ключа таблицы `sportsmens`
--
ALTER TABLE `sportsmens`
  ADD CONSTRAINT `sportsmens_ibfk_1` FOREIGN KEY (`county_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
