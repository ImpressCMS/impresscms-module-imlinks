<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: update.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				WF-Links 
* @since			1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'header.php';

define ( "IS_UPDATE_FILE", true );

global $xoopsDB, $xoopsConfig, $xoopsUser, $xoopsModule;
if ( !is_object( $xoopsUser ) || !is_object( $xoopsModule ) || !$xoopsUser -> isAdmin( $xoopsModule -> getVar( 'mid' ) ) ) {
    exit( "Access Denied" );
} 
include ICMS_ROOT_PATH . '/header.php';

function install_header() {

    ?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>
	<head>
	<title>imLinks Upgrade</title>
	<meta http-equiv="Content-Type" content="text/html; charset=" />
	</head>
	<body>
	<br /><div style="text-align:center"><img src="./images/logo-en.gif" alt="" /><h2>imLinks Update</h2>
<?php
} 

function install_footer() {
    ?>
	<img src="images/imlinks_ilogo.png" alt="imLinks" border="0" /></div>
	</body>
	</html>
<?php
} 
// echo "Welcome to the imLinks update script";
foreach ( $_POST as $k => $v ) {
    ${$k} = $v;
} 

foreach ( $_GET as $k => $v ) {
    ${$k} = $v;
} 

if ( !isset( $action ) || $action == "" ) {
    $action = 'message';
} 

if ( $action == 'message' ) {
    install_header();

    $modhandler = &xoops_gethandler( 'module' );
    $mylinks = &$modhandler -> getByDirname( 'mylinks' );
    if ( $mylinks ) {
        $mylinks_version = round( $mylinks -> getVar( 'version' ) / 100, 2 );
    } 

    $modhandler = &xoops_gethandler( 'module' );
    $weblinks = &$modhandler -> getByDirname( 'weblinks' );
    if ( $weblinks ) {
        $weblinks_version = round( $weblinks -> getVar( 'version' ) / 100, 2 );
    } 

    $modhandler = &xoops_gethandler( 'module' );
    $weblinks = &$modhandler -> getByDirname( 'wflinks' );
    if ( $weblinks ) {
        $weblinks_version = round( $weblinks -> getVar( 'version' ) / 100, 2 );
    } 

 //   echo $act_wflinks_version;

    /**
     * Set version number
     */

    $link_num = 0;
    if ( isset( $mylinks_version ) ) {
        $link_num = $mylinks_version;
    } 

    if ( isset( $weblinks_version ) ) {
        $link_num = $weblinks_version;
    } 

    if ( isset( $wflinks_version ) ) {
        $link_num = $wflinks_version;
    } 

    echo "<div><b>Welcome to the imLinks Update script</b></div><br />";
    echo "<div>This script will upgrade Mylinks or weblinks.</div><br /><br />";

    if ( $link_num != 0 ) {
        echo "<div><span style='color:#ff0000;font-weight:bold;'>WARNING: If upgrading from Mylinks, weblinks or WF-Links. These modules will **NOT** function after the upgrade and should be uninstalled. </span></div><br />";
        echo "<div><b>Before upgrading imLinks, make sure that you have:</b></div><br />";
        echo "<div><span style='color:#ff0000; '>1. <b>Important:</b> First, create a back-up from your database before proceeding further. </span></div>";
        echo "<div>2. Upload all the contents of the imLinks package to your server.</div><br />";
        echo "<div>3. After the upgrade you must update imLinks in System Admin -> Modules.</div><br />";

        echo "<div><b>Press the button below to ";
        switch ( $link_num ) {
            case "1.0.1":
            case "1.10":
            case "1.1":
                echo "update Mylinks $link_num</b></div>";
                break;
            case "0.93":
                echo "update weblinks $link_num</b></div>";	
                break;
			case '1.06':
				echo "update WF-Links $link_num</b></div>";
				break;
        } 

        echo "<form action='" . $HTTP_SERVER_VARS['PHP_SELF'] . "' method='post'>
			<input type='submit' value='Start Upgrade' />
			<input type='hidden' value='upgrade' name='action' />
			<input type='hidden' name='link_num' value=$link_num />
			</form>";
    } else {
        echo "<h4>No module installed to update</h4>";
    } 

    install_footer();
    include ICMS_ROOT_PATH . '/footer.php';
    exit();
} 
// THIS IS THE UPDATE DATABASE FROM HERE!!!!!!!!! DO NOT TOUCH THIS!!!!!!!!
if ( $action == 'upgrade' ) {
    install_header();

    $num = $_POST['link_num'];
    switch ( $num ) {
        case "1.0.1":
        case "1.10":
        case "1.1":
            echo "Updating from Mylinks $num";
            include "update/mylinks_update.php";
            break;
        case "0.93":
            echo "Updating from weblinks $num";
            include "update/weblinks_update.php";
            break;
		case "1.06":
            echo "Updating from WF-Links $num";
            include "update/wflinks_update.php";
            break;
        case "0":
        default:
            echo "Version: $num not supported yet. Please contact the developers of this module";
            break;
    } 
    echo "To complete the upgrade, you must update imLinks in ImpressCMS System Admin -> Modules.<br /><br />";
    echo "Please enjoy using imLinks!";
    include ICMS_ROOT_PATH . '/footer.php';
} 

?>