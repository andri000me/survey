<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-28 02:44:48 --> Query error: Table 'siakel.ibu' doesn't exist - Invalid query: SELECT `kota`.`content` as `nmkota`, `kec`.`content` as `nmkec`, `kel`.`content` as `nmkel`, `ibu`.*
FROM `ibu`
JOIN `kota` ON `ibu`.`kota` = `kota`.`id`
JOIN `kec` ON `ibu`.`idkec` = `kec`.`id`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
ORDER BY `ibu`.`id`
ERROR - 2018-07-28 02:59:26 --> 404 Page Not Found: Faskes/ajax_edit
ERROR - 2018-07-28 03:02:40 --> Query error: Unknown column 'data_skpd.idkel' in 'on clause' - Invalid query: SELECT `data_skpd`.*, `kel`.`content` as `nmkel`
FROM `data_skpd`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
WHERE `data_skpd`.`id` = '97'
ERROR - 2018-07-28 03:03:05 --> Query error: Unknown column 'data_skpd.idkel' in 'on clause' - Invalid query: SELECT `data_skpd`.*, `kel`.`content` as `nmkel`
FROM `data_skpd`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
WHERE `data_skpd`.`id` = '97'
ERROR - 2018-07-28 03:32:25 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'super'
ERROR - 2018-07-28 03:32:29 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'super'
ERROR - 2018-07-28 03:32:30 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'super'
ERROR - 2018-07-28 03:32:35 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'super'
ERROR - 2018-07-28 03:33:02 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'yudigopels'
ERROR - 2018-07-28 03:33:23 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'yudigopels'
ERROR - 2018-07-28 03:33:47 --> Query error: Unknown column 'data_skpd.idkel' in 'field list' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kel`.`content` as `nmkel`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel`=`kel`.`id`
WHERE `data_user`.`username` = 'yudigopels'
ERROR - 2018-07-28 03:35:20 --> Severity: Notice --> Undefined property: stdClass::$idkel /var/www/html/siakel/application/controllers/Login.php 76
ERROR - 2018-07-28 03:35:20 --> Severity: Notice --> Undefined property: stdClass::$nmkel /var/www/html/siakel/application/controllers/Login.php 77
ERROR - 2018-07-28 03:40:03 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Opd.php 48
ERROR - 2018-07-28 03:40:03 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Opd.php 48
ERROR - 2018-07-28 03:45:09 --> 404 Page Not Found: Useraja/ajax_editpass
ERROR - 2018-07-28 03:53:59 --> Severity: Warning --> chmod(): Operation not permitted /var/www/html/siakel/system/libraries/Image_lib.php 828
ERROR - 2018-07-28 03:54:26 --> Severity: Warning --> chmod(): Operation not permitted /var/www/html/siakel/system/libraries/Image_lib.php 828
