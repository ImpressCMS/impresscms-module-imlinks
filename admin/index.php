<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: index.php
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

include 'admin_header.php';

$mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

function edit( $lid = 0, $doclone = 0 ) {
    global $xoopsDB, $immyts, $mytree, $imagearray, $xoopsConfig, $xoopsModuleConfig, $xoopsModule, $xoopsUser;
    
    $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        return false;
    } 
    $link_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

    $directory = $xoopsModuleConfig['screenshots'];
	if ( $doclone == 0 ) {
		$lid = $link_array['lid'] ? $link_array['lid'] : 0;
		$title = $link_array['title'] ? $immyts -> htmlSpecialCharsStrip( $link_array['title'] ) : '';
		$published = $link_array['published'] ? $link_array['published'] : time();
	} else {
		$lid='';
		$title = $link_array['title'] ? $immyts -> htmlSpecialCharsStrip( $link_array['title'] . '  ' . _AM_IMLINKS_CLONE ) : '';
		$published = time();
	}
    $cid = $link_array['cid'] ? $link_array['cid'] : 0;
 //   $title = $link_array['title'] ? $immyts -> htmlSpecialCharsStrip( $link_array['title'] ) : '';
    $url = $link_array['url'] ? $immyts -> htmlSpecialCharsStrip( $link_array['url'] ) : 'http://';
    $publisher = $link_array['publisher'] ? $immyts -> htmlSpecialCharsStrip( $link_array['publisher'] ) : '';
    $submitter = $link_array['submitter'] ? $immyts -> htmlSpecialCharsStrip( $link_array['submitter'] ) : '';
    $screenshot = $link_array['screenshot'] ? $immyts -> htmlSpecialCharsStrip( $link_array['screenshot'] ) : '';
    $descriptionb = $link_array['description'] ? $immyts -> htmlSpecialCharsStrip( $link_array['description'] ) : '';
//    $published = $link_array['published'] ? $link_array['published'] : time();
    $expired = $link_array['expired'] ? $link_array['expired'] : 0;
    $updated = $link_array['updated'] ? $link_array['updated'] : 0;
    $offline = $link_array['offline'] ? $link_array['offline'] : 0;
    $forumid = $link_array['forumid'] ? $link_array['forumid'] : 0;
    $ipaddress = $link_array['ipaddress'] ? $link_array['ipaddress'] : 0;
    $notifypub = $link_array['notifypub'] ? $link_array['notifypub'] : 0;
    $country = $link_array['country'] ? $immyts -> htmlSpecialCharsStrip( $link_array['country'] ) : '-';
    $keywords = $link_array['keywords'] ? $immyts -> htmlSpecialCharsStrip( $link_array['keywords'] ) : '';
    $item_tag = $link_array['item_tag'] ? $immyts -> htmlSpecialCharsStrip( $link_array['item_tag'] ) : '';
    $googlemap = $link_array['googlemap'] ? $immyts -> htmlSpecialCharsStrip( $link_array['googlemap'] ) : 'http://maps.google.com';
    $yahoomap = $link_array['yahoomap'] ? $immyts -> htmlSpecialCharsStrip( $link_array['yahoomap'] ) : 'http://maps.yahoo.com';
    $multimap = $link_array['multimap'] ? $immyts -> htmlSpecialCharsStrip( $link_array['multimap'] ) : 'http://www.multimap.com';
    $street1 = $link_array['street1'] ? $immyts -> htmlSpecialCharsStrip( $link_array['street1'] ) : '';
    $street2 = $link_array['street2'] ? $immyts -> htmlSpecialCharsStrip( $link_array['street2'] ) : '';
    $town = $link_array['town'] ? $immyts -> htmlSpecialCharsStrip( $link_array['town'] ) : '';
    $state = $link_array['state'] ? $immyts -> htmlSpecialCharsStrip( $link_array['state'] ) : '';
    $zip = $link_array['zip'] ? $immyts -> htmlSpecialCharsStrip( $link_array['zip'] ) : '';
    $tel = $link_array['tel'] ? $immyts -> htmlSpecialCharsStrip( $link_array['tel'] ) : '';
    $mobile = $link_array['mobile'] ? $immyts -> htmlSpecialCharsStrip( $link_array['mobile'] ) : '';
    $voip = $link_array['voip'] ? $immyts -> htmlSpecialCharsStrip( $link_array['voip'] ) : '';
    $fax = $link_array['fax'] ? $immyts -> htmlSpecialCharsStrip( $link_array['fax'] ) : '';
    $email = $link_array['email'] ? $immyts -> htmlSpecialCharsStrip( $link_array['email'] ) : '';
    $vat = $link_array['vat'] ? $immyts -> htmlSpecialCharsStrip( $link_array['vat'] ) : '';
	$nobreak = $link_array['nobreak'] ? $link_array['nobreak'] : 0;

    xoops_cp_header();
    iml_adminmenu( 2, _AM_IMLINKS_MLINKS );

      if ( $lid > 0 ) {
        $_vote_data = iml_getVoteDetails( $lid );
        $text_info = "<table width='100%'>
			 <tr>
			  <td width='33%' valign='top'>
			   <div><b>" . _AM_IMLINKS_LINK_ID . " </b>" . $lid . "</div>
			   <div><b>" . _AM_IMLINKS_MINDEX_SUBMITTED . ": </b>" . formatTimestamp( $link_array['date'], $xoopsModuleConfig['dateformat'] ) . "</div>
			   <div><b>" . _AM_IMLINKS_LINK_SUBMITTER . " </b>" . xoops_getLinkedUnameFromId( $submitter ) . "</div>
			   <div><b>" . _AM_IMLINKS_LINK_IP . " </b>" . $ipaddress . "</div>
			   <div><b>" . _AM_IMLINKS_PAGERANK . " </b>" . pagerank($link_array['url']) . "</div>
			   <div><b>" . _AM_IMLINKS_HITS . " </b>" . $link_array['hits'] . "</div>

			  </td>
			  <td valign='top'>
			   <div><b>" . _AM_IMLINKS_VOTE_TOTALRATE . ": </b>" . intval( $_vote_data['rate'] ) . "</div>
			   <div><b>" . _AM_IMLINKS_VOTE_USERAVG . ": </b>" . intval( round( $_vote_data['avg_rate'], 2 ) ) . "</div>
			   <div><b>" . _AM_IMLINKS_VOTE_MAXRATE . ": </b>" . intval( $_vote_data['min_rate'] ) . "</div>
			   <div><b>" . _AM_IMLINKS_VOTE_MINRATE . ": </b>" . intval( $_vote_data['max_rate'] ) . "</div>
			  </td>
			  <td valign='top'>
			   <div><b>" . _AM_IMLINKS_VOTE_MOSTVOTEDTITLE . ": </b>" . intval( $_vote_data['max_title'] ) . "</div>
		           <div><b>" . _AM_IMLINKS_VOTE_LEASTVOTEDTITLE . ": </b>" . intval( $_vote_data['min_title'] ) . "</div>
			   <div><b>" . _AM_IMLINKS_VOTE_REGISTERED . ": </b>" . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . "</div>
			   <div><b>" . _AM_IMLINKS_VOTE_NONREGISTERED . ": </b>" . intval( $_vote_data['null_ratinguser'] ) . "</div>
			  </td>
			 </tr>
			</table>";
        echo "<fieldset style='border: #e8e8e8 1px solid;'><legend style='display: inline; font-weight: bold; color: #0A3760;'>" . _AM_IMLINKS_INFORMATION . "</legend>\n
			<div style='padding: 8px;'>" . $text_info . "</div>\n
		<!--	<div style='padding: 8px;'><li>" . $imagearray['deleteimg'] . " " . _AM_IMLINKS_VOTE_DELETEDSC . "</li></div>\n  -->
			</fieldset>\n
			<br />\n";
    } 
    unset( $_vote_data );

	if ( $doclone == 0 ) {
	  $caption = ( $lid ) ? _AM_IMLINKS_LINK_MODIFYFILE : _AM_IMLINKS_LINK_CREATENEWFILE;
	} else {
	  $caption = _AM_IMLINKS_CLONELINK;
	}
    $sform = new XoopsThemeForm( $caption, 'storyform', xoops_getenv( 'PHP_SELF' ) );
    $sform -> setExtra( 'enctype="multipart / form - data"' );

    if ($submitter == '') {
      $sform -> addElement( new XoopsFormHidden( 'submitter', $submitter ) );
    }

// Link publisher form
    if ($publisher) {
      $sform -> addElement( new XoopsFormText( _AM_IMLINKS_LINK_PUBLISHER, 'publisher', 70, 255, $publisher ) );
      //$sform -> addElement( new XoopsFormHidden( 'publisher', $publisher ) ) ;
    } else {
      $publisher = $xoopsUser -> uname();
      $sform -> addElement( new XoopsFormHidden( 'publisher', $publisher ) );
    }

// Link title form
    $sform -> addElement( new XoopsFormText( _AM_IMLINKS_LINK_TITLE, 'title', 70, 255, $title ), true );

// Link url form
    $url_text = new XoopsFormText( '', 'url', 70, 255, $url );
    $url_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_DLURL, '' );
	$url_tray -> SetDescription( _AM_IMLINKS_LINKURLDSC );
    $url_tray -> addElement( $url_text, true) ;
    $url_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/world.png' onClick=\"window.open(document.storyform.url.value,'','');return(false);\" alt='Check URL' />" ) );
    $sform -> addElement( $url_tray );

// Category form
    ob_start();
    $mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
    $sform -> addElement( new XoopsFormLabel( _AM_IMLINKS_LINK_CATEGORY, ob_get_contents() ) );
    ob_end_clean();

// Link description form
    $editor = iml_getWysiwygForm( _AM_IMLINKS_LINK_DESCRIPTION, 'descriptionb', $descriptionb );
    $sform -> addElement( $editor, false );

// Linebreak option
	$options_tray = new XoopsFormElementTray(_AM_IMLINKS_TEXTOPTIONS, '<br />');
    $breaks_checkbox = new XoopsFormCheckBox( '', 'nobreak', $nobreak );
    $breaks_checkbox -> addOption( 1, _AM_IMLINKS_DISABLEBREAK );
    $options_tray -> addElement( $breaks_checkbox );
    $sform -> addElement( $options_tray );

// Meta keywords form
    $keywords = new XoopsFormTextArea( _AM_IMLINKS_KEYWORDS, 'keywords', $keywords );
    $keywords -> setDescription( '<small>' . _AM_IMLINKS_KEYWORDS_NOTE . '</small>' );
    $sform -> addElement( $keywords, false );

