<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: links.php
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

include 'admin_header.php';

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

$op = iml_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$imlinks_links_handler = icms_getModuleHandler( 'links', basename( dirname( dirname( __FILE__ ) ) ), 'imlinks' );
$imlinks_cat_handler = icms_getModuleHandler( 'cat', basename( dirname( dirname( __FILE__ ) ) ), 'imlinks' );

function edit( $lid = 0, $doclone = 0 ) {
	global $mytree, $imagearray, $icmsAdminTpl;

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
	if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
		icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
		return false;
	}
	$link_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
	$directory = icms::$module -> config['screenshots'];
	if ( !$doclone ) {
		$lid = $link_array['lid'] ? $link_array['lid'] : 0;
		$title = $link_array['title'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['title'] ) ) : '';
		$published = $link_array['published'] ? $link_array['published'] : time();
	} else {
		$lid = '';
		$title = $link_array['title'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['title'] . '  **' . _CLONE . '**') ) : '';
		$published = time();
	}
	$cid = $link_array['cid'] ? $link_array['cid'] : 0;
	$url = $link_array['url'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['url'] ) ) : 'http://';
	$publisher = $link_array['publisher'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['publisher'] ) ) : '';
	$submitter = $link_array['submitter'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['submitter'] ) ) : '';
	$screenshot = $link_array['screenshot'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['screenshot'] ) ) : '';
	$descriptionb = $link_array['description'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['description'] ) ) : '';
	$expired = $link_array['expired'] ? $link_array['expired'] : 0;
	$updated = $link_array['updated'] ? $link_array['updated'] : 0;
	$offline = $link_array['offline'] ? $link_array['offline'] : 0;
	$forumid = $link_array['forumid'] ? $link_array['forumid'] : 0;
	$ipaddress = $link_array['ipaddress'] ? $link_array['ipaddress'] : 0;
	$notifypub = $link_array['notifypub'] ? $link_array['notifypub'] : 0;
	$country = $link_array['country'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['country'] ) ) : '-';
	$keywords = $link_array['keywords'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['keywords'] ) ) : '';
	$item_tag = $link_array['item_tag'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['item_tag'] ) ) : '';
	$googlemap = $link_array['googlemap'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['googlemap'] ) ) : 'http://maps.google.com';
	$yahoomap = $link_array['yahoomap'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['yahoomap'] ) ) : 'http://maps.yahoo.com';
	$multimap = $link_array['multimap'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['multimap'] ) ) : 'http://www.bing.com/maps/';
	$street1 = $link_array['street1'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['street1'] ) ) : '';
	$street2 = $link_array['street2'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['street2'] ) ) : '';
	$town = $link_array['town'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['town'] ) ) : '';
	$state = $link_array['state'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['state'] ) ) : '';
	$zip = $link_array['zip'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['zip'] ) ) : '';
	$tel = $link_array['tel'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['tel'] ) ) : '';
	$mobile = $link_array['mobile'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['mobile'] ) ) : '';
	$voip = $link_array['voip'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['voip'] ) ) : '';
	$fax = $link_array['fax'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['fax'] ) ) : '';
	$email = $link_array['email'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['email'] ) ) : '';
	$vat = $link_array['vat'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['vat'] ) ) : '';
	$nice_url = $link_array['nice_url'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['nice_url'] ) ) : '';
	$ttlong = $link_array['ttlong'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['ttlong'] ) ) : '';
	$ttlat = $link_array['ttlat'] ? icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['ttlat'] ) ) : '';

	icms_cp_header();
	iml_adminmenu( 2, _AM_IMLINKS_MLINKS );

	$icmsAdminTpl -> assign( 'icms_module_header', '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />' );

	if ( $lid > 0 ) {
		$_vote_data = iml_getVoteDetails( $lid );

		if ( $_vote_data['total_votes'] > 0 ) {
			$vote_rating = round( $_vote_data['total_value']/$_vote_data['total_votes'], 1 );
		} else {
			$vote_rating = 0;
		}

		$index_screenshot = '';
		if ( icms::$module -> config['useautothumb'] == 1 && icms::$module -> config['autothumbsrc'] == 1 ) {
			$index_screenshot = iml_mozshot( $link_array['url'] );
		} elseif ( icms::$module -> config['useautothumb'] == 1 && icms::$module -> config['autothumbsrc'] == 0 ) {
			$index_screenshot = iml_thumbshot( $link_array['url'] );
		} else {
			if ( isset( $link_array['screenshot'] ) ) {
				if ( !empty( $link_array['screenshot'] ) && file_exists( ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'] . '/' . trim( $link_array['screenshot'] ) ) ) {
				if ( isset( icms::$module -> config['usethumbs'] ) && icms::$module -> config['usethumbs'] == 1 ) {
					include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/class/class_thumbnail.php';
					$_thumb_image = new imThumbsNails( icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $link_array['screenshot'] ) ), icms::$module -> config['screenshots'], 'thumbs' );
					if ( $_thumb_image ) {
						$_thumb_image -> setUseThumbs( 1 );
						$_thumb_image -> setImageType( 'gd2' );
						$_image = $_thumb_image -> do_thumb( icms::$module -> config['shotwidth'],
															 icms::$module -> config['shotheight'],
															 icms::$module -> config['imagequality'],
															 icms::$module -> config['updatethumbs'],
															 icms::$module -> config['keepaspect'] );
				}
				$index_screenshot = '<a class="lytebox" title="' . $link_array['title'] . '" href="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . trim( $link_array['screenshot'] ) . '"><img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . $_image . '" alt="" title="' . _AM_IMLINKS_SCRSHOTENLARGE . '" /></a>';
			} else {
				$index_screenshot = '<img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . trim( $link_array['screenshot'] ) . '" alt="" />';
			}
		}
	}
}

		$text_info = '<table width="100%">
			<tr>
				<td style="width: 35%;">
					<div><b>' . _AM_IMLINKS_LINK_ID . ' </b>' . $lid . '</div>
					<div><b>' . _AM_IMLINKS_MINDEX_SUBMITTED . ': </b>' . formatTimestamp( $link_array['date'], icms::$module -> config['dateformat'] ) . '</div>
					<div><b>' . _AM_IMLINKS_LINK_SUBMITTER . ' </b>' . icms_member_user_Handler::getUserLink( $submitter ) . '</div>
					<div><b>' . _AM_IMLINKS_LINK_IP . ' </b>' . $ipaddress . '</div>
				</td>
				<td style="width: 35%;">
					<div><b>' . _AM_IMLINKS_HITS . ' </b>' . $link_array['hits'] . '</div>
					<div><b>' . _AM_IMLINKS_PAGERANK . ' </b>' . imlinks_pagerank( $link_array['url'] ) . '</div>
					<div><b>' . _AM_IMLINKS_VOTE_RATING . ': </b>' . $vote_rating . '</div>
					<div><b>' . _AM_IMLINKS_VOTE_TOTALRATE . ': </b>' . $_vote_data['total_votes'] . '</div>
				</td>
				<td style="width: 30%; vertical-align: top; text-align: center;">
					<div>' . $index_screenshot . '</div>
				</td>
			</tr>
			</table>';
		echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
				<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_INFORMATION . '</div>
				 <div style="padding: 8px;">' . $text_info . '</div>
			</div><br />';
	}
	unset( $_vote_data );

	if ( $doclone == 0 ) {
		$caption = ( $lid ) ? _AM_IMLINKS_LINK_MODIFYFILE : _AM_IMLINKS_LINK_CREATENEWFILE;
	} else {
		$caption = _AM_IMLINKS_CLONELINK;
	}
	$sform = new icms_form_Theme( $caption, 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart/form-data"' );

	if ( $submitter == '' ) {
		$sform -> addElement( new icms_form_elements_Hidden( 'submitter', $submitter ) );
	}

	// Link publisher form
	if ( $publisher ) {
		$sform -> addElement( new icms_form_elements_Text( _AM_IMLINKS_LINK_PUBLISHER, 'publisher', 70, 255, $publisher ) );
	} else {
		$publisher = icms::$user -> getVar('uname');
		$sform -> addElement( new icms_form_elements_Hidden( 'publisher', $publisher ) );
	}

	// Link title form
	$sform -> addElement( new icms_form_elements_Text( _AM_IMLINKS_LINK_TITLE, 'title', 70, 100, $title ), true );

	// Link nice url
	if ( icms::$module -> config['niceurl'] ) {
		$niceform = new icms_form_elements_Text( _AM_IMLINKS_NICEURL . imlinks_tooltip( _AM_IMLINKS_NICEURLDSC, 'help' ), 'nice_url', 70, 100, $nice_url );
		$sform -> addElement( $niceform, false );
	} else {
		$sform -> addElement( new icms_form_elements_Hidden( 'nice_url', $nice_url ) );
	}

	// Link url form
	$url_text = new icms_form_elements_Text( '', 'url', 70, 255, $url );
	$url_tray = new icms_form_elements_Tray( _AM_IMLINKS_LINK_DLURL . imlinks_tooltip( _AM_IMLINKS_LINKURLDSC, 'help' ), '' );
	$url_tray -> addElement( $url_text, true);
	$url_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='../images/icon/world.png' onClick=\"window.open(storyform.url.value,'','');return(false);\" alt='Check URL' title='Check URL' style='cursor:pointer;' />" ) );
	$sform -> addElement( $url_tray );

	// Category form
	ob_start();
		$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
		$sform -> addElement( new icms_form_elements_Label( _AM_IMLINKS_LINK_CATEGORY, ob_get_contents() ) );
	ob_end_clean();

	// Link description form
	$editor = iml_editorform( _AM_IMLINKS_LINK_DESCRIPTION, 'descriptionb', $descriptionb, '100%', '500px' );
	$sform -> addElement( $editor, false );

	// Meta keywords form
	$keywords = new icms_form_elements_Textarea( _AM_IMLINKS_KEYWORDS . imlinks_tooltip( _AM_IMLINKS_KEYWORDS_NOTE, 'help' ), 'keywords', $keywords, 5, 50 );
	$sform -> addElement( $keywords, false );

	// Screenshot
	$graph_array = &imlLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . icms::$module -> config['screenshots'], $type='images' );
	$indeximage_select = new icms_form_elements_Select( '', 'screenshot', $screenshot );
	$indeximage_select -> addOptionArray( $graph_array );
	$indeximage_select -> setExtra( "onchange = 'showImgSelected(\"image\", \"screenshot\", \"" . icms::$module -> config['screenshots'] . "\", \"\", \"" . ICMS_URL . "\")'" );
	$indeximage_tray = new icms_form_elements_Tray( _AM_IMLINKS_LINK_SHOTIMAGE . imlinks_tooltip( sprintf( _AM_IMLINKS_LINK_MUSTBEVALID, '<b>' . $directory . '</b>' ), 'help' ), '&nbsp;' );
	$indeximage_tray -> addElement( $indeximage_select );
	if ( !empty( $imgurl ) ) {
		$indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br />< img src="' . ICMS_URL . '/' . icms::$module -> config['screenshots'] . '/' . $screenshot . '" name="image" id="image" alt="" />' ) );
	} else {
		$indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/uploads/blank.gif" name="image" id="image" alt="" />' ) );
	}
	$sform -> addElement( $indeximage_tray );

