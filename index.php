<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: index.php
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

$start = intval( iml_cleanRequestVars( $_REQUEST, 'start', 0 ) );

$xoopsOption['template_main'] = 'imlinks_index.html';
include ICMS_ROOT_PATH . '/header.php';

// Begin Main page Heading etc
$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_indexpage' );
$head_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

if ( $head_arr['indeximage'] != '' ) {
$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader( $head_arr['indeximage'], '' ) . '</div>'; }

if ( $head_arr['indexheading'] != '' ) {
$catarray['indexheading'] = '<h4 style="text-align: center;">' . $head_arr['indexheading'] . '</h4>'; }

$catarray['indexheaderalign'] = $immyts -> htmlSpecialCharsStrip( $head_arr['indexheaderalign'] );
$catarray['indexfooteralign'] = $immyts -> htmlSpecialCharsStrip( $head_arr['indexfooteralign'] );

if ( $head_arr['indexheader'] != '' ) {
$catarray['indexheader'] = '<div style="text-align: ' . $head_arr['indexheaderalign'] . ';">' . $head_arr['indexheader'] . '</div>'; }

if ( $head_arr['indexfooter'] != '' ) {
$catarray['indexfooter'] = '<div style="padding 12px; text-align: ' . $head_arr['indexfooteralign'] . ';">' . $head_arr['indexfooter'] . '</div>'; }

$catarray['letters'] = iml_letters();
$catarray['toolbar'] = iml_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );
// End main page Headers

$count = 1;
$countin = 0;
$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

// Begin Main page linkload info
$catsort   = icms::$module -> config['sortcats'];
$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE pid=0 ORDER BY ' . $catsort;
$result = icms::$xoopsDB -> query( $sql );
while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
	$countin++;
	$totallinkload = iml_getTotalItems( $myrow['cid'], 1 );
	$indicator = iml_isnewimage( $totallinkload['published'] );
	if ( iml_checkgroups( $myrow['cid'] ) ) {
		$title = $immyts -> htmlSpecialCharsStrip( $myrow['title'] );
		$arr = array();
		$arr = $mytree -> getFirstChild( $myrow['cid'], $catsort );
		$space = 1;
		$chcount = 1;
		$subcategories = '';
		foreach( $arr as $ele ) {
			$hassubitems = iml_getTotalItems( $ele['cid'], 1 );
			if ( true == iml_checkgroups( $ele['cid'] ) ) {
				if ( icms::$module -> config['subcats'] == 1 ) {
					$chtitle = $immyts -> htmlSpecialCharsStrip( $ele['title'] );
					if ( $chcount > 5 ) {
						$subcategories .= '&nbsp;&nbsp;...';
						break;
					}
					if ( $space > 0 ) {
						$subcategories .= '- <a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $ele['cid'] . '">' . $chtitle . '</a> (' . $hassubitems['count'] . ')<br />';
					}
					$space++;
					$chcount++;
				}
			}
		}

		// This code is copyright WF-Projects
		// Using this code without our permission or removing this code voids the license agreement
		$_image = ( $myrow['imgurl'] ) ? urldecode( $myrow['imgurl'] ) : "";
		if ( $_image != "" && icms::$module -> config['usethumbs'] ) {
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

		$xoopsTpl -> append( 'categories', array(	'image' 			=> ICMS_URL . "/$imgurl",
													'id' 				=> $myrow['cid'],
													'title' 			=> $title,
													'subcategories' 	=> $subcategories,
													'totallinks' 		=> $totallinkload['count'],
													'count' 			=> $count,
													'alttext' 		=> $myrow['description'] ) );
		$count++;
	}
}