// Insert tags if Tag-module is installed
    if (iml_tag_module_included()) {
      include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
      $text_tags = new XoopsFormTag( 'item_tag', 70, 255, $link_array['item_tag'], 0 );
      $sform -> addElement( $text_tags );
    } else {
      $sform -> addElement( new XoopsFormHidden( 'item_tag', $link_array['item_tag'] ) );
    }

// Screenshot
    $graph_array = &imlLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . $xoopsModuleConfig['screenshots'], $type='images' );
    $indeximage_select = new XoopsFormSelect( '', 'screenshot', $screenshot );
    $indeximage_select -> addOptionArray( $graph_array );
    $indeximage_select -> setExtra( "onchange = 'showImgSelected(\"image\", \"screenshot\", \"" . $xoopsModuleConfig['screenshots'] . "\", \"\", \"" . ICMS_URL . "\")'" );
    $indeximage_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_SHOTIMAGE, '&nbsp;' );
    $indeximage_tray -> setDescription( sprintf( _AM_IMLINKS_LINK_MUSTBEVALID, '<b>' . $directory . '</b>' ));
    $indeximage_tray -> addElement( $indeximage_select );
    if ( !empty( $imgurl ) ) {
        $indeximage_tray -> addElement( new XoopsFormLabel( '', " <br /><br />< img src='" . ICMS_URL . "/" . $xoopsModuleConfig['screenshots'] . "/" . $screenshot . "' name = 'image' id = 'image' alt = '' / > " ) );
    } else {
        $indeximage_tray -> addElement( new XoopsFormLabel( '', " <br /><br /><img src='" . ICMS_URL . "/uploads/blank.gif' name='image' id='image' alt='' / > " ) );
    } 
    $sform -> addElement( $indeximage_tray );

if ($xoopsModuleConfig['useaddress']){
    $sform -> insertBreak( _AM_IMLINKS_LINK_CREATEADDRESS, 'bg3' );
// Google Maps
    $googlemap_text = new XoopsFormText( '', 'googlemap', 70, 1024, $googlemap );
    $googlemap_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_GOOGLEMAP, '' );
	$googlemap_tray -> SetDescription( sprintf( _AM_IMLINKS_MAPDSC, '<em>http://maps.google.com</em>' ) );
    $googlemap_tray -> addElement( $googlemap_text , false ) ;
    $googlemap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/google_map.png' onClick=\"window.open(document.storyform.googlemap.value,'','');return(false);\" alt='"._AM_IMLINKS_LINK_CHECKMAP."' />" ) );
    $sform -> addElement( $googlemap_tray );
// Yahoo Maps
    $yahoomap_text = new XoopsFormText( '', 'yahoomap', 70, 1024, $yahoomap );
    $yahoomap_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_YAHOOMAP, '' );
	$yahoomap_tray -> SetDescription( sprintf( _AM_IMLINKS_MAPDSC, '<em>http://maps.yahoo.com</em>' ) );
    $yahoomap_tray -> addElement( $yahoomap_text , false ) ;
    $yahoomap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/yahoo_map.png' onClick=\"window.open(document.storyform.yahoomap.value,'','');return(false);\" alt='"._AM_IMLINKS_LINK_CHECKMAP."' />" ) );
    $sform -> addElement( $yahoomap_tray );
// MS Live Maps
    $multimap_text = new XoopsFormText( '', 'multimap', 70, 1024, $multimap );
    $multimap_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_MULTIMAP, '' );
	$multimap_tray -> SetDescription( sprintf( _AM_IMLINKS_MAPDSC, '<em>http://www.multimap.com</em>' ) );
    $multimap_tray -> addElement( $multimap_text , false ) ;
    $multimap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='../images/icon/multimap.png' onClick=\"window.open(document.storyform.multimap.value,'','');return(false);\" alt='"._AM_IMLINKS_LINK_CHECKMAP."' />" ) );
    $sform -> addElement( $multimap_tray );

// Address
    $street1 = new XoopsFormText( _AM_IMLINKS_STREET1, 'street1', 70, 255, $street1 );
    $sform -> addElement( $street1, false );
    $street2 = new XoopsFormText( _AM_IMLINKS_STREET2, 'street2', 70, 255, $street2 );
	$street2 -> SetDescription( _AM_IMLINKS_STREETTWODSC );
    $sform -> addElement( $street2, false );
    $town = new XoopsFormText( _AM_IMLINKS_TOWN, 'town', 70, 255, $town );
    $sform -> addElement( $town, false );
    $state = new XoopsFormText( _AM_IMLINKS_STATE, 'state', 70, 255, $state );
	$state -> Setdescription( _AM_IMLINKS_STATEDSC );
    $sform -> addElement( $state, false );
    $zip = new XoopsFormText( _AM_IMLINKS_ZIPCODE, 'zip', 25, 25, $zip );
    $sform -> addElement( $zip, false );
    $tel = new XoopsFormText( _AM_IMLINKS_TELEPHONE, 'tel', 25, 25, $tel );
    $sform -> addElement( $tel, false );
    $mobile = new XoopsFormText( _AM_IMLINKS_MOBILE, 'mobile', 25, 25, $mobile );
    $sform -> addElement( $mobile, false );
    $voip = new XoopsFormText( _AM_IMLINKS_VOIP, 'voip', 25, 25, $voip );
    $sform -> addElement( $voip, false );
    $fax = new XoopsFormText( _AM_IMLINKS_FAX, 'fax', 25, 25, $fax );
    $sform -> addElement( $fax, false );
    $email = new XoopsFormText( _AM_IMLINKS_EMAIL, 'email', 25, 60, $email );
	$email -> SetDescription( _AM_IMLINKS_EMAILDSC );
    $sform -> addElement( $email, false );
    $vat = new XoopsFormText( _AM_IMLINKS_VAT, 'vat', 25, 25, $vat );
    $vat -> setDescription( _AM_IMLINKS_VATWIKI );
    $sform -> addElement( $vat, false );
