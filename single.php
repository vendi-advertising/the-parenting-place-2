<?php
/**
 * The template for displaying a single blog post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package the-parenting-place-2.0
 */

get_header();
$handler = new IntersectionPluginHandler\ACF();
$handler->get_section('banner', 'base');
?>
<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
<div class="container-fluid">
	<div class="row">
	<?php if ( $default_sidebar_position === 'no' ) : ?>
		<div class="col-md-12 wp-bp-content-width">
	<?php else : ?>
		<div class="col-md-9 wp-bp-content-width">
	<?php endif; ?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
			<?php
				while ( have_posts() ) :
					the_post();
					$path = dirname(__FILE__, 1) . '/partials/posts/' .  get_post_type(get_post()) . '.php';
					include($path);
			?>
			<?php the_post_navigation();?>
			<?php
					if ( comments_open() || get_comments_number() && false) :
						comments_template();
					endif;
				endwhile;
			?>
			</main>
		</div>
	</div>
		<?php if ( $default_sidebar_position != 'no' ) : ?>
			<?php if ( $default_sidebar_position === 'right' ) : ?>
				<div class="col-md-3 wp-bp-sidebar-width">
			<?php elseif ( $default_sidebar_position === 'left' ) : ?>
				<div class="col-md-4 order-md-first wp-bp-sidebar-width">
			<?php endif; ?>
					<?php get_sidebar(); ?>
				</div>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer();