<?php
/**
* Impression - a light article management module for ImpressCMS
*
* Based upon WF-Links
*
* File: /class/Articles.php
*
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
* 				Impression
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

defined( 'ICMS_ROOT_PATH' ) or die ( 'ICMS root path not defined' );

class mod_imlinks_Broken extends icms_ipf_seo_Object {

	public function __construct( &$handler ) {
		icms_ipf_object::__construct( $handler );

		$this -> quickInitVar( 'reportid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'lid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'sender', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'ip', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'date', XOBJ_DTYPE_LTIME, false, '', '', 1033141070 );
		$this -> quickInitVar( 'confirmed', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'acknowledged', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'title', XOBJ_DTYPE_TXTBOX, false );
	}

}