//  $sform -> addElement( new XoopsFormHidden( 'vat', $link_array['vat'] ) ); /* If you don't want to use the VAT form,  */
                                                                              /* use this line and comment-out the 3 lines above  */
}

// Country form
    $country_select = new XoopsFormSelectCountry( _AM_IMLINKS_COUNTRY, 'country', $country );
	$country_select -> SetDescription( _AM_IMLINKS_COUNTRYDSC );
    $sform -> addElement( $country_select, false );

// Miscellaneous Link settings
    $sform -> insertBreak( _AM_IMLINKS_LINK_MISCLINKSETTINGS, 'bg3' );

// Set Publish date
    $sform -> addElement( new XoopsFormDateTime( _AM_IMLINKS_LINK_SETPUBLISHDATE, 'published', $size = 15, $published ));

    if ( $lid ) {
        $sform -> addElement( new XoopsFormHidden( 'was_published', $published ) );
        $sform -> addElement( new XoopsFormHidden( 'was_expired', $expired ) );
    }

// Set Expire date
    $isexpired = ( $expired > time() ) ? 1: 0 ;
    $expiredates = ( $expired > time() ) ? _AM_IMLINKS_LINK_EXPIREDATESET . formatTimestamp( $expired, $xoopsModuleConfig['dateformat'] ) : _AM_IMLINKS_LINK_SETDATETIMEEXPIRE;
    $warning = ( $published > $expired && $expired > time() ) ? _AM_IMLINKS_LINK_EXPIREWARNING : '';
    $expiredate_checkbox = new XoopsFormCheckBox( '', 'expiredateactivate', $isexpired );
    $expiredate_checkbox -> addOption( 1, $expiredates . " <br /> <br /> " );

    $expiredate_tray = new XoopsFormElementTray( _AM_IMLINKS_LINK_EXPIREDATE . $warning, '' );
    $expiredate_tray -> addElement( $expiredate_checkbox );
    $expiredate_tray -> addElement( new XoopsFormDateTime( _AM_IMLINKS_LINK_SETEXPIREDATE . ' <br /> ', 'expired', 15, $expired ) );
    $expiredate_tray -> addElement( new XoopsFormRadioYN( _AM_IMLINKS_LINK_CLEAREXPIREDATE, 'clearexpire', 0, ' ' . _YES . '', ' ' . _NO . '' ) );
    $sform -> addElement( $expiredate_tray );

// Set Link offline
    $linkstatus_radio = new XoopsFormRadioYN( _AM_IMLINKS_LINK_FILESSTATUS, 'offline', $offline, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $linkstatus_radio );

// Set Link updated
    $up_dated = ( $updated == 0 ) ? 0 : 1;
    $link_updated_radio = new XoopsFormRadioYN( _AM_IMLINKS_LINK_SETASUPDATED, 'up_dated', $up_dated, ' ' . _YES . '', ' ' . _NO . '' );
    $sform -> addElement( $link_updated_radio );

    $result = $xoopsDB -> query( "SELECT COUNT( * ) FROM " . $xoopsDB -> prefix( 'imlinks_broken' ) . " WHERE lid = " . $lid );
    list ( $broken_count ) = $xoopsDB -> fetchRow( $result );
    if ( $broken_count > 0 ) {
        $link_updated_radio = new XoopsFormRadioYN( _AM_IMLINKS_LINK_DELEDITMESS, 'delbroken', 1, ' ' . _YES . '', ' ' . _NO . '' );
        $sform -> addElement( $editmess_radio );
    }

// Select forum
    ob_start();
    imlLists :: getforum( $xoopsModuleConfig['selectforum'], $forumid );
    $sform -> addElement( new XoopsFormLabel( _AM_IMLINKS_LINK_DISCUSSINFORUM, ob_get_contents() ) );
    ob_end_clean();

