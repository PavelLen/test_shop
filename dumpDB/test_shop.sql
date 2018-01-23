-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 24 2018 г., 01:52
-- Версия сервера: 5.7.20-0ubuntu0.16.04.1
-- Версия PHP: 7.2.1-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180122222639');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`) VALUES
(1, 'Sweater', '23.80'),
(2, 'Kimono', '39.99'),
(3, 'Kimono', '42.99');

-- --------------------------------------------------------

--
-- Структура таблицы `product_modification`
--

CREATE TABLE `product_modification` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `product_modification`
--

INSERT INTO `product_modification` (`id`, `product_id`, `color`, `size`, `vendor_code`) VALUES
(1, 1, 'red', 'L', '5a66652d56626'),
(2, 1, 'red', 'M', '5a66652d56651'),
(3, 1, 'yellow', 'M', '5a66652d56656'),
(4, 1, 'red', 'S', '5a66652d5665a'),
(5, 2, 'red', 'L', '5a66652d5665f'),
(6, 2, 'red', 'M', '5a66652d56664'),
(7, 2, 'red', 'XL', '5a66652d56667'),
(8, 3, 'blue', 'XL', '5a66652d5666b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_modification`
--
ALTER TABLE `product_modification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_62C007B94584665A` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `product_modification`
--
ALTER TABLE `product_modification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product_modification`
--
ALTER TABLE `product_modification`
  ADD CONSTRAINT `FK_62C007B94584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
