<?php
// _LANGCODE: bs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Fizičke putanje XOOPS-a');
define('LEGEND_DATABASE', 'Skup znakova baze podataka');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS direktorij biblioteke');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS direktorij datoteka s podacima');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Skup znakova baze podataka i usporedba');
define('DB_COLLATION_HELP', "Od 4.12 MySQL podržava prilagođeni skup znakova i razvrstavanje. Međutim, složeniji je od očekivanog, stoga NEMOJTE praviti nikakve promjene osim ako niste sigurni u svoj izbor.");
define('DB_COLLATION_NOCHANGE', 'Ne mijenjati');

define('XOOPS_PATH_FOUND', 'Put je pronađen.');
define('ERR_COULD_NOT_ACCESS', 'Nije moguće pristupiti navedenom folderu. Molimo provjerite da postoji i da je server čitljiv.');
define('CHECKING_PERMISSIONS', 'Provjeravam dozvole za fajl i direktorij...');
define('ERR_NEED_WRITE_ACCESS', 'Serveru se mora dati pristup za pisanje na sljedeće fajlove i folder<br>(tj. <em>chmod 777 ime_direktorija</em> na UNIX/LINUX serveru)');
define('IS_NOT_WRITABLE', '%s NIJE moguće pisati.');
define('IS_WRITABLE', '%s se može pisati.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Greška pri pisanju sadržaja u mainfile.php, ručno upišite sadržaj u mainfile.php.');
