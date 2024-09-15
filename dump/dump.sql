-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: erm_db
-- Время создания: Июн 18 2024 г., 21:42
-- Версия сервера: 8.0.36
-- Версия PHP: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `erm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_event` date NOT NULL,
  `venue_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name`, `poster`, `date_event`, `venue_id`) VALUES
(1, 'Ea ut et quasi.', 'https://via.placeholder.com/640x480.png/009933?text=esse', '2016-10-10', 19),
(2, 'Commodi nostrum omnis.', 'https://via.placeholder.com/640x480.png/009911?text=eaque', '1981-03-27', 13),
(3, 'Quod voluptas molestiae.', 'https://via.placeholder.com/640x480.png/002288?text=ratione', '1973-02-25', 12),
(4, 'Consequatur laborum cum odio.', 'https://via.placeholder.com/640x480.png/000066?text=aut', '1995-03-24', 5),
(5, 'Ut nobis sint esse.', 'https://via.placeholder.com/640x480.png/001188?text=rerum', '1997-04-29', 6),
(6, 'Repellat autem.', 'https://via.placeholder.com/640x480.png/00cc55?text=fuga', '1990-01-19', 14),
(7, 'Consequuntur aperiam incidunt inventore quia.', 'https://via.placeholder.com/640x480.png/008877?text=molestiae', '2021-05-09', 1),
(8, 'Rem beatae rerum.', 'https://via.placeholder.com/640x480.png/005599?text=et', '1997-07-05', 19),
(9, 'Accusamus nisi tenetur occaecati deleniti.', 'https://via.placeholder.com/640x480.png/006688?text=rerum', '1992-06-14', 8),
(10, 'Sed harum rerum.', 'https://via.placeholder.com/640x480.png/00ee77?text=commodi', '1980-01-24', 5),
(11, 'Debitis animi reprehenderit.', 'https://via.placeholder.com/640x480.png/00aaff?text=dolore', '2012-01-15', 10),
(12, 'Quam iste est.', 'https://via.placeholder.com/640x480.png/00bbff?text=omnis', '2001-09-10', 8),
(13, 'Ipsa aut necessitatibus.', 'https://via.placeholder.com/640x480.png/002277?text=tempora', '1974-08-02', 6),
(14, 'Et non repellat.', 'https://via.placeholder.com/640x480.png/000044?text=nobis', '1995-08-18', 5),
(15, 'Impedit quod illo.', 'https://via.placeholder.com/640x480.png/00bb11?text=eos', '1971-08-21', 7),
(16, 'Molestias consequuntur dolores explicabo.', 'https://via.placeholder.com/640x480.png/00ff66?text=aut', '1989-07-13', 12),
(17, 'Natus hic eum.', 'https://via.placeholder.com/640x480.png/00ee22?text=voluptate', '2011-03-14', 7),
(18, 'Optio ea itaque nulla.', 'https://via.placeholder.com/640x480.png/0022ff?text=est', '2006-06-14', 1),
(19, 'Repudiandae aspernatur.', 'https://via.placeholder.com/640x480.png/009999?text=repudiandae', '1978-01-01', 8),
(20, 'Facere laudantium ea.', 'https://via.placeholder.com/640x480.png/009933?text=laboriosam', '1982-03-13', 7),
(21, 'Blanditiis consequatur.', 'https://via.placeholder.com/640x480.png/002200?text=consectetur', '2004-08-16', 17),
(22, 'Quaerat commodi deserunt perspiciatis.', 'https://via.placeholder.com/640x480.png/0066cc?text=praesentium', '2016-01-10', 3),
(23, 'Est est illum dolore.', 'https://via.placeholder.com/640x480.png/0044aa?text=autem', '1971-08-21', 11),
(24, 'Quisquam quam sint.', 'https://via.placeholder.com/640x480.png/00ee00?text=et', '1989-11-30', 7),
(25, 'Nobis sint excepturi.', 'https://via.placeholder.com/640x480.png/004499?text=tempora', '1991-06-05', 6),
(26, 'Ad est.', 'https://via.placeholder.com/640x480.png/000077?text=asperiores', '2009-01-30', 17),
(27, 'Quia deserunt quia.', 'https://via.placeholder.com/640x480.png/006622?text=fuga', '2023-11-10', 9),
(28, 'Ad tempora commodi.', 'https://via.placeholder.com/640x480.png/001133?text=commodi', '1990-01-23', 19),
(29, 'Odio ipsam soluta qui.', 'https://via.placeholder.com/640x480.png/00aadd?text=impedit', '2019-02-22', 3),
(30, 'Assumenda consequuntur ut laboriosam.', 'https://via.placeholder.com/640x480.png/003333?text=vel', '2007-08-24', 3),
(31, 'In quos omnis.', 'https://via.placeholder.com/640x480.png/00ff88?text=maiores', '1980-08-08', 17),
(32, 'Quo consequatur reiciendis distinctio.', 'https://via.placeholder.com/640x480.png/0099cc?text=saepe', '1993-03-05', 11),
(33, 'Autem est.', 'https://via.placeholder.com/640x480.png/0000bb?text=est', '1996-11-07', 10),
(34, 'Porro vero.', 'https://via.placeholder.com/640x480.png/00ee88?text=aut', '1991-09-04', 20),
(35, 'Esse iusto expedita quia.', 'https://via.placeholder.com/640x480.png/007733?text=ea', '2015-06-14', 4),
(36, 'Occaecati ipsam et.', 'https://via.placeholder.com/640x480.png/00ccff?text=ut', '1977-06-20', 2),
(37, 'Aspernatur ut autem cumque omnis.', 'https://via.placeholder.com/640x480.png/00ffee?text=consequatur', '2022-11-17', 7),
(38, 'Officia aliquam illum.', 'https://via.placeholder.com/640x480.png/0022cc?text=vitae', '1985-06-28', 14),
(39, 'Accusamus numquam molestiae harum.', 'https://via.placeholder.com/640x480.png/0033bb?text=veniam', '1986-08-04', 14),
(40, 'Corporis ut.', 'https://via.placeholder.com/640x480.png/00dd55?text=eos', '2019-05-12', 2),
(41, 'Reprehenderit cum ipsum voluptas.', 'https://via.placeholder.com/640x480.png/00bbaa?text=vel', '2009-08-20', 1),
(42, 'Numquam dolores.', 'https://via.placeholder.com/640x480.png/0099bb?text=alias', '1997-04-20', 2),
(43, 'Velit et vel.', 'https://via.placeholder.com/640x480.png/0077aa?text=enim', '1995-07-28', 1),
(44, 'Temporibus est fugiat eum nulla.', 'https://via.placeholder.com/640x480.png/00ffcc?text=adipisci', '2013-01-20', 12),
(45, 'Inventore perferendis et quia.', 'https://via.placeholder.com/640x480.png/00dddd?text=saepe', '2004-04-04', 3),
(46, 'Molestiae et.', 'https://via.placeholder.com/640x480.png/000066?text=a', '1991-09-29', 3),
(47, 'Aperiam nostrum hic.', 'https://via.placeholder.com/640x480.png/0033ff?text=sit', '2019-09-25', 5),
(48, 'Deserunt porro sapiente.', 'https://via.placeholder.com/640x480.png/00aa00?text=voluptas', '2022-09-30', 14),
(49, 'Nostrum itaque vero.', 'https://via.placeholder.com/640x480.png/00aa33?text=voluptatem', '1971-05-14', 7),
(50, 'In distinctio suscipit repudiandae.', 'https://via.placeholder.com/640x480.png/00dd33?text=cum', '1994-11-07', 13);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_01_215723_create_roles_table', 1),
(7, '2024_05_01_220033_create_user_roles_table', 1),
(8, '2024_06_12_190653_create_venues_table', 1),
(9, '2024_06_12_191138_create_events_table', 1);

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
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2024-06-17 22:14:18', '2024-06-17 22:14:18'),
(2, 'User', 'user', '2024-06-17 22:14:18', '2024-06-17 22:14:18');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2024-06-17 22:14:18', '$2y$12$PRNwWy8enN8pvjxnHwwvz.FZuRa/SFnnn37g1sNJkrMGGmEkacOiy', 'Rjg3jnmGqt', '2024-06-17 22:14:18', '2024-06-17 22:14:18');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `venues`
--

