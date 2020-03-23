<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-05 21:43:09 --> 404 Page Not Found: Butterfly/img
ERROR - 2018-11-05 21:43:12 --> 404 Page Not Found: Butterfly/img
ERROR - 2018-11-05 21:51:26 --> Severity: Compile Error --> Cannot redeclare M_util::srt_masuk() /var/www/html/siakel/application/models/M_util.php 240
ERROR - 2018-11-05 22:21:58 --> Query error: Unknown column 'data_user.id' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`, `tracking`.`iduser`
FROM `surat`
JOIN `penduduk_siak` ON `surat`.`uniksurat` = `penduduk_siak`.`idsurat`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `tracking` ON `data_user`.`id` = `tracking`.`id`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-11-05 22:22:38 --> Query error: Unknown column 'data_user.id' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`, `tracking`.`iduser`
FROM `surat`
JOIN `penduduk_siak` ON `surat`.`uniksurat` = `penduduk_siak`.`idsurat`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `tracking` ON `data_user`.`id` = `tracking`.`id`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-11-05 22:23:12 --> Query error: Unknown column 'data_user.nama_petugas' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`, `tracking`.`iduser`, `data_user`.`nama_petugas`
FROM `surat`
JOIN `penduduk_siak` ON `surat`.`uniksurat` = `penduduk_siak`.`idsurat`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `tracking` ON `data_user`.`id` = `tracking`.`iduser`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-11-05 22:24:25 --> Query error: Not unique table/alias: 'tracking' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`, `tracking`.`iduser`, `data_user`.`nama_petugas`
FROM `surat`
JOIN `penduduk_siak` ON `surat`.`uniksurat` = `penduduk_siak`.`idsurat`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `tracking` ON `surat`.`id` = `tracking`.`idsurat`
JOIN `tracking` ON `data_user`.`id` = `tracking`.`iduser`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:12 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:26:15 --> Severity: Notice --> Undefined property: stdClass::$iduser /var/www/html/siakel/application/controllers/Suratadm.php 105
ERROR - 2018-11-05 22:27:16 --> Query error: Not unique table/alias: 'tracking' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`, `tracking`.`iduser`, `data_user`.`nama_petugas`
FROM `surat`
JOIN `penduduk_siak` ON `surat`.`uniksurat` = `penduduk_siak`.`idsurat`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `tracking` ON `surat`.`id` = `tracking`.`idsurat`
JOIN `tracking` ON `data_user`.`id` = `tracking`.`iduser`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-11-05 23:19:52 --> Severity: Notice --> Undefined variable: query /var/www/html/siakel/application/models/M_util.php 269
ERROR - 2018-11-05 23:19:52 --> Severity: Error --> Call to a member function result_array() on null /var/www/html/siakel/application/models/M_util.php 269
ERROR - 2018-11-05 23:20:10 --> Severity: Notice --> Undefined variable: query /var/www/html/siakel/application/models/M_util.php 269
ERROR - 2018-11-05 23:20:10 --> Severity: Error --> Call to a member function result() on null /var/www/html/siakel/application/models/M_util.php 269
ERROR - 2018-11-05 23:20:34 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 268
ERROR - 2018-11-05 23:20:35 --> 404 Page Not Found: Dashboard1/ajax_donut
ERROR - 2018-11-05 23:21:16 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 268
ERROR - 2018-11-05 23:21:17 --> 404 Page Not Found: Dashboard1/ajax_donut
ERROR - 2018-11-05 23:21:42 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 268
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:02 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 268
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:24:59 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:25:46 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:07 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:26:14 --> Severity: Notice --> Undefined index: content /var/www/html/siakel/application/views/template/dashboard.php 263
ERROR - 2018-11-05 23:43:51 --> Severity: Notice --> Undefined index: jumlah /var/www/html/siakel/application/views/template/dashboard.php 283
ERROR - 2018-11-05 23:43:51 --> Severity: Notice --> Undefined index: jumlah /var/www/html/siakel/application/views/template/dashboard.php 283
ERROR - 2018-11-05 23:43:51 --> Severity: Notice --> Undefined index: jumlah /var/www/html/siakel/application/views/template/dashboard.php 283
ERROR - 2018-11-05 23:55:22 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 262
ERROR - 2018-11-05 23:55:22 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7831
ERROR - 2018-11-05 23:55:22 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-05 23:55:26 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 262
ERROR - 2018-11-05 23:55:26 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7831
ERROR - 2018-11-05 23:55:26 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-05 23:55:42 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 262
ERROR - 2018-11-05 23:55:42 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7831
ERROR - 2018-11-05 23:55:42 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-05 23:56:51 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 260
ERROR - 2018-11-05 23:56:51 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7829
ERROR - 2018-11-05 23:56:51 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7838
ERROR - 2018-11-05 23:57:19 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 260
ERROR - 2018-11-05 23:57:19 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7829
ERROR - 2018-11-05 23:57:19 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7838
ERROR - 2018-11-05 23:59:11 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 259
ERROR - 2018-11-05 23:59:11 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 7819
ERROR - 2018-11-05 23:59:44 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 259
ERROR - 2018-11-05 23:59:44 --> Severity: Notice --> Undefined variable: graf /var/www/html/siakel/application/views/template/dashboard.php 7821
