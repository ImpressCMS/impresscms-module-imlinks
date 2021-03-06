<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: admin_header.php
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

include '../../../include/cp_header.php';

include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/functions.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/common.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/functions.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/class/iml_lists.php';

$imagearray = array(
	'editimg' 		=> '<img src="../images/icon/world_edit.png" alt="" title="' . _AM_IMLINKS_ICO_EDIT . '" style="vertical-align: middle;" />',
	'deleteimg' 	=> '<img src="../images/icon/world_delete.png" alt="" title="' . _AM_IMLINKS_ICO_DELETE . '" style="vertical-align: middle;" />',
	'altcat' 		=> '<img src="../images/icon/folder_add.png" alt="" title="' . _AM_IMLINKS_ALTCAT_CREATEF . '" style="vertical-align: middle;" />',
	'online' 		=> '<img src="../images/icon/on.png" alt="" title="' . _AM_IMLINKS_ICO_ONLINE . '" style="vertical-align: middle;" />',
	'offline' 		=> '<img src="../images/icon/off.png" alt="" title="' . _AM_IMLINKS_ICO_OFFLINE . '" style="vertical-align: middle;" />',
	'expired' 		=> '<img src="../images/icon/clock_red.png" alt="" title="' . _AM_IMLINKS_ICO_EXPIRE . '" style="vertical-align: middle;" />',
	'approved' 		=> '<img src="../images/icon/on.png" alt="" title="' . _AM_IMLINKS_ICO_APPROVED . '" style="vertical-align: middle;" />',
	'notapproved' 	=> '<img src="../images/icon/off.png" alt="" title="' . _AM_IMLINKS_ICO_NOTAPPROVED . '" align="middle" />',
	'relatedfaq' 	=> '<img src="../images/icon/link.gif" alt="" title="' . _AM_IMLINKS_ICO_LINK . '" style="vertical-align: middle;" />',
	'relatedurl' 	=> '<img src="../images/icon/urllink.gif" alt="" title="' . _AM_IMLINKS_ICO_URL . '" style="vertical-align: middle;" />',
	'approve' 		=> '<img src="../images/icon/accept.png" alt="" title="' . _AM_IMLINKS_ICO_APPROVE . '" style="vertical-align: middle;" />',
	'statsimg' 		=> '<img src="../images/icon/stats.gif" alt="" title="' . _AM_IMLINKS_ICO_STATS . '" style="vertical-align: middle;" />',
	'ignore' 		=> '<img src="../images/icon/cross.png" alt="" title="' . _AM_IMLINKS_BIGNORE . '" style="vertical-align: middle;" />',
	'ack_yes' 		=> '<img src="../images/icon/on.png" alt="" title="' . _AM_IMLINKS_ICO_ACK . '" style="vertical-align: middle;" />',
	'ack_no' 		=> '<img src="../images/icon/off.png" alt="" title="' . _AM_IMLINKS_ICO_REPORT . '" style="vertical-align: middle;" />',
	'con_yes' 		=> '<img src="../images/icon/on.png" alt="" title="' . _AM_IMLINKS_ICO_CONFIRM . '" style="vertical-align: middle;" />',
	'con_no' 		=> '<img src="../images/icon/off.png" alt="" title="' . _AM_IMLINKS_ICO_CONBROKEN . '" style="vertical-align: middle;" />',
	'view' 			=> '<span class="button"><img src="../images/icon/find.png" alt="" title="' . _AM_IMLINKS_ICO_VIEW . '" style="vertical-align: middle;" /> ' . _AM_IMLINKS_ICO_VIEW . '</span>',
	'clone'			=> '<img src="../images/icon/world_clone.png" alt="" title="' . _AM_IMLINKS_ICO_CLONE . '" style="vertical-align: middle;" />',
	'waiting'		=> '<img src="../images/icon/hourglass.png" alt="" title="' . _AM_IMLINKS_ICO_WAITING . '" style="vertical-align: middle;" />'
	);

global $imagearray, $icmsConfig, $mytree;
?>