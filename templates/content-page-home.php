<section id='slider'>
<?php if (is_front_page()) {
  echo do_shortcode('[wpv-view name="HOME | TOP-SLIDER"]');
}
?>
<header class="banner navbar navbar-default navbar-static-top" role="banner" data-spy="affix" data-offset-top="865">
  <div class="container">
    <div class="col">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
    </div>
  </div>
</header>
</section>
<section id='about'>
 <div class="wrap container-fluid" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
		<div class="row home-about">
			<div class='col-sm-8'>
				<div class="about-imgs-container">
					<img src="/wp-content/themes/denver/assets/img/trumpet.png" class='about-trumpet'>
					<img src="/wp-content/themes/denver/assets/img/guitar.png" class='about-guitar'>
					<img src="/wp-content/themes/denver/assets/img/denver.png" class='about-denver'>
				</div>
			</div>
			<div class="col-sm-4">
			<h1>Who are We?</h1>
				<?php echo do_shortcode('[about]'); ?>
				<a href="/about/" class="btn btn-about">Click to Find Out More </a>
			</div>
		</div>
	  </main>
  	</div>
</div>
</section>
<section id='news'>
 <div class="wrap container-fluid" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
		<div class="row home-news">
			<div class="col-sm-4">
				<?php echo do_shortcode('[wpv-view name="HOME | NEWS"]'); ?>
			</div>
			<div class="col-sm-8 home-people">
				<img src="/wp-content/themes/denver/assets/img/mr-blue.png" class='mr-blue'>
				<img src="/wp-content/themes/denver/assets/img/mr-green.png" class='mr-green'>
				<img src="/wp-content/themes/denver/assets/img/mr-grey.png" class='mr-grey'>
				<img src="/wp-content/themes/denver/assets/img/mr-red.png" class='mr-red'>
				<img src="/wp-content/themes/denver/assets/img/mr-stripe.png" class='mr-stripe'>
			</div>
		</div>
	  </main>
	</div>
</div>
</section>
<section id='music'>
 <div class="wrap container-fluid" role="document">
    <div class="content row">
      	<main class="main <?php echo roots_main_class(); ?>" role="main">
			<div class='row music-player'>
				<div class='col-sm-4'>
				</div>
				<div class='col-sm-8 circles'>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<?php echo do_shortcode('[wpv-view name="HOME | MUSIC PLAYER | ALBUMS"]');  ?>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
</div>
</section>
<section id='tour'>
	 <div class="wrap container-fluid" role="document">
    <div class="content row">
      	<main class="main <?php echo roots_main_class(); ?>" role="main">
			<div class='row tour-home'>
				<div class="col-sm-8">
				<img src='/wp-content/themes/denver/assets/img/People.png' class="img-responsive people">
				</div>
				<div class="col-sm-3">
				<h1> Tour</h1>
					<?php echo do_shortcode('[wpv-view name="HOME | TOUR EMBED"]'); ?>
				</div>
			</div>
		</main>
	</div>
</div>
</section>
<section id='store'>
 <div class="wrap container-fluid" role="document">
    <div class="content row">
      	<main class="main <?php echo roots_main_class(); ?>" role="main">
			<div class="row">
				<?php echo do_shortcode('[wpv-view name="HOME | STORE"]'); ?>
			</div>
		</main>
	</div>
</div>
</section>
