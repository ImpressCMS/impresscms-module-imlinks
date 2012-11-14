<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/french/admin.php
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
* ----------------------------------------------------------------------------------------------------------
* translation	cpascal
* language		french (français)
* format		ansi
*/

//avertissement
define("_AM_IMLINKS_WARNINSTALL1", "<b>ATTENTION !</b><br /> le dossier %s existe sur votre serveur.<br />il faut supprim&eacute; ce dossier pour des raisons de s&eacute;curit&eacute;.");
define("_AM_IMLINKS_WARNINSTALL2", "<b>ATTENTION !</b><br /> le fichier %s existe sur votre serveur.<br />il faut supprim&eacute; ce fichier pour des raisons de s&eacute;curit&eacute;");
define("_AM_IMLINKS_WARNINSTALL3", "<b>ATTENTION !</b><br /> le dossier %s n'existe pas sur votre serveur.<br />Ce dossier est exig&eacute;.");
define("_AM_IMLINKS_WARNINSTALL4", "<b>ATTENTION !</b><br /><u>le dossier</u> %s est ferm&eacute; en &eacute;criture. <br />Le CHMOD 777 est requis pour ce dossier.");

//
define("_AM_IMLINKS_BMODIFY", "Modifier");
define("_AM_IMLINKS_BAPPROVE", "Approuver");
define("_AM_IMLINKS_BIGNORE", "Ignorer");
define("_AM_IMLINKS_BSAVE", "Valider");
define("_AM_IMLINKS_BRESET", "Recommencer");
define("_AM_IMLINKS_BMOVE", "D&eacute;placer les sites");
define("_AM_IMLINKS_BUPLOAD", "Charger");
define("_AM_IMLINKS_BDELETEIMAGE", "Effacer l'image s&eacute;lectionn&eacute;e");
define("_AM_IMLINKS_DBERROR", "ERREUR !  impossible d'acc&egrave;der &agrave; la base de donn&eacute;es !");
define('_AM_IMLINKS_CLONELINK', "Cloner ce site");

// autres options
define("_AM_IMLINKS_TEXTOPTIONS", "Options texte:");
define("_AM_IMLINKS_DISABLEXCODE", "D&eacute;sactiver les BBCodes");
define("_AM_IMLINKS_DISABLEIMAGES", "D&eacute;sactiver les images");
define("_AM_IMLINKS_DISABLEBREAK", "Convertir les sauts de ligne ?");

// Top menu administration
define("_AM_IMLINKS_BUPDATE", "Mise &agrave; jour du module");
define("_AM_IMLINKS_BINDEX", "Administration");
define("_AM_IMLINKS_BPERMISSIONS", "Permissions");
define("_AM_IMLINKS_GOMODULE", "Voir sur le site");

// Tableau de bord dans l'administration
define("_AM_IMLINKS_MINDEX_LINKSUMMARY", "Tableau de bord");
define("_AM_IMLINKS_SCATEGORY", "Cat&eacute;gorie:");
define("_AM_IMLINKS_SFILES", "Sites:");
define("_AM_IMLINKS_SNEWFILESVAL", "Propos&eacute;s:");
define("_AM_IMLINKS_SMODREQUEST", "Modifi&eacute;s:");
define("_AM_IMLINKS_SBROKENSUBMIT", "Bris&eacute;s:");

