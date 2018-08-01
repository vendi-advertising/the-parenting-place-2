<?php 
$slides = $contents[$contents['acf_fc_layout']];
if(!isset($slider_instance)){
	$slider_instance = 0;
}
if(count($slides)) : 
?>

<div class="standard-slider-<?php echo esc_html_e( $slider_instance ); ?>" data-name="standard-slider-<?php echo esc_html_e( $slider_instance ); ?>">
	<?php foreach($slides[0]['slides'] as $slide): ?>
		<div>
			<div>
				<img src="<?php echo esc_html_e( $slide['image']); ?>" alt="" width="300" height="300">
			</div>
			<p>
				<?php echo esc_html_e( $slide['text']); ?>
			</p>
		</div>
	<?php endforeach; ?>
</div>
<div class="customize-tools">
	<ul class="thumbnails" id="customize-thumbnails">
		<li>
			<img src="" alt="" width="600" height="400">
		</li>
		<li>
			<img src="" alt="" width="600" height="400">
		</li>
		<li>
			<img src="" alt="" width="600" height="400">
		</li>
		<li>
			<img src="" alt="" width="600" height="400">
		</li>
		<li>
			<img src="" alt="" width="600" height="400">
		</li>
	</ul>
	<ul class="controls" id="customize-controls">
		<li class="prev">
			<img src="assets/img/angle-left.png" alt="">
		</li>
		<li class="next">
			<img src="assets/img/angle-right.png" alt="">
		</li>
	</ul>
	<div class="playbutton-wrapper">
		<button id="customize-toggle">Pause</button>
	</div>
</div>
<?php $slider_instance++; ?>
<?php endif; ?>