<?php
/*
Page:           db.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
This page handles the database update if the user
does NOT have Javascript enabled.	
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
$ip = getenv( 'REMOTE_ADDR' );
$referer  = $_SERVER['HTTP_REFERER'];

if ( $vote_sent > $units ) die( _MD_IMLINKS_INVALIDVOTE ); // kill the script because normal users will never see this.

//connecting to the database to get some information
$query = mysql_query( 'SELECT total_votes, total_value, used_ips FROM ' . $xoopsDB -> prefix( 'imlinks_ratings' ) . ' WHERE id=' . $id_sent ) or die ( ' Error: ' . mysql_error() );
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
( ( is_array( $checkIP ) ) ? array_push( $checkIP, $ip_num ) : $checkIP=array( $ip_num ) );
$insertip = serialize( $checkIP );

//IP check when voting
$voted = mysql_num_rows( mysql_query( "SELECT used_ips FROM " . $xoopsDB -> prefix( 'imlinks_ratings' ) . " WHERE used_ips LIKE '%" . $ip . "%' AND id='" . $id_sent . "' " ) );

//if the user hasn't yet voted, then vote normally...
if( !$voted ) {     
	if (($vote_sent >= 1 && $vote_sent <= $units) && ($ip == $ip_num)) { // keep votes within range
		$update = 'UPDATE ' . $xoopsDB -> prefix( 'imlinks_ratings' ) . ' SET total_votes=' . $added . ', total_value=' . $sum . ', used_ips=' . $insertip . ' WHERE id=' . $id_sent;
		$result = mysql_query( $update );		
	} 
	header( 'Location: ' . $referer ); // go back to the page we came from 
	exit;
} 
//end for the "if(!$voted)"
?>