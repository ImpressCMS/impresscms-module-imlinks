<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/french/main.php
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
* translation		cpascal
* language		french (français)
* format			ansi
*/

//liens bris&eacute;s
define("_MD_IMLINKS_THANKSFORHELP", "Nous vous remerciont de votre participation afin de nous aider &agrave; maintenir l'annuaire a jour.");
define("_MD_IMLINKS_FORSECURITY", "Pour des raisons de s&eacute;curit&eacute;, votre pseudo et votre adresse IP seront <b>temporairement</b> enregistr&eacute;s, puis <b>totalement</b> effacer de notre base de donn&eacute;es.");
define("_MD_IMLINKS_BEFORESUBMIT", "Si vous souhaitez changer l'URL ou autres informations de votre site, il vous suffit de vous enregistrez puis effectuer les changements<br /><br />ou si c'est notre &eacute;quipe qui a inscrit votre site enregistrez-vous, r&eacute;-inscrivez votre site avec votre propre texte l'ancien sera effacer.");
define("_MD_IMLINKS_BROKENREPORT", "signaler un liens bris&eacute;s");
define("_MD_IMLINKS_SUBMITBROKEN", "signaler");//attention ne pas mettre accent sinon ne fonctionne plus
define("_MD_IMLINKS_SUBMITDATE", "Inscrit depuis");
define("_MD_IMLINKS_FILETITLE", "Nom du site: ");
define("_MD_IMLINKS_WEBMASTERACKNOW", "lien bris&eacute;s reconnus:");
define("_MD_IMLINKS_WEBMASTERCONFIRM", "lien bris&eacute;s confirm&eacute;s:");
define("_MD_IMLINKS_ERRORSENDEMAIL", "ce lien bris&eacute;s a bien &eacute;t&eacute; signaler !<br />Mais une erreur est appar&ucirc;s lors de l'envoi de l'Email au webmaster.");
define("_MD_IMLINKS_BROKENREPORTED", "ce lien bris&eacute;s a bien &eacute;t&eacute; signaler !");
define("_MD_IMLINKS_RESOURCEREPORTED", "URL du lien bris&eacute;s");
define("_MD_IMLINKS_RESOURCEID", "id du site: ");
define("_MD_IMLINKS_REPORTER", "signaler par: ");
define("_MD_IMLINKS_DATEREPORTED", "signaler le:" );

