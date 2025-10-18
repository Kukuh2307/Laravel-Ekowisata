-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2025 at 09:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ekowisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel_sections`
--

CREATE TABLE `artikel_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel_sections`
--

INSERT INTO `artikel_sections` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, '5 Tips Menjelajahi Hutan Tropis dengan Aman', 'Ekowisata di hutan tropis menawarkan pengalaman tak terlupakan. Namun, persiapan yang matang adalah kunci untuk memastikan perjalanan Anda aman dan menyenangkan', 'artikel_sections/4qDak5cgKuY7nZ8DIpV7FITaCzXIrV90g6fejsEp.jpg', '2025-10-17 09:54:12', '2025-10-17 09:54:12'),
(3, 'Belajar dari Kearifan Lokal Penjaga Alam', 'Masyarakat adat telah hidup berdampingan dengan alam selama berabad-abad. Pelajari bagaimana kearifan lokal mereka dapat menginspirasi kita untuk lebih...', 'artikel_sections/qodZ7q9wEpWw3K8IxQai1OuGAc8mbv9dJEPwzGPN.jpg', '2025-10-17 09:55:10', '2025-10-17 09:55:10'),
(4, 'Pentingnya Konservasi Fauna di Kawasan Ekowisata', 'Ekowisata bukan hanya tentang menikmati keindahan alam, tetapi juga berkontribusi pada pelestarian satwa liar yang menghuninya. Berikut peran penting Anda...', 'artikel_sections/t86lRvk3KdK8SrQy1nfoDM732qJSJJuYVkYeEMfK.jpg', '2025-10-17 09:56:07', '2025-10-17 09:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1760727507),
('laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1760727507;', 1760727507),
('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1760715232),
('laravel-cache-livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1760715232;', 1760715232);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi_sections`
--

CREATE TABLE `dokumentasi_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumentasi_sections`
--

INSERT INTO `dokumentasi_sections` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'dokumentasi_sections/qNQprOSxQp3Gt2SRbLg3OFVfKhW7sVCoie6vQAN6.jpg', 'Sekolah Hutan (SDN 2 Tempurejo)', 'Pelaksanaan kegiatan ini bertujuan untuk memberikan pengalaman belajar', '2025-10-17 09:22:55', '2025-10-17 10:45:10'),
(2, 'dokumentasi_sections/Y6FL750m9cxurm0HAJLXu2bxlXlnMLWwNWSgFC4S.jpg', 'Prakarya Ecoprint', 'Kegiatan ini bertujuan untuk mengenalkan teknik ecoprint kepada pada peserta untuk membuat kerajinan dari koleksi daun.', '2025-10-17 09:24:27', '2025-10-17 09:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `foto_sections`
--

CREATE TABLE `foto_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_sections`
--

CREATE TABLE `hero_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'SELAMAT DATANG DI EKOWISATA TEMPUREJO',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_sections`
--

INSERT INTO `hero_sections` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'hero_sections/CqOOAx5yYXK4KyaMK0uIAyq7qHRAaO4RVVt22RM3.jpg', 'SELAMAT DATANG DI EKOWISATA TEMPUREJO', 'Explorasi tempat wisata edukasi yang menyajikan pengalaman belajar dan bermain di alam terbuka', '2025-10-17 08:34:27', '2025-10-17 08:34:27'),
(2, 'hero_sections/aHCzxkmr3WyUJDjS7aanRLQ0jrQA4CoAHFDI4RO4.jpg', 'SELAMAT DATANG DI EKOWISATA TEMPUREJO', 'Tempat wisata edukasi yang menyajikan pengalaman belajar dan bermain di alam terbuka', '2025-10-17 08:35:01', '2025-10-17 08:35:01'),
(3, 'hero_sections/khaQUCCUZhuVlcNkIXARThyOjd7Zp3idPEVI8FWQ.jpg', 'SELAMAT DATANG DI EKOWISATA TEMPUREJO', 'Tempat wisata edukasi yang menyajikan pengalaman belajar dan bermain di alam terbuka', '2025-10-17 08:35:34', '2025-10-17 08:35:34');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak_sections`
--

CREATE TABLE `kontak_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontak_sections`
--

INSERT INTO `kontak_sections` (`id`, `email`, `phone`, `address`, `facebook`, `instagram`, `twitter`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'desatempurejo729@gmail.com', '0889-7611-3334', 'Ds.Tempurejo Kec.Wates Kediri', 'contoh', 'contoh', 'contoh', 'contoh update', '2025-10-17 11:06:25', '2025-10-17 11:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_10_16_141715_create_hero_sections_table', 1),
(5, '2025_10_16_141848_create_mitra_sections_table', 1),
(6, '2025_10_16_142015_create_paket_sections_table', 1),
(7, '2025_10_16_142413_create_dokumentasi_sections_table', 1),
(8, '2025_10_16_142536_create_kontak_sections_table', 1),
(9, '2025_10_16_142725_create_sejarah_sections_table', 1),
(10, '2025_10_16_142847_create_foto_sections_table', 1),
(11, '2025_10_16_142937_create_produk_sections_table', 1),
(12, '2025_10_16_163344_create_artikel_sections_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_sections`
--

