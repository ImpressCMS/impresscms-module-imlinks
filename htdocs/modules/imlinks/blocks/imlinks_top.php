<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: wflinks_top.php
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

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); }

// checkBlockgroups()
//
// @param integer $cid
// @param string $permType
// @param boolean $redirect
// @return
function imlinks_checkBlockgroups( $cid = 0, $permType = 'imLinkCatPerm', $redirect = false ) {
	$groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
	$gperm_handler = icms::handler( 'icms_member_groupperm' );
	$module_handler = icms::handler( 'icms_module' );
	$module = &$module_handler -> getByDirname( basename( dirname(  dirname( __FILE__ ) ) ) );
	if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $module -> getVar( 'mid' ) ) ) {
		if ( $redirect == false ) {
			return false;
		} else {
			redirect_header( 'index.php', 3, _NOPERM );
			exit();
		}
	}
	unset( $module );
	return true;
} 

// Function: b_imlinks_top_show
// Input   : $options[0] = date for the most recent links
//						   hits for the most popular links
//			 $options[1] = How many links are displayes
//			 $options[2] = Length of title
//			 $options[3] = Date format
//			 $block['content'] = The optional above content
// Output  : Returns the most recent or most popular links
function b_imlinks_top_show( $options ) {
	global $xoopsTpl;
	include_once ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/include/functions.php';
	$block = array();
	$modhandler = icms::handler( 'icms_module' );
	$imlModule = &$modhandler -> getByDirname( basename( dirname( dirname( __FILE__ ) ) ) );
	$config_handler = icms::$config;
	$imlModuleConfig = &$config_handler -> getConfigsByCat( 0, $imlModule -> getVar( 'mid' ) );
	$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0 ORDER BY ' . $options[0] . ' DESC', $options[1], 0 );
	while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
		if ( false == imlinks_checkBlockgroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) { continue; }
		$linkload = array();
		$title = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $myrow['title'] ) );
		if ( !XOOPS_USE_MULTIBYTES ) {
			if ( strlen( $myrow['title'] ) >= $options[2] ) {
				$title = substr( $myrow['title'], 0, $options[2] - 1 ) . '&#8230;';
			}
		}
		$linkload['title'] = $title;
		$nice_link = iml_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $imlModuleConfig['niceurl'] ) {
			$linkload['link'] = ICMS_URL . '/modules/' . $imlModule -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $myrow['lid'] ) . '&amp;page=' . $nice_link;
		} else {
			$linkload['link'] = ICMS_URL . '/modules/' . $imlModule -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $myrow['lid'] );
		}
		$linkload['date'] = formatTimestamp( $myrow['published'], $options[3] );
		$linkload['hits'] = $myrow['hits'];

		$xoopsTpl -> assign( 'dirname', basename( dirname( dirname( __FILE__ ) ) ) );
		$block['links'][] = $linkload;
	}
	unset( $linkload );
	return $block;
}

// b_imlinks_top_edit()
//
// @param $options
// @return
function b_imlinks_top_edit( $options ) {
	global $icmsAdminTpl;
	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />' );
	include_once ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/include/functions.php';

	$form = '<table cellspacing="5">';

	$form .= '<tr><td width="200px"><b>' . _MB_IMLINKS_DISP . ':</b></td>';
	$form .= '<td><input type="hidden" name="options[]" value="';
	if ( $options[0] == 'published' ) {
		$form .= 'published"';
	} else {
		$form .= 'hits"';
	}
	$form .= ' />';
	$form .= '<input type="text" name="options[]" value="' . $options[1] . '" />&nbsp;' . _MB_IMLINKS_FILES . '</td></tr>';

	$form .= '<tr><td><b>' . _MB_IMLINKS_CHARS . ':</b></td><td><input type="text" name="options[]" value="' . $options[2] . '" />&nbsp;' . _MB_IMLINKS_LENGTH . '</td></tr>';

	$form .= '<tr><td><b>' . _MB_IMLINKS_DATEFORMAT . ':</b>' . imlinks_tooltip( _MB_IMLINKS_DATEFORMATMANUAL, 'help' ) . '</td>';
	$form .= '<td><input type="text" name="options[]" value="' . $options[3] . '" /></td></tr>';

	$form .= '</table>';
	return $form;
}

