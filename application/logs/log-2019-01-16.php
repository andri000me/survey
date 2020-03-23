<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-01-16 16:50:16 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 293
ERROR - 2019-01-16 16:50:16 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 307
ERROR - 2019-01-16 16:51:05 --> Query error: Unknown column 'lahir.ayah' in 'field list' - Invalid query: SELECT `surat`.*, `lahir`.`ayah`, `lahir`.`nama`
FROM `surat`
JOIN `lahir` ON `surat`.`uniksurat` = `lahir`.`uniksurat`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 2
AND `surat`.`idkel` = '7'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2019-01-16 16:51:09 --> Query error: Unknown column 'lahir.ayah' in 'field list' - Invalid query: SELECT `surat`.*, `lahir`.`ayah`, `lahir`.`nama`
FROM `surat`
JOIN `lahir` ON `surat`.`uniksurat` = `lahir`.`uniksurat`
WHERE `surat`.`jsurat` = 2
AND `surat`.`idkel` = '7'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2019-01-16 16:51:23 --> Query error: Table 'siakel_online.nikah' doesn't exist - Invalid query: SELECT `surat`.*, `nikah`.`suami`, `nikah`.`istri`
FROM `surat`
JOIN `nikah` ON `surat`.`uniksurat` = `nikah`.`uniksurat`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 4
AND `surat`.`idkel` = '7'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2019-01-16 16:54:15 --> Query error: Table 'siakel_online.nikah' doesn't exist - Invalid query: SELECT `surat`.*, `nikah`.`suami`, `nikah`.`istri`
FROM `surat`
JOIN `nikah` ON `surat`.`uniksurat` = `nikah`.`uniksurat`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 4
AND `surat`.`idkel` = '7'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2019-01-16 16:55:07 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 293
ERROR - 2019-01-16 16:55:07 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 307
ERROR - 2019-01-16 17:10:42 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 293
ERROR - 2019-01-16 17:10:42 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 307
ERROR - 2019-01-16 17:31:41 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 293
ERROR - 2019-01-16 17:31:41 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 307
