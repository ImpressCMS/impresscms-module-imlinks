<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: viewcat.php
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
 
include 'header.php';

// Begin Main page Heading etc
$cid		= intval( iml_cleanRequestVars( $_REQUEST, 'cid', 0 ) );
$selectdate = iml_cleanRequestVars( $_REQUEST, 'selectdate', '' );
$list		= iml_cleanRequestVars( $_REQUEST, 'list', '' );

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
$arr = $mytree -> getFirstChild( $cid, icms::$module -> config['sortcats'] );

if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
	if ( false == iml_checkgroups( $cid ) ) {
		redirect_header( 'index.php', 1, _MD_IMLINKS_MUSTREGFIRST );
		exit();
	}
}
$xoopsOption['template_main'] = 'imlinks_viewcat.html';
include ICMS_ROOT_PATH . '/header.php';

// Breadcrumb
$pathstring  = '<a href="index.php">' . _MD_IMLINKS_MAIN . '</a>&nbsp;:&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $cid, 'title', 'viewcat.php?op=' );
$xoopsTpl -> assign( 'category_path', $pathstring );
$xoopsTpl -> assign( 'category_id', $cid );
$xoopsTpl -> assign( 'catcols', icms::$module -> config['catcols'] );
$xoopsTpl -> assign( 'lightwindow', icms::$module -> config['lightwindow'] );
$xoopsTpl -> assign( 'uselyte', icms::$module -> config['uselyte'] );
if ( icms::$module -> config['lightwindow'] == 2 ) {
	if ( is_readable(ICMS_ROOT_PATH . '/libraries/greybox/AJS.js' ) ) {
		$xoopsTpl -> assign( 'icms_module_header', '<script type="text/javascript">var GB_ROOT_DIR = "' . ICMS_URL . '/libraries/greybox/";</script>' );
	}
}

// Display Sub-categories for selected Category
if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
	$scount = 1;
	foreach( $arr as $ele ) {
		if ( iml_checkgroups( $ele['cid'] ) == false ) {
			continue;
		}
		$sub_arr = array();
		$sub_arr = $mytree -> getFirstChild( $ele['cid'], 'title' );
		$space = 1;
		$chcount = 1;
		$infercategories = '';
		foreach( $sub_arr as $sub_ele ) {
			// Subitem file count
			$hassubitems = iml_getTotalItems( $sub_ele['cid'], 1 );
			// Filter group permissions
			if ( true == iml_checkgroups( $sub_ele['cid'] ) ) {
				// If subcategory count > 5 then finish adding subcats to $infercategories and end
				if ( $chcount > 5 ) {
					$infercategories .= '...';
					break;
				}
				if ( $space > 0 ) $infercategories .= '<div style="margin-left: 45px; font-size: smaller; padding-top: 0px;">- ';
					$infercategories .= '<a href="viewcat.php?cid=' . $sub_ele['cid'] . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $sub_ele['title'] ) ) . '</a> (' . $hassubitems['count'] . ')</div>';
				$space++;
				$chcount++;
			}
		}
		$totallinks = iml_getTotalItems( $ele['cid'], 1 );
		$indicator  = iml_isnewimage( $totallinks['published'] );

// This code is copyright WF-Projects
// Using this code without our permission or removing this code voids the license agreement
		$_image = ( $ele['imgurl'] ) ? urldecode( $ele['imgurl'] ) : '';
		if ( $_image != '' && icms::$module -> config['usethumbs'] ) {
			$_thumb_image = new imThumbsNails( $_image, icms::$module -> config['catimage'], 'thumbs' );
			if ( $_thumb_image ) {
				$_thumb_image -> setUseThumbs( 1 );
				$_thumb_image -> setImageType( 'gd2' );
				$_image = $_thumb_image -> do_thumb(	icms::$module -> config['shotwidth'],
														icms::$module -> config['shotheight'],
														icms::$module -> config['imagequality'],
														icms::$module -> config['updatethumbs'],
														icms::$module -> config['keepaspect'] );
			}
		}
		if ( empty( $_image ) || $_image == '' ) {
			$imgurl = $indicator['image'];
		} else {
			$imgurl = icms::$module -> config['catimage'] . "/$_image";
		}
// End
		$xoopsTpl -> append( 'subcategories',
		array( 'title' => icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $ele['title'] ) ),	'id' => $ele['cid'],
																				'image' => ICMS_URL . "/$imgurl",
																				'infercategories' => $infercategories,
																				'totallinks' => $totallinks['count'],
																				'count' => $scount,
																				'alttext' => $ele['description'] ) );
		$scount++;
	}
}

// Show Description for Category listing
$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid =' . $cid;
$head_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
$description = $head_arr['description']; 
if ( $head_arr['description'] != '' ) {
	$xoopsTpl -> assign( 'description', '<div style="padding-top: 10px; padding-bottom: 10px;">' . $description . '</div><br />'); 
}
$xoopsTpl -> assign( 'icms_pagetitle', $head_arr['title'] );

