-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: senarec
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actus`
--

DROP TABLE IF EXISTS `actus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actus`
--

LOCK TABLES `actus` WRITE;
/*!40000 ALTER TABLE `actus` DISABLE KEYS */;
INSERT INTO `actus` VALUES (1,'kfkkfrkfkr','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','ddjjd','img','2022-02-22 04:22:35','2022-02-26 14:24:36'),(4,'gjjgjnfkmknd','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC kjkkjkjngnkfk','LWY3m6ltvSk','vid','2022-02-22 04:23:38','2022-02-26 14:24:44'),(5,'glodi','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','mN_URKZKaLs','vid','2022-02-22 04:23:50','2022-02-22 08:40:54'),(6,'glodi','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','ddjjd','vid','2022-02-22 05:41:28','2022-02-22 05:41:28');
/*!40000 ALTER TABLE `actus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apropos`
--

DROP TABLE IF EXISTS `apropos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `apropos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apropos`
--

LOCK TABLES `apropos` WRITE;
/*!40000 ALTER TABLE `apropos` DISABLE KEYS */;
INSERT INTO `apropos` VALUES (1,'Coordonateur','EMMANUEL JEAN','2022-02-22 04:24:12','2022-02-22 04:25:36'),(4,'SENAREC','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC, en sigle « CEARC » et complété par le Décret N° 011/35 du 13 Août 2011 portant création, organisation et fonctionnement du SENAREC, stipule notamment, que le SENAREC est le guichet unique des activités des renforcements des capacités en République Démocratique du Congo. ','2022-02-22 04:25:21','2022-02-22 04:25:21'),(5,'MISSION','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC, en sigle « CEARC » et complété par le Décret N° 011/35 du 13 Août 2011 portant création, organisation et fonctionnement du SENAREC, stipule notamment, que le SENAREC est le guichet unique des activités des renforcements des capacités en République Démocratique du Congo. ','2022-02-22 04:26:09','2022-02-22 04:26:09'),(6,'Role','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout ','2022-02-22 04:32:55','2022-02-22 04:32:55'),(7,'Objectif','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout ','2022-02-22 04:33:07','2022-02-22 04:33:07');
/*!40000 ALTER TABLE `apropos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'tel','+243 8989898989','phone','2022-02-22 04:43:58','2022-02-22 04:44:31'),(2,'tel','+243 8989898989','phone','2022-02-22 04:44:34','2022-02-22 04:44:34'),(3,'tel','+243 8989898989','envelope','2022-02-22 04:44:44','2022-02-22 04:44:44'),(4,'tel','5, Avenue Lubefu, GOMBE, Kinshasa, RD CONGO ','location-dot','2022-02-22 04:44:54','2022-02-22 07:29:14');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `headers`
--

DROP TABLE IF EXISTS `headers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `headers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `headers`
--

LOCK TABLES `headers` WRITE;
/*!40000 ALTER TABLE `headers` DISABLE KEYS */;
INSERT INTO `headers` VALUES (3,'Bonjour','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 ','2022-02-22 04:37:16','2022-02-22 04:37:16');
/*!40000 ALTER TABLE `headers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liens`
--

DROP TABLE IF EXISTS `liens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `liens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liens`
--

LOCK TABLES `liens` WRITE;
/*!40000 ALTER TABLE `liens` DISABLE KEYS */;
INSERT INTO `liens` VALUES (1,'Ministère du Plan','https://fonctionpublique.gouv.cd','2022-02-22 04:45:55','2022-02-22 07:23:32'),(2,'Ministère de la Fonction Publique','https://fonctionpublique.gouv.cd','2022-02-22 04:49:14','2022-02-22 07:23:27'),(3,'Ministère du Budget','https://fonctionpublique.gouv.cd','2022-02-22 04:49:20','2022-02-22 07:23:46');
/*!40000 ALTER TABLE `liens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mediatheques`
--

DROP TABLE IF EXISTS `mediatheques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mediatheques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mediatheques`
--

LOCK TABLES `mediatheques` WRITE;
/*!40000 ALTER TABLE `mediatheques` DISABLE KEYS */;
/*!40000 ALTER TABLE `mediatheques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (34,'fjfj','jfjf','jjfjgj','jfjjjgjg','2022-02-26 14:11:18','2022-02-26 14:11:18');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (26,'2014_10_12_000000_create_users_table',1),(27,'2014_10_12_100000_create_password_resets_table',1),(28,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(29,'2019_08_19_000000_create_failed_jobs_table',1),(30,'2019_12_14_000001_create_personal_access_tokens_table',1),(31,'2022_02_16_163255_create_sessions_table',1),(32,'2022_02_18_110841_create_mediatheques_table',1),(33,'2022_02_18_110910_create_publications_table',1),(34,'2022_02_18_200711_create_actus_table',1),(35,'2022_02_18_200819_create_apropos_table',1),(36,'2022_02_18_200839_create_contacts_table',1),(37,'2022_02_18_200958_create_headers_table',1),(38,'2022_02_18_201042_create_liens_table',1),(39,'2022_02_18_201101_create_offres_table',1),(40,'2022_02_18_201133_create_outils_table',1),(42,'2022_02_18_201210_create_projets_table',1),(43,'2022_02_18_201227_create_reseauxes_table',1),(45,'2022_02_18_201246_create_messages_table',2),(46,'2022_02_18_201154_create_partenaires_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offres`
--

DROP TABLE IF EXISTS `offres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contacts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offres`
--

LOCK TABLES `offres` WRITE;
/*!40000 ALTER TABLE `offres` DISABLE KEYS */;
INSERT INTO `offres` VALUES (1,'glodi','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','+243','2022-02-22 04:50:47','2022-02-22 04:50:47'),(2,'kiese','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','+243','2022-02-22 04:50:54','2022-02-22 04:50:54'),(3,'Wesh','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','+243','2022-02-22 04:51:00','2022-02-22 04:51:00');
/*!40000 ALTER TABLE `offres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outils`
--

DROP TABLE IF EXISTS `outils`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `outils` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sousTitre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outils`
--

LOCK TABLES `outils` WRITE;
/*!40000 ALTER TABLE `outils` DISABLE KEYS */;
INSERT INTO `outils` VALUES (1,'Kiese','Je ne sais pas','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','2022-02-22 04:51:30','2022-02-22 07:06:59'),(2,'Glodi','Je ne sais pas','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','2022-02-22 04:56:10','2022-02-22 04:56:10');
/*!40000 ALTER TABLE `outils` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partenaires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partenaires`
--

LOCK TABLES `partenaires` WRITE;
/*!40000 ALTER TABLE `partenaires` DISABLE KEYS */;
INSERT INTO `partenaires` VALUES (1,'glodi','jfjkfk','0','jfjfjfjfj','2022-02-26 12:08:39','2022-02-26 12:08:39'),(2,'glodi','jfjkfk','0','jfjfjfjfj','2022-02-26 12:09:32','2022-02-26 12:09:32'),(3,'glodi','jfjkfk','0','jfjfjfjfj','2022-02-26 12:09:39','2022-02-26 12:09:39'),(4,'glodi','jfjkfk','0','jfjfjfjfj','2022-02-26 12:09:55','2022-02-26 12:09:55'),(5,'glodi','jfjkfk','1','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi autem quas aliquid ullam quidem ','2022-02-26 12:10:31','2022-02-26 12:41:52'),(6,'glodi','jfjkfk','1','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi autem quas aliquid ullam quidem voluptatibus in veniam doloribus, non consequuntur nisi. Quaerat animi ut dolor voluptate, libero laborum inventore!','2022-02-26 12:10:44','2022-02-26 12:41:57'),(7,'glodi','jfjkfk','2','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi autem quas aliquid ullam quidem voluptatibus in veniam doloribus, non consequuntur nisi. Quaerat animi ut dolor voluptate, libero laborum inventore!','2022-02-26 12:10:57','2022-02-26 12:42:02'),(8,'glodi','jfjkfk','2','Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi autem quas aliquid ullam quidem voluptatibus in veniam doloribus, non consequuntur nisi. Quaerat animi ut dolor voluptate, libero laborum inventore!','2022-02-26 12:11:13','2022-02-26 12:42:07');
/*!40000 ALTER TABLE `partenaires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projets`
--

DROP TABLE IF EXISTS `projets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sousTitre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projets`
--

LOCK TABLES `projets` WRITE;
/*!40000 ALTER TABLE `projets` DISABLE KEYS */;
INSERT INTO `projets` VALUES (1,'glodi','glodidjd','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','2022-02-22 04:59:22','2022-02-22 04:59:22'),(2,'Cool','Super','Le Secrétariat National pour le Renforcement de Capacités (SENAREC), service public crée par Arrêté Ministériel n°003/CAB/MIN.PL/98 du 21 février 1998, modifié par le Décret n° 011/33 du 09 Aout 2011 portant création du cadre institutionnel d’encadrement et d’accompagnement des activités de renforcement des capacités en RDC','2022-02-22 04:59:42','2022-02-22 04:59:42');
/*!40000 ALTER TABLE `projets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reseauxes`
--

DROP TABLE IF EXISTS `reseauxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reseauxes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utilisateur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reseauxes`
--

LOCK TABLES `reseauxes` WRITE;
/*!40000 ALTER TABLE `reseauxes` DISABLE KEYS */;
INSERT INTO `reseauxes` VALUES (1,'Facebook','SenarecOfficierc','https://doc.ubuntu-fr.org','facebook','2022-02-22 05:00:29','2022-02-26 14:24:55'),(2,'Whatsapp','Senarer','https://doc.ubuntu-fr.org','whatsapp','2022-02-22 05:00:53','2022-02-22 05:00:53'),(3,'Instagram','SenarerInsta','https://doc.ubuntu-fr.org','instagram','2022-02-22 05:01:15','2022-02-22 05:01:27'),(4,'LinkedIn','SenarerInsta','https://doc.ubuntu-fr.org','linkedin','2022-02-22 05:01:46','2022-02-22 05:01:46'),(5,'Whatsapp','Senarer','https://doc.ubuntu-fr.org','youtube','2022-02-26 14:31:24','2022-02-26 14:31:24'),(6,'Whatsapp','Senarer','https://doc.ubuntu-fr.org','twitter','2022-02-26 14:36:04','2022-02-26 14:36:23'),(7,'Whatsapp','Senarer','https://doc.ubuntu-fr.org','telegram','2022-02-26 14:36:43','2022-02-26 14:36:43'),(8,'Whatsapp','Senarer','https://doc.ubuntu-fr.org','tiktok','2022-02-26 14:37:27','2022-02-26 14:37:27');
/*!40000 ALTER TABLE `reseauxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('siVa6UcdEpWiV5mTVzngKN8QziZTAs1XM3PUTzfA',1,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:97.0) Gecko/20100101 Firefox/97.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVVpZOWx2MTcwa2ltanlwN2EwTGlZaDJScHdaamQwOHBBa0IxWFVmbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR2MS5Rb0VETGliNzZRbFFUMkJLM3pPNzM0VGRVOGRtUUU5N1lxRTExNXBvQ1VpZVdZbEQzbSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkdjEuUW9FRExpYjc2UWxRVDJCSzN6TzczNFRkVThkbVFFOTdZcUUxMTVwb0NVaWVXWWxEM20iO30=',1645890115);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@sene.com',NULL,'$2y$10$v1.QoEDLib76QlQT2BK3zO734TdU8dmQE97YqE115poCUieWYlD3m',NULL,NULL,NULL,NULL,NULL,'2022-02-22 04:22:14','2022-02-24 13:56:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-26 19:03:15
