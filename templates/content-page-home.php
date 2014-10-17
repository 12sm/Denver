<section id='slider'>
<?php if (is_front_page()) {
  echo do_shortcode('[wpv-view name="HOME | TOP-SLIDER"]');
}
?>
<div class="wrap container-fluid mobile-top" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
      <img src="/wp-content/themes/denver/assets/img/denver.png" class='mobile-denver'>
      <h1>Denver &</h1>
      <h2>The Mile High</h2>
      <h2>Orchestra</h2>
  </main>
</div>
</section>
<section id='about'>
 <div class="wrap container-fluid full-height" role="document">
    <div class="content row full-height">
      <main class="main full-height <?php echo roots_main_class(); ?>" role="main">
		<div class="row home-about full-height">
			<div class='col-sm-6 full-height'>
				<div class="about-imgs-container">
					<img src="/wp-content/themes/denver/assets/img/trumpet.png" class='about-trumpet'>
					<img src="/wp-content/themes/denver/assets/img/guitar.png" class='about-guitar'>
					<img src="/wp-content/themes/denver/assets/img/denver.png" class='about-denver'>
				</div>
			</div>
      <div class="col-sm-1"></div>
			<div class="col-sm-5">
				<div class="about-wrap">
					<!-- <h1 class='about'>Who are <span class='huge'>We?</span></h1> -->
          <img src="/assets/img/who-are-we.png" />
						<div><?php echo do_shortcode('[about]'); ?></div>
						<a href="/about/" class="btn btn-click italic">Click to Find Out More </a>
				</div>
			</div>
		</div>
	  </main>
  	</div>
</div>
</section>
<section id='news'>
 <div class="wrap container-fluid full-height" role="document">
    <div class="content row full-height">
      <main class="main <?php echo roots_main_class(); ?> full-height" role="main">
		<div class="row home-news full-height">
			<div class="col-md-4 col-sm-6 news-mobile full-height">
				<?php echo do_shortcode('[wpv-view name="HOME | NEWS"]'); ?>
			</div>
			<div class="col-md-8 col-sm-6 home-people full-height">
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
 <div class="wrap container-fluid wrap-music" role="document">
    <div class="content row">
      	<main class="main <?php echo roots_main_class(); ?>" role="main">
			<div class='row music-player'>
				<div class='col-lg-4 col-md-3'>
				</div>
				<div class='col-lg-8 col-md-9 col-sm-6 col-sm-offset-6 circles'>
					<div class="row">
						<div class="col-lg-5 col-lg-offset-3 col-md-5 col-md-offset-3">
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
	 <div class="wrap container-fluid full-height" role="document">
    <div class="content row full-height">
      	<main class="main <?php echo roots_main_class(); ?> full-height" role="main">
			<div class='row tour-home full-height'>
				<div class="col-md-6 col-sm-12 full-height tour-people">
				<img src='/wp-content/themes/denver/assets/img/People.png' class="img-responsive people">
				</div>
				<div class="col-md-6 col-sm-12 tour-dates">
				<h1>Tour</h1>
					<div><?php echo do_shortcode('[wpv-view name="HOME | TOUR"]'); ?></div>
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
<style>
body.home, html {
  margin: 0;
  overflow: hidden;
  -webkit-transition: opacity 400ms;
  -moz-transition: opacity 400ms;
  transition: opacity 400ms;
}

body.home, .onepage-wrapper, html {
  display: block;
  position: static;
  padding: 0;
  width: 100%;
  height: 100%;
}
html.js.canvas.svg{
  margin-top: 0px!important;
}
</style>
