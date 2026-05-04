<?php

// _LANGCODE: bs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Upgrader</h2>

<p>
<em>Nadogradite</em> će ispitati ovu XOOPS instalaciju i primijeniti sve potrebne zakrpe kako bi je učinio kompatibilnom 
sa novim kodom XOOPS. Zakrpe mogu uključivati promjene baze podataka, dodavanjem zadanih postavki za nove
stavke konfiguracije, ažuriranja datoteka i podataka i još mnogo toga.
<p>
Nakon svake zakrpe, program za nadogradnju će prijaviti status i čekati da se vaš unos nastavi. Na
na kraju nadogradnje, kontrola će preći na funkciju ažuriranja sistemskog modula.

<div class="alert alert-warning">
Kada se nadogradnja završi, ne zaboravite:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> izbrišite fasciklu za nadogradnju</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> ažurirati sve module koji su promijenjeni</li>
</div>

EOT,
);
