<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: brokenlink.php
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
$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$imlinks_broken_handler = icms_getModuleHandler( 'broken', basename( dirname( dirname( __FILE__ ) ) ), 'imlinks' );

switch ( strtolower( $op ) ) {
	case 'updatenotice':
		$ack = iml_cleanRequestVars( $_REQUEST, 'ack', 0 );
		$con = iml_cleanRequestVars( $_REQUEST, 'con', 1 );
		$update_message = '';

		if ( $ack && !$con ) {
			$acknowledged = ( $ack == 0 ) ? 1 : 0;
			$sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' SET acknowledged=' . $acknowledged;
			if ( $acknowledged == 0 ) {
				$sql .= ', confirmed=0';
			}
			$sql .= ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
			$update_message = _AM_IMLINKS_BROKEN_NOWACK;
		}

		if ( $con ) {
			$confirmed = ( $con == 0 ) ? 1 : 0;
			$sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' SET confirmed=' . $confirmed;
			if ( $confirmed == 1 ) {
				$sql .= ', acknowledged=' . $confirmed;
			}
			$sql .= ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
			$update_message = _AM_IMLINKS_BROKEN_NOWCON;
		} elseif ( !$con ) {
			$confirmed = ( $con == 0 ) ? 1 : 0;
			$sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' SET confirmed=' . $confirmed;
			if ( $confirmed == 1 ) {
				$sql .= ', acknowledged=' . $confirmed;
			}
			$sql .= ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
			$update_message = _AM_IMLINKS_BROKEN_NOWCON;
		} 
		redirect_header( 'brokenlink.php?op=default', 1, $update_message );
		break;

	case 'delbrokenlinks':
		xoops_comment_delete( icms::$module -> getVar( 'mid' ), $lid ); // delete comments

		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid );	// delete broken link entry
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' WHERE lid=' . $lid );	// delete alt categories
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . ' WHERE id=' . $lid );	// delete ratings
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid );	// delete link

		redirect_header( 'brokenlink.php?op=default', 1, _AM_IMLINKS_BROKENFILEDELETED );
		exit();
		break;

	case 'ignorebrokenlinks':
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid );
		redirect_header( 'brokenlink.php?op=default', 1, _AM_IMLINKS_BROKEN_FILEIGNORED );
		break;
		
	case 'changeacknowledged':
		$status = $ret = '';
		$reportid = isset( $_POST['reportid'] ) ? intval( $_POST['reportid'] ) : intval( $_GET['reportid'] );
		$status = $imlinks_broken_handler -> changeAckStatus( $reportid, 'acknowledged' );
		$ret = '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/brokenlink.php';
		redirect_header( ICMS_URL . $ret, 2, _AM_IMLINKS_BROKEN_NOWACK );
		break;
		
	case 'changeconfirmed':
		$status = $ret = '';
		$reportid = isset( $_POST['reportid'] ) ? intval( $_POST['reportid'] ) : intval( $_GET['reportid'] );
		$status = $imlinks_broken_handler -> changeAckStatus( $reportid, 'confirmed' );
		$ret = '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/brokenlink.php';
		redirect_header( ICMS_URL . $ret, 2, _AM_IMLINKS_BROKEN_NOWCON );
		break;

	default:
		$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' ORDER BY reportid' );
		$totalbrokenlinks = icms::$xoopsDB -> getRowsNum( $result );

		icms_cp_header();
		iml_adminmenu( '', _AM_IMLINKS_BROKEN_FILE );
		echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
				<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_BROKEN_REPORTINFO . '</div>
				<div style="padding: 8px;">' . _AM_IMLINKS_BROKEN_REPORTSNO . '&nbsp;<b>' . $totalbrokenlinks . '</b><div><br />
				<div style="padding-left: 10px;">
					' . $imagearray['ignore'] . '&nbsp;&nbsp;' . _AM_IMLINKS_BROKEN_IGNOREDESC . '<br />
					' . $imagearray['editimg'] . '&nbsp;&nbsp;' . _AM_IMLINKS_BROKEN_EDITDESC . '<br />
					' . $imagearray['deleteimg'] . '&nbsp;&nbsp;' . _AM_IMLINKS_BROKEN_DELETEDESC . '</div>
			</div></div></div><br />';
		$icmsAdminTpl -> assign( 'icms_module_header', '<link rel="stylesheet" type="text/css" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/style.css" />' );
		
		if ( icms::$module -> config['ipftables'] == 1 ) {

			$objectTable = new icms_ipf_view_Table( $imlinks_broken_handler, false, array() );

			$objectTable -> addColumn( new icms_ipf_view_Column( 'reportid', 'center', 40, true ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'title', _GLOBAL_LEFT, false, 'ViewLink' ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'sender', 'center', false ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'acknowledged', 'center', false, 'Acknowledge' ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'confirmed', 'center', false, 'Confirmed' ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'date', 'center' ) );
			
			$objectTable -> addCustomAction( 'getIgnoreBroken' );
			$objectTable -> addCustomAction( 'getEditBroken' );
			$objectTable -> addCustomAction( 'getDeleteBroken' );
		
			$objectTable -> addQuickSearch( array( 'title' ), _AM_IMLINKS_SEARCHTITLE );
		
			$objectTable -> setDefaultSort( 'reportid' );
			$objectTable -> setDefaultOrder( 'DESC' );

			$icmsAdminTpl -> assign( 'imlinks_broken_table', $objectTable -> fetch() );
			$icmsAdminTpl -> display( 'db:imlinks_admin_index.html' );
		
		} else {

			if ( $totalbrokenlinks == 0 ) {
				echo '<div style="border: 1px solid #ccc; text-align: center; margin: auto; width: 99%; font-weight: bold; padding: 3px; background-color: #FFFF99;">' . _AM_IMLINKS_BROKEN_NOFILEMATCH . '</div>';
			} else {
				echo '<div class="imlinks_table" style="font-size: 10px;">
						<div class="imlinks_tblhdrrow">
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_BROKEN_ID . '</div>
						<div class="imlinks_tblcell">' . _TITLE . '</div>
						<div class="imlinks_tblcell">' . _AM_IMLINKS_BROKEN_REPORTER . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_BROKEN_FILESUBMITTER . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_BROKEN_DATESUBMITTED . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_BROKEN_ACKNOWLEDGED . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_BROKEN_DCONFIRMED . '</div>
						<div class="imlinks_tblcell" style="text-align: center; white-space: nowrap;">' . _AM_IMLINKS_BROKEN_ACTION . '</div>
					</div>';
				while ( list( $reportid, $lid, $sender, $ip, $date, $confirmed, $acknowledged ) = icms::$xoopsDB -> fetchRow( $result ) ) {
					$result2 = icms::$xoopsDB -> query( 'SELECT cid, title, url, submitter, nice_url FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid );
					list( $cid, $linkshowname, $url, $submitter, $niceurl ) = icms::$xoopsDB -> fetchRow( $result2 );
					$email = '';
					$sendername = '';
					if ( $sender != 0 ) {
						$result3 = icms::$xoopsDB -> query( 'SELECT uid, email FROM ' . icms::$xoopsDB -> prefix( 'users' ) . ' WHERE uid=' . $sender );
						list( $sendername, $email ) = icms::$xoopsDB -> fetchRow( $result3 );
					}
					$result4 = icms::$xoopsDB -> query( 'SELECT uname, email FROM ' . icms::$xoopsDB -> prefix( 'users' ) . ' WHERE uid=' . $submitter );
					list( $ownername, $owneremail ) = icms::$xoopsDB -> fetchRow( $result4 );

					$ack_image = ( $acknowledged ) ? $imagearray['ack_yes'] : $imagearray['ack_no'];
					$con_image = ( $confirmed ) ? $imagearray['con_yes'] : $imagearray['con_no'];

					if ( $ownername == '' ) { $ownername = '&nbsp;'; }

					echo '<div class="imlinks_tblrow">';
					echo '<div class="imlinks_tblhdrcell" style="text-align: center;">' . $lid . '</div>';

					$nice_link = iml_nicelink( $linkshowname, $niceurl );
					if ( icms::$module -> config['niceurl'] ) {
						echo '<div class="imlinks_tblcell"><a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid . '&amp;page=' . $nice_link . '" target="_blank">' . $linkshowname . '</a></div>';
					} else {
						echo '<div class="imlinks_tblcell"><a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid . '" target="_blank">' . $linkshowname . '</a></div>';
					}

					if ( $email == '' ) {
						echo '<div class="imlinks_tblcell">' . icms_member_user_Handler::getUserLink( $sender ) . ' (' . $ip . ')</div>';
					} else {
						echo '<div class="imlinks_tblcell"><a href="mailto:' . $email . '">' . icms_member_user_Handler::getUserLink( $sender ). '</a> (' . $ip . ')</div>';
					}
					if ( $owneremail == '' ) {
						echo '<div class="imlinks_tblcell">' . $ownername . '</div>';
					} else {
						echo '<div class="imlinks_tblcell" style="text-align: center;"><a href="mailto:' . $owneremail . '">' . $ownername . '</a></div>';
					}
					echo '<div class="imlinks_tblcell" style="text-align: center;">' . formatTimestamp( $date, icms::$module -> config['dateformatadmin'] ) . '</div>
						<div class="imlinks_tblcell" style="text-align: center;"><a href="brokenlink.php?op=updateNotice&amp;lid=' . $lid . '&ack=' . intval( $acknowledged ) . '">' . $ack_image . ' </a></div>
						<div class="imlinks_tblcell" style="text-align: center;"><a href="brokenlink.php?op=updateNotice&amp;lid=' . $lid . '&con=' . intval( $confirmed ) . '">' . $con_image . '</a></div>
						<div class="imlinks_tblcell" style="text-align: center; width: 70px;">
							<a href="brokenlink.php?op=ignoreBrokenlinks&amp;lid=' . $lid . '">' . $imagearray['ignore'] . '</a>
							<a style="padding-left: 5px;" href="index.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . '</a>
							<a style="padding-left: 5px;" href="brokenlink.php?op=delBrokenlinks&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>
						</div></div>';
				}
				echo '</div>';
			}
		}
}
icms_cp_footer();
?>