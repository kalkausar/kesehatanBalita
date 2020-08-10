-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2020 pada 15.23
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cluster`
--

CREATE TABLE `cluster` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kabupaten_id` int(10) UNSIGNED DEFAULT NULL,
  `tahun_id` int(10) UNSIGNED DEFAULT NULL,
  `cluster` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cluster`
--

INSERT INTO `cluster` (`id`, `kabupaten_id`, `tahun_id`, `cluster`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2', '2020-08-08 04:22:48', '2020-08-08 04:22:48'),
(2, 2, 1, '3', '2020-08-09 10:40:26', '2020-08-09 10:40:26'),
(3, 3, 1, '3', '2020-08-09 10:44:00', '2020-08-09 10:44:00'),
(4, 6, 1, '1', '2020-08-09 22:00:36', '2020-08-09 22:00:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mentah`
--

CREATE TABLE `data_mentah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jum_balita` int(11) NOT NULL,
  `jum_perkiraan` int(11) NOT NULL,
  `jum_ditemukan` int(11) NOT NULL,
  `kabupaten_id` int(10) UNSIGNED DEFAULT NULL,
  `tahun_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_mentah`
--

INSERT INTO `data_mentah` (`id`, `jum_balita`, `jum_perkiraan`, `jum_ditemukan`, `kabupaten_id`, `tahun_id`, `created_at`, `updated_at`) VALUES
(2, 562323, 56232, 16725, 1, 1, '2020-08-06 04:33:39', '2020-08-06 04:33:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_olah`
--

CREATE TABLE `data_olah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iterasi_id` int(10) UNSIGNED DEFAULT NULL,
  `kabupaten_id` int(10) UNSIGNED DEFAULT NULL,
  `tahun_id` int(10) UNSIGNED DEFAULT NULL,
  `c1` decimal(12,6) NOT NULL,
  `c2` decimal(12,6) NOT NULL,
  `c3` decimal(12,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_olah`
--

INSERT INTO `data_olah` (`id`, `iterasi_id`, `kabupaten_id`, `tahun_id`, `c1`, `c2`, `c3`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '544886.870000', '354068.059200', '361555.190000', '2020-08-06 04:41:19', '2020-08-06 04:41:19'),
(2, 2, 1, 1, '503729.993000', '284466.411000', '407859.549700', '2020-08-07 07:56:58', '2020-08-07 07:56:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `title`, `path`, `slug`, `status`, `author`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Polusi dan Virus Ancaman Nyata, Ini Cara Mudah Bunda Lindungi Buah Hati', NULL, 'polusi-dan-virus-ancaman-nyata-ini-cara-mudah-bunda-lindungi-buah-hati', '1', 'Kal Kausar', '<p><strong>Jakarta</strong>&nbsp;Seiring dengan pertumbuhan jumlah kendaraan bermotor dan kawasan hijau yang berkurang karena banyak gedung-gedung berdiri menyebabkan kualitas udara yang kotor atau polusi semakin meningkat. Akibat polusi jahat ini, membuat penyebaran penyakit semakin mudah terutama infeksi.</p>\r\n\r\n<p>Berbeda dengan orang dewasa, anak-anak lebih rentan terhadap polusi karena maturasi dan fungsi organ yang belum sempurna terutama pada 2-3 tahun pertama. Dikutip dari data WHO, setiap harinya 93 persen anak didunia (&lt;15 tahun), dimana 630 juta diantaranya berusia &lt;5 tahun menghirup udara yang berpolusi.</p>', '2020-08-06 01:44:46', '2020-08-07 02:37:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iterasi`
--

CREATE TABLE `iterasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `iterasi` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `iterasi`
--

INSERT INTO `iterasi` (`id`, `iterasi`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-08-06 04:01:40', '2020-08-06 04:01:40'),
(2, '2', '2020-08-07 07:55:59', '2020-08-07 07:55:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(10) UNSIGNED NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `kabupaten`, `created_at`, `updated_at`) VALUES
(1, 'Kabupaten Bogor', '2020-08-06 02:53:24', '2020-08-06 02:53:24'),
(2, 'Kabupaten Sukabumi', '2020-08-09 10:40:07', '2020-08-09 10:40:07'),
(3, 'Kabupaten Cianjur', '2020-08-09 10:43:46', '2020-08-09 10:43:46'),
(4, 'Kabupaten Bandung', '2020-08-09 21:58:47', '2020-08-09 21:58:47'),
(5, 'Kabupaten Garut', '2020-08-09 21:59:02', '2020-08-09 21:59:02'),
(6, 'Kabupaten Tasikmalaya', '2020-08-09 21:59:17', '2020-08-09 21:59:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_06_082921_create_informasi_table', 2),
(4, '2020_08_06_091722_create_kabupaten_table', 3),
(5, '2020_08_06_111656_create_tahun_tabel', 4),
(6, '2020_08_08_105536_create_cluster_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaRule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `namaRule`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `id` int(10) UNSIGNED NOT NULL,
  `tahun` char(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`id`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '2015', '2020-08-06 04:28:26', '2020-08-06 04:28:26'),
(2, '2016', '2020-08-06 04:29:43', '2020-08-06 04:29:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` int(10) UNSIGNED DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `roles_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kal Kausar', 'kalkausar98@gmail.com', 2, '$2y$10$TbdH.YaRm9rnssSjLlcrbeOGpsU5VeeBxWGBaIGKNaoqKAnoRUTUa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cluster`
--
ALTER TABLE `cluster`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_mentah`
--
ALTER TABLE `data_mentah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_mentah_kabupaten_id_foreign` (`kabupaten_id`),
  ADD KEY `data_mentah_tahun_id_foreign` (`tahun_id`);

--
-- Indeks untuk tabel `data_olah`
--
ALTER TABLE `data_olah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_olah_kabupaten_id_foreign` (`kabupaten_id`),
  ADD KEY `data_olah_iterasi_id_foreign` (`iterasi_id`),
  ADD KEY `data_olah_tahun_id_foreign` (`tahun_id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iterasi`
--
ALTER TABLE `iterasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roles_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cluster`
--
ALTER TABLE `cluster`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_mentah`
--
ALTER TABLE `data_mentah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_olah`
--
ALTER TABLE `data_olah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `iterasi`
--
ALTER TABLE `iterasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_mentah`
--
ALTER TABLE `data_mentah`
  ADD CONSTRAINT `data_mentah_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_mentah_tahun_id_foreign` FOREIGN KEY (`tahun_id`) REFERENCES `tahun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_olah`
--
ALTER TABLE `data_olah`
  ADD CONSTRAINT `data_olah_iterasi_id_foreign` FOREIGN KEY (`iterasi_id`) REFERENCES `iterasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_olah_kabupaten_id_foreign` FOREIGN KEY (`kabupaten_id`) REFERENCES `kabupaten` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_olah_tahun_id_foreign` FOREIGN KEY (`tahun_id`) REFERENCES `tahun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
