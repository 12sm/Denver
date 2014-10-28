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


<<<<<<< HEAD
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    .vc_license-activation-notice {display:none;}
    
  </style>';
}


=======
//Child tax
function show_child_cat_func( $atts ) {
    extract( shortcode_atts( array(
        'taxonomy' => ''
    ), $atts ) );
   
$args=array(
 
  'orderby' => 'id',
 
  'order' => 'ASC',
 
  'taxonomy' => $taxonomy,
 
  'hide_empty' => 0,
 
  );
 
$categories=get_categories($args);
 
echo '<ul>';
 
    foreach($categories as $category) { 
 
        if($category->parent!=0)
 
        {
 
        echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . $category->name. '" ' . '>' . $category->name.'</a> </li> ';
 
        }
 
    }
 
echo '</ul>';
      
}
add_shortcode( 'show_child_cat', 'show_child_cat_func' );
>>>>>>> FETCH_HEAD

define( 'UPLOADS', ''.'assets' );



?>