// Function: b_imlinks_recent_show
// Input   : $options[0] = date for the most recent links
//						   hits for the most popular links
//			 $options[1] = How many links are displayes
//			 $options[2] = Length of title
//			 $options[3] = Date format
//			 $block['content'] = The optional above content
// Output  : Returns the most recent or most popular links
function b_imlinks_recent_show( $options ) {
	global $xoopsTpl;
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );
	include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
	include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/class_thumbnail.php';
	$block = array();
	$modhandler = icms::handler( 'icms_module' );
	$imlModule = &$modhandler -> getByDirname( $mydirname );
	$config_handler = icms::$config;
	$imlModuleConfig = &$config_handler -> getConfigsByCat( 0, $imlModule -> getVar( 'mid' ) );
	$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0 ORDER BY published DESC', $options[0], 0 );
	while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
		if ( false == imlinks_checkBlockgroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) { continue; }
		$linkload = array();
		$linkload['title_long'] = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $myrow['title'] ) );
		$nice_link = iml_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $imlModuleConfig['niceurl'] ) {
			$linkload['link'] = ICMS_URL . '/modules/' . $imlModule -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $myrow['lid'] ) . '&amp;page=' . $nice_link;
		} else {
			$linkload['link'] = ICMS_URL . '/modules/' . $imlModule -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $myrow['lid'] );
		}
		$linkload['date'] = formatTimestamp( $myrow['published'], $options[1] );
		$linkload['submitter'] = icms_member_user_Handler::getUserLink( $myrow['submitter'] );
		$linkload['publisher'] = ( isset( $myrow['publisher'] ) && !empty( $myrow['publisher'] ) ) ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $myrow['publisher'] ) ) : _MB_IMLINKS_NOTSPECIFIED;
		$linkload['hits'] = $myrow['hits'];
		$linkload['description'] = icms_core_DataFilter::icms_substr( $myrow['description'], 0, $imlModuleConfig['totalchars'], '&#8230;' );
		if ( $myrow['country'] ) {
			$linkload['country'] = '<b>' . _MB_IMLINKS_COUNTRY . ':</b>&nbsp;<img src="' . ICMS_URL . '/' . $imlModuleConfig['flagimage']. '/' . $myrow['country'] . '.gif" alt="" title="' . iml_countryname( $myrow['country'] ) . '" style="vertical-align: middle;" />';
		}
		if ( $imlModuleConfig['useautothumb'] == 1 && $imlModuleConfig['autothumbsrc'] == 1 ) {
			$linkload['autothumbsrc'] = iml_mozshot( $myrow['url'] );
		} elseif ( $imlModuleConfig['useautothumb'] == 1 && $imlModuleConfig['autothumbsrc'] == 0 ) {
			$linkload['autothumbsrc'] = iml_thumbshot( $myrow['url'] );
		} else {
			if ( $imlModuleConfig['screenshot'] == 1 && isset( $myrow['screenshot'] ) ) {
				if ( !empty( $myrow['screenshot'] ) && file_exists( ICMS_ROOT_PATH . '/' . $imlModuleConfig['screenshots'] . '/' . trim( $myrow['screenshot'] ) ) ) {
					if ( isset( $imlModuleConfig['usethumbs'] ) && $imlModuleConfig['usethumbs'] == 1 ) {
						$_thumb_image = new imThumbsNails( $myrow['screenshot'], $imlModuleConfig['screenshots'], 'thumbs' );
						if ( $_thumb_image ) {
							 $_thumb_image -> setUseThumbs( 1 );
							 $_thumb_image -> setImageType( 'gd2' );
							 $_image = $_thumb_image -> do_thumb( $imlModuleConfig['shotwidth'],
																  $imlModuleConfig['shotheight'],
																  $imlModuleConfig['imagequality'],
																  $imlModuleConfig['updatethumbs'],
																  $imlModuleConfig['keepaspect'] );
						}
						$linkload['autothumbsrc'] = '<a class="lytebox" title="' . $myrow['title'] . '" href="' . ICMS_URL . '/' . $imlModuleConfig['screenshots'] . '/' . trim( $myrow['screenshot'] ) . '"><img src="' . ICMS_URL . '/' . $imlModuleConfig['screenshots'] . '/' . $_image . '" alt="" title="' . _MB_IMLINKS_SCRSHOTENLARGE . '"  /></a>';
					} else {
						$linkload['autothumbsrc'] = '<img src="' . ICMS_URL . '/' . $imlModuleConfig['screenshots'] . '/' . trim( $myrow['screenshot'] ) . '" alt="" />';
					}
				}
			}
		}
		$isAdmin = ( ( is_object( icms::$user ) && !empty( icms::$user ) ) && icms::$user -> isAdmin( $imlModule -> getVar( 'mid' ) ) ) ? true : false;
		if ( $isAdmin == true ) {
			$linkload['adminlink'] = '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/index.php"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/computer.png" alt="" title="' . _MB_IMLINKS_ADMINSECTION . '" style="vertical-align: bottom;" /></a>&nbsp;';
			$linkload['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/links.php?op=edit&amp;lid=' . $myrow['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_edit.png" alt="" title="' . _EDIT . '" style="vertical-align: bottom;" /></a>&nbsp;';
			$linkload['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/links.php?op=delete&amp;lid=' . $myrow['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_delete.png" alt="" title="' . _DELETE . '" style="vertical-align: bottom;" /></a>&nbsp;';
			$linkload['adminlink'] .= '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/admin/links.php?op=clone&amp;lid=' . $myrow['lid'] . '"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/world_clone.png" alt="" title="' . _CLONE . '" style="vertical-align: bottom;" /></a>&nbsp;';
			$linkload['adminlink'] .= '<a href="http://whois.domaintools.com/' . str_replace( 'http://', '', $myrow['url'] ) . '" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/domaintools.png" alt="" title="WHOIS" style="vertical-align: bottom;" /></a>';
		}

		$xoopsTpl -> assign( 'dirname', basename( dirname( dirname( __FILE__ ) ) ) );
		$block['links'][] = $linkload;
	}
	unset( $linkload );
	return $block;
}

// b_imlinks_recent_edit()
//
// @param $options
// @return
function b_imlinks_recent_edit( $options ) {
	global $icmsAdminTpl;
	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />' );
	include_once ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/include/functions.php';

	$form = '<table cellspacing="5">';

	$form .= '<tr>
				<td width="200px"><b>' . _MB_IMLINKS_DISP . ':</b></td>
				<td><input type="text" name="options[]" value="' . $options[0] . '" />&nbsp;' . _MB_IMLINKS_FILES . '</td>
			  </tr>';

	$form .= '<tr><td><b>' . _MB_IMLINKS_DATEFORMAT . ':</b>' . imlinks_tooltip( _MB_IMLINKS_DATEFORMATMANUAL, 'help' ) . '</td>';

	$form .= '<td><input type="text" name="options[]" value="' . $options[1] . '" /></td></tr>';

	$form .= '</table>';
	return $form;
}

// Function: b_imlinks_random_show
// Input   : $options[0] =	date for the most recent links
//							hits for the most popular links
//			 $options[1] =	How many links are displayes
//			 $options[2] =	Length of title
//			 $options[3] =	Date format
//			 $block['content'] = The optional above content
// Output  : Returns the most recent or most popular links
function b_imlinks_random_show( $options ) {
	$block = array();
	$modhandler = icms::handler( 'icms_module' );
	$imlModule = &$modhandler -> getByDirname( basename( dirname( dirname( __FILE__ ) ) ) );
	$config_handler = icms::$config;
	$imlModuleConfig = &$config_handler -> getConfigsByCat( 0, $imlModule -> getVar( 'mid' ) );
	$result = icms::$xoopsDB -> query( 'SELECT lid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0');
	if ( icms::$xoopsDB -> getRowsNum( $result ) > 0 ) {
		while( list( $lid ) = icms::$xoopsDB -> fetchRow( $result ) ) $lids[] = $lid;
		// list( $msec, $sec ) = split( ' ', microtime() );
		// srand( $msec * 123456 );
		shuffle( $lids );
		for( $i = 0; $i < $options[1]; $i++ ) {
			$sql = 'SELECT lid, cid, title, published, hits, nice_url  FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE  lid=' . $lids[$i];
			$result = icms::$xoopsDB -> query( $sql ) ;
			list( $lid, $cid, $title, $published, $hits, $nice_url ) = icms::$xoopsDB -> fetchRow( $result );
			if ( false == imlinks_checkBlockgroups( $cid ) || $cid == 0 ) { continue; }
			$ltitle = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $title ) );
			if ( !XOOPS_USE_MULTIBYTES ) {
				if ( strlen( $title ) >= $options[2] ) {
					$ltitle = substr( $title, 0, ( $options[2] -1 ) ) . '&#8230;';
				}
			}
			$linkload = array();
			$linkload['id'] = intval( $lid );
			$linkload['title'] = $ltitle;
			if ( !$nice_url ) {
				$nice_link = strtolower( str_replace( ' ', '_', $ltitle ) );
			} else {
				$nice_link = strtolower( str_replace( ' ', '_', $nice_url ) );
			}
			if ( $imlModuleConfig['niceurl'] ) {
				$linkload['link'] = ICMS_URL . '/modules/' . $imlModule -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $lid ) . '&amp;page=' . $nice_link;
			} else {
				$linkload['link'] = ICMS_URL . '/modules/' . $imlModule -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $lid );
			}
			$linkload['date'] = formatTimestamp( $published, $options[3] );
			$linkload['hits'] = $hits;
			$linkload['dirname'] = $imlModule -> getVar( 'dirname' );
			$block['links'][] = $linkload;
		}
	}
	unset( $_block_check_array );
	return $block;
}

