<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-07-30 14:33:08 --> Severity: Notice --> Undefined variable: head /var/www/html/siakel/application/controllers/Surat.php 396
ERROR - 2018-07-30 14:33:08 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 396
ERROR - 2018-07-30 14:52:53 --> Severity: Parsing Error --> syntax error, unexpected '$us' (T_VARIABLE) /var/www/html/siakel/application/controllers/Surat.php 407
ERROR - 2018-07-30 15:17:12 --> 404 Page Not Found: Admin/login
ERROR - 2018-07-30 15:17:40 --> Query error: Unknown column 'kk.alamat' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `kk`.`nrt`, `kk`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-07-30 15:21:00 --> Query error: Unknown column 'kk.nrt' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `kk`.`nrt`, `kk`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_agama` ON `penduduk`.`idagm` = `data_agama`.`id`
JOIN `data_didik` ON `penduduk`.`didik` = `data_didik`.`id`
JOIN `data_kerja` ON `penduduk`.`idkerja` = `data_kerja`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-07-30 15:21:06 --> Query error: Unknown column 'kk.nrt' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `kk`.`nrt`, `kk`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_agama` ON `penduduk`.`idagm` = `data_agama`.`id`
JOIN `data_didik` ON `penduduk`.`didik` = `data_didik`.`id`
JOIN `data_kerja` ON `penduduk`.`idkerja` = `data_kerja`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-07-30 15:21:38 --> Query error: Unknown column 'rt.nrw' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `rt`.`nrt`, `rt`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_agama` ON `penduduk`.`idagm` = `data_agama`.`id`
JOIN `data_didik` ON `penduduk`.`didik` = `data_didik`.`id`
JOIN `data_kerja` ON `penduduk`.`idkerja` = `data_kerja`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-07-30 15:23:23 --> Severity: Notice --> Undefined property: stdClass::$jkl /var/www/html/siakel/application/controllers/Surat.php 460
ERROR - 2018-07-30 15:37:02 --> Severity: Parsing Error --> syntax error, unexpected '=' /var/www/html/siakel/application/controllers/Surat.php 387
ERROR - 2018-07-30 16:08:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as `nmkel` LIKE '%w%' ESCAPE '!'
 )
ORDER BY `rw`.`id` DESC
 LIMIT 10' at line 6 - Invalid query: SELECT `rw`.*, `kel`.`content` as `nmkel`
FROM `rw`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
WHERE   (
`rw`.`nrw` LIKE '%w%' ESCAPE '!'
OR  `kel`.`content` as `nmkel` LIKE '%w%' ESCAPE '!'
 )
ORDER BY `rw`.`id` DESC
 LIMIT 10
ERROR - 2018-07-30 16:08:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'as `nmkel` LIKE '%m%' ESCAPE '!'
 )
ORDER BY `rt`.`id` DESC
 LIMIT 10' at line 8 - Invalid query: SELECT `rt`.*, `rw`.`nrw`, `kel`.`content` as `nmkel`
FROM `rt`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
WHERE   (
`rt`.`nrt` LIKE '%m%' ESCAPE '!'
OR  `rw`.`nrw` LIKE '%m%' ESCAPE '!'
OR  `kel`.`content` as `nmkel` LIKE '%m%' ESCAPE '!'
 )
ORDER BY `rt`.`id` DESC
 LIMIT 10
ERROR - 2018-07-30 16:11:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`kota`.`content` LIKE '%p%' ESCAPE '!'
 )
ORDER BY `kel`.`id` DESC
 LIMIT 10' at line 6 - Invalid query: SELECT `kel`.*, `kec`.`content` as `nmkec`, `kota`.`content` as `nmkota`
FROM `kel`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
WHERE   (
`kel`.`content, kec`.`content,` `kota`.`content` LIKE '%p%' ESCAPE '!'
 )
ORDER BY `kel`.`id` DESC
 LIMIT 10
ERROR - 2018-07-30 16:11:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '.`content` as `nmkota` LIKE '%p%' ESCAPE '!'
 )
ORDER BY `kel`.`id` DESC
 LIMIT ' at line 6 - Invalid query: SELECT `kel`.*, `kec`.`content` as `nmkec`, `kota`.`content` as `nmkota`
FROM `kel`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
WHERE   (
`kel`.`content, kec`.`content as nmkec, kota`.`content` as `nmkota` LIKE '%p%' ESCAPE '!'
 )
ORDER BY `kel`.`id` DESC
 LIMIT 10
