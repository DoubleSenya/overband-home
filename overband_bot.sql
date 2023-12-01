-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: db:3306
-- Время создания: Дек 01 2023 г., 20:30
-- Версия сервера: 8.0.33
-- Версия PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `overband_bot`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
                           `id` int NOT NULL,
                           `chat_id` int DEFAULT NULL,
                           `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                           `contact` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                           `project_type_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `project_types`
--

CREATE TABLE `project_types` (
                                 `id` int NOT NULL,
                                 `type` varchar(63) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `project_types`
--

INSERT INTO `project_types` (`id`, `type`) VALUES
                                               (1, 'Лендинг'),
                                               (2, 'Сайт'),
                                               (3, 'CRM-система'),
                                               (4, 'Другое'),
                                               (5, 'Не знаю/не определился');

-- --------------------------------------------------------

--
-- Структура таблицы `scenario_history`
--

CREATE TABLE `scenario_history` (
                                    `id` int NOT NULL,
                                    `chat_id` int NOT NULL,
                                    `step` int NOT NULL,
                                    `message` varchar(1023) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                                    `scenario_type_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `scenario_types`
--

CREATE TABLE `scenario_types` (
                                  `id` int NOT NULL,
                                  `type` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `scenario_types`
--

INSERT INTO `scenario_types` (`id`, `type`) VALUES
                                                (1, 'order_project'),
                                                (2, 'menu'),
                                                (3, 'start');

-- --------------------------------------------------------

--
-- Структура таблицы `state_chats`
--

CREATE TABLE `state_chats` (
                               `id` int NOT NULL,
                               `chat_id` int NOT NULL,
                               `scenario_type_id` int DEFAULT NULL,
                               `step` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
    ADD PRIMARY KEY (`id`),
  ADD KEY `project_type_id` (`project_type_id`);

--
-- Индексы таблицы `project_types`
--
ALTER TABLE `project_types`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `scenario_history`
--
ALTER TABLE `scenario_history`
    ADD PRIMARY KEY (`id`),
  ADD KEY `scenario_type_id` (`scenario_type_id`);

--
-- Индексы таблицы `scenario_types`
--
ALTER TABLE `scenario_types`
    ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `state_chats`
--
ALTER TABLE `state_chats`
    ADD PRIMARY KEY (`id`),
  ADD KEY `scenario_type_id` (`scenario_type_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `project_types`
--
ALTER TABLE `project_types`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `scenario_history`
--
ALTER TABLE `scenario_history`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `scenario_types`
--
ALTER TABLE `scenario_types`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `state_chats`
--
ALTER TABLE `state_chats`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `clients`
--
ALTER TABLE `clients`
    ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`project_type_id`) REFERENCES `project_types` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `scenario_history`
--
ALTER TABLE `scenario_history`
    ADD CONSTRAINT `scenario_history_ibfk_1` FOREIGN KEY (`scenario_type_id`) REFERENCES `scenario_types` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `state_chats`
--
ALTER TABLE `state_chats`
    ADD CONSTRAINT `state_chats_ibfk_1` FOREIGN KEY (`scenario_type_id`) REFERENCES `scenario_types` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
