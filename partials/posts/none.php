<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the_parenting_place
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
			</div>
			<header class="">
				Looks like there are no results for this search...
			</header>
			<div class="card-body">
				<div class="pagination">
					<nav>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the_parenting_place' ),
								'after'  => '</div>',
							) );
						?>
					</nav>
				</div>
			</div>
			<footer class="entry-footer">
				<?php the_parenting_place_entry_footer(); ?>
			</footer>
	</article>
</section>