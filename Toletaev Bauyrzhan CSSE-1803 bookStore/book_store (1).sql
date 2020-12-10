-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2020 г., 04:56
-- Версия сервера: 10.4.10-MariaDB
-- Версия PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `book_store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin1`
--

CREATE TABLE `admin1` (
  `Admin_id` int(12) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `basket_id` int(12) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `all_book_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin1`
--

INSERT INTO `admin1` (`Admin_id`, `login`, `basket_id`, `Password`, `all_book_id`) VALUES
(1, 'admin', 2, 'admin', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `all_book`
--

CREATE TABLE `all_book` (
  `book_id` int(12) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `cost` int(25) DEFAULT NULL,
  `new_books_id` int(12) DEFAULT NULL,
  `picture` varchar(255) NOT NULL,
  `basket_id` int(12) DEFAULT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `all_book`
--

INSERT INTO `all_book` (`book_id`, `name`, `author_name`, `cost`, `new_books_id`, `picture`, `basket_id`, `cat_id`) VALUES
(31, 'Малыш и Карлсон, который живёт на крыше', 'Астрид Линдгрен', 15, NULL, 'https://knijky.ru/sites/default/files/styles/264x390/public/103581.jpg?itok=nLoO-crm', NULL, 1),
(32, 'Чужак в огороде', 'Свен Нурдквист', 20, NULL, 'https://r5.readrate.com/img/pictures/book/245/245929/2459295/w165h247-4e764930.jpg', NULL, 1),
(33, 'Владимир Степанов девчонкам и мальчишкам', 'Владимир Степанов', 25, NULL, 'https://r2.readrate.com/img/pictures/book/774/774194/774194/w165h247-013697b7.jpg', NULL, 1),
(34, 'Дядя Фёдор, пёс и кот', 'Эдуард Успенский', 14, NULL, 'https://r5.readrate.com/img/pictures/book/749/749529/749529/w165h247-1155f1d3.jpg', NULL, 1),
(35, 'Всё о муми-троллях', 'Туве Янссон', 50, NULL, 'https://r2.readrate.com/img/pictures/book/748/748580/748580/w165h247-7fa45601.jpg', NULL, 1),
(36, 'Винни-Пух и все-все-все', 'Алан Милн', 26, NULL, 'https://r5.readrate.com/img/pictures/book/748/748457/748457/w165h247-355fdeeb.jpg', NULL, 1),
(37, 'Простодурсен: Зима от начала до конца', 'Руне Белсвик', 33, NULL, 'https://r5.readrate.com/img/pictures/book/536/536350/5363503/w165h247-fe4a2d2c.jpg', NULL, 1),
(38, 'Гарри Поттер и философский камень', 'Джоан К. Роулинг', 50, NULL, 'https://r2.readrate.com/img/pictures/book/320/320460/3204606/w165h247-e121f696.jpg', NULL, 1),
(39, 'Сказки (Пушкин)', 'Александр Пушкин', 43, NULL, 'https://r2.readrate.com/img/pictures/book/281/281362/2813624/w165h247-34e7fdb4.jpg', NULL, 1),
(40, 'Танец с драконами. Искры над пеплом', 'Джордж Р. Р. Мартин', 20, NULL, 'https://r5.readrate.com/img/pictures/book/998/998451/998451/w165h247-29b0c539.jpg', NULL, 2),
(41, 'Играть, чтобы жить. Книга 4. Инферно', 'Дмитрий Рус', 15, NULL, 'https://r5.readrate.com/img/pictures/book/394/394895/3948951/w165h247-3010cb37.jpg', NULL, 2),
(42, 'Битва королей', 'Джордж Р. Р. Мартин', 100, NULL, 'https://r5.readrate.com/img/pictures/book/311/311099/311099/w165h247-494e6477.jpg', NULL, 2),
(43, 'Играть, чтобы жить. Книга 3. Долг', 'Дмитрий Рус', 29, NULL, 'https://r5.readrate.com/img/pictures/book/243/243903/2439037/w165h247-76984626.jpg', NULL, 2),
(44, 'Гарри Поттер и узник Азкабана', 'Джоан К. Роулинг', 90, NULL, 'https://r2.readrate.com/img/pictures/book/718/718864/7188644/w165h247-62d971e7.jpg', NULL, 2),
(45, 'Буря мечей', 'Джордж Р. Р. Мартин', 43, NULL, 'https://r2.readrate.com/img/pictures/book/371/371554/371554/w165h247-681360d1.jpg', NULL, 2),
(46, 'Знак Хаоса', 'Роджер Желязны', 34, NULL, 'https://r2.readrate.com/img/pictures/book/375/375186/375186/w165h247-f5286d89.jpg', NULL, 2),
(47, 'Сеть для Миродержцев', 'Генри Олди', 32, NULL, 'https://r2.readrate.com/img/pictures/book/241/241670/241670/w165h247-9b47f467.jpg', NULL, 2),
(48, 'Возвращение короля', 'Джон Рональд Руэл Толкин', 190, NULL, 'https://r5.readrate.com/img/pictures/book/241/241435/2414351/w165h247-7b47b481.jpg', NULL, 2),
(49, 'Не навреди. Истории о жизни, смерти и нейрохирургии', 'Генри Марш', 29, NULL, 'https://r2.readrate.com/img/pictures/book/651/651241/6512414/w165h247-b5c4fc93.jpg', NULL, 3),
(50, 'Подсознание может всё!', 'Джон Кехо', 59, NULL, 'https://r2.readrate.com/img/pictures/book/598/598634/5986348/w165h247-be8a98a9.jpg', NULL, 3),
(51, 'Все о жизни', 'Михаил Веллер', 59, NULL, 'https://r2.readrate.com/img/pictures/book/107/107960/1079600/w165h247-813be5db.jpg', NULL, 3),
(52, 'Прислуга', 'Кэтрин Стокетт', 48, NULL, 'https://r2.readrate.com/img/pictures/book/649/649496/6494960/w165h247-908cbb85.jpg', NULL, 3),
(53, 'Эгоистичный ген', 'Ричард Докинз', 27, NULL, 'https://r2.readrate.com/img/pictures/book/683/683362/6833628/w165h247-78ef227d.jpg', NULL, 3),
(54, 'Вы, конечно, шутите, мистер Фейнман!', 'Ричард Фейнман', 34, NULL, 'https://r5.readrate.com/img/pictures/book/656/656815/6568151/w165h247-594263a7.jpg', NULL, 3),
(55, 'Самое грандиозное шоу на Земле: доказательства эволюции', 'Ричард Докинз', 35, NULL, 'https://r5.readrate.com/img/pictures/book/475/475317/4753175/w165h247-09a34969.jpg', NULL, 3),
(56, 'Карьера менеджера', 'Ли Якокка', 27, NULL, 'https://r5.readrate.com/img/pictures/book/606/606818/6068189/w165h247-d7710aec.jpg', NULL, 4),
(57, 'Почему одни страны богатые, а другие бедные. Происхождение власти, процветания и нищеты', 'Джеймс А. Робинсон', 33, NULL, 'https://r2.readrate.com/img/pictures/book/629/629986/6299860/w165h247-92c8a368.jpg', NULL, 4),
(58, 'Воспоминания биржевого спекулянта', 'Эдвин Лефевр', 63, NULL, 'https://r5.readrate.com/img/pictures/book/571/571646/5716465/w165h247-72e47a01.jpg', NULL, 4),
(59, 'Прощание с иллюзиями', 'Владимир Познер', 23, NULL, 'https://r5.readrate.com/img/pictures/book/539/539/539/w165h247-4c5c2c41.jpg', NULL, 4),
(60, 'Песочные Часы', 'Сергей Недоруб', 24, NULL, 'https://r5.readrate.com/img/pictures/book/225/225479/225479/w165h247-df0a9b53.jpg', NULL, 4),
(61, 'Воспоминания биржевого спекулянта', 'Эдвин Лефевр', 46, NULL, 'https://r5.readrate.com/img/pictures/book/571/571646/5716465/w165h247-72e47a01.jpg', NULL, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `basket_id` int(12) NOT NULL,
  `book_id` int(12) DEFAULT NULL,
  `user_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`basket_id`, `book_id`, `user_id`) VALUES
(1, 1, 1),
(3, 5, 1),
(4, 11, 1),
(7, 18, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Детские'),
(2, 'Фантастика'),
(3, 'Психология'),
(4, 'Публицистика');

-- --------------------------------------------------------

--
-- Структура таблицы `new_books`
--

CREATE TABLE `new_books` (
  `new_books_id` int(12) NOT NULL,
  `book_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(12) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`) VALUES
(1, 'Dimaw', 'Dimaw');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Индексы таблицы `all_book`
--
ALTER TABLE `all_book`
  ADD PRIMARY KEY (`book_id`);

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basket_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `new_books`
--
ALTER TABLE `new_books`
  ADD PRIMARY KEY (`new_books_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin1`
--
ALTER TABLE `admin1`
  MODIFY `Admin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `all_book`
--
ALTER TABLE `all_book`
  MODIFY `book_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `basket_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `new_books`
--
ALTER TABLE `new_books`
  MODIFY `new_books_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
