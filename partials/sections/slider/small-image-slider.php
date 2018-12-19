<?php 
$slides = $contents ?? [];
if(!isset($small_slider_instance)){
	$small_slider_instance = 0;
}
if(count($slides)) : 
?>
<section>
	<div class="container">
		<div class="row">
			<div class="small-slider-<?php echo esc_html_e( $small_slider_instance ); ?>" data-name="small-slider-<?php echo esc_html_e( $small_slider_instance ); ?>">
				<?php foreach($slides['slides'] as $slide): ?>
			
						<div class="card shadow">
							<a href="<?php echo esc_html_e( $slide['link'] ); ?>">
								<div class="card-body">
									<img width="300" height="200" src="<?php echo esc_html_e( $slide['image']); ?>" alt="slider image">
								</div>
								<p class="text-center">
									<?php echo esc_html_e( $slide['text']); ?>
								</p>
							</a>
						</div>
				
				<?php endforeach; ?>
			</div>
			<div class="controls-wrapper">
				<div class="customize-tools">
					<ul class="controls" id="small-customize-controls-<?php echo esc_html_e( $small_slider_instance ); ?>">
						<li class="prev">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/angle-left.png" alt="">
						</li>
						<li class="next">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/angle-right.png" alt="">
						</li>
					</ul>
					<div class="playbutton-wrapper">
						<button id="small-customize-toggle-<?php echo esc_html_e( $small_slider_instance ); ?>">Pause</button>
					</div>
				</div>
			</div>
			<?php $small_slider_instance++; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
