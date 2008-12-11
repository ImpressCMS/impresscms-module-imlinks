<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: icms_version.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/
 
if ( !defined( 'ICMS_ROOT_PATH' ) ) die( 'ICMS root path not defined' );

$mydirname = basename( dirname( __FILE__ ) );

global $xoopsUser, $xoopsDB, $xoopsModule, $xoopsConfig;

if ( file_exists( ICMS_ROOT_PATH . '/language/'. $xoopsConfig['language'] . '/moduleabout.php' ) ) {
	include_once ICMS_ROOT_PATH . '/language/'. $xoopsConfig['language'] . '/moduleabout.php';
} else { include_once ICMS_ROOT_PATH . '/language/english/moduleabout.php'; }

$modversion['name'] 			= _MI_IMLINKS_NAME;
$modversion['version'] 			= '1.00';
$modversion['date'] 			= 'November, 2008';
$modversion['status'] 			= 'RC-1';
$modversion['status_version'] 	= 'RC-1';
$modversion['description'] 		= _MI_IMLINKS_DESC;
$modversion['license'] 			= _MI_IMLINKS_ABOUTLICENSE;
$modversion['image'] 			= 'images/imlinks_ilogo.png'; // standard XOOPS icon, 92x52 px  
$modversion['iconsmall'] 		= 'images/imlinks_iconsmall.png'; //small icon for ImpressCMS, 16x16 px 
$modversion['iconbig'] 			= 'images/imlinks_iconbig.png'; //big icon for ImpressCMS, 37x35 px
$modversion['dirname'] 			= $mydirname;

$modversion['author'] 			= 'Version developer: John N';
$modversion['credits'] 			= '<b>WF-Projects Team:</b> Based on WF-Links, thanks to the dream-team for some code snippits. Team members: amayer, bender, david, dqflyer, draven, frankblack, gladiac, hervet, jackj, mercibe, John N, phppp, predator, reliableSol, tom, xpider, xtheme.';
$modversion['author_website_url'] 	= 'http://members.lycos.nl/mcdonaldsstore/';
$modversion['author_website_name'] 	= 'McDonalds Store';

$modversion['support_site_url'] = 'http://community.impresscms.org/modules/newbb/viewforum.php?forum=9';
$modversion['support_site_name']= 'ImpressCMS Community Forum - Modules Support';
$modversion['submit_bug'] 		= 'http://sourceforge.net/tracker2/?words=tracker_browse&sort=priority&sortdir=desc&offset=0&group_id=205633&atid=1064496&assignee=&status=&category=1164361&artgroup=&keyword=&submitter=&artifact_id=';

$modversion['warning'] 			= _MI_IMLINKS_WARNINGTEXT;
$modversion['author_credits'] 	= _MI_IMLINKS_AUTHOR_CREDITSTEXT;

// 	** Contributors **
$modversion['people']['developers'][] = '<a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a>&nbsp;&nbsp;<span style="font-size: smaller;">( pietjebell31 [at] hotmail [dot] com )</span>';
$modversion['people']['testers']	[] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=10" target="_blank">sato-san</a> (German)';
$modversion['people']['testers']	[] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=14" target="_blank">GibaPhp</a>  (Portuguese-Brazil)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=10" target="_blank">sato-san</a> (German)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=14" target="_blank">GibaPhp</a>  (Portuguese-Brazil)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=97" target="_blank">debianus</a> (Spanish)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a>  (Dutch)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=480" target="_blank">algalochkin</a> (Russian)';
$modversion['people']['translators'][] = '&middot; <a href="http://www.frxoops.org/userinfo.php?uid=18073" target="_blank">Burning</a> (French)';
$modversion['people']['other']      [] = '&middot; <a href="http://xoops.peak.ne.jp" target="_blank">GIJOE</a> (blocks hack)';
$modversion['people']['other']		[] = '&middot; <a href="http://www.bitfolge.de" target="_blank">Kai Blankenhorn</a> (vCard script)';
$modversion['people']['other']      [] = '&middot; <a href="http://www.famfamfam.com" target="_blank">famfamfam.com</a> (icons)';
$modversion['people']['other']      [] = '&middot; <a href="http://www.masugadesign.com" target="_blank">Ryan Masuga</a> (AJAX Rating Bars)';

