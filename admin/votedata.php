<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: votedata.php
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
* @since			1.07
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$rid = iml_cleanRequestVars( $_REQUEST, 'rid', 0 );
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );

switch ( strtolower($op) ) {
    case 'delvote':
        $sql = "DELETE FROM " . $xoopsDB -> prefix( 'imlinks_votedata' ) . " WHERE ratingid=" . $rid;
        $result = $xoopsDB -> queryF( $sql );
        iml_updaterating( $lid );
        redirect_header( 'votedata.php', 1, _AM_IMLINKS_VOTEDELETED );
        break;

    case 'main':
    default:
	$start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
        xoops_cp_header();
        iml_adminmenu( 7, _AM_IMLINKS_VOTE_RATINGINFOMATION );
        $_vote_data = iml_getVoteDetails( $lid );

        $text_info = "
		<table width='100%'>
		 <tr>
		  <td width='50%' valign='top'>
		   <div><b>" . _AM_IMLINKS_VOTE_TOTALRATE . ": </b>" . intval( $_vote_data['rate'] ) . "</div>
		   <div><b>" . _AM_IMLINKS_VOTE_USERAVG . ": </b>" . intval( round( $_vote_data['avg_rate'], 2 ) ) . "</div>
		   <div><b>" . _AM_IMLINKS_VOTE_MAXRATE . ": </b>" . intval( $_vote_data['min_rate'] ) . "</div>
		   <div><b>" . _AM_IMLINKS_VOTE_MINRATE . ": </b>" . intval( $_vote_data['max_rate'] ) . "</div>
		  </td>
		  <td>		 
		   <div><b>" . _AM_IMLINKS_VOTE_MOSTVOTEDTITLE . ": </b>" . intval( $_vote_data['max_title'] ) . "</div>
           <div><b>" . _AM_IMLINKS_VOTE_LEASTVOTEDTITLE . ": </b>" . intval( $_vote_data['min_title'] ) . "</div>
		   <div><b>" . _AM_IMLINKS_VOTE_REGISTERED . ": </b>" . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . "</div>
		   <div><b>" . _AM_IMLINKS_VOTE_NONREGISTERED . ": </b>" . intval( $_vote_data['null_ratinguser'] ) . "</div>
		  </td>
		 </tr>
		</table>";

        echo "
		<fieldset style='border: #e8e8e8 1px solid;'><legend style='display: inline; font-weight: bold; color: #0A3760;'>" . _AM_IMLINKS_VOTE_DISPLAYVOTES . "</legend>\n
		<div style='padding: 8px;'>$text_info</div>\n	
		<div style='padding: 8px;'><li>" . $imagearray['deleteimg'] . "&nbsp;&nbsp;" . _AM_IMLINKS_VOTE_DELETEDSC . "</li></div>\n
		</fieldset>\n

		<table width='100%' cellspacing='1' cellpadding='2' class='outer'>\n
		<tr>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_VOTE_ID . "</th>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_VOTE_USER . "</th>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_VOTE_IP . "</th>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_VOTE_FILETITLE . "</th>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_VOTE_RATING . "</th>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_VOTE_DATE . "</th>\n
		<th style='text-align: center;'>" . _AM_IMLINKS_MINDEX_ACTION . "</th></tr>\n";

        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_votedata' );
        if ( $lid > 0 ) {
            $sql .= " WHERE lid=" . $lid;
        } 
        $sql .= " ORDER BY ratingtimestamp DESC";

        $results = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
        $votes = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );

        if ( $votes == 0 ) {
            echo "<tr><td style='text-align: center;' colspan='7' class='head'>" . _AM_IMLINKS_VOTE_NOVOTES . "</td></tr>";
        } else {
            while ( list( $ratingid, $lid, $ratinguser, $rating, $ratinghostname, $ratingtimestamp, $title ) = $xoopsDB -> fetchRow( $results ) ) {
                $formatted_date = formatTimestamp( $ratingtimestamp, $xoopsModuleConfig['dateformatadmin'] );
                $ratinguname = XoopsUser :: getUnameFromId( $ratinguser );
                echo "
					<tr style='text-align: center;'>\n
					<td class='head'>$ratingid</td>\n
					<td class='even'>$ratinguname</td>\n
					<td class='even'>$ratinghostname</td>\n
					<td class='even'>$title</td>\n
					<td class='even'>$rating</td>\n
					<td class='even'>$formatted_date</td>\n
					<td class='even'><a href='votedata.php?op=delvote&amp;lid=".$lid."&amp;rid=".$ratingid."'>" . $imagearray['deleteimg'] . "</a></td>\n
					</tr>\n";
            } 
        } 
        echo "</table>"; 
        // Include page navigation
        include_once ICMS_ROOT_PATH . '/class/pagenav.php';
        $page = ( $votes > $xoopsModuleConfig['admin_perpage'] ) ? _AM_IMLINKS_MINDEX_PAGE : '';
        $pagenav = new XoopsPageNav( $page, $xoopsModuleConfig['admin_perpage'], $start, 'start' );
        echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
        break;
} 
xoops_cp_footer();

?>