<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: viewcat.php
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
 
include 'header.php';

// Begin Main page Heading etc
$cid = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );
$selectdate = iml_cleanRequestVars( $_REQUEST, 'selectdate', '' );
$list = iml_cleanRequestVars( $_REQUEST, 'list', '' );
$cid = intval($cid);
$catsort = $xoopsModuleConfig['sortcats'];

$mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
$arr = $mytree -> getFirstChild( $cid, $catsort );

if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    if ( false == iml_checkgroups( $cid ) ) {
        redirect_header( 'index.php', 1, _MD_IMLINKS_MUSTREGFIRST );
        exit();
    } 
}
$xoopsOption['template_main'] = 'imlinks_viewcat.html';
include ICMS_ROOT_PATH . '/header.php';

// Breadcrumb
$pathstring = '<a href="' . ICMS_URL . '/modules/' . $xoopsModule -> getvar( 'dirname' ) . '/index.php">' . _MD_IMLINKS_MAIN . '</a>&nbsp;:&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $cid, 'title', 'viewcat.php?op=' );
$xoopsTpl -> assign( 'category_path', $pathstring );
$xoopsTpl -> assign( 'category_id', $cid );
$xoopsTpl -> assign( 'catcols', $xoopsModuleConfig['catcols'] );

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
            $hassubitems = iml_getTotalItems( $sub_ele['cid'] );
            // Filter group permissions
            if ( true == iml_checkgroups( $sub_ele['cid'] ) ) {
                // If subcategory count > 5 then finish adding subcats to $infercategories and end
                if ( $chcount > 5 ) {
                    $infercategories .= '...';
                    break;
                }
                if ( $space > 0 ) $infercategories .= ', ';
                $infercategories .= '<a href="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $sub_ele['cid'] . '">' . $immyts -> htmlSpecialCharsStrip( $sub_ele['title'] ) . '</a> (' . $hassubitems['count'] . ')';
                $space++;
                $chcount++;
            }
        }
        $totallinks = iml_getTotalItems( $ele['cid'] );
        $indicator  = iml_isnewimage( $totallinks['published'] );

// This code is copyright WF-Projects
// Using this code without our permission or removing this code voids the license agreement
        $_image = ( $ele['imgurl'] ) ? urldecode( $ele['imgurl'] ) : '';
		if ( $_image != '' && $xoopsModuleConfig['usethumbs'] ) {
                  $_thumb_image = new imThumbsNails( $_image, $xoopsModuleConfig['catimage'], 'thumbs' );
                  if ( $_thumb_image ) {
                    $_thumb_image -> setUseThumbs( 1 );
                    $_thumb_image -> setImageType( 'gd2' );
                    $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['shotwidth'],
														 $xoopsModuleConfig['shotheight'],
														 $xoopsModuleConfig['imagequality'],
														 $xoopsModuleConfig['updatethumbs'],
														 $xoopsModuleConfig['keepaspect']
                    );
            }
        } 
		if ( empty( $_image ) || $_image == '' ) {
                  $imgurl = $indicator['image'];
                 } else {
                  $imgurl = "{$xoopsModuleConfig['catimage']}/$_image";
                 }
// End
        $xoopsTpl -> append( 'subcategories',
            array( 'title' => $immyts -> htmlSpecialCharsStrip( $ele['title'] ), 'id' => $ele['cid'],
																				 'image' => ICMS_URL . "/$imgurl",
																				 'infercategories' => $infercategories,
																				 'totallinks' => $totallinks['count'],
																				 'count' => $scount,
																				 'alttext' => $ele['description'] )
																				 );
        $scount++;
    }
}

// Show Description for Category listing
$sql = 'SELECT title, description, nohtml, nosmiley, noxcodes, noimages, nobreak, imgurl, client_id, banner_id FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid =' . intval( $cid );
$head_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
$html = ( $head_arr['nohtml'] ) ? 0 : 1;
$smiley = ( $head_arr['nosmiley'] ) ? 0 : 1;
$xcodes = ( $head_arr['noxcodes'] ) ? 0 : 1;
$images = ( $head_arr['noimages'] ) ? 0 : 1;
$breaks = ( $head_arr['nobreak'] ) ? 1 : 0;
$description = $immyts -> displayTarea( $head_arr['description'], $html, $smiley, $xcodes, $images, $breaks ); 
if ( $head_arr['description'] != '' ) {
$xoopsTpl -> assign( 'description', '<div style="padding-top: 10px; padding-bottom: 10px;">' . $description . '</div><br />'); }
$xoopsTpl -> assign( 'xoops_pagetitle', $head_arr['title'] );

if ($head_arr['client_id'] > 0){
  $catarray['imageheader'] = iml_getbanner_from_id_client( $head_arr['client_id'] );
} elseif ($head_arr['banner_id'] > 0) {
  $catarray['imageheader'] = iml_getbanner_from_id_banner( $head_arr['banner_id'] );
} elseif ( iml_imageheader() != '' ) {
  $catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader() . '</div>';
} else { $catarray['imageheader'] = ''; }
$catarray['letters'] = iml_letters();
$catarray['toolbar'] = iml_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

