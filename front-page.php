<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
<div class="hero" role="banner">
	<div class="hero--msg"><span>>  </span>Hello, World!</div>
</div>
<div class="container">
	<div class="row">
		<div id="content" role="main" class="col-md-offset-1 col-md-10 col-lg-8 col-lg-offset-2">
			<h1>Technology Enthusiast</h1>
			<p>I program with a passion for best practices and abiding by specification. The Internet should be an uncensored, unadulterated source of information that everyone should have the ability to access, freely. Since the conception of the (INTERNET) inside the military, it was realized that a pool for all the information would become invaluable. This remains true today.</p>
			<p>My goals are to present information in a meaningful and tactiful manner that make it available to everyone. To create a digital world where information has semantic meaning and can be parsed for accurate information to be used in the appropriate ways the author intended it to be used for.</p>
			<p>To create works of art that will inspire others to do the same.</p>
			<p>To incite wonderlust and help others discover why, and what it would mean to have an accessible, accurate web. </p>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
