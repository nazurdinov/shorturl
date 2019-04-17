# CREATE DATABASE `short-url` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `short-url`;


CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255)  NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
       (1,'2019_04_14_061604_create_shorturls_table',1),
       (2,'2019_04_14_121436_create_shorturlstats_table',2);

CREATE TABLE `shorturls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(100)  NOT NULL,
  `link` varchar(255)  NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `shorturls_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `shorturls` (`id`, `slug`, `link`, `created_at`, `updated_at`)
VALUES
       (4,'GYeBDLm','https://yandex.ru','2019-04-14 07:36:01','2019-04-14 11:51:41'),
       (14,'45gYIfa','http://test.ru','2019-04-14 11:44:14','2019-04-14 11:44:14');


CREATE TABLE `shorturlstats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `shorturl_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

