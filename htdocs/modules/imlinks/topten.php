<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: topten.php
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

$xoopsOption['template_main'] = 'imlinks_topten.html';
include ICMS_ROOT_PATH . '/header.php';

$mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

$action_array 	= array( 'hit' => 0, 'rate' => 1 );
$list_array 	= array( 'hits', 'rating' );
$lang_array 	= array( _MD_IMLINKS_HITS, _MD_IMLINKS_RATING );
$rankings 	= array();

$sort 		= ( isset( $_GET['list'] ) && in_array( $_GET['list'], $action_array ) ) ? $_GET['list'] : 'rate';
$sort_arr 	= $action_array[$sort];
$sortDB 	= $list_array[$sort_arr];

if ( iml_imageheader() != '' ) {
$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . iml_imageheader() . '</div>'; }
$catarray['letters'] 	 = iml_letters();
$catarray['toolbar'] 	 = iml_toolbar();
$xoopsTpl -> assign( 'catarray', $catarray );

$arr = array();
$result = $xoopsDB -> query( 'SELECT cid, title, pid FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE pid=0 ORDER BY ' . $xoopsModuleConfig['sortcats'] );

$e = 0;
while ( list( $cid, $ctitle ) = $xoopsDB -> fetchRow( $result ) ) {
    if ( true == iml_checkgroups( $cid ) ) {
        $query = 'SELECT lid, cid, title, hits, rating, votes FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0 AND (cid=' . intval($cid);
        $arr = $mytree -> getAllChildId( $cid );
        for( $i = 0;$i < count( $arr );$i++ ) {
            $query .= ' or cid=' . $arr[$i] . '';
        }
        $query .= ') ORDER BY ' . $sortDB . ' DESC';
        $result2 = $xoopsDB -> query( $query, 10, 0 );
        $filecount = $xoopsDB -> getRowsNum( $result2 );
		
		

        if ( $filecount > 0 ) {
            $rankings[$e]['title'] = $immyts -> htmlSpecialCharsStrip( $ctitle );
            $rank = 1;
            while ( list( $did, $dcid, $dtitle, $hits, $rating, $votes ) = $xoopsDB -> fetchRow( $result2 ) ) {
				
				$result3 = $xoopsDB -> query( 'SELECT title FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $dcid );
				$mycat = $xoopsDB -> fetchArray( $result3 );
				
                $category = $mycat['title'];
                $dtitle = $immyts -> htmlSpecialCharsStrip( $dtitle );
                $rankings[$e]['file'][] = array( 'id' => $did, 'cid' => $dcid, 'rank' => $rank, 'title' => $dtitle, 'category' => $category, 'hits' => $hits, 'rating' => number_format( $rating, 2 ), 'votes' => $votes );
                $rank++;
            }
            $e++;
        }
    }
}

$style = 'style="padding-right: 0.5em; padding-left: 0.5em; padding-bottom: 3px; padding-top: 2px; background-image: url(' . ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/backgnd.png); background-position: center center; background-repeat: repeat-x; color: #444; font-size: smaller; font-weight: bold; cursor: pointer; border: outset 1px #ccc;"';

$xoopsTpl -> assign( 'back' , '<a ' . $style . ' href="javascript:history.go(-1)">&#9668; ' . _MD_IMLINKS_BACKBUTTON . '</a>' );
$xoopsTpl -> assign( 'lang_sortby' , $lang_array[$sort_arr] );
$xoopsTpl -> assign( 'rankings', $rankings );
$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );

include ICMS_ROOT_PATH . '/footer.php';

?>