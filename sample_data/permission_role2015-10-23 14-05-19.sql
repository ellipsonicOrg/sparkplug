USE sparkplug;

CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sparkplug`.`permission_role`(`permission_id`,`role_id`) VALUES (1,1);
INSERT INTO `sparkplug`.`permission_role`(`permission_id`,`role_id`) VALUES (2,1);
INSERT INTO `sparkplug`.`permission_role`(`permission_id`,`role_id`) VALUES (3,1);
INSERT INTO `sparkplug`.`permission_role`(`permission_id`,`role_id`) VALUES (4,1);
INSERT INTO `sparkplug`.`permission_role`(`permission_id`,`role_id`) VALUES (1,2);
INSERT INTO `sparkplug`.`permission_role`(`permission_id`,`role_id`) VALUES (2,2);
