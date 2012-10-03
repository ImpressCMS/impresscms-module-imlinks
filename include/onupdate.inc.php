<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: include/onupdate.inc.php
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

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); }

define( 'IMLINKS_DB_VERSION', 1 );

function icms_module_update_imlinks( &$module, $oldversion = null, $dbversion = null ) {

	// Start removing obsolete files
	$file = array(	'lightwindow.css',
					'list.tag.php',
					'view.tag.php',
					'xoops_version.php',
					'admin/admin.php',
					'admin/myblockform.php',
					'admin/myblocksadmin.php',
					'admin/myblocksadmin.txt',
					'admin/mygroupperm.php',
					'admin/mygrouppermform.php',
					'blocks/imlinks_banner.php',
					'blocks/imlinks_block_tag.php',
					'class/class_thumbnail.php',
					'class/myts_extended.php',
					'images/icon/blocks.png',
					'images/icon/blocks_small.png',
					'images/icon/multimap.png',
					'images/icon/new.png',
					'images/icon/popular.png',
					'images/icon/updated.png',
					'images/icon/view.png',
					'images/sbookmarks/simpy.png',
					'images/sbookmarks/spurl.png',
					'include/blocksadmin.inc.php',
					'include/config.php',
					'include/gtickets.php',
					'include/install.php',
					'include/plugin.tag.php',
					'include/update.php',
					'include/updateblock.inc.php',
					'js/lightwindow.js',
					'templates/blocks/imlinks_block_banner.html',
					'templates/blocks/imlinks_tag_block_cloud.html',
					'templates/blocks/imlinks_tag_block_tag.html' );
	foreach ( $file as $item ) {
		if ( file_exists(ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/' . $item ) ) {
			chmod( ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/' . $item, 0777 );
			unlink( ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/' . $item );
		}
	}
	// End of removing obsolete files
	
	// Start removing obsolete folders
	$folder = array(	'docs' );
	foreach ( $folder as $dir ) {
		if ( is_dir( ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/' . $dir ) ) {
			chmod( ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/' . $dir, 0777 );
			rmdir( ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/' . $dir );
		}
	}
	// End of removing obsolete folders
	
	return TRUE;
}

function icms_module_install_imlinks( $module ) {

	$queries = array();
	
	$queries[] = "CREATE TABLE ". icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . " (
		`lid` int(11) unsigned NOT NULL default '0',
		`cid` int(5) unsigned NOT NULL default '0',
		PRIMARY KEY (`lid`,`cid`)
	)";
	
	$queries[] = "CREATE TABLE ". icms::$xoopsDB -> prefix( 'imlinks_indexpage' ) . " (
		`indeximage` varchar(255) NOT NULL default 'blank.gif',
		`indexheading` varchar(255) NOT NULL default 'imLinks',
		`indexheader` text NOT NULL,
		`indexfooter` text NOT NULL,
		`indexheaderalign` varchar(25) NOT NULL default 'left',
		`indexfooteralign` varchar(25) NOT NULL default 'center',
		`lastlinkstotal` varchar(5) NOT NULL default '50'
	)";
	
	$queries[] = "INSERT INTO " . icms::$xoopsDB -> prefix( 'imlinks_indexpage' ) . " (`indeximage`,`indexheading`,`indexheader`,`indexfooter`,`indexheaderalign`,`indexfooteralign`,`lastlinkstotal`) VALUES ('logo-en.png', 'imLinks', 'Welcome to imLinks.', 'imLinks footer', 'left', 'left', 50)";
	
	$queries[] = "CREATE TABLE ". icms::$xoopsDB -> prefix( 'imlinks_configs' ) . " (
		`rssactive` int(1) NOT NULL default '1',
		`rsstitle` varchar(128) NOT NULL,
		`rsslink` varchar(128) NOT NULL,
		`rssdsc` varchar(128) NOT NULL,
		`rssimgurl` varchar(255) NOT NULL,
		`rsswidth` tinyint(8) NOT NULL default '0',
		`rssheight` tinyint(8) NOT NULL default '0',
		`rssimgtitle` varchar(128) NOT NULL,
		`rssimglink` varchar(255) NOT NULL,
		`rssttl` tinyint(8) NOT NULL default '0',
		`rsswebmaster` varchar(255) NOT NULL,
		`rsseditor` varchar(255) NOT NULL,
		`rsscategory` varchar(128) NOT NULL,
		`rssgenerator` varchar(128) NOT NULL,
		`rsscopyright` varchar(128) NOT NULL,
		`rsstotal` tinyint(8) NOT NULL default '0',
		`rssofftitle` varchar(128) NOT NULL default '',
		`rssoffdsc` varchar(255) NOT NULL default ''
	)";

	$queries[] = "INSERT INTO " . icms::$xoopsDB -> prefix( 'imlinks_configs' ) . " (`rssactive`,`rsstitle`,`rsslink`,`rssdsc`,`rssimgurl`,`rsswidth`,`rssheight`,`rssimgtitle`,`rssimglink`,`rssttl`,`rsswebmaster`,`rsseditor`,`rsscategory`,`rssgenerator`,`rsscopyright`,`rsstotal`,`rssofftitle`,`rssoffdsc`) VALUES ('1', '', '', '', '', '', '', '', '', '60', '', '', '', '', '', '15', '', '')";
	
	$queries[] = "CREATE TABLE " . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . " (
		`id` int(11) NOT NULL,
		`total_votes` int(11) NOT NULL default '0',
		`total_value` int(11) NOT NULL default '0',
		`used_ips` longtext,
		PRIMARY KEY (`id`)
	)";
	
	foreach( $queries as $query ) {
		icms::$xoopsDB -> query( $query );;
	}

	return TRUE;
}

function icms_module_uninstall_imlinks( $module ) {

	$queries = array();

	$queries[] = "DROP TABLE ". icms::$xoopsDB -> prefix('imlinks_altcat');
	$queries[] = "DROP TABLE ". icms::$xoopsDB -> prefix('imlinks_indexpage');
	$queries[] = "DROP TABLE ". icms::$xoopsDB -> prefix('imlinks_configs');
	$queries[] = "DROP TABLE ". icms::$xoopsDB -> prefix('imlinks_ratings');

	foreach( $queries as $query ) {
			icms::$xoopsDB -> query( $query );;
	}

	return TRUE;
}