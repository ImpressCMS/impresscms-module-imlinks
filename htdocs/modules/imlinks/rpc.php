<?php
/*
Page:           rpc.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
This page handles the 'AJAX' type response if the user
has Javascript enabled.
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See ajaxrating.txt for full credit details.
--------------------------------------------------------- */

include 'header.php';

//getting the values
$vote_sent = preg_replace( "/[^0-9]/", "", $_REQUEST['j'] );
$id_sent = preg_replace( "/[^0-9a-zA-Z]/", "", $_REQUEST['q'] );
$ip_num = preg_replace( "/[^0-9\.]/", "", $_REQUEST['t'] );
$units = preg_replace( "/[^0-9]/", "", $_REQUEST['c'] );
$ip = getenv( "REMOTE_ADDR" );
$rating_unitwidth = 30;

if ( $vote_sent > $units ) die( _MD_IMLINKS_INVALIDVOTE ); // kill the script because normal users will never see this.

//connecting to the database to get some information
$query = mysql_query( "SELECT total_votes, total_value, used_ips FROM " . $xoopsDB -> prefix( 'imlinks_ratings' ) . " WHERE id='$id_sent' ")or die( " Error: " . mysql_error() );
$numbers = mysql_fetch_assoc( $query );

$checkIP = unserialize( $numbers['used_ips'] );
$count = $numbers['total_votes']; //how many votes total
$current_rating = $numbers['total_value']; //total number of rating added together and stored
$sum = $vote_sent+$current_rating; // add together the current vote value and the total vote value
$tense = ( $count==1 ) ? _MD_IMLINKS_VOTE : strtolower( _MD_IMLINKS_VOTES ); //plural form votes/vote

// checking to see if the first vote has been tallied
// or increment the current number of votes
( $sum==0 ? $added=0 : $added=$count+1 );

// if it is an array i.e. already has entries the push in another value
( ( is_array( $checkIP ) ) ? array_push( $checkIP, $ip_num ) : $checkIP = array ( $ip_num ));
$insertip = serialize( $checkIP );

//IP check when voting
$voted=mysql_num_rows(mysql_query("SELECT used_ips FROM " . $xoopsDB -> prefix( 'imlinks_ratings' ) . " WHERE used_ips LIKE '%".$ip."%' AND id='".$id_sent."' "));
if(!$voted) {     //if the user hasn't yet voted, then vote normally...

	if (($vote_sent >= 1 && $vote_sent <= $units) && ($ip == $ip_num)) { // keep votes within range, make sure IP matches - no monkey business!
		$update = "UPDATE " . $xoopsDB -> prefix( 'imlinks_ratings' ) . " SET total_votes='".$added."', total_value='".$sum."', used_ips='".$insertip."' WHERE id='$id_sent'";
		$result = mysql_query($update);
		
		$average = $sum/$added;
		$update2 = "UPDATE " . $xoopsDB -> prefix( 'imlinks_links' ) . " SET votes='".$added."', rating='".$average."' WHERE lid='$id_sent'";
		$result = mysql_query($update2);
	} 
} //end for the "if(!$voted)"
// these are new queries to get the new values!
$newtotals = mysql_query("SELECT total_votes, total_value, used_ips FROM " . $xoopsDB -> prefix( 'imlinks_ratings' ) . " WHERE id='$id_sent' ")or die(" Error: ".mysql_error());
$numbers = mysql_fetch_assoc($newtotals);
$count = $numbers['total_votes'];//how many votes total
$current_rating = $numbers['total_value'];//total number of rating added together and stored
$tense = ($count==1) ? strtolower( _MD_IMLINKS_VOTE ) : _MD_IMLINKS_VOTES; //plural form votes/vote

// $new_back is what gets 'drawn' on your page after a successful 'AJAX/Javascript' vote

$new_back = array();

$new_back[] .= '<div class="unit-rating" style="width:'.$units*$rating_unitwidth.'px;">';
$new_back[] .= '<div class="current-rating" style="width:'.@number_format($current_rating/$count,2)*$rating_unitwidth.'px;">' . _MD_IMLINKS_CURRATING . '</div>';
$new_back[] .= '<div class="r1-unit">1</div>';
$new_back[] .= '<div class="r2-unit">2</div>';
$new_back[] .= '<div class="r3-unit">3</div>';
$new_back[] .= '<div class="r4-unit">4</div>';
$new_back[] .= '<div class="r5-unit">5</div>';
$new_back[] .= '<div class="r6-unit">6</div>';
$new_back[] .= '<div class="r7-unit">7</div>';
$new_back[] .= '<div class="r8-unit">8</div>';
$new_back[] .= '<div class="r9-unit">9</div>';
$new_back[] .= '<div class="r10-unit">10</div>';
$new_back[] .= '</div>';
$new_back[] .= '<div class="voted">'._MD_IMLINKS_RATING.' <strong>'.@number_format($sum/$added,1).'</strong>/'.$units.' ('.$count.' '.$tense.')</div>';
$new_back[] .= '<div class="thanks">' . _MD_IMLINKS_THANKYOU . '</div>';

$allnewback = join("\n", $new_back);

// ========================

//name of the div id to be updated | the html that needs to be changed
$output = "unit_long$id_sent|$allnewback";
echo $output;
?>