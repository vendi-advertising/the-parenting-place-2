
		<footer id="footer" class="bg-dark page-footer pt-4">
			<div class="container-fluid text-center text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3">
				<h5 class="text-uppercase"><?php esc_url(get_theme_mod ('footer_title'))?></h5>
					<?php 
                    	$show_social_in_footer = get_theme_mod('socialicon_display' );
                    ?>   
			        <div class="pull-left">
				            <ul class="list-inline social">
	                           <li><i class="fab fa-facebook-square fa-3x"></i></li>		
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
					<a href=""><span> &nbsp <?php echo get_bloginfo( 'name' ); ?></span></a>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
