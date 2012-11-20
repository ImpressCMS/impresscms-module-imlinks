<?php
/*************************************************************************/
# Waiting Contents Extensible                                            #
# Plugin for module WF-Links                                             #
#                                                                        #
# Author                                                                 #
# flying.tux     -   flying.tux@gmail.com                                #
#                                                                        #
# Last modified on 25.04.2005                                            #
/*************************************************************************/
# Since imLinks 1.00                                                     #
# McDonald     -   pietjebell31@hotmail.com                              #
#                                                                        #
# Last modified on 24.03.2011                                            #
/*************************************************************************/	
	
function b_waiting_imlinks() {

	// name of installation folder imLinks
	$imlinks_dirname = 'imlinks';
	
	$ret = array();
	
	// imlinks waiting
	$block = array();
	$result = icms::$xoopsDB -> query ( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE status=0' );
	if ( $result ) {
		$block['adminlink'] = ICMS_URL . '/modules/' . $imlinks_dirname . '/admin/newlinks.php';
		list( $block['pendingnum'] ) = icms::$xoopsDB -> fetchRow( $result );
		$block['lang_linkname'] = _PI_WAITING_WAITINGS;
	}
	$ret[] = $block;

	// imlinks broken
	$block = array();
	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) );
	if ( $result ) {
		$block['adminlink'] = ICMS_URL . '/modules/' . $imlinks_dirname . '/admin/brokenlink.php';
		list( $block['pendingnum'] ) = icms::$xoopsDB -> fetchRow( $result );
		$block['lang_linkname'] = _PI_WAITING_BROKENS;
	}
	$ret[] = $block;

	// imlinks modreq
	$block = array();
	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) );
	if ( $result ) {
		$block['adminlink'] = ICMS_URL . '/modules/' . $imlinks_dirname . '/admin/modifications.php';
		list( $block['pendingnum'] ) = icms::$xoopsDB -> fetchRow( $result );
		$block['lang_linkname'] = _PI_WAITING_MODREQS;
	}
	$ret[] = $block;

	return $ret;
}
?>