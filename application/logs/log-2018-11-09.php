<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-11-09 00:00:09 --> Query error: Unknown column 'idsurat' in 'where clause' - Invalid query: UPDATE `lahir` SET `nama` = 'Arin Hakiki', `jkl` = '2', `tlahir` = 'Probolinggo', `tgl` = '2017-01-16', `agm` = 'Islam', `wn` = '1', `kel` = 'WIROBORANG', `kec` = 'MAYANGAN', `tl` = 'RSIA Muhammadiyah', `ke` = '3 (Tiga)', `ayah` = 'YUDI SUSANTO', `almt` = 'JL RADEN WIJAYA PERUM PENDOPO KENCANA AB 01 RT/RW 7/2 Kelurahan WIROBORANG Kecamatan MAYANGAN', `umur` = '37', `kerja` = 'WIRASWASTA', `ibu` = 'DATIN SUKMAWATI', `umuri` = '41', `kerjai` = 'KARYAWAN SWASTA', `almti` = 'JL RADEN WIJAYA PERUM PENDOPO KENCANA AB 01 RT/RW 7/2 Kelurahan WIROBORANG Kecamatan MAYANGAN'
WHERE `idsurat` = '0811181'
ERROR - 2018-11-09 00:14:13 --> 404 Page Not Found: Butterfly/img
ERROR - 2018-11-09 00:14:14 --> 404 Page Not Found: Butterfly/img
ERROR - 2018-11-09 00:14:22 --> Severity: Notice --> Undefined variable: arr /var/www/html/siakel/application/views/template/dashboard.php 170
ERROR - 2018-11-09 00:14:22 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 189
ERROR - 2018-11-09 00:14:26 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-09 00:14:26 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7849
ERROR - 2018-11-09 00:14:35 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-09 00:14:35 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7849
ERROR - 2018-11-09 00:16:30 --> Severity: Notice --> Undefined variable: arr /var/www/html/siakel/application/views/template/dashboard.php 170
ERROR - 2018-11-09 00:16:30 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 189
ERROR - 2018-11-09 00:19:22 --> Severity: Notice --> Undefined variable: arr /var/www/html/siakel/application/views/template/dashboard.php 170
ERROR - 2018-11-09 00:19:22 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 189
ERROR - 2018-11-09 00:21:48 --> Severity: Notice --> Undefined variable: jbt /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-11-09 00:21:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 174
ERROR - 2018-11-09 00:21:48 --> Severity: Notice --> Undefined variable: ktp /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-11-09 00:21:48 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/siakel/application/views/surat_berkas.php 215
ERROR - 2018-11-09 00:28:20 --> Severity: Error --> Class 'M_berkaslhr' not found /var/www/html/siakel/system/core/Loader.php 305
ERROR - 2018-11-09 00:28:32 --> Query error: Unknown column 'lahir.idsurat' in 'on clause' - Invalid query: SELECT `surat_berkas`.*, `surat`.`nosurat`, `lahir`.`nama`
FROM `surat`
JOIN `surat_berkas` ON `surat`.`id` = `surat_berkas`.`idsurat`
JOIN `lahir` ON `surat`.`uniksurat` = `lahir`.`idsurat`
WHERE `surat`.`id` = '1'
ORDER BY `surat_berkas`.`id` DESC
 LIMIT 10
ERROR - 2018-11-09 00:32:03 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-09 00:32:03 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7849
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 630
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 636
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 639
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 682
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 685
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Surat.php 688
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Surat.php 731
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 734
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 787
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 815
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 816
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 847
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 859
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 860
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 861
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 862
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 863
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 864
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 865
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 866
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 867
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 868
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 869
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 880
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 905
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 907
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 917
ERROR - 2018-11-09 00:53:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Surat.php 983
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 621
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 627
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Suratlahir.php 630
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Suratlahir.php 673
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 676
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Suratlahir.php 679
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Suratlahir.php 722
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 725
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 778
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 806
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 807
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 838
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 850
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 851
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 852
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 853
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 854
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 855
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 856
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 857
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 858
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 859
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 860
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 871
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 896
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 898
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 908
ERROR - 2018-11-09 00:56:39 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 974
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 621
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 627
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Suratlahir.php 630
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Suratlahir.php 673
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 676
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Undefined offset: 1 /var/www/html/siakel/application/controllers/Suratlahir.php 679
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Undefined offset: 2 /var/www/html/siakel/application/controllers/Suratlahir.php 722
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 725
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 778
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 806
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 807
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 838
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 850
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 851
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 852
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 853
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 854
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 855
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 856
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 857
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 858
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 859
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 860
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 871
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 896
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 898
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 908
ERROR - 2018-11-09 00:56:44 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 974
ERROR - 2018-11-09 00:57:37 --> Severity: Notice --> Undefined property: stdClass::$jkel /var/www/html/siakel/application/controllers/Suratlahir.php 853
ERROR - 2018-11-09 00:57:37 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Suratlahir.php 854
ERROR - 2018-11-09 00:57:37 --> Severity: Notice --> Undefined property: stdClass::$stk /var/www/html/siakel/application/controllers/Suratlahir.php 856
ERROR - 2018-11-09 00:57:37 --> Severity: Notice --> Undefined property: stdClass::$ddk /var/www/html/siakel/application/controllers/Suratlahir.php 857
ERROR - 2018-11-09 01:02:51 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/controllers/Suratlahir.php 847
ERROR - 2018-11-09 01:19:03 --> Severity: Notice --> Undefined variable: arr /var/www/html/siakel/application/views/template/dashboard.php 170
ERROR - 2018-11-09 01:19:03 --> Severity: Notice --> Undefined variable: arr1 /var/www/html/siakel/application/views/template/dashboard.php 189
ERROR - 2018-11-09 01:19:10 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-09 01:19:10 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7849
ERROR - 2018-11-09 01:20:15 --> Severity: Notice --> Undefined variable: gbar /var/www/html/siakel/application/views/template/dashboard.php 7840
ERROR - 2018-11-09 01:20:15 --> Severity: Notice --> Undefined variable: gbar1 /var/www/html/siakel/application/views/template/dashboard.php 7849
ERROR - 2018-11-09 01:23:27 --> Severity: Notice --> Undefined property: stdClass::$jkel /var/www/html/siakel/application/views/lap/suratlhrpdf.php 87
ERROR - 2018-11-09 01:23:27 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/views/lap/suratlhrpdf.php 92
ERROR - 2018-11-09 01:23:27 --> Severity: Notice --> Undefined property: stdClass::$stk /var/www/html/siakel/application/views/lap/suratlhrpdf.php 102
ERROR - 2018-11-09 01:23:27 --> Severity: Notice --> Undefined property: stdClass::$ddk /var/www/html/siakel/application/views/lap/suratlhrpdf.php 107
ERROR - 2018-11-09 01:26:02 --> Severity: Notice --> Undefined property: stdClass::$alamat /var/www/html/siakel/application/views/lap/suratlhrpdf.php 97
ERROR - 2018-11-09 01:26:02 --> Severity: Notice --> Undefined property: stdClass::$stk /var/www/html/siakel/application/views/lap/suratlhrpdf.php 107
ERROR - 2018-11-09 01:26:02 --> Severity: Notice --> Undefined property: stdClass::$ddk /var/www/html/siakel/application/views/lap/suratlhrpdf.php 112
ERROR - 2018-11-09 02:01:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/controllers/Suratlahir.php 1294
ERROR - 2018-11-09 02:01:14 --> Severity: Notice --> Trying to get property of non-object /var/www/html/siakel/application/views/lap/suratlhrpdf.php 39
