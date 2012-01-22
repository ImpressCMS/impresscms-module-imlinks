<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/german/modinfo.php
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
define("_MI_IMLINKS_NAME","imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC","Stellt eine Link-Sektion zur Verfügung, in der Benutzer Links einstellen und bewerten können.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1","Neueste WF-Links");
define("_MI_IMLINKS_BNAME2"," Die besten WF-Links");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1","Einsenden");
define("_MI_IMLINKS_SMNAME2","Populär");
define("_MI_IMLINKS_SMNAME3","Am besten bewertet");
define("_MI_IMLINKS_SMNAME4","Letzte Auflistungen");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX","Hauptindex");
define("_MI_IMLINKS_INDEXPAGE","Index Seitenverwaltung");
define("_MI_IMLINKS_MCATEGORY","Kategorieverwaltung");
define("_MI_IMLINKS_MLINKS","Linkverwaltung");
define("_MI_IMLINKS_MUPLOADS","Bilder hochladen");
define("_MI_IMLINKS_PERMISSIONS","Berechtigungen einstellen");
define("_MI_IMLINKS_BLOCKADMIN","Blockeinstellungen");
define("_MI_IMLINKS_MVOTEDATA","Abstimmungen");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Link-Populär-Zähler');
define('_MI_IMLINKS_POPULARDSC', 'Anzahl Klicks, bevor ein Link als populär zählt.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY","Links populär und neu:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Auswahl, wie ein Link im Listing angezeigt wird.");
define("_MI_IMLINKS_DISPLAYICON1", "Anzeige als Icons");
define("_MI_IMLINKS_DISPLAYICON2", "Anzeige als Text");
define("_MI_IMLINKS_DISPLAYICON3", "Nicht anzeigen");

define("_MI_IMLINKS_DAYSNEW","Links neu (Tage)links Days New:");
define("_MI_IMLINKS_DAYSNEWDSC","Anzahl Tage, wie lange ein Link als neu gilt.");
define("_MI_IMLINKS_DAYSUPDATED","Links updated (Tage):");
define("_MI_IMLINKS_DAYSUPDATEDDSC","Anzahl Tage, wie lange ein Link als neu upgedated gilt.");

define('_MI_IMLINKS_PERPAGE', 'Link-Listing-Zähler:');
define('_MI_IMLINKS_PERPAGEDSC', 'Anzahl Links, die in jedem Kategorielisting angezeigt werden.');

define('_MI_IMLINKS_USESHOTS', 'Bildschirmfotos anzeigen?');
define('_MI_IMLINKS_USESHOTSDSC', 'Wählen Sie "ja" um Bildschirmfotos für jeden Linkeintrag anzuzeigen');
define('_MI_IMLINKS_SHOTWIDTH', 'Bildbreite');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Bildbreite für das Bildschirmfoto');
define('_MI_IMLINKS_SHOTHEIGHT', 'Bildhöhe');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Bildhöhe für das Bildschirmfoto');
define('_MI_IMLINKS_CHECKHOST', 'Direktes Verlinken verbieten? (leeching)');
define('_MI_IMLINKS_REFERERS', 'Diese Seiten dürfen direkt auf Ihre Links verlinken <br />Aufzählung trennen mit #');
define("_MI_IMLINKS_ANONPOST","Anonyme Einsendungen:");
define("_MI_IMLINKS_ANONPOSTDSC","Dürfen anonyme Benutzer Links einsenden und Inhalte auf Ihre Website hochladen?");
define('_MI_IMLINKS_AUTOAPPROVE','Automatisch freigegebene Links');
define('_MI_IMLINKS_AUTOAPPROVEDSC','Ausgewählt=Alle Links werden ohne weitere Moderation automatisch freigegeben.');

define('_MI_IMLINKS_MAXFILESIZE','Dateigröße zum hochladen (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC','Legt die maximale Größe für die Datei zum hochladen fest.');
define('_MI_IMLINKS_IMGWIDTH','Bildbreite zum hochladen');
define('_MI_IMLINKS_IMGWIDTHDSC','Maximal erlaubte Bildbreite der hochgeladenen Bilder für die Links');
define('_MI_IMLINKS_IMGHEIGHT','Bildhöhe zum hochladen');
define('_MI_IMLINKS_IMGHEIGHTDSC','Maximal erlaubte Bildhöhe der hochgeladenen Bilder für die Links');

define('_MI_IMLINKS_UPLOADDIR','Verzeichnis zum hochladen (Ohne "/" am Ende!)');
define('_MI_IMLINKS_ALLOWSUBMISS','Einsendungen durch Benutzer:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC','Erlaubt registrierten Benutzern das Einsenden von neuen Links');
define('_MI_IMLINKS_SCREENSHOTS','Verzeichnis für Bildschirmfotos');
define('_MI_IMLINKS_CATEGORYIMG','Verzeichnis zum hochladen für die Kategoriebilder');
define('_MI_IMLINKS_MAINIMGDIR','Haupt- Bildverzeichnis');
define('_MI_IMLINKS_USETHUMBS', 'Benutzung von Vorschaubildern:');
define("_MI_IMLINKS_USETHUMBSDSC", "Unterstützte Dateitypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links benutzt Vorschaubilder für die Bilder. Wählen Sie 'No' um das Orginalbild zu benutzen, falls der Server diese Option nicht unterstützt.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Datumsformat:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Voreingestelltes Datumsformat für WF-links. <br />Siehe <a href="http://docs.php.net/manual/de/function.date.php" target="_blank">PHP-Handbuch</a>');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Haftungsausschluss vor Einsendung durch den Benutzer anzeigen?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Einsendebedingungen vor Einsendung durch den Benutzer anzeigen?');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Haftungsausschluss vor Verlinkung durch den Benutzer anzeigen?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Regeln für den Link vor dem öffne des Links anzeigen?');
define('_MI_IMLINKS_DISCLAIMER', 'Text des Haftungsausschlusses eingeben:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Text des Haftungsausschlusses für den Link:');
define('_MI_IMLINKS_SUBCATS', 'Unterkategorien:');
define("_MI_IMLINKS_SUBMITART", "Linkeinsendung:");
define("_MI_IMLINKS_SUBMITARTDSC", "Auswahl der Gruppen, die Links einsenden dürfen.");
define("_MI_IMLINKS_RATINGGROUPS", "Linkbewertung:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Auswahl der Gruppen, die Links bewerten dürfen.");
define("_MI_IMLINKS_IMGUPDATE", "Vorschaubilder erneuern?");
define("_MI_IMLINKS_IMGUPDATEDSC", "Falls ausgewählt wird jedes Vorschaubild erneuert, es sei denn das erste Bild wird ausschließlich benutzt. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Qualität der Vorschaubilder:");
define("_MI_IMLINKS_QUALITYDSC", "Niedrigste Qualität: 0 Höchste Qualität: 100");
define("_MI_IMLINKS_KEEPASPECT", "Seitenverhältnis beibehalten?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Admin Index Linkaufzählung:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Anzahl der neuen Links, die in der Moduladministration angezeigt werden.");
define("_MI_IMLINKS_ARTICLESSORT", "Voreinstellung Linkreihenfolge:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Legt die Voreinstellug für die Linkreihenfolge fest.");
define("_MI_IMLINKS_TITLE", "Titel");
define("_MI_IMLINKS_RATING", "Bewertung");
define("_MI_IMLINKS_WEIGHT", "Gewichting");
define("_MI_IMLINKS_POPULARITY", "Popularität");
define("_MI_IMLINKS_SUBMITTED2", "Datum der Einsendung");
define('_MI_IMLINKS_COPYRIGHT', 'Copyright-Hinweis:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Ausgewählt wird ein Copyright-Hinweis auf der Linkseite angezeigt.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Wählen Sie "ja" um Unterkategorien anzuzeigen. "Nein" versteckt die Unterkategorien');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Allgemein');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Allgemeine Optionen für Benachrichtigungen.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Benachrichtigungsoptionen geltend für die aktuelle Kategorie.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Link');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Benachrichtigungsoptionen geltend für den aktuellen Link.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'Neue Kategorie');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Benachrichtigen, wenn eine neue Kategorie angelegt wurde.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Benachrichtigung wenn eine neue Link-Kategorie angelegt wird.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neue Link-Kategorie');

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Anfrage zur Linkänderung');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Benachrichtigen bei jeder Anfrage zur Linkänderung.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Benachrichtigung bei jeder Anfrage für eine Leinkänderung.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Linkänderung angefragt');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Defekter Link gemeldet');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Benachrichtigung bei gemeldeten defekten Link.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Benachrichtigung wenn ein defekter Link gemeldet wurde.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Defekter Link gemeldet');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Link eingereicht');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeteten Link.');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Benachrichtigung bei neuen gemeldeteten Links, die auf Freigabe warten.');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link eingereicht');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'Neuer Link');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Benachrichtigung bei neuen Links.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Benachrichtigung, wenn ein neuer Link eingetragen wurde.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Neuer Link');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeteten Link in der aktuellen Kategorie.');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Benachrichtigung, wenn Links in der aktuellen Kategorie auf Freigabe warten.');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link eingereicht in Kategorie');

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'Neuer Link');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Benachrichtigung bei neuen Link in der aktuellen Kategorie.');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Benachrichtigung, wenn ein neuer Link in der aktuellen Kategorie eingetragen wurde.');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neuer Link in Kategorie');

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Link freigegeben');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Benachrichtigung wenn der Link freigegeben ist.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Benachrichtigung wenn der Link durch Moderatoren freigegeben ist');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Link freigegeben');

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"Das WF-Projects Team dankt den nachstehend aufgeführten Personen für Ihre Hilfe und Unterstützung während der Testphase des Moduls:<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Historie Fehlerbeseitigung");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (WF-Links) and its images are copyright to the WF-Projects team.<br /><br />You have the permission to copy, edit and change WF-Links to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the WF-Projects team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_IMLINKS_SELECTFORUM', "Forumauswahl:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Wählen Sie das von Ihnen installierte Forum aus für die Benutzung mit WF-Links.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (alle)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB Forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 Module");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "Land:" );
define('_MI_IMLINKS_EDITOR', "Editor für Adminbereich:");
define('_MI_IMLINKS_EDITORCHOICE', "Wählt den Editor für den Adminbereich aus. Falls Sie nur eine Xoops-Grundinstallation haben, können Sie nur DHTML und Compact auswählen");
define('_MI_IMLINKS_EDITORUSER', "Editor für Benutzer:");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Wählt den Editor für den Benutzerbereich aus. Falls Sie nur eine Xoops-Grundinstallation haben, können Sie nur DHTML und Compact auswählen");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_COMPACT", "Compact");
define("_MI_IMLINKS_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK", "FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI", "Koivi Editor");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extended");
define("_MI_IMLINKS_SORTCATS", "Sortierung der Kategorien nach:");
define("_MI_IMLINKS_SORTCATSDSC", "Legt fest, wie die Kategorien und Unterkategorien sortiert sind.");
define("_MI_IMLINKS_KEYLENGTH", "Eingabe der maximal möglichen Zeichen für meta keywords:");
define("_MI_IMLINKS_KEYLENGTHDSC", "Voreinstellung ist 255 Zeichen");
define("_MI_IMLINKS_OTHERLINKS", "Weitere Links des Einsenders?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Legt fest, ob auch andere Links des jeweiligen Einsenders angezeigt werden.");
define("_MI_IMLINKS_TOTALCHARS", "Maximale Anzahl Zeichen für Beschreibungen?");
define("_MI_IMLINKS_TOTALCHARSDSC", "Legt die max. Anzahl Zeichen für die Beschreibung in der Kategorieübersicht  fest.");
define("_MI_IMLINKS_QUICKVIEW", "Schnelle Voransicht (Option)?");
define("_MI_IMLINKS_QUICKVIEWDSC", "Schaltet die Option für die schnelle Voransicht ein oder aus.");
define("_MI_IMLINKS_ICONS_CREDITS", "Icons von");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "Zeige Social Bookmarks?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Wählen Sie ja falls Social Bookmark Icons unter dem Artikel angezeigt werden sollen.");
define("_MI_IMLINKS_SHOWPAGERANK", "Google PageRank anzeigen?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Wählen Sie ja falls der Google PageRank angezeigt werden soll.");
define("_MI_IMLINKS_USERTAGDESCR", "Benutzer können Tags einreichen:");
define("_MI_IMLINKS_USERTAGDSC", "Wählen Sie ja wenn Benutzer Tags einreichen dürfen.");

