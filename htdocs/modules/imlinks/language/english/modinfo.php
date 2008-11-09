<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/english/modinfo.php
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
define("_MI_IMLINKS_NAME", "imLinks");

// A brief description of this module
define("_MI_IMLINKS_DESC", "Creates a links section where users can link/submit/rate various links.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_IMLINKS_BNAME1", "Recent imLinks");
define("_MI_IMLINKS_BNAME2", "Top imLinks");

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
define('_MI_IMLINKS_POPULAR', 'link Popular Count');
define('_MI_IMLINKS_POPULARDSC', 'The number of hits before a link status will be considered as popular.');

//Display Icons
define("_MI_IMLINKS_ICONDISPLAY", "links Popular and New:");
define("_MI_IMLINKS_DISPLAYICONDSC", "Select how to display the popular and new icons in link listing.");
define("_MI_IMLINKS_DISPLAYICON1", "Display As Icons");
define("_MI_IMLINKS_DISPLAYICON2", "Display As Text");
define("_MI_IMLINKS_DISPLAYICON3", "Do Not Display");

define("_MI_IMLINKS_DAYSNEW", "links Days New:");
define("_MI_IMLINKS_DAYSNEWDSC", "The number of days a link status will be considered as new.");
define("_MI_IMLINKS_DAYSUPDATED", "links Days Updated:");
define("_MI_IMLINKS_DAYSUPDATEDDSC", "The amount of days a link status will be considered as updated.");

define('_MI_IMLINKS_PERPAGE', 'link Listing Count:');
define('_MI_IMLINKS_PERPAGEDSC', 'Number of links to display in each category listing.');

define('_MI_IMLINKS_USESHOTS', 'Display Screenshot Images?');
define('_MI_IMLINKS_USESHOTSDSC', 'Select yes to display screenshot images for each link item');
define('_MI_IMLINKS_SHOTWIDTH', 'Image Display Width');
define('_MI_IMLINKS_SHOTWIDTHDSC', 'Display width for screenshot image');
define('_MI_IMLINKS_SHOTHEIGHT', 'Image Display Height');
define('_MI_IMLINKS_SHOTHEIGHTDSC', 'Display height for screenshot image');
define('_MI_IMLINKS_CHECKHOST', 'Disallow direct link linking? (leeching)');
define('_MI_IMLINKS_REFERERS', 'These sites can directly link to your links <br />Separate with #');
define("_MI_IMLINKS_ANONPOST", "Anonymous User Submission:");
define("_MI_IMLINKS_ANONPOSTDSC", "Allow Anonymous users to submit or upload to your website?");
define('_MI_IMLINKS_AUTOAPPROVE', 'Auto Approve Submitted links');
define('_MI_IMLINKS_AUTOAPPROVEDSC', 'Select to approve submitted links without moderation.');

define('_MI_IMLINKS_MAXFILESIZE', 'Upload Size (KB)');
define('_MI_IMLINKS_MAXFILESIZEDSC', 'Maximum link size permitted with link uploads.');
define('_MI_IMLINKS_IMGWIDTH', 'Upload Image width');
define('_MI_IMLINKS_IMGWIDTHDSC', 'Maximum image width permitted when uploading image links');
define('_MI_IMLINKS_IMGHEIGHT', 'Upload Image height');
define('_MI_IMLINKS_IMGHEIGHTDSC', 'Maximum image height permitted when uploading image links');

