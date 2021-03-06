<?php get_header(); ?>
    <section class="content inside">
        <div class="wrap">
            <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'avrora' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <div class="left-part">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('content', 'posts'); ?>
                <?php endwhile; // end of the loop. ?>
            </div>
            <div class="right-part">
                <?php dynamic_sidebar('blog'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
