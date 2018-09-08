<?php 
$cards = $contents[$contents['acf_fc_layout']] ?? [];
if(count($cards)) : ?>
<section>
	<div class="container">
        <div class="card-columns">
            <?php foreach($cards as $card): ?>
                <div class="card  shadow info bg-<?php echo esc_html_e( $card['color'] ); ?>">
                    <div class="card-body">
                        <?php if($card['include_image']):?>
                            <img src="<?php echo esc_html_e( $card['image']['url'] ); ?>" alt="<?php echo esc_html_e( $card['title'] ); ?>">
                        <?php endif?>
                        <h4 class="card-title"><?php echo esc_html_e( $card['title'] ) ?></h4>
                        <p class="card-text"><?php echo esc_html_e( $card['main_text'] ) ?></p>
                    </div>
                </div>						               
            <?php endforeach; ?>		
        </div>
	</div>
</section>
<?php endif; ?>