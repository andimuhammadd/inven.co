-- --------------------------------------------------------
-- Host:                         inven.tipnl.com
-- Server version:               10.5.20-MariaDB-cll-lve - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table tipn3594_db_inven.barang_keluar
CREATE TABLE IF NOT EXISTS `barang_keluar` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_data_barang` bigint(20) unsigned NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `barang_keluar_id_perusahaan_foreign` (`id_perusahaan`),
  KEY `barang_keluar_id_data_barang_foreign` (`id_data_barang`),
  CONSTRAINT `barang_keluar_id_data_barang_foreign` FOREIGN KEY (`id_data_barang`) REFERENCES `data_barang` (`id`) ON DELETE CASCADE,
  CONSTRAINT `barang_keluar_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.barang_keluar: ~2 rows (approximately)
REPLACE INTO `barang_keluar` (`id`, `id_data_barang`, `id_perusahaan`, `keterangan`, `jumlah`, `created_at`, `updated_at`) VALUES
	(9, 5, 9567, 'Jual aja', 2, '2023-07-08 11:22:56', '2023-07-08 11:22:56'),
	(10, 4, 9567, 'niwencsiuc', 100, '2023-07-08 12:31:42', '2023-07-08 12:31:42'),
	(11, 5, 9567, 'dbhrtbcrfb', 20, '2023-07-08 12:46:19', '2023-07-08 12:46:19');

-- Dumping structure for table tipn3594_db_inven.barang_masuk
CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_data_barang` bigint(20) unsigned NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `barang_masuk_id_perusahaan_foreign` (`id_perusahaan`),
  KEY `barang_masuk_id_data_barang_foreign` (`id_data_barang`),
  CONSTRAINT `barang_masuk_id_data_barang_foreign` FOREIGN KEY (`id_data_barang`) REFERENCES `data_barang` (`id`) ON DELETE CASCADE,
  CONSTRAINT `barang_masuk_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.barang_masuk: ~3 rows (approximately)
REPLACE INTO `barang_masuk` (`id`, `id_data_barang`, `id_perusahaan`, `jumlah`, `created_at`, `updated_at`) VALUES
	(7, 4, 9567, 88, '2023-07-08 08:43:04', '2023-07-08 08:43:04'),
	(8, 5, 9567, 97, '2023-07-08 08:43:47', '2023-07-08 08:43:47'),
	(10, 4, 9567, 10, '2023-07-08 12:30:39', '2023-07-08 12:30:39'),
	(11, 5, 9567, 100, '2023-07-08 13:10:48', '2023-07-08 13:10:48');

-- Dumping structure for table tipn3594_db_inven.data_barang
CREATE TABLE IF NOT EXISTS `data_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `id_supplier` bigint(20) unsigned NOT NULL,
  `id_jenis` bigint(20) unsigned NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_satuan` bigint(20) unsigned NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `data_barang_id_supplier_foreign` (`id_supplier`),
  KEY `data_barang_id_jenis_foreign` (`id_jenis`),
  KEY `data_barang_id_satuan_foreign` (`id_satuan`),
  KEY `data_barang_id_perusahaan_foreign` (`id_perusahaan`),
  CONSTRAINT `data_barang_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_barang` (`id`) ON DELETE CASCADE,
  CONSTRAINT `data_barang_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE,
  CONSTRAINT `data_barang_id_satuan_foreign` FOREIGN KEY (`id_satuan`) REFERENCES `satuan_barang` (`id`) ON DELETE CASCADE,
  CONSTRAINT `data_barang_id_supplier_foreign` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.data_barang: ~2 rows (approximately)
REPLACE INTO `data_barang` (`id`, `kode_barang`, `nama_barang`, `id_supplier`, `id_jenis`, `jumlah`, `id_satuan`, `id_perusahaan`, `created_at`, `updated_at`) VALUES
	(4, 'BRG20230708144302', 'Repeater', 1, 2, 100, 2, 9567, '2023-07-08 07:43:14', '2023-07-08 12:31:42'),
	(5, 'BRG20230708144319', 'Televisi', 2, 2, 158, 2, 9567, '2023-07-08 07:43:37', '2023-07-08 13:10:49'),
	(7, 'BRG20230708203755', 'Rc Car', 2, 3, NULL, 2, 9567, '2023-07-08 13:38:24', '2023-07-08 13:38:24'),
	(8, 'BRG20230708203833', 'Oreo', 3, 1, NULL, 3, 9567, '2023-07-08 13:38:48', '2023-07-08 13:38:48');

-- Dumping structure for table tipn3594_db_inven.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table tipn3594_db_inven.jenis_barang
CREATE TABLE IF NOT EXISTS `jenis_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jenis_barang_id_perusahaan_foreign` (`id_perusahaan`),
  CONSTRAINT `jenis_barang_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.jenis_barang: ~2 rows (approximately)
