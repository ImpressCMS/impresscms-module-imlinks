<?php

include 'admin_header.php';

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );

function rss_edit() {
	global $xoopsDB, $xoopsConfig, $xoopsModule, $immyts;
	
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );

	include_once ICMS_ROOT_PATH . '/class/xoopsformloader.php';

	$sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_configs' );
	$feed_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
	
	$webmaster  = $xoopsConfig['adminmail'] . ' (' . $xoopsModule -> getVar( 'name' ) . ') ';
	$modulename = $xoopsModule -> getVar( 'name' );
	$generator  = XOOPS_VERSION . ' (module: ' . $modulename . ')';
	$copyright  = 'Copyright ' . formatTimestamp( time(), 'Y' ) . ' - ' . $xoopsConfig['sitename'];
		
	$rssactive   = $feed_array['rssactive'];
	$rsstitle    = $feed_array['rsstitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsstitle'] ) : $xoopsConfig['sitename'];
	$rsslink     = $feed_array['rsslink'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsslink'] ) : 'http://';
	$rssdsc      = $feed_array['rssdsc'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssdsc'] ) : $xoopsConfig['slogan'];
	$rssimgurl   = $feed_array['rssimgurl'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimgurl'] ) : ICMS_URL .'/modules/' . $mydirname . '/images/imlinks_iconbig.png';
	$rsswidth    = $feed_array['rsswidth'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsswidth'] ) : '32';
	$rssheight   = $feed_array['rssheight'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssheight'] ) : '32';
	$rssimgtitle = $feed_array['rssimgtitle'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimgtitle'] ) : '';
	$rssimglink  = $feed_array['rssimglink'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssimglink'] ) : ICMS_URL;
	$rssttl      = $feed_array['rssttl'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssttl'] ) : '60';
	$rsswebmaster= $feed_array['rsswebmaster'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsswebmaster'] ) : $webmaster;
	$rsseditor   = $feed_array['rsseditor'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsseditor'] ) : $webmaster;
	$rsscategory = $feed_array['rsscategory'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsscategory'] ) : $modulename;
	$rssgenerator= $feed_array['rssgenerator'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rssgenerator'] ) : $generator;
	$rsscopyright= $feed_array['rsscopyright'] ? $immyts -> htmlSpecialCharsStrip( $feed_array['rsscopyright'] ) : $copyright;
		
	xoops_cp_header();
	iml_adminmenu( 8, 'RSS Feed' );
	
	echo '
			<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">RSS Feed</legend>
			<div style="padding: 8px;">
			Here you can configure the RSS feed for imLinks.<br />
			For more information vist the <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> website.
			</div></fieldset><br />
		';
	
	$sform = new XoopsThemeForm( 'RSS Feed Configuration', 'storyform', xoops_getenv( 'PHP_SELF' ) );
	$sform -> setExtra( 'enctype="multipart / form - data"' );
		
	$rssstatus_radio = new XoopsFormRadioYN( 'RSS feed activated', 'rssactive', $rssactive, ' ' . _YES . '', ' ' . _NO . '' );
	$rssstatus_radio -> SetDescription( 'Select <em>Yes</em> to turn RSS feed for imLinks on, select <em>No</em> to turn it off.' );
	$sform -> addElement( $rssstatus_radio );
	
	$formtitle = new XoopsFormText( 'RSS feed title', 'rsstitle', 90, 128, $rsstitle );
	$formtitle -> SetDescription( 'The name of the channel. It\'s how people refer to your service. If you have an HTML website that contains the same information as your RSS file, the title of your channel should be the same as the title of your website.' );
	$sform -> addElement( $formtitle, false );
	
	$formlink = new XoopsFormText( 'RSS feed link', 'rsslink', 90, 255, $rsslink );
	$formlink -> SetDescription( 'The URL to the HTML website corresponding to the channel.' );
	$sform -> addElement( $formlink, false );
	
	$formdsc = new XoopsFormTextArea( 'RSS feed description', 'rssdsc', $rssdsc, 4, 50 );
	$formdsc -> SetDescription( 'Phrase or sentence describing the channel.' );
	$sform -> addElement( $formdsc, false );
	
	$formimage = new XoopsFormText( 'RSS feed image', 'rssimgurl', 90, 255, $rssimgurl );
	$formimage -> SetDescription( 'Specifies a GIF, JPEG or PNG image that can be displayed with the channel.' );
	$sform -> addElement( $formimage, false );
	
	$formwidth = new XoopsFormText( 'RSS feed image width', 'rsswidth', 3, 8, $rsswidth );
	$formwidth -> SetDescription( 'Indicates the width of the image in pixels.<br />Maximum value for width is 144.' );
	$sform -> addElement( $formwidth, false );
	
	$formheight = new XoopsFormText( 'RSS feed image height', 'rssheight', 3, 8, $rssheight );
	$formheight -> SetDescription( 'Indicates the height of the image in pixels.<br />Maximum value for height is 400.' );
	$sform -> addElement( $formheight, false );
	
	$formimgtitle = new XoopsFormText( 'RSS feed image title', 'rssimgtitle', 90, 128, $rssimgtitle );
	$formimgtitle -> SetDescription( 'Describes the image, it\'s used in the ALT attribute of the HTML &#60;img&#62; tag when the channel is rendered in HTML.' );
	$sform -> addElement( $formimgtitle, false );
	
	$formimglink = new XoopsFormText( 'RSS feed image link', 'rssimglink', 90, 255, $rssimglink );
	$formimglink -> SetDescription( 'This is the URL of the site, when the channel is rendered, the image is a link to the site. (Note, in practice the image &#60;title&#62; and &#60;link&#62; should have the same value as the channel\'s &#60;title&#62; and &#60;link&#62;.' );
	$sform -> addElement( $formimglink, false );
	
	$formttl = new XoopsFormText( 'RSS feed ttl', 'rssttl', 3, 128, $rssttl );
	$formttl -> SetDescription( 'ttl stands for time to live. It\'s a number of minutes that indicates how long a channel can be cached before refreshing from the source.' );
	$sform -> addElement( $formttl, false );
	
	$formwebmaster = new XoopsFormText( 'RSS feed webMaster', 'rsswebmaster', 90, 255, $rsswebmaster );
	$formwebmaster -> SetDescription( 'Email address for person responsible for technical issues relating to channel.' );
	$sform -> addElement( $formwebmaster, false );
	
	$formeditor = new XoopsFormText( 'RSS feed channel editor', 'rsseditor', 90, 255, $rsseditor );
	$formeditor -> SetDescription( 'Email address for person responsible for editorial content.' );
	$sform -> addElement( $formeditor, false );
	
	$formcategory = new XoopsFormText( 'RSS feed category', 'rsscategory', 90, 128, $rsscategory );
	$formcategory -> SetDescription( 'Specify one or more categories that the channel belongs to. Follows the same rules as the <item>-level category element.' );
	$sform -> addElement( $formcategory, false );
	
	$formgenerator = new XoopsFormText( 'RSS feed generator', 'rssgenerator', 90, 128, $rssgenerator );
	$formgenerator -> SetDescription( ' string indicating the program used to generate the channel.' );
	$sform -> addElement( $formgenerator, false );
	
	$formcopyright = new XoopsFormText( 'RSS feed copyright', 'rsscopyright', 90, 128, $rsscopyright );
	$formcopyright -> SetDescription( 'Copyright notice for content in the channel.' );
	$sform -> addElement( $formcopyright, false );
	
	$button_tray = new XoopsFormElementTray( '', '' );
    $hidden = new XoopsFormHidden( 'op', 'save' );
    $button_tray -> addElement( $hidden );
	
	$butt_create = new XoopsFormButton( '', '', 'Save', 'submit' );
    $butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'saverss\'"' );
    $button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden ); 
	
    xoops_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
        rss_edit();
        break;
		
	case 'saverss':
		global $xoopsDB;
		$rssactive   = ( $_POST['rssactive'] == 1 ) ? 1 : 0;
		$rsstitle    = $immyts -> addslashes( trim( $_POST['rsstitle'] ) );
		$rsslink     = ( $_POST['rsslink'] != 'http://' ) ? $immyts -> addslashes( $_POST['rsslink'] ) : '';
		$rssdsc      = $immyts -> addslashes( trim( $_POST['rssdsc'] ) );
		$rssimgurl   = $title = $immyts -> addslashes( trim( $_POST['rssimgurl'] ) );
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
	
		$sql = "UPDATE " . $xoopsDB -> prefix( 'imlinks_configs' ) . " SET rssactive='$rssactive', rsstitle='$rsstitle', rsslink='$rsslink', rssdsc='$rssdsc', rssimgurl='$rssimgurl', rsswidth='$rsswidth', rssheight='$rssheight', rssimgtitle='$rssimgtitle', rssimglink='$rssimglink', rssttl='$rssttl', rsswebmaster='$rsswebmaster', rsseditor='$rsseditor', rsscategory='$rsscategory', rssgenerator='$rssgenerator', rsscopyright='$rsscopyright'";
		$result = $xoopsDB -> queryF($sql);
            $error = _AM_IMLINKS_DBERROR . ": <br /><br />" . $sql;
            if ( !$result ) {
                trigger_error( $error, E_USER_ERROR );
            } 
		redirect_header( 'index.php', 1, 'Database RSS updated' );
        break;
		
}
		


?>