CREATE TABLE `mitra_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra_sections`
--

INSERT INTO `mitra_sections` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mitra_sections/5LZuUKYz0G8IKww7uu088DgS4FzcYieiMeU2FkoO.png', 'Kementerian Pendidikan dan Kebudayaan', '-', '2025-10-17 08:55:36', '2025-10-17 09:11:54'),
(2, 'mitra_sections/A6ZD7PzAnrO9WMiKcnfkPO6B1SNUY2wp77MwHSru.png', 'Pemerintah Kabupaten Kediri', '-', '2025-10-17 08:55:59', '2025-10-17 09:12:11'),
(3, 'mitra_sections/kvI7yQxn0Tg0IYkgPwP9KBW0EtGRKZQs7N5UPpFr.png', 'Universitas Nusantara PGRI Kediri', '-', '2025-10-17 08:56:18', '2025-10-17 09:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `paket_sections`
--

CREATE TABLE `paket_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `facilities` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_sections`
--

INSERT INTO `paket_sections` (`id`, `image`, `title`, `description`, `price`, `time`, `facilities`, `created_at`, `updated_at`) VALUES
(1, 'paket_sections/AcRUc1ZCxrGsFEr6tJAKcJUzlpR2zmQyA4R36ctZ.jpg', 'Sillo & Seed Story', 'Menawarkan kesempatan untuk mempelajari teknologi penyimpanan hasil pertanian, seperti biji-bijian dan pakan ternak di dalam silo.', '30000', NULL, 'Mini game , Warming up\nMateri Kompos\nSnack\nMembuat komposter botol bekas\nMakan siang & penutup', '2025-10-17 11:56:55', '2025-10-17 11:58:25'),
(2, 'paket_sections/KyO9WNjGOcJVs4IemNgZESx9SKR3N0rfh2HzEoGV.jpg', 'Soren', 'Paket Soren di Jembangan Ekowisata mengajak Anda untuk mengubah limbah organik sisa tumbuhan menjadi sumber daya berguna.', '50000', NULL, 'Mini game , Warming up\nPenjelajah di arboreturm, koleksi daun\nSnack & materi ecoprint\nMembuat ecoprint dari koleksi daun\nMakan siang & penutup\n', '2025-10-17 11:58:05', '2025-10-17 11:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_sections`
--

CREATE TABLE `produk_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_sections`
--

INSERT INTO `produk_sections` (`id`, `image`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'produk_sections/FxvruX6nlohgqai1ZFpMBwTWpcI8MthbetZbIxOI.png', 'Jamu Kunyit', 'Hadirkan kembali tradisi sehat dengan Jamu Kunyit Murni. Dihasilkan dari sari pati kunyit pilihan yang diolah secara higienis, menciptakan rasa khas earthy yang menenangkan dan kaya manfaat.', '15000', '2025-10-17 11:12:30', '2025-10-17 11:12:30'),
(2, 'produk_sections/TDsY4oL9AHRzfiOCpYqfsBYgUXfOaXAAQxGgpAEO.png', 'Jamu Kunyit Asam', 'Perpaduan sempurna antara segar, manis, dan asam. Minuman tradisional ini menghadirkan cita rasa khas kunyit yang menyegarkan dan menyehatkan, cocok dinikmati hangat maupun dingin.', '25000', '2025-10-17 11:13:15', '2025-10-17 11:13:15'),
(3, 'produk_sections/OKxrjuq1WIwwU9HUerAdVIghckviFrj7DT17JvcJ.png', 'Jamu Beras Kencur', 'Minuman herbal legendaris dengan rasa manis menyegarkan. Perpaduan beras pilihan, kencur, dan gula jawa menghasilkan sensasi hangat dan aroma khas yang menenangkan.', '14000', '2025-10-17 11:13:49', '2025-10-17 11:21:02'),
(4, 'produk_sections/jwVjdACI3cqCDQBvDsUKVG5v60lul8ORpp3drwNW.png', 'Jamu Jahe', 'Rasakan sensasi hangat dan menyegarkan dari jahe pilihan kami. Cocok dinikmati di segala suasana untuk menjaga daya tahan tubuh dan meredakan keluhan ringan.', '15000', '2025-10-17 11:14:24', '2025-10-17 11:14:24'),
(5, 'produk_sections/Sm4y6ewe1NI9aEzr06cjP9sIxN9lqc1dkys7Yn7K.png', 'Minyak Kemiri', 'Minyak Kemiri adalah solusi alami untuk rambut sehat dan tebal. Ramuan tradisional ini diekstrak dari biji kemiri pilihan dan telah digunakan secara turun-temurun sebagai perawatan rambut yang menutrisi dari akar hingga ujung. Diperkaya Omega-3 & 6 serta Vitamin E, minyak kemiri membantu mengembalikan kekuatan dan kilau alami rambut Anda.', '35000', '2025-10-17 11:14:56', '2025-10-17 11:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah_sections`
--

CREATE TABLE `sejarah_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sejarah_sections`
--

INSERT INTO `sejarah_sections` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Asal Usul Jembangan Ekowisata', 'Jembangan Ekowisata memiliki sejarah panjang yang bermula dari komunitas lokal yang peduli terhadap pelestarian alam. Pada awalnya, kawasan ini merupakan hutan lindung yang dikelola oleh masyarakat adat setempat.\n\nPada tahun 1998, sekelompok pemuda setempat mulai menyadari potensi wisata alam yang dimiliki oleh kawasan Jembangan. Dengan semangat gotong royong, mereka mulai membangun jalur trekking sederhana dan membersihkan area sekitar sumber air alami.', '2025-10-17 09:38:02', '2025-10-17 09:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IcIhtGWlxoQaEipJH967pMsjPcL1CLB0joYGpKMg', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibUxIMU5uNU45SWlIS3FBa2JGYXhYMlAyRlhGdlVSb2xNWm5sTzBQVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkR2Q4Sy9peDJwTU1WalZTQVZaTWMzLktPbTR4eHA0eDlOODVHdmRQZTBGeHh0elE0RE9HYVMiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1760728889),
('jh71AHxuLalP3s0EP1mvkk3nJ851TE2eDZYVzvca', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3lXcEo2NDVXeGVycFlyTUZ3UklmNHFPUklqT2ptdGc2ODQzQzd1ViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1760727713);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$Gd8K/ix2pMMVjVSAVZMc3.KOm4xxp4x9N85GvdPe0FxxtzQ4DOGaS', NULL, '2025-10-16 09:54:02', '2025-10-16 09:54:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel_sections`
--
ALTER TABLE `artikel_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `dokumentasi_sections`
--
ALTER TABLE `dokumentasi_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foto_sections`
--
ALTER TABLE `foto_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero_sections`
--
ALTER TABLE `hero_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_sections`
--
ALTER TABLE `kontak_sections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kontak_sections_email_unique` (`email`),
  ADD UNIQUE KEY `kontak_sections_phone_unique` (`phone`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra_sections`
--
ALTER TABLE `mitra_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_sections`
--
ALTER TABLE `paket_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produk_sections`
--
ALTER TABLE `produk_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah_sections`
--
ALTER TABLE `sejarah_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `artikel_sections`
--
ALTER TABLE `artikel_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokumentasi_sections`
--
ALTER TABLE `dokumentasi_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_sections`
--
ALTER TABLE `foto_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_sections`
--
ALTER TABLE `hero_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak_sections`
--
ALTER TABLE `kontak_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mitra_sections`
--
ALTER TABLE `mitra_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_sections`
--
ALTER TABLE `paket_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk_sections`
--
ALTER TABLE `produk_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sejarah_sections`
--
ALTER TABLE `sejarah_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
