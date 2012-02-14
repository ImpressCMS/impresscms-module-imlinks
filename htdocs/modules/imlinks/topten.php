<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: topten.php
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

$xoopsOption['template_main'] = 'imlinks_topten.html';
include ICMS_ROOT_PATH . '/header.php';

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

$action_array	= array( 'hit' => 0, 'rate' => 1 );
$list_array		= array( 'hits', 'rating' );
$lang_array		= array( _MD_IMLINKS_HITS, _MD_IMLINKS_RATING );
$rankings		= array();

$sort		= ( isset( $_GET['list'] ) && in_array( $_GET['list'], $action_array ) ) ? $_GET['list'] : 'rate';
$sort_arr	= $action_array[$sort];
$sortDB		= $list_array[$sort_arr];

if ( iml_imageheader() != '' ) {
	$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader() . '</div>';
}
$catarray['letters'] = iml_letters();
$catarray['toolbar'] = iml_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

	$arr = array();
	$result = icms::$xoopsDB -> query( 'SELECT cid, title, pid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE pid=0 ORDER BY ' . icms::$module -> config['sortcats'] );

	$e = 0;
	while ( list( $cid, $ctitle ) = icms::$xoopsDB -> fetchRow( $result ) ) {
		if ( true == iml_checkgroups( $cid ) ) {
			$query = 'SELECT lid, cid, title, hits, rating, votes, nice_url FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0 AND (cid=' . intval($cid);
			$arr = $mytree -> getAllChildId( $cid );
			for( $i = 0;$i < count( $arr );$i++ ) {
				$query .= ' or cid=' . $arr[$i] . '';
			}
			$query .= ') ORDER BY ' . $sortDB . ' DESC';
			$result2 = icms::$xoopsDB -> query( $query, 10, 0 );
			$filecount = icms::$xoopsDB -> getRowsNum( $result2 );

			if ( $filecount > 0 ) {
				$rankings[$e]['title'] = htmlspecialchars( $ctitle );
				$rank = 1;
				while ( list( $did, $dcid, $dtitle, $hits, $rating, $votes, $nice_url ) = icms::$xoopsDB -> fetchRow( $result2 ) ) {

					$result3 = icms::$xoopsDB -> query( 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $dcid );
					$mycat = icms::$xoopsDB -> fetchArray( $result3 );
					$category = $mycat['title'];
					$nice_link = iml_nicelink( $dtitle, $nice_url );
					$dtitle = htmlspecialchars( $dtitle );
					$rankings[$e]['file'][] = array( 'id' => $did, 'cid' => $dcid, 'rank' => $rank, 'title' => $dtitle, 'category' => $category, 'hits' => $hits, 'rating' => number_format( $rating, 1 ), 'votes' => $votes, 'nice_link' => $nice_link );
					$rank++;
				}
				$e++;
			}
		}
	}

$xoopsTpl -> assign( 'back' , '<a class="button" href="javascript:history.go(-1)">&#9668; ' . _BACK . '</a>' );
$xoopsTpl -> assign( 'lang_sortby' , $lang_array[$sort_arr] );
$xoopsTpl -> assign( 'nice_url', icms::$module -> config['niceurl'] );
$xoopsTpl -> assign( 'rankings', $rankings );
$xoopsTpl -> assign( 'module_dir', $mydirname );

include ICMS_ROOT_PATH . '/footer.php';
?>