<?php
/**
 * Template part for displaying post content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-parenting-place-2018
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a/ href="' . get_permalink(  ) . ' ">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php the_parenting_place_2018_post_thumbnail(); ?>
	
	<div class="entry-content">
		<?php
		    the_excerpt();
		    wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-parenting-place-2018' ),
                'after'  => '</div>',
            ) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'the-parenting-place-2018' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->