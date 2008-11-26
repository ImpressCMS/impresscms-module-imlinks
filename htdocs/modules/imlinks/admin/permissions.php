<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: permissions.php
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
include_once '../../../include/cp_header.php';
include_once ICMS_ROOT_PATH . '/class/xoopstopic.php';
include_once ICMS_ROOT_PATH . '/class/xoopslists.php';
include_once ICMS_ROOT_PATH . '/class/xoopsform/grouppermform.php';

xoops_cp_header();
iml_adminmenu( '', _AM_IMLINKS_PERM_MANAGEMENT );

$permtoset = isset( $_POST['permtoset'] ) ? intval( $_POST['permtoset'] ) : 1;
$selected = array( '', '', '', '', '' );
$selected[$permtoset-1] = 'selected';
echo "<form method='post' name='fselperm' action='permissions.php'><table border=0>
<tr><td><select name='permtoset' onChange='javascript: document.fselperm.submit()'>
<option value='1'" . $selected[0] . ">" . _AM_IMLINKS_PERM_CPERMISSIONS . "</option>
<option value='2'" . $selected[1] . ">" . _AM_IMLINKS_PERM_SPERMISSIONS . "</option>
<option value='3'" . $selected[2] . ">" . _AM_IMLINKS_PERM_APERMISSIONS . "</option>
<option value='4'" . $selected[3] . ">" . _AM_IMLINKS_PERM_AUTOPERMISSIONS . "</option>
<option value='5'" . $selected[4] . ">" . _AM_IMLINKS_PERM_RATEPERMISSIONS . "</option>
</select></td></tr><tr><td><input type='submit' name='go'/></td></tr></table></form>";
$module_id = $xoopsModule -> getVar( 'mid' );

switch( $permtoset ) {
	case 1:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">'
		. _AM_IMLINKS_PERM_CPERMISSIONS . '</legend>';
		$perm_name = 'imLinkCatPerm';
		$perm_desc = _AM_IMLINKS_PERM_CSELECTPERMISSIONS . '</fieldset>';
		break;
	case 2:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">'
		. _AM_IMLINKS_PERM_SPERMISSIONS . '</legend>';
		$perm_name = 'imLinkSubPerm';
		$perm_desc = _AM_IMLINKS_PERM_SPERMISSIONS_TEXT . '</fieldset>';
		break;
	case 3:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">'
		. _AM_IMLINKS_PERM_APERMISSIONS . '</legend>';
		$perm_name = 'imLinkAppPerm';
		$perm_desc = _AM_IMLINKS_PERM_APERMISSIONS_TEXT . '</fieldset>';
		break;
	case 4:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">'
		. _AM_IMLINKS_PERM_AUTOPERMISSIONS . '</legend>';
		$perm_name = 'imLinkAutoApp';
		$perm_desc = _AM_IMLINKS_PERM_AUTOPERMISSIONS_TEXT . '</fieldset>';
		break;
	case 5:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">'
		. _AM_IMLINKS_PERM_RATEPERMISSIONS . '</legend>';
		$perm_name = 'imLinkRatePerms';
		$perm_desc = _AM_IMLINKS_PERM_RATEPERMISSIONS_TEXT . '</fieldset>';
		break;
}

$permform = new XoopsGroupPermForm( $title_of_form, $module_id, $perm_name, $perm_desc );
$result = $xoopsDB -> query( 'SELECT cid, pid, title FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' ORDER BY title ASC' );
if ( $xoopsDB -> getRowsNum( $result ) ) {
    while ( $perm_row = $xoopsDB -> fetcharray( $result ) ) {
        $permform -> addItem( $perm_row['cid'], '&nbsp;' . $perm_row['title'], $perm_row['pid'] );
    }	
    echo $permform -> render();
    echo '';
} else {
    echo '<div><b>' . _AM_IMLINKS_PERM_CNOCATEGORY . '</b></div>';
} 
unset ( $permform );

echo _AM_IMLINKS_PERM_PERMSNOTE . '<br />';

xoops_cp_footer();
?>