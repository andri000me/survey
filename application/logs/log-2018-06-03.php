<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-06-03 00:15:00 --> Severity: Warning --> Missing argument 1 for Anak::index() /var/www/html/siskia/application/controllers/Anak.php 14
ERROR - 2018-06-03 00:15:00 --> Severity: Notice --> Undefined variable: ibu /var/www/html/siskia/application/views/bayi.php 4
ERROR - 2018-06-03 00:15:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siskia/application/views/bayi.php 4
ERROR - 2018-06-03 00:15:00 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/bayi.php 175
ERROR - 2018-06-03 00:15:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/bayi.php 175
ERROR - 2018-06-03 00:15:00 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/bayi.php 271
ERROR - 2018-06-03 00:15:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/bayi.php 271
ERROR - 2018-06-03 00:15:41 --> Severity: Notice --> Undefined variable: ibu /var/www/html/siskia/application/views/bayi.php 4
ERROR - 2018-06-03 00:15:41 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siskia/application/views/bayi.php 4
ERROR - 2018-06-03 00:15:41 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/bayi.php 175
ERROR - 2018-06-03 00:15:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/bayi.php 175
ERROR - 2018-06-03 00:15:41 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/bayi.php 271
ERROR - 2018-06-03 00:15:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/bayi.php 271
ERROR - 2018-06-03 00:15:54 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:15:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:15:54 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:15:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:15:54 --> Query error: Unknown column 'ibu.ibu' in 'field list' - Invalid query: SELECT `cak`.`id`, `cak`.`idkia`, `ibu`.`ibu` as `namaibu`, `salin`.`tglsalin`, `lahir`.`nmbayi`, YEAR(CURDATE()) - YEAR(salin.tglsalin) AS umuranak
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `cak`.`id` = `salin`.`idcak`
JOIN `lahir` ON `cak`.`id` = `lahir`.`idcak`
ORDER BY `salin`.`tglsalin` DESC
 LIMIT 10
ERROR - 2018-06-03 00:15:59 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:15:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:15:59 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:15:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:16:00 --> Query error: Unknown column 'ibu.ibu' in 'field list' - Invalid query: SELECT `cak`.`id`, `cak`.`idkia`, `ibu`.`ibu` as `namaibu`, `salin`.`tglsalin`, `lahir`.`nmbayi`, YEAR(CURDATE()) - YEAR(salin.tglsalin) AS umuranak
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `salin` ON `cak`.`id` = `salin`.`idcak`
JOIN `lahir` ON `cak`.`id` = `lahir`.`idcak`
ORDER BY `salin`.`tglsalin` DESC
 LIMIT 10
