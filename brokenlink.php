<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: brokenlink.php
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

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
$lid = intval( $lid );
 
switch ( strtolower( $op ) ) {
    case 'submit':
        global $xoopsUser;

        $sender = ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) ? $xoopsUser -> getVar( 'uid' ) : 0;
        $ip = getenv( "REMOTE_ADDR" );
        $title = iml_cleanRequestVars( $_REQUEST, 'title', '' );
        $title = $immyts -> addslashes( $title );
        $time = time();

// Check if REG user is trying to report twice.
        $result = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_broken' ) . " WHERE lid=" . intval($lid) );
        list ( $count ) = $xoopsDB -> fetchRow( $result );
        if ( $count > 0 ) {
            redirect_header( 'index.php', 2, _MD_IMLINKS_ALREADYREPORTED );
            exit();
        } else {
            $reportid = 0;
            $sql = sprintf( "INSERT INTO %s (reportid, lid, sender, ip, date, confirmed, acknowledged, title ) VALUES ( %u, %u, %u, %s, %u, %u, %u, %s)", $xoopsDB -> prefix( 'imlinks_broken' ), $reportid, $lid, $sender, $xoopsDB -> quoteString( $ip ), $time, 0, 0, $xoopsDB -> quoteString( $title ) );
            if ( ! $result = $xoopsDB -> query( $sql ) ) {
                $error[] = _MD_IMLINKS_ERROR;
            } 
            $newid = $xoopsDB -> getInsertId();

// Send notifications
            $tags = array();
            $tags['BROKENREPORTS_URL'] = ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=listBrokenlinks';
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'link_broken', $tags );

// Send email to the owner of the linkload stating that it is broken
            $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . intval($lid) . " AND published > 0 AND published <= " . time() . " AND (expired = 0 OR expired > " . time() . ")";
            $link_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
            unset( $sql );

            $member_handler = &xoops_gethandler( 'member' );
            $submit_user = &$member_handler -> getUser( $link_arr['submitter'] );
            if ( is_object( $submit_user ) && !empty( $submit_user ) ) {
                $subdate = formatTimestamp( $link_arr['date'], $xoopsModuleConfig['dateformat'] );
                $cid = $link_arr['cid'];
                $title = $immyts -> htmlSpecialCharsStrip( $link_arr['title'] );
                $subject = _MD_IMLINKS_BROKENREPORTED;

                $xoopsMailer = &getMailer();
                $xoopsMailer -> useMail();
                $template_dir = ICMS_ROOT_PATH . '/modules/' . $mydirname . '/language/' . $xoopsConfig['language'] . '/mail_template';

                $xoopsMailer -> setTemplateDir( $template_dir );
                $xoopsMailer -> setTemplate( 'linkbroken_notify.tpl' );
                $xoopsMailer -> setToEmails( $submit_user -> getVar( 'email' ) );
                $xoopsMailer -> setFromEmail( $xoopsConfig['adminmail'] );
                $xoopsMailer -> setFromName( $xoopsConfig['sitename'] );
                $xoopsMailer -> assign( "X_UNAME", $submit_user -> getVar( 'uname' ) );
                $xoopsMailer -> assign( "SITENAME", $xoopsConfig['sitename'] );
                $xoopsMailer -> assign( "X_ADMINMAIL", $xoopsConfig['adminmail'] );
                $xoopsMailer -> assign( 'X_SITEURL', ICMS_URL . '/' );
                $xoopsMailer -> assign( "X_TITLE", $title );
                $xoopsMailer -> assign( "X_SUB_DATE", $subdate );
                $xoopsMailer -> assign( 'X_LINKLOAD', ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid) );
                $xoopsMailer -> setSubject( $subject );
                $message = ( $xoopsMailer -> send() ) ? _MD_IMLINKS_BROKENREPORTED : _MD_IMLINKS_ERRORSENDEMAIL;
            } else {
                $message = _MD_IMLINKS_ERRORSENDEMAIL;
            } 
            redirect_header( 'index.php', 2, $message );
        } 
        break;

    default:

        $xoopsOption['template_main'] = 'imlinks_brokenlink.html';
        include ICMS_ROOT_PATH . '/header.php';
        
        $catarray['imageheader'] = iml_imageheader();
        $catarray['letters'] = iml_letters();
        $catarray['toolbar'] = iml_toolbar();
        $xoopsTpl -> assign( 'catarray', $catarray );

        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . intval( $lid );
        $link_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
        unset( $sql );

        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_broken' ) . " WHERE lid=" . intval( $lid );
        $broke_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

        if ( is_array( $broke_arr ) ) {
            $broken['title'] = $immyts -> htmlSpecialCharsStrip( $link_arr['title'] );
            $broken['id'] = $broke_arr['reportid'];
            $broken['reporter'] = xoops_getLinkedUnameFromId( $broke_arr['sender'] );
            $broken['date'] = formatTimestamp( $broke_arr['date'], $xoopsModuleConfig['dateformat'] );
            $broken['acknowledged'] = ( $broke_arr['acknowledged'] == 1 ) ? _YES : _NO ;
            $broken['confirmed'] = ( $broke_arr['confirmed'] == 1 ) ? _YES : _NO ;
            $xoopsTpl -> assign( 'broken', $broken );
            $xoopsTpl -> assign( 'brokenreport', true );
        } else {
            if ( !is_array( $link_arr ) || empty( $link_arr ) ) {
                redirect_header( 'index.php', 0 , _MD_IMLINKS_THISFILEDOESNOTEXIST );
                exit();
            } 

// file info
            $link['title'] = $immyts -> htmlSpecialCharsStrip( $link_arr['title'] );
            $time = ( $link_arr['published'] > 0 ) ? $link_arr['published'] : $link_arr['updated'];
            $link['updated'] = formatTimestamp( $time, $xoopsModuleConfig['dateformat'] );
            $is_updated = ( $link_arr['updated'] != 0 ) ? _MD_IMLINKS_UPDATEDON : _MD_IMLINKS_SUBMITDATE;
            $link['publisher'] = xoops_getLinkedUnameFromId( $link_arr['submitter'] );

            $xoopsTpl -> assign( 'link_id', intval( $lid ) );
            $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
            $xoopsTpl -> assign( 'link', $link );
        } 
	
        imlinks_noindexnofollow();
        $xoopsTpl -> assign( 'module_dir', $mydirname );
        include ICMS_ROOT_PATH . '/footer.php';
        break;
} // switch
?>