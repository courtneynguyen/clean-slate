
<?php get_header(); ?>
<article id="content" class="container">
	<header>
		<h1 class="center-ltr"><?php the_title(); ?></h1>
	</header>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page design-item'); ?>>
			<?php /* edit_post_link('<small>Edit this entry</small>','',''); */ ?>
			<?php /*if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ /* echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } */ ?>
			<?php the_content(); ?>
			<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
		</div>
	<?php endwhile; ?>
</article>
<?php get_footer(); ?>
