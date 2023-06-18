-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2023 pada 03.58
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem_absensi`
--

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_18_033506_create_model_mapels_table', 1),
(3, '2023_05_18_033607_create_model_kelas_table', 1),
(4, '2023_05_18_033624_create_model_gurus_table', 1),
(5, '2023_05_18_033631_create_model_absens_table', 1),
(6, '2023_05_18_033715_create_model_admins_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_absens`
--

CREATE TABLE `model_absens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_absens`
--

INSERT INTO `model_absens` (`id`, `id_kelas`, `id_guru`, `tanggal`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '20', '05', '2023', '2023-05-20 00:20:11', '2023-05-20 00:20:11'),
(2, '2', '1', '20', '05', '2023', '2023-05-20 00:20:20', '2023-05-20 00:20:20'),
(3, '3', '1', '20', '05', '2023', '2023-05-20 00:20:31', '2023-05-20 00:20:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_admins`
--

CREATE TABLE `model_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_admins`
--

INSERT INTO `model_admins` (`id`, `nama_admin`, `username_admin`, `password_admin`, `created_at`, `updated_at`) VALUES
(2, 'Erna Novianto', 'erna', 'erna', '2023-05-20 00:15:01', '2023-05-30 07:14:12'),
(3, 'Admin', 'admin', 'admin', '2023-05-20 00:19:44', '2023-05-20 00:19:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_gurus`
--

CREATE TABLE `model_gurus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_gurus`
--

INSERT INTO `model_gurus` (`id`, `nama_guru`, `id_mapel`, `username_guru`, `password_guru`, `created_at`, `updated_at`) VALUES
(1, 'Erna Novianto', '1', 'erna', 'erna', '2023-05-20 00:18:37', '2023-05-30 07:10:18'),
(2, 'Guru IPA', '2', 'guru ipa', 'guru ipa', '2023-05-20 00:19:06', '2023-05-20 00:19:06'),
(3, 'Guru IPS', '3', 'guru ips', 'guru', '2023-05-20 00:19:25', '2023-05-20 00:19:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_kelas`
--

CREATE TABLE `model_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_kelas`
--

INSERT INTO `model_kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Guru', '2023-05-20 00:16:51', '2023-05-30 07:01:16'),
(2, 'X - A', '2023-05-20 00:17:33', '2023-05-20 00:17:33'),
(3, 'X - B', '2023-05-20 00:17:43', '2023-05-20 00:17:43'),
(4, 'X - C', '2023-05-20 00:17:53', '2023-05-20 00:17:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_mapels`
--

CREATE TABLE `model_mapels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_mapels`
--

INSERT INTO `model_mapels` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'STAFF TU', '2023-05-20 00:15:36', '2023-05-20 00:17:09'),
(2, 'IPA', '2023-05-20 00:15:44', '2023-05-20 00:15:44'),
(3, 'IPS', '2023-05-20 00:15:52', '2023-05-20 00:15:52'),
(4, 'BIOLOGI', '2023-05-20 00:16:07', '2023-05-20 00:16:07'),
(5, 'KIMIA', '2023-05-20 00:16:15', '2023-05-20 00:16:15'),
(7, 'Bahasa Lampung 2', '2023-05-30 06:55:48', '2023-05-30 06:56:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_absens`
--
ALTER TABLE `model_absens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_admins`
--
ALTER TABLE `model_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_admins_username_admin_unique` (`username_admin`),
  ADD UNIQUE KEY `model_admins_password_admin_unique` (`password_admin`);

--
-- Indeks untuk tabel `model_gurus`
--
ALTER TABLE `model_gurus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_gurus_nama_guru_unique` (`nama_guru`),
  ADD UNIQUE KEY `model_gurus_username_guru_unique` (`username_guru`),
  ADD UNIQUE KEY `model_gurus_password_guru_unique` (`password_guru`);

--
-- Indeks untuk tabel `model_kelas`
--
ALTER TABLE `model_kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_kelas_nama_kelas_unique` (`nama_kelas`);

--
-- Indeks untuk tabel `model_mapels`
--
ALTER TABLE `model_mapels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `model_mapels_nama_mapel_unique` (`nama_mapel`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `model_absens`
--
ALTER TABLE `model_absens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `model_admins`
--
ALTER TABLE `model_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `model_gurus`
--
ALTER TABLE `model_gurus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `model_kelas`
--
ALTER TABLE `model_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `model_mapels`
--
ALTER TABLE `model_mapels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
