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
$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', '' ) );

switch ( strtolower( $op ) ) {
    case 'approve':

        $sql = 'SELECT cid, title, notifypub FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $cid, $title, $notifypub ) = icms::$xoopsDB -> fetchRow( $result );

         // Update the database
        $time = time();
        $publisher = icms::$user -> getVar( 'uname' );
        $sql2 = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET published=" . $time . ", status='1', publisher='$publisher' WHERE lid=" . $lid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql2 ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        }
		
        $tags = array();
        $tags['LINK_NAME'] = $title;
        $tags['LINK_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid;

        $sql3 = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $cid;
        if ( !$result = icms::$xoopsDB -> query( $sql3 ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        } else {
            $row = icms::$xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = icms::handler('icms_data_notification');
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

	$start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
        $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published=0 ORDER BY lid DESC' ;
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        $new_array = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'], $start );
        $new_array_count = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );

        icms_cp_header();
        iml_adminmenu( '', _AM_IMLINKS_SUB_SUBMITTEDFILES );

        echo '<fieldset style="border: #E8E8E8 1px solid;">
			  <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_SUB_FILESWAITINGINFO . '</legend>';
        echo '<div style="padding: 8px;">' . _AM_IMLINKS_SUB_FILESWAITINGVALIDATION . '&nbsp;<b>' . $new_array_count . '</b><div>';
        echo '<div style="padding: 8px;">';
        echo $imagearray['approve'] . ' ' . _AM_IMLINKS_SUB_APPROVEWAITINGFILE . '<br />';
        echo $imagearray['editimg'] . ' ' . _AM_IMLINKS_SUB_EDITWAITINGFILE . '<br />';
        echo $imagearray['deleteimg'] . ' ' . _AM_IMLINKS_SUB_DELETEWAITINGFILE . '</div>';
        echo '</fieldset>';

        echo '<table width="100%" cellspacing="1" class="outer" style="font-size: smaller;">';
        echo '<tr style="text-align: center;">';
        echo '<th width="7%">' . _AM_IMLINKS_MINDEX_ID . '</th>';
        echo '<th style="text-align: left;">' . _AM_IMLINKS_MINDEX_TITLE . '</th>';
        echo '<th>' . _AM_IMLINKS_MINDEX_POSTER . '</th>';
        echo '<th>' . _AM_IMLINKS_MINDEX_SUBMITTED . '</th>';
        echo '<th width="7%">' . _AM_IMLINKS_MINDEX_ACTION . '</th>';
        echo '</tr>';
        if ( $new_array_count > 0 ) {
            while ( $new = icms::$xoopsDB -> fetchArray( $new_array ) ) {
                $lid = intval( $new['lid'] );
                $rating = number_format( $new['rating'], 2 );
                $title = $immyts -> htmlSpecialCharsStrip( $new['title'] );
                $url = urldecode( $immyts -> htmlSpecialCharsStrip( $new['url'] ) );
                $logourl = $immyts -> htmlSpecialCharsStrip( $new['screenshot'] );
                $submitter = icms_member_user_Handler::getUserLink( $new['submitter'] );
                $datetime = formatTimestamp( $new['date'], icms::$module -> config['dateformatadmin'] );

                $icon = ( $new['published'] ) ? $approved : '<a href="newlinks.php?op=approve&amp;lid=' . $lid . '">' . $imagearray['approve'] . '</a>&nbsp;';
                $icon .= '<a href="index.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . '</a>&nbsp;';
                $icon .= '<a href="index.php?op=delete&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>';

                echo '<tr>';
                echo '<td class="head" style="text-align: center;">' . $lid . '</td>';
                echo '<td class="even" nowrap><a href="newlinks.php?op=edit&amp;lid=' . $lid . '">' . $title . '</a></td>';
                echo '<td class="even" style="text-align: center;" nowrap>'. $submitter . '</td>';
                echo '<td class="even" style="text-align: center;">' . $datetime . '</td>';
                echo '<td class="even" style="text-align: center; white-space: nowrap;">' . $icon . '</td>';
                echo '</tr>';
            } 
        } else {
            echo '<tr><td style="text-align: center;" class="head" colspan="6">' . _AM_IMLINKS_SUB_NOFILESWAITING . '</td></tr>';
        } 
        echo '</table>';

        include_once ICMS_ROOT_PATH . '/class/pagenav.php';
        $pagenav = new icms_view_PageNav( $new_array_count, icms::$module -> config['admin_perpage'], $start, 'start' );
        echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
        icms_cp_footer();
        break;
} 
?>