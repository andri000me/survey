<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-07-05 00:09:49 --> 404 Page Not Found: Rekap_adm/index
ERROR - 2019-07-05 00:15:47 --> Query error: Not unique table/alias: 'data_member' - Invalid query: SELECT `history_dana`.*, `history_trans`.`status`, `produk_bill`.`nama`, `data_member`.`nama_petugas`, `data_deposit`.`saldo`
FROM `history_dana`
JOIN `history_trans` ON `history_dana`.`id_unik` = `history_trans`.`id_trans`
JOIN `pricelist` ON `history_trans`.`id_price` = `pricelist`.`id`
JOIN `produk_bill` ON `pricelist`.`id_produk` = `produk_bill`.`id`
JOIN `data_member` ON `history_dana`.`id_user` = `data_member`.`id`
LEFT JOIN `data_deposit` ON `data_member`.`id` = `data_deposit`.`id_user`
JOIN `data_member` ON `history_trans`.`id_user` = `data_member`.`id`
WHERE `history_dana`.`ket` NOT LIKE '%deposit%' ESCAPE '!'
AND `history_dana`.`std` = 1
ORDER BY `history_dana`.`tgl` DESC
 LIMIT 10
ERROR - 2019-07-05 00:16:22 --> Query error: Not unique table/alias: 'data_member' - Invalid query: SELECT `history_dana`.*, `history_trans`.`status`, `produk_bill`.`nama`, `data_member`.`nama_petugas`, `data_deposit`.`saldo`
FROM `history_dana`
JOIN `history_trans` ON `history_dana`.`id_unik` = `history_trans`.`id_trans`
JOIN `pricelist` ON `history_trans`.`id_price` = `pricelist`.`id`
JOIN `produk_bill` ON `pricelist`.`id_produk` = `produk_bill`.`id`
JOIN `data_member` ON `history_dana`.`id_user` = `data_member`.`id`
LEFT JOIN `data_deposit` ON `data_member`.`id` = `data_deposit`.`id_user`
JOIN `data_member` ON `history_trans`.`id_user` = `data_member`.`id`
WHERE `history_dana`.`ket` NOT LIKE '%deposit%' ESCAPE '!'
AND `history_dana`.`std` = 1
ORDER BY `history_dana`.`tgl` DESC
 LIMIT 10
ERROR - 2019-07-05 00:17:27 --> Severity: Notice --> Undefined property: stdClass::$utg /var/www/html/view/application/controllers/Rekap_adm.php 54
ERROR - 2019-07-05 00:17:27 --> Severity: Notice --> Undefined property: stdClass::$utg /var/www/html/view/application/controllers/Rekap_adm.php 54
ERROR - 2019-07-05 00:17:27 --> Severity: Notice --> Undefined property: stdClass::$utg /var/www/html/view/application/controllers/Rekap_adm.php 54
ERROR - 2019-07-05 00:17:27 --> Severity: Notice --> Undefined property: stdClass::$utg /var/www/html/view/application/controllers/Rekap_adm.php 54
ERROR - 2019-07-05 00:17:57 --> Query error: Unknown column 'history_trans.utg' in 'field list' - Invalid query: SELECT `history_dana`.*, `history_trans`.`status`, `history_trans`.`utg`, `produk_bill`.`nama`, `data_member`.`nama_petugas`, `data_deposit`.`saldo`
FROM `history_dana`
JOIN `history_trans` ON `history_dana`.`id_unik` = `history_trans`.`id_trans`
JOIN `pricelist` ON `history_trans`.`id_price` = `pricelist`.`id`
JOIN `produk_bill` ON `pricelist`.`id_produk` = `produk_bill`.`id`
JOIN `data_member` ON `history_dana`.`id_user` = `data_member`.`id`
LEFT JOIN `data_deposit` ON `data_member`.`id` = `data_deposit`.`id_user`
WHERE `history_dana`.`ket` NOT LIKE '%deposit%' ESCAPE '!'
AND `history_dana`.`std` = 1
ORDER BY `history_dana`.`tgl` DESC
 LIMIT 10