//Create News Story
    if (iml_news_module_included()) {
      $sform -> insertBreak( _AM_IMLINKS_LINK_CREATENEWSSTORY, "bg3" );
      $submitNews_radio = new XoopsFormRadioYN( _AM_IMLINKS_LINK_SUBMITNEWS, 'submitnews', 0, ' ' . _YES . '', ' ' . _NO . '' );
      $sform -> addElement( $submitNews_radio );
      
      include_once ICMS_ROOT_PATH . '/class/xoopstopic.php';
      $xt = new XoopsTopic( $xoopsDB -> prefix( 'topics' ) );
      ob_start();
         $xt -> makeTopicSelBox( 1, 0, 'newstopicid' );
         $sform -> addElement( new XoopsFormLabel( _AM_IMLINKS_LINK_NEWSCATEGORY, ob_get_contents() ) );
      ob_end_clean();
      $sform -> addElement( new XoopsFormText( _AM_IMLINKS_LINK_NEWSTITLE, 'newsTitle', 70, 255, '' ), false );
    }

    if ( $lid && $published == 0 ) {
        $approved = ( $published == 0 ) ? 0 : 1;
        $approve_checkbox = new XoopsFormCheckBox( _AM_IMLINKS_LINK_EDITAPPROVE, "approved", 1 );
        $approve_checkbox -> addOption( 1, ' ' );
        $sform -> addElement( $approve_checkbox );
    } 

    if ( !$lid ) {
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'status', 1 ) );
        $button_tray -> addElement( new XoopsFormHidden( 'notifypub', $notifypub ) );
        $button_tray -> addElement( new XoopsFormHidden( 'op', 'save' ) );
        $button_tray -> addElement( new XoopsFormButton( '', '', _AM_IMLINKS_BSAVE, 'submit' ) );
        $sform -> addElement( $button_tray );
    } else {
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormHidden( 'lid', $lid ) );
        $button_tray -> addElement( new XoopsFormHidden( 'status', 2 ) );
        $hidden = new XoopsFormHidden( 'op', 'save' );
        $button_tray -> addElement( $hidden );

        $butt_dup = new XoopsFormButton( '', '', _AM_IMLINKS_BMODIFY, 'submit' );
        $butt_dup -> setExtra( 'onclick="this . form . elements . op . value = \'save\'"' );
        $button_tray -> addElement( $butt_dup );
        $butt_dupct = new XoopsFormButton( '', '', _AM_IMLINKS_BDELETE, 'submit' );
        $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delete\'"' );
        $button_tray -> addElement( $butt_dupct );
        $butt_dupct2 = new XoopsFormButton( '', '', _AM_IMLINKS_BCANCEL, 'submit' );
        $butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'linksConfigMenu\'"' );
        $button_tray -> addElement( $butt_dupct2 );
        $sform -> addElement( $button_tray );
    } 
    $sform -> display();
    unset( $hidden ); 
    xoops_cp_footer();
} 

function fetchURL( $url, $timeout = 2 ) {
    $url = urldecode( $url );
    $url_parsed = parse_url( $url );
    if ( !isset( $url_parsed['host'] ) ) {
        return '';
    } 

    $host = $url_parsed['host'];
    $host = ereg_replace( 'http://', '', $host );
    $port = ( isset( $url_parsed['port'] ) ) ? $url_parsed['port']: 80;
    // Open the socket
    $handle = @fsockopen( 'http://' . $host, $port, $errno, $errstr, $timeout );
    if ( !$handle ) {
        return null;
    } else {
        // Set read timeout
        stream_set_timeout( $handle, $timeout );
        for( $i = 0;$i < 1;$i++ ) {
            // Time the responce
            list( $usec, $sec ) = explode( ' ', microtime( true ) );
            $start = ( float )$usec + ( float )$sec; 
            // send somthing
            $write = fwrite( $handle, 'return ping\n' );
            if ( !$write ) {
                return '';
            } 
            fread( $handle, 1024 ); 
            // Work out if we got a responce and time it
            list( $usec, $sec ) = explode( ' ', microtime( true ) );
            $laptime = ( ( float )$usec + ( float )$sec ) - $start;
            if ( $laptime > $timeout ) {
                return 'No Reply';
            } else {
                return round( $laptime, 3 );
            } 
        } 
        fclose( $handle );
    } 
} 

