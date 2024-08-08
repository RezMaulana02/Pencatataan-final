-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 06:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apps_pencatataan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahliwaris`
--

CREATE TABLE `ahliwaris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telepon` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ahliwaris`
--

INSERT INTO `ahliwaris` (`id`, `nama`, `no_ktp`, `email`, `no_telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(301, 'ara23', '333333', 'ara23@gmail.com', '3123123', 'dasdasdada', '2024-08-06 01:07:21', '2024-08-06 01:07:21'),
(302, 'ara22', '4142414', 'ara232@gmail.com', '3123123', 'dasdasdada', '2024-08-06 01:36:05', '2024-08-06 01:36:05'),
(303, 'arawr2', '31231312', 'adara@gmail.com', '0851-5511-5792', 'cicukang 2 no 160/72 RT 05 RW 07 kelurahan Husein Sastranegara kecamatan Cicendo', '2024-08-06 02:02:40', '2024-08-06 02:02:40'),
(304, 'tes', '2312312312312', 'reaeta@gmail.com', '0851-5511-5792', 'cicukang 2 no 160/72 RT 05 RW 07 kelurahan Husein Sastranegara kecamatan Cicendo', '2024-08-06 02:11:35', '2024-08-06 02:11:35'),
(305, 'ramdanw', '3123123', 'ramdanw@gmail.com', '0851-5511-5792', 'cicukang 2 no 160/72 RT 05 RW 07 kelurahan Husein Sastranegara kecamatan Cicendo', '2024-08-06 02:14:00', '2024-08-06 02:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `almarhum`
--

CREATE TABLE `almarhum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `foto_ktp` varchar(255) DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `foto_surat_kematian` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `almarhum`
--

INSERT INTO `almarhum` (`id`, `nama`, `no_ktp`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `tanggal_kematian`, `foto_ktp`, `foto_kk`, `foto_surat_kematian`, `created_at`, `updated_at`) VALUES
(335, 'ara2', '13123123123', 'Laki-laki', '312312312312', '2024-08-02', '2024-08-12', NULL, NULL, NULL, '2024-08-06 01:07:20', '2024-08-06 01:07:20'),
(336, 'ara22', '3123123123', 'Laki-laki', 'adadasdada', '2024-08-16', '2024-08-07', 'uploads/foto_ktp/2zHwQgMaFDi7vYiFJZapiKSmkqDKET45Syl5esOV.jpg', 'uploads/foto_kk/f5J6gaqjhlTy93iq5UN1MYuBATPLCGEXDrETAgdU.jpg', NULL, '2024-08-06 01:36:05', '2024-08-06 01:36:05'),
(337, 'araawa', '31231231', 'Laki-laki', 'cicukang 2 no 160/72 RT 05 RW 07 kelurahan Husein Sastranegara kecamatan Cicendo', '2024-08-02', '2024-08-15', NULL, NULL, NULL, '2024-08-06 02:02:40', '2024-08-06 02:02:40'),
(338, 'tes1111', '231312312', 'Laki-laki', 'cicukang 2 no 160/72 RT 05 RW 07 kelurahan Husein Sastranegara kecamatan Cicendo', '2024-08-10', '2024-08-02', NULL, NULL, NULL, '2024-08-06 02:11:35', '2024-08-06 02:11:35'),
(339, 'ramdanaja', '132312312', 'Laki-laki', 'cicukang 2 no 160/72 RT 05 RW 07 kelurahan Husein Sastranegara kecamatan Cicendo', '2024-08-02', '2024-07-29', NULL, NULL, NULL, '2024-08-06 02:14:00', '2024-08-06 02:14:00');

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
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kelas` varchar(255) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_kelas` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `kode_kelas`, `nama_kelas`, `deskripsi`, `foto_kelas`, `created_at`, `updated_at`) VALUES
(11, '1', 'Kelas 1', NULL, 'uploads/foto_kelas/36g3JHZ2FXx8Otzm4teDWKmt3Wzs0yJHeFyLxVcU.jpg', '2024-08-03 04:24:05', '2024-08-03 04:24:05'),
(12, '2', 'Kelas 2', NULL, 'uploads/foto_kelas/qCM5UT6b6r4ogRo6xsvge9KKl0J84i7lvUtm0ARq.jpg', '2024-08-03 07:10:24', '2024-08-03 07:10:24'),
(16, '3', 'Kelas 3', NULL, NULL, '2024-08-03 23:57:37', '2024-08-03 23:57:37');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas1`
--

CREATE TABLE `master_kelas1` (
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto_patokan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kelas1`
--

