<?php 

/**
 * Optimize WooCommerce Scripts
 * Remove WooCommerce Generator tag, styles, and scripts from non WooCommerce pages.
 */
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
 
function child_manage_woocommerce_styles() {
  //remove generator meta tag
  remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );
 
  //first check that woo exists to prevent fatal errors
  if ( function_exists( 'is_woocommerce' ) ) {
    //dequeue scripts and styles
    if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() && ! is_shop() && ! is_product_category() && ! is_product() && ! is_account_page() ) {
      wp_dequeue_style( 'woocommerce_frontend_styles' );
      wp_dequeue_style( 'woocommerce_fancybox_styles' );
      wp_dequeue_style( 'woocommerce_chosen_styles' );
      wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
      wp_dequeue_script( 'wc_price_slider' );
      wp_dequeue_script( 'wc-single-product' );
      wp_dequeue_script( 'wc-add-to-cart' );
      wp_dequeue_script( 'wc-cart-fragments' );
      wp_dequeue_script( 'wc-add-to-cart-variation' );
      wp_dequeue_script( 'wc-single-product' );
      wp_dequeue_script( 'wc-chosen' );
      wp_dequeue_script( 'woocommerce' );
      wp_dequeue_script( 'prettyPhoto' );
      wp_dequeue_script( 'prettyPhoto-init' );
      wp_dequeue_script( 'jquery-blockui' );
      wp_dequeue_script( 'jquery-placeholder' );
      wp_dequeue_script( 'fancybox' );
      wp_dequeue_script( 'jqueryui' );
    }
  }
 
}

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


function my_custom_fonts() {
  echo '<style>
    .vc_license-activation-notice {display:none;}
    
  </style>';
}

add_action('admin_head', 'my_custom_fonts');



define( 'UPLOADS', ''.'assets' );



?>