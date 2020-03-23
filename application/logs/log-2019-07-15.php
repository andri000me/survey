<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-07-15 00:55:02 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 00:55:02 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 00:55:29 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 00:55:29 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 00:55:30 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 00:55:30 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 00:55:35 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 00:55:35 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 01:02:55 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 01:02:55 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 01:03:29 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 01:03:29 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 01:03:43 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 01:03:43 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 01:03:54 --> 404 Page Not Found: Images/pic01.jpg
ERROR - 2019-07-15 01:03:54 --> 404 Page Not Found: Images/avatar.jpg
ERROR - 2019-07-15 01:18:25 --> 404 Page Not Found: Main/pagination_hand
ERROR - 2019-07-15 01:18:45 --> 404 Page Not Found: Main/pagination_hand
ERROR - 2019-07-15 01:19:04 --> Severity: Notice --> Undefined property: Blog::$front /var/www/html/view/application/controllers/Blog.php 59
ERROR - 2019-07-15 01:19:04 --> Severity: Error --> Call to a member function fetch_hand() on null /var/www/html/view/application/controllers/Blog.php 59
ERROR - 2019-07-15 01:19:24 --> Severity: Error --> Call to undefined method M_blog::limit_words() /var/www/html/view/application/models/M_blog.php 70
ERROR - 2019-07-15 01:23:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2, 2' at line 7 - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `act` = 1
ORDER BY `blog`.`id` DESC
 LIMIT -2, 2
ERROR - 2019-07-15 01:29:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2, 2' at line 7 - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `act` = 1
ORDER BY `blog`.`id` DESC
 LIMIT -2, 2
ERROR - 2019-07-15 01:29:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2, 2' at line 7 - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `act` = 1
ORDER BY `blog`.`id` DESC
 LIMIT -2, 2
ERROR - 2019-07-15 01:38:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10, 10' at line 7 - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `act` = 1
ORDER BY `blog`.`id` DESC
 LIMIT -10, 10
ERROR - 2019-07-15 01:55:52 --> 404 Page Not Found: Blog/3
ERROR - 2019-07-15 01:56:06 --> 404 Page Not Found: Blog/3
ERROR - 2019-07-15 02:11:51 --> 404 Page Not Found: Blog/paginasi
ERROR - 2019-07-15 02:12:43 --> Query error: Column 'slug' in where clause is ambiguous - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `slug` = 'artikel-3'
ERROR - 2019-07-15 02:13:01 --> Severity: Notice --> Undefined variable: ava /var/www/html/view/application/controllers/Blog.php 162
ERROR - 2019-07-15 02:13:01 --> Severity: Notice --> Undefined variable: output /var/www/html/view/application/controllers/Blog.php 180
ERROR - 2019-07-15 02:13:22 --> Severity: Notice --> Undefined variable: output /var/www/html/view/application/controllers/Blog.php 182
ERROR - 2019-07-15 02:23:48 --> Severity: Parsing Error --> syntax error, unexpected ''</a></li>' (T_CONSTANT_ENCAPSED_STRING) /var/www/html/view/application/controllers/Blog.php 177
ERROR - 2019-07-15 02:23:54 --> Severity: Notice --> Undefined variable: us /var/www/html/view/application/controllers/Blog.php 172
ERROR - 2019-07-15 02:23:54 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 172
ERROR - 2019-07-15 02:28:30 --> 404 Page Not Found: Blog/baca_kategori
ERROR - 2019-07-15 10:26:20 --> Query error: Unknown column 'kategori.slug' in 'where clause' - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `kategori_blog`.`id` as `idkat`, `kategori_blog`.`slug`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `blog`.`act` = 1
AND `kategori`.`slug` = 'wisata'
ERROR - 2019-07-15 10:26:21 --> Query error: Unknown column 'kategori.slug' in 'where clause' - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `kategori_blog`.`id` as `idkat`, `kategori_blog`.`slug`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `blog`.`act` = 1
AND `kategori`.`slug` = 'wisata'
ERROR - 2019-07-15 10:26:28 --> Query error: Unknown column 'kategori.slug' in 'where clause' - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `kategori_blog`.`id` as `idkat`, `kategori_blog`.`slug`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `blog`.`act` = 1
AND `kategori`.`slug` = 'wisata'
ERROR - 2019-07-15 10:26:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5, 5' at line 8 - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `kategori_blog`.`id` as `idkat`, `kategori_blog`.`slug`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `blog`.`act` = 1
AND `kategori_blog`.`slug` = 'wisata'
ORDER BY `blog`.`id` DESC
 LIMIT -5, 5
ERROR - 2019-07-15 10:27:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-5, 5' at line 8 - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `kategori_blog`.`id` as `idkat`, `kategori_blog`.`slug`, `data_member`.`nama_petugas`, `data_member`.`foto` as `ava`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `blog`.`act` = 1
AND `kategori_blog`.`slug` = 'wisata'
ORDER BY `blog`.`id` DESC
 LIMIT -5, 5
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 148
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 154
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 161
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 162
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 166
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 167
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 171
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 171
ERROR - 2019-07-15 11:50:35 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 175
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 148
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 154
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 161
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 162
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 166
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 167
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 171
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 171
ERROR - 2019-07-15 11:51:06 --> Severity: Notice --> Trying to get property of non-object /var/www/html/view/application/controllers/Blog.php 175
ERROR - 2019-07-15 13:26:51 --> Severity: Warning --> preg_replace(): No ending delimiter '/' found /var/www/html/view/application/models/M_blog.php 62
ERROR - 2019-07-15 13:26:51 --> Severity: Warning --> preg_replace(): No ending delimiter '/' found /var/www/html/view/application/models/M_blog.php 62
ERROR - 2019-07-15 13:26:51 --> Severity: Warning --> preg_replace(): No ending delimiter '/' found /var/www/html/view/application/models/M_blog.php 62
ERROR - 2019-07-15 13:27:01 --> Severity: Warning --> preg_replace(): No ending delimiter '/' found /var/www/html/view/application/models/M_blog.php 62
ERROR - 2019-07-15 13:27:01 --> Severity: Warning --> preg_replace(): No ending delimiter '/' found /var/www/html/view/application/models/M_blog.php 62
ERROR - 2019-07-15 13:27:01 --> Severity: Warning --> preg_replace(): No ending delimiter '/' found /var/www/html/view/application/models/M_blog.php 62
ERROR - 2019-07-15 23:16:47 --> 404 Page Not Found: Backoffice/index
