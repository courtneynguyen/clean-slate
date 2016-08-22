<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<div class="hero" role="banner">
	<div class="hero--msg"><span>>  </span>Hello, World!2</div>
</div>
<div class="container">
	<div class="row">
		<div role="main" class="">
			<h1>404<h1>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
