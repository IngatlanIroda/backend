-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Ápr 29. 11:58
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ingatlan_iroda`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `arvaltozas`
--

CREATE TABLE `arvaltozas` (
  `ing_id` bigint(20) UNSIGNED NOT NULL,
  `meddig` date NOT NULL,
  `regi_ar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `bemutatas`
--

CREATE TABLE `bemutatas` (
  `ing_id` bigint(20) UNSIGNED NOT NULL,
  `bemutatas_datuma` date NOT NULL,
  `partner` bigint(20) UNSIGNED NOT NULL,
  `dolgozo` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `fotos`
--

CREATE TABLE `fotos` (
  `foto_id` bigint(20) UNSIGNED NOT NULL,
  `ingatlan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ingatlans`
--

CREATE TABLE `ingatlans` (
  `ing_id` bigint(20) UNSIGNED NOT NULL,
  `ing_tipus` bigint(20) UNSIGNED NOT NULL,
  `futes_tipus` bigint(20) UNSIGNED NOT NULL,
  `nagysag` int(11) NOT NULL,
  `szobaszam` smallint(6) NOT NULL,
  `erkely` tinyint(1) NOT NULL DEFAULT 0,
  `terasz` tinyint(1) NOT NULL DEFAULT 0,
  `kert` tinyint(1) NOT NULL DEFAULT 0,
  `telepules` bigint(20) UNSIGNED NOT NULL,
  `cim` varchar(255) NOT NULL,
  `leiras` text NOT NULL,
  `ugytipus` varchar(1) NOT NULL,
  `user` bigint(20) UNSIGNED NOT NULL,
  `hird_feladas_datuma` date NOT NULL,
  `hird_lejarata` date NOT NULL,
  `utolso_modositas_datuma` date NOT NULL,
  `ar` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `ingatlans`
--

INSERT INTO `ingatlans` (`ing_id`, `ing_tipus`, `futes_tipus`, `nagysag`, `szobaszam`, `erkely`, `terasz`, `kert`, `telepules`, `cim`, `leiras`, `ugytipus`, `user`, `hird_feladas_datuma`, `hird_lejarata`, `utolso_modositas_datuma`, `ar`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 153, 9, 0, 0, 0, 4, '1531 Szikszó, Bakos tere 1.', 'Adipisci natus reiciendis omnis et. Nisi cumque itaque aut et repudiandae. Sit corporis repudiandae perspiciatis at et.', '1', 3, '1974-06-26', '1994-03-26', '1984-03-05', 33141315, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(2, 1, 4, 183, 10, 0, 0, 0, 6, '0470 Letenye, Illés sor 973.', 'Omnis et aut nostrum autem ullam fuga odio. Repellat dolorem qui architecto voluptatem quaerat. Suscipit aperiam deleniti distinctio pariatur dolor.', '1', 1, '2004-03-20', '1993-01-12', '2022-11-16', 19210921, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(3, 2, 5, 260, 15, 0, 0, 0, 8, '9517 Pécs, Georgina rakpart 17. 52. emelet', 'Eos quam et sapiente. Nihil consequuntur ut est dolorum. Consequatur qui qui et ipsa voluptates. Laudantium unde accusamus in aspernatur est facere quis.', '1', 2, '1980-07-14', '1976-11-29', '1972-10-26', 59652951, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(4, 2, 6, 258, 14, 0, 0, 0, 1, '1311 Budapest, Rebeka mélyút 93. 06. ajtó', 'Excepturi cum neque corporis qui. Cum odio enim qui rem perferendis. Ea consequatur ut dignissimos voluptatum et aliquid.', '1', 2, '1998-01-29', '2003-04-26', '2010-09-03', 26801605, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(5, 1, 5, 14, 8, 0, 0, 0, 6, '5380 Budapest, Adél gát 68. 11. emelet', 'Distinctio molestiae natus unde et amet quia. Voluptatem et est aut accusantium a ea minus vel. Aut placeat dolorum assumenda voluptas aut dolores. Reprehenderit voluptatem sint ducimus ducimus eos.', '1', 3, '1980-12-01', '2019-11-16', '1998-07-31', 36329895, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(6, 2, 5, 118, 5, 0, 0, 0, 14, '9752 Budapest, Bálint játszótér 20. 74. ajtó', 'Ipsam laudantium maiores velit consequatur qui earum. Consequuntur ipsam eaque libero tenetur. Qui enim porro dolor mollitia. Voluptatum illo fuga rerum sit ea temporibus ad.', '1', 1, '1984-06-07', '1977-01-17', '2014-03-02', 32947173, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(7, 2, 4, 91, 2, 0, 0, 0, 11, '5782 Szombathely, Hajdu országút 91.', 'Libero et et temporibus odio aut blanditiis velit. Ipsam amet et nihil ut illo inventore soluta. Voluptatem provident voluptatem a voluptate omnis architecto doloremque.', '1', 3, '1974-07-10', '2022-02-07', '2009-03-07', 66627140, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(8, 3, 4, 228, 10, 0, 0, 0, 10, '5034 Budapest, János híd 143.', 'Et necessitatibus repellat sed voluptatum molestiae quo. Voluptas similique corrupti aut eum necessitatibus consequatur unde quas. Doloribus dolor dolores nulla non est qui voluptate. Porro est consequuntur fugit beatae et nesciunt.', '1', 2, '1994-01-01', '1992-09-28', '1996-10-26', 41798280, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(9, 1, 5, 121, 14, 0, 0, 0, 15, '9245 Szigetszentmiklós, Pál dűlősor 33.', 'Omnis molestiae quos odio omnis tempore eos accusamus. Molestiae sit deserunt autem eos blanditiis dolorem dolor sed. Deserunt aut quidem facere id ut omnis quo. Et cupiditate voluptatum sint.', '1', 3, '1992-07-20', '1986-01-31', '1980-07-23', 74179134, '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(10, 2, 6, 45, 10, 0, 0, 0, 4, '0598 Debrecen, Áron országút 57.', 'Delectus debitis optio molestiae dolores placeat et. Non et ipsum nihil dignissimos aut ipsum a. Deleniti amet pariatur delectus repellat eum et adipisci.', '1', 1, '1971-06-18', '1996-01-17', '2019-12-31', 47618279, '2024-04-28 15:07:59', '2024-04-28 15:07:59');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ingatlan_futes_tipuses`
--

CREATE TABLE `ingatlan_futes_tipuses` (
  `tipus_id` bigint(20) UNSIGNED NOT NULL,
  `tipus_megnevezes` varchar(50) NOT NULL,
  `kategoria` char(5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `ingatlan_futes_tipuses`
--

INSERT INTO `ingatlan_futes_tipuses` (`tipus_id`, `tipus_megnevezes`, `kategoria`, `created_at`, `updated_at`) VALUES
(1, 'családi ház', 'i', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(2, 'téglalakás', 'i', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(3, 'panellakás', 'i', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(4, 'távfűtés', 'f', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(5, 'gáz', 'f', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(6, 'padlófűtés', 'f', '2024-04-28 15:07:55', '2024-04-28 15:07:55');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_01_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_22_131411_create_telepules_table', 1),
(6, '2024_02_22_132136_create_ingatlan_futes_tipuses_table', 1),
(7, '2024_02_24_112327_create_ingatlans_table', 1),
(8, '2024_03_03_105153_create_preferencias_table', 1),
(9, '2024_03_03_105313_create_arvaltozas_table', 1),
(10, '2024_03_03_105352_create_fotos_table', 1),
(11, '2024_03_03_105817_bemutatas', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `preferencias`
--

CREATE TABLE `preferencias` (
  `partner` bigint(20) UNSIGNED NOT NULL,
  `tipus_id` bigint(20) UNSIGNED NOT NULL,
  `telepules_id` bigint(20) UNSIGNED NOT NULL,
  `hirlevel` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `telepules`
--

CREATE TABLE `telepules` (
  `telepules_id` bigint(20) UNSIGNED NOT NULL,
  `telepules_megnevezes` varchar(60) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `telepules`
--

INSERT INTO `telepules` (`telepules_id`, `telepules_megnevezes`, `created_at`, `updated_at`) VALUES
(1, 'Budapest', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(2, 'Szentendre', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(3, 'Miskolc', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(4, 'Sopron', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(5, 'Zalaegerszeg', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(6, 'Szeged', '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(7, 'Budapest', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(8, 'Budapest', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(9, 'Budapest', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(10, 'Sarkad', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(11, 'Budapest', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(12, 'Dunaújváros', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(13, 'Budapest', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(14, 'Kecskemét', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(15, 'Budapest', '2024-04-28 15:07:59', '2024-04-28 15:07:59'),
(16, 'Székesfehérvár', '2024-04-28 15:07:59', '2024-04-28 15:07:59');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `szul_ido` date DEFAULT NULL,
  `jogosultsag` varchar(255) NOT NULL DEFAULT 'user',
  `aktiv` tinyint(1) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`user_id`, `name`, `szul_ido`, `jogosultsag`, `aktiv`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alexa', '1998-03-12', 'admin', 1, 'alexa@gmail.com', NULL, '$2y$12$RuYw.BfIqYX18RmaHY15U.S94Fh3jSSyNgSFfN9HxwKHFKIdZrs/.', NULL, '2024-04-28 15:07:54', '2024-04-28 15:07:54'),
(2, 'Bea', '1998-01-01', 'admin', 1, 'teszt@gmail.com', NULL, '$2y$12$CVzbQxtCTm6Z4JOf/VzT3.PrBzRkp32LyNH90yIBLZyhPl9Th.LGi', NULL, '2024-04-28 15:07:54', '2024-04-28 15:07:54'),
(3, 'Gyongyi', '1998-01-01', 'user', 1, 'gyongyi@gmail.com', NULL, '$2y$12$H/7jaXPQzGdRbI9iElXNt.LEA9Dv4DbeujJLupq4RwKU2RXtlrgXC', NULL, '2024-04-28 15:07:55', '2024-04-28 15:07:55'),
(4, 'Haleigh Schoen I', '1982-12-10', 'user', 1, 'hills.kiley@example.net', '2024-04-28 15:07:59', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'y5eBmMuDKK', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(5, 'Perry Walsh', '1977-09-30', 'user', 1, 'adare@example.org', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'uJLIIQTywO', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(6, 'Ova Quitzon', '1992-10-04', 'user', 0, 'jakubowski.demarco@example.org', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', '3GNG5h9eR1', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(7, 'Willie Fritsch', '2000-12-27', 'user', 1, 'sincere71@example.org', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'YSRxDKX6jY', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(8, 'Rogers Blanda DVM', '1971-12-02', 'user', 0, 'cronin.brando@example.net', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'ZTo6Tkkqsd', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(9, 'Idella Rippin', '2020-08-29', 'user', 1, 'tamia.stanton@example.net', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'VPPpGcqrV6', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(10, 'Robert Pouros', '1981-06-08', 'user', 1, 'salvatore.mcglynn@example.org', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'pspFGfQYFD', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(11, 'Deja Hudson', '2019-03-02', 'user', 0, 'oboyer@example.net', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'Kzbj3Yv8ex', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(12, 'Meagan Huel DVM', '2000-11-10', 'user', 1, 'hbailey@example.net', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', '3XI0kEdvlH', '2024-04-28 15:08:00', '2024-04-28 15:08:00'),
(13, 'Joanie Waelchi', '1971-12-06', 'user', 0, 'favian.sawayn@example.org', '2024-04-28 15:08:00', '$2y$12$p/JDX7mYTzYswfcSH1PSoO8yHuRXR9hYa7jgxxrWMgQHtVBjbt6ly', 'xMrNf6NpDU', '2024-04-28 15:08:00', '2024-04-28 15:08:00');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `arvaltozas`
--
ALTER TABLE `arvaltozas`
  ADD PRIMARY KEY (`ing_id`,`meddig`);

--
-- A tábla indexei `bemutatas`
--
ALTER TABLE `bemutatas`
  ADD PRIMARY KEY (`ing_id`,`bemutatas_datuma`),
  ADD KEY `bemutatas_partner_foreign` (`partner`),
  ADD KEY `bemutatas_dolgozo_foreign` (`dolgozo`);

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`foto_id`),
  ADD KEY `fotos_ingatlan_foreign` (`ingatlan`);

--
-- A tábla indexei `ingatlans`
--
ALTER TABLE `ingatlans`
  ADD PRIMARY KEY (`ing_id`),
  ADD KEY `ingatlans_ing_tipus_foreign` (`ing_tipus`),
  ADD KEY `ingatlans_futes_tipus_foreign` (`futes_tipus`),
  ADD KEY `ingatlans_telepules_foreign` (`telepules`),
  ADD KEY `ingatlans_user_foreign` (`user`);

--
-- A tábla indexei `ingatlan_futes_tipuses`
--
ALTER TABLE `ingatlan_futes_tipuses`
  ADD PRIMARY KEY (`tipus_id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`partner`,`tipus_id`,`telepules_id`),
  ADD KEY `preferencias_tipus_id_foreign` (`tipus_id`),
  ADD KEY `preferencias_telepules_id_foreign` (`telepules_id`);

--
-- A tábla indexei `telepules`
--
ALTER TABLE `telepules`
  ADD PRIMARY KEY (`telepules_id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `fotos`
--
ALTER TABLE `fotos`
  MODIFY `foto_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `ingatlans`
--
ALTER TABLE `ingatlans`
  MODIFY `ing_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `ingatlan_futes_tipuses`
--
ALTER TABLE `ingatlan_futes_tipuses`
  MODIFY `tipus_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `telepules`
--
ALTER TABLE `telepules`
  MODIFY `telepules_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `arvaltozas`
--
ALTER TABLE `arvaltozas`
  ADD CONSTRAINT `arvaltozas_ing_id_foreign` FOREIGN KEY (`ing_id`) REFERENCES `ingatlans` (`ing_id`);

--
-- Megkötések a táblához `bemutatas`
--
ALTER TABLE `bemutatas`
  ADD CONSTRAINT `bemutatas_dolgozo_foreign` FOREIGN KEY (`dolgozo`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `bemutatas_ing_id_foreign` FOREIGN KEY (`ing_id`) REFERENCES `ingatlans` (`ing_id`),
  ADD CONSTRAINT `bemutatas_partner_foreign` FOREIGN KEY (`partner`) REFERENCES `users` (`user_id`);

--
-- Megkötések a táblához `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fotos_ingatlan_foreign` FOREIGN KEY (`ingatlan`) REFERENCES `ingatlans` (`ing_id`);

--
-- Megkötések a táblához `ingatlans`
--
ALTER TABLE `ingatlans`
  ADD CONSTRAINT `ingatlans_futes_tipus_foreign` FOREIGN KEY (`futes_tipus`) REFERENCES `ingatlan_futes_tipuses` (`tipus_id`),
  ADD CONSTRAINT `ingatlans_ing_tipus_foreign` FOREIGN KEY (`ing_tipus`) REFERENCES `ingatlan_futes_tipuses` (`tipus_id`),
  ADD CONSTRAINT `ingatlans_telepules_foreign` FOREIGN KEY (`telepules`) REFERENCES `telepules` (`telepules_id`),
  ADD CONSTRAINT `ingatlans_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`user_id`);

--
-- Megkötések a táblához `preferencias`
--
ALTER TABLE `preferencias`
  ADD CONSTRAINT `preferencias_partner_foreign` FOREIGN KEY (`partner`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `preferencias_telepules_id_foreign` FOREIGN KEY (`telepules_id`) REFERENCES `telepules` (`telepules_id`),
  ADD CONSTRAINT `preferencias_tipus_id_foreign` FOREIGN KEY (`tipus_id`) REFERENCES `ingatlan_futes_tipuses` (`tipus_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
