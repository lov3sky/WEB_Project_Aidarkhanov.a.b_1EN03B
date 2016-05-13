-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 13 2016 г., 21:32
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `webproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `city`) VALUES
(1, 'ÐÐºÑ‚Ð°Ñƒ'),
(2, 'ÐÑÑ‚Ð°Ð½Ð°'),
(3, 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹'),
(4, 'ÐÑ‚Ñ‹Ñ€Ð°Ñƒ'),
(5, 'Ð¢Ð°Ð»Ð´Ñ‹ÐºÐ¾Ñ€Ð³Ð°Ð½'),
(6, 'ÐŸÐµÑ‚Ñ€Ð¾Ð¿Ð°Ð²Ð»'),
(7, 'Ð¨Ñ‹Ð¼ÐºÐµÐ½Ñ‚'),
(8, 'ÐÐºÑ‚Ð¾Ð±Ðµ'),
(9, 'ÐšÑ‹Ð·Ñ‹Ð»Ð¾Ñ€Ð´Ð°');

-- --------------------------------------------------------

--
-- Структура таблицы `confirm`
--

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `surname` text COLLATE utf8_unicode_ci NOT NULL,
  `dadname` text COLLATE utf8_unicode_ci NOT NULL,
  `companyName` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `confirm`
--

INSERT INTO `confirm` (`id`, `name`, `surname`, `dadname`, `companyName`) VALUES
(1, 'ÐÐ·Ð°Ð¼Ð°Ñ‚', 'ÐÐ¹Ð´Ð°Ñ€Ñ…Ð°Ð½Ð¾Ð²', 'Ð‘Ð°Ñ…Ð¸Ñ‚Ð¾Ð²Ð¸Ñ‡', 'Hoola Hoop');

-- --------------------------------------------------------

--
-- Структура таблицы `help`
--

CREATE TABLE `help` (
  `id` int(11) NOT NULL,
  `choice` text COLLATE utf8_unicode_ci NOT NULL,
  `theme` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `help`
--

INSERT INTO `help` (`id`, `choice`, `theme`, `description`, `name`, `email`, `type`) VALUES
(1, 'Ð¢ÐµÑ…Ð½Ð¸Ñ‡ÐµÑÐºÐ°Ñ Ð¿Ð¾Ð´Ð´ÐµÑ€Ð¶ÐºÐ°', 'ÐÐµ Ð¿Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÑ‚ÑÑ Ð²Ð°ÐºÐ°Ð½ÑÐ¸Ñ', 'ÐÐµÐ·Ð½Ð°ÑŽ Ð¿Ð¾Ñ‡ÐµÐ¼Ñƒ, Ð½Ð¾ Ñƒ Ð¼ÐµÐ½Ñ Ð½Ð° ÑÑ‚Ñ€Ð°Ð½Ð¸Ñ†Ðµ Ð²Ð°ÐºÐ°Ð½ÑÐ¸Ð¸ Ð½Ðµ Ð¿Ð¾ÐºÐ°Ð·Ñ‹Ð²Ð°ÐµÑ‚ÑÑ Ð¼Ð¾Ñ Ð²Ð°ÐºÐ°Ð½ÑÐ¸Ñ.', 'Ð‘Ð¸Ñ€ÑÐ¾Ð² ÐÐ½Ð´Ñ€ÐµÐ¹', 'andrey@gmail.com', 1),
(2, 'ÐžÑ‚Ð´ÐµÐ» Ð¼Ð°Ñ€ÐºÐµÑ‚Ð¸Ð½Ð³Ð° Ð¸ Ñ€ÐµÐºÐ»Ð°Ð¼Ñ‹', 'Ð¥Ð¾Ñ‡Ñƒ Ð·Ð°ÐºÐ°Ð·Ð°Ñ‚ÑŒ Ñ€ÐµÐºÐ»Ð°Ð¼Ñƒ', 'Ð¥Ð¾Ñ‡Ñƒ Ð² Ð²Ð°ÑˆÐµÐ¼ ÑÐ°Ð¹Ñ‚Ðµ Ð·Ð°ÐºÐ°Ð·Ð°Ñ‚ÑŒ Ñ€ÐµÐºÐ»Ð°Ð¼Ñƒ', 'Ð‘Ð¸Ñ€ÑÐ¾Ð² ÐÐ½Ð´Ñ€ÐµÐ¹', 'andrey@gmail.com', 1),
(3, 'ÐžÑ‚Ð´ÐµÐ» Ð¿Ð¾ Ñ€Ð°Ð±Ð¾Ñ‚Ðµ Ñ ÑÐ¾Ð¸ÑÐºÐ°Ñ‚ÐµÐ»ÑÐ¼Ð¸', 'Ð¥Ð¾Ñ‡Ñƒ Ð½Ð°Ð½ÑÑ‚ÑŒ Ñ€Ð°Ð±Ð¾Ñ‚Ð½Ð¸ÐºÐ°', 'Ð¥Ð¾Ñ‡Ñƒ Ð½Ð°Ð½ÑÑ‚ÑŒ Ñ€Ð°Ð±Ð¾Ñ‚Ð½Ð¸ÐºÐ°', 'Ð‘Ð¸Ñ€ÑÐ¾Ð² ÐÐ½Ð´Ñ€ÐµÐ¹', 'andrey@gmail.com', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `helprab`
--

CREATE TABLE `helprab` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `theme` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `helpsos`
--

CREATE TABLE `helpsos` (
  `id` int(11) NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `theme` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `queue`
--

CREATE TABLE `queue` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `surname` text COLLATE utf8_unicode_ci NOT NULL,
  `dadname` text COLLATE utf8_unicode_ci NOT NULL,
  `companyName` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `queue`
--

INSERT INTO `queue` (`id`, `name`, `surname`, `dadname`, `companyName`) VALUES
(2, 'ÐÐ·Ð°Ð¼Ð°Ñ‚', 'ÐÐ¹Ð´Ð°Ñ€Ñ…Ð°Ð½Ð¾Ð²', 'Ð‘Ð°Ñ…Ð¸Ñ‚Ð¾Ð²Ð¸Ñ‡', 'Hoola Hoop');

-- --------------------------------------------------------

--
-- Структура таблицы `specialization`
--

CREATE TABLE `specialization` (
  `id` int(11) NOT NULL,
  `specialization` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `specialization`
--

INSERT INTO `specialization` (`id`, `specialization`) VALUES
(1, 'ÐÐ²Ñ‚Ð¾Ð¼Ð¾Ð±Ð¸Ð»ÑŒÐ½Ñ‹Ð¹ Ð±Ð¸Ð·Ð½ÐµÑ'),
(2, 'ÐÐ´Ð¼Ð¸Ð½Ð¸ÑÑ‚Ñ€Ð°Ñ‚Ð¸Ð²Ð½Ñ‹Ð¹ Ð¿ÐµÑ€ÑÐ¾Ð½Ð°Ð»'),
(3, 'Ð‘Ð°Ð½ÐºÐ¸, Ð¸Ð½Ð²ÐµÑÑ‚Ð¸Ñ†Ð¸Ð¸, Ð»Ð¸Ð·Ð¸Ð½Ð³'),
(4, 'Ð’Ñ‹ÑÑˆÐ¸Ð¹ Ð¼ÐµÐ½ÐµÐ´Ð¶Ð¼ÐµÐ½Ñ‚'),
(5, 'Ð”Ð¾Ð±Ñ‹Ñ‡Ð° ÑÑ‹Ñ€ÑŒÑ'),
(6, 'Ð˜Ð½ÑÑ‚Ð°Ð»Ð»ÑÑ†Ð¸Ñ Ð¸ ÑÐµÑ€Ð²Ð¸Ñ'),
(7, 'Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ðµ Ñ‚ÐµÑ…Ð½Ð¾Ð»Ð¾Ð³Ð¸Ð¸, Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚, Ñ‚ÐµÐ»ÐµÐºÐ¾Ð¼'),
(8, 'Ð˜ÑÐºÑƒÑÑÑ‚Ð²Ð¾, Ñ€Ð°Ð·Ð²Ð»ÐµÑ‡ÐµÐ½Ð¸Ñ, Ð¼Ð°ÑÑ-Ð¼ÐµÐ´Ð¸Ð°'),
(9, 'ÐœÐ°Ñ€ÐºÐµÑ‚Ð¸Ð½Ð³, Ñ€ÐµÐºÐ»Ð°Ð¼Ð°, PR'),
(10, 'ÐœÐµÐ´Ð¸Ñ†Ð¸Ð½Ð°, Ñ„Ð°Ñ€Ð¼Ð°Ñ†ÐµÐ²Ñ‚Ð¸ÐºÐ°'),
(11, 'ÐÐ°Ñ‡Ð°Ð»Ð¾ ÐºÐ°Ñ€ÑŒÐµÑ€Ñ‹, ÑÑ‚ÑƒÐ´ÐµÐ½Ñ‚Ñ‹'),
(12, 'Ð¡Ð¿Ð¾Ñ€Ñ‚Ð¸Ð²Ð½Ñ‹Ðµ ÐºÐ»ÑƒÐ±Ñ‹, Ñ„Ð¸Ñ‚Ð½ÐµÑ, ÑÐ°Ð»Ð¾Ð½Ñ‹ ÐºÑ€Ð°ÑÐ¾Ñ‚Ñ‹'),
(13, 'Ð¡Ñ‚Ñ€Ð°Ñ…Ð¾Ð²Ð°Ð½Ð¸Ðµ'),
(14, 'Ð¡Ñ‚Ñ€Ð¾Ð¸Ñ‚ÐµÐ»ÑŒÑÑ‚Ð²Ð¾, Ð½ÐµÐ´Ð²Ð¸Ð¶Ð¸Ð¼Ð¾ÑÑ‚ÑŒ');

-- --------------------------------------------------------

--
-- Структура таблицы `usersrab`
--

CREATE TABLE `usersrab` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dadname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `login` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `telNumber` text COLLATE utf8_unicode_ci NOT NULL,
  `companyType` text COLLATE utf8_unicode_ci NOT NULL,
  `companyName` text COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `count` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `firstBoss` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `usersrab`
--

INSERT INTO `usersrab` (`id`, `name`, `surname`, `dadname`, `gender`, `country`, `email`, `login`, `password`, `telNumber`, `companyType`, `companyName`, `website`, `count`, `city`, `image`, `description`, `address`, `firstBoss`, `type`) VALUES
(1, 'admin', 'adminov', 'adminovich', 'null', 'null', 'admin@site.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'null', 'null', 'null', '0', 'null', 'uploads/admin.jpg', 'null', 'null', 'null', 0),
(2, 'ÐÐ½Ð´Ñ€ÐµÐ¹ ', 'Ð‘Ð¸Ñ€ÑÐ¾Ð²', 'Ð“Ð¸Ñ€Ð¾Ð²Ð¸Ñ‡', 'male', 'Ð Ð¾ÑÑÐ¸Ñ', 'andrey@gmail.com', 'andrey', 'd8578edf8458ce06fbc5bb76a58c5ca4', '877777777721', 'Ð—ÐÐž', 'Hoola Hoop', 'andrey.com', 'Ð¾Ñ‚ 1000 Ð´Ð¾ 3000', 'ÐÐ»Ð¼Ð°Ñ‚Ñ‹', 'uploads/IMG-20150619-WA0023.jpg', 'bla bla bla', 'Ð³Ð¾Ñ€Ð¾Ð´ ÐÐ»Ð¼Ð°Ñ‚Ñ‹, ÑƒÐ»Ð¸Ñ†Ð° ÐÐ»ÑŒ-Ñ„Ð°Ñ€Ð°Ð±Ð¸, 34-4.', 'Ð“ÐµÐ½Ð°Ð´Ð¸Ð¹ Ð‘Ð¾Ñ€Ð¾Ð²', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `userssos`
--

CREATE TABLE `userssos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fatherName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `month` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `login` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `telNumber` text COLLATE utf8_unicode_ci NOT NULL,
  `level` text COLLATE utf8_unicode_ci NOT NULL,
  `university` text COLLATE utf8_unicode_ci NOT NULL,
  `faculty` text COLLATE utf8_unicode_ci NOT NULL,
  `specialization` text COLLATE utf8_unicode_ci NOT NULL,
  `finishYear` int(11) NOT NULL,
  `native` text COLLATE utf8_unicode_ci NOT NULL,
  `english` text COLLATE utf8_unicode_ci NOT NULL,
  `russian` text COLLATE utf8_unicode_ci NOT NULL,
  `prog1` text COLLATE utf8_unicode_ci NOT NULL,
  `prog2` text COLLATE utf8_unicode_ci NOT NULL,
  `prog3` text COLLATE utf8_unicode_ci NOT NULL,
  `work` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `userssos`
