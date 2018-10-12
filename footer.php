<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-parenting-place-2018
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid w-100 bg-dark text-light py-3">
		<nav id="site-navigation" class="main-navigation">
			<?php
				$args = array(
					'theme_location' => 'footer',
				);
				wp_nav_menu($args);
			?>
		</nav><!-- #site-navigation -->
		<div class="site-info">
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'the-parenting-place-2018' ), 'the-parenting-place-2018', '<a href="https://adamharpur.com">Adam Harpur</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