$listings  = iml_getTotalItems(); // get total amount of links
$total_cat = iml_totalcategory(); // get total amount of categories 
switch ( $total_cat ) {
	case '1':
		$lang_thereare = _MD_IMLINKS_THEREIS;
		break;
	default:
		$lang_thereare = _MD_IMLINKS_THEREARE;
		break;
}
$xoopsTpl -> assign( 'lang_thereare', sprintf( $lang_thereare, $total_cat, $listings['count'] ) );
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );
$xoopsTpl -> assign( 'catcols', icms::$module -> config['catcols'] );
$xoopsTpl -> assign( 'showlegend', icms::$module -> config['showlegend'] );
$xoopsTpl -> assign( 'lightwindow', icms::$module -> config['lightwindow'] );

// Screenshots display
if ( isset( icms::$module -> config['screenshot'] ) && icms::$module -> config['screenshot'] == 1 ) {
	$xoopsTpl -> assign( 'shots_dir', icms::$module -> config['screenshots'] );
	$xoopsTpl -> assign( 'shotwidth', icms::$module -> config['shotwidth'] );
	$xoopsTpl -> assign( 'shotheight', icms::$module -> config['shotheight'] );
	$xoopsTpl -> assign( 'show_screenshot', true );
}

// Show Latest Listings on Index Page
$sql = icms::$xoopsDB -> query( 'SELECT lastlinksyn, lastlinkstotal FROM ' . icms::$xoopsDB -> prefix( 'imlinks_indexpage' ) );
$lastlinks = icms::$xoopsDB -> fetchArray( $sql );

if ( $lastlinks['lastlinksyn'] == 1 && $lastlinks['lastlinkstotal'] > 0 ) {

	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 
		AND published <= ' . time() . ' 
		AND (expired = 0 OR expired > ' . time() . ') 
		AND offline = 0 
		ORDER BY published DESC', 0, 0 );
	list( $count ) = icms::$xoopsDB -> fetchRow( $result );

	$count = ( ( $count > $lastlinks['lastlinkstotal'] ) && ( $lastlinks['lastlinkstotal'] != 0 ) ) ? $lastlinks['lastlinkstotal'] : $count;
	$limit = ( ( $start + icms::$module -> config['perpage'] ) > $count ) ? ( $count - $start ) : icms::$module -> config['perpage'];

	$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 
		AND published <= ' . time() . ' 
		AND (expired = 0 OR expired > ' . time() . ') 
		AND offline = 0 
		ORDER BY published DESC', $limit, $start );
	while ( $link_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
		if ( true == iml_checkgroups( $link_arr['cid'] ) ) {
			$res_type = 0;
			$moderate = 0;
			require ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/linkloadinfo.php';
			$xoopsTpl -> append( 'imlink', $imlink );
		}
	}

	$pagenav = new icms_view_PageNav( $count, icms::$module -> config['perpage'], $start, 'start' );
	$xoopsTpl -> assign( 'pagenav', $pagenav -> renderNav() );
	$xoopsTpl -> assign( 'showlatest', $lastlinks['lastlinksyn'] );  
}

$greybox_dir = '<script type="text/javascript">var GB_ROOT_DIR = "' . ICMS_URL . '/libraries/greybox/";</script>';
if ( is_dir( $greybox_dir ) ) {
	$greybox_dir = '';
	}

// RSS feed
$rsssql = 'SELECT rssactive FROM ' . icms::$xoopsDB -> prefix( 'imlinks_configs' );
list( $rssactive ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $rsssql ) );
if ( $rssactive == 1 ) {
	$xoopsTpl -> assign( 'imlinks_feed', '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/feed.php" target="_blank"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/feed.png" border="0" alt="' . _MD_IMLINKS_FEED . '" title="' . _MD_IMLINKS_FEED . '" /></a>' );
	$xoopsTpl -> assign( 'icmss_module_header', '<link rel="alternate" type="application/rss+xml" title="' . _MD_IMLINKS_FEED . '" href="feed.php">' . $greybox_dir ); 
} elseif ( icms::$module -> config['lightwindow'] == 2 ) {
	$xoopsTpl -> assign( 'icms_module_header', $greybox_dir );
}

include ICMS_ROOT_PATH . '/footer.php';
?>