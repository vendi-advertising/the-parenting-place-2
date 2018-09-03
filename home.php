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
	<div class="container-fluid">
		<div class="row">
			<?php if ( $default_sidebar_position === 'no' ) : ?>
				<div class="col-md-12 wp-bp-content-width">
			<?php else : ?>
				<div class="col-md-8 wp-bp-content-width">
			<?php endif; ?>
			<section id="primary" class="content-area">
				<main id="main" class="site-main">
					<?php if ( have_posts() ) :
						if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php endif;
					/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							include( dirname(__FILE__) . '/partials/posts/' .  get_post_type() . '.php' );
						endwhile;
						the_posts_navigation();
					else :
						get_template_part( 'partials/posts/', 'none' );
					endif; ?>
					<?php echo paginate_links( ); ?>
				</main><!-- #main -->
			</section><!-- #primary -->
		</div>
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
