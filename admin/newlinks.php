<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: newlinks.php
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

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', '' );
$requestid = iml_cleanRequestVars( $_REQUEST, 'requestid', 0 );

switch ( strtolower( $op ) ) {
    case 'approve':

        global $xoopsModule;
        $sql = "SELECT cid, title, notifypub FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . $lid;
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $cid, $title, $notifypub ) = $xoopsDB -> fetchRow( $result );

         // Update the database
        $time = time();
        $publisher = $xoopsUser -> getVar( 'uname' );
        $xoopsDB -> queryF( "UPDATE " . $xoopsDB -> prefix( 'imlinks_links' ) . " SET published='$time.', status='1', publisher='$publisher' WHERE lid=" . $lid );

        $tags = array();
        $tags['LINK_NAME'] = $title;
        $tags['LINK_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $lid;

        $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_cat' ) . " WHERE cid=" . $cid;
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        } else {
            $row = $xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
            if ( intval($notifypub) == 1 ) {
                $notification_handler -> triggerEvent( 'link', $lid, 'approve', $tags );
            } 
        } 
        redirect_header( 'newlinks.php', 1, _AM_IMLINKS_SUB_NEWFILECREATED );
        break;

    case 'main':
    default:

        global $xoopsModuleConfig;

        $start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published = 0 ORDER BY lid DESC" ;
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        $new_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
        $new_array_count = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );

        xoops_cp_header();
        iml_adminmenu( '', _AM_IMLINKS_SUB_SUBMITTEDFILES );

        echo "<fieldset style='border: #e8e8e8 1px solid;'><legend style='display: inline; font-weight: bold; color: #0A3760;'>" . _AM_IMLINKS_SUB_FILESWAITINGINFO . "</legend>\n";
        echo "<div style='padding: 8px;'>" . _AM_IMLINKS_SUB_FILESWAITINGVALIDATION . "&nbsp;<b>$new_array_count</b><div>\n";
        echo "<div div style='padding: 8px;'>\n";
        echo "<li>" . $imagearray['approve'] . " " . _AM_IMLINKS_SUB_APPROVEWAITINGFILE . "\n";
        echo "<li>" . $imagearray['editimg'] . " " . _AM_IMLINKS_SUB_EDITWAITINGFILE . "\n";
        echo "<li>" . $imagearray['deleteimg'] . " " . _AM_IMLINKS_SUB_DELETEWAITINGFILE . "</div>\n";
        echo "</fieldset>\n";

        echo "<table width='100%' cellspacing='1' class='outer'>\n";
        echo "<tr style='text-align: center;'>\n";
        echo "<th width='3%'>" . _AM_IMLINKS_MINDEX_ID . "</th>\n";
        echo "<th style='text-align: left;' width='30%'>" . _AM_IMLINKS_MINDEX_TITLE . "</th>\n";
        echo "<th width='15%'>" . _AM_IMLINKS_MINDEX_POSTER . "</th>\n";
        echo "<th width='15%'>" . _AM_IMLINKS_MINDEX_SUBMITTED . "</th>\n";
        echo "<th width='7%'>" . _AM_IMLINKS_MINDEX_ACTION . "</th>\n";
        echo "</tr>\n";
        if ( $new_array_count > 0 ) {
            while ( $new = $xoopsDB -> fetchArray( $new_array ) ) {
                $lid = intval( $new['lid'] );
                $rating = number_format( $new['rating'], 2 );
                $title = $immyts -> htmlSpecialCharsStrip( $new['title'] );
                $url = urldecode( $immyts -> htmlSpecialCharsStrip( $new['url'] ) );
                $logourl = $immyts -> htmlSpecialCharsStrip( $new['screenshot'] );
                $submitter = icms_getLinkedUnameFromId( $new['submitter'] );
                $datetime = formatTimestamp( $new['date'], $xoopsModuleConfig['dateformatadmin'] );

                $icon = ( $new['published'] ) ? $approved : "<a href='newlinks.php?op=approve&amp;lid=" . $lid . "'>" . $imagearray['approve'] . "</a>&nbsp;";
                $icon .= "<a href='index.php?op=edit&amp;lid=" . $lid . "'>" . $imagearray['editimg'] . "</a>&nbsp;";
                $icon .= "<a href='index.php?op=delete&amp;lid=" . $lid . "'>" . $imagearray['deleteimg'] . "</a>";

                echo "<tr>\n";
                echo "<td class='head' style='text-align: center;'>$lid</td>\n";
                echo "<td class='even' nowrap><a href='newlinks.php?op=edit&amp;lid=" . $lid . "'>$title</a></td>\n";
                echo "<td class='even' style='text-align: center;' nowrap>$submitter</td>\n";
                echo "<td class='even' style='text-align: center;'>$datetime</td>\n";
                echo "<td class='even' style='text-align: center;' nowrap>$icon</td>\n";
                echo "</tr>\n";
            } 
        } else {
            echo "<tr><td style='text-align: center;' class='head' colspan='6'>" . _AM_IMLINKS_SUB_NOFILESWAITING . "</td></tr>";
        } 
        echo "</table>\n";

        include_once ICMS_ROOT_PATH . '/class/pagenav.php';
//        $page = ( $new_array_count > $xoopsModuleConfig['admin_perpage'] ) ? _AM_IMLINKS_MINDEX_PAGE : '';
        $pagenav = new XoopsPageNav( $new_array_count, $xoopsModuleConfig['admin_perpage'], $start, 'start' );
        echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
        xoops_cp_footer();
        break;
} 

?>