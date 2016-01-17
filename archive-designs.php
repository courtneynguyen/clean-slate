<?php get_header(); ?>
<div class="container">
	<div id="content" class="designs row">
		<header>
			<h1 class="center-ltr"><?php wp_title(''); ?></h1>
		</header>
		<div class="col-xs-12">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail_size' ); $url = $thumb['0']; ?>
				<article class="col-md-4 col-sm-6 clearfix">
					<h5><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php edit_post_link('Edit this entry','',''); ?></h5>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark" <?php echo "style=\"background-image:url('$url');\"" ?> class="index-thumbnail <?php echo $post->ID+'' ?>">

						<?php /*if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ /*echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } */ ?>
					</a>
				</article>
			<?php endwhile; /* end loop */ ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
