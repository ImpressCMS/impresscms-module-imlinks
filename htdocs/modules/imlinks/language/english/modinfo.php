<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/english/modinfo.php
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
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

// Module Info
// The name of this module
define("_MI_IMLINKS_NAME", "imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC", "Creates a links section where users can link/submit/rate various links.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1", "Recent Links");
define("_MI_IMLINKS_BNAME2", "Top Links");

// Sub menu titles
define("_MI_IMLINKS_SMNAME1", "Submit");
define("_MI_IMLINKS_SMNAME2", "Popular");
define("_MI_IMLINKS_SMNAME3", "Top Rated");
define("_MI_IMLINKS_SMNAME4", "Latest Listings");

// Names of admin menu items
define("_MI_IMLINKS_BINDEX", "Main Index");
define("_MI_IMLINKS_INDEXPAGE", "Index Page");
define("_MI_IMLINKS_MCATEGORY", "Category Management");
define("_MI_IMLINKS_MLINKS", "Link Management");
define("_MI_IMLINKS_MUPLOADS", "Image Upload");
define("_MI_IMLINKS_PERMISSIONS", "Permission Settings");
define("_MI_IMLINKS_BLOCKADMIN", "Block Settings");
define("_MI_IMLINKS_MVOTEDATA", "Votes");

