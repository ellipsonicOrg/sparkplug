USE sparkplug;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2014_10_12_000000_create_users_table',1);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2014_10_12_300000_create_roles_tables',1);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2014_10_12_400000_create_permissions_tables',1);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2014_10_12_600000_create_permission_role_mapping_table',1);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2014_10_12_700000_create_role_user_mapping_table',1);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2015_10_12_80000_create_modules_table',2);
INSERT INTO `sparkplug`.`migrations`(`migration`,`batch`) VALUES ('2015_10_21_104131_alter_modules_table',3);
