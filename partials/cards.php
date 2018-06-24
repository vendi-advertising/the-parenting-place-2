<?php 
$cards = $value;
if($cards) : ?>
<section class="background">
	<div class="container-fluid">
		<div class="card-group">
			<?php if(count($cards)):?>
				<?php foreach($cards as $card): ?>
					<!-- <?php var_dump($key);var_dump($value); ?> -->
					<div class="card bg-<?php echo esc_html_e( $button['card_color'] ); ?>">
						<div class="card-body">
							<h4 class="card-title"><?php echo esc_html_e( $card['title'] ) ?></h4>
							<p class="card-text"><?php echo esc_html_e( $card['main_text'] ) ?></p>
						</div>
					</div>						
				<?php endforeach; ?>		
			<?php endif; ?>	
		</div>
	</div>
</section>
<?php endif; ?>