ERROR - 2018-06-03 00:16:22 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:16:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:16:22 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:16:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:16:24 --> Severity: Notice --> Undefined property: stdClass::$tgl /var/www/html/siskia/application/controllers/Anak.php 51
ERROR - 2018-06-03 00:16:24 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siskia/application/controllers/Anak.php 54
ERROR - 2018-06-03 00:16:24 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siskia/application/controllers/Anak.php 97
ERROR - 2018-06-03 00:16:24 --> Severity: Notice --> Undefined property: stdClass::$tgl /var/www/html/siskia/application/controllers/Anak.php 51
ERROR - 2018-06-03 00:16:24 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siskia/application/controllers/Anak.php 54
ERROR - 2018-06-03 00:16:24 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siskia/application/controllers/Anak.php 97
ERROR - 2018-06-03 00:16:38 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:16:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:16:38 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:16:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:16:43 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:16:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:16:43 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:16:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:19:14 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:19:14 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:19:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:19:15 --> Severity: Notice --> Undefined variable: htp /var/www/html/siskia/application/controllers/Anak.php 104
ERROR - 2018-06-03 00:19:15 --> Severity: Notice --> Undefined variable: htp /var/www/html/siskia/application/controllers/Anak.php 104
ERROR - 2018-06-03 00:19:20 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:19:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:19:20 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:19:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:19:21 --> Severity: Notice --> Undefined variable: htp /var/www/html/siskia/application/controllers/Anak.php 104
ERROR - 2018-06-03 00:19:21 --> Severity: Notice --> Undefined variable: htp /var/www/html/siskia/application/controllers/Anak.php 104
ERROR - 2018-06-03 00:19:50 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:19:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:19:50 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:19:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:20:10 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:20:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:20:10 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:20:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:20:28 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:20:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:20:28 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:20:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:20:35 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:20:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:20:35 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:20:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:21:41 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:21:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:21:41 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:21:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:22:11 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:22:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:22:11 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:22:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:22:22 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:22:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:22:22 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:22:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:15 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:15 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:29 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:29 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:29 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:29 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:41 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:41 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:53 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:23:53 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:23:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:44:50 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:44:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:44:50 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:44:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:44:53 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 00:44:53 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 00:44:53 --> Severity: Error --> Class 'M_imun' not found /var/www/html/siskia/system/core/Loader.php 305
ERROR - 2018-06-03 00:45:06 --> Severity: Notice --> Undefined variable: kec /var/www/html/siskia/application/views/imun.php 133
ERROR - 2018-06-03 00:45:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/imun.php 133
ERROR - 2018-06-03 00:45:53 --> Severity: Notice --> Undefined variable: kec /var/www/html/siskia/application/views/imun.php 133
ERROR - 2018-06-03 00:45:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/imun.php 133
ERROR - 2018-06-03 15:46:47 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 15:46:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 15:46:47 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 15:46:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 15:46:50 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 15:46:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 15:46:50 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 15:46:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:03:52 --> Query error: Unknown column 'cak.id' in 'field list' - Invalid query: SELECT `cak`.`id`, `salin`.`tglsalin`, `lahir`.`nmbayi`, YEAR(CURDATE()) - YEAR(salin.tglsalin) AS umuranak
FROM `imun`
JOIN `salin` ON `cak`.`id` = `salin`.`idcak`
JOIN `lahir` ON `cak`.`id` = `lahir`.`idcak`
WHERE `cak`.`id` = '8'
ERROR - 2018-06-03 16:09:13 --> Query error: Unknown column 'imun.vaksin' in 'where clause' - Invalid query: SELECT `imun`.*, `data_vaksin`.`vaksin`, `tenagasehat`.`nama` as `tkes`
FROM `imun`
JOIN `data_vaksin` ON `imun`.`idvak` = `data_vaksin`.`id`
JOIN `tenagasehat` ON `imun`.`idperiksa` = `tenagasehat`.`id`
WHERE `idcak` = '8'
AND   (
`imun`.`vaksin` LIKE '%a%' ESCAPE '!'
OR  `tenagasehat`.`nama` LIKE '%a%' ESCAPE '!'
 )
ORDER BY `imun`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 16:09:16 --> Query error: Unknown column 'imun.vaksin' in 'where clause' - Invalid query: SELECT `imun`.*, `data_vaksin`.`vaksin`, `tenagasehat`.`nama` as `tkes`
FROM `imun`
JOIN `data_vaksin` ON `imun`.`idvak` = `data_vaksin`.`id`
JOIN `tenagasehat` ON `imun`.`idperiksa` = `tenagasehat`.`id`
WHERE `idcak` = '8'
AND   (
`imun`.`vaksin` LIKE '%an%' ESCAPE '!'
OR  `tenagasehat`.`nama` LIKE '%an%' ESCAPE '!'
 )
ORDER BY `imun`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 16:09:34 --> Query error: Unknown column 'imun.vaksin' in 'where clause' - Invalid query: SELECT `imun`.*, `data_vaksin`.`vaksin`, `tenagasehat`.`nama` as `tkes`
FROM `imun`
JOIN `data_vaksin` ON `imun`.`idvak` = `data_vaksin`.`id`
JOIN `tenagasehat` ON `imun`.`idperiksa` = `tenagasehat`.`id`
WHERE `idcak` = '8'
AND   (
`imun`.`vaksin` LIKE '%a%' ESCAPE '!'
OR  `tenagasehat`.`nama` LIKE '%a%' ESCAPE '!'
 )
