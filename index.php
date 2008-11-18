<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: index.php
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

$start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
$start = intval( $start );

$xoopsOption['template_main'] = 'imlinks_index.html';
include ICMS_ROOT_PATH . '/header.php';

// Begin Main page Heading etc
$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_indexpage' );
$head_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

if ( $head_arr['indeximage'] != '' ) {
$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader( $head_arr['indeximage'], '' ) . '</div>'; }

if ( $head_arr['indexheading'] != '' ) {
$catarray['indexheading'] = '<h4 style="text-align: center;">' . $immyts -> displayTarea( $head_arr['indexheading'] ) . '</h4>'; }

$catarray['indexheaderalign'] = $immyts -> htmlSpecialCharsStrip( $head_arr['indexheaderalign'] );
$catarray['indexfooteralign'] = $immyts -> htmlSpecialCharsStrip( $head_arr['indexfooteralign'] );

$html   = ( $head_arr['nohtml'] ) ? 0 : 1;
$smiley = ( $head_arr['nosmiley'] ) ? 0 : 1;
$xcodes = ( $head_arr['noxcodes'] ) ? 0 : 1;
$images = ( $head_arr['noimages'] ) ? 0 : 1;
$breaks = ( $head_arr['nobreak'] ) ? 1 : 0;

if ( $head_arr['indexheader'] != '' ) {
$catarray['indexheader'] = '<div style="text-align: ' . $head_arr['indexheaderalign'] . ';">' . $immyts -> displayTarea( $head_arr['indexheader'], $html, $smiley, $xcodes, $images, $breaks ) . '</div>'; }

if ( $head_arr['indexfooter'] != '' ) {
$catarray['indexfooter'] = '<div style="padding 12px; text-align: ' . $head_arr['indexfooteralign'] . ';">' . $immyts -> displayTarea( $head_arr['indexfooter'], $html, $smiley, $xcodes, $images, $breaks ) . '</div>'; }

$catarray['letters'] = iml_letters();
$catarray['toolbar'] = iml_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

// End main page Headers

$count = 1;
$countin = 0;
$mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
// Begin Main page linkload info
$catsort   = $xoopsModuleConfig['sortcats'];
$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE pid=0 ORDER BY ' . $catsort;
$result = $xoopsDB -> query( $sql );
while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
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
            if ( true == iml_checkgroups( $ele['cid'] ) ) {
                if ( $xoopsModuleConfig['subcats'] == 1 ) {
                    $chtitle = $immyts -> htmlSpecialCharsStrip( $ele['title'] );
                    if ( $chcount > 5 ) {
                        $subcategories .= '...';
                        break;
                    } 
                    if ( $space > 0 ) {
                      $subcategories .= '<a href="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $ele['cid'] . '">' . $chtitle . '</a><br />';
                    }
                    $space++;
                    $chcount++;
                } 
            } 
        } 

        // This code is copyright WF-Projects
        // Using this code without our permission or removing this code voids the license agreement
        $_image = ( $myrow['imgurl'] ) ? urldecode( $myrow['imgurl'] ) : "";
		if ( $_image != "" && $xoopsModuleConfig['usethumbs'] ) {
                  $_thumb_image = new imThumbsNails( $_image, $xoopsModuleConfig['catimage'], 'thumbs' );
                  if ( $_thumb_image ) { 
                    $_thumb_image -> setUseThumbs( 1 );
                    $_thumb_image -> setImageType( 'gd2' );
                    $_image = $_thumb_image -> do_thumb( $xoopsModuleConfig['shotwidth'],
														 $xoopsModuleConfig['shotheight'],
														 $xoopsModuleConfig['imagequality'],
                                                         $xoopsModuleConfig['updatethumbs'],
                                                         $xoopsModuleConfig['keepaspect'] );
                    }
                 }
	if ( empty( $_image ) || $_image == '' ) {
            $imgurl = $indicator['image'];
        } else {
            $imgurl = "{$xoopsModuleConfig['catimage']}/$_image";
        }
        // End

        $xoopsTpl -> append( 'categories', array( 'image' 			=> ICMS_URL . "/$imgurl",
												  'id' 				=> $myrow['cid'],
												  'title' 			=> $title,
												  'subcategories' 	=> $subcategories,
												  'totallinks' 		=> $totallinkload['count'],
												  'count' 			=> $count,
												  'alttext' 		=> $myrow['description'] )
            );
        $count++;
    } 
} 

