<?php
/**
 * The header
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
			<div class="nav-menu-wrapper">
				<nav class="navbar navbar-expand-md" role="navigation">
						<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<a class="navbar-brand" href="#">
							<div class="site-branding mb-3">
								<?php
									the_custom_logo();
								?>
							</div><!-- .site-branding -->
						</a>
					
						<?php
				
							$args = array(
								'menu'            => 'main',
								'theme_location'  => 'main',
								'depth'	          =>  6,
								'container'       => 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'main-navigation',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker,
							);
							wp_nav_menu($args);
						?>	
					<div class="col-md-4 col-md-offset-3">
						<form action="" class="search-form">
							<div class="form-group has-feedback">
								<label for="search" class="sr-only">Search</label>
								<input type="text" class="form-control" name="search" id="search" placeholder="Search....">
								<span class="glyphicon glyphicon-search form-control-feedback"></span>
							</div>
						</form>
					</div>
				</nav>
			
			</div>
		</header><!-- #masthead -->
	<div id="content" class="site-content">
