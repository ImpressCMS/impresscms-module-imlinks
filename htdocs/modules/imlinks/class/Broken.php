<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/Broken.php
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
		$this -> quickInitVar( 'title', XOBJ_DTYPE_TXTBOX, true );
		
		$this -> setControl( 'acknowledged', 'yesno' );
		$this -> setControl( 'confirmed', 'yesno' );
	}
	
	public function getVar( $key, $format = 's' ) {
		if ( $format == 's' && in_array( $key, array( 'sender', 'date', 'acknowledged', 'confirmed' ) ) ) {
			return call_user_func( array( $this, $key ) );
		}
		return parent::getVar( $key, $format );
	}

	function sender() {
		return icms_member_user_Handler::getUserLink( $this -> getVar( 'sender', 'e' ) ) . ' (' . $this -> getVar( 'ip' ) . ')';
	}
	
	function date() {
		$publish = formatTimestamp( $this -> getVar( 'date', 'e' ), icms::$module -> config['dateformatadmin'] );
		return $publish;
	}
	
	function ViewLink() {
		$title = '<a href="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/singlelink.php?lid=' . $this -> getVar( 'lid' ) . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $this -> getVar( 'title' ) ) ) ) . '</a>';
		return $title;
	}
	
	function getIgnoreBroken() {
		$ret = '<a href="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/admin/brokenlink.php?op=ignoreBrokenlinks&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/images/icon/cross.png" alt="" title="' . _AM_IMLINKS_BIGNORE . '" /></a>';
		return $ret;
	}
	
	function getEditBroken() {
		$ret = '<a href="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/admin/links.php?op=edit&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/images/icon/world_edit.png" alt="" title="' . _AM_IMLINKS_ICO_EDIT . '" /></a>';
		return $ret;
	}
	
	function getDeleteBroken() {
		$ret = '<a href="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/admin/brokenlink.php?op=delBrokenlinks&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/images/icon/world_delete.png" alt="" title="' . _AM_IMLINKS_ICO_DELETE . '" /></a>';
		return $ret;
	}
	
	function Acknowledged() {
		$ack_yes = 'on';
		$ack_no  = 'off';
		$ack_image = ( $this -> getVar( 'acknowledged', 'e' ) ) ? $ack_yes : $ack_no;
		$ret = '<a href="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/admin/brokenlink.php?op=changeacknowledged&amp;reportid=' . $this -> getVar( 'reportid' ) . '"><img src="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/images/icon/' . $ack_image . '.png" alt="" title="' . _AM_IMLINKS_ICO_ACK . '" /></a>';
		return $ret;
	}
	
	function Confirmed() {
		$con_yes = 'on';
		$con_no  = 'off';
		$con_image = ( $this -> getVar( 'confirmed', 'e' ) ) ? $con_yes : $con_no;
		$ret = '<a href="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/admin/brokenlink.php?op=changeconfirmed&amp;reportid=' . $this -> getVar( 'reportid' ) . '"><img src="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/images/icon/' . $con_image . '.png" alt="" title="' . _AM_IMLINKS_ICO_ACK . '" /></a>';
		return $ret;
	}

}