if ( iml_imageheader() != '' ) {
	$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader() . '</div>';
} else { 
	$catarray['imageheader'] = ''; 
}

$sql = 'SELECT letters, buttons FROM ' . icms::$xoopsDB -> prefix( 'imlinks_indexpage' );
list( $lettersyn, $buttonsyn ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql ) );

$catarray['letters'] = iml_letters();
$catarray['toolbar'] = iml_toolbar();
$catarray['lettersyn'] = $lettersyn;
$catarray['buttonsyn'] = $buttonsyn;
$xoopsTpl -> assign( 'catarray', $catarray );

// Extract linkload information from database
$xoopsTpl -> assign( 'show_categort_title', true );

$start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
$start = intval( $start );
$orderby = ( isset( $_REQUEST['orderby'] ) && !empty( $_REQUEST['orderby'] ) ) ? iml_convertorderbyin( icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $_REQUEST['orderby'] ) ) ) : iml_convertorderbyin( icms::$module -> config['linkxorder'] );

if ( $selectdate ) {
	$d = date( 'j', $selectdate );
	$m = date( 'm', $selectdate );
	$y = date( 'Y', $selectdate );

	$stat_begin = mktime ( 0, 0, 0, $m, $d, $y );
	$stat_end   = mktime ( 23, 59, 59, $m, $d, $y );

	$query = ' WHERE published >= ' . $stat_begin . ' AND published <= ' . $stat_end . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0 AND cid > 0';
	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . $query . ' ORDER BY ' . $orderby;
	$result = icms::$xoopsDB -> query( $sql, icms::$module -> config['perpage'] , $start );

	$sql = 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . $query;
	list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql ) );

	$list_by = 'selectdate=' . $selectdate;
} elseif ( $list ) {
	$query = ' WHERE title LIKE "' . $list . '%" AND (published>0 AND published<=' . time() . ') AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid>0';

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . $query . ' ORDER BY ' . $orderby;
	$result = icms::$xoopsDB -> query( $sql, icms::$module -> config['perpage'], $start );

	$sql2 = 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . $query;
	list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );
	$list_by = 'list=' . $list;
} else {
	$xoopsTpl -> assign( 'show_categort_title', false );

	$sql = 'SELECT DISTINCT a.* FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
		. icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' b'
		. ' ON b.lid=a.lid'
		. ' WHERE a.published > 0 AND a.published <= ' . time()
		. ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline=0'
		. ' AND (b.cid=a.cid OR (a.cid=' . $cid . ' OR b.cid=' . $cid . '))'
		. ' ORDER BY '
		. $orderby;
	$result = icms::$xoopsDB -> query( $sql, icms::$module -> config['perpage'], $start );

	$gettotalitems = iml_getTotalItems( $cid );
	$count = $gettotalitems['count'];
	$order = iml_convertorderbyout( $orderby );
	$list_by = 'cid=' . $cid . '&orderby=' . $order;
}

$pagenav  = new icms_view_PageNav( $count, icms::$module -> config['perpage'] , $start, 'start', $list_by );
$page_nav = $pagenav -> renderNav();
$istrue   = ( isset( $page_nav ) && !empty( $page_nav ) ) ? true : false;
$xoopsTpl -> assign( 'page_nav', $istrue );
$xoopsTpl -> assign( 'pagenav', $page_nav );
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

// Show links
if ( $count > 0 ) {
	$moderate = 0;
	while ( $link_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
		$res_type = 0;
		require ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/linkloadinfo.php';
		$xoopsTpl -> append( 'imlink', $imlink );
	}

	// Show order box
	$xoopsTpl -> assign( 'show_links', false );
	if ( $count > 1 && $cid != 0 ) {
		$orderbyTrans = iml_convertorderbytrans( $orderby );
		$xoopsTpl -> assign( 'show_links', true );
		$xoopsTpl -> assign( 'lang_cursortedby', sprintf( _MD_IMLINKS_CURSORTBY, iml_convertorderbytrans( $orderby ) ) );
		$orderby = iml_convertorderbyout( $orderby );
	}

	// Screenshots display
	$xoopsTpl -> assign( 'show_screenshot', false );
	if ( isset( icms::$module -> config['screenshot'] ) && icms::$module -> config['screenshot'] == 1 ) {
		$xoopsTpl -> assign( 'shots_dir', icms::$module -> config['screenshots'] );
		$xoopsTpl -> assign( 'shotwidth', icms::$module -> config['shotwidth'] );
		$xoopsTpl -> assign( 'shotheight', icms::$module -> config['shotheight'] );
		$xoopsTpl -> assign( 'show_screenshot', true );
	}
}
unset( $link_arr );
unset( $page_nav );

include ICMS_ROOT_PATH . '/footer.php';
?>