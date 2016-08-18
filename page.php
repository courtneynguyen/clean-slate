<?php get_header();?>
	<div class="container">
		<div role="main" class="row">
			<div class="content">
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post();
				// If we have a page to show, start a loop that will display it
				?>

					<article class="post">
						<h1 class="title"><?php the_title(); // Display the title of the page ?></h1>

						<div class="the-content">
							<?php the_content();
							// This call the main content of the page, the stuff in the main text box while composing.
							// This will wrap everything in p tags
							?>

							<?php wp_link_pages(); // This will display pagination links, if applicable to the page ?>
						</div><!-- the-content -->

					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<article class="post error">
					<h1>Nothing posted yet</h1>
				</article>

			<?php endif; ?>

			<?php dynamic_sidebar('Underneath Base Page Content') ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
