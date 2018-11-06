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
		"shadow-hover",
		"post",
    ]
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($extra); ?> >
		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>
		<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<!-- <?php the_parenting_place_2018_posted_on(); ?> -->
			</div>
			<?php
			endif; ?>
		</header>
		<div class="entry-content card-body">
			<?php
			if ( is_single() ) :
				the_content();
			else :
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
			endif;

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
					'after'  => '</div>',
				) );
			?>
		</div>
		
		<a href="<?php echo esc_url( get_permalink() ) ?>"><button type="button" class="btn btn-block btn-default">Read more..</button></a>
		
		<footer class="entry-footer">
			<?php the_parenting_place_2018_entry_footer(); ?>
		</footer>
</article>