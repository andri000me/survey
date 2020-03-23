<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-07-18 03:43:37 --> Query error: Column 'slug' in where clause is ambiguous - Invalid query: SELECT `blog`.*, `kategori_blog`.`nama`, `data_member`.`nama_petugas`
FROM `blog`
JOIN `kategori_blog` ON `blog`.`id_kat` = `kategori_blog`.`id`
JOIN `data_member` ON `blog`.`id_member` = `data_member`.`id`
WHERE `blog`.`id_member` = '3'
AND   (
`judul` LIKE '%i%' ESCAPE '!'
OR  `nama` LIKE '%i%' ESCAPE '!'
OR  `slug` LIKE '%i%' ESCAPE '!'
 )
ORDER BY `blog`.`id` DESC
 LIMIT 10