// Title of config items
define('_MI_IMLINKS_POPULAR', 'Link popular count');
define('_MI_IMLINKS_POPULARDSC', 'The number of hits before a link status will be considered as popular.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY", "Links popular and new:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Select how to display the popular and new icons in link listing.");
define("_MI_IMLINKS_DISPLAYICON1", "display as icons");
define("_MI_IMLINKS_DISPLAYICON2", "display as text");
define("_MI_IMLINKS_DISPLAYICON3", "do not display");

define("_MI_IMLINKS_DAYSNEW", "Links days new:");
define("_MI_IMLINKS_DAYSNEWDSC", "The number of days a link status will be considered as new.");
define("_MI_IMLINKS_DAYSUPDATED", "Links days updated:");
define("_MI_IMLINKS_DAYSUPDATEDDSC", "The amount of days a link status will be considered as updated.");

define('_MI_IMLINKS_PERPAGE', 'Link listing count:');
define('_MI_IMLINKS_PERPAGEDSC', 'Number of links to display in each category listing.');

define('_MI_IMLINKS_USESHOTS', 'Display screenshot images?');
define('_MI_IMLINKS_USESHOTSDSC', 'Select <i>Yes</i> to display screenshot images for each link item');
define('_MI_IMLINKS_SHOTWIDTH', 'Image display width');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Display width for screenshot image');
define('_MI_IMLINKS_SHOTHEIGHT', 'Image display height');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Display height for screenshot image');
define('_MI_IMLINKS_CHECKHOST', 'Disallow direct link linking? (leeching)');
define('_MI_IMLINKS_REFERERS', 'These sites can directly link to your links <br />Separate with #');
define("_MI_IMLINKS_ANONPOST", "Anonymous user submission:");
define("_MI_IMLINKS_ANONPOSTDSC", "Allow anonymous users to submit or upload to your website?");
define('_MI_IMLINKS_AUTOAPPROVE', 'Auto approve submitted links');
define('_MI_IMLINKS_AUTOAPPROVEDSC', 'Select to approve submitted links without moderation.');

define('_MI_IMLINKS_MAXFILESIZE', 'Image upload size (kB)');
define('_MI_IMLINKS_MAXFILESIZEDSC', 'Maximum image size permitted with link uploads.');
define('_MI_IMLINKS_IMGWIDTH', 'Upload image width');
define('_MI_IMLINKS_IMGWIDTHDSC', 'Maximum image width permitted when uploading image links');
define('_MI_IMLINKS_IMGHEIGHT', 'Upload image height');
define('_MI_IMLINKS_IMGHEIGHTDSC', 'Maximum image height permitted when uploading image links');

define('_MI_IMLINKS_UPLOADDIR', 'Upload directory (no trailing slash)');
define('_MI_IMLINKS_ALLOWSUBMISS', 'User submissions:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC', 'Allow users to submit new links');
define('_MI_IMLINKS_SCREENSHOTS', 'Screenshots upload directory');
define('_MI_IMLINKS_CATEGORYIMG', 'Category image upload directory');
define('_MI_IMLINKS_MAINIMGDIR', 'Main image directory');
define('_MI_IMLINKS_USETHUMBS', 'Use thumb nails:');
define("_MI_IMLINKS_USETHUMBSDSC", "Supported image types: JPG, GIF, PNG.<div style='padding-top: 8px;'>imLinks will use thumb nails for images. Set to <i>No</i> to use orginal image if the server does not support this option.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Timestamp:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Default timestamp for imLinks.<br />See <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manual</a>');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Show disclaimer before user submission?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Before a user can submit a link show the entry regulations?');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Show disclaimer before user link?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Show link regulations before open a link?');
define('_MI_IMLINKS_DISCLAIMER', 'Enter submission disclaimer text:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Enter link disclaimer text:');
define('_MI_IMLINKS_SUBCATS', 'Sub-Categories:');
define("_MI_IMLINKS_SUBMITART", "link submission:");
define("_MI_IMLINKS_SUBMITARTDSC", "Select groups that can submit new links.");
define("_MI_IMLINKS_RATINGGROUPS", "Link ratings:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Select groups that can rate a link.");
define("_MI_IMLINKS_IMGUPDATE", "Update thumbnails?");
define("_MI_IMLINKS_IMGUPDATEDSC", "If selected thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Thumb nail quality:");
define("_MI_IMLINKS_QUALITYDSC", "Quality Lowest: 0 Highest: 100");
define("_MI_IMLINKS_KEEPASPECT", "Keep image aspect ratio?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Admin index links count:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Number of new links to display in module admin area.");
define("_MI_IMLINKS_ARTICLESSORT", "Default link order:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Select the default order for the link listings.");
define("_MI_IMLINKS_TITLE", "Title");
define("_MI_IMLINKS_RATING", "Rating");
define("_MI_IMLINKS_WEIGHT", "Weight");
define("_MI_IMLINKS_POPULARITY", "Popularity");
define("_MI_IMLINKS_SUBMITTED2", "Submission date");
define('_MI_IMLINKS_COPYRIGHT', 'Copyright notice:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Select to display a copyright notice on link page.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Select <i>Yes</i> to display sub-categories. Selecting <i>No</i> will hide sub-categories from the listings');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Global');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Global links notification options.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Category');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current link category.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Link');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Notification options that apply to the current link.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'New category');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new link category is created.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new link category is created.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link category');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Modify link requested');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notify me of any link modification request.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receive notification when any link modification request is submitted.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Link modification requested');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Broken link submitted');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notify me of any broken link report.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receive notification when any broken link report is submitted.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Broken link Reported');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Link submitted');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notify me when any new link is submitted (awaiting approval).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receive notification when any new link is submitted (awaiting approval).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link submitted');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'New link');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Notify me when any new link is posted.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Receive notification when any new link is posted.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Link submitted');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new link is submitted (awaiting approval) to the current category.');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new link is submitted (awaiting approval) to the current category.');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link submitted in category'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'New Link');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Notify me when a new link is posted to the current category.');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Receive notification when a new link is posted to the current category.');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link in category'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Link approved');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Notify me when this link is approved.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Receive notification when this link is approved.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Link approved');

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, GibaPhp");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (imLinks) and its images are copyright to the ImpressCMS community.<br /><br />You have the permission to copy, edit and change imLinks to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the ImpressCMS team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_IMLINKS_SELECTFORUM', "Select forum:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Select the forum you have installed and will be used by imLinks.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (all)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 module");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "Country:" );
define('_MI_IMLINKS_EDITOR', "Editor to use (admin):");
define('_MI_IMLINKS_EDITORCHOICE', "Select the editor to use for admin side.");
define('_MI_IMLINKS_EDITORUSER', "Editor to use (user):");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Select the editor to use for user side.");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_FCK", "FCK Editor");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_SORTCATS", "Sort categories by:");
define("_MI_IMLINKS_SORTCATSDSC", "Select how categories and sub-categories are sorted.");
define("_MI_IMLINKS_KEYLENGTH", "Enter max. characters for meta keywords:");
define("_MI_IMLINKS_KEYLENGTHDSC", "Default is 255 characters");
define("_MI_IMLINKS_OTHERLINKS", "Show other links submitted by Submitter?");
define("_MI_IMLINKS_OTHERLINKSDSC", "Select if other links of the submitter will be displayed.");
define("_MI_IMLINKS_TOTALCHARS", "Set total amount of characters for description?");
define("_MI_IMLINKS_TOTALCHARSDSC", "Set total amount of characters for description in category view.");
define("_MI_IMLINKS_QUICKVIEW", "Show Quick View option?");
define("_MI_IMLINKS_QUICKVIEWDSC", "This turns on/off the Quick View option.");
define('_MI_IMLINKS_ICONS_CREDITS', "Icons by");
define("_MI_IMLINKS_SHOWSBOOKMARKS", "Show Social Bookmarks?");
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Select <i>Yes</i> if you want Social Bookmark icons to be displayed under article.");
define("_MI_IMLINKS_SHOWPAGERANK", "Show Google PageRank™?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Select <i>Yes</i> if you want Google PageRank™ to be displayed. This option can slow down access to frontend pages of imLinks.");
define("_MI_IMLINKS_USERTAGDESCR", "User can submit Tags:");
define("_MI_IMLINKS_USERTAGDSC", "Select <i>Yes</i> if user is allowed to submit tags.");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'Timestamp administration:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', 'Default admininstration timestamp for imLinks<br />See <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manual</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Use address and map options?");
define("_MI_IMLINKS_USEADDRESSDSC", "Select <i>Yes</i> to use the address and maps feature.");
define("_MI_IMLINKS_HEADERPRINT", "[PRINT OPTIONS] Print page header");
define("_MI_IMLINKS_HEADERPRINTDSC", "Header that will be printed for each link");
define("_MI_IMLINKS_LOGOURLPRINT", "[PRINT OPTIONS] Logo print url");
define("_MI_IMLINKS_LOGOURLDSCPRINT", "Url of the logo that will be printed at the top of the page.<br />Leave empty to have no logo at the top of the page.");
define("_MI_IMLINKS_FOOTERPRINT", "[PRINT OPTIONS] Print page footer");
define("_MI_IMLINKS_FOOTERPRINTDSC", "Footer that will be printed for each link");
define("_MI_IMLINKS_BNAME3", "imLinks sponsor statistics");
define("_MI_IMLINKS_VCARD_CREDITS", "vCard script by");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG", "Country flag image directory");
define("_MI_IMLINKS_FLAGIMGDSC", "Enter the URL without a trailing slash");
define("_MI_IMLINKS_CATEGORYIMGDSC", "Enter the URL without a trailing slash");
define("_MI_IMLINKS_SCREENSHOTSDSC", "Enter the URL without a trailing slash");
define("_MI_IMLINKS_MAINIMGDIRDSC", "Enter the URL without a trailing slash");
define("_MI_IMLINKS_USEAUTOSCRSHOT", "Use auto screenshot");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC", "This will automatically create a screenshot based on the URL. This overrules uploaded screenshots and might not work for all websites.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Auto screenshot by");
define("_MI_IMLINKS_MOZSHOT_CREDITSTXT", '<a href="http://mozshot.nemui.org" target=_blank>Mozshot</a> (all source code provided under <a href="http://www.ruby-lang.org/en/" target=_blank>Ruby</a> lisence)');

