<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: newlist.php
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

$xoopsOption['template_main'] = 'imlinks_newlistindex.html';
include ICMS_ROOT_PATH . '/header.php';

$catarray['imageheader'] = iml_imageheader();
$catarray['letters'] = iml_letters();
$catarray['toolbar'] = iml_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

if ( isset( $_GET['newlinkshowdays'] ) ) {
	$newlinkshowdays = intval( $_GET['newlinkshowdays'] ) ? intval( $_GET['newlinkshowdays'] ) : 7;
	if ( $newlinkshowdays != 7 ) {
		if ( $newlinkshowdays != 14 ) {
			if ( $newlinkshowdays != 30 ) {
				redirect_header( 'newlist.php?newlinkshowdays=7', 5, _MD_IMLINKS_STOPIT . '<br /><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/security.png" />' );
				exit();
			}
		}
		}
	$time_cur = time();
	$duration = ( $time_cur - ( 86400 * 30 ) );
	$duration_week = ( $time_cur - ( 86400 * 7 ) );
	$allmonthlinks = 0;
	$allweeklinks = 0;
	$result = icms::$xoopsDB -> query( 'SELECT lid, cid, published, updated FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE (published >= ' . $duration . ' AND published <= ' . $time_cur . ') OR updated >= ' . $duration . ' AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0' );
	while ( $myrow = icms::$xoopsDB -> fetcharray( $result ) ) {
		$published = ( $myrow['updated'] > 0 ) ? $myrow['updated'] : $myrow['published'];
		$allmonthlinks++;
		if ( $published > $duration_week ) {
			$allweeklinks++;
		}
	}
	$xoopsTpl -> assign( 'allweeklinks', $allweeklinks );
	$xoopsTpl -> assign( 'allmonthlinks', $allmonthlinks );

// List Last VARIABLE Days of links
	$newlinkshowdays = ( !isset( $_GET['newlinkshowdays'] ) ) ? 7 : $_GET['newlinkshowdays'];
	$xoopsTpl -> assign( 'newlinkshowdays', intval( $newlinkshowdays ) );

	$dailylinks = array();
	for( $i = 0; $i < $newlinkshowdays; $i++ ) {
		$key = $newlinkshowdays - $i - 1;
		$time = $time_cur - ( 86400 * $key );
		$dailylinks[$key]['newlinkdayRaw'] = $time;
		$dailylinks[$key]['newlinkView'] = formatTimestamp( $time, icms::$module -> config['dateformat'] );
		$dailylinks[$key]['totallinks'] = 0;
	}
}

$duration = ( $time_cur - ( 86400 * ( intval( $newlinkshowdays ) - 1 ) ) );
$result = icms::$xoopsDB -> query( 'SELECT lid, cid, published, updated FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE (published > ' . $duration . ' AND published <= ' . $time_cur . ') OR (updated >= ' . $duration . ' AND updated <= ' . $time_cur . ') AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0' );
while ( $myrow = icms::$xoopsDB -> fetcharray( $result ) ) {
	$published = ( $myrow['updated'] > 0 ) ? $myrow['updated'] : $myrow['published'];
	$d = date( 'j', $published );
	$m = date( 'm', $published );
	$y = date( 'Y', $published );
	$key = intval( ( $time_cur - mktime ( 0, 0, 0, $m, $d, $y ) ) / 86400 );
	$dailylinks[$key]['totallinks']++;
}
ksort( $dailylinks );
reset( $dailylinks );
$xoopsTpl -> assign( 'dailylinks', $dailylinks );
unset( $dailylinks );
$moderate = 0;
$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
$sql  = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' );
$sql .= ' WHERE (published > 0 AND published <= ' . $time_cur . ') OR (updated > 0 AND updated <= ' . $time_cur . ') AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0 ORDER BY ' . icms::$module -> config['linkxorder'];
$result = icms::$xoopsDB -> query( $sql, 10 , 0 );
while ( $link_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
	include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/linkloadinfo.php';
} 

// Screenshots display
if ( icms::$module -> config['screenshot'] ) {
	$xoopsTpl -> assign( 'shots_dir', icms::$module -> config['screenshots'] );
	$xoopsTpl -> assign( 'shotwidth', icms::$module -> config['shotwidth'] );
	$xoopsTpl -> assign( 'shotheight', icms::$module -> config['shotheight'] );
	$xoopsTpl -> assign( 'show_screenshot', true );
}
$xoopsTpl -> assign( 'module_dir', $mydirname );
include ICMS_ROOT_PATH . '/footer.php';
?>