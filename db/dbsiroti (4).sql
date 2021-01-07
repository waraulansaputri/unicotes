-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 10:53 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiroti`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_09_14_042711_create_tb_dosen_table', 1),
(4, '2020_09_14_042845_create_tb_jurusan_table', 1),
(5, '2020_09_14_042933_create_tb_kategori_table', 1),
(6, '2020_09_14_043010_create_tb_prodi_table', 1),
(7, '2020_09_14_043107_create_tb_mahasiswa_table', 1),
(8, '2020_09_14_043210_create_tb_prestasi_table', 1),
(9, '2020_09_14_043257_create_tb_tugasakhir_table', 1),
(10, '2020_10_04_215604_create_riwayat_dosen_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_dosen`
--

CREATE TABLE `riwayat_dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tugasakhir` int(11) NOT NULL,
  `pembimbingsatu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembimbingdua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengujisatu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengujidua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengujitiga` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pembimbingsatu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pembimbingdua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pengujisatu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pengujidua` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_pengujitiga` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat_dosen`
--

INSERT INTO `riwayat_dosen` (`id`, `id_tugasakhir`, `pembimbingsatu`, `pembimbingdua`, `pengujisatu`, `pengujidua`, `pengujitiga`, `nip_pembimbingsatu`, `nip_pembimbingdua`, `nip_pengujisatu`, `nip_pengujidua`, `nip_pengujitiga`, `created_at`, `updated_at`) VALUES
(1, 24, 'Humaira, ST.,MT', 'Deni Satria, S.Kom.,M.Kom', 'Ir. Hanriyawan Adnan Mooduto, M.Kom', 'Defni, S.Si.,M.Kom', 'Yance Sonatha, S.Kom., MT', '19810319 200604 2 002', '19780928 200812 1 002', '19660510 199403 1 003', '19811207 200812 2 001', '19801229 200604 2 001', '2020-10-04 23:40:42', '2020-10-05 02:53:50'),
(2, 25, 'Alde Alanda, S.Kom.,MT', 'Defni, S.Si.,M.Kom', 'Yance Sonatha, S.Kom., MT', 'Cipto Prabowo, ST.,MT', 'Fazrol Rozi, M.Sc', '19880825 201504 1 002', '19811207 200812 2 001', '19801229 200604 2 001', '19740302 200812 1 001', '19860721 201012 1 006', '2020-10-05 01:09:36', '2020-10-05 02:55:21'),
(3, 1, 'Alde Alanda, S.Kom.,MT', 'Alde Alanda, S.Kom.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Deddy Prayama, S.Kom.,M.ISD', 'Hj. Rasyidah, S.Si.,M.M', '19880825 201504 1 002', '19880825 201504 1 002', '19780415 200012 1 002', '19810415 200604 1 002', '19740601 200604 2 001', NULL, '2020-10-11 00:50:56'),
(4, 2, 'Hidra Amnur, S.Kom.,SE.,M.Kom', 'Meri Azmi, ST.,M.Cs', 'Ervan Asri, S.Kom.,M.Kom', 'Rika Idmayanti, ST.,M.Kom', 'Cipto Prabowo, ST.,MT', '19820415 201212 1 002', '19810629 200604 2 001', '19780901 200812 1 001', '19780122 200912 2 002', '19740302 200812 1 001', NULL, '2020-10-11 01:17:44'),
(5, 3, 'Alde Alanda, S.Kom.,MT', 'Yance Sonatha, S.Kom., MT', 'Hj. Rasyidah, S.Si.,M.M', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Aldo Erianda, S.ST.,MT', '19880825 201504 1 002', '19801229 200604 2 001', '19740601 200604 2 001', '19780415 200012 1 002', '19890703 000000 1 000', NULL, '2020-10-11 01:18:40'),
(6, 4, 'Deddy Prayama, S.Kom.,M.ISD', 'Alde Alanda, S.Kom.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'H Ikhsan Yusda Prima Putra, SH.,LLM', 'Cipto Prabowo, ST.,MT', '19810415 200604 1 002', '19880825 201504 1 002', '19780415 200012 1 002', '19751001 200604 1 002', '19740302 200812 1 001', NULL, '2020-10-11 01:19:01'),
(7, 5, 'Deddy Prayama, S.Kom.,M.ISD', 'Deni Satria, S.Kom.,M.Kom', 'Ade Irma Suryani, S.ST.,M.TI', 'Alde Alanda, S.Kom.,MT', 'Aldo Erianda, S.ST.,MT', '19810415 200604 1 002', '19780928 200812 1 002', '19790630 201404 2 001', '19880825 201504 1 002', '19890703 000000 1 000', NULL, '2020-10-11 01:22:01'),
(8, 6, 'Ronal Hadi, ST., M.Kom', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Rita Afyenni, S.Kom.,M.Kom', 'Ervan Asri, S.Kom.,M.Kom', 'Yulherniwati, S.Kom.,MT', '19760129 200212 1 001', '19780415 200012 1 002', '19700718 200801 2 010', '19780901 200812 1 001', '19760719 200801 2 000', NULL, '2020-10-11 01:19:33'),
(9, 7, 'Yance Sonatha, S.Kom., MT', 'Hidra Amnur, S.Kom.,SE.,M.Kom', 'Rika Idmayanti, ST.,M.Kom', 'Ronal Hadi, ST., M.Kom', 'Alde Alanda, S.Kom.,MT', '19801229 200604 2 001', '19820415 201212 1 002', '19780122 200912 2 002', '19760129 200212 1 001', '19880825 201504 1 002', NULL, '2020-10-11 01:22:50'),
(10, 8, 'Aldo Erianda, S.ST.,MT', 'Fazrol Rozi, M.Sc', 'Humaira, ST.,MT', 'Hj. Rasyidah, S.Si.,M.M', 'Rika Idmayanti, ST.,M.Kom', '19890703 000000 1 000', '19860721 201012 1 006', '19810319 200604 2 002', '19740601 200604 2 001', '19780122 200912 2 002', NULL, '2020-10-11 01:23:12'),
(11, 10, 'Indri Rahmayuni, ST.,MT', 'Yulherniwati, S.Kom.,MT', 'Fitri Nova, S.ST.,MT', 'Alde Alanda, S.Kom.,MT', 'Rita Afyenni, S.Kom.,M.Kom', '19830625 200801 2 004', '19760719 200801 2 000', '19850529 201404 2 001', '19880825 201504 1 002', '19700718 200801 2 010', NULL, '2020-10-05 22:32:24'),
(12, 12, 'Rahmat Hidayat, ST.,M.Sc.IT', 'Dwiny Meidelfi, S.Kom.,M.Cs', 'Alde Alanda, S.Kom.,MT', 'Cipto Prabowo, ST.,MT', 'H Ikhsan Yusda Prima Putra, SH.,LLM', '19780415 200012 1 002', '19860509 201404 2 001', '19880825 201504 1 002', '19740302 200812 1 001', '19751001 200604 1 002', NULL, '2020-10-05 02:51:36'),
(13, 9, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Fazrol Rozi, M.Sc', 'Defni, S.Si.,M.Kom', '19880825 201504 1 002', '19830625 200801 2 004', '19780415 200012 1 002', '19860721 201012 1 006', '19811207 200812 2 001', NULL, '2020-10-05 02:59:27'),
(14, 11, 'Yulherniwati, S.Kom.,MT', 'Defni, S.Si.,M.Kom', 'Ir. Hanriyawan Adnan Mooduto, M.Kom', 'Cipto Prabowo, ST.,MT', 'Yance Sonatha, S.Kom., MT', '19760719 200801 2 000', '19811207 200812 2 001', '19660510 199403 1 003', '19740302 200812 1 001', '19801229 200604 2 001', NULL, '2020-10-05 02:51:09'),
(15, 26, '', '', '', '', '', '', '', '', '', '', '2020-10-08 09:15:05', '2020-10-08 09:15:05'),
(16, 27, '', '', '', '', '', '', '', '', '', '', '2020-10-09 04:51:55', '2020-10-09 04:51:55'),
(17, 28, '', '', '', '', '', '', '', '', '', '', '2020-10-09 05:37:10', '2020-10-09 05:37:10'),
(18, 29, '', '', '', '', '', '', '', '', '', '', '2020-10-09 05:39:41', '2020-10-09 05:39:41'),
(19, 30, '', '', '', '', '', '', '', '', '', '', '2020-10-09 05:41:39', '2020-10-09 05:41:39'),
(20, 31, '', '', '', '', '', '', '', '', '', '', '2020-10-09 05:52:01', '2020-10-09 05:52:01'),
(21, 32, '', '', '', '', '', '', '', '', '', '', '2020-10-09 06:03:42', '2020-10-09 06:03:42'),
(22, 33, '', '', '', '', '', '', '', '', '', '', '2020-10-09 06:08:44', '2020-10-09 06:08:44'),
(23, 34, '', '', '', '', '', '', '', '', '', '', '2020-10-09 06:16:00', '2020-10-09 06:16:00'),
(24, 35, '', '', '', '', '', '', '', '', '', '', '2020-10-09 06:32:44', '2020-10-09 06:32:44'),
(25, 36, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'Defni, S.Si.,M.Kom', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Ir. Hanriyawan Adnan Mooduto, M.Kom', '19880825 201504 1 002', '19830625 200801 2 004', '19811207 200812 2 001', '19780415 200012 1 002', '19660510 199403 1 003', '2020-10-09 10:16:54', '2020-10-10 20:31:46'),
(26, 37, 'Indri Rahmayuni, ST.,MT', 'Hidra Amnur, S.Kom.,SE.,M.Kom', 'Alde Alanda, S.Kom.,MT', 'Ir. Hanriyawan Adnan Mooduto, M.Kom', 'Hj. Rasyidah, S.Si.,M.M', '19830625 200801 2 004', '19820415 201212 1 002', '19880825 201504 1 002', '19660510 199403 1 003', '19740601 200604 2 001', '2020-10-10 20:40:47', '2020-10-10 20:43:21'),
(27, 38, 'Alde Alanda, S.Kom.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Yance Sonatha, S.Kom., MT', 'Ervan Asri, S.Kom.,M.Kom', 'Dr. Yuhefizar, S.Kom.,M.Kom., IPM', '19880825 201504 1 002', '19780415 200012 1 002', '19801229 200604 2 001', '19780901 200812 1 001', '19760113 200604 1 002', '2020-10-10 20:46:30', '2020-10-10 20:49:25'),
(28, 39, 'Ronal Hadi, ST., M.Kom', 'Rita Afyenni, S.Kom.,M.Kom', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Fitri Nova, S.ST.,MT', 'Meri Azmi, ST.,M.Cs', '19760129 200212 1 001', '19700718 200801 2 010', '19780415 200012 1 002', '19850529 201404 2 001', '19810629 200604 2 001', '2020-10-10 20:53:32', '2020-10-10 20:55:39'),
(29, 40, 'Cipto Prabowo, ST.,MT', 'Yulherniwati, S.Kom.,MT', 'Meri Azmi, ST.,M.Cs', 'Deni Satria, S.Kom.,M.Kom', 'Rika Idmayanti, ST.,M.Kom', '19740302 200812 1 001', '19760719 200801 2 000', '19810629 200604 2 001', '19780928 200812 1 002', '19780122 200912 2 002', '2020-10-10 20:57:20', '2020-10-10 20:59:26'),
(30, 41, 'Fitri Nova, S.ST.,MT', 'Deddy Prayama, S.Kom.,M.ISD', 'Dwiny Meidelfi, S.Kom.,M.Cs', 'Cipto Prabowo, ST.,MT', 'Ervan Asri, S.Kom.,M.Kom', '19850529 201404 2 001', '19810415 200604 1 002', '19860509 201404 2 001', '19740302 200812 1 001', '19780901 200812 1 001', '2020-10-10 21:02:27', '2020-10-10 21:04:08'),
(31, 42, 'Alde Alanda, S.Kom.,MT', 'Rita Afyenni, S.Kom.,M.Kom', 'Rita Afyenni, S.Kom.,M.Kom', 'Ervan Asri, S.Kom.,M.Kom', 'Deddy Prayama, S.Kom.,M.ISD', '19880825 201504 1 002', '19700718 200801 2 010', '19700718 200801 2 010', '19780901 200812 1 001', '19810415 200604 1 002', '2020-10-10 21:11:13', '2020-10-10 21:13:37'),
(32, 43, 'Aldo Erianda, S.ST.,MT', 'Rita Afyenni, S.Kom.,M.Kom', 'Humaira, ST.,MT', 'Cipto Prabowo, ST.,MT', 'Yance Sonatha, S.Kom., MT', '19890703 000000 1 000', '19700718 200801 2 010', '19810319 200604 2 002', '19740302 200812 1 001', '19801229 200604 2 001', '2020-10-10 21:16:10', '2020-10-10 21:18:17'),
(33, 44, 'Deni Satria, S.Kom.,M.Kom', 'Defni, S.Si.,M.Kom', 'Hj. Rasyidah, S.Si.,M.M', 'Meri Azmi, ST.,M.Cs', 'Yance Sonatha, S.Kom., MT', '19780928 200812 1 002', '19811207 200812 2 001', '19740601 200604 2 001', '19810629 200604 2 001', '19801229 200604 2 001', '2020-10-10 21:20:24', '2020-10-10 21:22:18'),
(34, 45, 'Fitri Nova, S.ST.,MT', 'Ir. Hanriyawan Adnan Mooduto, M.Kom', 'Cipto Prabowo, ST.,MT', 'Ervan Asri, S.Kom.,M.Kom', 'Rika Idmayanti, ST.,M.Kom', '19850529 201404 2 001', '19660510 199403 1 003', '19740302 200812 1 001', '19780901 200812 1 001', '19780122 200912 2 002', '2020-10-10 21:27:06', '2020-10-10 21:41:25'),
(35, 46, 'Hidra Amnur, S.Kom.,SE.,M.Kom', 'Rita Afyenni, S.Kom.,M.Kom', 'Yance Sonatha, S.Kom., MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Humaira, ST.,MT', '19820415 201212 1 002', '19700718 200801 2 010', '19801229 200604 2 001', '19780415 200012 1 002', '19810319 200604 2 002', '2020-10-10 21:32:33', '2020-10-10 21:34:44'),
(36, 47, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Dr. Yuhefizar, S.Kom.,M.Kom., IPM', 'Taufik Gusman, S.ST.,M.Ds', '19880825 201504 1 002', '19830625 200801 2 004', '19780415 200012 1 002', '19760113 200604 1 002', '19880810 201605 1 000', '2020-10-11 05:05:39', '2020-10-11 05:14:03'),
(37, 48, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Defni, S.Si.,M.Kom', 'H Ikhsan Yusda Prima Putra, SH.,LLM', '19880825 201504 1 002', '19830625 200801 2 004', '19780415 200012 1 002', '19811207 200812 2 001', '19751001 200604 1 002', '2020-10-11 11:14:52', '2020-10-11 11:27:02'),
(38, 49, '', '', '', '', '', '', '', '', '', '', '2020-10-11 11:35:52', '2020-10-11 11:35:52'),
(39, 50, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'Defni, S.Si.,M.Kom', 'H Ikhsan Yusda Prima Putra, SH.,LLM', 'Rahmat Hidayat, ST.,M.Sc.IT', '19880825 201504 1 002', '19830625 200801 2 004', '19811207 200812 2 001', '19751001 200604 1 002', '19780415 200012 1 002', '2020-10-11 11:40:27', '2020-10-11 11:41:49'),
(40, 51, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'H Ikhsan Yusda Prima Putra, SH.,LLM', 'Ade Irma Suryani, S.ST.,M.TI', 'Rahmat Hidayat, ST.,M.Sc.IT', '19880825 201504 1 002', '19830625 200801 2 004', '19751001 200604 1 002', '19790630 201404 2 001', '19780415 200012 1 002', '2020-10-13 08:28:31', '2020-10-13 08:30:42'),
(41, 52, 'Alde Alanda, S.Kom.,MT', 'Indri Rahmayuni, ST.,MT', 'Rita Afyenni, S.Kom.,M.Kom', 'Cipto Prabowo, ST.,MT', 'Rahmat Hidayat, ST.,M.Sc.IT', '19880825 201504 1 002', '19830625 200801 2 004', '19700718 200801 2 010', '19740302 200812 1 001', '19780415 200012 1 002', '2020-10-13 08:44:38', '2020-10-15 01:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` bigint(20) UNSIGNED NOT NULL,
  `nip_dosen` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_dosen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_dosen` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_dosen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nip_dosen`, `nama_dosen`, `jabatan_dosen`, `foto_dosen`, `created_at`, `updated_at`) VALUES