//navigation administration top
define("_AM_IMLINKS_MCATEGORY", "Gestion des cat&eacute;gories");
define("_AM_IMLINKS_MLINKS", "Ajouter un site");
define("_AM_IMLINKS_MLISTBROKEN", "Liste des urls lris&eacute;s");
define("_AM_IMLINKS_MLISTPINGTIMES", "Contr&ocirc;le du lien des sites");
define("_AM_IMLINKS_INDEXPAGE", "Gestion de la page d'accueil");
define("_AM_IMLINKS_MUPLOADS", "Gestion des images");
define("_AM_IMLINKS_DOCUMENTATION", "Documentation");
//Categories
define("_AM_IMLINKS_CCATEGORY_CREATENEW", "Cr&eacute;er une nouvelle cat&eacute;gorie");
define("_AM_IMLINKS_CCATEGORY_MODIFY", "Modifier une cat&eacute;gorie");
define("_AM_IMLINKS_CCATEGORY_MOVE", "D&eacute;placer une cat&eacute;gorie");
define("_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Titre de la cat&eacute;gorie:");
define("_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "ERREUR !<br />le lien ne peut pas &ecirc;tre d&eacute;plac&eacute; dans cette cat&eacute;gorie");
define("_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "ERREUR !<br />cette cat&eacute;gorie est introuvable le lien ne peut donc pas &ecirc;tre d&eacute;plac&eacute;");
define("_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Liens d&eacute;plac&eacute;s avec succ&egrave;s");
define("_AM_IMLINKS_CCATEGORY_CREATED", "Nouvelle cat&eacute;gorie cr&eacute;&eacute;e, avec succ&egrave;s");
define("_AM_IMLINKS_CCATEGORY_MODIFIED", "Cat&eacute;gorie modifi&eacute;e, avec succ&egrave;s");
define("_AM_IMLINKS_CCATEGORY_DELETED", "Cat&eacute;gorie effac&eacute;e, de la base de donn&eacute;es avec succ&egrave;s");
define("_AM_IMLINKS_CCATEGORY_AREUSURE", "ATTENTION !<br /> &Ecirc;tes-vous s&ucirc;r de vouloir effacer cette cat&eacute;gorie avec ses liens et commentaires ?");
define("_AM_IMLINKS_CCATEGORY_NOEXISTS", "Vous devez cr&eacute;er une cat&eacute;gorie avant d'ajouter un lien");
define("_AM_IMLINKS_FCATEGORY_TITLE", "Titre de la cat&eacute;gorie:");
define("_AM_IMLINKS_FCATEGORY_WEIGHT", "Position de la cat&eacute;gorie:");
define("_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Placer en tant que sous cat&eacute;gorie dans:");
define("_AM_IMLINKS_FCATEGORY_CIMAGE", "Image de la cat&eacute;gorie:");
define("_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Description de la cat&eacute;gorie:");
define("_AM_IMLINKS_ERROR_CATISCAT", "Impossible de d&eacute;finir une cat&eacute;gorie comme une sous-cat&eacute;gorie d'elle-m&ecirc;me !");

//Gestion des banni&eacute;res publicitaires
//ajout CPascalWeb - 27 mai 2009
define("_AM_IMLINKS_GESTIONPUBS", "Gestion des banni&eacute;res publicitaires");
//fin
define("_AM_IMLINKS_CATSPONSOR", "Choix du client publicitaire:");
define("_AM_IMLINKS_CATSPONSORDSC", "Affichera toutes les banni&eacute;res publicitaire pr&eacute;sente de ce client dans cette cat&eacute;gorie.");
define("_AM_IMLINKS_BANNERID", "Afficher une banni&egrave;re unique:" );
define("_AM_IMLINKS_BANNERIDDSC", "Affichera une banni&eacute;re s&eacute;lectionner ici par son num&eacute;ro ID dans cette cat&eacute;gorie." );

// Multi-cat&eacute;gorie mettre le site dans une autre cat&eacute;gorie aussi
define("_AM_IMLINKS_ALTCAT_CREATEF", "Ajouter ce site dans d'autres cat&eacute;gories");
define("_AM_IMLINKS_MALTCAT", "Multi-cat&eacute;gories");
define("_AM_IMLINKS_ALTCAT_MODIFYF", "Multi-cat&eacute;gories");
define("_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>s&eacute;lectionner les cat&eacute;gories pour ajouter ce site dans d'autres cat&eacute;gories.</li></ul>" );
define('_AM_IMLINKS_ALTCAT_CREATED', 'Ajout du site dans ces cat&eacute;gories valider !');

//page d'accueil
define("_AM_IMLINKS_IPAGE_UPDATED", "Page d'accueil modifi&eacute;e avec succ&egrave;s !");
define("_AM_IMLINKS_IPAGE_INFORMATION", "Information sur la page d'accueil");
define("_AM_IMLINKS_IPAGE_MODIFY", "Modification de la page d'accueil");
define("_AM_IMLINKS_IPAGE_CIMAGE", "Logo de la page d'accueil:");
define("_AM_IMLINKS_IPAGE_CTITLE", "Titre:");
define("_AM_IMLINKS_IPAGE_CHEADING", "texte d'accueil de l'en-t&ecirc;te:");
define("_AM_IMLINKS_IPAGE_CHEADINGA", "Alignement du texte en-t&ecirc;te:");
define("_AM_IMLINKS_IPAGE_CFOOTER", "Pied de page:" );
define("_AM_IMLINKS_IPAGE_CFOOTERA", "Alignement du pied de page:");
define("_AM_IMLINKS_IPAGE_CLEFT", " &agrave; gauche");
define("_AM_IMLINKS_IPAGE_CCENTER", "au centre");
define("_AM_IMLINKS_IPAGE_CRIGHT", "&agrave; droite");

// Permissions
define("_AM_IMLINKS_PERM_MANAGEMENT", "Gestion des autorisations");
define("_AM_IMLINKS_PERM_CPERMISSIONS", "Autorisation de visualiser les cat&eacute;gories");
define("_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "<ul><li>Choisir les cat&eacute;gories que chaque groupe est autoris&eacute; &agrave; visualiser</li><li>Ne pas oublier de donner les autorisations dans Gestion des groupes de impressCMS.</li></ul>");
define("_AM_IMLINKS_PERM_CNOCATEGORY", "Impossible de donner ces autorisations ! aucune cat&eacute;gorie n'a &eacute;t&eacute; cr&eacute;&eacute;e !");
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<br /><div><b>Info:</b> Ne pas oublier de donner les autorisations dans Gestion des groupes de impressCMS, m&ecirc;me si les permissions sont accorder ici.</div>");

//configuration
define("_AM_IMLINKS_LINK_IMAGEINFO", "Statut du serveur de l'h&eacute;bergeur");
define("_AM_IMLINKS_LINK_SPHPINI", "<b>Configuration de PHP.ini:</b>");
define("_AM_IMLINKS_LINK_SAFEMODESTATUS", "Safe Mode:");
define("_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register Globals:");
define("_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "file_uploads:");
define("_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Cela peut causer des probl&egrave;mes)");
define("_AM_IMLINKS_LINK_GDLIBSTATUS", "Support de la biblioth&egrave;que GD:");
define("_AM_IMLINKS_LINK_GDLIBVERSION", "Version de la biblioth&egrave;que GD:");
define("_AM_IMLINKS_LINK_GDON", "<b>Activ&eacute;</b> (Miniatures disponibles)");
define("_AM_IMLINKS_LINK_GDOFF", "<b>D&eacute;sactiv&eacute;</b> pas de capture disponible !");
define("_AM_IMLINKS_LINK_OFF", "<b>OFF</b>");
define("_AM_IMLINKS_LINK_ON", "<b>ON</b>");

//images
define("_AM_IMLINKS_LINK_CATIMAGE", "Image de la cat&eacute;gorie");
define("_AM_IMLINKS_LINK_SCREENSHOTS", "Capture d'&eacute;cran");
define("_AM_IMLINKS_LINK_MAINIMAGEDIR", "Images principales");
define("_AM_IMLINKS_LINK_FCATIMAGE", "url du dossier des images des cat&eacute;gories");
define("_AM_IMLINKS_LINK_FSCREENSHOTS", "url du dossier des captures d'&eacute;cran");
define("_AM_IMLINKS_LINK_FMAINIMAGEDIR", "url du dossier des images principales");
define("_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Charger une image:");
define("_AM_IMLINKS_LINK_FUPLOADPATH", "url du dossier de l'image:");
define("_AM_IMLINKS_LINK_FUPLOADURL", "URL de l'image:");
define("_AM_IMLINKS_LINK_FOLDERSELECTION", "A partir du dossier:");
define("_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Image s&eacute;lectionn&eacute;e:");
define("_AM_IMLINKS_LINK_FUPLOADIMAGE", "T&eacute;l&eacute;charger une image dans ce dossier");
define("_AM_IMLINKS_LINK_DELETEFILE", "ATTENTION !<br /> &Ecirc;tes vous s&ucirc;r de vouloir effacer cette image ?");
define("_AM_IMLINKS_LINK_IMAGEEXIST", "ERREUR !<br />L'image existe d&eacute;j&agrave; dans le dossier uploads/images/... !");
define("_AM_IMLINKS_LINK_IMAGEUPLOAD", "T&eacute;l&eacute;chargement de l'image effectu&eacute; avec succ&eacute;s");
define("_AM_IMLINKS_SHOWNOIMAGE", "Afficher aucune image");

//Accueil principal
define("_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Sites pr&eacute;sent dans l'annuaire:");
define("_AM_IMLINKS_MINDEX_ID", "ID");
define("_AM_IMLINKS_MINDEX_TITLE", "Titre du site");
define("_AM_IMLINKS_MINDEX_POSTER", "Soumis par");
define("_AM_IMLINKS_MINDEX_ONLINE", "Status");
define("_AM_IMLINKS_MINDEX_PUBLISH", "En ligne depuis le");
define("_AM_IMLINKS_MINDEX_PUBLISHED", "Modifier");
define("_AM_IMLINKS_MINDEX_EXPIRE", "Expire le");
define("_AM_IMLINKS_MINDEX_NOTSET", "Aucune date d&eacute;fini");
define("_AM_IMLINKS_MINDEX_SUBMITTED", "Propos&eacute; le");
define("_AM_IMLINKS_MINDEX_ACTION", "Action");
define('_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>D&eacute;tails de la page principale de l\'annuaire.</li><li>Il est possible de changer facilement le logo, le titre, l\'en-t&ecirc;te et le pied de la page principale de l\'annuaire.<li>Attention ! le logo choisi sera afficher dans toutes les pages de l\'annuaire.</li></ul>');

//Liens soumis
define("_AM_IMLINKS_SUB_SUBMITTEDFILES", "Sites Proposer");
define("_AM_IMLINKS_SUB_FILESWAITINGINFO", "Information sur les sites en attente de validation");
define("_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Sites en attente de validation:");
define("_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Valider</b> le site proposer.");
define("_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Modifier</b> les informations du site proposer avant validation.");
define("_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Effacer</b> ce site.");
define("_AM_IMLINKS_SUB_NOFILESWAITING", "Aucun site ne correspond aux crit&egrave;res de recherche");
define("_AM_IMLINKS_SUB_NEWFILECREATED", "Site valider !<br /> base de donn&eacute;e mise &agrave; jour avec succ&egrave;s");

//Information sur les votes
define("_AM_IMLINKS_VOTE_VOTEDELETED", "Ces votes sont effac&eacute;es !");

// Modifications
define("_AM_IMLINKS_MOD_TOTMODREQUESTS", "Total des modifications demand&eacute;s:");
define("_AM_IMLINKS_MOD_MODREQUESTS", "Liens modifi&eacute;s");
define("_AM_IMLINKS_MOD_MODREQUESTSINFO", "Information sur les liens modifi&eacute;s");
define("_AM_IMLINKS_MOD_MODID", "ID");
define("_AM_IMLINKS_MOD_MODTITLE", "Titre");
define("_AM_IMLINKS_MOD_MODPOSTER", "Post&eacute; par:");
define("_AM_IMLINKS_MOD_DATE", "Envoyer");
define("_AM_IMLINKS_MOD_NOMODREQUEST", "Aucune informations");
define("_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Soumis par:");
define("_AM_IMLINKS_MOD_MODIFYSUBMIT", "Auteur");
define("_AM_IMLINKS_MOD_PROPOSED", "D&eacute;tails du site propos&eacute;");
define("_AM_IMLINKS_MOD_ORIGINAL", "D&eacute;tails du site");
define("_AM_IMLINKS_MOD_REQDELETED", "Demande de modification supprim&eacute;e !");
define("_AM_IMLINKS_MOD_REQUPDATED", "Site mis &agrave; jour avec succ&egrave;s !");

//Informations sur ce site
define("_AM_IMLINKS_LINK_ID", "Identifiant de ce site:");
define("_AM_IMLINKS_LINK_IP", "Adresse IP de l'auteur:");
define("_AM_IMLINKS_INFORMATION", "Informations sur ce site");
define("_AM_IMLINKS_HITS", "Ce site &agrave; &eacute;t&eacute; visiter: ");
//ajout CPascalWeb - 15 mai 2009
define("_AM_IMLINKS_FOIS", "fois" );
define("_AM_IMLINKS_VOTE_RATINGSUR", "sur 5");
//fin
define("_AM_IMLINKS_PAGERANK", "Classement PageRank&trade; de Google: ");
define("_AM_IMLINKS_VOTE_RATING", "Ce site est noter");
define("_AM_IMLINKS_VOTE_TOTALRATE", "Total des votes pour ce site");
//ajout CPascalWeb - 20 mai 2009
define("_AM_IMLINKS_CNTRL", "Contr&ocirc;ler l'url de ce site");
define("_AM_IMLINKS_CTRL", 'Contr&ocirc;ler');
//fin

//Gestion des liens des sites
define("_AM_IMLINKS_LINK_MODIFYFILE", "Modifier les informations du site");
define("_AM_IMLINKS_LINK_CREATENEWFILE", "Ajouter un nouveau site");
define("_AM_IMLINKS_LINK_TITLE", "Nom du site:");
define("_AM_IMLINKS_LINK_DLURL", "URL du site:");
define('_AM_IMLINKS_LINKURLDSC', "Cliquez sur l'ic&ocirc;ne afin de v&eacute;rifier l'url du site.");
define("_AM_IMLINKS_LINK_DESCRIPTION", "Description du site:");
define("_AM_IMLINKS_LINK_CATEGORY", "Cat&eacute;gorie du site:");
define("_AM_IMLINKS_LINK_FILESSTATUS", "Mettre le site hors ligne ?");
define("_AM_IMLINKS_LINK_SETASUPDATED", "Signaler que le site &agrave; &eacute;t&eacute; mis &agrave; jour ?");
define("_AM_IMLINKS_LINK_SHOTIMAGE", "Capture d'&eacute;cran du site:");
define("_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br />Annuler la date d'expiration:");
define("_AM_IMLINKS_LINK_EXPIREDATE", "D&eacute;finir une date d'expiration ?");
define("_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", "Oui");
define("_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Date de publication du site:</b>");
define("_AM_IMLINKS_LINK_EXPIREDATESET", "Le site sera supprimer le:");
define("_AM_IMLINKS_LINK_SETEXPIREDATE", "supprimer le site le:");
define("_AM_IMLINKS_LINK_MUSTBEVALID", "La capture d'&eacute;cran doit &ecirc;tre pr&eacute;sente dans le dossier: %s");
define("_AM_IMLINKS_LINK_EDITAPPROVE", "Site approuv&eacute;:");
define("_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Le site &agrave; &eacute;t&eacute; cr&eacute;&eacute; avec succ&eacute;s !");
define("_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Le site &agrave; &eacute;t&eacute; modifi&eacute; avec succ&ecirc;s !");
define("_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "ATTENTION !<br /> Etes-vous s&ucirc;r de vouloir effacer le site:");
define("_AM_IMLINKS_LINK_FILEWASDELETED", "Le site %s a &eacute;t&eacute; supprimer avec succ&eacute;s !");
define("_AM_IMLINKS_LINK_FILEAPPROVED", "site valider avec succ&eacute;s !");
define("_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Cr&eacute;er un article &agrave; partir de ce site</b>");
define("_AM_IMLINKS_LINK_SUBMITNEWS", "Envoyer ce nouveau site comme un nouvel article ?");
define("_AM_IMLINKS_LINK_NEWSCATEGORY", "S&eacute;lectionnez une cat&eacute;gorie d'articles pour envoyer un article:");
define("_AM_IMLINKS_LINK_NEWSTITLE", "Titre de l'article:<div style='padding-top :4px; padding-bottom :4px;'><span style='font-weight :normal;'>Laissez vide pour utiliser le titre du lien</span></div>");
define("_AM_IMLINKS_LINK_PUBLISHER", "Accept&eacute; par:");
define("_AM_IMLINKS_LINK_FILEDELETED", "Le site a bien &eacute;t&eacute; effac&eacute; !");
define("_AM_IMLINKS_LINK_FILEERRORDELETE", "ERREUR !<br />site introuvable impossible de le supprimer !");
define("_AM_IMLINKS_LINK_NOFILEERROR", "ERREUR !<br />aucun site s&eacute;lectionn&eacute; !");
define("_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Coordonn&eacute;e du propri&eacute;taire du site</b>');

//Ajouter un site
define("_AM_IMLINKS_COUNTRY", "Pays:");
define('_AM_IMLINKS_COUNTRYDSC', "Si aucun pays n'est s&eacute;lectionn&eacute;e l'adresse maps sera plus difficile a trouver");
define("_AM_IMLINKS_KEYWORDS", "Mots cl&eacute;s:");
define("_AM_IMLINKS_KEYWORDS_NOTE", "<i>Les mots cl&eacute;s doivent &ecirc;tre s&eacute;par&eacute;s par une virgule (ex: Mot1, Mot2, Mot3).</i>");
define("_AM_IMLINKS_CATTITLE", "Cat&eacute;gorie");
define("_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps");
define("_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps");
define("_AM_IMLINKS_LINK_BINGMAP", "Bing Maps");
define('_AM_IMLINKS_MAPDSC', 'Cliquez sur l\'ic&ocirc;ne pour ouvrir nouvelle fen&ecirc;tre qui affichera la carte.<br />Url par d&eacute;fault: %s');
define("_AM_IMLINKS_LINK_CHECKMAP", "V&eacute;rifier la carte");
define("_AM_IMLINKS_STREET1", "Adresse");
define("_AM_IMLINKS_STREET2", "Adresse suite");
define('_AM_IMLINKS_STREETTWODSC', "facultatif si le champ est laiss&eacute; vide il ne sera pas afficher.");
define("_AM_IMLINKS_TOWN", "Ville");
define("_AM_IMLINKS_STATE", "D&eacute;partement");
define('_AM_IMLINKS_STATEDSC', "R&eacute;gion du propri&eacute;taire du site si le champ est laiss&eacute; vide il ne sera pas afficher." );
define("_AM_IMLINKS_ZIPCODE", "Code postal");
define("_AM_IMLINKS_TELEPHONE", "T&eacute;l&eacute;phone");
define("_AM_IMLINKS_FAX", "Fax");
define("_AM_IMLINKS_VOIP", "VoIP");
define("_AM_IMLINKS_LINK_SUBMITTER", "Nom de l'auteur:");
define("_AM_IMLINKS_MOBILE", "Portable:");
define("_AM_IMLINKS_VAT", "RCS");
define("_AM_IMLINKS_VATWIKI", "Uniquement pour les entreprises");
define("_AM_IMLINKS_EMAIL", "Email");
define('_AM_IMLINKS_EMAILDSC', 'Adresse Email:<br />- nom@domain.com&nbsp;&nbsp;<b>ou</b><br />- mailto:nom@domain.com');	
define("_AM_IMLINKS_ICO_EXPIRE", "Expire le:" );
define("_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Gestion des dates de publication du site</b>');
//ajout CPascalWeb - 20juin 2009
define("_AM_IMLINKS_LINK_CAPTECRAN", "&nbsp;<b>Capture d'&eacute;cran image</b>");
//fin
define('_AM_IMLINKS_COPYRIGHT', 'Copyright');

//Signalement de liens brisés
define("_AM_IMLINKS_BROKEN_FILE", "Liens bris&eacute;s");
define("_AM_IMLINKS_BROKEN_FILEIGNORED", "Ce signalement de liens bris&eacute;s &agrave; &eacute;t&eacute; ignor&eacute; et supprim&eacute; avec succ&eagrave;s !");
define("_AM_IMLINKS_BROKEN_NOWACK", "Statut chang&eacute; base de donn&eacute;es mise &agrave; jour !");
define("_AM_IMLINKS_BROKEN_NOWCON", "Changement de status confirm&eacute;, base de donn&eacute;es mise &agrave; jour !");
define("_AM_IMLINKS_BROKEN_REPORTINFO", "Informations sur les liens bris&eacute;s");
define("_AM_IMLINKS_BROKEN_REPORTSNO", "Signalement des liens bris&eacute;s en attente:");
define("_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignorer</b> le signalement du lien bris&eacute; et l'effacer.");
define("_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Supprimer</b> le site de l'annuaire signalement de lien bris&eacute; confirm&eacute;.");
define("_AM_IMLINKS_BROKEN_EDITDESC", "<b>Modifier</b> les informations du site pour r&eacute;soudre le probl&egrave;me.");
define("_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Pris en compte");////a revoir
define("_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirmer");////a revoir
define("_AM_IMLINKS_LINK_DELEDITMESS", "Effacer ce signalement de lien bris&eacute; ?<br /><span style='font-weight :normal;'>ce signalement de lien bris&eacute; sera effacer et le lien fonctionnera de nouveau.</span>");
define("_AM_IMLINKS_BROKEN_ID", "ID");
define("_AM_IMLINKS_BROKEN_REPORTER", "signaler par");
define("_AM_IMLINKS_BROKEN_FILESUBMITTER", "Auteur");
define("_AM_IMLINKS_BROKEN_DATESUBMITTED", "signaler le");
define("_AM_IMLINKS_BROKEN_ACTION", "Action");
define("_AM_IMLINKS_BROKEN_NOFILEMATCH", "il n'y a aucun signalement de lien bris&eacute;");
define("_AM_IMLINKS_BROKENFILEDELETED", "site et sont signalement de lien bris&eacute; effac&eacute; !");

//Contrôle des URLs des sites
define("_AM_IMLINKS_MINDEX_RESPONSE", "Temps de r&eacute;ponse");
define('_AM_IMLINKS_NOREPLY', 'Aucune r&eacute;ponse');
define("_AM_IMLINKS_LISTBROKEN", "Le contr&ocirc;le des sites recherche les sites qui ne sont peut-&ecirc;tre plus en ligne, soit ils n'existe plus ou le lien URL &agrave; changer donc bris&eacute;s.<br /><b><font color=red>Attention:</font></b> ces r&eacute;sultats peuvent ne pas &ecirc;tre exacts et doivent &ecirc;tre consid&eacute;rer comme une simple indication, mieux vaut v&eacute;rifier le site qui ne r&eacute;pond plus manuellement avant de le supprimer de l'annuaire.");//sert pas a grand chose !!!
define("_AM_IMLINKS_PINGTIMES", "Le contr&ocirc;le des sites recherche les sites qui ne sont peut-&ecirc;tre plus en ligne, soit ils n'existe plus ou le lien URL &agrave; changer donc bris&eacute;s.<br /><b><font color=red>Attention:</font></b> ces r&eacute;sultats peuvent ne pas &ecirc;tre exacts et doivent &ecirc;tre consid&eacute;rer comme une simple indication, mieux vaut v&eacute;rifier le site qui ne r&eacute;pond plus manuellement avant de le supprimer de l'annuaire.");
define("_AM_IMLINKS_LINK_NORESPONSE", 'Aucune r&eacute;ponse');
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "Aucun site inscrit");

//images icônes dans l'administration
define("_AM_IMLINKS_ICO_EDIT", "Modifier ce site");
define("_AM_IMLINKS_ICO_DELETE", "Effacer ce site");
define("_AM_IMLINKS_ICO_ONLINE", "en ligne");
define("_AM_IMLINKS_ICO_OFFLINE", "hors ligne");
define("_AM_IMLINKS_ICO_APPROVED", "Approuv&eacute;");
define("_AM_IMLINKS_ICO_NOTAPPROVED", "Non approuv&eacute;");
define("_AM_IMLINKS_ICO_LINK", "Lien relatif");/// a vérifier
define("_AM_IMLINKS_ICO_URL", "Ajouter un lien relatif");/// a vérifier
define("_AM_IMLINKS_ICO_APPROVE", "Approuver");
define("_AM_IMLINKS_ICO_STATS", "Statistiques");
define("_AM_IMLINKS_ICO_VIEW", "Voir cet article");
define("_AM_IMLINKS_ICO_ACK", "Reconna&icirc;tre le signalement de lien bris&eacute;");
define("_AM_IMLINKS_ICO_REPORT", "Reconna&icirc;tre le signalement du lien bris&eacute; ?");
define("_AM_IMLINKS_ICO_CONFIRM", "Signalement du lien bris&eacute; confirm&eacute;");
define("_AM_IMLINKS_ICO_CONBROKEN", "Confirmer le signalement du lien bris&eacute; ?");
define('_AM_IMLINKS_ICO_CLONE', "Cloner ce site");

//Permissions
define("_AM_IMLINKS_PERM_RATEPERMISSIONS", "Autorisation de voter");
define("_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "<ul><li>Choisir les groupes autoris&eacute; &agrave; voter pour un site dans ces cat&eacute;gories.</li><li>Ne pas oublier de donner les autorisations dans Gestion des groupes de impressCMS.</li></ul>");
define("_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Validation automatique de nouveaux sites");
define("_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "<ul><li>Choisir les groupes qui peuvent proposer de nouveaux sites qui seront valider automatiquement dans ces cat&eacute;gories.</li><li>Ne pas oublier de donner les autorisations dans Gestion des groupes de impressCMS.</li></ul>");
define("_AM_IMLINKS_PERM_SPERMISSIONS", "Autorisation de proposer de nouveaux sites");
define("_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "<ul><li>Choisir les groupes qui peuvent proposer de nouveaux sites dans ces cat&eacute;gories.</li><li>Ne pas oublier de donner les autorisations dans Gestion des groupes de impressCMS.</li></ul>");
define("_AM_IMLINKS_PERM_APERMISSIONS", "Droits d'administration");
define("_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "<ul><li>Choisir les groupes qui ont les droits d'administration des sites dans ces cat&eacute;gories.</li><li>Ne pas oublier de donner les autorisations dans Gestion des groupes de impressCMS.</li></ul>");

//Télécharger
define("_AM_IMLINKS_READWRITEERROR", "ERREUR !<br /> Vous n'avez pas choisi un fichier &agrave; t&eacute;l&eacute;charger ou le dossier de destination n'a pas les droits de lecture/&eacute;criture CHMOD.");
define("_AM_IMLINKS_INVALIDFILESIZE", "Taille du fichier incorrecte");
define("_AM_IMLINKS_FILENAMEEMPTY", "Nom du fichier inconnu !");
define("_AM_IMLINKS_NOFILEUPLOAD", "ERREUR !<br />aucun fichier n'a pu &ecirc;tre t&eacute;l&eacute;charger !");
define("_AM_IMLINKS_UPLOADERRORZERO", "D&eacute;sol&eacute; !<br />une erreur de type 0 est survenue !");
define("_AM_IMLINKS_UPLOADERRORONE", "ERREUR !<br />une erreur de type 1 est survenue le fichier est trop volumineux !");
define("_AM_IMLINKS_UPLOADERRORTWO", "ERREUR !<br />une erreur de type 2 est survenue le fichier est trop volumineux !");
define("_AM_IMLINKS_UPLOADERRORTHREE", "ERREUR !<br />une erreur de type 3 est survenue le fichier n'a &eacute;t&eacute; t&eacute;l&eacute;charger enti&eacute;rement !");
define("_AM_IMLINKS_UPLOADERRORFOUR", "ERREUR !<br />une erreur de type 4 est survenue aucun fichier s&eacute;lectionn&eacute; !");
define("_AM_IMLINKS_UPLOADERRORFIVE", "ERREUR !<br />une erreur de type 5 est survenue aucun fichier s&eacute;lectionn&eacute; !");
define("_AM_IMLINKS_NOUPLOADDIR", "ERREUR !<br />absence du dossier de t&eacute;l&eacute;chargement dans le dossier Upload");
define("_AM_IMLINKS_FAILOPENDIR", "ERREUR !<br />impossible d'acc&eacute;der au dossier:" );
define("_AM_IMLINKS_FAILOPENDIRWRITEPERM", "ERREUR !<br />impossible d'acc&eacute;der au dossier avec les permissions (CHMOD) " );
define("_AM_IMLINKS_FILESIZEMAXSIZE", "ERREUR !<br />la du taille du fichier est de: %u. <br />la taille maximale autoris&eacute;e est de: %u");
define("_AM_IMLINKS_FILESIZEMAXWIDTH", "ERREUR !<br />la du taille du fichier en largeur est de: %u. <br />la taille maximale autoris&eacute;e en largeur est de: %u");
define("_AM_IMLINKS_FILESIZEMAXHEIGHT", "ERREUR !<br />la du taille du fichier en hauteur est de: %u. <br />la taille maximale autoris&eacute;e en hauteur est de: %u");
define("_AM_IMLINKS_MIMENOTALLOW", "ERREUR !<br />type MIME non autoris&eacute; !");
define("_AM_IMLINKS_FAILEDUPLOADING", "Impossible de charger le fichier !");
define("_AM_IMLINKS_FILE", "Le fichier");
define("_AM_IMLINKS_ALREADYEXISTTRYAGAIN", "existe d&eacute;j&agrave; sur le serveur. renommer le avant de le t&eacute;l&eacute;charger a nouveau.<br />");
define("_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Erreurs durant le t&eacute;l&eacute;chargement</h4>");
define("_AM_IMLINKS_DOESNOTEXIST", "n'exite pas !");
define("_AM_IMLINKS_LINK_NOIMAGEEXIST", "ERREUR !<br /> aucun lien n'a &eacute;t&eacute; s&eacute;lectionn&eacute; pour le t&eacute;l&eacute;chargement. Merci de recommencer !");

//gestion de la page d'accueil de l'annuaire dans l'administration
define("_AM_IMLINKS_IPAGE_SHOWLATEST", "Afficher les derniers sites inscrits ?");
define("_AM_IMLINKS_IPAGE_LATESTTOTAL", "Nombres des derniers sites &agrave; afficher ?");
define("_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 d&eacute;sactive cette fonction");
define("_AM_IMLINKS_NOSELECTION", "Pas de s&eacute;lection");
define("_AM_IMLINKS_NOFILESELECT", "Pas de fichier s&eacute;lectionn&eacute;");

//Forum
define("_AM_IMLINKS_LINK_DISCUSSINFORUM", "Ajouter une discussion dans le forum:");
//Ajout CPascalWeb - 26 mai 2009
define("_AM_IMLINKS_LINK_SELECFORUM", "&nbsp;<b>S&eacute;lection d'un Forum</b>");
//fin
define("_AM_IMLINKS_NO_FORUM", "aucun forum s&eacute;lectionn&eacute;");

//Flux d'actualit&eacute; RSS
define('_AM_IMLINKS_RSSFEED', 'Flux RSS');
define('_AM_IMLINKS_RSSFEEDCFG', 'Configuration des flux RSS');
define('_AM_IMLINKS_RSSFEEDDSC', 'configuration des flux d\'actualit&eacute; RSS de l\'annuaire.<br />Pour de plus amples renseignements, voir ce <a href="http://www.rssboard.org/" target="_blank">site</a>');
define('_AM_IMLINKS_RSSACTIVE', 'Activer les flux RSS');
define('_AM_IMLINKS_RSSACTIVEDSC', 'oui pour activer le flux d\'actualit&eacute; ou non pour d&eacute;sactv&eacute; cette fonction');
define('_AM_IMLINKS_RSSTITLE', 'Titre du flux d\'actualit&eacute; RSS');
define('_AM_IMLINKS_RSSTITLEDSC', 'Titre qui va appara&icirc;tre dans l\'onglet du navigateur de la personne qui s\'abonne a ce flux d\'actualit&eacute; RSS.');
define('_AM_IMLINKS_RSSLINKS', 'Lien du flux RSS');
define('_AM_IMLINKS_RSSLINKSDSC', 'Lien URL du flux d\'actualit&eacute; RSS g&eacute;n&eacute;rale.');
define('_AM_IMLINKS_RSSDESCRIPTION', 'Description du flux RSS');
define('_AM_IMLINKS_RSSDESCRIPTIONDSC', 'petite phrase ou slogan d&eacute;crivant le flux.');
define('_AM_IMLINKS_RSSIMAGE', 'Image du flux');
define('_AM_IMLINKS_RSSIMAGEDSC', 'URL de l\'image du flux qui appara&icirc;tra en format GIF, JPEG ou PNG.');
define('_AM_IMLINKS_RSSWIDTH', 'Largeur de l\'image');
define('_AM_IMLINKS_RSSWIDTHDSC', 'largeur de l\'image autoris&eacute; en pixel.<br />Attention la taille maximum est de 144px.');
define('_AM_IMLINKS_RSSHEIGHT', 'Hauteur de l\'image');
define('_AM_IMLINKS_RSSHEIGHTDSC', 'hauteur de l\'image autoris&eacute; en pixel.<br />Attention la taille maximum est de 400px.');
define('_AM_IMLINKS_RSSIMGTITLE', 'Titre de l\'image');
define('_AM_IMLINKS_RSSIMGTITLEDSC', 'texte de l\'image qui appara&icirc;tra dans le ALT.');
define('_AM_IMLINKS_RSSIMGLINK', 'Lien de l\'image');
define('_AM_IMLINKS_RSSIMGLINKDSC', 'URL du lien lorsque l\'ont clique sur l\'image.');
define('_AM_IMLINKS_RSSTTL', 'R&eacute;-actualisation');
define('_AM_IMLINKS_RSSTTLDSC', 'nombre de minutes avant de la r&eacute;-actualisation de la source RSS.');
define('_AM_IMLINKS_RSSWEBMASTER', 'Email du webmaster');
define('_AM_IMLINKS_RSSWEBMASTERDSC', 'adresse Email de la personne responsable pour les questions techniques relatives aux flux.');
define('_AM_IMLINKS_RSSEDITOR', 'Email du r&eacute;dacteur');
define('_AM_IMLINKS_RSSEDITORDSC', 'adresse Email de la personne responsable du contenu.');
define('_AM_IMLINKS_RSSCATEGORY', 'nom de la cat&eacute;gorie');
define('_AM_IMLINKS_RSSCATEGORYDSC', 'le nom de la cat&eacute;gorie ou plusieurs nom de cat&eacute;gories pour plusieurs flux.');
define('_AM_IMLINKS_RSSGENERATOR', 'G&eacute;n&eacute;rateur de flux RSS');
define('_AM_IMLINKS_RSSGENERATORDSC', 'nom indiquant le programme utilis&eacute; pour g&eacute;n&eacute;rer flux RSS.');
define('_AM_IMLINKS_RSSCOPYRIGHT', 'Copyright du flux RSS');
define('_AM_IMLINKS_RSSCOPYRIGHTDSC', 'copyright afficher dans le flux RSS.');
define('_AM_IMLINKS_RSSTOTAL', 'Nombre de liens RSS');
define('_AM_IMLINKS_RSSTOTALDSC', 'nombre total de liens autoris&eacute; &agrave; &ecirc;tre afficher dans les flux RSS.');
define('_AM_IMLINKS_RSSDBUPDATED', 'Base de donn&eacute;es mis &agrave; jour avec succ&egrave;s');
define('_AM_IMLINKS_RSSOFFLINE', 'Titre du Message hors ligne');
define('_AM_IMLINKS_RSSOFFLINEDSC', 'titre du message lorsque le flux RSS est d&eacute;sactiv&eacute;.');
define('_AM_IMLINKS_RSSOFFMSG', 'texte du message hors ligne');
define('_AM_IMLINKS_RSSOFFMSGDSC', 'explication de la raison pour laquelle le flux RSS a &eacute;t&eacute; d&eacute;sactiv&eacute;.');
define('_AM_IMLINKS_RSSOFFTITLE', "Flux RSS d&eacute;sactiv&eacute;.");
define('_AM_IMLINKS_RSSOFFMSGDEF', 'nous sommes d&eacute;sol&eacute; le flux d\'actualit&eacute; RSS de l\'annuaire a &eacute;t&eacute; d&eacute;sactiv&eacute; temporairement pour maintenance.');
define('_AM_IMLINKS_RSSCLICKSUBMIT', 'cliquez sur ce message pour activer ce formulaire dans la base de donn&eacute;es !');
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
define("_AM_IMLINKS_LINK_FILESSTATUSDSC", "Le site ne sera plus visible dans l'annuaire.");
define("_AM_IMLINKS_LINK_SETASUPDATEDDSC", "Une ic&ocirc;ne de mise &agrave; jour appara&icirc;tra.");
define( '_AM_IMLINKS_SCRSHOTENLARGE', 'Click image to enlarge' );

// Version 1.13
define( '_AM_IMLINKS_SEARCHTITLE', 'Search title' );
define( '_AM_IMLINKS_NOTPUBLISHED', 'Not Published' );
define( '_AM_IMLINKS_IPAGE_LETTERS', 'Show letters:' );
define( '_AM_IMLINKS_IPAGE_LETTERSDSC', 'Show letters above each page.' );
define( '_AM_IMLINKS_IPAGE_BUTTONS', 'Show buttons:' );
define( '_AM_IMLINKS_IPAGE_BUTTONSDSC', 'Show buttons like Submit, Popular and Latest Listing above each page.' );
?>