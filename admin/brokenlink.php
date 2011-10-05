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

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

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
	
		// Remove item_tag from Tag-module
		$sql2 = 'SELECT item_tag FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
		list( $item_tag ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );
        $tagupdate = iml_tagupdate( $lid, $item_tag );
		
		xoops_comment_delete( icms::$module -> getVar( 'mid' ), $lid ); // delete comments
		
        icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid ); // delete broken link entry
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' WHERE lid=' . $lid ); // delete alt categories
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . ' WHERE id=' . $lid ); // delete ratings
        icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid );  // delete link
		
        redirect_header( 'brokenlink.php?op=default', 1, _AM_IMLINKS_BROKENFILEDELETED );
        exit();
        break;

    case 'ignorebrokenlinks':
        icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid );
        redirect_header( 'brokenlink.php?op=default', 1, _AM_IMLINKS_BROKEN_FILEIGNORED );
        break;

    default:
        $result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' ORDER BY reportid' );
        $totalbrokenlinks = icms::$xoopsDB -> getRowsNum( $result );

        icms_cp_header();
        iml_adminmenu( '', _AM_IMLINKS_BROKEN_FILE );
        echo '
		<fieldset style="border: #E8E8E8 1px solid;">
			<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_BROKEN_REPORTINFO . '</legend>
			<div style="padding: 8px;">' . _AM_IMLINKS_BROKEN_REPORTSNO . '&nbsp;<b>' . $totalbrokenlinks . '</b><div>
			<div style="padding-left: 8px; line-height: 120%;"><br />
				' . $imagearray['ignore'] . '&nbsp;&nbsp;' . _AM_IMLINKS_BROKEN_IGNOREDESC . '<br />
				' . $imagearray['editimg'] . '&nbsp;&nbsp;' . _AM_IMLINKS_BROKEN_EDITDESC . '<br />
				' . $imagearray['deleteimg'] . '&nbsp;&nbsp;' . _AM_IMLINKS_BROKEN_DELETEDESC . '
				</ul>
			</div>
		</fieldset>

		<table width="100%" border="0" cellspacing="1" cellpadding="2" class="outer" style="font-size: smaller;">
			<tr style="text-align: center;">
				<th width="7%" style="text-align: center;">' . _AM_IMLINKS_BROKEN_ID . '</th>
				<th style="text-align: left;">' . _TITLE . '</th>
				<th>' . _AM_IMLINKS_BROKEN_REPORTER . '</th>
				<th>' . _AM_IMLINKS_BROKEN_FILESUBMITTER . '</th>
				<th>' . _AM_IMLINKS_BROKEN_DATESUBMITTED . '</th>
				<th>' . _AM_IMLINKS_BROKEN_ACKNOWLEDGED . '</th>
				<th>' . _AM_IMLINKS_BROKEN_DCONFIRMED . '</th>		
				<th style="text-align: center; width: 7%; white-space: nowrap;">' . _AM_IMLINKS_BROKEN_ACTION . '</th>
			</tr>';

        if ( $totalbrokenlinks == 0 ) {
            echo '<tr style="text-align: center;"><td style="text-align: center;" class="head" colspan="8">' . _AM_IMLINKS_BROKEN_NOFILEMATCH . '</td></tr>';
        } else {
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

                echo '<tr style="text-align: center;">';
                echo '<td class="head">' . $lid . '</td>';
				
				$nice_link = iml_nicelink( $linkshowname, $niceurl );
				if ( icms::$module -> config['niceurl'] ) {
                echo '<td class="even" style="text-align: left;"><a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid . '&amp;page=' . $nice_link . '" target="_blank">' . $linkshowname . '</a></td>';
				} else {
				echo '<td class="even" style="text-align: left;"><a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . $lid . '" target="_blank">' . $linkshowname . '</a></td>';
				}

                if ( $email == '' ) {
                    echo '<td class="even">' . icms_member_user_Handler::getUserLink( $sender ) . ' (' . $ip . ')</td>';
                } else {
                    echo '<td class="even"><a href="mailto:' . $email . '">' . icms_member_user_Handler::getUserLink( $sender ). '</a> (' . $ip . ')</td>';
                } 
                if ( $owneremail == '' ) {
                    echo '<td class="even">' . $ownername . '</td>';
                } else {
                    echo '<td class="even"><a href="mailto:' . $owneremail . '">' . $ownername . '</a></td>';
                } 
                echo '<td class="even" style="text-align: center;">' . formatTimestamp( $date, icms::$module -> config['dateformatadmin'] ) . '</td>';
                echo '<td class="even"><a href="brokenlink.php?op=updateNotice&amp;lid=' . $lid . '&ack=' . intval( $acknowledged ) . '">' . $ack_image . ' </a></td>';
                echo '<td class="even"><a href="brokenlink.php?op=updateNotice&amp;lid=' . $lid . '&con=' . intval( $confirmed ) . '">' . $con_image . '</a></td>';
                echo '<td class="even" style="text-align: center;" nowrap>';
                echo '<a href="brokenlink.php?op=ignoreBrokenlinks&amp;lid=' . $lid . '">' . $imagearray['ignore'] . '</a>&nbsp;';
                echo '<a href="index.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . '</a>&nbsp;';
                echo '<a href="brokenlink.php?op=delBrokenlinks&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>&nbsp;';
                echo '</td></tr>';
            } 
        } 
        echo '</table>';
} 
icms_cp_footer();
?>