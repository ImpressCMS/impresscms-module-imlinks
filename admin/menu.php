<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: menu.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since		1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links 
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

$admin_dirname = basename( dirname( dirname( __FILE__ ) ) );

global $icmsConfig;

$adminmenu[1]['title'] 	= _MI_IMLINKS_BINDEX;
$adminmenu[1]['link']	= 'admin/index.php';
$adminmenu[1]['icon']	= 'images/imlinks_iconbig.png'; // 32x32 px for options bar (tabs) 
$adminmenu[1]['small']	= 'images/imlinks_iconsmall.png'; // 16x16 px for drop down

$adminmenu[2]['title'] 	= _MI_IMLINKS_MLINKS;
$adminmenu[2]['link']	= 'admin/index.php?op=edit';
$adminmenu[2]['icon']	= 'images/icon/link.png';
$adminmenu[2]['small']	= 'images/icon/link_small.png';

$adminmenu[3]['title'] 	= _MI_IMLINKS_MCATEGORY;
$adminmenu[3]['link']	= 'admin/category.php';
$adminmenu[3]['icon']	= 'images/icon/folder.png';
$adminmenu[3]['small']	= 'images/icon/folder_small.png';

$adminmenu[4]['title'] 	= _MI_IMLINKS_INDEXPAGE;
$adminmenu[4]['link']	= 'admin/indexpage.php';
$adminmenu[4]['icon']	= 'images/icon/indexpage.png';
$adminmenu[4]['small']	= 'images/icon/indexpage_small.png';

$adminmenu[5]['title'] 	= _MI_IMLINKS_MUPLOADS;
$adminmenu[5]['link']	= 'admin/upload.php';
$adminmenu[5]['icon']	= 'images/icon/upload.png';
$adminmenu[5]['small']	= 'images/icon/upload_small.png';

$adminmenu[6]['title'] 	= _MI_IMLINKS_RSSFEED;
$adminmenu[6]['link']	= 'admin/feed.php?op=edit';
$adminmenu[6]['icon']	= 'images/icon/feed32.png';
$adminmenu[6]['small']	= 'images/icon/feed.png';                   

if ( isset( icms::$module ) ) {

	icms_loadLanguageFile( $admin_dirname, 'admin' );

//	if ( file_exists( "http://www.assembla.com/code/impresscmsaddons/subversion/nodes/modules/imlinks/docs/imlinks_manual.pdf") ) {
		$docs = 'http://www.assembla.com/code/impresscmsaddons/subversion/nodes/modules/imlinks/docs/imlinks_manual.pdf" target="_blank"'; 
//	} elseif ( file_exists( '../docs/english/readme.html') ) { 
//		$docs = '../docs/english/readme.html" target="_blank"'; 
//	} else {
//		$docs = '';
//	}

	$i = -1;
	$i++;
	$headermenu[$i]['title'] = _AM_IMLINKS_GOMODULE;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/' . $admin_dirname;
	$i++;
	$headermenu[$i]['title'] = _PREFERENCES;
	$headermenu[$i]['link']  = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . icms::$module -> getVar( 'mid' );
	$i++;
	$headermenu[$i]['title'] = _AM_IMLINKS_BUPDATE;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/system/admin.php?fct=modulesadmin&op=update&module=' . $admin_dirname;
	$i++;
	$headermenu[$i]['title'] = _AM_IMLINKS_BPERMISSIONS;
	$headermenu[$i]['link']  = '../admin/permissions.php';
	$i++;
	$headermenu[$i]['title'] = _AM_IMLINKS_MLISTPINGTIMES;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/' . $admin_dirname . '/admin/index.php?op=pingtime';
	$i++;
	$headermenu[$i]['title'] = _COMMENTS;
	$headermenu[$i]['link']	 = "../../system/admin.php?module=" . icms::$module -> getVar( 'mid' ) . "&status=0&limit=100&fct=comments&selsubmit=Go";
	$i++;
	$headermenu[$i]['title'] = _AM_IMLINKS_DOCUMENTATION;
	$headermenu[$i]['link']  = $docs;
	$i++;
	$headermenu[$i]['title'] = _MODABOUT_ABOUT;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/' . $admin_dirname . '/admin/about.php';
}
?>