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

<aside id="secondary" class="widget-area sidebar-1-area mt-3r card">
	<?php  //DEV ?> <?php echo basename( __FILE__ ); ?>
	<?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside><!-- #secondary -->
