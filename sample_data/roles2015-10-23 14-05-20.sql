USE sparkplug;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sparkplug`.`roles`(`id`,`name`,`label`,`created_at`,`updated_at`) VALUES (1,'superadmin','Superadmin','2015-10-14 00:00:00','2015-10-14 00:00:00');
INSERT INTO `sparkplug`.`roles`(`id`,`name`,`label`,`created_at`,`updated_at`) VALUES (2,'admin','Admin','2015-10-14 00:00:00','2015-10-14 00:00:00');