define('_MI_IMLINKS_UPLOADDIR', 'Upload Directory (No trailing slash)');
define('_MI_IMLINKS_ALLOWSUBMISS', 'User Submissions:');
define('_MI_IMLINKS_ALLOWSUBMISSDSC', 'Allow Users to Submit new links');
define('_MI_IMLINKS_ALLOWUPLOADS', 'User Uploads:');
define('_MI_IMLINKS_ALLOWUPLOADSDSC', 'Allow Users to upload links directly to your website');
define('_MI_IMLINKS_SCREENSHOTS', 'Screenshots Upload Directory');
define('_MI_IMLINKS_CATEGORYIMG', 'Category Image Upload Directory');
define('_MI_IMLINKS_MAINIMGDIR', 'Main Image Directory');
define('_MI_IMLINKS_USETHUMBS', 'Use Thumb Nails:');
define("_MI_IMLINKS_USETHUMBSDSC", "Supported link types: JPG, GIF, PNG.<div style='padding-top: 8px;'>imLinks will use thumb nails for images. Set to 'No' to use orginal image if the server does not support this option.</div>");
define('_MI_IMLINKS_DATEFORMAT', 'Timestamp:');
define('_MI_IMLINKS_DATEFORMATDSC', 'Default Timestamp for imLinks.<br />See <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manual</a>');
define('_MI_IMLINKS_SHOWDISCLAIMER', 'Show Disclaimer before User Submission?');
define('_MI_IMLINKS_SHOWDISCLAIMERDSC', 'Before a User can submit a Link show the Entry regulations?');
define('_MI_IMLINKS_SHOWLINKDISCL', 'Show Disclaimer before User link?');
define('_MI_IMLINKS_SHOWLINKDISCLDSC', 'Show link regulations before open a link?');
define('_MI_IMLINKS_DISCLAIMER', 'Enter Submission Disclaimer Text:');
define('_MI_IMLINKS_LINKDISCLAIMER', 'Enter link Disclaimer Text:');
define('_MI_IMLINKS_SUBCATS', 'Sub-Categories:');
define("_MI_IMLINKS_SUBMITART", "link Submission:");
define("_MI_IMLINKS_SUBMITARTDSC", "Select groups that can submit new links.");
define("_MI_IMLINKS_RATINGGROUPS", "link Ratings:");
define("_MI_IMLINKS_RATINGGROUPSDSC", "Select groups that can rate a link.");
define("_MI_IMLINKS_IMGUPDATE", "Update Thumbnails?");
define("_MI_IMLINKS_IMGUPDATEDSC", "If selected Thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");
define("_MI_IMLINKS_QUALITY", "Thumb Nail Quality:");
define("_MI_IMLINKS_QUALITYDSC", "Quality Lowest: 0 Highest: 100");
define("_MI_IMLINKS_KEEPASPECT", "Keep Image Aspect Ratio?");
define("_MI_IMLINKS_KEEPASPECTDSC", "");
define("_MI_IMLINKS_ADMINPAGE", "Admin Index Links Count:");
define("_MI_IMLINKS_AMDMINPAGEDSC", "Number of new links to display in module admin area.");
define("_MI_IMLINKS_ARTICLESSORT", "Default link Order:");
define("_MI_IMLINKS_ARTICLESSORTDSC", "Select the default order for the link listings.");
define("_MI_IMLINKS_TITLE", "Title");
define("_MI_IMLINKS_RATING", "Rating");
define("_MI_IMLINKS_WEIGHT", "Weight");
define("_MI_IMLINKS_POPULARITY", "Popularity");
define("_MI_IMLINKS_SUBMITTED2", "Submission Date");
define('_MI_IMLINKS_COPYRIGHT', 'Copyright Notice:');
define('_MI_IMLINKS_COPYRIGHTDSC', 'Select to display a copyright notice on link page.');
// Description of each config items
define('_MI_IMLINKS_SUBCATSDSC', 'Select Yes to display sub-categories. Selecting No will hide sub-categories from the listings');

// Text for notifications
define('_MI_IMLINKS_GLOBAL_NOTIFY', 'Global');
define('_MI_IMLINKS_GLOBAL_NOTIFYDSC', 'Global links notification options.');
define('_MI_IMLINKS_CATEGORY_NOTIFY', 'Category');
define('_MI_IMLINKS_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current link category.');
define('_MI_IMLINKS_LINK_NOTIFY', 'Link');
define('_MI_IMLINKS_FILE_NOTIFYDSC', 'Notification options that apply to the current link.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY', 'New Category');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new link category is created.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new link category is created.');
define('_MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link category');                              

define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY', 'Modify Link Requested');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP', 'Notify me of any link modification request.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC', 'Receive notification when any link modification request is submitted.');
define('_MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Link Modification Requested');

define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY', 'Broken Link Submitted');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP', 'Notify me of any broken link report.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC', 'Receive notification when any broken link report is submitted.');
define('_MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Broken Link Reported');

define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY', 'Link Submitted');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP', 'Notify me when any new link is submitted (awaiting approval).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC', 'Receive notification when any new link is submitted (awaiting approval).');
define('_MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link submitted');

define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY', 'New Link');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP', 'Notify me when any new link is posted.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC', 'Receive notification when any new link is posted.');
define('_MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link');

define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY', 'Link Submitted');
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new link is submitted (awaiting approval) to the current category.');   
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new link is submitted (awaiting approval) to the current category.');      
define('_MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link submitted in category'); 

define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY', 'New Link');
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP', 'Notify me when a new link is posted to the current category.');   
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC', 'Receive notification when a new link is posted to the current category.');      
define('_MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New link in category'); 

define('_MI_IMLINKS_LINK_APPROVE_NOTIFY', 'Link Approved');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYCAP', 'Notify me when this link is approved.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYDSC', 'Receive notification when this link is approved.');
define('_MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Link Approved');

