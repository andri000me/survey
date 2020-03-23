<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-25 18:43:03 --> 404 Page Not Found: Butterfly/img
ERROR - 2018-10-25 18:43:03 --> 404 Page Not Found: Butterfly/img
ERROR - 2018-10-25 21:42:33 --> Severity: Notice --> Undefined index: NAMA_LGKP /var/www/html/siakel/application/controllers/Surat.php 1434
ERROR - 2018-10-25 21:43:16 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1434
ERROR - 2018-10-25 21:43:31 --> Severity: Notice --> Undefined index: nama_lgkp /var/www/html/siakel/application/controllers/Surat.php 1434
ERROR - 2018-10-25 15:45:36 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 22:09:25 --> Query error: Unknown column 'surat.idnik' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
WHERE `surat`.`status` = '1'
AND `surat`.`jsurat` = 1
AND `surat`.`idkel` = '11'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-10-25 22:31:42 --> Query error: Unknown column 'judul' in 'field list' - Invalid query: INSERT INTO `penduduk_siak` (`nik`, `judul`, `tglsurat`, `tglberlaku`, `perlu`, `penutup`, `nosurat`, `nohp`, `idpamong`, `idkel`, `uniksurat`, `jsurat`) VALUES ('3574032502820005', 'Ijin Menikah', '2018-10-25', '2018-11-15', 'Menikah', 'Demikian agar dipergunakan sebagaimana mestinya.', '425.02/999/X/2018', '081232301111', '1', '11', '2510181', 1)
ERROR - 2018-10-25 22:37:45 --> Query error: Unknown column 'surat.idnik' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `data_pejabat`.`njabat`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 22:46:06 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:46:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:46:06 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:46:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:46:08 --> Query error: Unknown column 'surat.idnik' in 'on clause' - Invalid query: SELECT `surat_berkas`.*, `surat`.`nosurat`, `penduduk`.`nama`, `penduduk`.`nik`
FROM `surat_berkas`
JOIN `surat` ON `surat_berkas`.`idsurat` = `surat`.`id`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
WHERE `surat_berkas`.`idsurat` = '1'
ORDER BY `surat_berkas`.`id` DESC
 LIMIT 10
ERROR - 2018-10-25 22:47:23 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:47:23 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:48:38 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:48:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:48:38 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:48:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:50:06 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:50:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:50:06 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:50:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:50:17 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:50:17 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:50:17 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:50:17 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:51:27 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:51:27 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:51:27 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:51:27 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:52:03 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:52:03 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:52:03 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:52:03 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:53:31 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:53:31 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:53:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:53:34 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:53:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 22:53:34 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:53:34 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 22:55:32 --> Query error: Unknown column 'surat.idnik' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `kel`.`idkec` as `idk`, `kel`.`content`, `kec`.`id` as `idkec`, `kec`.`content` as `kec`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `kel` ON `surat`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
WHERE `kel`.`id` = '7'
AND `surat`.`jsurat` = 1
AND `kel`.`idkec` = '2'
ORDER BY `surat`.`id` DESC
 LIMIT 10
