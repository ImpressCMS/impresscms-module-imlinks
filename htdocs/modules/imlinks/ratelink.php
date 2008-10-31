<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: ratelink.php
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

global $immyts, $xoTheme;

// Check if linkload POSTER is voting (UNLESS Anonymous users allowed to post)
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
$lid = intval( $lid );

$ip = getenv( "REMOTE_ADDR" );
$ratinguser = ( !is_object( $xoopsUser ) ) ? 0 : $xoopsUser -> getVar( 'uid' );

if ( $ratinguser != 0 ) {
    $result = $xoopsDB -> query( "SELECT cid, submitter FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . intval( $lid ) );
    while ( list( $cid, $ratinguserDB ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( $ratinguserDB == $ratinguser ) {
            $ratemessage = _MD_IMLINKS_CANTVOTEOWN;
            redirect_header( 'singlelink.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, $ratemessage );
            exit();
        } 
    } 
    // Check if REG user is trying to vote twice.
    $result = $xoopsDB -> query( "SELECT cid, ratinguser FROM " . $xoopsDB -> prefix( 'imlinks_votedata' ) . " WHERE lid=" . intval($lid) );
    while ( list( $cid, $ratinguserDB ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( $ratinguserDB == $ratinguser ) {
            $ratemessage = _MD_IMLINKS_VOTEONCE;
            redirect_header( 'singlelink.php?cid=' . intval( $cid ) . '&amp;lid=' . intval( $lid ), 4, $ratemessage );
            exit();
        } 
    } 
} else {
    // Check if ANONYMOUS user is trying to vote more than once per day.
    $yesterday = ( time() - ( 86400 * $anonwaitdays ) );
    $result = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_votedata' ) . " WHERE lid=" . intval( $lid ) . " AND ratinguser=0 AND ratinghostname=" . $ip . "  AND ratingtimestamp > " . $yesterday );
    list( $anonvotecount ) = $xoopsDB -> fetchRow( $result );
    if ( $anonvotecount >= 1 ) {
        redirect_header( 'singlelink.php?cid=' . intval( $cid ) . '&amp;lid=' . intval( $lid ), 4, _MD_IMLINKS_VOTEONCE );
        exit();
    }
}

if ( !empty( $_POST['submit'] ) ) {
    $ratinguser = ( !is_object( $xoopsUser ) ) ? 0 : $xoopsUser -> getVar( 'uid' );
    // Make sure only 1 anonymous from an IP in a single day.
    $anonwaitdays = 1;
    $ip = getenv( "REMOTE_ADDR" );
    $lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
    $cid = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );
    $rating = iml_cleanRequestVars( $_REQUEST, 'rating', 0 );
    $title = $immyts -> addslashes( trim( $_POST['title'] ) );
    $lid = intval( $lid );
    $cid = intval( $cid );
    $rating = intval( $rating );
    // Check if Rating is Null
    if ( $rating == "--" ) {
        redirect_header( 'ratelink.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 4, _MD_IMLINKS_NORATING );
        exit();
    }
    // All is well.  Add to Line Item Rate to DB.
    $newid = $xoopsDB -> genId( $xoopsDB -> prefix( 'imlinks_votedata' ) . "_ratingid_seq" );
    $datetime = time();
    $sql = sprintf( "INSERT INTO %s (ratingid, lid, ratinguser, rating, ratinghostname, ratingtimestamp, title) VALUES (%u, %u, %u, %u, %s, %u, %s)", $xoopsDB -> prefix( 'imlinks_votedata' ), $newid, intval( $lid ), $ratinguser, $rating, $xoopsDB -> quoteString( $ip ), $datetime, $xoopsDB -> quoteString( $title ) );
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        $ratemessage = _MD_IMLINKS_ERROR;
    } else {
        // All is well.  Calculate Score & Add to Summary (for quick retrieval & sorting) to DB.
        iml_updaterating( $lid );
        $ratemessage = _MD_IMLINKS_VOTEAPPRE . "<br />" . sprintf( _MD_IMLINKS_THANKYOU, $xoopsConfig['sitename'] );
    }
    redirect_header( 'singlelink.php?cid=' . intval( $cid ) . '&amp;lid=' . intval( $lid ), 4, $ratemessage );
    exit();
} else {
    $xoopsOption['template_main'] = 'imlinks_ratelink.html';
    include ICMS_ROOT_PATH . '/header.php';

    $catarray['imageheader'] = iml_imageheader();
    $cid = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );
    $cid = intval($cid);

    $catarray['imageheader'] = iml_imageheader();
    $catarray['letters'] = iml_letters();
    $catarray['toolbar'] = iml_toolbar();
    $xoopsTpl -> assign( 'catarray', $catarray );

    $result = $xoopsDB -> query( "SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . intval($lid) );
    list( $title ) = $xoopsDB -> fetchRow( $result );
    $xoopsTpl -> assign( 'link', array( 'id' => intval( $lid ), 'cid' => intval( $cid ), 'title' => $immyts -> htmlSpecialCharsStrip( $title ) ) );

    if ( is_object($xoTheme) ) {
      $xoTheme -> addMeta( 'meta', 'robots', 'noindex,nofollow' );
    } else {
      $xoopsTpl -> assign( 'xoops_meta_robots', 'noindex,nofollow' );
    }

	$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
    include ICMS_ROOT_PATH . '/footer.php';
}

if ( is_object($xoTheme) ) {
    $xoTheme -> addMeta( 'meta', 'robots', 'noindex,nofollow' );
} else {
    $xoopsTpl -> assign( 'xoops_meta_robots', 'noindex,nofollow' );
}

$xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
include ICMS_ROOT_PATH . '/footer.php';
?>