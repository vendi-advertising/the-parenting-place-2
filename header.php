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
		
		<nav class="shadow fixed-nav navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#">
					<div class="site-branding">
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
						'menu_class'      => 'navbar-nav mr-auto my-1 p-4',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker,
					);
					wp_nav_menu($args);
				?>	
			 
			</div>
			<!-- <style>
					.search-form .form-group {
						float: right !important;
						transition: all 0.35s, border-radius 0s;
						width: 32px;
						height: 32px;
						background-color: #fff;
						box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
						border-radius: 25px;
						border: 1px solid #ccc;
						}
						.search-form .form-group input.form-control {
						padding-right: 20px;
						border: 0 none;
						background: transparent;
						box-shadow: none;
						display:block;
						}
						.search-form .form-group input.form-control::-webkit-input-placeholder {
						display: none;
						}
						.search-form .form-group input.form-control:-moz-placeholder {

						display: none;
						}
						.search-form .form-group input.form-control::-moz-placeholder {
					
						display: none;
						}
						.search-form .form-group input.form-control:-ms-input-placeholder {
						display: none;
						}
						.search-form .form-group:hover,
						.search-form .form-group.hover {
						width: 100%;
						border-radius: 4px 25px 25px 4px;
						}
						.search-form .form-group span.form-control-feedback {
						position: absolute;
						top: -1px;
						right: -2px;
						z-index: 2;
						display: block;
						width: 34px;
						height: 34px;
						line-height: 34px;
						text-align: center;
						color: #3596e0;
						left: initial;
						font-size: 14px;
					} 
			</style> -->
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
	</header><!-- #masthead -->

	<div id="content" class="site-content">