define('_MI_IMLINKS_AUTHOR_INFO', "Developer Information");
define('_MI_IMLINKS_AUTHOR_NAME', "Developer");
define('_MI_IMLINKS_AUTHOR_DEVTEAM', "Development Team");
define('_MI_IMLINKS_AUTHOR_WEBSITE', "Developer website");
define('_MI_IMLINKS_AUTHOR_EMAIL', "Developer email");
define('_MI_IMLINKS_AUTHOR_CREDITS', "Credits");
define('_MI_IMLINKS_MODULE_INFO', "Module Development Information");
define('_MI_IMLINKS_MODULE_STATUS', "Development Status");
define('_MI_IMLINKS_MODULE_DEMO', "Demo Site");
define('_MI_IMLINKS_MODULE_SUPPORT', "Official support site");
define('_MI_IMLINKS_MODULE_BUG', "Report a bug for this module");
define('_MI_IMLINKS_MODULE_FEATURE', "Suggest a new feature for this module");
define('_MI_IMLINKS_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_IMLINKS_RELEASE', "Release Date: ");

define('_MI_IMLINKS_MODULE_MAILLIST', "WF-Project Mailing Lists");
define('_MI_IMLINKS_MODULE_MAILANNOUNCEMENTS', "Announcements Mailing List");
define('_MI_IMLINKS_MODULE_MAILBUGS', "Bug Mailing List");
define('_MI_IMLINKS_MODULE_MAILFEATURES', "Features Mailing List");
define('_MI_IMLINKS_MODULE_MAILANNOUNCEMENTSDSC', "Get the latest announcements from WF-Project.");
define('_MI_IMLINKS_MODULE_MAILBUGSDSC', "Bug Tracking and submission mailing list");
define('_MI_IMLINKS_MODULE_MAILFEATURESDSC', "Request New Features mailing list.");

