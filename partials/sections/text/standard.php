<?php
    $text = $contents[$contents['acf_fc_layout']] ?? [];
    if(count($text) > 0) :
?>
    <?php foreach($text as $box): ?>
        <section class="bar bg-<?php echo esc_html_e( $box['color'] ); ?> no-mb color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo esc_html_e( $box['title'] ); ?></h1>
                        <p class="lead mb-0">
                            <?php echo esc_html_e( $box['main_text'] ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach?>
<?php endif; ?>