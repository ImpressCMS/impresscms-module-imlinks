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
	global $immyts, $icmsConfig;

	$mydirname = basename( dirname( dirname( __FILE__ ) ) );

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_configs' );
	$feed_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	$webmaster	= $icmsConfig['adminmail'] . ' (' . icms::$module -> getVar( 'name' ) . ') ';
	$modulename	= icms_getCurrentModuleName();
	$modulevers	= number_format( icms::$module -> getVar( 'version' ) / 100 , 2, '.', '' );
	$generator	= ICMS_VERSION_NAME . ' ( module: ' . $modulename . ' ' . $modulevers . ' )';
	$copyright	= _AM_IMLINKS_COPYRIGHT . ' ' . formatTimestamp( time(), 'Y' ) . ' - ' . $icmsConfig['sitename'];

	$rssactive		= $feed_array['rssactive'];
	$rsstitle		= $feed_array['rsstitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsstitle'] ) : $icmsConfig['sitename'];
	$rsslink		= $feed_array['rsslink'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsslink'] ) : ICMS_URL;
	$rssdsc			= $feed_array['rssdsc'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssdsc'] ) : $icmsConfig['slogan'];
	$rssimgurl		= $feed_array['rssimgurl'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimgurl'] ) : ICMS_URL .'/modules/' . $mydirname . '/images/imlinks_iconbig.png';
	$rsswidth		= $feed_array['rsswidth'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsswidth'] ) : '32';
	$rssheight		= $feed_array['rssheight'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssheight'] ) : '32';
	$rssimgtitle	= $feed_array['rssimgtitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimgtitle'] ) : $modulename;
	$rssimglink		= $feed_array['rssimglink'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimglink'] ) : ICMS_URL;
	$rssttl			= $feed_array['rssttl'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssttl'] ) : '60';
	$rsswebmaster	= $feed_array['rsswebmaster'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsswebmaster'] ) : $webmaster;
	$rsseditor		= $feed_array['rsseditor'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsseditor'] ) : $webmaster;
	$rsscategory	= $feed_array['rsscategory'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsscategory'] ) : $modulename;
	$rssgenerator	= $feed_array['rssgenerator'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssgenerator'] ) : $generator;
	$rsscopyright	= $feed_array['rsscopyright'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsscopyright'] ) : $copyright;
	$rsstotal		= $feed_array['rsstotal'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsstotal'] ) : '15';
	$rssofftitle	= $feed_array['rssofftitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssofftitle'] ) : _AM_IMLINKS_RSSOFFTITLE;
	$rssoffdsc	= $feed_array['rssoffdsc'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssoffdsc'] ) : _AM_IMLINKS_RSSOFFMSGDEF;

	icms_cp_header();
	iml_adminmenu( 7, _AM_IMLINKS_RSSFEED );

	echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
			<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/feed32.png" alt="" style="float: left; padding-right: 10px;" />
			' . _AM_IMLINKS_RSSFEEDDSC . '';
			if ( $feed_array['rsstitle'] == '' ) {
				echo '<br /><br /><span style="text-decoration: blink; font-weight: bold; color: red;">' . _AM_IMLINKS_RSSCLICKSUBMIT . '</span>';
			}
	echo '</div><br />';

	echo '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />';

	$sform = new icms_form_Theme( _AM_IMLINKS_RSSFEEDCFG, 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart / form - data"' );

	$rssstatus_radio = new icms_form_elements_Radioyn( _AM_IMLINKS_RSSACTIVE . imlinks_helptip( _AM_IMLINKS_RSSACTIVEDSC ), 'rssactive', $rssactive, ' ' . _YES . ' ', ' ' . _NO . '' );
	$sform -> addElement( $rssstatus_radio );

	$formtitle = new icms_form_elements_Text( _AM_IMLINKS_RSSTITLE . imlinks_helptip( _AM_IMLINKS_RSSTITLEDSC ), 'rsstitle', 90, 128, $rsstitle );
	$sform -> addElement( $formtitle, false );

	$formlink = new icms_form_elements_Text( _AM_IMLINKS_RSSLINKS . imlinks_helptip( _AM_IMLINKS_RSSLINKSDSC ), 'rsslink', 90, 255, $rsslink );
	$sform -> addElement( $formlink, false );

	$formdsc = new icms_form_elements_Textarea( _AM_IMLINKS_RSSDESCRIPTION . imlinks_helptip( _AM_IMLINKS_RSSDESCRIPTIONDSC ), 'rssdsc', $rssdsc, 4, 50 );
	$sform -> addElement( $formdsc, false );

	$formimage = new icms_form_elements_Text( _AM_IMLINKS_RSSIMAGE . imlinks_helptip( _AM_IMLINKS_RSSIMAGEDSC ), 'rssimgurl', 90, 255, $rssimgurl );
	$sform -> addElement( $formimage, false );

	$formwidth = new icms_form_elements_Text( _AM_IMLINKS_RSSWIDTH . imlinks_helptip( _AM_IMLINKS_RSSWIDTHDSC ), 'rsswidth', 3, 8, $rsswidth );
	$sform -> addElement( $formwidth, false );

	$formheight = new icms_form_elements_Text( _AM_IMLINKS_RSSHEIGHT . imlinks_helptip( _AM_IMLINKS_RSSHEIGHTDSC ), 'rssheight', 3, 8, $rssheight );
	$sform -> addElement( $formheight, false );

	$formimgtitle = new icms_form_elements_Text( _AM_IMLINKS_RSSIMGTITLE . imlinks_helptip( _AM_IMLINKS_RSSIMGTITLEDSC ), 'rssimgtitle', 90, 128, $rssimgtitle );
	$sform -> addElement( $formimgtitle, false );

	$formimglink = new icms_form_elements_Text( _AM_IMLINKS_RSSIMGLINK . imlinks_helptip( _AM_IMLINKS_RSSIMGLINKDSC ), 'rssimglink', 90, 255, $rssimglink );
	$sform -> addElement( $formimglink, false );

	$formttl = new icms_form_elements_Text( _AM_IMLINKS_RSSTTL . imlinks_helptip( _AM_IMLINKS_RSSTTLDSC ), 'rssttl', 3, 128, $rssttl );
	$sform -> addElement( $formttl, false );

	$formwebmaster = new icms_form_elements_Text( _AM_IMLINKS_RSSWEBMASTER . imlinks_helptip( _AM_IMLINKS_RSSWEBMASTERDSC ), 'rsswebmaster', 90, 255, $rsswebmaster );
	$sform -> addElement( $formwebmaster, false );

	$formeditor = new icms_form_elements_Text( _AM_IMLINKS_RSSEDITOR . imlinks_helptip( _AM_IMLINKS_RSSEDITORDSC ), 'rsseditor', 90, 255, $rsseditor );
	$sform -> addElement( $formeditor, false );

	$formcategory = new icms_form_elements_Text( _AM_IMLINKS_RSSCATEGORY . imlinks_helptip( _AM_IMLINKS_RSSCATEGORYDSC ), 'rsscategory', 90, 128, $rsscategory );
	$sform -> addElement( $formcategory, false );

	$formgenerator = new icms_form_elements_Text( _AM_IMLINKS_RSSGENERATOR . imlinks_helptip( _AM_IMLINKS_RSSGENERATORDSC ), 'rssgenerator', 90, 128, $rssgenerator );
	$sform -> addElement( $formgenerator, false );

	$formcopyright = new icms_form_elements_Text( _AM_IMLINKS_RSSCOPYRIGHT . imlinks_helptip( _AM_IMLINKS_RSSCOPYRIGHTDSC ), 'rsscopyright', 90, 128, $rsscopyright );
	$sform -> addElement( $formcopyright, false );

	$formtotal = new icms_form_elements_Text( _AM_IMLINKS_RSSTOTAL . imlinks_helptip( _AM_IMLINKS_RSSTOTALDSC ), 'rsstotal', 3, 8, $rsstotal );
	$sform -> addElement( $formtotal, false );

	$formofftitle = new icms_form_elements_Text( _AM_IMLINKS_RSSOFFLINE . imlinks_helptip( _AM_IMLINKS_RSSOFFLINEDSC ), 'rssofftitle', 90, 128, $rssofftitle );
	$sform -> addElement( $formofftitle, false );

	$formoffmsg = new icms_form_elements_Textarea( _AM_IMLINKS_RSSOFFMSG . imlinks_helptip( _AM_IMLINKS_RSSOFFMSGDSC ), 'rssoffdsc', $rssoffdsc, 4, 50 );
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
		redirect_header( 'index.php', 1, _AM_IMLINKS_RSSDBUPDATED );
		break;
}
?>