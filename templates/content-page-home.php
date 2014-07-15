<section id='about'>
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
</section>
<section id='news'>
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
</section>
<section id='music'>
<div class='row music-player'>
	<div class='col-sm-4'>
	</div>
	<div class='col-sm-8 circles'>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<?php echo do_shortcode('[wpv-view name="HOME | MUSIC PLAYER | ALBUMS"]'); ?>
			</div>
		</div>
	</div>
</div>
</section>
<section id='tour'>
<div class='row tour-home'>
	<div class="col-sm-6">
	</div>
	<div class="col-sm-6">
	<h1> Tour</h1>
		<?php echo do_shortcode('[wpv-view name="HOME | TOUR EMBED"]'); ?>
	</div>
</div>
</section>
<section id='store'>
<div class="row">
	<div class="col-sm-12">
		<h1>Check Out Our Store</h1>
		<a href="/store/" class="btn btn-click">Click Here</a>
		<img src="banner image bottom">
	</div>
</div>
</section>
