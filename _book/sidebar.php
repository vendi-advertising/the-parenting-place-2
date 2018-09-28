<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-parenting-place-2018
 */

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<!-- <?php  //DEV ?> <?php echo basename( __FILE__ ); ?> -->

	<div class="card sidebar px-5" id="sidebar" role="navigation">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</div>

</aside><!-- #secondary -->