//Version 1.05 RC5
define("_MI_IMLINKS_DATEFORMATADMIN", "Datumformat Administration:");
define("_MI_IMLINKS_DATEFORMATADMINDSC", 'Standard Datumanzeige für WF-Links.<br />Siehe <a href="http://docs.php.net/manual/de/function.date.php" target="_blank">PHP-Handbuch</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Adressen- und Kartenfunktion nutzen?");
define("_MI_IMLINKS_USEADDRESSDSC","Wähle JA um die Adressenfunktion mit Landkarte zu aktivieren.");
define("_MI_IMLINKS_HEADERPRINT","[DRUCKOPTIONEN] Kopfzeile drucken");
define("_MI_IMLINKS_HEADERPRINTDSC","Kopfzeile wird gedruckt");
define("_MI_IMLINKS_LOGOURLPRINT","[DRUCKOPTIONEN] Logo-URL drucken");
define("_MI_IMLINKS_LOGOURLDSCPRINT","Logo-URL wird oben in der Seite gedruckt");
define("_MI_IMLINKS_FOOTERPRINT","[DRUCKOPTIONEN] Fusszeile drucken");
define("_MI_IMLINKS_FOOTERPRINTDSC","Fusszeile drucken");
define("_MI_IMLINKS_BNAME3","WF-Links Sponsoren Statistiken");
define("_MI_IMLINKS_VCARD_CREDITS","vCard-Script von");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG","Land Flagge Bild-Verzeichnis");
define("_MI_IMLINKS_FLAGIMGDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_IMLINKS_CATEGORYIMGDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_IMLINKS_SCREENSHOTSDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_IMLINKS_MAINIMGDIRDSC","Geben Sie die URL ohne abschließenden Schrägstrich ein");
define("_MI_IMLINKS_USEAUTOSCRSHOT","Autom. Screenshot benutzen");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC","Es wird auf Basis der angegeben URL automatisch ein Bildschirmfoto erstellt. This overrules uploaded screenshots and might not work for all websites.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Auto Screenshot benutzen von");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (all source code provided under <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisence)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4","Links Tag Cloud");
define("_MI_IMLINKS_BNAME5","Links Top Tags");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "Titel (A)");
define("_MI_IMLINKS_TITLE_D", "Titel (D)");
define("_MI_IMLINKS_RATING_A", "Bewertung (A)");
define("_MI_IMLINKS_RATING_D", "Bewertung (D)");
define("_MI_IMLINKS_SUBMITTED_A", "Datum der Einsendung (A)");
define("_MI_IMLINKS_SUBMITTED_D", "Datum der Einsendung (D)");
define("_MI_IMLINKS_POPULARITY_A", "Popularität (A)");
define("_MI_IMLINKS_POPULARITY_D", "Popularität (D)");
define("_MI_IMLINKS_COUNTRY_A", "Land (A)");
define("_MI_IMLINKS_COUNTRY_D", "Land (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Benutze den Verifizierungscode?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Wählen Sie <em>Ja</em> um die Verifizierung (Captcha) einzuschalten.<br />Voreinstellung: <em>Ja</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Link zum Glossar-Modul (imGlossar)?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "Das Modul muss installiert und aktiv sein, damit die Funktion genutzt werden kann." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Verzeichnisname des Glossar-Moduls:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "Geben Sie den Namen des Glossar Modules ein.<br />Voreinstellung: <em>imglossary</em>" );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Eine Quelle wählen zum automatischen Erstellen eines Bildschirmfotos' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'Weitere Informationen:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Anzahl der Kategoriespalten:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Wählen Sie die Anzahl der Kategoriespalten für die Modul-Startseite.<br />Voreinstellung: <em>2</em>' );
define( '_MI_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_MI_IMLINKS_SHOWRATING', 'Zeige Bewertungsfunktion?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', 'Wählen Sie <em>Ja</em> um die Bewertung zu aktivieren oder wählen Sie <em>Nein</em> um die Funktion zu verstecken. Hinweis: Diese Einstellung hat nichts mit den Berechtigungen zu tun.' );

// imLinks 1.00 RC-2
define( '_MI_IMLINKS_BNAME6', 'Zufälliger Link' );

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', 'Show category legend?' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'With this option you can turn on/off the legend explaining the different colours of the default category icons.' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'Select how a link should be opened?' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Select <em>Default</em> to have links opened in a new browser tab/window.<br />
									   Select <em>LightWindow</em> to have links opened in a <a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>.<br />
									   Select <em>GreyBox</em> to have links opened in a <a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>.' );
define( '_MI_IMLINKS_DEFAULT', 'Voreinstellung' );

// imLinks 1.03
define( '_MI_IMLINKS_NICEURL', 'Sprechende URLs?' );
define( '_MI_IMLINKS_NICEURLDSC', 'Benutzen von schönen URLs für die Links.' );
define( '_MI_IMLINKS_TOMTOMAPI', 'TomTom API Schlüssel:' );
define( '_MI_IMLINKS_TOMTOMAPIDSC', 'To have a <em>Add to TomTom</em> buttom displayed with the contact details of a link you need to enter your API key here.<br />A valid API key can be requested from add2TTsupport@tomtom.com' );
define( '_MI_IMLINKS_TOMTOMLOGO', 'Enter url for logo to display:' );
define( '_MI_IMLINKS_TOMTOMLOGODSC', 'Enter the url of the logo to display in the window <em>Starting TomTom Home</em>.<br />This logo will displayed together with the website name for the <em>Content provided by</em>.' );

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