// b_imlinks_random_edit()
//
// @param $options
// @return
function b_imlinks_random_edit( $options ) {
	global $icmsAdminTpl;
	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />' );
	include_once ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/include/functions.php';

	$form = '<table cellspacing="5">';

	$form .= '<tr><td width="200px"><b>' . _MB_IMLINKS_DISP . ':</b></td>';
	$form .= '<td><input type="hidden" name="options[]" value="';
	if ( $options[0] == 'published' ) {
		$form .= 'published"';
	} else {
		$form .= 'hits"';
	}
	$form .= ' />';
	$form .= '<input type="text" name="options[]" value="' . $options[1] . '" />&nbsp;' . _MB_IMLINKS_FILES . '</td></tr>';

	$form .= '<tr><td><b>' . _MB_IMLINKS_CHARS . ':</b></td>';
	$form .= '<td><input type="text" name="options[]" value="' . $options[2] . '" />&nbsp;' . _MB_IMLINKS_LENGTH . '</td></tr>';

	$form .= '<tr><td><b>' . _MB_IMLINKS_DATEFORMAT. ':</b>' . imlinks_tooltip( _MB_IMLINKS_DATEFORMATMANUAL, 'help' ) . '</td>';
	$form .= '<td><input type="text" name="options[]" value="' . $options[3] . '" />&nbsp;' . _MB_IMLINKS_DATEFORMATMANUAL . '</td></tr>';

	$form .= '</table>';
	return $form;
}
?>