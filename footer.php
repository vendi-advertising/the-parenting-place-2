
		<footer id="footer" class="bg-dark page-footer pt-4">
			<div class="container-fluid text-center text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3">
					<div class="footer-content">
						<h5><?php echo esc_attr(get_theme_mod ('footer_title'))?></h5>
						<p class="text-left"><?php echo esc_attr(get_theme_mod( 'footer_textbox', '' )); ?></p>
						<p class="text-left"><?php echo esc_attr(get_theme_mod( 'footer_textarea', '' )); ?></p>		
					</div>
				</div>
				<div class="col-md-3 mb-md-0 mb-3 footer-menu left-menu">
					<?php
						$left_args = array(
							'menu'            	=> 'footer-left',
							'theme_location'  	=> 'footer-left',
						);
						wp_nav_menu($left_args);
 					?>
				</div>
				<div class="col-md-3 mb-md-0 mb-3 footer-menu right-right">
					<?php
						$right_args = array(
							'menu' 				=> 'footer-right',
							'theme_location' 	=> 'footer-right',
						);
						wp_nav_menu($right_args);
 					?>
				</div>
			</div>
			</div>
			<div class="social-info row">
				<div class="col-md-6 mx-2">
					<ul class="list-inline social">	
						<?php 
							$facebook =  esc_url(get_theme_mod ('facebook_textbox'));
							$twitter = esc_url(get_theme_mod('twitter_textbox'));
							$googleplus = esc_url(get_theme_mod('googleplus_textbox'));
							$youtube = esc_url(get_theme_mod('youtube_textbox'));
							$linkedin = esc_url(get_theme_mod('linkedin_textbox'));
							$pinterest = esc_url(get_theme_mod('pinterest_textbox'));
							
							if($facebook){?>
								<li><a href="<?php echo $facebook;?>"><i class="fab fa-facebook-square fa-2x"></i></a></li>
							<?php }
							if($twitter){?>
								<li><a href="<?php echo $twitter;?>"><i class="fab fa-twitter fa-2x"></i></a></li>
							<?php }
							if($googleplus) {?>
								<li><a href="<?php echo $googleplus;?>"><i class="fab fa-google-plus fa-2x"></i></a></li>
							<?php }
							if($youtube){?>
								<li><a href="<?php echo $youtube;?>"><i class="fab fa-youtube-play fa-2x"></i></a></li>
							<?php }
							if($linkedin){?>
								<li><a href="<?php echo $linkedin;?>"><i class="fab fa-linkedin fa-2x"></i></a></li>
							<?php }
							if($pinterest){?>
								<li><a href="<?php echo $pinterest;?>"><i class="fab fa-pinterest fa-2x"></i></a></li>
							<?php }?>	
					</ul>
				</div>
			</div>
			<div class="container site-info">
				<div class="row justify-content-center">
					© <?php echo date("Y"); ?> Copyright 
					<a href=""><span> &nbsp <?php echo get_bloginfo( 'name' ); ?></span></a>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
