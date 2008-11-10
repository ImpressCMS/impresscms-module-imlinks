<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/nederlands/admin.php
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
 
define( "_AM_IMLINKS_WARNINSTALL1", "<b>WAARSCHUWING:</b> <u>Map</u> %s bestaat op uw server. <br />Verwijder deze map uit veiligheids overwegingen." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>WAARSCHUWING:</b> <u>Bestand</u> %s bestaat op uw server. <br />Verwijder dit bestand uit veiligheids overwegingen." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>WAARSCHUWING:</b> <u>Map</u> %s bestaat niet op uw server. <br />Deze map is nodig voor imLinks." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Aanpassen" );
define( "_AM_IMLINKS_BDELETE", "Verwijderen" );
define( "_AM_IMLINKS_BCREATE", "Aanmaken" );
define( "_AM_IMLINKS_BADD", "Toevoegen" );
define( "_AM_IMLINKS_BAPPROVE", "Goedkeuren" );
define( "_AM_IMLINKS_BIGNORE", "Negeren" );
define( "_AM_IMLINKS_BCANCEL", "Annuleren" );
define( "_AM_IMLINKS_BSAVE", "Opslaan" );
define( "_AM_IMLINKS_BRESET", "Reset" );
define( "_AM_IMLINKS_BMOVE", "Verplaats linken" );
define( "_AM_IMLINKS_BUPLOAD", "Uploaden" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Verwijder geselekteerde afbeelding" );
define( "_AM_IMLINKS_BRETURN", "Ga terug naar waar u was!" );
define( "_AM_IMLINKS_DBERROR", "Database toegang fout: Rapporteer deze fout aan de WF-Project Website" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Tekst opties:" );
define( "_AM_IMLINKS_DISABLEHTML", " Uitschakelen HTML tags" );
define( "_AM_IMLINKS_DISABLESMILEY", " Uitschakelen Smilies" );
define( "_AM_IMLINKS_DISABLEXCODE", " Uitschakelen XOOPS codes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Uitschakelen afbeeldingen" );
define( "_AM_IMLINKS_DISABLEBREAK", " Gebruik XOOPS linebreak omzetting?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link succesvol geupload" );
define( "_AM_IMLINKS_NOMENUITEMS", "Geen menu items in het menu" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "Instellingen" );
define( "_AM_IMLINKS_BUPDATE", "Module bijwerken" );
define( "_AM_IMLINKS_BINDEX", "Hoofd index" );
define( "_AM_IMLINKS_BPERMISSIONS", "Rechten" );
// define( "_AM_IMLINKS_BLOCKADMIN", "Blocks" );
define( "_AM_IMLINKS_BLOCKADMIN", "Blokinstellingen" );
define( "_AM_IMLINKS_GOMODULE", "Ga naar module" );
define( "_AM_IMLINKS_ABOUT", "Informatie" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Categorieën: " );
define( "_AM_IMLINKS_SFILES", "Linken: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Ingezonden: " );
define( "_AM_IMLINKS_SMODREQUEST", "Aangepast: " );
define( "_AM_IMLINKS_SREVIEWS", "Beoordelingen: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Categorie management" );
define( "_AM_IMLINKS_MLINKS", "Link management" );
define( "_AM_IMLINKS_MLISTBROKEN", "Gebroken linken index" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Linken pingtijd index" );
define( "_AM_IMLINKS_INDEXPAGE", "Index pagina" );
define( "_AM_IMLINKS_MCOMMENTS", "Commenta(a)r(en)" );
define( "_AM_IMLINKS_MVOTEDATA", "Stem data" );
define( "_AM_IMLINKS_MUPLOADS", "Afbeelding uploaden" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Nieuwe categorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Categorie aanpassen" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Verplaats linken categorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Categorie titel:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Linken verplaatsen mislukt: kan niet verplaatsen naar deze categorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Linken verplaatsen mislukt: Kan deze categorie niet vinden" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Linken verplaatst en database succesvol geupdate" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Nieuwe categorie aangemaakt en database succesvol geupdate" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Geselekteerde categorie aangemaakt en database succesvol geupdate" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Geselekteerde categorie verwijderd en database succesvol geupdate" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "Waarschuwing: Deze categorie en alle linken en inhoud verwijderen?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Eerst een categorie aanmaken voordat een link kan worden toegevoegd" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Categorie toegangsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die toegang hebben tot deze categorie.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Categorie inzendrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgropen die rechten hebben om nieuwe linken voor deze categorie in te zenden.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Categorie aanpassingsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die rechten hebben om deze categorie te beheren.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Categorie titel:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Categorie gewicht:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Instellen als sub-categorie van:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Selekteer categorie afbeelding:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Categorie omschrijving:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Categorie samenvatting:" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Indexpagina aangepast en database succelvol geupdate!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Indexpagina informatie" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Indexpagina aanpassen" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Index afbeelding:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Index Titel:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Index koptekst:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Koptekst uitlijning:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Index voettekst:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Voettekst uitlijning:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Uitlijnen links" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Uitlijnen midden" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Uitlijnen rechts" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Rechten instellingen" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>Opmerking:</b> Stel hier de juiste rechten in, anders kunnen gebruikersgroepen mogelijk bepaalde artikelen en blokken niet of juist wel zien. Let tevens op de module toegangsrechten! Om deze in te stellen ga naar <b>System admin > Groepen</b>, kies de gewenste groep en selekteer de checkboxen om de toegang toe te wijzen.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Categorie rechten" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Selekteer categorieën die alle groepen mogen zien" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Kan geen rechten instellen: Er zijn geen categorieën aangemaakt!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Link rechten" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Kan geen rechten instellen: er zijn geen linken aangemaakt!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Selekteer linken die alle groepen mogen zien" );
/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Afbeelding succesvol geupload" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "FOUT: geen link geselekteerd om te uploaden. Probeer het nogmaals!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Afbeelding bestaat al in he uploadgedeelte!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Link is verwijderd." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "FOUT link verwijderen: Link is niet gevonden op server." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "FOUT link verwijderen: Geen link geselekteerd om te verwijderen." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "WAARSCHUWING: deze link afbeelding verwijderen?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Server status" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Informatie uit PHP.ini link:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Veilige mode status: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register globals: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Server uploads status: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Max upload grootte toegestaan: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Max inzending grootte toegestaan: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Dit kan problemen veroorzaken)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "GD Library support: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "GD Library versie: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>ingeschakeld</b> (Thumbs Nails beschikbaar)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>uitgeschakeld</b> (Thumb Nails niet beschikbaar)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>uit</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>aan</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "categorie afbeeldingen" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Screenshot afbeeldingen" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Hoofd afbeeldingen" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "categorie afbeeldingen pad" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Screenshot afbeeldingen pad" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Hoofd afbeeldingen pad" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Upload afbeelding: " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Upload pad: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "Upload URL: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Selekteer upload bestemming:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Toon geselekteerde afbeelding:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Upload nieuwe afbeelding naar geselekteerde bestemming:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Module administatie samenvatting" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Gepubliceerde linken:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Automatisch gepubliseerde linken:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Automatisch verlopen linken:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Verlopen linken:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Offline linken:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Link titel" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Inzender" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Online status" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Publiceren" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Gepubliceerd" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Verlopen" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Geen datum ingesteld" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Inzenddatum" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Aktie" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "OPMERKING: Er zijn geen linken overeenkomend met deze criteria" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Pagina:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>imLinks Hoofdpagina details.</li><li>U kunt eenvoudig veranderingen aanbrengen aan het logo, de afbeelding, de kop- en voetteksten om de pagina aan uw wensen te laten voldoen.</li></ul><br />Opmerking: Het gekozen logo wordt door de gehele imLinks module toegepast.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Reaktietijd" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Ingezonden linken" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Wachtende linken informatie" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Linken wachtend op goedkeuring: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "Nieuwe linken informatie <b>accepteren zonder goedkeuring</b>." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Wijzig</b> nieuwe link informatie en keur daarna goed." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Verwijder</b> nieuwe link informatie." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "Er zijn geen linken overeenkomend met deze criteria." );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "Nieuwe link data aangemaakt en database succesvol bijgewerkt." );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Stemmen informatie" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Totaal aantal stemmen: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Stemmen van geregistreerde gebruikers: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Stemmen van anonieme gebruikers: %s" );
define( "_AM_IMLINKS_VOTE_USER", "Gebruiker" );
define( "_AM_IMLINKS_VOTE_IP", "IP Adres" );
define( "_AM_IMLINKS_VOTE_DATE", "Ingezonden op" );
define( "_AM_IMLINKS_VOTE_RATING", "Beoordeling" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "Geen stemmen van geregistreerde gebruikers" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Geen stemmen van anonieme gebruikers" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Stem data verwijderd." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Link titel" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Stem data informatie" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "Geen te tonen stemmen van geregistreerde gebruikers" );
define( "_AM_IMLINKS_VOTE_DELETE", "Geen te tonen stemmen van geregistreerde gebruikers" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Verwijderd</b> de gekozen stem informatie uit de database." );
define( "_AM_IMLINKS_VOTEDELETED", "Geselekteerde stem verwijderd, database is bijgewerkt." );

define( "_AM_IMLINKS_VOTE_USERAVG", "Gemiddelde gebruikers beoordeling" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Totaal aantal stemmen" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Hoogste item stem" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Laagste item stem" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Meeste gestemd op" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Minste gestemd op" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Aktiefste stemmer" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Geregistreerde stemmen" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Anonieme stemmen" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Totaal aantal wijzigingsaanvragen: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Gewijzigde linken" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Gewijzigde linken informatie" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Titel" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Originele inzender: " );
define( "_AM_IMLINKS_MOD_DATE", "Ingezonden op" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Er zijn geen verzoeken die overeenkomen met deze criteria" );
define( "_AM_IMLINKS_MOD_TITLE", "Link titel: " );
define( "_AM_IMLINKS_MOD_LID", "link ID: " );
define( "_AM_IMLINKS_MOD_CID", "categorie: " );
define( "_AM_IMLINKS_MOD_URL", "link URL: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Uitgever: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Forum: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Screenshot afbeelding: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Website: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Website naam: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Screenshot afbeelding: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Omschrijving: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Inzender: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Inzender" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Voorgestelde link details" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Orginele link details" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Verzoek om aanpassing verwijderd uit de database" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Geselekteerde link aangepast en database succesvol bijgewerkt" );
define( '_AM_IMLINKS_MOD_VIEW', 'Bekijken' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "Link ID: " );
define( "_AM_IMLINKS_LINK_IP", "IP Adres van uploader: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Toegestane beheerder link formaten</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Aangepaste link informatie" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Nieuwe link aanmaken" );
define( "_AM_IMLINKS_LINK_TITLE", "Link titel: " );
define( "_AM_IMLINKS_LINK_DLURL", "Link URL: " );
define( "_AM_IMLINKS_LINK_DIRCA", " Internet inhoud beoordeling (ICR): " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Link omschrijving: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Link categorie: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " Link offline plaatsen?<br /><br /><span style='font-weight: normal; font-size: smaller;'>Link zal niet zichbaar zijn.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Link Status weergeven als bijgewerkt?<br /><br /><span style='font-weight: normal; font-size: smaller;'>Link zal een 'bijgewerkt' icoon weergeven.</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Link screenshot afbeelding: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Discussieer in dit forum toevoegen?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Link publikatiedatum:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Link verloopdatum:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Verwijder publikatiedatum:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Verwijder verloopdatum:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Instellen publikatiedatum: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Stel de datum/tijd van publikatie in" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Stel de datum/tijd van verlopen in" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Stel publikatiedatum in: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Stel nieuwe publikatiedatum in: </b><br />Gepubliceerd op:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Stel publikatiedatum in: </b><br />Gepubliceerd op:" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Stel verloopdatum in: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Stel verloopdatum in: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Verwijder gebroken link rapport?<br /><br /><span style='font-weight: normal;'>Kies <b>Ja</b> en het gebroken link rapport wordt automatisch verwijderd tevens wordt bevestigd dat de link weer werkt.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "Screenshot afbeelding moet een geldige afbeeldingslink zijn in het %s bestand (bijv. shot.gif). Laat het veld leeg als er geen screenshot link is." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Goedkeuren link:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Nieuwe link aangemaakt en database succesvol bijgewerkt" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Geselekteerde link aangepast en database succesvol bijgewerkt" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Geselekteerde link verwijderen?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Link %s succesvol verwijderd uit de database!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Link goedgekeurd en database succesvol bijgewerkt" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Maak een nieuwsbericht van de link</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Nieuwe link inzenden als nieuwsbericht?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Selekteer nieuwscategorie om nieuwsbericht in te zenden:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "Nieuwstitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leeg laten om de linknaam te gebruiken</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Link inzender: " );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Gebroken: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Gebroken rapportage(s)" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Gebroken link rapportage genegeerd en succesval verwijderd uit de database!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Toegekende status gewijzigd en database geupdate!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Gewijzigde status is bevestigd en database geupdate!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Gebroken rapportage informatie" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Wachtende gebroken link rapportage:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Negeert</b> het rapport en verwijderd allen de gebroken link rapportage." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Verwijdert</b> de gerapporteerde linkdata en gebroken link rapportage van de link." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "de link <b>Aanpassen</b> om het probleem te verhelpen." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Toegekend</b> Stelt de toegekende status van de gebroken bestandsrapportage in." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Bevestigd</b> Stelt de status van de gebroken linkrapportage in als bevestigd." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Toegekend" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Bevestigd" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "Titel" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Rapporteur" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Inzender" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Inzenddatum" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Aktie" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "Geen gebroken (link) rapportages die overeenkomen met deze criteria" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "Link verwijderd uit de database en gebroken rapportage verwijderd" );
/**
 * About defines
 */
define( "_AM_IMLINKS_BY", "door" );
// block defines
define( "_AM_IMLINKS_BADMIN", "Blok administratie" );
define( "_AM_IMLINKS_BLKDESC", "Omschrijving" );
define( "_AM_IMLINKS_TITLE", "Titel" );
define( "_AM_IMLINKS_SIDE", "Uitlijning" );
define( "_AM_IMLINKS_WEIGHT", "Gewicht" );
define( "_AM_IMLINKS_VISIBLE", "Zichtbaar" );
define( "_AM_IMLINKS_ACTION", "Aktie" );
define( "_AM_IMLINKS_SBLEFT", "Links" );
define( "_AM_IMLINKS_SBRIGHT", "Rechts" );
define( "_AM_IMLINKS_CBLEFT", "Midden links" );
define( "_AM_IMLINKS_CBRIGHT", "Midden rechts" );
define( "_AM_IMLINKS_CBCENTER", "Midden midden" );
define( "_AM_IMLINKS_ACTIVERIGHTS", "Aktieve rechten" );
define( "_AM_IMLINKS_ACCESSRIGHTS", "Toegangsrechten" );
// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Dit item aanpassen" );
define( "_AM_IMLINKS_ICO_DELETE", "Dit item verwijderen" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Deze bron aanpassen" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Goedgekeurd" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Afgekeurd" );

define( "_AM_IMLINKS_ICO_LINK", "Gerelateerde link" );
define( "_AM_IMLINKS_ICO_URL", "Gerelateerde URL toevoegen" );
define( "_AM_IMLINKS_ICO_ADD", "Toevoegen" );
define( "_AM_IMLINKS_ICO_APPROVE", "Goedkeuren" );
define( "_AM_IMLINKS_ICO_STATS", "Statistieken" );
define( "_AM_IMLINKS_ICO_VIEW", "Bekijk dit item" );

define( "_AM_IMLINKS_ICO_IGNORE", "Negeren" );
define( "_AM_IMLINKS_ICO_ACK", "Gebroken rapportage toegekend" );
define( "_AM_IMLINKS_ICO_REPORT", "Gebroken rapportage toekennen?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Gebroken rapportage bevestigd" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Gebroken rapportage bevestigen?" );
define( "_AM_IMLINKS_ICO_RES", "Bronnen/linken bij dit item aanpassen" );
define( "_AM_IMLINKS_MOD_URLRATING", "Webinhoud beoordeling (ICR):" );
// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Alternatieve categorie toevoegen" );
define( "_AM_IMLINKS_MALTCAT", "Alternatieve categorie management" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Alternatieve categorie management" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Alternatieve categorieën kunnen via dit formulier eenvoudig worden toegevoegd of verwijderd.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Alternatieve categorie(ën) is(zijn) opgeslagen!' );

define( "_AM_IMLINKS_MRESOURCES", "Bronnen management" );
define( "_AM_IMLINKS_RES_CREATED", "Bronnen management" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Omschrijving" );
define( "_AM_IMLINKS_RES_NAME", "Bron Naam" );
define( "_AM_IMLINKS_RES_TYPE", "Bron type" );
define( "_AM_IMLINKS_RES_USER", "Gebruiker" );
define( "_AM_IMLINKS_RES_CREATEF", "Bron toevoegen" );
define( "_AM_IMLINKS_RES_MODIFYF", "Bron aanpassen" );
define( "_AM_IMLINKS_RES_NAMEF", "Naam bron:" );
define( "_AM_IMLINKS_RES_DESCF", "Omschrijving bron:" );
define( "_AM_IMLINKS_RES_URLF", "Bron URL:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "Bron Item ID:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>Nieuwe bronnen kunnen via dit formulier eenvoudig worden toegevoegd, aangepast of verwijderd.</li>
	<li>Indexeer alle gelinkte bronnen bij een link</li>
	<li>Bronnaam en omschrijving aanpassen</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Toon linken die mogelijk zijn gebroken. NB: Deze gegevens zijn mogelijk niet correct/compleet en moeten worden gezien als grove handreiking.<br /><br />Controleer eerst of de link bestaat voordat aktie wordt ondernomen.<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "Displays the first estimated round ping time to each link.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_IMLINKS_NO_FORUM", "Geen forum geselekteerd" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Beoordelingsrechten" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Selekteer de groepen die linken mogen beoordelen in de geselekteerde categorie(ën)." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Linken automatisch goedkeuren" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Selekteer de groepen waarvan de ingezonden linken automatisch worden goedgekeurd." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Inzend rechten" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Selekteer de groepen die nieuwe linken mogen inzenden in de geselekteerde categorie(ën)." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Beheerder groepen" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Selekteer de groepen die beheerdersrechten hebben voor de geselekteerde categorie(ën)." );

define( "_AM_IMLINKS_COUNTRY", "Land:" );
define( "_AM_IMLINKS_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Keywords dienen gescheiden te worden door een komma (keyword1, keyword2, keyword3)." );
define( "_AM_IMLINKS_CHECKURL", "Check URL" );
define( "_AM_IMLINKS_CATTITLE", "Categorie" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Kaarten" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Kaarten" );
define( "_AM_IMLINKS_LINK_MULTIMAP", "Multimap Kaarten" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Kontrolleer kaart" );
define( "_AM_IMLINKS_STREET1", "Straat 1" );
define( "_AM_IMLINKS_STREET2", "Straat 2 (optioneel)" );
define( "_AM_IMLINKS_TOWN", "Plaats" );
define( "_AM_IMLINKS_STATE", "Provincie" );
define( "_AM_IMLINKS_ZIPCODE", "Postcode" );
define( "_AM_IMLINKS_TELEPHONE", "Telefoon" );
define( "_AM_IMLINKS_FAX", "Fax" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>WAARSCHUWING:</b> <u>Map</u> %s is niet beschrijfbaar. <br />Deze map dient schrijfbaar (CHMOD 777) te zijn voor imLinks." );

// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Link publicist: " );
define( "_AM_IMLINKS_MOBILE", "GSM" );
define( "_AM_IMLINKS_CATSPONSOR", "Kies categorie sponsor:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "Als u een sponsor kiest wordt de hieronder gekozen banner id niet opgeslagen!" );
define( "_AM_IMLINKS_BANNERID", "Kies banner id:" );
define( "_AM_IMLINKS_BANNERIDDSC", "Als u hierboven een sponsor gekozen heeft, dan wordt de banner id niet opgeslagen!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "BTW nr." );
define( "_AM_IMLINKS_VATWIKI", "Zie voor meer informatie op <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a> (engelstalig)" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Verlopen" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'Geen Reaktie' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Adres formulier</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Diverse Link instellingen</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "U hebt geen bestand om te uploaden gekozen of de server heeft niet de juist schrijf/lees bevoegdheden om dit bestand te uploaden!" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Onjuiste Bestands Grootte" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Bestandsnaam Is Leeg" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "Geen bestand geupload, dit is een error" );
define( "_AM_IMLINKS_UPLOADERRORZERO", "Er was een probleem met uw upload. Error: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "Het bestand dat u probeert te uploaden is te groot. Error: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "Het bestand dat u probeert te uploaden is te groot. Error: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "Het bestand dat u probeert te uploaden is alleen deels geupload. Error: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "Geen bestand voor uploaden geselekteerd. Error: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "Geen bestand voor uploaden geselekteerd. Error: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "Upload map niet gedefinieerd." );
define( "_AM_IMLINKS_FAILOPENDIR", "Open van map gefaald: " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Open van map met schrijfrechten gefaald: " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "Bestandsgrootte: %u. Maximum Grootte Toegestaan: %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "Bestandsbreedte: %u. Maximum Breedte Toegestaan: %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "Bestandshoogte: %u. Maximum Hoogte Toegestaan: %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "MIME type not toegestaan: " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Uploaden bestand gefaald: " );
define( "_AM_IMLINKS_FILE", "Bestand " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " bestaat al op de server. Hernoem dit bestand en probeer het opnieuw.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Errors Ontstaan Tijdens Uploaden</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " bestaat niet!" );
define( "_AM_IMLINKS_INFORMATION", "Link Informatie" );
define( "_AM_IMLINKS_HITS", "Hits: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank™: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "Je kan een categorie NIET als sub-categorie van zichzelf maken!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Land:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "Straat 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Straat 2 (optioneel):" );
define( "_AM_IMLINKS_MOD_TOWN", "Plaats:" );
define( "_AM_IMLINKS_MOD_STATE", "Provincie:" );
define( "_AM_IMLINKS_MOD_ZIP", "Postcode:" );
define( "_AM_IMLINKS_MOD_TEL", "Telefoon:" );
define( "_AM_IMLINKS_MOD_FAX", "Fax:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "GSM:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "BTW nr." );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Laat laatste lijst zien?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "Hoeveel links laten zien?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 Schakelt deze optie uit." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Documentatie" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Geen afbeelding" );
define( "_AM_IMLINKS_NOSELECTION", "Geen selektie" );
define( "_AM_IMLINKS_NOFILESELECT", "Geen bestand gekozen" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', 'Als geen land gekozen is, dan kan het adres niet samengestelt worden en wordt in dit geval ook niet weergegeven.' );
define( '_AM_IMLINKS_MAPDSC', 'Klik op het icoon om een nieuw browser tab of venster met daarin de kaart te openen.<br />Standaard: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Klik op het icoon om de url in een nieuw browser tab of venster te tonen. U kunt dit gebruiken om de link te testen.' );
define( '_AM_IMLINKS_STREETTWODSC', 'Dit veld is optioneel. Indien gewenst kan het veld leeg gelaten worden.' );
define( '_AM_IMLINKS_STATEDSC', 'Vul hier de graafschap, district, gemeente, provincie, staat, etc. in. Indien gewenst kan het veld leeg gelaten worden.' );
define( '_AM_IMLINKS_EMAILDSC', 'Vul het email adres in als:<br />- name@domain.com<br />- mailto:name@domain.com' );
?>