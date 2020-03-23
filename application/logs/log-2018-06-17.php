<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-06-17 13:20:18 --> Severity: Notice --> Undefined variable: data /var/www/html/siskia/application/controllers/Pws.php 25
ERROR - 2018-06-17 13:57:29 --> Severity: Error --> Class 'M_bulin' not found /var/www/html/siskia/system/core/Loader.php 305
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:05:47 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 14:06:00 --> Severity: Notice --> Undefined property: stdClass::$username /var/www/html/siskia/application/controllers/Loguser.php 42
ERROR - 2018-06-17 17:41:27 --> Query error: Unknown column 'order_datetime' in 'where clause' - Invalid query: SELECT `kia`.*, `ibu`.`id` as `idibu`, `ibu`.`nama` as `namaibu`, `ibu`.`idkel`, `cak`.*, `kspr`.`risk`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
LEFT JOIN `kspr` ON `cak`.`id` = `kspr`.`idcak`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
WHERE order_datetime BETWEEN '2018-10-01' AND '2018-10-3'
ORDER BY `kia`.`id` DESC
 LIMIT 10
ERROR - 2018-06-17 17:41:41 --> Query error: Unknown column 'order_datetime' in 'where clause' - Invalid query: SELECT `kia`.*, `ibu`.`id` as `idibu`, `ibu`.`nama` as `namaibu`, `ibu`.`idkel`, `cak`.*, `kspr`.`risk`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
LEFT JOIN `kspr` ON `cak`.`id` = `kspr`.`idcak`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
WHERE order_datetime BETWEEN '2018-10-01' AND '2018-10-3'
ORDER BY `kia`.`id` DESC
 LIMIT 10
ERROR - 2018-06-17 17:42:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'BETWEEN2018-11-01 and 2018-11-30
ORDER BY `kia`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT `kia`.*, `ibu`.`id` as `idibu`, `ibu`.`nama` as `namaibu`, `ibu`.`idkel`, `cak`.*, `kspr`.`risk`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
LEFT JOIN `kspr` ON `cak`.`id` = `kspr`.`idcak`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
WHERE `cak`.`htp` = '2018-11-01'
AND cak.htp BETWEEN2018-11-01 and 2018-11-30
ORDER BY `kia`.`id` DESC
 LIMIT 10
ERROR - 2018-06-17 18:27:02 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-17 18:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-17 18:27:02 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-17 18:27:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-17 18:53:09 --> Severity: Notice --> Undefined property: stdClass::$foto /var/www/html/siskia/application/controllers/Login.php 78
ERROR - 2018-06-17 18:53:36 --> Severity: Notice --> Undefined property: stdClass::$foto /var/www/html/siskia/application/controllers/Login.php 78