if ( icms::$module -> config['useaddress'] ) {
	$sform -> insertBreak( _AM_IMLINKS_LINK_CREATEADDRESS, 'bg3' );
	// Google Maps
	$googlemap_text = new icms_form_elements_Text( '', 'googlemap', 70, 1024, $googlemap );
	$googlemap_tray = new icms_form_elements_Tray( _AM_IMLINKS_LINK_GOOGLEMAP . imlinks_tooltip( sprintf( _AM_IMLINKS_MAPDSC, '<i>http://maps.google.com</i>' ), 'help' ), '' );
	$googlemap_tray -> addElement( $googlemap_text , false );
	$googlemap_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='../images/icon/google_map.png' onClick=\"window.open(storyform.googlemap.value,'','');return(false);\" alt='"._AM_IMLINKS_LINK_CHECKMAP."' title='"._AM_IMLINKS_LINK_CHECKMAP."' style='cursor:pointer;' />" ) );
	$sform -> addElement( $googlemap_tray );
	// Yahoo Maps
	$yahoomap_text = new icms_form_elements_Text( '', 'yahoomap', 70, 1024, $yahoomap );
	$yahoomap_tray = new icms_form_elements_Tray( _AM_IMLINKS_LINK_YAHOOMAP . imlinks_tooltip( sprintf( _AM_IMLINKS_MAPDSC, '<i>http://maps.yahoo.com</i>' ), 'help' ), '' );
	$yahoomap_tray -> addElement( $yahoomap_text , false );
	$yahoomap_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='../images/icon/yahoo_map.png' onClick=\"window.open(storyform.yahoomap.value,'','');return(false);\" alt='"._AM_IMLINKS_LINK_CHECKMAP."' title='"._AM_IMLINKS_LINK_CHECKMAP."' style='cursor:pointer;' />" ) );
	$sform -> addElement( $yahoomap_tray );
	// Bing Maps
	$multimap_text = new icms_form_elements_Text( '', 'multimap', 70, 1024, $multimap );
	$multimap_tray = new icms_form_elements_Tray( _AM_IMLINKS_LINK_BINGMAP . imlinks_tooltip( sprintf( _AM_IMLINKS_MAPDSC, '<i>http://www.bing.com/maps/</i>' ), 'help' ), '' );
	$multimap_tray -> addElement( $multimap_text , false );
	$multimap_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='../images/icon/bing_map.png' onClick=\"window.open(storyform.multimap.value,'','');return(false);\" alt='"._AM_IMLINKS_LINK_CHECKMAP."' title='"._AM_IMLINKS_LINK_CHECKMAP."' style='cursor:pointer;' />" ) );
	$sform -> addElement( $multimap_tray );

	// Address
	$street1 = new icms_form_elements_Text( _AM_IMLINKS_STREET1, 'street1', 70, 255, $street1 );
	$sform -> addElement( $street1, false );
	$street2 = new icms_form_elements_Text( _AM_IMLINKS_STREET2 . imlinks_tooltip( _AM_IMLINKS_STREETTWODSC, 'help' ), 'street2', 70, 255, $street2 );
	$sform -> addElement( $street2, false );
	$town = new icms_form_elements_Text( _AM_IMLINKS_TOWN, 'town', 70, 255, $town );
	$sform -> addElement( $town, false );
	$state = new icms_form_elements_Text( _AM_IMLINKS_STATE . imlinks_tooltip( _AM_IMLINKS_STATEDSC, 'help' ), 'state', 70, 255, $state );
	$sform -> addElement( $state, false );
	$zip = new icms_form_elements_Text( _AM_IMLINKS_ZIPCODE, 'zip', 40, 25, $zip );
	$sform -> addElement( $zip, false );
	$tel = new icms_form_elements_Text( _AM_IMLINKS_TELEPHONE, 'tel', 40, 25, $tel );
	$sform -> addElement( $tel, false );
	$mobile = new icms_form_elements_Text( _AM_IMLINKS_MOBILE, 'mobile', 40, 25, $mobile );
	$sform -> addElement( $mobile, false );
	$voip = new icms_form_elements_Text( _AM_IMLINKS_VOIP, 'voip', 40, 25, $voip );
	$sform -> addElement( $voip, false );
	$fax = new icms_form_elements_Text( _AM_IMLINKS_FAX, 'fax', 40, 25, $fax );
	$sform -> addElement( $fax, false );
	$email = new icms_form_elements_Text( _AM_IMLINKS_EMAIL . imlinks_tooltip( _AM_IMLINKS_EMAILDSC, 'help' ), 'email', 40, 60, $email );
	$sform -> addElement( $email, false );
	$vat = new icms_form_elements_Text( _AM_IMLINKS_VAT . imlinks_tooltip( _AM_IMLINKS_VATWIKI, 'help' ), 'vat', 40, 25, $vat );
	$sform -> addElement( $vat, false );
