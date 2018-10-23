
		<footer id="footer" class="bg-dark page-footer pt-4">
			<div class="container-fluid text-center text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3">
				<h5 class="text-uppercase"><?php esc_url(get_theme_mod ('footer_title'))?></h5>
				<p><?php esc_url(get_theme_mod ('footer_text'))?></p>
					<?php 
                    	$show_social_in_footer = get_theme_mod('socialicon_display' );
                    ?>   
			        <div class="pull-left">
				            <ul class="list-inline social">
	                            <?php 
									$facebook =  esc_url(get_theme_mod ('facebook_textbox'));
									$twitter = esc_url(get_theme_mod('twitter_textbox'));
									$googleplus = esc_url(get_theme_mod('googleplus_textbox'));
									$youtube = esc_url(get_theme_mod('youtube_textbox'));
									$linkedin = esc_url(get_theme_mod('linkedin_textbox'));
									$pinterest = esc_url(get_theme_mod('pinterest_textbox'));
									if($facebook){?>
									<li><a href="<?php echo $facebook;?>"><i class="fa fa-facebook"></i></a></li>
									<?php }
									if($twitter){?>
									<li><a href="<?php echo $twitter;?>"><i class="fa fa-twitter"></i></a></li>
									<?php }
									if($googleplus) {?>
									<li><a href="<?php echo $googleplus;?>"><i class="fa fa-google-plus"></i></a></li>
									<?php }
									if($youtube){?>
									<li><a href="<?php echo $youtube;?>"><i class="fa fa-youtube-play"></i></a></li>
									<?php }
									if($linkedin){?>
									<li><a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
									<?php }
									if($pinterest){?>
									<li><a href="<?php echo $pinterest;?>"><i class="fa fa-pinterest"></i></a></li>
									<?php }?>
                        	</ul>
					</div>
				<?php ?> 
				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="col-md-3 mb-md-0 mb-3">
					<?php
						$left_args = array(
							'menu'            	=> 'footer-left',
							'theme_location'  	=> 'footer-left',
						);
						wp_nav_menu($left_args);
 					?>
				</div>
				<div class="col-md-3 mb-md-0 mb-3">
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
			<div class="container site-info py-3">
				<div class="row justify-content-center">
					© <?php echo date("Y"); ?> Copyright 
					<a href="https://mdbootstrap.com/bootstrap-tutorial/"><span> &nbsp <?php echo get_bloginfo( 'name' ); ?></span></a>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
