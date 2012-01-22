<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/nederlands/modinfo.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
* ----------------------------------------------------------------------------------------------------------
* translation		mcdonald
* language		dutch (nederlands)
* format			utf-8
*/

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME","imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC","Linken module waarbij gebruikers linken kunnen bezoeken, insturen en beoordelen.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1","Recente linken");
define("_MI_IMLINKS_BNAME2","Top linken");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1","Inzenden");
define("_MI_IMLINKS_SMNAME2","Populair");
define("_MI_IMLINKS_SMNAME3","Hoogste beoordeling");
define("_MI_IMLINKS_SMNAME4","Laatste linken");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX","Hoofd index");
define("_MI_IMLINKS_INDEXPAGE","Index pagina");
define("_MI_IMLINKS_MCATEGORY","Categorie management");
define("_MI_IMLINKS_MLINKS","Linken management");
define("_MI_IMLINKS_MUPLOADS","Afbeeldingen uploaden");
define("_MI_IMLINKS_PERMISSIONS","Rechten instellingen");
define("_MI_IMLINKS_BLOCKADMIN","Blok instellingen");
define("_MI_IMLINKS_MVOTEDATA","Stemmen");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Linken populariteit teller');
define('_MI_IMLINKS_POPULARDSC', "Aantal kliks waarna een link de status 'populair' krijgt.");

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY","Linken populair en nieuw:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Selekteer hoe de populair en nieuw iconen worden getoond.");
define("_MI_IMLINKS_DISPLAYICON1", "Toon als icoon");
define("_MI_IMLINKS_DISPLAYICON2", "Toon als tekst");
define("_MI_IMLINKS_DISPLAYICON3", "Niet tonen");

define("_MI_IMLINKS_DAYSNEW","Nieuwe linken:");
define("_MI_IMLINKS_DAYSNEWDSC","Aantal dagen dat een link de status 'nieuw' heeft.");
define("_MI_IMLINKS_DAYSUPDATED","Bijgewerkte linken:");
define("_MI_IMLINKS_DAYSUPDATEDDSC","Aantal dagen dat een link de status 'geupdate' heeft.");

define('_MI_IMLINKS_PERPAGE', 'Linken in index:');
define('_MI_IMLINKS_PERPAGEDSC', 'Aantal linken dat getoond wordt in iedere categorie index.');

define('_MI_IMLINKS_USESHOTS', 'Screenshots tonen?');
define('_MI_IMLINKS_USESHOTSDSC', 'Selekteer Ja om screenshots voor iedere link te tonen');
define('_MI_IMLINKS_SHOTWIDTH', 'Screenshot breedte');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Toon breedte voor screenshot afbeelding');
define('_MI_IMLINKS_SHOTHEIGHT', 'Screenshot hoogte');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Toon hoogte voor screenshot afbeelding');
define('_MI_IMLINKS_CHECKHOST', 'Niet toestaan om een link direct door te linken? (leeching)');
define('_MI_IMLINKS_REFERERS', 'Deze websites mogen direct door linken naar de linken van deze module<br />Scheiden door #');
define("_MI_IMLINKS_ANONPOST","Anonieme gebruikers inzendingen:");
define("_MI_IMLINKS_ANONPOSTDSC","Anonieme gebruikers toestaan om in te zenden en/of te uploaden?");
define('_MI_IMLINKS_AUTOAPPROVE','Ingezonden linken automatisch goedkeuren');
define('_MI_IMLINKS_AUTOAPPROVEDSC','Selekteren om ingezonden linken zonder moderatie goed te keuren.');

define('_MI_IMLINKS_MAXFILESIZE','Upload omvang (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC','Maximale toegestane linkomvang bij linkenuploaden.');
define('_MI_IMLINKS_IMGWIDTH','Breedte te uploaden afbeelding');
define('_MI_IMLINKS_IMGWIDTHDSC','Maximale toegestane afbeeldingsbreedte bij linken uploaden.');
define('_MI_IMLINKS_IMGHEIGHT','Hoogte te uploaden afbeelding');
define('_MI_IMLINKS_IMGHEIGHTDSC','Maximale toegestane afbeeldingshoogte bij linken uploaden.');

