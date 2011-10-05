<?php
/*
Page:           _drawrating.php
Created:        Aug 2006
Last Mod:       Mar 18 2007
The function that draws the rating bar.
--------------------------------------------------------- 
ryan masuga, masugadesign.com
ryan@masugadesign.com 
Licensed under a Creative Commons Attribution 3.0 License.
http://creativecommons.org/licenses/by/3.0/
See ajaxrating.txt for full credit details.
--------------------------------------------------------- */

function rating_bar( $id, $units='', $cid ) { 

$rating_unitwidth = 30;

//set some variables
$ip = getenv( 'REMOTE_ADDR' );
if ( !$units ) { $units = 10; }
//if ( !$static ) { $static = false; }

// get votes, values, ips for the current rating bar
$query = mysql_query( "SELECT total_votes, total_value, used_ips FROM " . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . " WHERE id='$id' ") or die (" Error: " . mysql_error() );

// insert the id in the DB if it doesn't exist already
// see: http://www.masugadesign.com/the-lab/scripts/unobtrusive-ajax-star-rating-bar/#comment-121
if ( mysql_num_rows( $query ) == 0 ) {
	$sql  = "INSERT INTO " . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . " (`id`, `total_votes`, `total_value`, `used_ips`) VALUES ('$id', '0', '0', '')";
	$result = mysql_query( $sql );
}

$numbers = mysql_fetch_assoc( $query );

if ( $numbers['total_votes'] < 1 ) {
	$count = 0;
} else {
	$count = $numbers['total_votes']; //how many votes total
}
$current_rating = $numbers['total_value']; //total number of rating added together and stored
$tense = ( $count == 1 ) ? _MD_IMLINKS_VOTE : _MD_IMLINKS_VOTESLC ; //plural form votes/vote

// determine whether the user has voted, so we know how to draw the ul/li
$voted = mysql_num_rows( mysql_query( "SELECT used_ips FROM " . icms::$xoopsDB -> prefix( 'imlinks_ratings' ) . " WHERE used_ips LIKE '%" . $ip . "%' AND id='" . $id . "' " ) ); 

// now draw the rating bar
$rating_width = @number_format( $current_rating/$count, 2 )*$rating_unitwidth;
$rating1 = @number_format( $current_rating/$count, 1 );
$rating2 = @number_format( $current_rating/$count, 2 );

$static = ( iml_checkgroups( intval($cid), 'imLinkRatePerms' ) ) ? true : false;

if ( !$static ) {

	$static_rater = array();
	$static_rater[] .= "\n".'<div class="ratingblock">';
	$static_rater[] .= '<div id="unit_long' . $id . '">';
	$static_rater[] .= '<div id="unit_ul' . $id . '" class="unit-rating" style="width:' . $rating_unitwidth*$units . 'px;">';
	$static_rater[] .= '<div class="current-rating" style="width:' . $rating_width . 'px;">' . _MD_IMLINKS_CURRATING . ' ' . $rating2 . '/' . $units . '</div>';
	$static_rater[] .= '</div>';
	$static_rater[] .= '<div class="static">' . _MD_IMLINKS_RATING . ': <strong> ' . $rating1 . '</strong>/' . $units . ' (' . $count . ' ' . $tense.') <br /><em>' . _MD_IMLINKS_RATEDISABLE . '</em></div>';
	$static_rater[] .= '</div>';
	$static_rater[] .= '</div>' . "\n\n";

	return join( "\n", $static_rater );

} else {

	$rater  = '';
	$rater .= '<div class="ratingblock">';

	$rater .= '<div id="unit_long' . $id . '">';
	$rater .= '<div id="unit_ul' . $id . '" class="unit-rating" style="width:' . $rating_unitwidth*$units . 'px;">';
	$rater .= '<div class="current-rating" style="width:' . $rating_width . 'px;">' . _MD_IMLINKS_CURRATING . ' ' . $rating2 . '/' . $units . '</div>';

	for ( $ncount = 1; $ncount <= $units; $ncount++ ) { // loop from 1 to the number of units
		if ( !$voted ) { // if the user hasn't yet voted, draw the voting stars
            $rater .= '<div><a href="db.php?j=' . $ncount . '&amp;q=' . $id . '&amp;t=' . $ip . '&amp;c=' . $units . '" title="' . $ncount . _MD_IMLINKS_OUTOF . $units . '" class="r' . $ncount . '-unit rater" rel="nofollow">' . $ncount . '</a></div>';
        }
	}
	$ncount = 0; // resets the count

	$rater .= '  </div>';
	$rater .= '  <div';
	if ( $voted ) { $rater .= ' class="voted"'; }
	$rater .= '>' . _MD_IMLINKS_RATING . ': <strong> ' . $rating1 . '</strong>/' . $units . ' (' . $count . ' ' . $tense . ')';
	$rater .= '  </div>';
	$rater .= '</div>';
	$rater .= '</div>';
	return $rater;
 }
}
?>