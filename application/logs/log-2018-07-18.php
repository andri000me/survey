<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-18 13:58:32 --> Query error: Unknown column 'm_kerja.content' in 'field list' - Invalid query: SELECT `kia`.*, `ibu`.`id` as `idibu`, `ibu`.`nama` as `namaibu`, `ibu`.`idkel`, `ibu`.`alamat`, `data_didik`.`tingkatp`, `m_kerja`.`content` as `kerja`, YEAR(CURDATE()) - YEAR(ibu.lahiribu) AS age, `ibu`.`nikibu`, `cak`.*, `kel`.`content` as `nmkel`, `kspr`.`faskes` as `fas`, `data_skpd`.`nama_skpd`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `data_didik` ON `ibu`.`iddidik` = `data_didik`.`id`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
JOIN `kspr` ON `cak`.`id` = `kspr`.`idcak`
JOIN `data_skpd` ON `kspr`.`faskes` = `data_skpd`.`id`
WHERE `cak`.`id` = '186'
ERROR - 2018-07-18 14:19:18 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-07-18 14:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-07-18 14:19:18 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-07-18 14:19:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-07-18 14:26:15 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-07-18 14:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-07-18 14:26:15 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-07-18 14:26:15 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-07-18 14:26:23 --> Severity: Notice --> Undefined variable: imun /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-07-18 14:26:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 177
ERROR - 2018-07-18 14:26:23 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-07-18 14:26:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/anak.php 273
ERROR - 2018-07-18 14:26:23 --> Severity: Parsing Error --> syntax error, unexpected '$data1' (T_VARIABLE) /var/www/html/siskia/application/controllers/Emosi.php 210
ERROR - 2018-07-18 14:26:48 --> Severity: Parsing Error --> syntax error, unexpected '$data' (T_VARIABLE) /var/www/html/siskia/application/controllers/Emosi.php 210