CREATE TABLE `venues` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `venues`
--

INSERT INTO `venues` (`id`, `name`, `slug`) VALUES
(1, 'Johnstonstad', 'johnstonstad'),
(2, 'Schadenville', 'schadenville'),
(3, 'West Morton', 'west-morton'),
(4, 'Lake Liza', 'lake-liza'),
(5, 'South Chasity', 'south-chasity'),
(6, 'Botsfordstad', 'botsfordstad'),
(7, 'Ornfort', 'ornfort'),
(8, 'West Rodrigo', 'west-rodrigo'),
(9, 'Hermannberg', 'hermannberg'),
(10, 'East Harveyborough', 'east-harveyborough'),
(11, 'Scotview', 'scotview'),
(12, 'West Zionbury', 'west-zionbury'),
(13, 'Johnniechester', 'johnniechester'),
(14, 'North Deangeloville', 'north-deangeloville'),
(15, 'Chaddview', 'chaddview'),
(16, 'Shanellehaven', 'shanellehaven'),
(17, 'Audreannefurt', 'audreannefurt'),
(18, 'Beerland', 'beerland'),
(19, 'Wymanville', 'wymanville'),
(20, 'Hillsbury', 'hillsbury');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_venue_id_index` (`venue_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`),
  ADD KEY `roles_id_index` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_roles_user_id_role_id_unique` (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Индексы таблицы `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_venue_id_foreign` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
