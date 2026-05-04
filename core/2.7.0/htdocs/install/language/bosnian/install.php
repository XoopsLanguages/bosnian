<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: bs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Prikaži/sakrij tekst pomoći');
// License
//define('LICENSE_NOT_WRITEABLE', 'U datoteku licence "%s" NIJE moguće pisati!');
//define('LICENSE_IS_WRITEABLE', '%s Licenca se može pisati.');
// Configuration check page
define('SERVER_API', 'API servera');
define('PHP_EXTENSION', '%s ekstenzija');
define('CHAR_ENCODING', 'Kodiranje znakova');
define('XML_PARSING', 'XML parsiranje');
define('REQUIREMENTS', 'Zahtjevi');
define('_PHP_VERSION', 'PHP verzija');
define('RECOMMENDED_SETTINGS', 'Preporučene postavke');
define('RECOMMENDED_EXTENSIONS', 'Preporučena proširenja');
define('SETTING_NAME', 'Naziv postavke');
define('RECOMMENDED', 'Preporučeno');
define('CURRENT', 'Trenutno');
define('RECOMMENDED_EXTENSIONS_MSG', 'Ove ekstenzije nisu potrebne za normalnu upotrebu, ali mogu biti potrebne za istraživanje
 nekih specifičnih karakteristika (kao što je podrška za više jezika ili RSS). Stoga je preporučljivo da ih instalirate.');
define('NONE', 'Nijedna');
define('SUCCESS', 'Uspjeh');
define('WARNING', 'Upozorenje');
define('FAILED', 'Neuspjelo');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS čarobnjak za instalaciju');
define('LANGUAGE_SELECTION', 'Odabir jezika');
define('LANGUAGE_SELECTION_TITLE', 'Odaberite jezik');        // L128
define('INTRODUCTION', 'Uvod');
define('INTRODUCTION_TITLE', 'Dobrodošli u XOOPS Čarobnjak za instalaciju');        // L0
define('CONFIGURATION_CHECK', 'Provjera konfiguracije');
define('CONFIGURATION_CHECK_TITLE', 'Provjera konfiguracije servera');
define('PATHS_SETTINGS', 'Postavke putanja');
define('PATHS_SETTINGS_TITLE', 'Postavke putanja');
define('DATABASE_CONNECTION', 'Veza s bazom podataka');
define('DATABASE_CONNECTION_TITLE', 'Veza s bazom podataka');
define('DATABASE_CONFIG', 'Konfiguracija baze podataka');
define('DATABASE_CONFIG_TITLE', 'Konfiguracija baze podataka');
define('CONFIG_SAVE', 'Sačuvati konfiguraciju');
define('CONFIG_SAVE_TITLE', 'Čuvanje konfiguracije vašeg sistema');
define('TABLES_CREATION', 'Kreiranje tabela');
define('TABLES_CREATION_TITLE', 'Kreiranje tabela baze podataka');
define('INITIAL_SETTINGS', 'Početne postavke');
define('INITIAL_SETTINGS_TITLE', 'Unesite svoje početne postavke');
define('DATA_INSERTION', 'Unos podataka');
define('DATA_INSERTION_TITLE', 'Pohranjivanje vaših postavki u bazu podataka');
define('WELCOME', 'Dobrodošli');
define('WELCOME_TITLE', 'Dobrodošli na vašu XOOPS stranicu');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'Fizičke putanje XOOPS-a');
define('XOOPS_URLS', 'Web lokacije');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS dokumentuje root fizičku stazu');
define('XOOPS_ROOT_PATH_HELP', 'Fizička staza do direktorija XOOPS dokumenata (serviranih) BEZ kose crte');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS direktorij biblioteke');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS direktorij datoteka s podacima');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Lokacija web stranice (URL)'); // L56
define('XOOPS_URL_HELP', 'Glavni URL koji će se koristiti za pristup vašoj XOOPS instalaciji'); // L58
define('LEGEND_CONNECTION', 'Veza sa serverom');
define('LEGEND_DATABASE', 'Baza podataka'); // L51
define('DB_HOST_LABEL', 'Naziv hosta servera');    // L27
define('DB_HOST_HELP', 'Ime hosta servera baze podataka. Ako niste sigurni, <em>localhost</em> radi u većini slučajeva'); // L67
define('DB_USER_LABEL', 'Korisničko ime');    // L28
define('DB_USER_HELP', 'Naziv korisničkog naloga koji će se koristiti za povezivanje sa serverom baze podataka'); // L65
define('DB_PASS_LABEL', 'Lozinka');    // L52
define('DB_PASS_HELP', 'Lozinka vašeg korisničkog naloga baze podataka'); // L68
define('DB_NAME_LABEL', 'Naziv baze podataka');    // L29
define('DB_NAME_HELP', 'Ime baze podataka na hostu. Instalater će pokušati kreirati bazu podataka ako ne postoji'); // L64
define('DB_CHARSET_LABEL', 'Skup znakova baze podataka');
define('DB_CHARSET_HELP', 'MySQL uključuje podršku za skup znakova koja vam omogućava pohranjivanje podataka koristeći različite skupove znakova i obavljanje poređenja u skladu s različitim sortiranjem.');
define('DB_COLLATION_LABEL', 'Skupljanje baze podataka');
define('DB_COLLATION_HELP', 'Upoređivanje je skup pravila za poređenje znakova u skupu znakova.');
define('DB_PREFIX_LABEL', 'Prefiks tabele');    // L30
define('DB_PREFIX_HELP', 'Ovaj prefiks će biti dodan svim novim kreiranim tabelama kako bi se izbjegli sukobi imena u bazi podataka. Ako niste sigurni, samo zadržite zadano'); // L63
define('DB_PCONNECT_LABEL', 'Koristiti trajnu vezu');    // L54
define('DB_PCONNECT_HELP', "Podrazumevano je 'Ne'. Ostavite prazno ako niste sigurni"); // L69
define('DB_DATABASE_LABEL', 'Baza podataka');
define('LEGEND_ADMIN_ACCOUNT', 'Administratorski račun');
define('ADMIN_LOGIN_LABEL', 'Prijava administratora'); // L37
define('ADMIN_EMAIL_LABEL', 'Admin e-mail'); // L38
define('ADMIN_PASS_LABEL', 'Administratorska lozinka'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Potvrdi lozinku'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Prethodni'); // L42
define('BUTTON_NEXT', 'Nastavi'); // L47
// Messages
define('XOOPS_FOUND', '%s pronađeno');
define('CHECKING_PERMISSIONS', 'Provjeravam dozvole za fajl i direktorij...'); // L82
define('IS_NOT_WRITABLE', '%s NIJE moguće pisati.'); // L83
define('IS_WRITABLE', '%s se može pisati.'); // L84
define('XOOPS_PATH_FOUND', 'Put je pronađen.');
//define('READY_CREATE_TABLES', 'Nisu otkrivene XOOPS tablice.<br>Instalater je sada spreman za kreiranje sistemskih tablica XOOPS.');
define('XOOPS_TABLES_FOUND', 'XOOPS sistemske tabele već postoje u vašoj bazi podataka.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS sistemske tabele su kreirane.');
//define('READY_INSERT_DATA', 'Instalater je sada spreman da ubaci početne podatke u vašu bazu podataka.');
//define('READY_SAVE_MAINFILE', 'Instalater je sada spreman da sačuva specificirana podešavanja u <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Postavke sačuvane');
define('SAVED_MAINFILE_MSG', 'Instalater je sačuvao navedena podešavanja u <em>mainfile.php</em> i <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS podaci pronađeni u bazi podataka.');
define('DATA_INSERTED', 'Početni podaci su ubačeni u bazu podataka.');
// %s is database name
define('DATABASE_CREATED', 'Baza podataka %s kreirana!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Nije moguće kreirati tabelu %s'); // L118
define('TABLE_CREATED', 'Tabela %s kreirana.'); // L45
define('ROWS_INSERTED', '%d unosa je umetnuto u tabelu %s.'); // L119
define('ROWS_FAILED', 'Umetanje %d unosa u tabelu %s nije uspjelo.'); // L120
define('TABLE_ALTERED', 'Tabela %s ažurirana.'); // L133
define('TABLE_NOT_ALTERED', 'Neuspješno ažuriranje tabele %s.'); // L134
define('TABLE_DROPPED', 'Tabela %s je ispuštena.'); // L163
define('TABLE_NOT_DROPPED', 'Neuspješno brisanje tabele %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Nije moguće pristupiti navedenom folderu. Molimo provjerite da postoji i da je server čitljiv.');
define('ERR_NO_XOOPS_FOUND', 'U navedenom folderu nije pronađena XOOPS instalacija.');
define('ERR_INVALID_EMAIL', 'Nevažeći email'); // L73
define('ERR_REQUIRED', 'Informacija je obavezna.'); // L41
define('ERR_PASSWORD_MATCH', 'Dvije lozinke se ne podudaraju');
define('ERR_NEED_WRITE_ACCESS', 'Serveru se mora dati pristup za pisanje na sljedeće fajlove i foldere<br>(tj. <em>chmod 775 ime_direktorija</em> na UNIX/LINUX serveru)<br>Ako nisu dostupni ili nisu ispravno kreirani, kreirajte ručno i postavite odgovarajuće dozvole.');
define('ERR_NO_DATABASE', 'Nije moguće kreirati bazu podataka. Obratite se administratoru servera za detalje.'); // L31
define('ERR_NO_DBCONNECTION', 'Nije moguće povezati se s bazom podataka.'); // L106
define('ERR_WRITING_CONSTANT', 'Neuspješno pisanje konstante %s.'); // L122
define('ERR_COPY_MAINFILE', 'Nije moguće kopirati distribucijski fajl na %s');
define('ERR_WRITE_MAINFILE', 'Nije moguće pisati u %s. Molimo provjerite dopuštenje fajla i pokušajte ponovo.');
define('ERR_READ_MAINFILE', 'Nije moguće otvoriti %s za čitanje');
define('ERR_INVALID_DBCHARSET', "Skup znakova '%s' nije podržan.");
define('ERR_INVALID_DBCOLLATION', "Usporedba '%s' nije podržana.");
define('ERR_CHARSET_NOT_SET', 'Zadani skup znakova nije postavljen za XOOPS bazu podataka.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Podrška');
define('LOGIN', 'Autentikacija');
define('LOGIN_TITLE', 'Autentikacija');
define('USER_LOGIN', 'Prijava administratora');
define('USERNAME', 'Korisničko ime :');
define('PASSWORD', 'Lozinka :');
define('ICONV_CONVERSION', 'Konverzija skupa znakova');
define('ZLIB_COMPRESSION', 'Zlib kompresija');
define('IMAGE_FUNCTIONS', 'Funkcije slike');
define('IMAGE_METAS', 'Meta podaci slike (exif)');
define('FILTER_FUNCTIONS', 'Funkcije filtera');
define('ADMIN_EXIST', 'Administratorski nalog već postoji.');
define('CONFIG_SITE', 'Konfiguracija sajta');
define('CONFIG_SITE_TITLE', 'Konfiguracija sajta');
define('MODULES', 'Instalacija modula');
define('MODULES_TITLE', 'Instalacija modula');
define('THEME', 'Odaberi temu');
define('THEME_TITLE', 'Odaberi zadanu temu');
define('INSTALLED_MODULES', 'Sljedeći moduli su instalirani.');
define('NO_MODULES_FOUND', 'Nije pronađen nijedan modul.');
define('NO_INSTALLED_MODULES', 'Nijedan modul nije instaliran.');
define('THEME_NO_SCREENSHOT', 'Nije pronađen snimak ekrana');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Jačina lozinke');
define('PASSWORD_DESC', 'Lozinka nije unesena');
define('PASSWORD_GENERATOR', 'Generator lozinki');
define('PASSWORD_GENERATE', 'Generiraj');
define('PASSWORD_COPY', 'Kopiraj');
define('PASSWORD_VERY_WEAK', 'Veoma slaba');
define('PASSWORD_WEAK', 'Slaba');
define('PASSWORD_BETTER', 'Bolje');
define('PASSWORD_MEDIUM', 'Srednje');
define('PASSWORD_STRONG', 'Jaka');
define('PASSWORD_STRONGEST', 'Najjača');
//2.5.7
define('WRITTEN_LICENSE', 'Napisao XOOPS %s ključ licence: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Pokušaj ponovo');
define('CHMOD_CHGRP_IGNORE', 'Koristi svejedno');
define('CHMOD_CHGRP_ERROR', 'Instalater možda neće moći napisati konfiguracijski fajl %1$s.<p>PHP piše fajlove pod korisnikom %2$s i grupom %3$s.<p> Direktorij %4$s/ ima korisnika %5$s i grupu %6$s');
//2.5.9
define("CURL_HTTP", "Klijentska URL biblioteka (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domena kolačića za web stranicu');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domena za postavljanje kolačića. Može biti prazan, puni host sa URL (www.example.com) ili registrovani domen bez poddomena (example.com) za dijeljenje na poddomenama (www.example.com i blog.example.com.)');
define('INTL_SUPPORT', 'Funkcije internacionalizacije');
define('XOOPS_SOURCE_CODE', "XOOPS dana GitHub");
define('XOOPS_INSTALLING', 'Instalacija');
define('XOOPS_ERROR_ENCOUNTERED', 'Greška');
define('XOOPS_ERROR_SEE_BELOW', 'Pogledajte ispod za poruke.');
define('MODULES_AVAILABLE', 'Dostupni moduli');
define('INSTALL_THIS_MODULE', 'Dodaj %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Nije moguće kopirati konfiguracijski fajl %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS stranica');
define('_WEBSITE_SLOGAN', 'Samo ga iskoristi!');
define('_WEBSITE_META_KEYWORDS', 'xoops, okvir web aplikacija, cms, sistem za upravljanje sadržajem');
define('_WEBSITE_FOOTER', "Pokreće XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Projekat XOOPS</a>");
define('_WEBSITE_COPYRIGHT', 'Copyright © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS je dinamička objektno orijentirana portalska skripta otvorenog koda napisana na PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'UOP');
