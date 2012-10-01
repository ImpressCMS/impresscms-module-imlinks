<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: icms_version.php
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
 
if ( !defined( 'ICMS_ROOT_PATH' ) ) die( 'ICMS root path not defined' );

$mydirname = basename( dirname( __FILE__ ) );

global $icmsConfig;

if ( file_exists( ICMS_ROOT_PATH . '/modules/' . $mydirname . '/language/'. $icmsConfig['language'] . '/moduleabout.php' ) ) {
	include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/language/'. $icmsConfig['language'] . '/moduleabout.php';
} else { include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/language/english/moduleabout.php'; }

$modversion['name'] 			= _MI_IMLINKS_NAME;
$modversion['version']			= '1.13';
$modversion['date'] 			= 'xx xxxxx 2012';
$modversion['status']			= 'Trunk';
$modversion['status_version']	= 'Trunk';
$modversion['description'] 		= _MI_IMLINKS_DESC;
$modversion['license']			= _MI_IMLINKS_ABOUTLICENSE;
$modversion['image']			= 'images/imlinks_ilogo.png';		// standard XOOPS icon, 92x52 px  
$modversion['iconsmall']		= 'images/imlinks_iconsmall.png';	// small icon for ImpressCMS, 16x16 px 
$modversion['iconbig']			= 'images/imlinks_iconbig.png';		// big icon for ImpressCMS, 37x35 px
$modversion['dirname']			= $mydirname;
$modversion['modname']			= 'imlinks';

$modversion['author']			= 'Version developer: John N';
$modversion['credits']			= 'WF-Projects Team: Based on WF-Links, thanks to the dream-team for some code snippits. Team members: amayer, bender, david, dqflyer, draven, frankblack, gladiac, hervet, jackj, mercibe, John N, phppp, predator, reliableSol, tom, xpider, xtheme.';
$modversion['author_website_url']	= 'http://code.google.com/p/mcdonaldsstore/downloads/list';
$modversion['author_website_name']	= 'McDonalds Store';

$modversion['support_site_url'] = 'http://community.impresscms.org/modules/newbb/viewforum.php?forum=9';
$modversion['support_site_name']= 'ImpressCMS Community Forum - Modules Support';

// ** Contributors **
$modversion['people']['developers'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a>&nbsp;&nbsp;<span style="font-size: smaller;">( pietjebell31 [at] hotmail [dot] com )</span>';
$modversion['people']['testers'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=10" target="_blank">sato-san</a>';
/* $modversion['people']['testers'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=14" target="_blank">GibaPhp</a>';
$modversion['people']['testers'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=480" target="_blank">algalochkin</a>'; */

// ** Translators **
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=10" target="_blank">sato-san</a> (German)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=14" target="_blank">GibaPhp</a>  (Portuguese-Brazil)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=97" target="_blank">debianus</a> (Spanish)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a>  (Dutch)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=480" target="_blank">algalochkin</a> (Russian)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=523" target="_blank">JardaR</a> (Czech)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=555" target="_blank">cpascal</a> (French)';
$modversion['people']['translators'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=953" target="_blank">hisapapa</a> (Japanese)';
$modversion['people']['translators'][] = '<a href="http://www.frxoops.org/userinfo.php?uid=18073" target="_blank">Burning</a> (French)';

// ** Other contributors **
$modversion['people']['other'][] = '<a href="http://www.bitfolge.de" target="_blank">Kai Blankenhorn</a> (vCard script)';
$modversion['people']['other'][] = '<a href="http://www.famfamfam.com" target="_blank">famfamfam.com</a> (icons)';
$modversion['people']['other'][] = '<a href="http://www.masugadesign.com" target="_blank">Ryan Masuga</a> (AJAX Rating Bars)';
$modversion['people']['other'][] = '<a href="http://www.p51labs.com/lightwindow/" target="_blank">Kevin Miller</a> (LightWindow)';
$modversion['people']['other'][] = '<a href="http://orangoo.com/labs/GreyBox/" target="_blank">Orangoo Labs</a> (GreyBox)';
$modversion['people']['other'][] = '<a href="http://www.heise.de/extras/socialshareprivacy/" target="_blank">Social Share Privacy</a>';
$modversion['people']['other'][] = '<a href="http://lytebox.com" target="_blank">Lytebox</a>';
$modversion['people']['other'][] = '<a href="http://prototypejs.org" target="_blank">Prototype</a>';
$modversion['people']['other'][] = '<a href="http://script.aculo.us" target="_blank">script.aculo.us</a>';
$modversion['people']['other'][] = '<a href="http://pagerank.phurix.net/" target="_blank">Phurix Labs (Google Pagerank script)</a>';

// ** Documentation
$modversion['manual'][] = '<a href="http://www.assembla.com/code/impresscmsaddons/subversion/nodes/modules/imlinks/docs/imlinks_manual.pdf" target="_blank">English [PDF]</a>';

// ** If Release Candidate **
$modversion['warning'] = _MODABOUT_IMLINKS_WARNING_RC;

// ** If Final  **
// $modversion['warning'] = _MODABOUT_IMLINKS_WARNING_FINAL;

// Launch additional install script to check
$modversion['onInstall']	= 'include/onupdate.inc.php';
$modversion['onUpdate']		= 'include/onupdate.inc.php';
$modversion['onUninstall']	= 'include/onupdate.inc.php';

// Tables created by sql file (without prefix!)
$modversion['object_items'][1] = 'cat';
$modversion['object_items'][2] = 'links';
$modversion['object_items'][3] = 'broken';
$modversion['object_items'][4] = 'mod';

$modversion['tables'] = icms_getTablesArray( $modversion['dirname'], $modversion['object_items'] );

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Blocks
$modversion['blocks'][] = array(
	'file'			=> 'imlinks_top.php',
	'name'			=> _MI_IMLINKS_BNAME1,
	'description'	=> 'Shows recently added links',
	'show_func'		=> 'b_imlinks_top_show',
	'edit_func'		=> 'b_imlinks_top_edit',
	'options'		=> 'published|10|19|d/m/Y',
	'template'		=> 'imlinks_block_new.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'imlinks_top.php',
	'name'			=> _MI_IMLINKS_BNAME2,
	'description'	=> 'Shows top clicked links',
	'show_func'		=> 'b_imlinks_top_show',
	'edit_func'		=> 'b_imlinks_top_edit',
	'options'		=> 'hits|10|19',
	'template'		=> 'imlinks_block_top.html',
	'can_clone'		=> true );

//$modversion['blocks'][] = array(
//	'file'			=> 'imlinks_block_tag.php',
//	'name'			=> _MI_IMLINKS_BNAME4,
//	'description'	=> 'Show tag cloud',
//	'show_func'		=> 'imlinks_tag_block_cloud_show',
//	'edit_func'		=> 'imlinks_tag_block_cloud_edit',
//	'options'		=> '100|0|150|80',
//	'template'		=> 'imlinks_tag_block_cloud.html',
//	'can_clone'		=> true );

//$modversion['blocks'][] = array(
//	'file'			=> 'imlinks_block_tag.php',
//	'name'			=> _MI_IMLINKS_BNAME5,
//	'description'	=> 'Show top tag',
//	'show_func'		=> 'imlinks_tag_block_top_show',
//	'edit_func'		=> 'imlinks_tag_block_top_edit',
//	'options'		=> '50|30|c',
//	'template'		=> 'imlinks_tag_block_tag.html',
//	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'imlinks_top.php',
	'name'			=> _MI_IMLINKS_BNAME6,
	'description'	=> 'Shows Random links',
	'show_func'		=> 'b_imlinks_random_show',
	'edit_func'		=> 'b_imlinks_random_edit',
	'options'		=> 'published|10|19|d/m/Y',
	'template'		=> 'imlinks_block_random.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'imlinks_top.php',
	'name'			=> _MI_IMLINKS_BNAME7,
	'description'	=> 'Shows Recent Links',
	'show_func'		=> 'b_imlinks_recent_show',
	'edit_func'		=> 'b_imlinks_recent_edit',
	'options'		=> '10|d/m/Y',
	'template'		=> 'imlinks_block_new_full.html',
	'can_clone'		=> true );

// Menu
$modversion['hasMain'] = 1;

// This part inserts the selected topics as sub items in the ICMS main menu
$module_handler = icms::handler( 'icms_module' );
$module = &$module_handler -> getByDirname( $modversion['dirname'] );
$cansubmit = 0;
if ( is_object( $module ) ) {
	$groups = ( is_object( icms::$user ) ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
	$gperm_handler = icms::handler('icms_member_groupperm');
	if ( $gperm_handler -> checkRight( 'imLinkSubPerm', 0, $groups, $module -> getVar( 'mid' ) ) ) {
		$cansubmit = 1;
	}
}
if ( $cansubmit == 1 ) {
	$modversion['sub'][0]['name'] = _MI_IMLINKS_SMNAME1;
	$modversion['sub'][0]['url'] = 'submit.php';
} 
unset( $cansubmit );

$modversion['sub'][] = array(
	'name'	=> _MI_IMLINKS_SMNAME2,
	'url'	=> 'topten.php?list=hit' );

$modversion['sub'][] = array(
	'name'	=> _MI_IMLINKS_SMNAME3,
	'url'	=> 'topten.php?list=rate' );

$modversion['sub'][] = array(
	'name'	=> _MI_IMLINKS_SMNAME4,
	'url'	=> 'newlist.php?newlinkshowdays=7' );

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'imlinks_search';

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'lid';
$modversion['comments']['pageName'] = 'singlelink.php';
$modversion['comments']['extraParams'] = array( 'cid' );

// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'imlinks_com_approve';
$modversion['comments']['callback']['update'] = 'imlinks_com_update';

// Templates
$modversion['templates'][] = array(
	'file'			=> 'imlinks_brokenlink.html',
	'description'	=> 'Broken links template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_linkload.html',
	'description'	=> 'Links load template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_index.html',
	'description'	=> 'Index page imLinks' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_singlelink.html',
	'description'	=> 'Single link template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_topten.html',
	'description'	=> 'Popularity template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_viewcat.html',
	'description'	=> 'Category template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_newlistindex.html',
	'description'	=> 'New links template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_print.html',
	'description'	=> 'Printing template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_disclaimer.html',
	'description'	=> 'Disclaimer template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_rss.html',
	'description'	=> 'RSS feed template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_moduleabout.html',
	'description'	=> 'About page template' );
$modversion['templates'][] = array(
	'file'			=> 'imlinks_admin_index.html',
	'description'	=> 'Admin Index' );

// Module config setting
$modversion['config'][] = array(
	'name'			=> 'popular',
	'title' 		=> '_MI_IMLINKS_POPULAR',
	'description'	=> '_MI_IMLINKS_POPULARDSC',
	'formtype'		=> 'select',
	'valuetype' 	=> 'int',
	'default'		=> 100,
	'options'		=> array( '5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000, '1500' => 1500, '2000' => 2000 ) );

$modversion['config'][] = array(
	'name'			=> 'displayicons',
	'title'			=> '_MI_IMLINKS_ICONDISPLAY',
	'description'	=> '_MI_IMLINKS_DISPLAYICONDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 1,
	'options'		=> array( '_MI_IMLINKS_DISPLAYICON1' => 1, '_MI_IMLINKS_DISPLAYICON2' => 2, '_MI_IMLINKS_DISPLAYICON3' => 3 ) );

$modversion['config'][] = array(
	'name'			=> 'daysnew',
	'title'			=> '_MI_IMLINKS_DAYSNEW',
	'description'	=> '_MI_IMLINKS_DAYSNEWDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 10 );

$modversion['config'][] = array(
	'name'			=> 'daysupdated',
	'title'			=> '_MI_IMLINKS_DAYSUPDATED',
	'description'	=> '_MI_IMLINKS_DAYSUPDATEDDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 10 );

$modversion['config'][] = array(
	'name'			=> 'perpage',
	'title'			=> '_MI_IMLINKS_PERPAGE',
	'description'	=> '_MI_IMLINKS_PERPAGEDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 10,
	'options'		=> array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50, '75' => 75, '100' => 100, '200' => 200 ) );

$modversion['config'][] = array(
	'name'			=> 'admin_perpage',
	'title'			=> '_MI_IMLINKS_ADMINPAGE',
	'description'	=> '_MI_IMLINKS_AMDMINPAGEDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 50,
	'options'		=> array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50, '75' => 75, '100' => 100, '200' => 200 ) );

$modversion['config'][] = array(
	'name'			=> 'linkxorder',
	'title'			=> '_MI_IMLINKS_ARTICLESSORT',
	'description'	=> '_MI_IMLINKS_ARTICLESSORTDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'title ASC',
	'options'		=> array(	'_MI_IMLINKS_TITLE_A' => 'title ASC',
								'_MI_IMLINKS_TITLE_D' => 'title DESC',
								'_MI_IMLINKS_SUBMITTED_A' => 'published ASC',
								'_MI_IMLINKS_SUBMITTED_D' => 'published DESC',
								'_MI_IMLINKS_RATING_A' => 'rating ASC',
								'_MI_IMLINKS_RATING_D' => 'rating DESC',
								'_MI_IMLINKS_POPULARITY_A' => 'hits ASC',
								'_MI_IMLINKS_POPULARITY_D' => 'hits DESC',
								'_MI_IMLINKS_COUNTRY_A' => 'country ASC',
								'_MI_IMLINKS_COUNTRY_D' => 'country DESC' ) );

$modversion['config'][] = array(
	'name'			=> 'sortcats',
	'title'			=> '_MI_IMLINKS_SORTCATS',
	'description'	=> '_MI_IMLINKS_SORTCATSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'title',
	'options'		=> array( '_MI_IMLINKS_TITLE' => 'title', '_MI_IMLINKS_WEIGHT' => 'weight' ) );

$modversion['config'][] = array(
	'name'			=> 'subcats',
	'title'			=> '_MI_IMLINKS_SUBCATS',
	'description'	=> '_MI_IMLINKS_SUBCATSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'catcols',
	'title'			=> '_MI_IMLINKS_CATCOLS',
	'description'	=> '_MI_IMLINKS_CATCOLSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 2,
	'options'		=> array( '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5 ) );

$modversion['config'][] = array(
	'name'			=> 'form_options',
	'title'			=> '_MI_IMLINKS_EDITOR',
	'description'	=> '_MI_IMLINKS_EDITORCHOICE',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'tinymce',
	'options'		=>  array(	_MI_IMLINKS_FORM_FCK => 'fck',
							//	_MI_IMLINKS_FORM_TINYEDITOR => 'tinyeditor',
								_MI_IMLINKS_FORM_TINYMCE => 'tinymce' ) );

$modversion['config'][] = array(
	'name'			=> 'form_optionsuser',
	'title'			=> '_MI_IMLINKS_EDITORUSER',
	'description'	=> '_MI_IMLINKS_EDITORCHOICEUSER',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'tinymce',
	'options'		=>  array(	_MI_IMLINKS_FORM_FCK => 'fck',
							//	_MI_IMLINKS_FORM_TINYEDITOR => 'tinyeditor',
								_MI_IMLINKS_FORM_TINYMCE => 'tinymce') );

$modversion['config'][] = array(
	'name'			=> 'captcha',
	'title'			=> '_MI_IMLINKS_CAPTCHA',
	'description'	=> '_MI_IMLINKS_CAPTCHADSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'screenshot',
	'title'			=> '_MI_IMLINKS_USESHOTS',
	'description'	=> '_MI_IMLINKS_USESHOTSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'usethumbs',
	'title'			=> '_MI_IMLINKS_USETHUMBS',
	'description'	=> '_MI_IMLINKS_USETHUMBSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'updatethumbs',
	'title'			=> '_MI_IMLINKS_IMGUPDATE',
	'description'	=> '_MI_IMLINKS_IMGUPDATEDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'imagequality',
	'title'			=> '_MI_IMLINKS_QUALITY',
	'description'	=> '_MI_IMLINKS_QUALITYDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 100 );

$modversion['config'][] = array(
	'name'			=> 'keepaspect',
	'title'			=> '_MI_IMLINKS_KEEPASPECT',
	'description'	=> '_MI_IMLINKS_KEEPASPECTDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'shotwidth',
	'title'			=> '_MI_IMLINKS_SHOTWIDTH',
	'description'	=> '_MI_IMLINKS_SHOTWIDTHDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 140 );

$modversion['config'][] = array(
	'name'			=> 'shotheight',
	'title'			=> '_MI_IMLINKS_SHOTHEIGHT',
	'description'	=> '_MI_IMLINKS_SHOTHEIGHTDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 79 );

$modversion['config'][] = array(
	'name'			=> 'maxfilesize',
	'title'			=> '_MI_IMLINKS_MAXFILESIZE',
	'description'	=> '_MI_IMLINKS_MAXFILESIZEDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 200000 );

$modversion['config'][] = array(
	'name'			=> 'maximgwidth',
	'title'			=> '_MI_IMLINKS_IMGWIDTH',
	'description'	=> '_MI_IMLINKS_IMGWIDTHDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 600 );

$modversion['config'][] = array(
	'name'			=> 'maximgheight',
	'title'			=> '_MI_IMLINKS_IMGHEIGHT',
	'description'	=> '_MI_IMLINKS_IMGHEIGHTDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 600 );

$modversion['config'][] = array(
	'name'			=> 'useautothumb',
	'title'			=> '_MI_IMLINKS_USEAUTOSCRSHOT',
	'description'	=> '_MI_IMLINKS_USEAUTOSCRSHOTDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'autothumbsrc',
	'title'			=> '_MI_IMLINKS_AUTOTHUMBSRC',
	'description'	=> '_MI_IMLINKS_AUTOTHUMBSRCDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 0,
	'options'		=> array(	'Thumbshots.org'	=> 0,
								'Mozshot'			=> 1 ) );

$modversion['config'][] = array(
	'name'			=> 'mainimagedir',
	'title'			=> '_MI_IMLINKS_MAINIMGDIR',
	'description'	=> '_MI_IMLINKS_MAINIMGDIRDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'modules/' . $mydirname . '/images' );

$modversion['config'][] = array(
	'name'			=> 'screenshots',
	'title'			=> '_MI_IMLINKS_SCREENSHOTS',
	'description'	=> '_MI_IMLINKS_SCREENSHOTSDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'uploads/images/screenshots' );

$modversion['config'][] = array(
	'name'			=> 'catimage',
	'title'			=> '_MI_IMLINKS_CATEGORYIMG',
	'description'	=> '_MI_IMLINKS_CATEGORYIMGDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'uploads/images/category' );

$modversion['config'][] = array(
	'name'			=> 'flagimage',
	'title'			=> '_MI_IMLINKS_FLAGIMG',
	'description'	=> '_MI_IMLINKS_FLAGIMGDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'uploads/images/flags/flags_small' );

$modversion['config'][] = array(
	'name'			=> 'dateformat',
	'title'			=> '_MI_IMLINKS_DATEFORMAT',
	'description'	=> '_MI_IMLINKS_DATEFORMATDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'D, d-M-Y' );

$modversion['config'][] = array(
	'name'			=> 'dateformatadmin',
	'title'			=> '_MI_IMLINKS_DATEFORMATADMIN',
	'description'	=> '_MI_IMLINKS_DATEFORMATADMINDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'D, d-M-Y - G:i' );

$modversion['config'][] = array(
	'name'			=> 'totalchars',
	'title'			=> '_MI_IMLINKS_TOTALCHARS',
	'description'	=> '_MI_IMLINKS_TOTALCHARSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 200,
	'options'		=> array( '100' => 100, '200' => 200, '300' => 300, '400' => 400, '500' => 500, '750' => 750 ) );

$modversion['config'][] = array(
	'name'			=> 'keywordlength',
	'title'			=> '_MI_IMLINKS_KEYLENGTH',
	'description'	=> '_MI_IMLINKS_KEYLENGTHDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 255 );

$modversion['config'][] = array(
	'name'			=> 'lightwindow',
	'title'			=> '_MI_IMLINKS_LIGHTWINDOW',
	'description'	=> '_MI_IMLINKS_LIGHTWINDOWDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 0,
	'options'		=> array(	_MI_IMLINKS_DEFAULT => 0,
								'LightWindow'		=> 1,
								'GreyBox'			=> 2 ) );

$modversion['config'][] = array(
	'name'			=> 'otherlinks',
	'title'			=> '_MI_IMLINKS_OTHERLINKS',
	'description'	=> '_MI_IMLINKS_OTHERLINKSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'quickview',
	'title'			=> '_MI_IMLINKS_QUICKVIEW',
	'description'	=> '_MI_IMLINKS_QUICKVIEWDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'showlegend',
	'title'			=> '_MI_IMLINKS_SHOWLEGEND',
	'description'	=> '_MI_IMLINKS_SHOWLEGENDDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'showsbookmarks',
	'title'			=> '_MI_IMLINKS_SOCIALBTTNS',
	'description'	=> '_MI_IMLINKS_SOCIALBTTNSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 0,
	'options'		=> array( _NONE => 0, _IM_IMLINKS_SOCBOOK => 1, _IM_IMLINKS_SOCMEDIA => 2, _IM_IMLINKS_SOCMEDIAPRIVE => 3 ) );

$modversion['config'][] = array(
	'name'			=> 'twitt_bttn',
	'title'			=> '_MI_IMLINKS_TWITTERBTTN',
	'description'	=> '_MI_IMLINKS_TWITTERBTTNDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 0,
	'options'		=> array( _NONE => 0, _MI_IMLINKS_DEFAULT => 1, _MI_IMLINKS_HORICNT => 2, _MI_IMLINKS_VERTCNT => 3 ) );	

$modversion['config'][] = array(
	'name'			=> 'faceb_bttn',
	'title'			=> '_MI_IMLINKS_FACEBOOKBTTN',
	'description'	=> '_MI_IMLINKS_FACEBOOKBTTNDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 0,
	'options'		=> array( _NONE => 0, _MI_IMLINKS_DEFAULT => 1, _MI_IMLINKS_HORICNT => 2, _MI_IMLINKS_VERTCNT => 3 ) );

$modversion['config'][] = array(
	'name'			=> 'plusone_bttn',
	'title'			=> '_MI_IMLINKS_PLUSONEBTTN',
	'description'	=> '_MI_IMLINKS_PLUSONEBTTNDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 0,
	'options'		=> array( _NONE => 0, _MI_IMLINKS_DEFAULT => 1, _MI_IMLINKS_HORICNT => 2, _MI_IMLINKS_VERTCNT => 3 ) );

$modversion['config'][] = array(
	'name'			=> 'showrating',
	'title'			=> '_MI_IMLINKS_SHOWRATING',
	'description'	=> '_MI_IMLINKS_SHOWRATINGDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'showpagerank',
	'title'			=> '_MI_IMLINKS_SHOWPAGERANK',
	'description'	=> '_MI_IMLINKS_SHOWPAGERANKSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

//$modversion['config'][] = array(
//	'name'			=> 'usercantag',
//	'title'			=> '_MI_IMLINKS_USERTAGDESCR',
//	'description'	=> '_MI_IMLINKS_USERTAGDSC',
//	'formtype'		=> 'yesno',
//	'valuetype'		=> 'int',
//	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'useaddress',
	'title'			=> '_MI_IMLINKS_USEADDRESSDESCR',
	'description'	=> '_MI_IMLINKS_USEADDRESSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'niceurl',
	'title'			=> '_MI_IMLINKS_NICEURL',
	'description'	=> '_MI_IMLINKS_NICEURLDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'linkedterms',
	'title'			=> '_MI_IMLINKS_LINKEDTERMS',
	'description'	=> '_MI_IMLINKS_LINKEDTERMSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'imglossarydir',
	'title'			=> '_MI_IMLINKS_IMGLOSSARYDIR',
	'description'	=> '_MI_IMLINKS_IMGLOSSARYDIRDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'imglossary' );

$modversion['config'][] = array(
	'name'			=> 'tomtom_apikey',
	'title'			=> '_MI_IMLINKS_TOMTOMAPI',
	'description'	=> '_MI_IMLINKS_TOMTOMAPIDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> '' );

$modversion['config'][] = array(
	'name'			=> 'tomtom_logo',
	'title'			=> '_MI_IMLINKS_TOMTOMLOGO',
	'description'	=> '_MI_IMLINKS_TOMTOMLOGODSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'http://community.impresscms.org/modules/link_to_us/images/button.jpg' );

$modversion['config'][] = array(
	'name'			=> 'printlogourl',
	'title'			=> '_MI_IMLINKS_LOGOURLPRINT',
	'description'	=> '_MI_IMLINKS_LOGOURLDSCPRINT',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> ICMS_URL . '/modules/' . $modversion['dirname'] . '/images/logo-en.png' );

$modversion['config'][] = array(
	'name'			=> 'footerprint',
	'title'			=> '_MI_IMLINKS_FOOTERPRINT',
	'description'	=> '_MI_IMLINKS_FOOTERPRINTDSC',
	'formtype'		=> 'textsarea',
	'valuetype'		=> 'text',
	'default'		=> '' . ICMS_URL . '' );

$modversion['config'][] = array(
	'name'			=> 'showdisclaimer',
	'title'			=> '_MI_IMLINKS_SHOWDISCLAIMER',
	'description'	=> '_MI_IMLINKS_SHOWDISCLAIMERDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'disclaimer',
	'title'			=> '_MI_IMLINKS_DISCLAIMER',
	'description'	=> '_MI_IMLINKS_DISCLAIMERDSC',
	'formtype'		=> 'textsarea',
	'valuetype'		=> 'text',
	'default'		=> 'We have the right, but not the obligation to monitor and review submissions submitted by users, in the forums. We shall not be responsible for any of the content of these messages. We further reserve the right, to delete, move or edit submissions that the we, in its exclusive discretion, deems abusive, defamatory, obscene or in violation of any Copyright or Trademark laws or otherwise objectionable.' );

$modversion['config'][] = array(
	'name'			=> 'showlinkdisclaimer',
	'title'			=> '_MI_IMLINKS_SHOWLINKDISCL',
	'description'	=> '_MI_IMLINKS_SHOWLINKDISCLDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'linkdisclaimer',
	'title'			=> '_MI_IMLINKS_LINKDISCLAIMER',
	'description'	=> '_MI_IMLINKS_LINKDISCLAIMERDSC',
	'formtype'		=> 'textsarea',
	'valuetype'		=> 'text',
	'default'		=> 'The links on this site are provided as is without warranty either expressed or implied. linkloaded files should be checked for possible virus infection using the most up-to-date detection and security packages. If you have a question concerning a particular piece of software, feel free to contact the developer. We refuse liability for any damage or loss resulting from the use or misuse of any software offered from this site for linkloading. If you have any doubt at all about the safety and operation of software made available to you on this site, do not linkload it. Contact us if you have questions concerning this disclaimer.' );

$modversion['config'][] = array(
	'name'			=> 'copyright',
	'title'			=> '_MI_IMLINKS_COPYRIGHT',
	'description'	=> '_MI_IMLINKS_COPYRIGHTDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'selectforum',
	'title'			=> '_MI_IMLINKS_SELECTFORUM',
	'description'	=> '_MI_IMLINKS_SELECTFORUMDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 0,
	'options'		=> array( _NONE => 0, _MI_IMLINKS_DISPLAYFORUM1 => 1, _MI_IMLINKS_DISPLAYFORUM2 => 2, _MI_IMLINKS_DISPLAYFORUM3 => 3, _MI_IMLINKS_DISPLAYFORUM4 => 4 ) );

// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'imlinks_notify_iteminfo';

$modversion['notification']['category'][] = array(
	'name'				=> 'global',
	'title'				=> _MI_IMLINKS_GLOBAL_NOTIFY,
	'description'		=> _MI_IMLINKS_GLOBAL_NOTIFYDSC,
	'subscribe_from'	=> array( 'index.php', 'viewcat.php', 'singlelink.php' ) );

$modversion['notification']['category'][] = array(
	'name'				=> 'category',
	'title'				=> _MI_IMLINKS_CATEGORY_NOTIFY,
	'description'		=> _MI_IMLINKS_CATEGORY_NOTIFYDSC,
	'subscribe_from'	=> array( 'viewcat.php', 'singlelink.php' ),
	'item_name'			=> 'cid',
	'allow_bookmark'	=> 1 );

$modversion['notification']['category'][] = array(
	'name'				=> 'link',
	'title'				=> _MI_IMLINKS_LINK_NOTIFY,
	'description'		=> _MI_IMLINKS_FILE_NOTIFYDSC,
	'subscribe_from'	=> 'singlelink.php',
	'item_name'			=> 'lid',
	'allow_bookmark'	=> 1 );

$modversion['notification']['event'][] = array(
	'name'				=> 'new_category',
	'category'			=> 'global',
	'title'				=> _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY,
	'caption'			=> _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC,
	'mail_template'		=> 'global_newcategory_notify',
	'mail_subject'		=> _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'link_modify',
	'category'			=> 'global',
	'admin_only'		=> 1,
	'title'				=> _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY,
	'caption'			=> _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC,
	'mail_template'		=> 'global_linkmodify_notify',
	'mail_subject'		=> _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'link_broken',
	'category'			=> 'global',
	'admin_only'		=> 1,
	'title'				=> _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY,
	'caption'			=> _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC,
	'mail_template'		=> 'global_linkbroken_notify',
	'mail_subject'		=> _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'link_submit',
	'category'			=> 'global',
	'admin_only'		=> 1,
	'title'				=> _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY,
	'caption'			=> _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC,
	'mail_template'		=> 'global_linksubmit_notify',
	'mail_subject'		=> _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'new_link',
	'category'			=> 'global',
	'title'				=> _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY,
	'caption'			=> _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC,
	'mail_template'		=> 'global_newfile_notify',
	'mail_subject'		=> _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'link_submit',
	'category'			=> 'category',
	'admin_only'		=> 1,
	'title'				=> _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY,
	'caption'			=> _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC,
	'mail_template'		=> 'category_linksubmit_notify',
	'mail_subject'		=> _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'new_link',
	'category'			=> 'category',
	'title'				=> _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY,
	'caption'			=> _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC,
	'mail_template'		=> 'category_newfile_notify',
	'mail_subject'		=> _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'approve',
	'category'			=> 'link',
	'invisible'			=> 1,
	'title'				=> _MI_IMLINKS_LINK_APPROVE_NOTIFY,
	'caption'			=> _MI_IMLINKS_LINK_APPROVE_NOTIFYCAP,
	'description'		=> _MI_IMLINKS_LINK_APPROVE_NOTIFYDSC,
	'mail_template'		=> 'link_approve_notify',
	'mail_subject'		=> _MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ );
?>