switch ( strtolower( $op ) )
{
    case 'pingtime';
    case 'is_broken';

        $_type = ( $op == 'pingtime' ) ? 'is_broken' : 'pingtime';

        $start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
        $ping = iml_cleanRequestVars( $_REQUEST, 'ping', 0 );
        $cid = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );

        $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_links' );
        if ( $cid > 0 ) {
            $sql .= " WHERE cid=" . $cid;
        } 
        $sql .= " ORDER BY lid DESC";
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        $broken_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
        $broken_array_count = $xoopsDB -> getRowsNum( $result );

        xoops_cp_header();
        iml_adminmenu( _AM_IMLINKS_BINDEX );
		
		if ( $op == 'pingtime' ) {
			echo '	<fieldset style="border: #e8e8e8 1px solid;">
					<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_MLISTPINGTIMES . '</legend>
					<div style="padding: 8px;">' . _AM_IMLINKS_PINGTIMES . '</div>
					</fieldset>';
		} else {
			echo '	<fieldset style="border: #e8e8e8 1px solid;">
					<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_MLISTBROKEN . '</legend>
					<div style="padding: 8px;">' . _AM_IMLINKS_LISTBROKEN . '</div>
					</fieldset>';
		}
			
        echo "
			<table width='100%' cellspacing='1' cellpadding='2' border='0' class='outer'>\n
			<tr>\n
			<th style='text-align: center;'>" . _AM_IMLINKS_MINDEX_ID . "</th>\n
			<th style='text-align: left;'><b>" . _AM_IMLINKS_MINDEX_TITLE . "</th>\n
			<th style='text-align: center;'>"._AM_IMLINKS_MINDEX_POSTER."</th>\n
			<th style='text-align: center;'>" . _AM_IMLINKS_MINDEX_PUBLISHED . "</th>\n
            <th style='text-align: center;'>" . _AM_IMLINKS_MINDEX_RESPONSE . "</th>\n
            <th style='text-align: center;'>PR</th>\n
	        <th style='text-align: center;'>" . _AM_IMLINKS_MINDEX_ACTION . "</th>\n
			</tr>\n";

        if ( $broken_array_count > 0 ) {
            while ( $published = $xoopsDB -> fetchArray( $broken_array ) ) {
                $_ping_results = fetchURL( $published['url'] );

                if ( !$_ping_results ) {
                    $_ping_results = _AM_IMLINKS_LINK_NORESPONSE;
                } else {
                    $_ping_results = $_ping_results . '(s)';
                }

                $lid = $published['lid'];
                $cid = $published['cid'];
                $title = "<a href='../singlelink.php?cid=" . $published['cid'] . "&amp;lid=" . $published['lid'] . "'>" . $immyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . "</a>";;
                $maintitle = urlencode( $immyts -> htmlSpecialChars( trim( $published['title'] ) ) );
                $submitter = xoops_getLinkedUnameFromId( $published['submitter'] );
                $publish = formatTimestamp( $published['published'], $xoopsModuleConfig['dateformatadmin'] );
                $status = ( $published['published'] > 0 ) ? $imagearray['online'] : "<a href='newlinks.php'>" . $imagearray['offline'] . "</a>";
                $icon = "<a href='index.php?op=edit&amp;lid=" . $lid . "'>" . $imagearray['editimg'] . "</a>&nbsp;";
                $icon .= "<a href='index.php?op=delete&amp;lid=" . $lid . "'>" . $imagearray['deleteimg'] . "</a>";
                echo "<tr style='text-align: center;'>\n
						<td class='head'><small>" . $lid . "</small></td>\n
						<td class='even' style='text-align: left;'><small>" . $title . "</small></td>\n
						<td class='even'><small>" . $submitter . "</small></td>\n
						<td class='even'><small>" . $publish . "</small></td>\n
						<td class='even'><small>" . $_ping_results . "</small></td>\n
						<td class='even'><small>" . pagerank($published['url']) . "</small></td>\n
						<td class='even'>$icon</td>\n
						</tr>\n";
                unset( $published );
            } 
        } else {
            iml_linklistfooter();
        } 
        iml_linklistpagenav( $broken_array_count, $start, 'art', 'op=' . $op );
        xoops_cp_footer();
        break;

    case 'edit':
        edit( intval( $lid ), 0 );
        break;
		
	case 'clone':
		edit( intval( $lid ), 1 );
		break;

    case 'save':
        $groups = isset( $_POST['groups'] ) ? $_POST['groups'] : array();
        $lid = ( !empty( $_POST['lid'] ) ) ? $_POST['lid'] : 0;
        $cid = ( !empty( $_POST['cid'] ) ) ? $_POST['cid'] : 0;
        $urlrating = ( !empty( $_POST['urlrating'] ) ) ? $_POST['urlrating'] : 6;
        $status = ( !empty( $_POST['status'] ) ) ? $_POST['status'] : 2;
        $url = ( $_POST['url'] != 'http://' ) ? $immyts -> addslashes( $_POST['url'] ) : '';
        $title = $immyts -> addslashes( trim( $_POST['title'] ) );
		$nobreak = ( !empty( $_POST['nobreak'] ) ) ? $_POST['nobreak'] : 0;

// Get data from form
        $screenshot = ( $_POST['screenshot'] != 'blank.gif' ) ? $immyts -> addslashes( $_POST['screenshot'] ) : '';
        $descriptionb = $immyts -> addslashes( trim( $_POST['descriptionb'] ) );
        $country = $immyts -> addslashes( trim( $_POST['country'] ) );
        $keywords = $immyts -> addslashes( trim(substr($_POST['keywords'], 0, $xoopsModuleConfig['keywordlength']) ) );
        $item_tag = $immyts -> addslashes( trim( $_POST['item_tag'] ) );
        $forumid = ( isset( $_POST['forumid'] ) && $_POST['forumid'] > 0 ) ? intval( $_POST['forumid'] ) : 0;
        if ($xoopsModuleConfig['useaddress']){
           $googlemap = ( $_POST['googlemap'] != 'http://maps.google.com' ) ? $immyts -> addslashes( $_POST['googlemap'] ) : '';
           $yahoomap = ( $_POST['yahoomap'] != 'http://maps.yahoo.com' ) ? $immyts -> addslashes( $_POST['yahoomap'] ) : '';
           $multimap = ( $_POST['multimap'] != 'http://www.multimap.com' ) ? $immyts -> addslashes( $_POST['multimap'] ) : '';
           $street1 = $immyts -> addslashes( trim( $_POST['street1'] ) );
           $street2 = $immyts -> addslashes( trim( $_POST['street2'] ) );
           $town = $immyts -> addslashes( trim( $_POST['town'] ) );
           $state = $immyts -> addslashes( trim( $_POST['state'] ) );
           $zip = $immyts -> addslashes( trim( $_POST['zip'] ) );
           $tel = $immyts -> addslashes( trim( $_POST['tel'] ) );
           $fax = $immyts -> addslashes( trim( $_POST['fax'] ) );
           $voip = $immyts -> addslashes( trim( $_POST['voip'] ) );
           $mobile = $immyts -> addslashes( trim( $_POST['mobile'] ) );
           $email = emailcnvrt( $immyts -> addslashes( trim( $_POST['email'] ) ) );
           $vat = $immyts -> addslashes( trim( $_POST['vat'] ) );
        } else {
           $googlemap = $yahoomap = $multimap = $street1 = $street2 = $town = $state = $zip = $tel = $fax = $voip = $mobile = $email = $vat = '';
        }

        $submitter = $xoopsUser -> uid();
        $publisher = $immyts -> addslashes( trim( $_POST['publisher'] ) );

        $published =  strtotime($_POST['published']['date'] ) + $_POST['published']['time'];
        $updated = ( isset( $_POST['was_published'] ) && $_POST['was_published'] == 0 ) ? 0 : time();
        if ( $_POST['up_dated'] == 0 ) {
            $updated = 0;
            $status = 1;
        } 
        $offline = ( $_POST['offline'] == 1 ) ? 1 : 0;
        $approved = ( isset( $_POST['approved'] ) && $_POST['approved'] == 1 ) ? 1 : 0;
        $notifypub = ( isset( $_POST['notifypub'] ) && $_POST['notifypub'] == 1 );
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
            $expiredate = '0';
        } else {
            $publishdate = $_POST['was_published'];
            $expiredate = $_POST['was_expired'];
        }
        if ( $approved == 1 && empty( $publishdate ) ) {
            $publishdate = time();
        }
        if ( isset( $_POST['expiredateactivate'] ) ) {
            $expiredate = strtotime( $_POST['expired']['date'] ) + $_POST['expired']['time'];
        }
        if ( $_POST['clearexpire'] ) {
            $expiredate = '0';
        }