// bouton
define("_MD_IMLINKS_REPORTBROKEN", "Lien bris&eacute;s");
define("_MD_IMLINKS_MAIN", "Accueil");
define("_MD_IMLINKS_MODIFY", "Modifier");
define("_MD_IMLINKS_TELLAFRIEND", "Conseiller ce site");
define("_MD_IMLINKS_LINK_SUBJECT", "site int&eacute;ressant sur %s");//ajout CPascalWeb 9 juin 2009 - ne pas coder cette ligne
define("_MD_IMLINKS_INTFILEFOUND", "Bonjour,
j'ai trouver ce site sympas sur %s"); // %s = nom du site - ne pas coder cette ligne laisser cette pr&eacute;sentation 
define("_MD_IMLINKS_LATESTLIST", "Derniers inscrits");
define("_MD_IMLINKS_SUBMITLINK", "Proposer un site");
define("_MD_IMLINKS_LINKNOW", "Visitez ce site");
define("_MD_IMLINKS_PRINT", "Imprimer");
define('_MD_IMLINKS_TOPRATEDBUTT', 'Les mieux not&eacute;s');
define("_MD_IMLINKS_VIEWDETAILS", "D&eacute;tails du site");
define("_MD_IMLINKS_POPULARITY", "Les plus visit&eacute;s");

//Proposer un site
define("_MD_IMLINKS_SUBMITCATHEAD", "Proposer un site");
define("_MD_IMLINKS_DLURL", "URL du lien:");
define('_MD_IMLINKS_LINKURLDSC', "Cliquez sur l'ic&ocirc;ne afin de v&eacute;rifier l'url du site.");
define("_MD_IMLINKS_CATEGORYC", "Cat&eacute;gorie du site:");
define('_MD_IMLINKS_TEXTOPTIONS', 'Options texte:');
define('_MD_IMLINKS_DISABLEBREAK', ' Convertir les sauts de ligne ?');/////a revoir
define("_MD_IMLINKS_KEYWORDS", "Mots cl&eacute;s: ");
define("_MD_IMLINKS_KEYWORDS_NOTE", "<i>Les mots cl&eacute;s doivent &ecirc;tre s&eacute;par&eacute;s par un espace puis par une virgule exemple:<br />Mot1, Mot2, Mot3<br />sans virgule pour le dernier mot cl&eacute;s</i>");
define("_MD_IMLINKS_LINK_DESCRIPTION", "Description du site");//ajout CPascalWeb 5 juin 2009
define("_MD_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Coordonn&eacute;e du propri&eacute;taire du site</b>');
define("_MD_IMLINKS_LINK_GOOGLEMAP", "Google Maps");
define("_MD_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps");
define("_MD_IMLINKS_LINK_BINGMAP", "Bing Maps");
define("_MD_IMLINKS_LINK_CHECKMAP", "Voir la carte");
define("_MD_IMLINKS_GETMAP", "Voir la carte");
define('_MD_IMLINKS_MAPDSC', 'Cliquez sur l\'ic&ocirc;ne pour ouvrir nouvelle fen&ecirc;tre qui affichera la carte.<br />Url par d&eacute;fault: %s');
define("_MD_IMLINKS_OPTIONS", 'Options');
define("_MD_IMLINKS_NOTIFYAPPROVE", 'Avertissez-moi quand le site sera approuv&eacute;');
define("_MD_IMLINKS_SUB_SNEWMNAMEDESC", "<ul><li>Tout nouveaux sites devra &ecirc;tre valider par notre &eacute;quipe, cela peut prendre entre 24 heures et quelques jours avant qu'ils appara&icirc;ssent dans notre annuaire.</li><li>Nous nous r&eacute;servons le droit de refuser n'importe quel site soumis ou de changer le descriptif sans votre approbation.</li></ul>");
define( "_MD_IMLINKS_COUNTRY", "Pays du site: ");
define('_MD_IMLINKS_COUNTRYDSC', "Si aucun pays n'est s&eacute;lectionn&eacute;e l'adresse maps sera plus difficile a trouver");
define("_MD_IMLINKS_STREET1", "Adresse");
define("_MD_IMLINKS_STREET2", "Adresse suite");
define('_MD_IMLINKS_STREETTWODSC', 'facultatif si le champ est laiss&eacute; vide il ne sera pas afficher.');
define("_MD_IMLINKS_TOWN", "Ville");
define("_MD_IMLINKS_STATE", "D&eacute;partement");
define('_MD_IMLINKS_STATEDSC', 'R&eacute;gion du propri&eacute;taire du site si le champ est laiss&eacute; vide il ne sera pas afficher.');
define("_MD_IMLINKS_ZIPCODE", "Code postal");
define("_MD_IMLINKS_TELEPHONE", "T&eacute;l&eacute;phone");
define("_MD_IMLINKS_FAX", "Fax");
define("_MD_IMLINKS_VOIP", "VoIP");
define("_MD_IMLINKS_MOBILE", "Portable:");
define("_MD_IMLINKS_VAT", "RCS");
define("_MD_IMLINKS_VATWIKI", 'Uniquement pour les entreprises');
define("_MD_IMLINKS_EMAIL", "Email");
define('_MD_IMLINKS_EMAILDSC', 'Adresse Email:<br />- nom@domain.com&nbsp;&nbsp;<b>ou</b><br />- mailto:nom@domain.com');	

//textes et infos
define("_MD_IMLINKS_SUBCATLISTING", "Liste des cat&eacute;gories");
define("_MD_IMLINKS_ISADMINNOTICE", "ERREUR ! Il y a un probl&egrave;me avec cette image. merci de contacter le Webmaster");
define("_MD_IMLINKS_THANKSFORINFO", "Merci votre site a bien &eacute;t&eacute; enregistrer <br />vous serez informer d&egrave;s qu'il sera valider par notre &eacute;quipe.");
define("_MD_IMLINKS_ISAPPROVED", "Merci votre site a bien &eacute;t&eacute; enregistrer <br />il va appara&icirc;tre dans l'annuaire dans quelques secondes.");
define("_MD_IMLINKS_POPULARITYLTOM", "les moins visit&eacute;s en premier");
define( "_MD_IMLINKS_POPULARITYMTOL", "les plus visit&eacute;s en premier");
define("_MD_IMLINKS_TITLEATOZ", "nom du site de A => Z");
define("_MD_IMLINKS_TITLEZTOA", "nom du site de Z => A");
define("_MD_IMLINKS_DATEOLD", "les plus anciens en premier");
define("_MD_IMLINKS_DATENEW", "les plus r&eacute;cents en premier");
define("_MD_IMLINKS_RATINGLTOH", "les moins not&eacute;s en premier");
define("_MD_IMLINKS_RATINGHTOL", "les mieux not&eacute;s en premier");
define("_MD_IMLINKS_COUNTRYLTOH", "nom du pays de A => Z");
define("_MD_IMLINKS_COUNTRYHTOL", "nom du pays de Z => A");
define("_MD_IMLINKS_LINKHITS", "<b>Site visit&eacute;s</b>: %s fois");
define("_MD_IMLINKS_PAGERANK", "PageRank Google&trade;:");
define("_MD_IMLINKS_PAGERANKALT", "position du site sur Google: ");
define("_MD_IMLINKS_THEREARE", "Il y a <b>%s</b> <i>cat&eacute;gories</i> avec <b>%s</b> <i>sites</i> inscrits");//doublons
define("_MD_IMLINKS_THEREIS", "Il y a <b>%s</b> <i>cat&eacute;gories</i> avec <b>%s</b> <i>sites</i> inscrits");
define("_MD_IMLINKS_NOTSPECIFIED", "Non sp&eacute;cifi&eacute;");
define("_MD_IMLINKS_PUBLISHER", "Accept&eacute; par");
define("_MD_IMLINKS_UPDATEDON", "Mise &agrave; jour le");
define("_MD_IMLINKS_RANK", "Classement");
define("_MD_IMLINKS_CATEGORY", "Cat&eacute;gorie");
define("_MD_IMLINKS_DISPLAYING", "Affich&eacute; par: ");//////////////////a revoir
define("_MD_IMLINKS_HITS", "visit&eacute;s");///////////////////////////////a revoir
define("_MD_IMLINKS_SORTBY", "Trier par:");
define("_MD_IMLINKS_CURSORTBY", "ordre d'affichage des sites: %s");
define("_MD_IMLINKS_ALREADYREPORTED", "D&eacute;sol&eacute;e,<br /> vous nous avez d&eacute;j&agrave; signaler que ce site ne fonctionner plus.");
define("_MD_IMLINKS_MUSTREGFIRST", "D&eacute;sol&eacute;e, vous n'avez pas la permission d'effectuer cette action.<br />Merci de vous enregistrez ou de vous connectez d'abord !");
define("_MD_IMLINKS_MAINLISTING", "Cat&eacute;gories principales");
define("_MD_IMLINKS_LASTWEEK", "La semaine derni&egrave;re");
define("_MD_IMLINKS_LAST30DAYS", "Ces 30 derniers jours");
define("_MD_IMLINKS_1WEEK", "cette semaine");
define("_MD_IMLINKS_2WEEKS", "ces 2 semaines");
define("_MD_IMLINKS_30DAYS", "ces 30 jours");
define("_MD_IMLINKS_SHOW", "Afficher les nouveaux sites inscrits de");
define("_MD_IMLINKS_DAYS", "derniers jours");
define("_MD_IMLINKS_NEWLINKS", "Les derniers sites inscrits dans l'annuaire ".$mydirname."");//Ajout de $mydirname par CPascalWeb 11 juin 2009
define("_MD_IMLINKS_TOTALNEWLINKS", "total des nouveaux sites inscrits");
define("_MD_IMLINKS_DTOTALFORLAST", "nouveaux sites inscrits de ces");

//conditions avant de proposer un site
define("_MD_IMLINKS_DISCLAIMERAGREEMENT", "Avertissement");
define("_MD_IMLINKS_DOYOUAGREE", "Acceptez-vous les termes ci-dessus ?");
define("_MD_IMLINKS_AGREE", "oui");
define("_MD_IMLINKS_BROWSETOTOPIC", "<b>Recherche par ordre alphab&eacute;tique</b>");
define("_MD_IMLINKS_LEGENDTEXTNEW", "Nouveaut&eacute;s du jour");
define("_MD_IMLINKS_LEGENDTEXTNEWTHREE", "Nouveaut&eacute;s sur 3 jours");
define("_MD_IMLINKS_LEGENDTEXTTHISWEEK", "Nouveaut&eacute;s de la semaine");
define("_MD_IMLINKS_LEGENDTEXTNEWLAST", "Plus d'une semaine");
define("_MD_IMLINKS_THISFILEDOESNOTEXIST", "Erreur ! ce site n'existe pas !");
define("_MD_IMLINKS_OTHERBYUID", "Autres sites de: ");
define("_MD_IMLINKS_SUBMITTER", "Propos&eacute; par");
define("_MD_IMLINKS_ERROR", "Erreur !<br />information non enregistr&eacute;e merci de contacter le webmaster");
define("_MD_IMLINKS_COPYRIGHT", "copyright");
define("_MD_IMLINKS_INFORUM", "Discutez en dans le forum");
define("_MD_IMLINKS_NEWLAST", "Nouveaut&eacute; de ces deux semaines");
define("_MD_IMLINKS_NEWTHIS", "Nouveaut&eacute; de la semaine");
define("_MD_IMLINKS_THREE", "Nouveaut&eacute; de ces 3 derniers jours");
define("_MD_IMLINKS_TODAY", "Nouveaut&eacute; du jour");
define("_MD_IMLINKS_NO_FILES", "Pas de sites pour le moment");
define("_MD_IMLINKS_NOPERMISSIONTOPOST", "D&eacute;sol&eacute; !<br /> Vous devez vous inscrire ou vous connectez avant de proposer un site dans cette cat&eacute;gorie.");
define("_MD_IMLINKS_PUBLISHDATE", "Inscrit depuis");
define("_MD_IMLINKS_APPROVE", "Approuver le");
define("_MD_IMLINKS_COUNTRYB", "<b>Pays du site</b>: ");
define("_MD_IMLINKS_NOLINKLOAD", "Merci de votre participation !");
define("_MD_IMLINKS_COUNTRYSORT", "Pays");
define("_MD_IMLINKS_ADMINSECTION", "administration de l'annuaire");
define("_MD_IMLINKS_ADDTO", "Ajouter &agrave;: ");
define("_MD_IMLINKS_INFORMATION", "Information dans wikipedia");///a revoir mettre adresse url par define
define("_MD_IMLINKS_ADDRESS", "Coordonn&eacute;es:");
define("_MD_IMLINKS_NOITEMSELECTED", "D&eacute;sol&eacute; !<br />veuillez s&eacute;lectionner un site valide !");
define('_MD_IMLINKS_STOPIT', 'D&eacute;sol&eacute; !<br />vous avez commis une erreur !');
define('_MD_IMLINKS_FEED', 'Flux RSS');
define('_MD_IMLINKS_NEW', 'Nouveau !');
define('_MD_IMLINKS_UPDATED', 'Mise &agrave; jour !');
define('_MD_IMLINKS_POPULAR2', 'Populaire !');

// votes
define('_MD_IMLINKS_VOTES', 'Votes');
define('_MD_IMLINKS_VOTESLC', 'votes');
define('_MD_IMLINKS_THANKYOU', "Merci d'avoir vot&eacute; !");
define('_MD_IMLINKS_RATING', 'noter');
define('_MD_IMLINKS_VOTE', 'vote');
define('_MD_IMLINKS_CURRATING', 'Note actuelle');
define('_MD_IMLINKS_RATEDISABLE', 'D&eacute;sol&eacute; !<br />le syst&eacute;me de vote est d&eacute;sactiv&eacute;');
define('_MD_IMLINKS_OUTOF', ' sur ');
define('_MD_IMLINKS_INVALIDVOTE', 'D&eacute;sol&eacute; !<br />vous ne pouvez pas voter deux fois ou pour votre site');

//recherche par ordre alphab&eacute;tique
function alfabet() {
	$alfabet = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	return $alfabet;
}

// version 1.03
define( '_MD_IMLINKS_ADDTOTOMTOM', 'Add to TomTom' );
define( '_MD_IMLINKS_TOMTOMDSC', 'Enter the latitude and longitude of the address entered above.<br />You can find the geographic position of the address by using the website <a href="http://itouchmap.com/latlong.html" target="_blank">iTouchMap.com</a><br />Geographic latitude/longitude of the location should be in decimal degrees. May be negative; "N"/"S"/"W"/"E" suffix is not accepted. Default geodetic datum is WGS-84.<br />The geographic position should be entered as follows:<br />- Latitude: 57.2355591<br />- Longitude: -2.3535921' );
define( '_MD_IMLINKS_TOMTOMLONG', 'Enter longitude:' );
define( '_MD_IMLINKS_TOMTOMLAT', 'Enter latitude:' );
?>