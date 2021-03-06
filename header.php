<?php
/**
 * The header
 * 
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the_parenting_place_2
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the_parenting_place_2' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="header-social-links">
			</div>
			<div class="nav-menu-wrapper">
				<div class="main-menu-wrapper">
					<nav class="navbar navbar-expand-md navbar-dark" role="navigation">
							<!-- Brand and toggle get grouped for better mobile display -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<a class="navbar-brand" href="#">
								<style>
									.custom-logo {
										width: <?php echo(esc_html_e(get_theme_mod('icon_size'))).'px';?>;
									}
								</style>
								<div class="site-branding mb-3">
									<?php
										the_custom_logo();
									?>
								</div><!-- .site-branding -->
							</a>
						
							<?php
					
								$args = array(
									'menu'            	=> 'main',
									'theme_location'  	=> 'main',
									'depth'	          	=>  2,
									'container'       	=> 'div',
									'container_class' 	=> 'collapse navbar-collapse',
									'container_id'    	=> 'main-navigation',
									'menu_class'      	=> 'navbar-nav',
									'fallback_cb'     	=> 'WP_Bootstrap_Navwalker::fallback',
									'walker'          	=> new WP_Bootstrap_Navwalker,
								);

								wp_nav_menu($args);

							?>	
						<div class="col-md-4 pull-right">
							<!-- search -->
							<div class="searchbar">
								<?php get_search_form(); ?>
							</div>
						</div>
					</nav>
				</div> 
				<div class="sub-menu-wrapper">
					<nav class="navbar navbar-expand-md" role="navigation">
						<?php
							$sub_menu_args = array(
								'menu'            	=> 'main',
								'theme_location'  	=> 'main',
								'sub_menu'			=> true,
								'conatiner'         => 'div',
								'container_id'    	=> 'sub-navigation',
								'menu_class'      	=> 'navbar-nav',
								'fallback_cb'     	=> 'WP_Bootstrap_Navwalker::fallback',
								'walker'          	=> new WP_Bootstrap_Navwalker,
							);
							wp_nav_menu($sub_menu_args);
						?>
					</nav>
				</div>
			</div>
		</header>
		<div id="content" class="site-content container-fluid px-0">