// Update or insert linkload data into database
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
            $ipaddress = $_SERVER['REMOTE_ADDR'];
            $sql = "INSERT INTO " . $xoopsDB -> prefix( 'imlinks_links' ) . " (lid, cid, title, url, screenshot, submitter, publisher, status, date, hits, rating, votes, comments, forumid, published, expired, updated, offline, description, ipaddress, notifypub, urlrating, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, nobreak )";
            $sql .= " VALUES 	('', $cid, '$title', '$url', '$screenshot', '$submitter', '$publisher','$status', '$date', 0, 0, 0, 0, '$forumid', '$published', '$expiredate', '$updated', '$offline', '$descriptionb', '$ipaddress', '0', '$urlrating', '$country', '$keywords', '$item_tag', '$googlemap', '$yahoomap', '$multimap', '$street1', '$street2', '$town', '$state', '$zip', '$tel', '$fax', '$voip', '$mobile', '$email', '$vat', '$nobreak' )";
           // $newid = $xoopsDB -> getInsertId();
        } else {
            $sql = "UPDATE " . $xoopsDB -> prefix( 'imlinks_links' ) . " SET cid = $cid, title='$title', url='$url', screenshot='$screenshot', publisher='$publisher', status='$status', forumid='$forumid', published='$published', expired='$expiredate', updated='$updated', offline='$offline', description='$descriptionb', urlrating='$urlrating', country='$country', keywords='$keywords', item_tag='$item_tag', googlemap='$googlemap', yahoomap='$yahoomap', multimap='$multimap', street1='$street1', street2='$street2', town='$town', state='$state',  zip='$zip', tel='$tel', fax='$fax', voip='$voip', mobile='$mobile', email='$email', vat='$vat', nobreak='$nobreak' WHERE lid=" . $lid;
        } 
        if ( !$result = $xoopsDB -> queryF( $sql ) ) {
          XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
          return false;
        }
        
        $newid = mysql_insert_id();
        
// Add item_tag to Tag-module
        if ( !$lid ) {
          $tagupdate = iml_tagupdate($newid, $item_tag);
        } else {
          $tagupdate = iml_tagupdate($lid, $item_tag);
        }

