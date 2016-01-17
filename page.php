<?php
/**
 * The template for displaying any single page.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<div id="primary" class="container-fluid">
		<div id="content" role="main" class="row">
			<div class="col-md-offset-2 col-lg-7 col-lg-offset-3 col-xl-6 col-xl-offset-3">
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
