<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: include/common.php
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

defined( 'ICMS_ROOT_PATH' ) or die( 'ICMS root path not defined' );

if ( !defined( 'IMLINKS_DIRNAME' ) ) define( 'IMLINKS_DIRNAME', $modversion['dirname'] = basename( dirname( dirname( __FILE__ ) ) ) );
if ( !defined( 'IMLINKS_URL' ) ) define( 'IMLINKS_URL', ICMS_URL . '/modules/' . IMLINKS_DIRNAME . '/' );
if ( !defined( 'IMLINKS_ROOT_PATH' ) ) define( 'IMLINKS_ROOT_PATH', ICMS_ROOT_PATH . '/modules/' . IMLINKS_DIRNAME . '/' );
if ( !defined( 'IMLINKS_IMAGES_URL' ) ) define( 'IMLINKS_IMAGES_URL', IMLINKS_URL . 'images/' );
if ( !defined( 'IMLINKS_ADMIN_URL' ) ) define( 'IMLINKS_ADMIN_URL', IMLINKS_URL . 'admin/' );

// Include the common language file of the module
icms_loadLanguageFile( 'imlinks', 'common' );