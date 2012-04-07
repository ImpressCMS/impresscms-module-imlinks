<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* File: xoops_version.php
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* -----------------------------------------------------------------------
* @package		imLinks
* @since		1.07
* @author		McDonald
* @version		$Id$
*/

include_once 'admin_header.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/imlinks_moduleabout.php';
$aboutObj = new imLinksModuleAbout();
$aboutObj -> render();
?>