(1, '19790630 201404 2 001', 'Ade Irma Suryani, S.ST.,M.TI', 'Asisten Ahli', '43172-2020-09-15-21-33-54.png', '2020-09-13 23:07:01', '2020-10-09 09:45:54'),
(2, '19880825 201504 1 002', 'Alde Alanda, S.Kom.,MT', 'Tenaga Pengajar', '48850-2020-09-15-21-34-07.png', '2020-09-14 06:10:48', '2020-09-15 14:34:07'),
(3, '19890703 000000 1 000', 'Aldo Erianda, S.ST.,MT', 'Tenaga Pengajar', '50280-2020-09-15-21-34-19.png', '2020-09-14 06:14:26', '2020-09-15 14:34:19'),
(6, '19660510 199403 1 003', 'Ir. Hanriyawan Adnan Mooduto, M.Kom', 'Lektor Kepala', '', '2020-09-16 08:21:22', '2020-09-16 08:21:22'),
(7, '19700718 200801 2 010', 'Rita Afyenni, S.Kom.,M.Kom', 'Lektor', '', '2020-09-16 08:21:51', '2020-09-16 08:21:51'),
(8, '19740302 200812 1 001', 'Cipto Prabowo, ST.,MT', 'Kaprodi Teknik Komputer', '', '2020-09-16 08:22:41', '2020-09-16 08:22:41'),
(9, '19740601 200604 2 001', 'Hj. Rasyidah, S.Si.,M.M', 'Lektor Kepala', '', '2020-09-16 08:23:13', '2020-09-16 08:23:13'),
(10, '19751001 200604 1 002', 'H Ikhsan Yusda Prima Putra, SH.,LLM', 'Lektor', '', '2020-09-16 08:24:08', '2020-09-16 08:24:08'),
(11, '19760113 200604 1 002', 'Dr. Yuhefizar, S.Kom.,M.Kom., IPM', 'Lektor Kepala', '', '2020-09-16 08:30:04', '2020-09-16 08:30:04'),
(12, '19760129 200212 1 001', 'Ronal Hadi, ST., M.Kom', 'Kajur Teknologi Informasi', '', '2020-09-16 08:33:29', '2020-09-16 08:33:29'),
(13, '19760719 200801 2 000', 'Yulherniwati, S.Kom.,MT', 'Lektor', '', '2020-09-16 08:34:13', '2020-09-16 08:34:13'),
(14, '19780122 200912 2 002', 'Rika Idmayanti, ST.,M.Kom', 'Lektor', '', '2020-09-16 08:34:55', '2020-09-16 08:34:55'),
(15, '19780415 200012 1 002', 'Rahmat Hidayat, ST.,M.Sc.IT', 'Sekretaris Jurusan Teknologi Informasi', '', '2020-09-16 08:35:36', '2020-09-16 08:35:36'),
(16, '19780901 200812 1 001', 'Ervan Asri, S.Kom.,M.Kom', 'Lektor', '', '2020-09-16 08:36:17', '2020-09-16 08:36:17'),
(17, '19780928 200812 1 002', 'Deni Satria, S.Kom.,M.Kom', 'Lektor', '', '2020-09-16 08:38:05', '2020-09-16 08:38:05'),
(18, '19801229 200604 2 001', 'Yance Sonatha, S.Kom., MT', 'Lektor Kepala', '', '2020-09-16 08:43:34', '2020-09-16 08:43:34'),
(19, '19810319 200604 2 002', 'Humaira, ST.,MT', 'Lektor Kepala', '', '2020-09-16 08:43:58', '2020-09-16 08:43:58'),
(20, '19810415 200604 1 002', 'Deddy Prayama, S.Kom.,M.ISD', 'Lektor Kepala', '', '2020-09-16 08:44:38', '2020-09-16 08:44:38'),
(21, '19810629 200604 2 001', 'Meri Azmi, ST.,M.Cs', 'Lektor Kepala', '', '2020-09-16 08:45:38', '2020-09-16 08:45:38'),
(22, '19811207 200812 2 001', 'Defni, S.Si.,M.Kom', 'Kaprodi Manajemen Informatika', '', '2020-09-16 08:46:21', '2020-09-16 08:46:21'),
(23, '19820121 200801 1 008', 'Mubarak Ahmad, S.Kom', 'Tenaga Pengajar', '', '2020-09-16 08:46:59', '2020-09-16 08:46:59'),
(24, '19820415 201212 1 002', 'Hidra Amnur, S.Kom.,SE.,M.Kom', 'Lektor', '', '2020-09-16 08:47:21', '2020-09-16 08:47:21'),
(25, '19830625 200801 2 004', 'Indri Rahmayuni, ST.,MT', 'Lektor', '', '2020-09-16 08:47:47', '2020-09-16 08:47:47'),
(26, '19850529 201404 2 001', 'Fitri Nova, S.ST.,MT', 'Asisten Ahli', '', '2020-09-16 08:48:16', '2020-09-16 08:48:16'),
(27, '19860509 201404 2 001', 'Dwiny Meidelfi, S.Kom.,M.Cs', 'Kaprodi Teknik Rekayasa Perangkat Lunak', '', '2020-09-16 08:49:13', '2020-09-16 08:49:13'),
(28, '19860721 201012 1 006', 'Fazrol Rozi, M.Sc', 'Asisten Ahli', '', '2020-09-16 08:49:59', '2020-09-16 08:49:59'),
(33, '19760719 200801 2 000', 'Taufik Gusman, S.ST.,M.Ds', 'Tenaga Pengajar', '184650-2020-10-13-16-12-49.jpg', '2020-10-13 09:12:49', '2020-10-13 09:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', '2020-09-13 22:32:14', '2020-09-13 22:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi', '2020-09-13 22:30:20', '2020-10-09 09:51:34'),
(2, 'Jaringan', '2020-09-13 22:31:32', '2020-09-13 22:31:32'),
(3, 'Multimedia', '2020-09-13 22:31:40', '2020-09-13 22:31:40'),
(4, 'Aplikasi', '2020-09-13 22:31:52', '2020-09-13 22:31:52'),
(5, 'IoT', '2020-09-13 22:31:59', '2020-09-13 22:31:59'),
(7, 'Mobile', '2020-10-13 09:32:08', '2020-10-13 09:32:08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mahasiswa` bigint(20) UNSIGNED NOT NULL,
  `bp_mahasiswa` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mahasiswa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_prodi` bigint(20) UNSIGNED NOT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mahasiswa`, `bp_mahasiswa`, `nama_mahasiswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `id_prodi`, `tahun_masuk`, `created_at`, `updated_at`) VALUES
(1, '1501081001', 'Tiara Ramayani', 'Riau', '27-07-1998', 'Perempuan', 'Padang', 2, 2015, '2020-09-26 19:35:01', '2020-10-09 10:06:57'),
(2, '1501082016', 'Romy Syawaldi', 'Padang', '12-08-1997', 'Laki-Laki', 'Padang', 2, 2015, '2020-09-26 19:36:34', '2020-09-26 19:36:34'),
(3, '1501092032', 'Tara Desyafriben', 'Padang', '21-07-1997', 'Laki-Laki', 'Padang', 1, 2015, '2020-09-26 19:37:56', '2020-09-26 19:37:56'),
(4, '1501082036', 'Ridho Hidayat', 'Padang', '23-01-1997', 'Laki-Laki', 'Padang', 2, 2015, '2020-09-26 19:39:09', '2020-09-26 19:39:09'),
(5, '1601081018', 'Adhitya Gading Pramana Agus', 'Tanah Datar', '21-05-1998', 'Laki-Laki', 'Depan Mesjid Hj.Miskin No. 42 Baruah Pandai Sikek, Kec.X koto Kab.Tanah Datar', 2, 2016, '2020-09-26 19:40:27', '2020-09-26 19:40:27'),
(6, '1601081021', 'Ridho Ilahi', 'Dumai', '08-08-1998', 'Laki-Laki', 'Jl.Panam Bukit Kapur Kota Dumai Riau', 2, 2016, '2020-09-26 19:45:36', '2020-09-26 19:45:36'),
(7, '1601091031', 'Dio Nanda', 'Padang', '27-05-1998', 'Laki-Laki', 'Jl. Blok.B Karang Putih Indarung RT.04 RW.02 No.39 Kel. Batu Gadang Kec.Lubuk Kilangan', 1, 2016, '2020-09-26 20:02:09', '2020-09-26 20:02:09'),
(8, '1601092006', 'Nada Amanatullah', 'Bukit Tinggi', '14-07-1998', 'Perempuan', 'Jorong III Suku Kecamatan Canduang Kabupaten Agam', 1, 2016, '2020-09-26 20:47:51', '2020-09-26 20:47:51'),
(10, '1701092018', 'Miftahurrahmi', 'Pariaman', '01-06-1999', 'Perempuan', 'Pariaman', 1, 2017, '2020-09-26 20:49:36', '2020-09-26 20:49:36'),
(11, '1701091021', 'Yolanda', 'Bungus', '23-05-1999', 'Perempuan', 'Bungus Taluk Kabung', 1, 2017, '2020-09-26 20:51:14', '2020-09-26 20:51:14'),
(12, '1701091019', 'Fauziah Wulandari', 'Pariaman', '12-09-1999', 'Perempuan', 'Pariaman', 1, 2017, '2020-09-26 20:52:46', '2020-09-26 20:52:46'),
(37, '1501081016', 'Sarah Astri Jenia', 'Padang', '06-12-1997', 'Perempuan', 'Padang', 2, 2015, '2020-10-10 20:40:47', '2020-10-10 20:40:47'),
(38, '1501081035', 'Yogi Febrian Wibawa', 'Padang', '05-06-1997', 'Laki-Laki', 'Padang', 2, 2015, '2020-10-10 20:46:30', '2020-10-10 20:46:30'),
(39, '1501081020', 'Mila Arona', 'Padang', '12-04-1997', 'Perempuan', 'Padang', 2, 2015, '2020-10-10 20:53:32', '2020-10-10 20:53:32'),
(40, '1501081013', 'Mona', 'Padang', '23-02-1997', 'Perempuan', 'Padang', 2, 2015, '2020-10-10 20:57:20', '2020-10-10 20:57:20'),
(41, '1601081027', 'Doni Mulya Fardiyansyah', 'Padang', '02-09-1998', 'Laki-Laki', 'Jalan Bukit Apit Puhun, Kelurahan Bukit Apit, Kecamatan Guguk Panjang, Kota Bukittinggi, Sumatera Barat', 2, 2016, '2020-10-10 21:02:27', '2020-10-10 21:02:27'),
(42, '1601082006', 'Daniel Alfis', 'Bekasi', '01-04-1998', 'Laki-Laki', 'Perum. Kartika Wanasari 2, Jl. Rajawali 1 Blok HB No.7, RT 001/036, Cibitung, Bekasi', 2, 2016, '2020-10-10 21:11:13', '2020-10-10 21:11:13'),
(43, '1601091003', 'Jufri Chory Putri', 'Pesisir Selatan', '29-04-1998', 'Perempuan', 'Simpang Ampang Pulai Kec. Koto XI Tarusan Kab. Pesisir Selatan', 1, 2016, '2020-10-10 21:16:10', '2020-10-10 21:16:10'),
(44, '1601091010', 'Duhas Rika Cisa', 'Padang', '07-05-1998', 'Perempuan', 'Padang', 1, 2016, '2020-10-10 21:20:24', '2020-10-10 21:20:24'),
(45, '1701081007', 'Vahrizal Azim', 'Padang', '18-09-1997', 'Laki-Laki', 'Padang', 2, 2017, '2020-10-10 21:27:06', '2020-10-10 21:27:06'),
(46, '1701081014', 'Windi Sri Rahayu', 'Padang', '18-07-1999', 'Perempuan', 'Perumahan Cemara Blok CC 6 RT 01 / RW 03 Kel. Tabing Banda Gadang Kec. Nanggalo Kota Padang', 2, 2017, '2020-10-10 21:32:33', '2020-10-10 21:32:33'),
(52, '1701092009', 'Lokyta Indah Wulandari', 'Koto Tinggi', '03-04-1999', 'Perempuan', 'Jalan Anggur 1 No.94, Belimbing', 1, 2017, '2020-10-13 08:44:38', '2020-10-13 08:44:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` bigint(20) UNSIGNED NOT NULL,
  `id_mahasiswa` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_perlombaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_prestasi` enum('Akademik','Non Akademik') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_perlombaan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat_prestasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `juara` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `id_mahasiswa`, `nama_mahasiswa`, `tanggal_perlombaan`, `jenis_prestasi`, `nama_perlombaan`, `tingkat_prestasi`, `juara`, `sertifikat`, `created_at`, `updated_at`) VALUES
(1, 2, 'Romy Syawaldi', '02-10-2020', 'Akademik', 'PKM DIKTI', 'Nasional', 'Presentasi Terfavorit', '711404-2020-10-02-02-01-05.pdf', '2020-10-01 19:01:05', '2020-10-01 19:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id_prodi` bigint(20) UNSIGNED NOT NULL,
  `nama_prodi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dosen` bigint(20) DEFAULT NULL,
  `id_jurusan` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id_prodi`, `nama_prodi`, `id_dosen`, `id_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'D3 Manajemen Informatika', 22, 1, '2020-09-13 22:34:54', '2020-10-16 01:51:20'),
