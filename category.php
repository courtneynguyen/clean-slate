<?php
/**
 * The template for displaying Category
 */
get_header(); ?>

    <section class="content inside">
        <div class="wrap">
            <div class="left-part">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'posts'); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <div class="right-part">
                <?php dynamic_sidebar('page'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
