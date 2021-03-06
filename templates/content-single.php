<?php while (have_posts()) : the_post(); ?>
  <div class="row col-posts">
  	<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
		  <article <?php post_class(); ?>>
				<div class="entry-content">
				  <?php the_content(); ?>
				  <?php echo get_the_post_thumbnail( 'full' );  ?>
				</div>
			</article>
			</div>
		</div>
			<footer>
			  <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
			</footer>
      <div  class="col-posts">
			<?php comments_template('/templates/comments.php'); ?>
      </div>
		  </article>
		</div>
	</div>
				
<?php endwhile; ?>
