<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_parenting_place_2
 */

?>
<?php
    $extra = [
		"card",
		"shadow-hover",
		"post"
    ]
?>
<section>
	<article id="post-<?php the_ID(); ?>" <?php post_class($extra); ?> >
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<header class="">
				<a href="<?php the_permalink(); ?>">
					<?php
						the_title( '<h2 class="card-title">', '</h2>' );
					?>
				</a>
			</header>
			<div class="card-body">
				<?php
				if ( is_single() ) :
					the_content();
				else :
					the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'the_parenting_place_2' ) );
				endif;?>
	
				<div class="pagination">
					<nav>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the_parenting_place_2' ),
								'after'  => '</div>',
							) );
						?>
					</nav>
				</div>
			</div>
			<footer class="entry-footer">
				<?php the_parenting_place_2_entry_footer(); ?>
			</footer>
	</article>
</section>