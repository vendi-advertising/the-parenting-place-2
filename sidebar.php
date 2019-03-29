<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the_parenting_place_2
 */

if ( ! is_active_sidebar( 'main-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<!-- <?php  //DEV ?> <?php echo basename( __FILE__ ); ?> -->
	<!-- <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
					<i class="glyphicon glyphicon-align-left"></i>
					<span>Toggle Sidebar</span>
                </button>-->
	<div id="sidebar-content" class="card sidebar" id="sidebar" role="navigation">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>
	</div>

</aside><!-- #secondary -->



