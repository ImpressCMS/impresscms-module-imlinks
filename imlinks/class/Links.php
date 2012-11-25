<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/Links.php
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

class mod_imlinks_Links extends icms_ipf_seo_Object {

	public function __construct( &$handler ) {
		icms_ipf_object::__construct( $handler );

		$this -> quickInitVar( 'lid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'cid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'title', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'url', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'screenshot', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'submitter', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'publisher', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'status', XOBJ_DTYPE_INT, true, false, false, true );
		$this -> quickInitVar( 'date', XOBJ_DTYPE_LTIME, false, '', '', 1033141070 );
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
		$this -> quickInitVar( 'ipaddress', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'notifypub', XOBJ_DTYPE_INT, false );
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

		$this -> setControl( 'submitter', 'user' );
	}

	public function getVar( $key, $format = 's' ) {
		if ( $format == 's' && in_array( $key, array( 'submitter', 'status', 'published', 'expired', 'cid', 'date' ) ) ) {
			return call_user_func( array( $this, $key ) );
		}
		return parent::getVar( $key, $format );
	}

	function submitter() {
		return icms_member_user_Handler::getUserLink( $this -> getVar( 'submitter', 'e' ) );
	}

	function status() {

		$published_status = '';
		
		if ( $this -> getVar( 'status', 'e' ) == 0 && $this -> getVar( 'offline' ) == 0 ) {

			// Link submitted, waiting for approval
			$published_status = '<img src="../images/icon/hourglass.png" alt="" title="' . _AM_IMLINKS_ICO_WAITING . '" />';

		} elseif ( ( ( $this -> getVar( 'expired', 'e' ) && $this -> getVar( 'expired', 'e' ) > time() ) OR  $this -> getVar( 'expired', 'e' )==0)&& ( $this -> getVar( 'published', 'e' ) && $this -> getVar( 'published', 'e' ) < time() ) && $this -> getVar( 'offline' ) == 0 ) {

			// Online
			$published_status = '<a href="links.php?op=changestatus&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/on.png" alt="" title="' . _AM_IMLINKS_ICO_ONLINE . '" /></a>';

		} elseif ( ( $this -> getVar( 'expired', 'e' ) && $this -> getVar( 'expired', 'e' ) < time() )  && $this -> getVar( 'offline' ) == 0 ) {

			// Expired
			$published_status = '<img src="../images/icon/clock_red.png" alt="" title="' . _AM_IMLINKS_ICO_EXPIRE . '" />';

		} else {

			// Offline
			$published_status = ( $this -> getVar( 'published', 'e' ) == 0 ) ? '<a href="newlinks.php"><img src="../images/icon/off.png" alt="" title="' . _AM_IMLINKS_ICO_OFFLINE . '" /></a>' : '<a href="links.php?op=changestatus&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/off.png" alt="" title="' . _AM_IMLINKS_ICO_OFFLINE . '" /></a>';

		}
		return $published_status;
	}

	function published() {
		$publish = ( $this -> getVar( 'published', 'e' ) > 0 ) ? formatTimestamp( $this -> getVar( 'published', 'e' ), icms::$module -> config['dateformatadmin'] ): _AM_IMLINKS_NOTPUBLISHED;
		return $publish;
	}

	function expired() {
		$expired = $this -> getVar( 'expired', 'e' ) ? formatTimestamp( $this -> getVar( 'expired', 'e' ), icms::$module -> config['dateformatadmin'] ): _AM_IMLINKS_MINDEX_NOTSET;
		return $expired;
	}

	function date() {
		$date = formatTimestamp( $this -> getVar( 'date', 'e' ), icms::$module -> config['dateformatadmin'] );
		return $date;
	}

	function cid() {
		$ret = '<a href="../viewcat.php?cid=' . $this -> getVar( 'cid', 'e' ) . '">' . iml_cattitle( $this -> getVar( 'cid', 'e' ) ) . '</a>';
		return $ret;
	}

	function ViewLink() {
		$nice_link = iml_nicelink( $this -> getVar( 'title' ), $this -> getVar( 'nice_url' ) );
		if ( icms::$module -> config['niceurl'] ) {
			$title = '<a href="../singlelink.php?lid=' . $this -> getVar( 'lid' ) . '&amp;title=' . $nice_link . '">' . $this -> getVar( 'title' ) . '</a>';
		} else {
			$title = '<a href="../singlelink.php?lid=' . $this -> getVar( 'lid' ) . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $this -> getVar( 'title' ) ) ) ) . '</a>';
		}
		return $title;
	}

	function getEditLink() {
		$ret = '<a href="../admin/links.php?op=edit&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/world_edit.png" alt="" title="' . _AM_IMLINKS_ICO_EDIT . '" /></a>';
		return $ret;
	}

	function getDeleteLink() {
		$ret = '<a href="../admin/links.php?op=delete&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/world_delete.png" alt="" title="' . _AM_IMLINKS_ICO_DELETE . '" /></a>';
		return $ret;
	}

	function getCloneLink() {
		$ret = '<a href="../admin/links.php?op=clone&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/world_clone.png" alt="" title="' . _AM_IMLINKS_ICO_CLONE . '" /></a>';
		return $ret;
	}

	function getAltcatLink() {
		$ret = '<a href="../admin/altcat.php?op=main&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/folder_add.png" alt="" title="' . _AM_IMLINKS_ALTCAT_CREATEF . '" /></a>';
		return $ret;
	}

	function getWhoisLink() {
		$whoisurl = str_replace( 'http://', '', $this -> getVar( 'url' ) );
		$ret = '<a href="http://whois.domaintools.com/' . $whoisurl . '" target="_blank"><img src="../images/icon/domaintools.png" alt="" title="WHOIS" /></a>';
		return $ret;
	}

	function getApprove() {
		$ret = '<a href="../admin/newlinks.php?op=approve&amp;lid=' . $this -> getVar( 'lid' ) . '"><img src="../images/icon/accept.png" alt="" title="' . _AM_IMLINKS_ICO_APPROVE . '" /></a>';
		return $ret;
	}

}