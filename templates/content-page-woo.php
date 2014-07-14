<?php while (have_posts()) : the_post(); ?>
  <?php woocommerce_content(); ?>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>