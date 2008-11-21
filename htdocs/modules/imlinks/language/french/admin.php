<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/french/admin.php
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
* translation		
* language		french (fran�ais)
* format			ansi
*/

define( "_AM_IMLINKS_WARNINSTALL1", "AVERTISSEMENT : Le r&eacute;pertoire %s existe sur votre serveur.<br />Enlevez svp cet r&eacute;pertoire pour des raisons de s&eacute;curit&eacute;." );
define( "_AM_IMLINKS_WARNINSTALL2", "AVERTISSEMENT : Le fichier %s existe sur votre serveur.<br />Enlevez svp ce fichier pour des raisons de s&eacute;curit&eacute;" );
define( "_AM_IMLINKS_WARNINSTALL3", "AVERTISSEMENT : Le r&eacute;pertoire %s n'existe pas sur votre serveur.<br />Ce r&eacute;pertoire est exig&eacute; par WF-Links." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Modifier" );
define( "_AM_IMLINKS_BDELETE", "Effacer" );
define( "_AM_IMLINKS_BCREATE", "Cr&eacute;er" );
define( "_AM_IMLINKS_BADD", "Ajouter" );
define( "_AM_IMLINKS_BAPPROVE", "Approuver" );
define( "_AM_IMLINKS_BIGNORE", "Ignorer" );
define( "_AM_IMLINKS_BCANCEL", "Annuler" );
define( "_AM_IMLINKS_BSAVE", "Sauvegarder" );
define( "_AM_IMLINKS_BRESET", "Recommencer" );
define( "_AM_IMLINKS_BMOVE", "D&eacute;placer les liens" );
define( "_AM_IMLINKS_BUPLOAD", "Charger" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Effacer l'image s&eacute;lectionn&eacute;e" );
define( "_AM_IMLINKS_BRETURN", "Retourner d'o� vous venez!" );
define( "_AM_IMLINKS_DBERROR", "Erreur d'acc&egrave;s &agrave; la base de donn&eacute;es :Merci de rapporter cette erreur sur le site WF-Projects" );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Options texte:" );
define( "_AM_IMLINKS_DISABLEHTML", " D&eacute;sactiver les balises HTML" );
define( "_AM_IMLINKS_DISABLESMILEY", " D&eacute;sactiver les smilies" );
define( "_AM_IMLINKS_DISABLEXCODE", " D&eacute;sactiver le code ICMS" );
define( "_AM_IMLINKS_DISABLEIMAGES", " D&eacute;sactiver les images" );
define( "_AM_IMLINKS_DISABLEBREAK", " Utiliser la conversion ICMS linebreak?" );
define( "_AM_IMLINKS_UPLOADFILE", "Liens t&eacute;l&eacute;charg&eacute; avec succ&eacute;s" );
define( "_AM_IMLINKS_NOMENUITEMS", "Aucun items dans le menu" );
// Admin Bread crumb
define( "_AM_IMLINKS_PREFS", "Pr&eacute;f&eacute;rences" );
define( "_AM_IMLINKS_BUPDATE", "Mise � jour du module" );
define( "_AM_IMLINKS_BINDEX", "Index principal" );
define( "_AM_IMLINKS_BPERMISSIONS", "Permissions" );
// define( "_AM_IMLINKS_BLOCKADMIN", "Blocs" );
define( "_AM_IMLINKS_BLOCKADMIN", "Option des blocs" );
define( "_AM_IMLINKS_GOMODULE", "Allez au module" );
define( "_AM_IMLINKS_ABOUT", "A propos" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Cat&eacute;gorie :" );
define( "_AM_IMLINKS_SFILES", "Liens :" );
define( "_AM_IMLINKS_SNEWFILESVAL", "Propos&eacute;s :" );
define( "_AM_IMLINKS_SMODREQUEST", "Modifi&eacute;s :" );
define( "_AM_IMLINKS_SREVIEWS", "Critiques :" );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Gestionnaire des cat&eacute;gories" );
define( "_AM_IMLINKS_MLINKS", "Gestionnaire des liens" );
define( "_AM_IMLINKS_MLISTBROKEN", "Lister les liens bris&eacute;s" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "Lister le temps de ping des liens" );
define( "_AM_IMLINKS_INDEXPAGE", "Gestion de la page Index" );
define( "_AM_IMLINKS_MCOMMENTS", "Commentaires" );
define( "_AM_IMLINKS_MVOTEDATA", "Donn&eacute;es de vote" );
define( "_AM_IMLINKS_MUPLOADS", "Chargement d'images" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Cr&eacute;er une nouvelle cat&eacute;gorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Modifier une cat&eacute;gorie" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "D&eacute;placer une cat&eacute;gorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Titre de la cat&eacute;gorie :" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Erreur lors du d&eacute;placement du lien : Ne peut pas &ecirc;tre d&eacute;plac&eacute; vers cette cat&eacute;gorie" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Erreur lors du d&eacute;placement du lien : cat&eacute;gorie introuvable" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Liens d&eacute;plac&eacute;s et cat&eacute;gorie &eacute;ffac&eacute;e" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "Nouvelle cat&eacute;gorie cr&eacute;&eacute;e, la base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Cat&eacute;gorie modifi&eacute;e, la base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Cat&eacute;gorie effac&eacute;e, la base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "ATTENTION : Etes-vous s&ucirc;r de vouloir effacer cette cat&eacute;gori et TOUS ses liens et commentaires ? " );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "Vous devez cr&eacute;er une cat&eacute;gorie avant d'ajouter un nouveau lien" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Permissions d'acc&egrave;s aux cat&eacute;gories<div style='padding-top :8px;'><span style='font-weight :normal;'>S&eacute;lectionnez des groupes d'utilisateurs qui peuvent acc&eacute;der &agrave; cette cat&eacute;gorie.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Permission de soumission de cat&eacute;gories:<div style='padding-top :8px;'><span style='font-weight :normal;'>S&eacute;lectionnez les groupes d'utilisateurs qui auront la possibilit&eacute; de proposer de nouveaux liens dans cette cat&eacute;gorie.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Permission de mod&eacute;ration des cat&eacute;gories:<div style='padding-top :8px;'><span style='font-weight :normal;'>S&eacute;lectionnez les groupes d'utilisateurs qui mod&eagravereront cette cat&eacute;gorie.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Titre de la cat&eacute;gorie:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Poids de la cat&eacute;gorie:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "D&eacute;finir comme sous-cat&eacute;gorie de:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "S&eacute;lectionnez une image pour la cat&eacute;gorie:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Description de la cat&eacute;gorie:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Sommaire de la cat&eacute;gorie :" );
/**
 * Index page Defines
 */
define( "_AM_IMLINKS_IPAGE_UPDATED", "Page d'index modifi&eacute;e , la base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Information sur la page Index" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Modification de la page d'index" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "S&eacute;lectionnez l'image de l'index :" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Titre :" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "En-t&ecirc;te :" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Alignement de l'en-t&ecirc;te :" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Pied de page :" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Alignement du pied de page:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Gauche" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Centre" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Droite" );
/**
 * Permissions defines
 */
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Gestionnaire des permissions" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>NOTE:</b> N'oubliez pas que m&ecirc;me si vous avez correctement s&eacute;lectionn&eacute; des permissions ici, un groupe ne pourrait pas voir les articles ou les blocs si vous n'accordez pas &eacute;galement des permissions d'acc&egrave;s au module. Pour v&eacute;rifier la configuration, allez dans Admin Systeme > Groupes, choisissez le groupe appropri&eacute; et cochez les cases correspondantes pour autoriser l'acc&egrave;s &agrave; ses membres.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Permissions des cat&eacute;gories" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "S&eacute;lectionnez les cat&eacute;gories que chaque groupe est autoris&eacute; &agrave; visualiser" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Impossible de d&eacute;finir les permissions : aucune cat&eacute;gorie n'a &eacute;t&eacute; cr&eacute;&eacute;e!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Permissions des liens" );
define( "_AM_IMLINKS_PERM_FNOFILES", "mpossible de d&eacute;finir les permissions : aucun lien n'a &eacute;t&eacute; cr&eacute;&eacute;!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "S&eacute;lectionnez les liens que chaque groupe est autoris&eacute; &agrave; visualiser" );
/**
 * Upload defines
 */
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "T&eacute;l&eacute;chargement de l'image effectu&eacute; avec succ&eacute;s" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Erreur : aucun lien n'a &eacute;t&eacute; s&eacute;lectionn&eacute; pour le t&eacute;l&eacute;chargement.  Merci de recommencer!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "L'image existe d&eacute;j&agrave; dans la zone de t&eacute;l&eacute;chargement!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Le lien a &eacute;t&eacute; effac&eacute;." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Erreur lors de l'effacement du lien :lien introuvable sur le serveur." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Erreur lors de l'effacement du lien : pas de lien s&eacute;lectionn&eacute;." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "ATTENTION : Etes-vous s&ucirc;r de vouloir effacer cette image ?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Statut du serveur" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Informations issues du PHP.ini:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Safe Mode :" );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register Globals :" );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Statut upload du serveur :" );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Taille maximale autoris&eacute;e pour les fichiers &agrave; t&eacute;l&eacute;charger :" );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Taille maximale autoris&eacute;e des envois :" );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (Ceci peut poser des probl&egrave;mes)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "Support de la biblioth&egrave;que GD :" );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "Version de la biblioth&egrave;que GD :" );
define( "_AM_IMLINKS_LINK_GDON", "<b>Activ&eacute;</b> (Miniatures disponibles)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>D&eacute;sactiv&eacute;</b> (Pas d'aper&ccedil;u disponible)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>OFF</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>ON</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Image de la cat&eacute;gorie" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Capture d'&eacute;cran" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Images principales" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Chemin des cat&eacute;gories d'images" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Chemin des aper&ccedil;us" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Chemin des images principales" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Charger l'image :" );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Chemin de t&eacute;l&eacute;chargement :" );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "URL de t&eacute;l&eacute;chargement :" );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Choisissez la destination du t&eacute;l&eacute;chargement :" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Afficher l'image s&eacute;lectionn&eacute;e:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Charger une nouvelle image vers la destination choisie" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Synth&egrave;se de l'administration du module" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Liens publi&eacute;s:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Liens auto-publi&eacute;s:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Liens auto-expirants:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Liens expirants:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Liens hors ligne:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Titre du lien" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Pied de page" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Statut en ligne" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Editer" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Edit&eacute;" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Expir&eacute;" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Aucune date pr&eacute;cis&eacute;e" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Action" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "Note :Aucun lien ne correspond aux crit&egrave;res de s&eacute;lection" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '<ul><li>D&eacute;tails de la page principale de WF-links.</li><li>Vous pouvez facilement changer le logo, le titre, l\'en-t&ecirc;te et le pied de page de l\'index principal pour les adapter &agrave; vos besoins.</li></ul><br />Note :Le logo choisi sera employ&eacute; dans toutes les pages de WF-links.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Temps de r&eacute;ponse" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Liens soumis" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Information sur les liens en attente" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Liens en attente de validation :" );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Approuver</b> les informations du lien sans validation." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Editer</b> les informations du lien et approuver." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Effacer</b> les informations du nouveau lien." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "Aucun lien ne correspond aux crit&egrave;res de recherche" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "Les donnn&eacutes;es du nouveau lien ont cr&eacute;&eacute;es et la base de donn&eacute;e a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Information sur les votes" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Nombre total de votes :" );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Votes des utilisateurs enregistr&eacute;s :%s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Votes des utilisateurs anonymes :%s" );
define( "_AM_IMLINKS_VOTE_USER", "Utilisateur" );
define( "_AM_IMLINKS_VOTE_IP", "Addresse IP" );
define( "_AM_IMLINKS_VOTE_DATE", "Propos&eacute;" );
define( "_AM_IMLINKS_VOTE_RATING", "Notation" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "Pas de vote de la part d'utilisateurs enregistr&eacute;s" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "Pas de vote de la part d'utilisateurs anonymes" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Donn&eacute;es des votes effac&eacute;es." );
define( "_AM_IMLINKS_VOTE_ID", "Num&eacute;ro" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Titre du lien" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Information sur les votes" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "Pas de votes � afficher" );
define( "_AM_IMLINKS_VOTE_DELETE", "Aucun vote des utilisateurs &agrave; afficher" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Efface</b> de la base de donn&eacute;es les informations des votes choisis." );
define( "_AM_IMLINKS_VOTEDELETED", "Votes s&eacute;lectionn&eacute;s effac&eacute;s de la base de donn&eacute;es" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Estimation moyenne des utilisateurs" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Votes total" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Plus forte note" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Plus basse note" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "El&eacute;ment le plus not&eacute;" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "El&eacute;ment le moins not&eacute;" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Votant le plus actif" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Votes d'utilisateurs enregistr&eacute;s" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Votes des anonymes" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Nombre total de demandes totales de modification :" );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Liens modifi&eacute;s" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Information sur les liens modifi&eacute;s" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Titre" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Post&eacute; par :" );
define( "_AM_IMLINKS_MOD_DATE", "Envoyer" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "Aucune demande ne correspond aux crit&egrave;res" );
define( "_AM_IMLINKS_MOD_TITLE", "Titre :" );
define( "_AM_IMLINKS_MOD_LID", "ID :" );
define( "_AM_IMLINKS_MOD_CID", "Cat&eacute;gorie :" );
define( "_AM_IMLINKS_MOD_URL", "Url :" );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Auteur :" );
define( "_AM_IMLINKS_MOD_FORUMID", "Forum :" );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Copie d'&eacute;cran :" );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Page d'accueil :" );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Titre de la page d'accueil :" );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Copie d'&eacute;cran :" );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Description :" );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Auteur :" );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Auteur" );
define( "_AM_IMLINKS_MOD_PROPOSED", "D&eacute;tails du lien propos&eacute;" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "D&eacute;tails du lien original" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Requ&ecirc;te de modification effac&eacute;e de la base de donn&eacute;es" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Lien s&eacute;lectionn&eacute; modifi&eacute;, base de donn&eacute;es mise &agrave; jour avec succ&egrave;s" );
define( '_AM_IMLINKS_MOD_VIEW', 'Vue' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "ID du lien :" );
define( "_AM_IMLINKS_LINK_IP", "Adresse IP d'origine :" );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top :4px; padding-bottom :4px;'><b>Extensions autoris&eacute;e de l'administrateur</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Modifier l'information du lien" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Cr&eacute;er un nouveau lien" );
define( "_AM_IMLINKS_LINK_TITLE", "Titre :" );
define( "_AM_IMLINKS_LINK_DLURL", "URL du lien :" );
define( "_AM_IMLINKS_LINK_DIRCA", " Meta rating :" );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Description du lien :" );
define( "_AM_IMLINKS_LINK_CATEGORY", "Cat&eacute;gorie du lien :" );
define( "_AM_IMLINKS_LINK_FILESSTATUS", "Mettre le lien hors ligne?<br /><br /><span style='font-weight :normal;'>Le lien ne sera plus visible par tous les utilisateurs.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", "Param&eacute;trez le lien comme mis &agrave; jour ?<br /><br /><span style='font-weight :normal;'>Une ic&ocirc;ne de mise &agrave; jour appara&icirc;tra.</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Copie d'&eacute;cran du lien :" );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Ajouter une discussion dans ce forum?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Date de publication du lien :");
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Date d'expiration du lien :" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Retirez la date de publication :" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Retirez la date d'expiration:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Editez les dates :" );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Param&eacute;trez la date/heure de publication" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Param&eacute;trez la date/heure d'expiration" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Date/heure de publication :</b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Set New Publish Date :</b><br />Published :" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Publish Date Set :</b><br />Publishes On Date :" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Expire date set :" );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Date/heure d'expiration :</b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Effacer le rapport de lien bris&eacute;?<br /><br /><span style='font-weight :normal;'>Si vous choisissez <b>OUI</b> le rapport de lien bris&eacute; sera automatiquement effac&eacute; et vous confirmez que le lien fonctionne de nouveau.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "La capture d'&eacute;cran doit &ecirc;tre une image valide dans le r&eacute;pertoire %s (ex. shot.gif). Laissez vide s'il n'y a pas d'images." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Lien approuv&eacute; :" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "Nouveau lien cr&eacute;&eacute;, la base de donn&eacute;es a &eacute;t&eacute; mis &agrave; jour avec succ&eacute;s" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Lien s&eacute;lectionn&eacute; a &eacute;t&eacute; modifi&eacute;, la base de donn&eacute;es a &eacute;t&eacute; mise &agrave; jour avec succ&ecirc;s" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Voulez-vous vraiment effac&eacute; le lien s&eacute;lectionn&eacute;e ?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Le lien %s a &eacute;t&eacute; enlev&eacute; avec succ&eacute;s!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Lien approuv&eacute;, la base de donn&eacute;e a &eacute;t&eacute; mise &agrave; jour avec succ&eacute;s" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Cr&eacute;er un article &agrave; partir de ce lien</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Envoyer ce nouveau lien comme un nouvel item ?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "S&eacute;lectionnez une cat&eacute;gorie d'articles pour envoyer un article:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "Titre de l'article :<div style='padding-top :4px; padding-bottom :4px;'><span style='font-weight :normal;'>Laissez vide pour utiliser le titre du lien</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Nom de l'auteur du lien :" );

/**
 * Broken links defines
 */
define( "_AM_IMLINKS_SBROKENSUBMIT", "Bris&eacute;s :" );
define( "_AM_IMLINKS_BROKEN_FILE", "Rapports de liens bris&eacute;s" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Rapport de lien bris&eacute; ignor&eacute; et supprim&eacute; de la base de donn&eacute;es avec succ&eagrave;s !" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Statut reconnu chang&eacute;, base de donn&eacute;es mise &agrave; jour!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Changement de status confirm&eacute;, base de donn&eacute;es mise &agrave; jour!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Information sur le lien bris&eacute;" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Rapport de lien briss&eacute;s en attente:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignorer</b> le rapport de lien bris&eacute; et effacer seulement le rapport de lien bris&eacute;." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Supprimer</b> les donn�es du lien ainsi que le rapport de lien bris�." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Editer</b> le lien pour r&eacute;soudre le probl&eagrave;me." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Reconnaissance</b> Mettre le statut comme quoi il est reconnu que le lien est cass�." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Confirm�</b> Mettre le satut comme quoi il est confirm� que le lien est cass�." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Reconnaissance" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirm�" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_TITLE", "Titre" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Rapporteur" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Auteur" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Date d'envoi" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Action" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "il n'y a aucun rapport cass&eacute; qui corresponde &agrave; ce crit&eacute;re" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "lien effac&eacute; de la base de donn&eacute;es et rapport de lien bris&eacute; effac&eacute;" );
/**
 * About defines
 */
define( "_AM_IMLINKS_BY", "par" );
// block defines
define( "_AM_IMLINKS_BADMIN", "Administration des blocs" );
define( "_AM_IMLINKS_BLKDESC", "Description" );
define( "_AM_IMLINKS_TITLE", "Titre" );
define( "_AM_IMLINKS_SIDE", "Alignement" );
define( "_AM_IMLINKS_WEIGHT", "Poids" );
define( "_AM_IMLINKS_VISIBLE", "Visible" );
define( "_AM_IMLINKS_ACTION", "Action" );
define( "_AM_IMLINKS_SBLEFT", "Gauche" );
define( "_AM_IMLINKS_SBRIGHT", "Droite" );
define( "_AM_IMLINKS_CBLEFT", "Centr&eacute; gauche" );
define( "_AM_IMLINKS_CBRIGHT", "Centr&eacute; droite" );
define( "_AM_IMLINKS_CBCENTER", "Centr&eacute; millieu" );
define( "_AM_IMLINKS_ACTIVERIGHTS", "Active Rights" );
define( "_AM_IMLINKS_ACCESSRIGHTS", "Droits d'acc&ecirc;s" );
// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Editer cet item" );
define( "_AM_IMLINKS_ICO_DELETE", "Effacer cet item" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Editer cette ressource" );

define( "_AM_IMLINKS_ICO_ONLINE", "Online" );
define( "_AM_IMLINKS_ICO_OFFLINE", "Offline" );
define( "_AM_IMLINKS_ICO_APPROVED", "Approuv&eacute;" );
define( "_AM_IMLINKS_ICO_NOTAPPROVED", "Pas approuv&eacute;" );

define( "_AM_IMLINKS_ICO_LINK", "Lien relatif" );
define( "_AM_IMLINKS_ICO_URL", "Ajouter un lien relatif" );
define( "_AM_IMLINKS_ICO_ADD", "Ajouter" );
define( "_AM_IMLINKS_ICO_APPROVE", "Approuver" );
define( "_AM_IMLINKS_ICO_STATS", "Statistiques" );
define( "_AM_IMLINKS_ICO_VIEW", "Voir cet item" );

define( "_AM_IMLINKS_ICO_IGNORE", "Ignorer" );
define( "_AM_IMLINKS_ICO_ACK", "Reconnaissance de rapport de lien bris�" );
define( "_AM_IMLINKS_ICO_REPORT", "Reconna�tre le rappor de lien bris� ?" );
define( "_AM_IMLINKS_ICO_CONFIRM", "Rapport de lien bris� confirm�" );
define( "_AM_IMLINKS_ICO_CONBROKEN", "Confirmer le rapport de lien bris� ?" );
define( "_AM_IMLINKS_ICO_RES", "Editer les ressources/liens de cet �l�ment" );
define( "_AM_IMLINKS_MOD_URLRATING", "Interent Content Rating:" );	// Inutilis�
// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Ajouter une cat&eacute;gorie alternative" );
define( "_AM_IMLINKS_MALTCAT", "Gestion des cat&eacute;gories alternatives" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Gestion des cat&eacute;gories alternatives" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Les cat&eacute;gories alternatives peuvent &ecirc;tre ajout&eacute;es ou supprimer facielemtn via ce formulaire.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'La cat&eacute;gorie alternative a &eacute;t&eacute; enregistr&eacute;e!' );

define( "_AM_IMLINKS_MRESOURCES", "Gestion des ressources" );
define( "_AM_IMLINKS_RES_CREATED", "Gestion des ressources" );
define( "_AM_IMLINKS_RES_ID", "ID" );
define( "_AM_IMLINKS_RES_DESC", "Description" );
define( "_AM_IMLINKS_RES_NAME", "Nom de la ressource" );
define( "_AM_IMLINKS_RES_TYPE", "Type de la ressource" );
define( "_AM_IMLINKS_RES_USER", "Utilisateur" );
define( "_AM_IMLINKS_RES_CREATEF", "Ajouter une ressource" );
define( "_AM_IMLINKS_RES_MODIFYF", "Modifier une ressource" );
define( "_AM_IMLINKS_RES_NAMEF", "Nom de la ressource:" );
define( "_AM_IMLINKS_RES_DESCF", "Description de la ressource:" );
define( "_AM_IMLINKS_RES_URLF", "URL de la ressource:" );
define( "_AM_IMLINKS_RES_ITEMIDF", "ID de la ressource:" );
define( "_AM_IMLINKS_RES_INFOTEXT", "<ul><li>De nouvelles ressources peuvent &ecirc;tre ajout&eacute;es, &eacute;dit&eacute;es et supprim&eacute;e facilement via ce formulaire.</li>
	<li>Lister toutes les ressources li&eacute;es &agrave; un lien</li>
	<li>Modifier le nom d'une ressource et sa description</li></ul>
	" );
define( "_AM_IMLINKS_LISTBROKEN", "Afficher les liens qui sont potentiellement bris&eacute;s. NB :Le r&eacute;sultat peut ne pas &ecirc;tre pr&eacute;cis et doit &ecirc;tre pris comme une indication approximative.<br /><br />Veuillez v&eacute;rifier que le lien existe d'abord avant de prendre les mesures n&eacute;cessaires.<br /><br />" );
define( "_AM_IMLINKS_PINGTIMES", "Afficher le temps estim&eacute; de la premi&egrave;re boucle ping pour chaque lien.<br /><br />NB :Ces r&eacute;sultats peuvent ne pas &ecirc;tre exacts et doivent &ecirc;tre pris comme une simple indication." );

define( "_AM_IMLINKS_NO_FORUM", "Pas de forum s&eacute;lectionn&eacute;" );
define( "_MD_IMLINKS_IRCA1", "EC - Early Childhood" );
define( "_MD_IMLINKS_IRCA2", "E - Everyone" );
define( "_MD_IMLINKS_IRCA3", "T - Teen" );
define( "_MD_IMLINKS_IRCA4", "M - Mature" );
define( "_MD_IMLINKS_IRCA5", "AO - Adults Only" );
define( "_MD_IMLINKS_IRCA6", "RP - Rating Pending" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Permission de voter" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Choisissez les groupes qui peuvent &eacute;valuer un lien dans les cat&eacute;gories choisies." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Liens auto-approuv&eacute;s" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Choisissez les groupes qui pourront approuver automatiquement de nouveaux liens sans intervention du webmaster." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Permission de l'auteur" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Choisissez les groupes qui peuvent soumettre de nouveaux liens dans les  cat&eacute;gories choisies." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Groupe mod&eacute;rateur" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Choisissez les groupes qui ont des privil&egrave;ges de mod&eacute;rateur pour les cat&eacute;gories choisies." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "Pays:" );
define( "_AM_IMLINKS_KEYWORDS", "Mots cl�s:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "<i>Les mots cl�s doivent �tre s�par�s par une virgule (ex: Mot1, Mot2, Mot3).</i>" );
define( "_AM_IMLINKS_CHECKURL", "Check URL" );
define( "_AM_IMLINKS_CATTITLE", "Category" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps" );
define( "_AM_IMLINKS_LINK_MULTIMAP", "Multimap" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "V�rifier la carte" );
define( "_AM_IMLINKS_STREET1", "Ligne adresse 1" );
define( "_AM_IMLINKS_STREET2", "Ligne adresse 2 (facultatif)" );
define( "_AM_IMLINKS_TOWN", "Ville" );
define( "_AM_IMLINKS_STATE", "D�partement" );
define( "_AM_IMLINKS_ZIPCODE", "Code Postal" );
define( "_AM_IMLINKS_TELEPHONE", "T�l�phone" );
define( "_AM_IMLINKS_FAX", "Fax" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>WARNING:</b> <u>Le dossier</u> %s est ferm� en �criture. <br />Le CHMOD 777 est requis pour ce dossier." );
// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Nom de l'auteur : " );
define( "_AM_IMLINKS_MOBILE", "Mobile" );
define( "_AM_IMLINKS_CATSPONSOR", "S�lectionner la cat�gorie du Sponsor:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "Si vous s�lectionnez un client, l'identifiant de la banni�re indiqu� dans le champ ci-dessous ne sera pas enregistr� !" );
define( "_AM_IMLINKS_BANNER", "Banni�re" );
define( "_AM_IMLINKS_FBANNER", "Banni�re" );
define( "_AM_IMLINKS_BANNERID", "S�lectionner l'IDentifiant de la banni�re:" );
define( "_AM_IMLINKS_BANNERIDDSC", "Si vous avez s�lectionn� un client, l'identifiant de la banni�re indiqu� dans le champ ci-dessous ne sera pas enregistr� !" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "VAT Reg No" );
define( "_AM_IMLINKS_VATWIKI", "Pour plus d'information, veuillez consulter <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>" );
define( "_AM_IMLINKS_EMAIL", "E-Mail" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Expir�" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'Aucune r&eacute;ponse' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Champ adresse</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Param&egrave;tres divers du lien</b>' );

// Version 1.06 RC1
define( "_AM_IMLINKS_READWRITEERROR", "Vous n'avez pas s�lectionn� un fichier � t�l�verser ou alors le serveur ne dispose pas des droits / CHMOD appropri�s !" );
define( "_AM_IMLINKS_INVALIDFILESIZE", "Taille du fichier incorrecte" );
define( "_AM_IMLINKS_FILENAMEEMPTY", "Nom du fichier vide" );
define( "_AM_IMLINKS_NOFILEUPLOAD", "Aucun fichier t�l�vers�, une erreur est survenue." );
define( "_AM_IMLINKS_UPLOADERRORZERO", "Une erreur est survenue. Erreur: 0" );
define( "_AM_IMLINKS_UPLOADERRORONE", "Le fichier que vous essayez de t�l�verser est trop volumineux. Erreur: 1" );
define( "_AM_IMLINKS_UPLOADERRORTWO", "Le fichier que vous essayez de t�l�verser est trop volumineux. Erreur: 2" );
define( "_AM_IMLINKS_UPLOADERRORTHREE", "Le fichier que vous essayez de t�l�verser est partiellement transmis. Erreur: 3" );
define( "_AM_IMLINKS_UPLOADERRORFOUR", "Aucun fichier s�lectionn� pour le t�l�versement. Erreur: 4" );
define( "_AM_IMLINKS_UPLOADERRORFIVE", "Aucun fichier s�lectionn� pour le t�l�versement. Erreur: 5" );
define( "_AM_IMLINKS_NOUPLOADDIR", "Le r�pertoire d'upload n'est pas correctement indiqu�" );
define( "_AM_IMLINKS_FAILOPENDIR", "Impossible d'acc�der au r�pertoire : " );
define( "_AM_IMLINKS_FAILOPENDIRWRITEPERM", "Impossible d'acc�der au r�pertoire avec les permissions (CHMOD) : " );
define( "_AM_IMLINKS_FILESIZEMAXSIZE", "Taille du fichier : %u. Taille maximale autoris�e : %u" );
define( "_AM_IMLINKS_FILESIZEMAXWIDTH", "Taille du fichier : %u. Taille maximale autoris�e : %u" );
define( "_AM_IMLINKS_FILESIZEMAXHEIGHT", "Hauteur du fichier : %u. Hauteur maximale autoris�e : %u" );
define( "_AM_IMLINKS_MIMENOTALLOW", "MIME type non autoris� : " );
define( "_AM_IMLINKS_FAILEDUPLOADING", "Impossible de charger le fichier : " );
define( "_AM_IMLINKS_FILE", "Le fichier " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " existe d�j� sur le serveur. Veuillez le renommer avant de le t�l�verser.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Erreurs durant le t�l�versement</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " n'exite pas !" );
define( "_AM_IMLINKS_INFORMATION", "Informations sur le lien" );
define( "_AM_IMLINKS_HITS", "Clics : " );
define( "_AM_IMLINKS_PAGERANK", "PageRank&trade;: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "Vous ne pouvez pas d�finir une cat�gorie comme sous-cat�gorie d'elle-m�me !" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Pays :" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Mots cl�s:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags :" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap :" );
define( "_AM_IMLINKS_MOD_STREET1", "Ligne adresse 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Ligne adresse 2 (facultatif):" );
define( "_AM_IMLINKS_MOD_TOWN", "Ville :" );
define( "_AM_IMLINKS_MOD_STATE", "D�partement :" );
define( "_AM_IMLINKS_MOD_ZIP", "Code postal :" );
define( "_AM_IMLINKS_MOD_TEL", "T�l�phone :" );
define( "_AM_IMLINKS_MOD_FAX", "Fax :" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP :" );
define( "_AM_IMLINKS_MOD_MOBILE", "Mobile :" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail :" );
define( "_AM_IMLINKS_MOD_VAT", "VAT :" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Afficher les derni�res entr�es ?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "Nom de liens � afficher ?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 d�sactive cette fonction" );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Documentation" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Ne montrez aucune image" );
define( "_AM_IMLINKS_NOSELECTION", "No selection" );
define( "_AM_IMLINKS_NOFILESELECT", "No selected file" );

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
define( '_AM_IMLINKS_RSSIMGLINKDSC', 'This is the URL of the site, when the channel is rendered, the image is a link to the site. (Note, in practice the image &#60;title&#62; and &#60;link&#62; should have the same value as the channel\'s &#60;title&#62; and &#60;link&#62;).' );
define( '_AM_IMLINKS_RSSTTL', 'RSS feed ttl' );
define( '_AM_IMLINKS_RSSTTLDSC', 'ttl stands for time to live. It\'s a number of minutes that indicates how long a channel can be cached before refreshing from the source.' );
define( '_AM_IMLINKS_RSSWEBMASTER', 'RSS feed webmaster' );
define( '_AM_IMLINKS_RSSWEBMASTERDSC', 'Email address for person responsible for technical issues relating to channel.' );
define( '_AM_IMLINKS_RSSEDITOR', 'RSS feed channel editor' );
define( '_AM_IMLINKS_RSSEDITORDSC', 'Email address for person responsible for editorial content.' );
define( '_AM_IMLINKS_RSSCATEGORY', 'RSS feed category' );
define( '_AM_IMLINKS_RSSCATEGORYDSC', 'Specify one or more categories that the channel belongs to. Follows the same rules as the &#60;item&#62;-level category element.' );
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