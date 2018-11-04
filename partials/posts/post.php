<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_parenting_place_2018
 */

?>
<?php
    $extra = [
		"card",
		"shadow-hover"
    ]
?>
<section>
	<article id="post-<?php the_ID(); ?>" <?php post_class($extra); ?> >
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<header class="">
				<?php
	
				the_title( '<h2 class="card-title">', '</h2>' );
	
				if ( 'post' === get_post_type() ) : ?>
				<?php
				endif; ?>
			</header>
			<div class="card-body">
				<?php
				if ( is_single() ) :
					the_content();
				else :
					the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
				endif;?>
	
				<div class="pagination">
					<nav>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
								'after'  => '</div>',
							) );
						?>
					</nav>
				</div>
			</div>
			<footer class="entry-footer">
				<?php the_parenting_place_2018_entry_footer(); ?>
			</footer>
	</article>
</section>