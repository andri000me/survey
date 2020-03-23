<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-03-28 13:33:12 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 295
ERROR - 2019-03-28 13:33:12 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 309
ERROR - 2019-03-28 13:34:24 --> Query error: Unknown column 'mati.nama' in 'field list' - Invalid query: SELECT `surat`.*, `mati`.`nama`
FROM `surat`
JOIN `mati` ON `surat`.`uniksurat` = `mati`.`uniksurat`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 5
AND `surat`.`idkel` = '1'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2019-03-28 13:34:41 --> Query error: Unknown column 'mati.nama' in 'field list' - Invalid query: SELECT `surat`.*, `mati`.`nama`
FROM `surat`
JOIN `mati` ON `surat`.`uniksurat` = `mati`.`uniksurat`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 5
AND `surat`.`idkel` = '1'
ORDER BY `surat`.`id` DESC
 LIMIT 10
