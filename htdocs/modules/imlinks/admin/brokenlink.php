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

global $imagearray, $xoopsModule;

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );

switch ( strtolower( $op ) ) {
    case 'updatenotice':
        $ack = iml_cleanRequestVars( $_REQUEST, 'ack', 0 );
        $con = iml_cleanRequestVars( $_REQUEST, 'con', 1 );

        if ( $ack && !$con ) {
            $acknowledged = ( $ack == 0 ) ? 1 : 0;
            $sql = "UPDATE " . $xoopsDB -> prefix( 'imlinks_broken' ) . " SET acknowledged=" . $acknowledged;
            if ( $acknowledged == 0 ) {
                $sql .= ", confirmed=0 ";
            } 
            $sql .= " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
          //  $update_mess = _AM_IMLINKS_BROKEN_NOWACK;
            redirect_header( "brokenlink.php?op=default", 1, _AM_IMLINKS_BROKEN_NOWACK );
        } 

        if ( $con ) {
            $confirmed = ( $con == 0 ) ? 1 : 0;
            $sql = "UPDATE " . $xoopsDB -> prefix( 'imlinks_broken' ) . " SET confirmed=" . $confirmed;
            if ( $confirmed == 1 ) {
                $sql .= ", acknowledged=" . $confirmed;
            } 
            $sql .= " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            // $update_mess = _AM_IMLINKS_BROKEN_NOWCON;
            redirect_header( 'brokenlink.php?op=default', 1, _AM_IMLINKS_BROKEN_NOWCON );
        } 
      //  redirect_header( "brokenlink.php?op=default", 1, $update_mess );
      //  break;

    case 'delbrokenlinks':
        $xoopsDB -> queryF( 'DELETE FROM ' . $xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid );
        $xoopsDB -> queryF( 'DELETE FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid );
        redirect_header( "brokenlink.php?op=default", 1, _AM_IMLINKS_BROKENFILEDELETED );
        exit();
        break;

    case 'ignorebrokenlinks':
        $xoopsDB -> queryF( 'DELETE FROM ' . $xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid );
        redirect_header( 'brokenlink.php?op=default', 1, _AM_IMLINKS_BROKEN_FILEIGNORED );
        break;

    default:
        $result = $xoopsDB -> query( 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_broken' ) . ' ORDER BY reportid' );
        $totalbrokenlinks = $xoopsDB -> getRowsNum( $result );

        xoops_cp_header();
        iml_adminmenu( _AM_IMLINKS_BROKEN_FILE );
        echo "
		<fieldset style='border: #e8e8e8 1px solid;'><legend style='display: inline; font-weight: bold; color: #0A3760;'>" . _AM_IMLINKS_BROKEN_REPORTINFO . "</legend>\n
		  <div style='padding: 8px;'>" . _AM_IMLINKS_BROKEN_REPORTSNO . "&nbsp;<b>$totalbrokenlinks</b><div>\n
		  <div style='padding-left: 8px;'>\n
		   <ul>
		    <li>" . $imagearray['ignore'] . "&nbsp;&nbsp;" . _AM_IMLINKS_BROKEN_IGNOREDESC . "</li>\n
		    <li>" . $imagearray['editimg'] . "&nbsp;&nbsp;" . _AM_IMLINKS_BROKEN_EDITDESC . "</li>
		    <li>" . $imagearray['deleteimg'] . "&nbsp;&nbsp;" . _AM_IMLINKS_BROKEN_DELETEDESC . "</li>\n
		   </ul>
		  </div>
		</fieldset>\n

		<table width='100%' border='0' cellspacing='1' cellpadding='2' class='outer'>\n
		<tr style='text-align: center;'>\n
		<th width='3%' style='text-align: center;'>" . _AM_IMLINKS_BROKEN_ID . "</th>\n
		<th width='35%' style='text-align: left;'>" . _AM_IMLINKS_BROKEN_TITLE . "</th>\n
		<th>" . _AM_IMLINKS_BROKEN_REPORTER . "</th>\n
		<th>" . _AM_IMLINKS_BROKEN_FILESUBMITTER . "</th>\n
		<th>" . _AM_IMLINKS_BROKEN_DATESUBMITTED . "</th>\n
		<th>" . _AM_IMLINKS_BROKEN_ACKNOWLEDGED . "</th>\n
		<th>" . _AM_IMLINKS_BROKEN_DCONFIRMED . "</th>\n		
		<th style='text-align: center; width: 6%; white-space: nowrap;'>" . _AM_IMLINKS_BROKEN_ACTION . "</th>\n
		</tr>\n";

        if ( $totalbrokenlinks == 0 ) {
            echo "<tr style='text-align: center;'><td style='text-align: center;' class='head' colspan='8'>" . _AM_IMLINKS_BROKEN_NOFILEMATCH . "</td></tr>";
        } else {
            while ( list( $reportid, $lid, $sender, $ip, $date, $confirmed, $acknowledged ) = $xoopsDB -> fetchRow( $result ) ) {
                $result2 = $xoopsDB -> query( "SELECT cid, title, url, submitter FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=$lid" );
                list( $cid, $linkshowname, $url, $submitter ) = $xoopsDB -> fetchRow( $result2 );
				$email = '';
				$sendername = '';
                if ( $sender != 0 ) {
                    $result3 = $xoopsDB -> query( "SELECT uname, email FROM " . $xoopsDB -> prefix( "users" ) . " WHERE uid=" . $sender . "" );
                    list( $sendername, $email ) = $xoopsDB -> fetchRow( $result3 );
                } 
                $result4 = $xoopsDB -> query( "SELECT uname, email FROM " . $xoopsDB -> prefix( "users" ) . " WHERE uid=" . $sender . "" );
                list( $ownername, $owneremail ) = $xoopsDB -> fetchRow( $result4 );

                $ack_image = ( $acknowledged ) ? $imagearray['ack_yes'] : $imagearray['ack_no'];
                $con_image = ( $confirmed ) ? $imagearray['con_yes'] : $imagearray['con_no'];
				
				if ( $ownername == '' ) { $ownername = '&nbsp;'; }

                echo "<tr style='text-align: center;'>\n";
                echo "<td class='head'>$reportid</td>\n";
                echo "<td class='even' style='text-align: left;'><a href='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/singlelink.php?cid=" . $cid . "&amp;lid=" . $lid . "' target='_blank'>" . $linkshowname . "</a></td>\n";

                if ( $email == '' ) {
                    echo "<td class='even'>$sendername ($ip)";
                } else {
                    echo "<td class='even'><a href='mailto:$email'>$sendername</a> ($ip)";
                } 
                if ( $owneremail == '' ) {
                    echo "<td class='even'>$ownername</td>";
                } else {
                    echo "<td class='even'><a href='mailto:$owneremail'>$ownername</a></td>";
                } 
             //   echo "</td>\n";
                echo "<td class='even' style='text-align: center;'>" . formatTimestamp( $date, $xoopsModuleConfig['dateformatadmin'] ) . "</td>\n";
                echo "<td class='even'><a href='brokenlink.php?op=updateNotice&amp;lid=" . $lid . "&ack=" . intval( $acknowledged ) . "'>" . $ack_image . " </a></td>\n";
                echo "<td class='even'><a href='brokenlink.php?op=updateNotice&amp;lid=" . $lid . "&con=" . intval( $confirmed ) . "'>" . $con_image . "</a></td>\n";
                echo "<td class='even' style='text-align: center;' nowrap>\n";
                echo "<a href='brokenlink.php?op=ignoreBrokenlinks&amp;lid=" . $lid . "'>" . $imagearray['ignore'] . "</a>\n";
                echo "<a href='index.php?op=edit&amp;lid=" . $lid . "'>" . $imagearray['editimg'] . "</a>\n";
                echo "<a href='brokenlink.php?op=delBrokenlinks&amp;lid=" . $lid . "'>" . $imagearray['deleteimg'] . "</a>\n";
                echo "</td></tr>\n";
            } 
        } 
        echo "</table>";
} 
xoops_cp_footer();

?>