define('_MI_IMLINKS_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY WF-PROJECTS \"AS IS\" AND \"WITH ALL FAULTS.\"
WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, WF-PROJECTS MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN WF-Project WEBSITE. IN NO
EVENT WILL WF-PROJECTS BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
WF-PROJECT HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_IMLINKS_AUTHOR_CREDITSTEXT',"The WF-Projects Team would like to thank the following people for their help and support during the development phase of this module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333, GibaPhp");
define('_MI_IMLINKS_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_IMLINKS_COPYRIGHT2', 'Copyright' );
define('_MI_IMLINKS_COPYRIGHTIMAGE', "Unless stated otherwise, this Module (imLinks) and its images are copyright to the ImpressCMS community.<br /><br />You have the permission to copy, edit and change imLinks to suit your personal requirements. You agree not to modify, adapt and redistribute the source code of the Software without the express permission from the ImpressCMS team.<br /><br />PageRank is a trademark of Google Inc.");

define('_MI_IMLINKS_SELECTFORUM', "Select Forum:");
define('_MI_IMLINKS_SELECTFORUMDSC', "Select the forum you have installed and will be used by imLinks.");

define('_MI_IMLINKS_DISPLAYFORUM1', "Newbb (all)");
define('_MI_IMLINKS_DISPLAYFORUM2', "IPB Forum");
define('_MI_IMLINKS_DISPLAYFORUM3', "PHPBB2 Module");

// added by McDonald
define( "_MI_IMLINKS_COUNTRY", "Country:" );
define('_MI_IMLINKS_EDITOR', "Editor to use (admin):");
define('_MI_IMLINKS_EDITORCHOICE', "Select the editor to use for admin side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define('_MI_IMLINKS_EDITORUSER', "Editor to use (user):");
define('_MI_IMLINKS_EDITORCHOICEUSER', "Select the editor to use for user side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define("_MI_IMLINKS_FORM_DHTML", "DHTML");
define("_MI_IMLINKS_FORM_COMPACT", "Compact");
define("_MI_IMLINKS_FORM_SPAW", "Spaw Editor");
define("_MI_IMLINKS_FORM_HTMLAREA", "HtmlArea Editor");
define("_MI_IMLINKS_FORM_FCK", "FCK Editor");
define("_MI_IMLINKS_FORM_KOIVI", "Koivi Editor");
define("_MI_IMLINKS_FORM_INBETWEEN", "Inbetween");
define("_MI_IMLINKS_FORM_TINYEDITOR", "TinyEditor");
define("_MI_IMLINKS_FORM_TINYMCE", "TinyMCE");
define("_MI_IMLINKS_FORM_DHTMLEXT", "DHTML Extended");
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
define("_MI_IMLINKS_SHOWSBOOKMARKSDSC", "Select Yes if you want Social Bookmark icons to be displayed under article.");
define("_MI_IMLINKS_SHOWPAGERANK", "Show Google PageRank™?");
define("_MI_IMLINKS_SHOWPAGERANKSDSC", "Select Yes if you want Google PageRank™ to be displayed.");
define("_MI_IMLINKS_USERTAGDESCR", "User can submit Tags:");
define("_MI_IMLINKS_USERTAGDSC", "Select Yes if user is allowed to submit tags.");

// Version 1.05 RC5
define('_MI_IMLINKS_DATEFORMATADMIN', 'Timestamp administration:');
define('_MI_IMLINKS_DATEFORMATADMINDSC', 'Default admininstration Timestamp for imLinks<br />See <a href="http://jp.php.net/manual/en/function.date.php" target="_blank">PHP manual</a>');
define("_MI_IMLINKS_USEADDRESSDESCR", "Use address and map options?");
define("_MI_IMLINKS_USEADDRESSDSC", "Select Yes to use the address and maps feature.");
define("_MI_IMLINKS_HEADERPRINT", "[PRINT OPTIONS] Print page header");
define("_MI_IMLINKS_HEADERPRINTDSC", "Header that will be printed for each link");
define("_MI_IMLINKS_LOGOURLPRINT", "[PRINT OPTIONS] Logo print url");
define("_MI_IMLINKS_LOGOURLDSCPRINT", "Url of the logo that will be printed at the top of the page");
define("_MI_IMLINKS_FOOTERPRINT", "[PRINT OPTIONS] Print page footer");
define("_MI_IMLINKS_FOOTERPRINTDSC", "Footer that will be printed for each link");
define("_MI_IMLINKS_BNAME3", "imLinks Sponsor Statistics");
define("_MI_IMLINKS_VCARD_CREDITS", "vCard script by");

// Version 1.05 RC6
define("_MI_IMLINKS_FLAGIMG", "Country Flag Image Directory");
define("_MI_IMLINKS_FLAGIMGDSC", "Enter the url without a trailing slash");
define("_MI_IMLINKS_CATEGORYIMGDSC", "Enter the url without a trailing slash");
define("_MI_IMLINKS_SCREENSHOTSDSC", "Enter the url without a trailing slash");
define("_MI_IMLINKS_MAINIMGDIRDSC", "Enter the url without a trailing slash");
define("_MI_IMLINKS_USEAUTOSCRSHOT", "Use Auto Screenshot");
define("_MI_IMLINKS_USEAUTOSCRSHOTDSC", "This will automatically create a screenshot based on the url. This overrules uploaded screenshots and might not work for all websites.");
define("_MI_IMLINKS_MOZSHOT_CREDITS", "Auto Screenshot by");
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
define("_MI_IMLINKS_SUBMITTED_A", "Submission Date (A)");
define("_MI_IMLINKS_SUBMITTED_D", "Submission Date (D)");
define("_MI_IMLINKS_POPULARITY_A", "Popularity (A)");
define("_MI_IMLINKS_POPULARITY_D", "Popularity (D)");
define("_MI_IMLINKS_COUNTRY_A", "Country (A)");
define("_MI_IMLINKS_COUNTRY_D", "Country (D)");

// imLinks 1.00 RC-1
define( "_MI_IMLINKS_CAPTCHA", "Use captcha in submit form?" );
define( "_MI_IMLINKS_CAPTCHADSC", "Select <em>Yes</em> to use captcha in the submit form.<br />Default: <em>Yes</em>" );
define( "_MI_IMLINKS_LINKEDTERMS", "Link to terms glossary?" );
define( "_MI_IMLINKS_LINKEDTERMSDSC", "The module imGlossary needs to be installed and active for this feature." );
define( "_MI_IMLINKS_IMGLOSSARYDIR", "Folder name of imGlossary:" );
define( "_MI_IMLINKS_IMGLOSSARYDIRDSC", "The name of the folder where imGlossary is in.<br />Default: <em>imglossary</em>" );
define( '_MI_IMLINKS_SELECTFEED', 'Use ICMS RSS feed?' );
define( '_MI_IMLINKS_SELECTFEED_DSC', 'Select <em>Yes</em> to use ImpressCMS RSS feed. Select <em>No</em> to use Brandycoke\'s RSSfit module (subfeed needs to be activated).'  );
define( '_MI_IMLINKS_FEEDSTOTAL', 'How many links to display in RSS feed?' );
define( '_MI_IMLINKS_FEEDSTOTALDSC', 'This number only affects the ImpressCMS RSS feed. Default: <em>15</em>' );
define( '_MI_IMLINKS_ABOUTLICENSE', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );
define( '_MI_IMLINKS_AUTOTHUMBSRC', 'Select source for generating auto screenshot:' );
define( '_MI_IMLINKS_AUTOTHUMBSRCDSC', 'More info:<br />- <a href="http://www.thumbshots.org/" target="_blank">Thumbshots.org</a><br />- <a href="http://mozshot.nemui.org/" target="_blank">Mozshot</a>' );
define( '_MI_IMLINKS_CATCOLS', 'Number of category colums:' );
define( '_MI_IMLINKS_CATCOLSDSC', 'Select the number of category colums for Index Page.<br />Default: <em>2</em>' );
?>