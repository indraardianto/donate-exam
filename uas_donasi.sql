-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+jammy2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2023 at 10:05 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `program_id` int NOT NULL,
  `total_donasi` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `nama`, `email`, `program_id`, `total_donasi`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 'Samsul', 'samsul@gmail.com', 1, '100000', 'Ya Allah hamba mohon semoga hamba ditempatkan di cabang yg orng”nya sholeh dan sholehah.', '2023-03-10 06:23:30', '2023-03-10 06:23:30'),
(2, 'Bram', 'bams@gmail.com', 1, '12000000', 'ya Rabb jodohkan hamba dengan Rusdi. jika ada yg lebih baik dari Rusdi, jodohkan yg lebih baik itu aamiin', '2023-03-10 06:23:30', '2023-03-10 06:23:30'),
(3, 'Qomar', 'qomar@gmail.com', 2, '190000', 'utk ibuku yg sudah tiada moga Amal ibadahnya diterima disisinya, dijauhkan dari siksa kubur', '2023-03-11 14:00:46', '2023-03-11 14:00:46'),
(4, 'Samuel', 'samuel@gmail.com', 2, '8900000', 'saudara2ku yg baik hati, mohon keikhlasannya utk mendoakan anak2 kami agar segera diangkat penyakitnya\n\n', '2023-03-11 14:00:46', '2023-03-11 14:00:46'),
(5, 'Ubay', 'ubay@gmail.com', 3, '9000000', 'Beri kesabaran keridhloan keikhlasan atas ujian sakit hamba istri & putra putri Sholeh shalehah', '2023-03-11 14:02:00', '2023-03-11 14:02:00'),
(6, 'Samson', 'ucup@gmail.com', 3, '100000', 'semoga tahun ini menikah', '2023-03-11 14:02:00', '2023-03-11 14:02:00'),
(7, 'solday', 'solday@gmail.com', 4, '9000000', 'semoga dgn sedekah ini, lancar rejeki/usaha/urusan, dijauhkan dr bencana/musibah,pjg umur, sehat, selamat, berkah', '2023-03-11 14:03:12', '2023-03-11 14:03:12'),
(8, 'ubay', 'ubay@gmail.com', 4, '7000000', 'semoga dgn sedekah ini, lancar rejeki/usaha/urusan, dijauhkan dr bencana/musibah,pjg umur, sehat, selamat, berkah', '2023-03-19 14:03:12', '2023-03-11 14:03:12'),
(9, 'samuel', 'samuel@gmail.com', 5, '9000000', 'oke', '2023-03-11 14:04:23', '2023-03-11 14:04:23'),
(10, 'hamdan', 'hamdan@gmail.com', 5, '8000000', 'oke', '2023-03-11 14:04:23', '2023-03-11 14:04:23'),
(11, 'samson', 'samson@gmail.com', 6, '9000000', 'oke', '2023-03-11 14:06:19', '2023-03-11 14:06:19'),
(12, 'bram', 'bram@gmail.com', 6, '90000000', 'oek', '2023-03-11 14:06:19', '2023-03-11 14:06:19'),
(13, 'Arif', 'arif@gmail.com', 7, '10000009', 'okrek', '2023-03-13 02:40:43', '2023-03-13 02:40:43'),
(14, 'Ucup', 'cup@gmail.com', 2, '90000000', 'ds', '2023-03-17 07:23:13', '2023-03-13 07:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kemanusiaan', '2023-03-10 03:28:00', '2023-03-10 03:28:00'),
(2, 'Pembangunan', '2023-03-10 03:28:00', '2023-03-10 03:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `kategori_id` int NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `total_target` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `nama_program`, `deskripsi`, `gambar`, `kategori_id`, `tgl_berakhir`, `total_target`, `created_at`, `updated_at`) VALUES
(1, '10.000 Quran Untuk Korban Bencana', 'Deskripsi bantuan 1', 'bantuan1.jpg', 1, '2023-03-20', '100000000', '2023-03-10 03:26:20', '2023-03-10 03:26:20'),
(2, 'Anak Ojol Tumor Mulut, Darurat Butuh Operasi!', 'Deskripsi bantuan 2', 'bantuan2.jpg', 1, '2023-03-13', '1200000000', '2023-03-10 03:26:20', '2023-03-10 03:26:20'),
(3, 'Sedekah Beras untuk Ribuan Santri Dhuafa', 'Deskripsi bantuan 3', 'bantuan3.jpg', 1, '2023-03-18', '900000000', '2023-03-10 03:40:34', '2023-03-10 03:40:34'),
(4, 'Solidaritas Tuk Puluhan Ribu Korban Gempa Turki', 'Deskripsi bantuan 4', 'bantuan4.jpg', 1, '2023-03-19', '1320000000', '2023-03-10 03:40:34', '2023-03-10 03:40:34'),
(5, 'Pahala Mengalir Selamanya! Ayo Beramal Jariyah', 'Deskripsi bantuan 5', 'bantuan6.jpg', 2, '2023-03-25', '1321300000', '2023-03-10 03:42:32', '2023-03-10 03:42:32'),
(6, 'Membangun Kembali Masjid-Masjid di Kampung', 'Deskripsi bantuan 6', 'bantuan7.jpg', 2, '2023-03-25', '89300000', '2023-03-10 03:42:32', '2023-03-10 03:42:32'),
(7, 'Beri Kebahagiaan untuk 1000 Yatim & Dhuafa', 'Deskripsi bantuan 7', 'banguan7.jpg', 1, '2023-03-24', '900000000', '2023-03-10 03:44:39', '2023-03-10 03:44:39'),
(8, 'DARURAT! Solidaritas Bantu Korban Banjir Indonesia', 'Deskripsi bantuan 8', 'program8.jpg', 2, '2023-03-31', '8080000000', '2023-03-10 03:44:39', '2023-03-10 03:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$feUSARipRL37GkWIFUEtQ.BjAzIoZN7nXQvJuw1NehIFBWuiLCN1e', NULL, '2023-03-13 09:25:35', '2023-03-13 09:25:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