define('_MI_IMLINKS_UPLOADDIR','Upload bestand (No trailing slash)');
define('_MI_IMLINKS_ALLOWSUBMISS','Gebruikersinzendingen:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC','Gebruikers toestaan nieuwe linken in te zenden');
define('_MI_IMLINKS_ALLOWUPLOADS','Gebruikers uploads:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC','Gebruikers toestaan nieuwe linken direct te uploaden in de website');
define('_MI_IMLINKS_SCREENSHOTS','Screenshots upload map');
define('_MI_IMLINKS_CATEGORYIMG','Categorieën afbeelding upload map');
define('_MI_IMLINKS_MAINIMGDIR','Hoofd Afbeeldingen map');
define('_MI_IMLINKS_USETHUMBS', 'Gebruik Thumb Nails:');
define("_MI_IMLINKS_USETHUMBSDSC", "Ondersteunde link typen: JPG, GIF, PNG.<div style='padding-top: 8px;'>imLinks gebruikt thumb nails voor afbeeldingen. Selekteer 'Nee' Om het orgineel te gebruiken wanneer de server deze optie niet ondersteund.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Datum weergave:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Standaard datumweergave voor imLinks. <br />Zie <a href="http://docs.php.net/manual/nl/function.date.php" target="_blank">PHP handleiding</a>');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Toon disclaimer voordat gebruikers inzenden?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Toon de opgave richtlijnen voordat een gebruiker een link kan inzenden?');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Toon disclaimer voordat een gebruiker kan linken?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Toon richtlijnen voor linken voordat een link opend?');
define('_MI_IMLINKS_DISCLAIMER', 'Voer de inzend disclaimer tekst in:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Voer de link disclaimer tekst in:');
define('_MI_IMLINKS_SUBCATS', 'Sub-categorieën:');
define("_MI_IMLINKS_SUBMITART", "link inzenden:");
define("_MI_IMLINKS_SUBMITARTDSC", "Selekteer de groep die nieuwe linken kan inzenden.");
define("_MI_IMLINKS_RATINGGROUPS", "link beoordeling:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Selekteer groepen die linken kunnen beoordelen.");
define("_MI_IMLINKS_IMGUPDATE", "Thumbnails bijwerken?");
define("_MI_IMLINKS_IMGUPDATEDSC", "Als geselekteerde thumbnail afbeeldingen bij iedere pagina render bijgewerkt wordt, anders wordt de eerste thumbnail gebruikt.");
define("_MI_IMLINKS_QUALITY", "Thumbnail kwaliteit:");
define("_MI_IMLINKS_QUALITYDSC", "Laagste kwaliteit: 0 Hoogste: 100");
define("_MI_IMLINKS_KEEPASPECT", "Handhaaf de verhouding van een afbeelding?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Beheerdersindex linken aantal:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Aantal nieuwe linken dat wordt getoond in het beheerdersgedeelte.");
define("_MI_IMLINKS_ARTICLESSORT", "Standaard linken volgorde:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Selekteer de standaard volgorde voor de link indexen.");
define("_MI_IMLINKS_TITLE", "Titel");
define("_MI_IMLINKS_RATING", "Beoordeling");
define("_MI_IMLINKS_WEIGHT", "Gewicht");
define("_MI_IMLINKS_POPULARITY", "Populariteit");
define("_MI_IMLINKS_SUBMITTED2", "Inzenddatum");
define('_MI_IMLINKS_COPYRIGHT', 'Copyright opmerking:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Selekteer om een copyright opmerking te tonen op de linken pagina.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Selekteer Ja sub-categorieën te tonen. Nee selekteren zal sub-categorieën verbergen in de indexen');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Globaal');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Globale linken informatie opties.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Categorie');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Informatie optie behorend bij de huidige linken categorie.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Link');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Informatie optie behorend bij de huidige link.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuwe categorie');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Informeer mij wanneer een nieuwe linkcategorie is aangemaakt.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe linkcategorie is aangemaakt.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe linkcategorie');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Verzoek link aanpassing');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Informeer mij over ieder verzoek om link aanpassing.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Ontvang informatie wanneer een aanpassingsverzoek voor een link is ingezonden.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Link wijziging aangevraagd');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Gebroken link rapport');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Informeer mij over ieder gebroken linkrapport.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Ontvang informatie wanneer een gebroken linkrapportage is ingezonden.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Gebroken link gerapporteerd');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Link ingezonden');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuwe link is ingezonden (wachtend op goedkeuring).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe link is ingezonden (wachtend op goedkeuring).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link ingezonden');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'Nieuwe link geplaatst');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Informeer mij wanneer een nieuwe link is geplaatst.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe link is geplaatst.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link geplaatst');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Link ingezonden');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuwe link is ingezonden (wachtend op goedkeuring) in de huidige categorie.');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe link is ingezonden (wachtend op goedkeuring) in de huidige categorie.');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link ingezonden in categorie'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'Nieuwe link');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Informeer mij wanneer een nieuwe link is geplaatst in de huidige categorie.');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe link is geplaatst in de huidige categorie.');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe link geplaatst in categorie'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Link goedgekeurd');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Informeer mij wanneer deze link is goedgekeurd.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Ontvang informatie wanneer deze link is goedgekeurd.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Link goedgekeurd');

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"Het WF-Projects Team wil de volgende mensen bedanken voor hun hulp en ondersteuning gedurende de ontwikkelingsfase van deze module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Bug Fix geschiedenis");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Tenzij anders aangegeven, vallen deze module (imLinks) en zijn afbeeldingen onder het copyright van het WF-Projects team.<br /><br />U heeft de toestemming om imLinks te copieren, aan te passen en/of te wijzigen om te voldoen aan uw persoonlijke eisen. U gaat er mee akkoord dat u geen wijzigingen aanbrengt, toevoegd aan, en/of de broncode van deze software herdistribueerd zonder de uitdrukkelijke toestemming van het WF-Projects team.");