(2, 'D3 Teknik Komputer', 8, 1, '2020-09-13 22:35:13', '2020-09-13 22:35:13'),
(3, 'D4 Teknologi Rekayasa Perangkat Lunak', 27, 1, '2020-09-13 22:35:25', '2020-09-13 22:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas_akhir`
--

CREATE TABLE `tb_tugas_akhir` (
  `id_tugasakhir` bigint(20) UNSIGNED NOT NULL,
  `id_mahasiswa` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_tugasakhir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pembimbingsatu` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pembimbingdua` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pengujisatu` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pengujidua` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pengujitiga` bigint(20) UNSIGNED DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL,
  `laporan_abstrak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laporan_lengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saran_pengembangan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_tugas_akhir`
--

INSERT INTO `tb_tugas_akhir` (`id_tugasakhir`, `id_mahasiswa`, `nama_mahasiswa`, `judul_tugasakhir`, `id_kategori`, `id_pembimbingsatu`, `id_pembimbingdua`, `id_pengujisatu`, `id_pengujidua`, `id_pengujitiga`, `tahun_selesai`, `laporan_abstrak`, `laporan_lengkap`, `saran_pengembangan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tiara Ramayani', 'GIBAL (Gelang Anti Begal) Sebagai Solusi Pencegahan Dini Kejahatan Begal Berbasis Mikrokontroler dan Internet Of Things', 2, 2, 2, 15, 20, 9, 2018, '44525-2020-10-11-07-50-56.pdf', '72-1-50-1-10-20170812.pdf', 'Memperbagus tampilan gibal', '2020-09-26 19:35:01', '2020-10-11 00:50:56'),
(2, 2, 'Romy Syawaldi', 'Perancangan Visualisasi 3D Desain Denah Kampus Politeknik Negeri Padang Dengan Teknologi Augmented Reality (AR) Berbasis Android', 4, 24, 21, 16, 14, 8, 2018, '50388-2020-10-11-08-17-44.pdf', '53960-2020-10-11-08-17-44.pdf', 'Memperbagus tampilan denah pada AR', '2020-09-26 19:36:34', '2020-10-11 01:17:44'),
(3, 3, 'Tara Desyafriben', 'Pengembangan Sistem Informasi Tugas Akhir di Jurusan Teknologi Informasi Politeknik Negeri Padang', 1, 2, 18, 9, 15, 3, 2018, '17747-2020-10-11-08-18-40.pdf', '51923-2020-10-11-08-18-40.pdf', 'Memperbaiki tampilan, menambahkan laporan', '2020-09-26 19:37:56', '2020-10-11 01:18:40'),
(4, 4, 'Ridho Hidayat', 'Server Penetration Testing Jurusan Teknologi Informasi Politeknik Negeri Padang', 2, 20, 2, 15, 10, 8, 2018, '90448-2020-10-11-08-19-01.pdf', '11284-2020-10-11-08-19-01.pdf', 'Memperbagus tampilan', '2020-09-26 19:39:09', '2020-10-11 01:19:01'),
(5, 5, 'Adhitya Gading Pramana Agus', 'Implementasi High Availability Server Pada Cloud Computing Berbasis PROXMOX VE dengan Teknik Failover Clustering', 2, 20, 17, 1, 2, 3, 2019, '45280-2020-10-11-08-22-01.pdf', '25536-2020-10-11-08-22-01.pdf', 'Memperbaiki tampilan', '2020-09-26 19:40:27', '2020-10-11 01:22:01'),
(6, 6, 'Ridho Ilahi', 'Mata Ketiga Untuk Tunanetra Menggunakan Sensor Ultrasonik dan Arduino Pro Mini 328', 2, 12, 15, 7, 16, 13, 2019, '39380-2020-10-11-08-19-33.pdf', '45642-2020-10-11-08-19-33.pdf', 'Memperbaiki tampilan', '2020-09-26 19:45:36', '2020-10-11 01:19:33'),
(7, 7, 'Dio Nanda', 'Sistem Informasi Pengelolaan Data Akademik Praktik Kerja Lapangan di Jurusan Teknologi Informasi Politeknik Negeri Padang Berbasis Web', 1, 18, 24, 14, 12, 2, 2019, NULL, '67377-2020-10-11-08-22-50.pdf', 'Memperbaiki Tampilan', '2020-09-26 20:02:09', '2020-10-11 01:22:50'),
(8, 8, 'Nada Amanatullah', 'Aplikasi Virtual Classroom APPSKEP Sebagai Solusi Mempersiapkan Uji Kompetensi NERS Indonesia (UKNI) Berbasis Android', 4, 3, 28, 19, 9, 14, 2019, '81796-2020-10-11-08-23-12.pdf', '49617-2020-10-11-08-23-12.pdf', 'Memperbaiki Tampilan', '2020-09-26 20:47:51', '2020-10-11 01:23:12'),
(10, 10, 'Miftahurrahmi', 'Sistem Informasi Program Daurah Ramadhan', 1, 25, 13, 26, 2, 7, 2020, NULL, NULL, 'Memperbaiki Tampilan', '2020-09-26 20:49:36', '2020-10-05 22:32:24'),
(11, 11, 'Yolanda', 'Sistem Informasi Program Daurah', 1, 13, 22, 6, 8, 18, 2020, NULL, NULL, 'Memperbaiki tampilan', '2020-09-26 20:51:14', '2020-09-26 21:17:35'),
(12, 12, 'Fauziah Wulandari', 'Analisis dan Perancangan Sistem Informasi Poliklinik Politeknik Negeri Padang', 1, 15, 27, 2, 8, 10, 2020, NULL, NULL, 'Memperbaiki Tampilan', '2020-09-26 20:52:46', '2020-09-26 21:18:43'),
(37, 37, 'Sarah Astri Jenia', 'Rancang Bangun Penerapan IoT Untuk Pengontrolan Perangkat Elektronik Menggunakan Suara Berbasis Android dan Arduino Uno', 2, 25, 24, 2, 6, 9, 2018, '46530-2020-10-11-03-43-21.pdf', '72473-2020-10-11-03-43-21.pdf', NULL, '2020-10-10 20:40:47', '2020-10-10 20:43:21'),
(38, 38, 'Yogi Febrian Wibawa', 'Perancangan Dan Pembuatan Aplikasi Android Fast Help (Pertolongan Cepat Kepada Korban Kecelakaan Menggunakan Fitur Tracking))', 4, 2, 15, 18, 16, 11, 2018, '19835-2020-10-11-03-49-25.pdf', '55307-2020-10-11-03-49-25.pdf', 'Memperbaiki Tampilan', '2020-10-10 20:46:30', '2020-10-10 20:49:25'),
(39, 39, 'Mila Arona', 'Perancangan dan Pembuatan Aplikas Android Pengontrolan Tong Sampah Pintar Menggunakan Sensor Ultrasonik dan Arduino Uno', 4, 12, 7, 15, 26, 21, 2018, '99073-2020-10-11-03-55-39.pdf', '18016-2020-10-11-03-55-39.pdf', 'Memperbaiki Tampilan', '2020-10-10 20:53:32', '2020-10-10 20:55:39'),
(40, 40, 'Mona', 'Perancangan Dan Implementasi Jaringan Komputer Sistem Diskless-Terminal Berbasis WTSP Dan Raspberry PI', 2, 8, 13, 21, 17, 14, 2018, '71847-2020-10-11-03-59-26.pdf', '21958-2020-10-11-03-59-26.pdf', NULL, '2020-10-10 20:57:20', '2020-10-10 20:59:26'),
(41, 41, 'Doni Mulya Fardiyansyah', 'Membangun Server Multimedia Streaming Dan Referensi Pada Jurusan Teknologi Informasi', 2, 26, 20, 27, 8, 16, 2019, '83320-2020-10-11-04-04-08.pdf', '59012-2020-10-11-04-04-08.pdf', NULL, '2020-10-10 21:02:27', '2020-10-10 21:04:08'),
(42, 42, 'Daniel Alfis', 'Membangun Server Monitoring Trafik Jaringan IDS dan IPS Menggunakan SNORT Pada Debian Server', 2, 2, 7, 7, 16, 20, 2019, '48413-2020-10-11-04-13-37.pdf', '86617-2020-10-11-04-13-37.pdf', NULL, '2020-10-10 21:11:13', '2020-10-10 21:13:37'),
(43, 43, 'Jufri Chory Putri', 'Perancangan Dan Implementasi Sistem Informasi Peternakan Ayam Petelur Berbasis Web', 1, 3, 7, 19, 8, 18, 2019, '20450-2020-10-11-04-18-17.pdf', '99229-2020-10-11-04-18-17.pdf', 'Memperbaiki Tampilan Website', '2020-10-10 21:16:10', '2020-10-10 21:18:17'),
(44, 44, 'Duhas Rika Cisa', 'Sistem Informasi Layanan Terpadu Klinik Media Imani', 1, 17, 22, 9, 21, 18, 2019, '37091-2020-10-11-04-22-18.pdf', '85388-2020-10-11-04-22-18.pdf', 'Memperbaiki Tampilan', '2020-10-10 21:20:24', '2020-10-10 21:22:18'),
(52, 52, 'Lokyta Indah Wulandari', 'Pengembangan Sistem Informasi Repositori Tugas Akhir Jurusan Teknologi Informasi Politeknik Negeri Padang', 1, 2, 25, 7, 8, 15, 2020, '40098-2020-10-13-15-45-58.pdf', '12780-2020-10-13-15-45-58.pdf', 'Membuat fasilitas export data dalam format excel', '2020-10-13 08:44:38', '2020-10-15 01:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('Mahasiswa','Dosen','Kaprodi','Kajur','Admin','Super Admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp_nip` varchar(21) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hak_akses` enum('Pending','Aktif') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `avatar`, `bp_nip`, `hak_akses`, `created_at`, `updated_at`) VALUES
(2, 'Admin SIROTI', 'siroti.pnp@gmail.com', '2020-09-26 21:39:00', '$2y$10$s56jBTCoO5aM8g7eibmdw.ZzrFAQXnxP5sFiB.KajvrfFXkaVrDVS', 'TNyW1dfy88F5XaC6VH4ikjlzt4B8umipbfTz69EfIlKF1AqxKlgFi7HQKPDZ', 'Admin', '1701092009_lokyta indah wulandari.jpg', NULL, 'Aktif', '2020-09-26 21:38:44', '2020-10-13 09:34:58'),
(3, 'Defni, S.Si.,M.Kom', 'miftahurrahmi45@gmail.com', '2020-09-26 21:49:13', '$2y$10$X4lgnokAW0.UvPwsC/3xwOMSB3lqU7F9DeW.0G3V1mcbTpXQNWN/.', 'nweo7ABxHuB9227CDqlNESf05j3QiYI5tIhoFQumVLSpgScZ6ytkubwT1jtT', 'Kaprodi', NULL, '19811207 200812 2 001', 'Aktif', '2020-09-26 21:43:20', '2020-09-29 02:53:12'),
(4, 'Alde Alanda, S.Kom.,MT', 'fauziahwulandari99@gmail.com', '2020-09-26 21:53:24', '$2y$10$F2c8r4MHq87o0/7yGUKD5eyH1c9p.c0U1iTke1kUus9ZuZcFVfGna', 'CGOx84VdcdE871rgxgn9u4b1x10Pch96VFnBsKEusdY2sRTeQOW7XHExX2Vh', 'Dosen', NULL, '19880825 201504 1 002', 'Aktif', '2020-09-26 21:49:47', '2020-09-29 02:53:01'),
(5, 'Ronal Hadi, ST., M.Kom', 'yolandaeffnd05@gmail.com', '2020-09-26 21:58:18', '$2y$10$V3iraHTdmbzUfA0hy4AJdO1NRVeGW9QNiMssG/IB2lvpWpup7Cnv6', 'QEV0XjIQJnmVsyr97lVlNHKhyuOEgPcd1k7cwCrGeasvJP2BIghVnZyPiEdf', 'Kajur', 'default-avatar.png', '19760129 200212 1 001', 'Aktif', '2020-09-26 21:54:58', '2020-10-10 21:53:03'),
(7, 'Rahmat Hidayat, ST.,M.Sc.IT', 'rarayuliainsani@gmail.com', '2020-10-03 01:31:05', '$2y$10$r5f8Qo1Yo4FyeVEAdZiv/.n6xg7JECOQ03hQ0nTdmsYKM7J4NQ4A2', NULL, 'Dosen', NULL, '19780415 200012 1 002', 'Aktif', '2020-10-03 01:16:33', '2020-10-13 09:33:32'),
(8, 'Cipto Prabowo, ST.,MT', 'yuliard06@gmail.com', NULL, '$2y$10$W/Ka6NhA6ahNlXlVdsXkt.lgHUE.7ku4ZChOttPZzXsLa78LSSiJ2', NULL, 'Kaprodi', NULL, '19740302 200812 1 001', 'Aktif', '2020-10-09 05:05:35', '2020-10-13 09:33:50'),
(9, 'Dwiny Meidelfi, S.Kom.,M.Cs', 'ririsilvanidwiputri@gmail.com', '2020-10-09 05:14:06', '$2y$10$z/ZeEmN/e3PVM5D5.iDLl.LAUkdYJj6Msq0LR09IQKp/GV68naSEK', NULL, 'Kaprodi', NULL, '19860509 201404 2 001', 'Aktif', '2020-10-09 05:12:47', '2020-10-09 05:14:06'),
(12, 'Lokyta Indah Wulandari', 'lokyta.indahwulandari@gmail.com', '2020-10-13 07:33:30', '$2y$10$QyM5G3v2GOEVrDHfBn1cZ.IKMzf6jPX58hLbLtoOziUnZ.IxXtscW', NULL, 'Mahasiswa', NULL, '1701092009', 'Pending', '2020-10-13 07:33:12', '2020-10-16 01:23:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `riwayat_dosen`
--
ALTER TABLE `riwayat_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `tb_mahasiswa_id_prodi_foreign` (`id_prodi`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `tb_prestasi_id_mahasiswa_foreign` (`id_mahasiswa`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `tb_prodi_id_jurusan_foreign` (`id_jurusan`);

--
-- Indexes for table `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  ADD PRIMARY KEY (`id_tugasakhir`),
  ADD KEY `tb_tugas_akhir_id_mahasiswa_foreign` (`id_mahasiswa`),
  ADD KEY `tb_tugas_akhir_id_kategori_foreign` (`id_kategori`),
  ADD KEY `tb_tugas_akhir_id_pembimbingsatu_foreign` (`id_pembimbingsatu`),
  ADD KEY `tb_tugas_akhir_id_pembimbingdua_foreign` (`id_pembimbingdua`),
  ADD KEY `tb_tugas_akhir_id_pengujisatu_foreign` (`id_pengujisatu`),
  ADD KEY `tb_tugas_akhir_id_pengujidua_foreign` (`id_pengujidua`),
  ADD KEY `tb_tugas_akhir_id_pengujitiga_foreign` (`id_pengujitiga`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `riwayat_dosen`
--
ALTER TABLE `riwayat_dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id_jurusan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mahasiswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id_prodi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  MODIFY `id_tugasakhir` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_id_prodi_foreign` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD CONSTRAINT `tb_prestasi_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD CONSTRAINT `tb_prodi_id_jurusan_foreign` FOREIGN KEY (`id_jurusan`) REFERENCES `tb_jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_tugas_akhir`
--
ALTER TABLE `tb_tugas_akhir`
  ADD CONSTRAINT `tb_tugas_akhir_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tugas_akhir_id_mahasiswa_foreign` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tb_mahasiswa` (`id_mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tugas_akhir_id_pembimbingdua_foreign` FOREIGN KEY (`id_pembimbingdua`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tugas_akhir_id_pembimbingsatu_foreign` FOREIGN KEY (`id_pembimbingsatu`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tugas_akhir_id_pengujidua_foreign` FOREIGN KEY (`id_pengujidua`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tugas_akhir_id_pengujisatu_foreign` FOREIGN KEY (`id_pengujisatu`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_tugas_akhir_id_pengujitiga_foreign` FOREIGN KEY (`id_pengujitiga`) REFERENCES `tb_dosen` (`id_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