INSERT INTO `master_kelas1` (`kelas_id`, `kelas`, `deskripsi`, `foto_patokan`, `created_at`, `updated_at`) VALUES
(1, '3', NULL, NULL, '2024-08-02 23:58:53', '2024-08-02 23:58:53');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_23_010303_create_products_table', 1),
(6, '2024_05_28_012659_update_products_table', 2),
(7, '2024_05_28_013153_update_products_table_name_nullable', 2),
(8, '2024_06_25_000251_create_datausers_table', 3),
(9, '2024_07_17_094557_create_payments_table', 4),
(10, '2024_07_18_050827_update_payments_table', 5),
(11, '2024_07_19_021634_update_data_users_and_payments_tables', 6),
(12, '2024_07_19_033637_update_datausers_table', 7),
(13, '2024_07_19_041557_modify_nama_in_payments_table', 8),
(14, '2024_07_19_041815_update_payment_successful_default_in_payments_table', 9),
(15, '2024_07_19_042256_update_payment_status_in_payments_table', 10),
(16, '2024_07_20_030452_add_ahli_waris_fields_to_data_users_table', 11),
(17, '2024_07_20_040228_add_created_by_to_data_users_table', 12),
(18, '2024_07_20_050603_remove_no_telepon_from_data_users_table', 13),
(19, '2024_07_20_104204_create_heirs_table', 14),
(20, '2024_07_20_110508_update_datausers_table', 15),
(21, '2024_07_20_112211_add_data_ahli_waris_columns_to_datausers_table', 16),
(22, '2024_07_21_084629_create_almarhum_table', 17),
(23, '2024_07_21_090204_update_jenis_kelamin_column_in_almarhum_table', 18),
(25, '2024_07_23_053947_create_ahli_waris_table', 19),
(26, '2024_07_26_085225_create_pemakaman_table', 20),
(27, '2024_07_28_005338_add_foreign_keys_to_pemakaman_table', 21),
(28, '2024_07_29_022234_change_type_column_in_users_table', 22),
(29, '2024_07_29_022602_change_type_column_in_users_table', 23),
(30, '2024_07_29_024419_add_phone_number_to_users_table', 24),
(31, '2024_07_29_234929_add_foto_columns_to_almarhum_table', 25),
(32, '2024_07_30_001317_add_foto_columns_to_almarhum_table', 26),
(33, '2024_07_31_052342_create_transaksi_table', 27),
(34, '2024_07_31_161455_add_ahliwaris_id_to_transaksi_table_v2', 28),
(35, '2024_08_01_063916_add_kelas_to_pemakamen_table', 29),
(36, '2024_08_02_143631_add_user_id_to_pemakamen_table', 30),
(37, '2024_08_03_021109_create_master_kelas_table', 31),
(38, '2024_08_03_024655_add_kelas_to_master_kelas_table', 32),
(39, '2024_08_03_025428_add_kategori_to_master_kelas_table', 33),
(40, '2024_08_03_050559_update_master_kelas_columns', 34),
(41, '2024_08_03_051446_reset_master_kelas_table', 35),
(42, '2024_08_03_054518_add_kelas_to_master_kelas_table', 36),
(43, '2024_08_03_055615_create_master_kelas_table', 37),
(44, '2024_08_03_063823_create_master_kelas_table', 38),
(45, '2024_08_03_064800_add_kelas_to_master_kelas_table', 39),
(46, '2024_08_03_080624_create_master_kelas_table', 40),
(47, '2024_08_03_085524_create_tipe_kelas_table_v2', 41),
(48, '2024_08_03_093707_add_kelas_to_pemakamen_table', 42),
(49, '2024_08_03_094205_add_kelas_id_to_master_kelas_table', 43),
(50, '2024_08_04_052517_add_tipe_kelas_id_to_transaksi_table', 44),
(51, '2024_08_04_070109_add_kategori_to_pemakaman_table', 45),
(52, '2024_08_04_140452_add_deskripsi_kelas_and_luas_tanah_to_pemakamans_table', 46),
(53, '2024_08_05_085920_add_snap_token_to_transaksi_table', 47),
(54, '2024_08_05_100644_add_foto_to_pemakaman_table', 48);

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
-- Table structure for table `pemakamen`
--

