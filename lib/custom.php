<?php 

define( 'UPLOADS', ''.'assets' );

add_action ('init','theme_init');
function theme_init()
{
  add_post_type_support('page','excerpt');
}

?>