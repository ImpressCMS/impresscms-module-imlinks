<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: onupdate.inc.php
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

if( ! defined( 'ICMS_ROOT_PATH' ) ) exit ;

// referer check
$ref = xoops_getenv( 'HTTP_REFERER' );

if( $ref == '' || strpos( $ref , ICMS_URL . '/modules/system/admin.php' ) === 0 ) {

	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_broken') . " MODIFY confirmed TINYINT(1) NOT NULL default '0'";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_broken') . " MODIFY acknowledged TINYINT(1) NOT NULL default '0'";
	if ( !mysql_query( $sql ) ) {}

	// imLinks 1.03
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_links') . " ADD COLUMN nice_url VARCHAR(100) NOT NULL default ''";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_links') . " ADD COLUMN ttlat VARCHAR(100) NOT NULL default ''";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_links') . " ADD COLUMN ttlong VARCHAR(100) NOT NULL default ''";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_mod') . " ADD COLUMN ttlat VARCHAR(100) NOT NULL default ''";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_mod') . " ADD COLUMN ttlong VARCHAR(100) NOT NULL default ''";
	if ( !mysql_query( $sql ) ) {}

	// imLinks 1.05
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_links') . " DROP urlrating";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_links') . " DROP nobreak";
	if ( !mysql_query( $sql ) ) {}

	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_mod') . " DROP urlrating";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_mod') . " DROP nobreak";
	if ( !mysql_query( $sql ) ) {}

	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage') . " DROP nohtml";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage') . " DROP nosmiley";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage') . " DROP noxcodes";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage') . " DROP noimages";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage') . " DROP nobreak";
	if ( !mysql_query( $sql ) ) {}

	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP nohtml";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP nosmiley";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP noxcodes";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP noimages";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP nobreak";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP spotlighttop";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP spotlighthis";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP total";
	if ( !mysql_query( $sql ) ) {}

	// imLinks 1.11
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP client_id";
	if ( !mysql_query( $sql ) ) {}
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_cat') . " DROP banner_id";
	if ( !mysql_query( $sql ) ) {}

	// imLinks 1.12
	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'imlinks_indexpage') . " DROP lastlinksyn";
	if ( !mysql_query( $sql ) ) {}
}
?>