<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-08-04 22:03:37 --> 404 Page Not Found: Lahir/ajax_vlahir
ERROR - 2018-08-04 22:07:04 --> Query error: Unknown table 'surat' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
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
ERROR - 2018-08-04 22:07:17 --> Query error: Unknown table 'surat' - Invalid query: SELECT `surat`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tlahir`, `penduduk`.`tgl`, `penduduk`.`jkel`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_agama`.`agm`, `penduduk`.`kwn`, `data_didik`.`tingkatp`, `data_kerja`.`kerja`, `penduduk`.`wn`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
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
ERROR - 2018-08-04 22:08:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
WHERE `lahir`.`id` = '1'' at line 2 - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`jkel`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$judul /var/www/html/siakel/application/controllers/Lahir.php 681
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$nosurat /var/www/html/siakel/application/controllers/Lahir.php 682
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$tlahir /var/www/html/siakel/application/controllers/Lahir.php 722
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: tgsr /var/www/html/siakel/application/controllers/Lahir.php 722
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Lahir.php 723
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$agm /var/www/html/siakel/application/controllers/Lahir.php 725
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Lahir.php 726
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Lahir.php 727
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$kerja /var/www/html/siakel/application/controllers/Lahir.php 728
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Lahir.php 729
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$perlu /var/www/html/siakel/application/controllers/Lahir.php 730
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: tglaku /var/www/html/siakel/application/controllers/Lahir.php 731
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$penutup /var/www/html/siakel/application/controllers/Lahir.php 738
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$ttd /var/www/html/siakel/application/controllers/Lahir.php 763
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: akhir /var/www/html/siakel/application/controllers/Lahir.php 770
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$jabat /var/www/html/siakel/application/controllers/Lahir.php 773
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/controllers/Lahir.php 789
ERROR - 2018-08-04 22:09:33 --> Severity: Notice --> Undefined variable: urlqr /var/www/html/siakel/application/controllers/Lahir.php 893
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$nosurat /var/www/html/siakel/application/controllers/Lahir.php 682
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$tlahir /var/www/html/siakel/application/controllers/Lahir.php 722
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: tgsr /var/www/html/siakel/application/controllers/Lahir.php 722
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Lahir.php 723
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Lahir.php 724
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$agm /var/www/html/siakel/application/controllers/Lahir.php 725
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Lahir.php 726
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Lahir.php 727
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$kerja /var/www/html/siakel/application/controllers/Lahir.php 728
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Lahir.php 729
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$perlu /var/www/html/siakel/application/controllers/Lahir.php 730
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: tglaku /var/www/html/siakel/application/controllers/Lahir.php 731
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$penutup /var/www/html/siakel/application/controllers/Lahir.php 738
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$ttd /var/www/html/siakel/application/controllers/Lahir.php 763
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: akhir /var/www/html/siakel/application/controllers/Lahir.php 770
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$jabat /var/www/html/siakel/application/controllers/Lahir.php 773
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/controllers/Lahir.php 789
ERROR - 2018-08-04 22:13:14 --> Severity: Notice --> Undefined variable: urlqr /var/www/html/siakel/application/controllers/Lahir.php 893
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$tlahir /var/www/html/siakel/application/controllers/Lahir.php 736
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: tgsr /var/www/html/siakel/application/controllers/Lahir.php 736
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: jkl /var/www/html/siakel/application/controllers/Lahir.php 737
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Lahir.php 738
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$nrt /var/www/html/siakel/application/controllers/Lahir.php 738
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$nrw /var/www/html/siakel/application/controllers/Lahir.php 738
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$content /var/www/html/siakel/application/controllers/Lahir.php 738
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$agm /var/www/html/siakel/application/controllers/Lahir.php 739
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: kwn /var/www/html/siakel/application/controllers/Lahir.php 740
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$tingkatp /var/www/html/siakel/application/controllers/Lahir.php 741
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$kerja /var/www/html/siakel/application/controllers/Lahir.php 742
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: wn /var/www/html/siakel/application/controllers/Lahir.php 743
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$perlu /var/www/html/siakel/application/controllers/Lahir.php 744
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: tglaku /var/www/html/siakel/application/controllers/Lahir.php 745
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$penutup /var/www/html/siakel/application/controllers/Lahir.php 752
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$ttd /var/www/html/siakel/application/controllers/Lahir.php 777
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: akhir /var/www/html/siakel/application/controllers/Lahir.php 784
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$jabat /var/www/html/siakel/application/controllers/Lahir.php 787
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/controllers/Lahir.php 803
ERROR - 2018-08-04 22:17:16 --> Severity: Notice --> Undefined variable: urlqr /var/www/html/siakel/application/controllers/Lahir.php 907
ERROR - 2018-08-04 22:44:24 --> Severity: Notice --> Undefined property: Lahir::$lahir /var/www/html/siakel/application/controllers/Lahir.php 414
ERROR - 2018-08-04 22:44:24 --> Severity: Error --> Call to a member function unik_id() on null /var/www/html/siakel/application/controllers/Lahir.php 414
ERROR - 2018-08-04 22:44:43 --> Severity: Notice --> Undefined property: Lahir::$lahir /var/www/html/siakel/application/controllers/Lahir.php 414
ERROR - 2018-08-04 22:44:43 --> Severity: Error --> Call to a member function unik_id() on null /var/www/html/siakel/application/controllers/Lahir.php 414
ERROR - 2018-08-04 23:00:39 --> Severity: Notice --> Undefined property: Lahir::$lahir /var/www/html/siakel/application/controllers/Lahir.php 938
ERROR - 2018-08-04 23:00:39 --> Severity: Error --> Call to a member function cari_hash() on null /var/www/html/siakel/application/controllers/Lahir.php 938
ERROR - 2018-08-04 23:00:54 --> Severity: Notice --> Undefined property: Lahir::$lahir /var/www/html/siakel/application/controllers/Lahir.php 950
ERROR - 2018-08-04 23:00:54 --> Severity: Error --> Call to a member function update() on null /var/www/html/siakel/application/controllers/Lahir.php 950
ERROR - 2018-08-04 23:01:08 --> Query error: Unknown column 'idsignature' in 'field list' - Invalid query: UPDATE `lahir` SET `idsignature` = '2', `tglsign` = '2018-08-04', `jamsign` = '23:01:08'
WHERE `id` = '1'
ERROR - 2018-08-04 23:01:48 --> Query error: Unknown column 'surat.idsignature' in 'on clause' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-04 23:04:06 --> Query error: Unknown column 'surat.idsignature' in 'on clause' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-04 23:04:11 --> Query error: Unknown column 'surat.idsignature' in 'on clause' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-04 23:04:24 --> Query error: Unknown column 'surat.idsignature' in 'on clause' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-04 23:05:19 --> Query error: Unknown column 'surat.idsignature' in 'on clause' - Invalid query: SELECT `lahir`.*, `penduduk`.`nama`, `penduduk`.`nik`, `penduduk`.`tgl`, `penduduk`.`tlahir`, `penduduk`.`jkel`, `penduduk`.`ayah`, `kk`.`alamat`, `rt`.`nrt`, `rw`.`nrw`, `kel`.`content`, `kota`.`content` as `kota`, `data_pejabat`.`njabat`, `data_pejabat`.`idjabat`, `data_pejabat`.`fotottd`, `data_pejabat`.`nip`, `data_jabatan`.`jabat`, `data_jabatan`.`ttd`, `data_user`.`nama_petugas`
FROM `lahir`
JOIN `penduduk` ON `lahir`.`idnik` = `penduduk`.`id`
JOIN `kk` ON `penduduk`.`idkk` = `kk`.`id`
JOIN `rt` ON `kk`.`idrt` = `rt`.`id`
JOIN `rw` ON `rt`.`idrw` = `rw`.`id`
JOIN `kel` ON `rw`.`idkel` = `kel`.`id`
JOIN `kec` ON `kel`.`idkec` = `kec`.`id`
JOIN `kota` ON `kec`.`idkota` = `kota`.`id`
JOIN `data_pejabat` ON `lahir`.`idpamong` = `data_pejabat`.`id`
JOIN `data_jabatan` ON `data_pejabat`.`idjabat` = `data_jabatan`.`id`
JOIN `data_user` ON `surat`.`idsignature` = `data_user`.`id`
WHERE `lahir`.`id` = '1'
ERROR - 2018-08-04 23:05:52 --> Severity: Notice --> Undefined offset: 19 /var/www/html/siakel/application/controllers/Lahir.php 525
ERROR - 2018-08-04 23:05:52 --> Severity: Notice --> Undefined property: stdClass::$tgsr /var/www/html/siakel/application/controllers/Lahir.php 701
ERROR - 2018-08-04 23:07:13 --> Severity: Notice --> Undefined property: stdClass::$tgsr /var/www/html/siakel/application/controllers/Lahir.php 700
ERROR - 2018-08-04 23:29:16 --> Severity: Notice --> Undefined property: Lahir::$surat /var/www/html/siakel/application/controllers/Lahir.php 1125
ERROR - 2018-08-04 23:29:16 --> Severity: Error --> Call to a member function get_head() on null /var/www/html/siakel/application/controllers/Lahir.php 1125
ERROR - 2018-08-04 23:29:36 --> Severity: Parsing Error --> syntax error, unexpected '?>' /var/www/html/siakel/application/views/lap/lahirpdf.php 117
ERROR - 2018-08-04 23:29:51 --> Severity: Notice --> Undefined variable: chari /var/www/html/siakel/application/views/lap/lahirpdf.php 108
ERROR - 2018-08-04 23:29:51 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 144
ERROR - 2018-08-04 23:29:51 --> Severity: Notice --> Undefined property: Lahir::$m_pdf /var/www/html/siakel/application/controllers/Lahir.php 1142
ERROR - 2018-08-04 23:29:51 --> Severity: Error --> Call to a member function load() on null /var/www/html/siakel/application/controllers/Lahir.php 1142
ERROR - 2018-08-04 23:30:11 --> Severity: Notice --> Undefined variable: chari /var/www/html/siakel/application/views/lap/lahirpdf.php 108
ERROR - 2018-08-04 23:30:11 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 144
ERROR - 2018-08-04 17:30:15 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:30:37 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 144
ERROR - 2018-08-04 17:30:39 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:31:02 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 143
ERROR - 2018-08-04 17:31:04 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:32:30 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 166
ERROR - 2018-08-04 17:32:32 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:33:06 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 167
ERROR - 2018-08-04 17:33:14 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:34:22 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 167
ERROR - 2018-08-04 17:34:24 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:34:56 --> Severity: Notice --> Undefined property: stdClass::$idsignature /var/www/html/siakel/application/views/lap/lahirpdf.php 164
ERROR - 2018-08-04 17:34:58 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 17:35:07 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 17:35:53 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 23:51:40 --> Severity: Parsing Error --> syntax error, unexpected '>' /var/www/html/siakel/application/controllers/Lahir.php 101
ERROR - 2018-08-04 23:51:49 --> Severity: Parsing Error --> syntax error, unexpected '>' /var/www/html/siakel/application/controllers/Lahir.php 101
ERROR - 2018-08-04 18:24:14 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:25:37 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:26:59 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:28:08 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:29:02 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:29:29 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:29:45 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:30:01 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:30:42 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:31:09 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:31:40 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:32:11 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:32:45 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:33:20 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:33:49 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:34:39 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
ERROR - 2018-08-04 18:35:07 --> Severity: Warning --> opendir(/var/www/html/siakel/application/third_party/MPDF57/tmp): failed to open dir: No such file or directory /var/www/html/siakel/application/third_party/MPDF57/mpdf.php 7502
