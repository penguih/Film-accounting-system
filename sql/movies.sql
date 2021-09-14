-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 11 2021 г., 20:18
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `films`
--

-- --------------------------------------------------------

--
-- Структура таблицы `movies`
--

CREATE TABLE `movies` (
  `id` int(11) UNSIGNED NOT NULL,
  `movie` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `rating` float UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `movies`
--

INSERT INTO `movies` (`id`, `movie`, `genre`, `rating`) VALUES
(3, 'Прочь', 'Триллер', 7.7),
(4, 'Кто там', 'Триллер', 4.9),
(5, 'Волк с Уолл-стрит', 'Драма', 8.2),
(6, 'Побег из Шоушенка', 'Драма', 9.3),
(7, 'Зелёная миля', 'Драма', 8.6),
(8, 'Скотт Пилигрим против всех ', 'Комедия', 7.5),
(9, 'Джанго освобождённый', 'Приключение', 8.4),
(10, 'Волк с Уолл-стрит', 'Драма', 8.2),
(11, 'Я – легенда', 'Фантастика', 7.2),
(12, 'Собачья жизнь', 'Драма', 7.3),
(13, 'Диктатор', 'Комедия', 6.4),
(14, 'Джон Уик', 'Боевик', 7.4),
(15, 'Паразиты', 'Драма', 8.6),
(16, 'Кунг Фьюри', 'Фантастика', 8),
(17, 'Назад в будущее', 'Приключения', 8.5),
(18, 'Зелёная книга', 'Драма', 8.2),
(19, 'Мстители', 'Фантастика,', 8),
(20, 'Большой куш', 'Боевик', 8.3),
(21, 'Зомби по имени Шон', 'Комедия', 7.9),
(22, 'Призрак в доспехах', 'Фантастика', 6.3),
(23, 'Список Шиндлера', 'Драма', 8.9),
(24, 'Матрица', 'Фантастика', 8.7),
(25, 'Один дома', 'Комедия', 7.6),
(26, 'Аватар', 'Фантастика', 7.5),
(27, 'Начало', 'Боевик', 8.8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `movies`
--
ALTER TABLE `movies`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
