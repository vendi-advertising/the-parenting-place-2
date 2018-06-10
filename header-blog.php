<?php
/**
 * The header for the blog home
 * 
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-parenting-place-2018
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-parenting-place-2018' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
				the_custom_logo();
			?>
		</div><!-- .site-branding -->

		<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#">Navbar</a>
			
				<?php
		
					$args = array(
						'theme_location'  => 'main',
						'depth'	          =>  2,
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarSupportedContent',
						'menu_class'      => 'navbar-nav mr-auto',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					);
					wp_nav_menu($args);
				?>	
			 
			</div>
		</nav>
		<?php 
			if ( is_front_page() && is_home() ) :
		?>
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php
			else :
		?>
		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php
			endif;
			
			$the_parenting_place_2018_description = get_bloginfo( 'description', 'display' );
			
			if ( $the_parenting_place_2018_description || is_customize_preview() ) :
		?>

		<p class="site-description"><?php echo $the_parenting_place_2018_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