//  $sform -> addElement( new icms_form_elements_Hidden( 'vat', $link_array['vat'] ) ); /* If you don't want to use the VAT form,  */
																						/* use this line and comment-out the 3 lines above  */
}

	// Country form
	$country_select = new icms_form_elements_select_Country( _AM_IMLINKS_COUNTRY . imlinks_tooltip( _AM_IMLINKS_COUNTRYDSC, 'warning' ), 'country', $country );
	$sform -> addElement( $country_select, false );

	// TomTom form
	if ( icms::$module -> config['tomtom_apikey'] ) {
		$sform -> insertBreak( '&nbsp;<b>' . _AM_IMLINKS_TOMTOM . '</b>', 'bg3' );
		$sform -> insertBreak(  '<div style="padding: 4px;">' . _AM_IMLINKS_TOMTOMDSC . '</div>', 'bg1' );
		$ttlat = new icms_form_elements_Text( _AM_IMLINKS_TOMTOMLAT, 'ttlat', 40, 25, $ttlat );
		$sform -> addElement( $ttlat, false );
		$ttlong = new icms_form_elements_Text( _AM_IMLINKS_TOMTOMLONG, 'ttlong', 40, 25, $ttlong );
		$sform -> addElement( $ttlong, false );
	}

	// Miscellaneous Link settings
	$sform -> insertBreak( _AM_IMLINKS_LINK_MISCLINKSETTINGS, 'bg3' );

	// Set Publish date
	$sform -> addElement( new icms_form_elements_Datetime( _AM_IMLINKS_LINK_SETPUBLISHDATE, 'published', $size = 15, $published ));
	if ( $lid ) {
		$sform -> addElement( new icms_form_elements_Hidden( 'was_published', $published ) );
		$sform -> addElement( new icms_form_elements_Hidden( 'was_expired', $expired ) );
	}

	// Set Expire date
	$isexpired = ( $expired > time() ) ? 1: 0 ;
	$expiredates = ( $expired > time() ) ? _AM_IMLINKS_LINK_EXPIREDATESET . formatTimestamp( $expired, icms::$module -> config['dateformat'] ) : _AM_IMLINKS_LINK_SETDATETIMEEXPIRE;
	$warning = ( $published > $expired && $expired > time() ) ? _AM_IMLINKS_LINK_EXPIREWARNING : '';
	$expiredate_checkbox = new icms_form_elements_Checkbox( '', 'expiredateactivate', $isexpired );
	$expiredate_checkbox -> addOption( 1, $expiredates );

	$expiredate_tray = new icms_form_elements_Tray( _AM_IMLINKS_LINK_EXPIREDATE . $warning, '' );
	$expiredate_tray -> addElement( $expiredate_checkbox );
	$expiredate_tray -> addElement( new icms_form_elements_Datetime( '<br /><br />' . _AM_IMLINKS_LINK_SETEXPIREDATE, 'expired', 15, $expired ) );
	$expiredate_tray -> addElement( new icms_form_elements_Radioyn( _AM_IMLINKS_LINK_CLEAREXPIREDATE, 'clearexpire', 0, ' ' . _YES . ' ', ' ' . _NO ) );
	$sform -> addElement( $expiredate_tray );

	// Set Link offline
	$linkstatus_radio = new icms_form_elements_Radioyn( _AM_IMLINKS_LINK_FILESSTATUS . imlinks_tooltip( _AM_IMLINKS_LINK_FILESSTATUSDSC, 'help' ), 'offline', $offline, ' ' . _YES . ' ', ' ' . _NO );
	$sform -> addElement( $linkstatus_radio );

	// Set Link updated
	$up_dated = ( $updated == 0 ) ? 0 : 1;
	$link_updated_radio = new icms_form_elements_Radioyn( _AM_IMLINKS_LINK_SETASUPDATED . imlinks_tooltip( _AM_IMLINKS_LINK_SETASUPDATEDDSC, 'help' ), 'up_dated', $up_dated, ' ' . _YES . ' ', ' ' . _NO );
	$sform -> addElement( $link_updated_radio );

	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid );
	list ( $broken_count ) = icms::$xoopsDB -> fetchRow( $result );
	if ( $broken_count > 0 ) {
		$link_updated_radio = new icms_form_elements_Radioyn( _AM_IMLINKS_LINK_DELEDITMESS, 'delbroken', 1, ' ' . _YES . ' ', ' ' . _NO );
		$sform -> addElement( $editmess_radio );
	}

	// Select forum
	if ( icms::$module -> config['selectforum'] > 0 ) {
		ob_start();
			imlLists :: getforum( icms::$module -> config['selectforum'], $forumid );
			$sform -> addElement( new icms_form_elements_Label( _AM_IMLINKS_LINK_DISCUSSINFORUM, ob_get_contents() ) );
		ob_end_clean();
	}

	if ( $lid && $published == 0 ) {
		$approved = ( $published == 0 ) ? 0 : 1;
		$approve_checkbox = new icms_form_elements_Checkbox( _AM_IMLINKS_LINK_EDITAPPROVE, 'approved', 1 );
		$approve_checkbox -> addOption( 1, ' ' );
		$sform -> addElement( $approve_checkbox );
	}

	if ( !$lid ) {
		$button_tray = new icms_form_elements_Tray( '', '' );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'status', 1 ) );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'notifypub', $notifypub ) );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'op', 'save' ) );
		$button_tray -> addElement( new icms_form_elements_Button( '', '', _AM_IMLINKS_BSAVE, 'submit' ) );
		$sform -> addElement( $button_tray );
	} else {
		$button_tray = new icms_form_elements_Tray( '', '' );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'lid', $lid ) );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'status', 2 ) );
		$hidden = new icms_form_elements_Hidden( 'op', 'save' );
		$button_tray -> addElement( $hidden );

		$butt_dup = new icms_form_elements_Button( '', '', _AM_IMLINKS_BMODIFY, 'submit' );
		$butt_dup -> setExtra( 'onclick="this . form . elements . op . value = \'save\'"' );
		$button_tray -> addElement( $butt_dup );
		$butt_dupct = new icms_form_elements_Button( '', '', _DELETE, 'submit' );
		$butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delete\'"' );
		$button_tray -> addElement( $butt_dupct );
		$butt_dupct2 = new icms_form_elements_Button( '', '', _CANCEL, 'submit' );
		$butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'linksConfigMenu\'"' );
		$button_tray -> addElement( $butt_dupct2 );
		$sform -> addElement( $button_tray );
	}
	$sform -> display();
	unset( $hidden );
	icms_cp_footer();
}