ORDER BY `imun`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 16:12:57 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:12:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:12:57 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:12:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:14:00 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:14:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:14:00 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:14:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:14:05 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:14:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:14:05 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:14:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:37:28 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:37:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:37:28 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:37:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:44:53 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:44:53 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:44:53 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:52:05 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:52:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:52:05 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:52:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:52:24 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:52:24 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 16:52:24 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:52:24 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 16:52:57 --> Query error: Unknown column 'imun.idvak' in 'on clause' - Invalid query: SELECT `imunlain`.*, `data_vaksin`.`vaksin`, `tenagasehat`.`nama` as `tkes`
FROM `imunlain`
JOIN `data_vaksin` ON `imun`.`idvak` = `data_vaksin`.`id`
JOIN `tenagasehat` ON `imun`.`idperiksa` = `tenagasehat`.`id`
WHERE `imunlain`.`idcak` = '8'
ORDER BY `imunlain`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 16:53:50 --> Query error: Unknown column 'imunlain.idvak' in 'on clause' - Invalid query: SELECT `imunlain`.*, `data_vaksin`.`vaksin`, `tenagasehat`.`nama` as `tkes`
FROM `imunlain`
JOIN `data_vaksin` ON `imunlain`.`idvak` = `data_vaksin`.`id`
JOIN `tenagasehat` ON `imunlain`.`idperiksa` = `tenagasehat`.`id`
WHERE `imunlain`.`idcak` = '8'
ORDER BY `imunlain`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 16:59:13 --> Query error: Unknown column 'umur' in 'field list' - Invalid query: INSERT INTO `imunlain` (`idcak`, `tgl`, `nmvak`, `umur`, `idperiksa`) VALUES ('8', '2018-06-12', 'ok', 3.77, '2')
ERROR - 2018-06-03 17:00:10 --> Query error: Unknown column 'umur' in 'field list' - Invalid query: INSERT INTO `imunlain` (`idcak`, `tgl`, `nmvak`, `umur`, `idperiksa`) VALUES ('8', '2018-06-08', 'nb', 3.63, '3')
ERROR - 2018-06-03 17:01:32 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 17:01:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 17:01:32 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 17:01:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 18:44:50 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 18:44:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 18:44:50 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 18:44:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:04:08 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:04:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:04:08 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:04:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:04:15 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:04:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:04:15 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:04:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:04:26 --> Query error: Unknown column 'imunlain.id' in 'order clause' - Invalid query: SELECT `vit_a`.*, `tenagasehat`.`nama` as `tkes`
FROM `vit_a`
JOIN `tenagasehat` ON `vit_a`.`idperiksa` = `tenagasehat`.`id`
WHERE `vit_a`.`idcak` = '7'
ORDER BY `imunlain`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 19:05:58 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:05:58 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:05:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:06:00 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:06:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:06:00 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:06:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:06:04 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:06:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:06:04 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:06:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:06:09 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:06:09 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:06:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:09:00 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:09:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:09:00 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:09:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:26:04 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:26:04 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:26:04 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:26:08 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:26:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:26:08 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:26:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:26:08 --> Severity: Notice --> Undefined property: Nas::$imunl /var/www/html/siskia/application/controllers/Nas.php 26
ERROR - 2018-06-03 19:26:08 --> Severity: Error --> Call to a member function get_tkes() on null /var/www/html/siskia/application/controllers/Nas.php 26
ERROR - 2018-06-03 19:26:29 --> Query error: Unknown column 'imunlain.id' in 'order clause' - Invalid query: SELECT `gizianak`.*, `tenagasehat`.`nama` as `tkes`
FROM `gizianak`
JOIN `tenagasehat` ON `gizianak`.`idperiksa` = `tenagasehat`.`id`
WHERE `gizianak`.`idcak` = '8'
ORDER BY `imunlain`.`id` DESC
 LIMIT 10
ERROR - 2018-06-03 19:27:16 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 19:27:16 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 19:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:34:00 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:34:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:34:00 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:34:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:34:40 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:34:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:34:40 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:34:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:34:49 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:34:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:34:49 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:34:49 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:36:00 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:36:00 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:36:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:36:34 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:36:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 20:36:34 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 20:36:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:37:56 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:37:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:37:56 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:37:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:37:58 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:37:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:37:58 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:37:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:51:42 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:51:42 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:51:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:51:45 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:51:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:51:45 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:51:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:51:45 --> Severity: Notice --> Undefined variable: main_view /var/www/html/siskia/application/views/template/dashboard.php 115
ERROR - 2018-06-03 23:53:20 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-03 23:53:20 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-03 23:53:22 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:53:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-06-03 23:53:22 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-06-03 23:53:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
