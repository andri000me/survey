<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-15 21:21:21 --> Query error: Unknown column 'kec.id' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
WHERE `surat`.`jsurat` = 1
AND `kel`.`id` = '11'
AND `kel`.`idkec` = '2'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-10-15 21:21:30 --> Query error: Unknown column 'kec.id' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
WHERE `surat`.`jsurat` = 1
AND `kel`.`id` = '11'
AND `kel`.`idkec` = '2'
AND `surat`.`jsurat` = 1
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-10-15 21:26:55 --> Query error: Unknown column 'kel.idk' in 'where clause' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
WHERE `kel`.`id` = '- Pilih -'
AND `surat`.`jsurat` = 1
AND `kel`.`idk` = '2'
ORDER BY `surat`.`id` DESC
 LIMIT 10
