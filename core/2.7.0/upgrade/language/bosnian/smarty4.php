<?php

// _LANGCODE: bs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 migracija');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Rezultati skenera');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Pokreni skeniranje');
define('_XOOPS_SMARTY4_SCANNER_END', 'Izađite iz skenera');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Pravilo');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Utakmica');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Datoteka');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Popravi broj');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Potreban je ručni pregled');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Može se automatski popraviti: varijabla foreach stavke će biti preimenovana dodavanjem "_item" (npr. "foo" postaje "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Nije moguće upisati');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opcije ponovnog skeniranja');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Kliknite na polje za potvrdu "Da" ispod, a zatim kliknite na dugme Pokreni skeniranje da pokušate da automatski rešite sve pronađene probleme.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Označite kao završeno');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Direktorij predložaka (opcionalno)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Proširenje predloška (opcionalno)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 uvodi značajnu promjenu: Smarty 4</h3>

<p>Nažalost, ova promjena može potencijalno poremetiti neke starije teme. Stoga, prije nego što nastavite s nadogradnjom, obavezno slijedite ove korake:

<li>Pokrenite preflight.php da provjerite ima li zastarjelih tema ili šablona modula.</li>
<li>Ako se identifikuju bilo kakvi problemi, pogledajte ovaj dokument da biste razumjeli potrebne izmjene prije nego što nastavite s nadogradnjom.</li>
<li>Nakon što izvršite potrebne promjene, pokrenite preflight.php ponovo.</li>
<li>Ako više nema problema, možete započeti proces nadogradnje.</li>
</p>
EOT,
);
