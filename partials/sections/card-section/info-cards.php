<?php 
$cards = $contents[$contents['acf_fc_layout']];
if($cards) : ?>
<section class="background">
	<div class="container-fluid">
		<div class="card-group">
			<?php if(count($cards)):?>
                <?php foreach($cards as $card): ?>
                  
                    <div class="card bg-<?php echo esc_html_e( $card['color'] ); ?>">
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