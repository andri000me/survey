<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-06-02 00:33:26 --> Severity: Parsing Error --> syntax error, unexpected 'if' (T_IF) /var/www/html/siskia/application/controllers/Cakes.php 857
ERROR - 2018-06-02 00:33:52 --> Severity: Error --> Cannot use object of type stdClass as array /var/www/html/siskia/application/controllers/Cakes.php 862
ERROR - 2018-06-02 00:34:02 --> Severity: Error --> Cannot use object of type stdClass as array /var/www/html/siskia/application/controllers/Cakes.php 862
ERROR - 2018-06-02 01:05:58 --> Query error: Unknown column 'namakend' in 'field list' - Invalid query: INSERT INTO `csalin` (`idcak`, `idpenolong1`, `idpenolong2`, `dana`, `namakend`, `nokend`, `kb`, `namasmbg`, `nosmbg`, `tglsurat`, `idklg`, `namaklg`) VALUES ('58', '3', '4', 'JKN', 'aku', '081', 'KB', 'aku', '081', '2018-06-28', '2', 'aku')
ERROR - 2018-06-02 01:06:21 --> Query error: Unknown column 'namakend' in 'field list' - Invalid query: INSERT INTO `csalin` (`idcak`, `idpenolong1`, `idpenolong2`, `dana`, `namakend`, `nokend`, `kb`, `namasmbg`, `nosmbg`, `tglsurat`, `idklg`, `namaklg`) VALUES ('58', '3', '4', 'JKN', 'aku', '081', 'KB', 'aku', '081', '2018-06-28', '2', 'aku')
ERROR - 2018-06-02 01:06:54 --> Query error: Unknown column 'namakend' in 'field list' - Invalid query: INSERT INTO `csalin` (`idcak`, `idpenolong1`, `idpenolong2`, `dana`, `namakend`, `nokend`, `kb`, `namasmbg`, `nosmbg`, `tglsurat`, `idklg`, `namaklg`) VALUES ('58', '4', '3', 'JKN', 'aku', '081', 'KB', 'aku', '081', '2018-06-22', '2', 'aku')
ERROR - 2018-06-02 01:07:08 --> Query error: Unknown column 'namasmbg' in 'field list' - Invalid query: INSERT INTO `csalin` (`idcak`, `idpenolong1`, `idpenolong2`, `dana`, `nmkend`, `nokend`, `kb`, `namasmbg`, `nosmbg`, `tglsurat`, `idklg`, `namaklg`) VALUES ('58', '4', '3', 'JKN', 'aku', '081', 'KB', 'aku', '081', '2018-06-22', '2', 'aku')
ERROR - 2018-06-02 01:39:36 --> 404 Page Not Found: Cakes/ajax_editsalin
ERROR - 2018-06-02 01:50:02 --> Severity: Notice --> Undefined variable: ceklahir /var/www/html/siskia/application/controllers/Cakes.php 979
ERROR - 2018-06-02 01:50:14 --> Severity: Notice --> Undefined variable: ceklahir /var/www/html/siskia/application/controllers/Cakes.php 979
ERROR - 2018-06-02 02:20:47 --> Severity: Notice --> Undefined variable: hpht /var/www/html/siskia/application/controllers/Cakes.php 1056
ERROR - 2018-06-02 02:20:49 --> Severity: Notice --> Undefined variable: hpht /var/www/html/siskia/application/controllers/Cakes.php 1056
ERROR - 2018-06-02 02:38:31 --> Query error: Unknown column 'idsalin' in 'where clause' - Invalid query: UPDATE `salin` SET `idcak` = '58', `penolong` = '1', `tglsalin` = '2018-06-10', `pukul` = '03:45', `cara` = '1', `tindak` = '', `keadaan` = '1', `ket` = '', `anak` = '0', `berat` = '0', `pjg` = '0', `lingkar` = '0', `jkel` = '1', `kondisi` = '1,2', `asuhan` = '1,3', `umurhamil` = 17.7, `ketamb` = ''
WHERE `idsalin` = '58'
ERROR - 2018-06-02 13:34:13 --> Severity: Notice --> Undefined property: Rujuk::$fas /var/www/html/siskia/application/controllers/Rujuk.php 27
ERROR - 2018-06-02 13:34:13 --> Severity: Error --> Call to a member function get_fas() on null /var/www/html/siskia/application/controllers/Rujuk.php 27
ERROR - 2018-06-02 13:34:28 --> Severity: Notice --> Undefined variable: kel /var/www/html/siskia/application/views/rujuk.php 143
ERROR - 2018-06-02 13:34:28 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/rujuk.php 143
ERROR - 2018-06-02 13:59:42 --> Query error: Column 'idcak' cannot be null - Invalid query: INSERT INTO `rujuk` (`idcak`, `tgl`, `pukul`, `ke`, `sebab`, `diag`, `tindak`, `perujuk`) VALUES (NULL, '2018-07-11', '12:15', '4', 'test', 'test', 'test', 'Linda Sulfianti')
ERROR - 2018-06-02 14:01:46 --> Query error: Column 'idcak' cannot be null - Invalid query: INSERT INTO `rujuk` (`idcak`, `tgl`, `pukul`, `ke`, `sebab`, `diag`, `tindak`, `perujuk`) VALUES (NULL, '2018-06-05', '13:30', '4', 'test', 'test', 'test', 'Linda Sulfianti')
ERROR - 2018-06-02 14:03:11 --> Severity: Notice --> Undefined property: stdClass::$jam /var/www/html/siskia/application/controllers/Rujuk.php 49
ERROR - 2018-06-02 14:03:11 --> Severity: Notice --> Undefined property: stdClass::$faskes /var/www/html/siskia/application/controllers/Rujuk.php 50
ERROR - 2018-06-02 14:04:29 --> Severity: Notice --> Undefined property: Rujuk::$fas /var/www/html/siskia/application/controllers/Rujuk.php 153
ERROR - 2018-06-02 14:04:29 --> Severity: Error --> Call to a member function get_by_id() on null /var/www/html/siskia/application/controllers/Rujuk.php 153
ERROR - 2018-06-02 14:33:28 --> Query error: Unknown column 'rujuk.id' in 'order clause' - Invalid query: SELECT `urujuk`.*, `tenagasehat`.`nama`
FROM `urujuk`
JOIN `tenagasehat` ON `urujuk`.`perujuk` = `tenagasehat`.`id`
WHERE `urujuk`.`idcak` = '58'
ORDER BY `rujuk`.`id` DESC
 LIMIT 10
