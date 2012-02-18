<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: submit.php
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

global $icmsConfigUser;

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );

$cid = intval( iml_cleanRequestVars( $_REQUEST, 'cid', 0 ) );
$lid = intval( iml_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

if ( false == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
	redirect_header( 'index.php', 1, _MD_IMLINKS_NOPERMISSIONTOPOST );
	exit();
}

if ( true == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
	if ( iml_cleanRequestVars( $_REQUEST, 'submit', 0 ) ) {

		// Verify captcha code
		if ( icms::$module -> config['captcha'] == true && $icmsConfigUser['use_captcha'] == true ) {
			$icmsCaptcha = icms_form_elements_captcha_Object::instance(); 
			if ( !$icmsCaptcha -> verify( true ) ) { 
				redirect_header( 'submit.php', 2, $icmsCaptcha -> getMessage() ); 
			}
		}
		
		if ( false == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
			redirect_header( 'index.php', 1, _MD_IMLINKS_NOPERMISSIONTOPOST );
			exit();
		}

		$submitter = ( is_object( icms::$user ) && !empty( icms::$user ) ) ? icms::$user -> getVar( 'uid' ) : 0;
		$forumid = iml_cleanRequestVars( $_REQUEST, 'forumid', 0 );
		$offline = iml_cleanRequestVars( $_REQUEST, 'offline', 0 );
		$notifypub = iml_cleanRequestVars( $_REQUEST, 'notifypub', 0 );
		$approve = iml_cleanRequestVars( $_REQUEST, 'approve', 0 );
		$url = icms_core_DataFilter::addSlashes( ltrim($_POST['url']) );
		$title = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['title'] ) );
		$descriptionb = ltrim( $_REQUEST['descriptionb'] );
		$keywords = icms_core_DataFilter::addSlashes( trim(substr($_POST['keywords'], 0, icms::$module -> config['keywordlength']) ) );

		if ( icms::$module -> config['usercantag'] ) {
			$item_tag = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['item_tag'] ) );
		} else {
			$item_tag = '';
		}

		if ( icms::$module -> config['useaddress'] ) {
			$googlemap = ( $_POST['googlemap'] != 'http://maps.google.com' ) ? icms_core_DataFilter::addSlashes( $_POST['googlemap'] ) : '';
			$yahoomap = ( $_POST['yahoomap'] != 'http://maps.yahoo.com' ) ? icms_core_DataFilter::addSlashes( $_POST['yahoomap'] ) : '';
			$multimap = ( $_POST["multimap"] != 'http://www.bing.com/maps/' ) ? icms_core_DataFilter::addSlashes( $_POST['multimap'] ) : '';
			$street1 = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['street1'] ) );
			$street2 = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['street2'] ) );
			$town = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['town'] ) );
			$state = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['state'] ) );
			$zip = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['zip'] ) );
			$tel = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['tel'] ) );
			$fax = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['fax'] ) );
			$voip = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['voip'] ) );
			$mobile = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['mobile'] ) );
			$email = iml_emailcnvrt( icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['email'] ) ) );
			$vat = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['vat'] ) );
		} else {
			$googlemap = $yahoomap = $multimap = $street1 = $street2 = $town = $state = $zip = $tel = $fax = $voip = $mobile = $email = $vat = '';
		}

		$country = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['country'] ) );
		
		if ( icms::$module -> config['tomtom_apikey'] ) {
			$ttlat  = icms_core_DataFilter::addSlashes( trim( $_POST['ttlat'] ) );
			$ttlong = icms_core_DataFilter::addSlashes( trim( $_POST['ttlong'] ) );
		} else {
			$ttlat = $ttlong = '';
		}

		$date = time();
		$publishdate = 0;
		$ipaddress = $_SERVER['REMOTE_ADDR'];

		if ( $lid == 0 ) {
			$status = 0;
			$publishdate = 0;
			$message = _MD_IMLINKS_THANKSFORINFO;
			if ( true == iml_checkgroups( $cid, 'imLinkAutoApp' ) ) {
				$publishdate = time();
				$status = 1;
				$message = _MD_IMLINKS_ISAPPROVED;
			}

			$sql = 'INSERT INTO ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . '	(lid, cid, title, url, submitter, status, date, hits, rating, votes, comments, forumid, published, expired, offline, description, ipaddress, notifypub, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, ttlat, ttlong )';

			$sql .= " VALUES ('', $cid, '$title', '$url', '$submitter', '$status', '$date', 0, 0, 0, 0, '$forumid', '$publishdate', 0, '$offline', '$descriptionb', '$ipaddress', '$notifypub', '$country', '$keywords', '$item_tag', '$googlemap', '$yahoomap', '$multimap', '$street1', '$street2', '$town', '$state', '$zip', '$tel', '$fax', '$voip', '$mobile', '$email', '$vat', '$ttlat', '$ttlong' )";

			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				$_error = icms::$xoopsDB -> error() . ' : ' . icms::$xoopsDB -> errno();
					icms::$logger -> handleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
			}
			$newid = mysql_insert_id();

			// Add item_tag to Tag-module
			if ( $lid == 0 ) {
				$tagupdate = iml_tagupdate( $newid, $item_tag );
			} else {
				$tagupdate = iml_tagupdate( $lid, $item_tag );
			}

			// Notify of new link (anywhere) and new link in category
			$notification_handler = icms::handler( 'icms_data_notification' );

			$tags = array();
			$tags['LINK_NAME'] = $title;
			$tags['LINK_URL'] = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . intval( $newid );

			$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . intval( $cid );
			$row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

			$tags['CATEGORY_NAME'] = $row['title'];
			$tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $mydirname . '/viewcat.php?cid=' . intval( $cid );
			if ( true == iml_checkgroups( $cid, 'imLinkAutoApp' ) ) {
				$notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
				$notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
				redirect_header( 'index.php', 2, _MD_IMLINKS_ISAPPROVED );
			} else {
				$tags['WAITINGFILES_URL'] = ICMS_URL . '/modules/' . $mydirname . '/admin/newlinks.php';
				$notification_handler -> triggerEvent( 'global', 0, 'link_submit', $tags );
				$notification_handler -> triggerEvent( 'category', $cid, 'link_submit', $tags );
				if ( $notifypub ) {
					include_once ICMS_ROOT_PATH . '/include/notification_constants.php';
					$notification_handler -> subscribe( 'link', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE );
				}
				redirect_header( 'index.php', 2, _MD_IMLINKS_THANKSFORINFO );
			}
		} else {
			if ( true == iml_checkgroups( $cid, 'imLinkAutoApp' ) || $approve == 1 ) {
				$updated = time();
				$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'imlinks_links' ) . " SET cid=$cid, title='$title', url='$url', updated='$updated', offline='$offline', description='$descriptionb', ipaddress='$ipaddress', notifypub='$notifypub', country='$country', keywords='$keywords', item_tag='$item_tag', googlemap='$googlemap', yahoomap='$yahoomap', multimap='$multimap', street1='$street1', street2='$street2', town='$town', state='$state',  zip='$zip', tel='$tel', fax='$fax', voip='$voip', mobile='$mobile', email='$email', vat='$vat', ttlat='$ttlat', ttlong='$ttlong' WHERE lid=" . intval( $lid );
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					$_error = icms::$xoopsDB -> error() . ' : ' . icms::$xoopsDB -> errno();
					icms::$logger -> handleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
				}

				$notification_handler = icms::handler( 'icms_data_notification' );
				$tags = array();
				$tags['LINK_NAME'] = $title;
				$tags['LINK_URL'] = ICMS_URL . '/modules/' . $mydirname . '/singlelink.php?lid=' . intval( $lid );
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' WHERE cid=' . intval( $cid );
				$result = icms::$xoopsDB -> query( $sql );
				$row = icms::$xoopsDB -> fetchArray( $result );
				$tags['CATEGORY_NAME'] = $row['title'];
				$tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $mydirname . '/viewcat.php?cid=' . intval( $cid );

				$notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
				$notification_handler -> triggerEvent( 'category', intval($cid), 'new_link', $tags );
				$_message = _MD_IMLINKS_ISAPPROVED;
			} else {
				$modifysubmitter = icms::$user -> uid();
				$requestid = $modifysubmitter;
				$requestdate = time();
				$updated = iml_cleanRequestVars( $_REQUEST, 'up_dated', time() );
				$sql = 'INSERT INTO ' . icms::$xoopsDB -> prefix( 'imlinks_mod' ) . ' (requestid, lid, cid, title, url, forumid, description, modifysubmitter, requestdate, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, ttlat, ttlong)';
				$sql .= " VALUES ('', $lid, $cid, '$title', '$url', '$forumid', '$descriptionb', '$modifysubmitter', '$requestdate', '$country', '$keywords', '$item_tag', '$googlemap', '$yahoomap', '$multimap', '$street1', '$street2', '$town', '$state', '$zip', '$tel', '$fax', '$voip', '$mobile', '$email', '$vat', '$ttlat', '$ttlong')";
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					$_error = icms::$xoopsDB -> error() . ' : ' . icms::$xoopsDB -> errno();
					icms::$logger -> handleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
				}

				$tags = array();
				$tags['MODIFYREPORTS_URL'] = ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=listModReq';
				$notification_handler = icms::handler( 'icms_data_notification' );
				$notification_handler -> triggerEvent( 'global', 0, 'link_modify', $tags );

				$tags['WAITINGFILES_URL'] = ICMS_URL . '/modules/' . $mydirname . '/admin/index.php?op=listNewlinks';
				$notification_handler -> triggerEvent( 'global', 0, 'link_submit', $tags );
				$notification_handler -> triggerEvent( 'category', intval($cid), 'link_submit', $tags );
				if ( $notifypub ) {
					include_once ICMS_ROOT_PATH . '/include/notification_constants.php';
					$notification_handler -> subscribe( 'link', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE );
				}
				$_message = _MD_IMLINKS_THANKSFORINFO;
			}
			redirect_header( 'index.php', 2, $_message );
		}
	} else {
		$approve = iml_cleanRequestVars( $_REQUEST, 'approve', 0 );

		// Show disclaimer
		if ( icms::$module -> config['showdisclaimer'] && !isset( $_GET['agree'] ) && $approve == 0 ) {
		
			$xoopsOption['template_main'] = 'imlinks_disclaimer.html';
			include_once ICMS_ROOT_PATH . '/header.php';

			$xoopsTpl -> assign( 'image_header', iml_imageheader() );
			$xoopsTpl -> assign( 'disclaimer', icms::$module -> config['disclaimer'] );
			$xoopsTpl -> assign( 'cancel_location', ICMS_URL . '/modules/' . $mydirname . '/index.php' );
			$xoopsTpl -> assign( 'link_disclaimer', false );
			$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar('dirname') );
			if ( !isset( $_REQUEST['lid'] ) ) {
				$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $mydirname . '/submit.php?agree=1' );
			} elseif ( isset( $_REQUEST['lid'] ) ) {
				$lid = intval( $_REQUEST['lid'] );
				$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $mydirname . '/submit.php?agree=1&amp;lid=' . intval( $lid ) );
			}
			include ICMS_ROOT_PATH . '/footer.php';
			exit();
		}

		// Submit form
		include_once ICMS_ROOT_PATH . '/header.php';
		echo '<br /><div style="text-align: center;">' . iml_imageheader() . '</div><br />';
		echo '<div style="margin: auto; width: 90%;">' . _MD_IMLINKS_SUB_SNEWMNAMEDESC . '</div><br />';

		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . intval( $lid );
		$link_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

		$lid = $link_array['lid'] ? $link_array['lid'] : 0;
		$cid = $link_array['cid'] ? $link_array['cid'] : 0;
		$title = $link_array['title'] ? $immyts -> htmlSpecialCharsStrip( $link_array['title'] ) : '';
		$url = $link_array['url'] ? $immyts -> htmlSpecialCharsStrip( $link_array['url'] ) : 'http://';
		$publisher = $link_array['publisher'] ? $immyts -> htmlSpecialCharsStrip( $link_array['publisher'] ) : '';
		$screenshot = $link_array['screenshot'] ? $immyts -> htmlSpecialCharsStrip( $link_array['screenshot'] ) : '';
		$descriptionb = $link_array['description'] ? $immyts -> htmlSpecialCharsStrip( $link_array['description'] ) : '';
		$published = $link_array['published'] ? $link_array['published'] : 0;
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
		$multimap = $link_array['multimap'] ? $immyts -> htmlSpecialCharsStrip( $link_array['multimap'] ) : 'http://www.bing.com/maps/';
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
		$ttlong = $link_array['ttlong'] ? $immyts -> htmlSpecialCharsStrip( $link_array['ttlong'] ) : '';
		$ttlat = $link_array['ttlat'] ? $immyts -> htmlSpecialCharsStrip( $link_array['ttlat'] ) : '';

	echo '<script type="text/javascript" language="javascript" src="' . ICMS_URL . '/libraries/lytebox/lytebox.js"></script>
		  <link rel="stylesheet" type="text/css" media="screen" href="' . ICMS_URL . '/libraries/lytebox/lytebox.css" />';

		$sform = new icms_form_Theme( _MD_IMLINKS_SUBMITCATHEAD, 'storyform', '' );
		$sform -> setExtra( 'enctype="multipart/form-data"' );

		// Title form
		$sform -> addElement( new icms_form_elements_Text( _MD_IMLINKS_FILETITLE, 'title', 70, 255, $title ), true );

		// Link url form
		$url_text = new icms_form_elements_Text( '', 'url', 70, 255, $url );
		$url_tray = new icms_form_elements_Tray( _MD_IMLINKS_DLURL . imlinks_helptip( _MD_IMLINKS_LINKURLDSC ), '' );
		$url_tray -> addElement( $url_text , true ) ;
		$url_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $mydirname . "/images/icon/world.png' onClick=\"window.open(storyform.url.value,'','');return(false);\" alt='' title='Check URL' />" ));
		$sform -> addElement( $url_tray );

		// Category selection menu
		$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
		$submitcats = array();
		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'imlinks_cat' ) . ' ORDER BY title';
		$result = icms::$xoopsDB -> query( $sql );
		while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
			if ( true == iml_checkgroups( $myrow['cid'], 'imLinkSubPerm' ) ) {
				$submitcats[$myrow['cid']] = $myrow['title'];
			}
		}
		ob_start();
			$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
			$sform -> addElement( new icms_form_elements_Label( _MD_IMLINKS_CATEGORYC, ob_get_contents() ) );
		ob_end_clean();

	// Link description form
	$editor = iml_editorform( _DESCRIPTION . ':', 'descriptionb', $descriptionb );
	$sform -> addElement( $editor, false );

	// Keywords form
	$keywords = new icms_form_elements_Textarea( _MD_IMLINKS_KEYWORDS . imlinks_helptip( _MD_IMLINKS_KEYWORDS_NOTE ), 'keywords', $keywords, 5, 50 );
	$sform -> addElement( $keywords, false );

	// Insert tags if Tag-module is installed and if user is allowed
	if ( icms::$module -> config['usercantag'] ) {
		if ( iml_tag_module_included() ) {
			include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
			$text_tags = new XoopsFormTag( 'item_tag', 70, 255, $link_array['item_tag'], 0 );
			$sform -> addElement( $text_tags );
		} else {
			$sform -> addElement( new icms_form_elements_Hidden( 'item_tag', $link_array['item_tag'] ) ) ;
		}
	}
	if ( icms::$module -> config['useaddress'] ) {
		$sform -> insertBreak( '&#9658; ' . _MD_IMLINKS_LINK_CREATEADDRESS, 'even' );
		// Google Maps
		$googlemap_text = new icms_form_elements_Text( '', 'googlemap', 70, 1024, $googlemap );
		$googlemap_tray = new icms_form_elements_Tray( _MD_IMLINKS_LINK_GOOGLEMAP . imlinks_helptip( sprintf( _MD_IMLINKS_MAPDSC, '<i>http://maps.google.com</i>' ) ), '' );
		$googlemap_tray -> addElement( $googlemap_text , false ) ;
		$googlemap_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $mydirname . "/images/icon/google_map.png' onClick=\"window.open(storyform.googlemap.value,'','');\" alt='' title='" . _MD_IMLINKS_LINK_CHECKMAP . "' />" ) );
		$sform -> addElement( $googlemap_tray );

		// Yahoo Maps
		$yahoomap_text = new icms_form_elements_Text( '', 'yahoomap', 70, 1024, $yahoomap );
		$yahoomap_tray = new icms_form_elements_Tray( _MD_IMLINKS_LINK_YAHOOMAP . imlinks_helptip( sprintf( _MD_IMLINKS_MAPDSC, '<i>http://maps.yahoo.com</i>' ) ), '' );
		$yahoomap_tray -> addElement( $yahoomap_text , false ) ;
		$yahoomap_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $mydirname . "/images/icon/yahoo_map.png' onClick=\"window.open(storyform.yahoomap.value,'','');return(false);\" alt='' title='" . _MD_IMLINKS_LINK_CHECKMAP . "' />" ) );
		$sform -> addElement( $yahoomap_tray );

		// Bing Maps
		$multimap_text = new icms_form_elements_Text( '', 'multimap', 70, 1024, $multimap );
		$multimap_tray = new icms_form_elements_Tray( _MD_IMLINKS_LINK_BINGMAP . imlinks_helptip( sprintf( _MD_IMLINKS_MAPDSC, '<i>http://www.bing.com/maps/</i>' ) ), '' );
		$multimap_tray -> addElement( $multimap_text , false ) ;
		$multimap_tray -> addElement( new icms_form_elements_Label( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $mydirname . "/images/icon/bing_map.png' onClick=\"window.open(storyform.multimap.value,'','');return(false);\" alt='' title='" . _MD_IMLINKS_LINK_CHECKMAP . "' />" ));
		$sform -> addElement( $multimap_tray );

		// Address forms
		$street1 = new icms_form_elements_Text( _MD_IMLINKS_STREET1, 'street1', 70, 255, $street1 );
		$sform -> addElement( $street1, false );
		$street2 = new icms_form_elements_Text( _MD_IMLINKS_STREET2 . imlinks_helptip( _MD_IMLINKS_STREETTWODSC ), 'street2', 70, 255, $street2 );
		$sform -> addElement( $street2, false );
		$town = new icms_form_elements_Text( _MD_IMLINKS_TOWN, 'town', 70, 255, $town );
		$sform -> addElement( $town, false );
		$state = new icms_form_elements_Text( _MD_IMLINKS_STATE . imlinks_helptip( _MD_IMLINKS_STATEDSC ), 'state', 70, 255, $state );
		$sform -> addElement( $state, false );
		$zip = new icms_form_elements_Text( _MD_IMLINKS_ZIPCODE, 'zip', 25, 25, $zip );
		$sform -> addElement( $zip, false );
		$tel = new icms_form_elements_Text( _MD_IMLINKS_TELEPHONE, 'tel', 25, 25, $tel );
		$sform -> addElement( $tel, false );
		$mobile = new icms_form_elements_Text( _MD_IMLINKS_MOBILE, 'mobile', 25, 25, $mobile );
		$sform -> addElement( $mobile, false );
		$voip = new icms_form_elements_Text( _MD_IMLINKS_VOIP, 'voip', 25, 25, $voip );
		$sform -> addElement( $voip, false );
		$fax = new icms_form_elements_Text( _MD_IMLINKS_FAX, 'fax', 25, 25, $fax );
		$sform -> addElement( $fax, false );
		$email = new icms_form_elements_Text( _MD_IMLINKS_EMAIL . imlinks_helptip( _MD_IMLINKS_EMAILDSC ), 'email', 25, 25, $email );
		$sform -> addElement( $email, false );
		$vat = new icms_form_elements_Text( _MD_IMLINKS_VAT . imlinks_helptip( _MD_IMLINKS_VATWIKI ), 'vat', 25, 25, $vat );
		$sform -> addElement( $vat, false );
		// $sform -> addElement( new icms_form_elements_Hidden( 'vat', $link_array['vat'] ) );	/* If you don't want to use the VAT form,  */
																								/* use this line and comment-out the 3 lines above  */
	}

	// Country form
	$countryform = new icms_form_elements_select_Country( _MD_IMLINKS_COUNTRY . imlinks_helptip( _MD_IMLINKS_COUNTRYDSC ), 'country', $country );
	$sform -> addElement( $countryform, false );

	// TomTom form	
	if ( icms::$module -> config['tomtom_apikey'] ) {
		$sform -> insertBreak( '&#9658; <b>' . _MD_IMLINKS_ADDTOTOMTOM . '</b>', 'even' );
		$sform -> insertBreak(  '<div style="padding: 4px; font-style: italic; font-size: smaller;">' . _MD_IMLINKS_TOMTOMDSC . '</div>', 'odd' );

		$ttlat = new icms_form_elements_Text( _MD_IMLINKS_TOMTOMLAT, 'ttlat', 40, 25, $ttlat ); // lattitude
		$sform -> addElement( $ttlat, false );

		$ttlong = new icms_form_elements_Text( _MD_IMLINKS_TOMTOMLONG, 'ttlong', 40, 25, $ttlong ); // longitude
		$sform -> addElement( $ttlong, false );	
	}

	// Notify form
	$submitter2 = ( is_object( icms::$user ) && !empty( icms::$user ) ) ? icms::$user -> getVar( 'uid' ) : 0;
	if ( $submitter2 > 0 ) {
		$sform -> insertBreak( '&#9658; <b>' . _MD_IMLINKS_OPTIONS . '</b>', 'even' );
		$option_tray = new icms_form_elements_Tray( '', '' );
			if ( !$approve ) {
				$notify_checkbox = new icms_form_elements_Checkbox( '', 'notifypub' );
				$notify_checkbox -> addOption( 1, _MD_IMLINKS_NOTIFYAPPROVE );
				$option_tray -> addElement( $notify_checkbox );
			} else {
				$sform -> addElement( new icms_form_elements_Hidden( 'notifypub', 0 ) );
			} 
	}

	if ( true == iml_checkgroups( $cid, 'imLinkAppPerm' ) && $lid > 0 ) {
		$approve_checkbox = new icms_form_elements_Checkbox( '', 'approve', $approve );
		$approve_checkbox -> addOption( 1, _MD_IMLINKS_APPROVE );
		$option_tray -> addElement( $approve_checkbox );
	} else if ( true == iml_checkgroups( $cid, 'imLinkAutoApp' ) ) {
		$sform -> addElement( new icms_form_elements_Hidden( 'approve', 1 ) );
	} else {
		$sform -> addElement( new icms_form_elements_Hidden( 'approve', 0 ) );
	}

	$sform -> addElement( $option_tray );

	// Captcha form
	if ( icms::$module -> config['captcha'] == true && $icmsConfigUser['use_captcha'] == true ) {
		$sform -> addElement( new icms_form_elements_Captcha( _SECURITYIMAGE_GETCODE, 'scode' ), true ); 
	}

	$button_tray = new icms_form_elements_Tray( '', '' );
	$button_tray -> addElement( new icms_form_elements_Button( '', 'submit', _SUBMIT, 'submit' ) );
	$button_tray -> addElement( new icms_form_elements_Hidden( 'lid', $lid ) );
	$sform -> addElement( $button_tray );

	$sform -> display();

	iml_noindexnofollow();
	include ICMS_ROOT_PATH . '/footer.php';
	}
} else {
	redirect_header( 'index.php', 2, _MD_IMLINKS_NOPERMISSIONTOPOST );
	exit();
}
?>