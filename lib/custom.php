<?php 


// Add Shortcode
function event_date( $atts ) {

	// Attributes
	extract( shortcode_atts(
		array(
			'eventtime' => '2014-12-12',
		), $atts )
	);

	// Code
return substr($eventtime, 6, 5 );
}
add_shortcode( 'eventdate', 'event_date' );


define( 'UPLOADS', ''.'assets' );


?>