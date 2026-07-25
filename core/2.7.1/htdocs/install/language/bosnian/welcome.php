<?php
//
// _LANGCODE: bs
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> je open-source
    Objektno orijentirani web sistem za objavljivanje napisan u PHP. Idealan je alat za
    razvoj malih do velikih web stranica dinamične zajednice, portala unutar kompanije, korporativnih portala, weblogova i još mnogo toga.
</p>
<p>
    XOOPS se izdaje pod uslovima
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Opća javna licenca (GPL)</a>
    verzija 2 ili novija, i slobodan je za korištenje i modificiranje.
    Slobodna je za redistribuciju sve dok se pridržavate uslova distribucije GPL.
</p>
<h3>Zahtjevi</h3>
<ul>
    <li>WWW server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, itd.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ili noviji, preporučuje se 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ili noviji, preporučuje se 8.4.5+ </li>
</ul>
<h3>Prije tebe install</h3>
<ol>
    <li>Postavite WWW server, PHP i server baze podataka ispravno.</li>
    <li>Pripremite bazu podataka za svoju XOOPS stranicu.</li>
    <li>Pripremite korisnički račun i dodijelite korisniku pristup bazi podataka.</li>
    <li>Učinite ove direktorije i datoteke upisivim: %s</li>
    <li>Iz sigurnosnih razloga, preporučujemo vam da premjestite dva direktorija ispod <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">korijen dokumenta</a> i promijenite nazive foldera: %s</li>
    <li>Kreirajte (ako već nisu prisutni) i omogućite upis u ove direktorije: %s</li>
    <li>Uključite kolačić i JavaScript vašeg pretraživača.</li>
</ol>
<h3>Posebne napomene</h3>
<ol>
    <li>Neke specifične kombinacije sistemskog softvera mogu zahtijevati neke dodatne konfiguracije za rad
    sa XOOPS. Ako se bilo koja od ovih tema odnosi na vaše okruženje, pogledajte cijelu
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    priručnik za instalaciju</a> za više informacija.<br><br>

    <li><strong>SELinux</strong> omogućeni sistemi (npr <strong>CentOS</strong>  i <strong>RHEL</strong>) može zahtijevati promjene sigurnosnog konteksta
    za XOOPS direktorije kao dodatak normalnim dozvolama za fajlove da se u direktorije mogu pisati.
    Konsultujte dokumentaciju vašeg sistema i/ili administratora sistema.
</ol>
';

return $content;

