<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-05 00:00:32 --> Severity: Notice --> Undefined property: Mati::$lhr /var/www/html/siakel/application/controllers/Mati.php 436
ERROR - 2018-08-05 00:00:32 --> Severity: Error --> Call to a member function cari_hash() on null /var/www/html/siakel/application/controllers/Mati.php 436
ERROR - 2018-08-05 00:00:33 --> Severity: Notice --> Undefined property: Mati::$lhr /var/www/html/siakel/application/controllers/Mati.php 436
ERROR - 2018-08-05 00:00:33 --> Severity: Error --> Call to a member function cari_hash() on null /var/www/html/siakel/application/controllers/Mati.php 436
ERROR - 2018-08-05 00:00:42 --> Severity: Notice --> Undefined property: Mati::$lhr /var/www/html/siakel/application/controllers/Mati.php 436
ERROR - 2018-08-05 00:00:42 --> Severity: Error --> Call to a member function cari_hash() on null /var/www/html/siakel/application/controllers/Mati.php 436
ERROR - 2018-08-05 00:04:50 --> Query error: Unknown table 'lahir' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `mati`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `lahir`.`idsign` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-05 00:04:59 --> Query error: Unknown table 'lahir' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `mati`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `lahir`.`idsign` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-05 00:05:27 --> Query error: Unknown table 'lahir' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `mati`
JOIN `penduduk` ON `mati`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `mati`.`idsign` = `data_user`.`id`
WHERE `mati`.`id` = '1'
ERROR - 2018-08-05 00:06:02 --> Query error: Unknown column 'lahir.idpamong' in 'on clause' - Invalid query: SELECT `mati`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `mati`
JOIN `penduduk` ON `mati`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `mati`.`idsign` = `data_user`.`id`
WHERE `mati`.`id` = '1'
ERROR - 2018-08-05 00:12:04 --> Severity: Parsing Error --> syntax error, unexpected '$us' (T_VARIABLE) /var/www/html/siakel/application/controllers/Mati.php 685
ERROR - 2018-08-05 00:27:34 --> Severity: Parsing Error --> syntax error, unexpected '>' /var/www/html/siakel/application/views/lap/matipdf.php 142
ERROR - 2018-08-05 14:13:26 --> Query error: Unknown column 'kota.id' in 'where clause' - Invalid query: SELECT `kk`.*, `penduduk`.`nama`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`
FROM `kk`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `penduduk` ON `kk`.`id` = `penduduk`.`idkk`
WHERE `kota`.`id` = 1
AND `penduduk`.`statkk` = 1
ORDER BY `kk`.`id` DESC
 LIMIT 10
ERROR - 2018-08-05 14:13:35 --> Query error: Unknown column 'kota.id' in 'where clause' - Invalid query: SELECT `kk`.*, `penduduk`.`nama`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`
FROM `kk`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `penduduk` ON `kk`.`id` = `penduduk`.`idkk`
WHERE `kota`.`id` = 1
AND `penduduk`.`statkk` = 1
ORDER BY `kk`.`id` DESC
 LIMIT 10
ERROR - 2018-08-05 14:15:26 --> Severity: Notice --> Undefined property: stdClass::$idkel /var/www/html/siakel/application/controllers/Kk.php 56
ERROR - 2018-08-05 14:15:26 --> Severity: Notice --> Undefined property: stdClass::$idkel /var/www/html/siakel/application/controllers/Kk.php 56
