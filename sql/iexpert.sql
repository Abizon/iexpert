-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 05 2019 г., 12:55
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `iexpert`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name_categories` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--

CREATE TABLE `chats` (
  `id_chat` int(11) NOT NULL,
  `id_message` int(11) NOT NULL,
  `id_ex` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `expert`
--

CREATE TABLE `expert` (
  `id_ex` int(11) NOT NULL,
  `id_categories` int(3) NOT NULL,
  `Surname` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `id_ex` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL DEFAULT '0',
  `telephone` varchar(15) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `surname`, `name`, `middlename`, `email`, `password`, `telephone`, `balance`) VALUES
(1, 'sadasdkjsd', 'sadksdj', 'dsakdjasd', 'dskadjasd', 'sadkjdsa', '+7(394) 932-994', 125),
(2, 'sadasd', 'dsjadhs', 'dsjahdsa', 'sajdhasd', 'asdjasd', '+7(394) 924-939', 125),
(3, 'sadadsa', 'sdasd', 'asdasd', 'adsasda', 'asdasd', '+7(234) 234-234', 125),
(4, 'asdas', 'asdasd', 'adsasd', 'assads', 'asdasd', '+7(234) 234-324', 125),
(5, '123', '123', '123', '123', '1123', '+7(123) 123-231', 125),
(6, '123', '1231', '231', '23123', '1231231', '+7(123) 132-312', 125),
(7, 'asdasd', 'asdas', 'dasda', 'dasda', 'adsas', '+7(123) 121-231', 125),
(8, 'asdasd', 'asdas', '231', 'sfdsf', 'edfsd', '+7(123) 132-312', 125);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Индексы таблицы `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `chats_fk` (`id`),
  ADD KEY `chats_fk1` (`id_ex`),
  ADD KEY `chats_fk2` (`id_categories`),
  ADD KEY `chats_fk3` (`id_message`);

--
-- Индексы таблицы `expert`
--
ALTER TABLE `expert`
  ADD PRIMARY KEY (`id_ex`),
  ADD KEY `categories_fk` (`id_categories`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `message_fk` (`id`),
  ADD KEY `message_fk1` (`id_ex`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chats`
--
ALTER TABLE `chats`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `expert`
--
ALTER TABLE `expert`
  MODIFY `id_ex` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_fk` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `chats_fk1` FOREIGN KEY (`id_ex`) REFERENCES `expert` (`id_ex`),
  ADD CONSTRAINT `chats_fk2` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`),
  ADD CONSTRAINT `chats_fk3` FOREIGN KEY (`id_message`) REFERENCES `message` (`id_message`);

--
-- Ограничения внешнего ключа таблицы `expert`
--
ALTER TABLE `expert`
  ADD CONSTRAINT `categories_fk` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Ограничения внешнего ключа таблицы `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_fk` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `message_fk1` FOREIGN KEY (`id_ex`) REFERENCES `expert` (`id_ex`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
