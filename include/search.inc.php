<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: search.inc.php
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

function imlinks_checkSearchgroups( $cid = 0, $permType = 'imLinkCatPerm', $redirect = false ) {

	$mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = icms::handler('icms_member_groupperm');

    $module_handler = icms::handler( 'icms_module' );
    $module = &$module_handler -> getByDirname( $mydirname );

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

function imlinks_search( $queryarray, $andor, $limit, $offset, $userid ) {
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );
	include_once ICMS_ROOT_PATH . '/modules/'. $mydirname . '/include/functions.php';
	$modhandler = icms::handler( 'icms_module' );
    $imlModule = &$modhandler -> getByDirname( $mydirname );
    $config_handler = icms::$config;
    $imlModuleConfig = &$config_handler -> getConfigsByCat( 0, $imlModule -> getVar( 'mid' ) );

    $sql = 'SELECT cid, pid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' );
    $result = icms::$xoopsDB -> query( $sql );
    while ( $_search_group_check = icms::$xoopsDB -> fetchArray( $result ) ) {
        $_search_check_array[$_search_group_check['cid']] = $_search_group_check;
    } 

    $sql  = 'SELECT lid, cid, title, submitter, published, description, nice_url FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' );
    $sql .= ' WHERE published>0 AND published<=' . time() . ' AND ( expired=0 OR expired>' . time() . ') AND offline=0 AND cid>0';

    if ( $userid != 0 ) {
        $sql .= ' AND submitter=' . $userid . ' ';
    } 

    // because count() returns 1 even if a supplied variable
    // is not an array, we must check if $querryarray is really an array
    if ( is_array( $queryarray ) && $count = count( $queryarray ) )     {
        $sql .= " AND ((title LIKE LOWER('%$queryarray[0]%') OR LOWER(description) LIKE LOWER('%$queryarray[0]%'))";
        for( $i = 1;$i < $count;$i++ ) {
            $sql .= " $andor ";
            $sql .= "(title LIKE LOWER('%$queryarray[$i]%') OR LOWER(description) LIKE LOWER('%$queryarray[$i]%'))";
        } 
        $sql .= ') ';
    } 
    $sql .= 'ORDER BY title ASC';
    $result = icms::$xoopsDB -> query( $sql, $limit, $offset );
    $ret = array();
    $i = 0;

    while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
        if ( false == imlinks_checkSearchgroups( $myrow['cid'] ) ) {
            continue;
        } 	
		$nice_link = iml_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $imlModuleConfig['niceurl'] ) {
			$ret[$i]['link'] = 'singlelink.php?lid=' . intval( $myrow['lid'] ) . '&amp;page=' . $nice_link;
		} else {
			$ret[$i]['link'] = 'singlelink.php?lid=' . intval( $myrow['lid'] );
		}
        $ret[$i]['image'] = 'images/imlinks_search.png';
        $ret[$i]['title'] = $myrow['title'];
        $ret[$i]['time'] = $myrow['published'];
        $ret[$i]['uid'] = $myrow['submitter'];
        $i++;
    } 
    unset( $_search_check_array );
    return $ret;
} 
?>