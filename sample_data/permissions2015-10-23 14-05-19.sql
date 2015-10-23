USE sparkplug;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sparkplug`.`permissions`(`id`,`name`,`module_id`,`label`,`created_at`,`updated_at`) VALUES (1,'view_users','1','Users','2015-10-14 00:00:00','2015-10-14 00:00:00');
INSERT INTO `sparkplug`.`permissions`(`id`,`name`,`module_id`,`label`,`created_at`,`updated_at`) VALUES (2,'view_roles','1','Roles','2015-10-14 00:00:00','2015-10-14 00:00:00');
INSERT INTO `sparkplug`.`permissions`(`id`,`name`,`module_id`,`label`,`created_at`,`updated_at`) VALUES (3,'view_permissions','1','Permissions','2015-10-15 00:00:00','2015-10-15 00:00:00');
INSERT INTO `sparkplug`.`permissions`(`id`,`name`,`module_id`,`label`,`created_at`,`updated_at`) VALUES (4,'view_modules','1','Modules','2015-10-15 00:00:00','2015-10-15 00:00:00');
