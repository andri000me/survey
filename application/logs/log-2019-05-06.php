<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-05-06 10:54:48 --> Query error: Unknown column 'lansia_nik' in 'on clause' - Invalid query: SELECT `lansia`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `lansia`
JOIN `penduduk_siak` ON `lansia_nik` = `penduduk_siak`.`id`
WHERE `lansia`.`stat` =0
ORDER BY `yatim`.`id` DESC
 LIMIT 10
ERROR - 2019-05-06 10:54:54 --> Query error: Unknown column 'lansia_nik' in 'on clause' - Invalid query: SELECT `lansia`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `lansia`
JOIN `penduduk_siak` ON `lansia_nik` = `penduduk_siak`.`id`
WHERE `lansia`.`stat` =0
ORDER BY `yatim`.`id` DESC
 LIMIT 10
ERROR - 2019-05-06 10:55:34 --> Query error: Unknown column 'yatim.id' in 'order clause' - Invalid query: SELECT `lansia`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`alamat`, `penduduk_siak`.`rt`, `penduduk_siak`.`rw`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`
FROM `lansia`
JOIN `penduduk_siak` ON `lansia`.`id_nik` = `penduduk_siak`.`id`
WHERE `lansia`.`stat` =0
ORDER BY `yatim`.`id` DESC
 LIMIT 10