CREATE TABLE `pemakamen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lokasi_pemakaman` varchar(255) NOT NULL,
  `tanggal_pemakaman` date NOT NULL,
  `kelas` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `almarhum_id` bigint(20) UNSIGNED NOT NULL,
  `ahliwaris_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `luas_tanah` decimal(8,2) DEFAULT NULL,
  `foto_kelas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemakamen`
--

INSERT INTO `pemakamen` (`id`, `lokasi_pemakaman`, `tanggal_pemakaman`, `kelas`, `created_at`, `updated_at`, `almarhum_id`, `ahliwaris_id`, `user_id`, `kelas_id`, `kategori`, `deskripsi`, `luas_tanah`, `foto_kelas`) VALUES
(220, 'TPU SIRNARAGA', '2024-08-02', 3, '2024-08-06 01:07:21', '2024-08-06 01:07:21', 335, 301, 2, 16, 'Normal', 'test', 302.00, NULL),
(221, 'TPU SIRNARAGA', '2024-08-07', 2, '2024-08-06 01:36:05', '2024-08-06 01:36:05', 336, 302, 2, 12, 'Urgent', 'w', 29.00, 'uploads/foto_kelas/qCM5UT6b6r4ogRo6xsvge9KKl0J84i7lvUtm0ARq.jpg'),
(222, 'TPU SIRNARAGA', '2024-08-16', 2, '2024-08-06 02:02:40', '2024-08-06 02:02:40', 337, 303, 1, 12, 'Normal', 'w', 40.00, 'uploads/foto_kelas/qCM5UT6b6r4ogRo6xsvge9KKl0J84i7lvUtm0ARq.jpg'),
(223, 'TPU SIRNARAGA', '2024-08-23', 2, '2024-08-06 02:11:35', '2024-08-06 02:11:35', 338, 304, 2, 12, 'Normal', 'w', 40.00, 'uploads/foto_kelas/qCM5UT6b6r4ogRo6xsvge9KKl0J84i7lvUtm0ARq.jpg'),
(224, 'TPU SIRNARAGA', '2024-08-13', 1, '2024-08-06 02:14:00', '2024-08-06 02:14:00', 339, 305, 2, 11, 'Normal', NULL, 3.75, 'uploads/foto_kelas/36g3JHZ2FXx8Otzm4teDWKmt3Wzs0yJHeFyLxVcU.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `tipe_kelas`
--

CREATE TABLE `tipe_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelas_id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `luas_tanah` decimal(8,2) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipe_kelas`
--

INSERT INTO `tipe_kelas` (`id`, `kelas_id`, `kategori`, `harga`, `luas_tanah`, `deskripsi`, `created_at`, `updated_at`) VALUES
(9, 16, 'Normal', 327500, 302.00, 'test', '2024-08-04 00:31:31', '2024-08-04 00:31:31'),
(10, 16, 'Urgent', 725000, 29.00, 'test', '2024-08-04 00:31:50', '2024-08-04 00:31:50'),
(11, 12, 'Normal', 725000, 40.00, 'w', '2024-08-04 00:59:35', '2024-08-04 00:59:35'),
(12, 12, 'Urgent', 1250000, 29.00, 'w', '2024-08-04 01:02:23', '2024-08-04 01:02:23'),
(13, 16, 'Urgent', 2000000, 4.00, NULL, '2024-08-04 18:57:52', '2024-08-04 18:57:52'),
(14, 11, 'Normal', 1500000, 3.75, NULL, '2024-08-04 19:10:11', '2024-08-04 19:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(15,2) NOT NULL,
  `tipe_kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `transaction_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `snap_token` varchar(255) DEFAULT NULL,
  `ahliwaris_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `user_id`, `amount`, `tipe_kelas_id`, `description`, `transaction_date`, `status`, `snap_token`, `ahliwaris_id`, `created_at`, `updated_at`) VALUES
