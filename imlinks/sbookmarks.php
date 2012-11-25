<?php
/**
* imLinks - a multicategory links management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: sbookmarks.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links
* @since		1.03b and 1.03c
* @author		McDonald
* ----------------------------------------------------------------------------------------------------------
* 				imLinks
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

function iml_sbmarks( $lid, $title ) {

	$sbmark_title = $title;
	$sbmark_link  = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlelink.php?lid=' . intval( $lid );

	//Definitions for social bookmarks

	//Backflip
	$sbmarks['blackflip'] = '<a href="http://www.backflip.com/add_page_pop.ihtml?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/backflip.png" align="middle" title="'._MD_IMLINKS_ADDTO.'BackFlip" alt="" /></a>';

	//Bibsonomy
	$sbmark['bibsonomy'] = '<a href="http://www.bibsonomy.org/ShowBookmarkEntry?c=b&jump=yes&url=' . $sbmark_link . '&description=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/bibsonomy.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Bibsonomy alt="" /></a>';

	//BlinkList
	$sbmarks['blinklist'] = '<a href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&Quick=true&Url=' . $sbmark_link . '&Title=' . $sbmark_title . '&Pop=yes" target="_blank"><img border="0" src="images/sbookmarks/blinklist.png" align="middle" title="'._MD_IMLINKS_ADDTO.'BlinkList" alt="" /></a>';

	//Blogmark
	$sbmark['blogmark'] = '<a href="http://blogmarks.net/my/new.php?title=' . $sbmark_title . '&url=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/blogmarks.png" align="middle" title="'._MD_IMLINKS_ADDTO.'BlogMarks" alt="" / /></a>';

	//CiteUlike
	$sbmark['citeulike'] = '<a href="http://www.citeulike.org/posturl?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/citeulike.png" align="middle" title="'._MD_IMLINKS_ADDTO.'CiteUlike" alt="" / /></a>';

	//Connotea
	$sbmarks['connotea'] = '<a href="http://www.connotea.org/add?continue=return&uri=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/connotea.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Connotea" alt="" / /></a>';

	//del.icio.us
	$sbmarks['delicio'] = '<a href="http://del.icio.us/post?v=4&noui&jump=close&url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/del.png" align="middle" title="'._MD_IMLINKS_ADDTO.'del.icio.us" alt="" / /></a>';

	//Digg
	$sbmarks['digg'] = '<a href="http://digg.com/submit?phase=2&url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/digg.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Digg" alt="" /></a>';

	//Diigo
	$sbmarks['diigo'] = '<a href="http://www.diigo.com/post?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/diigo.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Diigo" alt="" /></a>';

	//DZone
	$sbmarks['dzone'] = '<a href="http://www.dzone.com/links/add.html?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/dzone.png" align="middle" title="'._MD_IMLINKS_ADDTO.'DZone" alt="" /></a>';

	//Earthlink
	$sbmarks['earthlink'] = '<a href="http://myfavorites.earthlink.net/my/add_favorite?v=1&url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/earthlink.png" align="middle" title="'._MD_IMLINKS_ADDTO.'EarthLink MyFavorites" alt="" /></a>';

	//EatMyHamster
	$sbmarks['eatmyhamster'] = '<a href="http://www.eatmyhamster.com/post?u=' . $sbmark_link . '&h=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/eatmyhamster.png" align="middle" title="'._MD_IMLINKS_ADDTO.'EatMyHamster" alt="" /></a>';

	//FaceBook
	$sbmarks['facebook'] ='<a href="http://www.facebook.com/sharer.php?u=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"> <img border="0" src="images/sbookmarks/facebook.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Facebook" alt="" /></a>';

	//Fantacular
	$sbmarks['fantacular'] = '<a href="http://fantacular.com/add.asp?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/fantacular.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Fantacular" alt="" /></a>';

	//Fark
	$sbmarks['fark'] = '<a href="http://cgi.fark.com/cgi/fark/edit.pl?new_url=' . $sbmark_link . '&new_comment=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/fark.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Fark" alt="" /></a>';

	//FeedMarker
	$sbmarks['feedmarker'] = '<a href="http://www.feedmarker.com/admin.php?do=bookmarklet_mark&url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/feedmarker.png" align="middle" title="'._MD_IMLINKS_ADDTO.'FeedMarker" alt="" /></a>';

	//FeedMeLinks
	$sbmarks['feedmelinks'] = '<a href="http://feedmelinks.com/categorize?from=toolbar&op=submit&name=' . $sbmark_title . '&url=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/feedmelinks.png" align="middle" title="'._MD_IMLINKS_ADDTO.'FeedMeLinks" alt="" /></a>';

	//Furl
	$sbmarks['furl'] = '<a href="http://www.furl.net/storeIt.jsp?t=' . $sbmark_title . '&u=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/furl.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Furl" alt="" /></a>';

	//Google
	$sbmarks['google'] = '<a href="http://www.google.com/bookmarks/mark?op=edit&output=popup&bkmk=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/google.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Google" alt="" /></a>';

	//Gravee
	$sbmarks['gravee'] = '<a href="http://www.gravee.com/account/bookmarkpop?u=' . $sbmark_link . '&t=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/gravee.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Gravee" alt="" /></a>';

	//igooi
	$sbmarks['igooi'] = '<a href="http://www.igooi.com/addnewitem.aspx?self=1&noui=yes&jump=close&url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/igooi.png" align="middle" title="'._MD_IMLINKS_ADDTO.'igooi" alt="" /></a>';

	//iTalkNews
	$sbmarks['italknews'] = '<a href="http://italknews.com/member/write_link.php?content=' . $sbmark_link . '&headline=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/italknews.png" align="middle" title="'._MD_IMLINKS_ADDTO.'iTalkNews" alt="" /></a>';

	//Jookster
	$sbmarks['jookster'] = '<a href="http://www.jookster.com/JookThis.aspx?url=' . $sbmark_link . '"' . 'target="_blank"><img border="0" src="images/sbookmarks/jookster.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Jookster" alt="" /></a>';

	//Kinja
	$sbmarks['kinja'] = '<a href="http://kinja.com/id.knj?url=' . $sbmark_link . '"' . 'target="_blank"><img border="0" src="images/sbookmarks/kinja.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Kinja" alt="" /></a>';

	//Linkagogo
	$sbmarks['linkagogo'] = '<a href="http://www.linkagogo.com/go/AddNoPopup?title=' . $sbmark_title . '&url=' . $sbmark_link . '"' . 'target="_blank"><img border="0" src="images/sbookmarks/linkagogo.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Linkagogo" alt="" /></a>';

	//LinkRoll
	$sbmarks['linkroll'] = '<a href="http://linkroll.com/insert.php?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/linkroll.png" align="middle" title="'._MD_IMLINKS_ADDTO.'LinkRoll" alt="" /></a>';

	//linuxquestions.org
	$sbmarks['linuxquestions'] = '<a href="http://bookmarks.linuxquestions.org/linux/post?uri=' . $sbmark_link . '&title=' . $sbmark_title . '&when_done=go_back"' . 'target="_blank"><img border="0" src="images/sbookmarks/linuxquestions.png" align="middle" title="'._MD_IMLINKS_ADDTO.'linuxquestions.org" alt="" /></a>';

	//LookMarks
	$sbmarks['lookmarks'] = '<a href="http://www.lookmarks.com/AddLinkFrame.aspx?Url=' . $sbmark_link . '&Title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/lookmarks.png" align="middle" title="'._MD_IMLINKS_ADDTO.'LookMarks" alt="" /></a>';

	//Lycos
	$sbmarks['lycos'] = '<a href="http://iq.lycos.co.uk/lili/my/add?url=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/lycos.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Lycos" alt="" /></a>';

	//Windows Live
	$sbmarks['live'] = '<a href="https://favorites.live.com/quickadd.aspx?marklet=1&mkt=en-us&title=' . $sbmark_title . '&url=' . $sbmark_link . '&top=1' . '"' . 'target="_blank"><img border="0" src="images/sbookmarks/windows_live.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Windows Live" alt="" /></a>';

	//Magnolia
	$sbmarks['magnolia'] = '<a href="http://ma.gnolia.com/bookmarklet/add?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/magnolia.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Ma.gnolia" alt="" /></a>';

	//Markabboo
	$sbmarks['markabboo'] = '<a href="http://www.markaboo.com/resources/new?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/markabboo.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Markabboo" alt="" /></a>';

	//Netscape
	$sbmarks['netscape'] = '<a href="http://www.netscape.com/submit/?U=' . $sbmark_link . '&T=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/netscape.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Netscape" alt="" /></a>';

	//Netvouz
	$sbmarks['netvouz'] = '<a href="http://www.netvouz.com/action/submitBookmark?url=' . $sbmark_link . '&title=' . $sbmark_title . '&popup=no"' . ' target="_blank"><img border="0" src="images/sbookmarks/netvouz.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Netvouz" alt="" /></a>';

	//Newsvine
	$sbmarks['newsvine'] = '<a href="http://www.newsvine.com/_tools/seed&save?u=' . $sbmark_link . '&h=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/newsvine.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Newsvine" alt="" /></a>';

	//Ning
	$sbmarks['ning'] = '<a href="http://bookmarks.ning.com/addItem.php?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/ning.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Ning" alt="" /></a>';

	//NowPublic
	$sbmarks['nowpublic'] = '<a href="http://view.nowpublic.com/?src=' . $sbmark_link . '&t=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/nowpublic.png" align="middle" title="'._MD_IMLINKS_ADDTO.'NowPublic" alt="" /></a>';

	//RawSugar
	$sbmarks['rawsugar'] = '<a href="http://www.rawsugar.com/pages/tagger.faces?turl=' . $sbmark_link . '&tttl=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/rawsugar.png" align="middle" title="'._MD_IMLINKS_ADDTO.'RawSugar" alt="" /></a>';

	//Reddit
	$sbmarks['reddit'] = '<a href="http://reddit.com/submit?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/reddit.png" align="middle" title="'._MD_IMLINKS_ADDTO.'reddit" alt="" /></a>';

	//Riffs
	$sbmarks['riffs'] = '<a href="http://www.riffs.com/item.cgi?section=init_url&url=' . $sbmark_link . '&name=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/riffs.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Riffs" alt="" /></a>';

	//Rojo
	$sbmarks['rojo'] = '<a href="http://www.rojo.com/submit/?title=' . $sbmark_title . '&url=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/rojo.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Rojo" alt="" /></a>';

	//Shadows
	$sbmarks['shadow'] = '<a href="http://www.shadows.com/features/tcr.htm?title=' . $sbmark_title . '&url=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/shadows.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Shadows" alt="" /></a>';

	//Squidoo
	$sbmarks['squidoo'] = '<a href="http://www.squidoo.com/lensmaster/bookmark?' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/squidoo.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Squidoo" alt="" /></a>';

	//StumbleUpon
	$sbmarks['stumble'] = '<a href="http://www.stumbleupon.com/submit?url=' . $sbmark_link . '&title=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/stumbleupon.png" align="middle" title="'._MD_IMLINKS_ADDTO.'StumbleUpon" alt="" /></a>';

	//tagtooga
	$sbmarks['tagtooga'] = '<a href="http://www.tagtooga.com/tapp/db.exe?c=jsEntryForm&b=fx&title=' . $sbmark_title . '&url=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/tagtooga.png" align="middle" title="'._MD_IMLINKS_ADDTO.'tagtooga" alt="" /></a>';

	//Technorati
	$sbmarks['techno'] = '<a="http://www.technorati.com/faves?add=' . $sbmark_link . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/technorati.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Technorati" alt="" /></a>';

	//Wink
	$sbmarks['wink'] = '<a href="http://www.wink.com/_/tag?url=' . $sbmark_link . '&doctitle=' . $sbmark_title . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/wink.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Wink" alt="" /></a>';

	// Yahoo
	$sbmarks['yahoo'] = '<a href="http://myweb2.search.yahoo.com/myresults/bookmarklet?t=' . $sbmark_title . '&u=' . $sbmark_link . '"' . ' target="_blank"><img border="0" src="images/sbookmarks/yahoo.png" align="middle" title="'._MD_IMLINKS_ADDTO.'Yahoo MyWeb" alt="" /></a>';

	//Information
	$sbmarks['info'] = '<a href="http://en.wikipedia.org/wiki/Social_bookmarking" target="_blank"><img border="0" src="images/sbookmarks/what.png" align="middle" title="'._MD_IMLINKS_INFORMATION.'" alt="" /></a>';

	// Make list of selected social bookmarks
	// Comment out thosr social bookmarks which should not be visible

	$sbmarks['sbmarks'] =	//$sbmarks['blackflip'] . ' ' .
							//$sbmark['bibsonomy'] . ' ' .
							$sbmarks['blinklist'] . ' ' .
							//$sbmark['blogmark'] . ' ' .
							//$sbmark['citeulike'] . ' ' .
							//$sbmarks['connotea'] . ' ' .
							$sbmarks['delicio'] . ' ' .
							$sbmarks['digg'] . ' ' .
							//$sbmarks['diigo'] . ' ' .
							//$sbmarks['dzone'] . ' ' .
							//$sbmarks['earthlink'] . ' ' .
							//$sbmarks['eatmyhamster'] . ' ' .
							$sbmarks['facebook'] . ' ' .
							//$sbmarks['fantacular'] . ' ' .
							//$sbmarks['fark'] . ' ' .
							//$sbmarks['feedmarker'] . ' ' .
							//$sbmarks['feedmelinks'] . ' ' .
							$sbmarks['furl'] . ' ' .
							$sbmarks['google'] . ' ' .
							//$sbmarks['gravee'] . ' ' .
							//$sbmarks['igooi'] . ' ' .
							//$sbmarks['italknews'] . ' ' .
							//$sbmarks['jookster'] . ' ' .
							//$sbmarks['kinja'] . ' ' .
							//$sbmarks['linkagogo'] . ' ' .
							//$sbmarks['linkroll'] . ' ' .
							//$sbmarks['linuxquestions'] . ' ' .
							//$sbmarks['live'] . ' ' .         <==== Don't use doesn't work properly
							//$sbmarks['lookmarks'] . ' ' .
							//$sbmarks['lycos'] . ' ' .
							//$sbmarks['magnolia'] . ' ' .
							//$sbmarks['markabboo'] . ' ' .
							//$sbmarks['netscape'] . ' ' .
							//$sbmarks['netvouz'] . ' ' .
							//$sbmarks['newsvine'] . ' ' .
							//$sbmarks['ning'] . ' ' .
							//$sbmarks['nowpublic'] . ' ' .
							//$sbmarks['rawsugar'] . ' ' .
							$sbmarks['reddit'] . ' ' .
							//$sbmarks['riffs'] . ' ' .
							//$sbmarks['rojo'] . ' ' .
							//$sbmarks['shadow'] . ' ' .
							//$sbmarks['squidoo'] . ' ' .
							$sbmarks['stumble'] . ' ' .
							//$sbmarks['tagtooga'] . ' ' .
							//$sbmarks['techno'] . ' ' .
							$sbmarks['wink'] . ' ' .
							$sbmarks['yahoo'] . ' ' .
							$sbmarks['info'];

	return $sbmarks['sbmarks'];
}
?>