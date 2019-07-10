-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 10 2019 г., 12:54
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

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_categories`, `name_categories`) VALUES
(1, 'Промышленное производство'),
(2, 'Бизнес'),
(3, 'Карьера'),
(4, 'Образование'),
(5, 'Организация мероприятий'),
(6, 'Финансы'),
(7, 'Фитнес'),
(8, 'Здоровье'),
(9, 'PR&Реклама'),
(10, 'Законодательство'),
(11, 'Недвижимость'),
(12, 'Эмиграция'),
(13, 'Другая');

-- --------------------------------------------------------

--
-- Структура таблицы `chats`
--

CREATE TABLE `chats` (
  `id_chat` int(11) NOT NULL,
  `id_ex` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chats`
--

INSERT INTO `chats` (`id_chat`, `id_ex`, `id`, `id_categories`) VALUES
(10, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `expert`
--

CREATE TABLE `expert` (
  `id_ex` int(11) NOT NULL,
  `id_categories` int(3) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `middle_name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `expert`
--

INSERT INTO `expert` (`id_ex`, `id_categories`, `surname`, `name`, `middle_name`, `email`, `password`, `telephone`) VALUES
(1, 9, 'Смиронов', 'Иван', 'Петрович', 'a@mail.ru', '1', '+7(482) 384-823');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `id_chats` int(11) NOT NULL,
  `text` text DEFAULT NULL,
  `id_ex` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id_message`, `id_chats`, `text`, `id_ex`, `id`, `datetime`) VALUES
(1, 10, 'Сообщение', 1, 1, '0000-00-00 00:00:00'),
(2, 10, 'message2', 1, 1, '0000-00-00 00:00:00'),
(3, 10, 'message3', 1, 1, '0000-00-00 00:00:00');

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
(1, 'sadasdkjsd', 'sadksdj', 'dsakdjasd', 'dskadjasd', '1', '+7(394) 932-994', 125),
(2, 'sadasd', 'dsjadhs', 'dsjahdsa', 'sajdhasd', '1', '+7(394) 924-939', 125),
(3, 'sadadsa', 'sdasd', 'asdasd', 'adsasda', '1', '+7(234) 234-234', 125),
(4, 'asdas', 'asdasd', 'adsasd', 'assads', '1', '+7(234) 234-324', 125),
(5, '123', '123', '123', '123', '1', '+7(123) 123-231', 125),
(6, '123', '1231', '231', '23123', '1', '+7(123) 132-312', 125),
(7, 'asdasd', 'asdas', 'dasda', 'dasda', '1', '+7(123) 121-231', 125),
(8, 'asdasd', 'asdas', '231', 'sfdsf', '1', '+7(123) 132-312', 125);

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
  ADD KEY `chats_fk2` (`id_categories`);

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
  ADD KEY `message_fk1` (`id_ex`),
  ADD KEY `id_chats` (`id_chats`);

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
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `expert`
--
ALTER TABLE `expert`
  MODIFY `id_ex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `chats_fk2` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

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
  ADD CONSTRAINT `message_fk1` FOREIGN KEY (`id_ex`) REFERENCES `expert` (`id_ex`),
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_chats`) REFERENCES `chats` (`id_chat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