REPLACE INTO `jenis_barang` (`id`, `nama`, `id_perusahaan`, `created_at`, `updated_at`) VALUES
	(1, 'Makanan', 9567, '2023-07-03 13:23:05', '2023-07-03 13:34:33'),
	(2, 'Electronik', 9567, '2023-07-03 13:23:14', '2023-07-03 13:23:14'),
	(3, 'Hobby', 9567, '2023-07-03 13:23:22', '2023-07-03 13:23:22');

-- Dumping structure for table tipn3594_db_inven.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.migrations: ~11 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(4, '2023_06_14_163333_create_perusahaan_table', 1),
	(5, '2023_06_14_164439_create_user_table', 1),
	(6, '2023_06_20_144834_create_suppliers_table', 1),
	(7, '2023_06_27_055231_create_satuan_barang_table', 1),
	(8, '2023_06_28_090107_create_jenis_barang_table', 1),
	(9, '2023_06_28_102211_create_data_barang_table', 1),
	(10, '2023_06_29_100744_create_barang_masuk_table', 1),
	(11, '2023_06_29_101037_create_barang_keluar_table', 1);

-- Dumping structure for table tipn3594_db_inven.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table tipn3594_db_inven.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table tipn3594_db_inven.perusahaan
CREATE TABLE IF NOT EXISTS `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.perusahaan: ~0 rows (approximately)
REPLACE INTO `perusahaan` (`id`, `nama_perusahaan`, `created_at`, `updated_at`) VALUES
	(9567, 'Kacau Jaya', '2023-07-03 13:20:37', '2023-07-03 13:20:37');

-- Dumping structure for table tipn3594_db_inven.satuan_barang
CREATE TABLE IF NOT EXISTS `satuan_barang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_satuan` varchar(255) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `satuan_barang_id_perusahaan_foreign` (`id_perusahaan`),
  CONSTRAINT `satuan_barang_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.satuan_barang: ~2 rows (approximately)
REPLACE INTO `satuan_barang` (`id`, `nama_satuan`, `id_perusahaan`, `created_at`, `updated_at`) VALUES
	(1, 'Kilo Gram', 9567, '2023-07-03 13:22:33', '2023-07-03 13:22:33'),
	(2, 'Buah', 9567, '2023-07-03 13:22:42', '2023-07-03 13:22:42'),
	(3, 'Pack', 9567, '2023-07-03 13:22:53', '2023-07-03 13:22:53');

-- Dumping structure for table tipn3594_db_inven.suppliers
CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suppliers_id_perusahaan_foreign` (`id_perusahaan`),
  CONSTRAINT `suppliers_id_perusahaan_foreign` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.suppliers: ~4 rows (approximately)
REPLACE INTO `suppliers` (`id`, `id_perusahaan`, `nama`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
	(1, 9567, 'Cisco', 'Amerika', '+62282163863945', '2023-07-03 13:21:27', '2023-07-03 13:21:27'),
	(2, 9567, 'Panasonic', 'krueng geukueah', '+62282163863945', '2023-07-03 13:21:39', '2023-07-03 13:21:39'),
	(3, 9567, 'Oreo', 'Indonesia', '8902374230', '2023-07-03 13:21:59', '2023-07-03 13:21:59'),
	(4, 9567, 'Nutrisari indonesia', 'Indonesia', '918u232', '2023-07-03 13:22:18', '2023-07-03 13:22:18');

-- Dumping structure for table tipn3594_db_inven.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `foto_profile` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_perusahaan_id_foreign` (`perusahaan_id`),
  CONSTRAINT `users_perusahaan_id_foreign` FOREIGN KEY (`perusahaan_id`) REFERENCES `perusahaan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table tipn3594_db_inven.users: ~0 rows (approximately)
REPLACE INTO `users` (`id`, `nama`, `email`, `password`, `role`, `perusahaan_id`, `foto_profile`, `created_at`, `updated_at`) VALUES
	(1, 'Muhammad Andi Aziz', 'admin@admin.com', '$2y$10$zLBHoq5KQ0iGtQ8XYFMQU.UiukW3wEK0ZzK3mwDmtZyH7EObMpIbm', 'admin', 9567, '230703083102.jpg', '2023-07-03 13:20:37', '2023-07-03 13:31:02'),
	(2, 'abdul', 'admin2@admin.com', '$2y$10$xyIo6Y7cbnJI.otgFRd0Du2oOFp3kjdLC8AINQ4.xHq3vMiWUugAi', 'staf', 9567, 'profile_default.jpg', '2023-07-08 12:51:44', '2023-07-08 12:51:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
