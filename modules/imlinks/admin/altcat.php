<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: altcat.php
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

function makeTreeCheckTable( $xt, $itemid, $title, $checks, $cidd ) {
	echo '<div style="text-align: left;">';
	echo '<form name="altcat" method="post" action="altcat.php">';
	echo '<table width="100%" callspacing="1" class="outer">';
	$sql = 'SELECT cid, ' . $title . ' FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE pid=0 ORDER BY ' . $title;
	$result = icms::$xoopsDB -> query( $sql );

	while ( list( $cid, $name ) = icms::$xoopsDB -> fetchRow( $result ) ) {
		$checked = array_key_exists( $cid, $checks ) ? 'checked="checked"' : '';
		$disabled = ( $cid == $cidd ) ? 'disabled="yes"' : '';
		$level = 1;
		echo '<tr style="text-align: left;">
				<td width="30%" class="head">' . $name . '</td>
				<td class="head">
					<input type="checkbox" name="cid-' . intval( $cid ) . '" value="0" ' . $checked . ' ' . $disabled . '/>
				</td>
			</tr>';
		$arr = $xt -> getChildTreeArray( intval( $cid ), $title );

		foreach ( $arr as $cat ) {
			$cat['prefix'] = str_replace( '.', '-', $cat['prefix'] );
			$catpath = $cat['prefix'] . '&nbsp;' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $cat[$title] ) ) . '&nbsp;';
			$checked = array_key_exists( $cat['cid'], $checks ) ? 'checked="checked"' : '';
			$disabled = ( $cat['cid'] == $cidd ) ? 'disabled="yes"' : '';
			$level = substr_count( $cat['prefix'], '-' ) + 1;
			echo '<tr style="text-align: left;">
					<td width="30%" class="even">' . $catpath . '</td>
					<td class="even">
						<input type="checkbox" name="cid-' . $cat['cid'] . '" value="0" ' . $checked . ' ' . $disabled . '/>
					</td>
					</tr>';
		}
	}
	echo '<tr>
			<td width="30%" class="head"></td>
			<td class="even" style="text-align: left;">
			<input type="submit" class="mainbutton" value="save" />
			<input type="hidden" name="op" value="save" />
			<input type="hidden" name="lid" value="' . $itemid . '"/>
			</td>
			</tr>';
	echo '</table></form></div>';
}

switch ( strtolower( $op ) ) {
	case 'save': 
		// first delete all alternate categories for this topic
		$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' WHERE lid=' . intval( $lid );
		if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}

		$k = array_keys( $_REQUEST );
		foreach( $k as $sid ) {
			if ( preg_match( "/cid-([0-9]*)/", $sid, $cid ) ) {
				$sql = 'INSERT INTO ' . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . '(cid, lid) VALUES("' . $cid[1] . '","' . intval( $lid ) . '")';
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
					return false;
				}
			}
		}
		redirect_header( 'links.php', 1, _AM_IMLINKS_ALTCAT_CREATED );
		break;

	case 'main':
	default:
		icms_cp_header();
		iml_adminmenu( '', _AM_IMLINKS_MALTCAT );
		$sql = icms::$xoopsDB -> query( 'SELECT cid, title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid );
		list( $cid, $title ) = icms::$xoopsDB -> fetchRow( $sql );
		echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
				<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_ALTCAT_MODIFYF . '</div>
				<div style="padding: 8px;">' . _AM_IMLINKS_ALTCAT_INFOTEXT . '</div>
				</div>';
		echo '<div style="text-align: left; font-size: larger;"><h4>' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $title ) ) . '</h4></div>';
		// Get an array of all alternate categories for this topic
		$sql2 = icms::$xoopsDB -> query( 'SELECT cid FROM ' . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' WHERE lid=' . intval( $lid ) . ' ORDER BY lid' );
		$altcats = array();
		while ( $altcat = icms::$xoopsDB -> fetchArray( $sql2 ) ) {
			$altcats[$altcat['cid']] = true;
		}
		$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
		makeTreeCheckTable( $mytree, intval( $lid ), 'title', $altcats, $cid );
		icms_cp_footer();
}
?>