<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: newlinks.php
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
		$publisher = icms::$user -> getVar( 'uname' );
		$sql2 = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET published=" . time() . ", status='1', publisher='$publisher' WHERE lid=" . $lid;
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
			$notification_handler = icms::handler( 'icms_data_notification' );
			$notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
			$notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
			if ( $notifypub == 1 ) {
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

		echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
				<div style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_IMLINKS_SUB_FILESWAITINGINFO . '</div>
				<div style="padding: 8px;">' . _AM_IMLINKS_SUB_FILESWAITINGVALIDATION . '<b>' . $new_array_count . '</b></div>
				<div style="margin-left: 12px;">
					' . $imagearray['approve'] . '&nbsp;&nbsp;' . _AM_IMLINKS_SUB_APPROVEWAITINGFILE . '<br />
					' . $imagearray['editimg'] . '&nbsp;&nbsp;' . _AM_IMLINKS_SUB_EDITWAITINGFILE . '<br />
					' . $imagearray['deleteimg'] . '&nbsp;&nbsp;' . _AM_IMLINKS_SUB_DELETEWAITINGFILE . '</div>
				</div><br />';
		echo '<link rel="stylesheet" type="text/css" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/style.css" />';
		if ( $new_array_count > 0 ) {
			echo '<div class="imlinks_table" style="font-size: 10px;">
					<div class="imlinks_tblhdrrow">
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_ID . '</div>
						<div class="imlinks_tblcell">' . _AM_IMLINKS_MINDEX_TITLE . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_POSTER . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_SUBMITTED . '</div>
						<div class="imlinks_tblcell" style="text-align: center; width: 60px;">' . _AM_IMLINKS_MINDEX_ACTION . '</div>
					</div>';
			while ( $new = icms::$xoopsDB -> fetchArray( $new_array ) ) {
				$lid = intval( $new['lid'] );
				$rating = number_format( $new['rating'], 2 );
				$title = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $new['title'] ) );
				$url = urldecode( icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $new['url'] ) ) );
				$logourl = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $new['screenshot'] ) );
				$submitter = icms_member_user_Handler::getUserLink( $new['submitter'] );
				$datetime = formatTimestamp( $new['date'], icms::$module -> config['dateformatadmin'] );

				$icon = ( $new['published'] ) ? $approved : '<a href="newlinks.php?op=approve&amp;lid=' . $lid . '">' . $imagearray['approve'] . '</a>';
				$icon .= '<a style="padding-left: 5px;" href="links.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . '</a>';
				$icon .= '<a style="padding-left: 5px;" href="links.php?op=delete&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>';

				echo '<div class="imlinks_tblrow">
						<div class="imlinks_tblhdrcell" style="text-align: center;">' . $lid . '</div>
						<div class="imlinks_tblcell"><a href="newlinks.php?op=edit&amp;lid=' . $lid . '">' . $title . '</a></div>
						<div class="imlinks_tblcell" style="text-align: center;">'. $submitter . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . $datetime . '</div>
						<div class="imlinks_tblcell" style="text-align: center; width: 70px;">' . $icon . '</div>
					</div>';
			}
			echo '</div>';
		} else {
			echo '<div style="border: 1px solid #ccc; text-align: center; margin: auto; width: 99%; font-weight: bold; padding: 3px; background-color: #FFFF99;">' . _AM_IMLINKS_SUB_NOFILESWAITING . '</div>';
		}

		include_once ICMS_ROOT_PATH . '/class/pagenav.php';
		$pagenav = new icms_view_PageNav( $new_array_count, icms::$module -> config['admin_perpage'], $start, 'start' );
		echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
		icms_cp_footer();
		break;
}
?>