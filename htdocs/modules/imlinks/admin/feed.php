<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Link 1.06
*
* File: admin/feed.php
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );

function imlinks_rss_edit() {
	global $icmsConfig, $icmsAdminTpl;

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_configs' );
	$feed_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	$webmaster	= $icmsConfig['adminmail'] . ' (' . icms::$module -> getVar( 'name' ) . ') ';
	$modulename	= icms_getCurrentModuleName();
	$modulevers	= number_format( icms::$module -> getVar( 'version' ) / 100 , 2, '.', '' );
	$generator	= ICMS_VERSION_NAME . ' ( module: ' . $modulename . ' ' . $modulevers . ' )';
	$copyright	= _AM_IMLINKS_COPYRIGHT . ' ' . formatTimestamp( time(), 'Y' ) . ' - ' . $icmsConfig['sitename'];

	$rssactive		= $feed_array['rssactive'];
	$rsstitle		= $feed_array['rsstitle'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsstitle'] ) ) : $icmsConfig['sitename'];
	$rsslink		= $feed_array['rsslink'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsslink'] ) ) : ICMS_URL;
	$rssdsc			= $feed_array['rssdsc'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssdsc'] ) ) : $icmsConfig['slogan'];
	$rssimgurl		= $feed_array['rssimgurl'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssimgurl'] ) ) : ICMS_URL .'/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/imlinks_iconbig.png';
	$rsswidth		= $feed_array['rsswidth'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsswidth'] ) ) : '32';
	$rssheight		= $feed_array['rssheight'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssheight'] ) ) : '32';
	$rssimgtitle	= $feed_array['rssimgtitle'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssimgtitle'] ) ) : $modulename;
	$rssimglink		= $feed_array['rssimglink'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssimglink'] ) ) : ICMS_URL;
	$rssttl			= $feed_array['rssttl'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssttl'] ) ) : '60';
	$rsswebmaster	= $feed_array['rsswebmaster'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsswebmaster'] ) ) : $webmaster;
	$rsseditor		= $feed_array['rsseditor'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsseditor'] ) ) : $webmaster;
	$rsscategory	= $feed_array['rsscategory'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsscategory'] ) ) : $modulename;
	$rssgenerator	= $feed_array['rssgenerator'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssgenerator'] ) ) : $generator;
	$rsscopyright	= $feed_array['rsscopyright'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsscopyright'] ) ) : $copyright;
	$rsstotal		= $feed_array['rsstotal'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rsstotal'] ) ) : '15';
	$rssofftitle	= $feed_array['rssofftitle'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssofftitle'] ) ) : _AM_IMLINKS_RSSOFFTITLE;
	$rssoffdsc	= $feed_array['rssoffdsc'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $feed_array['rssoffdsc'] ) ) : _AM_IMLINKS_RSSOFFMSGDEF;

	icms_cp_header();
	iml_adminmenu( 7, _AM_IMLINKS_RSSFEED );

	echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
			<img src="../images/icon/feed32.png" alt="" style="float: left; padding-right: 10px;" />
			' . _AM_IMLINKS_RSSFEEDDSC . '';
			if ( $feed_array['rsstitle'] == '' ) {
				echo '<br /><br /><span style="text-decoration: blink; font-weight: bold; color: red;">' . _AM_IMLINKS_RSSCLICKSUBMIT . '</span>';
			}
	echo '</div><br />';

	if ( icms::$module -> config['uselyte'] == 1 ) $icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />' );

	$sform = new icms_form_Theme( _AM_IMLINKS_RSSFEEDCFG, 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart / form - data"' );

	$rssstatus_radio = new icms_form_elements_Radioyn( _AM_IMLINKS_RSSACTIVE . imlinks_tooltip( _AM_IMLINKS_RSSACTIVEDSC, 'help' ), 'rssactive', $rssactive, ' ' . _YES . ' ', ' ' . _NO . '' );
	if ( icms::$module -> config['uselyte'] == 0 ) $rssstatus_radio -> setDescription( _AM_IMLINKS_RSSACTIVEDSC );
	$sform -> addElement( $rssstatus_radio );

	$formtitle = new icms_form_elements_Text( _AM_IMLINKS_RSSTITLE . imlinks_tooltip( _AM_IMLINKS_RSSTITLEDSC, 'help' ), 'rsstitle', 90, 128, $rsstitle );
	if ( icms::$module -> config['uselyte'] == 0 ) $formtitle -> setDescription( _AM_IMLINKS_RSSTITLEDSC );
	$sform -> addElement( $formtitle, false );

	$formlink = new icms_form_elements_Text( _AM_IMLINKS_RSSLINKS . imlinks_tooltip( _AM_IMLINKS_RSSLINKSDSC, 'help' ), 'rsslink', 90, 255, $rsslink );
	if ( icms::$module -> config['uselyte'] == 0 ) $formlink -> setDescription( _AM_IMLINKS_RSSLINKSDSC );
	$sform -> addElement( $formlink, false );

	$formdsc = new icms_form_elements_Textarea( _AM_IMLINKS_RSSDESCRIPTION . imlinks_tooltip( _AM_IMLINKS_RSSDESCRIPTIONDSC, 'help' ), 'rssdsc', $rssdsc, 4, 50 );
	if ( icms::$module -> config['uselyte'] == 0 ) $formdsc -> setDescription( _AM_IMLINKS_RSSDESCRIPTIONDSC );
	$sform -> addElement( $formdsc, false );

	$formimage = new icms_form_elements_Text( _AM_IMLINKS_RSSIMAGE . imlinks_tooltip( _AM_IMLINKS_RSSIMAGEDSC, 'help' ), 'rssimgurl', 90, 255, $rssimgurl );
	if ( icms::$module -> config['uselyte'] == 0 ) $formimage -> setDescription( _AM_IMLINKS_RSSIMAGEDSC );
	$sform -> addElement( $formimage, false );

	$formwidth = new icms_form_elements_Text( _AM_IMLINKS_RSSWIDTH . imlinks_tooltip( _AM_IMLINKS_RSSWIDTHDSC, 'help' ), 'rsswidth', 3, 8, $rsswidth );
	if ( icms::$module -> config['uselyte'] == 0 ) $formwidth -> setDescription( _AM_IMLINKS_RSSWIDTHDSC );
	$sform -> addElement( $formwidth, false );

	$formheight = new icms_form_elements_Text( _AM_IMLINKS_RSSHEIGHT . imlinks_tooltip( _AM_IMLINKS_RSSHEIGHTDSC, 'help' ), 'rssheight', 3, 8, $rssheight );
	if ( icms::$module -> config['uselyte'] == 0 ) $formheight -> setDescription( _AM_IMLINKS_RSSHEIGHTDSC );
	$sform -> addElement( $formheight, false );

	$formimgtitle = new icms_form_elements_Text( _AM_IMLINKS_RSSIMGTITLE . imlinks_tooltip( _AM_IMLINKS_RSSIMGTITLEDSC, 'help' ), 'rssimgtitle', 90, 128, $rssimgtitle );
	if ( icms::$module -> config['uselyte'] == 0 ) $formimgtitle -> setDescription( _AM_IMLINKS_RSSIMGTITLEDSC );
	$sform -> addElement( $formimgtitle, false );

	$formimglink = new icms_form_elements_Text( _AM_IMLINKS_RSSIMGLINK . imlinks_tooltip( _AM_IMLINKS_RSSIMGLINKDSC, 'help' ), 'rssimglink', 90, 255, $rssimglink );
	if ( icms::$module -> config['uselyte'] == 0 ) $formimglink -> setDescription( _AM_IMLINKS_RSSIMGLINKDSC );
	$sform -> addElement( $formimglink, false );

	$formttl = new icms_form_elements_Text( _AM_IMLINKS_RSSTTL . imlinks_tooltip( _AM_IMLINKS_RSSTTLDSC, 'help' ), 'rssttl', 3, 128, $rssttl );
	if ( icms::$module -> config['uselyte'] == 0 ) $formttl -> setDescription( _AM_IMLINKS_RSSTTLDSC );
	$sform -> addElement( $formttl, false );

	$formwebmaster = new icms_form_elements_Text( _AM_IMLINKS_RSSWEBMASTER . imlinks_tooltip( _AM_IMLINKS_RSSWEBMASTERDSC, 'help' ), 'rsswebmaster', 90, 255, $rsswebmaster );
	if ( icms::$module -> config['uselyte'] == 0 ) $formwebmaster -> setDescription( _AM_IMLINKS_RSSWEBMASTERDSC );
	$sform -> addElement( $formwebmaster, false );

	$formeditor = new icms_form_elements_Text( _AM_IMLINKS_RSSEDITOR . imlinks_tooltip( _AM_IMLINKS_RSSEDITORDSC, 'help' ), 'rsseditor', 90, 255, $rsseditor );
	if ( icms::$module -> config['uselyte'] == 0 ) $formeditor -> setDescription( _AM_IMLINKS_RSSEDITORDSC );
	$sform -> addElement( $formeditor, false );

	$formcategory = new icms_form_elements_Text( _AM_IMLINKS_RSSCATEGORY . imlinks_tooltip( _AM_IMLINKS_RSSCATEGORYDSC, 'help' ), 'rsscategory', 90, 128, $rsscategory );
	if ( icms::$module -> config['uselyte'] == 0 ) $formcategory -> setDescription( _AM_IMLINKS_RSSCATEGORYDSC );
	$sform -> addElement( $formcategory, false );

	$formgenerator = new icms_form_elements_Text( _AM_IMLINKS_RSSGENERATOR . imlinks_tooltip( _AM_IMLINKS_RSSGENERATORDSC, 'help' ), 'rssgenerator', 90, 128, $rssgenerator );
	if ( icms::$module -> config['uselyte'] == 0 ) $formgenerator -> setDescription( _AM_IMLINKS_RSSGENERATORDSC );
	$sform -> addElement( $formgenerator, false );

	$formcopyright = new icms_form_elements_Text( _AM_IMLINKS_RSSCOPYRIGHT . imlinks_tooltip( _AM_IMLINKS_RSSCOPYRIGHTDSC, 'help' ), 'rsscopyright', 90, 128, $rsscopyright );
	if ( icms::$module -> config['uselyte'] == 0 ) $formcopyright -> setDescription( _AM_IMLINKS_RSSCOPYRIGHTDSC );
	$sform -> addElement( $formcopyright, false );

	$formtotal = new icms_form_elements_Text( _AM_IMLINKS_RSSTOTAL . imlinks_tooltip( _AM_IMLINKS_RSSTOTALDSC, 'help' ), 'rsstotal', 3, 8, $rsstotal );
	if ( icms::$module -> config['uselyte'] == 0 ) $formtotal -> setDescription( _AM_IMLINKS_RSSTOTALDSC );
	$sform -> addElement( $formtotal, false );

	$formofftitle = new icms_form_elements_Text( _AM_IMLINKS_RSSOFFLINE . imlinks_tooltip( _AM_IMLINKS_RSSOFFLINEDSC, 'help' ), 'rssofftitle', 90, 128, $rssofftitle );
	if ( icms::$module -> config['uselyte'] == 0 ) $formofftitle -> setDescription( _AM_IMLINKS_RSSOFFLINEDSC );
	$sform -> addElement( $formofftitle, false );

	$formoffmsg = new icms_form_elements_Textarea( _AM_IMLINKS_RSSOFFMSG . imlinks_tooltip( _AM_IMLINKS_RSSOFFMSGDSC, 'help' ), 'rssoffdsc', $rssoffdsc, 4, 50 );
	if ( icms::$module -> config['uselyte'] == 0 ) $formoffmsg -> setDescription( _AM_IMLINKS_RSSOFFMSGDSC );
	$sform -> addElement( $formoffmsg, false );

	$button_tray = new icms_form_elements_Tray( '', '' );
	$hidden = new icms_form_elements_Hidden( 'op', 'save' );
	$button_tray -> addElement( $hidden );

	$butt_create = new icms_form_elements_Button( '', '', _SUBMIT, 'submit' );
	$butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'saverss\'"' );
	$button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden );

	icms_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
		imlinks_rss_edit();
		break;

	case 'saverss':
		$rssactive		= ( $_POST['rssactive'] == 1 ) ? 1 : 0;
		$rsstitle		= icms_core_DataFilter::addSlashes( trim( $_POST['rsstitle'] ) );
		$rsslink		= ( $_POST['rsslink'] != 'http://' ) ? icms_core_DataFilter::addSlashes( $_POST['rsslink'] ) : '';
		$rssdsc			= icms_core_DataFilter::addSlashes( trim( $_POST['rssdsc'] ) );
		$rssimgurl		= icms_core_DataFilter::addSlashes( trim( $_POST['rssimgurl'] ) );
		$rsswidth		= icms_core_DataFilter::addSlashes( trim( $_POST['rsswidth'] ) );
		$rssheight		= icms_core_DataFilter::addSlashes( trim( $_POST['rssheight'] ) );
		$rssimgtitle	= icms_core_DataFilter::addSlashes( trim( $_POST['rssimgtitle'] ) );
		$rssimglink		= icms_core_DataFilter::addSlashes( trim( $_POST['rssimglink'] ) );
		$rssttl			= icms_core_DataFilter::addSlashes( trim( $_POST['rssttl'] ) );
		$rsswebmaster	= icms_core_DataFilter::addSlashes( trim( $_POST['rsswebmaster'] ) );
		$rsseditor		= icms_core_DataFilter::addSlashes( trim( $_POST['rsseditor'] ) );
		$rsscategory	= icms_core_DataFilter::addSlashes( trim( $_POST['rsscategory'] ) );
		$rssgenerator	= icms_core_DataFilter::addSlashes( trim( $_POST['rssgenerator'] ) );
		$rsscopyright	= icms_core_DataFilter::addSlashes( trim( $_POST['rsscopyright'] ) );
		$rsstotal		= icms_core_DataFilter::addSlashes( trim( $_POST['rsstotal'] ) );
		$rssofftitle	= icms_core_DataFilter::addSlashes( trim( $_POST['rssofftitle'] ) );
		$rssoffdsc		= icms_core_DataFilter::addSlashes( trim( $_POST['rssoffdsc'] ) );

		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_configs' ) . " SET rssactive='$rssactive', rsstitle='$rsstitle', rsslink='$rsslink', rssdsc='$rssdsc', rssimgurl='$rssimgurl', rsswidth='$rsswidth', rssheight='$rssheight', rssimgtitle='$rssimgtitle', rssimglink='$rssimglink', rssttl='$rssttl', rsswebmaster='$rsswebmaster', rsseditor='$rsseditor', rsscategory='$rsscategory', rssgenerator='$rssgenerator', rsscopyright='$rsscopyright', rsstotal='$rsstotal', rssofftitle='$rssofftitle', rssoffdsc='$rssoffdsc'";
		$result = icms::$xoopsDB -> queryF( $sql );
		$error = _AM_IMLINKS_DBERROR . ': <br /><br />' . $sql;
		if ( !$result ) {
			trigger_error( $error, E_USER_ERROR );
		}
		redirect_header( 'links.php', 1, _AM_IMLINKS_RSSDBUPDATED );
		break;
}
?>