define('_MI_IMLINKS_SELECTFORUM', "Selekteer forum:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Selekteer het forum dat u heeft geïnstalleerd en dat zal worden gebruikt door imLinks.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb/CBB (all)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB Forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 Module");

// added by McDonald
define("_MI_IMLINKS_COUNTRY", "Land:" );
define("_MI_IMLINKS_EDITOR", "Te gebruiken editor (admin):");
define("_MI_IMLINKS_EDITORCHOICE", "Selekteer de te gebruiken editor voor admins.");
define("_MI_IMLINKS_EDITORUSER", "Te gebruiken editor (gebruiker):");
define("_MI_IMLINKS_EDITORCHOICEUSER", "Selekteer de te gebruiken editor voor gebruikers.");
define("_MI_IMLINKS_FORM_DHTML","DHTML");
define("_MI_IMLINKS_FORM_COMPACT","Compact");
define("_MI_IMLINKS_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK","FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI","Koivi Editor");
define("_MI_IMLINKS_FORM_TINYEDITOR","TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_IMLINKS_SORTCATS", "Sorteer categorieën op:");
define("_MI_IMLINKS_SORTCATSDSC", "Selekteer hoe categorieën en sub-categorieën gesorteerd moeten worden.");
define("_MI_IMLINKS_KEYLENGTH", "Voer het max. aantal karakters in voor meta keywords:");
define("_MI_IMLINKS_KEYLENGTHDSC", 'Voer het max. aantal karakters in voor meta keywords.<br />
  Zie <strong><a href="http://nl.wikipedia.org/wiki/Metatag" target="_blank">Wikipedia</a></strong> voor meer informatie.<br />
Standaard: <em>255</em>');
define("_MI_IMLINKS_OTHERLINKS", "Toon andere links die door de Inzender zijn ingezonden?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Kies Ja als u andere links van de Inzender wilt tonen.");
define("_MI_IMLINKS_TOTALCHARS", "Kies het totaal aantal karakters voor de omschrijving?");
define("_MI_IMLINKS_TOTALCHARSDSC", "Kies het totaal aantal karakters voor de omschrijving van de videos op de Index Pagina.");
define("_MI_IMLINKS_QUICKVIEW", "Laat Quick View optie zien?");
define("_MI_IMLINKS_QUICKVIEWDSC", "Kies Ja als u de Quick View optie wilt laten zien.");
define('_MI_IMLINKS_ICONS_CREDITS', "Icons door");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "Laat Social Bookmarks zien?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Kies Ja als u Social Bookmarks wilt laten zien onder een artikel.");
define("_MI_IMLINKS_SHOWPAGERANK", "Laat Google PageRank™ zien?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Kies Ja als u Google PageRank™ wilt laten zien.");
define("_MI_IMLINKS_USERTAGDESCR", "Gebruiker kan Tags invoeren?");
define("_MI_IMLINKS_USERTAGDSC", "Kies Ja als de gebruiker tags mag inzenden.");

