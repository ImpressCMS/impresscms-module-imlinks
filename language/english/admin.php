<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: language/english/admin.php
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
 
define( "_AM_IMLINKS_WARNINSTALL1", "<b>WARNING:</b> <u>Directory</u> %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_IMLINKS_WARNINSTALL2", "<b>WARNING:</b> <u>File</u> %s exists on your server. <br />Please remove this directory for security reasons." );
define( "_AM_IMLINKS_WARNINSTALL3", "<b>WARNING:</b> <u>Folder</u> %s does not exists on your server. <br />This folder is required by imLinks." );

define( "_AM_IMLINKS_MODULE_NAME", "imLinks" );

define( "_AM_IMLINKS_BMODIFY", "Modify" );
define( "_AM_IMLINKS_BCREATE", "Create" );
define( "_AM_IMLINKS_BAPPROVE", "Approve" );
define( "_AM_IMLINKS_BIGNORE", "Ignore" );
define( "_AM_IMLINKS_BSAVE", "Save" );
define( "_AM_IMLINKS_BRESET", "Reset" );
define( "_AM_IMLINKS_BMOVE", "Move links" );
define( "_AM_IMLINKS_BUPLOAD", "Upload" );
define( "_AM_IMLINKS_BDELETEIMAGE", "Delete selected image" );
define( "_AM_IMLINKS_DBERROR", "Database access error: Please report this error to the [url=http://community.impresscms.org/modules/newbb/viewforum.php?forum=9]ImpressCMS Community Forum - Module Support[/url] forum." );
// Other Options
define( "_AM_IMLINKS_TEXTOPTIONS", "Text options:" );
define( "_AM_IMLINKS_DISABLEXCODE", " Disable BBCodes" );
define( "_AM_IMLINKS_DISABLEIMAGES", " Disable images" );
define( "_AM_IMLINKS_DISABLEBREAK", " Use ICMS linebreak conversion?" );
define( "_AM_IMLINKS_UPLOADFILE", "Link uploaded successfully" );
define( "_AM_IMLINKS_NOMENUITEMS", "No menu items within the menu" );
// Admin Bread crumb
define( "_AM_IMLINKS_BUPDATE", "Module Update" );
define( "_AM_IMLINKS_BINDEX", "Main Index" );
define( "_AM_IMLINKS_BPERMISSIONS", "Permissions" );
define( "_AM_IMLINKS_GOMODULE", "Go to module" );
// Admin Summary
define( "_AM_IMLINKS_SCATEGORY", "Category: " );
define( "_AM_IMLINKS_SFILES", "Links: " );
define( "_AM_IMLINKS_SNEWFILESVAL", "Submitted: " );
define( "_AM_IMLINKS_SMODREQUEST", "Modified: " );

// Admin Main Menu
define( "_AM_IMLINKS_MCATEGORY", "Category Management" );
define( "_AM_IMLINKS_MLINKS", "Link Management" );
define( "_AM_IMLINKS_MLISTBROKEN", "List Broken Links" );
define( "_AM_IMLINKS_MLISTPINGTIMES", "List Links Pingtime" );
define( "_AM_IMLINKS_INDEXPAGE", "Index Page" );
define( "_AM_IMLINKS_MVOTEDATA", "Vote data" );
define( "_AM_IMLINKS_MUPLOADS", "Image upload" );