//	** If Release Candidate **
$modversion['warning'] = _MODABOUT_WARNING_RC;

//	** If Final  **
//$modversion['warning'] = _MODABOUT_WARNING_FINAL;

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/imlinks.sql';

// Tables created by sql file (without prefix!)
include_once 'include/config.php';
$modversion['tables'][0] = 'imlinks_broken';
$modversion['tables'][1] = 'imlinks_cat';
$modversion['tables'][2] = 'imlinks_links';
$modversion['tables'][3] = 'imlinks_mod';
$modversion['tables'][4] = 'imlinks_ratings';
$modversion['tables'][5] = 'imlinks_indexpage';
$modversion['tables'][6] = 'imlinks_altcat';
$modversion['tables'][7] = 'imlinks_configs';

// Launch additional install script
$modversion['onInstall'] = '';
$modversion['onUpdate'] = '';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Blocks
$modversion['blocks'][1]['file'] = 'imlinks_top.php';
$modversion['blocks'][1]['name'] = _MI_IMLINKS_BNAME1;
$modversion['blocks'][1]['description'] = 'Shows recently added links';
$modversion['blocks'][1]['show_func'] = 'b_imlinks_top_show';
$modversion['blocks'][1]['edit_func'] = "b_imlinks_top_edit";
$modversion['blocks'][1]['options'] = 'published|10|19|d/m/Y';
$modversion['blocks'][1]['template'] = 'imlinks_block_new.html';
$modversion['blocks'][1]['can_clone'] = true ;

$modversion['blocks'][2]['file'] = 'imlinks_top.php';
$modversion['blocks'][2]['name'] = _MI_IMLINKS_BNAME2;
$modversion['blocks'][2]['description'] = 'Shows top clicked links';
$modversion['blocks'][2]['show_func'] = 'b_imlinks_top_show';
$modversion['blocks'][2]['edit_func'] = 'b_imlinks_top_edit';
$modversion['blocks'][2]['options'] = 'hits|10|19|d/m/Y';
$modversion['blocks'][2]['template'] = 'imlinks_block_top.html';
$modversion['blocks'][2]['can_clone'] = true ;

$modversion['blocks'][3]['file'] = 'imlinks_banner.php';
$modversion['blocks'][3]['name'] = _MI_IMLINKS_BNAME3;
$modversion['blocks'][3]['description'] = 'Shows top clicked banners';
$modversion['blocks'][3]['show_func'] = 'b_imlinks_banner_show';
$modversion['blocks'][3]['edit_func'] = 'b_imlinks_banner_edit';
$modversion['blocks'][3]['options'] = 'hits|10|19';
$modversion['blocks'][3]['template'] = 'imlinks_block_banner.html';
$modversion['blocks'][3]['can_clone'] = true ;

$modversion['blocks'][4]['file'] = 'imlinks_block_tag.php';
$modversion['blocks'][4]['name'] = _MI_IMLINKS_BNAME4;
$modversion['blocks'][4]['description'] = 'Show tag cloud';
$modversion['blocks'][4]['show_func'] = 'imlinks_tag_block_cloud_show';
$modversion['blocks'][4]['edit_func'] = 'imlinks_tag_block_cloud_edit';
$modversion['blocks'][4]['options'] = '100|0|150|80';
$modversion['blocks'][4]['template'] = 'imlinks_tag_block_cloud.html';
$modversion['blocks'][4]['can_clone'] = true ;

$modversion['blocks'][5]['file'] = 'imlinks_block_tag.php';
$modversion['blocks'][5]['name'] = _MI_IMLINKS_BNAME5;
$modversion['blocks'][5]['description'] = 'Show top tag';
$modversion['blocks'][5]['show_func'] = 'imlinks_tag_block_top_show';
$modversion['blocks'][5]['edit_func'] = 'imlinks_tag_block_top_edit';
$modversion['blocks'][5]['options'] = '50|30|c';
$modversion['blocks'][5]['template'] = 'imlinks_tag_block_tag.html';
$modversion['blocks'][5]['can_clone'] = true ;

