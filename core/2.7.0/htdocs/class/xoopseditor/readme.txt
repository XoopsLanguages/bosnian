xoopseditor obezbeđuje skup urednika za XOOPS

uputstvo za upotrebu:

1 provjerite fajlove xoops_version.php pod /xoopseditor/ da biste bili sigurni da su noviji od vaših trenutnih

2 otpremite /xoopseditor/ u /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 konfigurirati željene postavke gdje je primjenjivo
3.1 ./dhtmlext(svi urednici)/language/: napravite svoj lokalni jezički fajl zasnovan na engleskom.php
3.3 ./dhtmlext(svi uređivači)/editor_registry.php: postavljanje konfiguracija za uređivač: redosled - redosled prikaza u slučaju da se koristi odabir urednika, 0 za onemogućeno; nohtml - radi za ne-html sintaksu
3.3 ./FCKeditor/module/: kopirajte fajlove u fascikle modula u slučaju da su potrebne posebne dozvole za otpremanje, skladištenje i opcije za uređivanje modula
3.3.1 ./FCKeditor/module/fckeditor.config.js: za opcije uređivača, obično ne morate to mijenjati
3.3.2 ./FCKeditor/module/fckeditor.connector.php: da biste odredili folder za pregledavanje fajlova (i skladištenje podataka) => XOOPS/uploads/XOOPS_FCK_FOLDER/, folder je potrebno kreirati ručno
3.3.3 ./FCKeditor/module/fckeditor.upload.php: navedite dozvolu za otpremanje i skladištenje
3.4 XOOPS/uploads/fckeditor/: za kreiranje foldera ako je omogućen FCKeditor, koristi se za upload-ove odakle folder za otpremanje nije specificiran
3.5 ./tinymce/tinymce/jscripts/: preuzmite svoje fajlove na lokalnom jeziku sa http://tinymce.moxiecode.com/language.php

4 provjerite imena datoteka: za sistem koji je osjetljiv na velika i mala slova, provjerite da li su imena datoteka doslovno tačna, tj. "FCKeditor" nije identičan "fckeditor"

5 provjeri /xoopseditor/sampleform.inc.php za razvojni vodič
