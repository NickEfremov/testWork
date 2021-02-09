-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 08 2021 г., 16:46
-- Версия сервера: 8.0.22
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Cutter`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2021_02_01_115754_create_cutter_urls_table', 1),
(6, '2014_10_12_000000_create_users_table', 2),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2019_08_19_000000_create_failed_jobs_table', 2),
(9, '2021_02_04_071423_create_urls_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `urls`
--

CREATE TABLE `urls` (
  `id` bigint UNSIGNED NOT NULL,
  `origUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter` int NOT NULL DEFAULT '0',
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `urls`
--

INSERT INTO `urls` (`id`, `origUrl`, `genUrl`, `counter`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/MJMJZKz1', 0, '2', '2021-02-07 12:35:03', '2021-02-07 12:35:03'),
(2, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/kMJrZZdz5', 1, '2', '2021-02-07 12:35:29', '2021-02-07 12:35:44'),
(3, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/odA4Dq3E', 0, '1', '2021-02-07 12:44:02', '2021-02-07 12:44:02'),
(4, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/8lCDfr6A', 1, NULL, '2021-02-07 13:40:55', '2021-02-07 13:41:07'),
(5, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/5JGf78gShZ', 4, '1', '2021-02-07 13:44:12', '2021-02-08 05:04:20'),
(6, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/wX90tsc6A', 2, '2', '2021-02-07 13:45:15', '2021-02-08 02:38:38'),
(7, 'https://laravel.su/docs/5.0/validation', 'http://127.0.0.1:8000/NbdDLMgL', 1, '1', '2021-02-07 14:30:15', '2021-02-07 14:30:23'),
(8, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/FtvZOdQ5', 0, NULL, '2021-02-08 02:34:45', '2021-02-08 02:34:45'),
(9, 'https://laravel.ru', 'http://127.0.0.1:8000/0inB4Wa9', 0, NULL, '2021-02-08 02:35:55', '2021-02-08 02:35:55'),
(10, 'http://laravel.ru', 'http://127.0.0.1:8000/O5m8LlFG', 0, NULL, '2021-02-08 02:36:06', '2021-02-08 02:36:06'),
(11, 'https://laravel.com/docs/8.x/queries', 'http://127.0.0.1:8000/h5dB0bi5', 1, NULL, '2021-02-08 02:37:06', '2021-02-08 02:37:20'),
(12, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/DEB325Tk', 0, '1', '2021-02-08 02:39:48', '2021-02-08 02:39:48'),
(13, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/4qgTP41k', 0, '1', '2021-02-08 02:40:02', '2021-02-08 02:40:02'),
(14, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/veWdSwwewedLU', 1, '1', '2021-02-08 02:41:05', '2021-02-08 02:41:54'),
(15, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/X44jP1dR', 1, NULL, '2021-02-08 03:21:31', '2021-02-08 03:21:40'),
(16, 'https://stackoverflow.com/questions/30019627/redirectroute-with-parameter-in-url-in-laravel-5', 'http://127.0.0.1:8000/HZOmCV5H', 0, '1', '2021-02-08 03:57:32', '2021-02-08 03:57:32');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$W9Hi5CtA85C1Th18dlg9nuKwHc0/gIzudSrYaHnBjBB9E9M2MpfSu', 1, NULL, '2021-02-07 12:34:30', '2021-02-07 12:34:30'),
(2, 'nick', 'o195kc@gmail.com', '$2y$10$AlZzBvAzzXfbs719geubOu.ZYTAhH/YOC/6IUlYcUQz.Guzhymp2e', 0, NULL, '2021-02-07 12:34:45', '2021-02-07 12:34:45');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `urls`
--
ALTER TABLE `urls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