ERROR - 2018-06-02 14:59:08 --> 404 Page Not Found: Nifas/58
ERROR - 2018-06-02 14:59:33 --> Severity: Notice --> Undefined variable: faskes /var/www/html/siskia/application/views/rujuk.php 191
ERROR - 2018-06-02 14:59:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/rujuk.php 191
ERROR - 2018-06-02 14:59:33 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/rujuk.php 224
ERROR - 2018-06-02 14:59:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/rujuk.php 224
ERROR - 2018-06-02 16:12:47 --> Severity: Notice --> Undefined variable: faskes /var/www/html/siskia/application/views/rujuk.php 191
ERROR - 2018-06-02 16:12:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/rujuk.php 191
ERROR - 2018-06-02 16:12:47 --> Severity: Notice --> Undefined variable: tkes /var/www/html/siskia/application/views/rujuk.php 224
ERROR - 2018-06-02 16:12:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/rujuk.php 224
ERROR - 2018-06-02 16:13:09 --> Severity: Notice --> Undefined variable: nas /var/www/html/siskia/application/views/nifas.php 269
ERROR - 2018-06-02 16:13:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 269
ERROR - 2018-06-02 16:13:09 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/nifas.php 279
ERROR - 2018-06-02 16:13:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 279
ERROR - 2018-06-02 16:13:32 --> Severity: Notice --> Undefined variable: nas /var/www/html/siskia/application/views/nifas.php 267
ERROR - 2018-06-02 16:13:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 267
ERROR - 2018-06-02 16:13:32 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 16:13:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 16:14:02 --> Severity: Notice --> Undefined variable: nas /var/www/html/siskia/application/views/nifas.php 267
ERROR - 2018-06-02 16:14:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 267
ERROR - 2018-06-02 16:14:02 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 16:14:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 16:15:17 --> Severity: Notice --> Undefined variable: nas /var/www/html/siskia/application/views/nifas.php 267
ERROR - 2018-06-02 16:15:17 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 267
ERROR - 2018-06-02 16:15:17 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 16:15:17 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 19:41:07 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/siskia/application/views/nifas.php 268
ERROR - 2018-06-02 19:41:07 --> Severity: Warning --> Illegal string offset 'nas' /var/www/html/siskia/application/views/nifas.php 268
ERROR - 2018-06-02 19:41:07 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/siskia/application/views/nifas.php 268
ERROR - 2018-06-02 19:41:07 --> Severity: Warning --> Illegal string offset 'nas' /var/www/html/siskia/application/views/nifas.php 268
ERROR - 2018-06-02 19:41:07 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 19:41:07 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 19:42:38 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 19:42:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/nifas.php 277
ERROR - 2018-06-02 19:56:07 --> Severity: Notice --> Undefined variable: sourceb /var/www/html/siskia/application/controllers/Nifas.php 152
ERROR - 2018-06-02 19:56:07 --> Severity: Notice --> Undefined variable: sourcec /var/www/html/siskia/application/controllers/Nifas.php 162
ERROR - 2018-06-02 19:56:49 --> Severity: Notice --> Undefined variable: dnif /var/www/html/siskia/application/controllers/Nifas.php 251
ERROR - 2018-06-02 19:56:49 --> Severity: Notice --> Undefined variable: cata /var/www/html/siskia/application/controllers/Nifas.php 252
ERROR - 2018-06-02 19:57:24 --> Severity: Notice --> Undefined variable: sourceb /var/www/html/siskia/application/controllers/Nifas.php 152
ERROR - 2018-06-02 19:57:24 --> Severity: Notice --> Undefined variable: sourcec /var/www/html/siskia/application/controllers/Nifas.php 162
ERROR - 2018-06-02 20:55:04 --> Query error: Unknown column 'bayi' in 'field list' - Invalid query: INSERT INTO `anifas` (`idcak`, `kibu`, `komplikasi`, `bayi`) VALUES ('58', '1', '1,2', '1')
ERROR - 2018-06-02 21:45:24 --> Severity: Parsing Error --> syntax error, unexpected 'else' (T_ELSE) /var/www/html/siskia/application/controllers/Cakes.php 1381
ERROR - 2018-06-02 21:46:02 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:46:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:47:33 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:47:33 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:49:14 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:49:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:49:36 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:49:36 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:49:42 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1382
ERROR - 2018-06-02 21:51:37 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:51:37 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:51:41 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1382
ERROR - 2018-06-02 21:57:18 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1384
ERROR - 2018-06-02 21:58:54 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:58:54 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 21:58:59 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1384
ERROR - 2018-06-02 22:00:00 --> 404 Page Not Found: Admin/login
ERROR - 2018-06-02 22:00:11 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:00:11 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:00:16 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1384
ERROR - 2018-06-02 22:00:39 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1384
ERROR - 2018-06-02 22:01:32 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:01:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:03:24 --> Severity: Error --> Call to undefined method M_cak::get_by_klahir() /var/www/html/siskia/application/controllers/Cakes.php 1373
ERROR - 2018-06-02 22:04:59 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:04:59 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:05:06 --> Severity: Warning --> Missing argument 1 for M_cak::get_ibulahir(), called in /var/www/html/siskia/application/controllers/Cakes.php on line 1374 and defined /var/www/html/siskia/application/models/M_cak.php 411
ERROR - 2018-06-02 22:05:06 --> Severity: Notice --> Undefined variable: idcak /var/www/html/siskia/application/models/M_cak.php 418
ERROR - 2018-06-02 22:05:06 --> Query error: Unknown column 'm_kerja.content' in 'field list' - Invalid query: SELECT `cak`.*, `ibu`.`nama`, `m_kerja`.`content` as `kerja`, `ibu`.`nikibu`, `ibu`.`alamat`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
WHERE `cak`.`id` IS NULL
ORDER BY `cak`.`id`
ERROR - 2018-06-02 22:05:33 --> Query error: Unknown column 'm_kerja.content' in 'field list' - Invalid query: SELECT `cak`.*, `ibu`.`nama`, `m_kerja`.`content` as `kerja`, `ibu`.`nikibu`, `ibu`.`alamat`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
WHERE `cak`.`id` = '58'
ORDER BY `cak`.`id`
ERROR - 2018-06-02 22:06:07 --> Query error: Unknown column 'm_kerja.content' in 'field list' - Invalid query: SELECT `cak`.*, `ibu`.`nama`, `m_kerja`.`content` as `kerja`, `ibu`.`nikibu`, `ibu`.`alamat`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
WHERE `cak`.`id` = '58'
ORDER BY `cak`.`id`
ERROR - 2018-06-02 22:07:14 --> Query error: Unknown column 'kel.content' in 'field list' - Invalid query: SELECT `cak`.*, `ibu`.`nama`, `m_kerja`.`content` as `kerja`, `ibu`.`nikibu`, `ibu`.`alamat`, `kel`.`content` as `nmkel`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `m_kerja` ON `ibu`.`idkerja` = `m_kerja`.`id`
WHERE `cak`.`id` = '58'
ORDER BY `cak`.`id`
ERROR - 2018-06-02 22:07:43 --> Severity: Error --> Call to undefined method M_cak::get_suami() /var/www/html/siskia/application/controllers/Cakes.php 1375
ERROR - 2018-06-02 22:07:58 --> Query error: Unknown column 'cal.id' in 'order clause' - Invalid query: SELECT `cak`.*, `ibu`.`suami`, `ibu`.`niksuami`, `m_kerja`.`content` as `kerjas`
FROM `cak`
JOIN `kia` ON `cak`.`idkia` = `kia`.`id`
JOIN `ibu` ON `kia`.`idibu` = `ibu`.`id`
JOIN `m_kerja` ON `ibu`.`idkerjas` = `m_kerja`.`id`
JOIN `kel` ON `ibu`.`idkel` = `kel`.`id`
WHERE `cak`.`id` = '58'
ORDER BY `cal`.`id`
ERROR - 2018-06-02 22:08:57 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:08:57 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:09:32 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:09:32 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:11:22 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:11:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:12:02 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:12:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:18:06 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:18:06 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:18:12 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1384
ERROR - 2018-06-02 22:19:42 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:19:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:20:16 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:20:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:21:08 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:21:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:22:43 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:22:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:23:00 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:23:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:23:39 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 942
ERROR - 2018-06-02 22:26:43 --> Severity: Parsing Error --> syntax error, unexpected '$dlahir' (T_VARIABLE) /var/www/html/siskia/application/controllers/Cakes.php 1378
ERROR - 2018-06-02 22:27:16 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:27:16 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:27:21 --> Severity: Error --> Call to undefined method M_cak::get_salin() /var/www/html/siskia/application/controllers/Cakes.php 1377
ERROR - 2018-06-02 22:28:42 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:28:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:28:46 --> Severity: Error --> Call to undefined method M_cak::get_salin() /var/www/html/siskia/application/controllers/Cakes.php 1377
ERROR - 2018-06-02 22:29:02 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:29:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:29:27 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:29:27 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:29:31 --> Severity: Warning --> Creating default object from empty value /var/www/html/siskia/application/controllers/Cakes.php 1379
ERROR - 2018-06-02 22:35:31 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:35:31 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:35:45 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:35:45 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:36:43 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:36:43 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:36:48 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:36:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:37:40 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:37:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:40:44 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:40:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:41:09 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:41:09 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:41:14 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:41:14 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:51:56 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:51:56 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:51:58 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:51:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 22:51:58 --> Severity: Error --> Class 'M_bayi' not found /var/www/html/siskia/system/core/Loader.php 305
ERROR - 2018-06-02 22:52:07 --> Severity: Notice --> Undefined property: Bayi::$nifas /var/www/html/siskia/application/controllers/Bayi.php 30
ERROR - 2018-06-02 22:52:07 --> Severity: Error --> Call to a member function get_imun() on null /var/www/html/siskia/application/controllers/Bayi.php 30
ERROR - 2018-06-02 22:52:41 --> Severity: Notice --> Undefined variable: nas /var/www/html/siskia/application/views/bayi.php 267
ERROR - 2018-06-02 22:52:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/bayi.php 267
ERROR - 2018-06-02 22:52:41 --> Severity: Notice --> Undefined variable: cat /var/www/html/siskia/application/views/bayi.php 277
ERROR - 2018-06-02 22:52:41 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/bayi.php 277
ERROR - 2018-06-02 23:26:42 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:26:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:26:44 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:26:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:27:50 --> Query error: Column 'kshk' cannot be null - Invalid query: INSERT INTO `bayi` (`idcak`, `tgl`, `berat`, `pjg`, `suhu`, `nafas`, `denyut`, `infeksi`, `ikterus`, `diare`, `asi`, `vit`, `imun`, `shk`, `hshk`, `kshk`, `tindak`, `pemeriksa`) VALUES ('58', '2018-05-27', '1', '9', '9', '9', '9', '9', '9', '9', '9', '9', '1', '2', '1', NULL, '1', '5')
ERROR - 2018-06-02 23:29:19 --> Query error: Column 'kshk' cannot be null - Invalid query: INSERT INTO `bayi` (`idcak`, `tgl`, `berat`, `pjg`, `suhu`, `nafas`, `denyut`, `infeksi`, `ikterus`, `diare`, `asi`, `vit`, `imun`, `shk`, `hshk`, `kshk`, `tindak`, `pemeriksa`) VALUES ('58', '2018-06-14', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '2', '1', '1', NULL, '1', '3')
ERROR - 2018-06-02 23:30:58 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `bayi`.*, `tenagasehat`.`nama`
FROM `bayi`
JOIN `tenagasehat` ON `bayi`.`pemeriksa` = `tenagasehat`.`id`
WHERE `idcak` = '58'
AND `id` = '8'
ERROR - 2018-06-02 23:35:03 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `bayi`.*, `tenagasehat`.`nama`
FROM `bayi`
JOIN `tenagasehat` ON `bayi`.`pemeriksa` = `tenagasehat`.`id`
WHERE `idcak` = '58'
AND `id` = '8'
ERROR - 2018-06-02 23:37:02 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:02 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:08 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:08 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:37 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:37 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:40 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:40 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:42 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:42 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:44 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:44 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:50 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:37:50 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:38:55 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:38:55 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:38:58 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:38:58 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:39:00 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:39:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:41:00 --> Severity: Notice --> Undefined variable: dsalin /var/www/html/siskia/application/views/cak.php 917
ERROR - 2018-06-02 23:41:00 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siskia/application/views/cak.php 917