function fetchURL( $url, $timeout = 6 ) {
	$url = urldecode( $url );
	$url_parsed = parse_url( $url );
	if ( !isset( $url_parsed['host'] ) ) {
		return '';
	}

	$host = $url_parsed['host'];
	$host = preg_replace( "(http://)", "", $host );
	$port = ( isset( $url_parsed['port'] ) ) ? $url_parsed['port']: 80;
	// Open the socket
	$handle = @fsockopen( $host, $port, $errno, $errstr, $timeout );
	if ( !$handle ) {
		return null;
	} else {
		// Set read timeout
		stream_set_timeout( $handle, $timeout );
		for( $i = 0; $i < 1; $i++ ) {
			// Time the responce
			// list( $usec, $sec ) = explode( ' ', microtime( true ) );
			$start = microtime( true );
			// send somthing
			$write = fwrite( $handle, 'return ping\n' );
			if ( !$write ) {
				return '';
			} 
			fread( $handle, 1024 ); 
			// Work out if we got a responce and time it
			// list( $usec, $sec ) = explode( ' ', microtime( true ) );
			$laptime = microtime( true ) - $start;
			if ( $laptime > $timeout ) {
				return;
			} else {
				return round( $laptime, 3 );
			}
		}
		fclose( $handle );
	}
}