//Version 1.05 RC5
define("_MI_IMLINKS_DATEFORMATADMIN", "Datum weergave administratie:");
define("_MI_IMLINKS_DATEFORMATADMINDSC", 'Standaard datum weergave administratie van imLinks. <br />Zie <a href="http://docs.php.net/manual/nl/function.date.php" target="_blank">PHP handleiding</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Gebruik adres en kaart funkties?");
define("_MI_IMLINKS_USEADDRESSDSC","Kies Ja om de adres en kaart funkties te gebruiken");
define("_MI_IMLINKS_HEADERPRINT","[PRINT OPTIES] Print pagina koptekst");
define("_MI_IMLINKS_HEADERPRINTDSC","Koptekst die voor iedere link geprint wordt");
define("_MI_IMLINKS_LOGOURLPRINT","[PRINT OPTIES] Logo print url");
define("_MI_IMLINKS_LOGOURLDSCPRINT","Url van het logo dat bovenaan de pagina geprint wordt");
define("_MI_IMLINKS_FOOTERPRINT","[PRINT OPTIES] Print pagina voettekst");
define("_MI_IMLINKS_FOOTERPRINTDSC","Voettekst die voor iedere link geprint wordt");
define("_MI_IMLINKS_BNAME3","imLinks Sponsor Statistieken");
define("_MI_IMLINKS_VCARD_CREDITS","vCard script door");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG","Map voor landen vlaggen");
define("_MI_IMLINKS_FLAGIMGDSC","Geef de url zonder met een slash te eindigen");
define("_MI_IMLINKS_CATEGORYIMGDSC","Geef de url zonder met een slash te eindigen");
define("_MI_IMLINKS_SCREENSHOTSDSC","Geef de url zonder met een slash te eindigen");
define("_MI_IMLINKS_MAINIMGDIRDSC","Geef de url zonder met een slash te eindigen");
define("_MI_IMLINKS_USEAUTOSCRSHOT","Gebruik Auto Screenshot");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC","Dit maakt automatisch een screenshot gebaseerd op de url. Als u Ja kiest wordt de geuploade screenshots niet toegepast. Deze optie werkt waarschijnlijk niet voor alle websites.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Auto Screenshot door");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (alle broncode geleverd onder <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> licentie)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4","imLinks Tag Cloud");
define("_MI_IMLINKS_BNAME5","imLinks Top Tags");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "Titel (A)");
define("_MI_IMLINKS_TITLE_D", "Titel (D)");
define("_MI_IMLINKS_RATING_A", "Beoordeling (A)");
define("_MI_IMLINKS_RATING_D", "Beoordeling (D)");
define("_MI_IMLINKS_SUBMITTED_A", "Inzenddatum (A)");
define("_MI_IMLINKS_SUBMITTED_D", "Inzenddatum (D)");
define("_MI_IMLINKS_POPULARITY_A", "Populariteit (A)");
define("_MI_IMLINKS_POPULARITY_D", "Populariteit (D)");
define("_MI_IMLINKS_COUNTRY_A", "Land (A)");
define("_MI_IMLINKS_COUNTRY_D", "Land (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Gebruik captcha in inzendformulier?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Kies <em>Ja</em> om captcha in het inzendformulier te gebruiken.<br />Standaard: <em>Ja</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Link naar termen in woordenlijst?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "De module imGlossary dient hiervoor geïnstalleerd en aktief te zijn." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Naam map van imGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "De naam van de map waarin imGlossary zich bevindt.<br />Standaard: <em>imglossary</em>" );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - een kopie van de GNU licentie is bijgesloten (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Kies bron voor het genereren van auto screenshot' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'Meer informatie:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Aantal categorie kolommen:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Kies het aantal categorie kolommen voor de Hoofd index.<br />Standaard: <em>2</em>' );
define( '_MI_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_MI_IMLINKS_SHOWRATING', 'Laat stem opties zien?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', 'Kies <em>Ja</em> om alle stem opties te laten zien. Kies <em>Nee</em> om de stem opties te verbergen.<br />Opgelet: Deze instelling heeft niets te doen met de rechten instelling voor het stemmen.' );

// imLinks 1.00 RC-2
define( '_MI_IMLINKS_BNAME6', 'Willekeurige link' );

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', 'Laat categorie legenda zien?' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'Met deze optie kunt u de legenda welke de verschillende kleuren van de standaard categorie iconen uitlegt wel/niet laten zien.' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'Kies hoe een link geopend moet worden:' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Kies <em>Standaard</em> om linken in een nieuw browser tab/venster te openen.<br />
									   Kies <em>LightWindow</em> om linken te openen in een <a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>.<br />
									   Kies <em>GreyBox</em> om linken te openen in een <a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>.' );
define( '_MI_IMLINKS_DEFAULT', 'Standaard' );

// imLinks 1.03
define( '_MI_IMLINKS_NICEURL', 'Gebruik nette urls?' );
define( '_MI_IMLINKS_NICEURLDSC', 'Gebruik nette urls voor de linken.' );
define( '_MI_IMLINKS_TOMTOMAPI', 'TomTom API key:' );
define( '_MI_IMLINKS_TOMTOMAPIDSC', 'Om een <em>Add to TomTom</em> knop zichtbaar te hebben met de contact gegevens van een link dient hier uw API key opgegeven te worden.<br />Een geldige API key kan opgevraagd worden bij add2TTsupport@tomtom.com' );
define( '_MI_IMLINKS_TOMTOMLOGO', 'Geef url van logo om weer te geven:' );
define( '_MI_IMLINKS_TOMTOMLOGODSC', 'Geef de url van het logo dat dient te worden weergegeven in het scherm<em>TomTom Home Starten</em>.<br />Dit logo wordt samen met de naam van de website weergegeven voor <em>Inhoud geleverd door</em>.' );

// imLinks 1.12
define( '_MI_IMLINKS_SOCIALBTTNS', 'Show Social Media buttons' );
define( '_MI_IMLINKS_SOCIALBTTNSDSC', 'Select if you want to have Social Bookmarks (old style), Social Media buttons or Social Media buttons with privacy switch (German only). If you select <i>Social Share Privacy</i> the type of button is not taken into account.' );
define( '_IM_IMLINKS_SOCBOOK', 'Social Bookmarks' );
define( '_IM_IMLINKS_SOCMEDIA', 'Social Media' );
define( '_IM_IMLINKS_SOCMEDIAPRIVE', 'Social Share Privacy' );
define( '_MI_IMLINKS_HORICNT', 'Hor. counter' );
define( '_MI_IMLINKS_VERTCNT', 'Vert. counter' );
define( '_MI_IMLINKS_TWITTER', 'Twitter' );
define( '_MI_IMLINKS_TWEET', 'Tweet' );
define( '_MI_IMLINKS_TWITTERBTTN', 'Twitter button' );
define( '_MI_IMLINKS_TWITTERBTTNDSC', 'Choose a Twitter button style.' );
define( '_MI_IMLINKS_FACEBOOKBTTN', 'Facebook "I Like" button' );
define( '_MI_IMLINKS_FACEBOOKBTTNDSC', 'Choose a Facebook button style.' );
define( '_MI_IMLINKS_PLUSONEBTTN', 'Google +1 button' );
define( '_MI_IMLINKS_PLUSONEBTTNDSC', 'Choose a Google +1 button style.' );
?>