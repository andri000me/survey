<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-09 12:47:00 --> Query error: Unknown column 'nama_kk' in 'field list' - Invalid query: INSERT INTO `putus` (`id_nik`, `nama_kk`) VALUES ('1', NULL)
ERROR - 2019-05-09 12:48:22 --> Query error: Unknown column 'lansia.id' in 'where clause' - Invalid query: SELECT `putus`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `putus`
JOIN `penduduk_siak` ON `putus`.`id_nik` = `penduduk_siak`.`id`
WHERE `putus`.`stat` =0
AND `lansia`.`id` = '1'
ERROR - 2019-05-09 12:48:40 --> Query error: Unknown column 'lansia.id' in 'where clause' - Invalid query: SELECT `putus`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `putus`
JOIN `penduduk_siak` ON `putus`.`id_nik` = `penduduk_siak`.`id`
WHERE `putus`.`stat` =0
AND `lansia`.`id` = '1'
ERROR - 2019-05-09 12:58:35 --> Severity: Error --> Class 'M_pemulung' not found /var/www/html/siber/system/core/Loader.php 305
ERROR - 2019-05-09 13:20:43 --> Severity: Notice --> Undefined variable: jenis /var/www/html/siber/application/controllers/Disabilitas.php 99
ERROR - 2019-05-09 13:20:43 --> Severity: Notice --> Undefined variable: jenis /var/www/html/siber/application/controllers/Disabilitas.php 101
ERROR - 2019-05-09 13:22:15 --> Severity: Parsing Error --> syntax error, unexpected '=' /var/www/html/siber/application/controllers/Disabilitas.php 99
ERROR - 2019-05-09 13:22:19 --> Severity: Parsing Error --> syntax error, unexpected '=' /var/www/html/siber/application/controllers/Disabilitas.php 99
ERROR - 2019-05-09 13:22:26 --> Severity: Parsing Error --> syntax error, unexpected '=' /var/www/html/siber/application/controllers/Disabilitas.php 101
ERROR - 2019-05-09 13:33:51 --> Severity: Notice --> Undefined property: stdClass::$jenis /var/www/html/siber/application/controllers/Becak.php 99
ERROR - 2019-05-09 13:33:51 --> Severity: Notice --> Undefined property: stdClass::$jenis /var/www/html/siber/application/controllers/Becak.php 101
ERROR - 2019-05-09 13:33:51 --> Severity: Notice --> Undefined property: stdClass::$jenis /var/www/html/siber/application/controllers/Becak.php 103
ERROR - 2019-05-09 13:33:51 --> Severity: Notice --> Undefined property: stdClass::$jenis /var/www/html/siber/application/controllers/Becak.php 105
ERROR - 2019-05-09 13:33:51 --> Severity: Notice --> Undefined property: stdClass::$jenis /var/www/html/siber/application/controllers/Becak.php 107
ERROR - 2019-05-09 13:33:51 --> Severity: Notice --> Undefined property: stdClass::$jenis /var/www/html/siber/application/controllers/Becak.php 109
ERROR - 2019-05-09 14:35:19 --> Severity: Error --> Class 'M_pbinobdt' not found /var/www/html/siber/system/core/Loader.php 305
