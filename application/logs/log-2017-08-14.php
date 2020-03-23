<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-08-14 06:58:29 --> Query error: Unknown column 'tenagasehat.telp' in 'field list' - Invalid query: SELECT `kota`.`content` as `nmkota`, `kec`.`content` as `nmkec`, `kel`.`content` as `nmkel`, `data_agama`.*, `data_didik`.*, `m_darah`.`content` as `gold`, `m_kerja`.`content` as `kerja`, `ibu`.*, `tenagasehat`.`id` as `idtkes`, `tenagasehat`.`nama` as `tknama`, `tenagasehat`.`telp` as `tktelp`, YEAR(CURDATE()) - YEAR(ibu.lahiribu) AS age, YEAR(CURDATE()) - YEAR(ibu.tglsuami) AS ages, YEAR(CURDATE()) - YEAR(ibu.lahiranak) AS agea, `ibu`.`anak`, `kia`.*
FROM `kia`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `tenagasehat` ON `kia`.`tkes` = `tenagasehat`.`id`
JOIN `kota` ON `ibu`.`kota` = `kota`.`id`
JOIN `kec` ON `ibu`.`idkec` = `kec`.`id`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
JOIN `data_agama` ON `ibu`.`idag` = `data_agama`.`id`
JOIN `data_didik` ON `ibu`.`iddidik` = `data_didik`.`id`
JOIN `m_darah` ON `ibu`.`iddarah` = `m_darah`.`id`
JOIN `m_kerja` ON `ibu`.`idkerja` = `m_kerja`.`id`
WHERE `kia`.`id` = '1'
ORDER BY `kia`.`id`
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 06:59:00 --> Severity: Notice --> Undefined index: idtkes /var/www/hamil/application/views/client/updatecak.php 36
ERROR - 2017-08-14 00:59:14 --> Severity: Warning --> opendir(/var/www/hamil/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/hamil/application/third_party/MPDF57/mpdf.php 7502
