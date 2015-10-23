USE sparkplug;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sparkplug`.`users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES (1,'Adam','su@sparkplug.com','$2y$10$9Ahv7DK0kEzq/PeUYEiSsOF7CpKcykfdP5wiZLTiFhEukEFn5.6Ba','Ryj9hYojM1hvgslW4A57LhbxmonEXlCCpwpUxDIsjrPDp3KSW2YQQ9hW2mfH','2015-10-13 10:20:56','2015-10-21 16:01:32');
INSERT INTO `sparkplug`.`users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) VALUES (2,'Eve','eve@sparkplug.com','$2y$10$8kRD9XClPGfYF24OrI2CvePIdo4KQ6IT.P5Ka0i7b4Xb6WbkuXll.','JBNZrYgHQK662uSoShFK0B8ZaWV0qnT3u4o4d0V9AebTC5xQWltoCIAr3hYl','2015-10-23 06:13:57','2015-10-23 06:42:13');
