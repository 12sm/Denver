<?php 


// Add Shortcode
function event_date() {
	echo tribe_event_format_date( false, 'D. M j, Y' );
}
add_shortcode( 'eventdate', 'event_date' );


define( 'UPLOADS', ''.'assets' );


?>