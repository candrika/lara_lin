-- MySQL dump 10.17  Distrib 10.3.24-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: app_ku
-- ------------------------------------------------------
-- Server version	10.3.24-MariaDB-2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2021_02_05_013748_create_table_sys_menu',1),(2,'2021_02_05_014449_create_table_sys_group',1),(3,'2021_02_05_014534_create_table_sys_user',1),(4,'2021_02_05_014617_create_table_sys_user_menu',1),(5,'2021_02_05_014646_create_table_saldo',1),(6,'2021_02_05_014724_create_table_category',1),(7,'2021_02_05_024023_create_table_transaction',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_category`
--

DROP TABLE IF EXISTS `table_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_type_id` int(11) NOT NULL,
  `category_name` char(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_category`
--

LOCK TABLES `table_category` WRITE;
/*!40000 ALTER TABLE `table_category` DISABLE KEYS */;
INSERT INTO `table_category` VALUES (1,1,'Gaji','Gaji ketiga belas','2021-02-10 20:02:00','2021-02-10 20:03:35');
/*!40000 ALTER TABLE `table_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_saldo`
--

DROP TABLE IF EXISTS `table_saldo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_saldo` (
  `saldo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pemasukan` decimal(12,2) NOT NULL,
  `pengeluaran` decimal(12,2) NOT NULL,
  `saldo_description` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transaction_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`saldo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_saldo`
--

LOCK TABLES `table_saldo` WRITE;
/*!40000 ALTER TABLE `table_saldo` DISABLE KEYS */;
INSERT INTO `table_saldo` VALUES (1,450000.00,0.00,'Penambahan saldo dari transaksi Gaji pada tgl 2021-02-11 04:02','2021-02-10 21:02:00',NULL,10),(2,900000.00,0.00,'Penambahan saldo dari transaksi Gaji pada tgl 2021-02-11 05:02','2021-02-10 22:02:00',NULL,11);
/*!40000 ALTER TABLE `table_saldo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sys_group`
--

DROP TABLE IF EXISTS `table_sys_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_sys_group` (
  `sys_group_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sys_group_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `deleted` smallint(6) NOT NULL,
  `view` tinyint(4) NOT NULL,
  `create` tinyint(4) NOT NULL,
  `update` tinyint(4) NOT NULL,
  `delete` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sys_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sys_group`
--

LOCK TABLES `table_sys_group` WRITE;
/*!40000 ALTER TABLE `table_sys_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sys_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sys_menu`
--

DROP TABLE IF EXISTS `table_sys_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_sys_menu` (
  `sys_menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sys_menu_name` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sys_link_menu` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `deleted` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sys_menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sys_menu`
--

LOCK TABLES `table_sys_menu` WRITE;
/*!40000 ALTER TABLE `table_sys_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sys_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sys_user`
--

DROP TABLE IF EXISTS `table_sys_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_sys_user` (
  `sys_user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realname` char(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jwt_token_encry` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reset_jwt_token` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted` smallint(6) NOT NULL,
  `sys_group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sys_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sys_user`
--

LOCK TABLES `table_sys_user` WRITE;
/*!40000 ALTER TABLE `table_sys_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sys_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sys_user_menu`
--

DROP TABLE IF EXISTS `table_sys_user_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_sys_user_menu` (
  `sys_menu_id` int(11) NOT NULL,
  `sys_group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sys_user_menu`
--

LOCK TABLES `table_sys_user_menu` WRITE;
/*!40000 ALTER TABLE `table_sys_user_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sys_user_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_transaction`
--

DROP TABLE IF EXISTS `table_transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `table_transaction` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `transaction_description` char(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_transaction`
--

LOCK TABLES `table_transaction` WRITE;
/*!40000 ALTER TABLE `table_transaction` DISABLE KEYS */;
INSERT INTO `table_transaction` VALUES (11,1,'data','2021-02-10 22:02:00','2021-02-10 22:12:23',900000.00);
/*!40000 ALTER TABLE `table_transaction` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-02-11 17:05:35