ERROR - 2018-10-25 23:00:10 --> Query error: Unknown column 'surat.idnik' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
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
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined property: stdClass::$wn /var/www/html/siakel/application/controllers/Surat.php 622
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined property: stdClass::$kwn /var/www/html/siakel/application/controllers/Surat.php 628
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Surat.php 866
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Surat.php 866
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Surat.php 866
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 868
ERROR - 2018-10-25 23:02:19 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 868
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 871
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Surat.php 872
ERROR - 2018-10-25 23:03:56 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 874
ERROR - 2018-10-25 23:04:12 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:04:12 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:04:12 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-10-25 23:04:12 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 871
ERROR - 2018-10-25 23:04:12 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Surat.php 872
ERROR - 2018-10-25 23:04:12 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 874
ERROR - 2018-10-25 23:04:55 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 871
ERROR - 2018-10-25 23:04:55 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Surat.php 872
ERROR - 2018-10-25 23:04:55 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 874
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$wn /var/www/html/siakel/application/controllers/Surat.php 1063
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$kwn /var/www/html/siakel/application/controllers/Surat.php 1069
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/views/lap/suratpdf.php 92
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/views/lap/suratpdf.php 92
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/views/lap/suratpdf.php 92
ERROR - 2018-10-25 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/views/lap/suratpdf.php 107
ERROR - 2018-10-25 17:05:53 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:07:20 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1242
ERROR - 2018-10-25 23:07:20 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:07:20 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 17:07:20 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1053
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1054
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1087
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 1090
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 1133
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1136
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 1139
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 1182
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1185
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Undefined variable: tsign /var/www/html/siakel/application/controllers/Surat.php 1249
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 6
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 36
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 37
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 38
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 39
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 50
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 54
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 72
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 77
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 82
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 87
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 92
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 97
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 102
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 107
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 112
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 117
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 128
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 140
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 145
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 163
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 185
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 198
ERROR - 2018-10-25 23:12:05 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 198
ERROR - 2018-10-25 23:12:06 --> 404 Page Not Found: %20div%20style%3D/index
ERROR - 2018-10-25 17:12:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/siakel/system/core/Exceptions.php:272) /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7447
ERROR - 2018-10-25 17:12:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/siakel/system/core/Exceptions.php:272) /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 1736
ERROR - 2018-10-25 23:12:37 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:12:37 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:12:37 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 17:12:37 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:13:48 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:13:48 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:13:48 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 23:13:48 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 17:13:48 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:14:35 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:14:35 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:14:35 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 17:14:36 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:15:28 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:15:28 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:15:28 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 17:15:29 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:17:05 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:17:05 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:17:05 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 17:17:05 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:17:35 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 23:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 23:17:35 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 23:17:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 23:17:38 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 23:17:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-10-25 23:17:38 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 23:17:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-10-25 23:17:47 --> Query error: Unknown column 'penduduk_siak.nama' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`, `penduduk_siak`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
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
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:17:54 --> Query error: Unknown column 'penduduk_siak.nama' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`, `penduduk_siak`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
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
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:21:17 --> Query error: Unknown column 'penduduk_siak.nama' in 'field list' - Invalid query: SELECT `surat`.*, `penduduk_siak`.`nama`, `penduduk_siak`.`nik`, `penduduk_siak`.`tlahir`, `penduduk_siak`.`tgl`, `penduduk_siak`.`jkel`, `penduduk_siak`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
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
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:21:56 --> Query error: Unknown table 'penduduk_siak' - Invalid query: SELECT `surat`.*, `penduduk_siak`.*, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:22:05 --> Query error: Unknown table 'penduduk_siak' - Invalid query: SELECT `surat`.*, `penduduk_siak`.*, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `surat`
JOIN `penduduk` ON `surat`.`idnik` = `penduduk`.`id`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:22:28 --> Query error: Unknown column 'penduduk.nik' in 'on clause' - Invalid query: SELECT `surat`.*, `penduduk_siak`.*, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `surat`
JOIN `penduduk_siak` ON `surat`.`nik` = `penduduk`.`nik`
JOIN `data_pejabat` ON `surat`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `surat`.`id` = '1'
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Suratkec.php 603
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Suratkec.php 604
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Suratkec.php 604
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Suratkec.php 604
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Suratkec.php 606
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Suratkec.php 607
ERROR - 2018-10-25 23:22:46 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Suratkec.php 609
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined property: stdClass::$wn /var/www/html/siakel/application/controllers/Suratkec.php 895
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined property: stdClass::$kwn /var/www/html/siakel/application/controllers/Suratkec.php 901
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Suratkec.php 1134
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined variable: ttlsign /var/www/html/siakel/application/controllers/Suratkec.php 1139
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined variable: urlcamat /var/www/html/siakel/application/controllers/Suratkec.php 1141
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/views/lap/suratkpdf.php 92
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/views/lap/suratkpdf.php 92
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/views/lap/suratkpdf.php 92
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/views/lap/suratkpdf.php 107
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratkpdf.php 177
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratkpdf.php 178
ERROR - 2018-10-25 23:23:46 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratkpdf.php 200
ERROR - 2018-10-25 17:23:47 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Undefined property: stdClass::$wn /var/www/html/siakel/application/controllers/Suratkec.php 895
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Undefined property: stdClass::$kwn /var/www/html/siakel/application/controllers/Suratkec.php 901
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Suratkec.php 1134
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Undefined variable: ttlsign /var/www/html/siakel/application/controllers/Suratkec.php 1139
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Undefined variable: urlcamat /var/www/html/siakel/application/controllers/Suratkec.php 1141
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratkpdf.php 173
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratkpdf.php 174
ERROR - 2018-10-25 23:25:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratkpdf.php 196
ERROR - 2018-10-25 17:25:04 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1053
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1054
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1087
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 1090
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 1133
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1136
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 1139
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 1182
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 1185
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Surat.php 1243
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 1245
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Undefined variable: tsign /var/www/html/siakel/application/controllers/Surat.php 1249
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 6
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 36
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 37
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 38
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 39
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 50
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 54
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 72
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 77
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 82
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 87
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 92
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 97
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 102
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 107
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 112
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 117
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 128
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 140
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 145
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 163
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 185
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 198
ERROR - 2018-10-25 23:25:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 198
ERROR - 2018-10-25 23:25:35 --> 404 Page Not Found: %20div%20style%3D/index
ERROR - 2018-10-25 17:25:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/siakel/system/core/Exceptions.php:272) /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7447
ERROR - 2018-10-25 17:25:35 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /var/www/html/siakel/system/core/Exceptions.php:272) /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 1736
ERROR - 2018-10-25 23:35:24 --> Severity: Notice --> Undefined variable: idunik /var/www/html/siakel/application/controllers/Surat.php 1413
ERROR - 2018-10-25 18:10:56 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:11:00 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:11:08 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:11:23 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:19:06 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:19:29 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:19:31 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:20:09 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:22:16 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:22:50 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:25:43 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:25:51 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:26:12 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:26:34 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:34:45 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:35:52 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:37:01 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:38:03 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:39:06 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:42:29 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:42:49 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:43:01 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:43:28 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:43:37 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:43:48 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:48:36 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:49:12 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:50:12 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:50:23 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:52:13 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 18:55:16 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-10-25 19:15:23 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
