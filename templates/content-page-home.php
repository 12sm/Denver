<section>
<div class="row home-about">
	<div class='col-sm-6'>
		<div class="about-imgs-container">
			<img src="/wp-content/themes/denver/assets/img/trumpet.png" class='about-trumpet'>
			<img src="/wp-content/themes/denver/assets/img/guitar.png" class='about-guitar'>
			<img src="/wp-content/themes/denver/assets/img/denver.png" class='about-denver'>
		</div>
	</div>
	<div class="col-sm-6">
	<h1>Who are We?</h1>
		<?php echo do_shortcode('[about]'); ?>
		<a href="/about/" class="btn btn-about">Click to Find Out More </a>
	</div>
</div>
</section>
<section>
<div class="row home-news">
		<?php echo do_shortcode('[wpv-view name="HOME | NEWS"]'); ?>
</div>
</section>
<section>
<div class='row music-player'>
	<div class='col-sm-6'>
	</div>
	<div class='col-sm-6'>
		<?php echo do_shortcode('[wpv-view name="HOME | MUSIC PLAYER | ALBUMS"]'); ?>
	</div>
</div>
</section>
<section>
<div class='row tour-home'>
	<div class="col-sm-6">
	</div>
	<div class="col-sm-6">
	<h1> Tour</h1>
		<?php echo do_shortcode('[wpv-view name="HOME | TOUR EMBED"]'); ?>
	</div>
</div>
</section>
<section>
<div class="row">
	<div class="col-sm-12">
		<h1>Check Out Our Store</h1>
		<a href="/store/" class="btn btn-click">Click Here</a>
		<img src="banner image bottom">
	</div>
</div>
</section>
