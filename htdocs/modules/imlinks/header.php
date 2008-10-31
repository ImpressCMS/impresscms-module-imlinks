<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: header.php
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

$mydirname = basename( dirname( __FILE__ ) );

include_once '../../mainfile.php';
include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/config.php';
include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/class_thumbnail.php';
include_once ICMS_ROOT_PATH . '/class/pagenav.php';
include_once ICMS_ROOT_PATH . '/class/xoopstree.php';

if ( !file_exists( 'language/' . $xoopsConfig['language'] . '/main.php' ) ) {
    include 'language/' . $xoopsConfig['language'] . '/main.php';
} 

include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/myts_extended.php';
$immyts = new imlTextSanitizer(); // MyTextSanitizer object

global $xoopModuleConfig;

?>