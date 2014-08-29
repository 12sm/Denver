<?php while (have_posts()) : the_post(); ?>
  <div class="row col">
  	<div class="col-sm-12 col-xs-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2"
		  <article <?php post_class(); ?>>
			<div class="entry-content">
			  <?php the_content(); ?>
			  <?php echo get_the_post_thumbnail( 'large' );  ?> 
			</div>
			<footer>
			  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
			</footer>
			<?php comments_template('/templates/comments.php'); ?>
		  </article>
		</div>
	</div>
<?php endwhile; ?>
