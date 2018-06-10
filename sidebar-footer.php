<?php
/**
 * The sidebar containing the footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-parenting-place-2018
 */

if ( ! is_active_sidebar( 'footer-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area sidebar-1-area mt-3r card">
	<?php dynamic_sidebar( 'footer-sidebar' ); ?>

</aside><!-- #secondary -->
