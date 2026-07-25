<?php
//
// _LANGCODE: bs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Vaš sajt</h3>
<p>Sada možete pristupiti <a href='../index.php'>početnu stranicu vašeg sajta</a>.</p>
<h3>Podrška</h3>
<p>Posjetite <a href='https://xoops.org/' rel='external'>Projekat XOOPS</a></p>
<p><strong>PAŽNJA:</strong> Vaša stranica trenutno sadrži minimalnu funkcionalnost. 
Molimo posjetite <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
da saznate više o proširenju XOOPS na prezentacije tekstualnih stranica, galerija fotografija, foruma i više, 
sa <em>moduli</em> kao i prilagođavanje izgleda vašeg XOOPS sa <em>teme</em>.</p>
";

$content .= "<h3>Sigurnosna konfiguracija</h3>
<p>Instalater će pokušati konfigurirati vašu web lokaciju iz sigurnosnih razloga. Molimo provjerite još jednom kako biste bili sigurni:
<div class='confirmMsg'>
Datoteka <em>mainfile.php</em> je samo za čitanje.<br>
Uklonite folder <em>{$installer_modified}</em> (ili <em>install</em> ako ga instalater nije automatski preimenovao) sa vašeg servera.
</div>
</p>
";
