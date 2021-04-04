<?php
/**
 * Template Name: Post Page with sidebar
 * @package VECRC
 */

get_header();
?>
<div class="page-top" role="presentation"></div>
<main class="container">
<div class="row justify-content-md-center">
    <section class="col-md-7">
    <?php
        if ( have_posts() ) :
            if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) :
                
                the_post();
                /*
                * Include the Post-Type-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                */
                //get_template_part( 'template-parts/content', get_post_type() );
                get_template_part( 'template-parts/content', 'index' );
            endwhile;
            the_posts_navigation();
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </section>
    <section class="col-md-3 offset-md-1">
        <?php get_sidebar(); ?>
    </section>
</div>
</main>

<?php
get_footer();