// Extract linkload information from database
$xoopsTpl -> assign( 'show_categort_title', true );

$start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
$orderby = ( isset( $_REQUEST['orderby'] ) && !empty( $_REQUEST['orderby'] ) ) ? iml_convertorderbyin( htmlspecialchars( $_REQUEST['orderby'] ) ) : iml_convertorderbyin( $xoopsModuleConfig['linkxorder'] );


if ( $selectdate ) {
    $d = date( 'j', $selectdate );
    $m = date( 'm', $selectdate );
    $y = date( 'Y', $selectdate );

    $stat_begin = mktime ( 0, 0, 0, $m, $d, $y );
    $stat_end = mktime ( 23, 59, 59, $m, $d, $y );

    $query = ' WHERE published >= ' . $stat_begin . ' AND published <= ' . $stat_end . ' AND (expired = 0 OR expired > ' . time() . ')
													  AND offline = 0
													  AND cid > 0';

    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . $query . ' ORDER BY ' . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'] , $start );

    $sql = 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );

    $list_by = 'selectdate=' . $selectdate;

} elseif ( $list ) {

    $query = " WHERE title LIKE '$list%' AND (published > 0 AND published <= " . time() . ") AND (expired = 0 OR expired > " . time() . ") AND offline = 0 AND cid > 0";

    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . $query . ' ORDER BY ' . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'] , $start );

    $sql = 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . $query;
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );
    $list_by = 'list=' . $list;

} else {

    $sql = 'SELECT DISTINCT a.* FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN '
     . $xoopsDB -> prefix( 'imlinks_altcat' ) . ' b'
     . ' ON b.lid=a.lid'
     . ' WHERE a.published > 0 AND a.published <= ' . time()
     . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline=0'
     . ' AND (b.cid=a.cid OR (a.cid=' . intval($cid) . ' OR b.cid=' . intval($cid) . '))'
     . ' ORDER BY '
     . $orderby;
    $result = $xoopsDB -> query( $sql, $xoopsModuleConfig['perpage'], $start );
    $xoopsTpl -> assign( 'show_categort_title', false );

    $sql2 = 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' a LEFT JOIN ' . $xoopsDB -> prefix( 'imlinks_altcat' ) . ' b '
     . ' ON b.lid=a.lid'
     . ' WHERE a.published > 0 AND a.published <= ' . time()
     . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline=0'
     . ' AND (b.cid=a.cid OR (a.cid=' . intval($cid) . ' OR b.cid=' . intval($cid) . '))';
    list( $count ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql2 ) );
    $order = iml_convertorderbyout($orderby);
   $cid = intval($cid);
    $list_by = 'cid=' . intval($cid) . '&orderby=' . $order;
}

    $pagenav = new XoopsPageNav( $count, $xoopsModuleConfig['perpage'] , $start, 'start', $list_by );
    $page_nav = $pagenav -> renderNav();
    $istrue = ( isset( $page_nav ) && !empty( $page_nav ) ) ? true : false;
    $xoopsTpl -> assign( 'page_nav', $istrue );
    $xoopsTpl -> assign( 'pagenav', $page_nav );
    $xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );

// Show links
if ( $count > 0 ) {
    $moderate = 0;
    while ( $link_arr = $xoopsDB -> fetchArray( $result ) ) {
        $res_type = 0;
        require ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/linkloadinfo.php';
        $xoopsTpl -> append( 'link', $link );
    } 

// Show order box
    $xoopsTpl -> assign( 'show_links', false );
    if ( $count > 1 && $cid != 0 ) {
        $xoopsTpl -> assign( 'show_links', true );
        $orderbyTrans = iml_convertorderbytrans( $orderby );
        $xoopsTpl -> assign( 'lang_cursortedby', sprintf( _MD_IMLINKS_CURSORTBY, iml_convertorderbytrans( $orderby ) ) );
        $orderby = iml_convertorderbyout( $orderby );
    }

// Screenshots display
    $xoopsTpl -> assign( 'show_screenshot', false );
    if ( isset( $xoopsModuleConfig['screenshot'] ) && $xoopsModuleConfig['screenshot'] == 1 ) {
        $xoopsTpl -> assign( 'shots_dir', $xoopsModuleConfig['screenshots'] );
        $xoopsTpl -> assign( 'shotwidth', $xoopsModuleConfig['shotwidth'] );
        $xoopsTpl -> assign( 'shotheight', $xoopsModuleConfig['shotheight'] );
        $xoopsTpl -> assign( 'show_screenshot', true );
    }
}
unset( $link_arr );
unset( $page_nav );

include ICMS_ROOT_PATH . '/footer.php';

?>