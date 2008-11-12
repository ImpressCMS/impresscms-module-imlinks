<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: admin_header.php
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

$mydirname = basename( dirname( dirname( __FILE__ ) ) );

include '../../../mainfile.php';
include '../../../include/cp_header.php';

include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/config.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/iml_lists.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/myts_extended.php';

include_once ICMS_ROOT_PATH . '/class/xoopstree.php';
include_once ICMS_ROOT_PATH . '/class/xoopslists.php';
include_once ICMS_ROOT_PATH . '/class/xoopsformloader.php';

$immyts = new imlTextSanitizer(); // MyTextSanitizer object

$imagearray = array(
            'editimg' 		=> '<img src="../images/icon/world_edit.png" alt="' . _AM_IMLINKS_ICO_EDIT . '" align="middle" />',
            'deleteimg' 	=> '<img src="../images/icon/world_delete.png" alt="' . _AM_IMLINKS_ICO_DELETE . '" align="middle" />',
			'altcat' 		=> '<img src="../images/icon/folder_add.png" alt="' . _AM_IMLINKS_ALTCAT_CREATEF . '" align="middle" />',
            'online' 		=> '<img src="../images/icon/on.png" alt="' . _AM_IMLINKS_ICO_ONLINE . '" align="middle" />',
            'offline' 		=> '<img src="../images/icon/off.png" alt="' . _AM_IMLINKS_ICO_OFFLINE . '" align="middle" />',
            'expired' 		=> '<img src="../images/icon/clock_red.png" alt="' . _AM_IMLINKS_ICO_EXPIRE . '" align="middle" />',
            'approved' 		=> '<img src="../images/icon/on.png" alt="' . _AM_IMLINKS_ICO_APPROVED . '" align="middle" />',
            'notapproved' 	=> '<img src="../images/icon/off.png" alt="' . _AM_IMLINKS_ICO_NOTAPPROVED . '" align="middle" />',
            'relatedfaq' 	=> '<img src="../images/icon/link.gif" alt="' . _AM_IMLINKS_ICO_LINK . "' align='absmiddle'>",
            'relatedurl' 	=> '<img src="../images/icon/urllink.gif" alt="' . _AM_IMLINKS_ICO_URL . '" align="middle" />',
            'addfaq' 		=> '<img src="../images/icon/add.gif" alt="' . _AM_IMLINKS_ICO_ADD . '" align="middle" />',
            'approve' 		=> '<img src="../images/icon/accept.png" alt="' . _AM_IMLINKS_ICO_APPROVE . '" align="middle" />',
            'statsimg' 		=> '<img src="../images/icon/stats.gif" alt="' . _AM_IMLINKS_ICO_STATS . '" align="middle" />',
            'ignore' 		=> '<img src="../images/icon/cross.png" alt="' . _AM_IMLINKS_ICO_IGNORE . '" align="middle" />',
            'ack_yes' 		=> '<img src="../images/icon/on.png" alt="' . _AM_IMLINKS_ICO_ACK . '" align="middle" />',
            'ack_no' 		=> '<img src="../images/icon/off.png" alt="' . _AM_IMLINKS_ICO_REPORT . '" align="middle" />',
            'con_yes' 		=> '<img src="../images/icon/on.png" alt="' . _AM_IMLINKS_ICO_CONFIRM . '" align="middle" />',
            'con_no' 		=> '<img src="../images/icon/off.png" alt="' . _AM_IMLINKS_ICO_CONBROKEN . '" align="middle" />',
            'view' 			=> '<img src="../images/icon/view.png" alt="' . _AM_IMLINKS_ICO_VIEW . '" align="middle" />',
			'clone'			=> '<img src="../images/icon/world_clone.png" alt="' . _AM_IMLINKS_ICO_CLONE . '" align="middle" />'
	);

?>