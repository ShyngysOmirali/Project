-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 17 2016 г., 17:57
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dbforproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `card`
--

CREATE TABLE `card` (
  `id` int(100) NOT NULL,
  `name_pr` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `card`
--

INSERT INTO `card` (`id`, `name_pr`, `email`) VALUES
(1, 'MESSI BOOTS', 'shake.17.1998@gmail.com'),
(2, 'dafsad', 'shake.17.1998@gmail.com'),
(3, 'dafsad', 'shake.17.1998@gmail.com'),
(4, 'dafsad', 'shake.17.1998@gmail.com'),
(5, 'FOOTBALL BOOTS', 'shake.17.1998@gmail.com'),
(6, 'FOOTBALL BOOTS', 'shake.17.1998@gmail.com'),
(7, 'FOOTBALL BOOTS', 'shake.17.1998@gmail.com'),
(18, 'MESSI BOOTS', 'asd@mail.ru'),
(28, 'MESSI BOOTS', 'asd@mail.ru'),
(29, 'MESSI BOOTS', 'asd@mail.ru'),
(30, 'FOOTBALL BOOTS', 'asd@mail.ru'),
(31, 'MESSI BOOTS', 'shake.17.1998@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name_pr` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name_pr`, `price`, `photo`) VALUES
(2, 'FOOTBALL BOOTS', '200$', 'f1.jpg'),
(10, 'adfas', '4000', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `gender`, `age`) VALUES
(1, 'admin', '12345', 'admin@mail.ru', 'Man', 18),
(7, '12345', '12345', 'shake.17.1998@gmail.com', 'Man', 0),
(8, 'Shyngys', '12345', 'shake.17.1998@gmail.com', 'Man', 0),
(9, 'ainur', '12345', 'asd@mail.ru', 'Woman', 18),
(10, 'asdbkb', '12345', 'asd@mail.ru', 'Woman', 0),
(24, 'shake', 'sdasda', 'adasd@gmail.com', 'Man', 25),
(25, 'Shake', '12345', 'shake@mail.ru', 'Man', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `card`
--
ALTER TABLE `card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
