<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: update.php
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

include 'header.php';

define ( 'IS_UPDATE_FILE', true );

if ( !is_object( $icmsUser ) || !is_object( icms::$module ) || !icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) {
	exit( 'Access Denied' );
}
include ICMS_ROOT_PATH . '/header.php';

function install_footer() {
	echo '<img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/imlinks_ilogo.png" alt="imLinks" border="0" />';
}
// echo "Welcome to the imLinks update script";
foreach ( $_POST as $k => $v ) {
	${$k} = $v;
}
foreach ( $_GET as $k => $v ) {
	${$k} = $v;
}
if ( !isset( $action ) || $action == '' ) {
	$action = 'message';
}
if ( $action == 'message' ) {
	$modhandler = icms::handler( 'icms_module' );
	$wflinks = &$modhandler -> getByDirname( 'wflinks' );
	if ( $wflinks ) {
		$wflinks_version = round( $wflinks -> getVar( 'version' ) / 100, 2 );
	}
	$link_num = 0;
	if ( isset( $wflinks_version ) ) {
		$link_num = $wflinks_version;
	}
	echo '<div style="text-align: center; padding-bottom: 20px;"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/logo-en.png" alt="" /></div>';
	echo '<div><b>Welcome to the imLinks Update script</b></div><br />';
	echo '<div>This script will upgrade imLinks from WF-Links.</div><br /><br />';

	if ( $link_num != 0 ) {
		echo '<div><b>Before upgrading to imLinks, make sure that you have:</b></div><br />';
		echo '<div><span style="color:#ff0000; ">1. <b>Important:</b> First, create a back-up from your database before proceeding further. </span></div>';
		echo '<div>2. Upload all the contents of the imLinks package to your server.</div>';
		echo '<div>3. After the upgrade you must update imLinks in System Admin -> Modules.</div><br />';
		echo '&nbsp;';
		echo '<div><span style="color:#ff0000; "><b>Note: All rating information will be removed. By clicking the button below you agree with this.</b></span></div>';
		echo '&nbsp;';
		echo '<div><b>Press the button below to ';

		switch ( $link_num ) {
			case '1.06':
			case '1.07':
				echo 'upgrade from WF-Links ' . $link_num . '</b></div>';
				break;
		}

		echo '<form action="' . $HTTP_SERVER_VARS['PHP_SELF'] . '" method="post">
			<input type="submit" value="Start Upgrade" />
			<input type="hidden" value="upgrade" name="action" />
			<input type="hidden" name="link_num" value="' . $link_num . '" />
			</form>';
	} else {
		echo '<h4>No module installed to update</h4>';
	}

	// install_footer();
	include ICMS_ROOT_PATH . '/footer.php';
	exit();
}
// THIS IS THE UPDATE DATABASE FROM HERE!!!!!!!!! DO NOT TOUCH THIS!!!!!!!!
if ( $action == 'upgrade' ) {

	$num = $_POST['link_num'];
	switch ( $num ) {
		case '1.06':
		case '1.07':
			echo '<div style="text-align: center; padding-bottom: 20px;"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/logo-en.png" alt="" /></div>';
			echo 'Updating from WF-Links $num';
			include 'update/wflinks_update.php';
			break;
		case '0':
		default:
			echo 'Version: ' . $num . ' not supported yet. Please contact the developers of this module';
			break;
	}
	echo 'To complete the upgrade, you must update imLinks in ImpressCMS Control Panel -> Modules.<br /><br />';
	echo 'Please enjoy using imLinks!';
	include ICMS_ROOT_PATH . '/footer.php';
}
?>