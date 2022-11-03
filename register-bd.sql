-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2022 г., 15:21
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register-bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `pass` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(13, 'Bob', '9c2c8b99cda7722e6f342339563bcaa8'),
(12, '<br><br><span>Egor</span>', '6624ab5b554f8eeb8d2d952b540778de'),
(11, '<br><br><span style=\"color: red;\">Egor</span>', '6624ab5b554f8eeb8d2d952b540778de'),
(10, 'Egor', '6624ab5b554f8eeb8d2d952b540778de'),
(14, 'dog', '9c2c8b99cda7722e6f342339563bcaa8'),
(15, 'Tod', '9c2c8b99cda7722e6f342339563bcaa8'),
(16, 'Tod', '9c2c8b99cda7722e6f342339563bcaa8'),
(17, 'Tod', '9c2c8b99cda7722e6f342339563bcaa8'),
(18, 'Rot', '9c2c8b99cda7722e6f342339563bcaa8'),
(19, 'Rot', '9c2c8b99cda7722e6f342339563bcaa8'),
(20, 'aaa', '9c2c8b99cda7722e6f342339563bcaa8'),
(21, 'Aaaa', '9c2c8b99cda7722e6f342339563bcaa8'),
(22, 'bbb', '9c2c8b99cda7722e6f342339563bcaa8'),
(23, 'Aba', '9c2c8b99cda7722e6f342339563bcaa8'),
(24, 'ababaa', '9c2c8b99cda7722e6f342339563bcaa8'),
(25, 'Egor', '6624ab5b554f8eeb8d2d952b540778de'),
(26, 'Egor', '949f437a56f59ddeead1a5ffd15b3f9a'),
(27, 'Egor', '0f8be324373e152f82ff43b187b88870'),
(28, 'Bbabc', '9c2c8b99cda7722e6f342339563bcaa8'),
(29, 'Egor', '6624ab5b554f8eeb8d2d952b540778de'),
(30, 'abcaa', '9c2c8b99cda7722e6f342339563bcaa8'),
(31, 'Egorr', '9c2c8b99cda7722e6f342339563bcaa8'),
(32, 'ывдлоафылоа', '9c2c8b99cda7722e6f342339563bcaa8'),
(33, 'Viktor', '9c2c8b99cda7722e6f342339563bcaa8'),
(34, 'Victor', '9c2c8b99cda7722e6f342339563bcaa8'),
(35, 'lsdjvlsjs', '72887529d71b598c644c8d6624a534d0'),
(36, ';j;j;upu,', '9c2c8b99cda7722e6f342339563bcaa8');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
