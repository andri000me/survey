<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-11-15 01:34:44 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 01:40:02 --> Unable to load the requested class: Format
ERROR - 2017-11-15 01:52:50 --> Severity: Warning --> Missing argument 1 for M_ibu::selectAll(), called in /var/www/hamil/application/controllers/Center.php on line 20 and defined /var/www/hamil/application/models/M_ibu.php 8
ERROR - 2017-11-15 01:52:50 --> Severity: Warning --> Missing argument 2 for M_ibu::selectAll(), called in /var/www/hamil/application/controllers/Center.php on line 20 and defined /var/www/hamil/application/models/M_ibu.php 8
ERROR - 2017-11-15 01:52:50 --> Severity: Notice --> Undefined variable: number /var/www/hamil/application/models/M_ibu.php 16
ERROR - 2017-11-15 01:52:50 --> Severity: Notice --> Undefined variable: offset /var/www/hamil/application/models/M_ibu.php 16
ERROR - 2017-11-15 02:06:13 --> Severity: Notice --> Undefined variable: ch /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:06:13 --> Severity: Warning --> curl_getinfo() expects parameter 1 to be resource, null given /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:06:13 --> Severity: Notice --> Undefined variable: ibu /var/www/hamil/application/controllers/Center.php 27
ERROR - 2017-11-15 02:06:26 --> Severity: Notice --> Undefined variable: ch /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:06:26 --> Severity: Warning --> curl_getinfo() expects parameter 1 to be resource, null given /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:06:26 --> Severity: Notice --> Undefined variable: ibu /var/www/hamil/application/controllers/Center.php 27
ERROR - 2017-11-15 02:08:00 --> Severity: Notice --> Undefined variable: ch /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:08:00 --> Severity: Warning --> curl_getinfo() expects parameter 1 to be resource, null given /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:08:00 --> Severity: Notice --> Undefined variable: ibu /var/www/hamil/application/controllers/Center.php 27
ERROR - 2017-11-15 02:09:16 --> Severity: Warning --> curl_getinfo() expects parameter 1 to be resource, integer given /var/www/hamil/application/controllers/Center.php 26
ERROR - 2017-11-15 02:09:16 --> Severity: Notice --> Undefined variable: ibu /var/www/hamil/application/controllers/Center.php 27
ERROR - 2017-11-15 02:10:37 --> Severity: Notice --> Undefined variable: ibu /var/www/hamil/application/controllers/Center.php 27
ERROR - 2017-11-15 02:14:51 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 02:19:58 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 02:21:25 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 02:27:31 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:11:20 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:15:30 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:18:43 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:20:21 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:20:52 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:21:56 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:22:03 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:23:43 --> Query error: Unknown column 'salin' in 'order clause' - Invalid query: SELECT *
FROM `salin`
ORDER BY `salin`
ERROR - 2017-11-15 12:24:15 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:25:32 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:25:52 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:26:40 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:31:12 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:34:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`i' at line 2 - Invalid query: SELECT `ibu`.`id` as `idibu`, `ibu`.`ibu` as `namaibu`, `data_skpd`.`id` as `idfas`, `data_skpd`.`nama_skpd` as `fas`, `kia`.*
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`idkia`
JOIN `data_skpd` ON `kia`.`faskes` = `data_skpd`.`id`
HAVING `salin`.`idkia` != `kia`.`id`
ORDER BY `kia`.`id`
ERROR - 2017-11-15 12:35:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`i' at line 2 - Invalid query: SELECT `ibu`.`id` as `idibu`, `ibu`.`ibu` as `namaibu`, `data_skpd`.`id` as `idfas`, `data_skpd`.`nama_skpd` as `fas`, `kia`.*
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`idkia`
JOIN `data_skpd` ON `kia`.`faskes` = `data_skpd`.`id`
HAVING `salin`.`idkia` = `kia`.`id`
ORDER BY `kia`.`id`
ERROR - 2017-11-15 12:36:03 --> Query error: Unknown column 'salin.idkia' in 'having clause' - Invalid query: SELECT `ibu`.`id` as `idibu`, `ibu`.`ibu` as `namaibu`, `data_skpd`.`id` as `idfas`, `data_skpd`.`nama_skpd` as `fas`, `kia`.*
FROM `kia`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`idkia`
JOIN `data_skpd` ON `kia`.`faskes` = `data_skpd`.`id`
HAVING `salin`.`idkia` != `kia`.`id`
ORDER BY `kia`.`id`
ERROR - 2017-11-15 12:36:30 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
ERROR - 2017-11-15 12:37:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '1
ORDER BY `kia`.`id`' at line 6 - Invalid query: SELECT `ibu`.`id` as `idibu`, `ibu`.`ibu` as `namaibu`, `data_skpd`.`id` as `idfas`, `data_skpd`.`nama_skpd` as `fas`, `kia`.*, `salin`.`idkia`
FROM `kia`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`idkia`
JOIN `data_skpd` ON `kia`.`faskes` = `data_skpd`.`id`
HAVING `salin`.`idkia` = `kia`.`id` 1
ORDER BY `kia`.`id`
ERROR - 2017-11-15 12:38:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''True'
ORDER BY `kia`.`id`' at line 6 - Invalid query: SELECT `ibu`.`id` as `idibu`, `ibu`.`ibu` as `namaibu`, `data_skpd`.`id` as `idfas`, `data_skpd`.`nama_skpd` as `fas`, `kia`.*, `salin`.`idkia`
FROM `kia`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`idkia`
JOIN `data_skpd` ON `kia`.`faskes` = `data_skpd`.`id`
HAVING `salin`.`idkia` = kia.id 'True'
ORDER BY `kia`.`id`
ERROR - 2017-11-15 12:38:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''TRUE'
ORDER BY `kia`.`id`' at line 6 - Invalid query: SELECT `ibu`.`id` as `idibu`, `ibu`.`ibu` as `namaibu`, `data_skpd`.`id` as `idfas`, `data_skpd`.`nama_skpd` as `fas`, `kia`.*, `salin`.`idkia`
FROM `kia`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `kia`.`id` = `salin`.`idkia`
JOIN `data_skpd` ON `kia`.`faskes` = `data_skpd`.`id`
HAVING `salin`.`idkia` = kia.id 'TRUE'
ORDER BY `kia`.`id`
ERROR - 2017-11-15 12:39:02 --> 404 Page Not Found: Assets/AdminLTE-2.0.5
