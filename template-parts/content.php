<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package VECRC
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				vecrc_posted_on();
				vecrc_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
   <?php
      if ( has_post_thumbnail() ) : 
      ?>
      <figure class="article-image float-right">
	     <?php vecrc_post_thumbnail(); ?>

            <?php if (get_post(get_post_thumbnail_id())->post_excerpt) { 
            // search for if the image has caption added on it ?>
                <figcaption>
                    <?php echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt); 
                     // displays the image caption ?>
                </figcaption>
            <?php } ?>
         
      </figure>
   <?php endif; ?>
   

   
	<div class="entry-content">
		<?php
       // changed the_content to the_excerpt
	   the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading <span class="screen-reader-text"> "%s"</span>', 'vecrc' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vecrc' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php vecrc_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