// Menu
$modversion['hasMain'] = 1;

// This part inserts the selected topics as sub items in the Xoops main menu
$module_handler = &xoops_gethandler( 'module' );
$module = &$module_handler -> getByDirname( $modversion['dirname'] );
$cansubmit = 0;
if ( is_object( $module ) ) {
    global $xoopsUser;
    $groups = ( is_object( $xoopsUser ) ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( $gperm_handler -> checkRight( 'imLinkSubPerm', 0, $groups, $module -> getVar( 'mid' ) ) ) {
        $cansubmit = 1;
    } 
} 
if ( $cansubmit == 1 ) {
    $modversion['sub'][0]['name'] = _MI_IMLINKS_SMNAME1;
    $modversion['sub'][0]['url'] = 'submit.php';
} 
unset( $cansubmit );

$i = 1;
$modversion['sub'][$i]['name'] = _MI_IMLINKS_SMNAME2;
$modversion['sub'][$i]['url'] = 'topten.php?list=hit';
$i++;
$modversion['sub'][$i]['name'] = _MI_IMLINKS_SMNAME3;
$modversion['sub'][$i]['url'] = 'topten.php?list=rate';
$i++;
$modversion['sub'][$i]['name'] = _MI_IMLINKS_SMNAME4;
$modversion['sub'][$i]['url'] = 'newlist.php?newlinkshowdays=7';
unset( $i );

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
$modversion['templates'][1]['file'] = 'imlinks_brokenlink.html';
$modversion['templates'][1]['description'] = 'Broken links template';
$modversion['templates'][2]['file'] = 'imlinks_linkload.html';
$modversion['templates'][2]['description'] = 'Links load template';
$modversion['templates'][3]['file'] = 'imlinks_index.html';
$modversion['templates'][3]['description'] = 'Index page imLinks';
$modversion['templates'][4]['file'] = 'imlinks_singlelink.html';
$modversion['templates'][4]['description'] = 'Single link template';
$modversion['templates'][5]['file'] = 'imlinks_topten.html';
$modversion['templates'][5]['description'] = 'Popularity template';
$modversion['templates'][6]['file'] = 'imlinks_viewcat.html';
$modversion['templates'][6]['description'] = 'Category template';
$modversion['templates'][7]['file'] = 'imlinks_newlistindex.html';
$modversion['templates'][7]['description'] = 'New links template';
$modversion['templates'][8]['file'] = 'imlinks_print.html';
$modversion['templates'][8]['description'] = 'Printing template';
$modversion['templates'][9]['file'] = 'imlinks_disclaimer.html';
$modversion['templates'][9]['description'] = 'Disclaimer template';
$modversion['templates'][10]['file'] = 'imlinks_rss.html';
$modversion['templates'][10]['description'] = 'RSS feed template';

// Module config setting
$i=0;
$i++;
$modversion['config'][$i]['name'] = 'popular';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_POPULAR';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_POPULARDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 100;
$modversion['config'][$i]['options'] = array( '5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000, '1500' => 1500, '2000' => 2000 );
$i++;
$modversion['config'][$i]['name'] = 'displayicons';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_ICONDISPLAY';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_DISPLAYICONDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$modversion['config'][$i]['options'] = array( '_MI_IMLINKS_DISPLAYICON1' => 1, '_MI_IMLINKS_DISPLAYICON2' => 2, '_MI_IMLINKS_DISPLAYICON3' => 3 );
$i++;
$modversion['config'][$i]['name'] = 'daysnew';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_DAYSNEW';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_DAYSNEWDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$i++;
$modversion['config'][$i]['name'] = 'daysupdated';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_DAYSUPDATED';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_DAYSUPDATEDDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$i++;
$modversion['config'][$i]['name'] = 'perpage';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_PERPAGE';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_PERPAGEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$modversion['config'][$i]['options'] = array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50, '75' => 75, '100' => 100, '200' => 200 );
$i++;
$modversion['config'][$i]['name'] = 'admin_perpage';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_ADMINPAGE';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_AMDMINPAGEDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 10;
$modversion['config'][$i]['options'] = array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50, '75' => 75, '100' => 100, '200' => 200 );
$i++;
$modversion['config'][$i]['name'] = 'linkxorder';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_ARTICLESSORT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_ARTICLESSORTDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'title ASC';
$modversion['config'][$i]['options'] = array( '_MI_IMLINKS_TITLE_A' => 'title ASC',
                                              '_MI_IMLINKS_TITLE_D' => 'title DESC',
                                              '_MI_IMLINKS_SUBMITTED_A' => 'published ASC',
                                              '_MI_IMLINKS_SUBMITTED_D' => 'published DESC',
                                              '_MI_IMLINKS_RATING_A' => 'rating ASC',
                                              '_MI_IMLINKS_RATING_D' => 'rating DESC',
                                              '_MI_IMLINKS_POPULARITY_A' => 'hits ASC',
                                              '_MI_IMLINKS_POPULARITY_D' => 'hits DESC',
                                              '_MI_IMLINKS_COUNTRY_A' => 'country ASC',
                                              '_MI_IMLINKS_COUNTRY_D' => 'country DESC'
                                             );
$i++;
$modversion['config'][$i]['name'] = 'sortcats';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SORTCATS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SORTCATSDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'title';
$modversion['config'][$i]['options'] = array( '_MI_IMLINKS_TITLE' => 'title', '_MI_IMLINKS_WEIGHT' => 'weight' );
$i++;
$modversion['config'][$i]['name'] = 'subcats';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SUBCATS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SUBCATSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'catcols';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_CATCOLS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_CATCOLSDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 2;
$modversion['config'][$i]['options'] = array( '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5 );
$i++;
$modversion['config'][$i]['name'] = 'form_options';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_EDITOR';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_EDITORCHOICE';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtml';
$modversion['config'][$i]['options'] =  array(	_MI_IMLINKS_FORM_DHTML => 'dhtml',
                                                _MI_IMLINKS_FORM_DHTMLEXT => 'dhtmlext',
												_MI_IMLINKS_FORM_COMPACT => 'textarea',
												_MI_IMLINKS_FORM_KOIVI => 'koivi',
												_MI_IMLINKS_FORM_FCK => 'fck',
												_MI_IMLINKS_FORM_TINYEDITOR => 'tinyeditor',
												_MI_IMLINKS_FORM_TINYMCE => 'tinymce'
                                              );
$i++;
$modversion['config'][$i]['name'] = 'form_optionsuser';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_EDITORUSER';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_EDITORCHOICEUSER';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'dhtml';
$modversion['config'][$i]['options'] =  array(  _MI_IMLINKS_FORM_DHTML => 'dhtml',
                                                _MI_IMLINKS_FORM_DHTMLEXT => 'dhtmlext',
												_MI_IMLINKS_FORM_COMPACT => 'textarea',
												_MI_IMLINKS_FORM_KOIVI => 'koivi',
												_MI_IMLINKS_FORM_FCK => 'fck',
												_MI_IMLINKS_FORM_TINYEDITOR => 'tinyeditor',
												_MI_IMLINKS_FORM_TINYMCE => 'tinymce'
                                              );
$i++;
$modversion['config'][$i]['name'] = 'captcha';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_CAPTCHA';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_CAPTCHADSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'screenshot';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_USESHOTS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_USESHOTSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'usethumbs';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_USETHUMBS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_USETHUMBSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'updatethumbs';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_IMGUPDATE';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_IMGUPDATEDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'imagequality';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_QUALITY';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_QUALITYDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 100;
$i++;
$modversion['config'][$i]['name'] = 'keepaspect';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_KEEPASPECT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_KEEPASPECTDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'shotwidth';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOTWIDTH';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOTWIDTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 140;
$i++;
$modversion['config'][$i]['name'] = 'shotheight';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOTHEIGHT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOTHEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 79;
$i++;
$modversion['config'][$i]['name'] = 'maxfilesize';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_MAXFILESIZE';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_MAXFILESIZEDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 200000;
$i++;
$modversion['config'][$i]['name'] = 'maximgwidth';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_IMGWIDTH';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_IMGWIDTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 600;
$i++;
$modversion['config'][$i]['name'] = 'maximgheight';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_IMGHEIGHT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_IMGHEIGHTDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 600;
$i++;
$modversion['config'][$i]['name'] = 'useautothumb';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_USEAUTOSCRSHOT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_USEAUTOSCRSHOTDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'autothumbsrc';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_AUTOTHUMBSRC';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_AUTOTHUMBSRCDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$modversion['config'][$i]['options'] = array(	'Thumbshots.org' => 0,
												'Mozshot' => 1 );
$i++;
$modversion['config'][$i]['name'] = 'mainimagedir';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_MAINIMGDIR';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_MAINIMGDIRDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'modules/' . $mydirname . '/images';
$i++;
$modversion['config'][$i]['name'] = 'screenshots';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SCREENSHOTS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SCREENSHOTSDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads/images/screenshots';
$i++;
$modversion['config'][$i]['name'] = 'catimage';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_CATEGORYIMG';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_CATEGORYIMGDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads/images/category';
$i++;
$modversion['config'][$i]['name'] = 'flagimage';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_FLAGIMG';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_FLAGIMGDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'uploads/images/flags/flags_small';
$i++;
$modversion['config'][$i]['name'] = 'dateformat';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_DATEFORMAT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_DATEFORMATDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'D, d-M-Y';
$i++;
$modversion['config'][$i]['name'] = 'dateformatadmin';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_DATEFORMATADMIN';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_DATEFORMATADMINDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'D, d-M-Y - G:i';
$i++;
$modversion['config'][$i]['name'] = 'totalchars';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_TOTALCHARS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_TOTALCHARSDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 200;
$modversion['config'][$i]['options'] = array( '100' => 100, '200' => 200, '300' => 300, '400' => 400, '500' => 500, '750' => 750 );
$i++;
$modversion['config'][$i]['name'] = 'keywordlength';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_KEYLENGTH';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_KEYLENGTHDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 255;
$i++;
$modversion['config'][$i]['name'] = 'otherlinks';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_OTHERLINKS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_OTHERLINKSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'quickview';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_QUICKVIEW';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_QUICKVIEWDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'showsbookmarks';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOWSBOOKMARKS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOWSBOOKMARKSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'showrating';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOWRATING';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOWRATINGDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'showpagerank';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOWPAGERANK';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOWPAGERANKSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'usercantag';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_USERTAGDESCR';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_USERTAGDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'useaddress';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_USEADDRESSDESCR';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_USEADDRESSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'linkedterms';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_LINKEDTERMS';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_LINKEDTERMSDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'imglossarydir';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_IMGLOSSARYDIR';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_IMGLOSSARYDIRDSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'imglossary';
$i++;
$modversion['config'][$i]['name'] = 'footerprint';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_FOOTERPRINT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_FOOTERPRINTDSC';
$modversion['config'][$i]['formtype'] = 'textsarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = ''.ICMS_URL.'';
$i++;
$modversion['config'][$i]['name'] = 'printlogourl';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_LOGOURLPRINT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_LOGOURLDSCPRINT';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = ICMS_URL . '/modules/' . $modversion['dirname'] . '/images/logo-en.png';
$i++;
$modversion['config'][$i]['name'] = 'showdisclaimer';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOWDISCLAIMER';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOWDISCLAIMERDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'disclaimer';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_DISCLAIMER';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_DISCLAIMERDSC';
$modversion['config'][$i]['formtype'] = 'textsarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'We have the right, but not the obligation to monitor and review submissions submitted by users, in the forums. We shall not be responsible for any of the content of these messages. We further reserve the right, to delete, move or edit submissions that the we, in its exclusive discretion, deems abusive, defamatory, obscene or in violation of any Copyright or Trademark laws or otherwise objectionable.';
$i++;
$modversion['config'][$i]['name'] = 'showlinkdisclaimer';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SHOWLINKDISCL';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SHOWLINKDISCLDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 0;
$i++;
$modversion['config'][$i]['name'] = 'linkdisclaimer';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_LINKDISCLAIMER';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_LINKDISCLAIMERDSC';
$modversion['config'][$i]['formtype'] = 'textsarea';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'The links on this site are provided as is without warranty either expressed or implied. linkloaded files should be checked for possible virus infection using the most up-to-date detection and security packages. If you have a question concerning a particular piece of software, feel free to contact the developer. We refuse liability for any damage or loss resulting from the use or misuse of any software offered from this site for linkloading. If you have any doubt at all about the safety and operation of software made available to you on this site, do not linkload it. Contact us if you have questions concerning this disclaimer.';
$i++;
$modversion['config'][$i]['name'] = 'copyright';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_COPYRIGHT';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_COPYRIGHTDSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$i++;
$modversion['config'][$i]['name'] = 'selectforum';
$modversion['config'][$i]['title'] = '_MI_IMLINKS_SELECTFORUM';
$modversion['config'][$i]['description'] = '_MI_IMLINKS_SELECTFORUMDSC';
$modversion['config'][$i]['formtype'] = 'select';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = 1;
$modversion['config'][$i]['options'] = array( '_MI_IMLINKS_DISPLAYFORUM1' => 1, '_MI_IMLINKS_DISPLAYFORUM2' => 2, '_MI_IMLINKS_DISPLAYFORUM3' => 3, '_MI_IMLINKS_DISPLAYFORUM4' => 4 );

// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'wflinks_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_IMLINKS_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_IMLINKS_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['subscribe_from'] = array( 'index.php', 'viewcat.php', 'singlelink.php' );

$modversion['notification']['category'][2]['name'] = 'category';
$modversion['notification']['category'][2]['title'] = _MI_IMLINKS_CATEGORY_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_IMLINKS_CATEGORY_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array( 'viewcat.php', 'singlelink.php' );
$modversion['notification']['category'][2]['item_name'] = 'cid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'link';
$modversion['notification']['category'][3]['title'] = _MI_IMLINKS_LINK_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_IMLINKS_FILE_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'singlelink.php';
$modversion['notification']['category'][3]['item_name'] = 'lid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'new_category';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_IMLINKS_GLOBAL_NEWCATEGORY_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'link_modify';
$modversion['notification']['event'][2]['category'] = 'global';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_linkmodify_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_IMLINKS_GLOBAL_LINKMODIFY_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'link_broken';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['admin_only'] = 1;
$modversion['notification']['event'][3]['title'] = _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_linkbroken_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_IMLINKS_GLOBAL_LINKBROKEN_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'link_submit';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_linksubmit_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_IMLINKS_GLOBAL_LINKSUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_link';
$modversion['notification']['event'][5]['category'] = 'global';
$modversion['notification']['event'][5]['title'] = _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_newfile_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_IMLINKS_GLOBAL_NEWLINK_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'link_submit';
$modversion['notification']['event'][6]['category'] = 'category';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_linksubmit_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_IMLINKS_CATEGORY_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][7]['name'] = 'new_link';
$modversion['notification']['event'][7]['category'] = 'category';
$modversion['notification']['event'][7]['title'] = _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_newfile_notify';
$modversion['notification']['event'][7]['mail_subject'] = _MI_IMLINKS_CATEGORY_NEWLINK_NOTIFYSBJ;

$modversion['notification']['event'][8]['name'] = 'approve';
$modversion['notification']['event'][8]['category'] = 'link';
$modversion['notification']['event'][8]['invisible'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_IMLINKS_LINK_APPROVE_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_IMLINKS_LINK_APPROVE_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_IMLINKS_LINK_APPROVE_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'link_approve_notify';
$modversion['notification']['event'][8]['mail_subject'] = _MI_IMLINKS_LINK_APPROVE_NOTIFYSBJ;

// On Update
if ( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] )
{
    include dirname( __FILE__ ) . '/include/onupdate.inc.php' ;
} 

?>