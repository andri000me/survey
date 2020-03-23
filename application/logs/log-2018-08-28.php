<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: data /var/www/html/siakel/application/controllers/Dashboard1.php 68
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: kartu /var/www/html/siakel/application/views/template/konten.php 21
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: pend /var/www/html/siakel/application/views/template/konten.php 35
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: miskin /var/www/html/siakel/application/views/template/konten.php 52
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: pkh /var/www/html/siakel/application/views/template/konten.php 66
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: ras /var/www/html/siakel/application/views/template/konten.php 81
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: jamkes /var/www/html/siakel/application/views/template/konten.php 95
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: kks /var/www/html/siakel/application/views/template/konten.php 109
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: ps /var/www/html/siakel/application/views/template/konten.php 123
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: sb /var/www/html/siakel/application/views/template/konten.php 151
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: sls /var/www/html/siakel/application/views/template/konten.php 165
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: lhr /var/www/html/siakel/application/views/template/konten.php 179
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: slhr /var/www/html/siakel/application/views/template/konten.php 193
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 206
ERROR - 2018-08-28 12:43:22 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 220
ERROR - 2018-08-28 13:07:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:07:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:07:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:07:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:07:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:18:47 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:18:47 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:18:47 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:18:47 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:18:47 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Useraja.php 53
ERROR - 2018-08-28 13:28:16 --> Query error: Unknown column 'id_skpd' in 'field list' - Invalid query: UPDATE `data_user` SET `nama_petugas` = 'Firman', `status` = '1', `id_skpd` = NULL, `digital` = '0'
WHERE `id` = '5'
ERROR - 2018-08-28 13:47:23 --> Query error: Unknown column 'data_user.id_skpd' in 'on clause' - Invalid query: SELECT `data_user`.*, `data_skpd`.`nama_skpd`, `data_skpd`.`idkel`, `kec`.`id` as `idkec`
FROM `data_user`
JOIN `data_skpd` ON `data_user`.`id_skpd`=`data_skpd`.`id`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
WHERE `data_user`.`username` = 'yudigopels'
ERROR - 2018-08-28 13:50:09 --> Query error: Unknown column 'data_skpd.idkel' in 'on clause' - Invalid query: SELECT `data_user`.*, `kel`.`content`, `kec`.`id` as `idkec`
FROM `data_user`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
WHERE `data_user`.`username` = 'yudigopels'
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: data /var/www/html/siakel/application/controllers/Dashboard1.php 68
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: kartu /var/www/html/siakel/application/views/template/konten.php 21
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: pend /var/www/html/siakel/application/views/template/konten.php 35
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: miskin /var/www/html/siakel/application/views/template/konten.php 52
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: pkh /var/www/html/siakel/application/views/template/konten.php 66
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: ras /var/www/html/siakel/application/views/template/konten.php 81
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: jamkes /var/www/html/siakel/application/views/template/konten.php 95
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: kks /var/www/html/siakel/application/views/template/konten.php 109
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: ps /var/www/html/siakel/application/views/template/konten.php 123
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: sb /var/www/html/siakel/application/views/template/konten.php 151
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: sls /var/www/html/siakel/application/views/template/konten.php 165
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: lhr /var/www/html/siakel/application/views/template/konten.php 179
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: slhr /var/www/html/siakel/application/views/template/konten.php 193
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 206
ERROR - 2018-08-28 13:50:53 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 220
ERROR - 2018-08-28 14:04:28 --> Query error: Unknown column 'data_skpd.idkel' in 'on clause' - Invalid query: SELECT `data_skpd`.*, `kel`.`content`, `kec`.`content` as `kec`, `kota`.`content` as `kota`
FROM `data_skpd`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
WHERE `data_skpd`.`id` =0
ERROR - 2018-08-28 14:04:32 --> Query error: Unknown column 'data_skpd.idkel' in 'on clause' - Invalid query: SELECT `data_skpd`.*, `kel`.`content`, `kec`.`content` as `kec`, `kota`.`content` as `kota`
FROM `data_skpd`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
WHERE `data_skpd`.`id` =0
ERROR - 2018-08-28 14:04:41 --> Query error: Unknown column 'data_skpd.idkel' in 'on clause' - Invalid query: SELECT `data_skpd`.*, `kel`.`content`, `kec`.`content` as `kec`, `kota`.`content` as `kota`
FROM `data_skpd`
JOIN `kel` ON `data_skpd`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
WHERE `data_skpd`.`id` =0
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 521
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 718
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 719
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 720
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 721
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 832
ERROR - 2018-08-28 14:08:51 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 833
ERROR - 2018-08-28 14:11:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 521
ERROR - 2018-08-28 14:11:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 720
ERROR - 2018-08-28 14:11:41 --> Severity: Notice --> Undefined property: stdClass::$almt /var/www/html/siakel/application/controllers/Surat.php 721
ERROR - 2018-08-28 14:11:41 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:14:54 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 521
ERROR - 2018-08-28 14:14:54 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 720
ERROR - 2018-08-28 14:14:54 --> Severity: Notice --> Undefined property: stdClass::$almt /var/www/html/siakel/application/controllers/Surat.php 721
ERROR - 2018-08-28 14:14:54 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:17:28 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 720
ERROR - 2018-08-28 14:17:28 --> Severity: Notice --> Undefined property: stdClass::$almt /var/www/html/siakel/application/controllers/Surat.php 721
ERROR - 2018-08-28 14:17:28 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:18:01 --> Severity: Notice --> Undefined property: stdClass::$almt /var/www/html/siakel/application/controllers/Surat.php 721
ERROR - 2018-08-28 14:18:01 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 741
ERROR - 2018-08-28 14:20:06 --> Severity: Notice --> Undefined property: stdClass::$id_skpd /var/www/html/siakel/application/controllers/Login.php 75
ERROR - 2018-08-28 14:21:30 --> Severity: Notice --> Undefined property: stdClass::$almt /var/www/html/siakel/application/controllers/Surat.php 722
ERROR - 2018-08-28 14:21:30 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 742
ERROR - 2018-08-28 14:22:56 --> Severity: Notice --> Undefined property: stdClass::$nama_skpd /var/www/html/siakel/application/controllers/Surat.php 742
ERROR - 2018-08-28 14:24:44 --> 404 Page Not Found: Warga/index
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 533
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 538
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 544
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 550
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 566
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 569
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 612
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 615
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 618
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 661
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 664
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 717
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 745
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 746
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 784
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 785
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 786
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 789
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 790
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 791
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 792
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 794
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 802
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 827
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 837
ERROR - 2018-08-28 20:31:21 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 853
ERROR - 2018-08-28 20:31:21 --> 404 Page Not Found: Kodeqr/.png
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 533
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 538
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 544
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 550
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 566
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 569
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 612
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 615
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 618
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 661
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 664
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 717
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 745
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 746
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 784
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 785
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 786
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 788
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 789
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Surat.php 790
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 791
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 792
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 794
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 802
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 827
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 837
ERROR - 2018-08-28 20:34:37 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 853
ERROR - 2018-08-28 20:34:37 --> 404 Page Not Found: Kodeqr/.png
ERROR - 2018-08-28 21:08:45 --> Severity: Error --> Call to undefined method M_surat::save_berkas() /var/www/html/siakel/application/controllers/Surat.php 1244
ERROR - 2018-08-28 21:24:48 --> Severity: Error --> Call to undefined method CI_Session::user_data() /var/www/html/siakel/application/controllers/Surat.php 150
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: data /var/www/html/siakel/application/controllers/Dashboard1.php 68
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: kartu /var/www/html/siakel/application/views/template/konten.php 21
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: pend /var/www/html/siakel/application/views/template/konten.php 35
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: miskin /var/www/html/siakel/application/views/template/konten.php 52
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: pkh /var/www/html/siakel/application/views/template/konten.php 66
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: ras /var/www/html/siakel/application/views/template/konten.php 81
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: jamkes /var/www/html/siakel/application/views/template/konten.php 95
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: kks /var/www/html/siakel/application/views/template/konten.php 109
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: ps /var/www/html/siakel/application/views/template/konten.php 123
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: sb /var/www/html/siakel/application/views/template/konten.php 151
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: sls /var/www/html/siakel/application/views/template/konten.php 165
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: lhr /var/www/html/siakel/application/views/template/konten.php 179
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: slhr /var/www/html/siakel/application/views/template/konten.php 193
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: mati /var/www/html/siakel/application/views/template/konten.php 206
ERROR - 2018-08-28 21:30:42 --> Severity: Notice --> Undefined variable: smati /var/www/html/siakel/application/views/template/konten.php 220
ERROR - 2018-08-28 21:46:48 --> Severity: Parsing Error --> syntax error, unexpected '$data' (T_VARIABLE) /var/www/html/siakel/application/controllers/Surat.php 25
ERROR - 2018-08-28 21:47:04 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE) /var/www/html/siakel/application/controllers/Berkas.php 23
ERROR - 2018-08-28 21:47:19 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 161
ERROR - 2018-08-28 21:47:19 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 161
ERROR - 2018-08-28 21:47:19 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 202
ERROR - 2018-08-28 21:47:19 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 202
ERROR - 2018-08-28 21:47:20 --> Severity: Notice --> Undefined property: Berkas::$surat /var/www/html/siakel/application/controllers/Berkas.php 34
ERROR - 2018-08-28 21:47:20 --> Severity: Error --> Call to a member function get_datatables() on null /var/www/html/siakel/application/controllers/Berkas.php 34
ERROR - 2018-08-28 21:47:25 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 161
ERROR - 2018-08-28 21:47:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 161
ERROR - 2018-08-28 21:47:25 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 202
ERROR - 2018-08-28 21:47:25 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 202
ERROR - 2018-08-28 21:47:27 --> Severity: Notice --> Undefined property: Berkas::$surat /var/www/html/siakel/application/controllers/Berkas.php 34
ERROR - 2018-08-28 21:47:27 --> Severity: Error --> Call to a member function get_datatables() on null /var/www/html/siakel/application/controllers/Berkas.php 34
ERROR - 2018-08-28 21:50:18 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:50:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:50:18 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:50:18 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:50:38 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:50:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:50:38 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:50:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:50:55 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:50:55 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:50:55 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:50:55 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:51:02 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:51:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:51:02 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:51:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:51:06 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:51:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 21:51:06 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:51:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 21:52:42 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 981 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:52:42 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:52:42 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 987
ERROR - 2018-08-28 21:52:42 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1169 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:52:42 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:52:43 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:52:47 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:53:14 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 981 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 987
ERROR - 2018-08-28 21:53:14 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1169 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:53:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:53:16 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:53:19 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 981 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 987
ERROR - 2018-08-28 21:53:19 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1169 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:53:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:53:23 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:53:30 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 981 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 987
ERROR - 2018-08-28 21:53:30 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1169 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:53:30 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:53:32 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:54:18 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1169 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:54:18 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:54:21 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:55:19 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1170 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:55:19 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:55:22 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:56:32 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1170 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:56:32 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:56:35 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:59:03 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1170 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Undefined variable: kop2 /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 21:59:03 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 15:59:06 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 21:59:59 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1170 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Undefined variable: kop2 /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 89
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 89
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 89
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 21:59:59 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 158
ERROR - 2018-08-28 16:00:01 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 22:01:00 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1170 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Undefined variable: kop2 /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 89
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 89
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 89
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 22:01:00 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 158
ERROR - 2018-08-28 16:01:03 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 22:02:34 --> Severity: Warning --> Missing argument 1 for M_surat::get_head(), called in /var/www/html/siakel/application/controllers/Surat.php on line 1170 and defined /var/www/html/siakel/application/models/M_surat.php 177
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Undefined variable: id /var/www/html/siakel/application/models/M_surat.php 184
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 64
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 65
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 66
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Undefined variable: kop2 /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 67
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 88
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 156
ERROR - 2018-08-28 22:02:34 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratpdf.php 157
ERROR - 2018-08-28 16:02:37 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 16:03:56 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 16:04:25 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 16:07:50 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 16:11:25 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 22:20:53 --> Severity: Parsing Error --> syntax error, unexpected 'elseif' (T_ELSEIF), expecting function (T_FUNCTION) /var/www/html/siakel/application/controllers/Dashboard1.php 67
ERROR - 2018-08-28 22:22:12 --> 404 Page Not Found: Warga/index
ERROR - 2018-08-28 22:32:28 --> Severity: Parsing Error --> syntax error, unexpected '$idkec' (T_VARIABLE) /var/www/html/siakel/application/controllers/Suratkec.php 24
ERROR - 2018-08-28 22:43:31 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 22:43:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 22:43:31 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 22:43:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 22:43:35 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 22:43:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 165
ERROR - 2018-08-28 22:43:35 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 22:43:35 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 206
ERROR - 2018-08-28 22:45:43 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 172
ERROR - 2018-08-28 22:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 172
ERROR - 2018-08-28 22:45:43 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 213
ERROR - 2018-08-28 22:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 213
ERROR - 2018-08-28 22:45:47 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 172
ERROR - 2018-08-28 22:45:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 172
ERROR - 2018-08-28 22:45:47 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 213
ERROR - 2018-08-28 22:45:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 213
ERROR - 2018-08-28 16:46:17 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 522
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 535
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 541
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Lahir.php 551
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Lahir.php 594
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 597
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 650
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 679
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 710
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 732
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 755
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 756
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 756
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 756
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 756
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 790
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 800
ERROR - 2018-08-28 22:52:36 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Lahir.php 816
ERROR - 2018-08-28 22:52:36 --> 404 Page Not Found: Kodeqr/.png
ERROR - 2018-08-28 22:55:23 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 172
ERROR - 2018-08-28 22:55:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 172
ERROR - 2018-08-28 22:55:23 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 213
ERROR - 2018-08-28 22:55:23 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 213
ERROR - 2018-08-28 17:20:19 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-28 17:29:05 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