// Version 1.06 RC-1
define("_MI_IMLINKS_BNAME4", "imLinks Tag Cloud");
define("_MI_IMLINKS_BNAME5", "imLinks Top Tags");

// Version 1.06 RC-3
define('_MI_IMLINKS_DISPLAYFORUM4', "Newbbex");
define("_MI_IMLINKS_TITLE_A", "Title (A)");
define("_MI_IMLINKS_TITLE_D", "Title (D)");
define("_MI_IMLINKS_RATING_A", "Rating (A)");
define("_MI_IMLINKS_RATING_D", "Rating (D)");
define("_MI_IMLINKS_SUBMITTED_A", "Submission date (A)");
define("_MI_IMLINKS_SUBMITTED_D", "Submission date (D)");
define("_MI_IMLINKS_POPULARITY_A", "Popularity (A)");
define("_MI_IMLINKS_POPULARITY_D", "Popularity (D)");
define("_MI_IMLINKS_COUNTRY_A", "Country (A)");
define("_MI_IMLINKS_COUNTRY_D", "Country (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Use captcha in submit form?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Select <i>Yes</i> to use captcha in the submit form.<br />Default: <i>Yes</i>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Link to terms in imGlossary?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "The module imGlossary needs to be installed and active for this feature." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Folder name of imGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "The name of the folder that contains the module imGlossary. <br />Default: <i>imglossary</i>" );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Select source for generating auto screenshot:' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'More info:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Number of category colums:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Select the number of category colums for Index Page.<br />Default: <i>2</i>' );
define( '_MI_IMLINKS_RSSFEED', 'RSS Feed' );
define( '_MI_IMLINKS_SHOWRATING', 'Show rating features?' );
define( '_MI_IMLINKS_SHOWRATINGDSC', 'Select <i>Yes</i> to display the rating features. Select <i>No</i> to hide the rating features. Note: This setting has nothing to do with the permissions setting.' );

// imLinks 1.00 RC-2
define( '_MI_IMLINKS_BNAME6', 'Random Link' );

// imLinks 1.01
define( '_MI_IMLINKS_SHOWLEGEND', 'Show category legend?' );
define( '_MI_IMLINKS_SHOWLEGENDDSC', 'With this option you can turn on/off the legend explaining the different colours of the default category icons.' );
define( '_MI_IMLINKS_LIGHTWINDOW', 'Select how a link should be opened:' );
define( '_MI_IMLINKS_LIGHTWINDOWDSC', 'Select <i>Default</i> to have links opened in a new browser tab/window.<br />
									   Select <i>LightWindow</i> to have links opened in a <a href="http://www.stickmanlabs.com/lightwindow/" target="_blank">LightWindow</a>.<br />
									   Select <i>GreyBox</i> to have links opened in a <a href="http://orangoo.com/labs/GreyBox/" target="_blank">GreyBox</a>.' );
define( '_MI_IMLINKS_DEFAULT', 'Default' );

// imLinks 1.03
define( '_MI_IMLINKS_NICEURL', 'Use nice urls?' );
define( '_MI_IMLINKS_NICEURLDSC', 'Use nice urls for links.' );
define( '_MI_IMLINKS_TOMTOMAPI', 'TomTom API key:' );
define( '_MI_IMLINKS_TOMTOMAPIDSC', 'To have a <i>Add to TomTom</i> buttom displayed with the contact details of a link you need to enter your API key here.<br />A valid API key can be requested from add2TTsupport@tomtom.com' );
define( '_MI_IMLINKS_TOMTOMLOGO', 'Enter URL for logo to display:' );
define( '_MI_IMLINKS_TOMTOMLOGODSC', 'Enter the URL of the logo to display in the window <i>Starting TomTom Home</i>.<br />This logo will displayed together with the website name for the <i>Content provided by</i>.' );

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
define( '_MI_IMLINKS_FACEBOOKBTTN', 'Facebook "Like" button' );
define( '_MI_IMLINKS_FACEBOOKBTTNDSC', 'Choose a Facebook button style.' );
define( '_MI_IMLINKS_PLUSONEBTTN', 'Google +1 button' );
define( '_MI_IMLINKS_PLUSONEBTTNDSC', 'Choose a Google +1 button style.' );
define( '_MI_IMLINKS_BNAME7', 'Recent Links - Extended' );

// imLinks 1.13
define( '_MI_IMLINKS_IPFTABLE', 'Use IPF table on admin main index page:' );
define( '_MI_IMLINKS_IPFTABLEDSC', 'Using the IPF table will limit the amount of links listed per page.' );
define( '_MI_IMLINKS_USELYTE', 'Use Lytebox for helptips and enlarging screenshots:' );
define( '_MI_IMLINKS_USELYTEDSC', 'Choose <i>Yes</i> for helptips in the forms and enlarging screenshots. Choose <i>No</i> to disable these features.' );
?>