// Catgeory defines
define( "_AM_IMLINKS_CCATEGORY_CREATENEW", "Create New Category" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY", "Modify category" );
define( "_AM_IMLINKS_CCATEGORY_MOVE", "Move category links" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_TITLE", "Category title:" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILED", "Failed moving links: Cannot move to this category" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_FAILEDT", "Failed moving links: Cannot find this category" );
define( "_AM_IMLINKS_CCATEGORY_MODIFY_MOVED", "Links moved and database updated successfully" );
define( "_AM_IMLINKS_CCATEGORY_CREATED", "New category created and database updated successfully" );
define( "_AM_IMLINKS_CCATEGORY_MODIFIED", "Selected category modified and database updated successfully" );
define( "_AM_IMLINKS_CCATEGORY_DELETED", "Selected category deleted and database updated successfully" );
define( "_AM_IMLINKS_CCATEGORY_AREUSURE", "WARNING: Are you sure you want to delete this category and ALL its links and comments?" );
define( "_AM_IMLINKS_CCATEGORY_NOEXISTS", "You must create a category before you can add a new link" );
define( "_AM_IMLINKS_FCATEGORY_GROUPPROMPT", "Category access permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have access to this category.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_SUBGROUPPROMPT", "Category submission permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to submit new links to this category.</span></div>" );
define( "_AM_IMLINKS_FCATEGORY_MODGROUPPROMPT", "Category moderation permissions:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Select user groups who will have permission to moderate this category.</span></div>" );

define( "_AM_IMLINKS_FCATEGORY_TITLE", "Category title:" );
define( "_AM_IMLINKS_FCATEGORY_WEIGHT", "Category weight:" );
define( "_AM_IMLINKS_FCATEGORY_SUBCATEGORY", "Set as sub-category:" );
define( "_AM_IMLINKS_FCATEGORY_CIMAGE", "Select category image:" );
define( "_AM_IMLINKS_FCATEGORY_DESCRIPTION", "Set category description:" );
define( "_AM_IMLINKS_FCATEGORY_SUMMARY", "Set category summary:" );

// Index page Defines
define( "_AM_IMLINKS_IPAGE_UPDATED", "Index page modified and database updated successfully!" );
define( "_AM_IMLINKS_IPAGE_INFORMATION", "Index Page Information" );
define( "_AM_IMLINKS_IPAGE_MODIFY", "Modify index page" );
define( "_AM_IMLINKS_IPAGE_CIMAGE", "Select index image:" );
define( "_AM_IMLINKS_IPAGE_CTITLE", "Index title:" );
define( "_AM_IMLINKS_IPAGE_CHEADING", "Index heading:" );
define( "_AM_IMLINKS_IPAGE_CHEADINGA", "Index heading alignment:" );
define( "_AM_IMLINKS_IPAGE_CFOOTER", "Index footer:" );
define( "_AM_IMLINKS_IPAGE_CFOOTERA", "Index footer alignment:" );
define( "_AM_IMLINKS_IPAGE_CLEFT", "Align left" );
define( "_AM_IMLINKS_IPAGE_CCENTER", "Align center" );
define( "_AM_IMLINKS_IPAGE_CRIGHT", "Align right" );

// Permissions defines
define( "_AM_IMLINKS_PERM_MANAGEMENT", "Permissions Management" );
define( "_AM_IMLINKS_PERM_PERMSNOTE", "<div><b>NOTE:</b> Please be aware that even if you've set correct viewing permissions here, a group might not see the articles or blocks if you don't also grant that group permissions to access the module. To do that, go to <b>System admin > Groups</b>, choose the appropriate group and click the checkboxes to grant its members the access.</div>" );
define( "_AM_IMLINKS_PERM_CPERMISSIONS", "Category Permissions" );
define( "_AM_IMLINKS_PERM_CSELECTPERMISSIONS", "Select categories that each group is allowed to view" );
define( "_AM_IMLINKS_PERM_CNOCATEGORY", "Cannot set permission's: No categories have been created yet!" );
define( "_AM_IMLINKS_PERM_FPERMISSIONS", "Link Permissions" );
define( "_AM_IMLINKS_PERM_FNOFILES", "Cannot set permission's: No links have been created yet!" );
define( "_AM_IMLINKS_PERM_FSELECTPERMISSIONS", "Select the links that each group is allowed to view" );

// Upload defines
define( "_AM_IMLINKS_LINK_IMAGEUPLOAD", "Image successfully uploaded to server destination" );
define( "_AM_IMLINKS_LINK_NOIMAGEEXIST", "Error: No link was selected for uploading. Please try again!" );
define( "_AM_IMLINKS_LINK_IMAGEEXIST", "Image already exists in upload area!" );
define( "_AM_IMLINKS_LINK_FILEDELETED", "Link has been deleted." );
define( "_AM_IMLINKS_LINK_FILEERRORDELETE", "Error deleting link: Link not found on server." );
define( "_AM_IMLINKS_LINK_NOFILEERROR", "Error deleting link: No link selected for deleting." );
define( "_AM_IMLINKS_LINK_DELETEFILE", "WARNING: Are you sure you want to delete this image link?" );
define( "_AM_IMLINKS_LINK_IMAGEINFO", "Server status" );
define( "_AM_IMLINKS_LINK_SPHPINI", "<b>Information taken from PHP ini link:</b>" );
define( "_AM_IMLINKS_LINK_SAFEMODESTATUS", "Safe mode status: " );
define( "_AM_IMLINKS_LINK_REGISTERGLOBALS", "Register globals: " );
define( "_AM_IMLINKS_LINK_SERVERUPLOADSTATUS", "Server uploads status: " );
define( "_AM_IMLINKS_LINK_MAXUPLOADSIZE", "Max upload size permitted: " );
define( "_AM_IMLINKS_LINK_MAXPOSTSIZE", "Max post size permitted: " );
define( "_AM_IMLINKS_LINK_SAFEMODEPROBLEMS", " (This may cause problems)" );
define( "_AM_IMLINKS_LINK_GDLIBSTATUS", "GD Library support: " );
define( "_AM_IMLINKS_LINK_GDLIBVERSION", "GD Library version: " );
define( "_AM_IMLINKS_LINK_GDON", "<b>Enabled</b> (thumbs nails available)" );
define( "_AM_IMLINKS_LINK_GDOFF", "<b>Disabled</b> (no thumb nails available)" );
define( "_AM_IMLINKS_LINK_OFF", "<b>OFF</b>" );
define( "_AM_IMLINKS_LINK_ON", "<b>ON</b>" );
define( "_AM_IMLINKS_LINK_CATIMAGE", "Category images" );
define( "_AM_IMLINKS_LINK_SCREENSHOTS", "Screenshot images" );
define( "_AM_IMLINKS_LINK_MAINIMAGEDIR", "Main images" );
define( "_AM_IMLINKS_LINK_FCATIMAGE", "Category Image Path" );
define( "_AM_IMLINKS_LINK_FSCREENSHOTS", "Screenshot image path" );
define( "_AM_IMLINKS_LINK_FMAINIMAGEDIR", "Main image path" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGETO", "Upload image: " );
define( "_AM_IMLINKS_LINK_FUPLOADPATH", "Upload path: " );
define( "_AM_IMLINKS_LINK_FUPLOADURL", "Upload URL: " );
define( "_AM_IMLINKS_LINK_FOLDERSELECTION", "Select upload destination:" );
define( "_AM_IMLINKS_LINK_FSHOWSELECTEDIMAGE", "Display selected image:" );
define( "_AM_IMLINKS_LINK_FUPLOADIMAGE", "Upload new image to selected destination:" );

// Main Index defines
define( "_AM_IMLINKS_MINDEX_LINKSUMMARY", "Module admin summary" );
define( "_AM_IMLINKS_MINDEX_PUBLISHEDLINK", "Published links:" );
define( "_AM_IMLINKS_MINDEX_AUTOPUBLISHEDLINK", "Auto published links:" );
define( "_AM_IMLINKS_MINDEX_AUTOEXPIRE", "Auto expire links:" );
define( "_AM_IMLINKS_MINDEX_EXPIRED", "Expired links:" );
define( "_AM_IMLINKS_MINDEX_OFFLINELINK", "Offline links:" );
define( "_AM_IMLINKS_MINDEX_ID", "ID" );
define( "_AM_IMLINKS_MINDEX_TITLE", "Link title" );
define( "_AM_IMLINKS_MINDEX_POSTER", "Poster" );
define( "_AM_IMLINKS_MINDEX_ONLINE", "Status" );
define( "_AM_IMLINKS_MINDEX_ONLINESTATUS", "Online status" );
define( "_AM_IMLINKS_MINDEX_PUBLISH", "Published" );
define( "_AM_IMLINKS_MINDEX_PUBLISHED", "Published" );
define( "_AM_IMLINKS_MINDEX_EXPIRE", "Expired" );
define( "_AM_IMLINKS_MINDEX_NOTSET", "Date not set" );
define( "_AM_IMLINKS_MINDEX_SUBMITTED", "Date submitted" );

define( "_AM_IMLINKS_MINDEX_ACTION", "Action" );
define( "_AM_IMLINKS_MINDEX_NOLINKSFOUND", "NOTICE: There are no links that match this criteria" );
define( "_AM_IMLINKS_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_IMLINKS_MINDEX_PAGEINFOTXT', '&bull;&nbsp;imLinks main page details.<br />&bull;&nbsp;You can easily change the image logo, heading, main index header and footer text to suit your own look<br /><br />Note: The logo image choosen will be used throughout imLinks.' );
define( "_AM_IMLINKS_MINDEX_RESPONSE", "Response Time" );
// Submitted Links
define( "_AM_IMLINKS_SUB_SUBMITTEDFILES", "Submitted links" );
define( "_AM_IMLINKS_SUB_FILESWAITINGINFO", "Waiting links information" );
define( "_AM_IMLINKS_SUB_FILESWAITINGVALIDATION", "Links waiting validation: " );
define( "_AM_IMLINKS_SUB_APPROVEWAITINGFILE", "<b>Approve</b> new link information without validation." );
define( "_AM_IMLINKS_SUB_EDITWAITINGFILE", "<b>Edit</b> new link information and then approve." );
define( "_AM_IMLINKS_SUB_DELETEWAITINGFILE", "<b>Delete</b> the new link information." );
define( "_AM_IMLINKS_SUB_NOFILESWAITING", "There are no links that match this critera" );
define( "_AM_IMLINKS_SUB_NEWFILECREATED", "New link data created and database updated successfully" );
// Vote Information
define( "_AM_IMLINKS_VOTE_RATINGINFOMATION", "Voting Information" );
define( "_AM_IMLINKS_VOTE_TOTALVOTES", "Total votes: " );
define( "_AM_IMLINKS_VOTE_REGUSERVOTES", "Registered user votes: %s" );
define( "_AM_IMLINKS_VOTE_ANONUSERVOTES", "Anonymous user votes: %s" );
define( "_AM_IMLINKS_VOTE_USER", "User" );
define( "_AM_IMLINKS_VOTE_IP", "IP Address" );
define( "_AM_IMLINKS_VOTE_DATE", "Submitted" );
define( "_AM_IMLINKS_VOTE_RATING", "Rating" );
define( "_AM_IMLINKS_VOTE_NOREGVOTES", "No registered user votes" );
define( "_AM_IMLINKS_VOTE_NOUNREGVOTES", "No unregistered user votes" );
define( "_AM_IMLINKS_VOTE_VOTEDELETED", "Vote data deleted." );
define( "_AM_IMLINKS_VOTE_ID", "ID" );
define( "_AM_IMLINKS_VOTE_FILETITLE", "Link title" );
define( "_AM_IMLINKS_VOTE_DISPLAYVOTES", "Voting data information" );
define( "_AM_IMLINKS_VOTE_NOVOTES", "No user votes to display" );
define( "_AM_IMLINKS_VOTE_DELETE", "No user votes to display" );
define( "_AM_IMLINKS_VOTE_DELETEDSC", "<b>Deletes</b> the chosen vote information from the database." );
define( "_AM_IMLINKS_VOTEDELETED", "Selected vote removed database updated" );

define( "_AM_IMLINKS_VOTE_USERAVG", "Average user rating" );
define( "_AM_IMLINKS_VOTE_TOTALRATE", "Total votes" );
define( "_AM_IMLINKS_VOTE_MAXRATE", "Max item vote" );
define( "_AM_IMLINKS_VOTE_MINRATE", "Min item vote" );
define( "_AM_IMLINKS_VOTE_MOSTVOTEDTITLE", "Most voted for" );
define( "_AM_IMLINKS_VOTE_LEASTVOTEDTITLE", "Least voted for" );
define( "_AM_IMLINKS_VOTE_MOSTVOTERSUID", "Most active voter" );
define( "_AM_IMLINKS_VOTE_REGISTERED", "Registered votes" );
define( "_AM_IMLINKS_VOTE_NONREGISTERED", "Anonymous votes" );
// Modifications
define( "_AM_IMLINKS_MOD_TOTMODREQUESTS", "Total modification requests: " );
define( "_AM_IMLINKS_MOD_MODREQUESTS", "Modified links" );
define( "_AM_IMLINKS_MOD_MODREQUESTSINFO", "Modified links information" );
define( "_AM_IMLINKS_MOD_MODID", "ID" );
define( "_AM_IMLINKS_MOD_MODTITLE", "Title" );
define( "_AM_IMLINKS_MOD_MODPOSTER", "Original poster: " );
define( "_AM_IMLINKS_MOD_DATE", "Submitted" );
define( "_AM_IMLINKS_MOD_NOMODREQUEST", "There are no requests that match this critera" );
define( "_AM_IMLINKS_MOD_TITLE", "Link title: " );
define( "_AM_IMLINKS_MOD_LID", "Link ID: " );
define( "_AM_IMLINKS_MOD_CID", "Category: " );
define( "_AM_IMLINKS_MOD_URL", "Link Url: " );
define( "_AM_IMLINKS_MOD_PUBLISHER", "Publisher: " );
define( "_AM_IMLINKS_MOD_FORUMID", "Forum: " );
define( "_AM_IMLINKS_MOD_SCREENSHOT", "Screenshot image: " );
define( "_AM_IMLINKS_MOD_HOMEPAGE", "Home page: " );
define( "_AM_IMLINKS_MOD_HOMEPAGETITLE", "Home page title: " );
define( "_AM_IMLINKS_MOD_SHOTIMAGE", "Screenshot image: " );
define( "_AM_IMLINKS_MOD_DESCRIPTION", "Description: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMITTER", "Submitter: " );
define( "_AM_IMLINKS_MOD_MODIFYSUBMIT", "Submitter" );
define( "_AM_IMLINKS_MOD_PROPOSED", "Proposed link details" );
define( "_AM_IMLINKS_MOD_ORIGINAL", "Orginal link details" );
define( "_AM_IMLINKS_MOD_REQDELETED", "Modification request removed from the database" );
define( "_AM_IMLINKS_MOD_REQUPDATED", "Selected link modified and database updated successfully" );
define( '_AM_IMLINKS_MOD_VIEW', 'View' );
// Link management
define( "_AM_IMLINKS_LINK_ID", "Link ID: " );
define( "_AM_IMLINKS_LINK_IP", "Submitters IP address: " );
define( "_AM_IMLINKS_LINK_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Allowed Admin Link Extensions</b>:</div>" );
define( "_AM_IMLINKS_LINK_MODIFYFILE", "Modify Link Information" );
define( "_AM_IMLINKS_LINK_CREATENEWFILE", "Create New Link" );
define( "_AM_IMLINKS_LINK_TITLE", "Link title: " );
define( "_AM_IMLINKS_LINK_DLURL", "Link URL: " );
define( "_AM_IMLINKS_LINK_DESCRIPTION", "Link description: " );
define( "_AM_IMLINKS_LINK_CATEGORY", "Link main category: " );
define( "_AM_IMLINKS_LINK_FILESSTATUS", " Set link offline?<br /><br /><span style='font-weight: normal;'>Link will not be viewable to all users.</span>" );
define( "_AM_IMLINKS_LINK_SETASUPDATED", " Set link status as updated?<br /><br /><span style='font-weight: normal;'>Link will display updated icon.</span>" );
define( "_AM_IMLINKS_LINK_SHOTIMAGE", "Link screenshot image: " );
define( "_AM_IMLINKS_LINK_DISCUSSINFORUM", "Add <em>Discuss in this Forum</em>?" );
define( "_AM_IMLINKS_LINK_PUBLISHDATE", "Link publish date:" );
define( "_AM_IMLINKS_LINK_EXPIREDATE", "Link expire date:" );
define( "_AM_IMLINKS_LINK_CLEARPUBLISHDATE", "<br /><br />Remove publish date:" );
define( "_AM_IMLINKS_LINK_CLEAREXPIREDATE", "<br /><br />Remove expire date:" );
define( "_AM_IMLINKS_LINK_PUBLISHDATESET", " Publish date set: " );
define( "_AM_IMLINKS_LINK_SETDATETIMEPUBLISH", " Set the date/time of publish" );
define( "_AM_IMLINKS_LINK_SETDATETIMEEXPIRE", " Set the date/time of expire" );
define( "_AM_IMLINKS_LINK_SETPUBLISHDATE", "<b>Set publish date: </b>" );
define( "_AM_IMLINKS_LINK_SETNEWPUBLISHDATE", "<b>Set new publish date: </b><br />Published:" );
define( "_AM_IMLINKS_LINK_SETPUBDATESETS", "<b>Publish date set: </b><br />Publishes on date:" );
define( "_AM_IMLINKS_LINK_EXPIREDATESET", " Expire date set: " );
define( "_AM_IMLINKS_LINK_SETEXPIREDATE", "<b>Set expire date: </b>" );
define( "_AM_IMLINKS_LINK_DELEDITMESS", "Delete broken report?<br /><br /><span style='font-weight: normal;'>When you choose <em>Yes</em> the broken report will automatically deleted and you confirm that the link now works again.</span>" );
define( "_AM_IMLINKS_LINK_MUSTBEVALID", "Screenshot image must be a valid image link under %s directory (ex. shot.gif). Leave it blank if there is no image link." );
define( "_AM_IMLINKS_LINK_EDITAPPROVE", "Approve link:" );
define( "_AM_IMLINKS_LINK_NEWFILEUPLOAD", "New link created and database updated successfully" );
define( "_AM_IMLINKS_LINK_FILEMODIFIEDUPDATE", "Selected link modified and database updated successfully" );
define( "_AM_IMLINKS_LINK_REALLYDELETEDTHIS", "Really delete the selected link?" );
define( "_AM_IMLINKS_LINK_FILEWASDELETED", "Link %s successfully removed from the database!" );
define( "_AM_IMLINKS_LINK_FILEAPPROVED", "Link approved and database updated successfully" );
define( "_AM_IMLINKS_LINK_CREATENEWSSTORY", "<b>Create News story from link</b>" );
define( "_AM_IMLINKS_LINK_SUBMITNEWS", "Submit new link as News item?" );
define( "_AM_IMLINKS_LINK_NEWSCATEGORY", "Select News category to submit News:" );
define( "_AM_IMLINKS_LINK_NEWSTITLE", "News title:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leave Blank to use link title</span></div>" );
define( "_AM_IMLINKS_LINK_PUBLISHER", "Link publisher name: " );

// Broken links defines
define( "_AM_IMLINKS_SBROKENSUBMIT", "Broken: " );
define( "_AM_IMLINKS_BROKEN_FILE", "Broken Reports" );
define( "_AM_IMLINKS_BROKEN_FILEIGNORED", "Broken report ignored and successfully removed from the database!" );
define( "_AM_IMLINKS_BROKEN_NOWACK", "Acknowledged status changed and database updated!" );
define( "_AM_IMLINKS_BROKEN_NOWCON", "Confirmed status changed and database updated!" );
define( "_AM_IMLINKS_BROKEN_REPORTINFO", "Broken report information" );
define( "_AM_IMLINKS_BROKEN_REPORTSNO", "Broken reports waiting:" );
define( "_AM_IMLINKS_BROKEN_IGNOREDESC", "<b>Ignores</b> the report and only deletes the broken link report." );
define( "_AM_IMLINKS_BROKEN_DELETEDESC", "<b>Deletes</b> the reported link data and broken link reports for the link." );
define( "_AM_IMLINKS_BROKEN_EDITDESC", "<b>Edit</b> the link to fix the problem." );
define( "_AM_IMLINKS_BROKEN_ACKDESC", "<b>Acknowledged</b> Set Acknowledged state of broken file report." );
define( "_AM_IMLINKS_BROKEN_CONFIRMDESC", "<b>Confirmed</b> Set confirmed state of broken link report." );
define( "_AM_IMLINKS_BROKEN_ACKNOWLEDGED", "Acknowledged" );
define( "_AM_IMLINKS_BROKEN_DCONFIRMED", "Confirmed" );

define( "_AM_IMLINKS_BROKEN_ID", "ID" );
define( "_AM_IMLINKS_BROKEN_REPORTER", "Reporter" );
define( "_AM_IMLINKS_BROKEN_FILESUBMITTER", "Submitter" );
define( "_AM_IMLINKS_BROKEN_DATESUBMITTED", "Submit date" );
define( "_AM_IMLINKS_BROKEN_ACTION", "Action" );
define( "_AM_IMLINKS_BROKEN_NOFILEMATCH", "There are no broken reports that match this critera" );
define( "_AM_IMLINKS_BROKENFILEDELETED", "link removed from database and broken report removed" );

// About defines
define( "_AM_IMLINKS_BY", "by" );

// image admin icon
define( "_AM_IMLINKS_ICO_EDIT", "Edit this item" );
define( "_AM_IMLINKS_ICO_DELETE", "Delete this item" );
define( "_AM_IMLINKS_ICO_RESOURCE", "Edit this resource" );
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
define( "_AM_IMLINKS_ICO_RES", "Edit resources/links for this item" );
define( "_AM_IMLINKS_MOD_URLRATING", "Interent content rating:" );

// Alternate category
define( "_AM_IMLINKS_ALTCAT_CREATEF", "Add alternate category" );
define( "_AM_IMLINKS_MALTCAT", "Alternate Category Information" );
define( "_AM_IMLINKS_ALTCAT_MODIFYF", "Alternate Category Management" );
define( "_AM_IMLINKS_ALTCAT_INFOTEXT", "<ul><li>Alternate categories can be added or removed easily via this form.</li></ul>" );
define( '_AM_IMLINKS_ALTCAT_CREATED', 'Alternate categories was saved!' );

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
define( "_AM_IMLINKS_LISTBROKEN", "Displays links that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the link does exist first before any action taken." );
define( "_AM_IMLINKS_PINGTIMES", "Displays the first estimated round ping time to each link and the Google PageRank™.<br /><br />NB: These results may not be accurate and should be taken as a rough guide." );

define( "_AM_IMLINKS_NO_FORUM", "No forum selected" );

define( "_AM_IMLINKS_PERM_RATEPERMISSIONS", "Rate Permissions" );
define( "_AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT", "Select the groups that can rate a link in the selected categories." );

define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS", "Auto Approve Links" );
define( "_AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT", "Select the groups that will have new links auto approved without admin intervention." );

define( "_AM_IMLINKS_PERM_SPERMISSIONS", "Submitter Permissions" );
define( "_AM_IMLINKS_PERM_SPERMISSIONS_TEXT", "Select the groups who can submit new links to selected categories." );

define( "_AM_IMLINKS_PERM_APERMISSIONS", "Moderator Groups" );
define( "_AM_IMLINKS_PERM_APERMISSIONS_TEXT", "Select the groups who have moderator privligages for the selected categories." );

// added by McDonald
define( "_AM_IMLINKS_COUNTRY", "Country:" );
define( "_AM_IMLINKS_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_KEYWORDS_NOTE", "Keywords should be seperated with a comma (keyword1, keyword2, keyword3, ..)" );
define( "_AM_IMLINKS_CHECKURL", "Check URL" );
define( "_AM_IMLINKS_CATTITLE", "Category" );
define( "_AM_IMLINKS_LINK_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_LINK_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_LINK_BINGMAP", "Bing Maps:" );
define( "_AM_IMLINKS_LINK_CHECKMAP", "Check map" );
define( "_AM_IMLINKS_STREET1", "Street 1:" );
define( "_AM_IMLINKS_STREET2", "Street 2 (optional):" );
define( "_AM_IMLINKS_TOWN", "Town:" );
define( "_AM_IMLINKS_STATE", "State:" );
define( "_AM_IMLINKS_ZIPCODE", "ZIP code:" );
define( "_AM_IMLINKS_TELEPHONE", "Telephone:" );
define( "_AM_IMLINKS_FAX", "Fax:" );

// Version 1.05 RC2
define( "_AM_IMLINKS_WARNINSTALL4", "<b>WARNING:</b> <u>Folder</u> %s is not writeable. <br />This folder needs to be writeable (CHMOD 777) for imLinks." );

// Version 1.05 RC5
define( "_AM_IMLINKS_VOIP", "VoIP:" );
define( "_AM_IMLINKS_LINK_SUBMITTER", "Link submitter name: " );
define( "_AM_IMLINKS_MOBILE", "Mobile:" );
define( "_AM_IMLINKS_CATSPONSOR", "Select category sponsor:" );
define( "_AM_IMLINKS_CATSPONSORDSC", "If you select a client the banner id from the form below will not be saved!" );
define( "_AM_IMLINKS_BANNERID", "Select banner ID:" );
define( "_AM_IMLINKS_BANNERIDDSC", "If you have selected a client in the form above the banner id will not be saved!" );

// Version 1.05 RC6
define( "_AM_IMLINKS_VAT", "VAT Reg No:" );
define( "_AM_IMLINKS_VATWIKI", "For more information see <a href='http://en.wikipedia.org/wiki/Value_added_tax_identification_number' target='_blank'>Wikipedia</a>" );
define( "_AM_IMLINKS_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_ICO_EXPIRE", "Expired" );
define( "_AM_IMLINKS_LINK_NORESPONSE", 'No response' );
define( "_AM_IMLINKS_LINK_CREATEADDRESS", '&nbsp;<b>Address form</b>' );
define( "_AM_IMLINKS_LINK_MISCLINKSETTINGS", '&nbsp;<b>Miscellaneous link settings</b>' );

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
define( "_AM_IMLINKS_FILE", "File " );
define( "_AM_IMLINKS_ALREADYEXISTTRYAGAIN", " already exists on the server. Please rename this file and try again.<br />" );
define( "_AM_IMLINKS_ERRORSRETURNUPLOAD", "<h4>Errors returned while uploading</h4>" );
define( "_AM_IMLINKS_DOESNOTEXIST", " does not exist!" );
define( "_AM_IMLINKS_INFORMATION", "Link information" );
define( "_AM_IMLINKS_HITS", "Hits: " );
define( "_AM_IMLINKS_PAGERANK", "PageRank™: ");
define( "_AM_IMLINKS_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!" );
define( "_AM_IMLINKS_MOD_COUNTRY", "Country:" );
define( "_AM_IMLINKS_MOD_KEYWORDS", "Keywords:" );
define( "_AM_IMLINKS_MOD_ITEM_TAG", "Tags:" );
define( "_AM_IMLINKS_MOD_GOOGLEMAP", "Google Maps:" );
define( "_AM_IMLINKS_MOD_YAHOOMAP", "Yahoo Maps:" );
define( "_AM_IMLINKS_MOD_MULTIMAP", "Multimap:" );
define( "_AM_IMLINKS_MOD_STREET1", "Street 1:" );
define( "_AM_IMLINKS_MOD_STREET2", "Street 2 (optional):" );
define( "_AM_IMLINKS_MOD_TOWN", "Town:" );
define( "_AM_IMLINKS_MOD_STATE", "State:" );
define( "_AM_IMLINKS_MOD_ZIP", "ZIP code:" );
define( "_AM_IMLINKS_MOD_TEL", "Telephone:" );
define( "_AM_IMLINKS_MOD_FAX", "Fax:" );
define( "_AM_IMLINKS_MOD_VOIP", "VoIP:" );
define( "_AM_IMLINKS_MOD_MOBILE", "Mobile:" );
define( "_AM_IMLINKS_MOD_EMAIL", "E-Mail:" );
define( "_AM_IMLINKS_MOD_VAT", "VAT Reg No.:" );

// version 1.06 RC-2
define( "_AM_IMLINKS_IPAGE_SHOWLATEST", "Show latest listings?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL", "How many links to show?" );
define( "_AM_IMLINKS_IPAGE_LATESTTOTAL_DSC", "0 Turns this option off." );

//version 1.06 Final
define( "_AM_IMLINKS_DOCUMENTATION", "Documentation" );
define( "_AM_IMLINKS_SHOWNOIMAGE", "Show no image" );
define( "_AM_IMLINKS_NOSELECTION", "No selection" );
define( "_AM_IMLINKS_NOFILESELECT", "No selected file" );

// *** imLinks ***

//version 1.00 RC-1
define( '_AM_IMLINKS_COUNTRYDSC', 'If no country is selected the address can not be formatted and will not be displayed.' );
define( '_AM_IMLINKS_MAPDSC', 'Click icon to open a new browser tab or window showing the map.<br />Default: %s' );
define( '_AM_IMLINKS_LINKURLDSC', 'Click icon to open url in a new browser tab or window.<br />You can use this to check the url.' );
define( '_AM_IMLINKS_STREETTWODSC', 'This field is optional. If field is left blank it will not be used.' );
define( '_AM_IMLINKS_STATEDSC', 'Enter county, district, province, state, etc. If field is left blank it will not be used.' );
define( '_AM_IMLINKS_EMAILDSC', 'Enter email address as:<br />- name@domain.com<br />- mailto:name@domain.com' );
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
define( '_AM_IMLINKS_RSSCLICKSUBMIT', 'Please click Submit to store all form values in the database!' );
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
?>