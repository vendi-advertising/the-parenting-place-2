
<section class="features-3 text-center">
	<div class="container">
		<div class="row justify-center">
			<div class="col-md-5 text-center text-md-left" >
				<h2><?php echo esc_html_e( $content['title'] ); ?></h2>
                <p class="mt-2 mb-2">
                    <?php echo esc_html_e( $content['main_text'] ); ?>
                </p>
			</div>	
			<div class="col-md-6 offset-md-1 text-center">
				<img class="mt-4 mb-4 img-fluid" src="<?php echo esc_html_e( $content['image']['url'] ); ?>" >
			</div>
		</div>
	</div>
</section>