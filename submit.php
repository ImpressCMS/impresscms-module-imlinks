<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: submit.php
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

include ICMS_ROOT_PATH . '/header.php';
include ICMS_ROOT_PATH . '/class/xoopsformloader.php';

$mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
global $immyts, $xoopsModuleConfig, $xoopsCaptcha;

$cid = iml_cleanRequestVars( $_REQUEST, 'cid', 0 );
$lid = iml_cleanRequestVars( $_REQUEST, 'lid', 0 );
$cid = intval($cid);
$lid = intval($lid);

if ( false == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
    redirect_header( 'index.php', 1, _MD_IMLINKS_NOPERMISSIONTOPOST );
    exit();
} 

if ( true == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
    if ( iml_cleanRequestVars( $_REQUEST, 'submit', 0 ) ) {
	
		// Captcha Hack
		if ( @include_once ICMS_ROOT_PATH . '/class/captcha/captcha.php' ) {
			if ( $xoopsModuleConfig['captcha'] == 1 ) {
				$xoopsCaptcha = XoopsCaptcha::instance();
					if ( ! $xoopsCaptcha -> verify( true ) ) {
						redirect_header( 'submit.php', 2, $xoopsCaptcha -> getMessage() );
					}
				}
			}			
		// Captcha Hack
		
        if ( false == iml_checkgroups( $cid, 'imLinkSubPerm' ) ) {
            redirect_header( 'index.php', 1, _MD_IMLINKS_NOPERMISSIONTOPOST );
            exit();
        } 

        $submitter = ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) ? $xoopsUser -> getVar( 'uid' ) : 0;
        $forumid = iml_cleanRequestVars( $_REQUEST, 'forumid', 0 );
        $offline = iml_cleanRequestVars( $_REQUEST, 'offline', 0 );
        $notifypub = iml_cleanRequestVars( $_REQUEST, 'notifypub', 0 );
        $approve = iml_cleanRequestVars( $_REQUEST, 'approve', 0 );
        $url = $immyts -> addslashes( ltrim($_POST['url']) );
        $title = $immyts -> addslashes( ltrim( $_REQUEST['title'] ) );
        $descriptionb = $immyts -> addslashes( ltrim( $_REQUEST['descriptionb'] ) );
        $keywords = $immyts -> addslashes( trim(substr($_POST['keywords'], 0, $xoopsModuleConfig['keywordlength']) ) );
        
        if ($xoopsModuleConfig['usercantag']) {
          $item_tag = $immyts -> addslashes( ltrim( $_REQUEST['item_tag'] ) );
        } else {
          $item_tag = '';
        }
        
        if ($xoopsModuleConfig['useaddress']){
        $googlemap = ( $_POST['googlemap'] != 'http://maps.google.com' ) ? $immyts -> addslashes( $_POST['googlemap'] ) : '';
        $yahoomap = ( $_POST['yahoomap'] != 'http://maps.yahoo.com' ) ? $immyts -> addslashes( $_POST['yahoomap'] ) : '';
        $multimap = ( $_POST["multimap"] != 'http://www.multimap.com' ) ? $immyts -> addslashes( $_POST['multimap'] ) : '';
        $street1 = $immyts -> addslashes( ltrim( $_REQUEST['street1'] ) );
        $street2 = $immyts -> addslashes( ltrim( $_REQUEST['street2'] ) );
        $town = $immyts -> addslashes( ltrim( $_REQUEST['town'] ) );
        $state = $immyts -> addslashes( ltrim( $_REQUEST['state'] ) );
        $zip = $immyts -> addslashes( ltrim( $_REQUEST['zip'] ) );
        $tel = $immyts -> addslashes( ltrim( $_REQUEST['tel'] ) );
        $fax = $immyts -> addslashes( ltrim( $_REQUEST['fax'] ) );
        $voip = $immyts -> addslashes( ltrim( $_REQUEST['voip'] ) );
        $mobile = $immyts -> addslashes( ltrim( $_REQUEST['mobile'] ) );
        $email = emailcnvrt( $immyts -> addslashes( ltrim( $_REQUEST['email'] ) ) );
        $vat = $immyts -> addslashes( ltrim( $_REQUEST['vat'] ) );
		$nobreak = iml_cleanRequestVars( $_REQUEST, 'nobreak', 0 );
        } else {
          $googlemap = $yahoomap = $multimap = $street1 = $street2 = $town = $state = $zip = $tel = $fax = $voip = $mobile = $email = $vat = '';
        }

        $country = $immyts -> addslashes( ltrim( $_REQUEST['country'] ) );

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
            
            $sql = "INSERT INTO " . $xoopsDB -> prefix( 'imlinks_links' ) . "	(lid, cid, title, url, submitter, status, date, hits, rating, votes, comments, forumid, published, expired, offline, description, ipaddress, notifypub, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, nobreak ) ";

            $sql .= " VALUES 	('', $cid, '$title', '$url', '$submitter', '$status', '$date', 0, 0, 0, 0, '$forumid', '$publishdate', 0, '$offline', '$descriptionb', '$ipaddress', '$notifypub', '$country', '$keywords', '$item_tag', '$googlemap', '$yahoomap', '$multimap', '$street1', '$street2', '$town', '$state', '$zip', '$tel', '$fax', '$voip', '$mobile', '$email', '$vat', '$nobreak' )";
            
            if ( !$result = $xoopsDB -> query( $sql ) ) {
                $_error = $xoopsDB -> error() . " : " . $xoopsDB -> errno();
                XoopsErrorHandler_HandleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
            } 
            // $newid = $xoopsDB -> getInsertId();
            $newid = mysql_insert_id();
        
// Add item_tag to Tag-module
            if ( $lid == 0) {
                 $tagupdate = iml_tagupdate($newid, $item_tag);
            } else {
                 $tagupdate = iml_tagupdate($lid, $item_tag);
            }

// Notify of new link (anywhere) and new link in category
            $notification_handler = &xoops_gethandler( 'notification' );

            $tags = array();
            $tags['LINK_NAME'] = $title;
            $tags['LINK_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . intval($cid) . '&amp;lid=' . intval($newid);
            
            $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_cat' ) . " WHERE cid=" . intval($cid);
            $result = $xoopsDB -> query( $sql );
            $row = $xoopsDB -> fetchArray( $result );

            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . intval($cid);
            if ( true == iml_checkgroups( $cid, 'imLinkAutoApp' ) ) {
                $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
                $notification_handler -> triggerEvent( 'category', $cid, 'new_link', $tags );
                redirect_header( 'index.php', 2, _MD_IMLINKS_ISAPPROVED );
            } else {
                $tags['WAITINGFILES_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/newlinks.php';
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
                $sql = "UPDATE " . $xoopsDB -> prefix( 'imlinks_links' ) . " SET cid=$cid, title='$title', url='$url', updated='$updated', offline='$offline', description='$descriptionb', ipaddress='$ipaddress', notifypub='$notifypub', country='$country', keywords='$keywords', item_tag='$item_tag', googlemap='$googlemap', yahoomap='$yahoomap', multimap='$multimap', street1='$street1', street2='$street2', town='$town', state='$state',  zip='$zip', tel='$tel', fax='$fax', voip='$voip', mobile='$mobile', email='$email', vat='$vat', nobreak='$nobreak' WHERE lid=" . intval( $lid );
                if ( !$result = $xoopsDB -> query( $sql ) ) {
                    $_error = $xoopsDB -> error() . " : " . $xoopsDB -> errno();
                    XoopsErrorHandler_HandleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
                } 

                $notification_handler = &xoops_gethandler( 'notification' );
                $tags = array();
                $tags['LINK_NAME'] = $title;
                $tags['LINK_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlelink.php?cid=' . intval( $cid ) . '&amp;lid=' . intval($lid);
                $sql = "SELECT title FROM " . $xoopsDB -> prefix( 'imlinks_cat' ) . " WHERE cid=" . intval($cid);
                $result = $xoopsDB -> query( $sql );
                $row = $xoopsDB -> fetchArray( $result );
                $tags['CATEGORY_NAME'] = $row['title'];
                $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/viewcat.php?cid=' . intval( $lid );

                $notification_handler -> triggerEvent( 'global', 0, 'new_link', $tags );
                $notification_handler -> triggerEvent( 'category', intval($cid), 'new_link', $tags );
                $_message = _MD_IMLINKS_ISAPPROVED;
            } else {
                $modifysubmitter = $xoopsUser -> uid();
                $requestid = $modifysubmitter;
                $requestdate = time();
                $updated = iml_cleanRequestVars( $_REQUEST, 'up_dated', time() );
                $sql = "INSERT INTO " . $xoopsDB -> prefix( 'imlinks_mod' ) . " (requestid, lid, cid, title, url, forumid, description, modifysubmitter, requestdate, country, keywords, item_tag, googlemap, yahoomap, multimap, street1, street2, town, state, zip, tel, fax, voip, mobile, email, vat, nobreak)";
                $sql .= " VALUES ('', $lid, $cid, '$title', '$url', '$forumid', '$descriptionb', '$modifysubmitter', '$requestdate', '$country', '$keywords', '$item_tag', '$googlemap', '$yahoomap', '$multimap', '$street1', '$street2', '$town', '$state', '$zip', '$tel', '$fax', '$voip', '$mobile', '$email', '$vat', '$nobreak')";
                if ( !$result = $xoopsDB -> query( $sql ) ) {
                    $_error = $xoopsDB -> error() . ' : ' . $xoopsDB -> errno();
                    XoopsErrorHandler_HandleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
                } 

                $tags = array();
                $tags['MODIFYREPORTS_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=listModReq';
                $notification_handler = &xoops_gethandler( 'notification' );
                $notification_handler -> triggerEvent( 'global', 0, 'link_modify', $tags );

                $tags['WAITINGFILES_URL'] = ICMS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=listNewlinks';
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
        global $xoopsModuleConfig;

        $approve = iml_cleanRequestVars( $_REQUEST, 'approve', 0 );

//Show disclaimer
        if ( $xoopsModuleConfig['showdisclaimer'] && !isset( $_GET['agree'] ) && $approve == 0 ) {
		$xoopsOption['template_main'] = 'imlinks_disclaimer.html';
	    include ICMS_ROOT_PATH . '/header.php';
		
		$xoopsTpl -> assign( 'image_header', iml_imageheader() );
		$xoopsTpl -> assign( 'disclaimer', $immyts -> displayTarea( $xoopsModuleConfig['disclaimer'], 1, 1, 1, 1, 1 ) );
		$xoopsTpl -> assign( 'cancel_location', ICMS_URL . '/modules/' . $xoopsModule -> getVar('dirname') . '/index.php' );
		$xoopsTpl -> assign( 'link_disclaimer', false );
		if ( !isset( $_REQUEST['lid'] ) ) {
			$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $xoopsModule -> getVar('dirname') . '/submit.php?agree=1' );
		}
		elseif ( isset( $_REQUEST['lid'] ) ) {
			$lid = intval( $_REQUEST['lid'] );
			$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $xoopsModule -> getVar('dirname') . '/submit.php?agree=1&amp;lid='.intval( $lid ) );
		}
	        include ICMS_ROOT_PATH . '/footer.php';
	        exit();
	}

        echo "<br /><div style='text-align: center;'>" . iml_imageheader() . "</div><br />\n";
        echo "<div>" . _MD_IMLINKS_SUB_SNEWMNAMEDESC . "</div>\n<br />\n";

        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_links' ) . ' WHERE lid=' . intval( $lid );
        $link_array = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

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

     	$sform = new XoopsThemeForm( _MD_IMLINKS_SUBMITCATHEAD, "storyform", xoops_getenv( 'PHP_SELF' ) );
        $sform -> setExtra( 'enctype="multipart/form-data"' );

// Title form
        $sform -> addElement( new XoopsFormText( _MD_IMLINKS_FILETITLE, 'title', 70, 255, $title ), true );

// Link url form
        $url_text = new XoopsFormText( '', 'url', 70, 255, $url );
        $url_tray = new XoopsFormElementTray( _MD_IMLINKS_DLURL, '' );
		$url_tray -> SetDescription( '<small>' . _MD_IMLINKS_LINKURLDSC . '</small>' );
        $url_tray -> addElement( $url_text , true ) ;
        $url_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/world.png' onClick=\"window.open(document.storyform.url.value,'','');return(false);\" alt='Check URL' />" ));
        $sform -> addElement( $url_tray );

// Category selection menu
        $mytree = new XoopsTree( $xoopsDB -> prefix( 'imlinks_cat' ), 'cid', 'pid' );
        $submitcats = array();
        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'imlinks_cat' ) . ' ORDER BY title';
        $result = $xoopsDB -> query( $sql );
        while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
            if ( true == iml_checkgroups( $myrow['cid'], 'imLinkSubPerm' ) ) {
                $submitcats[$myrow['cid']] = $myrow['title'];
            }
        }
        ob_start();
			$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
			$sform -> addElement( new XoopsFormLabel( _MD_IMLINKS_CATEGORYC, ob_get_contents() ) );
        ob_end_clean();

// Link description form
    $editor = iml_getWysiwygForm( _MD_IMLINKS_DESCRIPTIONC, 'descriptionb', $descriptionb );
    $sform -> addElement( $editor, false );

// Linebreak option
	$options_tray = new XoopsFormElementTray( _MD_IMLINKS_TEXTOPTIONS, '<br />' );
    $breaks_checkbox = new XoopsFormCheckBox( '', 'nobreak', $nobreak );
    $breaks_checkbox -> addOption( 1, _MD_IMLINKS_DISABLEBREAK );
    $options_tray -> addElement( $breaks_checkbox );
    $sform -> addElement( $options_tray );	

// Keywords form
    $keywords = new XoopsFormTextArea( _MD_IMLINKS_KEYWORDS, 'keywords', $keywords, 7, 60 );
    $keywords -> setDescription( "<small>" . _MD_IMLINKS_KEYWORDS_NOTE . "</small>" );
    $sform -> addElement( $keywords, false );
        
// Insert tags if Tag-module is installed and if user is allowed
if ( $xoopsModuleConfig['usercantag'] ) {
    if ( iml_tag_module_included() ) {
       include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
       $text_tags = new XoopsFormTag('item_tag', 70, 255, $link_array['item_tag'], 0);
       $sform -> addElement( $text_tags );
    } else {
       $sform -> addElement( new XoopsFormHidden( 'item_tag', $link_array['item_tag'] ) ) ;
    }
}
if ( $xoopsModuleConfig['useaddress'] ) {
    $sform -> insertBreak( _MD_IMLINKS_LINK_CREATEADDRESS, 'even' );
// Google Maps
    $googlemap_text = new XoopsFormText( '', 'googlemap', 70, 1024, $googlemap );
    $googlemap_tray = new XoopsFormElementTray( _MD_IMLINKS_LINK_GOOGLEMAP, '' );
	$googlemap_tray -> SetDescription( sprintf( '<small>' . _MD_IMLINKS_MAPDSC . '</small>', '<small><em>http://maps.google.com</em></small>' ) );
    $googlemap_tray -> addElement( $googlemap_text , false ) ;
    $googlemap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/google_map.png' onClick=\"window.open(document.storyform.googlemap.value,'','');return(false);\" alt='" . _MD_IMLINKS_LINK_CHECKMAP . "' />" ) );
    $sform -> addElement( $googlemap_tray );

// Yahoo Maps
    $yahoomap_text = new XoopsFormText( '', 'yahoomap', 70, 1024, $yahoomap );
    $yahoomap_tray = new XoopsFormElementTray( _MD_IMLINKS_LINK_YAHOOMAP, '' );
	$yahoomap_tray -> SetDescription( sprintf( '<small>' . _MD_IMLINKS_MAPDSC . '</small>', '<small><em>http://maps.yahoo.com</em></small>' ) );
    $yahoomap_tray -> addElement( $yahoomap_text , false ) ;
    $yahoomap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/yahoo_map.png' onClick=\"window.open(document.storyform.yahoomap.value,'','');return(false);\" alt='" . _MD_IMLINKS_LINK_CHECKMAP . "' />" ) );
    $sform -> addElement( $yahoomap_tray );

// Multimap
    $multimap_text = new XoopsFormText( '', 'multimap', 70, 1024, $multimap );
    $multimap_tray = new XoopsFormElementTray( _MD_IMLINKS_LINK_MULTIMAP, '' );
	$multimap_tray -> SetDescription( sprintf( '<small>' . _MD_IMLINKS_MAPDSC . '</small>', '<small><em>http://www.multimap.com</em></small>' ) );
    $multimap_tray -> addElement( $multimap_text , false ) ;
    $multimap_tray -> addElement( new XoopsFormLabel( "&nbsp;<img src='" . ICMS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/multimap.png' onClick=\"window.open(document.storyform.multimap.value,'','');return(false);\" alt='" . _MD_IMLINKS_LINK_CHECKMAP . "' />" ));
    $sform -> addElement( $multimap_tray );

// Address forms
    $street1 = new XoopsFormText( _MD_IMLINKS_STREET1, 'street1', 70, 255, $street1 );
    $sform -> addElement( $street1, false );
    $street2 = new XoopsFormText( _MD_IMLINKS_STREET2, 'street2', 70, 255, $street2 );
	$street2 -> SetDescription( '<small>' . _MD_IMLINKS_STREETTWODSC . '</small>' );
    $sform -> addElement( $street2, false );
    $town = new XoopsFormText( _MD_IMLINKS_TOWN, 'town', 70, 255, $town );
    $sform -> addElement( $town, false );
    $state = new XoopsFormText( _MD_IMLINKS_STATE, 'state', 70, 255, $state );
	$state -> SetDescription( '<small>' . _MD_IMLINKS_STATEDSC . '</small>' );
    $sform -> addElement( $state, false );
    $zip = new XoopsFormText( _MD_IMLINKS_ZIPCODE, 'zip', 25, 25, $zip );
    $sform -> addElement( $zip, false );
    $tel = new XoopsFormText( _MD_IMLINKS_TELEPHONE, 'tel', 25, 25, $tel );
    $sform -> addElement( $tel, false );
    $mobile = new XoopsFormText( _MD_IMLINKS_MOBILE, 'mobile', 25, 25, $mobile );
    $sform -> addElement( $mobile, false );
    $voip = new XoopsFormText( _MD_IMLINKS_VOIP, 'voip', 25, 25, $voip );
    $sform -> addElement( $voip, false );
    $fax = new XoopsFormText( _MD_IMLINKS_FAX, 'fax', 25, 25, $fax );
    $sform -> addElement( $fax, false );
    $email = new XoopsFormText( _MD_IMLINKS_EMAIL, 'email', 25, 25, $email );
	$email -> SetDescription( '<small>' . _MD_IMLINKS_EMAILDSC . '</small>' );
    $sform -> addElement( $email, false );
    $vat = new XoopsFormText( _MD_IMLINKS_VAT, 'vat', 25, 25, $vat );
    $vat -> setDescription( '<small>' . _MD_IMLINKS_VATWIKI . '</small>' );
    $sform -> addElement( $vat, false );
//  $sform -> addElement( new XoopsFormHidden( 'vat', $link_array['vat'] ) ); /* If you don't want to use the VAT form,  */
                                                                    /* use this line and comment-out the 3 lines above  */
}

// Country form
    $countryform = new XoopsFormSelectCountry( _MD_IMLINKS_COUNTRY, 'country', $country );
	$countryform -> SetDescription( '<small>' . _MD_IMLINKS_COUNTRYDSC . '</small>' );
	$sform -> addElement( $countryform, false );

    $option_tray = new XoopsFormElementTray( _MD_IMLINKS_OPTIONS, '<br />' );
        if ( !$approve ) {
            $notify_checkbox = new XoopsFormCheckBox( '', 'notifypub' );
            $notify_checkbox -> addOption( 1, _MD_IMLINKS_NOTIFYAPPROVE );
            $option_tray -> addElement( $notify_checkbox );
        } else {
            $sform -> addElement( new XoopsFormHidden( 'notifypub', 0 ) );
        } 
		
        if ( true == iml_checkgroups( $cid, 'imLinkAppPerm' ) && $lid > 0 ) {
            $approve_checkbox = new XoopsFormCheckBox( '', 'approve', $approve );
            $approve_checkbox -> addOption( 1, _MD_IMLINKS_APPROVE );
            $option_tray -> addElement( $approve_checkbox );
        } else if ( true == iml_checkgroups( $cid, 'imLinkAutoApp' ) ) {
            $sform -> addElement( new XoopsFormHidden( 'approve', 1 ) );
        } else {
            $sform -> addElement( new XoopsFormHidden( 'approve', 0 ) );
        } 
		
        $sform -> addElement( $option_tray );
		
		// Captcha Hack
		if ( $xoopsModuleConfig['captcha'] == 1 ) {
			$sform -> addElement( new XoopsFormCaptcha() );
		}
		// Captcha Hack
		
        $button_tray = new XoopsFormElementTray( '', '' );
        $button_tray -> addElement( new XoopsFormButton( '', 'submit', _SUBMIT, 'submit' ) );
        $button_tray -> addElement( new XoopsFormHidden( 'lid', $lid ) );
        $sform -> addElement( $button_tray );
        $sform -> display();
        include ICMS_ROOT_PATH . '/footer.php';
    } 
} else {
    redirect_header( 'index.php', 2, _MD_IMLINKS_NOPERMISSIONTOPOST );
    exit();
} 

?>