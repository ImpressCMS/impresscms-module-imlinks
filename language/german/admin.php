<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/german/admin.php
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
* translation		sato-san & burkhard
* language		german (deutsch)
* format			utf-8
*/

define( "_AM_IMLINKS_WARNINSTALL1", "<b>WARNUNG:</b> Verzeichnis %s existiert auf dem Server! <br />Aus Sicherheitsgründen sollte das Verzeichnis gelöscht werden." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>WARNUNG:</b> Datei %s existiert auf dem Server! <br />Aus Sicherheitsgründen sollte das Verzeichnis gelöscht werden." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>WARNUNG:</b> Ordner %s ist auf dem Server nicht vorhanden. <br />Dieser Ordner wird von WF-Links benötigt." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Ändern" );
define( "_AM_IMLINKS_BDELETE", "Löschen" );
define( "_AM_IMLINKS_BCREATE", "Anlegen" );
define( "_AM_IMLINKS_BADD", "Hinzufügen" );
define( "_AM_IMLINKS_BAPPROVE", "Freigeben" );
define( "_AM_IMLINKS_BIGNORE", "Ignorieren" );
define( "_AM_IMLINKS_BCANCEL", "Abbrechen" );
define( "_AM_IMLINKS_BSAVE", "Speichern" );
define( "_AM_IMLINKS_BRESET", "Zurücksetzen" );
define( "_AM_IMLINKS_BMOVE", "Links bewegen" );
define( "_AM_IMLINKS_BUPLOAD", "Hochladen" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Ausgewähltes Bild löschen" );
define( "_AM_IMLINKS_BRETURN", "Zurück zur vorherigen Seite!" );
define( "_AM_IMLINKS_DBERROR", "Datenbank Zugriffsfehler: Bitte diesen Fehler an die WF-Project Website weiterleiten" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Text Optionen:" );
define( "_AM_IMLINKS_DISABLEHTML", " HTML Tags abschalten" );
define( "_AM_IMLINKS_DISABLESMILEY", " Smilies abschalten" );
define( "_AM_IMLINKS_DISABLEXCODE", " BB-Codes abschalten" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Bilder abschalten" );
define( "_AM_IMLINKS_DISABLEBREAK", " autom. Zeilenumbruch verwenden?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link erfolgreich hochgeladen" );
define( "_AM_IMLINKS_NOMENUITEMS", "Keine Menueinträge innerhalb des Menüs" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "Voreinstellungen" );
define( "_AM_IMLINKS_BUPDATE", "Modul Update" );
define( "_AM_IMLINKS_BINDEX", "Hauptindex" );
define( "_AM_IMLINKS_BPERMISSIONS", "Berechtigungen" );
// define( "_AM_IMLINKS_BLOCKADMIN", "Blocks" );
define( "_AM_IMLINKS_BLOCKADMIN", "Blockeinstellungen" );
define( "_AM_IMLINKS_GOMODULE", "Zum Modul" );
define( "_AM_IMLINKS_ABOUT", "Über WF-Links" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Kategorie: " );
define( "_AM_IMLINKS_SFILES", "Links: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Eingesandt: " );
define( "_AM_IMLINKS_SMODREQUEST", "Geändert: " );
define( "_AM_IMLINKS_SREVIEWS", "Rezensionen: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Kategorieverwaltung" );
define( "_AM_IMLINKS_MLINKS", "Linkverwaltung" );
define( "_AM_IMLINKS_MLISTBROKEN", "Liste der defekten Links" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Anzeige der Links Pingtime" );
define( "_AM_IMLINKS_INDEXPAGE", "Index Seitenverwaltung" );
define( "_AM_IMLINKS_MCOMMENTS", "Kommentare" );
define( "_AM_IMLINKS_MVOTEDATA", "Bewertungsdaten" );
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
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Zugriffsrechte Unterkategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wählen Sie die Benutzergruppe, die Zugrifsrechte auf die Unterkategorie haben soll.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Moderationsrechte für Kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Wählen Sie die Benutzergruppe, die Moderationsrechte auf die Kategorie haben soll.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Kategorietitel:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Kategoriegewichtung:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Setze als Unterkategorie von:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Kategoriebild auswählen:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Kategoriebeschreibung:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Kategoriezusammenfassung:" );
/**
 * Index page Defines
 */
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
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Berechtigungsverwaltung" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>Beachte:</b>, Bitte beachten Sie, daß obwohl die Berechtigungen hier korrekt gesetzt sein mögen, eine Gruppe dennoch keine Ansicht- und/oder Zugriffsrechte haben kann wenn entsprechende Modul-Rechte fehlen. Diese Rechte können unter <b>System > Gruppen</b> eingestellt werden. Dort die entsprechende Gruppe auswählen und die passenden Rechte setzen.</div>");
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Kategorieberechtigungen" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Kategorien auswählen, die jede Gruppe sehen kann" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Berechtigungen können nicht gesetzt werden: Es sind noch keine Kategorien erstellt!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Link Berechtigungen" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Berechtigungen können nicht gesetzt werden: Es sind noch keine Links erstellt!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Links auswählen, die jede Gruppe sehen kann" );
/**
 * Upload defines
 */
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
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Auto - Publizierte Links:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Automatisch abgelaufene Links:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Abgelaufene Links:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Offline Links:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Link Titel" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Veröffentlicht von" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Online Status" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Erstellt" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Veröffentlicht" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Abgelaufen" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Datum nicht gesetzt" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Einsendedatum" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Aktion" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "BEACHTE: Keine Links vorhanden, die diese Bedingung erfüllen" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Seite:<b> " );
define( "_AM_IMLINKS_MINDEX_PAGEINFOTXT", "<ul><li>WF-links Übersichtsseite Details.</li><li>Sie können hier das Logo, den Kopfbereich, die Hauptüberschrift und den Fußtext leicht Ihren Wünschen anpassen.</li></ul><br />Anmerkung: Das Logo wird bei jedem Seitenaufruf von WF-links angezeigt." );
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
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Bewertungsinformationen" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Stimmen gesamt: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Stimmen durch registrierte Benutzer: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Stimmen durch anonyme Benutzer: %s" );
define( "_AM_IMLINKS_VOTE_USER", "Benutzer" );
define( "_AM_IMLINKS_VOTE_IP", "IP - Addresse" );
define( "_AM_IMLINKS_VOTE_DATE", "Eingesandt" );
define( "_AM_IMLINKS_VOTE_RATING", "Bewertung" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "Keine Bewertungen durch registrierte Benutzer" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Keine Bewertungen durch anonyme Benutzer" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Bewertungen gelöscht." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Linktitel" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Bewertungen / Abstimmungen" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "Keine Benutzerstimmen zum anzeigen vorhanden" );
define( "_AM_IMLINKS_VOTE_DELETE", "Keine Benutzerstimmen zum anzeigen vorhanden" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Löscht</b> die ausgewählte Abstimmung aus der Datenbank." );
define( "_AM_IMLINKS_VOTEDELETED", "Ausgewählte Abstimmung gelöscht und Datenbank aktualisiert" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Bewertungsdurchschnitt" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Gesamtstimmen" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Max. Stimmen je Eintrag" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Min. Stimmen je Eintrag" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Meiste Bewertungen" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Wenigste Bewertungen" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Aktivster Bewerter" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Stimmen registrierter Benutzer" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Stimmen anonymer Benutzer" );
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
define( "_AM_IMLINKS_MOD_URL", "Link Url: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Veröffentlicht von: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Forum: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Bildschirmfoto: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Homepage: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Name der Homepage: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Bildschrimfoto: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Beschreibung: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Einsender: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Einsender" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Vorgeschlagene Linkdetails" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Orginal Linkdetails" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Änderungsanfrage aus Datenbank entfernt" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Ausgewählter Link geändert und Datenbank erfolgreich aktualisiert" );
define( "_AM_IMLINKS_MOD_VIEW", "Anzeigen" );
// Link management
define( "_AM_IMLINKS_LINK_ID", "Link ID: " );
define( "_AM_IMLINKS_LINK_IP", "IP - Addresse des Einsenders: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Erlaubte Dateiendungen für den Admin Link</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Ändern der Link Information" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Neuen Link erstellen" );
define( "_AM_IMLINKS_LINK_TITLE", "Link Titel: " );
define( "_AM_IMLINKS_LINK_DLURL", "Link URL: " );
define( "_AM_IMLINKS_LINK_DIRCA", " Internet Inhaltsbewertung: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Linkbeschreibung: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Hauptkategorie des Links: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " Link offline setzen?<br /><br /><span style='font-weight: normal;'>Links ist unsichtbar für alle Benutzer.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Link Status setzen als Updated?<br /><br /><span style='font-weight: normal;'>Das Update-Icon wird angezeigt.</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Bildschirmfoto des Links: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Diskussion im Forum hinzufügen?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Veröffentlichungsdatum:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Ablaufdatum:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Veröffentlichungsdatum entfernen:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Ablaufdatum entfernen:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Veröffentlichungsdatum setzen: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Veröffentlichungsdatum und Zeit setzen" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Ablaufdatum und Zeit setzen" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Veröffentlichungsdatum setzen: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Neues Veröffentlichungsdatum setzenSet: </b><br />Veröffentlicht:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Veröffentlichungsdatum setzen: </b><br />Veröffentlicht am:" );
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

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Defekt: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Bericht über defekte Links" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Bericht über defekte Links ignoriert und erfolgreich aus der Datenbank entfernt!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Quittierungsstatus geändert und Datenbank aktualisiert!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Bestätigungsstatus geändert und Datenbank aktualisiert!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Information über defekte Links-Berichte" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Wartende Berichte über defekte Links:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignoriere</b> den Bericht und lösche nur den Bericht." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Lösche</b> die betroffenen Linkdaten und den Report." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Änere</b> den Link, um das Problem zu beseitigen." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Quittieren</b> Setzt den Quittierungsstatus für den Bericht über defekte Links." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Bestaätigt</b> Setzt den Bestätigungsstatus für den Bericht über defekte Links." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Quittiert" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Bestätigt" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "Titel" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Reporter" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Einsender" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Einsendedatum" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Aktion" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "Keine Berichte über defekte Liks vorhanden, die dieses Kriterium erfüllen" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Link und Bericht aus der Datenbank entfernt" );
/**
 * About defines
 */
define( "_AM_IMLINKS_BY", "von" );
// block defines
define( "_AM_IMLINKS_BADMIN", "Block Administration" );
define( "_AM_IMLINKS_BLKDESC", "Beschreibung" );
define( "_AM_IMLINKS_TITLE", "Titel" );
define( "_AM_IMLINKS_SIDE", "Ausrichtung" );
define( "_AM_IMLINKS_WEIGHT", "Gewichtung" );
define( "_AM_IMLINKS_VISIBLE", "Sichtbar" );
define( "_AM_IMLINKS_ACTION", "Aktion" );
define( "_AM_IMLINKS_SBLEFT", "Links" );
define( "_AM_IMLINKS_SBRIGHT", "Rechts" );
define( "_AM_IMLINKS_CBLEFT", "Mitte links" );
define( "_AM_IMLINKS_CBRIGHT", "Mitte rechts" );
define( "_AM_IMLINKS_CBCENTER", "Mitte mittig" );
define( "_AM_IMLINKS_ACTIVERIGHTS", "Active Berechtigungen" );
define( "_AM_IMLINKS_ACCESSRIGHTS", "Zugriffsberechtigungen" );
// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Eintrag ändern" );
define( "_AM_IMLINKS_ICO_DELETE", "Eintrag löschen" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Resource editieren" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Bestätigt" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Nicht bestätigt" );

define( "_AM_IMLINKS_ICO_LINK", "Verwandter link" );
define( "_AM_IMLINKS_ICO_URL", "Verwandte URL hinzufügen" );
define( "_AM_IMLINKS_ICO_ADD", "Hinzufügen" );
define( "_AM_IMLINKS_ICO_APPROVE", "Bestätigen" );
define( "_AM_IMLINKS_ICO_STATS", "Statistiken" );
define( "_AM_IMLINKS_ICO_VIEW", "Eintrag anzeigen" );

define( "_AM_IMLINKS_ICO_IGNORE", "Ignorieren" );
define( "_AM_IMLINKS_ICO_ACK", "Bericht über defekte Links quittieren" );
define( "_AM_IMLINKS_ICO_REPORT", "Bericht über defekte Links quittieren?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Bericht über defekte Links bestätigen" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Bericht über defekte Links bestätigen?" );
define( "_AM_IMLINKS_ICO_RES", "Editieren Resourcen/Links für diesen Eintrag" );
define( "_AM_IMLINKS_MOD_URLRATING", "Interent Content Rating:" );
// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Alternative Kategorie hinzufügen" );
define( "_AM_IMLINKS_MALTCAT", "Alternative Kategorieverwaltung" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Alternative Kategorieverwaltung" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Alternative Kategorien können durch Benutzung dieses Formblatts hinzugefügt oder entfernt werden.</li></ul>" );
define( "_AM_IMLINKS_ALTCAT_CREATED", "Alternative Kategorien gespeichert!" );

define( "_AM_IMLINKS_MRESOURCES", "Resourcenverwaltung" );
define( "_AM_IMLINKS_RES_CREATED", "Resourcenverwaltung" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Beschreibung" );
define( "_AM_IMLINKS_RES_NAME", "Resourcenname" );
define( "_AM_IMLINKS_RES_TYPE", "Resourcen Typ" );
define( "_AM_IMLINKS_RES_USER", "Benutzer" );
define( "_AM_IMLINKS_RES_CREATEF", "Resource hinzufügen" );
define( "_AM_IMLINKS_RES_MODIFYF", "Resource ändern" );
define( "_AM_IMLINKS_RES_NAMEF", "Resourcenname:" );
define( "_AM_IMLINKS_RES_DESCF", "Resourcebeschreibung:" );
define( "_AM_IMLINKS_RES_URLF", "Resourcen - URL:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "Resourcen Eintrag ID:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>Neue Resourcen können durch Benutzung dieses Formblatts hinzugefügt oder entfernt werden.</li>
	<li>Auflisten aller verlinkten Resourcen</li>
	<li>Resourcenname und Beschreibung ändern</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Möglicherweise defekte Links anzeigen. PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />Überprüfen Sie zuerst die existierenden Links bevor Sie weiter Aktionen durchführen.<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "Zeigt die erste geschätzte Pingzeit für jeden Link.<br /><br />PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />" );

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
define( "_AM_IMLINKS_LINK_MULTIMAP", "Multimap Landkarte" );
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
define( "_AM_IMLINKS_BANNER", "Banner" );
define( "_AM_IMLINKS_FBANNER", "Banner" );
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
define( "_AM_IMLINKS_PAGERANK", "PageRank&trade;: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "Es ist natürlich nicht möglich eine Kategorie als Untergaterie auf sich selbst zu setzen!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Land:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Schlüsselwörter:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "Anschrift 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Anschrift 2 (optional):" );
define( "_AM_IMLINKS_MOD_TOWN", "Ort:" );
define( "_AM_IMLINKS_MOD_STATE", "Bundesland:" );
define( "_AM_IMLINKS_MOD_ZIP", "Postleitzahl:" );
define( "_AM_IMLINKS_MOD_TEL", "Festnetz:" );
define( "_AM_IMLINKS_MOD_FAX", "Fax:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "Handy:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "USt-IdNr:" );

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
define( '_AM_IMLINKS_COUNTRYDSC', 'If no country is selected the address can not be formatted and will not be displayed.' );
define( '_AM_IMLINKS_MAPDSC', 'Click icon to open a new new browser tab or window showing the map.<br />Default: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Click icon to open url in a new browser tab or window.<br />You can use this to check the url.' );
define( '_AM_IMLINKS_STREETTWODSC', 'This field is optional. If field is left blank it will not be used.' );
define( '_AM_IMLINKS_STATEDSC', 'Enter county, district, province, state, etc. If field is left blank it will not be used.' );
define( '_AM_IMLINKS_EMAILDSC', 'Enter email address as:<br />- name@domain.com<br />- mailto:name@domain.com' );
define( '_AM_IMLINKS_CLONE', '**CLONE**' );
define( '_AM_IMLINKS_CLONELINK', 'Clone Link' );
define( '_AM_IMLINKS_ICO_CLONE', 'Clone this item' );
define( '_AM_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_AM_IMLINKS_RSSFEEDCFG', 'RSS Feed Configuration' );
define( '_AM_IMLINKS_RSSFEEDDSC', 'Here you can configure the RSS feed for imLinks.<br />For more information visit the <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> website.' );
define( '_AM_IMLINKS_RSSACTIVE', 'RSS feed activated' );
define( '_AM_IMLINKS_RSSACTIVEDSC', 'Select <em>Yes</em> to turn RSS feed for imLinks on, select <em>No</em> to turn it off.' );
define( '_AM_IMLINKS_RSSTITLE', 'RSS feed title' );
define( '_AM_IMLINKS_RSSTITLEDSC', 'The name of the channel. It\'s how people refer to your service. If you have a website that contains the same information as your RSS file, the title of your channel should be the same as the title of your website.' );
define( '_AM_IMLINKS_RSSLINKS', 'RSS feed link' );
define( '_AM_IMLINKS_RSSLINKSDSC', 'The URL to the website corresponding to the channel.' );
define( '_AM_IMLINKS_RSSDESCRIPTION', 'RSS feed description' );
define( '_AM_IMLINKS_RSSDESCRIPTIONDSC', 'Phrase or sentence describing the channel.' );
define( '_AM_IMLINKS_RSSIMAGE', 'RSS feed image' );
define( '_AM_IMLINKS_RSSIMAGEDSC', 'Specifies a GIF, JPEG or PNG image that can be displayed with the channel.' );
define( '_AM_IMLINKS_RSSWIDTH', 'RSS feed image width' );
define( '_AM_IMLINKS_RSSWIDTHDSC', 'Indicates the width of the image in pixels.<br />Maximum value for width is 144.' );
define( '_AM_IMLINKS_RSSHEIGHT', 'RSS feed image height' );
define( '_AM_IMLINKS_RSSHEIGHTDSC', 'Indicates the height of the image in pixels.<br />Maximum value for height is 400.' );
define( '_AM_IMLINKS_RSSIMGTITLE', 'RSS feed image title' );
define( '_AM_IMLINKS_RSSIMGTITLEDSC', 'Describes the image, it\'s used in the ALT attribute of the HTML &#60;img&#62; tag when the channel is rendered in HTML.' );
define( '_AM_IMLINKS_RSSIMGLINK', 'RSS feed image link' );
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'This is the URL of the site, when the channel is rendered, the image is a link to the site. (Note, in practice the image &#60;title&#62; and &#60;link&#62; should have the same value as the channel\'s &#60;title&#62; and &#60;link&#62;.' );
define( '_AM_IMLINKS_RSSTTL', 'RSS feed ttl' );
define( '_AM_IMLINKS_RSSTTLDSC', 'ttl stands for time to live. It\'s a number of minutes that indicates how long a channel can be cached before refreshing from the source.' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'RSS feed webmaster' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Email address for person responsible for technical issues relating to channel.' );
define( '_AM_IMLINKS_RSSEDITOR', 'RSS feed channel editor' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Email address for person responsible for editorial content.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'RSS feed category' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Specify one or more categories that the channel belongs to. Follows the same rules as the <item>-level category element.' );
define( '_AM_IMLINKS_RSSGENERATOR', 'RSS feed generator' );
define( '_AM_IMLINKS_RSSGENERATORDSC', 'String indicating the program used to generate the channel.' );
define( '_AM_IMLINKS_RSSCOPYRIGHT', 'RSS feed copyright' );
define( '_AM_IMLINKS_RSSCOPYRIGHTDSC', 'Copyright notice for content in the channel.' );
define( '_AM_IMLINKS_RSSTOTAL', 'RSS feed total links' );
define( '_AM_IMLINKS_RSSTOTALDSC', 'Give the total number of links to display in RSS feed.' );
define( '_AM_IMLINKS_RSSDBUPDATED', 'Database has been updated successfully' );
define( '_AM_IMLINKS_RSSOFFLINE', 'RSS feed offline message title' );
define( '_AM_IMLINKS_RSSOFFLINEDSC', 'Enter the title for the message when RSS feed is deactived.' );
define( '_AM_IMLINKS_RSSOFFMSG', 'RSS feed offline message' );
define( '_AM_IMLINKS_RSSOFFMSGDSC', 'Enter here an explanation for why the RSS feed has been deactivated.' );
define( '_AM_IMLINKS_RSSOFFTITLE', 'RSS feed has been deactivated.' );
define( '_AM_IMLINKS_RSSOFFMSGDEF', 'The RSS feed has been temporarily deactivated for maintenance.' );
define( '_AM_IMLINKS_COPYRIGHT', 'Copyright' );
?>