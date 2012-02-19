<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: permissions.php
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

icms_cp_header();
iml_adminmenu( '', _AM_IMLINKS_PERM_MANAGEMENT );

$permtoset = isset( $_POST['permtoset'] ) ? intval( $_POST['permtoset'] ) : 1;
$selected = array( '', '', '', '', '' );
$selected[$permtoset-1] = 'selected';
echo "<form method='post' name='fselperm' action='permissions.php'>
		<table border=0>
			<tr><td>
				<select name='permtoset' onChange='javascript: document.fselperm.submit()'>
					<option value='1'" . $selected[0] . ">" . _AM_IMLINKS_PERM_CPERMISSIONS . "</option>
					<option value='2'" . $selected[1] . ">" . _AM_IMLINKS_PERM_SPERMISSIONS . "</option>
					<option value='3'" . $selected[2] . ">" . _AM_IMLINKS_PERM_APERMISSIONS . "</option>
					<option value='4'" . $selected[3] . ">" . _AM_IMLINKS_PERM_AUTOPERMISSIONS . "</option>
					<option value='5'" . $selected[4] . ">" . _AM_IMLINKS_PERM_RATEPERMISSIONS . "</option>
				</select>&nbsp;<input type='submit' name='go'/>
			</td></tr>
		</table>
	</form>";
$module_id = icms::$module -> getVar( 'mid' );

$icon = '<img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/information_big.png" alt="" style="float: left; padding-right: 10px;" />';

switch( $permtoset ) {
	case 1:
		$title_of_form = '<div style="border: #E8E8E8 1px solid; padding: 8px; border-radius: 5px;">
							<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_PERM_CPERMISSIONS . '</div>
							<div style="padding: 8px; font-weight: normal;">
							' . $icon . _AM_IMLINKS_PERM_CSELECTPERMISSIONS . '<br /><br /><br /><small>' . _AM_IMLINKS_PERM_PERMSNOTE . '</small>
							</div>
						  </div>';
		$perm_name = 'imLinkCatPerm';
		break;
	case 2:
		$title_of_form = '<div style="border: #E8E8E8 1px solid; padding: 8px; border-radius: 5px;">
							<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_PERM_SPERMISSIONS . '</div>
							<div style="padding: 8px; font-weight: normal;">
								' . $icon . _AM_IMLINKS_PERM_SPERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_IMLINKS_PERM_PERMSNOTE . '</small>
							</div>
						  </div>';
		$perm_name = 'imLinkSubPerm';
		break;
	case 3:
		$title_of_form = '<div style="border: #E8E8E8 1px solid; padding: 8px; border-radius: 5px;">
							<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_PERM_APERMISSIONS . '</div>
							<div style="padding: 8px; font-weight: normal;">
								' . $icon . _AM_IMLINKS_PERM_APERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_IMLINKS_PERM_PERMSNOTE . '</small>
							</div>
						  </div>';
		$perm_name = 'imLinkAppPerm';
		break;
	case 4:
		$title_of_form = '<div style="border: #E8E8E8 1px solid; padding: 8px; border-radius: 5px;">
							<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_PERM_AUTOPERMISSIONS . '</div>
							<div style="padding: 8px; font-weight: normal;">
								' . $icon . _AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_IMLINKS_PERM_PERMSNOTE . '</small>
							</div>
						  </div>';
		$perm_name = 'imLinkAutoApp';
		break;
	case 5:
		$title_of_form = '<div style="border: #E8E8E8 1px solid; padding: 8px; border-radius: 5px;">
							<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_PERM_RATEPERMISSIONS . '</div>
								<div style="padding: 8px; font-weight: normal;">
									' . $icon . _AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_IMLINKS_PERM_PERMSNOTE . '</small>
								</div>
						  </div>';
		$perm_name = 'imLinkRatePerms';
		break;
}

$permform = new icms_form_Groupperm( $title_of_form, $module_id, $perm_name, '', 'admin/permissions.php' );
$result = icms::$xoopsDB -> query( 'SELECT cid, pid, title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' ORDER BY title ASC' );
if ( icms::$xoopsDB -> getRowsNum( $result ) ) {
	while ( $perm_row = icms::$xoopsDB -> fetcharray( $result ) ) {
		$permform -> addItem( $perm_row['cid'], '&nbsp;' . $perm_row['title'], $perm_row['pid'] );
	}
	echo $permform -> render();
} else {
	echo '<div style="border: 1px solid #ccc; text-align: center; margin: auto; width: 99%; font-weight: bold; padding: 3px; background-color: #FFFF99;>' . _AM_IMLINKS_PERM_CNOCATEGORY . '</div>';
} 
unset ( $permform );
icms_cp_footer();
?>