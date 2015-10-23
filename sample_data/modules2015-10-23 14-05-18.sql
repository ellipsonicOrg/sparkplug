USE sparkplug;

CREATE TABLE `modules` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fa fa-archive',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sparkplug`.`modules`(`id`,`name`,`label`,`route`,`icon`,`created_at`,`updated_at`) VALUES (1,'core','Sparkplug core','core','fa fa-mouse-pointer','2015-10-17 00:00:00','2015-10-17 00:00:00');
