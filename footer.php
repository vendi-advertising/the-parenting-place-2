
		<footer class="bg-dark page-footer pt-4">
			<div class="container-fluid text-center text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3">
				<h5 class="text-uppercase">Footer Content</h5>
				<p>Here you can use rows and columns here to organize your footer content.</p>
				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Links</h5>
					<?php
						$args = array(
							'theme_location' => 'footer',
						);
						wp_nav_menu($args);
 					?>
				</div>
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Links</h5>
					<?php
						$args = array(
							'theme_location' => 'footer',
						);
						wp_nav_menu($args);
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
