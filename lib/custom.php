<?php 

function posts_per_pagesize( $query ) {

    if ( is_post_type_archive( 'videos' ) ) {
        // Display 50 posts for a custom post type called 'movie'
        $query->set( 'posts_per_page', 9 );
        return;
    }
}
add_action( 'pre_get_posts', 'posts_per_pagesize', 1 );


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
return tribe_get_stateprovince($id);
}
add_shortcode( 'eventstate', 'event_state' );


//Child tax
function show_child_cat_func( $atts ) {
    extract( shortcode_atts( array(
        'taxonomy' => ''
    ), $atts ) );
   
    echo '<ul>'.wp_list_categories('taxonomy='.$taxonomy.'&depth=2').'</ul>';
      
}
add_shortcode( 'show_child_cat', 'show_child_cat_func' );

define( 'UPLOADS', ''.'assets' );


?>