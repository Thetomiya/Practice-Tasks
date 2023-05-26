-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 26 2023 г., 14:32
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task-3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accordions`
--

CREATE TABLE `accordions` (
  `id` tinyint(10) UNSIGNED NOT NULL,
  `title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint(10) UNSIGNED NOT NULL,
  `rating-sum` int(255) UNSIGNED NOT NULL,
  `rating-count` int(255) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `accordions`
--

INSERT INTO `accordions` (`id`, `title`, `description`, `rating`, `rating-sum`, `rating-count`) VALUES
(1, 'Выплата неустойки по ДДУ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat quam, malesuada et nisi ac, tincidunt finibus justo. Fusce molestie ultrices augue, sed placerat turpis mollis quis. In aliquam metus in nibh imperdiet, quis imperdiet lacus molestie. Mauris arcu magna, convallis quis dui id, convallis rutrum mauris. Pellentesque elementum arcu sit amet libero feugiat imperdiet. Pellentesque porttitor ac risus quis sagittis. Aliquam ut luctus tortor, vel fermentum nisl. Aenean sed laoreet quam.', 0, 0, 0),
(2, 'Компенсация морального вреда', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat quam, malesuada et nisi ac, tincidunt finibus justo. Fusce molestie ultrices augue, sed placerat turpis mollis quis. In aliquam metus in nibh imperdiet, quis imperdiet lacus molestie. Mauris arcu magna, convallis quis dui id, convallis rutrum mauris. Pellentesque elementum arcu sit amet libero feugiat imperdiet. Pellentesque porttitor ac risus quis sagittis. Aliquam ut luctus tortor, vel fermentum nisl. Aenean sed laoreet quam. Integer pretium et turpis et maximus. Nam quis imperdiet nibh, egestas vestibulum massa. Aenean eu urna condimentum, elementum neque at, convallis augue.', 3, 6, 2),
(3, 'Штраф в размере 50%', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat quam, malesuada et nisi ac, tincidunt finibus justo. Fusce molestie ultrices augue, sed placerat turpis mollis quis.', 4, 8, 2),
(4, 'Компенсация расходов по аренде жилья', 'Integer nec nunc congue, mattis tellus et, hendrerit magna. Mauris pellentesque odio et sem lobortis, non lobortis sapien congue. Vivamus imperdiet justo felis, ut convallis turpis dapibus ac. Quisque ultrices leo accumsan quam pulvinar interdum. Etiam velit dolor, porttitor ac nisl eget, tempor vehicula nulla. Praesent nec lectus vel arcu commodo venenatis. Nullam porttitor placerat ante nec dignissim. Phasellus eu fringilla quam. Aenean ac magna sodales, viverra leo et, feugiat nisi. Mauris non tincidunt felis. Nunc aliquet ultrices elit et lobortis. Pellentesque ipsum ligula, convallis in enim eu, elementum congue eros. Donec hendrerit porta lorem vitae pulvinar. Nullam sodales pretium dui in pellentesque. Proin ut consequat magna, et aliquam lectus. Phasellus accumsan rhoncus sagittis.', 4, 7, 2),
(5, 'Компенсация убытков по ипотеке', 'Вот почему вам следует сосредоточиться на тестировании кампаний, прежде чем делиться ими с пользователями. В противном случае человек может увидеть ваше письмо обрезанным, со смещенным макетом, не отвечающим на запросы или неподдерживаемым содержанием. В результате плохой UX гарантирован, и есть большая вероятность, что клиенты не вернутся. ', 0, 0, 0),
(6, 'Возмещение иных расходов', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed erat quam, malesuada et nisi ac, tincidunt finibus justo. Fusce molestie ultrices augue, sed placerat turpis mollis quis. In aliquam metus in nibh imperdiet, quis imperdiet lacus molestie. Mauris arcu magna, convallis quis dui id, convallis rutrum mauris. Pellentesque elementum arcu sit amet libero feugiat imperdiet. Pellentesque porttitor ac risus quis sagittis. Aliquam ut luctus tortor, vel fermentum nisl.', 4, 13, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accordions`
--
ALTER TABLE `accordions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accordions`
--
ALTER TABLE `accordions`
  MODIFY `id` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
