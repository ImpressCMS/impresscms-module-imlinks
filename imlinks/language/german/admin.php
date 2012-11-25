<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/german/admin.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since		1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

define( "_AM_IMLINKS_WARNINSTALL1", "<b>WARNUNG:</b> Verzeichnis %s existiert auf dem Server! <br />Aus Sicherheitsgründen sollte das Verzeichnis gelöscht werden." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>WARNUNG:</b> Datei %s existiert auf dem Server! <br />Aus Sicherheitsgründen sollte das Verzeichnis gelöscht werden." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>WARNUNG:</b> Ordner %s ist auf dem Server nicht vorhanden. <br />Dieser Ordner wird von WF-Links benötigt." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Ändern" );
define( "_AM_IMLINKS_BCREATE", "Anlegen" );
define( "_AM_IMLINKS_BAPPROVE", "Freigeben" );
define( "_AM_IMLINKS_BIGNORE", "Ignorieren" );
define( "_AM_IMLINKS_BSAVE", "Speichern" );
define( "_AM_IMLINKS_BRESET", "Zurücksetzen" );
define( "_AM_IMLINKS_BMOVE", "Links bewegen" );
define( "_AM_IMLINKS_BUPLOAD", "Hochladen" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Ausgewähltes Bild löschen" );
define( "_AM_IMLINKS_DBERROR", "Datenbank Zugriffsfehler: Bitte diesen Fehler an die [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]ImpressCMS Community Forum - Module Support[/url] weiterleiten" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Text Optionen:" );
define( "_AM_IMLINKS_DISABLEXCODE", " BB-Codes abschalten" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Bilder abschalten" );
define( "_AM_IMLINKS_DISABLEBREAK", " autom. Zeilenumbruch verwenden?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link erfolgreich hochgeladen" );
define( "_AM_IMLINKS_NOMENUITEMS", "Keine Menueinträge innerhalb des Menüs" );
// Admin Bread crumb
define( "_AM_IMLINKS_BUPDATE", "Modul Update" );
define( "_AM_IMLINKS_BINDEX", "Hauptindex" );
define( "_AM_IMLINKS_BPERMISSIONS", "Berechtigungen" );
define( "_AM_IMLINKS_GOMODULE", "Zum Modul" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Kategorie: " );
define( "_AM_IMLINKS_SFILES", "Links: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Eingesandt: " );
define( "_AM_IMLINKS_SMODREQUEST", "Geändert: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Kategorieverwaltung" );
define( "_AM_IMLINKS_MLINKS", "Linkverwaltung" );
define( "_AM_IMLINKS_MLISTBROKEN", "Liste der defekten Links" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Anzeige der Links Pingtime" );
define( "_AM_IMLINKS_INDEXPAGE", "Index Seitenverwaltung" );
define( "_AM_IMLINKS_MVOTEDATA", "Bewertungen" );
define( "_AM_IMLINKS_MUPLOADS", "Bild hochladen" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Neue Kategorie erstellen" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Kategorie ändern" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Links aus Kategorie verschieben" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Kategorietitel:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Verschieben fehlgeschlagen: In diese Kategorie kann nicht verschoben werden!" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Verschieben fehlgeschlagen: Kategorie konnte nicht gefunden werden!" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Links verschoben und Kategorie gelöscht" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Neue Kategorie erstellt und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Ausgewählte Kategorie geändert und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Ausgewählte Kategorie gelöscht und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "WARNUNG: Soll die gewählte Kategorie mit ALLEN Dateien und Kommentaren wirklich gelöscht werden?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Sie müssen zuerst eine Kategorie anlegen, bevor Sie einen Link hinzufügen können" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Zugriffsrechte Kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wählen Sie die Benutzergruppe, die Zugrifsrechte auf die Kategorie haben soll.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Zugriffsrechte Unterkategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to submit new links to this category.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Zugriffsrechte Moderation:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to moderate this category.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Kategorietitel:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Kategoriegewichtung:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Setze als Unterkategorie von:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Kategoriebild auswählen:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Kategoriebeschreibung:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Kategoriezusammenfassung:" );

//Index page Defines
define( "_AM_IMLINKS_IPAGE_UPDATED", "Indexseite geändert und Datenbank erfolgreich aktualisiert!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Indexseite Information" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Indexseite ändern" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Indexbild wählen:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Indextitel:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Headerbereich Indexseite:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Ausrichtung Headerbereich Indexseite :" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Fußbereich Indexseite:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Ausrichtung Fußbereich Indexseite :" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Linksbündig" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Mittig" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Rechtsbündig" );

//Permissions defines
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Berechtigungsverwaltung" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>Beachte:</b>, Bitte beachten Sie, daß obwohl die Berechtigungen hier korrekt gesetzt sein mögen, eine Gruppe dennoch keine Ansicht- und/oder Zugriffsrechte haben kann wenn entsprechende Modul-Rechte fehlen. Diese Rechte können unter <b>System > Gruppen</b> eingestellt werden. Dort die entsprechende Gruppe auswählen und die passenden Rechte setzen.</div>");
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Kategorieberechtigungen" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Kategorien auswählen, die jede Gruppe sehen kann" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Berechtigungen können nicht gesetzt werden: Es sind noch keine Kategorien erstellt!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Linkberechtigungen" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Berechtigungen können nicht gesetzt werden: Es wurden noch keine Links erstellt!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Wählen Sie die Links für die Gruppe zum Anzeigen aus." );

//Upload defines
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Bild erfolgreich auf den Server hochgeladen" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Fehler: Kein Link zum hochladen ausgewählt. Bitt versuchen Sie es noch einmal!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Bild existiert bereits im Upload-Ordner!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Link wurde gelöscht." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Fehler beim löschen des Links: Link nicht auf dem Server vorhanden." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Fehler beim löschen des Links: Kein Link zum löschen ausgewählt." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "WARNUNG: Soll das Bild wirklich gelöscht werden?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Server Status" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Information aus der PHP ini :</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Safe Mode Status: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Server Uploads Status: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Erlaubte max. Uploadgröße: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Erlaubte max. Post-Größe: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Kann zu Problemen führen)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "GD Library Support: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "GD Library Version: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Eingeschaltet</b> (Vorschaubilder verfügbar)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Abgeschaltet</b> (Vorschaubilder nicht verfügbar)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>Aus</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>An</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Kategoriebilder" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Bildschirmfotos" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Hauptbilder" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Pfad zu den Kategoriebildern" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Pfad zu den Bildschirmfotos" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Pfad zu den Hauptbildern" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Bild hochladen: " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Pfad zum hochladen: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "URL-Pfad zum hochladen: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Zielordner zum Hochladen auswählen:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Ausgewähltes Bild anzeigen:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Neues Bild zum gewählten Ordner hochladen:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Zusammenfassung Modul Administration" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Publizierte Links:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Auto ublizierte Links:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Auto auslaufende Links:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Auslaufende Links:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Offline Links:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Link Titel" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Veröffentlicht von" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Onlinestatus" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Erstellt" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Veröffentlicht" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Abgelaufen" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Datum nicht gesetzt" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Einsendedatum" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Aktion" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "BEACHTE: Keine Links vorhanden, die diese Bedingung erfüllen" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Seite:<b> " );
define( "_AM_IMLINKS_MINDEX_PAGEINFOTXT", "&bull;&nbsp;imLinks Übersichtsseite Details.<br />&bull;&nbsp;Sie können hier das Logo, den Kopfbereich, die Hauptüberschrift und den Fußtext leicht Ihren Wünschen anpassen.<br /><br />Anmerkung: Das Logo wird bei jedem Seitenaufruf von WF-links angezeigt." );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Antwortzeit" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Eingesandte Links" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Information über wartende Links" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Links die auf Überprüfung warten: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Freigabe</b> Information über neue Links ohne Überprüfung." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Ändern</b> Information über neue Links mit anschließender Freigabe." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Löschen</b> Information über neue Links." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "Keine Links vorhanden, die diese Bedingung erfüllen" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "Neuer Link erstellt und Datenbank erfolgreich aktualisiert" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Bewertungsinformation" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Gesamtbewertung: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Angemeldete Benutzer bewerten: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Gäste bewerten: %s" );
define( "_AM_IMLINKS_VOTE_USER", "Benutzer" );
define( "_AM_IMLINKS_VOTE_IP", "IP Adresse" );
define( "_AM_IMLINKS_VOTE_DATE", "Hinzugefügt" );
define( "_AM_IMLINKS_VOTE_RATING", "Bewertung" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "Keine Bewertungen durch angemeldete Benutzer" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Keine Bewertungen durch anonyme Benutzer" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Bewertungen gelöscht." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Linktitel" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Bewertungsinformationen" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "Keine Bewertung zum anzeigen" );
define( "_AM_IMLINKS_VOTE_DELETE", "Keine Bewertung vorhanden" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Löschen</b> der ausgewählten Bewertungen von der Datenbank." );
define( "_AM_IMLINKS_VOTEDELETED", "Ausgewählte Bewertungen gelöscht" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Durchschnittliche Bewertung von Benutzer" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Gesamtbewertungen" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Höchste Bewertung" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Kleinste Bewertung" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Oft Bewertet für" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Wenig Bewertet für" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Benutzer mit hohen Bewertungen" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Angemeldete Benutzer" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Anonyme Benutzer" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Gesamte Änderungsanfragen: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Geänderte Links" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Geänderte Linkinformation" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Titel" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Originaleinsender: " );
define( "_AM_IMLINKS_MOD_DATE", "Eingesandt" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Es sind keine Anfragen vorhanden, die dieses Kriterium erfüllen" );
define( "_AM_IMLINKS_MOD_TITLE", "Linktitel: " );
define( "_AM_IMLINKS_MOD_LID", "Link ID: " );
define( "_AM_IMLINKS_MOD_CID", "Kategorie: " );
define( "_AM_IMLINKS_MOD_URL", "Link-URL: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Veröffentlicht durch: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Forum: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Bildschirmausschnitt: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Homepage: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Homepage Titel: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Bildschirmausschnitt: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Beschreibung: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Einsender: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Einsender" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Vorgeschlagene Linkdetails" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Orginal Linkdetails" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Änderungsanfrage aus Datenbank entfernt" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Ausgewählter Link geändert und Datenbank erfolgreich aktualisiert" );
define( '_AM_IMLINKS_MOD_VIEW', 'Ansicht' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "Link ID: " );
define( "_AM_IMLINKS_LINK_IP", "IP - Addresse des Einsenders: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Allowed Admin Link Extensions</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Ändern der Link Information" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Neuen Link erstellen" );
define( "_AM_IMLINKS_LINK_TITLE", "Link Titel: " );
define( "_AM_IMLINKS_LINK_DLURL", "Link URL: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Linkbeschreibung: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Hauptkategorie des Links: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " Link offline setzen?" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Link Status setzen als Updated?" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Bildschirmfoto des Links: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Diskussion im Forum hinzufügen?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Link Veröffentlichungsdatum:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Ablaufdatum:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Veröffentlichungsdatum entfernen:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Ablaufdatum entfernen:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Veröffentlichungsdatum setzen: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Setzen von Date/Zeit des Veröffentlichungsdatum" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Ablaufdatum und Zeit setzen" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Veröffentlichungsdatum setzen: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Neues Veröffentlichungsdatum setzen: </b><br />Veröffentlichung:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Veröffentlichungsdatum setzen: </b><br />Veröffentlichung am:" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Ablaufdatum setzen: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Ablaufdatum setzen: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Bericht über defekte Links löschen?<br /><br /><span style='font-weight: normal;'>Wenn Sie <b>YES</b> wählen wird der Bericht automatisch gelöscht. Überprüfen Sie, ob der Link wieder korrekt arbeitet.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "Das Bildschirmfoto muss im %s Ordner vorhanden sein (z.B. shot.gif). Leer lassen, wenn kein Bild vorhanden ist." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Link freigeben:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Neuer Link erstellt und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Gewählter Link geändert und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Wollen Sie den gewählten Link wirklich löschen?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Link %s erfolgreich aus der Datenbank entfernt!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Link freigegeben und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>News Story aus Link erstellen</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Artikel aus neuem Link erstellen?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Newskategorie für Artikel auswählen:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "News Titel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leer lassen, um den Linktitel zu benutzen</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Link veröffentlicht von: " );

//Broken links defines
define( "_AM_IMLINKS_SBROKENSUBMIT", "Defekt: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Bericht über defekte Links" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Bericht über defekte Links ignoriert und erfolgreich aus der Datenbank entfernt!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Quittierungsstatus geändert und Datenbank aktualisiert!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Bestätigungsstatus geändert und Datenbank aktualisiert!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Information über defekte Links-Berichte" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Wartende Berichte über defekte Links:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignoriere</b> den Bericht und lösche nur den Bericht." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Lösche</b> die betroffenen Linkdaten und den Report." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Ändere</b> den Link, um das Problem zu beseitigen." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Quittiert</b> Set Acknowledged state of broken file report." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Bestätigt</b> Set confirmed state of broken link report." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Quittiert" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Bestätigt" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Reporter" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Einsender" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Einsendedatum" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Aktion" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "Keine Berichte über defekte Liks vorhanden, die dieses Kriterium erfüllen" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Link und Bericht aus der Datenbank entfernt" );

// About defines
define( "_AM_IMLINKS_BY", "von" );

// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Eintrag ändern" );
define( "_AM_IMLINKS_ICO_DELETE", "Eintrag löschen" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Eintrag bearbeiten" );
define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Bestätigt" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Nicht bestätigt" );
define( "_AM_IMLINKS_ICO_LINK", "Verwandter link" );
define( "_AM_IMLINKS_ICO_URL", "Verwandte URL hinzufügen" );
define( "_AM_IMLINKS_ICO_APPROVE", "Bestätigen" );
define( "_AM_IMLINKS_ICO_STATS", "Statistiken" );
define( "_AM_IMLINKS_ICO_VIEW", "Eintrag anzeigen" );
define( "_AM_IMLINKS_ICO_ACK", "Bericht über defekte Links quittieren" );
define( "_AM_IMLINKS_ICO_REPORT", "Bericht über defekte Links quittieren?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Bericht über defekte Links bestätigen" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Bericht über defekte Links bestätigen?" );
define( "_AM_IMLINKS_ICO_RES", "Edit resources/links for this item" );
define( "_AM_IMLINKS_MOD_URLRATING", "Interent content rating:" );

// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Alternative Kategorie hinzufügen" );
define( "_AM_IMLINKS_MALTCAT", "Alternative Kategorieverwaltung" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Alternative Kategorieverwaltung" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Alternative Kategorien können durch Benutzung dieses Formblatts hinzugefügt oder entfernt werden.</li></ul>" );
define( "_AM_IMLINKS_ALTCAT_CREATED", "Alternative Kategorien gespeichert!" );

define( "_AM_IMLINKS_MRESOURCES", "Resource Management" );
define( "_AM_IMLINKS_RES_CREATED", "Resource Management" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Description" );
define( "_AM_IMLINKS_RES_NAME", "Resource Name" );
define( "_AM_IMLINKS_RES_TYPE", "Resource Type" );
define( "_AM_IMLINKS_RES_USER", "User" );
define( "_AM_IMLINKS_RES_CREATEF", "Add Resource" );
define( "_AM_IMLINKS_RES_MODIFYF", "Modify Resource" );
define( "_AM_IMLINKS_RES_NAMEF", "Resource name:" );
define( "_AM_IMLINKS_RES_DESCF", "Resource description:" );
define( "_AM_IMLINKS_RES_URLF", "Resource URL:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "Resource Item ID:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>New resources can be added, edited or removed easily via this form.</li>
	<li>List all resources linked to a link</li>
	<li>Modify resource name and description</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Möglicherweise defekte Links anzeigen. PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />Überprüfen Sie zuerst die existierenden Links bevor Sie weiter Aktionen durchführen." );
define( "_AM_IMLINKS_PINGTIMES", "Zeigt die erste geschätzte Pingzeit für jeden Link.<br /><br />PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen." );

define( "_AM_IMLINKS_NO_FORUM", "Kein Forum ausgewählt" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Bewertungsberechtigungen" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Wählt die Gruppe die Links in den ausgewählten Kategorien bewerten darf." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Automatisch freigegebene Links" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Wählt die Gruppe die Links ohne vorherige freigabe durch den Admin einsenden darf." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Berechtigungen für Einsender" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Wählt die Gruppe die Links in die ausgewählten Kategorien einsenden darf." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Moderatoren Gruppe" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Wählt die Gruppe mit Moderatorenstatus für die ausgewählten Kategorien." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "Land:" );
define( "_AM_IMLINKS_KEYWORDS", "Schlüsselwörter:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Schlüsselwörter durch Komma trennen (Wort1, Wort2, Wort3, ..)" );
define( "_AM_IMLINKS_CHECKURL", "URL überprüfen" );
define( "_AM_IMLINKS_CATTITLE", "Kategorie" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Landkarte" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Landkarte" );
define( "_AM_IMLINKS_LINK_BINGMAP", "Bing Landkarte" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Check Landkarte" );
define( "_AM_IMLINKS_STREET1", "Anschrift" );
define( "_AM_IMLINKS_STREET2", "Anschrift2 (optional)" );
define( "_AM_IMLINKS_TOWN", "Ort" );
define( "_AM_IMLINKS_STATE", "Bundesland" );
define( "_AM_IMLINKS_ZIPCODE", "Postleitzahl" );
define( "_AM_IMLINKS_TELEPHONE", "Festnetz" );
define( "_AM_IMLINKS_FAX", "Fax" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>WARNUNG:</b> Ordner %s besitzt keine Schreibrechte (chmod 0777). <br />Dieser Ordner wird von WF-Links benötigt." );

// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Link Submitter Name: " );
define( "_AM_IMLINKS_MOBILE", "Handy" );
define( "_AM_IMLINKS_CATSPONSOR", "Sponsorenkategorie wählen:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "If you select a Client the banner id from the form below will not be saved!" );
define( "_AM_IMLINKS_BANNERID", "Banner-ID wählen:" );
define( "_AM_IMLINKS_BANNERIDDSC", "If you have selected a Client in the form above the banner id will not be saved!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "USt-IdNr." );
define( "_AM_IMLINKS_VATWIKI", "Weitere Informationen finden Sie unter <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Abgelaufen" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'Keine Reaktion' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Adresse Formular</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Verschiedene Link-Einstellungen</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "Es wurde keine Datei zum Upload ausgewählt oder der Server hat Lese/Schreibporbleme mit dieser Datei!" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Falsche Dateigröße" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Kein Dateiname" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "Keine Datei hochgeladen. Es gibt Fehler" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "Es gibt ein Problem beim Upload. Fehler: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "Die Datei zum Upload ist zu gross. Fehler: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "Die Datei zum Upload ist zu gross. Fehler: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "Die Datei wurde nur teilweise hochgeladen. Fehler:: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "Keine Datei zum Upload gewählt. Fehler: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "Keine Datei zum Upload gewählt. Fehler: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "Uploadordner wurde nicht gewählt" );
define( "_AM_IMLINKS_FAILOPENDIR", "Fehler beim öffnen der Ordners: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Ordner konnte aufgrund fehlerhafter Berechtigung nicht geöffnet werden: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "Dateigröße: %u. Maximal erlaubte Größe: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "Videobreite: %u. Maximal erlaubte Breite: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "Videohöhe: %u. Maximal erlaubte Höhe: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "MIME Typ nicht erlaubt: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Fehler beim Dateiupload: " );
define( "_AM_IMLINKS_FILE", "Datei " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " existiert bereits auf dem Server. Bitte Datei umbenennen und nochmals hochladen.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Fehler während des Datentransfers zurückgegeben</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " existiert nicht!" );
define( "_AM_IMLINKS_INFORMATION", "Link Information" );
define( "_AM_IMLINKS_HITS", "Hits: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank™: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "Es ist natürlich nicht möglich eine Kategorie als Untergaterie auf sich selbst zu setzen!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Land:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "Anschrift 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Anschrift 2 (optional):" );
define( "_AM_IMLINKS_MOD_TOWN", "Ort:" );
define( "_AM_IMLINKS_MOD_STATE", "Bundesland:" );
define( "_AM_IMLINKS_MOD_ZIP", "PLZ:" );
define( "_AM_IMLINKS_MOD_TEL", "Telefon:" );
define( "_AM_IMLINKS_MOD_FAX", "Fax:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "Mobil:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "USt-IdNr.:" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Zeige letzte Einträge?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "Wie viele Links sollen dargestellt werden?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "Wenn '0' eingetragen werden, ist die Option ausgeschaltet." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Dokumentation" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Zeige keine Bilder" );
define( "_AM_IMLINKS_NOSELECTION", "Nichts ausgewählt" );
define( "_AM_IMLINKS_NOFILESELECT", "Keine Datei gewählt" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', 'Wenn kein Land ausgewählt wird, wird die Adresse nicht angezeigt.' );
define( '_AM_IMLINKS_MAPDSC', 'Bildzeichen anklicken zum Öffnen in einem neuen Browsertab oder Fenster zum Anzeigen der Landkarte.<br />Voreinstellung: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Bildzeichen anklicken zum Öffnen in einem neuen Browsertab oder Fenster<br />Das kann genutzt werden um die URL zu überprüfen.' );
define( '_AM_IMLINKS_STREETTWODSC', 'Dieses Feld ist optional. Wird es leer gelassen, wird es nicht benutzt.' );
define( '_AM_IMLINKS_STATEDSC', 'Geben Sie den Landkreis, Bezirk, Provinz, Staat... ein. Wird es leer gelassen, wird es nicht benutzt.' );
define( '_AM_IMLINKS_EMAILDSC', 'Email Adresse im Format:<br />- name@domain.com<br />- mailto:name@domain.com eingeben' );
define( '_AM_IMLINKS_CLONELINK', 'Link klonen' );
define( '_AM_IMLINKS_ICO_CLONE', 'Diesen Eintrag klonen' );
define( '_AM_IMLINKS_RSSFEED', 'RSS-Feed' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'RSS-Feed Konfiguration' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'Hier kann der RSS-Feed für das Modul eingestellt werden.<br />Für weitere Infos bitte die Webseite <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> besuchen.' );
define( '_AM_IMLINKS_RSSACTIVE', 'RSS-Feed aktivieren' );
define( '_AM_IMLINKS_RSSACTIVEDSC', 'Wählen Sie <em>Ja</em> um den RSS-Feed für imLinks einzuschalten, oder <em>Nein</em> zum Ausschalten.' );
define( '_AM_IMLINKS_RSSTITLE', 'RSS-Feed Titel' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'Der Name des Kanals. It\'s how people refer to your service. If you have a website that contains the same information as your RSS file, the title of your channel should be the same as the title of your website.' );
define( '_AM_IMLINKS_RSSLINKS', 'RSS-Feed Link' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'Die URL der Website, gemäß dem Kanal.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'RSS-Feed Beschreibung' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'Suchwörter oder ein Satz beschreibt den Kanal.' );
define( '_AM_IMLINKS_RSSIMAGE', 'RSS-Feed Bild' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'Ein besonders GIF, JPEG oder PNG Bild welches im Kanal angezeigt wird.' );
define( '_AM_IMLINKS_RSSWIDTH', 'RSS-Feed Bildbreite' );
define( '_AM_IMLINKS_RSSWIDTHDSC', 'Die Breite des Bildes in Pixel.<br />Maximaler Wert für die Breite ist 144.' );
define( '_AM_IMLINKS_RSSHEIGHT', 'RSS-Feed Bildhöhe' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', 'Die Höhe des Bildes in Pixel.<br />Maximler Wert für die Höhe ist 400.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'RSS-Feed Bildtitel' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', 'Beschreibung des Bildes, wird benutzt für das HTML Attribut ALT &#60;img&#62; tag when the channel is rendered in HTML.' );
define( '_AM_IMLINKS_RSSIMGLINK', 'RSS-Feed Bildlink' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'This is the URL of the site, when the channel is rendered, the image is a link to the site. (Note, in practice the image &#60;title&#62; and &#60;link&#62; should have the same value as the channel\'s &#60;title&#62; and &#60;link&#62;).' );
define( '_AM_IMLINKS_RSSTTL', 'RSS-Feed ttl' );
define( '_AM_IMLINKS_RSSTTLDSC', 'ttl stands for time to live. It\'s a number of minutes that indicates how long a channel can be cached before refreshing from the source.' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'RSS-Feed Webmaster' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Email address for person responsible for technical issues relating to channel.' );
define( '_AM_IMLINKS_RSSEDITOR', 'RSS-Feed Kanaleditor' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Email address for person responsible for editorial content.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'RSS-Feed Kategorie' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Specify one or more categories that the channel belongs to. Follows the same rules as the &#60;item&#62;-level category element.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'RSS-Feed Generator' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'String indicating the program used to generate the channel.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'RSS-Feed Urheberschutz' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'Notiz zum Content im Kanal über den Urheber.' );
define( '_AM_IMLINKS_RSSTOTAL', 'RSS-Feed Gesamtlinks' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'Anzahl der Links zum Anzeigen im RSS Feed.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'Database has been updated successfully' );
define( '_AM_IMLINKS_RSSOFFLINE', 'RSS-Feed Offline Nachrichtentitel' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', 'Enter the title for the message when RSS-Feed is deactived.' );
define( '_AM_IMLINKS_RSSOFFMSG', 'RSS-Feed Offline Nachricht' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'Enter here an explanation for why the RSS feed has been deactivated.' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'RSS-Feed wurde deaktiviert.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'Der RSS-Feed wurde vorübergehend wegen Wartungsarbeiten ausgeschaltet.' );
define( '_AM_IMLINKS_RSSCLICKSUBMIT', 'Bitte klicken Sie auf Absenden, um alle Werte aus der Form in die Datenbank zu schreiben!' );
define( '_AM_IMLINKS_COPYRIGHT', 'Urheberschutz' );

// Version 1.01 RC-1
define( '_AM_IMLINKS_NOREPLY', 'Keine Antwort' );

// imLinks 1.03
define( '_AM_IMLINKS_NICEURL', 'Alternativen Titel zur URL:' );
define( '_AM_IMLINKS_NICEURLDSC', 'Enter an alternative title for the link to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the link will be used.' );
define( '_AM_IMLINKS_TOMTOM', 'Add to TomTom' );
define( '_AM_IMLINKS_TOMTOMDSC', 'Enter the latitude and longitude of the address entered above.<br />You can find the geographic position of the address by using the website <a href="http://itouchmap.com/latlong.html" target="_blank">iTouchMap.com</a><br />Geographic latitude/longitude of the location should be in decimal degrees. May be negative; "N"/"S"/"W"/"E" suffix is not accepted. Default geodetic datum is WGS-84.<br />The geographic position should be entered as follows:<br />- Latitude: 57.2355591<br />- Longitude: -2.3535921' );
define( '_AM_IMLINKS_TOMTOMLONG', 'Längengrad eingeben:' );
define( '_AM_IMLINKS_TOMTOMLAT', 'Breitengrad eingeben:' );
define( '_AM_IMLINKS_MOD_TTLAT', 'TomTom Breitengrad:' );
define( '_AM_IMLINKS_MOD_TTLONG', 'TomTom Längengrad:' );

// Version 1.1
define( '_AM_IMLINKS_MSG_OFFLINE', 'Link wurde Offline gesetzt.' );
define( '_AM_IMLINKS_MSG_ONLINE', 'Link wurde Online gesetzt.' );
define( '_AM_IMLINKS_ICO_WAITING','Hinzugefügt, warten auf Freigabe' );

// Version 1.12
define( "_AM_IMLINKS_LINK_FILESSTATUSDSC", "Links ist unsichtbar für alle Benutzer." );
define( "_AM_IMLINKS_LINK_SETASUPDATEDDSC", "Das Update-Icon wird angezeigt." );
define( '_AM_IMLINKS_SCRSHOTENLARGE', 'Click image to enlarge' );

// Version 1.13
define( '_AM_IMLINKS_SEARCHTITLE', 'Search title' );
define( '_AM_IMLINKS_NOTPUBLISHED', 'Not Published' );
define( '_AM_IMLINKS_IPAGE_LETTERS', 'Show letters:' );
define( '_AM_IMLINKS_IPAGE_LETTERSDSC', 'Show letters above each page.' );
define( '_AM_IMLINKS_IPAGE_BUTTONS', 'Show buttons:' );
define( '_AM_IMLINKS_IPAGE_BUTTONSDSC', 'Show buttons like Submit, Popular and Latest Listing above each page.' );
?>