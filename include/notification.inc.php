<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: notification.inc.php
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

function imlinks_notify_iteminfo($category, $item_id) {
        $mydirname = basename( dirname( __FILE__ ) );
	global $xoopsModule, $xoopsModuleConfig, $xoopsConfig;

	if (empty($xoopsModule) || $xoopsModule -> getVar('dirname') != $mydirname) {
		$module_handler =& xoops_gethandler('module');
		$module =& $module_handler -> getByDirname($mydirname);
		$config_handler =& xoops_gethandler('config');
		$config =& $config_handler -> getConfigsByCat(0, $module -> getVar('mid'));
	} else {
		$module =& $xoopsModule;
		$config =& $xoopsModuleConfig;
	}

	if ($category == 'global') {
		$item['name'] = '';
		$item['url'] = '';
		return $item;
	}

	global $xoopsDB;
	if ($category == 'category') {
		// Assume we have a valid category id
		$sql="SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_cat' ) . " WHERE cid=" . $item_id;
		if (!$result = $xoopsDB -> query($sql)) {
		    return false;
		}
		$result_array = $xoopsDB -> fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = ICMS_URL . '/modules/' . $mydirname . '/viewcat.php?cid=' . $item_id;
		return $item;
	}

	if ($category == 'link') {
		// Assume we have a valid file id
		$sql="SELECT cid,title FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . $item_id;
		if (!$result = $xoopsDB -> query($sql)) {
		    return false;
		}
		$result_array = $xoopsDB -> fetchArray($result);
		$item['name'] = $result_array['title'];
		$item['url'] = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?cid=' . $result_array['cid'] . '&amp;lid=' . $item_id;
		return $item;
	}
}
?>