switch ( strtolower( $op ) ) {
	case 'pingtime';
	case 'is_broken';

		$_type = ( $op == 'pingtime' ) ? 'is_broken' : 'pingtime';

		$start = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
		$ping  = iml_cleanRequestVars( $_REQUEST, 'ping', 0 );
		$cid   = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );

		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' ORDER BY lid DESC';
		if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		$broken_array = icms::$xoopsDB -> query( $sql, 10, $start );
		$broken_array_count = icms::$xoopsDB -> getRowsNum( $result );

		icms_cp_header();  

		if ( $op == 'pingtime' ) {
			iml_adminmenu( '', _AM_IMLINKS_MLISTPINGTIMES );
			echo '<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px; margin-bottom: 15px;">
				  <img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/ping.png" alt="" style="float: left;" /><div style="margin-left: 50px;">' . _AM_IMLINKS_PINGTIMES . '</div>
				  </div>';
		} else {
			iml_adminmenu( '', _AM_IMLINKS_MLISTBROKEN );
			echo '<div style="border: #E8E8E8 1px solid;">
					<div style="padding: 8px;">' . _AM_IMLINKS_LISTBROKEN . '</div>
				  </div>';
		}

		iml_linklistpagenav( $broken_array_count, $start, 'art', 'op=' . $op, 'right' );
		echo '<link rel="stylesheet" type="text/css" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/style.css" />';

		if ( $broken_array_count > 0 ) {
		echo '<div class="imlinks_table" style="font-size: 10px;">
				<div class="imlinks_tblhdrrow">
					<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_ID . '</div>
					<div class="imlinks_tblcell">' . _AM_IMLINKS_MINDEX_TITLE . '</div>
					<div class="imlinks_tblcell">' . _AM_IMLINKS_CATTITLE . '</div>
					<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_POSTER . '</div>
					<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_PUBLISHED . '</div>
					<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_RESPONSE . '</div>
					<div class="imlinks_tblcell" style="text-align: center;">PR</div>
					<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_ACTION . '</div>
				</div>';
			while ( $published = icms::$xoopsDB -> fetchArray( $broken_array ) ) {
				$_ping_results = fetchURL( $published['url'] );

				if ( !$_ping_results ) {
					$_ping_results = '<div class="imlinks_tblcell" style="text-align: center; background-color: #FF0033; color: #FFF;">' . _AM_IMLINKS_LINK_NORESPONSE . '</div>';
				} else {
					$_ping_results = '<div class="imlinks_tblcell" style="text-align: center; background-color: #66FF66;">' . $_ping_results . 's</div>';
				}

				$lid = $published['lid'];
				$cid = $published['cid'];
				$nice_link = iml_nicelink( $published['title'], $published['nice_url'] );
				if ( icms::$module -> config['niceurl'] ) {
					$title = '<a href="../singlelink.php?lid=' . $published['lid'] . '&amp;page=' . $nice_link . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $published['title'] ) ) ) . '</a>';
				} else {
					$title = '<a href="../singlelink.php?lid=' . $published['lid'] . '">' . icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $published['title'] ) ) ) . '</a>';
				}
				$cattitle = '<a href="../viewcat.php?cid=' . $published['cid'] . '">' . iml_cattitle( $published['cid'] ) . '</a>';
				$maintitle = urlencode( icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( trim( $published['title'] ) ) ) );
				$submitter = icms_member_user_Handler::getUserLink( $published['submitter'] );
				$publish = formatTimestamp( $published['published'], icms::$module -> config['dateformatadmin'] );
				$status = ( $published['published'] > 0 ) ? $imagearray['online'] : '<a href="newlinks.php">' . $imagearray['offline'] . '</a>';
				$icon  = '<a href="links.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . '</a>&nbsp;';
				$icon .= '<a href="links.php?op=delete&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>';
				$pagerank = imlinks_pagerank( $published['url'] );
				if ( $pagerank == '' ) {
					$pagerank = '&nbsp;';
					}
				echo '<div class="imlinks_tblrow">
						<div class="imlinks_tblcell" style="text-align: center;">' . $lid . '</div>
						<div class="imlinks_tblcell">' . $title . '</div>
						<div class="imlinks_tblcell">' . $cattitle . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . $submitter . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . $publish . '</div>';
				echo $_ping_results;
				echo '	<div class="imlinks_tblcell" style="text-align: center;">' . $pagerank . '</div>
						<div class="imlinks_tblcell" style="text-align: center; white-space: nowrap;">' . $icon . '</div>
					  </div>';
				unset( $published );
				usleep( 100000 ); // Pause 0.1 sec
			}
		} else {
			echo '<div style="border: 1px solid #ccc; text-align: center; width: 100%; clear: both; margin-top: 20px; font-weight: bold; background-color: #FFFF99;">' . _AM_IMLINKS_MINDEX_NOLINKSFOUND . '</div>';
		}
		echo '</div>';
		iml_linklistpagenav( $broken_array_count, $start, 'art', 'op=' . $op, 'right' );
		icms_cp_footer();
		break;
		
	case 'status_off':
		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET offline='1' WHERE lid=" . $lid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		redirect_header( 'index.php', 1, _AM_IMLINKS_MSG_OFFLINE );
		break;

	case 'status_on':
		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET offline='0' WHERE lid=" . $lid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		redirect_header( 'index.php', 1, _AM_IMLINKS_MSG_ONLINE );
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
		$status = ( !empty( $_POST['status'] ) ) ? $_POST['status'] : 2;
		$url = ( $_POST['url'] != 'http://' ) ? icms_core_DataFilter::addSlashes( $_POST['url'] ) : '';
		$title = icms_core_DataFilter::addSlashes( trim( $_POST['title'] ) );
		$nice_url = icms_core_DataFilter::addSlashes( trim( $_POST['nice_url'] ) );

		// Get data from form
		$screenshot = ( $_POST['screenshot'] != 'blank.gif' ) ? icms_core_DataFilter::addSlashes( $_POST['screenshot'] ) : '';
		$descriptionb = icms_core_DataFilter::addSlashes( trim( $_POST['descriptionb'] ) );
		$country = icms_core_DataFilter::addSlashes( trim( $_POST['country'] ) );
		$keywords = icms_core_DataFilter::addSlashes( trim(substr($_POST['keywords'], 0, icms::$module -> config['keywordlength']) ) );
		$forumid = ( isset( $_POST['forumid'] ) && $_POST['forumid'] > 0 ) ? intval( $_POST['forumid'] ) : 0;

		if ( icms::$module -> config['useaddress'] ) {
			$googlemap = ( $_POST['googlemap'] != 'http://maps.google.com' ) ? icms_core_DataFilter::addSlashes( $_POST['googlemap'] ) : '';
			$yahoomap = ( $_POST['yahoomap'] != 'http://maps.yahoo.com' ) ? icms_core_DataFilter::addSlashes( $_POST['yahoomap'] ) : '';
			$multimap = ( $_POST['multimap'] != 'http://www.bing.com/maps/' ) ? icms_core_DataFilter::addSlashes( $_POST['multimap'] ) : '';
			$street1 = icms_core_DataFilter::addSlashes( trim( $_POST['street1'] ) );
			$street2 = icms_core_DataFilter::addSlashes( trim( $_POST['street2'] ) );
			$town = icms_core_DataFilter::addSlashes( trim( $_POST['town'] ) );
			$state = icms_core_DataFilter::addSlashes( trim( $_POST['state'] ) );
			$zip = icms_core_DataFilter::addSlashes( trim( $_POST['zip'] ) );
			$tel = icms_core_DataFilter::addSlashes( trim( $_POST['tel'] ) );
			$fax = icms_core_DataFilter::addSlashes( trim( $_POST['fax'] ) );
			$voip = icms_core_DataFilter::addSlashes( trim( $_POST['voip'] ) );
			$mobile = icms_core_DataFilter::addSlashes( trim( $_POST['mobile'] ) );
			$email = iml_emailcnvrt( icms_core_DataFilter::addSlashes( trim( $_POST['email'] ) ) );
			$vat = icms_core_DataFilter::addSlashes( trim( $_POST['vat'] ) );
		} else {
			$googlemap = $yahoomap = $multimap = $street1 = $street2 = $town = $state = $zip = $tel = $fax = $voip = $mobile = $email = $vat = '';
		}

		if ( icms::$module -> config['tomtom_apikey'] ) {
			$ttlat = icms_core_DataFilter::addSlashes( trim( $_POST['ttlat'] ) );
			$ttlong = icms_core_DataFilter::addSlashes( trim( $_POST['ttlong'] ) );
		} else {
			$ttlat = $ttlong = '';
		}

		$submitter = icms::$user -> getVar('uid');
		$publisher = icms_core_DataFilter::addSlashes( trim( $_POST['publisher'] ) );

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

			$sql = "INSERT INTO " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " (lid, cid, title, url, screenshot, submitter, publisher, status, date, hits, rating, votes, comments, forumid, published, expired, updated, offline, description, ipaddress, notifypub, country, keywords, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, nice_url, ttlat, ttlong)";

			$sql .= " VALUES 	('', $cid, '$title', '$url', '$screenshot', '$submitter', '$publisher','$status', '$date', 0, 0, 0, 0, '$forumid', '$published', '$expiredate', '$updated', '$offline', '$descriptionb', '$ipaddress', '0', '$country', '$keywords', '$googlemap', '$yahoomap', '$multimap', '$street1', '$street2', '$town', '$state', '$zip', '$tel', '$fax', '$voip', '$mobile', '$email', '$vat', '$nice_url', '$ttlat', '$ttlong')";

		} else {

			$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET cid = $cid, title='$title', url='$url', screenshot='$screenshot', publisher='$publisher', status='$status', forumid='$forumid', published='$published', expired='$expiredate', updated='$updated', offline='$offline', description='$descriptionb', country='$country', keywords='$keywords', googlemap='$googlemap', yahoomap='$yahoomap', multimap='$multimap', street1='$street1', street2='$street2', town='$town', state='$state',  zip='$zip', tel='$tel', fax='$fax', voip='$voip', mobile='$mobile', email='$email', vat='$vat', nice_url='$nice_url', ttlat='$ttlat', ttlong='$ttlong' WHERE lid='$lid'";

		} 

		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}

		$newid = mysql_insert_id();

		// Send notifications
		if ( !$lid ) {
			$tags = array();
			$tags['LINK_NAME'] = $title;
			$tags['LINK_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $newid;
			$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $cid;
			$result = icms::$xoopsDB -> query( $sql );
			$row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
			$tags['CATEGORY_NAME'] = $row['title'];
			$tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
			$notification_handler = icms::handler('icms_data_notification');
			$notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
			$notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
		}
		if ( $lid && $approved && $notifypub ) {
			$tags = array();
			$tags['LINK_NAME'] = $title;
			$tags['LINK_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?cid=' . $cid . '&amp;lid=' . $lid;
			$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . $cid;
			$result = icms::$xoopsDB -> query( $sql );
			$row = icms::$xoopsDB -> fetchArray( $result );
			$tags['CATEGORY_NAME'] = $row['title'];
			$tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
			$notification_handler = icms::handler('icms_data_notification');
			$notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
			$notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
			$notification_handler -> triggerEvent( 'link', $lid, 'approve', $tags );
		}
		$message = ( !$lid ) ? _AM_IMLINKS_LINK_NEWFILEUPLOAD : _AM_IMLINKS_LINK_FILEMODIFIEDUPDATE;
		$message = ( $lid && !$_POST['was_published'] && $approved ) ? _AM_IMLINKS_LINK_FILEAPPROVED : $message;

		if ( iml_cleanRequestVars( $_REQUEST, 'delbroken', 0 ) ) {
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
		}

		redirect_header( 'links.php', 1, $message );
		break;

	case 'delete':
		if ( iml_cleanRequestVars( $_REQUEST, 'confirm', 0 ) ) {
			$title = iml_cleanRequestVars( $_REQUEST, 'title', 0 );

			// delete link
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}

			// delete from altcat
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_altcat' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}

			// delete vote data
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . ' WHERE id=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}

			// delete broken data
			if ( iml_cleanRequestVars( $_REQUEST, 'delbroken', 1 ) ) {
				$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) . ' WHERE lid=' . $lid;
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
					return false;
				}
			}

			// delete comments
			xoops_comment_delete( $icmsModule -> getVar( 'mid' ), $lid );
			redirect_header( 'links.php', 1, sprintf( _AM_IMLINKS_LINK_FILEWASDELETED, $title ) );
			exit();
			
		} else {
		
			$sql = 'SELECT lid, title, item_tag, url FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
			list( $lid, $title ) = icms::$xoopsDB -> fetchrow( $result );
			$item_tag = $result['item_tag'];
			icms_cp_header();
			iml_adminmenu( _AM_IMLINKS_BINDEX );
			icms_core_Message::confirm( array( 'op' => 'delete', 'lid' => $lid, 'confirm' => 1, 'title' => $title ), 'links.php', _AM_IMLINKS_LINK_REALLYDELETEDTHIS . '<br /><br>' . $title, _DELETE );

			icms_cp_footer();
			
		}
		break;

	case 'delvote':
		$rid = iml_cleanRequestVars( $_REQUEST, 'rid', 0 );
		$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'imlinks_votedata' ) . ' WHERE ratingid=' . $rid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		iml_updaterating( $rid );
		redirect_header( 'links.php', 1, _AM_IMLINKS_VOTE_VOTEDELETED );
		break;
		
	case 'changestatus':
		$status = $ret = '';
		$lid = isset( $_POST['lid'] ) ? intval( $_POST['lid'] ) : intval( $_GET['lid'] );
		$status = $imlinks_links_handler -> changeOnlineStatus( $lid, 'offline' );
		$ret = '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/links.php';
		if ( $status == 0 ) {
			redirect_header( ICMS_URL . $ret, 2, _AM_IMLINKS_ICO_ONLINE );
		} else {
			redirect_header( ICMS_URL . $ret, 2, _AM_IMLINKS_ICO_OFFLINE );
		}
		break;

	case 'main':
	default:
		$start  = iml_cleanRequestVars( $_REQUEST, 'start', 0 );
		$start1 = iml_cleanRequestVars( $_REQUEST, 'start1', 0 );
		$start2 = iml_cleanRequestVars( $_REQUEST, 'start2', 0 );
		$start3 = iml_cleanRequestVars( $_REQUEST, 'start3', 0 );
		$start4 = iml_cleanRequestVars( $_REQUEST, 'start4', 0 );
		$totalcats = iml_totalcategory();

		$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_broken' ) );
		list( $totalbrokenlinks ) = icms::$xoopsDB -> fetchRow( $result );
		$result2 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) );
		list( $totalmodrequests ) = icms::$xoopsDB -> fetchRow( $result2 );
		$result3 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published=0' );
		list( $totalnewlinks ) = icms::$xoopsDB -> fetchRow( $result3 );
		$result4 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE published>0' );
		list( $totallinks ) = icms::$xoopsDB -> fetchRow( $result4 );

		icms_cp_header();

		// Module admin summary
		iml_adminmenu( 1, _AM_IMLINKS_BINDEX );

		$icmsAdminTpl -> assign( 'icms_module_header', '<link rel="stylesheet" type="text/css" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/style.css" />' );
		echo '
			<div style="border: #e8e8e8 1px solid; padding: 8px; border-radius: 5px;">
				<div style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_MINDEX_LINKSUMMARY . '</div>
				<div style="padding: 10px;" id="button">
					<a class="button" href="category.php">' . _AM_IMLINKS_SCATEGORY . $totalcats . '</a>
					<a class="button" href="links.php">' . _AM_IMLINKS_SFILES . $totallinks . '</a>
					<a class="button" href="newlinks.php">' . _AM_IMLINKS_SNEWFILESVAL . $totalnewlinks . '</a>
					<a class="button" href="modifications.php">' . _AM_IMLINKS_SMODREQUEST . $totalmodrequests . '</a>
					<a class="button" href="brokenlink.php">' . _AM_IMLINKS_SBROKENSUBMIT . $totalbrokenlinks . '</a>
				</div>
			</div><br />';

		// Modify category
		if ( $totalcats > 0 ) {
			$sform = new icms_form_Theme( _AM_IMLINKS_CCATEGORY_MODIFY, 'category', 'category.php' );
			ob_start();
				$mytree -> makeMySelBox( 'title', 'title' );
				$sform -> addElement( new icms_form_elements_Label( _AM_IMLINKS_CCATEGORY_MODIFY_TITLE, ob_get_contents() ) );
			ob_end_clean();
			$dup_tray = new icms_form_elements_Tray( '', '' );
			$dup_tray -> addElement( new icms_form_elements_Hidden( 'op', 'modCat' ) );
			$butt_dup = new icms_form_elements_Button( '', '', _AM_IMLINKS_BMODIFY, 'submit' );
			$butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'modCat\'"' );
			$dup_tray -> addElement( $butt_dup );
			$butt_dupct = new icms_form_elements_Button( '', '', _DELETE, 'submit' );
			$butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
			$dup_tray -> addElement( $butt_dupct );
			$sform -> addElement( $dup_tray );
			$sform -> display();
		}
		
		// Main Index
		if ( icms::$module -> config['ipftables'] == 1 ) {
		
			echo '<br />';
		
			$objectTable = new icms_ipf_view_Table( $imlinks_links_handler, false, array() );

			$objectTable -> addHeader('<span style="float: left; font-size: 12px; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_MINDEX_PUBLISHEDLINK . '</span>');

			$objectTable -> addColumn( new icms_ipf_view_Column( 'lid', 'center', 40, true ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'title', _GLOBAL_LEFT, false, 'ViewLink' ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'cid', _GLOBAL_LEFT, false ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'submitter', 'center' ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'published', 'center', 100 ) );
			$objectTable -> addColumn( new icms_ipf_view_Column( 'status', 'center' ) );

			$objectTable -> addCustomAction( 'getEditLink' );
			$objectTable -> addCustomAction( 'getDeleteLink' );
			$objectTable -> addCustomAction( 'getCloneLink' );
			$objectTable -> addCustomAction( 'getAltcatLink' );
			$objectTable -> addCustomAction( 'getWhoisLink' );
			
			$objectTable -> addFilter( 'submitter', 'submitterArray' );
		
			$objectTable -> addQuickSearch( array( 'title' ), _AM_IMLINKS_SEARCHTITLE );
		
			$objectTable -> setDefaultSort( 'lid' );
			$objectTable -> setDefaultOrder( 'DESC' );

			$icmsAdminTpl -> assign( 'imlinks_links_table', $objectTable -> fetch() );
			$icmsAdminTpl -> display( 'db:imlinks_admin_index.html' );
		
		} else {
		
			$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' ORDER BY lid DESC';
			$published_array = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'], $start );
			$published_array_count = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );
			echo '<br /><span style="float: left; font-weight: bold; color: #0A3760;">' . _AM_IMLINKS_MINDEX_PUBLISHEDLINK . '</span>';
			echo iml_linklistpagenav( $published_array_count, $start, 'art', '', 'right' );
			
			if ( $published_array_count > 0 ) {
			
				echo '<div class="imlinks_table" style="font-size: 10px;">
					<div class="imlinks_tblhdrrow">
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_ID . '</div>
						<div class="imlinks_tblcell">' . _AM_IMLINKS_MINDEX_TITLE . '</div>
						<div class="imlinks_tblcell">' . _AM_IMLINKS_CATTITLE . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_POSTER . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_PUBLISH . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_EXPIRE . '</div>
						<div class="imlinks_tblcell" style="text-align: center;">' . _AM_IMLINKS_MINDEX_ONLINE . '</div>
						<div class="imlinks_tblcell">' . _AM_IMLINKS_MINDEX_ACTION . '</div>
					</div>';
				while ( $published = icms::$xoopsDB -> fetchArray( $published_array ) ) {
					iml_linklistbody( $published );
				}
				echo '</div>';
				iml_linklistpagenav( $published_array_count, $start, 'art', '', 'right' );
				
			} else {
			
				echo '<br /><div style="border: 1px solid #ccc; text-align: center; width: 100%; font-weight: bold; background-color: #FFFF99;">' . _AM_IMLINKS_MINDEX_NOLINKSFOUND . '</div>';
				
			}
		}

		icms_cp_footer();
		break;
}
?>