ERROR - 2019-07-05 00:18:12 --> Query error: Unknown column 'history_trans.utg' in 'field list' - Invalid query: SELECT `history_dana`.*, `history_trans`.`status`, `history_trans`.`utg`, `produk_bill`.`nama`, `data_member`.`nama_petugas`, `data_deposit`.`saldo`
FROM `history_dana`
JOIN `history_trans` ON `history_dana`.`id_unik` = `history_trans`.`id_trans`
JOIN `pricelist` ON `history_trans`.`id_price` = `pricelist`.`id`
JOIN `produk_bill` ON `pricelist`.`id_produk` = `produk_bill`.`id`
JOIN `data_member` ON `history_dana`.`id_user` = `data_member`.`id`
LEFT JOIN `data_deposit` ON `data_member`.`id` = `data_deposit`.`id_user`
WHERE `history_dana`.`ket` NOT LIKE '%deposit%' ESCAPE '!'
AND `history_dana`.`std` = 1
ORDER BY `history_dana`.`tgl` DESC
 LIMIT 10
ERROR - 2019-07-05 10:27:56 --> Severity: Parsing Error --> syntax error, unexpected ''jns'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /var/www/html/view/application/controllers/Cek.php 134
ERROR - 2019-07-05 10:45:18 --> Severity: Notice --> Undefined property: stdClass::$jns /var/www/html/view/application/controllers/Pricelist.php 48
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$deskripsi /var/www/html/view/application/controllers/Daftar.php 40
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kode_opr /var/www/html/view/application/controllers/Daftar.php 42
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$adm_price /var/www/html/view/application/controllers/Daftar.php 43
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$status /var/www/html/view/application/controllers/Daftar.php 50
ERROR - 2019-07-05 11:10:24 --> Severity: Notice --> Undefined property: stdClass::$kondisi /var/www/html/view/application/controllers/Daftar.php 56
ERROR - 2019-07-05 12:01:47 --> 404 Page Not Found: Assets/images
ERROR - 2019-07-05 12:20:03 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 12:20:19 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 12:20:21 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 12:20:36 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 12:22:58 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 12:23:01 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 12:23:04 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:32 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:38:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:39:13 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:41:16 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:48:36 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:49:43 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:52:42 --> 404 Page Not Found: Img/portfolio
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:00 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:54:41 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:56:10 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:57:11 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:57:35 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:15 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:58:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:28 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 13:59:53 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:17 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:00:45 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:09 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:18 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:01:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:20 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:02:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:05:48 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/about
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:22 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:06:49 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:13:29 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:01 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:37 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:39 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:40 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:15:58 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:16:33 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:06 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:15 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:25 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:17:57 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:24 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:31 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:18:54 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:20:26 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:21:34 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:21:34 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:21:34 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 14:21:34 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:21:34 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:21:35 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 14:21:35 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 15:10:30 --> 404 Page Not Found: Img/logos
ERROR - 2019-07-05 15:11:24 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:11:24 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:11:25 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:11:47 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:11:47 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:11:47 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:12:19 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:12:19 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:12:19 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:13:34 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:13:34 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:13:34 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:14:23 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:14:23 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:14:23 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:21:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:21:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 15:21:58 --> 404 Page Not Found: Img/team
ERROR - 2019-07-05 19:23:26 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:23:33 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:24:09 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:24:13 --> 404 Page Not Found: Mutasi/index
ERROR - 2019-07-05 19:24:56 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:25:52 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:27:21 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:28:58 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:34:06 --> Severity: Parsing Error --> syntax error, unexpected '*' /var/www/html/view/application/controllers/Mutasi.php 72
ERROR - 2019-07-05 19:34:14 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 19:34:16 --> Severity: Notice --> Undefined variable: tga /var/www/html/view/application/controllers/Mutasi.php 53
ERROR - 2019-07-05 19:34:16 --> Severity: Notice --> Undefined variable: tga /var/www/html/view/application/controllers/Mutasi.php 53
ERROR - 2019-07-05 19:34:16 --> Severity: Notice --> Undefined variable: tga /var/www/html/view/application/controllers/Mutasi.php 53
ERROR - 2019-07-05 19:34:30 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:06:10 --> Severity: Parsing Error --> syntax error, unexpected '=' /var/www/html/view/application/controllers/Depo.php 60
ERROR - 2019-07-05 20:41:53 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:41:55 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:42:30 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:42:33 --> 404 Page Not Found: Depo/ajax_check_bca
ERROR - 2019-07-05 20:44:24 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:45:41 --> Severity: Notice --> Undefined property: Duit::$cek_idbank /var/www/html/view/application/controllers/Depo.php 436
ERROR - 2019-07-05 20:46:44 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:49:14 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) /var/www/html/view/application/controllers/Depo.php 451
ERROR - 2019-07-05 20:49:44 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:50:30 --> Severity: Notice --> Undefined property: Duit::$akhir /var/www/html/view/application/controllers/Depo.php 437
ERROR - 2019-07-05 20:50:45 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 20:57:14 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 446
ERROR - 2019-07-05 20:57:14 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 446
ERROR - 2019-07-05 20:57:14 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 446
ERROR - 2019-07-05 20:57:51 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 446
ERROR - 2019-07-05 20:57:51 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 446
ERROR - 2019-07-05 20:57:51 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 446
ERROR - 2019-07-05 21:00:48 --> Severity: Notice --> Undefined index: mutation /var/www/html/view/application/controllers/Depo.php 439
ERROR - 2019-07-05 21:01:17 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo.php 448
ERROR - 2019-07-05 21:01:17 --> Severity: Notice --> Undefined index: mutation_id /var/www/html/view/application/controllers/Depo.php 448
ERROR - 2019-07-05 21:01:17 --> Severity: Notice --> Undefined index: date /var/www/html/view/application/controllers/Depo.php 448
ERROR - 2019-07-05 21:07:38 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/view/application/controllers/Depo.php 449
ERROR - 2019-07-05 21:07:38 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo.php 456
ERROR - 2019-07-05 21:07:38 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo.php 456
ERROR - 2019-07-05 21:09:54 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo.php 451
ERROR - 2019-07-05 21:09:54 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo.php 451
ERROR - 2019-07-05 21:10:07 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo.php 451
ERROR - 2019-07-05 21:10:07 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo.php 451
ERROR - 2019-07-05 21:11:45 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 21:14:51 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 21:14:56 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 21:15:04 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 21:15:21 --> 404 Page Not Found: Ace-master/assets
ERROR - 2019-07-05 21:16:44 --> Severity: Warning --> json_decode() expects parameter 1 to be string, array given /var/www/html/view/application/controllers/Depo_adm.php 189
ERROR - 2019-07-05 21:19:47 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/view/application/controllers/Depo_adm.php 194
ERROR - 2019-07-05 21:19:47 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:19:47 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:20:39 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/view/application/controllers/Depo_adm.php 194
ERROR - 2019-07-05 21:20:39 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:20:39 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:21:05 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/view/application/controllers/Depo_adm.php 194
ERROR - 2019-07-05 21:21:05 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:21:05 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:21:47 --> Severity: Notice --> Undefined variable: amo /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:21:47 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:21:47 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:22:10 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/view/application/controllers/Depo_adm.php 194
ERROR - 2019-07-05 21:22:10 --> Severity: Notice --> Undefined variable: us /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:22:10 --> Severity: Notice --> Undefined variable: desk /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:22:10 --> Severity: Notice --> Undefined variable: tgl /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:23:06 --> Severity: Notice --> Undefined index: mutation_id /var/www/html/view/application/controllers/Depo_adm.php 195
ERROR - 2019-07-05 21:23:06 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo_adm.php 196
ERROR - 2019-07-05 21:23:06 --> Severity: Notice --> Undefined index: date /var/www/html/view/application/controllers/Depo_adm.php 197
ERROR - 2019-07-05 21:23:06 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo_adm.php 201
ERROR - 2019-07-05 21:23:15 --> Severity: Notice --> Undefined index: mutation_id /var/www/html/view/application/controllers/Depo_adm.php 195
ERROR - 2019-07-05 21:23:15 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo_adm.php 196
ERROR - 2019-07-05 21:23:15 --> Severity: Notice --> Undefined index: date /var/www/html/view/application/controllers/Depo_adm.php 197
ERROR - 2019-07-05 21:23:15 --> Severity: Notice --> Undefined index: amount /var/www/html/view/application/controllers/Depo_adm.php 201
