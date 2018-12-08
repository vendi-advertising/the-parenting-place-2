<?php 
$boxes = $contents[$contents['acf_fc_layout']] ?? [];
if(!is_array($boxes)){
    return;
}
if(count($boxes)) : ?>
<section>
    <div class="container">
        <div class="row">
            <?php foreach($boxes as $box): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive" src="<?php echo esc_html_e( $box['image']['url'] ); ?>" alt="">
                    <div class="overlay">
                        <h2><?php echo esc_html_e( $box['title'] ); ?></h2>
                        <p>
                            <a href="<?php echo esc_html_e( $box['link'] ); ?>"><?php echo esc_html_e( $box['link_text'] ); ?></a>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif ?>