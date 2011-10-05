<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/czech/modinfo.php
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
*/

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME", "Odkazy");

// A brief description of this module
define("_MI_IMLINKS_DESC", "Vytváří sekci odkazů, kde uživatelé vkládají a hodnotí různé odkazy.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1", "Nejnovější odkazy");
define("_MI_IMLINKS_BNAME2", "Top odkazy");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1", "Vložit odkaz");
define("_MI_IMLINKS_SMNAME2", "Oblíbené");
define("_MI_IMLINKS_SMNAME3", "Nejlépe hodnocené");
define("_MI_IMLINKS_SMNAME4", "Nejnovější");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX", "Přehled");
define("_MI_IMLINKS_INDEXPAGE", "Hlavní strana modulu");
define("_MI_IMLINKS_MCATEGORY", "Správce kategorií");
define("_MI_IMLINKS_MLINKS", "Správce odkazů");
define("_MI_IMLINKS_MUPLOADS", "Nahrávání obrázků");
define("_MI_IMLINKS_PERMISSIONS", "Oprávnění");
define("_MI_IMLINKS_BLOCKADMIN", "Nastavení bloků");
define("_MI_IMLINKS_MVOTEDATA", "Hlasy");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Nejoblíbenější odkazy - počet');
define('_MI_IMLINKS_POPULARDSC', 'Počet návštěv odkazu předtím, než bude označen jako nejoblíbenější.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY", "Zobrazení oblíbených a nových odkazů:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Vyberte jak zobrazit ikony oblíbené a nové v seznamu odkazů.");
define("_MI_IMLINKS_DISPLAYICON1", "jako ikony");
define("_MI_IMLINKS_DISPLAYICON2", "jako text");
define("_MI_IMLINKS_DISPLAYICON3", "nezobrazovat");

define("_MI_IMLINKS_DAYSNEW", "Nové odkazy - počet dní:");
define("_MI_IMLINKS_DAYSNEWDSC", "Kolik dní bude vložený odkaz označován jako nový.");
define("_MI_IMLINKS_DAYSUPDATED", "Aktualizovaný odkaz - počet dní:");
define("_MI_IMLINKS_DAYSUPDATEDDSC", "Kolik dní bude upravený odkaz označován jako aktualizovaný.");

define('_MI_IMLINKS_PERPAGE', 'Počet zobrazovaných odkazů:');
define('_MI_IMLINKS_PERPAGEDSC', 'Počet zobrazených odkazů v každé kategorii.');

define('_MI_IMLINKS_USESHOTS', 'Zobrazovat screenshoty?');
define('_MI_IMLINKS_USESHOTSDSC', 'Vyberte <em>Ano</em> pro zobrazení screnshotu u každého odkazu.');
define('_MI_IMLINKS_SHOTWIDTH', 'Šířka zobrazeného obrázku');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Zobrazovaná šířka pro screenshot');
define('_MI_IMLINKS_SHOTHEIGHT', 'Výška zobrazeného obrázku');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Zobrazovaná výška pro screenshot');
define('_MI_IMLINKS_CHECKHOST', 'Disallow direct link linking? (leeching)');
define('_MI_IMLINKS_REFERERS', 'These sites can directly link to your links <br />Separate with #');
define("_MI_IMLINKS_ANONPOST", "Mohou anonymní uživatelé vkládat odkazy:");
define("_MI_IMLINKS_ANONPOSTDSC", "Dovolit anonymním uživatelům vkládat nebo nahrávat na Váš web?");
define('_MI_IMLINKS_AUTOAPPROVE', 'Automaticky schvalovat vložené odkazy');
define('_MI_IMLINKS_AUTOAPPROVEDSC', 'Vyberte schvalování vložených odkazů bez moderátora.');

define('_MI_IMLINKS_MAXFILESIZE', 'Velikost nahrávaného souboru (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC', 'Maximální velikost souboru nahrávaného odkazu.');
define('_MI_IMLINKS_IMGWIDTH', 'Šířka nahrávaného obrázku');
define('_MI_IMLINKS_IMGWIDTHDSC', 'Maximální dovolená šířka nahrávaného obrázku u odkazu');
define('_MI_IMLINKS_IMGHEIGHT', 'Výška nahrávaného obrázku');
define('_MI_IMLINKS_IMGHEIGHTDSC', 'Maximální dovolená výška nahrávaného obrázku u odkazu');

define('_MI_IMLINKS_UPLOADDIR', 'Adresář pro nahrání (bez zpětného lomítka)');
define('_MI_IMLINKS_ALLOWSUBMISS', 'User submissions:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC', 'Allow users to submit new links');
define('_MI_IMLINKS_ALLOWUPLOADS', 'User uploads:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC', 'Allow users to upload links directly to your website');
define('_MI_IMLINKS_SCREENSHOTS', 'Adresář pro nahrávání screenshotů');
define('_MI_IMLINKS_CATEGORYIMG', 'Adresář pro nahrávání obrázků kategorie');
define('_MI_IMLINKS_MAINIMGDIR', 'Hlavní adresář obrázků');
define('_MI_IMLINKS_USETHUMBS', 'Používat miniatury:');
define("_MI_IMLINKS_USETHUMBSDSC", "Podporované typy jsou: JPG, GIF, PNG.<div style='padding-top: 8px;'>Modul bude používat miniatury pro obrázky. Nastavením <em>Ne</em> se použijí originální obrázky, pokud server tuto volbu nepodporuje.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Zobrazení datumu:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Výchozí zobrazení datumu pro odkazy<br />Prostudujte <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manuál</a>');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Zobrazit prohlášení při vložení odkazu uživatelem?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Před vložením odkazu musí uživatel potvrdit prohlášení?');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Zobrazit prohlášením před otevřením odkazu?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Má se před otevřením odkazu nejprve zobrazit prohlášení?');
define('_MI_IMLINKS_DISCLAIMER', 'Text prohlášení při vkládání odkazu:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Text prohlášení při otevření odkazu:');
define('_MI_IMLINKS_SUBCATS', 'Podkategorie:');
define("_MI_IMLINKS_SUBMITART", "link submission:");
define("_MI_IMLINKS_SUBMITARTDSC", "Select groups that can submit new links.");
define("_MI_IMLINKS_RATINGGROUPS", "Link ratings:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Select groups that can rate a link.");
define("_MI_IMLINKS_IMGUPDATE", "Aktualizovat miniatury?");
define("_MI_IMLINKS_IMGUPDATEDSC", "Při každé obnově stránky budou miniatury znovu vytvořeny. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Kvalita miniatur:");
define("_MI_IMLINKS_QUALITYDSC", "Kvalita nejnižší: 0 nejvyšší: 100");
define("_MI_IMLINKS_KEEPASPECT", "Zachovat poměr stran obrázku?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Počet odkazů v přehledu administrace:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Počet nových odkazů zobrazených na stránku v přehledu administrace.");
define("_MI_IMLINKS_ARTICLESSORT", "Výchozí řazení pro odkazy:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Vyberte výchozí řazení pro zobrazení odkazů.");
define("_MI_IMLINKS_TITLE", "Název");
define("_MI_IMLINKS_RATING", "Hodnocení");
define("_MI_IMLINKS_WEIGHT", "Váha");
define("_MI_IMLINKS_POPULARITY", "Oblíbenost");
define("_MI_IMLINKS_SUBMITTED2", "Datum vložení");
define('_MI_IMLINKS_COPYRIGHT', 'Copyright:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Vyberte zda zobrazit copyright na stránce odkazu.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Vyberte <em>Ano</em> pro zobrazení podkategorií. Výběrem <em>Ne</em> budou podkategorie v seznamu skryty.');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Obecné');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Obecné - volby upozorňování na odkazy.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Volby upozorňování aplikované na aktuální kategorii odkazů.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Odkaz');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Volby upozorňování aplikované na aktuální odkaz.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Nová kategorie');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Upozornění při vytvoření nové kategorie odkazů.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Zaslat upozornění, když je vytvořena nová kategorie odkazů.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Nová kategorie odkazů');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Požadavek na změnu odkazu');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Upozornění při požadavku na změnu odkazu.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Zaslat upozornění, když je vložen požadavek na změnu odkazu.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Požadavek na změnu odkazu');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Hlášení o špatném odkazu');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Upozornění při hlášení o špatném odkazu.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Zaslat upozornění, když je vloženo hlášení o špatném odkazu.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Hlášení o špatném odkazu');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Nový odkaz - čeká na schválení');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Upozornění při vložení nového odkazu (čeká na schválení).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Zaslat upozornění, když je vložen nový odkaz (čeká na schválení).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Nový odkaz - čeká na schválení');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'Nový odkaz');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Upozornění při zaslání nového odkazu.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Zaslat upozornění, když je zaslán nový odkaz.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Nový odkaz');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Vložen odkaz v kategorii');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Upozornění při vložení nového odkazu (čeká na schválení) v aktuální kategorii.');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Zaslat upozornění, když je vložen nový odkaz (čeká na schválení) v aktuální kategorii.');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Vložen odkaz v kategorii'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'Nový odkaz v kategorii');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Upozornění při zaslání nového odkazu v aktuální kategorii.');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Zaslat upozornění, když je zaslán nový odkaz v aktuální kategorii.');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Nový odkaz v kategorii'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Odkaz schválen');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Upozornění při schválení odkazu.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Zaslat upozornění, když je odkaz schválen.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} automatické-upozornění : Odkaz schválen');

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, GibaPhp");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (imLinks) and its images are copyright to the ImpressCMS community.<br /><br />You have the permission to copy, edit and change imLinks to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the ImpressCMS team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_IMLINKS_SELECTFORUM', "Vyberte fórum:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Vyberte fórum, které máte nainstalované a bude využito odkazy.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (všechny)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB fórum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 modul");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "Country:" );
define('_MI_IMLINKS_EDITOR', "Editor pro použití v administraci:");
define('_MI_IMLINKS_EDITORCHOICE', "Vyberte editor pro administrační část.");
define('_MI_IMLINKS_EDITORUSER', "Editor pro použití na webu:");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Vyberte editor pro uživatelskou část.");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_COMPACT", "Compact");
define("_MI_IMLINKS_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK", "FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI", "Koivi Editor");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_IMLINKS_SORTCATS", "Řadit kategorie podle:");
define("_MI_IMLINKS_SORTCATSDSC", "Vyberte jak budou kategorie a podkategorie řazeny.");
define("_MI_IMLINKS_KEYLENGTH", "Vložte maximální počet znaků pro meta klíčová slova:");
define("_MI_IMLINKS_KEYLENGTHDSC", "Výchozí je 255 znaků");
define("_MI_IMLINKS_OTHERLINKS", "Zobrazovat ostatní odkazy vložené daným autorem?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Budou zobrazeny odkazy na další odkazy tohoto autora.");
define("_MI_IMLINKS_TOTALCHARS", "Nastavení počtu znaků pro popis odkazu");
define("_MI_IMLINKS_TOTALCHARSDSC", "Zvolte celkový počet znaků popisu při prohlížení seznamu odkazů kategorie.");
define("_MI_IMLINKS_QUICKVIEW", "Zobrazovat volby rychlého prohlížení?");
define("_MI_IMLINKS_QUICKVIEWDSC", "Vyberte možnost dle uvážení.");
define('_MI_IMLINKS_ICONS_CREDITS', "Icons by");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "Zobrazovat záložky Sociálních sítí?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Vyberte <em>Ano</em>, pokud chcete mít pod odkazy tyto ikony zobrazeny.");
define("_MI_IMLINKS_SHOWPAGERANK", "Zobrazovat Google PageRank™?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Výběrem <em>Ano</em> povolíte zobrazovat u odkazů Google PageRank™.");
define("_MI_IMLINKS_USERTAGDESCR", "Může uživatel vkládat Tagy:");
define("_MI_IMLINKS_USERTAGDSC", "Vyberte <em>Ano</em>, pokud má uživatel právo vkládat tagy.");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'Zobrazení datumu v administraci:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', 'Výchozí zobrazení datumu pro odkazy v administraci<br />Prostudujte <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manuál</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Používat adresu a volby map?");
define("_MI_IMLINKS_USEADDRESSDSC", "Výběrem <em>Ano</em> použijete vlastnosti pro adresy a mapy.");
define("_MI_IMLINKS_HEADERPRINT", "[VOLBY TISKU] tisk hlavičky stránky");
define("_MI_IMLINKS_HEADERPRINTDSC", "hlavička, která bude vytištěna pro každý odkaz.");
define("_MI_IMLINKS_LOGOURLPRINT", "[VOLBY TISKU] tisk loga");
define("_MI_IMLINKS_LOGOURLDSCPRINT", "Url adresa loga, které bude vytištěno na začátku stránky.");
define("_MI_IMLINKS_FOOTERPRINT", "[VOLBY TISKU] tisk patičky stránky");
define("_MI_IMLINKS_FOOTERPRINTDSC", "Patička, která bude vytištěna pro každý odkaz.");
define("_MI_IMLINKS_BNAME3", "imLinks sponsor statistics");
define("_MI_IMLINKS_VCARD_CREDITS", "vCard script by");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG", "Adresář obrázků vlajek států");
define("_MI_IMLINKS_FLAGIMGDSC", "Vložte URL bez zpětného lomítka.");
define("_MI_IMLINKS_CATEGORYIMGDSC", "Vložte URL bez zpětného lomítka.");
define("_MI_IMLINKS_SCREENSHOTSDSC", "Vložte URL bez zpětného lomítka.");
define("_MI_IMLINKS_MAINIMGDIRDSC", "Vložte URL bez zpětného lomítka.");
define("_MI_IMLINKS_USEAUTOSCRSHOT", "Používat automatické screenshoty");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC", "Na základě vložené url se screenshot automaticky vytvoří. Tato vlastnost nemusí fungovat na všech webech.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Auto screenshot by");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (all source code provided under <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisence)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4", "Odkazy - Tag Cloud");
define("_MI_IMLINKS_BNAME5", "Odkazy - Top Tagy");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "název (vzestupně)");
define("_MI_IMLINKS_TITLE_D", "název (sestupně)");
define("_MI_IMLINKS_RATING_A", "hodnocení (vzestupně)");
define("_MI_IMLINKS_RATING_D", "hodnocení (sestupně)");
define("_MI_IMLINKS_SUBMITTED_A", "datum vložení (vzestupně)");
define("_MI_IMLINKS_SUBMITTED_D", "datum vložení (sestupně)");
define("_MI_IMLINKS_POPULARITY_A", "oblíbené (vzestupně)");
define("_MI_IMLINKS_POPULARITY_D", "oblíbené (sestupně)");
define("_MI_IMLINKS_COUNTRY_A", "stát (vzestupně)");
define("_MI_IMLINKS_COUNTRY_D", "stát (sestupně)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Používat ve formulářích kontrolní kód?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Výběrem <em>Ano</em> se ve formulářím použije kontrolní antispamový kód.<br />Výchozí: <em>Ano</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Odkaz na podmínky glossary?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "Modul imGlossary musí být nainstalován a aktivní." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Název složky modulu imGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "Název složky, kde je nainstalován modul imGlossary.<br />Výchozí: <em>imglossary</em>" );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Vyberte zdroj pro automatické generování screenshotů:' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'Více informací:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Počet sloupců kategorií:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Vyberte počet sloupců zobrazených kategorií na webu.<br />Výchozí: <em>2</em>' );
define( '_MI_IMLINKS_RSSFEED', 'RSS zdroj' );
define( '_MI_IMLINKS_SHOWRATING', 'Zobrazovat vlastnosti hodnocení?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', 'Výběrem <em>Ano</em> se zobrazí volby hodnocení odkazů. Vyběrem <em>Ne</em> tyto možnosti schováte. Poznámka: Toto nastavení nemá nic společného s nastavením oprávnění.' );

// imLinks 1.00 RC-2
define( '_MI_IMLINKS_BNAME6', 'Random Link' );

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', 'Show category legend?' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'With this option you can turn on/off the legend explaining the different colours of the default category icons.' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'Select how a link should be opened?' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Select <em>Default</em> to have links opened in a new browser tab/window.<br />
									   Select <em>LightWindow</em> to have links opened in a <a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>.<br />
									   Select <em>GreyBox</em> to have links opened in a <a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>.' );
define( '_MI_IMLINKS_DEFAULT', 'Default' );

// imLinks 1.03
define( '_MI_IMLINKS_NICEURL', 'Use nice urls?' );
define( '_MI_IMLINKS_NICEURLDSC', 'Use nice urls for links.' );
define( '_MI_IMLINKS_TOMTOMAPI', 'TomTom API key:' );
define( '_MI_IMLINKS_TOMTOMAPIDSC', 'To have a <em>Add to TomTom</em> buttom displayed with the contact details of a link you need to enter your API key here.<br />A valid API key can be requested from add2TTsupport@tomtom.com' );
define( '_MI_IMLINKS_TOMTOMLOGO', 'Enter url for logo to display:' );
define( '_MI_IMLINKS_TOMTOMLOGODSC', 'Enter the url of the logo to display in the window <em>Starting TomTom Home</em>.<br />This logo will displayed together with the website name for the <em>Content provided by</em>.' );
?>