
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Мужские',NULL,'2019-06-18 03:45:41','2019-07-21 03:08:07',NULL,'categories\\July2019\\rkSB6gVJQZUnckd8CVB7.png'),(2,'Женские',NULL,'2019-06-18 03:45:49','2019-07-21 03:09:03',NULL,'categories\\July2019\\2jt643kDwlEgu1nr5MXp.png'),(3,'Брюки',1,'2019-06-18 03:46:04','2019-06-25 03:38:35',NULL,NULL),(4,'Юбки',2,'2019-07-21 03:02:36','2019-07-21 03:02:36',NULL,NULL),(5,'Блузки',2,'2019-07-21 03:02:45','2019-07-21 03:02:45',NULL,NULL),(6,'Футболки',1,'2019-07-21 03:02:56','2019-07-21 03:02:56',NULL,NULL),(7,'Швейные производства',NULL,'2019-08-21 01:31:48','2019-08-21 01:31:48',NULL,NULL),(8,'Костюмы',1,'2019-08-21 01:31:58','2019-08-21 01:31:58',NULL,NULL),(9,'Смокинг',8,'2019-08-21 01:32:18','2019-08-21 01:32:18',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `category_production`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_production` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `production_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `category_production` WRITE;
/*!40000 ALTER TABLE `category_production` DISABLE KEYS */;
INSERT INTO `category_production` VALUES (1,1,6,NULL,NULL),(2,2,6,NULL,NULL),(3,3,6,NULL,NULL),(4,4,7,NULL,NULL),(5,4,8,NULL,NULL),(6,5,8,NULL,NULL),(7,1,13,NULL,NULL),(8,2,13,NULL,NULL),(9,3,13,NULL,NULL),(10,4,13,NULL,NULL),(11,5,13,NULL,NULL),(12,6,13,NULL,NULL),(13,5,14,NULL,NULL),(14,2,15,NULL,NULL),(15,5,15,NULL,NULL),(16,3,15,NULL,NULL);
/*!40000 ALTER TABLE `category_production` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `category_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `category_type` WRITE;
/*!40000 ALTER TABLE `category_type` DISABLE KEYS */;
INSERT INTO `category_type` VALUES (1,2,1,NULL,NULL),(2,1,1,NULL,NULL),(3,1,2,NULL,NULL),(4,7,3,NULL,NULL);
/*!40000 ALTER TABLE `category_type` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(36,5,'id','text','Id',1,0,0,0,0,0,'{}',1),(37,5,'title','text','Title',1,1,1,1,1,1,'{}',2),(38,5,'parent_id','text','Parent Id',0,1,1,1,1,1,'{}',3),(39,5,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',4),(40,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(41,5,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',6),(42,5,'category_hasmany_category_relationship','relationship','Category',0,1,1,1,1,1,'{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"parent_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',7),(43,6,'id','number','Id',1,0,0,0,0,0,'{}',1),(44,6,'title','text','Title',1,1,1,1,1,1,'{}',2),(45,6,'address','text','Address',1,1,1,1,1,1,'{}',3),(46,6,'description','rich_text_box','Description',1,1,1,1,1,1,'{}',5),(47,6,'site','text','Site',0,1,1,1,1,1,'{}',6),(50,6,'rating','text','Rating',0,0,0,0,0,0,'{}',9),(51,6,'employees','text','Employees',0,0,0,0,0,0,'{}',10),(52,6,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',11),(53,6,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',12),(54,6,'deleted_at','timestamp','Deleted At',0,0,0,0,0,0,'{}',13),(55,6,'user_id','text','User Id',1,0,0,1,1,0,'{}',14),(56,6,'production_belongsto_user_relationship','relationship','users',0,1,1,1,1,1,'{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}',15),(57,6,'production_belongstomany_image_relationship','relationship','images',0,1,1,1,1,1,'{\"model\":\"App\\\\Image\",\"table\":\"images\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"image_production\",\"pivot\":\"1\",\"taggable\":\"0\"}',16),(58,6,'excerpt','text_area','Excerpt',0,0,1,1,1,1,'{}',4),(59,6,'slug','text','Slug',1,0,0,0,0,0,'{}',15),(60,7,'id','text','Id',1,0,0,0,0,0,'{}',1),(61,7,'title','text','Title',1,1,1,1,1,1,'{}',2),(62,7,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',3),(63,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',4),(64,9,'id','text','Id',1,0,0,0,0,0,'{}',1),(65,9,'key','text','Key',1,1,1,1,1,1,'{}',2),(66,9,'table_name','text','Table Name',0,1,1,1,1,1,'{}',3),(67,9,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',4),(68,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(69,6,'production_belongstomany_category_relationship','relationship','categories',0,1,1,1,1,1,'{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"category_production\",\"pivot\":\"1\",\"taggable\":\"on\"}',17),(70,5,'image','image','Image',0,1,1,1,1,1,'{}',7),(71,6,'coordinates','coordinates','Coordinates',0,1,1,1,1,1,'{}',16),(72,10,'id','text','Id',1,0,0,0,0,0,'{}',1),(73,10,'title','text','Title',1,1,1,1,1,1,'{}',2),(74,10,'address','text','Address',1,1,1,1,1,1,'{}',3),(75,10,'description','text','Description',1,1,1,1,1,1,'{}',4),(76,10,'site','text','Site',0,1,1,1,1,1,'{}',5),(77,10,'rating','text','Rating',0,1,1,1,1,1,'{}',6),(78,10,'employees','text','Employees',0,0,0,0,0,0,'{}',7),(79,10,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',8),(80,10,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',9),(81,10,'deleted_at','timestamp','Deleted At',0,1,1,1,1,1,'{}',10),(82,10,'user_id','text','User Id',1,0,0,0,0,0,'{}',11),(83,10,'excerpt','rich_text_box','Excerpt',0,1,1,1,1,1,'{}',12),(84,10,'slug','text','Slug',1,0,0,0,0,0,'{}',13),(85,10,'coordinates','coordinates','Coordinates',0,1,1,1,1,1,'{}',14),(86,10,'images','multiple_images','Images',0,1,1,1,1,1,'{}',15),(87,6,'images','text','Images',0,1,1,1,1,1,'{}',15),(88,5,'category_belongstomany_type_relationship','relationship','types',0,1,1,1,1,1,'{\"model\":\"App\\\\Type\",\"table\":\"types\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"category_type\",\"pivot\":\"1\",\"taggable\":\"0\"}',8),(89,11,'id','text','Id',1,0,0,0,0,0,'{}',1),(90,11,'title','text','Title',0,1,1,1,1,1,'{}',2),(91,11,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',3),(92,11,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',4);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(5,'categories','categories','Category','Categories','voyager-categories','App\\Category',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-06-18 03:43:01','2019-08-25 03:56:25'),(6,'productions','productions','Production','Productions','voyager-shop','App\\Production',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-06-18 03:54:02','2019-08-14 21:23:55'),(7,'tools','tools','Tool','Tools','voyager-settings','App\\Tool',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-06-25 04:56:05','2019-06-25 04:56:05'),(9,'permissions','permissions','Permission','Permissions','voyager-key','TCG\\Voyager\\Models\\Permission',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2019-07-11 07:08:20','2019-07-11 07:09:57'),(10,'announcements','announcements','Announcement','Announcements',NULL,'App\\Announcement',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-08-14 02:01:13','2019-08-14 02:01:13'),(11,'types','types','Type','Types',NULL,'App\\Type',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2019-08-25 03:57:30','2019-08-25 03:57:30');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorites` (
  `user_id` int(10) unsigned NOT NULL,
  `favoriteable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favoriteable_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`favoriteable_id`,`favoriteable_type`),
  KEY `favorites_favoriteable_type_favoriteable_id_index` (`favoriteable_type`,`favoriteable_id`),
  KEY `favorites_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
INSERT INTO `favorites` VALUES (1,'App\\Production',1,'2019-08-18 04:58:23','2019-08-18 04:58:23'),(1,'App\\Production',3,'2019-08-18 08:17:37','2019-08-18 08:17:37'),(1,'App\\Production',4,'2019-08-18 08:17:29','2019-08-18 08:17:29'),(1,'App\\Production',5,'2019-08-18 08:17:30','2019-08-18 08:17:30'),(1,'App\\Production',6,'2019-08-18 08:17:31','2019-08-18 08:17:31'),(1,'App\\Production',7,'2019-08-18 08:17:33','2019-08-18 08:17:33'),(1,'App\\Production',9,'2019-08-18 04:58:26','2019-08-18 04:58:26'),(1,'App\\Production',10,'2019-08-18 08:17:50','2019-08-18 08:17:50'),(1,'App\\Production',11,'2019-08-18 08:18:07','2019-08-18 08:18:07'),(1,'App\\Production',12,'2019-08-20 00:19:25','2019-08-20 00:19:25'),(3,'App\\Production',1,'2019-08-12 00:40:08','2019-08-12 00:40:08'),(3,'App\\Production',2,'2019-08-12 00:40:10','2019-08-12 00:40:10'),(3,'App\\Production',5,'2019-08-12 00:40:09','2019-08-12 00:40:09'),(3,'App\\Production',7,'2019-08-12 00:40:03','2019-08-12 00:40:03');
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `image_production`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image_production` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `production_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `image_production` WRITE;
/*!40000 ALTER TABLE `image_production` DISABLE KEYS */;
/*!40000 ALTER TABLE `image_production` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2019-06-18 02:39:11','2019-06-18 02:39:11','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,4,'2019-06-18 02:39:11','2019-06-18 03:06:08','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,3,'2019-06-18 02:39:11','2019-06-18 02:39:11','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,2,'2019-06-18 02:39:11','2019-06-18 02:39:11','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,8,'2019-06-18 02:39:11','2019-06-25 04:56:35',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2019-06-18 02:39:11','2019-06-18 03:06:08','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2019-06-18 02:39:11','2019-06-18 03:06:08','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2019-06-18 02:39:11','2019-06-18 03:06:08','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2019-06-18 02:39:11','2019-06-18 03:06:08','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,9,'2019-06-18 02:39:11','2019-06-25 04:56:35','voyager.settings.index',NULL),(11,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2019-06-18 02:39:22','2019-06-18 03:06:08','voyager.hooks',NULL),(13,1,'Categories','','_self','voyager-categories',NULL,NULL,6,'2019-06-18 03:43:01','2019-07-03 01:29:09','voyager.categories.index',NULL),(14,1,'Productions','','_self','voyager-shop',NULL,NULL,7,'2019-06-18 03:54:02','2019-07-03 01:29:09','voyager.productions.index',NULL),(15,1,'Tools','','_self','voyager-settings',NULL,NULL,5,'2019-06-25 04:56:06','2019-06-25 04:56:36','voyager.tools.index',NULL),(16,1,'Message','','_self','voyager-mail','#000000',NULL,10,'2019-07-10 03:54:40','2019-07-11 07:25:05','message','null'),(17,1,'Favorite','','_self','voyager-star','#000000',NULL,11,'2019-07-10 04:13:56','2019-07-11 07:24:55','favorite','null'),(18,1,'Permissions','','_self','voyager-key',NULL,NULL,12,'2019-07-11 07:08:20','2019-07-11 07:08:20','voyager.permissions.index',NULL),(19,1,'Announcements','','_self',NULL,NULL,NULL,13,'2019-08-14 02:01:14','2019-08-14 02:01:14','voyager.announcements.index',NULL),(20,1,'Types','','_self',NULL,NULL,NULL,14,'2019-08-25 03:57:30','2019-08-25 03:57:30','voyager.types.index',NULL);
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2019-06-18 02:39:11','2019-06-18 02:39:11');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (23,'2014_10_12_000000_create_users_table',1),(24,'2014_10_12_100000_create_password_resets_table',1),(25,'2016_01_01_000000_add_voyager_user_fields',1),(26,'2016_01_01_000000_create_data_types_table',1),(27,'2016_05_19_173453_create_menu_table',1),(28,'2016_10_21_190000_create_roles_table',1),(29,'2016_10_21_190000_create_settings_table',1),(30,'2016_11_30_135954_create_permission_table',1),(31,'2016_11_30_141208_create_permission_role_table',1),(32,'2016_12_26_201236_data_types__add__server_side',1),(33,'2017_01_13_000000_add_route_to_menu_items_table',1),(34,'2017_01_14_005015_create_translations_table',1),(35,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(36,'2017_03_06_000000_add_controller_to_data_types_table',1),(37,'2017_04_21_000000_add_order_to_data_rows_table',1),(38,'2017_07_05_210000_add_policyname_to_data_types_table',1),(39,'2017_08_05_000000_add_group_to_settings_table',1),(40,'2017_11_26_013050_add_user_role_relationship',1),(41,'2017_11_26_015000_create_user_roles_table',1),(42,'2018_03_11_000000_add_user_settings',1),(43,'2018_03_14_000000_add_details_to_data_types_table',1),(44,'2018_03_16_000000_make_settings_value_nullable',1),(45,'2019_07_04_071405_create_favorites_table',2),(46,'2017_12_18_220648_dorvidas_create_ratings_table',3),(47,'2018_02_01_133000_dorvidas_create_ratings_aggregates_table',3),(48,'2019_07_30_111640_add_social_columns_to_users_table',4),(49,'2019_07_30_112436_update_social_id_to_users_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,2),(1,3),(1,4),(1,5),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(18,3),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(37,3),(38,1),(38,3),(39,1),(39,3),(40,1),(40,3),(41,1),(41,3),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(52,4),(52,5),(53,1),(53,4),(53,5),(54,1),(55,1),(56,1),(57,1),(58,1),(59,1),(60,1),(61,1),(62,1),(63,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(2,'browse_bread',NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(3,'browse_database',NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(4,'browse_media',NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(5,'browse_compass',NULL,'2019-06-18 02:39:11','2019-06-18 02:39:11'),(6,'browse_menus','menus','2019-06-18 02:39:11','2019-06-18 02:39:11'),(7,'read_menus','menus','2019-06-18 02:39:11','2019-06-18 02:39:11'),(8,'edit_menus','menus','2019-06-18 02:39:11','2019-06-18 02:39:11'),(9,'add_menus','menus','2019-06-18 02:39:11','2019-06-18 02:39:11'),(10,'delete_menus','menus','2019-06-18 02:39:11','2019-06-18 02:39:11'),(11,'browse_roles','roles','2019-06-18 02:39:11','2019-06-18 02:39:11'),(12,'read_roles','roles','2019-06-18 02:39:11','2019-06-18 02:39:11'),(13,'edit_roles','roles','2019-06-18 02:39:11','2019-06-18 02:39:11'),(14,'add_roles','roles','2019-06-18 02:39:11','2019-06-18 02:39:11'),(15,'delete_roles','roles','2019-06-18 02:39:11','2019-06-18 02:39:11'),(16,'browse_users','users','2019-06-18 02:39:11','2019-06-18 02:39:11'),(17,'read_users','users','2019-06-18 02:39:11','2019-06-18 02:39:11'),(18,'edit_users','users','2019-06-18 02:39:11','2019-06-18 02:39:11'),(19,'add_users','users','2019-06-18 02:39:11','2019-06-18 02:39:11'),(20,'delete_users','users','2019-06-18 02:39:11','2019-06-18 02:39:11'),(21,'browse_settings','settings','2019-06-18 02:39:11','2019-06-18 02:39:11'),(22,'read_settings','settings','2019-06-18 02:39:11','2019-06-18 02:39:11'),(23,'edit_settings','settings','2019-06-18 02:39:11','2019-06-18 02:39:11'),(24,'add_settings','settings','2019-06-18 02:39:11','2019-06-18 02:39:11'),(25,'delete_settings','settings','2019-06-18 02:39:11','2019-06-18 02:39:11'),(26,'browse_hooks',NULL,'2019-06-18 02:39:22','2019-06-18 02:39:22'),(32,'browse_categories','categories','2019-06-18 03:43:01','2019-06-18 03:43:01'),(33,'read_categories','categories','2019-06-18 03:43:01','2019-06-18 03:43:01'),(34,'edit_categories','categories','2019-06-18 03:43:01','2019-06-18 03:43:01'),(35,'add_categories','categories','2019-06-18 03:43:01','2019-06-18 03:43:01'),(36,'delete_categories','categories','2019-06-18 03:43:01','2019-06-18 03:43:01'),(37,'browse_productions','productions','2019-06-18 03:54:02','2019-06-18 03:54:02'),(38,'read_productions','productions','2019-06-18 03:54:02','2019-06-18 03:54:02'),(39,'edit_productions','productions','2019-06-18 03:54:02','2019-06-18 03:54:02'),(40,'add_productions','productions','2019-06-18 03:54:02','2019-06-18 03:54:02'),(41,'delete_productions','productions','2019-06-18 03:54:02','2019-06-18 03:54:02'),(42,'browse_tools','tools','2019-06-25 04:56:06','2019-06-25 04:56:06'),(43,'read_tools','tools','2019-06-25 04:56:06','2019-06-25 04:56:06'),(44,'edit_tools','tools','2019-06-25 04:56:06','2019-06-25 04:56:06'),(45,'add_tools','tools','2019-06-25 04:56:06','2019-06-25 04:56:06'),(46,'delete_tools','tools','2019-06-25 04:56:06','2019-06-25 04:56:06'),(47,'browse_permissions','permissions','2019-07-11 07:09:57','2019-07-11 07:09:57'),(48,'read_permissions','permissions','2019-07-11 07:09:57','2019-07-11 07:09:57'),(49,'edit_permissions','permissions','2019-07-11 07:09:57','2019-07-11 07:09:57'),(50,'add_permissions','permissions','2019-07-11 07:09:57','2019-07-11 07:09:57'),(51,'delete_permissions','permissions','2019-07-11 07:09:57','2019-07-11 07:09:57'),(52,'browse_favorite',NULL,'2019-07-11 07:10:44','2019-07-11 07:10:44'),(53,'browse_message',NULL,'2019-07-11 07:36:38','2019-07-11 07:36:38'),(54,'browse_announcements','announcements','2019-08-14 02:01:13','2019-08-14 02:01:13'),(55,'read_announcements','announcements','2019-08-14 02:01:13','2019-08-14 02:01:13'),(56,'edit_announcements','announcements','2019-08-14 02:01:13','2019-08-14 02:01:13'),(57,'add_announcements','announcements','2019-08-14 02:01:13','2019-08-14 02:01:13'),(58,'delete_announcements','announcements','2019-08-14 02:01:13','2019-08-14 02:01:13'),(59,'browse_types','types','2019-08-25 03:57:30','2019-08-25 03:57:30'),(60,'read_types','types','2019-08-25 03:57:30','2019-08-25 03:57:30'),(61,'edit_types','types','2019-08-25 03:57:30','2019-08-25 03:57:30'),(62,'add_types','types','2019-08-25 03:57:30','2019-08-25 03:57:30'),(63,'delete_types','types','2019-08-25 03:57:30','2019-08-25 03:57:30');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `productions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` float DEFAULT NULL,
  `employees` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinates` point DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productions_slug_index` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `productions` WRITE;
/*!40000 ALTER TABLE `productions` DISABLE KEYS */;
INSERT INTO `productions` VALUES (1,'ОсОО \"Швея на час\"','Киевская 95','<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many d</span></p>',NULL,NULL,NULL,'2019-06-18 03:14:51','2019-06-20 02:34:57',NULL,1,NULL,'osoo-shveya-na-chas-1',NULL,NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(2,'ОсОО \"Шьем быстро\"','Киевская 93','<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>','shiem-bystro.kg',NULL,NULL,'2019-06-18 03:21:19','2019-06-20 02:35:52',NULL,1,NULL,'osoo-shem-bystro',NULL,NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(3,'ОсОО \"Швея на час\"','Kok-Jar, Sanjira st. 20','<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>','shiem-bystro.kg',NULL,NULL,'2019-06-20 01:19:09','2019-06-20 02:36:00',NULL,2,'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).','osoo-shveya-na-chas-2',NULL,NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(4,'ОсОО \"Швея на час copy is right\"','Sanjira st., 20','<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>','shiem-bystro.kg',NULL,NULL,'2019-06-20 01:19:45','2019-06-20 02:34:42',NULL,2,'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).','osoo-shveya-na-chas-copy-is-right',NULL,NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(5,'ОсОО \"Швея на час adawdawdaw a awd a awd','Kok-Jar, Sanjira st. 20','<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p><p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>','shiem-bystro.kg',NULL,NULL,'2019-06-20 01:34:55','2019-06-20 02:34:27',NULL,2,'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).','osoo-shveya-na-chas-adawdawdaw-a-awd-a-awd',NULL,NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(6,'ОсОО \"Швея на час\" 1','Kok-Jar, Sanjira st. 20','<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>\r\n<p><span style=\"color: #000000; font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>','shiem-bystro.kg',NULL,NULL,'2019-06-20 02:23:15','2019-07-19 06:23:45',NULL,3,'ногие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32','osoo-shveya-na-chas',NULL,NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(7,'Швея на час от Хусана','Тоголок Молдо','<p>цфвцфвцф</p>',NULL,NULL,NULL,'2019-07-29 05:18:57','2019-07-29 06:15:05',NULL,4,'фцвфцвф','shveya-na-chas-ot-husana',_binary '\0\0\0\0\0\0\0\���˥R@t:e�SoE@',NULL,'+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(8,'Tilek','awdawd','<p>wadwdad</p>','adawdawd',NULL,NULL,'2019-08-15 00:08:12','2019-08-15 00:08:12',NULL,3,'wadwadad','tilek',_binary '\0\0\0\0\0\0\0\��lިR@\����kE@','wadawdwadwa','+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(9,'Tilekцфвфцв','цфвцфвцф','<p>вцфвцфвцфвфцв</p>',NULL,NULL,NULL,'2019-08-18 03:26:07','2019-08-18 03:26:07',NULL,1,'вфвфцвцфв','tilekcfvfcv',_binary '\0\0\0\0\0\0\0\0\0\0\0\0\0�?x�(���R@','[\"production_5d5919ade88e2.jpg\",\"production_5d5919af27243.jpg\"]','+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(10,'Tilekцфвфцвawdawda','awdawd','<p>awdawdawd</p>',NULL,NULL,NULL,'2019-08-18 05:01:16','2019-08-18 05:01:16',NULL,1,'awdawdadawd','tilekcfvfcvawdawda',_binary '\0\0\0\0\0\0\0\0\0\0\0\0\0�?��(]/�R@','[\"production_5d592ffba4963.jpg\",\"production_5d592ffc30719.jpg\"]','+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(11,'awdaw','dawd','<p>awda</p>',NULL,NULL,NULL,'2019-08-18 05:09:43','2019-08-18 05:09:43',NULL,1,'awdawdawd','awdaw',_binary '\0\0\0\0\0\0\0\�#d\�nE@f�(���R@','[]','+996 700 700 700','+996 500 500 500','support@gmail.com','productions'),(12,'awdawd','dawdawdaw','<p>adawdawdwadwa</p>',NULL,NULL,NULL,'2019-08-19 23:55:36','2019-08-19 23:55:36',NULL,1,'adwadawd','awdawd',_binary '\0\0\0\0\0\0\0����QnE@��(-2�R@','[\"production_5d5b8b565c43b.jpg\",\"production_5d5b8b56d2b39.jpg\",\"production_5d5b8b57cb870.jpg\",\"production_5d5b8b57da296.jpg\",\"production_5d5b8b58256b0.jpg\",\"production_5d5b8b5827db8.jpg\"]','+996 701 001 052','+996 555 105 655','tilek.kubanov@gmail.com','productions'),(13,'awdawd','dawdawdaw','<p>wadwa</p>',NULL,NULL,NULL,'2019-08-20 04:11:32','2019-08-20 04:11:32',NULL,1,'awdwad','awdawd-1',_binary '\0\0\0\0\0\0\0ҩ7�SqE@q�(\rۥR@','[\"production_5d5bc753ccab8.jpg\",\"production_5d5bc7543a58f.jpg\",\"production_5d5bc75478ac9.jpg\",\"production_5d5bc7547aab9.jpg\"]','awd','awdawd','awd','productions'),(14,'dawdawdwadwa','wadwa','<p>dawd</p>',NULL,NULL,NULL,'2019-08-20 04:13:35','2019-08-20 04:13:35',NULL,1,'dwadawd','dawdawdwadwa',NULL,'[\"production_5d5bc7cf545f8.jpg\",\"production_5d5bc7cf59dcd.jpg\",\"production_5d5bc7cf5e368.jpg\"]','dawdawd','wadwa','dwadwad','service'),(15,'Natali','Абдрахманова 201А','<p>Костюмы пиджаки</p>',NULL,NULL,NULL,'2019-08-21 00:48:41','2019-08-21 00:48:41',NULL,1,'Костюмы пиджаки','natali',_binary '\0\0\0\0\0\0\0�o$qE@\�\�4�R@','[\"production_5d5ce94832337.jpg\",\"production_5d5ce9491f79e.jpg\",\"production_5d5ce94923656.jpg\"]','+996 550 161 081','+996 555 165 885',NULL,'productions');
/*!40000 ALTER TABLE `productions` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `rating_aggregates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating_aggregates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `on_model` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_model_id` int(10) unsigned DEFAULT NULL,
  `on_model_column` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `average` double(2,1) NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rating_aggregates_model_index` (`model`),
  KEY `rating_aggregates_model_id_index` (`model_id`),
  KEY `rating_aggregates_on_model_index` (`on_model`),
  KEY `rating_aggregates_on_model_id_index` (`on_model_id`),
  KEY `rating_aggregates_average_index` (`average`),
  KEY `rating_aggregates_count_index` (`count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `rating_aggregates` WRITE;
/*!40000 ALTER TABLE `rating_aggregates` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating_aggregates` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `on_model` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `on_model_id` int(10) unsigned DEFAULT NULL,
  `on_model_column` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rated_by` int(10) unsigned DEFAULT NULL,
  `rating` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_model_index` (`model`),
  KEY `ratings_model_id_index` (`model_id`),
  KEY `ratings_on_model_index` (`on_model`),
  KEY `ratings_on_model_id_index` (`on_model_id`),
  KEY `ratings_rated_by_index` (`rated_by`),
  KEY `ratings_rating_index` (`rating`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
INSERT INTO `ratings` VALUES (1,'App\\Production',6,NULL,NULL,NULL,3,3,'2019-07-19 08:43:27','2019-07-19 08:43:27'),(2,'App\\Production',6,NULL,NULL,NULL,1,4,'2019-07-19 08:44:54','2019-07-19 08:44:54'),(3,'App\\Production',6,NULL,NULL,NULL,1,3,'2019-07-19 08:47:12','2019-07-19 08:47:12'),(4,'App\\Production',12,NULL,NULL,NULL,1,3,'2019-08-20 00:08:55','2019-08-20 00:08:55'),(5,'App\\Production',12,NULL,NULL,NULL,1,4,'2019-08-20 03:02:52','2019-08-20 03:02:52'),(6,'App\\Production',12,NULL,NULL,NULL,1,4,'2019-08-20 03:02:52','2019-08-20 03:02:52'),(7,'App\\Production',12,NULL,NULL,NULL,1,5,'2019-08-20 03:02:52','2019-08-20 03:02:52'),(8,'App\\Production',12,NULL,NULL,NULL,1,3,'2019-08-20 03:03:38','2019-08-20 03:03:38'),(9,'App\\Production',12,NULL,NULL,NULL,1,3,'2019-08-20 03:04:00','2019-08-20 03:04:00'),(10,'App\\Production',12,NULL,NULL,NULL,1,2,'2019-08-20 03:04:01','2019-08-20 03:04:01'),(11,'App\\Production',12,NULL,NULL,NULL,1,5,'2019-08-20 03:04:05','2019-08-20 03:04:05');
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2019-06-18 02:39:11','2019-06-18 02:39:11'),(2,'user','Normal User','2019-06-18 02:39:11','2019-06-18 02:39:11'),(3,'operator','Operator','2019-06-18 03:22:59','2019-06-18 03:22:59'),(4,'Customer','Покупатель','2019-08-15 00:35:48','2019-08-15 00:36:42'),(5,'Production','Производитель','2019-08-15 00:36:29','2019-08-15 00:36:29');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','settings\\July2019\\ff4iDbl7UadHi2P4PBys.jpg','','image',5,'Admin'),(6,'admin.title','Admin Title','Texmart panel','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `tools`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `tools` WRITE;
/*!40000 ALTER TABLE `tools` DISABLE KEYS */;
/*!40000 ALTER TABLE `tools` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;
INSERT INTO `types` VALUES (1,'Производство','2019-08-25 03:57:50','2019-08-25 03:57:50'),(2,'Услуги','2019-08-25 03:57:55','2019-08-25 03:57:55'),(3,'Товары','2019-08-25 03:58:02','2019-08-25 03:58:02');
/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `social_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin','admin@admin.com','users/default.png',NULL,'$2y$10$XXEKv60BUcaqbkdzH8Q81eb3ksWhPdv7e4CdI4CzVeK4tcJRVNtKW','qEFyIDTRuPq2IRzJdjayhKJ9m4iBhCXsAEfD1DzuOVAXa7c15wWsrQvAHtH1',NULL,'2019-06-18 02:42:00','2019-06-18 02:42:00',NULL,NULL),(3,3,'Tilek Kubanov','tilek.kubanov@gmail.com','users/default.png',NULL,'$2y$10$MBVtQ1kZbZCED8zwirLtvuu7OGWBS1ydC5tT90U1t5s7U2lEJL3ve',NULL,'{\"locale\":\"en\"}','2019-07-03 01:51:12','2019-07-12 06:18:56',NULL,NULL),(4,2,'Tilek Kubanov','kubanov@gmail.com','users/default.png',NULL,'$2y$10$EY39Zunm5xvHARQjtV3uWu1pJE2iUOmLP4llDVKH7XtqCgEl/QoG6',NULL,NULL,'2019-07-12 06:18:30','2019-07-12 06:18:30',NULL,NULL);
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