$listings  = iml_getTotalItems();  // get total amount of links
$total_cat = iml_totalcategory();  // get total amount of categories 
switch ( $total_cat ) {
    case '1':
        $lang_thereare = _MD_IMLINKS_THEREIS;
        break;
    default:
        $lang_thereare = _MD_IMLINKS_THEREARE;
        break;
}
$xoopsTpl -> assign( 'lang_thereare', sprintf( $lang_thereare, $total_cat, $listings['count'] ) );
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
$xoopsTpl -> assign( 'catcols', $xoopsModuleConfig['catcols'] );

// Screenshots display
if ( isset( $xoopsModuleConfig['screenshot'] ) && $xoopsModuleConfig['screenshot'] == 1 ) {
    $xoopsTpl -> assign( 'shots_dir', $xoopsModuleConfig['screenshots'] );
    $xoopsTpl -> assign( 'shotwidth', $xoopsModuleConfig['shotwidth'] );
    $xoopsTpl -> assign( 'shotheight', $xoopsModuleConfig['shotheight'] );
    $xoopsTpl -> assign( 'show_screenshot', true );
}

// Show Latest Listings on Index Page
$sql = $xoopsDB -> query( "SELECT lastlinksyn, lastlinkstotal FROM " . $xoopsDB -> prefix( 'imlinks_indexpage' ) );
$lastlinks = $xoopsDB -> fetchArray( $sql );

if ( $lastlinks['lastlinksyn'] == 1 && $lastlinks['lastlinkstotal'] > 0 ) {

  $result = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published > 0 
								AND published <= " . time() . " 
								AND (expired = 0 OR expired > " . time() . ") 
								AND offline = 0 
								ORDER BY published DESC", 0, 0 );
  list( $count ) = $xoopsDB -> fetchRow( $result );

  $count = ( ( $count > $lastlinks['lastlinkstotal'] ) && ( $lastlinks['lastlinkstotal'] != 0 ) ) ? $lastlinks['lastlinkstotal'] : $count;
  $limit = ( ( $start + $xoopsModuleConfig['perpage'] ) > $count ) ? ( $count - $start ) : $xoopsModuleConfig['perpage'];

  $result = $xoopsDB -> query( "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published > 0 
								AND published <= " . time() . " 
								AND (expired = 0 OR expired > " . time() . ") 
								AND offline = 0 
								ORDER BY published DESC", $limit, $start );
  while ( $link_arr = $xoopsDB -> fetchArray( $result ) ) {
        $res_type = 0;
        $moderate = 0;
        $cid = $link_arr['cid'];
        require ICMS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/linkloadinfo.php';
        $xoopsTpl -> append( 'link', $link );
  }
  
  $pagenav = new XoopsPageNav( $count, $xoopsModuleConfig['perpage'] ,$start, 'start' );
  $xoopsTpl -> assign( 'pagenav', $pagenav -> renderNav() );
  
  $xoopsTpl -> assign( 'showlatest', $lastlinks['lastlinksyn'] );
   
}

$sql = 'SELECT rssactive FROM ' . $xoopsDB -> prefix( 'imlinks_configs' );
list( $rssactive ) = $xoopsDB -> fetchRow( $xoopsDB -> query( $sql ) );

if ( $rssactive == 1 ) {
	$xoopsTpl -> assign( 'imlinks_feed', '<a href="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/feed.php" target="_blank"><img src="' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/feed.png" border="0" alt="' . _MD_IMLINKS_FEED . '" title="' . _MD_IMLINKS_FEED . '" /></a>' );
	$xoopsTpl -> assign( 'xoops_module_header', '<link rel="alternate" type="application/rss+xml" title="' . _MD_IMLINKS_FEED . '" href="feed.php">' ); 
}

include ICMS_ROOT_PATH . '/footer.php';

?>
