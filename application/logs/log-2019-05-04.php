<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-04 12:34:09 --> 404 Page Not Found: Ukm/ajax_list
ERROR - 2019-05-04 12:34:14 --> 404 Page Not Found: Ukm/ajax_list
ERROR - 2019-05-04 12:51:17 --> 404 Page Not Found: Opd/ajax_update
ERROR - 2019-05-04 12:51:29 --> 404 Page Not Found: Opd/ajax_update
ERROR - 2019-05-04 12:58:17 --> Query error: Unknown column 'ogdj.id' in 'where clause' - Invalid query: SELECT `umkm`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`
FROM `umkm`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `ogdj`.`id` = '1'
ERROR - 2019-05-04 12:58:48 --> Query error: Unknown column 'ogdj.id' in 'where clause' - Invalid query: SELECT `umkm`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`
FROM `umkm`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `ogdj`.`id` = '1'
ERROR - 2019-05-04 13:03:53 --> Query error: Unknown column 'umkm.status' in 'where clause' - Invalid query: SELECT `umkm`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`
FROM `umkm`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `umkm`.`status` =0
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2019-05-04 13:39:54 --> Severity: Error --> Class 'M_yatim' not found /var/www/html/siber/system/core/Loader.php 305
ERROR - 2019-05-04 13:45:27 --> Severity: Notice --> Undefined property: stdClass::$tlahir /var/www/html/siber/application/controllers/Yatim.php 44
ERROR - 2019-05-04 13:45:27 --> Severity: Notice --> Undefined property: stdClass::$tgl /var/www/html/siber/application/controllers/Yatim.php 44
ERROR - 2019-05-04 13:45:27 --> Severity: Notice --> Undefined property: stdClass::$jkel /var/www/html/siber/application/controllers/Yatim.php 45
ERROR - 2019-05-04 13:45:40 --> Severity: Notice --> Undefined property: stdClass::$tlahir /var/www/html/siber/application/controllers/Yatim.php 44
ERROR - 2019-05-04 13:45:40 --> Severity: Notice --> Undefined property: stdClass::$tgl /var/www/html/siber/application/controllers/Yatim.php 44
ERROR - 2019-05-04 13:45:40 --> Severity: Notice --> Undefined property: stdClass::$jkel /var/www/html/siber/application/controllers/Yatim.php 45
ERROR - 2019-05-04 13:45:45 --> Severity: Notice --> Undefined property: stdClass::$tlahir /var/www/html/siber/application/controllers/Yatim.php 44
ERROR - 2019-05-04 13:45:45 --> Severity: Notice --> Undefined property: stdClass::$tgl /var/www/html/siber/application/controllers/Yatim.php 44
ERROR - 2019-05-04 13:45:45 --> Severity: Notice --> Undefined property: stdClass::$jkel /var/www/html/siber/application/controllers/Yatim.php 45
ERROR - 2019-05-04 13:49:33 --> Query error: Unknown table 'umkm' - Invalid query: SELECT `umkm`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`
FROM `yatim`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `umkm`.`id` = '1'
ERROR - 2019-05-04 13:49:56 --> Query error: Unknown column 'umkm.id_nik' in 'on clause' - Invalid query: SELECT `yatim`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `yatim`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `yatim`.`id` = '1'
ERROR - 2019-05-04 13:50:03 --> Query error: Unknown column 'umkm.id_nik' in 'on clause' - Invalid query: SELECT `yatim`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `yatim`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `yatim`.`id` = '1'
ERROR - 2019-05-04 13:51:18 --> Query error: Unknown table 'umkm' - Invalid query: SELECT `umkm`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`
FROM `yatim`
JOIN `penduduk_siak` ON `umkm`.`id_nik` = `penduduk_siak`.`id`
WHERE `umkm`.`id` = '1'
