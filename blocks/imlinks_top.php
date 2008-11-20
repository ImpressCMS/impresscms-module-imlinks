<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: wflinks_top.php
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

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' );
}

// checkBlockgroups()
//
// @param integer $cid
// @param string $permType
// @param boolean $redirect
// @return
function checkBlockgroups( $cid = 0, $permType = 'imLinkCatPerm', $redirect = false ) {
    $mydirname = basename( dirname(  dirname( __FILE__ ) ) );
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );

    $module_handler = &xoops_gethandler( 'module' );
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

// Function: b_mylinks_top_show
// Input   : $options[0] = date for the most recent links
// 		           hits for the most popular links
//           $options[1] = How many links are displayes
//           $options[2] = Length of title
//           $options[3] = Date format
//           $block['content'] = The optional above content
// Output  : Returns the most recent or most popular links
function b_imlinks_top_show( $options ) {
    $mydirname = basename( dirname(  dirname( __FILE__ ) ) );
    global $xoopsDB;

    $block = array();
    $time = time();
    $modhandler = &xoops_gethandler( 'module' );
    $imlModule = &$modhandler -> getByDirname( $mydirname );
    $config_handler = &xoops_gethandler( 'config' );
    $imlModuleConfig = &$config_handler -> getConfigsByCat( 0, $imlModule -> getVar( 'mid' ) );
    $immyts = &MyTextSanitizer :: getInstance();

    $result = $xoopsDB -> query( "SELECT lid, cid, title, published, hits FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published > 0 AND published <= " . $time . " AND (expired = 0 OR expired > " . $time . ") AND offline = 0 ORDER BY " . $options[0] . " DESC", $options[1], 0 );
    while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
        if ( false == checkBlockgroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        } 
        $linkload = array();
        $title = $immyts -> htmlSpecialChars( $immyts -> stripSlashesGPC( $myrow["title"] ) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . "...";
            } 
        } 
        $linkload['id'] = intval( $myrow['lid'] );
        $linkload['cid'] = intval( $myrow['cid'] );
        $linkload['title'] = $title;
        if ( $options[0] == "published" ) {
            $linkload['date'] = formatTimestamp( $myrow['published'], $options[3] );
        } elseif ( $options[0] == "hits" ) {
            $linkload['hits'] = $myrow['hits'];
        } 
        $linkload['dirname'] = $imlModule -> getVar( 'dirname' );
        $block['links'][] = $linkload;
    } 
    unset( $_block_check_array );
    return $block;
} 

// b_wflinks_top_edit()
//
// @param $options
// @return
function b_imlinks_top_edit( $options ) {
    $form = "" . _MB_IMLINKS_DISP . "&nbsp;";
    $form .= "<input type='hidden' name='options[]' value='";
    if ( $options[0] == "published" ) {
        $form .= "published'";
    } else {
        $form .= "hits'";
    } 
    $form .= " />";
    $form .= "<input type='text' name='options[]' value='" . $options[1] . "' />&nbsp;" . _MB_IMLINKS_FILES . "";
    $form .= "&nbsp;<br />" . _MB_IMLINKS_CHARS . "&nbsp;<input type='text' name='options[]' value='" . $options[2] . "' />&nbsp;" . _MB_IMLINKS_LENGTH . "";
    $form .= "&nbsp;<br />" . _MB_IMLINKS_DATEFORMAT . "&nbsp;<input type='text' name='options[]' value='" . $options[3] . "' />&nbsp;" . _MB_IMLINKS_DATEFORMATMANUAL;
    return $form;
} 

?>
