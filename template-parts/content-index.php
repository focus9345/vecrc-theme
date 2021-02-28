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

	<?php if ( has_post_thumbnail() ) { ?>

	<div class="row">
		<div class="col-sm-6">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					vecrc_posted_on();
					vecrc_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
			<div class="entry-summary">
				<?php 
					if($post->post_excerpt) {
						the_excerpt();
						echo '<a href="'.get_permalink().'" class="read-more"> Read More </a>';
					} else {
						the_excerpt();
					}
				?>
			</div><!-- .entry-summary -->
		</div>
		<div class="col-sm">
			<figure class="home-article-image">
			<?php vecrc_post_thumbnail(); ?>

				<?php if (get_post(get_post_thumbnail_id())->post_excerpt) { 
				// search for if the image has caption added on it ?>
					<figcaption>
						<?php echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt); 
						// displays the image caption ?>
					</figcaption>
				<?php } ?>
			
			</figure>
		</div>
	</div>

	<?php } else { ?>
	   
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					vecrc_posted_on();
					vecrc_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php 
				if($post->post_excerpt) {
					the_excerpt();
					echo '<a href="'.get_permalink().'" class="read-more"> Read More </a>';
				} else {
					the_excerpt();
				}
			?>
		</div><!-- .entry-summary -->
	<?php } ?>

	<footer class="entry-footer">
		<?php vecrc_entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-<?php the_ID(); ?> -->
