<?php
/**
 * The main template file for the blog home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-parenting-place-2018
 */

get_header('blog');
?>
	<?php
		$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
	?>
	<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>
		<?php if ( $default_sidebar_position != 'no' ) : ?>

			<?php if ( $default_sidebar_position === 'right' ) : ?>

				<div class="col-md-4 wp-bp-sidebar-width">

			<?php elseif ( $default_sidebar_position === 'left' ) : ?>

				<div class="col-md-4 order-md-first wp-bp-sidebar-width">

			<?php endif; ?>
		
			<?php get_sidebar(); ?>	
		<?php endif; ?>
		</div> <!-- #row -->
	</div><!-- #container -->
<?php
get_footer();
