<?php
/**
 * @package VECRC
 */

get_header();
?>
<div class="page-top" role="presentation"></div>
<main class="container">
<div class="row justify-content-md-center">
    <section class="col-md-7">
    <?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
    </section>
    <section class="col-md-3 offset-md-1">
        <?php get_sidebar(); ?>
    </section>
</div>
</main>

<?php
get_footer();