--

INSERT INTO `userssos` (`id`, `name`, `surname`, `fatherName`, `country`, `city`, `day`, `month`, `year`, `email`, `login`, `password`, `telNumber`, `level`, `university`, `faculty`, `specialization`, `finishYear`, `native`, `english`, `russian`, `prog1`, `prog2`, `prog3`, `work`, `image`, `type`) VALUES
(1, 'admin', 'adminov', 'adminovich', 'none', 'none', 0, 'none', 0, 'admin@site.kom', 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'none', 'none', 'none', 'none', 0, 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'uploads/admin.jpg', 0),
(2, 'ÐÐ·Ð°Ð¼Ð°Ñ‚', 'ÐÐ¹Ð´Ð°Ñ€Ñ…Ð°Ð½Ð¾Ð²', 'Ð‘Ð°Ñ…Ð¸Ñ‚Ð¾Ð²Ð¸Ñ‡', 'ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½', 'ÐÐºÑ‚Ð°Ñƒ', 21, 'ÐœÐ°Ð¹', 1997, 'azamat.aidarkhanov@is.sdu.edu.kz', 'loveskyJokes', 'd8578edf8458ce06fbc5bb76a58c5ca4', '87026451265', 'ÐÐµÐ¾ÐºÐ¾Ð½Ñ‡ÐµÐ½Ð½Ð¾Ðµ Ð²Ñ‹ÑÑˆÐµÐµ', 'Ð£Ð½Ð¸Ð²ÐµÑ€ÑÐ¸Ñ‚ÐµÑ‚ Ð¸Ð¼. Ð¡ÑƒÐ»ÐµÐ¹Ð¼Ð°Ð½Ð° Ð”ÐµÐ¼Ð¸Ñ€ÐµÐ»ÑŒ', 'Ð¤Ð˜Ð¸Ð•Ð', 'Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ðµ ÑÐ¸ÑÑ‚ÐµÐ¼Ñ‹', 2019, 'ÐšÐ°Ð·Ð°Ñ…ÑÐºÐ¸Ð¹', 'Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾', 'Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾', 'Python', 'Javascript', 'PHP', 'ÐœÐ½Ð¾Ð³Ð¾ Ð³Ð´Ðµ Ñ€Ð°Ð±Ð¾Ñ‚Ð°Ð».', 'uploads/IMG-20150223-WA0053.jpg', 2),
(9, 'Ð“ÐµÐ½Ñ€Ð¸', 'Ð¡Ð°Ð»Ð°Ñ‚Ð¾Ð²', 'ÐžÐ³ÑƒÑ€Ñ†Ð¾Ð²Ð¸Ñ‡', 'ÐšÐ°Ð·Ð°Ñ…ÑÑ‚Ð°Ð½', 'Ð¨Ñ‹Ð¼ÐºÐµÐ½Ñ‚', 3, 'ÐœÐ°Ñ€Ñ‚', 1980, 'ogurec@gmail.com', 'ogurec', 'd8578edf8458ce06fbc5bb76a58c5ca4', '875421369', 'ÐœÐ°Ð³Ð¸ÑÑ‚Ñ€', 'Ð¡Ð”Ð£', 'Ð¤Ð˜Ð¸Ð•Ð', 'Ð’Ð¢Ð¸ÐŸÐž', 2000, 'Ð ÑƒÑÑÐºÐ¸Ð¹', 'Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾', 'Ð¡Ð²Ð¾Ð±Ð¾Ð´Ð½Ð¾', 'PHP', 'Javascript', 'PHP', 'Ð±Ð»Ð° Ð±Ð»Ð° Ð±Ð»Ð° Ð±Ð»Ð° Ð±Ð»Ð°', 'rabUploads/_UOSxD7XWS8.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `vakanciya`
--

CREATE TABLE `vakanciya` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `need` text COLLATE utf8_unicode_ci NOT NULL,
  `time` text COLLATE utf8_unicode_ci NOT NULL,
  `money` text COLLATE utf8_unicode_ci NOT NULL,
  `companyName` text COLLATE utf8_unicode_ci NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `vakanciya`
--

INSERT INTO `vakanciya` (`id`, `name`, `description`, `need`, `time`, `money`, `companyName`, `type`) VALUES
(2, 'ÐÑƒÐ¶ÐµÐ½ PHP Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸Ðº', 'ÐÑƒÐ¶ÐµÐ½ PHP Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚Ñ‡Ð¸Ðº', 'Ð‘Ð°Ð·Ð¾Ð²Ñ‹Ðµ Ð·Ð½Ð°Ð½Ð¸Ñ ÑÐ·Ñ‹ÐºÐ° PHP.', '9:00 - 18:00', '250000Ñ‚Ð³.', 'Hoola Hoop', 'Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ðµ Ñ‚ÐµÑ…Ð½Ð¾Ð»Ð¾Ð³Ð¸Ð¸, Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚, Ñ‚ÐµÐ»ÐµÐºÐ¾Ð¼'),
(3, 'ÐÑƒÐ¶ÐµÐ½ WEB Ð´Ð¸Ð·Ð°Ð¹Ð½ÐµÑ€', 'ÐÑƒÐ¶ÐµÐ½ WEB Ð´Ð¸Ð·Ð°Ð¹Ð½ÐµÑ€', 'Ð—Ð½Ð°Ð½Ð¸Ñ HTML&CSS&PHP&Javascript', '9:00 - 18:00', '250000Ñ‚Ð³.', 'Hoola Hoop', 'Ð˜Ð½Ñ„Ð¾Ñ€Ð¼Ð°Ñ†Ð¸Ð¾Ð½Ð½Ñ‹Ðµ Ñ‚ÐµÑ…Ð½Ð¾Ð»Ð¾Ð³Ð¸Ð¸, Ð¸Ð½Ñ‚ÐµÑ€Ð½ÐµÑ‚, Ñ‚ÐµÐ»ÐµÐºÐ¾Ð¼');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `helprab`
--
ALTER TABLE `helprab`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `helpsos`
--
ALTER TABLE `helpsos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `usersrab`
--
ALTER TABLE `usersrab`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userssos`
--
ALTER TABLE `userssos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vakanciya`
--
ALTER TABLE `vakanciya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `help`
--
ALTER TABLE `help`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `helprab`
--
ALTER TABLE `helprab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `helpsos`
--
ALTER TABLE `helpsos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `queue`
--
ALTER TABLE `queue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `specialization`
--
ALTER TABLE `specialization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `usersrab`
--
ALTER TABLE `usersrab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `userssos`
--
ALTER TABLE `userssos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `vakanciya`
--
ALTER TABLE `vakanciya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
