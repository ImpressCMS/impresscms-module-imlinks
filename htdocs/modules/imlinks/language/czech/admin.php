<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/czech/admin.php
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
 
define( "_AM_IMLINKS_WARNINSTALL1", "<b>UPOZORNĚNÍ:</b> <u>Adresář</u> %s byl nalezen na serveru. <br />Tento adresář z bezpečnostních důvodů odstraňte." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>UPOZORNĚNÍ:</b> <u>Soubor</u> %s byl nalezen na serveru. <br />Tento soubor z bezpečnostních důvodů odstraňte." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>UPOZORNĚNÍ:</b> <u>Složka</u> %s nebyla na serveru nalezena. <br />Tato složka je povinná pro práci s modulem." );

define( "_AM_IMLINKS_MODULE_NAME", "Odkazy" );

define( "_AM_IMLINKS_BMODIFY", "Upravit" );
define( "_AM_IMLINKS_BCREATE", "Vytvořit" );
define( "_AM_IMLINKS_BAPPROVE", "Schválit" );
define( "_AM_IMLINKS_BIGNORE", "Ignorovat" );
define( "_AM_IMLINKS_BSAVE", "Uložit" );
define( "_AM_IMLINKS_BRESET", "Resetovat" );
define( "_AM_IMLINKS_BMOVE", "Přesunout odkazy" );
define( "_AM_IMLINKS_BUPLOAD", "Nahrát" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Smazat vybrané obrázky" );
define( "_AM_IMLINKS_DBERROR", "Chyba přístupu do databáze: Zašlete tuto chybu na [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]ImpressCMS Community Forum - Module Support[/url] fórum." );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Volby textu:" );
define( "_AM_IMLINKS_DISABLEXCODE", " Zakázat BBCodes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Zakázat obrázky" );
define( "_AM_IMLINKS_DISABLEBREAK", " Použít ICMS linebreak konverzi?" );
define( "_AM_IMLINKS_UPLOADFILE", "Odkaz úspěšně nahrán" );
// Admin Bread crumb
define( "_AM_IMLINKS_BUPDATE", "Aktualizovat modul" );
define( "_AM_IMLINKS_BINDEX", "Přehled" );
define( "_AM_IMLINKS_BPERMISSIONS", "Oprávnění" );
define( "_AM_IMLINKS_GOMODULE", "Spustit modul" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Kategorie: " );
define( "_AM_IMLINKS_SFILES", "Odkazy: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Vložené: " );
define( "_AM_IMLINKS_SMODREQUEST", "Upravené: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Správa kategorií" );
define( "_AM_IMLINKS_MLINKS", "Správa odkazů" );
define( "_AM_IMLINKS_MLISTBROKEN", "Seznam špatných odkazů" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Seznam Pingtime odkazů" );
define( "_AM_IMLINKS_INDEXPAGE", "Hlavní strana" );
define( "_AM_IMLINKS_MUPLOADS", "Nahrávání obrázků" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Vytvoření nové kategorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Upravit kategorii" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Přesun kategorie odkazů" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Název kategorie:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Chyba při přesunu odkazů: Nelze přesunout do této kategorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Chyba při přesunu odkazů: Nelze nalézt tuto kategorii" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Odkazy přesunuty a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Vytvořena nová kategorie a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Vybraná kategorie byla upravena a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Vybraná kategorie byla odstraněna a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "UPOZORNĚNÍ: Opravdu chcete smazat tuto kategorii a všechny obsažené odkazy a komentáře?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Před vložením nového odkazu musíte nejprve vytvořit kategorii" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Oprávnění přístupu do kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Vyberte skupiny, které mají práva přístupu do kategorie.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Název kategorie:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Váha kategorie:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Nastavit jako podkategorii:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Obrázek kategorie:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Popis kategorie:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Přehled kategorie:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Hlavní strana byla upravena a databáze úspěšně aktualizována!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Informace o hlavní straně modulu" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Úprava hlavní strany" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Vyberte obrázek hlavní strany:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Název hlavní strany:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Hlavička hlavní strany:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Zarovnání hlavičky:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Patička hlavní strany:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Zarovnání patičky:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "zarovnat vlevo" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "zarovnat na střed" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "zarovnat vpravo" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Správce oprávnění" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>POZNÁMKA:</b> Uvědomte si prosím, že aby oprávnění fungovala správně, musí být také patřičně nastavena centrální oprávnění v administraci skupin uživatelů.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Oprávnění kategorií" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Vyberte kategorie, které má každá skupina právo prohlížet" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Nelze nastavit oprávnění: Ještě nebyla vytvořena žádná kategorie!" );

/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Obrázek byl úspěšně nahrán do cílového místa" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Chyba: Pro nahrání nebyl vybrán žádný odkaz. Zkuste znovu!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Tento obrázek již v umístění existuje!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Odkaz byl smazán." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Chyba při mazání odkazu: Odkaz nebyl na serveru nalezen." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Chyba při mazání odkazu: Pro smazání nebyl vybrán žádný odkaz." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "UPOZORNĚNÍ: Opravdu chcete smazat tento odkaz obrázku?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Stav serveru" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Informace načtené z nastavení PHP ini:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Safe mode stav: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register globals: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Stav pro nahrávání: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Oprávnění pro max. velikost nahrávaných souborů: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Oprávnění pro maximální velikost příspěvku: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (toto může být problém)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "GD knihovna: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "GD knihovna - verze: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Povoleno</b> (miniatury dostupné)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Zakázáno</b> (miniatury nedostupné)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>OFF</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>ON</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Kategorie obrázku" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Screenshot obrázky" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Hlavní obrázky" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Cesta obrázků kategorie" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Cesta pro screenshoty" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Cesta pro hlavní obrázky" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Nahrát obrázek: " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Cesta pro nahrání: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "URL pro nahrání: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Vyberte cíl pro nahrání:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Zobrazit vybraný obrázek:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Nahrát nový obrázek do vybraného cíle:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Souhrný přehled" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Publikované odkazy:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Název odkazu" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Vložil" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Stav" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Publikováno" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Publikováno" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Ukončení" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Datum nenastaveno" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Datum vložení" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Akce" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "OZNÁMENÍ: Nejsou zde žádné odkazy splňující daná kritéria" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Strana:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>Detaily hlavní strany modulu.</li><li>Můžete lehce změnit logo, hlavičku, patičku a způsob zobrazení</li></ul><br />Poznámka: Vybrané logo bude zobrazeno v celém modulu.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Čas odezvy" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Vložené odkazy" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Informace o čekajících odkazech" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Odkazy čekající na ověření: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Schválit</b> nový odkaz bez kontroly." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Upravit</b> nový odkaz a poté schválit." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Smazat</b> nový odkaz." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "Nejsou zde žádné odkazy splňující daná kritéria" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "Data nového odkazu byla vytvořena a databáze úspěšně aktualizována" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATING", "Hodnocení" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Žádná hlasování anonymních uživatelů" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Hlasovací data byla odstraněna." );
define( "_AM_IMLINKS_VOTE_NOVOTES", "Žádné hlasy uživatelů k zobrazení" );

define( "_AM_IMLINKS_VOTE_TOTALRATE", "Celkem hlasů" );

// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Celkem požadavků na úpravu: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Upravené odkazy" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Informace o upravených odkazech" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Název" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Original poster: " );
define( "_AM_IMLINKS_MOD_DATE", "Vloženo" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Nejsou zde žádné požadavky splňující daná kritéria" );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Submitter: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Vložil" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Navrhované detaily odkazu" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Původní detaily odkazu" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Požadavek na změnu byl odstraněn z databáze" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Vybraný odkaz byl upraven a databáze úspěšně aktualizována" );

// Link management
define( "_AM_IMLINKS_LINK_ID", "ID odkazu: " );
define( "_AM_IMLINKS_LINK_IP", "Jeho IP adresa: " );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Informace o úpravách odkazu" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Vytvoření nového odkazu" );
define( "_AM_IMLINKS_LINK_TITLE", "Název odkazu: " );
define( "_AM_IMLINKS_LINK_DLURL", "URL odkazu: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Popis odkazu: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Kategorie odkazu: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", "Nastavit odkaz na offline?" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", "Nastavit stav odkazu na aktualizovaný?" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Odkaz na screenshot: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Přidat <em>diskuzi ve fóru</em>?" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Datum ukončení odkazu:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Odstranit datum ukončení:" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Nastavit datum/čas ukončení" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Nastavte datum publikování: </b>" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Expire date set: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Nastavte datum ukončení: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Smazat hlášení o špatných odkazech?<br /><br /><span style='font-weight: normal;'>Pokud vyberete <em>Ano</em> hlášení budou automaticky smazána a tím potvrzeno, že odkazy fungují.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "Screenshot musí být platný odkaz obrázku v adresáři %s (např. shot.gif). Nechte prázdné, pokud je zvoleno no image." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Schválit odkaz:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Nový odkaz byl vytvořen a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Vybraný odkaz byl upraven a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Opravdu chcete odstranit vybraný odkaz?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Odkaz %s byl úspěšně odstraněn z databáze!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Odkaz byl schválen a databáze úspěšně aktualizována" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Create News story from link</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Submit new link as News item?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Select News category to submit News:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "News title:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leave Blank to use link title</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Odkaz vložil: " );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Špatné: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Špatné odkazy" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Hlášení ignorováno a úspěšně odstraněno z databáze!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Stav vzetí na vědomí byl změněn a databáze aktualizována!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Změněn stav potvrzení a databáze aktualizována!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Informace o špatných odkazech" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Čekající požadavky na kontrolu:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignorovat</b> a pouze smazat požadavek." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Smazat</b> data odkazu a požadavku." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Upravit</b> odkaz a tím vyřešit problém." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Vzít na vědomí" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Potvrdil" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Oznámil" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Vložil" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Datum vložení" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Akce" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "Nejsou zde žádná hlášení o špatných souborech" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "odkaz odstraněn z databáze a požadavek také" );

// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Upravit položku" );
define( "_AM_IMLINKS_ICO_DELETE", "Smazat položku" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Approved" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Not approved" );

define( "_AM_IMLINKS_ICO_LINK", "Related link" );
define( "_AM_IMLINKS_ICO_URL", "Add related URL" );
define( "_AM_IMLINKS_ICO_APPROVE", "Approve" );
define( "_AM_IMLINKS_ICO_STATS", "Stats" );
define( "_AM_IMLINKS_ICO_VIEW", "View this item" );

define( "_AM_IMLINKS_ICO_ACK", "Broken report acknowledged" );
define( "_AM_IMLINKS_ICO_REPORT", "Acknowledge broken report?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Broken report confirmed" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Confirm broken report?" );

// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Přidat alternativní kategorii" );
define( "_AM_IMLINKS_MALTCAT", "Správa alternativních kategorií" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Správa alternativních kategorií" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Alternativní kategorie mohou být přidávány a odstraňovány pomocí tohoto formuláře.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Alternativní kategorie byla uložena!' );

define( "_AM_IMLINKS_LISTBROKEN", "Displays links that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the link does exist first before any action taken." );
define( "_AM_IMLINKS_PINGTIMES", "Zobrazuje první odhadované kolo ping time pro každý odkaz.<br /><br />Poznámka: Tyto výsledky nemusí být přesné a berte je jako hrubý průvodce." );

define( "_AM_IMLINKS_NO_FORUM", "Žádné fórum nebylo vybráno" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Oprávnění pro hodnocení" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Vyberte skupiny, které mohou hodnotit odkazy ve vybraných kategoriích." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Automatické schvalování odkazů" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Vyberte skupiny, u kterých budou nové odkazy automaticky schváleny bez další kontroly." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Oprávnění pro vkládání" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Vyberte skupiny, které mohou vkládát nové odkazy do vybraných kategorií." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Skupiny moderátorů" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Vyberte skupiny, které mají moderátorská privilégia pro vybrané kategorie." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "Stát:" );
define( "_AM_IMLINKS_KEYWORDS", "Klíčová slova:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Klíčová slova by měla být oddělena čárkou (slovo1, slovo2, slovo3, ..)" );
define( "_AM_IMLINKS_CATTITLE", "Kategorie" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_LINK_BINGMAP", "Bing Maps:" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Check map" );
define( "_AM_IMLINKS_STREET1", "Ulice:" );
define( "_AM_IMLINKS_STREET2", "Upřesnění (volitelné):" );
define( "_AM_IMLINKS_TOWN", "Město:" );
define( "_AM_IMLINKS_STATE", "Oblast/kraj:" );
define( "_AM_IMLINKS_ZIPCODE", "PSČ:" );
define( "_AM_IMLINKS_TELEPHONE", "Telefon:" );
define( "_AM_IMLINKS_FAX", "Fax:" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>UPOZORNĚNÍ:</b> <u>Složka</u> %s nemá práva zápisu. <br />Tato složka musí být zapisovatelná (CHMOD 777)." );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP:" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Odkaz vložil: " );
define( "_AM_IMLINKS_MOBILE", "Mobil:" );
define( "_AM_IMLINKS_CATSPONSOR", "Vyberte sponzora kategorie:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "Pokud vyberete ID banneru, sponzor banneru nebude uložen!" );
define( "_AM_IMLINKS_BANNERID", "Vyberte ID banneru:" );
define( "_AM_IMLINKS_BANNERIDDSC", "Pokud vyberete sponzora banneru, ID banneru nebude uloženo!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "DIČ:" );
define( "_AM_IMLINKS_VATWIKI", "Pro více informací navštivte <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedii</a>" );
define( "_AM_IMLINKS_EMAIL", "Email:" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Expired" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'bez odezvy' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Formulář adresy</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Různá nastavení odkazu</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "You either did not choose a file to upload or the server has insufficient read/writes to upload this file!" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Invalid file size" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Filename is empty" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "No file uploaded, this is a error" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "There was a problem with your upload. Error: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "The file you are trying to upload is too big. Error: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "The file you are trying to upload is too big. Error: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "The file you are trying upload was only partially uploaded. Error: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "No file selected for upload. Error: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "No file selected for upload. Error: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "Upload directory not set" );
define( "_AM_IMLINKS_FAILOPENDIR", "Failed opening directory: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Failed opening directory with write permission: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "File Size: %u. Maximum size allowed: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "File width: %u. Maximum width allowed: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "File height: %u. Maximum height allowed: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "MIME type not allowed: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Failed uploading file: " );
define( "_AM_IMLINKS_FILE", "Soubor " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " already exists on the server. Please rename this file and try again.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Errors returned while uploading</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " neexistuje!" );
define( "_AM_IMLINKS_INFORMATION", "Informace o odkazu" );
define( "_AM_IMLINKS_HITS", "Navštíveno: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Zobrazovat poslední odkazy?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "Kolik odkazů chcete zobrazovat?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 tuto volbu vypne." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Dokumentace" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "zobrazit no image" );
define( "_AM_IMLINKS_NOSELECTION", "žádný výběr" );
define( "_AM_IMLINKS_NOFILESELECT", "žádný soubor" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', 'Pokud nebude stát zvolen, nebude zobrazena adresa.' );
define( '_AM_IMLINKS_MAPDSC', 'Kliknutím na ikonu se otevře nová záložka prohlížeče nebo okno zobrazující mapu.<br />Výchozí: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Kliknutím na ikonu se daná url otevře v nové záložce nebo okně prohlížeče.<br />Můžete použít pro kontrolu url.' );
define( '_AM_IMLINKS_STREETTWODSC', 'Tato položka je volitelná. Pokud ji necháte prázdnou, nebude použita.' );
define( '_AM_IMLINKS_STATEDSC', 'Vložte stát, oblast, provincii apod. Pokud necháte položku prázdnou, nebude použita.' );
define( '_AM_IMLINKS_EMAILDSC', 'Vložte emailovou adresu jako:<br />- jmeno@domena.cz<br />- mailto:jmeno@domena.cz' );
define( '_AM_IMLINKS_CLONELINK', 'Klonovat odkaz' );
define( '_AM_IMLINKS_ICO_CLONE', 'Klonovat položku' );
define( '_AM_IMLINKS_RSSFEED', 'RSS zdroj' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'Konfigurace RSS zdroje' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'Zde můžete konfigurovat pro odkazy RSS zdroj.<br />Pro více informací navštivte <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> stránku.' );
define( '_AM_IMLINKS_RSSACTIVE', 'Aktivovat RSS zdroj' );
define( '_AM_IMLINKS_RSSACTIVEDSC', 'Výběrem <em>Ano</em> zapnete pro odkazy RSS zdroj.' );
define( '_AM_IMLINKS_RSSTITLE', 'Název RSS zdroje' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'Jméno kanálu. To jak se lidé odvolávají na váš zdroj. Pokud Váš web obsahuje stejné informace jako Váš RSS soubor, název kanálu by měl být stejný jako název Vašeho webu.' );
define( '_AM_IMLINKS_RSSLINKS', 'Odkaz na RSS zdroj' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'URL webu korespondující na kanál.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'Popis RSS zdroje' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'Fráze nebo popis kanálu.' );
define( '_AM_IMLINKS_RSSIMAGE', 'Obrázek RSS zdroje' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'Specifický GIF, JPEG nebo PNG obrázek, který je zobrazen s kanálem.' );
define( '_AM_IMLINKS_RSSWIDTH', 'Šířka obrázku RSS zdroje' );
define( '_AM_IMLINKS_RSSWIDTHDSC', 'Šířka obrázku v pixelech.<br />Maximální hodnota je 144.' );
define( '_AM_IMLINKS_RSSHEIGHT', 'Výška obrázku RSS zdroje' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', 'Výška obrázku v pixelech.<br />Maximální hodnota je 400.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'Název obrázku RSS zdroje' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', 'Popisuje obrázek, je použito jako ALT atribut HTML &#60;img&#62; tagu, když je kanál poskytnut v HTML.' );
define( '_AM_IMLINKS_RSSIMGLINK', 'Odkaz obrázku RSS zdroje' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'Jedná se o URL webu, a obrázek slouží jako odkaz na web. (Poznámka, v praxi obrázek &#60;title&#62; a &#60;link&#62; by měli mít stejné hodnoty jako &#60;title&#62; a &#60;link&#62; kanálu).' );
define( '_AM_IMLINKS_RSSTTL', 'Doba uskladnění RSS zdroje' );
define( '_AM_IMLINKS_RSSTTLDSC', 'Jedná se o dobu uskladnění kanálu. Číslo v minutách určuje, jak dlouho může být kanál cachován před obnovou ze zdroje.' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'Správce RSS zdroje' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Emailová adresa na osobu spravující technické náležitosti kanálu.' );
define( '_AM_IMLINKS_RSSEDITOR', 'Správce obsahu RSS zdroje' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Emailová adresa na osobu odpovědnou za obsah kanálu.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'Kategorie RSS zdroje' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Specifikujte jednu nebo více kategorií, do kterých kanál náleží. Platí stejná pravidla jako &#60;item&#62;-level category element.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'Generátor RSS zdroje' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'Řetězec určuje program použitý pro generování programu.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'Copyright RSS zdroje' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'Copyright pro obsah kanálu.' );
define( '_AM_IMLINKS_RSSTOTAL', 'Celkem odkazů RSS zdroje' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'Celkový počet odkazů zobrazovaných RSS zdrojem.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'Databáze byla úspěšně aktualizována' );
define( '_AM_IMLINKS_RSSOFFLINE', 'Název zprávy pro vypnutý RSS zdroj' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', 'Vložte název pro zprávu, když je RSS zdroj neaktivní.' );
define( '_AM_IMLINKS_RSSOFFMSG', 'Zpráva pro vypnutý RSS zdroj' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'Vložte vysvětlení, proč je RSS zdroj neaktivní.' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'RSS zdroj byl deaktivován.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'RSS zdroj byl deaktivován z důvodu údržby.' );
define( '_AM_IMLINKS_RSSCLICKSUBMIT', 'Tlačítkem potvrdit uložíte všechna data formuláře do databáze!' );
define( '_AM_IMLINKS_COPYRIGHT', 'Copyright' );

// Version 1.01 RC-1
define( '_AM_IMLINKS_NOREPLY', 'No reply' );

// imLinks 1.03
define( '_AM_IMLINKS_NICEURL', 'Alternative title for url:' );
define( '_AM_IMLINKS_NICEURLDSC', 'Enter an alternative title for the link to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the link will be used.' );
define( '_AM_IMLINKS_TOMTOM', 'Add to TomTom' );
define( '_AM_IMLINKS_TOMTOMDSC', 'Enter the latitude and longitude of the address entered above.<br />You can find the geographic position of the address by using the website <a href="http://itouchmap.com/latlong.html" target="_blank">iTouchMap.com</a><br />Geographic latitude/longitude of the location should be in decimal degrees. May be negative; "N"/"S"/"W"/"E" suffix is not accepted. Default geodetic datum is WGS-84.<br />The geographic position should be entered as follows:<br />- Latitude: 57.2355591<br />- Longitude: -2.3535921' );
define( '_AM_IMLINKS_TOMTOMLONG', 'Enter longitude:' );
define( '_AM_IMLINKS_TOMTOMLAT', 'Enter latitude:' );
define( '_AM_IMLINKS_MOD_TTLAT', 'TomTom Latitude:' );
define( '_AM_IMLINKS_MOD_TTLONG', 'TomTom Longitude:' );

// Version 1.1
define( '_AM_IMLINKS_MSG_OFFLINE', 'Link was set Offline successfully.' );
define( '_AM_IMLINKS_MSG_ONLINE', 'Link was set Online successfully.' );
define( '_AM_IMLINKS_ICO_WAITING','Submitted, waiting approval' );

// Version 1.12
define( "_AM_IMLINKS_LINK_FILESSTATUSDSC", "Odkaz nebude pro uživatele viditelný." );
define( "_AM_IMLINKS_LINK_SETASUPDATEDDSC", "U odkazu bude zobrazena ikona aktualizovaný." );
define( '_AM_IMLINKS_SCRSHOTENLARGE', 'Click image to enlarge' );

// Version 1.13
define( '_AM_IMLINKS_SEARCHTITLE', 'Search title' );
define( '_AM_IMLINKS_NOTPUBLISHED', 'Not Published' );
define( '_AM_IMLINKS_IPAGE_LETTERS', 'Show letters:' );
define( '_AM_IMLINKS_IPAGE_LETTERSDSC', 'Show letters above each page.' );
define( '_AM_IMLINKS_IPAGE_BUTTONS', 'Show buttons:' );
define( '_AM_IMLINKS_IPAGE_BUTTONSDSC', 'Show buttons like Submit, Popular and Latest Listing above each page.' );
?>