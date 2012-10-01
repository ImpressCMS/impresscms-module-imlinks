<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/Mod.php
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

defined( 'ICMS_ROOT_PATH' ) or die ( 'ICMS root path not defined' );

class mod_imlinks_Mod extends icms_ipf_seo_Object {

	public function __construct( &$handler ) {
		icms_ipf_object::__construct( $handler );

		$this -> quickInitVar( 'requestid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'lid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'cid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'title', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'url', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'screenshot', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'submitter', XOBJ_DTYPE_INT, false, '', '', 1 );
		$this -> quickInitVar( 'publisher', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'status', XOBJ_DTYPE_INT, true, false, false, true );
		$this -> quickInitVar( 'date', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'hits', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'rating', XOBJ_DTYPE_FLOAT, false );
		$this -> quickInitVar( 'votes', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'comments', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'forumid', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'published', XOBJ_DTYPE_LTIME, false, '', '', 1033141070 );
		$this -> quickInitVar( 'expired', XOBJ_DTYPE_LTIME, false, '', '', 1033141070 );
		$this -> quickInitVar( 'updated', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'offline', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'description', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'modifysubmitter', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'requestdate', XOBJ_DTYPE_LTIME, false, '', '', 1033141070 );
		$this -> quickInitVar( 'country', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'keywords', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'item_tag', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'googlemap', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'yahoomap', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'multimap', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'street1', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'street2', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'town', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'zip', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'state', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'tel', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'town', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'fax', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'voip', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'mobile', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'email', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'vat', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'nice_url', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'ttlat', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'ttlong', XOBJ_DTYPE_TXTBOX, false );
		
		$this -> setControl( 'status', 'yesno' );
	}

}