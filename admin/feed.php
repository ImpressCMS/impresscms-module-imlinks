<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Link 1.06
*
* File: admin/feed.php
*
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		imLinks
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );

function imlinks_rss_edit() {
	global $xoopsDB, $xoopsConfig, $xoopsModule, $immyts;
	
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );

	include_once ICMS_ROOT_PATH . '/class/xoopsformloader.php';

	$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_configs' );
	$feed_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
	
	$webmaster  = $xoopsConfig['adminmail'] . ' (' . $xoopsModule -> getVar( 'name' ) . ') ';
	$modulename = icms_getCurrentModuleName();
	$modulevers = number_format( $xoopsModule -> getVar( 'version' ) / 100 , 2, '.', '' );
	$generator  = XOOPS_VERSION . ' ( module: ' . $modulename . ' ' . $modulevers . ' )';
	$copyright  = _AM_IMLINKS_COPYRIGHT . ' ' . formatTimestamp( time(), 'Y' ) . ' - ' . $xoopsConfig['sitename'];
		
	$rssactive   = $feed_array['rssactive'];
	$rsstitle    = $feed_array['rsstitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsstitle'] ) : $xoopsConfig['sitename'];
	$rsslink     = $feed_array['rsslink'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsslink'] ) : ICMS_URL;
	$rssdsc      = $feed_array['rssdsc'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssdsc'] ) : $xoopsConfig['slogan'];
	$rssimgurl   = $feed_array['rssimgurl'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimgurl'] ) : ICMS_URL .'/modules/' . $mydirname . '/images/imlinks_iconbig.png';
	$rsswidth    = $feed_array['rsswidth'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsswidth'] ) : '32';
	$rssheight   = $feed_array['rssheight'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssheight'] ) : '32';
	$rssimgtitle = $feed_array['rssimgtitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimgtitle'] ) : $modulename;
	$rssimglink  = $feed_array['rssimglink'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimglink'] ) : ICMS_URL;
	$rssttl      = $feed_array['rssttl'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssttl'] ) : '60';
	$rsswebmaster= $feed_array['rsswebmaster'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsswebmaster'] ) : $webmaster;
	$rsseditor   = $feed_array['rsseditor'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsseditor'] ) : $webmaster;
	$rsscategory = $feed_array['rsscategory'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsscategory'] ) : $modulename;
	$rssgenerator= $feed_array['rssgenerator'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssgenerator'] ) : $generator;
	$rsscopyright= $feed_array['rsscopyright'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsscopyright'] ) : $copyright;
	$rsstotal    = $feed_array['rsstotal'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsstotal'] ) : '15';
	$rssofftitle = $feed_array['rssofftitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssofftitle'] ) : _AM_IMLINKS_RSSOFFTITLE;
	$rssoffdsc   = $feed_array['rssoffdsc'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssoffdsc'] ) : _AM_IMLINKS_RSSOFFMSGDEF;
		
	xoops_cp_header();
	iml_adminmenu( 7, _AM_IMLINKS_RSSFEED );
	
	echo '	<fieldset style="border: #e8e8e8 1px solid;">
			<div style="padding: 8px;">
			<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/feed32.png" alt="" style="float: left; padding-right: 10px;" />
			' . _AM_IMLINKS_RSSFEEDDSC . '';
			if ( $feed_array['rsstitle'] == '' ) {
				echo '<br /><br /><span style="text-decoration: blink; font-weight: bold;">' . _AM_IMLINKS_RSSCLICKSUBMIT . '</span>';
			}
	echo '
			</div>
			</fieldset>
		 ';
	
	$sform = new XoopsThemeForm( _AM_IMLINKS_RSSFEEDCFG, 'storyform', xoops_getenv( 'PHP_SELF' ) );
	$sform -> setExtra( 'enctype="multipart / form - data"' );
		
	$rssstatus_radio = new XoopsFormRadioYN( _AM_IMLINKS_RSSACTIVE, 'rssactive', $rssactive, ' ' . _YES . '', ' ' . _NO . '' );
	$rssstatus_radio -> SetDescription( _AM_IMLINKS_RSSACTIVEDSC );
	$sform -> addElement( $rssstatus_radio );
	
	$formtitle = new XoopsFormText( _AM_IMLINKS_RSSTITLE, 'rsstitle', 90, 128, $rsstitle );
	$formtitle -> SetDescription( _AM_IMLINKS_RSSTITLEDSC );
	$sform -> addElement( $formtitle, false );
	
	$formlink = new XoopsFormText( _AM_IMLINKS_RSSLINKS, 'rsslink', 90, 255, $rsslink );
	$formlink -> SetDescription( _AM_IMLINKS_RSSLINKSDSC );
	$sform -> addElement( $formlink, false );
	
	$formdsc = new XoopsFormTextArea( _AM_IMLINKS_RSSDESCRIPTION, 'rssdsc', $rssdsc, 4, 50 );
	$formdsc -> SetDescription( _AM_IMLINKS_RSSDESCRIPTIONDSC );
	$sform -> addElement( $formdsc, false );
	
	$formimage = new XoopsFormText( _AM_IMLINKS_RSSIMAGE, 'rssimgurl', 90, 255, $rssimgurl );
	$formimage -> SetDescription( _AM_IMLINKS_RSSIMAGEDSC );
	$sform -> addElement( $formimage, false );
	
	$formwidth = new XoopsFormText( _AM_IMLINKS_RSSWIDTH, 'rsswidth', 3, 8, $rsswidth );
	$formwidth -> SetDescription( _AM_IMLINKS_RSSWIDTHDSC );
	$sform -> addElement( $formwidth, false );
	
	$formheight = new XoopsFormText( _AM_IMLINKS_RSSHEIGHT, 'rssheight', 3, 8, $rssheight );
	$formheight -> SetDescription( _AM_IMLINKS_RSSHEIGHTDSC );
	$sform -> addElement( $formheight, false );
	
	$formimgtitle = new XoopsFormText( _AM_IMLINKS_RSSIMGTITLE, 'rssimgtitle', 90, 128, $rssimgtitle );
	$formimgtitle -> SetDescription( _AM_IMLINKS_RSSIMGTITLEDSC );
	$sform -> addElement( $formimgtitle, false );
	
	$formimglink = new XoopsFormText( _AM_IMLINKS_RSSIMGLINK, 'rssimglink', 90, 255, $rssimglink );
	$formimglink -> SetDescription( _AM_IMLINKS_RSSIMGLINKDSC );
	$sform -> addElement( $formimglink, false );
	
	$formttl = new XoopsFormText( _AM_IMLINKS_RSSTTL, 'rssttl', 3, 128, $rssttl );
	$formttl -> SetDescription( _AM_IMLINKS_RSSTTLDSC );
	$sform -> addElement( $formttl, false );
	
	$formwebmaster = new XoopsFormText( _AM_IMLINKS_RSSWEBMASTER, 'rsswebmaster', 90, 255, $rsswebmaster );
	$formwebmaster -> SetDescription( _AM_IMLINKS_RSSWEBMASTERDSC );
	$sform -> addElement( $formwebmaster, false );
	
	$formeditor = new XoopsFormText( _AM_IMLINKS_RSSEDITOR, 'rsseditor', 90, 255, $rsseditor );
	$formeditor -> SetDescription( _AM_IMLINKS_RSSEDITORDSC );
	$sform -> addElement( $formeditor, false );
	
	$formcategory = new XoopsFormText( _AM_IMLINKS_RSSCATEGORY, 'rsscategory', 90, 128, $rsscategory );
	$formcategory -> SetDescription( _AM_IMLINKS_RSSCATEGORYDSC );
	$sform -> addElement( $formcategory, false );
	
	$formgenerator = new XoopsFormText( _AM_IMLINKS_RSSGENERATOR, 'rssgenerator', 90, 128, $rssgenerator );
	$formgenerator -> SetDescription( _AM_IMLINKS_RSSGENERATORDSC );
	$sform -> addElement( $formgenerator, false );
	
	$formcopyright = new XoopsFormText( _AM_IMLINKS_RSSCOPYRIGHT, 'rsscopyright', 90, 128, $rsscopyright );
	$formcopyright -> SetDescription( _AM_IMLINKS_RSSCOPYRIGHTDSC );
	$sform -> addElement( $formcopyright, false );
	
	$formtotal = new XoopsFormText( _AM_IMLINKS_RSSTOTAL, 'rsstotal', 3, 8, $rsstotal );
	$formtotal -> SetDescription( _AM_IMLINKS_RSSTOTALDSC );
	$sform -> addElement( $formtotal, false );
	
	$formofftitle = new XoopsFormText( _AM_IMLINKS_RSSOFFLINE, 'rssofftitle', 90, 128, $rssofftitle );
	$formofftitle -> SetDescription( _AM_IMLINKS_RSSOFFLINEDSC );
	$sform -> addElement( $formofftitle, false );
	
	$formoffmsg = new XoopsFormTextArea( _AM_IMLINKS_RSSOFFMSG, 'rssoffdsc', $rssoffdsc, 4, 50 );
	$formoffmsg -> SetDescription( _AM_IMLINKS_RSSOFFMSGDSC );
	$sform -> addElement( $formoffmsg, false );
	
	$button_tray = new XoopsFormElementTray( '', '' );
    $hidden = new XoopsFormHidden( 'op', 'save' );
    $button_tray -> addElement( $hidden );
	
	$butt_create = new XoopsFormButton( '', '', _SUBMIT, 'submit' );
    $butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'saverss\'"' );
    $button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden ); 
	
    xoops_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
        imlinks_rss_edit();
        break;
		
	case 'saverss':
		global $xoopsDB;
		$rssactive   = ( $_POST['rssactive'] == 1 ) ? 1 : 0;
		$rsstitle    = $immyts -> addslashes( trim( $_POST['rsstitle'] ) );
		$rsslink     = ( $_POST['rsslink'] != 'http://' ) ? $immyts -> addslashes( $_POST['rsslink'] ) : '';
		$rssdsc      = $immyts -> addslashes( trim( $_POST['rssdsc'] ) );
		$rssimgurl   = $immyts -> addslashes( trim( $_POST['rssimgurl'] ) );
		$rsswidth    = $immyts -> addslashes( trim( $_POST['rsswidth'] ) );
		$rssheight   = $immyts -> addslashes( trim( $_POST['rssheight'] ) );
		$rssimgtitle = $immyts -> addslashes( trim( $_POST['rssimgtitle'] ) );
		$rssimglink  = $immyts -> addslashes( trim( $_POST['rssimglink'] ) );
		$rssttl      = $immyts -> addslashes( trim( $_POST['rssttl'] ) );
		$rsswebmaster= $immyts -> addslashes( trim( $_POST['rsswebmaster'] ) );
		$rsseditor   = $immyts -> addslashes( trim( $_POST['rsseditor'] ) );
		$rsscategory = $immyts -> addslashes( trim( $_POST['rsscategory'] ) );
		$rssgenerator= $immyts -> addslashes( trim( $_POST['rssgenerator'] ) );
		$rsscopyright= $immyts -> addslashes( trim( $_POST['rsscopyright'] ) );
		$rsstotal	 = $immyts -> addslashes( trim( $_POST['rsstotal'] ) );
		$rssofftitle = $immyts -> addslashes( trim( $_POST['rssofftitle'] ) );
		$rssoffdsc   = $immyts -> addslashes( trim( $_POST['rssoffdsc'] ) );
	
		$sql = "UPDATE " . $xoopsDB -> prefix( 'imlinks_configs' ) . " SET rssactive='$rssactive', rsstitle='$rsstitle', rsslink='$rsslink', rssdsc='$rssdsc', rssimgurl='$rssimgurl', rsswidth='$rsswidth', rssheight='$rssheight', rssimgtitle='$rssimgtitle', rssimglink='$rssimglink', rssttl='$rssttl', rsswebmaster='$rsswebmaster', rsseditor='$rsseditor', rsscategory='$rsscategory', rssgenerator='$rssgenerator', rsscopyright='$rsscopyright', rsstotal='$rsstotal', rssofftitle='$rssofftitle', rssoffdsc='$rssoffdsc'";
		$result = $xoopsDB -> queryF( $sql );
            $error = _AM_IMLINKS_DBERROR . ': <br /><br />' . $sql;
            if ( !$result ) {
                trigger_error( $error, E_USER_ERROR );
            } 
		redirect_header( 'index.php', 1, _AM_IMLINKS_RSSDBUPDATED );
        break;
}
?>