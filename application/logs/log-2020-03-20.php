<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-20 09:42:10 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `master_edc`.*, `data_merchant`.`nama_merc`, `data_kota`.`nama_kota`
FROM `master_edc`
JOIN `data_merchant` ON `master_edc`.`merchant_id` = `data_merchant`.`id`
JOIN `data_kota` ON `data_merchant`.`id_kota` = `data_kota`.`id`
WHERE `id` = '2'
ERROR - 2020-03-20 09:42:27 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 09:42:31 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 09:42:40 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `master_edc`.*, `data_merchant`.`nama_merc`, `data_kota`.`nama_kota`
FROM `master_edc`
JOIN `data_merchant` ON `master_edc`.`merchant_id` = `data_merchant`.`id`
JOIN `data_kota` ON `data_merchant`.`id_kota` = `data_kota`.`id`
WHERE `id` = '2'
ERROR - 2020-03-20 09:49:05 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 09:49:09 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 09:49:14 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `master_edc`.*, `data_merchant`.`nama_merc`
FROM `master_edc`
JOIN `data_merchant` ON `master_edc`.`merchant_id` = `data_merchant`.`id`
WHERE `id` = '1'
ERROR - 2020-03-20 09:51:37 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 09:51:42 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `master_edc`.*, `data_merchant`.`nama_merc`
FROM `master_edc`
JOIN `data_merchant` ON `master_edc`.`merchant_id` = `data_merchant`.`id`
WHERE `id` = '2'
ERROR - 2020-03-20 09:55:51 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 09:55:55 --> Query error: Column 'id' in where clause is ambiguous - Invalid query: SELECT `master_edc`.*, `data_merchant`.`nama_merc`
FROM `master_edc`
JOIN `data_merchant` ON `master_edc`.`merchant_id` = `data_merchant`.`id`
WHERE `id` = '1'
ERROR - 2020-03-20 09:56:47 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:21:30 --> Query error: Unknown column 'merchant_id' in 'field list' - Invalid query: INSERT INTO `master_edc` (`merk`, `tipe`, `part_number`, `sn_awal`, `sn_update`, `crm`, `tid`, `merchant_id`, `ket2`, `warna`, `no_po`, `no_pks`, `status`) VALUES ('Verifone', 'Verifone VX Top', 'M252-779-13-EU1-2', '281-383-035', '281-383-035', 'Ada di CRM', '69272713', NULL, 'NO SWAP', 'Special Colour', '1612/PO/TFS.PFA.SS1/2012', '0025/SPP/TIB.SPC.SS1/2019 ', 'Sewa')
ERROR - 2020-03-20 10:21:36 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:21:39 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:21:56 --> Query error: Unknown column 'merchant_id' in 'field list' - Invalid query: UPDATE `master_edc` SET `merk` = 'Verifone', `tipe` = 'Verifone VX Top', `part_number` = 'M252-779-13-EU1-2', `sn_awal` = '281-383-035', `sn_update` = '281-383-035', `crm` = 'Ada di CRM', `tid` = '69272713', `merchant_id` = NULL, `ket2` = 'NO SWAP', `warna` = 'Special Colour', `no_po` = '1612/PO/TFS.PFA.SS1/2012', `no_pks` = '0025/SPP/TIB.SPC.SS1/2019 ', `status` = 'Sewa'
WHERE `id` = '2'
ERROR - 2020-03-20 10:23:13 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:26:09 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:29:18 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:29:22 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:29:25 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 10:29:30 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 11:20:04 --> Severity: Warning --> require_once(/home/miladiyyah/public_html/ingenico/application//libraries/REST_Controller.php): failed to open stream: No such file or directory /home/miladiyyah/public_html/ingenico/application/core/BD_Controller.php 5
ERROR - 2020-03-20 11:20:04 --> Severity: Compile Error --> require_once(): Failed opening required '/home/miladiyyah/public_html/ingenico/application//libraries/REST_Controller.php' (include_path='.:/opt/cpanel/ea-php56/root/usr/share/pear') /home/miladiyyah/public_html/ingenico/application/core/BD_Controller.php 5
ERROR - 2020-03-20 11:22:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 11:22:17 --> Unable to connect to the database
ERROR - 2020-03-20 11:23:46 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 11:23:46 --> Unable to connect to the database
ERROR - 2020-03-20 11:25:58 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 11:25:58 --> Unable to connect to the database
ERROR - 2020-03-20 12:38:41 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 12:38:41 --> Unable to connect to the database
ERROR - 2020-03-20 12:39:10 --> 404 Page Not Found: Phpmyadmin/index
ERROR - 2020-03-20 12:39:21 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 12:39:21 --> Unable to connect to the database
ERROR - 2020-03-20 12:53:57 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 12:53:57 --> Unable to connect to the database
ERROR - 2020-03-20 12:58:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 12:58:14 --> Unable to connect to the database
ERROR - 2020-03-20 12:58:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 12:58:14 --> Unable to connect to the database
ERROR - 2020-03-20 12:58:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 12:58:15 --> Unable to connect to the database
ERROR - 2020-03-20 13:03:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:03:20 --> Unable to connect to the database
ERROR - 2020-03-20 13:07:12 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:07:12 --> Unable to connect to the database
ERROR - 2020-03-20 13:07:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:07:13 --> Unable to connect to the database
ERROR - 2020-03-20 13:07:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:07:15 --> Unable to connect to the database
ERROR - 2020-03-20 13:07:15 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:07:15 --> Unable to connect to the database
ERROR - 2020-03-20 13:07:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:07:17 --> Unable to connect to the database
ERROR - 2020-03-20 13:12:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:12:04 --> Unable to connect to the database
ERROR - 2020-03-20 13:12:05 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:12:05 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:47 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:47 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:48 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:48 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:48 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:49 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:49 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:49 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:49 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:49 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:49 --> Unable to connect to the database
ERROR - 2020-03-20 13:14:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:14:50 --> Unable to connect to the database
ERROR - 2020-03-20 13:17:50 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:17:50 --> Unable to connect to the database
ERROR - 2020-03-20 13:20:16 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:20:16 --> Unable to connect to the database
ERROR - 2020-03-20 13:20:17 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:20:17 --> Unable to connect to the database
ERROR - 2020-03-20 13:20:18 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:20:18 --> Unable to connect to the database
ERROR - 2020-03-20 13:21:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'miladiyy_edc'@'localhost' (using password: YES) /home/miladiyyah/public_html/ingenico/system/database/drivers/mysqli/mysqli_driver.php 135
ERROR - 2020-03-20 13:21:11 --> Unable to connect to the database
ERROR - 2020-03-20 13:32:07 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', '3581b51e14192c5b293e3954bc2dea2f16d3b9f17087bf2742533bfe23d8f6510de1b672cd40d6f2bb484f75a9e37685342f14b134465d20a12fc8da10d97b09ku8Jd0EkipJf08uTa2Iy+Ma9voPQcVineNf4ijHGOco=', 'User Demo', '1')
ERROR - 2020-03-20 13:34:01 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:34:05 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:37:27 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', 'd384d6ef059a03a3a376bea2ee81b3a4cdbf1419a01cbc0d79a9c653bcee172c38d0dbc82f376b0b102d34ceed11ea302d7ed652e379c9c4d6000622c07ba2890fKirVMlbuiX7NyAi31m6U6OF75cCKXLVnpK00OgVU8=', 'User Demo', '1')
ERROR - 2020-03-20 13:40:57 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:47:37 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:47:40 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:47:58 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', 'cbe68ad47ab3d25cb889ef749754c09805e1f4e49e7b252747bc6aab740ecc2fd6bc540770a9d36ac09924d90ff506c5b0185ed09db6dee17a15506008fa87a0aWLOOOI6nUKXvjiJozbDowP63Bt3L7ll1+x6aQUyk2k=', 'User Demo', '1')
ERROR - 2020-03-20 13:49:01 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:49:20 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', 'baca045b64856bb8d82b70207d21db7d1293c39421726f565c457c19a10796e5fca4e13fab355a70d884bd48ba12d9d432aa35e3e6abb8f0ff873c88898b6572yVR5wz2isVhi8FPBzSBNlHr+Lf8BXsNnhJ2PQrsCLao=', 'User Demo', '1')
ERROR - 2020-03-20 13:50:57 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 13:51:17 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', 'f3806b4bb11e95180cc5e8f301784a39efcadb0421fc74dbd60a704903e3388da37beb5be0fd81d9e87a0d8890da882dcf9481d75bf25d63d386a2e597bc454cIYDoAqFe8W3l0VFtlYJfwISIQg6wn2sHgFR1gg1QKZY=', 'User Demo', '1')
ERROR - 2020-03-20 14:05:24 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', '939393d0a778f4ecade70f719487a490105be5bb93419b7887912295d5462fdf03c7e8535733c2f497eaed2978c42b59e2fd094424dd3a5311e95648564d1e4esy6OmfZ3kJUgeapa7spGc5kznyjE+LyyeyMCDIHJDJk=', 'Demo Pengguna', '0')
ERROR - 2020-03-20 14:05:31 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 14:05:35 --> 404 Page Not Found: Ace_master/assets
ERROR - 2020-03-20 14:06:06 --> Query error: Field 'foto' doesn't have a default value - Invalid query: INSERT INTO `data_user` (`username`, `password`, `nama_petugas`, `status`) VALUES ('demo', '0e64e846f00e966496f82684e3d5b756c1b1fc1ab84c3555243a63b3d39b32b15541d72a51d87969077472dd07307cca26d789d18caca7d30678ebd585e79331tPU2EmNTQkZZuaHy+xeYkm21YSFEHW0y8V1aF98J4/Y=', 'User Demo', '0')
