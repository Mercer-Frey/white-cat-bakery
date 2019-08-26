-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 26 2019 г., 16:18
-- Версия сервера: 5.6.41
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
-- База данных: `white_cat`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `login_1` varchar(32) DEFAULT NULL,
  `login_2` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `hash_1` varchar(32) DEFAULT NULL,
  `hash_2` varchar(32) DEFAULT NULL,
  `cook_name_1` varchar(32) DEFAULT NULL,
  `cook_name_2` varchar(32) DEFAULT NULL,
  `time_last_online` int(30) DEFAULT NULL,
  `last_ip` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `login_1`, `login_2`, `password`, `hash_1`, `hash_2`, `cook_name_1`, `cook_name_2`, `time_last_online`, `last_ip`) VALUES
(1, 'admin', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', '4297f44b13955235245b2497399d7a93', '075c3ff258b0ad1fb23969598a9bbb5c', '7bc6c35416398f71b871dc74d4859c24', 'f10e00b877d94bc75fa1d20511dc9954', '66a0cd7ec846d4e9904dc9c013adccb9', 1566824601, 1270);

-- --------------------------------------------------------

--
-- Структура таблицы `cakes`
--

CREATE TABLE `cakes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `to_order` varchar(255) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cakes`
--

INSERT INTO `cakes` (`id`, `name`, `description`, `to_order`, `image_1`, `image_2`) VALUES
(61, ' Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества.\r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается', '093 414 41 41\r\n(месенджеры) или Директ\r\n@white_cat_bakery', '71839_675873.jpg', '875000_751739.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `cakes_price`
--

CREATE TABLE `cakes_price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `to_order` varchar(255) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cakes_price`
--

INSERT INTO `cakes_price` (`id`, `name`, `description`, `cost`, `to_order`, `image_1`, `image_2`) VALUES
(6, ' Шоколад-кокос', 'Мы категорически против порошков, смесей дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> ry', '3.jpg', '908355_434387.jpg'),
(7, ' Шоколад-кокос', 'Мы категорически против порошков, смесей дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> ry', '5.jpg', '6.jpg'),
(8, ' Шоколад-кокос', 'Мы категорически против порошков, смесей дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> ry', '7.jpg', '630340_724487.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `link` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `main_image`, `link`) VALUES
(1, 'Торты', '877472_380554.jpg', 'cakes'),
(2, 'Макарон', '601013_918426.jpg', 'pasta'),
(3, 'Капкейки', 'cupcakes.jpg', 'cupcakes'),
(4, 'Чизкейки', '568695_67627.jpg', 'cheesecakes');

-- --------------------------------------------------------

--
-- Структура таблицы `cheesecakes_price`
--

CREATE TABLE `cheesecakes_price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `to_order` varchar(255) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cheesecakes_price`
--

INSERT INTO `cheesecakes_price` (`id`, `name`, `description`, `cost`, `to_order`, `image_1`, `image_2`) VALUES
(1, 'Вишневый торт', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3.jpg', 'Rectangle 3.1.jpg'),
(2, 'Шоколад-Арахис', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-1.jpg', 'Group 2.6.jpg'),
(3, 'Ванильно-ореховый', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-2.jpg', 'Group 2.7.jpg'),
(4, 'Трюфельный', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-3.jpg', 'Group 2.8.jpg'),
(5, 'Черника-земляника', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-4.jpg', 'Group 2.9.jpg'),
(6, ' Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества.\r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41\r\n(месенджеры) или Директ\r\n@white_cat_bakery', 'Rectangle 3-5.jpg', '504303_267639.jpg'),
(7, 'Трюфельный', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-6.jpg', 'Group 2.11.jpg'),
(8, 'Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', '763397_102662.jpg', '555.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `for_order` varchar(255) NOT NULL,
  `cost_deliver` varchar(255) NOT NULL,
  `self_deliver` varchar(255) NOT NULL,
  `number_c` varchar(26) NOT NULL,
  `adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `for_order`, `cost_deliver`, `self_deliver`, `number_c`, `adress`) VALUES
(0, 'Для заказа сладостей пишите в WhatsApp или Telegram минимум за 3 дня до желаемой даты.', 'Стоимость доставки рассчитывается индивидуально, доставка через такси. ', 'Самовывоз из нашей Студии (г.Васильков ул.Декабристов 11)', '8 063 767 02 81', 'Мы находимся в городе Васильков, Киевская область, улица Первого Мая 11');

-- --------------------------------------------------------

--
-- Структура таблицы `cupcakes_price`
--

CREATE TABLE `cupcakes_price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `to_order` varchar(255) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cupcakes_price`
--

INSERT INTO `cupcakes_price` (`id`, `name`, `description`, `cost`, `to_order`, `image_1`, `image_2`) VALUES
(1, 'Вишневый торт', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3.jpg', 'Rectangle 3.1.jpg'),
(2, 'Шоколад-Арахис', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-1.jpg', 'Group 2.6.jpg'),
(3, 'Ванильно-ореховый', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-2.jpg', 'Group 2.7.jpg'),
(6, 'Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-5.jpg', 'Group 2.10.jpg'),
(7, 'Трюфельный', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-6.jpg', 'Group 2.11.jpg'),
(8, 'Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-7.jpg', 'Group 2.12.jpg'),
(9, 'Черника-земляника', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', '657379_577942.jpg', 'Group 2.12.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `master_class`
--

CREATE TABLE `master_class` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `to_order` varchar(255) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_class`
--

INSERT INTO `master_class` (`id`, `name`, `description`, `to_order`, `cost`, `image_1`, `video`, `poster`) VALUES
(1, 'Мастер Класс для детей', 'Оото для получения подробной авпваипави\r\nформацииОото для получения подробной\r\nформации Оото для получения подробной ывыв\r\nформацииОото', '093 414 41 41 (месенджеры)\r\n<br>или<br><br><br>\r\nДирект @white_cat_bakery', '1000 /1 ч ', '867431_801788.jpg', '683288_761444.mp4', '828827_734497.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `master_gallery`
--

CREATE TABLE `master_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `master_gallery`
--

INSERT INTO `master_gallery` (`id`, `image`) VALUES
(2, 'Rectangle 6.1.jpg'),
(3, 'Rectangle 6.2.jpg'),
(4, 'Rectangle 6.3.jpg'),
(5, 'Rectangle 6.4.jpg'),
(6, 'Rectangle 6.5.jpg'),
(8, 'Rectangle 6.7.jpg'),
(9, 'Rectangle 6.8.jpg'),
(10, 'Rectangle 6.9.jpg'),
(11, 'Rectangle 6.10.jpg'),
(12, 'Rectangle 6.11.jpg'),
(13, '523071_79010.jpg'),
(14, '423676_510498.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `pasta_price`
--

CREATE TABLE `pasta_price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `cost` varchar(20) DEFAULT NULL,
  `to_order` varchar(255) DEFAULT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pasta_price`
--

INSERT INTO `pasta_price` (`id`, `name`, `description`, `cost`, `to_order`, `image_1`, `image_2`) VALUES
(1, 'Вишневый торт', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3.jpg', 'Rectangle 3.1.jpg'),
(2, 'Шоколад-Арахис', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-1.jpg', 'Group 2.6.jpg'),
(3, 'Ванильно-ореховый', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-2.jpg', 'Group 2.7.jpg'),
(5, 'Черника-земляника', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-4.jpg', 'Group 2.9.jpg'),
(6, 'Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-5.jpg', 'Group 2.10.jpg'),
(7, 'Трюфельный', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-6.jpg', 'Group 2.11.jpg'),
(8, 'Шоколад-кокос', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-7.jpg', 'Group 2.12.jpg'),
(9, 'Черника-земляника', 'Мы категорически против порошков, смесей и заменителей. Для создания наших тортов мы используем только натуральные продукты высокого качества. \r\n<br> \r\nБольшой выбор начинок, индивидуальный дизайн торта по вашему желанию, все обговаривается.', '350 ₴/кг', '093 414 41 41 <br> \r\n(месенджеры) или Директ <br> \r\n@white_cat_bakery', 'Rectangle 3-8.jpg', 'Group 2.12.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cakes_price`
--
ALTER TABLE `cakes_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cheesecakes_price`
--
ALTER TABLE `cheesecakes_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cupcakes_price`
--
ALTER TABLE `cupcakes_price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `master_class`
--
ALTER TABLE `master_class`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `master_gallery`
--
ALTER TABLE `master_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pasta_price`
--
ALTER TABLE `pasta_price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT для таблицы `cakes_price`
--
ALTER TABLE `cakes_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cheesecakes_price`
--
ALTER TABLE `cheesecakes_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `cupcakes_price`
--
ALTER TABLE `cupcakes_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `master_class`
--
ALTER TABLE `master_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `master_gallery`
--
ALTER TABLE `master_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `pasta_price`
--
ALTER TABLE `pasta_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