// Send notifications
        if ( !$lid ) {
            $tags = array();
            $tags['LINK_NAME'] = $title;
            $tags['LINK_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $newid;
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_cat' ) . " WHERE cid=" . $cid;
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
        } 
        if ( $lid && $approved && $notifypub ) {
            $tags = array();
            $tags['LINK_NAME'] = $title;
            $tags['LINK_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $lid;
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_cat' ) . " WHERE cid=" . $cid;
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
            $notification_handler -> triggerEvent( 'link', $lid, 'approve', $tags );
        } 
        $message = ( !$lid ) ? _AM_IMLINKS_LINK_NEWFILEUPLOAD : _AM_IMLINKS_LINK_FILEMODIFIEDUPDATE ;
        $message = ( $lid && !$_POST['was_published'] && $approved ) ? _AM_IMLINKS_LINK_FILEAPPROVED : $message;
        if ( iml_cleanRequestVars( $_REQUEST, 'delbroken', 0 ) ) {
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'imlinks_broken' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
        } 
        if ( iml_cleanRequestVars( $_REQUEST, 'submitnews', 0 ) ) {
            include_once 'newstory.php';
        } 
        redirect_header( 'index.php', 1, $message );
        break;

    case 'delete':
        if ( iml_cleanRequestVars( $_REQUEST, 'confirm', 0 ) ) {
            $title = iml_cleanRequestVars( $_REQUEST, 'title', 0 );
			
			// delete link
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            }
			
			// delete from altcat
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'imlinks_altcat' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            }
			
			// delete vote data
            $sql = "DELETE FROM " . $xoopsDB -> prefix( 'imlinks_votedata' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            }

            // delete comments
            xoops_comment_delete( $xoopsModule -> getVar( 'mid' ), $lid );
            redirect_header( 'index.php', 1, sprintf( _AM_IMLINKS_LINK_FILEWASDELETED, $title ) );
            exit();
        } else {
            $sql = "SELECT lid, title, item_tag, url FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 			
            list( $lid, $title ) = $xoopsDB -> fetchrow( $result );
            $item_tag = $result['item_tag'];
            xoops_cp_header();
            iml_adminmenu( _AM_IMLINKS_BINDEX );
            xoops_confirm( array( 'op' => 'delete', 'lid' => $lid, 'confirm' => 1, 'title' => $title ), 'index.php', _AM_IMLINKS_LINK_REALLYDELETEDTHIS . '<br /><br>' . $title, _DELETE );

            // Remove item_tag from Tag-module
            $tagupdate = iml_tagupdate($lid, $item_tag);

            xoops_cp_footer();
        } 
        break;

    case 'delvote':
        $rid = iml_cleanRequestVars( $_REQUEST, 'rid', 0 );
        $sql = "DELETE FROM " . $xoopsDB -> prefix( 'imlinks_votedata' ) . " WHERE ratingid=" . $rid;
        if ( !$result = $xoopsDB -> queryF( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        iml_updaterating( $rid );
        redirect_header( 'index.php', 1, _AM_IMLINKS_VOTE_VOTEDELETED );
        break;

    case 'main':
    default:
        $start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
        $start1 = iml_cleanRequestVars( $_REQUEST, 'start1', 0 );
        $start2 = iml_cleanRequestVars( $_REQUEST, 'start2', 0 );
        $start3 = iml_cleanRequestVars( $_REQUEST, 'start3', 0 );
        $start4 = iml_cleanRequestVars( $_REQUEST, 'start4', 0 );
        $totalcats = iml_totalcategory();

        $result = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_broken' ) );
        list( $totalbrokenlinks ) = $xoopsDB -> fetchRow( $result );
        $result2 = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_mod' ) );
        list( $totalmodrequests ) = $xoopsDB -> fetchRow( $result2 );
        $result3 = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published = 0" );
        list( $totalnewlinks ) = $xoopsDB -> fetchRow( $result3 );
        $result4 = $xoopsDB -> query( "SELECT COUNT(*) FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published > 0" );
        list( $totallinks ) = $xoopsDB -> fetchRow( $result4 );

        xoops_cp_header();
        iml_adminmenu( 1, _AM_IMLINKS_BINDEX );
        echo "
			<fieldset style='border: #e8e8e8 1px solid;'><legend style='display: inline; font-weight: bold; color: #0A3760;'>" . _AM_IMLINKS_MINDEX_LINKSUMMARY . "</legend>\n
			<div style='padding: 8px;'><small>\n
			<a href='category.php'>" . _AM_IMLINKS_SCATEGORY . "</a><b>" . $totalcats . "</b> | \n
			<a href='index.php'>" . _AM_IMLINKS_SFILES . "</a><b>" . $totallinks . "</b> | \n
			<a href='newlinks.php'>" . _AM_IMLINKS_SNEWFILESVAL . "</a><b>" . $totalnewlinks . "</b> | \n
			<a href='modifications.php'>" . _AM_IMLINKS_SMODREQUEST . "</a><b>" . $totalmodrequests . "</b> | \n
			<a href='brokenlink.php'>" . _AM_IMLINKS_SBROKENSUBMIT . "</a><b>" . $totalbrokenlinks . "</b>\n
			</small></div></fieldset><br />\n
		";

        if ( $totalcats > 0 ) {
            $sform = new XoopsThemeForm( _AM_IMLINKS_CCATEGORY_MODIFY, 'category', 'category.php' );
            ob_start();
            $mytree -> makeMySelBox( 'title', 'title' );
            $sform -> addElement( new XoopsFormLabel( _AM_IMLINKS_CCATEGORY_MODIFY_TITLE, ob_get_contents() ) );
            ob_end_clean();
            $dup_tray = new XoopsFormElementTray( '', '' );
            $dup_tray -> addElement( new XoopsFormHidden( 'op', 'modCat' ) );
            $butt_dup = new XoopsFormButton( '', '', _AM_IMLINKS_BMODIFY, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'modCat\'"' );
            $dup_tray -> addElement( $butt_dup );
            $butt_dupct = new XoopsFormButton( '', '', _AM_IMLINKS_BDELETE, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $sform -> addElement( $dup_tray );
            $sform -> display();
        } 

        if ( $totallinks > 0 ) {
            $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'imlinks_links' ) . " WHERE published > 0  ORDER BY lid DESC" ;
            $published_array = $xoopsDB -> query( $sql, $xoopsModuleConfig['admin_perpage'], $start );
            $published_array_count = $xoopsDB -> getRowsNum( $xoopsDB -> query( $sql ) );
            iml_linklistheader( _AM_IMLINKS_MINDEX_PUBLISHEDLINK );
            iml_linklistpagenavleft( $published_array_count, $start, 'art' );
            if ( $published_array_count > 0 ) {
                while ( $published = $xoopsDB -> fetchArray( $published_array ) ) {
                    iml_linklistbody( $published );
                } 
            } else {
                iml_linklistfooter();
            } 
            iml_linklistpagenav( $published_array_count, $start, 'art' );           
        }
        xoops_cp_footer();
        break;
} 

?>