(181, 2, 327500.00, NULL, 'Transaksi otomatis untuk Pemakaman ID: 220', '2024-08-06', 'belum bayar', NULL, 301, '2024-08-06 01:07:21', '2024-08-06 01:07:21'),
(182, 2, 1250000.00, NULL, 'Transaksi otomatis untuk Pemakaman ID: 221', '2024-08-06', 'belum bayar', NULL, 302, '2024-08-06 01:36:05', '2024-08-06 01:36:05'),
(183, 1, 725000.00, NULL, 'Transaksi otomatis untuk Pemakaman ID: 222', '2024-08-06', 'belum bayar', '23cbce7a-d3c7-4879-9ef8-695db7737df6', 303, '2024-08-06 02:02:40', '2024-08-06 02:02:40'),
(184, 2, 725000.00, NULL, 'Transaksi otomatis untuk Pemakaman ID: 223', '2024-08-06', 'belum bayar', '0c51e5f0-66d1-4c43-9d6e-34dd4a5bb59b', 304, '2024-08-06 02:11:35', '2024-08-06 02:11:35'),
(185, 2, 1500000.00, NULL, 'Transaksi otomatis untuk Pemakaman ID: 224', '2024-08-06', 'Sudah Dibayar', 'b60fb5e4-3372-4935-9945-a9f466996a8c', 305, '2024-08-06 02:14:00', '2024-08-06 02:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'reza1', 'rezamaulanara@gmail.com', NULL, NULL, '$2y$10$yPUHX0fyDBoBP3hUSMHr2uetDL6BopPgCcKqDu7fO9Q0PJTdgQ16i', 'pSs9j0SBRoJs44ilbzxGYRhGazvZYHyVp4CBZIUUNr5m0yb4wAQDVYi3FrJp', '2024-04-22 18:16:19', '2024-05-27 17:56:42', 1),
(2, 'reza', 'rezax@gmail.com', NULL, NULL, '$2y$10$M/1dGIuGiTfzogJdUPc/V.tBXwHdjQ6n01W5UIKsUvUehPZAnwXIa', 'wS18qrgatHzAOZ16g5lnR43VuWteWaNKetdKUkTCFMezzlG0s1TM1ip63QrF', '2024-04-22 18:23:44', '2024-04-22 18:23:44', 0),
(3, 'asda', 'rezmaulana02@gmail.com', NULL, NULL, '$2y$10$wIJ1Ugo7kp6tiDqY.X5Yme4K6LGPbymqWRPiTFP6nXd.e1sk1.93u', NULL, '2024-07-18 21:20:09', '2024-07-18 21:20:09', 0),
(31, 'erza', 'ezra@gmail.com', '0851-5511-5792', NULL, '$2y$10$m1W76zBG6b1qMMhJeKrPB.t93HGfuqJ5God2Kkl/gRzar6H8o2Niu', NULL, '2024-08-06 03:11:02', '2024-08-06 03:11:02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahliwaris`
--
ALTER TABLE `ahliwaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ahli_waris_no_ktp_unique` (`no_ktp`),
  ADD UNIQUE KEY `ahli_waris_email_unique` (`email`);

--
-- Indexes for table `almarhum`
--
ALTER TABLE `almarhum`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `almarhum_no_ktp_unique` (`no_ktp`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kelas1`
--
ALTER TABLE `master_kelas1`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemakamen`
--
ALTER TABLE `pemakamen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemakaman_almarhum_id_foreign` (`almarhum_id`),
  ADD KEY `ahli_waris_id` (`ahliwaris_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tipe_kelas`
--
ALTER TABLE `tipe_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`),
  ADD KEY `transaksi_ahliwaris_id_foreign` (`ahliwaris_id`),
  ADD KEY `transaksi_tipe_kelas_id_foreign` (`tipe_kelas_id`);

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
-- AUTO_INCREMENT for table `ahliwaris`
--
ALTER TABLE `ahliwaris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `almarhum`
--
ALTER TABLE `almarhum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `master_kelas1`
--
ALTER TABLE `master_kelas1`
  MODIFY `kelas_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `pemakamen`
--
ALTER TABLE `pemakamen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipe_kelas`
--
ALTER TABLE `tipe_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemakamen`
--
ALTER TABLE `pemakamen`
  ADD CONSTRAINT `pemakaman_ahliwaris_id_foreign` FOREIGN KEY (`ahliwaris_id`) REFERENCES `ahliwaris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemakaman_almarhum_id_foreign` FOREIGN KEY (`almarhum_id`) REFERENCES `almarhum` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ahliwaris_id_foreign` FOREIGN KEY (`ahliwaris_id`) REFERENCES `ahliwaris` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `transaksi_tipe_kelas_id_foreign` FOREIGN KEY (`tipe_kelas_id`) REFERENCES `tipe_kelas` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
