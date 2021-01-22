<?php
/**
 * @package VECRC
 */

get_header();
?>

<main class="container">
<div class="row">
    <section class="col-md-6">
    <?php if ( have_posts() ) : ?>

        <?php
        /* Start the Loop */
        while ( have_posts() ) :
            the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/content', get_post_type() );

        endwhile;

        the_posts_navigation();

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>
    </section>
    <section class="col-md-4">
        <?php get_sidebar(); ?>
    </section>
</div>
</main>

<?php
get_footer();