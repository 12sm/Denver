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
return substr($eventtime, 5, 5 );
}
add_shortcode( 'eventdate', 'event_date' );

// Add Shortcode
function event_state( $atts ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'id' => 'null',
    ), $atts )
  );

  // Code
tribe_get_stateprovine($id);
}
add_shortcode( 'eventstate', 'event_state' );


define( 'UPLOADS', ''.'assets' );


?>